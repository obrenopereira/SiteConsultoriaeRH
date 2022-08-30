@extends('layouts.layout')

@section('title', 'Home')

@section('content')

<section id="home">
    <div class="bannerHome">
        <span class='gradient1'></span>
        <span class='gradient2'></span>
        <span class='gradient3'></span>
        <img src="<?php echo asset('storage/galeria/'.$bannerPrincipal->imagem); ?>"  class='bannerIMG' alt="<?=$bannerPrincipal->alt_seo?>" title="<?=$bannerPrincipal->title_seo?>">
        
        <div class="bannerHomeText">
            <h1>Você com os resultados que sempre planejou!</h1>
            <h2>Consultoria empresarial e de carreira com foco no crescimento estratégico das pessoas e processos.</h2>
            <a target="_blank" href="https://api.whatsapp.com/send?phone=5555984552255 " title="Fale Conosco" alt="Fale Conosco" class="faleConosco">Fale Conosco</a>
        </div>
        
        <a href="#servicosHome" class="scrollSeta setaScrollDown"><img src="/img/site/seta_yellow.svg" class="homeSeta" ></a>
    </div> 
</section>

<section id="homebar">
    <div class="homebar">
        <div class='homebar-box'>
            <h3>+18</h3>
            <p>anos de experiência</p>
            <span></span>
        </div>
        <div class='homebar-box'>
            <h3>+120</h3>
            <p>clientes atendidos</p>
            <span></span>
        </div>
        <div class='homebar-box'>
            <h3>+1500</h3>
            <p>vagas preenchidas</p>
            <span></span>
        </div>
        <div class='homebar-box'>
            <h3>+170</h3>
            <p>projetos realizados</p>
        </div>
    </div>
</section>

<section id="homebar-mobile" class="slider">
    <div class="homebar-mobile-content slide-track">
        <div class="homebar-mobile-box">
            <span>
                <h5>+18</h5>
                <p>anos de experiência</p>
                <label></label>
            </span>
        </div>
        <div class="homebar-mobile-box">
            <span>
                <h5>+120</h5>
                <p>clientes atendidos</p>
                <label></label>
            </span>
        </div>
        <div class="homebar-mobile-box">
            <span>
                <h5>+1500</h5>
                <p>vagas preenchidas</p>
                <label></label>
            </span>
        </div>
        <div class="homebar-mobile-box">
            <span>
                <h5>+170</h5>
                <p>projetos realizados</p>
                <label></label>
            </span>
        </div>
    </div>
</section>

