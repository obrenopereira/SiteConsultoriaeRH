@extends('layouts.admin')
@section('title', 'Clientes')

@section('content')
<div class="container">
@if(Session::has('message-feedback'))
<p class="message-feedback-session alert-{{ Session::get('message-alert') }}">{{ Session::get('message-feedback') }}</p>
@endif
   <div class='box'>
        <div class="box-header">
            <h2 class="title">Todos Clientes <strong>(<?php echo count($clientes); ?>)</strong></h2>
            <div class="buttons">
                <a href="/admin/clientes/form" class="add-button">
                    <i class="fa fa-plus" aria-hidden="true"></i>
                    Adicionar novo Cliente
                </a>
            </div>
        </div>
        <div class="box-body">
            <table id="table-empresa" class="display">
                <thead>
                    <tr>
                        <th style='width: 0.5em; padding: 2em 1.5em;'>#</th>
                        <th style='width:11em'>Imagem:</th>
                        <th>Nome</th>
                        <th style='width: 16em'>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($clientes as $cliente) { ?>
                    <tr>
                        <td style='width: 0.5em; padding: 2em 1em;'><?=$cliente->id?></td>
                        <td class='td-image'>
                            <span><img src="{{ asset('storage/clientes/'.$cliente->imagem) }}" alt=""></span>

                        </td>
                        <td><?=$cliente->name?></td>
                        <td class="td-acoes" style='width: 16em'>
                            <form>
                                <a href="/admin/clientes/form?id=<?=$cliente->id?>" class="btn-editar" ><i class="fa fa-pencil" aria-hidden="true"></i>Editar</a>
                                @csrf
                                <input type="hidden" class="url-remove" value="/admin/clientes/remove">
                                <input type="hidden" class="url-reload" value="/admin/clientes">
                                <input type="hidden" name='id' class='id' value="<?=$cliente->id?>">
                                <button class="btn-remover" data-id="<?=$cliente->id?>"  type="button"><i class="fa fa-trash" aria-hidden="true"></i>Remover</button>
                            </form>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
   </div>
</div>
@endsection


<style>
    .link-clientes {
        border-bottom: 1px solid #173979;
        margin-bottom: 0.5em
    }

</style>
