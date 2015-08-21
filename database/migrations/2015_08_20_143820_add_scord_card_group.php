<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddScordCardGroup extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('quiz_score_cards', function(Blueprint $table)
		{
			$table->smallInteger('judger_group');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('quiz_score_cards', function(Blueprint $table)
		{
			$table->dropColumn('judger_group');
		});
	}

}