<section id="servicosHome">
    <div class='servicos-container'>
        <div class='servicosExibicao'>
            <h2>Nossos principais serviços</h2>
            <h3>Melhore os seus processos e estratégias organizacionais com foco no resultado</h3>
            <div class='servicosTags'>
                <p>consultoria em gestão empresarial</p>
                <p>consultoria em gestão de pessoas</p>
                <p>gerenciamento de projetos</p>
            </div>
        </div>
        <div class='servicosList'>
            <div class="servicoBox servicoBoxActive">
                <h4>01 - Consultoria em Gestão Empresarial</h4>
                
                <div class='servicoDesc'>
                    <p>Auxiliamos gestores e empreendedores a tomar decisões estratégicas assertivas, criando inovação e redirecionando a empresa para uma situação mais confortável no mercado.</p>
                    <a href="/servicos?tag=gestao-empresarial" title="Conhecer mais sobre o serviço" alt="Conhecer mais sobre o serviço">Conhecer mais</a>
                </div>
            </div>
            <div class="servicoBox">
                <h4>02 - Gestão Estratégica de Pessoas</h4>
                
                <div class='servicoDesc'>
                    <p>Quando olhamos para uma empresa, sabemos que ela só existe porque existem pessoas em sua estrutura, desde a sua fundação até sua ascensão contínua no mercado. Com uma Arquitetura Organizacional estruturada, você terá pessoas desejando atuar em sua empresa.</p>
                    <a href="/servicos?tag=gestao-pessoas" title="Conhecer mais sobre o serviço" alt="Conhecer mais sobre o serviço">Conhecer mais</a>
                </div>
            </div>
            <div class="servicoBox">
                <h4>03 - Recrutamento & Seleção de Pessoal</h4>
                
                <div class='servicoDesc'>
                    <p>As boas práticas de Recrutamento e Seleção de Pessoal são capazes de evitar diversos problemas, potencializar a eficiência e gerar muitos frutos para todos os envolvidos, empresas e funcionários.</p>
                    <a href="/servicos?tag=selecao-pessoal" title="Conhecer mais sobre o serviço" alt="Conhecer mais sobre o serviço">Conhecer mais</a>
                </div>
            </div>
            <div class="servicoBox">
                <h4>04 - Gerenciamento de Projetos</h4>
                
                <div class='servicoDesc'>
                    <p>Buscamos o sucesso do seu projeto com ferramentas e metodologias que minimizem custos e prazos, garantindo qualidade e cumprimento dos requisitos propostos. A gestão de projetos também é relevante como forma de maximizar resultados, gerenciar os riscos, definir corretamente o escopo, prazo e qualidade. </p>
                    <a href="/servicos?tag=gerenciamento-projetos" title="Conhecer mais sobre o serviço" alt="Conhecer mais sobre o serviço">Conhecer mais</a>
                </div>
            </div>
            <div class="servicoBox">
                <h4>05 - Coaching para Executivos, para seu Negócio e sua Carreira</h4>
                
                <div class='servicoDesc'>
                    <p>O processo de coaching visa aumentar o desempenho de um indivíduo, grupo ou empresa, elevando os resultados através de metodologias, ferramentas e técnicas conduzidas a partir de uma parceria sinérgica e dinâmica com o cliente. </p>
                    <a href="/servicos?tag=coaching-executivo" title="Conhecer mais sobre o serviço" alt="Conhecer mais sobre o serviço">Conhecer mais</a>
                </div>
            </div>
        </div>
    </div>
</section>
<section id='backgroundhOME'>
    <div class='backgroundHomeContainer'>
        <div class="backgroundHomeImg">
            <img src="<?php echo asset('storage/galeria/'.$bannerSecundario->imagem); ?>" alt="<?=$bannerSecundario->alt_seo?>" title="<?=$bannerSecundario->title_seo?>">
        </div>
        <div class='BackgroundHomeText'>
            <h2>Desenvolvemos pessoas e processos que geram resultados</h2>
            <p>Com uma equipe de mais de 18 anos de experiência na área, a TS Consultoria tem como principal objetivo promover o desenvolvimento de pessoas e organizações, para que possam alcançar o seu máximo potencial. 
                Com qualidade e responsabilidade, já auxiliamos mais de 120 clientes a desenvolver pessoas e processos na busca dos resultados, de estruturação de planejamentos. 
            </p>
            <a href="/sobre">Conhecer a TS CONSULTORIA <img src="/img/site/seta_preta.svg" alt=""></a>
        </div>
    </div>
</section>

@if(count($clientes))
<div class="subtitleCases">
        <h2>Clientes da TS Consultoria</h2>
    </div>
<section class="sliderCases slider">
 
	<div class="slide-track">
        <?php foreach($clientes as $cliente) { ?>
        <a href="javascript:void(0)" class='empresasBoxA'>
            <img src="<?php echo asset('storage/clientes/'.$cliente->imagem); ?>" alt="Cliente - <?=$cliente->name?>" title="Cliente - <?=$cliente->name?>">
        </a>
        <?php } ?>
	</div>
</section>
@endif

