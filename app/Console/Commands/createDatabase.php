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
				'CreateRacesTable',
				'CreateStatusesTable', //TODO: finish this
				'CreateStatusEffectsTable', //TODO: finish this
				'CreatePerksTable', //TODO: finish this
				'CreateItemsTable', //TODO: finish this
				'CreateStarSignsTable', //TODO: finish this
				'CreateAlignmentsTable', //TODO: finish this
				'CreatePersonalitiesTable', //TODO: finish this
				'CreateLanguagesTable', //TODO: finish this
				'CreateBackgroundsTable', //TODO: finish this
				];
			$migrationGameDataTables = [
				'CreateGameDataTable', //TODO: finish this
				'CreateCalendarsTable', //TODO: finish this
				'CreateCalendarDetailsTable', //TODO: finish this
				'CreateCalendarDetailTypesTable', //TODO: finish this
				'CreateFactionsTable', //TODO: finish this
				'CreateFactionLanguagesTable', //TODO: finish this
				'CreateFactionRanksTable', //TODO: finish this
				'CreateGuildsTable', //TODO: finish this
				'CreateGuildLanguagesTable', //TODO: finish this
				'CreateGuildRanksTable', //TODO: finish this
				'CreateLocationMapCoordinatesTable', //TODO: finish this
				'CreateLocationDetailsTypeTable', //TODO: finish this
				'CreateLocationDetailsTable', //TODO: finish this
				'CreateLocationFactionsTable', //TODO: finish this
				'CreateLocationsTable', //TODO: finish this
				'CreateMapCoordinatesTable', //TODO: finish this
				'CreateMapsTable', //TODO: finish this
				'CreateBirthPlacesTable', //TODO: finish this
				'CreateBirthPlaceBackgroundsTable', //TODO: finish this
				'CreateLevelRoadmapsTable', //TODO: finish this
			];
			$migrationSkillTables = [
				'CreateSkillTypesTable',
				'CreateSkillsTable',
				'CreateSkillLearningCurvesTable',
				'CreateBirthPlaceSkillsTable', //TODO: finish this
				'CreateStatusSkillsTable', //TODO: finish this
				'CreateBackgroundSkillsTable', //TODO: finish this
				];
			$migrationPerksTables = [
				'CreateBirthPlacePerksTable', //TODO: finish this
				'CreateStarSignPerksTable', //TODO: finish this
				'CreateSkillPerksTable', //TODO: finish this
				'CreateBackgroundPerksTable', //TODO: finish this
				'CreateAlignmentPerksTable', //TODO: finish this
				'CreateRacePerksTable', //TODO: finish this
			];
			$migrationSpellElementTables = [
				'CreateMagicCategoriesTable', //TODO: finish this
				'CreateElementsTable', //TODO: finish this
				'CreateElementGodsTable', //TODO: finish this
				'CreateSpellPartsTable', //TODO: finish this
				'CreateSpellEffectsTable', //TODO: finish this
				'CreateSpellEffectStatusesTable', //TODO: finish this
				'CreateStatusElementsTable', //TODO: finish this
				];
			$migrationAttributeTables = [
				'CreateRaceAttributesTable', //TODO: finish this
				'CreateSoulAttributesTable', //TODO: finish this
				'CreateElementAttributesTable', //TODO: finish this
				'CreateStatusEffectsAttributesTable', //TODO: finish this
				'CreatePerkAttributesTable', //TODO: finish this
				'CreateSkillAttributesTable', //TODO: finish this
				'CreateItemAttributesTable', //TODO: finish this
				'CreateBackgroundAttributesTable', //TODO: finish this
				'CreateBirthPlaceAttributesTable', //TODO: finish this
				'CreateStarSignAttributesTable', //TODO: finish this
			];
			$migrationCharacterTables = [
				'CreateCharacterAttributesTable', //TODO: finish this
				'CreateCharacterSkillsTable',
				'CreateCharacterSpellsTable', //TODO: finish this
				'CreateCharacterSpellPartsTable', //TODO: finish this
				'CreateCharacterStatusesTable', //TODO: finish this
				'CreateCharacterSkillProgressesTable', //TODO: finish this
				'CreateCharacterMapCoordinatesTable', //TODO: finish this
				'CreateCharacterPerksTable', //TODO: finish this
				'CreateCharacterBirthPlacesTable', //TODO: finish this
				'CreateCharacterAlignmentsTable', //TODO: finish this
				'CreateCharacterPersonalitiesTable', //TODO: finish this
				'CreateCharacterInventoryTable', //TODO: finish this
				'CreateCharacterFactionsTable', //TODO: finish this
				'CreateCharacterElementsTable', //TODO: finish this
				'CreateCharacterLanguagesTable', //TODO: finish this
				'CreateCharacterStarSignsTable', //TODO: finish this
			];
			$migrationOrder = $migrationBaseOrder
												+ $migrationGameDataTables
												+ $migrationSkillTables
												+ $migrationPerksTables
												+ $migrationSpellElementTables
												+ $migrationAttributeTables
												+ $migrationCharacterTables;
			foreach ($migrationOrder as $migration) {
				try {
					$mString = "database\\migrations\\$migration";
					if(class_exists($mString)) {
						$migrate = new $mString();
						$migrate->up();
					} else {
						throw new Exception("Migration does not exist.");
					}
				} catch(Exception $e) {
					Log::error("Failed to finish migration: " . $migration . ". For reason: " . $e->getMessage());
				}
			}
			return true;
		}
	}
