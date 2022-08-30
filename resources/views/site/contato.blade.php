@extends('layouts.layout')

@section('title', 'Contato')

@section('headerInterno', 'interno')

@section('content')


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
            @csrf
            <h2>Como podemos te ajudar?</h2>
            <input type="text" name="nome" id="nome" placeholder="Insira o seu nome">
            <input type="email" name="email" id="email" placeholder="Insira o seu e-mail">
            <textarea name="mensagem" id="mensagem" placeholder="Mensagem"></textarea>
            <button type="button">ENTRAR EM CONTATO <img src="/img/site/seta_preta.svg"></button>
        </form>

    </div>
</section>
@stop




