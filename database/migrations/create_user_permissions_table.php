<?php

	use Illuminate\Support\Facades\Schema;
	use Illuminate\Database\Schema\Blueprint;
	use Illuminate\Database\Migrations\Migration;

	class CreateUserPermissionsTable extends Migration {
		/**
		 * Run the migrations.
		 *
		 * @return void
		 */
		public function up() {
			Schema::create('userPermissions',
				function (Blueprint $table) {
					$table->bigInteger('userId');
					$table->string('label');
					$table->boolean('permission');
				});
		}

		/**
		 * Reverse the migrations.
		 *
		 * @return void
		 */
		public function down() {

			Schema::dropIfExists('userPermissions');
		}
	}
