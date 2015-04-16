<?php
/**
 * Created by PhpStorm.
 * User: oner
 * Date: 13.4.2015
 * Time: 01:44
 */

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Repositories\Category\CategoryRepository;
use Laracasts\Flash\Flash;

class CategoryController extends Controller {

    protected $categoryRepository;

    public function __construct(CategoryRepository $categoryRepository) {

        $this->categoryRepository = $categoryRepository;

    }


    public function index () {

        return view('backend.category.index',$this->categoryRepository->all());

    }

    public function create () {

        return view('backend.category.create');

    }

    public function store (CategoryRequest $request) {

        $this->categoryRepository->store($request->all());

        Flash::success('Category was new Added Succesfully');

        return redirect()->route('admin.category.index');
        
    }

    public function edit ($id) {
        return view('backend.category.edit',$this->categoryRepository->edit($id));
    }


    public function update (CategoryRequest $request,$id) {

        $categoryId =$this->categoryRepository->find($id);
        $this->categoryRepository->update($request->all(),$id);
        Flash::success('Category was Updated Successfuly');
        return redirect()->route('admin.category.edit',$categoryId);
    }


    public function destroy ($id) {
        return $this->categoryRepository->destroy($id);
    }


}