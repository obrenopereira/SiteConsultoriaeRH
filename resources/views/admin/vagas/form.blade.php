@extends('layouts.admin')
@section('title', 'Vagas')

@section('content')
<div class="container">
    <p class="message-feedback" style='display:none'></p>
   <div class='box'>
        <div class="box-header">
            <h2 class="title"><?php echo @($vaga) ? $vaga->name : 'Nova Vaga'; ?></h2>
            <div class="buttons">
                <input type="hidden" class="url-reload" value="/admin/vagas/form?id=">
                <?php if($vaga) { ?>
                <form>
                    @csrf
                    <input type="hidden" name='id' class='id' value="<?=$vaga->id?>">
                    <input type="hidden" class="url-remove" value="/admin/vagas/remove">
                    <input type="hidden" class="url-reload" value="/admin/vagas/form?id=">
                    <a href="javascript:void(0)" class="remove-button btn-remover">
                        <i class="fa fa-trash" aria-hidden="true"></i>
                       Remover Vaga
                    </a>
                </form>
                <?php } ?>
                <a href="/admin/vagas/" class="">
                    <i class="fa fa-arrow-left" aria-hidden="true"></i>
                   Voltar para Listagem
                </a>
                <a href="javascript:void(0)" class="enviar">
                    <i class="fa fa-<?php echo @($vaga) ? 'floppy-o': 'plus' ?>" aria-hidden="true"></i>
                   <?php echo @($vaga) ? 'Salvar Edição' : 'Cadastrar Vaga'; ?>
                </a>
            </div>
        </div>
        <div class="box-body">
            <form class='form vagas-form'>
                @csrf
                <input type="hidden" id='id' value="<?php echo @($vaga) ? $vaga->id : '' ?>">
                <input type="hidden" class="url" value="/admin/vagas/sendform">

                <div class='row'>
                    <div class='form-group'>
                        <label for="titulo">Título:</label>
                        <input type="text" id='titulo' class='data-form' name='titulo' placeholder="Digite o nome da vaga" value="<?php echo @($vaga) ? $vaga->name : '';?>">
                    </div>
                    <div class='form-group'>
                        <label for="empresa">Empresa:</label>
                        <select name="empresa" class='data-form' id="empresa">
                            <?php foreach($empresas as $empresa) { ?>
                                <option value="<?=$empresa->id?>" <?php echo @($vaga && $vaga->id_empresa == $empresa->id)  ? 'selected' : '';?>><?=$empresa->name?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class='form-group'>
                        <label for="uf">Localização (UF):</label>
                        <input type="hidden" id='uf-value' value="<?php echo @($vaga) ? $vaga->uf  : ''?>">
                        <select name="uf" class='data-form' id="uf">
                            <option value="">Selecione uma UF</option>
                        </select>
                    </div>
                    <div class='form-group'>
                        <label for="cidade">Cidade:</label>
                        <input type="hidden" id='cidade-value' value="<?php echo @($vaga) ? $vaga->cidade  : ''?>">
                        <select name="cidade" class='data-form' id="cidade">
                            <option value="">Selecione uma cidade</option>
                        </select>
                    </div>
                   
                </div>
                <div class='row'>
                    <div class='form-group'>
                        <label for="status">Status:</label>
                        <select name="status" class='data-form' id="status">
                            <option value="Aberta" <?php echo @($vaga && $vaga->status == 'Aberta') ? 'selected' : '';?>>Aberta</option>
                            <option value="Rascunho" <?php echo @($vaga && $vaga->status == 'Rascunho') ? 'selected' : '';?>>Rascunho</option>
                            <option value="Preenchida" <?php echo @($vaga && $vaga->status == 'Preenchida') ? 'selected' : '';?>>Preenchida</option>
                            <option value="Cancelada" <?php echo @($vaga && $vaga->status == 'Cancelada') ? 'selected' : '';?>>Cancelada</option>
                        </select>
                    </div>
                    <div class='form-group'>
                        <label for="contrato">Modelo de Contrato:</label>
                        <input type="text"class='data-form'  id='contrato' name='contrato' placeholder="Efetivo CLT" value="<?php echo @($vaga) ? $vaga->contrato : '';?>">
                    </div>
                    <div class='form-group'>
                        <label for="contato">Contato:</label>
                        <input type="text" class='data-form' id='contato' name='contato' placeholder="contato@tsconsultoria.com" value="<?php echo @($vaga) ? $vaga->contato : '';?>">
                    </div>
                    <div class='form-group'>
                        <label for="remuneracao">Remuneração (R$):</label>
                        <input type="number" class='data-form' id='remuneracao' name='remuneracao' placeholder='1.500' value="<?php echo @($vaga) ? $vaga->remuneracao : '';?>">
                    </div>
                </div>
                <div class='row'>
                    <div class='form-group'>
                        <label for="categorias">Categorias:</label>
                        <select class="categorias-select data-form" id='categorias' name="categorias[]" multiple="multiple">
                            <?php foreach($categorias as $categoria) { ?>
                                <option value="<?=$categoria->id?>" <?php echo @($vaga && in_array($categoria->id, $vaga->id_categorias)) ? 'selected': '';?>><?=$categoria->name?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class='form-group'>
                        <label for="area">Área:</label>
                        <select class="areas-select data-form" id='area'  name="area">
                            <?php foreach($areas as $area) { ?>
                                <option value="<?=$area->id?>" <?php echo @($vaga && $vaga->id_area == $area->id) ? 'selected': '';?>><?=$area->name?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class='form-group'>
                        <label for="escolaridade">Escolaridade:</label>
                        <select name="escolaridade" class='data-form' id="escolaridade">
                            <?php foreach($escolaridades as $escolaridade) { ?>
                            <option value="<?=$escolaridade->id?>" <?php echo @($vaga && $escolaridade->id ==  $vaga->id_escolaridade) ? 'selected' : '';?>><?=$escolaridade->name?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class='form-group'>
                        <label for="experiencia">Experiência:</label>
                        <select name="experiencia" class='data-form' id="experiencia">
                            <?php foreach($experiencias as $experiencia) { ?>
                            <option value="<?=$experiencia->id?>" <?php echo @($vaga && $experiencia->id ==  $vaga->id_experiencia) ? 'selected' : '';?>><?=$experiencia->name?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <div class='row'>
                    <div class='form-group-2'>
                        <label for="breve_descricao">Breve Descrição:</label>
                        <textarea name="breve_descricao" class='data-form' id="breve_descricao" placeholder='Digite uma breve descrição'><?php echo @($vaga) ? $vaga->breve_descricao : '';?></textarea>
                    </div>
                </div>
                <div class='row'>
                    <div class='form-group-2'>
                        <label for="descricao">Descrição da Vaga:</label>
                        <textarea name="descricao-text" class='data-form' id="descricao-text"><?php echo @($vaga) ? $vaga->descricao : '';?></textarea>
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