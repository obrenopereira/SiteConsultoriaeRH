<?php 
    header("Content-type: text/css; charset: UTF-8");

    $blueDark = $configuracoes->cor_primaria;
    $blueLight = $configuracoes->auxiliar_primaria_1;
    $blueSoftLight = $configuracoes->auxiliar_secundaria_1;
    
    $orange = $configuracoes->cor_secundaria;
    $orangeLight = $configuracoes->auxiliar_primaria_2;
?>

<style>
.skills .container .skills-box .skill-box-inside h4, #consultaGratis .container h2, #depoimentos .container .depoimentos-list h3, .bannerHome .bannerHomeText h1 {
  font-family: "Ubuntu";
  font-size: 4em;
  font-weight: 600;
  line-height: 110%;
}
@media (max-width: 1024px) {
  .skills .container .skills-box .skill-box-inside h4, #consultaGratis .container h2, #depoimentos .container .depoimentos-list h3, .bannerHome .bannerHomeText h1 {
    font-size: 3em;
  }
}
@media (max-width: 425px) {
  .skills .container .skills-box .skill-box-inside h4, #consultaGratis .container h2, #depoimentos .container .depoimentos-list h3, .bannerHome .bannerHomeText h1 {
    font-size: 2em;
  }
}
@media (max-width: 320px) {
  .skills .container .skills-box .skill-box-inside h4, #consultaGratis .container h2, #depoimentos .container .depoimentos-list h3, .bannerHome .bannerHomeText h1 {
    font-size: 1.7em;
  }
}

.content-header-1 .content-header-right .title h2, .content-header-1 .content-header-left h1, .backgroundHomeContainer .BackgroundHomeText h2, #servicosHome .servicos-container .servicosExibicao h3, .content-header-1 .content-header-right .subtitle h2, #ts-consultoria .subtitle h2, .subtitleCases h2 {
  font-family: "Ubuntu";
  font-size: 3em;
  font-weight: 400;
  line-height: 110%;
}

header nav .navbar li a {
  font-family: "Mukta";
  font-size: 1.125em;
  font-weight: 400;
  line-height: 130%;
}

.candidatura-content .candidatura-form button, #vaga-interno .container .box-right .share-content .share-button, #vaga-interno .container .box-left .box-left-bottom a, .vagas-container .vagas-box .vagas-box-bottom a, .content-header-1 .content-header-right .servicos-collapse .collapse-box .collapse-body a, .contato .container form button, .CasesExibicao .content-cases .vejaMaisCases, #consultaGratis .container a, .backgroundHomeContainer .BackgroundHomeText a, .bannerHome .bannerHomeText .faleConosco {
  font-family: "Mukta";
  font-style: normal;
  font-weight: 400;
  font-size: 1.563em;
  line-height: 142.5%;
  color: #fff;
  padding: 0.5em 1.5em;
  background-color: <?php echo $orange; ?>;
  border-radius: 0.25em;
  display: flex;
  align-items: center;
  justify-content: center;
  cursor: pointer;
  text-decoration: none;
}
@media (max-width: 768px) {
  .candidatura-content .candidatura-form button, #vaga-interno .container .box-right .share-content .share-button, #vaga-interno .container .box-left .box-left-bottom a, .vagas-container .vagas-box .vagas-box-bottom a, .content-header-1 .content-header-right .servicos-collapse .collapse-box .collapse-body a, .contato .container form button, .CasesExibicao .content-cases .vejaMaisCases, #consultaGratis .container a, .backgroundHomeContainer .BackgroundHomeText a, .bannerHome .bannerHomeText .faleConosco {
    font-size: 1.3em;
  }
}
@media (max-width: 425px) {
  .candidatura-content .candidatura-form button, #vaga-interno .container .box-right .share-content .share-button, #vaga-interno .container .box-left .box-left-bottom a, .vagas-container .vagas-box .vagas-box-bottom a, .content-header-1 .content-header-right .servicos-collapse .collapse-box .collapse-body a, .contato .container form button, .CasesExibicao .content-cases .vejaMaisCases, #consultaGratis .container a, .backgroundHomeContainer .BackgroundHomeText a, .bannerHome .bannerHomeText .faleConosco {
    font-size: 1.2em;
  }
}
.candidatura-content .candidatura-form button:hover, #vaga-interno .container .box-right .share-content .share-button:hover, #vaga-interno .container .box-left .box-left-bottom a:hover, .vagas-container .vagas-box .vagas-box-bottom a:hover, .content-header-1 .content-header-right .servicos-collapse .collapse-box .collapse-body a:hover, .contato .container form button:hover, .CasesExibicao .content-cases .vejaMaisCases:hover, #consultaGratis .container a:hover, .backgroundHomeContainer .BackgroundHomeText a:hover, .bannerHome .bannerHomeText .faleConosco:hover {
  background-color: #e44715;
}

.content-header-1 .content-header-right .subtitle, #ts-consultoria .subtitle, .subtitleCases {
  display: flex;
  flex-direction: column;
}
.content-header-1 .content-header-right .subtitle h2, #ts-consultoria .subtitle h2, .subtitleCases h2 {
  color: <?php echo $blueDark; ?>;
}
@media (max-width: 320px) {
  .content-header-1 .content-header-right .subtitle h2, #ts-consultoria .subtitle h2, .subtitleCases h2 {
    font-size: 2em;
    line-height: 45px;
  }
}

.contato .container .title .tags span, .case_interno .container .casesBackground .case-tags span, .CasesExibicao .content-cases .caseBox .info-cases div span {
  background-color: #FFD8CC;
  padding: 2px 10px;
  color: <?php echo $orange; ?>;
  font-size: 14px;
  font-family: "Mukta";
  font-weight: 300;
  border-radius: 4px;
  margin-right: 8px;
}
.contato .container .title .tags span:last-child, .case_interno .container .casesBackground .case-tags span:last-child, .CasesExibicao .content-cases .caseBox .info-cases div span:last-child {
  margin-right: 0px;
}
.contato .container .title .tags span .border, .case_interno .container .casesBackground .case-tags span .border, .CasesExibicao .content-cases .caseBox .info-cases div span .border {
  height: 2px;
  width: 7.063em;
  background-color: <?php echo $orange; ?>;
  margin-top: 19px;
}

.contato .container .title, .skills .container .title, .fases .container .title, .case-intro .container .title, .CasesExibicao .content-cases .cases-content-title {
  display: flex;
  flex-direction: column;
}
.contato .container .title h3, .skills .container .title h3, .fases .container .title h3, .case-intro .container .title h3, .CasesExibicao .content-cases .cases-content-title h3 {
  color: <?php echo $orange; ?>;
  font-family: "Mukta";
  font-size: 25px;
}
.contato .container .title h2, .skills .container .title h2, .fases .container .title h2, .case-intro .container .title h2, .CasesExibicao .content-cases .cases-content-title h2 {
  font-family: "Ubuntu";
  color: <?php echo $blueLight; ?>;
  font-size: 48px;
  margin-top: 7px;
  margin-bottom: 15px;
}
@media (max-width: 425px) {
  .contato .container .title h2, .skills .container .title h2, .fases .container .title h2, .case-intro .container .title h2, .CasesExibicao .content-cases .cases-content-title h2 {
    font-size: 39px;
  }
}
.contato .container .title .border, .skills .container .title .border, .fases .container .title .border, .case-intro .container .title .border, .CasesExibicao .content-cases .cases-content-title .border {
  width: 113px;
  height: 2px;
  display: flex;
  background-color: <?php echo $orange; ?>;
  margin-top: 7px;
}

@keyframes kick {
  0% {
    transform: translateY(0px);
  }
  100% {
    transform: translateY(100%);
  }
}
/* Header */
main {
  position: relative;
}

.menu-mobile {
  display: none;
}

header {
  background: transparent;
  position: absolute;
  left: 0;
  top: 0;
  z-index: 100;
  width: 100%;
}
@media (max-width: 768px) {
  header .menu-mobile {
    display: flex;
    align-items: center;
    z-index: 99;
    cursor: pointer;
    justify-content: center;
  }
  header .menu-mobile .burguer-menu {
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: transparent;
    border: none;
    outline: none;
    cursor: pointer;
  }
  header .menu-mobile .close-menu {
    display: none;
    align-items: center;
    justify-content: center;
    background-color: transparent;
    border: none;
    outline: none;
    cursor: pointer;
  }
}
header nav {
  padding: 2.678em 3em;
  display: flex;
  align-items: center;
  justify-content: space-between;
}
@media (max-width: 320px) {
  header nav {
    padding: 2.678em 2em;
  }
}
header nav .logotipo img {
  width: 12em;
}
@media (max-width: 320px) {
  header nav .logotipo img {
    width: 9em;
  }
}
header nav .navbar {
  display: flex;
  align-items: center;
  justify-content: space-between;
  height: 100%;
}
@media (max-width: 768px) {
  header nav .navbar {
    display: flex;
    position: fixed;
    right: -100em;
    top: 0;
    width: 100%;
    height: 100%;
    flex-direction: column;
    background-color: <?php echo $blueDark; ?>;
    justify-content: center;
    transition: 0.3s ease-out;
  }
}
header nav .navbar li {
  height: 100%;
}
@media (max-width: 768px) {
  header nav .navbar li {
    width: 100%;
    height: 6em;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 1em;
  }
}
header nav .navbar li a {
  height: 100%;
  display: flex;
  align-items: center;
  justify-content: center;
  color: #fff;
  text-decoration: none;
  text-transform: uppercase;
  transition: 0.3s;
  margin-right: 3.25em;
  padding-bottom: 0.4em;
}
@media (max-width: 768px) {
  header nav .navbar li a {
    width: 86%;
    margin-right: 0em;
  }
}
header nav .navbar li a:hover {
  border-bottom: 2px solid <?php echo $orangeLight; ?>;
}
header nav .navbar li .active {
  border-bottom: 2px solid <?php echo $orangeLight; ?>;
}
@media (max-width: 768px) {
  header nav .navbar li .active {
    background-color: <?php echo $orangeLight; ?>;
  }
}
@media (max-width: 768px) {
  header nav .navbar li:last-child {
    margin-bottom: 0em;
  }
}
header nav .navbar li:last-child a {
  margin-right: 0em;
}
header nav .navbar-active {
  right: 0em;
}

.interno {
  background-color: <?php echo $blueDark; ?>;
  position: relative;
}

/* Homepage */
.bannerHome {
  display: flex;
  align-items: center;
  justify-content: center;
  overflow: hidden;
  height: 44em;
  position: relative;
}
@media (max-width: 1024px) {
  .bannerHome {
    height: 42em;
  }
}
@media (max-width: 320px) {
  .bannerHome {
    height: 35em;
  }
}
.bannerHome img {
  width: 100%;
}
@media (max-width: 768px) {
  .bannerHome .bannerIMG {
    width: auto;
    height: 100%;
  }
}
.bannerHome .gradient1 {
  position: absolute;
  left: 0;
  top: 0;
  z-index: 3;
  background: linear-gradient(235.27deg, #0582CA -20.6%, rgba(5, 130, 202, 0.408513) 20.36%, rgba(5, 130, 202, 0.232479) 40.49%, rgba(5, 130, 202, 0) 78.66%);
  width: 100%;
  height: 100%;
}
.bannerHome .gradient2 {
  position: absolute;
  left: 16em;
  top: 0;
  z-index: 2;
  background: linear-gradient(87.05deg, <?php echo $blueDark; ?> 7.57%, rgba(0, 53, 84, 0.924175) 18.03%, rgba(0, 53, 84, 0.77806) 31.62%, rgba(0, 53, 84, 0.542937) 50.29%, rgba(0, 53, 84, 0.372621) 65.91%, rgba(0, 53, 84, 0.263191) 70.05%, rgba(0, 53, 84, 0) 82.96%);
  width: 100%;
  height: 100%;
}
@media (max-width: 425px) {
  .bannerHome .gradient2 {
    left: 5em;
    transform: rotate(180deg);
  }
}
.bannerHome .gradient3 {
  position: absolute;
  left: 0;
  top: 0;
  z-index: 1;
  background: linear-gradient(85.93deg, <?php echo $blueDark; ?> 10.99%, rgba(0, 53, 84, 0.924175) 36.02%, rgba(0, 53, 84, 0.77806) 51.26%, rgba(0, 53, 84, 0.542937) 70.95%, rgba(0, 53, 84, 0.372621) 78.93%, rgba(0, 53, 84, 0.263191) 83.76%, rgba(0, 53, 84, 0) 98.8%);
  width: 100%;
  height: 100%;
}
.bannerHome .bannerHomeText {
  position: absolute;
  z-index: 5;
  display: flex;
  flex-direction: column;
  padding: 0em 6.339em;
  width: 90%;
  align-items: flex-start;
  margin-top: 2em;
}
@media (max-width: 1024px) {
  .bannerHome .bannerHomeText {
    width: auto;
  }
}
@media (max-width: 1024px) {
  .bannerHome .bannerHomeText {
    width: auto;
    padding: 0em 3em;
  }
}
@media (max-width: 320px) {
  .bannerHome .bannerHomeText {
    padding: 0em 2em;
  }
}
.bannerHome .bannerHomeText h1 {
  font-weight: 500;
  color: <?php echo $blueLight; ?>;
  line-height: 70.4px;
  width: 42%;
  margin-bottom: 33px;
}
@media (max-width: 1024px) {
  .bannerHome .bannerHomeText h1 {
    width: 60%;
    line-height: 58.4px;
  }
}
@media (max-width: 425px) {
  .bannerHome .bannerHomeText h1 {
    width: 100%;
    line-height: 42px;
    margin-bottom: 2em;
  }
}
@media (max-width: 320px) {
  .bannerHome .bannerHomeText h1 {
    margin-bottom: 1em;
  }
}
.bannerHome .bannerHomeText h2 {
  font-family: "Mukta";
  font-size: 1.563em;
  color: <?php echo $blueLight; ?>;
  line-height: 35.62px;
  width: 34%;
  margin-bottom: 27px;
}
@media (max-width: 1024px) {
  .bannerHome .bannerHomeText h2 {
    width: 65%;
  }
}
@media (max-width: 425px) {
  .bannerHome .bannerHomeText h2 {
    width: 100%;
    font-size: 1.2em;
  }
}
@media (max-width: 320px) {
  .bannerHome .bannerHomeText h2 {
    font-size: 1em;
    line-height: 26.62px;
  }
}
@media (max-width: 425px) {
  .bannerHome .scrollSeta {
    display: none;
  }
}

.scrollSeta {
  width: auto;
  position: absolute;
  right: 8em;
  bottom: 11.125em;
  z-index: 5;
  cursor: pointer;
  animation: kick 1s cubic-bezier(0.53, -0.03, 0.67, 1.06);
  animation-direction: alternate;
  animation-iteration-count: infinite;
}
@media (max-width: 425px) {
  .scrollSeta {
    bottom: 3.125em;
  }
}

.homebar {
  background-color: <?php echo $blueLight; ?>;
  padding: 1em 4.339em;
  display: flex;
  align-items: center;
  justify-content: space-between;
}
@media (max-width: 1024px) {
  .homebar {
    padding: 1em 3em;
  }
}
@media (max-width: 768px) {
  .homebar {
    display: none;
  }
}
.homebar .homebar-box {
  display: flex;
  align-items: center;
  position: relative;
  margin-right: 6em;
}
@media (max-width: 1440px) {
  .homebar .homebar-box {
    margin-right: 4em;
  }
}
@media (max-width: 1024px) {
  .homebar .homebar-box {
    margin-right: 1.5em;
  }
}
.homebar .homebar-box h3 {
  color: <?php echo $blueDark; ?>;
  font-size: 3.125em;
  font-family: "Ubuntu";
  font-weight: 500;
  margin-right: 10px;
}
@media (max-width: 1024px) {
  .homebar .homebar-box h3 {
    font-size: 2em;
  }
}
.homebar .homebar-box p {
  color: <?php echo $blueDark; ?>;
  font-family: "Ubuntu";
  font-size: 1.563em;
  font-weight: 400;
  width: 8em;
}
@media (max-width: 1440px) {
  .homebar .homebar-box p {
    width: auto;
  }
}
@media (max-width: 1024px) {
  .homebar .homebar-box p {
    font-size: 1.2em;
  }
}
.homebar .homebar-box span {
  background-color: <?php echo $orange; ?>;
  width: 0.125em;
  height: 2.313em;
  display: flex;
}
.homebar .homebar-box:last-child {
  margin-right: 0em;
}

#homebar-mobile {
  display: none;
}

