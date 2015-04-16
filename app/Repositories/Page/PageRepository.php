<?php
/**
 * Created by PhpStorm.
 * User: oner
 * Date: 12.4.2015
 * Time: 20:55
 */

namespace App\Repositories\Page;

use App\Repositories\BaseRepository;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Repositories\Page\Page;
class PageRepository extends BaseRepository{

    protected $category;
    
        public function __construct(Page $post ) {

             $this->model = $post;
        }

       public function all () {
          $post = $this->model->all();
          return compact('post');
       }


    
       private function savePost ($post,$attritubes) {

           $post->title = $attritubes['title'];
           $post->slug = Str::slug($attritubes['title']);
           $post->post = $attritubes['post'];
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
    
    
    public function show ($slug) {

        $page = $this->model->where('slug','=',$slug)->first();

        return compact('page');
    }

         public function edit ($id) {
             $post =  $this->model->findOrFail($id);
             return compact('post');
         }








}