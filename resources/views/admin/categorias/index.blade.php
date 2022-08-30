@extends('layouts.admin')
@section('title', 'Categorias')

@section('content')
<div class="container">
@if(Session::has('message-feedback'))
<p class="message-feedback-session alert-{{ Session::get('message-alert') }}">{{ Session::get('message-feedback') }}</p>
@endif
   <div class='box'>
        <div class="box-header">
            <h2 class="title">Todas as Categorias <strong>(<?php echo count($categorias); ?>)</strong></h2>
            <div class="buttons">
                <a href="/admin/categorias/form" class="add-button">
                    <i class="fa fa-plus" aria-hidden="true"></i>
                    Adicionar nova Categoria
                </a>
            </div>
        </div>
        <div class="box-body">
            <table id="table" class="display">
                <thead>
                    <tr>
                        <th style='width: 0.5em; padding: 2em 1.5em;'>#</th>
                        <th>Nome da Categoria</th>
                        <th style='width: 16em'>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($categorias as $categoria) { ?>
                    <tr>
                        <td style='width: 0.5em; padding: 2em 1em;'><?=$categoria->id?></td>
                        <td><?=$categoria->name?></td>
                        <td class="td-acoes" style='width: 16em'>
                            <form>
                                <a href="/admin/categorias/form?id=<?=$categoria->id?>" class="btn-editar" ><i class="fa fa-pencil" aria-hidden="true"></i>Editar</a>
                                @csrf
                                <input type="hidden" class="url-remove" value="/admin/categorias/remove">
                                <input type="hidden" class="url-reload" value="/admin/categorias">
                                <input type="hidden" name='id' class='id' value="<?=$categoria->id?>">
                                <button class="btn-remover" data-id="<?=$categoria->id?>"  type="button"><i class="fa fa-trash" aria-hidden="true"></i>Remover</button>
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
    .link-categorias {
        border-bottom: 1px solid #173979;
        margin-bottom: 0.5em
    }
 
</style>