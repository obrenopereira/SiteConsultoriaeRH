@extends('layouts.layout')

@section('title', 'Cases')

@section('headerInterno', 'interno')

@section('content')

<section id='cases' class="case_interno">
    <div class="container">
        <div class='casesDesc'>
            <h1><?=$case->titulo_destaque?></h1>
            <p><?=$case->texto_destaque?></p>
        </div>
        <div class='casesBackground'>
            <img src="<?php echo asset('storage/cases/'.$case->imagem); ?>" alt="">
            <div class="case-tags">
                <a href="#caseIntro" class="setaScrollDown"><img src="/img/site/seta_yellow.svg" class="scrollSeta" ></a>
            </div>
        </div>
    </div>
</section>

<section id='caseIntro' class="case-intro">
    <div class="container">
        <div class="title">
            <h3>Introdução</h3>
            <h2><?=$case->titulo_introducao?></h2>
            <span class="border"></span>
            <p><?=$case->texto_introducao?></p>
        </div>
    </div>
</section>


<section id="bg-case">
    <img src="<?php echo asset('storage/cases/'.$case->banner_tela_inteira); ?>" alt="">
</section>

<section id='fase1' class="case-intro">
    <div class="container">
        <div class="title">
            <h3>Fase 1 - <?=$case->fase_1_legenda?></h3>
            <h2><?=$case->fase_1_titulo?></h2>
            <p><?=$case->fase_1_texto?></p>
        </div>
    </div>
</section>


<section id='fase2' class="fases">
    <div class="container">
        <div class="title">
            <h3>Fase 1 - <?=$case->fase_2_legenda?></h3>
            <h2><?=$case->fase_2_titulo?></h2>
            <p><?=$case->fase_2_legenda?></p>
        </div>
        <div class='fase-container'>
            <img src="<?php echo asset('storage/cases/'.$case->fase_2_imagem); ?>" alt="">
        </div>
    </div>
</section>


<section class="skills" id="skils">
    <div class="container">
        <div class="title">
            <h3>Skills</h3>
            <h2>Skills utilizadas nesse projeto</h2>
            <span class="border"></span>
        </div>

        <div class="skills-container">
            <?php if($skills) {
                foreach($skills as $skill) { ?>
            <div class="skills-box">
               <div class="skill-box-inside">
                    <span class="skills-img">
                        <img src="/img/site/skill.svg" alt="">
                    </span>
                    <h4><?=$skill->name?></h4>
               </div>
               <span class="circle"></span>
            </div>
            <?php }
            } ?>
        </div>
    </div>
</section>

<section id="contato" class="contato">
    <div class="container">
        <div class="title">
            <h3>Quer saber mais?</h3>
            <h2>Entre em contato com a gente!</h2>
            <a href="https://api.whatsapp.com/send?phone=5555984552255" target="_blank"><img src="/img/site/whatsapp_contato.png" alt="">NOS CHAME NO WHATSAPP</a>

            <div class="tags">
                <span>consultoria em gestão empresarial</span>
                <span>consultoria em gestão de pessoas</span>
                <span>gerenciamento de projetos</span>
            </div>
            <i>A sua consultoria perto de você</i>
        </div>

        <form class="contato-form">
            <h2>Como podemos te ajudar?</h2>
            <input type="text" name="nome" id="nome" placeholder="Insira o seu nome">
            <input type="email" name="email" id="email" placeholder="Insira o seu e-mail">
            <textarea name="mensagem" id="mensagem" placeholder="Mensagem"></textarea>
            <button type="button">ENTRAR EM CONTATO <img src="/img/site/seta_preta.svg"></button>
        </form>

    </div>
</section>
@stop




