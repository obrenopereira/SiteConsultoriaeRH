@extends('layouts.admin1')
@section('title', 'Vagas')

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
                        <th>Descrição</th>
                    </thead>
                    <tbody>
                    @foreach($professionals as $professional)
                    <tr>
                        <td>{{ $professional->id }}</td>
                        <td>{{ $professional->name }}</td>
                        <td>{{ $professional->description }}</td>
                        <td class="td-acoes">
                            <form>
                                <a href="/admin/vagas/form?id=<?=$professional->id?>" class="btn-editar" ><i class="fa fa-pencil" aria-hidden="true"></i>Editar</a>
                                @csrf
                                <input type="hidden" class="url-remove" value="/admin/vagas/remove">
                                <input type="hidden" class="url-reload" value="/admin/vagas">
                                <input type="hidden" name='id' class='id' value="<?=$professional->id?>">
                                <button class="btn-remover" data-id="<?=$professional->id?>"  type="button"><i class="fa fa-trash" aria-hidden="true"></i>Remover</button>
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
