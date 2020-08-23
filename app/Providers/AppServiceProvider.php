<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Contracts\Events\Dispatcher;
use JeroenNoten\LaravelAdminLte\Events\BuildingMenu;
use App\Lead;
use App\Article;

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
        $events->listen(BuildingMenu::class, function (BuildingMenu $event) {            
            $event->menu->add('ЗАЯВКИ');
            $event->menu->add(                
                [
                    'text' => 'Список заявок',
                    'url' => 'admin/leads',
                    'label' => Lead::all()->count(),
                ],
                [
                    'text' => 'Добавить заявку',
                    'url' => 'admin/leads/create',                    
                ]
            );
            $event->menu->add('СТАТЬИ');
            $event->menu->add(                
                [
                    'text' => 'Список статей',
                    'url' => 'admin/articles',
                    'label' => Article::all()->count(),
                ],
                [
                    'text' => 'Добавить статью',
                    'url' => 'admin/articles/create',                    
                ]
            );
            // $event->menu->add('ОТЗЫВЫ');
            // $event->menu->add(                
            //     [
            //         'text' => 'Список отзывов',
            //         'url' => 'admin/reviews',
            //         'label' => Review::all()->count(),
            //     ],
            //     [
            //         'text' => 'Добавить отзыв',
            //         'url' => 'admin/reviews/create',                    
            //     ]
            // );             
        });
    }
}
