<?php
/**
 * Created by PhpStorm.
 * User: oner
 * Date: 15.4.2015
 * Time: 00:40
 */

namespace App\Repositories\Gallery;


use App\Repositories\BaseRepository;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Str;
class GalleryRepository extends BaseRepository{

    public function __construct(Gallery $gallery) {
        $this->model = $gallery;
    }




    public function all () {

        $gallery = $this->model->all();

        return compact('gallery');
    }

    private function savePost ($gallery,$attributes) {

        $gallery->title = $attributes['title'];
        $gallery->description = $attributes['description'];
        $gallery->save();

        /** @var TYPE_NAME $request */
        if($attributes->hasFile('gallery')){

            $profil =$attributes->file('gallery');
            $filename = $profil->getClientOriginalName();
            $extension = $profil->getClientOriginalExtension();
            $name = Str::slug($filename).Str::slug(str_random(5)).'.'.$extension;
            $file = $profil->move('backend/uploads/',$name);
            $image = Image::make('backend/uploads/'.$name)->save();
            $size = $image->filesize();
            $gallery->path = "<img src='backend/uploads/$name'>";
            $gallery->type = $extension;
            $gallery->file_name = $name;
            $gallery->file_size = $size;
            $gallery->save();

        }
        return $gallery;
    }


    /**
     * @param $attributes
     */
    public function store ($attributes) {
        $gallery =  $this->model = new $this->model;
        $store = $this->savePost($gallery,$attributes);

    }

    public function edit ($id) {

        $category = $this->model->findOrfail($id);

        return compact('category');

    }

//    public function update ($attributes,$id) {
//
//        $categoryId = $this->find($id);
//        $this->savePost($categoryId,$attributes);
//
//    }




}