<?php

	require_once "./src/CountRepeats.php";

	Class CountRepeatsTest extends PHPUnit_Framework_TestCase
	{

		function test_ExactMatch_OneLetter()
		{
			//Arrange
			$exact_match_one_letter = new CountRepeats;
			$string_to_check = 'a';
			$word_to_count = 'a';

			//Act
			$result = $exact_match_one_letter->countRepeatsCounter($string_to_check, $word_to_count);

			//Assert
			$this->assertEquals(1, $result);

		}

		function test_ExactMatch_OneLetter_CaseInsensitive()
		{
			//Arrange
			$exact_match_one_letter_case_insensitive = new CountRepeats;
			$string_to_check = 'A';
			$word_to_count = 'a';

			//Act
			$result = $exact_match_one_letter_case_insensitive->countRepeatsCounter($string_to_check, $word_to_count);

			//Assert
			$this->assertEquals(1, $result);

		}

	}

?>