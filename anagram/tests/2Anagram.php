<?php



            function anagramMake($input1, $input2)
        {
            $anagram = explode(" ", $input2);
            $match = array ();

            $check = explode(" ", $input1);
            foreach ($anagram as $word) {
                foreach ($check as $word2) {
                    if ($word2 == $word) {
                        array_push($match, $word);
                        }
                    }
                    // array_push($match, *******($word));
                    // foreach ($check as $word2){
                    //     if ($word2 == $word) {
                    //         array_push($match);
                    //
                    //     }
                    }
            }


                function anagramFind($input1, $input2)
                {
                $input1 = str_split();
                $input2 = str_split();


                if ($input1 == $input2) {
                    return ("the same!");
                    }
                    elseif ($input1 != $input2){
                        return ("");

                

                }
?>
