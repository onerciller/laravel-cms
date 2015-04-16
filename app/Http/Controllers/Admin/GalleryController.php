<?php
/**
 * Created by PhpStorm.
 * User: oner
 * Date: 15.4.2015
 * Time: 00:38
 */

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Http\Requests\GalleryRequest;
use App\Repositories\Gallery\GalleryRepository;
use Laracasts\Flash\Flash;

class GalleryController extends Controller {

    protected $GalleryRepository;

    public function __construct(GalleryRepository $galleryRepository) {

        $this->GalleryRepository = $galleryRepository;
    }



    public function index () {
        return view('backend.gallery.index',$this->GalleryRepository->all());
    }
    
    public function create () {

        return view('backend.gallery.create');
    
    }
    
    public function store (GalleryRequest $request) {
        $this->GalleryRepository->store($request,$request->all());
        return redirect()->route('admin.gallery.index');
    }
    
    public function show () {
    
    }
    
    public function edit ($id) {

        return view('admin.gallery.edit',$this->GalleryRepository->edit($id));
    }
    
    
    public function update () {
    
    }
    
    public function destroy ($id)
    {

        $this->GalleryRepository->destroy($id);

        return redirect('/admin/gallery');
    }

}