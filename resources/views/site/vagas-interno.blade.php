@extends('layouts.layout')
@section('title', $vaga->name )

@section('headerInterno', 'interno')

@section('content')

<div class='share-candidatura'>
    <div class='share-candidatura-box'>
        <i class="fa fa-times close-share-candidatura" aria-hidden="true"></i>
        <h2>Compartilhe essa vaga</h2>
        <span>
         <input type="text" disabled id='share-input' class='share-input' placeholder='http://127.0.0.1:8000/admin/vagas'>
         <i class="fa fa-clone" aria-hidden="true"></i>
        </span>

        <div class='share-links'>
            <a href="#" target="_bank">
                <img src="/img/site/facebook_invertido.png" alt="">
            </a>
            <a href="#" target="_bank">
                <img src="/img/site/linkedin_invertido.png" alt="">
            </a>
            <a href="#" target="_bank">
                <img src="/img/site/youtube_invertido.png" alt="">
            </a>
            <a href="#" target="_bank">
                <img src="/img/site/instagram_invertido.png" alt="">
            </a>
        </div>
    </div>
</div>
<div class='candidatura-content'>
    <form action="" class='candidatura-form'>
        @csrf
        <div class='content'>
            <i class="fa fa-times close-candidatura" aria-hidden="true"></i>
            <h2>Candidatar-se à vaga</h2>
            <input type="text" name='name' id='name' class='data-form' placeholder="Seu nome">
            <input type="email" name='email' id='email' class='data-form' placeholder="Seu email">
            <input type="hidden" name='id_vaga' id='id_vaga' value='<?php echo $vaga->id?>'>
            <div class='form-group'>
                <select name="escolaridade" class='data-form' id="escolaridade">
                    <option value="Ens. Fundamental">Ens. Fundamental</option>
                    <option value="Ens. Médio">Ens. Médio</option>
                    <option value="Ens. Técnico">Ens. Técnico</option>
                    <option value="Ens. Superior">Ens. Superior</option>
                </select>
                <input type="text" name='cidade' class='data-form' id='cidade' placeholder="Cidade">
            </div>
            <label for="curriculo" class='curriculo'>
                <input type="file"  accept=".pdf" id='curriculo' name='curriculo' hidden>
                <p>Anexe aqui seu currículo em formato PDF</p>
                <span>
                    <img src="/img/site/Paperclip.png" alt="">
                </span>
            </label>
            <textarea name="descricao" class='data-form' id="descricao" placeholder='Fique à vontade para escrever o que desejar...'></textarea>
            <button type='button' class='submitCandidatura'>Candidatar-se</button>
        </div>
        <div class='feedback'>
            <img src="/img/site/check.png" alt="">
            <p>Enviado com sucesso!</p>
        </div>
    </form>
</div>

<section class="encontre enconte-interno">
    <h2>Encontre aqui seu próximo emprego</h2>
    <form class="encontre-form">
        <input type="text" name="encontre" class='search-interno' id="encontre-input" placeholder="Auxiliar de diretoria">
        <button type="button"><img src="/img/site/lupa.png"></button>
    </form>
</section>

<section id='vaga-interno'>
    <div class='container'>
        <div class='box-left'>
            <div class='header-box'>
                <div class='imagem'>
                    <img src="<?php echo asset('empresas/'.$vaga->thumbnail); ?>" alt="">
                </div>
                <div class='text'>
                    <h1><?php echo $vaga->name?></h1>
                    <h3><?php echo $vaga->empresa_name?></h3>
                    <h4><?php echo $vaga->cidade?> - <?php echo $vaga->uf?></h4>
                </div>
            </div>

            <div class='box-content-text'>
                <h5>Descrição da Vaga</h5>
                <div class='content-text'>
                <?php echo $vaga->descricao?>
                </div>
            </div>

            <div class='box-left-bottom'>
                <a href="javascript:void(0)" class='candidatar-button'>Candidatar-se</a>
                <button type='button' class='sharebutton'>
                    <img src="/img/site/share.svg" alt="">
                </button>
            </div>

            <h2 class='subtitle'>Vagas similares</h2>
            <div class="vagas-container">
                <div class="vagas-box">
                    <span class="time">
                        <img src="/img/site/Time Circle.png">
                        <?php echo @($vaga_similiar->data_publicacao > 0) ? 'Há '.$vaga_similiar->data_publicacao. ' dias'  : 'Publicada hoje'; ?>
                    </span>
                    <h5><?=$vaga_similiar->name?></h5>
                    <h4><?=$vaga_similiar->empresa_name?></h4>
                    <p><?=$vaga_similiar->breve_descricao?></p>
                    <div class="vagas-box-bottom">
                        <span class="location">
                            <img src="/img/site/Location.png" alt="">
                            <?=$vaga_similiar->cidade?>, <?=$vaga_similiar->uf?>
                        </span>
                        <div class="tags-container">
                            <span class="tags-box"><?=$vaga_similiar->area_name?></span>
                            <span class="tags-box"><?=$vaga_similiar->experiencia_name?></span>
                            <span class="tags-box"><?=$vaga_similiar->escolaridade_name?></span>
                        </div>
                        <a href="/vagas/detalhes/<?=$vaga_similiar->id?>">Ver mais sobre</a>
                    </div>
                </div>
                <a href="/vagas" style='text-decoration: none' class='maisVagas' type="button">Ver mais vagas <span class="border"></span></a>
            </div>

        </div>
        <div class='box-right'>
            <div class='box-right-header'>
                <div class='imagem'>
                    <img src="<?php echo asset('empresas/'.$vaga->thumbnail); ?>" alt="">
                </div>
                <h3><?php echo $vaga->name?></h3>
                <img src="/img/site/share_tiny.png" class='sharebutton' alt="">
            </div>

            <div class='vaga-infos'>
                <span>
                    <img src="/img/site/location_tiny.png" alt="">
                    <?php echo $vaga->cidade?> - <?php echo $vaga->uf?>
                </span>
                <span>
                    <img src="/img/site/mail_tiny.png" alt="">
                    <?php echo $vaga->contato?>
                </span>
                <span>
                    <img src="/img/site/real_tiny.png" alt="">
                    R$ <?php echo $vaga->remuneracao?>
                </span>
                <span>
                    <img src="/img/site/document_tiny.png" alt="">
                    <?php echo $vaga->contrato?>
                </span>
                <span>
                    <img src="/img/site/clock_tiny.png" alt="">
                    Publicada <?php echo @($vaga->data_publicacao > 0) ? ' a '.$vaga->data_publicacao. ' dias' : 'hoje' ?>
                </span>
            </div>

            <div class='share-content'>
                <h3>Compartilhar a vaga</h3>
                <div class='share-links'>
                    <a href="#" target="_bank">
                        <img src="/img/site/facebook_invertido.png" alt="">
                    </a>
                    <a href="#" target="_bank">
                        <img src="/img/site/linkedin_invertido.png" alt="">
                    </a>
                    <a href="#" target="_bank">
                        <img src="/img/site/youtube_invertido.png" alt="">
                    </a>
                    <a href="#" target="_bank">
                        <img src="/img/site/instagram_invertido.png" alt="">
                    </a>
                </div>
                <a href="javascript:void(0)" class='share-button candidatar-button'>Candidatar-se</a>
            </div>
        </div>
    </div>
</section>

@stop




