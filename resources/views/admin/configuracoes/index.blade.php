@extends('layouts.admin')
@section('title', 'Configurações')

@section('content')
<div class="container">
    <p class="message-feedback" style='display:none'></p>
   <div class='box'>
        <div class="box-header">
            <h2 class="title">Configuraçẽos gerais:</h2>
            <div class="buttons">
                <input type="hidden" class="url-reload" value="/admin/configuracoes/index">
                <a href="javascript:void(0)" class="enviar">
                    <i class="fa fa-floppy-o" aria-hidden="true"></i>
                    Salvar Configurações
                </a>
            </div>
        </div>
        <div class="box-body">
            <form class='form form-configuracoes'>
                @csrf
                <input type="hidden" class="url" value="/admin/configuracoes/sendform">

                <legend>Configurações de Contato:</legend>
                <div class='row'>
                    <div class='form-group'>
                        <label for="email_contato">E-mail de contato:</label>
                        <input type="email" id='email_contato' class='data-form' name='email_contato' placeholder="Digite o e-mail de contato" value="<?php echo @($configuracoes) ? $configuracoes->email_contato : '';?>">
                    </div>
                    <div class='form-group'>
                        <label for="email_candidaturas">E-mail de Candidaturas:</label>
                        <input type="email" id='email_candidaturas' class='data-form' name='email_candidaturas' placeholder="Digite o e-mail de candidaturas" value="<?php echo @($configuracoes) ? $configuracoes->email_candidaturas : '';?>">
                    </div>
                    <div class='form-group'>
                        <label for="telefone_contato">Telefone de Contato:</label>
                        <input type="text"class='data-form'  id='telefone_contato' name='telefone_contato' placeholder="Digite o telefone de contato" value="<?php echo @($configuracoes) ? $configuracoes->telefone_contato : '';?>">
                    </div>
                    <div class='form-group'>
                        <label for="endereco">Endereço:</label>
                        <input type="text"class='data-form'  id='endereco' name='endereco' placeholder="Digite o endereço da agência" value="<?php echo @($configuracoes) ? $configuracoes->endereco : '';?>">
                    </div>
                </div>
                <legend style='margin-top: 2em'>Configurações das Redes Sociais:</legend>

                <div class='row'>
                    <div class='form-group-3'>
                        <label for="facebook">Facebook:</label>
                        <input type="text"class='data-form'  id='facebook' name='facebook' placeholder="https://www.facebook.com/Usuario" value="<?php echo @($configuracoes) ? $configuracoes->facebook : '';?>">
                    </div>
                    <div class='form-group-3'>
                        <label for="linkedin">Linkedin:</label>
                        <input type="text" class='data-form' id='linkedin' name='linkedin' placeholder="https://www.linkedin.com/Usuario" value="<?php echo @($configuracoes) ? $configuracoes->linkedin : '';?>">
                    </div>
                    <div class='form-group-3'>
                        <label for="whatsapp_geral">Whatsapp Geral:</label>
                        <input type="text" class='data-form' id='whatsapp_geral' name='whatsapp_geral' placeholder='https://api.whatsapp.com/send?phone=' value="<?php echo @($configuracoes) ? $configuracoes->whatsapp_geral : '';?>">
                    </div>
                    <div class='form-group-3'>
                        <label for="whatsapp_especialista">Whatsapp Especialista:</label>
                        <input type="text" class='data-form' id='whatsapp_especialista' name='whatsapp_especialista' placeholder='https://api.whatsapp.com/send?phone=' value="<?php echo @($configuracoes) ? $configuracoes->whatsapp_especialista : '';?>">
                    </div>
                    <div class='form-group-3'>
                        <label for="instagram">Instagram:</label>
                        <input type="text" class='data-form' id='instagram' name='instagram' placeholder='https://api.whatsapp.com/send?phone=' value="<?php echo @($configuracoes) ? $configuracoes->instagram : '';?>">
                    </div>
                </div>

                <!-- <legend style='margin-top: 2em'>Configurações das Cores:</legend>

                <div class='row'>
                    <div class='form-group-3'>
                        <label for="cor_primaria">Cor Primária:</label>
                        <input type="color"class='data-form inputColor'  id='cor_primaria' name='cor_primaria' value="<?php echo @($configuracoes) ? $configuracoes->cor_primaria : '';?>">
                    </div>
                    <div class='form-group-3'>
                        <label for="cor_secundaria">Cor Secundária:</label>
                        <input type="color" class='data-form inputColor' id='cor_secundaria' name='cor_secundaria'value="<?php echo @($configuracoes) ? $configuracoes->cor_secundaria : '';?>">
                    </div>
                    <div class='form-group-3'>
                        <label for="auxiliar_primaria_1">Auxiliar Primária 1:</label>
                        <input type="color" class='data-form inputColor' id='auxiliar_primaria_1' name='auxiliar_primaria_1' value="<?php echo @($configuracoes) ? $configuracoes->auxiliar_primaria_1 : '';?>">
                    </div>
                    <div class='form-group-3'>
                        <label for="auxiliar_primaria_2">Auxiliar Primária 2:</label>
                        <input type="color" class='data-form inputColor' id='auxiliar_primaria_2' name='auxiliar_primaria_2' value="<?php echo @($configuracoes) ? $configuracoes->auxiliar_primaria_2 : '';?>">
                    </div>
                    <div class='form-group-3'>
                        <label for="auxiliar_secundaria_1">Auxiliar Secundária 1:</label>
                        <input type="color" class='data-form inputColor' id='auxiliar_secundaria_1' name='auxiliar_secundaria_1' value="<?php echo @($configuracoes) ? $configuracoes->auxiliar_secundaria_1 : '';?>">
                    </div>
                </div> -->

                <legend style='margin-top: 2em'>Configurações de Logotipo:</legend>


                <div class='row' style='justify-content: flex-start; margin-top: 27px;'>
                    <div class='form-group' style='margin-right: 1.5em'>
                        <label for="logotipo_1">Logotipo Primária:</label>
                        <input type="file" accept=".jpeg, .jpg, .png" hidden id='logotipo_1' class='data-form input_upload' name='logotipo_1'>
                        <label for="logotipo_1" style='height: 3em' class='preview <?php echo @($configuracoes && $configuracoes->logotipo_1 != '') ? 'preview-active' : '' ?>'>
                            <img src="<?php echo @($configuracoes) ?  asset('storage/configuracoes/'.$configuracoes->logotipo_1) : '' ?>" alt="">
                            <button type='button'>Enviar imagem</button>
                            <span class='gradient'>
                                <i class="fa fa-pencil" aria-hidden="true"></i>
                            </span>
                        </label>
                    </div>
                    <div class='form-group'>
                        <label for="logotipo_2">Logotipo Secundária:</label>
                        <input type="file" accept=".jpeg, .jpg, .png" hidden id='logotipo_2' class='data-form input_upload' name='logotipo_2'>
                        <label for="logotipo_2" style='height: 3em' class='preview <?php echo @($configuracoes && $configuracoes->logotipo_2 != '') ? 'preview-active' : '' ?>'>
                            <img src="<?php echo @($configuracoes) ?  asset('storage/configuracoes/'.$configuracoes->logotipo_2) : '' ?>" alt="">
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
    .link-configuracoes {
        border-bottom: 1px solid #173979;
        margin-bottom: 0.5em
    }
    /* #body-admin main .container .box {
        height: 73% !important;
        margin-top: 2em !important;
    }
    #body-admin main .container {
        justify-content: flex-start !important
    }
    #body-admin main .container .message-feedback, #body-admin main .container .message-feedback-session {
        margin-top: 1em !important;
    } */
    #body-admin main .container .box {
        height: 74% !important;
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