@media (max-width: 768px) {
  #homebar-mobile {
    display: flex;
    align-items: flex-start;
    width: 100%;
    display: flex;
    align-items: center;
    margin: auto;
    overflow: hidden;
    position: relative;
  }
  #homebar-mobile .homebar-mobile-content {
    background-color: <?php echo $blueSoftLight; ?>;
    height: 84px;
    padding: 18px 28px;
  }
  #homebar-mobile .homebar-mobile-content .homebar-mobile-box {
    display: flex;
    height: 100%;
    position: relative;
    align-items: center;
    width: 19em !important;
    margin-right: 4em;
  }
}
@media (max-width: 768px) and (max-width: 425px) {
  #homebar-mobile .homebar-mobile-content .homebar-mobile-box {
    width: 13em !important;
    margin-right: 3em;
    padding-right: 3em;
  }
}
@media (max-width: 768px) {
  #homebar-mobile .homebar-mobile-content .homebar-mobile-box span {
    display: flex;
    flex-direction: column;
    margin-left: 14px;
  }
  #homebar-mobile .homebar-mobile-content .homebar-mobile-box span h5 {
    font-size: 22px;
    font-weight: 300;
    line-height: 30px;
    font-family: "Ubuntu";
    color: <?php echo $blueDark; ?>;
  }
  #homebar-mobile .homebar-mobile-content .homebar-mobile-box span p {
    font-family: "Ubuntu";
    font-weight: 300;
    font-size: 12px;
    line-height: 20px;
    color: <?php echo $blueDark; ?>;
  }
  #homebar-mobile .homebar-mobile-content .homebar-mobile-box span label {
    width: 1px;
    height: 70%;
    background-color: <?php echo $orange; ?>;
    right: 0;
    display: flex;
    position: absolute;
  }
}
#servicosHome .servicos-container {
  padding: 9em 6.339em;
  display: flex;
  justify-content: space-between;
}
@media (max-width: 1024px) {
  #servicosHome .servicos-container {
    padding: 6em 3em;
  }
}
@media (max-width: 769px) {
  #servicosHome .servicos-container {
    flex-direction: column;
  }
}
@media (max-width: 425px) {
  #servicosHome .servicos-container {
    padding: 4em 3em;
  }
}
@media (max-width: 320px) {
  #servicosHome .servicos-container {
    padding: 3em 2em;
  }
}
#servicosHome .servicos-container .servicosExibicao {
  width: 42%;
}
@media (max-width: 1024px) {
  #servicosHome .servicos-container .servicosExibicao {
    width: 47%;
  }
}
@media (max-width: 769px) {
  #servicosHome .servicos-container .servicosExibicao {
    width: 100%;
  }
}
#servicosHome .servicos-container .servicosExibicao h2 {
  font-family: "Mukta";
  color: <?php echo $orange; ?>;
  font-size: 1.563em;
  margin-bottom: 20px;
}
#servicosHome .servicos-container .servicosExibicao h3 {
  color: <?php echo $blueDark; ?>;
  line-height: 60.72px;
  margin-bottom: 22px;
  width: 75%;
}
@media (max-width: 1024px) {
  #servicosHome .servicos-container .servicosExibicao h3 {
    width: 87%;
    font-size: 2em;
    line-height: 48.72px;
  }
}
@media (max-width: 375px) {
  #servicosHome .servicos-container .servicosExibicao h3 {
    width: 100%;
    font-size: 1.5em;
    line-height: 41.72px;
  }
}
#servicosHome .servicos-container .servicosExibicao .servicosTags {
  display: flex;
  flex-wrap: wrap;
  align-content: flex-start;
  width: 79%;
}
@media (max-width: 1024px) {
  #servicosHome .servicos-container .servicosExibicao .servicosTags {
    width: 100%;
    margin-top: 2em;
  }
}
#servicosHome .servicos-container .servicosExibicao .servicosTags p {
  font-family: "Mukta";
  font-size: 1em;
  color: <?php echo $orange; ?>;
  padding: 5px 10px;
  background-color: #FFD8CC;
  border-radius: 4px;
  margin-right: 12px;
  margin-bottom: 16px;
  font-weight: 300;
}
@media (max-width: 320px) {
  #servicosHome .servicos-container .servicosExibicao .servicosTags p {
    font-size: 0.9em;
  }
}
#servicosHome .servicos-container .servicosExibicao .servicosTags p:last-child {
  margin-right: 0px;
}
#servicosHome .servicos-container .servicosList {
  width: 43%;
}
@media (max-width: 1024px) {
  #servicosHome .servicos-container .servicosList {
    width: 51%;
  }
}
@media (max-width: 769px) {
  #servicosHome .servicos-container .servicosList {
    width: 100%;
    margin-top: 3em;
  }
}
#servicosHome .servicos-container .servicosList .servicoBox {
  overflow: hidden;
  height: 2.6em;
  margin-bottom: 2em;
  transition: 0.5s ease-out;
}
@media (max-width: 1440px) {
  #servicosHome .servicos-container .servicosList .servicoBox {
    height: 2.8em;
  }
  #servicosHome .servicos-container .servicosList .servicoBox .servicoDesc {
    padding-top: 0.5em;
  }
}
#servicosHome .servicos-container .servicosList .servicoBox h4 {
  font-family: "Mukta";
  font-size: 1.563em;
  color: #BDBDBD;
  border-bottom: 2px solid #E0E0E0;
  padding-bottom: 14px;
  cursor: pointer;
}
@media (max-width: 1024px) {
  #servicosHome .servicos-container .servicosList .servicoBox h4 {
    font-size: 1.4em;
  }
}
#servicosHome .servicos-container .servicosList .servicoBoxActive {
  height: auto;
  margin-bottom: 3em;
}
#servicosHome .servicos-container .servicosList .servicoBoxActive h4 {
  color: <?php echo $blueDark; ?>;
  padding-bottom: 22px;
  border-bottom: 2px solid <?php echo $orange; ?>;
  margin-bottom: 22px;
}
#servicosHome .servicos-container .servicosList .servicoBoxActive .servicoDesc p {
  font-family: "Mukta";
  font-weight: 300;
  line-height: 25.52px;
  font-size: 1em;
  color: <?php echo $blueDark; ?>;
  margin-bottom: 1.5em;
}
#servicosHome .servicos-container .servicosList .servicoBoxActive .servicoDesc a {
  text-decoration: none;
  color: <?php echo $orange; ?>;
  font-family: "Mukta";
  font-weight: 500;
  font-size: 16px;
  padding: 5px 0px;
}

.backgroundHomeContainer {
  display: flex;
  justify-content: space-between;
  height: 43.375em;
}
@media (max-width: 769px) {
  .backgroundHomeContainer {
    height: auto;
    flex-direction: column;
  }
}
.backgroundHomeContainer .backgroundHomeImg {
  width: 50%;
  height: 100%;
  display: flex;
  align-items: center;
  justify-content: center;
  overflow: hidden;
}
@media (max-width: 769px) {
  .backgroundHomeContainer .backgroundHomeImg {
    width: 100%;
    height: 22em;
  }
}
.backgroundHomeContainer .backgroundHomeImg img {
  width: 100%;
}
@media (max-width: 769px) {
  .backgroundHomeContainer .backgroundHomeImg img {
    height: auto;
    width: 100%;
  }
}
@media (max-width: 320px) {
  .backgroundHomeContainer .backgroundHomeImg img {
    height: 100%;
    width: auto;
  }
}
.backgroundHomeContainer .BackgroundHomeText {
  width: 50%;
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  height: auto;
  padding-left: 7.688em;
  padding-top: 4.563em;
  padding-right: 6.125em;
  padding-bottom: 5.25em;
  background-color: <?php echo $blueSoftLight; ?>;
}
@media (max-width: 1024px) {
  .backgroundHomeContainer .BackgroundHomeText {
    padding-left: 5.688em;
    padding-top: 4.563em;
    padding-right: 4.125em;
    padding-bottom: 3.25em;
  }
}
@media (max-width: 769px) {
  .backgroundHomeContainer .BackgroundHomeText {
    width: auto;
  }
}
@media (max-width: 425px) {
  .backgroundHomeContainer .BackgroundHomeText {
    width: auto;
    padding-left: 3em;
    padding-bottom: 4.563em;
  }
}
@media (max-width: 320px) {
  .backgroundHomeContainer .BackgroundHomeText {
    padding-left: 2em;
    padding-right: 2em;
  }
}
.backgroundHomeContainer .BackgroundHomeText h2 {
  color: <?php echo $blueDark; ?>;
  width: 10em;
}
@media (max-width: 1024px) {
  .backgroundHomeContainer .BackgroundHomeText h2 {
    width: 100%;
    font-size: 2.4em;
  }
}
@media (max-width: 425px) {
  .backgroundHomeContainer .BackgroundHomeText h2 {
    font-size: 2.2em;
  }
}
@media (max-width: 320px) {
  .backgroundHomeContainer .BackgroundHomeText h2 {
    font-size: 1.3em;
    line-height: 27px;
  }
}
.backgroundHomeContainer .BackgroundHomeText p {
  color: <?php echo $blueDark; ?>;
  font-family: "Mukta";
  font-size: 1em;
  font-weight: 300;
  line-height: 32px;
  margin-top: 36px;
  margin-bottom: 11px;
  width: 22em;
}
@media (max-width: 769px) {
  .backgroundHomeContainer .BackgroundHomeText p {
    width: auto;
  }
}
.backgroundHomeContainer .BackgroundHomeText a {
  text-transform: uppercase;
  font-size: 1em;
  padding: 0.8em 1em;
  margin-top: 2em;
  position: relative;
}
.backgroundHomeContainer .BackgroundHomeText a img {
  max-width: 0.5em;
  margin-left: 0.5em;
  margin-top: -2px;
}

@keyframes scroll {
  0% {
    transform: translateX(0);
  }
  100% {
    transform: translateX(-1750px);
  }
}
.subtitleCases {
  padding: 4em 5.75em;
  display: flex;
  justify-content: center;
  padding-bottom: 0em;
}
@media (max-width: 425px) {
  .subtitleCases {
    padding: 4em 2.75em;
  }
}
@media (max-width: 320px) {
  .subtitleCases {
    padding: 4em 1.75em;
  }
}

.sliderCases {
  background: white;
  height: 10em;
  display: flex;
  align-items: center;
  margin: auto;
  overflow: hidden;
  position: relative;
  width: 100%;
}
.sliderCases .empresasBoxA {
  height: 94px;
  display: flex;
  align-items: center;
  justify-content: center;
  overflow: hidden;
  width: 9em;
  padding: 0em 2em;
}
.sliderCases .empresasBoxA img {
  width: 100%;
}

.slider::before, .slider::after {
  content: "";
  height: 100px;
  position: absolute;
  width: 200px;
  z-index: 2;
}
.slider::after {
  right: 0;
  top: 0;
  transform: rotateZ(180deg);
}
.slider::before {
  left: 0;
  top: 0;
}
.slider .slide-track {
  animation: scroll 40s linear infinite;
  display: flex;
  width: 3500px;
}

#ts-consultoria .container {
  padding: 0em 5.75em;
}
@media (max-width: 1024px) {
  #ts-consultoria .container {
    padding: 0em 4.75em;
  }
}
@media (max-width: 425px) {
  #ts-consultoria .container {
    padding: 0em 3em;
  }
}
@media (max-width: 320px) {
  #ts-consultoria .container {
    padding: 0em 2em;
  }
}
#ts-consultoria .subtitle {
  margin-top: 6.938em;
}
@media (max-width: 1024px) {
  #ts-consultoria .subtitle {
    margin-top: 3.938em;
  }
}
@media (max-width: 425px) {
  #ts-consultoria .subtitle {
    margin-top: 0.938em;
  }
}
#ts-consultoria .ts-content {
  display: flex;
  justify-content: space-between;
  margin-top: 2.313em;
}
@media (max-width: 1024px) {
  #ts-consultoria .ts-content {
    flex-wrap: wrap;
  }
}
#ts-consultoria .ts-content .ts-box {
  border: 1px solid <?php echo $orangeLight; ?>;
  border-radius: 4px;
  padding: 27px 24px;
  width: 20%;
}
@media (max-width: 1024px) {
  #ts-consultoria .ts-content .ts-box {
    width: 43%;
    margin-bottom: 1.5em;
  }
}
@media (max-width: 768px) {
  #ts-consultoria .ts-content .ts-box {
    width: 40%;
  }
}
@media (max-width: 425px) {
  #ts-consultoria .ts-content .ts-box {
    width: 100%;
  }
}
#ts-consultoria .ts-content .ts-box .ts-box-title {
  display: flex;
  margin-bottom: 20px;
}
#ts-consultoria .ts-content .ts-box .ts-box-title span {
  width: 3.48em;
  height: 3.291em;
  background-color: <?php echo $orangeLight; ?>;
  display: flex;
  align-items: center;
  justify-content: center;
  margin-right: 19px;
  border-radius: 4.78734px;
}
#ts-consultoria .ts-content .ts-box .ts-box-title h3 {
  font-family: "Mukta";
  color: <?php echo $blueDark; ?>;
  font-size: 1.563em;
  line-height: 29px;
  width: 6em;
}
#ts-consultoria .ts-content .ts-box p {
  font-size: 0.875em;
  font-weight: 300;
  font-family: "Mukta";
  color: <?php echo $blueDark; ?>;
  line-height: 23px;
}

