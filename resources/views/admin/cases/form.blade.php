@extends('layouts.admin')
@section('title', 'Cases')

@section('content')
<div class="container">
    <p class="message-feedback" style='display:none'></p>

    <?php if($case) { ?>

    <div class='skills-content'>
        <form class='skills-form'>
            @csrf
            <input type="hidden" class='case-id' value="<?php echo @($case) ? $case->id : ''?>">
            <i class='fa fa-close closeSkills'></i>
            <div class='row'>
                <div class='form-group'>
                    <label for="skill">Skills:</label>
                    <select class="skills-select data-form" id='skills' multiple="multiple" name="skills[]">
                        <?php foreach($skills as $skill) { ?>
                            <option value="<?=$skill->id?>" selected> <?=$skill->name?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>
            <div class='row'>
                <div class='form-group'>
                    <label for="skill">Adicionar skill:</label>
                    <input type="text" class='adicionarSkillInput' placeholder='Digite uma skill aqui' name='skill_nova'>
                </div>
            </div>
            <button type='button' class='saveSkills'>Salvar Skills</button>
        </form>
    </div>
    <?php } ?>
   <div class='box'>
        <div class="box-header">
            <h2 class="title"><?php echo @($case) ? $case->name : 'Novo Case'; ?></h2>
            <div class="buttons">
                <input type="hidden" class="url-reload" value="/admin/cases/form?id=">
                <?php if($case) { ?>
                <form>
                    @csrf
                    <input type="hidden" name='id' class='id' value="<?=$case->id?>">
                    <input type="hidden" class="url-remove" value="/admin/cases/remove">
                    <input type="hidden" class="url-reload" value="/admin/cases/form?id=">
                    <a href="javascript:void(0)" class="remove-button btn-remover">
                        <i class="fa fa-trash" aria-hidden="true"></i>
                       Remover Case
                    </a>
                </form>
                <?php } ?>
                <a href="/admin/cases/" class="">
                    <i class="fa fa-arrow-left" aria-hidden="true"></i>
                   Voltar para Listagem
                </a>
                <?php if($case) { ?>
                <button class='skills-button' type='button'> <img src="img/site/trend.png"> Editar Skills</button>
                <?php } ?>
                <a href="javascript:void(0)" class="enviar">
                    <i class="fa fa-<?php echo @($case) ? 'floppy-o': 'plus' ?>" aria-hidden="true"></i>
                   <?php echo @($case) ? 'Salvar Edição' : 'Cadastrar Case'; ?>
                </a>
            </div>
        </div>
        <div class="box-body">
            <form class='form'>
                @csrf
                <input type="hidden" id='id' value="<?php echo @($case) ? $case->id : '' ?>">
                <input type="hidden" class="url" value="/admin/cases/sendform">
            
                <div class='row'>
                    <div class='form-group' style='width: 100%'>
                        <label for="titulo">Nome:</label>
                        <input type="text" id='titulo' class='data-form' name='titulo' placeholder="Digite o nome do case" value="<?php echo @($case) ? $case->name : '';?>">
                    </div>
                </div>


                <div class='row'>
                    <div class='form-group'>
                        <label for="titulo_destaque">Título Destaque:</label>
                        <input type="text" id='titulo_destaque' class='data-form' name='titulo_destaque' placeholder="Digite o título destaque" value="<?php echo @($case) ? $case->titulo_destaque : '';?>">
                    </div>
                    <div class='form-group'>
                        <label for="texto_destaque">Texto Destaque:</label>
                        <textarea name="texto_destaque" class='data-form' id="texto_destaque" placeholder='Digite o texto destaque'><?php echo @($case) ? $case->texto_destaque : '';?></textarea>
                    </div>
                    <div class='form-group'>
                        <label for="titulo_introducao">Título Introdução:</label>
                        <input type="text" id='titulo_introducao' class='data-form' name='titulo_introducao' placeholder="Digite o título introdução" value="<?php echo @($case) ? $case->titulo_introducao : '';?>">
                    </div>
                    <div class='form-group'>
                        <label for="texto_introducao">Texto Introdução:</label>
                        <textarea name="texto_introducao" class='data-form' id="texto_introducao" placeholder='Digite o texto introdução'><?php echo @($case) ? $case->texto_introducao : '';?></textarea>
                    </div>
                </div>
              
                <div class='row'>
                    <div class='form-group' style='width: 32.5%'>
                        <label for="fase_1_legenda">Fase Legenda (1):</label>
                        <input type="text" id='fase_1_legenda' class='data-form' name='fase_1_legenda' placeholder="Digite o legenda da fase 1" value="<?php echo @($case) ? $case->fase_1_legenda : '';?>">
                    </div>
                    <div class='form-group' style='width: 32.5%'>
                        <label for="fase_1_titulo">Fase Título (1):</label>
                        <input type="text" id='fase_1_titulo' class='data-form' name='fase_1_titulo' placeholder="Digite o título da fase 1" value="<?php echo @($case) ? $case->fase_1_titulo : '';?>">
                    </div>
                    <div class='form-group' style='width: 32.5%'>
                        <label for="fase_1_texto">Fase Texto (1):</label>
                        <textarea name="fase_1_texto" class='data-form' id="fase_1_texto" placeholder='Digite o texto da fase 1'><?php echo @($case) ? $case->fase_1_texto : '';?></textarea>
                    </div>
                </div>

                     
                <div class='row'>
                    <div class='form-group' style='width: 32.5%'>
                        <label for="fase_2_legenda">Fase Legenda (2):</label>
                        <input type="text" id='fase_2_legenda' class='data-form' name='fase_2_legenda' placeholder="Digite o legenda da fase 2" value="<?php echo @($case) ? $case->fase_2_legenda : '';?>">
                    </div>
                    <div class='form-group' style='width: 32.5%'>
                        <label for="fase_2_titulo">Fase Título (2):</label>
                        <input type="text" id='fase_2_titulo' class='data-form' name='fase_2_titulo' placeholder="Digite o título da fase 2" value="<?php echo @($case) ? $case->fase_2_titulo : '';?>">
                    </div>
                    <div class='form-group' style='width: 32.5%'>
                        <label for="fase_2_texto">Fase Texto (2):</label>
                        <textarea name="fase_2_texto" class='data-form' id="fase_2_texto" placeholder='Digite o texto da fase 2'><?php echo @($case) ? $case->fase_2_texto : '';?></textarea>
                    </div>
                </div>


                <div class='row'>
                    <div class='form-group'  style='width: 46% !important'>
                        <label>Banner Tela Cheia:</label>
                        <input type="file" accept=".jpeg, .jpg, .png" hidden id='banner_tela_inteira' class='data-form input_upload' name='banner_tela_inteira'>
                        <label " for="banner_tela_inteira" class='preview <?php echo @($case && $case->banner_tela_inteira != '') ? 'preview-active' : '' ?>'>
                            <img src="<?php echo @($case) ?  asset('storage/cases/'.$case->banner_tela_inteira) : '' ?>" alt="">
                            <button type='button'>Enviar imagem</button>
                            <span class='gradient'>
                                <i class="fa fa-pencil" aria-hidden="true"></i>
                            </span>
                        </label>
                    </div>

                    <div class='column' style='width: 50%'> 
                        <div class='form-group'  style='width: 100% !important'>
                            <label>Fase Imagem (2):</label>
                            <input type="file" accept=".jpeg, .jpg, .png" hidden id='fase_2_imagem' class='data-form input_upload' name='fase_2_imagem'>
                            <label id="fase_2_imagem_label" for="fase_2_imagem" class='preview <?php echo @($case && $case->fase_2_imagem != '') ? 'preview-active' : '' ?>'>
                                <img src="<?php echo @($case) ?  asset('storage/cases/'.$case->fase_2_imagem) : '' ?>" alt="">
                                <button type='button'>Enviar imagem</button>
                                <span class='gradient'>
                                    <i class="fa fa-pencil" aria-hidden="true"></i>
                                </span>
                            </label>
                        </div>
                        <div class='form-group'  style='width: 100% !important'>
                            <label>Logotipo Case:</label>
                            <input type="file" accept=".jpeg, .jpg, .png" hidden id='imagem' class='data-form input_upload' name='imagem'>
                            <label id="logotipo_label" for="imagem" class='preview <?php echo @($case && $case->imagem != '') ? 'preview-active' : '' ?>'>
                                <img src="<?php echo @($case) ?  asset('storage/cases/'.$case->imagem) : '' ?>" alt="">
                                <button type='button'>Enviar imagem</button>
                                <span class='gradient'>
                                    <i class="fa fa-pencil" aria-hidden="true"></i>
                                </span>
                            </label>
                        </div>
                    </div>
                </div>
            </form>
        </div>
   </div>
</div>
@endsection


<style>
    .link-cases {
        border-bottom: 1px solid #173979;
        margin-bottom: 0.5em
    }
    #body-admin main .container .form-group .preview
    {
        height: 11.4em !important
    }
    #body-admin main .container .form-group #fase_2_imagem_label {
        height: 3em !important
    }
    #body-admin main .container .form-group #logotipo_label {
        height:  2em !important
    }
    #body-admin main .container .form-group #logotipo_label img, #body-admin main .container .form-group #fase_2_imagem_label img {
        width: auto !important;
        height: 100% !important
    }
    .select2-dropdown  {
        z-index: 99999 !important;
    }
    #body-admin main .container .skills-form .select2-selection--multiple, #body-admin main .container .skills-form .select2-selection{
        height: 5em !important
    }
    .select2 {
        width: 100% !important
    }
    #body-admin main .container .select2-selection--multiple .select2-selection__rendered, #body-admin main .container .select2-selection .select2-selection__rendered
    {
        height: 79% !important;
        flex-wrap: wrap !important;
        overflow-y: auto !important;
    }
    #body-admin main .container .select2-selection__choice {
        margin-bottom: 5px !important;
    }
    #body-admin main .container .select2-selection__choice {
        height: 1.8em !important
    }
</style>