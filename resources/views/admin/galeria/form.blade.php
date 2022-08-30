@extends('layouts.admin')
@section('title', 'Galeria')

@section('content')
<div class="container">
    <p class="message-feedback" style='display:none'></p>
   <div class='box'>
        <div class="box-header">
            <h2 class="title"><?php echo @($galeria) ? $galeria->name : 'Nova imagem'; ?></h2>
            <div class="buttons">
                <input type="hidden" class="url-reload" value="/admin/galeria/form?id=">
                <?php if($galeria) { ?>
                <form>
                    @csrf
                    <input type="hidden" name='id' class='id' value="<?=$galeria->id?>">
                    <input type="hidden" class="url-remove" value="/admin/galeria/remove">
                    <input type="hidden" class="url-reload" value="/admin/galeria/form?id=">
                    <a href="javascript:void(0)" class="remove-button btn-remover">
                        <i class="fa fa-trash" aria-hidden="true"></i>
                       Remover imagem
                    </a>
                </form>
                <?php } ?>
                <a href="/admin/galeria/" class="">
                    <i class="fa fa-arrow-left" aria-hidden="true"></i>
                   Voltar para Listagem
                </a>
                <a href="javascript:void(0)" class="enviar">
                    <i class="fa fa-<?php echo @($galeria) ? 'floppy-o': 'plus' ?>" aria-hidden="true"></i>
                   <?php echo @($galeria) ? 'Salvar Edição' : 'Cadastrar imagem'; ?>
                </a>
            </div>
        </div>
        <div class="box-body">
            <form class='form'>
                @csrf
                <input type="hidden" id='id' value="<?php echo @($galeria) ? $galeria->id : '' ?>">
                <input type="hidden" class="url" value="/admin/galeria/sendform">

                <div class='row'>
                    <div class='form-group'>
                        <label for="titulo">Título:</label>
                        <input type="text" disabled id='titulo' class='data-form' name='titulo' placeholder="Digite o nome da imagem" value="<?php echo @($galeria) ? $galeria->name : '';?>">

                    </div>
                    <div class='form-group'>
                        <label for="page_name">Página:</label>
                        <select name="page_name" id="page_name">
                            <option <?php echo @($galeria && $galeria->page_name == 'Homepage') ? 'selected' : '';?> value="Homepage">Homepage</option>
                            <option <?php echo @($galeria && $galeria->page_name == 'Serviços') ? 'selected' : '';?> value="Serviços">Serviços</option>
                            <option <?php echo @($galeria && $galeria->page_name == 'A Empresa') ? 'selected' : '';?> value="A Empresa">A Empresa</option>
                            <option <?php echo @($galeria && $galeria->page_name == 'Cases') ? 'selected' : '';?> value="Cases">Cases</option>
                            <option <?php echo @($galeria && $galeria->page_name == 'Vagas') ? 'selected' : '';?> value="Vagas">Vagas</option>
                        </select>
                    </div>
                    <div class='form-group'>
                        <label for="alt_seo">SEO ALT Imagem:</label>
                        <input type="text" id='alt_seo' class='data-form' name='alt_seo' placeholder="Digite o texto alternativo" value="<?php echo @($galeria) ? $galeria->alt_seo : '';?>">
                    </div>
                    <div class='form-group'>
                        <label for="title_seo">SEO Title Imagem:</label>
                        <input type="text" id='title_seo' class='data-form' name='title_seo' placeholder="Digite o conteúdo da tag title" value="<?php echo @($galeria) ? $galeria->title_seo : '';?>">
                    </div>
                </div>
                <div class='row'>
                    <div class='form-group' style='width: 100%'>
                        <label for="">Imagem:</label>
                        <input type="file" accept=".jpeg, .jpg, .png" hidden id='imagem' class='data-form input_upload' name='imagem'>
                        <label for='imagem' class='imagem-content <?php echo @($galeria && $galeria->imagem != '') ? 'preview-active' : '' ?>'>
                            <img src="<?php echo @($galeria) ?  asset('galeria/'.$galeria->imagem) : '' ?>" alt="">
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
    .link-galeria {
        border-bottom: 1px solid #173979;
        margin-bottom: 0.5em
    }
    #body-admin main .container .box .box-body{
        padding: 3em 2em !important
    }
</style>