#depoimentos {
  margin-top: 12em;
}
@media (max-width: 768px) {
  #depoimentos {
    margin-top: 3em;
  }
}
@media (max-width: 320px) {
  #depoimentos {
    padding-left: 2em;
  }
}
#depoimentos .depoimentos-container {
  display: flex;
  justify-content: space-between;
}
@media (max-width: 768px) {
  #depoimentos .depoimentos-container {
    flex-direction: column;
  }
}
#depoimentos .container {
  padding-left: 12.375em;
}
@media (max-width: 1024px) {
  #depoimentos .container {
    padding-left: 5.375em;
  }
}
@media (max-width: 425px) {
  #depoimentos .container {
    padding-left: 3em;
  }
}
#depoimentos .container .depoimentos-list {
  display: flex;
  flex-direction: column;
}
#depoimentos .container .depoimentos-list h2 {
  font-family: "Mukta";
  font-size: 1.563em;
  color: <?php echo $orange; ?>;
}
#depoimentos .container .depoimentos-list h3 {
  font-weight: 300;
  font-size: 2.25em;
  margin-top: 9px;
  width: 12.3em;
  margin-bottom: 1em;
  line-height: 41px;
}
@media (max-width: 1024px) {
  #depoimentos .container .depoimentos-list h3 {
    font-size: 2em;
  }
}
@media (max-width: 425px) {
  #depoimentos .container .depoimentos-list h3 {
    width: auto;
  }
}
@media (max-width: 320px) {
  #depoimentos .container .depoimentos-list h3 {
    font-size: 1.4em;
    line-height: 37px;
  }
}
#depoimentos .container .depoimentos-list-content {
  display: flex;
  flex-direction: column;
  width: 40%;
  margin-top: 2.5em;
}
@media (max-width: 1440px) {
  #depoimentos .container .depoimentos-list-content {
    width: 55%;
  }
}
@media (max-width: 1024px) {
  #depoimentos .container .depoimentos-list-content {
    width: 42%;
  }
}
@media (max-width: 768px) {
  #depoimentos .container .depoimentos-list-content {
    width: 100%;
  }
}
#depoimentos .container .depoimentos-list-content .boxActive {
  border: 1px solid <?php echo $orange; ?>;
}
#depoimentos .container .depoimentos-list-content .depoimentos-box {
  display: flex;
  justify-content: space-between;
  padding: 0.938em 2em;
  width: 53%;
  align-items: center;
  border-radius: 8px;
  margin-bottom: 0.5em;
  cursor: pointer;
}
@media (max-width: 1440px) {
  #depoimentos .container .depoimentos-list-content .depoimentos-box {
    width: 53%;
  }
}
@media (max-width: 1024px) {
  #depoimentos .container .depoimentos-list-content .depoimentos-box {
    width: 58%;
  }
}
@media (max-width: 768px) {
  #depoimentos .container .depoimentos-list-content .depoimentos-box {
    width: 34%;
  }
}
@media (max-width: 425px) {
  #depoimentos .container .depoimentos-list-content .depoimentos-box {
    width: 62%;
    position: relative;
  }
}
@media (max-width: 375px) {
  #depoimentos .container .depoimentos-list-content .depoimentos-box {
    width: 72%;
  }
}
@media (max-width: 320px) {
  #depoimentos .container .depoimentos-list-content .depoimentos-box {
    width: auto;
  }
}
#depoimentos .container .depoimentos-list-content .depoimentos-box span {
  width: 3.375em;
  height: 3.375em;
  display: flex;
  align-items: center;
  justify-content: center;
  overflow: hidden;
  border-radius: 50%;
}
#depoimentos .container .depoimentos-list-content .depoimentos-box span img {
  width: 100%;
}
#depoimentos .container .depoimentos-list-content .depoimentos-box div {
  display: flex;
  flex-direction: column;
  width: 74%;
  margin-left: 1em;
}
#depoimentos .container .depoimentos-list-content .depoimentos-box div h4 {
  font-family: "Mukta";
  font-size: 1.563em;
  color: <?php echo $blueDark; ?>;
  margin-bottom: 5px;
}
#depoimentos .container .depoimentos-list-content .depoimentos-box div p {
  color: rgba(0, 53, 84, 0.6980392157);
  font-family: "Mukta";
  font-weight: 300;
  font-size: 0.875em;
}
#depoimentos .container .depoimentosBoxContent {
  background-color: <?php echo $blueSoftLight; ?>;
  position: relative;
  width: 50%;
  padding-left: 8em;
  padding-top: 159px;
  padding-right: 8em;
  padding-bottom: 2em;
  height: 21em;
}
@media (max-width: 1440px) {
  #depoimentos .container .depoimentosBoxContent {
    height: 24em;
    padding-top: 115px;
  }
}
@media (max-width: 1024px) {
  #depoimentos .container .depoimentosBoxContent {
    padding: 5em;
    width: 36%;
  }
}
@media (max-width: 768px) {
  #depoimentos .container .depoimentosBoxContent {
    width: auto;
    margin-top: 4em;
  }
}
@media (max-width: 425px) {
  #depoimentos .container .depoimentosBoxContent {
    padding: 3em;
    height: 20.8em;
    right: -4em;
    position: absolute;
    display: none;
  }
}
@media (max-width: 375px) {
  #depoimentos .container .depoimentosBoxContent {
    right: -1em;
  }
}
#depoimentos .container .depoimentosBoxContent .aspas {
  position: absolute;
  left: -0.6em;
  top: -0.6em;
}
@media (max-width: 425px) {
  #depoimentos .container .depoimentosBoxContent .aspas {
    max-width: 2.5em;
  }
}
#depoimentos .container .depoimentosBoxContent h4 {
  font-family: "Mukta";
  font-size: 1.563em;
  color: <?php echo $blueDark; ?>;
}
#depoimentos .container .depoimentosBoxContent .star-container {
  display: flex;
  align-items: center;
  margin-bottom: 1.813em;
  margin-top: 7px;
}
@media (max-width: 375px) {
  #depoimentos .container .depoimentosBoxContent .star-container {
    margin-bottom: 0em;
  }
}
#depoimentos .container .depoimentosBoxContent p {
  font-family: "Mukta";
  color: <?php echo $blueDark; ?>;
  font-size: 1em;
  line-height: 1.563em;
  margin-bottom: 0.75em;
  opacity: 0.7;
  width: 100%;
}
@media (max-width: 1024px) {
  #depoimentos .container .depoimentosBoxContent p {
    width: 79%;
  }
}
@media (max-width: 425px) {
  #depoimentos .container .depoimentosBoxContent p {
    width: 100%;
    font-size: 0.9em;
  }
}
#depoimentos .container .depoimentosBoxContent .border {
  width: 12.313em;
  height: 2px;
  background-color: <?php echo $orange; ?>;
  margin-bottom: 14px;
  margin-top: 1.5em;
  display: flex;
}
#depoimentos .container .depoimentosBoxContent .depoimentoAutor {
  font-family: "Mukta";
  color: <?php echo $blueDark; ?>;
  font-size: 1em;
}

#consultaGratis {
  margin-top: 6.938em;
  background-color: <?php echo $blueSoftLight; ?>;
}
#consultaGratis .container {
  display: flex;
  justify-content: space-between;
  padding: 2.5em 6.25em;
  align-items: center;
}
@media (max-width: 1024px) {
  #consultaGratis .container {
    padding: 2.5em 3em;
  }
}
@media (max-width: 425px) {
  #consultaGratis .container {
    flex-direction: column;
  }
}
@media (max-width: 375px) {
  #consultaGratis .container {
    padding: 2.5em 2em;
  }
}
#consultaGratis .container h3 {
  font-family: "Mukta";
  font-size: 25px;
  color: <?php echo $orange; ?>;
  margin-bottom: 5px;
}
@media (max-width: 425px) {
  #consultaGratis .container h3 {
    font-size: 1em;
  }
}
#consultaGratis .container h2 {
  font-size: 36px;
  font-weight: 300;
  width: 13em;
  line-height: 49px;
}
@media (max-width: 768px) {
  #consultaGratis .container h2 {
    width: auto;
  }
}
@media (max-width: 425px) {
  #consultaGratis .container h2 {
    font-size: 1.3em;
    line-height: 27px;
  }
}
@media (max-width: 425px) {
  #consultaGratis .container a {
    margin-top: 1em;
  }
}
#consultaGratis .container a img {
  margin-left: 28px;
}
@media (max-width: 425px) {
  #consultaGratis .container a img {
    max-width: 0.5em;
  }
}

footer {
  background-color: <?php echo $blueDark; ?>;
}
footer .container {
  padding-top: 56px;
  padding-left: 100px;
  padding-right: 100px;
  padding-bottom: 28px;
  display: flex;
  flex-direction: column;
}
@media (max-width: 1024px) {
  footer .container {
    padding-left: 3em;
    padding-right: 3em;
  }
}
@media (max-width: 375px) {
  footer .container {
    padding-left: 2em;
    padding-right: 2em;
  }
}
@media (max-width: 375px) {
  footer .container {
    padding-left: 1em;
    padding-right: 1em;
  }
}
footer .container .footer-header {
  display: flex;
  align-items: flex-start;
  justify-content: space-between;
}
@media (max-width: 768px) {
  footer .container .footer-header {
    justify-content: flex-start;
    align-items: center;
    flex-direction: column;
  }
}
@media (max-width: 425px) {
  footer .container .footer-header {
    justify-content: center;
  }
}
footer .container .footer-header a {
  margin-top: 1.5em;
}
@media (max-width: 425px) {
  footer .container .footer-header a {
    display: flex;
    align-items: center;
    justify-content: center;
  }
}
footer .container .footer-header a img {
  width: 23em;
}
@media (max-width: 425px) {
  footer .container .footer-header a img {
    width: auto;
    max-width: 81%;
  }
}
footer .container .footer-header .footer-infos {
  display: flex;
  flex-direction: column;
  color: #fff;
  font-family: "Mukta";
  font-size: 1em;
  margin-bottom: 41px;
  align-items: flex-end;
}
@media (max-width: 768px) {
  footer .container .footer-header .footer-infos {
    width: 100%;
    margin-top: 2em;
    margin-bottom: 3em;
  }
}
@media (max-width: 425px) {
  footer .container .footer-header .footer-infos {
    align-items: center;
  }
}
footer .container .footer-header .footer-infos h4 {
  font-size: 1.5em;
  margin-bottom: 1em;
}
footer .container .footer-header .footer-infos p {
  margin-bottom: 1em;
}
footer .container .footer-menu {
  display: flex;
  justify-content: space-between;
  border-bottom: 1px solid rgba(242, 242, 242, 0.5019607843);
  align-content: center;
  padding-bottom: 34px;
  margin-bottom: 23px;
}
@media (max-width: 425px) {
  footer .container .footer-menu {
    flex-direction: column;
  }
}
footer .container .footer-menu nav {
  display: flex;
  align-items: center;
  color: #fff;
  font-size: 18px;
  font-family: "Mukta";
}
@media (max-width: 768px) {
  footer .container .footer-menu nav {
    width: 65%;
    flex-wrap: wrap;
  }
}
@media (max-width: 425px) {
  footer .container .footer-menu nav {
    width: 100%;
    justify-content: space-between;
  }
}
footer .container .footer-menu nav li {
  margin-right: 52px;
  list-style-type: none;
}
@media (max-width: 425px) {
  footer .container .footer-menu nav li {
    margin-right: 0em;
    margin-bottom: 2em;
  }
}
footer .container .footer-menu nav li a {
  color: #fff;
  text-decoration: none;
}
@media (max-width: 425px) {
  footer .container .footer-menu nav li a {
    font-size: 14px;
  }
}
footer .container .footer-menu nav:last-child {
  margin-right: 0px;
}
footer .container .footer-menu ul {
  display: flex;
}
footer .container .footer-menu ul li {
  margin-right: 14px;
}
footer .container .footer-menu ul li .whatsapp-link {
  background-color: white;
  display: flex;
  align-items: center;
  justify-content: center;
  padding: 5px 6px;
  border-radius: 4px;
}
footer .container .footer-menu ul li .whatsapp-link img {
  max-width: 1.2em;
}
footer .container .footer-menu ul:last-child {
  margin-right: 0px;
}
footer .container .footer-finish {
  display: flex;
  justify-content: space-between;
  align-items: center;
}
footer .container .footer-finish p {
  opacity: 0.5;
  color: #fff;
  font-family: "Mukta";
  font-size: 14px;
}
footer .container .footer-finish h5 {
  color: rgba(255, 255, 255, 0.5);
  font-family: "Mukta";
  font-size: 14px;
}
footer .container .footer-finish h5 strong {
  color: <?php echo $orange; ?>;
  opacity: 1;
}

.border-danger {
  border: 1px solid #eb3d3d !important;
  color: #eb3d3d !important;
}

