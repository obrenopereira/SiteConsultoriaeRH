@extends('layouts.layout')

@section('title', 'A Empresa')

@section('headerInterno', 'interno')

@section('content')

<div class='modal-time'>
    <div class='main'>
        <div class='content'>
            <i class="fa fa-times close-time" aria-hidden="true"></i>
            <div class='top'>
                <div class='left'>
                    <img src="" alt="">
                </div>
                <div class='right'>
                    <h1></h1>
                    <h2></h2>
                    <p class='desc'>
                    </p>
                </div>
            </div>
            <div class='bottom'>
            </div>
        </div>
    </div>
</div>

<section id='cases'>
    <div class="container">
        <div class='casesDesc'>
            <h1>Conheça um pouco sobre a TS Consultoria</h1>
            <p>Com uma equipe de mais de 18 anos de experiência na área, a TS Consultoria tem como principal objetivo promover o desenvolvimento de pessoas e organizações, para que possam alcançar o seu máximo potencial.
            Com qualidade e responsabilidade, já auxiliamos mais de 120 clientes a desenvolver pessoas e processos na busca dos resultados, de estruturação de planejamentos. </p>
        </div>
        <div class='casesBackground'>
            <img src="<?php echo asset('galeria/'.$bannerPrincipal->imagem); ?>" alt="<?=$bannerPrincipal->alt_seo?>" title="<?=$bannerPrincipal->title_seo?>">
            <div class="case-tags">
                <a href="#contentExibicao" class="setaScrollDown"><img src="/img/site/seta_yellow.svg" class="scrollSeta" ></a>
            </div>
        </div>
    </div>
</section>

<section id='contentExibicao'>
    <div class='bg'>
        <img src="<?php echo asset('galeria/'.$bannerSecundario->imagem); ?>" alt="<?=$bannerSecundario->alt_seo?>" title="<?=$bannerSecundario->title_seo?>">
    </div>
    <div class='text-content'>
        <h2>Desenvolvemos pessoas e processos que geram resultados</h2>
        <p>A TS Consultoria é uma empresa de consultoria em Gestão Empresarial, Gestão Estratégica de Pessoas, Gerenciamento de Projetos e Coaching Executivo, de Negócios e de Carreira, tendo como propósito contribuir para o desenvolvimento organizacional (Resultados da Empresa) e o crescimento de seu capital humano, buscando alavancar os Resultados Estratégicos da Empresa e a carreira dos profissionais que atuam nela, gerando assim melhores Resultados Organizacionais e Pessoais. Focando em atividades que promovam reflexões e transformações, analisando como atingir seus objetivos e trabalhando junto com você para alcançá-los, a partir de Pessoas e Processos.</p>
    </div>
</section>


<section id='diferenciais'>
    <div class='container'>
        <h2>Nossos diferenciais <span></span></h2>

        <div class='diferencias-content'>
            <div class='diferenciais-box'>
                <div class='diferenciais-header'>
                    <img src="/img/site/people-outline 1_branca.svg" alt="">
                    <h3>Equipe Experiente</h3>
                </div>
                <p>Com mais de 15 anos de experiência em consultoria empresarial, nossa equipe tem total conhecimento e ferramentas para te ajudar</p>
            </div>
            <div class='diferenciais-box'>
                <div class='diferenciais-header'>
                    <img src="/img/site/folder.svg" alt="">
                    <h3>Projetos Exclusivos</h3>
                </div>
                <p>As empresas e as pessoas são únicas. Um projeto personalizado para cada situação é sempre o melhor caminho para maximizar o desempenho. Sempre respeitando a cultura da empresa e os perfis das pessoas.</p>
            </div>
            <div class='diferenciais-box'>
                <div class='diferenciais-header'>
                    <img src="/img/site/bars.svg" alt="">
                    <h3>Resultados Gerados</h3>
                </div>
                <p>Como resultado do nosso trabalho em mais de 170 projetos, conseguimos altas taxas de redução de custos, aumento de faturamento, redução de turnover e otimização de horas trabalhadas</p>
            </div>
        </div>
    </div>
</section>
<section id="CasesExibicaoSobre" class='CasesExibicao'>
    <div class='content-cases'>
        <div class="cases-content-title">
            <h2>Nossos jeito de ser</h2>
            <span class="border"></span>
        </div>
        <div class="cases-container">
            <div class="caseBox">
                <span class="caseImg">
                    <h3>Missão</h3>
                </span>
                <p class="case-text">Promover o desenvolvimento de pessoas e organizações para que possam alcançar o seu máximo potencial.</p>
            </div>
            <div class="caseBox">
                <span class="caseImg">
                    <h3>Visão</h3>
                </span>
                <p class="case-text">Despontar entre as principais empresas de Consultorias em Gestão Estratégica Empresarial e de Desenvolvimento Humano do Estado do Rio Grande do Sul, sendo reconhecida pela sua alta performance em resultados e diferenciada pela customização dos projetos, respeitando a cultura de cada instituição. </p>

            </div>
            <div class="caseBox">
                <span class="caseImg">
                    <h3>Valores</h3>
                </span>
                <p class="case-text">
                    Ética é inegociável<br/>
                    Paixão por realizar<br/>
                    Excelência com simplicidade
                </p>
            </div>
        </div>

    </div>
</section>

