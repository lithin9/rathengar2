<?php

	use Illuminate\Database\Seeder;
	use Illuminate\Support\Facades\Storage;

	class DatabaseSeeder extends Seeder {
		/**
		 * Seed the application's database.
		 *"seeds": [
		 * "@php artisan db:seed --class=DatabaseSeeder"
		 * ]
		 * @return void
		 */
		public function run() {
			$files = Storage::disk('dataSeeds')
											->allFiles();
			foreach ($files as $file) {

			}
		}
	}