/* Cases */
#cases .container {
  display: flex;
  justify-content: space-between;
}
@media (max-width: 768px) {
  #cases .container {
    flex-direction: column;
  }
}
@media (max-width: 425px) {
  #cases .container {
    flex-direction: column-reverse;
  }
}
#cases .container .casesDesc {
  background-color: <?php echo $blueLight; ?>;
  display: flex;
  justify-content: center;
  flex-direction: column;
  width: 30%;
  padding: 0em 100px;
}
@media (max-width: 1024px) {
  #cases .container .casesDesc {
    width: 46%;
    padding: 4em 3em;
  }
}
@media (max-width: 768px) {
  #cases .container .casesDesc {
    width: auto;
  }
}
@media (max-width: 320px) {
  #cases .container .casesDesc {
    padding: 3em 2em;
  }
}
#cases .container .casesDesc h1 {
  font-family: "Ubuntu";
  color: <?php echo $blueDark; ?>;
  font-size: 48px;
  line-height: 60px;
  margin-bottom: 20px;
  width: 60%;
}
@media (max-width: 1440px) {
  #cases .container .casesDesc h1 {
    font-size: 34px;
    line-height: 47px;
  }
}
@media (max-width: 1024px) {
  #cases .container .casesDesc h1 {
    width: 95%;
  }
}
@media (max-width: 425px) {
  #cases .container .casesDesc h1 {
    font-size: 30px;
    width: auto;
  }
}
@media (max-width: 375px) {
  #cases .container .casesDesc h1 {
    font-size: 27px;
  }
}
@media (max-width: 320px) {
  #cases .container .casesDesc h1 {
    font-size: 25px;
  }
}
#cases .container .casesDesc p {
  font-family: "Mukta";
  color: <?php echo $blueDark; ?>;
  font-size: 1em;
  line-height: 25px;
  font-weight: 300;
  width: 59%;
}
@media (max-width: 1440px) {
  #cases .container .casesDesc p {
    width: 90%;
  }
}
@media (max-width: 425px) {
  #cases .container .casesDesc p {
    width: auto;
  }
}
@media (max-width: 320px) {
  #cases .container .casesDesc p {
    font-size: 0.9em;
  }
}
#cases .container .casesBackground {
  display: flex;
  align-items: center;
  justify-content: center;
  overflow: hidden;
  width: 60%;
  position: relative;
}
@media (max-width: 768px) {
  #cases .container .casesBackground {
    width: auto;
  }
}
@media (max-width: 425px) {
  #cases .container .casesBackground {
    height: 12em;
  }
}
#cases .container .casesBackground img {
  width: 100%;
}
@media (max-width: 1024px) {
  #cases .container .casesBackground img {
    width: auto;
    height: 100%;
  }
}
@media (max-width: 425px) {
  #cases .container .casesBackground img {
    width: 100%;
    height: auto;
  }
}
#cases .scrollSeta {
  width: auto !important;
  z-index: 99999;
  right: 6em;
}
@media (max-width: 1024px) {
  #cases .scrollSeta {
    height: auto !important;
  }
}
@media (max-width: 425px) {
  #cases .scrollSeta {
    right: 3em;
    max-width: 1.5em;
  }
}

.CasesExibicao {
  background-color: <?php echo $blueDark; ?>;
}
.CasesExibicao .cases-container {
  margin-top: 86px;
  position: relative;
}
@media (max-width: 425px) {
  .CasesExibicao .cases-container {
    margin-top: 3em;
  }
}
.CasesExibicao .cases-container .casesArrow {
  position: absolute;
  top: -10em;
  border: 4px solid <?php echo $orange; ?>;
  padding: 1em 1.3em;
  border-radius: 50%;
  cursor: pointer;
  transition: 0.3s ease-out;
}
@media (max-width: 425px) {
  .CasesExibicao .cases-container .casesArrow {
    top: unset;
    bottom: -5em;
    padding: 0.5em 0.6em;
  }
  .CasesExibicao .cases-container .casesArrow .arrow_orange {
    max-width: 0.6em;
  }
}
.CasesExibicao .cases-container .casesArrow:hover {
  background-color: <?php echo $orange; ?>;
}
.CasesExibicao .cases-container .casesArrow:hover .arrow_branca {
  display: block;
}
.CasesExibicao .cases-container .casesArrow:hover .arrow_orange {
  display: none;
}
.CasesExibicao .cases-container .casesArrow .arrow_branca {
  display: none;
}
@media (max-width: 425px) {
  .CasesExibicao .cases-container .casesArrow .arrow_branca {
    max-width: 0.6em;
  }
}
.CasesExibicao .cases-container .arrowLeftG {
  right: 11em;
}
@media (max-width: 768px) {
  .CasesExibicao .cases-container .arrowLeftG {
    right: 5em;
  }
}
@media (max-width: 425px) {
  .CasesExibicao .cases-container .arrowLeftG {
    right: 3em;
  }
}
.CasesExibicao .cases-container .arrowLeftG .arrow_branca {
  transform: rotate(180deg);
}
.CasesExibicao .cases-container .arrowRighttG {
  right: 6em;
  transform: rotate(180deg);
}
@media (max-width: 768px) {
  .CasesExibicao .cases-container .arrowRighttG {
    right: 0em;
  }
}
.CasesExibicao .cases-container .arrowRighttG .arrow_branca {
  transform: rotate(-180deg);
}
.CasesExibicao .content-cases {
  padding: 137px 96px;
}
@media (max-width: 425px) {
  .CasesExibicao .content-cases {
    padding: 5em 3em;
    padding-bottom: 10em;
  }
}
@media (max-width: 320px) {
  .CasesExibicao .content-cases {
    padding: 5em 2em;
    padding-bottom: 10em;
  }
}
.CasesExibicao .content-cases .vejaMaisCases {
  width: 9em;
  margin-top: 71px;
}
.CasesExibicao .content-cases .vejaMaisCases img {
  margin-left: 26px;
}
.CasesExibicao .content-cases .caseBox {
  background-color: <?php echo $blueSoftLight; ?>;
  padding: 44px 80px;
  display: flex;
  flex-direction: column;
  height: 14.625em;
  margin-right: 6em;
  border-radius: 4px;
  position: relative;
}
@media (max-width: 1440px) {
  .CasesExibicao .content-cases .caseBox {
    height: 12.625em;
    margin-right: 2em;
    justify-content: center;
  }
}
@media (max-width: 1024px) {
  .CasesExibicao .content-cases .caseBox {
    height: 16.625em;
    padding: 44px 3em;
  }
}
@media (max-width: 768px) {
  .CasesExibicao .content-cases .caseBox {
    margin-right: 0em;
  }
}
@media (max-width: 425px) {
  .CasesExibicao .content-cases .caseBox {
    height: auto;
    padding: 44px 2em;
  }
}
.CasesExibicao .content-cases .caseBox .caseImg {
  border-bottom: 1px solid <?php echo $blueDark; ?>;
  padding-bottom: 24px;
  margin-bottom: 22px;
}
.CasesExibicao .content-cases .caseBox .caseImg h3 {
  font-size: 36px;
  font-family: "Ubuntu";
  font-weight: 300;
}
.CasesExibicao .content-cases .caseBox .caseImg img {
  max-width: 11em;
}
.CasesExibicao .content-cases .caseBox p {
  font-family: "Mukta";
  color: <?php echo $blueDark; ?>;
  font-size: 1em;
  font-weight: 300;
  line-height: 27px;
}
.CasesExibicao .content-cases .caseBox .case-text {
  max-height: 67%;
}
.CasesExibicao .content-cases .caseBox .info-cases {
  display: flex;
  justify-content: space-between;
  align-items: center;
  position: absolute;
  bottom: 2.5em;
  width: 81%;
}
.CasesExibicao .content-cases .caseBox .info-cases p {
  font-family: "Mukta";
  font-size: 1em;
  font-weight: 500;
  line-height: 25px;
  color: <?php echo $blueDark; ?>;
  display: flex;
  align-items: center;
}
.CasesExibicao .content-cases .caseBox .info-cases p img {
  margin-left: 0.5em;
}
@media (max-width: 768px) {
  #CasesExibicaoCases .cases-container {
    margin-top: 9em;
  }
}
@media (max-width: 425px) {
  #CasesExibicaoCases .cases-container {
    margin-top: 6em;
  }
}
@media (max-width: 1440px) {
  #CasesExibicaoCases .cases-container .casesArrow {
    top: -7em;
  }
}
@media (max-width: 425px) {
  #CasesExibicaoCases .cases-container .casesArrow {
    height: 1em;
    top: -4em;
  }
}
@media (max-width: 1440px) {
  #CasesExibicaoCases .cases-container .arrowLeftG {
    right: 8em;
  }
}
@media (max-width: 425px) {
  #CasesExibicaoCases .cases-container .arrowLeftG {
    right: 5em;
  }
}
@media (max-width: 375px) {
  #CasesExibicaoCases .cases-container .arrowLeftG {
    right: 4em;
  }
}
@media (max-width: 1440px) {
  #CasesExibicaoCases .cases-container .arrowRighttG {
    right: 2em;
  }
}
@media (max-width: 375px) {
  #CasesExibicaoCases .cases-container .arrowRighttG {
    right: 0em;
  }
}
@media (max-width: 375px) {
  #CasesExibicaoCases .content-cases {
    padding: 5em 3em;
    padding-bottom: 6em;
  }
}
@media (max-width: 320px) {
  #CasesExibicaoCases .content-cases {
    padding: 5em 2em;
    padding-bottom: 6em;
  }
}
@media (max-width: 375px) {
  #CasesExibicaoCases .content-cases .vejaMaisCases {
    width: auto;
  }
}
@media (max-width: 375px) {
  #CasesExibicaoCases .content-cases .cases-content-title h2 {
    font-size: 28px;
  }
}
@media (max-width: 1440px) {
  #CasesExibicaoCases .content-cases .caseBox {
    height: 17.625em;
    margin-right: 2em;
    padding: 44px 64px;
    justify-content: flex-start;
  }
}
@media (max-width: 1024px) {
  #CasesExibicaoCases .content-cases .caseBox {
    height: 23.625em;
    padding: 44px 46px;
  }
}
@media (max-width: 375px) {
  #CasesExibicaoCases .content-cases .caseBox {
    height: 27em;
    margin-right: 0em;
    padding: 44px 2em;
  }
}
@media (max-width: 1440px) {
  #CasesExibicaoCases .content-cases .caseBox .case-text {
    max-height: 67%;
  }
}
@media (max-width: 1440px) {
  #CasesExibicaoCases .content-cases .caseBox .info-cases {
    flex-direction: column;
    align-items: flex-start;
    width: auto;
  }
}
@media (max-width: 1024px) {
  #CasesExibicaoCases .content-cases .caseBox .info-cases {
    width: 71%;
  }
  #CasesExibicaoCases .content-cases .caseBox .info-cases div {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
  }
  #CasesExibicaoCases .content-cases .caseBox .info-cases div span {
    margin-bottom: 0.5em;
  }
}
@media (max-width: 1440px) {
  #CasesExibicaoCases .content-cases .caseBox .info-cases p {
    margin-bottom: 1em;
  }
}

.case_interno {
  height: 445px;
}
@media (max-width: 425px) {
  .case_interno {
    height: 38em;
  }
}
.case_interno .container {
  height: 100%;
}
@media (max-width: 768px) {
  .case_interno .container {
    flex-direction: column-reverse !important;
  }
}
@media (max-width: 425px) {
  .case_interno .container {
    justify-content: flex-end !important;
  }
}
@media (max-width: 320px) {
  .case_interno .container .casesDesc h1 {
    line-height: 33px !important;
  }
}
.case_interno .container .casesBackground {
  flex-direction: column;
  padding: 0px 74px;
  align-items: flex-start !important;
  position: relative;
}
@media (max-width: 768px) {
  .case_interno .container .casesBackground {
    height: 13em !important;
    justify-content: flex-start !important;
    padding-top: 1em;
  }
}
@media (max-width: 425px) {
  .case_interno .container .casesBackground {
    padding-top: 0em;
    justify-content: center !important;
    margin-bottom: 2em;
  }
}
@media (max-width: 320px) {
  .case_interno .container .casesBackground {
    padding: 0em 25px;
  }
}
.case_interno .container .casesBackground img {
  width: auto !important;
  align-self: center;
}
@media (max-width: 1024px) {
  .case_interno .container .casesBackground img {
    width: 100% !important;
    height: auto !important;
  }
}
@media (max-width: 768px) {
  .case_interno .container .casesBackground img {
    width: 81% !important;
  }
}
@media (max-width: 425px) {
  .case_interno .container .casesBackground img {
    width: 100%;
  }
}
.case_interno .container .casesBackground .case-tags {
  display: flex;
  align-items: center;
  position: absolute;
  bottom: 2em;
  justify-content: space-between;
  width: 85%;
}
@media (max-width: 768px) {
  .case_interno .container .casesBackground .case-tags {
    bottom: 1em;
  }
}
.case_interno .container .casesBackground .case-tags span {
  font-size: 25px;
  padding: 8px 22px;
}
@media (max-width: 1024px) {
  .case_interno .container .casesBackground .case-tags span {
    font-size: 17px;
  }
}
@media (max-width: 768px) {
  .case_interno .container .casesBackground .case-tags span {
    font-size: 12px;
  }
}
.case_interno .container .casesBackground .case-tags .scrollSeta {
  top: unset;
  bottom: 4em;
  right: 0em;
}
@media (max-width: 768px) {
  .case_interno .container .casesBackground .case-tags .scrollSeta {
    right: 0em !important;
  }
}
@media (max-width: 425px) {
  .case_interno .container .casesBackground .case-tags .scrollSeta {
    right: 4em !important;
    bottom: 2em !important;
  }
}
@media (max-width: 320px) {
  .case_interno .container .casesBackground .case-tags .scrollSeta {
    display: none !important;
  }
}

.case-intro .container {
  padding: 5em 103px;
  padding-top: 176px;
}
@media (max-width: 1024px) {
  .case-intro .container {
    padding-top: 4em;
  }
}
@media (max-width: 425px) {
  .case-intro .container {
    padding: 5em 51px;
  }
}
@media (max-width: 320px) {
  .case-intro .container {
    padding: 3em 2em;
    margin-bottom: 2em;
  }
}
.case-intro .container .title h2 {
  color: <?php echo $blueDark; ?>;
}
@media (max-width: 1440px) {
  .case-intro .container .title h2 {
    width: 35%;
  }
}
@media (max-width: 768px) {
  .case-intro .container .title h2 {
    width: auto;
  }
}
@media (max-width: 425px) {
  .case-intro .container .title h2 {
    font-size: 32px;
  }
}
@media (max-width: 320px) {
  .case-intro .container .title h2 {
    font-size: 30px;
  }
}
.case-intro .container .title p {
  margin-top: 46px;
  color: <?php echo $blueDark; ?>;
  font-family: "Mukta";
  font-size: 1em;
  font-weight: 300;
  line-height: 25px;
  width: 33em;
}
@media (max-width: 425px) {
  .case-intro .container .title p {
    width: auto;
  }
}

