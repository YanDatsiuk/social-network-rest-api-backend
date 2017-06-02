<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPivotPostImageTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('pivot_post_image', function(Blueprint $table)
		{
			$table->foreign('post_id', 'fk_pivot_post_image_1')->references('id')->on('posts')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('image_id', 'fk_pivot_post_image_2')->references('id')->on('images')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('pivot_post_image', function(Blueprint $table)
		{
			$table->dropForeign('fk_pivot_post_image_1');
			$table->dropForeign('fk_pivot_post_image_2');
		});
	}

}
