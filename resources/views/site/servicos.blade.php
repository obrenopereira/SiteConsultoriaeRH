@extends('layouts.layout')

@section('title', 'Serviços')

@section('headerInterno', 'interno')

@section('content')
@if($tag)
<input type="hidden" id='tag' value='<?=$tag?>'>
@endif
<section id="servicos" class='content-header-1'>
    <div class='content-header-left'>
        <h1>Desenvolvemos pessoas e processos que geram resultados</h1>
        <p>Com uma equipe de mais de 18 anos de experiência na área, a TS Consultoria tem como principal objetivo promover o desenvolvimento de pessoas e organizações, para que possam alcançar o seu máximo potencial.
          Com qualidade e responsabilidade, já auxiliamos mais de 120 clientes a desenvolver pessoas e processos na busca dos resultados, da estruturação de processos e de planejamentos e projetos. </p>
    </div>
    <div class='content-header-right'>
        <div class="title">
            <h3>Metodologia</h3>
            <h2>Nossa metodologia de trabalho</h2>
        </div>
        <p class="descMetodologia">Consiste em um formato de trabalho personalizado para cada serviço que disponibilizamos, entregando o melhor resultado dentro dos padrões de cada cliente e de mercado. Para isso, um forte sistema de capacitação de pessoas, com processos bem definidos e estruturados, levam a cada cliente o resultado que as pessoas e as organizações esperam. 
            Trabalhamos a partir do diagnóstico de cada situação para entregar a melhor solução, seja na área de Consultoria em Gestão Empresarial, em Gestão Estratégica de Pessoas, Recrutamento e Seleção de Pessoal, Coaching ou Gerenciamento de Projetos. 
            Vamos contribuir para o desenvolvimento organizacional e o crescimento de seu capital humano, buscando alavancar os Resultados Estratégicos da Empresa e da Carreira das pessoas que nela atuam, gerando, assim, engajamento e sucesso empresarial e profissional. <br/>Para termos todos estes dados bem alinhados para você Gestor, realizamos:
        </p>

        <div class="tags-servicos">

            <!-- TAG -->
            <div class="tags-servicos-box">
                <div>
                    <span>
                        <img src="/img/site/skill.svg" alt="">
                    </span>
                    <p>Análise</p>
                </div>
                <img src="/img/site/seta_tiny.png" class="seta_tiny" alt="">
            </div>
            <!-- ----- -->

            <!-- TAG -->
            <div class="tags-servicos-box">
                <div>
                    <span>
                        <img src="/img/site/skill.svg" alt="">
                    </span>
                    <p>Possíveis soluções</p>
                </div>
                <img src="/img/site/seta_tiny.png" class="seta_tiny" alt="">
            </div>
            <!-- ----- -->

            <!-- TAG -->
            <div class="tags-servicos-box">
               <div>
                    <span>
                        <img src="/img/site/skill.svg" alt="">
                    </span>
                    <p>Execução</p>
               </div>
            </div>
            <!-- ----- -->
           
        </div>
        <div class="subtitle">
            <h2>Quais serviços a TS Consultoria oferece?</h2>
            <span class="border"></span>
        </div>
        <div class="servicos-collapse">
            <div class="collapse-box <?php echo @($tag && $tag == 'gestao-empresarial') ? 'collapse-active': '' ?>" id="gestao-empresarial">
                <div class="collapse-header">
                    <span>
                        <img src="/img/site/predio.png" alt="">
                    </span>
                    <h4>Consultoria em Gestão Empresarial</h4>
                    <img src="/img/site/seta_collapse.png" class='seta_open' alt="">
                </div>
                <div class="collapse-body">
                    <p>Atuamos com ações e estratégias aplicadas de forma personalizada em cada empresa, proporcionando uma visão holística e estratégica das atividades empresariais, com foco na criação de valor e resultados planejados para a sua empresa.
                        Nosso trabalho é desenvolvido a partir processos de consultoria, coaching em grupo e individual, gerenciamento de projetos, treinamentos e palestras para atingir o seu resultado. 
                        A TS Consultoria orienta você, empresário, na tomada de decisões estratégicas que buscam o sucesso sustentável, a partir da realização do Diagnóstico Organizacional, da elaboração do Planejamento Estratégico e Análise e Implementação de Processos, Fluxo e Desenvolvimento Humano.</p>
                    <a href="https://api.whatsapp.com/send?phone=5555996879915" target="_blank">Fale com um especialista <img src="/img/site/seta_preta.svg" alt=""></a>
                </div>
            </div>
            <div class="collapse-box <?php echo @($tag && $tag == 'gestao-pessoas') ? 'collapse-active': '' ?>" id="gestao-pessoas">
                <div class="collapse-header">
                    <span>
                        <img src="/img/site/people_servico.png" alt="">
                    </span>
                    <h4>Consultoria em Gestão de Pessoas</h4>
                    <img src="/img/site/seta_collapse.png" class='seta_open' alt="">
                </div>
                <div class="collapse-body">
                    <p>Pessoas são a grande força motriz na criação de fatores críticos de sucesso para o bom desempenho da empresa, começamos pela definição da Missão, da Visão e dos Valores, que, juntos, formam a cultura organizacional. Sendo, Pessoas e Processos o diferencial para o atingimento dos Resultados de qualquer organização. Também direcionamos o olhar para a aprendizagem organizacional, visão sistêmica e valorização das pessoas.
