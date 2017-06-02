<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPivotCommentPostTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('pivot_comment_post', function(Blueprint $table)
		{
			$table->foreign('comment_id', 'fk_pivot_comment_post_1')->references('id')->on('comments')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('post_id', 'fk_pivot_comment_post_2')->references('id')->on('posts')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('pivot_comment_post', function(Blueprint $table)
		{
			$table->dropForeign('fk_pivot_comment_post_1');
			$table->dropForeign('fk_pivot_comment_post_2');
		});
	}

}
