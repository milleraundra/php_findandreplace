<?php
    class FindAndReplace
    {
        private $find;
        private $change;
        private $sentence;

    //     function __construct($contact_name)
    //     {
    //         $this->name = $contact_name;
    //     }
    //
            function swapWords($string, $find, $change)  // input is "string"
            {
                $string_array = explode(" ", $string);  // "array"
                foreach ($string_array as $index => $word) {
                    $string_array[$index] = strtolower($string_array[$index]);
                    $find = strtolower($find);

                    if ($string_array[$index] == $find) {
                        $string_array[$index] = $change;
                    }
                }
                $final_string = implode(" ", $string_array);
                return $final_string;
            }


    }
?>