<section id="ts-consultoria">
    <div class='container'>
        <div class="subtitle">
            <h2>Por que a TS Consultoria?</h2>
            <span class="border"></span>
        </div>
        
        <div class='ts-content'>
            <div class="ts-box">
                <div class='ts-box-title'>
                    <span>
                        <img src="/img/site/people-outline 1.svg" alt="Equipe Experiente" title="Equipe Experiente">
                    </span>
                    <h3>Equipe experiente</h3>
                </div>
                <p>Com mais de 18 anos de experiência em consultoria empresarial, nossa equipe tem total conhecimento e ferramentas para te ajudar.</p>
            </div>
            <div class="ts-box">
                <div class='ts-box-title'>
                    <span>
                        <img src="/img/site/construct-outline 1.svg" alt="Confiança no processo" title="Confiança no processo">
                    </span>
                    <h3>Confiança no processo</h3>
                </div>
                <p>Processos são a base de qualquer empresa. Na TS Consultoria, nossos processos são muito bem planejados para que possamos criar a solução ideal para cada caso que atendemos.</p>
            </div>
            <div class="ts-box">
                <div class='ts-box-title'>
                    <span>
                        <img src="/img/site/folder-open-outline 1.svg" alt="Equipe Experiente" title="Equipe Experiente">
                    </span>
                    <h3>Projetos exclusivos</h3>
                </div>
                <p>As empresas e as pessoas são únicas. Um projeto personalizado para cada situação é sempre o melhor caminho para maximizar o desempenho. Sempre respeitando a cultura da empresa e os perfis das pessoas.</p>
            </div>
            <div class="ts-box">
                <div class='ts-box-title'>
                    <span>
                        <img src="/img/site/bar-chart-outline 1.svg" alt="Equipe Experiente" title="Equipe Experiente">
                    </span>
                    <h3>Resultados gerados</h3>
                </div>
                <p>Como resultado do nosso trabalho em mais de 170 projetos, conseguimos altas taxas de redução de custos, aumento de faturamento, redução de turnover e otimização de horas trabalhadas.</p>
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
            
                    <div class="depoimentos-box" data-title="Sementes Costa Beber" data-text="Com o suporte da TS Consultoria evoluímos na estruturação da área de Recursos Humanos, focando em políticas mais humanas, aprimorando processos, implantando ferramentas e desenvolvendo, sobretudo, pessoas. Contamos com treinamentos de alto nível para desenvolver nosso time.  Somos responsáveis pela vida do colaborador durante a sua permanência na empresa e ter apoio de especialistas para, aos poucos, transformar a área de Gestão de Pessoas em estratégia de negócio, é fundamental.">
                        <div class='depoimentos-boxContainer boxActive'>
                            <span class='picture-box'>
                                <img src="img/site/Angela.jpg" alt="">
                            </span>
                            <div>
                                <h4>Angela Hendges</h4>
                                <p>Sementes Costa Beber</p>
                            </div>
                        </div>
                    </div>
                    <div class="depoimentos-box" data-title="Van Ass Sementes" data-text="Os resultados conquistados foram de mais facilidade de visão e comunicação com a equipe superando os desafios propostos pela empresa. Tendo uma equipe unida para as tarefas do dia a dia, vindo a mudar a forma de olhar para a equipe e fazendo com que cada um busque superar os desafios.">
                        <div class='depoimentos-boxContainer'>
                            <span class='picture-box'>
                                <img src="img/site/Jocemar.jpg" alt="">
                            </span>
                            <div>
                                <h4>Jocemar Zurawski</h4>
                                <p>Van Ass Sementes</p>
                            </div>
                        </div>
                    </div>
                    <div class="depoimentos-box"  data-title="Agrinova" data-text="Cada dia uma nova experiência, cada dia um conhecimento novo, aprendendo com cada colaborador uma forma diferente de resolver e solucionar problemas.">
                        <div class='depoimentos-boxContainer'>
                            <span class='picture-box'>
                                <img src="img/site/Jessica.jpg" alt="">
                            </span>
                            <div>
                                <h4>Jéssica Santos de Vargas Moura</h4>
                                <p>Agrinova</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="depoimentosBoxContent">
                    <img src="/img/site/aspas.svg" alt="" class="aspas">
                    <h4>Sementes Costa Beber</h4>
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


