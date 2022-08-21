<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToMylistTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('mylist', function(Blueprint $table)
		{
			$table->foreign('title_id', 'fk_mylist_title_id')->references('id')->on('titles')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('user_id', 'fk_mylist_user_id')->references('id')->on('users')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('mylist', function(Blueprint $table)
		{
			$table->dropForeign('fk_mylist_title_id');
			$table->dropForeign('fk_mylist_user_id');
		});
	}

}
