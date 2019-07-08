<?php

	namespace App\Console\Commands;

	use Exception;
	use Illuminate\Console\Command;
	use Illuminate\Support\Facades\Log;

	class createDatabase extends Command {
		/**
		 * The name and signature of the console command.
		 *
		 * @var string
		 */
		protected $signature = 'command:createDatabase';

		/**
		 * The console command description.
		 *
		 * @var string
		 */
		protected $description = 'Runs the Migrations';

		/**
		 * Create a new command instance.
		 *
		 * @return void
		 */
		public function __construct() {
			parent::__construct();
		}

		/**
		 * Execute the console command.
		 *
		 * @return mixed
		 */
		public function handle() {
			$migrationBaseOrder = [
				'CreateUsersTable',
				'CreateCharactersTable',
				'CreateAttributesTable',
				'CreateSoulsTable',
				'CreateElementCategoriesTable', //TODO: finish this
				'CreateElementGodsTable', //TODO: finish this
				'CreateElementsTable', //TODO: finish this
				'CreateRacesTable',
				'CreateSkillTypesTable',
				'CreateSkillsTable',
				'CreateSpellPartsTable', //TODO: finish this
				'CreateSpellEffectsTable', //TODO: finish this
				'CreateElementsTable', //TODO: finish this
				'CreateSkillLearningCurvesTable',
				'CreateCharacterSkillsTable',];
			$migrationAttributeTables = [
				'CreateRaceAttributesTable', //TODO: finish this
				'CreateSoulAttributesTable', //TODO: finish this
				'CreateSKillAttributesTable', //TODO: finish this
				'CreateCharacterAttributesTable', //TODO: finish this
			];
			$migrationOrder           = $migrationBaseOrder + $migrationAttributeTables;
			foreach ($migrationOrder as $migration) {
				try {
					$mString = "database\\migrations\\$migration";
					if(class_exists($mString)) {
						$migrate = new $mString();
						$migrate->up();
					} else {
						throw new Exception("Migration does not exist.");
					}
				} catch(Exception $e) {\
					Log::error("Failed to finish migration: " . $migration . ". For reason: " . $e->getMessage());
				}
			}
			return true;
		}
	}
