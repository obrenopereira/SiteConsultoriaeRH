@extends('layouts.admin1')
@section('title', 'Vagas')

@section('scripts')
    <script>
        $(document).ready(() => {
            $('.btn-remove').click(function() {
                let tr    = $(this).parent().parent().parent();
                let form  = $(this).parent()
                let id    = $(this).data("id")
                let url = form.attr('action')
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
                }).then(willDelete => {
                    if (willDelete === true) {
                        $.ajax({
                            url: url,
                            type: 'DELETE',
                            contentType: false,
                            processData: false,
                            enctype: 'multipart/form-data',
                            headers: {
                                'X-CSRF-TOKEN': form.find("input[name=_token]").val()
                            },
                        }).done(function(data,_, xhr) {
                            if(xhr.status != 200) {
                                showSwal('danger-message', data.msg);
                            }else {
                                showSwal('success-message', data.msg);
                                setTimeout(function(){
                                    location.reload();
                                }, 1500)
                            }
                        });
                    }
                })
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
                <h2 class="title">Todos profissionais <strong>( {{ $professionals->count() }} )</strong></h2>
                <div class="buttons">
                    <a href="{{ route('admin.professionals.create') }}" class="add-button">
                        <i class="fa fa-plus" aria-hidden="true"></i>
                        Adicionar Profissional
                    </a>
                </div>
            </div>
            <div class="box-body">
                <table id="table" class="display">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Nome</th>
                        <th>Vaga</th>
                        <th>Descrição</th>
                        <th>Ação</th>
                    </thead>
                    <tbody>
                    @foreach($professionals as $professional)
                    <tr>
                        <td>{{ $professional->id }}</td>
                        <td>{{ $professional->name }}</td>
                        <td>{{ $professional->office }}</td>
                        <td>{{ \Str::limit($professional->description , 90) }}</td>
                        <td class="td-acoes">
                            <form action="{{ route('admin.professionals.destroy' , ['id' => $professional->id]) }}">
                                @csrf
                                <input type="hidden" class="url-remove" value="{{ route('admin.professionals.destroy' , ['id' => $professional->id]) }}">
                                <input type="hidden" class="url-reload" value="/admin/vagas">
                                <input type="hidden" name='id' class='id' value="<?=$professional->id?>">
                                <button class="btn-remove" data-id="{{ $professional->id }}" type="button"><i class="fa fa-trash" aria-hidden="true"></i>Remover</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

<style>
    .link-profissionais {
        border-bottom: 1px solid #173979;
        margin-bottom: 0.5em
    }
</style>
