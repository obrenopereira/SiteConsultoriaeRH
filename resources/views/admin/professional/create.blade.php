@extends('layouts.admin1')
@section('title', 'Vagas')
@section('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/dropzone.css" integrity="sha512-7uSoC3grlnRktCWoO4LjHMjotq8gf9XDFQerPuaph+cqR7JC9XKGdvN+UwZMC14aAaBDItdRj3DcSDs4kMWUgg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .link-profissionais {
            border-bottom: 1px solid #173979;
            margin-bottom: 0.5em
        }

        #enviar {
            font-family: "Mukta";
            font-style: normal;
            font-weight: 400;
            font-size: 1em;
            line-height: 142.5%;
            color: #fff;
            padding: 0.5em 1.5em;
            background-color: #FFC225;
            border-radius: 0.25em;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            text-decoration: none;
        }
        .invalid {
            border: 1px solid #CB000F;
            color: red
        }
    </style>
@endsection

@section('scripts')
    <script src="https://unpkg.com/dropzone@6.0.0-beta.1/dist/dropzone-min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js" integrity="sha256-sPB0F50YUDK0otDnsfNHawYmA5M0pjjUf4TvRJkGFrI=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(() => {
            /**$("#profissional-form").validate({
                rules:{
                    name: {
                        required: true
                    },
                    description: {
                        required: true
                    },
                    office: {
                        required: true
                    }
                },
                highlight: function (element, errorClass, validClass) {
                    $(element).addClass('border-danger');
                    let label = $(element).attr('id') + '-error'
                    let teste = $("#" + label).val()
                    console.log(teste)
                },
                unhighlight: function (element, errorClass, validClass) {
                    $(element).removeClass('border-danger');
                }
            })*/

            Dropzone.autoDiscover = false;
            let uploader = document.getElementById('#mydropzone');

            $("#mydropzone").dropzone({
                params: {
                    description: 'nothing'
                },
                paramName:"file",
                maxFiles: 1,
                autoProcessQueue: false,
                createImageThumbnails: true,
                disablePreviews:false,
                uploadMultiple: false,
                maxFilesize: 0,
                addRemoveLinks: true,
                dictFileTooBig: 'Arquivo muito grande',
                dictMaxFilesExceeded: 'Não pode adicionar mais de uma foto',
                dictRemoveFile: 'Remover arquivo',
                url: "{{ route('admin.professionals.store') }}",
                dictDefaultMessage: 'Solte os arquivos ou clique aqui para anexar',
                acceptedFiles: '.png, .jpg, .jpeg',
                init: function() {
                    var submitButton = document.querySelector("#enviar")
                    myDropzone = this;
                    submitButton.addEventListener("click", function(e) {
                        e.preventDefault()
                        let fieldName = document.getElementById('name')
                        let fieldOffice = document.getElementById('office')
                        let fieldDescription = document.getElementById('description')

                        if(fieldName.value === ''){
                            fieldName.classList.add('border-danger')
                        }else{
                            fieldName.classList.remove('border-danger')
                        }

                        if(fieldOffice.value === ''){
                            fieldOffice.classList.add('border-danger')
                        }else{
                            fieldOffice.classList.remove('border-danger')
                        }

                        if(fieldDescription.value === ''){
                            fieldDescription.classList.add('border-danger')
                        }else{
                            description.classList.remove('border-danger')
                        }

                        if(
                            myDropzone.getQueuedFiles().length === 0
                            && (
                                fieldName.value !== ''
                                && fieldOffice.value !== ''
                                && fieldDescription.value !== ''
                            )
                        ){
                            alert('precisa adicionar ao menos uma imagem')
                            return
                        }

                        myDropzone.processQueue();
                    });
                    myDropzone.on('sending' , function(file, xhr, formData) {
                        let name = document.getElementById('name').value
                        let description = document.getElementById('description').value
                        let office = document.getElementById('office').value
                        let _token = $('meta[name="csrf-token"]').attr('content')

                        formData.append("name", name);
                        formData.append("description", description);
                        formData.append("office", office);
                        formData.append("_token", _token);
                    });
                    myDropzone.on('success', function(file, response) {
                        setTimeout(function() {
                            myDropzone.removeFile(file);
                            document.getElementById('name').value = ''
                            document.getElementById('description').value = ''
                            document.getElementById('office').value = ''
                            $(".message-feedback").removeClass("alert-warning");
                            $(".message-feedback").addClass("alert-success");
                            $(".message-feedback").css('display', 'block')
                        }, 2000);
                    })
                }
            })
        })
    </script>
@endsection

@section('content')
    <div class="container">
        <p class="message-feedback" style="display: none"><strong>Profissional cadastrado com sucesso</strong></p>
        <div class='box'>
            <div class="box-header">
                <h2 class="title">Cadastro de Profissionais</h2>
            </div>
            <div class="box-body">
                <form class='form profissional-form' id="profissional-form">
                    @csrf
                    <div class='row'>
                        <div class='form-group' style="width: 100%">
                            <label for="name">Nome</label>
                            <input type="text" id='name' class='data-form' name='name' placeholder="Digite o nome" value="{{ old('name') }}">
                        </div>
                        <div class='form-group' style="margin-left: 20px; width: 100%">
                            <label for="description">Cargo</label>
                            <input type="text" id='office' class='data-form' name='office' placeholder="Digite o cargo" value="{{ old('office') }}">
                        </div>
                    </div>
                    <div class='row'>
                        <div class='form-group' style="width: 100%">
                            <label for="name">Descrição</label>
                            <textarea class="data-form" name="description" id="description" cols="200" rows="100" style="resize: none; height: 100px; width: 100%"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="dropzone clsbox" id="mydropzone" style="width: 100%">

                        </div>
                    </div>
                    <button id="enviar" class="btn mt-2 btn-primary add-button">Enviar</button>
                </form>
            </div>
        </div>
    </div>
@endsection
