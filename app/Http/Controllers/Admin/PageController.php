<?php
/**
 * Created by PhpStorm.
 * User: oner
 * Date: 12.4.2015
 * Time: 20:02
 */

namespace App\Http\Controllers\Admin;


use App\Http\Requests\BlogRequest;
use App\Http\Requests\PageRequest;
use App\Repositories\Page\PageRepository;
use Illuminate\Routing\Controller;
use Laracasts\Flash\Flash;

class PageController extends Controller{

    protected $PageRepository;

    public function __construct(PageRepository $PageRepository) {

        $this->PageRepository = $PageRepository;
    }


    public function index () {

        return view('backend.page.index',$this->PageRepository->all());
    }

    public function create () {


     return view('backend.page.create');

    }


    public function store (PageRequest $request) {

        $post = $this->PageRepository->store($request->all());
        Flash::success('Post was new Added Succesfully');
        return redirect()->route('admin.page.index');
    }

    public function show () {

    }

    public function edit ($id) {
        $post = $this->PageRepository->edit($id);
        return view('backend.page.edit',$this->PageRepository->edit($id));
    }

    public function update (PageRequest $request,$id) {
        $postId = $this->BlogRepository->find($id);
        $this->PageRepository->update($request->all(),$id);
        Flash::success('Updated was Successfuly');
        return redirect()->route('admin.page.edit',$postId);

    }

    public function destroy ($id) {

        return $this->PageRepository->destroy($id);

    }


}