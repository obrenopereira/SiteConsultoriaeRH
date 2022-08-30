<?php

namespace App\Providers;
use App\Configuracoes;
use App\Cases;
use Illuminate\Http\Request;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(Request $request)
    {
        $configuracoes = new Configuracoes;
        $configuracoes = $configuracoes->getConfiguracoes();

        $casesCount = new Cases;
        $casesCount = $casesCount->getCasesCount();

        $policies = $request->cookie('policies-privacy');

        if(count($configuracoes)) {
            $configuracoes = $configuracoes[0];
        }else {
            $configuracoes = false;
        }
        
        view()->share(['policies' => $policies, 'configuracoes' => $configuracoes, 'casesCount' => $casesCount]);
    }
}
