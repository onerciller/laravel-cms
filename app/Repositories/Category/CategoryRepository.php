<?php
/**
 * Created by PhpStorm.
 * User: oner
 * Date: 13.4.2015
 * Time: 01:52
 */

namespace App\Repositories\Category;

use Illuminate\Support\Str;
use App\Repositories\BaseRepository;

class CategoryRepository  extends BaseRepository{


    public function __construct(Category $category) {


        $this->model = $category;

    }

    public function all () {

       $category = $this->model->all();

        return compact('category');
    }

    private function savePost ($category,$attributes) {

        $category->title = $attributes['title'];
        $category->slug =  Str::slug($attributes['title']);
        $category->save();
        return $category;
    }


    public function store ($attributes) {
       $category =  $this->model = new $this->model;
        $store = $this->savePost($category,$attributes);

    }

    public function edit ($id) {

       $category = $this->model->findOrfail($id);

        return compact('category');

    }
    
    public function update ($attributes,$id) {

         $categoryId = $this->find($id);
         $this->savePost($categoryId,$attributes);
    
    }


}