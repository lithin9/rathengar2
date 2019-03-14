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
		'CreateSkillTypesTable',
		'CreateSkillsTable',
		'',
		'CreateCharacterSkillsTable',
		'CreateRacesTable'];
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