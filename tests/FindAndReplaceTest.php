<?php

    require_once "src/FindAndReplace.php";

    class FindAndReplaceTest extends PHPUnit_Framework_TestCase
    {

        function test_FindAndReplace_oneWord()
        {
            //Arrange
            $test_FindAndReplace = new FindAndReplace;
            $string = "Hello";
            $find = "hello";
            $change = "Goodbye";

            //Act
            $result = $test_FindAndReplace->swapWords($string, $find, $change);

            //Assert
            $this->assertEquals("Goodbye", $result);
        }

        function test_FindAndReplace_twoWords()
        {
            //Arrange
            $test_FindAndReplace = new FindAndReplace;
            $string = "Hello, World";
            $find = "hello";
            $change = "Goodbye, World";

            //Act
            $result = $test_FindAndReplace->swapWords($string, $find, $change);

            //Assert
            $this->assertEquals("Goodbye", $result);
        }
    }

    // Run in terminal in project folder
    // export PATH=$PATH:./vendor/bin
    // phpunit tests

?>
