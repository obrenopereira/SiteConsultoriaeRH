@extends('layouts.admin1')
@section('title', 'Vagas')

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
                <form class='form vagas-form'>
                    @csrf
                    <div class='row'>
                        <div class='form-group'>
                            <label for="name">Nome</label>
                            <input type="text" id='name' class='data-form' name='name' placeholder="Digite o nome" value="{{ old('name') }}">
                        </div>
                        <div class='form-group'>
                            <label for="description">Descrição</label>
                            <input type="text" id='description' class='data-form' name='description' placeholder="Digite a descrição" value="{{ old('description') }}">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection


<style>
    .link-vagas {
        border-bottom: 1px solid #173979;
        margin-bottom: 0.5em
    }
</style>
