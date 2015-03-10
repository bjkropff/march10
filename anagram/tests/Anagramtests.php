<?php

    require_once"/../src/Anagram.php"


        class AnagramTest extends PHPnit_Fraomwok_TestCase
        {
            function test_anagram_oneletter()
            {

                //Arrange
                $testAnagram = new AnagramTest;
                 $input1 = "a";
                 //$input2 = "b";

                 //Act
                 $result = $testAnagram->anagramMatch($input1, $input2);

                 //Assert
                 $this->assertEquals("b", $result)











            }
        }
