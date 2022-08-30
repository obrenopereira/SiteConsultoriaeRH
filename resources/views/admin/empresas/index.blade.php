@extends('layouts.admin')
@section('title', 'Empresas')

@section('content')
<div class="container">
@if(Session::has('message-feedback'))
<p class="message-feedback-session alert-{{ Session::get('message-alert') }}">{{ Session::get('message-feedback') }}</p>
@endif
   <div class='box'>
        <div class="box-header">
            <h2 class="title">Todas as Empresas <strong>(<?php echo count($empresas); ?>)</strong></h2>
            <div class="buttons">
                <a href="/admin/empresas/form" class="add-button">
                    <i class="fa fa-plus" aria-hidden="true"></i>
                    Adicionar nova Empresa
                </a>
            </div>
        </div>
        <div class="box-body">
            <table id="table-empresa" class="display">
                <thead>
                    <tr>
                        <th style='width: 0.5em; padding: 2em 1.5em;'>#</th>
                        <th style='width: 9em'>Logotipo Principal:</th>
                        <th style='width:11em'>Logotipo Secundário:</th>
                        <th>Nome da Empresa</th>
                        <th style='width: 16em'>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($empresas as $empresa) { ?>
                    <tr>
                        <td style='width: 0.5em; padding: 2em 1em;'><?=$empresa->id?></td>
                        <td class='td-image'>
                            <span><img src="<?php echo asset('empresas/'.$empresa->logotipo); ?>" alt=""></span>
                        </td>
                        <td class='td-image'>
                              <span>
                                <img src="<?php echo asset('empresas/'.$empresa->thumbnail); ?>" alt="">
                              </span>
                        </td>
                        <td><?=$empresa->name?></td>
                        <td class="td-acoes" style='width: 16em'>
                            <form>
                                <a href="/admin/empresas/form?id=<?=$empresa->id?>" class="btn-editar" ><i class="fa fa-pencil" aria-hidden="true"></i>Editar</a>
                                @csrf
                                <input type="hidden" class="url-remove" value="/admin/empresas/remove">
                                <input type="hidden" class="url-reload" value="/admin/empresas">
                                <input type="hidden" name='id' class='id' value="<?=$empresa->id?>">
                                <button class="btn-remover" data-id="<?=$empresa->id?>"  type="button"><i class="fa fa-trash" aria-hidden="true"></i>Remover</button>
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
    .link-empresas {
        border-bottom: 1px solid #173979;
        margin-bottom: 0.5em
    }

</style>
