<?php

namespace Kaban\Core\Providers;

use App;
use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Support\ServiceProvider;
use Kaban\General\Helpers\Cryptor;
use Kaban\Models\Category;
use Kaban\Models\Location;
use Kaban\Models\Post;
use Session;

class KabanServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        require_once base_path() . '/kaban/Core/Helpers/GeneralHelper.php';

//        $coreViewsPath = kaban_path() . '/Core/Resources/Views';
//        if (file_exists($coreViewsPath)) {
//            $this->loadViewsFrom($coreViewsPath, 'KabanViews');
//            $publish[$coreViewsPath] = resource_path('views/vendor/' . 'KabanViews');
//        }

//        $templatesPath = kaban_path() . '/Templates';
//        if (file_exists($templatesPath)) {
//            $this->loadViewsFrom($templatesPath, 'KabanTemplates');
//            $publish[$templatesPath] = resource_path('views/vendor/' . 'KabanTemplates');
//        }
//
//        $widgetsPath = kaban_path() . '/Widgets';
//        if (file_exists($widgetsPath)) {
//            $this->loadViewsFrom($widgetsPath, 'KabanWidgets');
//        }
//
//        $formTypesPath = kaban_path() . '/General/FormTypes';
//        if (file_exists($formTypesPath)) {
//            $this->loadViewsFrom($formTypesPath, 'KabanForms');
//        }
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        App::bind('cryptor', function () {
            return new Cryptor();
        });
    }
}
