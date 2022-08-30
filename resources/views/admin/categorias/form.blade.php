@extends('layouts.admin')
@section('title', 'Categorias')

@section('content')
<div class="container">
    <p class="message-feedback" style='display:none'></p>
   <div class='box'>
        <div class="box-header">
            <h2 class="title"><?php echo @($categoria) ? $categoria->name : 'Nova Categoria'; ?></h2>
            <div class="buttons">
                <input type="hidden" class="url-reload" value="/admin/categorias/form?id=">
                <?php if($categoria) { ?>
                <form>
                    @csrf
                    <input type="hidden" name='id' class='id' value="<?=$categoria->id?>">
                    <input type="hidden" class="url-remove" value="/admin/categorias/remove">
                    <input type="hidden" class="url-reload" value="/admin/categorias/form?id=">
                    <a href="javascript:void(0)" class="remove-button btn-remover">
                        <i class="fa fa-trash" aria-hidden="true"></i>
                       Remover Categoria
                    </a>
                </form>
                <?php } ?>
                <a href="/admin/categorias/" class="">
                    <i class="fa fa-arrow-left" aria-hidden="true"></i>
                   Voltar para Listagem
                </a>
                <a href="javascript:void(0)" class="enviar">
                    <i class="fa fa-<?php echo @($categoria) ? 'floppy-o': 'plus' ?>" aria-hidden="true"></i>
                   <?php echo @($categoria) ? 'Salvar Edição' : 'Cadastrar Categoria'; ?>
                </a>
            </div>
        </div>
        <div class="box-body">
            <form class='form'>
                @csrf
                <input type="hidden" id='id' value="<?php echo @($categoria) ? $categoria->id : '' ?>">
                <input type="hidden" class="url" value="/admin/categorias/sendform">
            
                <div class='row'>
                    <div class='form-group'>
                        <label for="titulo">Título:</label>
                        <input type="text" id='titulo' class='data-form' name='titulo' placeholder="Digite o nome da categoria" value="<?php echo @($categoria) ? $categoria->name : '';?>">
                    </div>
                </div>
            </form>
        </div>
   </div>
</div>
@endsection


<style>
    .link-categorias {
        border-bottom: 1px solid #173979;
        margin-bottom: 0.5em
    }
    #body-admin main .container .box {
        height: 28% !important;
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