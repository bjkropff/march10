<?php

    require_once "src/Anagram.php";


        class AnagramTest extends PHPUnit_Framework_TestCase
        {
            // function test_anagramMatch()
            // {
            //     //Arrange
            //     $testAnagram = new Anagram;
            //      $input1 = "bad";
            //      $input2 = "bad";
            //
            //      //Act
            //      $result = $testAnagram->anagramMatch($input1, $input2);
            //
            //      //Assert
            //      $this->assertEquals("the same!", $result);
            //
            //
            // }
            //
            // function test_anagramFind()
            // {
            //     //Arrange
            //     $testAnagram = new Anagram;
            //      $input1 = "bad";
            //      $input2 = "bad";
            //
            //      //Act
            //      $result = $testAnagram->anagramFind($input1, $input2);
            //
            //      //Assert
            //      $this->assertEquals("the same!", $result);
            //
            //
            // }
            //
            // function test_anagramMake()
            // {
            //     //arrange
            //     $testAnagram = new Anagram;
            //     $input1 = "add";
            //     $input2= "add";
            //
            //
            //     //act
            //     $result = $testAnagram->anagramMake($input1, $input2);
            //
            //     //assert
            //     $this->assertEquals($input1, $result);
            // }

            function test_anagramEr()
            {
                //arrange
                $testAnagram = new Anagram;
                $input1 = "add";
                $input2= array("add", "dad", "add", "todd");

                //act
                $result = $testAnagram->anagramEr($input1, $input2);

                //assert
                $this->assertEquals("split", $result);
            }
        }
?>
