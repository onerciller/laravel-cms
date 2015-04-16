<?php
/**
 * Created by PhpStorm.
 * User: oner
 * Date: 15.4.2015
 * Time: 18:05
 */

namespace App\Http\Controllers\Admin;


use App\Http\Requests\Auth\RegisterRequest;
use App\Repositories\User\UserRepository;
use Illuminate\Routing\Controller;

class UserController extends Controller {

    protected $UserRepository;
    public function __construct(UserRepository $UserRepository) {

        $this->UserRepository = $UserRepository;
    
    }

    
    
    public function index () {

        return view('backend.user.index',$this->UserRepository->all());
    
    }
    public function create () {

        return view('backend.user.create');
    }
    
    public function store (RegisterRequest $request) {

        $this->UserRepository->store($request,$request->all());

        return redirect()->route('admin.user.index');

    }
    

    public function edit ($id) {

        return view('backend.user.edit',$this->UserRepository->edit($id));
    
    }
    
    public function update (RegisterRequest $request,$id) {

        $this->UserRepository->update($request->all(),$id);

        return route('/admin/user/index');
    }

    public function destroy ($id) {

        $this->UserRepository->destroy($id);

    }


}