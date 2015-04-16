<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePagesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('page', function(Blueprint $table)
		{

			$table->increments('id');
			$table->string('title');
			$table->text('post');
			$table->integer('user_id');
			$table->string('slug')->nullable();
			$table->integer('menu_id');
			$table->string('meta_keywords')->nullable();
			$table->text('meta_description')->nullable();
			$table->timestamps();
			$table->boolean('is_published')->default(true);
			$table->boolean('is_in_menu')->default(true);
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('page');
	}

}
