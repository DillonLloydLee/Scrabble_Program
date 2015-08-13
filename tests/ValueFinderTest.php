<?php
    require_once "src/ValueFinder.php";

    class ValueFinderTest extends PHPUnit_Framework_TestCase {

        function test_findWordTotal_singleLetterSimple() {

            $test_ValueFinder = new ValueFinder;
            $word_input = "a";

            $result = $test_ValueFinder->findWordTotal($word_input);

            $this->assertEquals("1", $result);
        }

        function test_findWordTotal_singleLetterComplex() {

            $test_ValueFinder = new ValueFinder;
            $word_input = "j";

            $result = $test_ValueFinder->findWordTotal($word_input);

            $this->assertEquals("8", $result);
        }


    }
?>
