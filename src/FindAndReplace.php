<?php
    class FindAndReplace
    {
        private $find;
        private $change;
        private $sentence;


        function swapWords($string, $find, $change)  // input is "string"
        {
            $clean_string_array = explode(" ", $string);
            $new_string = preg_replace('/[^a-z0-9\s]+/i', '', $string); // -punct
            $new_string = strtolower($new_string);
            $find = strtolower($find);

            $string_array = explode(" ", $new_string);  // "array"

            $final_array = array();

            foreach ($string_array as $index => $word) {
                if ($string_array[$index] == $find) {
                    array_push($final_array, $change);
                } else {
                    array_push($final_array, $clean_string_array[$index]);
                }

            }
            $final_string = implode(" ", $final_array);

            // var_dump($final_string);
            return $final_string;
        }


    }



?>