<section id='equipe'>
    <div class='container'>
        <div class="title">
            <h2>Conheça um pouco da nossa equipe</h2>
            <span class="border"></span>
        </div>
        <legend>Especialistas capacitados para atender a sua empresa da forma que ela precisa. Trabalhamos como um time. São essas pessoas que estarão ao seu lado para te ajudar a alcançar o resultado que você deseja.</legend>

        <div class='equipe-container'>
            <div class='equipe-box' >
                <span class='gradient'></span>
                <img class='foto-equipe' src="/img/site/Tatiane.jpg" alt="">
                <div class='equipe-desc'>
                    <h4>Tatiane da Costa</h4>
                    <p class='cargo'>Diretora e Consultora</p>
                    <span class='border'></span>

                    <legend style="display: none;">Profissional com 18 anos de experiência no desenvolvimento de pessoas e organizações dos mais diversos segmentos (metalúrgica, fumageira, bancário, comércio, agronegócio, entre outros) implantando e desenvolvendo todos os subsistemas de gestão de pessoas e gestão empresarial, com foco em resultados embasados nos procedimentos e políticas da empresa. Também ministra treinamentos e palestras ligados à área comportamental e é professora convidada na MBA de Coaching e Gerenciamento de Pessoas da Unijuí.</legend>
                </div>
            </div>
            <div class='equipe-box'>
                <span class='gradient'></span>
                <img class='foto-equipe' src="/img/site/Alan.jpg" alt="">
                <div class='equipe-desc'>
                    <h4>Alan da Costa</h4>
                    <p class='cargo'>Gerente de projetos e obras</p>
                    <span class='border'></span>
                    <legend style="display: none;">Com mais de 18 anos de experiência no ambiente corporativo em multinacional líder do segmento de armazenagem de grãos nas áreas de Engenharias e Planejamento (Gestão de S&OP), atuou durante vários anos no desenvolvimento de layouts e sistemas de armazenagem de grãos na agroindústria.
                        Por 8 anos foi responsável pela coordenação técnica de equipes de engenharia no desenvolvimento de projetos de unidades agrícolas. Desde o nível fazenda até grandes sistemas de transporte e armazenagem de alta capacidade. Também responsável pela gestão de equipes multidisciplinares e equipes terceirizadas, voltado na implantação de melhores práticas na gestão de obras e projetos, desenvolvendo atividades deste a avaliação de viabilidade até a montagem final.
                    </legend>
                </div>
            </div>
            <div class='equipe-box'>
                <span class='gradient'></span>
                <img class='foto-equipe' src="/img/site/Paloma.jpg" alt="">
                <div class='equipe-desc'>
                    <h4>Paloma Parcianelos</h4>
                    <p class='cargo'>Consultora em gestão de pessoas</p>
                    <span class='border'></span>
                    <legend style="display: none;">Consultora em Gestão de Pessoas, graduada em Psicologia pela URI Santo  ngelo/RS, especialista em Gestão Estratégica de Pessoas pela ULBRA, com formação de Analista de RH Generalista.</legend>
                </div>
            </div>
            <div class='equipe-box'>
                <span class='gradient'></span>
                <img class='foto-equipe' src="/img/site/Fabiane.jpeg" alt="">
                <div class='equipe-desc'>
                    <h4>Fabiane Trentini</h4>
                    <p class='cargo'>Parceira e consultora de gestão de pessoas</p>
                    <span class='border'></span>

                    <legend style="display: none;">Com mais de 10 anos de experiência em lideranças e gestão de pessoas, também é analista de RH Generalista, Business Partner de RH, Gestão de Cargos e Salários, Pedagoga, Especialista na área de Recursos Humanos e Gestão de Pessoas.
                    </legend>
                </div>
            </div>
            <div class='equipe-box'>
                <span class='gradient'></span>
                <img class='foto-equipe' src="/img/site/Fernando.jpeg" alt="">
                <div class='equipe-desc'>
                    <h4>Fernando Anton</h4>
                    <p class='cargo'>Parceiro em ISO, Sistemas de Qualidade Lean </p>
                    <span class='border'></span>

                    <legend style="display: none;">Manufacturing<br/>
                        Engenheiro de qualidade com mais de cinco anos de experiência em qualidade, atuando em diferentes áreas da qualidade, manufatura e vendas.
                        </legend>
                    <textarea style="display: none;"></textarea>
                </div>
            </div>
            <div class='equipe-box'>
                <span class='gradient'></span>
                <img class='foto-equipe' src="/img/site/Marcos.jpeg" alt="">
                <div class='equipe-desc'>
                    <h4>Marcos Zembruski</h4>
                    <p class='cargo'>Parceiro especialista LEAN e gerente de projetos</p>
                    <span class='border'></span>

                    <legend style="display: none;">Experiência em manufatura, qualidade e projetos, em empresas de grande porte do setor agrícola (nacionais e multinacionais), implantando e desenvolvendo melhorias de produtos e processos, com ganhos comprovados na redução de custos e aumento de produtividade.
                    </legend>
                </div>
            </div>

            <div class='equipe-box'>
                <span class='gradient'></span>
                <img class='foto-equipe' src="/img/site/Taisa.jpg" alt="">
                <div class='equipe-desc'>
                    <h4>Taisa Kumm</h4>
                    <p class='cargo'> Parceira em treinamento Plata, planejamento ambiental e ocupacional</p>
                    <span class='border'></span>

                    <legend style="display: none;">Ergonomista, Gestora ambiental, Especialista em Licenciamento Ambiental, Técnica em Segurança do Trabalho, Graduada em Gestão Ambiental – Unopar e Pós Graduação em Licenciamento Ambiental - Uri Santo  ngelo, Pós Graduação em Ergonomia e Promoção da saúde do trabalhador – Isepe Guaratuba, Administração e assistência técnica em empresas clientes, treinamentos diversos na área ocupacional, acompanhamento de perícias trabalhistas, defesas junto ao ministério do Trabalho e promotoria.
                    </legend>
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
        <a href="https://api.whatsapp.com/send?phone=5555984552255" target="_blank">Quero agendar uma reunião<img src="/img/site/seta_grande_preta.svg"></a>
    </div>
</section>
@stop




