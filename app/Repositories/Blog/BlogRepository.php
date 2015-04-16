<?php
/**
 * Created by PhpStorm.
 * User: oner
 * Date: 12.4.2015
 * Time: 20:55
 */

namespace App\Repositories\Blog;

use App\Repositories\BaseRepository;
use App\Repositories\Blog\Post;
use App\Repositories\Category\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
class BlogRepository extends BaseRepository{

    protected $category;
    
        public function __construct(Post $post, Category $category ) {

             $this->model = $post;
            $this->category = $category;
        }

       public function all () {

          $post = $this->model->all();

          return compact('post');
       }

    
       public function blogCategory () {

          $category = $this->category->all();
          return compact('category');
      }
    
       private function savePost ($post,$attritubes) {

           $post->title = $attritubes['title'];
           $post->slug = Str::slug($attritubes['title']);
           $post->post = $attritubes['post'];
           $post->category_id = $attritubes['category'];
           $post->user_id = Auth::user()->id;
           $post->is_published = true;
           $post->save();
           return $post;
       }



           public function store ($attritubes) {

                $post =  $this->model = new $this->model;
                $post = $this->savePost($post,$attritubes);

           }




        public function update ($attributes,$id) {

            $post = $this->find($id);
            $post = $this->savePost($post,$attributes);


        }

         public function edit ($id) {
             $post =  $this->model->findOrFail($id);
             $category = $this->blogCategory();
             return compact('post');
         }








}