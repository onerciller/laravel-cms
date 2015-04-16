<?php
/**
 * Created by PhpStorm.
 * User: oner
 * Date: 15.4.2015
 * Time: 00:40
 */

namespace App\Repositories\Gallery;


use Illuminate\Database\Eloquent\Model;

class Gallery extends Model {


    protected $table ="gallery";


    protected $fillable = array("file_name,title,description,path,file_size,type");


}