<?php

	namespace database\migrations;

	use Illuminate\Support\Facades\Schema;
	use Illuminate\Database\Schema\Blueprint;
	use Illuminate\Database\Migrations\Migration;

	class CreateCharactersTable extends Migration {
		/**
		 * Run the migrations.
		 *
		 * @return void
		 */
		public function up() {
			Schema::create('characters',
				function (Blueprint $table) {
					$table->bigIncrements('id');
					$table->integer('userId');
					$table->string('name');
					$table->boolean('isNPC');
					$table->integer('level');
					$table->bigInteger('exp');
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
			Schema::dropIfExists('characters');
		}
	}
