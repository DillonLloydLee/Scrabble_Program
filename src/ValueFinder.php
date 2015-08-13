<?php
    class ValueFinder {

        function findWordTotal($word_input) {

            $num_output = 0;

            $letters = array("a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z");
            $letter_amounts = array(1, 3, 3, 2, 1, 4, 2, 4, 1, 8, 5, 1, 3, 1, 1, 3, 10, 1, 1, 1, 1, 4, 4, 8, 4, 10);

            $word_input = strtolower($word_input);
            $word_array = str_split($word_input);

            foreach ($word_array as $letter) {
                $array_value = array_search( $letter, $letters);
                $number_value = $letter_amounts[$array_value];
                $num_output += $number_value;
            }

            $str_output = strval($num_output);

            return $num_output;

        }
    }
?>
