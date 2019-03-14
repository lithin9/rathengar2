<?php

	namespace database\migrations;

	use Illuminate\Support\Facades\Schema;
	use Illuminate\Database\Schema\Blueprint;
	use Illuminate\Database\Migrations\Migration;

	class CreateSkillsTable extends Migration {
		/**
		 * Run the migrations.
		 *
		 * @return void
		 */
		public function up() {
			Schema::create('skills',
				function (Blueprint $table) {
					$table->string('name');
					$table->primary('name');
					$table->string('skillTypeName');
					$table->string('description');
					$table->timestamps();
					$table->timestamp('deleted_at')
								->nullable();
					//foreignKey(s)
					$table->foreign('skillTypeName')
								->references('name')
								->on('skillTypes');
				});
		}

		/**
		 * Reverse the migrations.
		 *
		 * @return void
		 */
		public function down() {
			Schema::dropIfExists('skills');
		}
	}
