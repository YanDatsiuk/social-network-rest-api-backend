<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePivotPostImageTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pivot_post_image', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('image_id')->unsigned()->nullable()->index('index2');
			$table->integer('post_id')->unsigned()->nullable()->index('index3');
			$table->unique(['image_id','post_id'], 'index4');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('pivot_post_image');
	}

}
