@extends('layouts.admin')
@section('title', 'Vagas')

@section('content')
<div class="container">
@if(Session::has('message-feedback'))
<p class="message-feedback-session alert-{{ Session::get('message-alert') }}">{{ Session::get('message-feedback') }}</p>
@endif
   <div class='box'>
        <div class="box-header">
            <h2 class="title">Todas as Vagas <strong>(<?php echo count($vagas); ?>)</strong></h2>
            <div class="buttons">
                <a href="/admin/vagas/form" class="add-button">
                    <i class="fa fa-plus" aria-hidden="true"></i>
                    Adicionar nova Vaga
                </a>
            </div>
        </div>
        <div class="box-body">
            <table id="table" class="display">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Título</th>
                        <th>Empresa</th>
                        <th>Contrato</th>
                        <th>Publicação</th>
                        <th>Status</th>
                        <th>Localização</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($vagas as $vaga) { ?>
                    <tr>
                        <td><?=$vaga->id?></td>
                        <td><?=$vaga->name?></td>
                        <td><?=$vaga->empresa_name?></td>
                        <td><?=$vaga->contrato?></td>
                        <td><?=$vaga->data_publicacao?></td>
                        <td><?=$vaga->status?></td>
                        <td><?=$vaga->cidade?>, <?=$vaga->uf?></td>
                        <td class="td-acoes">
                            <form>
                                <a href="/admin/vagas/form?id=<?=$vaga->id?>" class="btn-editar" ><i class="fa fa-pencil" aria-hidden="true"></i>Editar</a>
                                @csrf
                                <input type="hidden" class="url-remove" value="/admin/vagas/remove">
                                <input type="hidden" class="url-reload" value="/admin/vagas">
                                <input type="hidden" name='id' class='id' value="<?=$vaga->id?>">
                                <button class="btn-remover" data-id="<?=$vaga->id?>"  type="button"><i class="fa fa-trash" aria-hidden="true"></i>Remover</button>
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
    .link-vagas {
        border-bottom: 1px solid #173979;
        margin-bottom: 0.5em
    }
</style>