#bg-case {
  height: 31em;
  display: flex;
  align-items: center;
  justify-content: center;
  overflow: hidden;
}
@media (max-width: 1024px) {
  #bg-case {
    height: 20em;
  }
}
#bg-case img {
  width: 100%;
}
@media (max-width: 1024px) {
  #bg-case img {
    width: auto;
    height: 100%;
  }
}

.fases .container {
  padding: 5em 103px;
  padding-top: 176px;
  padding-right: 0em;
  display: flex;
  justify-content: space-between;
}
@media (max-width: 1024px) {
  .fases .container {
    padding: 5em 103px;
  }
}
@media (max-width: 425px) {
  .fases .container {
    padding: 5em 51px;
  }
}
@media (max-width: 320px) {
  .fases .container {
    padding: 3em 2em;
  }
}
@media (max-width: 1024px) {
  .fases .container .title {
    display: flex;
    flex-direction: column;
    align-items: flex-end;
    width: 100%;
  }
}
@media (max-width: 425px) {
  .fases .container .title {
    align-items: flex-start;
  }
}
.fases .container .title h2 {
  color: <?php echo $blueDark; ?>;
  width: 9em;
}
@media (max-width: 1024px) {
  .fases .container .title h2 {
    text-align: end;
  }
}
@media (max-width: 425px) {
  .fases .container .title h2 {
    text-align: start;
  }
}
@media (max-width: 375px) {
  .fases .container .title h2 {
    width: auto;
    font-size: 31px;
  }
}
@media (max-width: 320px) {
  .fases .container .title h2 {
    font-size: 28px;
  }
}
.fases .container .title p {
  margin-top: 46px;
  color: <?php echo $blueDark; ?>;
  font-family: "Mukta";
  font-size: 1em;
  font-weight: 300;
  line-height: 25px;
  width: 33em;
}
@media (max-width: 1024px) {
  .fases .container .title p {
    text-align: end;
  }
}
@media (max-width: 425px) {
  .fases .container .title p {
    width: auto;
    text-align: start;
  }
}
@media (max-width: 1024px) {
  .fases .container .fase-container {
    display: none;
  }
}

.skills .slick-track {
  padding: 1em 0em;
}
.skills .container {
  padding: 5em 103px;
}
@media (max-width: 1024px) {
  .skills .container {
    padding: 2em 103px;
  }
}
@media (max-width: 425px) {
  .skills .container {
    padding: 2em 51px;
  }
}
@media (max-width: 320px) {
  .skills .container {
    padding: 2em 2em;
  }
}
.skills .container .title {
  margin-bottom: 97px;
}
@media (max-width: 1024px) {
  .skills .container .title {
    margin-bottom: 1em;
  }
}
.skills .container .title h2 {
  color: <?php echo $blueDark; ?>;
}
@media (max-width: 320px) {
  .skills .container .title h2 {
    font-size: 33px;
  }
}
.skills .container .skills-box {
  display: flex;
  align-items: center;
  height: 143px;
}
.skills .container .skills-box .circle {
  background-color: <?php echo $orangeLight; ?>;
  width: 24px;
  height: 18px;
  display: flex;
  border-radius: 50%;
  margin-left: 44px;
  margin-right: 44px;
}
@media (max-width: 1024px) {
  .skills .container .skills-box .circle {
    margin-left: 1em;
    margin-right: 1em;
  }
}
@media (max-width: 425px) {
  .skills .container .skills-box .circle {
    display: none;
  }
}
.skills .container .skills-box .skill-box-inside {
  border-radius: 4px;
  border: 1px solid <?php echo $orangeLight; ?>;
  padding: 33px 44px;
  display: flex;
}
@media (max-width: 1440px) {
  .skills .container .skills-box .skill-box-inside {
    padding: 20px 32px;
  }
}
@media (max-width: 1024px) {
  .skills .container .skills-box .skill-box-inside {
    padding: 16px 15px;
  }
}
.skills .container .skills-box .skill-box-inside .skills-img {
  background-color: <?php echo $orangeLight; ?>;
  display: flex;
  align-items: center;
  justify-content: center;
  border-radius: 6px;
  margin-right: 30px;
  width: 78px;
  height: 73px;
}
@media (max-width: 1440px) {
  .skills .container .skills-box .skill-box-inside .skills-img {
    width: 65px;
    height: 58px;
  }
}
@media (max-width: 1024px) {
  .skills .container .skills-box .skill-box-inside .skills-img {
    width: 3.5em;
    height: 3em;
    margin-right: 18px;
  }
}
.skills .container .skills-box .skill-box-inside .skills-img img {
  width: 2.5em;
}
@media (max-width: 1440px) {
  .skills .container .skills-box .skill-box-inside .skills-img img {
    width: 2em;
  }
}
@media (max-width: 1024px) {
  .skills .container .skills-box .skill-box-inside .skills-img img {
    width: 1.4em;
  }
}
.skills .container .skills-box .skill-box-inside h4 {
  font-size: 36px;
  font-weight: 300;
  color: <?php echo $blueDark; ?>;
  width: 66%;
}
@media (max-width: 1440px) {
  .skills .container .skills-box .skill-box-inside h4 {
    font-size: 24px;
  }
}
@media (max-width: 1024px) {
  .skills .container .skills-box .skill-box-inside h4 {
    font-size: 17px;
  }
}

.contato {
  padding-bottom: 8.063em;
}
.contato .container {
  margin-top: 9.875em;
  padding: 0em 10.563em;
  display: flex;
  justify-content: space-between;
  align-items: center;
}
@media (max-width: 1024px) {
  .contato .container {
    margin-top: 3.875em;
    padding: 0em 6.563em;
  }
}
@media (max-width: 768px) {
  .contato .container {
    padding: 0em 3.563em;
    flex-direction: column;
  }
}
@media (max-width: 425px) {
  .contato .container {
    padding: 0em 2em;
  }
}
.contato .container .title h2 {
  color: <?php echo $blueDark; ?>;
  width: 58%;
  line-height: 59px;
  margin-top: 15px;
  margin-bottom: 1em;
}
@media (max-width: 1440px) {
  .contato .container .title h2 {
    width: 72%;
  }
}
@media (max-width: 1024px) {
  .contato .container .title h2 {
    width: 83%;
    font-size: 2em;
    line-height: 39px;
  }
}
.contato .container .title .tags {
  display: flex;
  flex-wrap: wrap;
  width: 84%;
}
.contato .container .title .tags span {
  font-size: 1em;
  margin-bottom: 1em;
}
.contato .container .title i {
  font-family: "Ubuntu";
  font-style: italic;
  margin-top: 1em;
  color: <?php echo $blueDark; ?>;
}
.contato .container form {
  background-color: <?php echo $blueDark; ?>;
  padding: 48px 64px;
  border-top: 21px solid <?php echo $orange; ?>;
  border-radius: 8px;
  display: flex;
  flex-direction: column;
  align-items: flex-start;
}
@media (max-width: 1024px) {
  .contato .container form {
    width: 88%;
  }
}
@media (max-width: 768px) {
  .contato .container form {
    width: 77%;
    margin-top: 2em;
  }
}
@media (max-width: 425px) {
  .contato .container form {
    padding: 48px 3em;
  }
}
@media (max-width: 320px) {
  .contato .container form {
    width: 79%;
    padding: 48px 2em;
  }
}
.contato .container form h2 {
  font-family: "Ubuntu";
  color: #fff;
  font-size: 36px;
  margin-bottom: 1.5em;
}
@media (max-width: 425px) {
  .contato .container form h2 {
    font-size: 23px;
  }
}
.contato .container form input, .contato .container form textarea {
  background-color: <?php echo $blueSoftLight; ?>;
  height: 60px;
  padding: 0em 25px;
  margin-bottom: 24px;
  font-family: "Mukta";
  color: #89A2AA;
  border: 0px;
  border-radius: 2px;
  width: 100%;
  font-weight: 500;
}
.contato .container form textarea {
  height: 149px;
  padding-top: 1em;
}
.contato .container form button {
  border: 0px;
  font-size: 1em;
  display: flex;
  align-items: center;
}
.contato .container form button img {
  margin-left: 0.5em;
  max-width: 9px;
  margin-top: -3px;
}

#contentExibicao {
  display: flex;
  justify-content: space-between;
  height: 36.438em;
}
@media (max-width: 375px) {
  #contentExibicao {
    height: auto;
  }
}
#contentExibicao .bg {
  width: 40.6%;
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100%;
  overflow: hidden;
}
@media (max-width: 1440px) {
  #contentExibicao .bg {
    width: 44.6%;
  }
}
@media (max-width: 1024px) {
  #contentExibicao .bg {
    width: 50%;
  }
}
@media (max-width: 768px) {
  #contentExibicao .bg {
    display: none;
  }
}
#contentExibicao .bg img {
  width: 100%;
}
@media (max-width: 1024px) {
  #contentExibicao .bg img {
    height: 100%;
    width: auto;
  }
}
#contentExibicao .text-content {
  height: 100%;
  display: flex;
  flex-direction: column;
  width: 60%;
  align-items: center;
  justify-content: center;
}
@media (max-width: 1024px) {
  #contentExibicao .text-content {
    width: 51.99%;
  }
}
@media (max-width: 768px) {
  #contentExibicao .text-content {
    width: auto;
    padding: 0em 6em;
  }
}
@media (max-width: 425px) {
  #contentExibicao .text-content {
    padding: 0em 3em;
  }
}
@media (max-width: 375px) {
  #contentExibicao .text-content {
    padding: 3em;
  }
}
@media (max-width: 320px) {
  #contentExibicao .text-content {
    padding: 3em 2em;
  }
}
#contentExibicao .text-content h2 {
  font-size: 48px;
  font-family: "Ubuntu";
  line-height: 60px;
  color: <?php echo $blueDark; ?>;
  margin-bottom: 27px;
  width: 46%;
}
@media (max-width: 1440px) {
  #contentExibicao .text-content h2 {
    width: 59%;
    font-size: 47px;
    line-height: 54px;
  }
}
@media (max-width: 1024px) {
  #contentExibicao .text-content h2 {
    font-size: 36px;
    width: 87%;
  }
}
@media (max-width: 768px) {
  #contentExibicao .text-content h2 {
    width: auto;
  }
}
@media (max-width: 425px) {
  #contentExibicao .text-content h2 {
    font-size: 26px;
    line-height: 36px;
  }
}
@media (max-width: 320px) {
  #contentExibicao .text-content h2 {
    font-size: 21px;
  }
}
#contentExibicao .text-content p {
  font-family: "Mukta";
  color: <?php echo $blueDark; ?>;
  font-weight: 300;
  line-height: 25px;
  width: 46%;
}
@media (max-width: 1440px) {
  #contentExibicao .text-content p {
    width: 58%;
  }
}
@media (max-width: 1024px) {
  #contentExibicao .text-content p {
    width: 85%;
  }
}
@media (max-width: 768px) {
  #contentExibicao .text-content p {
    width: auto;
  }
}
@media (max-width: 425px) {
  #contentExibicao .text-content p {
    font-size: 0.9em;
  }
}

#diferenciais .container {
  padding: 4em 96px;
}
@media (max-width: 425px) {
  #diferenciais .container {
    padding: 1em 3em;
  }
}
@media (max-width: 320px) {
  #diferenciais .container {
    padding: 1em 2em;
  }
}
#diferenciais .container h2 {
  font-size: 48px;
  color: <?php echo $blueDark; ?>;
  font-family: "Ubuntu";
  margin-bottom: 82px;
}
@media (max-width: 1024px) {
  #diferenciais .container h2 {
    font-size: 38px;
    margin-bottom: 52px;
  }
}
@media (max-width: 425px) {
  #diferenciais .container h2 {
    line-height: 54px;
  }
}
#diferenciais .container h2 span {
  height: 2px;
  width: 113px;
  background-color: <?php echo $orange; ?>;
  margin-top: 10px;
  display: flex;
}
#diferenciais .container .diferencias-content {
  display: flex;
  justify-content: space-between;
}
@media (max-width: 1024px) {
  #diferenciais .container .diferencias-content {
    flex-direction: column;
  }
}
#diferenciais .container .diferencias-content .diferenciais-box {
  width: 26%;
  height: 21.063em;
  background-color: <?php echo $blueLight; ?>;
  border-radius: 4px;
  padding: 49px 45px;
}
@media (max-width: 1440px) {
  #diferenciais .container .diferencias-content .diferenciais-box {
    height: 18.063em;
    width: 24%;
  }
}
@media (max-width: 1024px) {
  #diferenciais .container .diferencias-content .diferenciais-box {
    width: auto;
    margin-bottom: 2em;
    height: 11.063em;
  }
}
@media (max-width: 768px) {
  #diferenciais .container .diferencias-content .diferenciais-box {
    height: auto;
  }
}
@media (max-width: 375px) {
  #diferenciais .container .diferencias-content .diferenciais-box {
    padding: 2em;
  }
}
#diferenciais .container .diferencias-content .diferenciais-box .diferenciais-header {
  display: flex;
  align-content: flex-start;
  margin-bottom: 22px;
}
#diferenciais .container .diferencias-content .diferenciais-box .diferenciais-header img {
  margin-right: 25px;
}
@media (max-width: 425px) {
  #diferenciais .container .diferencias-content .diferenciais-box .diferenciais-header img {
    max-width: 4em;
  }
}
@media (max-width: 375px) {
  #diferenciais .container .diferencias-content .diferenciais-box .diferenciais-header img {
    max-width: 3em;
  }
}
#diferenciais .container .diferencias-content .diferenciais-box .diferenciais-header h3 {
  color: <?php echo $blueDark; ?>;
  font-size: 36px;
  font-weight: 300;
  line-height: 43px;
  font-family: "Ubuntu";
  width: 50%;
}
@media (max-width: 1440px) {
  #diferenciais .container .diferencias-content .diferenciais-box .diferenciais-header h3 {
    font-size: 28px;
  }
}
@media (max-width: 425px) {
  #diferenciais .container .diferencias-content .diferenciais-box .diferenciais-header h3 {
    font-size: 25px;
  }
}
@media (max-width: 375px) {
  #diferenciais .container .diferencias-content .diferenciais-box .diferenciais-header h3 {
    font-size: 19px;
  }
}
#diferenciais .container .diferencias-content .diferenciais-box p {
  font-size: 1em;
  font-weight: 300;
  font-family: "Mukta";
  color: rgba(0, 53, 84, 0.6980392157);
  line-height: 28px;
}
@media (max-width: 425px) {
  #diferenciais .container .diferencias-content .diferenciais-box p {
    font-size: 0.95em;
  }
}
#diferenciais .container .diferencias-content .diferenciais-box:first-child {
  background-color: <?php echo $blueDark; ?>;
}
#diferenciais .container .diferencias-content .diferenciais-box:first-child h3, #diferenciais .container .diferencias-content .diferenciais-box:first-child p {
  color: #fff;
}
#diferenciais .container .diferencias-content .diferenciais-box:last-child {
  background-color: <?php echo $blueSoftLight; ?>;
}

