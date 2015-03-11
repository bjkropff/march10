<?php

    class Anagram
    {
        // function anagramMatch($input1, $input2)
        // {
        //   if ($input1 == $input2) {
        //       return ("the same!");
        //       }
        //       elseif ($input1 != $input2){
        //           return ("");
        //       }
        // }
        //
        //   function anagramFind($input1, $input2)
        //   {
        //       $input2 = array();
        //
        //       if ($input1 == $input2) {
        //           return ("the same!");
        //           }
        //         elseif ($input1 != $input2){
        //           return ("");
        //       }
        //
        //   }
        //
        //   function anagramMake($input1, $input2)
        //   {
        //     $word1 = str_split($input1);
        //     $word2 = str_split($input2);
        //     sort($word1);
        //     sort($word2);
        //
        //     if ($word1 == $word2) {
        //         return ($input1);
        //         }
        //         elseif ($word1 != $word2){
        //             return ("");
        //       }
        //   }

          function anagramEr($input1, $arr)
          {
              $sorted = str_split($input1);//cat => c.a.t
              sort($sorted);//c.a.t. => a.c.t.
              $outinput =implode($sorted);//a.c.t.=>act
              $output = array();


              foreach ($arr as $possible)
              {
                  $split = str_split($possible);
                  sort($split);
                  $whatever = implode($split);

                  if ($whatever == $outinput) {//
                      array_push($output, $possible);

                       return ('Yes');
                      }
                      elseif ($whatever != $outinput) {
                          return ("Oh No");
                    }
                }//close ForEach
                 return $output;
          }//close

    }//close class


?>
