<?php

	class CountRepeats
	{

		function countRepeatsCounter($input_string, $input_word)
		{

			//this line turns the input string into an array of words
			$input_array_of_words = explode(" ", $input_string);

			//this line initalizes the word count at 0
			$count = 0;

			//this function will cycle through the array of the input string to see if it matches input word. If they match, it increases the count by 1.
			foreach ($input_array_of_words as $word_to_check) {
				if (strtolower($word_to_check) === strtolower($input_word)) {
					$count ++;
				}
			}

			return $count;
			
		}

	}

?>