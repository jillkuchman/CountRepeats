<?php

	class CountRepeats
	{

		function countRepeatsCounter($input_string, $input_word)
		{
			$input_string_lc = strtolower($input_string);
			$input_word_lc = strtolower($input_word);

			if ($input_string_lc === $input_word_lc){
				return 1;
			}
			
		}

	}

?>