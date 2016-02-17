<?php

    require_once "src/FindAndReplace.php";

    class FindAndReplaceTest extends PHPUnit_Framework_TestCase
    {

        function test_FindAndReplace_oneWord()
        {
            //Arrange
            $test_FindAndReplace = new FindAndReplace;
            $string = "Hello";
            $find = "Hello";
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
            $find = "Hello";
            $change = "Goodbye";

            //Act
            $result = $test_FindAndReplace->swapWords($string, $find, $change);

            //Assert
            $this->assertEquals("Goodbye World", $result);
        }

        // function test_FindAndReplace_multipleWords()
        // {
        //     //Arrange
        //     $test_FindAndReplace = new FindAndReplace;
        //     $string = "If I were an apple hanging on a tree";
        //     $find = "an";
        //     $change = "a";
        //
        //     //Act
        //     $result = $test_FindAndReplace->swapWords($string, $find, $change);
        //
        //     //Assert
        //     $this->assertEquals("If I were a apple haging on a tree", $result);
        // }
    }

    // Run in terminal in project folder
    // export PATH=$PATH:./vendor/bin
    // phpunit tests

?>
