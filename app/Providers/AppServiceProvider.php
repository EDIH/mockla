<?php

namespace App\Providers;

use App\Models\BlockTemplate;
use App\Models\BlockTemplateAttribute;
use App\Models\Variable;
use Illuminate\Events\Dispatcher;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use JeroenNoten\LaravelAdminLte\Events\BuildingMenu;

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
    public function boot(Dispatcher $events)
    {
// add non-approved comments counter to sidebar menu
//        dd(App::getLocale());
        $variables = Variable::all()
            ->groupBy('section');

        if (isset($variables['general'])) {
//            dd($variables['general']);
            $var = $variables['general']
                ->mapWithKeys(function ($var) {
                    return [$var->key => optional($var->translate)->value];
                });
        }

        if (isset($variables['contacts'])) {
            $contacts = $variables['contacts']
                ->mapWithKeys(function ($var) {
                    return [$var->key => optional($var->translate)->value];
                });
        }

        View::share([
            'templates' => BlockTemplate::all(),
            'input_types' => BlockTemplateAttribute::TYPE_LIST,
            'var' => $var ?? [],
            'contacts' => $contacts ?? []
        ]);
    }
}
