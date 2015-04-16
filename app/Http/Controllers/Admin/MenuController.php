<?php
/**
 * Created by PhpStorm.
 * User: oner
 * Date: 14.4.2015
 * Time: 18:02
 */

namespace App\Http\Controllers\Admin;
use App\Http\Requests\MenuRequest;
use App\Repositories\Menu\Menu;
use App\Repositories\Menu\MenuRepository;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Input;
use Laracasts\Flash\Flash;

class MenuController extends Controller {

    protected $menuRepository;

    public function __construct(MenuRepository $menuRepository) {

        $this->menuRepository = $menuRepository;

    }

    public function index () {
        return view('backend.menu.index',$this->menuRepository->all());
    }
    
    public function create () {
        return view('backend.menu.create');
    }

    public function store (MenuRequest $request) {
        $this->menuRepository->store($request->all());
        Flash::success('menu was saved succesfuly');
        return redirect()->route('admin.menu.index');
    }

    public function update (Request $request,$id=0) {

        if($request->ajax())
        {
           $this->menuRepository->update($request,$id);
        }

    }

    public function destroy ($id) {

        return $this->menuRepository->destroy($id);
    }



}