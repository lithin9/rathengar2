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
				'CreateUsersTable', //TODO: add model for this
				'CreateCharactersTable', //TODO: add model for this
				'CreateAttributesTable', //TODO: add model for this
				'CreateSoulsTable', //TODO: add model for this
				'CreateRacesTable', //TODO: add model for this
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
				'CreateCalendarDetailTypesTable', //TODO: finish this - descriptor things like "season", "month", "holiday", "temperatures"
				'CreateCalendarDetailsTable', //TODO: finish this - descriptors for seasons (spring, summer, fall, winter), months (names of months)
				'CreateCalendarHistoriesTable', //TODO: finish this
				'CreateFactionsTable', //TODO: finish this
				'CreateFactionLanguagesTable', //TODO: finish this
				'CreateFactionRanksTable', //TODO: finish this
				'CreateGuildsTable', //TODO: finish this
				'CreateGuildLanguagesTable', //TODO: finish this
				'CreateGuildRanksTable', //TODO: finish this
				'CreateMapsTable', //TODO: finish this
				'CreateMapCoordinatesTable', //TODO: finish this
				'CreateLocationsTable', //TODO: finish this
				'CreateLocationMapCoordinatesTable', //TODO: finish this
				'CreateLocationDetailsTable', //TODO: finish this
				'CreateLocationDetailsTypesTable', //TODO: finish this
				'CreateLocationFactionsTable', //TODO: finish this
				'CreateBirthPlacesTable', //TODO: finish this
				'CreateBirthPlaceBackgroundsTable', //TODO: finish this
				'CreateLevelRoadmapsTable', //TODO: finish this
			];
			$migrationSkillTables = [
				'CreateSkillTypesTable', //TODO: add model for this
				'CreateSkillsTable', //TODO: add model for this
				'CreateSkillLearningCurvesTable', //TODO: add model for this
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
				'CreateCharacterSkillsTable', //TODO: add model for this
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
			$migrationQuestTables = [
				'CreateQuestTypesTable', //TODO: finish this
				'CreateQuestsTable', //TODO: finish this
				'CreateQuestPartTypesTable', //TODO: finish this
				'CreateQuestPartsTable', //TODO: finish this
				'CreateQuestRewardTypesTable', //TODO: finish this
				'CreateQuestRewardsTable', //TODO: finish this
				];
			$migrationNotesTables = [
				'CreateUserNotesTable', //TODO: finish this
				'CreateCharacterNotesTabl', //TODO: finish this
				'CreateAttributeNotesTable', //TODO: finish this
				'CreateSoulNotesTable', //TODO: finish this
				'CreateRaceNotesTable', //TODO: finish this
				'CreateStatusNotesTable', //TODO: finish this
				'CreatePerkNotesTable', //TODO: finish this
				'CreateItemNotesTable', //TODO: finish this
				'CreateStarSignNotesTable', //TODO: finish this
				'CreateAlignmentNotesTable', //TODO: finish this
				'CreatePersonalityNotesTable', //TODO: finish this
				'CreateLanguageNotesTable', //TODO: finish this
				'CreateBackgroundNotesTable', //TODO: finish this
				'CreateFactionNotesTable', //TODO: finish this
				'CreateFactionRankNotesTable', //TODO: finish this
				'CreateGuildNotesTable', //TODO: finish this
				'CreateGuildRankNotesTable', //TODO: finish this
				'CreateLocationMapCoordinateNotesTable', //TODO: finish this
				'CreateLocationDetailsTypNoteeTable', //TODO: finish this
				'CreateLocationDetailNotesTable', //TODO: finish this
				'CreateLocationNotesTable', //TODO: finish this
				'CreateMapCoordinateNotesTable', //TODO: finish this
				'CreateMapNotesTable', //TODO: finish this
				'CreateBirthPlaceNotesTable', //TODO: finish this
				'CreateBirthPlaceBackgroundNotesTable', //TODO: finish this
				'CreateSkillTypeNotesTable', //TODO: finish this
				'CreateSkillNotesTable', //TODO: finish this
				'CreateSkillLearningCurveNotesTable', //TODO: finish this
				'CreateCalendarNotesTable', //TODO: finish this
			];
			$migrationOrder = $migrationBaseOrder
												+ $migrationGameDataTables
												+ $migrationSkillTables
												+ $migrationPerksTables
												+ $migrationSpellElementTables
												+ $migrationAttributeTables
												+ $migrationCharacterTables
												+ $migrationNotesTables;
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
