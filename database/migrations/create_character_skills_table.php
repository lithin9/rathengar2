<?php

	namespace database\migrations;

	use Illuminate\Support\Facades\Schema;
	use Illuminate\Database\Schema\Blueprint;
	use Illuminate\Database\Migrations\Migration;

	class CreateCharacterSkillsTable extends Migration {
		/**
		 * Run the migrations.
		 *
		 * @return void
		 */
		public function up() {
			Schema::create('characterSkills',
				function (Blueprint $table) {
					$table->bigIncrements("id");
					$table->bigInteger('characterId');
					$table->string('skillName');
					$table->string('proficiencyName');
					$table->string('description');
					$table->timestamps();
					$table->timestamp('deleted_at')
								->nullable();
					//foreignKey(s)
					$table->foreign('characterId')
								->references('id')
								->on('characters');
					$table->foreign('skillName')
								->references('name')
								->on('skills');
				});
		}

		/**
		 * Reverse the migrations.
		 *
		 * @return void
		 */
		public function down() {
			Schema::dropIfExists('characterSkills');
		}
	}
