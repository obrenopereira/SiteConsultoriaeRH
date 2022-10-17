@extends('layouts.layout')

@section('title', 'Vagas')

@section('headerInterno', 'interno')

@section('content')

<section id='vagasBanner'>
    <div class='box-left'>
        <h1>Candidato,aqui é seu <strong>lugar!</strong></h1>
        <legend>Acesse todas as nossa vagas e participe <strong>gratuitamente</strong> dos melhores processos e oportunidades para a sua carreira!</legend>
    </div>
    <div class="box-right">
        <img src="<?php echo asset('galeria/'.$bannerPrincipal->imagem); ?>" alt="<?=$bannerPrincipal->alt_seo?>" title="<?=$bannerPrincipal->title_seo?>">
    </div>
</section>
<section class="encontre">
    <h2>Encontre aqui seu próximo emprego</h2>
    <form class="encontre-form">
        <input type="text" name="encontre" id="encontre-input" placeholder="Auxiliar de diretoria" value="<?php echo @(Session::has('search') && Session::get('search') != '') ? Session::get('search') : '';?>">
        <button type="button"><img src="/img/site/lupa.png"></button>
    </form>
</section>

<section id="vagas-page">

    <h2 id='vagas-title'>Processos Seletivos em Aberto</h2>

    <div class="filtros">
        <form class="form-filtros">
            <button class='buttonFiltro' type='button'><img src="/img/site/Filter.png"> Filtros</button>
            <div class="form-filtros-content">
                <h5>Área</h5>
                <input type="hidden" value="{{ route('vagas.get') }}" id="routeGetVagas">
                <input type="hidden" value="{{ route('vagas.remove_filter') }}" id="routeRemoveFilterVagas">
                <?php foreach($areas as $area) {?>
                <label for="area-<?=$area->id?>">
                    <input type="checkbox"  <?php echo @(Session::has('area') && in_array($area->id, Session::get('area'))) ? 'checked'  : '' ;?> class='filtro-input' data-filtro='area' id="area-<?=$area->id?>"  value="<?=$area->id?>">
                    <span></span>
                    <?=$area->name?>
                </label>
                <?php } ?>
            </div>
            <div class="form-filtros-content">
                <h5>Escolaridade</h5>
                <?php foreach($escolaridades as $escolaridade) {?>
                <label for="escolaridade-<?=$escolaridade->id?>">
                    <input type="checkbox" class='filtro-input' <?php echo @(Session::has('escolaridade') && in_array($escolaridade->id, Session::get('escolaridade'))) ? 'checked'  : '' ;?> data-filtro='escolaridade' id="escolaridade-<?=$escolaridade->id?>"  value="<?=$escolaridade->id?>">
                    <span></span>
                    <?=$escolaridade->name?>
                </label>
                <?php } ?>
            </div>
            <div class="form-filtros-content">
                <h5>Experiência</h5>
                <?php foreach($experiencias as $experiencia) {?>
                <label for="experiencias-<?=$experiencia->id?>">
                    <input type="checkbox"  <?php echo @(Session::has('experiencia') && in_array($experiencia->id, Session::get('experiencia'))) ? 'checked'  : '' ;?> class='filtro-input' data-filtro='experiencia' id="experiencias-<?=$experiencia->id?>" value="<?=$experiencia->id?>">
                    <span></span>
                    <?=$experiencia->name?>
                </label>
                <?php } ?>
            </div>
            <div class="form-filtros-content">
                <h5>Cidade</h5>
                <?php foreach($cidades as $cidade) {?>
                <label for="cidade-<?=$cidade->cidade?>">
                    <input type="checkbox"  <?php echo @(Session::has('cidade') && in_array($cidade->cidade, Session::get('cidade'))) ? 'checked'  : '' ;?> class='filtro-input' data-filtro='cidade' id="cidade-<?=$cidade->cidade?>" value="<?=$cidade->cidade?>">
                    <span></span>
                    <?=$cidade->cidade?>
                </label>
                <?php } ?>
            </div>
        </form>
        <div class="vagas-container">
            <?php
            if(count($vagas)) {
                foreach($vagas as $vaga) { ?>
                    <div class="vagas-box">
                        <span class="time">
                            <img src="{{ asset('img/site/Time Circle.png') }}">
                            <?php echo @($vaga->data_publicacao > 0) ? 'Há '.$vaga->data_publicacao. ' dias'  : 'Publicada hoje'; ?>
                        </span>
                        <h5><?=$vaga->name?></h5>
                        <h4><?=$vaga->empresa_name?></h4>
                        <p><?=$vaga->breve_descricao?></p>
                        <div class="vagas-box-bottom">
                            <span class="location">
                                <img src="{{ asset('img/site/Location.png') }}" alt="">
                                <?=$vaga->cidade?>, <?=$vaga->uf?>
                            </span>
                            <div class="tags-container">
                                <span class="tags-box"><?=$vaga->area_name?></span>
                                <span class="tags-box"><?=$vaga->experiencia_name?></span>
                                <span class="tags-box"><?=$vaga->escolaridade_name?></span>
                            </div>
                            <a href="{{ route('vagas.show' , ['id' => $vaga->id]) }}">Ver mais sobre</a>
                        </div>
                    </div>
            <?php }
            } ?>

            <button class='maisVagas moreActionVagas' type="button">Ver mais vagas <span class="border"></span></button>
        </div>
    </div>

</section>

@stop




