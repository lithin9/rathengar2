<?php
	/**
	 * Created by PhpStorm.
	 * User: Robert Van Loon
	 * Date: 3/12/2019
	 * Time: 12:04 PM
	 *
	 * "migrate": [
	 * "@php artisan migrate  --path=/database/allMigrations.php"
	 * ]
	 */
	$migrationOrder = [
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
		'CreateRaceAttributesTable', //TODO: finish this
		'CreateSoulAttributesTable', //TODO: finish this
		'CreateSKillAttributesTable', //TODO: finish this
		'CreateSkillLearningCurvesTable',
		'CreateCharacterSkillsTable',
		''];
	foreach ($migrationOrder as $migration) {
		try {
			if(class_exists(database\migrations\$migration)) {
				$migrate = new database\migrations\$migration();
				$migrate->up();
			} else {
				throw new Exception("Migration does not exist.");
			}
		} catch(Exception $e) {
			\Illuminate\Support\Facades\Log::error("Failed to finish migration: " . $migration . ". For reason: " . $e->getMessage());
		}
	}