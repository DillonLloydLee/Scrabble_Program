<?php
    class ValueFinder {

        function findWordTotal($word_input) {

            $num_output = 0;

            $word_array = array($word_input);

            foreach ($word_array as $letter) {
                $num_output = $num_output + 1;
            }

            $str_output = strval($num_output);

            return $num_output;

        }
    }
?>
