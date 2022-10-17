var Main = {
    setup: function() {
        var __this = this;

        if($("#privacy-policies").length) {
            $("#accept-policies").on("click", function(){
                let url = document.getElementById("name_route_accept_policies").value
                let form = $("#privacy-policies");
                let data = new FormData(form[0])

                $.ajax({
                    type: "POST",
                    url: url,
                    data: data,
                    enctype: 'multipart/form-data',
                    processData: false,
                    contentType: false,
                    cache: false,
                    timeout: 800000
                }).done(data => {
                    $("#privacy-policies").fadeOut();
                });
            })
        }
        if($("#home").length) {
            __this.Homepage.setup()
        }
        if($("#servicos").length) {
            __this.Servicos.setup()
        }

        if($(".contato-form").length) {
            __this.Contato.setup()
        }
        if($("#equipe").length) {
            __this.Sobre.setup()
        }
        __this.Cases.setup();
        $('.setaScrollDown').on('click',function(e) {
            e.preventDefault();
            var offset = 0;
            var target = this.hash;
            if ($(this).data('offset') != undefined) offset = $(this).data('offset');
            $('html, body').stop().animate({
                'scrollTop': $(target).offset().top - offset
            }, 500, 'swing', function() {
                // window.location.hash = target;
            });
        });

        if($(".depoimentos-box").length) {
            var window_size = window.matchMedia('(max-width: 500px)');
            if (window.matchMedia('(max-width: 500px)').matches)
            {
                $(".depoimentos-box").on("click", function(){
                    let box = $(".depoimentosBoxContent");
                    let _this = $(this),
                    text = _this.data("text"),
                    title = _this.data("title"),
                    author = _this.find("h4").text()
                    boxContent = $(".depoimentosBoxContent");

                    boxContent.find("h4").text(title)
                    boxContent.find("p").text(text)
                    boxContent.find("h5").text(author)
                    $(".depoimentos-box").css("margin-bottom", "0.5em")
                    $(this).append(box)
                    $(".depoimentos-box .depoimentos-boxContainer").removeClass("boxActive")
                    $(this).find(".depoimentos-boxContainer").addClass("boxActive")
                    $(this).find(".depoimentosBoxContent").show();
                })
            }else{
                $(".depoimentos-box").on("click", function(){
                    let _this = $(this),
                    text = _this.data("text"),
                    title = _this.data("title"),
                    author = _this.find("h4").text()
                    boxContent = $(".depoimentosBoxContent");

                    boxContent.find("h4").text(title)
                    boxContent.find("p").text(text)
                    boxContent.find("h5").text(author)
                    $(".depoimentos-box .depoimentos-boxContainer").removeClass("boxActive")
                    _this.find(".depoimentos-boxContainer").addClass("boxActive")
                    $(this).find(".depoimentosBoxContent").hide();


                });
            }



        }
        $(".burguer-menu").on("click", function(){
            $(this).hide()
            $(".close-menu").show()
            $(".navbar").addClass("navbar-active")
        })
        $(".close-menu").on("click", function(){
            $(this).hide()
            $(".burguer-menu").show()
            $(".navbar").removeClass("navbar-active")
        })

        $(".buttonFiltro").on("click", function(){
            $(".form-filtros-content").toggleClass("form-filtros-content-active")
        })

        if($(".candidatar-button").length) {
            __this.VagaInterno.setup()
        }
        if($("#vagas-page").length || $("#vaga-interno").length) {
            __this.Vagas.setup();
        }

    },
    Sobre: {
        setup: function() {
            let __this = this;

            __this.Time();
        },
        Time: function() {
            $(".equipe-box").on("click", function(){
                let _this = $(this)
                let modal = $(".modal-time")
                let name = _this.find("h4").text()
                let cargo = _this.find(".cargo").text()
                let desc = _this.find("legend").text()
                let img = _this.find(".foto-equipe").attr("src")

                modal.find("img").prop('src', img)
                modal.find("h1").text(name)
                modal.find("h2").text(cargo)
                modal.find(".desc").text(desc)

                modal.fadeIn()
            })

            $(".close-time").on("click", function(){
                let _this = $(this)
                let modal = $(".modal-time")
                modal.fadeOut(500)

                setTimeout(function(){
                    modal.find("img").prop('src', '')
                    modal.find("h1").text('')
                    modal.find("h2").text('')
                    modal.find(".desc").text('')
                }, 600)

            })
        }
    },
    Contato: {
        setup: function() {
            let form = $(".contato-form");
            form.find("input, textarea").on("click", function() {
                form.find("#nome").removeClass("border-danger")
                form.find("#email").removeClass("border-danger")
                form.find("#mensagem").removeClass("border-danger")
            })


            $(".contato-form button").on("click", function() {

                let form = $(".contato-form");

                if(form.find("#nome").val() == '') {
                    form.find("#nome").addClass("border-danger")
                    return
                }

                if(form.find("#email").val() == '') {
                    form.find("#email").addClass("border-danger")
                    return
                }
                if(form.find("#mensagem").val() == '') {
                    form.find("#mensagem").addClass("border-danger")
                    return
                }

                let data = new FormData(form[0])


                $.ajax({
                    type: "POST",
                    url: '/contato/send',
                    data: data,
                    enctype: 'multipart/form-data',
                    processData: false,
                    contentType: false,
                    cache: false,
                    timeout: 800000,
                    beforeSend: function() {
                        $(".contato-form button").text("ENVIANDO...")
                        $(".contato-form button").prop("disabled", true)
                    },
                    success: function (data) {


                    }
                }).done(function(data){
                    if(data.status == 200) {
                        $(".contato-form button").text("ENVIADO COM SUCESSO!")
                        form.find("#nome").val("")
                        form.find("#email").val("")
                        form.find("#mensagem").val("")
                        setTimeout(function(){
                            $(".contato-form button").text("ENTRAR EM CONTATO")
                            $(".contato-form button").prop("disabled", false)
                        }, 1500)
                    }
                });

            })
        }
    },
    Vagas: {
        setup: function() {
            let _this = this;

            $(".encontre-form button").on("click", function(e) {

                $.ajax({
                    type: "GET",
                    url: '/vagas/search?filtro='+$(".encontre-form input").val(),
                    success: function (data) {
                        if(!$(".encontre-form input").hasClass("search-interno")) {
                            let button = $(".moreActionVagas");
                            $(".moreActionVagas").remove();
                            $(".vagas-container").html('')

                            data.vagas.map(function(item){

                                let box =   `<div class='vagas-box'>
                                                <span class='time'>
                                                    <img src='/img/site/Time Circle.png'>
                                                    ${(item.data_publicacao > 0 ? 'Há '+ item.data_publicacao + ' dias' : 'Publicada hoje' )}
                                                </span>
                                                <h5>${item.name}</h5>
                                                <h4>${item.empresa_name}</h4>
                                                <p>${item.breve_descricao}</p>
                                                <div class='vagas-box-bottom'>
                                                    <span class='location'>
                                                        <img src='/img/site/Location.png' alt=''>
                                                        ${item.cidade}, ${item.uf}
                                                    </span>
                                                    <div class='tags-container'>
                                                        <span class="tags-box">${item.area_name}</span>
                                                        <span class="tags-box">${item.experiencia_name}</span>
                                                        <span class="tags-box">${item.escolaridade_name}</span>
                                                    </div>
                                                    <a href='/vagas/detalhes/${item.id}'>Ver mais sobre</a>
                                                </div>
                                            </div>`;

                                $(".vagas-container").append(box)

                            })

                            $(".vagas-container").append(button)
                            $(".moreActionVagas").text("Ver mais vagas");
                            $(".moreActionVagas").append("<span class='border'></span>");

                            var offset = 0;
                            var target = '#vagas-title';
                            if ($(this).data('offset') != undefined) offset = $(this).data('offset');
                            $('html, body').stop().animate({
                                'scrollTop': $(target).offset().top - offset
                            }, 500, 'swing', function() {
                                // window.location.hash = target;
                            });
                        }else {
                            window.location.href = "/vagas";
                        }

                    }
                });
            });

            $(".filtro-input").on("change", function() {
                let url = $("#routeGetVagas").val()

                let areas = []
                let escolaridades = []
                let experiencias = []
                let cidades = []

                let filters = new Array()

                $(".area-filtro").each(function (index, value) {
                    if ($(this).is(":checked")) {
                        areas.push(parseInt($(this).val()));
                    }
                })

                $(".escolaridade-filtro").each(function (index, value) {
                    if ($(this).is(":checked")) {
                        escolaridades.push(parseInt($(this).val()));
                    }
                })

                $(".experiencia-filtro").each(function (index, value) {
                    if ($(this).is(":checked")) {
                        experiencias.push(parseInt($(this).val()));
                    }
                })

                $(".cidade-filtro").each(function (index, value) {
                    if ($(this).is(":checked")) {
                        cidades.push($(this).val());
                    }
                })

                filters['areas'] = areas
                filters['escolaridades'] = escolaridades
                filters['experiencias'] = experiencias
                filters['cidades'] = cidades


                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                console.log(filters)

                $.ajax({
                    type: "POST",
                    data:{
                        areas : filters['areas'],
                        escolaridades : filters['escolaridades'],
                        experiencias : filters['experiencias'],
                        cidades : filters['cidades'],
                    },
                    url:url,
                    success:((data) => {
                        let button = $(".moreActionVagas");
                        $('#vagas-container').html('')

                        data.vagas.map(function(item){
                            let box =   `<div class='vagas-box'>
                                                <span class='time'>
                                                    <img src='/img/site/Time Circle.png'>
                                                    ${(item.data_publicacao)}
                                                </span>
                                                <h5>${item.name}</h5>
                                                <h4>${item.empresa_name}</h4>
                                                <p>${item.breve_descricao}</p>
                                                <div class='vagas-box-bottom'>
                                                    <span class='location'>
                                                        <img src='/img/site/Location.png' alt=''>
                                                        ${item.cidade}, ${item.uf}
                                                    </span>
                                                    <div class='tags-container'>
                                                        <span class="tags-box">${item.area_name}</span>
                                                        <span class="tags-box">${item.experiencia_name}</span>
                                                        <span class="tags-box">${item.escolaridade_name}</span>
                                                    </div>
                                                    <a href='/vagas/detalhes/${item.id}'>Ver mais sobre</a>
                                                </div>
                                            </div>`;

                            $("#vagas-container").append(box)

                        })

                        $(".vagas-container").append(button)
                        $(".moreActionVagas").text("Ver mais vagas");
                        $(".moreActionVagas").append("<span class='border'></span>");
                    })
                })
            });

            let start = 0;


            jQuery(document).off('click', '.moreActionVagas');
            jQuery(document).on('click', '.moreActionVagas', function(e) {
                start = start + 3
                $(".moreActionVagas").text("Buscando vagas...");
                $(".moreActionVagas").append("<span class='border'></span>");

                let button = $(".moreActionVagas");

                setTimeout(function(){
                    $.ajax({
                        type: "GET",
                        url: '/vagas/get?start='+start,
                        success: function (data) {
                            $(".moreActionVagas").remove();
                            data.vagas.map(function(item){

                                let box =   `<div class='vagas-box'>
                                                <span class='time'>
                                                    <img src='/img/site/Time Circle.png'>
                                                    ${(item.data_publicacao > 0 ? 'Há '+ item.data_publicacao + ' dias' : 'Publicada hoje' )}
                                                </span>
                                                <h5>${item.name}</h5>
                                                <h4>${item.empresa_name}</h4>
                                                <p>${item.breve_descricao}</p>
                                                <div class='vagas-box-bottom'>
                                                    <span class='location'>
                                                        <img src='/img/site/Location.png' alt=''>
                                                        ${item.cidade}, ${item.uf}
                                                    </span>
                                                    <div class='tags-container'>
                                                        <span class="tags-box">${item.area_name}</span>
                                                        <span class="tags-box">${item.experiencia_name}</span>
                                                        <span class="tags-box">${item.escolaridade_name}</span>
                                                    </div>
                                                    <a href='/vagas/detalhes/${item.id}'>Ver mais sobre</a>
                                                </div>
                                            </div>`;

                                $(".vagas-container").append(box)

                            })

                            $(".vagas-container").append(button)
                            $(".moreActionVagas").text("Ver mais vagas");
                            $(".moreActionVagas").append("<span class='border'></span>");

                        }
                    });
                }, 1500)
            });


        }
    },
    Homepage: {
        setup: function() {
            var __this = this;
            $(".homePageLink").addClass("active")


            __this.Servicos.setup();

        },
        Servicos: {
            setup: function() {


                $(".servicoBox h4").on("click", function(){
                    let _this = $(this);
                    let box = _this.parent()

                    $(".servicoBox").removeClass("servicoBoxActive")
                    box.addClass("servicoBoxActive")
                })



            }
        }
    },
    Cases: {
        setup: function() {
            $('.cases-container').slick({
                slidesToShow: 2,
                slidesToScroll: 2,
                arrows: false,
                dots: false,
                autoplay: true,
                autoplaySpeed: 2000,
                arrows: true,
                prevArrow:"<div class='casesArrow arrowLeftG'><img class='arrow_branca' src='/img/site/arrow_branca.svg'><img class='arrow_orange' src='/img/site/arrow.svg'></div>",
                nextArrow:"<div class='casesArrow arrowRighttG'><img class='arrow_branca' src='/img/site/arrow_branca.svg'><img class='arrow_orange' src='/img/site/arrow.svg'></div>",
                responsive: [
                    {
                      breakpoint: 780,
                      settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                      }
                    },

                  ]
            });
            $('.skills-container').slick({
                slidesToShow: 3,
                slidesToScroll: 3,
                arrows: false,
                dots: false,
                arrows: false,
                autoplay: true,
                autoplaySpeed: 2000,
                responsive: [
                    {
                      breakpoint: 780,
                      settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2,
                      }
                    },
                    {
                        breakpoint: 430,
                        settings: {
                          slidesToShow: 1,
                          slidesToScroll: 1,
                        }
                      },

                  ]
            });
            $('.equipe-container').slick({
                slidesToShow: 4,
                slidesToScroll: 4,
                arrows: true,
                prevArrow:"<div class='arrows boxLeft'><img src='https://tsconsultoria.com.br/img/site/seta_grande_preta.svg'></div>",
                nextArrow:"<div class='arrows boxRight'><img src='https://tsconsultoria.com.br/img/site/seta_grande_preta.svg'></div>",
                dots: false,
                autoplay: false,
                autoplaySpeed: 2000,
                responsive: [
                    {
                      breakpoint: 1025,
                      settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2,
                      }
                    },
                    {
                        breakpoint: 500,
                        settings: {
                          slidesToShow: 1,
                          slidesToScroll: 1,
                        }
                      }
                  ]
            });
        }
    },
    Servicos: {
        setup: function() {
            if($("#tag").length) {
                var offset = 0;
                var target = '#'+$("#tag").val()
                if ($(this).data('offset') != undefined) offset = $(this).data('offset');
                $('html, body').stop().animate({
                    'scrollTop': $(target).offset().top - offset
                }, 500, 'swing', function() {
                });
            }


            var window_size = window.matchMedia('(max-width: 500px)');
            if (!window.matchMedia('(max-width: 769px)').matches) {
                let height = $(".content-header-right").height() + 300;
                $(".content-header-1").css("height", '2188px')
                let finish = 1619;
                $(window).scroll(function () {
                console.log($(window).scrollTop())

                    if($(window).scrollTop() >= 128 && $(window).scrollTop() <=  finish) {
                        $(".content-header-left").css("position", "fixed")
                        $(".content-header-left").css("top", "0")
                    }
                    if($(window).scrollTop() >= finish) {
                        $(".content-header-left").css("position", "absolute")
                        $(".content-header-left").css("bottom", "0")
                        $(".content-header-left").css("top", "unset")
                    }
                    if($(window).scrollTop() < 128) {
                        $(".content-header-left").css("position", "static")
                        $(".content-header-left").css("bottom", "0")
                        $(".content-header-left").css("top", "unset")
                    }

                })
            }
            if(window.matchMedia('(max-width: 425px)').matches) {
                $('.tags-servicos').slick({
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    arrows: false,
                    dots: false,
                    arrows: false,
                    autoplay: true,
                    autoplaySpeed: 2000,
                });
            }

            $(".collapse-header").on("click", function(){
                let __this = $(this);
                let box = __this.parent();

                $(".collapse-box").removeClass("collapse-active");
                box.toggleClass("collapse-active")

            })

        }
    },
    VagaInterno: {
        setup: function() {
            let _this = this;

            $(".sharebutton").on("click", function(){
                $(".share-candidatura").addClass("share-candidatura-active")
            })
            $(".close-share-candidatura").on("click", function(){
                $(".share-candidatura").removeClass("share-candidatura-active")
            })

            $(".candidatar-button").on("click", function() {
                $(".candidatura-content").addClass("candidatura-content-active")
            });
            $(".close-candidatura").on("click", function() {
                $(".candidatura-content").removeClass("candidatura-content-active")
                $(".candidatura-form").find("#name").val("")
                $(".candidatura-form").find("#email").val("")
                $(".candidatura-form").find("#curriculo").val("")
                $(".candidatura-form").find("#cidade").val("")
                $(".candidatura-form").find("#descricao").val("")
                $(".candidatura-form").find("p").text("Anexe aqui seu currículo em formato PDF")
            });
            $("#curriculo").on("change", function() {
                $(this).siblings('p').text($(this)[0].files[0].name)
            })

            $(".submitCandidatura").on("click", function(){
                let form = $(".candidatura-form");

                form.find(".data-form").each(function(index, item) {
                    if($(item).val() == '') {
                        $(item).addClass("border-danger");
                        return
                    }
                })

                form = form[0]
                let data = new FormData(form);



                $.ajax({
                    type: "POST",
                    url: '/candidaturas/send',
                    data: data,
                    enctype: 'multipart/form-data',
                    processData: false,
                    contentType: false,
                    cache: false,
                    timeout: 800000,
                    success: function (data) {
                        $(".candidatura-form .feedback").find('p').text(data.msg);

                        $(".candidatura-form .content").hide();
                        $(".candidatura-form .feedback").addClass('feedback-active');

                        console.log(data)

                        setTimeout(function(){
                            $(".candidatura-content").removeClass("candidatura-content-active")
                            $(".candidatura-form").find("#name").val("")
                            $(".candidatura-form").find("#email").val("")
                            $(".candidatura-form").find("#curriculo").val("")
                            $(".candidatura-form").find("#cidade").val("")
                            $(".candidatura-form").find("#descricao").val("")
                            $(".candidatura-form").find("p").text("Anexe aqui seu currículo em formato PDF")
                            $(".candidatura-form .content").show();
                            $(".candidatura-form .feedback").hide();

                        }, 2000);

                    }
                });

            })
        }
    }
}

$(function(){
    Main.setup();
})

