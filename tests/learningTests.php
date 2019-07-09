<?php
	$learningTiers  = [
		'Newbie'     => 0,
		'Novice'     => 0,
		'Beginner'   => 0,
		'Journeyman' => 0,
		'Proficient' => 0,
		'Expert'     => 0,
		'Master'     => 0];
	$skillTiers     = [
		'Newbie',
		'Novice',
		'Beginner',
		'Journeyman',
		'Proficient',
		'Expert',
		'Master'];
	$challengeTiers = [
		'Newbie'     => [
			'min'       => 0,
			'max'       => 5,
			'increment' => 1],
		'Novice'     => [
			'min'       => 6,
			'max'       => 20,
			'increment' => 0.75],
		'Beginner'   => [
			'min'       => 21,
			'max'       => 40,
			'increment' => 0.5],
		'Journeyman' => [
			'min'       => 41,
			'max'       => 60,
			'increment' => 0.25],
		'Proficient' => [
			'min'       => 61,
			'max'       => 80,
			'increment' => 0.1],
		'Expert'     => [
			'min'       => 81,
			'max'       => 98,
			'increment' => 0.05],
		'Master'     => [
			'min'       => 99,
			'max'       => 99,
			'increment' => 0.01]];
	$characters     = [
		[
			'int'                        => 100,
			'currentSkillTier'           => 0,
			'skillLevel'                 => 0,
			'failedSkillRolls'           => 0,
			'successfulSkillRolls'       => 0,
			'failedLearningAttempts'     => $learningTiers,
			'successfulLearningAttempts' => $learningTiers,
			'totalRolls'                 => $learningTiers],
		[
			'int'                        => 95,
			'currentSkillTier'           => 0,
			'skillLevel'                 => 0,
			'failedSkillRolls'           => 0,
			'successfulSkillRolls'       => 0,
			'failedLearningAttempts'     => $learningTiers,
			'successfulLearningAttempts' => $learningTiers,
			'totalRolls'                 => $learningTiers],
		[
			'int'                        => 90,
			'currentSkillTier'           => 0,
			'skillLevel'                 => 0,
			'failedSkillRolls'           => 0,
			'successfulSkillRolls'       => 0,
			'failedLearningAttempts'     => $learningTiers,
			'successfulLearningAttempts' => $learningTiers,
			'totalRolls'                 => $learningTiers],
		[
			'int'                        => 85,
			'currentSkillTier'           => 0,
			'skillLevel'                 => 0,
			'failedSkillRolls'           => 0,
			'successfulSkillRolls'       => 0,
			'failedLearningAttempts'     => $learningTiers,
			'successfulLearningAttempts' => $learningTiers,
			'totalRolls'                 => $learningTiers],
		[
			'int'                        => 80,
			'currentSkillTier'           => 0,
			'skillLevel'                 => 0,
			'failedSkillRolls'           => 0,
			'successfulSkillRolls'       => 0,
			'failedLearningAttempts'     => $learningTiers,
			'successfulLearningAttempts' => $learningTiers,
			'totalRolls'                 => $learningTiers],
		[
			'int'                        => 75,
			'currentSkillTier'           => 0,
			'skillLevel'                 => 0,
			'failedSkillRolls'           => 0,
			'successfulSkillRolls'       => 0,
			'failedLearningAttempts'     => $learningTiers,
			'successfulLearningAttempts' => $learningTiers,
			'totalRolls'                 => $learningTiers],
		[
			'int'                        => 70,
			'currentSkillTier'           => 0,
			'skillLevel'                 => 0,
			'failedSkillRolls'           => 0,
			'successfulSkillRolls'       => 0,
			'failedLearningAttempts'     => $learningTiers,
			'successfulLearningAttempts' => $learningTiers,
			'totalRolls'                 => $learningTiers],
		[
			'int'                        => 65,
			'currentSkillTier'           => 0,
			'skillLevel'                 => 0,
			'failedSkillRolls'           => 0,
			'successfulSkillRolls'       => 0,
			'failedLearningAttempts'     => $learningTiers,
			'successfulLearningAttempts' => $learningTiers,
			'totalRolls'                 => $learningTiers],
		[
			'int'                        => 60,
			'currentSkillTier'           => 0,
			'skillLevel'                 => 0,
			'failedSkillRolls'           => 0,
			'successfulSkillRolls'       => 0,
			'failedLearningAttempts'     => $learningTiers,
			'successfulLearningAttempts' => $learningTiers,
			'totalRolls'                 => $learningTiers],
		[
			'int'                        => 55,
			'currentSkillTier'           => 0,
			'skillLevel'                 => 0,
			'failedSkillRolls'           => 0,
			'successfulSkillRolls'       => 0,
			'failedLearningAttempts'     => $learningTiers,
			'successfulLearningAttempts' => $learningTiers,
			'totalRolls'                 => $learningTiers],
		[
			'int'                        => 50,
			'currentSkillTier'           => 0,
			'skillLevel'                 => 0,
			'failedSkillRolls'           => 0,
			'successfulSkillRolls'       => 0,
			'failedLearningAttempts'     => $learningTiers,
			'successfulLearningAttempts' => $learningTiers,
			'totalRolls'                 => $learningTiers],
		[
			'int'                        => 45,
			'currentSkillTier'           => 0,
			'skillLevel'                 => 0,
			'failedSkillRolls'           => 0,
			'successfulSkillRolls'       => 0,
			'failedLearningAttempts'     => $learningTiers,
			'successfulLearningAttempts' => $learningTiers,
			'totalRolls'                 => $learningTiers],
		[
			'int'                        => 40,
			'currentSkillTier'           => 0,
			'skillLevel'                 => 0,
			'failedSkillRolls'           => 0,
			'successfulSkillRolls'       => 0,
			'failedLearningAttempts'     => $learningTiers,
			'successfulLearningAttempts' => $learningTiers,
			'totalRolls'                 => $learningTiers],
		[
			'int'                        => 35,
			'currentSkillTier'           => 0,
			'skillLevel'                 => 0,
			'failedSkillRolls'           => 0,
			'successfulSkillRolls'       => 0,
			'failedLearningAttempts'     => $learningTiers,
			'successfulLearningAttempts' => $learningTiers,
			'totalRolls'                 => $learningTiers],
		[
			'int'                        => 30,
			'currentSkillTier'           => 0,
			'skillLevel'                 => 0,
			'failedSkillRolls'           => 0,
			'successfulSkillRolls'       => 0,
			'failedLearningAttempts'     => $learningTiers,
			'successfulLearningAttempts' => $learningTiers,
			'totalRolls'                 => $learningTiers],
		[
			'int'                        => 25,
			'currentSkillTier'           => 0,
			'skillLevel'                 => 0,
			'failedSkillRolls'           => 0,
			'successfulSkillRolls'       => 0,
			'failedLearningAttempts'     => $learningTiers,
			'successfulLearningAttempts' => $learningTiers,
			'totalRolls'                 => $learningTiers],
		[
			'int'                        => 20,
			'currentSkillTier'           => 0,
			'skillLevel'                 => 0,
			'failedSkillRolls'           => 0,
			'successfulSkillRolls'       => 0,
			'failedLearningAttempts'     => $learningTiers,
			'successfulLearningAttempts' => $learningTiers,
			'totalRolls'                 => $learningTiers],
		[
			'int'                        => 15,
			'currentSkillTier'           => 0,
			'skillLevel'                 => 0,
			'failedSkillRolls'           => 0,
			'successfulSkillRolls'       => 0,
			'failedLearningAttempts'     => $learningTiers,
			'successfulLearningAttempts' => $learningTiers,
			'totalRolls'                 => $learningTiers],
		[
			'int'                        => 10,
			'currentSkillTier'           => 0,
			'skillLevel'                 => 0,
			'failedSkillRolls'           => 0,
			'successfulSkillRolls'       => 0,
			'failedLearningAttempts'     => $learningTiers,
			'successfulLearningAttempts' => $learningTiers,
			'totalRolls'                 => $learningTiers],
		[
			'int'                        => 5,
			'currentSkillTier'           => 0,
			'skillLevel'                 => 0,
			'failedSkillRolls'           => 0,
			'successfulSkillRolls'       => 0,
			'failedLearningAttempts'     => $learningTiers,
			'successfulLearningAttempts' => $learningTiers,
			'totalRolls'                 => $learningTiers],
		[
			'int'                        => 0,
			'currentSkillTier'           => 0,
			'skillLevel'                 => 0,
			'failedSkillRolls'           => 0,
			'successfulSkillRolls'       => 0,
			'failedLearningAttempts'     => $learningTiers,
			'successfulLearningAttempts' => $learningTiers,
			'totalRolls'                 => $learningTiers]];
	foreach ($characters as $key => $character) {
		while (true) {
			if(floor($characters[$key]['skillLevel']) > $challengeTiers[$skillTiers[$characters[$key]['currentSkillTier']]]['max']) {
				$characters[$key]['currentSkillTier']++;
			}
			if($characters[$key]['currentSkillTier'] == sizeof($challengeTiers)) {
				break;
			}
			$skillRoll = roll() + (($characters[$key]['skillLevel'] - 10) / 3);
			$intMod = ($characters[$key]['int'] - 10) / 3;
			$skillDifficulty = $characters[$key]['skillLevel'] / 5;
			$skillRollCalculation = $skillRoll - $skillDifficulty + $intMod;
			//$skillRollCalculation = ($characters[$key]['int'] * (( $skillRoll + 20 - ($characters[$key]['skillLevel'] / 5)) / 100));
			//var_dump($skillRollCalculation);
			if($skillRollCalculation >= floor($characters[$key]['skillLevel'])) {
				$characters[$key]['skillLevel'] += $challengeTiers[$skillTiers[$characters[$key]['currentSkillTier']]]['increment'];
				$characters[$key]['successfulLearningAttempts'][$skillTiers[$characters[$key]['currentSkillTier']]]++;
				$characters[$key]['successfulSkillRolls']++;
				echo "succeed " . $characters[$key]['skillLevel'];
			} else {
				$characters[$key]['failedLearningAttempts'][$skillTiers[$characters[$key]['currentSkillTier']]]++;
				$characters[$key]['failedSkillRolls']++;
				echo "fail " . $characters[$key]['skillLevel'];
			}
			$characters[$key]['totalRolls'][$skillTiers[$characters[$key]['currentSkillTier']]]++;
		}
	}
	$json = json_encode($characters);
	$file = fopen('tests/results.txt', "w") or die("Unable to open file!");
	fwrite($file, $json);
	fclose($file);

	echo "done";
	function roll() {
		return mt_rand(0, 100);
	}