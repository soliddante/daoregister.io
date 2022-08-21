<?php

namespace App\Providers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Config;
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
    public function boot()
    {
        Model::unguard();
        $GLOBAL_top_menu_links = [
            [
                'parent' => 'no',
                'name' => 'Discover',
                'route' => 'discover_dao',
            ],
            [
                'parent' => 'no',
                'name' => 'Generate Dao',
                'route' => 'create_dao',
            ],

            [
                'parent' => 'yes',
                'name' => 'Letters',
                'sub' => [
                    [
                        'name' => 'Create',
                        'route' => 'dao/letter.create',
                    ],
                    [
                        'name' => 'Receives',
                        'route' => 'dao/letter.receives',
                    ],
                    [
                        'name' => 'Sent',
                        'route' => 'dao/letter.sent',
                    ],
                  

                ]
            ],
            [
                'parent' => 'no',
                'name' => 'Products',
                'route' => 'dao/product.index',
            ],
            [
                'parent' => 'no',
                'name' => 'Accounting',
                'route' => 'dao/accounting.index',
            ],

            [
                'parent' => 'no',
                'name' => 'Terms and Conditions',
                'route' => 'terms',
            ],
            [
                'parent' => 'no',
                'name' => 'Contact',
                'route' => 'contact',
            ],
 
        ];
        Config::set('GLOBAL_top_menu_links', $GLOBAL_top_menu_links);
    }
}
