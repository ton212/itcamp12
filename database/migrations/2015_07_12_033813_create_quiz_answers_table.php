<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuizAnswersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('quiz_answers', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('applicant_id')->unsigned();
			$table->foreign('applicant_id')->references('id')->on('applicants')->onDelete('cascade');
			$table->integer('quiz_question_id')->unsigned();
			$table->foreign('quiz_question_id')->references('id')->on('quiz_questions')->onDelete('restrict');
			$table->text('answer');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('quiz_answers');
	}

}
