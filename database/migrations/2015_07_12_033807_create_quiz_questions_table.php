<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuizQuestionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('quiz_questions', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('title');
			$table->string('description')->nullable()->default(null);
			$table->string('help')->nullable()->default(null);
			$table->string('attributes')->default('[]');
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
		Schema::drop('quiz_questions');
	}

}
