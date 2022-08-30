@extends('layouts.admin')
@section('title', 'Candidaturas')

@section('content')
<div class="container">
@if(Session::has('message-feedback'))
<p class="message-feedback-session alert-{{ Session::get('message-alert') }}">{{ Session::get('message-feedback') }}</p>
@endif
   <div class='box candidaturas'>
        <div class="box-header">
            <h2 class="title">Todas as Candidaturas <strong>(<?php echo count($candidaturas); ?>)</strong></h2>
        </div>
        <div class="box-body">
            <table id="table" class="display">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nome</th>
                        <th>Empresa</th>
                        <th>Escolaridade</th>
                        <th>Cidade</th>
                        <th>Vaga</th>
                        <th>Data de Candidatura</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($candidaturas as $candidatura) { ?>
                    <tr>
                        <td><?=$candidatura->id?></td>
                        <td><?=$candidatura->name?></td>
                        <td><?=$candidatura->empresa_name?></td>
                        <td><?=$candidatura->escolaridade?></td>
                        <td><?=$candidatura->cidade?></td>
                        <td>
                            <a href="/admin/vagas/form?id=<?=$candidatura->id?>" target="_blank" class='link-td'>
                                <i class="fa fa-external-link" aria-hidden="true"></i>
                                #<?=$candidatura->vaga_id?> - <?=$candidatura->vaga_name?>
                            </a>
                        </td>
                        <td><?=$candidatura->data_candidatura?></td>

                        <td class="td-acoes">
                            <button class="btn-visualizar" data-id="<?=$candidatura->id?>"  type="button"><i class="fa fa-eye" aria-hidden="true"></i>Visualizar</button>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
   </div>
</div>

<div class='gradient'>
</div>
<div class='visualizar-modal'>
    <div class='content'>
        <i class="fa fa-times close-modal-visualizar" aria-hidden="true"></i>
        <h2>Candidatura: (23)</h2>
        <div class='row'>
            <div class='group-form'>
                <label for="nome-modal">Nome:</label>
                <input type="text" disabled id='nome-modal' value="">
            </div>
            <div class='group-form'>
                <label for="email-modal">E-mail:</label>
                <input type="text" disabled id='email-modal' value="">
            </div>
        </div>
        <div class='row'>
            <div class='group-form'>
                <label for="escolaridade-modal">Escolaridade:</label>
                <input type="text" disabled id='escolaridade-modal' value="">
            </div>
            <div class='group-form'>
                <label for="cidade-modal">Cidade:</label>
                <input type="text" disabled id='cidade-modal' value="">
            </div>
        </div>
        <div class='row'>
            <div class='group-form'>
                <label for="data-candidatura-modal">Data da Candidatura:</label>
                <input type="text" disabled id='data-candidatura-modal' value="">
            </div>
            <div class='group-form'>
                <label for="vaga-modal">Vaga:</label>
                <input type="text" disabled id='vaga-modal' value="">
            </div>
        </div>
        <div class='row'>
            <div class='group-form-2' style='margin-bottom: 1em'>
                <label for="categorias-modal">Categorias da Vaga:</label>
                <input type="text" disabled id='categorias-modal' value="">
            </div>
        </div>
        <div class='row'>
            <div class='group-form-2'>
                <label for="descricao-modal">Descrição:</label>
                <textarea id="descricao-modal" disabled></textarea>
            </div>
        </div>

        <a href="/admin/candidaturas/download/" type='button' class='downloadPDF'>Baixar currículo</a>
    </div>
</div>
@endsection


<style>
    .link-candidaturas {
        border-bottom: 1px solid #173979;
        margin-bottom: 0.5em
    }
</style>