<?php
/**
 * Created by PhpStorm.
 * User: oner
 * Date: 16.4.2015
 * Time: 22:28
 */

namespace App\Http\Controllers;


use App\Repositories\Menu\MenuRepository;
use Illuminate\Routing\Controller;

class MenuController extends Controller {

    protected $menuRepository;

    public function __construct(MenuRepository $menuRepository) {

        $this->menuRepository = $menuRepository;

    }

    public function index () {
     return $this->menuRepository->all();

    }




}