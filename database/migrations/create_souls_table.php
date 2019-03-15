<?php

	namespace database\migrations;

	use Illuminate\Support\Facades\Schema;
	use Illuminate\Database\Schema\Blueprint;
	use Illuminate\Database\Migrations\Migration;

	class CreateSoulsTable extends Migration {
		/**
		 * Run the migrations.
		 *
		 * @return void
		 */
		public function up() {
			Schema::create('souls',
				function (Blueprint $table) {
					$table->string('name');
					$table->primary('name');
					$table->string('description');
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
			Schema::dropIfExists('souls');
		}
	}
