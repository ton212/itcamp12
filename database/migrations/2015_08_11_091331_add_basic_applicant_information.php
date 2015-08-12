<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddBasicApplicantInformation extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('applicants', function(Blueprint $table)
		{
			$table->string('prefix', 30)->after('id');
			$table->string('nickname', 20)->after('lastname');
			$table->smallInteger('gender')->after('nickname');
			$table->string('email', 30)->after('gender');
			$table->string('id_card', 13)->after('email');
			$table->timestamp('birthday')->after('id_card');
			$table->string('tel', 10)->after('birthday');
			$table->string('facebook', 60)->after('tel');
			$table->string('religion')->after('facebook');
			$table->smallInteger('class')->after('religion');
			$table->string('school')->after('class');
			$table->string('medical')->after('school');
			$table->string('parent')->after('medical');
			$table->smallInteger('pre_check')->default(0)->after('parent');
			$table->string('transcript')->after('pre_check');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('applicants', function(Blueprint $table)
		{
			$table->dropColumn(['prefix', 'nickname', 'gender', 'email', 'id_card', 'birthday', 'tel', 'facebook',
				'religion', 'class', 'school', 'medical', 'parent', 'pre_check', 'transcript']);
		});
	}

}
