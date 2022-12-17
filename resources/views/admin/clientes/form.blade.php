@extends('layouts.admin')
@section('title', 'Cliente')

@section('content')
<div class="container">
    <p class="message-feedback" style='display:none'></p>


   <div class='box'>
        <div class="box-header">
            <h2 class="title"><?php echo @($cliente) ? $cliente->name : 'Novo Cliente'; ?></h2>
            <div class="buttons">
                <input type="hidden" class="url-reload" value="/admin/clientes/form?id=">
                <?php if($cliente) { ?>
                <form>
                    @csrf
                    <input type="hidden" name='id' class='id' value="<?=$cliente->id?>">
                    <input type="hidden" class="url-remove" value="/admin/clientes/remove">
                    <input type="hidden" class="url-reload" value="/admin/clientes/form?id=">
                    <a href="javascript:void(0)" class="remove-button btn-remover">
                        <i class="fa fa-trash" aria-hidden="true"></i>
                       Remover Cliente
                    </a>
                </form>
                <?php } ?>
                <a href="/admin/clientes/" class="">
                    <i class="fa fa-arrow-left" aria-hidden="true"></i>
                   Voltar para Listagem
                </a>

                <a href="javascript:void(0)" class="enviar">
                    <i class="fa fa-<?php echo @($cliente) ? 'floppy-o': 'plus' ?>" aria-hidden="true"></i>
                   <?php echo @($cliente) ? 'Salvar Edição' : 'Cadastrar Cliente'; ?>
                </a>
            </div>
        </div>
        <div class="box-body">
            <form class='form' id="formSaveClient" action="{{ $cliente ? route('client.update') : route('client.save') }}">
                @csrf
                <input type="hidden" id='id' value="<?php echo @($cliente) ? $cliente->id : '' ?>">
                <input type="hidden" class="url" value="/admin/clientes/sendform">

                <div class='row'>
                    <div class='form-group' style='width: 100%'>
                        <label for="titulo">Nome:</label>
                        <input type="text" id='titulo' class='data-form' name='titulo' placeholder="Digite o nome do clientes" value="<?php echo @($cliente) ? $cliente->name : '';?>">
                    </div>
                </div>

                <div class='row'>
                    <div class='form-group'  style='width: 100% !important'>
                        <label>Logotipo:</label>
                        <input type="file" accept=".jpeg, .jpg, .png" hidden id='imagem' class='data-form input_upload' name='imagem'>
                        <label for="imagem" class='preview <?php echo @($cliente && $cliente->imagem != '') ? 'preview-active' : '' ?>'>
                            @if($cliente)
                            <img src="{{ asset('storage/clientes/' . $cliente->imagem) }}" alt="">
                            @else
                            <img src="" alt="">
                            @endif
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
    .link-clientes {
        border-bottom: 1px solid #173979;
        margin-bottom: 0.5em
    }
    #body-admin main .container .form-group .preview
    {
        height: 11.4em !important
    }
        #body-admin main .container .box {
        height: 62% !important;
        margin-top: 2em !important;
    }
    #body-admin main .container {
        justify-content: flex-start !important
    }
    #body-admin main .container .message-feedback, #body-admin main .container .message-feedback-session {
        margin-top: 1em !important;
    }

</style>
