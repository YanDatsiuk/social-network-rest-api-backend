<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPivotPostWallTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('pivot_post_wall', function(Blueprint $table)
		{
			$table->foreign('post_id', 'fk_pivot_post_wall_1')->references('id')->on('posts')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('wall_id', 'fk_pivot_post_wall_2')->references('id')->on('walls')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('pivot_post_wall', function(Blueprint $table)
		{
			$table->dropForeign('fk_pivot_post_wall_1');
			$table->dropForeign('fk_pivot_post_wall_2');
		});
	}

}
