<?php
/**
 * Created by PhpStorm.
 * User: oner
 * Date: 16.4.2015
 * Time: 22:48
 */
namespace App\Http\Composers;


use App\Repositories\Menu\MenuRepository;
use Illuminate\Contracts\View\View;

class MenuComposer {

    /**
     * The user repository implementation.
     *
     * @var UserRepository
     */
    protected $menu;

    /**
     * Create a new profile composer.
     *
     * @param  UserRepository  $users
     * @return void
     */
    public function __construct(MenuRepository $menu)
    {
        // Dependencies automatically resolved by service container...
        $this->menu = $menu;
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('menu', $this->menu->all());

    }

}