<?php

    require_once "src/FindAndReplace.php";

    class FindAndReplaceTest extends PHPUnit_Framework_TestCase
    {

        function test_makeTitleCase_oneWord()
        {
            //Arrange
            $test_FindAndReplace = new FindAndReplace;
            $string = "beowulf";
            $find = "";
            $change = "";

            //Act: runs the actual method that we are testing.
            $result = $test_FindAndReplace->makeTitleCase($input);

            //Assert tells our tests what to expect from the output of our method.
            $this->assertEquals("Beowulf", $result);
        }  // we will declare a method to run our first test. When we run PHPUnit, our test class will be instantiated and each of its methods will be executed.
    }

    // Run in terminal in project folder
    // export PATH=$PATH:./vendor/bin
    // phpunit tests

?>
