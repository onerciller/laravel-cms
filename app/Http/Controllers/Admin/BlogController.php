<?php
/**
 * Created by PhpStorm.
 * User: oner
 * Date: 12.4.2015
 * Time: 20:02
 */

namespace App\Http\Controllers\Admin;


use App\Http\Requests\BlogRequest;
use App\Repositories\Blog\BlogRepository;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Laracasts\Flash\Flash;

class BlogController extends Controller{

    protected $BlogRepository;

    public function __construct(BlogRepository $BlogRepository) {

        $this->BlogRepository = $BlogRepository;
    }


    public function index () {

        return view('backend.blog.index',$this->BlogRepository->all());
    }

    public function create () {


     return view('backend.blog.create',$this->BlogRepository->blogCategory());

    }


    public function store (BlogRequest $request) {

        $post = $this->BlogRepository->store($request->all());
        Flash::success('Post was new Added Succesfully');
        return redirect()->route('admin.blog.index ');
    }

    public function show () {

    }

    public function edit ($id) {

        $post = $this->BlogRepository->edit($id);

        return view('backend.blog.edit',$this->BlogRepository->edit($id),$this->BlogRepository->blogCategory());
    }

    public function update (BlogRequest $request,$id) {
        $postId = $this->BlogRepository->find($id);
        $this->BlogRepository->update($request->all(),$id);
        Flash::success('Updated was Successfuly');
        return redirect()->route('admin.blog.edit',$postId);

    }

    public function destroy ($id) {

        return $this->BlogRepository->destroy($id);

    }



}