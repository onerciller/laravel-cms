<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('post', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('title');
			$table->text('post');
			$table->integer('user_id');
			$table->string('slug')->nullable();
			$table->integer('category_id');
			$table->string('meta_keywords')->nullable();
			$table->text('meta_description')->nullable();
			$table->timestamps();
			$table->boolean('is_published')->default(true);
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('post');
	}

}
