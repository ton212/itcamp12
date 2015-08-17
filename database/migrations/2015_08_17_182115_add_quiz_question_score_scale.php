<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddQuizQuestionScoreScale extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('quiz_questions', function(Blueprint $table)
		{
			$table->string('score_scale')->after('attributes');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('quiz_questions', function(Blueprint $table)
		{
			$table->dropColumn('score_scale');
		});
	}

}
