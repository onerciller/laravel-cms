<?php
/**
 * Created by PhpStorm.
 * User: oner
 * Date: 15.4.2015
 * Time: 17:55
 */

namespace App\Repositories\User;

use Illuminate\Support\Facades\Hash;
use Intervention\Image\Image;
use App\Repositories\BaseRepository;
use Illuminate\Support\Str;
use App\Repositories\User\User;
use Illuminate\Support\Facades\Auth;
class UserRepository extends BaseRepository {

    public function __construct(User $user) {

        $this->model = $user;

    }
    
 
    public function all () {

        $user = $this->model->all();

        return compact('user');

    }

    
    public function savePost ($user,$attributes) {
        $user->profil = $attributes['profil'] ? $attributes['profl'] : "";
        $user->username = $attributes['username'];
        $user->email =  $attributes['email'];
        $user->password= Hash::make($attributes['password']);
        $user->is_role = $attributes['is_role'];
        $user->is_active = $attributes['is_active'];
        $user->save();

        if($attributes->hasFile('profil')){
            $profil =$attributes->file('profil');
            $filename = $profil->getClientOriginalName();
            $extension = $profil->getClientOriginalExtension();
            $name = Str::slug($filename).Str::slug(str_random(5)).'.'.$extension;
            $file = $profil->move('backend/avatar/',$name);
            $image = Image::make('backend/avatar/'.$name)->save();
            $size = $image->filesize();
            $user->path = "<img src='backend/avatar/$name'>";
            $user->type = $extension;
            $user->file_name = $name;
            $user->file_size = $size;
            $user->save();
        }

        return $user;


    }
    

    
    
    public function store ($attributes) {

        $user = $this->model = new $this->model;

        $user = $this->savePost($user,$attributes);
    
    }
    
    public function edit ($id) {

       $user = $this->model->findOrfail($id);

        return compact('user');
    }
    
    
    public function update ($attributes,$id) {

        $user = $this->edit($id);

        $user = $this->savePost($attributes,$user);


    }

}