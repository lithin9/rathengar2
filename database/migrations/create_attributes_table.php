<?php

	namespace database\migrations;

	use Illuminate\Support\Facades\Schema;
	use Illuminate\Database\Schema\Blueprint;
	use Illuminate\Database\Migrations\Migration;

	class CreateAttributesTable extends Migration {
		/**
		 * Run the migrations.
		 *
		 * @return void
		 */
		public function up() {
			Schema::create('attributes',
				function (Blueprint $table) {
					$table->string('name');
					$table->primary('name');
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
			Schema::dropIfExists('attributes');
		}
	}
