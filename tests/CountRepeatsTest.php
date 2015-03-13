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

		function test_WordNotFound()
		{
			//Arrange
			$word_not_found = new CountRepeats;
			$string_to_check = 'a';
			$word_to_count = 'b';

			//Act
			$result = $word_not_found->countRepeatsCounter($string_to_check, $word_to_count);

			//Assert
			$this->assertEquals(0, $result);
		}

		function test_ExactMatch_MultiLetter()
		{
			//Arrange
			$exact_match_multi_letter = new CountRepeats;
			$string_to_check = 'aa';
			$word_to_count = 'aa';

			//Act
			$result = $exact_match_multi_letter->countRepeatsCounter($string_to_check, $word_to_count);

			//Assert
			$this->assertEquals(1, $result);
		}

		function test_ExactMatch_MultiLetter_CaseInsensitive()
		{
			//Arrange
			$exact_match_multi_letter_case_insensitive = new CountRepeats;
			$string_to_check = 'Aa';
			$word_to_count = 'aA';

			//Act
			$result = $exact_match_multi_letter_case_insensitive->countRepeatsCounter($string_to_check, $word_to_count);

			//Assert
			$this->assertEquals(1, $result);
		}

		function test_MultipleInstances()
		{
			//Arrange
			$multiple_instances = new CountRepeats;
			$string_to_check = "hello hello";
			$word_to_count = "hello";

			//Act
			$result = $multiple_instances->countRepeatsCounter($string_to_check, $word_to_count);

			//Assert
			$this->assertEquals(2, $result);
		}

		function test_MultipleInstances_CaseInsensitive()
		{
			//Arrange
			$multiple_instances_case_insensitive = new CountRepeats;
			$string_to_check = "hello Hello";
			$word_to_count = "HELLO";

			//Act
			$result = $multiple_instances_case_insensitive->countRepeatsCounter($string_to_check, $word_to_count);

			//Assert
			$this->assertEquals(2, $result);
		}

		function test_WordNotFound_MultiWordString()
		{
			//Arrange
			$word_not_found_multi_word = new CountRepeats;
			$string_to_check = "hello hello";
			$word_to_count = "hi";

			//Act
			$result = $word_not_found_multi_word->countRepeatsCounter($string_to_check, $word_to_count);

			//Assert
			$this->assertEquals(0, $result);
		}

		function test_MultipleInstances_MultiDiffWordString()
		{
			//Arrange
			$multi_diff_word_string = new CountRepeats;
			$string_to_check = "funky funky fresh";
			$word_to_count = "funky";

			//Act
			$result = $multi_diff_word_string->countRepeatsCounter($string_to_check, $word_to_count);

			//Assert
			$this->assertEquals(2, $result);
		}

		function test_MultipleInstacesRandom()
		{
			//Arrange
			$multiple_instances_random = new CountRepeats;
			$string_to_check = "It's a dog eat dog world";
			$word_to_count = "dog";

			//Act
			$result = $multiple_instances_random->countRepeatsCounter($string_to_check, $word_to_count);

			//Assert
			$this->assertEquals(2, $result);
		}

		function test_ExactMatchNoPunctuation()
		{
			//Arrange
			$exact_match_no_punctuation = new CountRepeats;
			$string_to_check = "Verily!";
			$word_to_count = "verily";

			//Act
			$result = $exact_match_no_punctuation->countRepeatsCounter($string_to_check, $word_to_count);

			//Assert
			$this->assertEquals(1, $result);
		}

		function test_MultipleInstancesNoPunctuation()
		{
			//Arrange
			$multiple_instances_no_punctuation = new CountRepeats;
			$string_to_check = "Buffalo buffalo.";
			$word_to_count = "buffalo";

			//Act
			$result = $multiple_instances_no_punctuation->countRepeatsCounter($string_to_check, $word_to_count);

			//Assert
			$this->assertEquals(2, $result);
		}


	}

?>