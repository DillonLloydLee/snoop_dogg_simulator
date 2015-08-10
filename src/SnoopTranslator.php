<?php
    Class SnoopTranslator
    {
        function translate($normal_phrase)
        {
            $normal_array = str_split($normal_phrase);
            $snoop_phrase = array();

            foreach($normal_array as $letter) {
                if ($letter == "s") {
                    $letter = "z";
                    array_push($snoop_phrase, $letter);
                }
                else {
                    array_push($snoop_phrase, $letter);
                }
            }

            return implode("", $snoop_phrase);
        }
    }



?>