#equipe .container {
  padding: 175px 102px;
  padding-bottom: 5em;
}
@media (max-width: 1024px) {
  #equipe .container {
    padding: 82px 102px;
    padding-bottom: 5em;
  }
}
@media (max-width: 425px) {
  #equipe .container {
    padding: 82px 3em;
    padding-bottom: 0em;
  }
}
#equipe .container .title h2 {
  color: <?php echo $blueDark; ?>;
  font-size: 48px;
  font-family: "Ubuntu";
  line-height: 60px;
  width: 26%;
}
@media (max-width: 1440px) {
  #equipe .container .title h2 {
    width: 34%;
  }
}
@media (max-width: 1024px) {
  #equipe .container .title h2 {
    width: 51%;
  }
}
@media (max-width: 768px) {
  #equipe .container .title h2 {
    width: 75%;
  }
}
@media (max-width: 425px) {
  #equipe .container .title h2 {
    width: 85%;
    font-size: 32px;
  }
}
@media (max-width: 375px) {
  #equipe .container .title h2 {
    width: auto;
    line-height: 44px;
  }
}
#equipe .container .title .border {
  width: 113px;
  height: 2px;
  background-color: <?php echo $orange; ?>;
  display: flex;
  margin-top: 10px;
  margin-bottom: 29px;
}
#equipe .container legend {
  font-family: "Mukta";
  color: <?php echo $blueDark; ?>;
  font-weight: 300;
  line-height: 25px;
  margin-bottom: 86px;
  width: 29%;
}
@media (max-width: 1440px) {
  #equipe .container legend {
    width: 40%;
  }
}
@media (max-width: 1024px) {
  #equipe .container legend {
    width: 60%;
  }
}
@media (max-width: 768px) {
  #equipe .container legend {
    width: 93%;
  }
}
@media (max-width: 425px) {
  #equipe .container legend {
    width: auto;
    margin-bottom: 50px;
  }
}
#equipe .container .equipe-container .equipe-box {
  height: 409px;
  border-radius: 8px;
  display: flex;
  overflow: hidden;
  flex-direction: column;
  justify-content: flex-end;
  margin-right: 6em;
  position: relative;
  cursor: pointer;
}
@media (max-width: 1440px) {
  #equipe .container .equipe-container .equipe-box {
    margin-right: 1em;
  }
}
@media (max-width: 375px) {
  #equipe .container .equipe-container .equipe-box {
    height: 23em;
  }
}
@media (max-width: 320px) {
  #equipe .container .equipe-container .equipe-box {
    height: 18em;
  }
}
#equipe .container .equipe-container .equipe-box .gradient {
  width: 100%;
  height: 100%;
  display: flex;
  background: linear-gradient(180deg, <?php echo $blueDark; ?> 0%, rgba(0, 53, 84, 0) 100%);
  transform: rotate(-180deg);
  position: absolute;
  left: 0;
  top: 0;
  z-index: 11;
}
#equipe .container .equipe-container .equipe-box .foto-equipe {
  height: 100%;
  position: absolute;
  left: 0;
  top: 0;
  z-index: 10;
}
@media (max-width: 768px) {
  #equipe .container .equipe-container .equipe-box .foto-equipe {
    width: auto;
    height: 100%;
  }
}
@media (max-width: 425px) {
  #equipe .container .equipe-container .equipe-box .foto-equipe {
    width: 100%;
    height: auto;
  }
}
#equipe .container .equipe-container .equipe-box h4 {
  color: #fff;
  font-family: "Ubuntu";
  font-weight: 300;
  font-size: 28px;
  margin-bottom: 6px;
}
#equipe .container .equipe-container .equipe-box .cargo {
  font-family: "Mukta";
  color: #fff;
  font-size: 1em;
  font-weight: 300;
  padding-bottom: 7px;
  border-bottom: 2px solid <?php echo $orange; ?>;
  margin-bottom: 12px;
}
#equipe .container .equipe-container .equipe-box .equipe-desc {
  position: absolute;
  z-index: 12;
  bottom: 22px;
  left: 25px;
}
#equipe .container .equipe-container .equipe-box .equipe-redes {
  display: flex;
  align-items: center;
}
#equipe .container .equipe-container .equipe-box .equipe-redes a {
  margin-right: 14px;
}

.content-header-1 {
  display: flex;
  justify-content: space-between;
  position: relative;
  height: auto;
}
@media (max-width: 768px) {
  .content-header-1 {
    flex-direction: column;
  }
}
.content-header-1 .content-header-left {
  background-color: <?php echo $blueLight; ?>;
  display: flex;
  flex-direction: column;
  padding: 122px 99px;
  padding-right: 51px;
  width: 30%;
  height: 28.313em;
}
@media (max-width: 1024px) {
  .content-header-1 .content-header-left {
    width: 26%;
    padding: 6em 4em;
    height: auto;
  }
}
@media (max-width: 768px) {
  .content-header-1 .content-header-left {
    width: auto;
  }
}
@media (max-width: 425px) {
  .content-header-1 .content-header-left {
    padding: 6em 2em;
  }
}
@media (max-width: 320px) {
  .content-header-1 .content-header-left {
    padding: 3em 2em;
  }
}
.content-header-1 .content-header-left h1 {
  color: <?php echo $blueDark; ?>;
  margin-bottom: 29px;
  font-weight: 300;
  line-height: 59px;
}
@media (max-width: 1440px) {
  .content-header-1 .content-header-left h1 {
    font-size: 2.3em;
    line-height: 52px;
  }
}
@media (max-width: 1024px) {
  .content-header-1 .content-header-left h1 {
    font-size: 1.8em;
    line-height: 38px;
  }
}
@media (max-width: 320px) {
  .content-header-1 .content-header-left h1 {
    font-size: 1.5em;
  }
}
.content-header-1 .content-header-left p {
  font-family: "Mukta";
  color: <?php echo $blueDark; ?>;
  font-size: 16px;
  font-weight: 300;
  line-height: 25px;
  width: 77%;
}
@media (max-width: 1024px) {
  .content-header-1 .content-header-left p {
    width: 100%;
  }
}
.content-header-1 .content-header-right {
  padding: 122px 73px;
  width: 54.45%;
  display: flex;
  flex-direction: column;
  position: absolute;
  right: 0;
}
@media (max-width: 1440px) {
  .content-header-1 .content-header-right {
    width: 49.45%;
  }
}
@media (max-width: 1024px) {
  .content-header-1 .content-header-right {
    width: 52.45%;
    padding: 112px 47px;
  }
}
@media (max-width: 768px) {
  .content-header-1 .content-header-right {
    width: auto;
    position: relative;
    right: unset;
  }
}
@media (max-width: 425px) {
  .content-header-1 .content-header-right {
    padding: 3em 2em;
  }
}
.content-header-1 .content-header-right .title {
  display: flex;
  flex-direction: column;
}
.content-header-1 .content-header-right .title h3 {
  color: <?php echo $orange; ?>;
  font-family: "Mukta";
  font-size: 25px;
}
.content-header-1 .content-header-right .title h2 {
  color: <?php echo $blueDark; ?>;
  font-weight: 400;
  line-height: 60px;
  margin-bottom: 24px;
  width: 41%;
}
@media (max-width: 1440px) {
  .content-header-1 .content-header-right .title h2 {
    width: 64%;
  }
}
@media (max-width: 1024px) {
  .content-header-1 .content-header-right .title h2 {
    width: auto;
    font-size: 2.5em;
    line-height: 1.5em;
  }
}
@media (max-width: 425px) {
  .content-header-1 .content-header-right .title h2 {
    font-size: 2em;
    line-height: 53px;
  }
}
@media (max-width: 320px) {
  .content-header-1 .content-header-right .title h2 {
    font-size: 1.7em;
    line-height: 42px;
    margin-top: 0.5em;
  }
}
.content-header-1 .content-header-right .descMetodologia {
  font-family: "Mukta";
  color: <?php echo $blueDark; ?>;
  line-height: 25px;
  font-weight: 300;
  font-size: 1em;
  width: 80%;
  height: 18em;
  line-height: 1.7em;
}
@media (max-width: 1024px) {
  .content-header-1 .content-header-right .descMetodologia {
    width: auto;
    height: auto;
    line-height: 1.7em;
  }
}
.content-header-1 .content-header-right .tags-servicos {
  display: flex;
  align-items: center;
  margin-top: 3em;
}
.content-header-1 .content-header-right .tags-servicos .tags-servicos-box {
  border: 1px solid <?php echo $orange; ?>;
  border-radius: 4px;
  padding: 0.08em 0.5em;
  margin-right: 23px;
  display: flex;
  align-items: center;
}
@media (max-width: 425px) {
  .content-header-1 .content-header-right .tags-servicos .tags-servicos-box {
    padding: 0.5em 1em;
  }
}
.content-header-1 .content-header-right .tags-servicos .tags-servicos-box span {
  width: 23px;
  height: 23px;
  display: flex;
  align-items: center;
  justify-content: center;
  overflow: hidden;
  background-color: <?php echo $orangeLight; ?>;
  border-radius: 2px;
}
@media (max-width: 425px) {
  .content-header-1 .content-header-right .tags-servicos .tags-servicos-box span {
    width: 2.5em;
    height: 2.5em;
  }
}
.content-header-1 .content-header-right .tags-servicos .tags-servicos-box span img {
  width: 61%;
}
.content-header-1 .content-header-right .tags-servicos .tags-servicos-box p {
  font-family: "Mukta";
  color: <?php echo $blueDark; ?>;
  font-size: 1em;
  line-height: 35px;
  margin-left: 11px;
  width: auto;
}
@media (max-width: 425px) {
  .content-header-1 .content-header-right .tags-servicos .tags-servicos-box p {
    font-size: 1.3em;
  }
}
@media (max-width: 320px) {
  .content-header-1 .content-header-right .tags-servicos .tags-servicos-box p {
    font-size: 1.2em;
  }
}
.content-header-1 .content-header-right .tags-servicos .seta_tiny {
  margin-right: 23px;
}
@media (max-width: 425px) {
  .content-header-1 .content-header-right .tags-servicos .seta_tiny {
    display: none;
  }
}
.content-header-1 .content-header-right .subtitle {
  margin-top: 60px;
  margin-bottom: 55px;
  line-height: 59px;
}
.content-header-1 .content-header-right .subtitle h2 {
  width: 11em;
  line-height: 66px;
}
@media (max-width: 425px) {
  .content-header-1 .content-header-right .subtitle h2 {
    font-size: 2em;
    line-height: 53px;
    width: auto;
  }
}
.content-header-1 .content-header-right .subtitle .border {
  width: 113px;
  height: 2px;
  display: flex;
  background-color: <?php echo $orange; ?>;
  margin-top: 12px;
}
.content-header-1 .content-header-right .servicos-collapse {
  display: flex;
  flex-direction: column;
}
.content-header-1 .content-header-right .servicos-collapse .collapse-box {
  background-color: <?php echo $blueSoftLight; ?>;
  overflow: hidden;
  margin-bottom: 33px;
}
.content-header-1 .content-header-right .servicos-collapse .collapse-box .collapse-header {
  display: flex;
  align-items: flex-start;
  height: 5em;
  position: relative;
  cursor: pointer;
  padding: 2.5em 42px;
}
@media (max-width: 425px) {
  .content-header-1 .content-header-right .servicos-collapse .collapse-box .collapse-header {
    padding: 2em 36px;
  }
}
.content-header-1 .content-header-right .servicos-collapse .collapse-box .collapse-header span {
  background-color: <?php echo $orangeLight; ?>;
  border-radius: 4px;
  display: flex;
  align-items: center;
  justify-content: center;
  overflow: hidden;
  height: 44px;
  width: 44px;
}
.content-header-1 .content-header-right .servicos-collapse .collapse-box .collapse-header h4 {
  font-family: "Ubuntu";
  color: <?php echo $blueDark; ?>;
  font-size: 36px;
  font-weight: 300;
  line-height: 43px;
  width: 67%;
  margin-left: 25px;
  margin-top: -8px;
}
@media (max-width: 1440px) {
  .content-header-1 .content-header-right .servicos-collapse .collapse-box .collapse-header h4 {
    font-size: 30px;
    width: 67%;
  }
}
@media (max-width: 1024px) {
  .content-header-1 .content-header-right .servicos-collapse .collapse-box .collapse-header h4 {
    width: 89%;
    font-size: 25px;
  }
}
@media (max-width: 425px) {
  .content-header-1 .content-header-right .servicos-collapse .collapse-box .collapse-header h4 {
    font-size: 17px;
    line-height: 30px;
  }
}
@media (max-width: 320px) {
  .content-header-1 .content-header-right .servicos-collapse .collapse-box .collapse-header h4 {
    font-size: 14px;
  }
}
.content-header-1 .content-header-right .servicos-collapse .collapse-box .collapse-header .seta_open {
  position: absolute;
  right: 43px;
  bottom: 37px;
}
.content-header-1 .content-header-right .servicos-collapse .collapse-box .collapse-body {
  height: 0em;
  overflow: hidden;
}
.content-header-1 .content-header-right .servicos-collapse .collapse-box .collapse-body p {
  font-family: "Mukta";
  font-size: 1em;
  font-weight: 300;
  color: <?php echo $blueDark; ?>;
  width: 94%;
  line-height: 32px;
  margin-bottom: 2em;
}
@media (max-width: 425px) {
  .content-header-1 .content-header-right .servicos-collapse .collapse-box .collapse-body p {
    width: 100%;
    font-size: 0.9em;
  }
}
.content-header-1 .content-header-right .servicos-collapse .collapse-box .collapse-body a {
  font-size: 1em;
  width: 12em;
}
.content-header-1 .content-header-right .servicos-collapse .collapse-box .collapse-body a img {
  max-width: 0.5em;
  margin-left: 0.5em;
}
.content-header-1 .content-header-right .servicos-collapse .collapse-active .collapse-body {
  height: auto;
  padding: 0em 114px;
  padding-bottom: 3em;
}
@media (max-width: 425px) {
  .content-header-1 .content-header-right .servicos-collapse .collapse-active .collapse-body {
    padding: 0em 42px;
    padding-bottom: 3em;
  }
}
@media (max-width: 320px) {
  .content-header-1 .content-header-right .servicos-collapse .collapse-active .collapse-body {
    padding: 0em 9px;
  }
}

