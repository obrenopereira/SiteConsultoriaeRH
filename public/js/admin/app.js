var Main = {
    setup: function() {
        var __this = this;

        if($(".message-feedback-session").length) {
            setTimeout(function(){
                $(".message-feedback-session").fadeOut();

            }, 2000)
            setTimeout(function(){
                $(".message-feedback-session").remove();
            }, 2500)
        }

        if($(".categorias-select").length) {
            $(".categorias-select").select2();
        }
        if($(".skills-form").length) {
            $(".skills-select").select2({
              });

        }
        if($("#descricao-text").length) {
            $('#descricao-text').richText({

                // text formatting
                bold: true,
                italic: true,
                underline: true,

                // text alignment
                leftAlign: true,
                centerAlign: true,
                rightAlign: true,
                justify: true,

                // lists
                ol: true,
                ul: true,

                // title
                heading: true,

                // fonts
                fonts: true,
                fontList: [
                    "Ubuntu",
                    "Mukta"
                ],
                fontColor: true,
                fontSize: true,

                // uploads
                imageUpload: false,
                fileUpload: false,

                // media
                videoEmbed: false,

                // link
                urls: true,

                // tables
                table: false,

                // code
                removeStyles: true,
                code: true,

                // colors
                colors: [],

                // dropdowns
                fileHTML: '',
                imageHTML: '',

                // translations
                translations: {
                    'title': 'Titulo',
                    'white': 'Branco',
                    'black': 'Preto',
                    'brown': 'Marrom',
                    'beige': 'Bege',
                    'darkBlue': 'Azul Escuro',
                    'blue': 'Azul',
                    'lightBlue': 'Azul Claro',
                    'darkRed': 'Vermelho Escuro',
                    'red': 'Vermelho',
                    'darkGreen': 'Verde Escuro',
                    'green': 'Verde',
                    'purple': 'Roxo',
                    'darkTurquois': 'Turquesa Escuro',
                    'turquois': 'Turquesa',
                    'darkOrange': 'Laranja Escuro',
                    'orange': 'Laranja',
                    'yellow': 'Amarelo',
                    'linkText': 'Link texto',
                    'url': 'URL',
                    'size': 'Tamanho',
                    'responsive': 'Responsivo',
                    'text': 'Texto',
                    'openIn': 'Abra em',
                    'sameTab': 'Mesma Aba',
                    'newTab': 'Nova Aba',
                    'align': 'Alinhar',
                    'left': 'Esquerda',
                    'center': 'Centro',
                    'right': 'Direita',
                    'rows': 'Linhas',
                    'columns': 'Colunas',
                    'add': 'Adiciona',
                    'pleaseEnterURL': 'Por favor, digite a URL',
                    'bold': 'Bold',
                    'italic': 'Italic',
                    'underline': 'Underline',
                    'alignLeft': 'Alinhar a Esquerda',
                    'alignCenter': 'Alinhar ao Centro',
                    'alignRight': 'Alinhar a Direita',
                    'addOrderedList': 'Adicionar lista ordenanda',
                    'addUnorderedList': 'Adicionar lista não ordenada',
                    'addHeading': 'Adicionar Cabeçalho',
                    'addFont': 'Adicionar fonte',
                    'addFontColor': 'Adicionar cor da fonte',
                    'addFontSize' : 'Adicionar tamanho da fonte',
                    'addURL': 'Adicionar URL',
                    'removeStyles': 'Remover estilos',
                    'code': 'Mostrar HTML',
                    'undo': 'Desfazer',
                    'redo': 'Refazer',
                    'close': 'Fechar'
                },

                // privacy
                youtubeCookies: false,

                // preview
                preview: false,

                // placeholder
                placeholder: '',

                // developer settings
                useSingleQuotes: false,
                height: 0,
                heightPercentage: 0,
                adaptiveHeight: false,
                id: "descricao-text",
                class: "",
                useParagraph: false,
                maxlength: 0,
                callback: undefined,
                useTabForNext: false
            });
        }
        if($("#table").length) {

            $('#table').DataTable({
                "aLengthMenu": [[7], [7]],
                "pageLength": 7,
                "ordering": false,
                language: {
                    "decimal":        "",
                    "emptyTable":     "Nenhum item encontrado",
                    "info":           "Monstrando _START_ de _END_ / Total de _TOTAL_ itens",
                    "infoEmpty":      "Monstrando 0 de 0  / total de 0 itens",
                    "infoFiltered":   "(filtered from _MAX_ total entries)",
                    "infoPostFix":    "",
                    "thousands":      ",",
                    "lengthMenu":     "Mostrar _MENU_ itens",
                    "loadingRecords": "Carregando...",
                    "processing":     "",
                    "search":         "Pesquisar:",
                    "zeroRecords":    "Nenhum item encontrado",
                    "paginate": {
                        "first":      "Primeiro",
                        "last":       "Último",
                        "next":       "Próximo",
                        "previous":   "Anterior"
                    },
                    "aria": {
                        "sortAscending":  ": activate to sort column ascending",
                        "sortDescending": ": activate to sort column descending"
                    }
                },

            });
        }
        if($("#table-empresa").length) {

            $('#table-empresa').DataTable({
                "ordering": false,
                "aLengthMenu": [[4], [4]],
                "pageLength": 4,
                language: {
                    "decimal":        "",
                    "emptyTable":     "Nenhum item encontrado",
                    "info":           "Monstrando _START_ de _END_ / Total de _TOTAL_ itens",
                    "infoEmpty":      "Monstrando 0 de 0  / total de 0 itens",
                    "infoFiltered":   "(filtered from _MAX_ total entries)",
                    "infoPostFix":    "",
                    "thousands":      ",",
                    "lengthMenu":     "Mostrar _MENU_ itens",
                    "loadingRecords": "Carregando...",
                    "processing":     "",
                    "search":         "Pesquisar:",
                    "zeroRecords":    "Nenhum item encontrado",
                    "paginate": {
                        "first":      "Primeiro",
                        "last":       "Último",
                        "next":       "Próximo",
                        "previous":   "Anterior"
                    },
                    "aria": {
                        "sortAscending":  ": activate to sort column ascending",
                        "sortDescending": ": activate to sort column descending"
                    }
                },

            });
        }
        if($("#table-galeria").length) {

            $('#table-galeria').DataTable({
                "ordering": false,
                "aLengthMenu": [[3], [3]],
                "pageLength": 3,
                language: {
                    "decimal":        "",
                    "emptyTable":     "Nenhum item encontrado",
                    "info":           "Monstrando _START_ de _END_ / Total de _TOTAL_ itens",
                    "infoEmpty":      "Monstrando 0 de 0  / total de 0 itens",
                    "infoFiltered":   "(filtered from _MAX_ total entries)",
                    "infoPostFix":    "",
                    "thousands":      ",",
                    "lengthMenu":     "Mostrar _MENU_ itens",
                    "loadingRecords": "Carregando...",
                    "processing":     "",
                    "search":         "Pesquisar:",
                    "zeroRecords":    "Nenhum item encontrado",
                    "paginate": {
                        "first":      "Primeiro",
                        "last":       "Último",
                        "next":       "Próximo",
                        "previous":   "Anterior"
                    },
                    "aria": {
                        "sortAscending":  ": activate to sort column ascending",
                        "sortDescending": ": activate to sort column descending"
                    }
                },

            });
        }
        __this.Form .setup();

        if($(".candidaturas").length) {
            __this.Candidaturas .setup();

        }

        if($(".vagas-form").length) {
            __this.Vagas .setup();

        }

        if($(".skills-form").length) {
            __this.Skills .setup();

        }
    },
    Skills: {
        setup: function() {
            $(".skills-button").on("click", function(){
                $(".skills-content").addClass("skills-content-active")
            });
            $(".closeSkills").on("click", function(){
                $(".skills-content").removeClass("skills-content-active")
            });

            $(".saveSkills").on("click", function() {
                let form = $(".skills-form");
                let inputNew = $(".skills-form .adicionarSkillInput");
                let id = $(".skills-form .case-id").val()
                let data = new FormData(form[0]);

                data.append("id", id)

                $.ajax({
                    type: "POST",
                    url: '/admin/skills/send',
                    data: data,
                    enctype: 'multipart/form-data',
                    processData: false,
                    contentType: false,
                    cache: false,
                    timeout: 800000,
                    success: function (data) {
                        if(data.status == 200) {
                            if(data.nova) {
                                var nova = {
                                    id: data.nova,
                                    text: inputNew.val()
                                };

                                var newOption = new Option(nova.text, nova.id, false, false);
                                $('.skills-select').append(newOption).trigger('change');
                                $(`.skills-select option[value=${nova.id}]`).prop("selected", true);
                            }
                            inputNew.val('');
                            $(".skills-content").removeClass("skills-content-active")

                        }
                    }
                });
            });
        }
    },
    Vagas: {
        setup: function() {
            let __this = this;

            $(".areas-select").select2({
                tags: true
              });

            let ufSave = $("#uf-value").val();
            let cidadeSave = $("#cidade-value").val();

            $.getJSON('https://servicodados.ibge.gov.br/api/v1/localidades/estados/', function (json) {

                json.map(function(item){
                    if(ufSave != '' && ufSave == item.sigla) {
                        $("#uf").append(`<option value='${item.sigla}' selected>${item.nome} </option>`)

                        $.getJSON(`https://servicodados.ibge.gov.br/api/v1/localidades/estados/${item.sigla}/municipios`, function (json) {

                            $("#cidade option").remove();
                            $("#cidade").append("<option value=''>Selecione uma cidade</option>");

                            json.map(function(element){
                                if(cidadeSave != '' && cidadeSave == element.nome) {
                                    $("#cidade").append(`<option value='${element.nome}' selected>${element.nome} </option>`)
                                }else {
                                    $("#cidade").append(`<option value='${element.nome}'>${element.nome} </option>`)
                                }
                            })

                        });

                    }else {
                        $("#uf").append(`<option value='${item.sigla}'>${item.nome} </option>`)
                    }
                })
            });

            $("#uf").on("change", function(){
                let _this = $(this);
                let uf = _this.val();

                $.getJSON(`https://servicodados.ibge.gov.br/api/v1/localidades/estados/${uf}/municipios`, function (json) {

                $("#cidade option").remove();
                $("#cidade").append("<option value=''>Selecione uma cidade</option>");

                json.map(function(item){
                    $("#cidade").append(`<option value='${item.nome}'>${item.nome} </option>`)
                })

            });


            });

        }
    },
    Candidaturas: {
        setup: function() {
            var __this = this;

            __this.CloseModal();
            __this.Visualizar();
        },
        Visualizar: function() {
            jQuery(document).off('click', '.btn-visualizar');
            jQuery(document).on('click', '.btn-visualizar', function(e) {
                e.preventDefault();
                let _this = jQuery(this);

                let id = _this.data("id");
                let url = _this.data("url");
                console.log(url)
                $.ajax({
                    type: "GET",
                    url: url,
                    success: function (data) {
                        let hasFile = data.hasFile

                        data = data.candidatura
                        let href = $("#urlDownloadPDF").val()+id;
                        $(".downloadPDF").attr("href", href);
                        $(".visualizar-modal h2").text('Candidatura: ('+data.id+')')
                        $("#nome-modal").val(data.name)
                        $("#email-modal").val(data.email)
                        $("#escolaridade-modal").val(data.escolaridade)
                        $("#cidade-modal").val(data.cidade)
                        $("#data-candidatura-modal").val(data.data_candidatura)
                        $("#vaga-modal").val('#'+data.vaga_id + ' - '+data.vaga_name)
                        $("#categorias-modal").val(data.categorias)
                        $("#descricao-modal").val(data.descricao)

                        if (!hasFile) {
                            // $(".downloadPDF").on('click', (e) => {
                            //     e.preventDefault();
                            // })

                            $(".downloadPDF").removeAttr("href");

                            $("#textFileNotFound").css('display' , 'block');
                        } else{
                            $("#textFileNotFound").css('display' , 'none');
                        }


                        $(".gradient").fadeIn()
                        $(".visualizar-modal").addClass('active-modal')
                    }
                });

            });
        },
        CloseModal: function(){
            $(".close-modal-visualizar").on("click", function(){
                $(".visualizar-modal h2").text('Candidatura: ()')
                        $("#nome-modal").val('')
                        $("#email-modal").val('')
                        $("#escolaridade-modal").val('')
                        $("#cidade-modal").val('')
                        $("#data-candidatura-modal").val('')
                        $("#vaga-modal").val('')
                        $("#categorias-modal").val('')
                        $("#descricao-modal").val('')


                        $(".gradient").fadeOut()
                        $(".visualizar-modal").removeClass('active-modal')
            })
        }
    },
    Form: {
        setup: function() {
            var __this = this;

            __this.resetForm();
            __this.saveForm();
            __this.Preview();
            __this.Remover();


        },
        resetForm: function(){
            $(".form").find(".data-form").on("click", function(){
                $(this).removeClass("border-danger")
            })
        },
        saveForm: function() {
            $(".enviar").on("click", function(e){
                e.preventDefault();
                let url = $("#formSaveClient").attr('action')

                let form = $(".form");

                form.find(".data-form").each(function(index, item) {
                    if($(item).val() == '') {
                        $(item).addClass("border-danger");
                        return
                    }
                })

                form = form[0]
                let data = new FormData(form);

                if($("#id").val() != '') {
                    data.append("id", $("#id").val())
                }

                $.ajax({
                    type: "POST",
                    url: url,
                    data: data,
                    enctype: 'multipart/form-data',
                    processData: false,
                    contentType: false,
                    cache: false,
                    timeout: 800000,
                    success: function (data) {
                        let message = data.message
                        $(".message-feedback").text(message);
                        $(".message-feedback").addClass("alert-success");
                        $(".message-feedback").show(500)

                        setTimeout(function(){
                            $(".message-feedback").fadeOut()
                            location.reload()
                        }, 1200);

                    },
                    error: (request, status, error) => {
                        let message = request.responseJSON.message
                        let statusCode = request.status
                        $(".message-feedback").addClass("alert-danger");
                        $(".message-feedback").text(message);
                        $(".message-feedback").show(500)

                        if (statusCode !== 422) {
                            setTimeout(function(){
                                $(".message-feedback").fadeOut()
                                location.reload()
                            }, 1200);
                        }
                    }
                });

            })
        },
        Preview: function() {
            $(".preview button, .imagem-content button").on("click", function() { $(this).parent().trigger("click")  } );

            $(".input_upload").on("change", function(event) {
                let _this = $(this);

                if(event.target.files.length > 0){
                    _this.siblings(".preview, .imagem-content").addClass("preview-active");
                    _this.siblings(".preview, .imagem-content").find('button').css("display", "none")
                    var src = URL.createObjectURL(event.target.files[0]);
                    _this.siblings(".preview, .imagem-content").find("img").attr("src", src)
                  }

            });
        },
        Remover: function() {
            jQuery(document).off('click', '.btn-remover');
            jQuery(document).on('click', '.btn-remover', function() {
                let _this = jQuery(this);
                let tr    = _this.parent().parent().parent();
                let form  = _this.parent()
                let id    = _this.data("id")

                let data = new FormData(form[0]);
                swal({
                    title: 'Tem certeza disso?',
                    text: "Você realmente deseja realizar essa ação?",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3f51b5',
                    cancelButtonColor: '#ff4081',
                    confirmButtonText: 'Great ',
                    buttons: {
                        cancel: {
                            text: "Cancelar",
                            value: null,
                            visible: true,
                            className: "btn btn-danger btnCancel",
                            closeModal: true,
                        },
                        confirm: {
                            text: "Continuar",
                            value: true,
                            visible: true,
                            className: "btn btn-primary btnContinue",
                            closeModal: true
                        }
                    }
                })
                .then((willDelete) => {
                    if (willDelete) {
                        console.log(form, form.find('.url-remove').val())
                        $.ajax({
                            url: form.find('.url-remove').val(),
                            type: 'POST',
                            contentType: false,
                            processData: false,
                            enctype: 'multipart/form-data',
                            headers: {
                                'X-CSRF-TOKEN': form.find("input[name=_token]").val()
                            },
                            data: data,
                        })
                        .done(function(data) {
                            if(data.status != 200) {
                                showSwal('danger-message', data.msg);
                            }else {
                                showSwal('success-message', data.msg);

                                setTimeout(function(){
                                    window.location.replace(form.find('.url-reload').val());
                                }, 1500)
                            }
                        });
                    }
                });

            })
        },
    }
}

$(function(){
    Main.setup();
})

