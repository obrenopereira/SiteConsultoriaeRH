@extends('layouts.admin1')
@section('title', 'Vagas')
@section('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/dropzone.css" integrity="sha512-7uSoC3grlnRktCWoO4LjHMjotq8gf9XDFQerPuaph+cqR7JC9XKGdvN+UwZMC14aAaBDItdRj3DcSDs4kMWUgg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .link-vagas {
            border-bottom: 1px solid #173979;
            margin-bottom: 0.5em
        }
    </style>
@endsection

@section('scripts')
    <script src="https://unpkg.com/dropzone@6.0.0-beta.1/dist/dropzone-min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js" integrity="sha256-sPB0F50YUDK0otDnsfNHawYmA5M0pjjUf4TvRJkGFrI=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(() => {
            $("#profissional-form").validate({
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
                }
            })

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
                        let name = document.getElementById('name').value
                        let description = document.getElementById('description').value

                        if($("#profissional-form").valid()) {
                            myDropzone.processQueue();
                        }
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
                        console.log(response)
                        setTimeout(function() {
                            myDropzone.removeFile(file);
                        }, 2000);
                    })
                }
            })

        })

    </script>
@endsection

@section('content')
    <div class="container">
        @if(Session::has('message-feedback'))
            <p class="message-feedback-session alert-{{ Session::get('message-alert') }}">{{ Session::get('message-feedback') }}</p>
        @endif
        <div class='box'>
            <div class="box-header">
                <h2 class="title">Cadastro de Profissionais</h2>
            </div>
            <div class="box-body">
                <form class='form profissional-form' id="profissional-form">
                    @csrf
                    <div class='row'>
                        <div class='form-group'>
                            <label for="name">Nome</label>
                            <input type="text" id='name' class='data-form' name='name' placeholder="Digite o nome" value="{{ old('name') }}">
                        </div>
                        <div class='form-group' style="margin-left: 20px; width: 900px">
                            <label for="description">Cargo</label>
                            <input type="text" id='office' class='data-form' name='office' placeholder="Digite o cargo" value="{{ old('office') }}">
                        </div>
                    </div>
                    <div class='row'>
                        <div class='form-group' style="">
                            <label for="name">Descrição</label>
                            <textarea class="data-form" name="description" id="description" cols="200" rows="100" style="resize: none; height: 100px; width: 900px"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="dropzone clsbox" id="mydropzone" style="width: 1000px">

                        </div>
                    </div>
                    <button id="enviar" class="btn mt-2 btn-primary">Enviar</button>
                </form>
            </div>
        </div>
    </div>
@endsection
