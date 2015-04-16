<?php
/**
 * Created by PhpStorm.
 * User: oner
 * Date: 13.4.2015
 * Time: 01:51
 */

namespace App\Repositories\Category;


use Illuminate\Database\Eloquent\Model;

class Category extends Model {


    protected $table ="category";


    protected $fillable = array('title','slug','id');


}