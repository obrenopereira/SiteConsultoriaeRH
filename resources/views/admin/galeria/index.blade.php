@extends('layouts.admin')
@section('title', 'Galeria')

@section('content')
<div class="container">
@if(Session::has('message-feedback'))
<p class="message-feedback-session alert-{{ Session::get('message-alert') }}">{{ Session::get('message-feedback') }}</p>
@endif
   <div class='box'>
        <div class="box-header">
            <h2 class="title">Todas as Imagens <strong>(<?php echo count($galeria); ?>)</strong></h2>
            <div class="buttons">
                <a href="/admin/galeria/form" class="add-button">
                    <i class="fa fa-plus" aria-hidden="true"></i>
                    Adicionar nova Imagem
                </a>
            </div>
        </div>
        <div class="box-body">
            <table id="table-galeria" class="display">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Pagína</th>
                        <th>Título</th>
                        <th>Preview</th>
                        <th style='width: 15em'>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($galeria as $value) { ?>
                    <tr>
                        <td><?=$value->id?></td>
                        <td><?=$value->page_name?></td>
                        <td><?=$value->name?></td>
                        <td class='td-preview'>
                            <span>
                                <img src="<?php echo asset('storage/galeria/'.$value->imagem); ?>" alt="">
                            </span>
                        </td>
                        <td class="td-acoes">
                            <form>
                                <a href="/admin/galeria/form?id=<?=$value->id?>" class="btn-editar" ><i class="fa fa-pencil" aria-hidden="true"></i>Editar</a>
                                @csrf
                                <input type="hidden" class="url-remove" value="/admin/galeria/remove">
                                <input type="hidden" class="url-reload" value="/admin/galeria">
                                <input type="hidden" name='id' class='id' value="<?=$value->id?>">
                                <button class="btn-remover" data-id="<?=$value->id?>"  type="button"><i class="fa fa-trash" aria-hidden="true"></i>Remover</button>
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
    .link-galeria {
        border-bottom: 1px solid #173979;
        margin-bottom: 0.5em
    }
    #body-admin main .container .box {
        height: 84% !important;
    }
</style>