</p>
                    <a href="https://api.whatsapp.com/send?phone=5555996879915" target="_blank">Fale com um especialista <img src="/img/site/seta_preta.svg" alt=""></a>
                </div>
            </div>
            <div class="collapse-box <?php echo @($tag && $tag == 'selecao-pessoal') ? 'collapse-active': '' ?>" id="selecao-pessoal">
                <div class="collapse-header">
                    <span>
                        <img src="/img/site/body_outline_servico.png" alt="">
                    </span>
                    <h4>Recrutamento e Seleção de Pessoal</h4>
                    <img src="/img/site/seta_collapse.png" class='seta_open' alt="">
                </div>
                <div class="collapse-body">
                    <p style='margin-bottom: 0px'>Com um processo de R&S alinhado às necessidades de cada cliente, temos a oportunidade de cruzar informações do perfil da empresa, perfil do cargo e perfil do candidato, sendo possível identificar características que agregam ou não valor à empresa, assim como para o candidato. Para termos todos estes dados bem alinhados para você Gestor realizamos:
                    <ul>
                        <li>Análise de currículos</li>
                        <li>Jogos, Dinâmica e Simulação em Grupo</li>
                        <li>Avaliação Psicológica</li>
                        <li>Pesquisa de Perfil Comportamental</li>
                        <li>Entrevista Individual por competência</li>
                        <li>Encaminhamento dos indicados ao requisitante</li>
                    </ul>
                    </p>
                    <a href="https://api.whatsapp.com/send?phone=5555996879915" target="_blank">Fale com um especialista <img src="/img/site/seta_preta.svg" alt=""></a>
                </div>
            </div>
            <div class="collapse-box <?php echo @($tag && $tag == 'gerenciamento-projetos') ? 'collapse-active': '' ?>" id="gerenciamento-projetos">
                <div class="collapse-header">
                    <span>
                        <img src="/img/site/megafone.png" alt="">
                    </span>
                    <h4>Gerenciamento de Projetos</h4>
                    <img src="/img/site/seta_collapse.png" class='seta_open' alt="">
                </div>
                <div class="collapse-body">
                    <p>Este mercado de gerenciamento formata modelos de projetos únicos, devido às suas necessidades e contratos que se adequam a possibilidade de cada cliente, atendendo rigorosamente seus cronogramas físico-financeiros, onde o cliente só investe no que está concretizado, ou seja, com disciplina e segurança as organizações terão a garantia de que seus projetos obterão êxito e que estes serão realizados dentro dos parâmetros de lucratividade da organização.
                        Temos o foco de trabalho direcionado à exclusividade, pois nenhum projeto é igual ao outro, criando formas específicas, personalizando seu trabalho e oferecendo serviços cada vez mais atraentes.
</p>
                    <a href="https://api.whatsapp.com/send?phone=5555996879915" target="_blank">Fale com um especialista <img src="/img/site/seta_preta.svg" alt=""></a>
                </div>
            </div>
            <div class="collapse-box <?php echo @($tag && $tag == 'coaching-executivo') ? 'collapse-active': '' ?>" id="coaching-executivo">
                <div class="collapse-header">
                    <span>
                        <img src="/img/site/folder_servico.png" alt="">
                    </span>
                    <h4>Coaching para Executivos, para seu Negócio e sua Carreira
</h4>
                    <img src="/img/site/seta_collapse.png" class='seta_open' alt="">
                </div>
                <div class="collapse-body">
                    <p>A essência do coaching é apoiar pessoas, grupos e/ou empresas a mudar sua forma de atuar e ir em direção ao que deseja, na direção de suas metas e objetivos. O coaching apoia pessoas em todos os níveis, para que se tornem quem querem ser e sejam o melhor que possam ser. O Processo de coaching libera o potencial do indivíduo para que este maximize seu desempenho e faça o que antes acreditava impossível, gerando resultado para si e para Empresa onde atua.</p>
                    <a href="https://api.whatsapp.com/send?phone=5555996879915" target="_blank">Fale com um especialista <img src="/img/site/seta_preta.svg" alt=""></a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="banner-separetor">
    <div class="text">
        <h2>Pessoas + Processos</h2>
        <h3>Resultados</h3>
    </div>
    <div class="banner">
        <img src="<?php echo asset('storage/galeria/'.$bannerUnico->imagem); ?>" alt="<?=$bannerUnico->alt_seo?>" title="<?=$bannerUnico->title_seo?>">
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