.banner-separetor {
  height: 407px;
  display: flex;
  justify-content: space-between;
}
@media (max-width: 425px) {
  .banner-separetor {
    display: none;
  }
}
.banner-separetor .text {
  padding: 0px 99px;
  width: 33%;
  display: flex;
  flex-direction: column;
  justify-content: center;
  background-color: <?php echo $blueLight; ?>;
}
@media (max-width: 1440px) {
  .banner-separetor .text {
    width: 33.5%;
  }
}
@media (max-width: 1024px) {
  .banner-separetor .text {
    width: 31.5%;
    padding: 0em 4em;
  }
}
.banner-separetor .text h2 {
  font-family: "Ubuntu";
  font-size: 42px;
  font-weight: 400;
  padding-bottom: 27px;
  border-bottom: 4px solid <?php echo $blueDark; ?>;
  color: <?php echo $blueDark; ?>;
  width: 39%;
  line-height: 49px;
}
@media (max-width: 1440px) {
  .banner-separetor .text h2 {
    width: 50%;
  }
}
@media (max-width: 1024px) {
  .banner-separetor .text h2 {
    font-size: 2em;
    width: 100%;
  }
}
.banner-separetor .text h3 {
  color: <?php echo $orange; ?>;
  font-family: "Ubuntu";
  font-size: 39px;
  font-weight: 400;
  margin-top: 21px;
}
@media (max-width: 1024px) {
  .banner-separetor .text h3 {
    font-size: 29px;
  }
}
.banner-separetor .banner {
  width: 75%;
  overflow: hidden;
}
.banner-separetor .banner img {
  width: 100%;
}
@media (max-width: 1440px) {
  .banner-separetor .banner img {
    width: auto;
    height: 100%;
  }
}

#vagasBanner {
  height: 445px;
  display: flex;
  justify-content: space-between;
}
@media (max-width: 1024px) {
  #vagasBanner {
    flex-direction: column;
    height: auto;
  }
}
#vagasBanner .box-left {
  width: 39.5%;
  height: 100%;
  background-color: <?php echo $blueLight; ?>;
  padding: 0em 104px;
}
@media (max-width: 1024px) {
  #vagasBanner .box-left {
    height: 22em;
    width: auto;
  }
}
@media (max-width: 425px) {
  #vagasBanner .box-left {
    padding: 0em 3em;
  }
}
#vagasBanner .box-left h1 {
  font-family: "Ubuntu";
  font-size: 48px;
  line-height: 60px;
  color: <?php echo $blueDark; ?>;
  margin-top: 104px;
  width: 59%;
}
@media (max-width: 1440px) {
  #vagasBanner .box-left h1 {
    margin-top: 79px;
  }
}
@media (max-width: 1024px) {
  #vagasBanner .box-left h1 {
    width: auto;
  }
}
@media (max-width: 768px) {
  #vagasBanner .box-left h1 {
    font-size: 40px;
  }
}
@media (max-width: 425px) {
  #vagasBanner .box-left h1 {
    font-size: 31px;
    line-height: 48px;
  }
}
#vagasBanner .box-left h1 strong {
  color: <?php echo $orange; ?>;
}
#vagasBanner .box-left legend {
  margin-top: 27px;
  font-family: "Mukta";
  font-size: 25px;
  line-height: 35px;
  color: <?php echo $blueDark; ?>;
  width: 54%;
}
@media (max-width: 1440px) {
  #vagasBanner .box-left legend {
    width: 88%;
  }
}
@media (max-width: 425px) {
  #vagasBanner .box-left legend {
    width: auto;
    font-size: 17px;
    line-height: 26px;
  }
}
#vagasBanner .box-left legend strong {
  color: <?php echo $orange; ?>;
}
#vagasBanner .box-right {
  width: 50.2%;
  height: 100%;
  display: flex;
  align-items: center;
  justify-content: center;
  overflow: hidden;
}
@media (max-width: 1440px) {
  #vagasBanner .box-right {
    width: 62.2%;
  }
}
@media (max-width: 1024px) {
  #vagasBanner .box-right {
    display: none;
  }
}
#vagasBanner .box-right img {
  width: 100%;
}

.encontre {
  height: 392px;
  background-color: <?php echo $blueDark; ?>;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
}
.encontre h2 {
  color: #fff;
  font-size: 48px;
  font-family: "Ubuntu";
  line-height: 60px;
  margin-bottom: 21px;
}
@media (max-width: 768px) {
  .encontre h2 {
    font-size: 34px;
  }
}
@media (max-width: 425px) {
  .encontre h2 {
    width: 71%;
    line-height: 45px;
    text-align: center;
  }
}
@media (max-width: 375px) {
  .encontre h2 {
    font-size: 32px;
  }
}
.encontre form {
  background-color: rgba(255, 255, 255, 0.05);
  padding: 0px 43px;
  border-radius: 8px;
  height: 112px;
  width: 803px;
  display: flex;
  align-items: center;
  justify-content: space-between;
}
@media (max-width: 768px) {
  .encontre form {
    width: 73%;
  }
}
.encontre form input {
  background-color: #fff;
  width: 90%;
  height: 56px;
  font-family: "Mukta";
  font-size: 1em;
  font-weight: 300;
  padding: 15px 16px;
  border: 0px;
  box-shadow: 0px 4px 4px rgba(51, 51, 51, 0.04), 0px 4px 16px rgba(51, 51, 51, 0.08);
  border-radius: 4px;
}
@media (max-width: 425px) {
  .encontre form input {
    width: 79%;
  }
}
.encontre form input:focus {
  outline: none;
}
.encontre form button {
  border: 0px;
  background-color: <?php echo $orange; ?>;
  border-radius: 4px;
  height: 56px;
  display: flex;
  align-items: center;
  justify-content: center;
  cursor: pointer;
  width: 7%;
}
@media (max-width: 425px) {
  .encontre form button {
    width: 18%;
  }
}

#vagas-page {
  padding: 48px 93px;
}
@media (max-width: 768px) {
  #vagas-page {
    padding: 48px 3em;
  }
}
@media (max-width: 425px) {
  #vagas-page {
    padding: 48px 2em;
  }
}
#vagas-page h2 {
  font-family: "Ubuntu";
  color: <?php echo $blueDark; ?>;
  font-size: 36px;
  font-weight: 300;
  line-height: 43px;
  width: 100%;
  padding-bottom: 24px;
  border-bottom: 1px solid <?php echo $blueDark; ?>;
  margin-bottom: 53px;
}
#vagas-page .filtros {
  display: flex;
  justify-content: space-between;
}
@media (max-width: 1024px) {
  #vagas-page .filtros {
    flex-direction: column;
  }
}
#vagas-page .filtros .buttonFiltro {
  display: none;
}
@media (max-width: 1024px) {
  #vagas-page .filtros .buttonFiltro {
    padding: 4px 16px;
    background-color: #FFD8CC;
    border-radius: 4px;
    font-size: 18px;
    color: <?php echo $orange; ?>;
    font-family: "Ubuntu";
    font-weight: 300;
    border: 0px;
    width: 6.6em;
    cursor: pointer;
    margin-bottom: 2em;
    width: 100%;
    text-align: center;
    display: flex;
    align-items: center;
    justify-content: center;
  }
  #vagas-page .filtros .buttonFiltro img {
    margin-right: 9px;
  }
}
#vagas-page .filtros .form-filtros {
  width: 11%;
  display: flex;
  flex-direction: column;
}
@media (max-width: 1440px) {
  #vagas-page .filtros .form-filtros {
    width: 21%;
  }
}
@media (max-width: 1024px) {
  #vagas-page .filtros .form-filtros {
    width: 100%;
    flex-direction: row;
    flex-wrap: wrap;
  }
}
#vagas-page .filtros .form-filtros .form-filtros-content {
  display: flex;
  flex-direction: column;
  width: 100%;
  margin-bottom: 48px;
}
@media (max-width: 1024px) {
  #vagas-page .filtros .form-filtros .form-filtros-content {
    width: 33%;
    display: none;
  }
}
@media (max-width: 425px) {
  #vagas-page .filtros .form-filtros .form-filtros-content {
    width: 50%;
  }
}
#vagas-page .filtros .form-filtros .form-filtros-content h5 {
  font-family: "Mukta";
  color: <?php echo $orangeLight; ?>;
  font-size: 25px;
  margin-bottom: 1em;
}
#vagas-page .filtros .form-filtros .form-filtros-content label {
  display: flex;
  align-items: center;
  font-family: "Mukta";
  color: <?php echo $blueDark; ?>;
  font-weight: 300;
  font-size: 16px;
  margin-bottom: 0.5em;
  cursor: pointer;
}
#vagas-page .filtros .form-filtros .form-filtros-content label input {
  display: none;
}
#vagas-page .filtros .form-filtros .form-filtros-content label input:checked + span {
  background-color: <?php echo $orange; ?>;
}
#vagas-page .filtros .form-filtros .form-filtros-content label span {
  border: 1px solid <?php echo $orange; ?>;
  width: 18px;
  height: 18px;
  border-radius: 4px;
  display: flex;
  transition: 0.3s ease-out;
  margin-right: 16px;
}
#vagas-page .filtros .form-filtros .form-filtros-content-active {
  display: flex;
}

.vagas-container {
  display: flex;
  flex-direction: column;
  width: 83%;
}
@media (max-width: 1440px) {
  .vagas-container {
    width: 77%;
  }
}
@media (max-width: 1024px) {
  .vagas-container {
    width: 100%;
  }
}
.vagas-container .vagas-box {
  background-color: <?php echo $blueSoftLight; ?>;
  height: 341px;
  padding: 0em 60px;
  display: flex;
  flex-direction: column;
  position: relative;
  margin-bottom: 24px;
}
@media (max-width: 768px) {
  .vagas-container .vagas-box {
    height: 24.4em;
  }
}
@media (max-width: 425px) {
  .vagas-container .vagas-box {
    padding: 2em 2em;
    height: auto;
  }
}
@media (max-width: 375px) {
  .vagas-container .vagas-box {
    padding-bottom: 5em;
  }
}
.vagas-container .vagas-box h5 {
  font-family: "Mukta";
  font-size: 32px;
  line-height: 45px;
  color: <?php echo $blueDark; ?>;
  margin-top: 33px;
}
@media (max-width: 425px) {
  .vagas-container .vagas-box h5 {
    font-size: 22px;
    margin-top: 0px;
  }
}
.vagas-container .vagas-box h4 {
  font-family: "Mukta";
  font-weight: 300;
  font-size: 16px;
  line-height: 25px;
  color: rgba(0, 53, 84, 0.8);
  margin-bottom: 27px;
}
.vagas-container .vagas-box p {
  font-family: "Mukta";
  color: <?php echo $blueDark; ?>;
  font-weight: 300;
  line-height: 25px;
  font-size: 16px;
  height: 8em;
}
@media (max-width: 425px) {
  .vagas-container .vagas-box p {
    display: none;
  }
}
.vagas-container .vagas-box .vagas-box-bottom {
  display: flex;
  justify-content: space-between;
  align-items: center;
}
@media (max-width: 768px) {
  .vagas-container .vagas-box .vagas-box-bottom {
    flex-wrap: wrap;
  }
}
.vagas-container .vagas-box .vagas-box-bottom .location {
  display: flex;
  font-family: "Mukta";
  color: <?php echo $blueDark; ?>;
  font-weight: 300;
  align-items: center;
}
.vagas-container .vagas-box .vagas-box-bottom .location img {
  margin-right: 13px;
}
.vagas-container .vagas-box .vagas-box-bottom .tags-container {
  display: flex;
  align-items: center;
}
@media (max-width: 425px) {
  .vagas-container .vagas-box .vagas-box-bottom .tags-container {
    display: none;
  }
}
.vagas-container .vagas-box .vagas-box-bottom .tags-container .tags-box {
  font-family: "Mukta";
  font-size: 16px;
  font-weight: 300;
  display: flex;
  align-items: center;
  justify-content: center;
  padding: 0.5em;
  background-color: <?php echo $blueLight; ?>;
  color: #0582CA;
  border-radius: 4px;
  margin-right: 16px;
}
.vagas-container .vagas-box .vagas-box-bottom .tags-container .tags-box:last-child {
  margin-right: 0px;
}
.vagas-container .vagas-box .vagas-box-bottom a {
  font-size: 1em;
}
@media (max-width: 768px) {
  .vagas-container .vagas-box .vagas-box-bottom a {
    margin-top: 1em;
  }
}
.vagas-container .vagas-box .time {
  position: absolute;
  right: 51px;
  top: 40px;
  font-family: "Mukta";
  font-size: 1em;
  font-weight: 300;
  color: rgba(0, 53, 84, 0.8);
  display: flex;
  align-items: center;
}
.vagas-container .vagas-box .time img {
  margin-right: 0.5em;
}
@media (max-width: 425px) {
  .vagas-container .vagas-box .time {
    right: 21px;
    top: 22px;
  }
  .vagas-container .vagas-box .time img {
    max-width: 1.2em;
    margin-right: 0.5em;
  }
}
@media (max-width: 375px) {
  .vagas-container .vagas-box .time {
    right: unset;
    top: unset;
    bottom: 1.5em;
  }
}
.vagas-container .maisVagas {
  color: <?php echo $orange; ?>;
  font-size: 25px;
  font-family: "Mukta";
  line-height: 35px;
  margin-top: 46px;
  background: 0;
  border: 0;
  width: 8.2em;
  padding: 0;
  margin-bottom: 0.5;
  cursor: pointer;
  text-align: start;
}
.vagas-container .maisVagas .border {
  width: 113px;
  background-color: <?php echo $orange; ?>;
  height: 2px;
  display: flex;
  margin-top: 8px;
}

