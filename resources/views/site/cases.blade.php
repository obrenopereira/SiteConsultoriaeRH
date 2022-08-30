@extends('layouts.layout')

@section('title', 'Cases')

@section('headerInterno', 'interno')

@section('content')

<section id='cases'>
    <div class="container">
        <div class='casesDesc'>
            <h1>Conheça os nossos cases de sucesso!</h1>
            <p>Entenda como a nossa metodologia e a forma que trabalhamos ajudou algumas empresas a conseguirem melhores resultados organizacionais.</p>
        </div>
        <div class='casesBackground'>
            <img src="<?php echo asset('galeria/'.$bannerPrincipal->imagem); ?>" alt="<?=$bannerPrincipal->alt_seo?>" title="<?=$bannerPrincipal->title_seo?>">
        </div>
    </div>
</section>

@if($casesCount)
<section class="sliderCases slider">
	<div class="slide-track">
    <?php foreach($cases as $case) { ?>
        <a href="/cases/detalhes/<?=$case->id?>" class='empresasBoxA'>
            <img src="<?php echo asset('storage/cases/'.$case->imagem); ?>" alt="Case - <?=$case->name?>" title="Case - <?=$case->name?>">
        </a>
        <?php } ?>
	</div>
</section>
@endif

<section id="CasesExibicaoCases" class="CasesExibicao">
    <div class='content-cases'>
        <div class="cases-content-title">
            <h3>Cases de sucesso</h3>
            <h2>Conheça os resultados de algumas empresas</h2>
            <span class="border"></span>
        </div>
        <div class="cases-container">
            <div class="caseBox">
                <span class="caseImg">
                    <img src="/img/site/empresas/gympass.png" alt="">
                </span>
                <p class="case-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                <div class="info-cases">
                    <p class="conhecaOCase">Conheça o case <img src="/img/site/seta_right.svg"> </p>
                    <div>
                        <span>consultoria em gestão empresarial</span>
                        <span>gestão de projetos</span>
                    </div>
                </div>
            </div>
            <div class="caseBox">
                <span class="caseImg">
                    <img src="/img/site/empresas/gympass.png" alt="">
                </span>
                <p class="case-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                <div class="info-cases">
                    <p class="conhecaOCase">Conheça o case <img src="/img/site/seta_right.svg"> </p>
                    <div>
                        <span>consultoria em gestão empresarial</span>
                        <span>gestão de projetos</span>
                    </div>
                </div>
            </div>
            <div class="caseBox">
                <span class="caseImg">
                    <img src="/img/site/empresas/gympass.png" alt="">
                </span>
                <p class="case-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                <div class="info-cases">
                    <p class="conhecaOCase">Conheça o case <img src="/img/site/seta_right.svg"> </p>
                    <div>
                        <span>consultoria em gestão empresarial</span>
                        <span>gestão de projetos</span>
                    </div>
                </div>
            </div>
            <div class="caseBox">
                <span class="caseImg">
                    <img src="/img/site/empresas/gympass.png" alt="">
                </span>
                <p class="case-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                <div class="info-cases">
                    <p class="conhecaOCase">Conheça o case <img src="/img/site/seta_right.svg"> </p>
                    <div>
                        <span>consultoria em gestão empresarial</span>
                        <span>gestão de projetos</span>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>


<section id="depoimentos">
    <div class="container">
        <div class="depoimentos-list">

            <div class='depoimentos-container'>
                <div class="depoimentos-list-content">
                    <h2>Depoimentos</h2>
                    <h3>O que nossos clientes falam sobre nosso trabalho</h3>

                    <div class="depoimentos-box boxActive" data-title="Sementes Costa Beber" data-text="Com o suporte da TS Consultoria evoluímos na estruturação da área de Recursos Humanos, focando em políticas mais humanas, aprimorando processos, implantando ferramentas e desenvolvendo, sobretudo, pessoas. Contamos com treinamentos de alto nível para desenvolver nosso time.  Somos responsáveis pela vida do colaborador durante a sua permanência na empresa e ter apoio de especialistas para, aos poucos, transformar a área de Gestão de Pessoas em estratégia de negócio, é fundamental.">
                        <span class='picture-box'>
                            <img src="img/site/Angela.jpg" alt="">
                        </span>
                        <div>
                            <h4>Angela Hendges</h4>
                            <p>Sementes Costa Beber</p>
                        </div>
                    </div>
                    <div class="depoimentos-box" data-title="Van Ass Sementes" data-text="Os resultados conquistados foram de mais facilidade de visão e comunicação com a equipe superando os desafios propostos pela empresa. Tendo uma equipe unida para as tarefas do dia a dia, vindo a mudar a forma de olhar para a equipe e fazendo com que cada um busque superar os desafios.">
                        <span class='picture-box'>
                            <img src="img/site/Jocemar.jpg" alt="">
                        </span>
                        <div>
                            <h4>Jocemar Zurawski</h4>
                            <p>Van Ass Sementes</p>
                        </div>
                    </div>
                    <div class="depoimentos-box"  data-title="Agrinova" data-text="Cada dia uma nova experiência, cada dia um conhecimento novo, aprendendo com cada colaborador uma forma diferente de resolver e solucionar problemas.">
                        <span class='picture-box'>
                            <img src="img/site/Jessica.jpg" alt="">
                        </span>
                        <div>
                            <h4>Jéssica Santos de Vargas Moura</h4>
                            <p>Agrinova</p>
                        </div>
                    </div>
                </div>

                <div class="depoimentosBoxContent">
                    <img src="/img/site/aspas.svg" alt="" class="aspas">
                    <h4>Sementes Costa Bebe</h4>
                    <span class="star-container">
                        <img src="/img/site/star_yellow.svg" alt="">
                        <img src="/img/site/star_yellow.svg" alt="">
                        <img src="/img/site/star_yellow.svg" alt="">
                        <img src="/img/site/star_yellow.svg" alt="">
                        <img src="/img/site/star_yellow.svg" alt="">
                    </span>
                    <p>
                    Com o suporte da TS Consultoria evoluímos na estruturação da área de Recursos Humanos, focando em políticas mais humanas, aprimorando processos, implantando ferramentas e desenvolvendo, sobretudo, pessoas. Contamos com treinamentos de alto nível para desenvolver nosso time.  Somos responsáveis pela vida do colaborador durante a sua permanência na empresa e ter apoio de especialistas para, aos poucos, transformar a área de Gestão de Pessoas em estratégia de negócio, é fundamental.
                    </p>
                    <span class='border'>
                    </span>

                    <h5 class="depoimentoAutor">Angela Hendges</h5>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="consultaGratis">
    <div class="container">
        <div class='textConsulta'>
            <h3>Não sabe por onde começar?</h3>
            <h2>Agende uma reunião conosco!</h2>
        </div>
        <a href="https://api.whatsapp.com/send?phone=555984552255" target="_blank">Quero agendar uma reunião<img src="/img/site/seta_grande_preta.svg"></a>
    </div>
</section>
@stop




