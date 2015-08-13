<?php
    require_once "src/ValueFinder.php";

    class ValueFinderTest extends PHPUnit_Framework_TestCase {

        function test_findWordTotal_TESTNAME() {

            $test_ValueFinder = new ValueFinder;
            $word_input = "a";

            $result = $test_ValueFinder->findWordTotal($word_input);

            $this->assertEquals("", $result);
        }

    }
?>
