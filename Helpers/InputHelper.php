<?php

namespace Helper {
    class InputHelper
    {
        public static function Input(string $info): string
        {
            echo "$info : ";
            $result = fgets(STDIN);
            // return trim($result);
            return $result;
        }
    }
}