.enconte-interno {
  height: 337px;
}
@media (max-width: 768px) {
  .enconte-interno {
    height: 19em;
  }
}

#vaga-interno .container {
  padding: 55px 96px;
  display: flex;
  justify-content: space-between;
  align-items: flex-start;
  margin-bottom: 4em;
}
@media (max-width: 1024px) {
  #vaga-interno .container {
    flex-direction: column-reverse;
  }
}
@media (max-width: 768px) {
  #vaga-interno .container {
    padding: 55px 4em;
  }
}
@media (max-width: 425px) {
  #vaga-interno .container {
    padding: 53px 3em;
  }
}
#vaga-interno .container .box-left {
  width: 64%;
  display: flex;
  flex-direction: column;
}
@media (max-width: 1024px) {
  #vaga-interno .container .box-left {
    width: 100%;
  }
}
#vaga-interno .container .box-left .header-box {
  display: flex;
  align-items: flex-start;
  margin-bottom: 109px;
}
@media (max-width: 425px) {
  #vaga-interno .container .box-left .header-box {
    margin-bottom: 3em;
    flex-direction: column;
  }
}
#vaga-interno .container .box-left .header-box .imagem {
  height: 132px;
  width: 132px;
  border: 1px solid <?php echo $blueDark; ?>;
  display: flex;
  align-items: center;
  justify-content: center;
  margin-right: 40px;
}
#vaga-interno .container .box-left .header-box .imagem img {
  width: 88%;
}
#vaga-interno .container .box-left .header-box .text {
  display: flex;
  flex-direction: column;
}
#vaga-interno .container .box-left .header-box .text h1 {
  color: <?php echo $blueDark; ?>;
  font-family: "Ubuntu";
  font-size: 48px;
  line-height: 60px;
  margin-bottom: 3px;
}
@media (max-width: 425px) {
  #vaga-interno .container .box-left .header-box .text h1 {
    margin-top: 1em;
  }
}
@media (max-width: 375px) {
  #vaga-interno .container .box-left .header-box .text h1 {
    font-size: 31px;
  }
}
#vaga-interno .container .box-left .header-box .text h3 {
  font-family: "Mukta";
  font-size: 25px;
  line-height: 35px;
  color: <?php echo $blueDark; ?>;
}
#vaga-interno .container .box-left .header-box .text h4 {
  font-family: "Mukta";
  font-size: 25px;
  line-height: 35px;
  color: rgba(0, 53, 84, 0.5);
}
#vaga-interno .container .box-left .box-content-text {
  border: 1px solid <?php echo $orangeLight; ?>;
  border-radius: 4px;
  padding: 35px 25px;
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  font-family: "Mukta";
  font-size: 25px;
  color: <?php echo $blueDark; ?>;
}
@media (max-width: 425px) {
  #vaga-interno .container .box-left .box-content-text {
    font-size: 14px;
  }
}
#vaga-interno .container .box-left .box-content-text h5 {
  margin-bottom: 1em;
}
#vaga-interno .container .box-left .box-content-text .content-text {
  font-size: 17px;
  line-height: 35px;
  color: rgba(0, 53, 84, 0.62);
}
#vaga-interno .container .box-left .box-left-bottom {
  margin-top: 44px;
  display: flex;
  align-items: center;
}
#vaga-interno .container .box-left .box-left-bottom button {
  background-color: transparent;
  border: 0;
  outline: none;
  margin-left: 36px;
}
#vaga-interno .container .box-left .subtitle {
  font-family: "Mukta";
  color: <?php echo $blueDark; ?>;
  font-size: 32px;
  line-height: 45px;
  margin-top: 92px;
  margin-bottom: 48px;
}
#vaga-interno .container .box-right {
  display: flex;
  flex-direction: column;
  width: 23%;
}
@media (max-width: 1024px) {
  #vaga-interno .container .box-right {
    width: 100%;
    margin-top: 4em;
    margin-bottom: 6em;
  }
}
@media (max-width: 425px) {
  #vaga-interno .container .box-right {
    margin-top: 1em;
  }
}
#vaga-interno .container .box-right .box-right-header {
  display: flex;
  align-items: flex-start;
  border-bottom: 1px solid <?php echo $orange; ?>;
  padding-bottom: 25px;
  position: relative;
}
#vaga-interno .container .box-right .box-right-header .imagem {
  width: 81px;
  height: 81px;
  border: 1px solid <?php echo $blueDark; ?>;
  display: flex;
  align-items: center;
  justify-content: center;
  margin-right: 25px;
}
#vaga-interno .container .box-right .box-right-header .imagem img {
  width: 75%;
}
#vaga-interno .container .box-right .box-right-header h3 {
  font-size: 36px;
  font-family: "Ubuntu";
  font-weight: 300;
  line-height: 43px;
}
#vaga-interno .container .box-right .box-right-header .sharebutton {
  position: absolute;
  right: 0;
  top: 0;
  cursor: pointer;
}
#vaga-interno .container .box-right .vaga-infos {
  margin-top: 30px;
  display: flex;
  flex-direction: column;
  margin-bottom: 28px;
}
#vaga-interno .container .box-right .vaga-infos span {
  display: flex;
  align-items: center;
  font-size: 16px;
  line-height: 25px;
  font-family: "Mukta";
  font-weight: 300;
  color: <?php echo $blueDark; ?>;
  margin-bottom: 25px;
}
#vaga-interno .container .box-right .vaga-infos span img {
  margin-right: 20px;
}
#vaga-interno .container .box-right .share-content {
  display: flex;
  flex-direction: column;
}
#vaga-interno .container .box-right .share-content h3 {
  font-family: "Mukta";
  font-size: 25px;
  color: <?php echo $blueDark; ?>;
  line-height: 35px;
  margin-bottom: 17px;
}
#vaga-interno .container .box-right .share-content .share-links {
  display: flex;
  align-items: center;
  margin-bottom: 43px;
}
#vaga-interno .container .box-right .share-content .share-links a {
  width: 29px;
  height: 29px;
  display: flex;
  align-items: center;
  justify-content: center;
  overflow: hidden;
  border-radius: 4px;
  background-color: <?php echo $blueDark; ?>;
  margin-right: 14px;
}
#vaga-interno .container .box-right .share-content .share-links a:last-child {
  margin-right: 0px;
}
#vaga-interno .container .box-right .share-content .share-button {
  width: 62%;
}
@media (max-width: 1024px) {
  #vaga-interno .container .box-right .share-content .share-button {
    width: 18%;
  }
}
@media (max-width: 768px) {
  #vaga-interno .container .box-right .share-content .share-button {
    width: 25%;
  }
}
@media (max-width: 425px) {
  #vaga-interno .container .box-right .share-content .share-button {
    width: 49%;
  }
}

.candidatura-content {
  position: fixed;
  left: 0;
  top: 0;
  z-index: 99999;
  display: none;
  align-items: center;
  justify-content: center;
  background-color: rgba(0, 0, 0, 0.29);
  width: 100%;
  height: 100%;
  transition: 0.3s ease-out;
  opacity: 0;
}
.candidatura-content .candidatura-form {
  padding: 56px;
  background-color: #fff;
  border-radius: 8px;
  position: relative;
  height: 73%;
  width: 33%;
}
@media (max-width: 1440px) {
  .candidatura-content .candidatura-form {
    height: 80%;
  }
}
@media (max-width: 1024px) {
  .candidatura-content .candidatura-form {
    width: 70%;
  }
}
@media (max-width: 425px) {
  .candidatura-content .candidatura-form {
    padding: 35px 2.4em;
  }
}
.candidatura-content .candidatura-form .feedback {
  align-items: center;
  justify-content: center;
  display: none;
  width: 100%;
  flex-direction: column;
  height: 100%;
  font-family: "Ubuntu";
}
.candidatura-content .candidatura-form .feedback img {
  margin-bottom: 2em;
}
.candidatura-content .candidatura-form .feedback p {
  font-size: 36px;
  font-weight: 300;
  color: <?php echo $blueDark; ?>;
}
.candidatura-content .candidatura-form .feedback-active {
  display: flex;
}
.candidatura-content .candidatura-form h2 {
  font-family: "Ubuntu";
  color: <?php echo $blueDark; ?>;
  font-size: 33px;
  font-weight: 300;
  margin-bottom: 46px;
}
.candidatura-content .candidatura-form input, .candidatura-content .candidatura-form textarea {
  width: 100%;
}
.candidatura-content .candidatura-form input, .candidatura-content .candidatura-form select, .candidatura-content .candidatura-form textarea, .candidatura-content .candidatura-form .curriculo {
  border: 1px solid <?php echo $orange; ?>;
  border-radius: 4px;
  background-color: #fff;
  padding: 11px 16px;
  font-family: "Mukta";
  font-size: 16px;
  font-weight: 300;
  margin-bottom: 23px;
}
@media (max-width: 425px) {
  .candidatura-content .candidatura-form input, .candidatura-content .candidatura-form select, .candidatura-content .candidatura-form textarea, .candidatura-content .candidatura-form .curriculo {
    font-size: 15px;
  }
}
.candidatura-content .candidatura-form button {
  font-size: 1.2em;
  border: 0px;
}
.candidatura-content .candidatura-form .form-group {
  display: flex;
  align-items: center;
  justify-content: space-between;
}
.candidatura-content .candidatura-form .form-group input, .candidatura-content .candidatura-form .form-group select {
  width: 48%;
}
.candidatura-content .candidatura-form .curriculo {
  position: relative;
  display: flex;
  align-items: center;
  color: #6f7175;
  cursor: pointer;
  height: 1.8em;
}
.candidatura-content .candidatura-form .curriculo span {
  position: absolute;
  right: 5px;
  background-color: #ff5d29;
  padding: 5px 6px;
  border-radius: 3px;
}
@media (max-width: 375px) {
  .candidatura-content .candidatura-form .curriculo span p {
    width: 62%;
  }
}
.candidatura-content .candidatura-form textarea {
  height: 15em;
}
.candidatura-content .candidatura-form .close-candidatura {
  position: absolute;
  right: 28px;
  top: 25px;
  font-size: 1.5em;
  cursor: pointer;
  color: <?php echo $blueDark; ?>;
}

.candidatura-content-active {
  display: flex;
  opacity: 1;
}

.share-candidatura {
  position: fixed;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  display: none;
  align-items: center;
  justify-content: center;
  z-index: 9999;
  background-color: rgba(0, 0, 0, 0.16);
  opacity: 0;
  transition: 0.3s ease-out;
}
.share-candidatura .share-candidatura-box {
  background-color: #fff;
  padding: 38px 49px;
  border-radius: 9px;
  position: relative;
  width: 28%;
}
@media (max-width: 768px) {
  .share-candidatura .share-candidatura-box {
    width: 59%;
  }
}
@media (max-width: 425px) {
  .share-candidatura .share-candidatura-box {
    width: 68%;
  }
}
@media (max-width: 375px) {
  .share-candidatura .share-candidatura-box {
    padding: 38px 32px;
    width: 76%;
  }
}
.share-candidatura .share-candidatura-box i {
  position: absolute;
  right: 14px;
  top: 10px;
  cursor: pointer;
  font-size: 1.4em;
  color: <?php echo $blueDark; ?>;
}
.share-candidatura .share-candidatura-box h2 {
  font-family: "Ubuntu";
  font-size: 30px;
  color: <?php echo $blueDark; ?>;
  font-weight: 300;
}
.share-candidatura .share-candidatura-box span {
  display: flex;
  align-items: center;
  position: relative;
  margin-bottom: 40px;
  margin-top: 2em;
  cursor: pointer;
}
.share-candidatura .share-candidatura-box span input {
  border: 1px solid <?php echo $orange; ?>;
  border-radius: 4px;
  padding: 15px 16px;
  width: 100%;
  cursor: pointer;
}
.share-candidatura .share-candidatura-box span i {
  position: absolute;
  right: 10px;
  top: 12px;
  color: <?php echo $orange; ?>;
  cursor: pointer;
}
.share-candidatura .share-candidatura-box .share-links {
  display: flex;
  align-items: center;
}
.share-candidatura .share-candidatura-box .share-links a {
  width: 29px;
  height: 29px;
  display: flex;
  align-items: center;
  justify-content: center;
  overflow: hidden;
  border-radius: 4px;
  background-color: <?php echo $blueDark; ?>;
  margin-right: 14px;
}
.share-candidatura .share-candidatura-box .share-links a:last-child {
  margin-right: 0px;
}

.share-candidatura-active {
  display: flex;
  opacity: 1;
}

.sharebutton {
  cursor: pointer;
}

.modal-time {
  position: fixed;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.24);
  z-index: 9999;
  display: none;
}
.modal-time .main {
  display: flex;
  align-items: center;
  justify-content: center;
  width: 100%;
  height: 100%;
}
.modal-time .main .content {
  background-color: #fff;
  width: 33%;
  padding: 3em;
  border-radius: 9px;
  font-family: "Ubuntu";
  position: relative;
}
.modal-time .main .content i {
  position: absolute;
  right: 23px;
  top: 18px;
  font-size: 24px;
  color: <?php echo $blueDark; ?>;
  cursor: pointer;
}
.modal-time .main .content .top {
  display: flex;
}
.modal-time .main .content .top .left {
  width: 37%;
  height: 18em;
  display: flex;
  align-items: center;
  justify-content: center;
  overflow: hidden;
  border-radius: 5px;
}
.modal-time .main .content .top .left img {
  height: 100%;
}
.modal-time .main .content .top .right {
  margin-left: 1.5em;
  width: 56%;
}
.modal-time .main .content .top .right h1 {
  font-size: 1.7em;
  color: <?php echo $blueDark; ?>;
}
.modal-time .main .content .top .right h2 {
  color: <?php echo $orange; ?>;
  margin-top: 10px;
}
.modal-time .main .content .top .right p {
  font-size: 0.8em;
  margin-top: 1em;
  line-height: 18px;
  color: rgba(0, 0, 0, 0.63);
}
.modal-time .main .content .bottom {
  margin-top: 2em;
}
.modal-time .main .content .bottom strong {
  color: <?php echo $blueDark; ?>;
}
.modal-time .main .content .bottom p {
  line-height: 23px;
  font-size: 0.9em;
  color: #5d5d5d;
  margin-top: 1em;
}

/*# sourceMappingURL=app.css.map */

</style>