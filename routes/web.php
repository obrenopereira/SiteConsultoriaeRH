<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register we b routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'site\HomepageController@index');
Route::get('/servicos', 'site\ServicosController@index');
Route::get('/cases', 'site\CasesController@index');
Route::get('/cases/detalhes/{id}', 'site\CasesController@case');
Route::get('/contato', 'site\ContatoController@index');
Route::post('/contato/send', 'site\ContatoController@sendEmail');
Route::get('/sobre', 'site\SobreController@index')->name('about');
Route::get('/vagas', 'site\VagasController@index')->name('vagas.index');
Route::post('/vagas/get', 'site\VagasController@getVagas')->name('vagas.get');
Route::get('/vagas/search', 'site\VagasController@search');
Route::get('/vagas/remove-filter', 'site\VagasController@removeFilter')->name('vagas.remove_filter');
Route::get('/vagas/detalhes/{id}', 'site\VagasController@detalhes')->name('vagas.show');
Route::post('/candidaturas/send', 'site\CandidaturasController@send');
Route::get('/politicas-privacidade', 'site\HomepageController@policies');
Route::post('/accept-policies', 'site\HomepageController@acceptPolicies')
    ->name('accept_policies');

Auth::routes();

Route::get('/admin', 'admin\VagasController@index');

// Vagas
Route::get('/admin/vagas', 'admin\VagasController@index')->name('admin.vagas');
Route::get('/admin/vagas/form', 'admin\VagasController@form')->name('vagas.form');
Route::post('/admin/vagas/sendform', 'admin\VagasController@save');
Route::post('/admin/vagas/remove', 'admin\VagasController@remove');


// Categorias

Route::get('/admin/categorias', 'admin\CategoriasController@index');
Route::get('/admin/categorias/form', 'admin\CategoriasController@form');
Route::post('/admin/categorias/sendform', 'admin\CategoriasController@save');
Route::post('/admin/categorias/remove', 'admin\CategoriasController@remove');


// Candidaturas

Route::get('/admin/candidaturas', 'admin\CandidaturasController@index');
Route::get('/admin/candidaturas/visualizar/{id}', 'admin\CandidaturasController@visualizar')->name('candidatura.visualizar');
Route::get('/admin/candidaturas/download/{id}', 'admin\CandidaturasController@download')->name('curriculo.download');


// Empresas
Route::get('/admin/empresas', 'admin\EmpresasController@index');
Route::get('/admin/empresas/form', 'admin\EmpresasController@form');
Route::post('/admin/empresas/sendform', 'admin\EmpresasController@save');
Route::post('/admin/empresas/remove', 'admin\EmpresasController@remove');

// Galeria
Route::get('/admin/galeria', 'admin\GaleriaController@index');
Route::get('/admin/galeria/form', 'admin\GaleriaController@form');
Route::post('/admin/galeria/sendform', 'admin\GaleriaController@save');
Route::post('/admin/galeria/remove', 'admin\GaleriaController@remove');

// Cases
Route::get('/admin/cases', 'admin\CasesController@index');
Route::get('/admin/cases/form', 'admin\CasesController@form');
Route::post('/admin/cases/sendform', 'admin\CasesController@save');
Route::post('/admin/cases/remove', 'admin\CasesController@remove');


// Clientes
Route::get('/admin/clientes', 'admin\ClientesController@index');
Route::get('/admin/clientes/form', 'admin\ClientesController@form');
Route::post('/admin/clientes/sendform', 'admin\ClientesController@save')->name('client.save');
Route::post('/admin/clientes/update', 'admin\ClientesController@update')->name('client.update');
Route::post('/admin/clientes/remove', 'admin\ClientesController@remove');

//Profissionais
Route::middleware(['auth'])->group(function () {
    Route::get('/admin/profissionais', 'admin\ProfessionalController@index')->name('admin.professionals.index');
    Route::delete('/admin/profissionais/{id}/delete', 'admin\ProfessionalController@destroy')->name('admin.professionals.destroy');
    Route::get('/admin/profissionais/novo', 'admin\ProfessionalController@create')->name('admin.professionals.create');
    Route::post('/admin/profissionais/cadastrar', 'admin\ProfessionalController@store')->name('admin.professionals.store');
});

// Skills
Route::post('/admin/skills/send', 'admin\CasesController@saveSkills');



// Configuracoes
Route::get('/admin/configuracoes', 'admin\ConfiguracoesController@index');
Route::post('/admin/configuracoes/sendform', 'admin\ConfiguracoesController@save');

