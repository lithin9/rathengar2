<?php

	namespace database\migrations;

	use Illuminate\Support\Facades\Schema;
	use Illuminate\Database\Schema\Blueprint;
	use Illuminate\Database\Migrations\Migration;

	class CreateSkillLearningCurvesTable extends Migration {
		/**
		 * Run the migrations.
		 *
		 * @return void
		 */
		public function up() {
			Schema::create('skillLearningCurves ',
				function (Blueprint $table) {
					$table->smallInteger('learningCurveLevel');
					$table->primary('learningCurveLevel');
					$table->string('label');
					$table->
					$table->timestamps();
					$table->timestamp('deleted_at')
								->nullable();
				});
		}

		/**
		 * Reverse the migrations.
		 *
		 * @return void
		 */
		public function down() {
			Schema::dropIfExists('skillLearningCurves ');
		}
	}
