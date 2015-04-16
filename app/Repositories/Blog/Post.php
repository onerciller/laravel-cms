<?php namespace App\Repositories\Blog;

use Illuminate\Database\Eloquent\Model;


class Post extends Model  {



	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'post';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['title','id', 'post', 'user_id','category_id','meta_keywords','meta_descriptions'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */

   public function user () {

	   return $this->belongsTo('App\Repositories\User\User');

   }

	  public function category () {

		return $this->belongsTo('App\Repositories\Category\Category','category_id','id');
	}

}
