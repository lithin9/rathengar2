<?php

	use Illuminate\Support\Facades\Log;

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
		'CreateCharacterSkillsTable',
		''];
	$migrationAttributeTables = [
		'CreateRaceAttributesTable', //TODO: finish this
		'CreateSoulAttributesTable', //TODO: finish this
		'CreateSKillAttributesTable', //TODO: finish this
		'CreateCharacterAttributesTable', //TODO: finish this
	];
	$migrationOrder           = $migrationBaseOrder + $migrationAttributeTables;
	foreach ($migrationOrder as $migration) {
		try {
			$mString = "\\database\\migrations\\$migration";
			var_dump(class_exists("\\database\\migrations\\CreateUsersTable"));
			if(class_exists($mString)) {
				$migrate = new $mString();
				//$migrate->up();
			} else {
				throw new Exception("Migration does not exist.");
			}
		} catch(Exception $e) {
			echo $e->getMessage();
			//Log::error("Failed to finish migration: " . $migration . ". For reason: " . $e->getMessage());
		}
	}