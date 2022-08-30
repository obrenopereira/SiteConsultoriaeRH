@extends('layouts.admin')
@section('title', 'Empresas')

@section('content')
<div class="container">
    <p class="message-feedback" style='display:none'></p>
   <div class='box'>
        <div class="box-header">
            <h2 class="title"><?php echo @($empresa) ? $empresa->name : 'Nova Empresa'; ?></h2>
            <div class="buttons">
                <input type="hidden" class="url-reload" value="/admin/empresas/form?id=">
                <?php if($empresa) { ?>
                <form>
                    @csrf
                    <input type="hidden" name='id' class='id' value="<?=$empresa->id?>">
                    <input type="hidden" class="url-remove" value="/admin/empresas/remove">
                    <input type="hidden" class="url-reload" value="/admin/empresas/form?id=">
                    <a href="javascript:void(0)" class="remove-button btn-remover">
                        <i class="fa fa-trash" aria-hidden="true"></i>
                       Remover Empresa
                    </a>
                </form>
                <?php } ?>
                <a href="/admin/empresas/" class="">
                    <i class="fa fa-arrow-left" aria-hidden="true"></i>
                   Voltar para Listagem
                </a>
                <a href="javascript:void(0)" class="enviar">
                    <i class="fa fa-<?php echo @($empresa) ? 'floppy-o': 'plus' ?>" aria-hidden="true"></i>
                   <?php echo @($empresa) ? 'Salvar Edição' : 'Cadastrar Empresa'; ?>
                </a>
            </div>
        </div>
        <div class="box-body">
            <form class='form'>
                @csrf
                <input type="hidden" id='id' value="<?php echo @($empresa) ? $empresa->id : '' ?>">
                <input type="hidden" class="url" value="/admin/empresas/sendform">

                <div class='row'>
                    <div class='form-group' style='width: 46% !important'>
                        <label for="titulo">Título:</label>
                        <input type="text" id='titulo' class='data-form' name='titulo' placeholder="Digite o nome da empresa" value="<?php echo @($empresa) ? $empresa->name : '';?>">
                    </div>
                </div>
                <div class='row'>
                    <div class='form-group' style='width: 46% !important'>
                        <label for="email">E-mail:</label>
                        <input type="text" id='email' class='data-form' name='email' placeholder="Digite o email da empresa" value="<?php echo @($empresa) ? $empresa->email : '';?>">
                    </div>
                </div>
                <div class='row' style='justify-content: flex-start'>
                    <div class='form-group'>
                        <label>Imagem principal:</label>
                        <input type="file" accept=".jpeg, .jpg, .png" hidden id='imagem_principal' class='data-form input_upload' name='imagem_principal'>
                        <label for="imagem_principal" class='preview <?php echo @($empresa && $empresa->logotipo != '') ? 'preview-active' : '' ?>'>
                            <img src="<?php echo @($empresa) ?  asset('empresas/'.$empresa->logotipo) : '' ?>" alt="">
                            <button type='button'>Enviar imagem</button>
                            <span class='gradient'>
                                <i class="fa fa-pencil" aria-hidden="true"></i>
                            </span>
                        </label>
                    </div>
                    <div class='form-group' style='margin-left: 2em'>
                        <label>Imagem Secundaria:</label>
                        <input type="file" hidden accept=".jpeg, .jpg, .png" id='imagem_secundaria' class='data-form input_upload' name='imagem_secundaria'>
                        <label  for="imagem_secundaria" class='preview <?php echo @($empresa && $empresa->thumbnail != '') ? 'preview-active' : '' ?>' style='width: 9em'>
                            <img style='width: 56%' src="<?php echo @($empresa) ?  asset('empresas/'.$empresa->thumbnail) : '' ?>" alt="">
                            <button type='button'>Enviar imagem</button>
                            <span class='gradient'>
                                <i class="fa fa-pencil" aria-hidden="true"></i>
                            </span>
                        </label>
                    </div>
                </div>
            </form>
        </div>
   </div>
</div>
@endsection


<style>
    .link-empresas {
        border-bottom: 1px solid #173979;
        margin-bottom: 0.5em
    }
    #body-admin main .container .box {
        height: 63% !important;
        margin-top: 2em !important;
    }
    #body-admin main .container .form-group {
        width: 28% !important
    }
    #body-admin main .container {
        justify-content: flex-start !important
    }
    #body-admin main .container .message-feedback, #body-admin main .container .message-feedback-session {
        margin-top: 1em !important;
    }
</style>
