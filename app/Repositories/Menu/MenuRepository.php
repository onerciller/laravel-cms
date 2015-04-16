<?php
/**
 * Created by PhpStorm.
 * User: oner
 * Date: 14.4.2015
 * Time: 17:44
 */

namespace App\Repositories\Menu;

use App\Repositories\BaseRepository;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
class MenuRepository extends BaseRepository{

   public function __construct(Menu $menu) {
       $this->model = $menu;
   }
    
    public function all () {
        $menu = DB::table('menu')->orderBy('order','ASC')->get();
         return compact('menu');



    }
    
    private function savePost($post,$attributes){

        $post->title = $attributes['title'];
        $post->url = $attributes['url'];
        $post->save();
        return $post;
        
    }
    
    public function store ($attributes) {
        $menu = $this->model = new $this->model;
        $savemenu = $this->savePost($menu,$attributes);
        return $savemenu;
    }

    public function update ($attribute,$id) {
        $i = 1;
        foreach($attribute->get('set') as $v){

           $menu =$this->model->find($v);
            $menu->order = $i;
            $menu->save();
            $i++;
        }

    }

}