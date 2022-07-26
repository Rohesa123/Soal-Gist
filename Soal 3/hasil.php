<?php
    if(isset($_POST['save'])) {
        $a = $_POST['bracket'];
        function hasMatchedParenthesis($a) {
        $a = str_split($a);
        $stack = array();
        foreach($a as $value){

            switch ($value) {
                case '(': 
                    array_push($stack, 0); 
                break;

                case ')': 
                    if (array_pop($stack) !== 0) {
                        return false;
                    }
                break;

                case '[': 
                    array_push($stack, 1); 
                break;

                case ']': 
                    if (array_pop($stack) !== 1) {
                        return false;
                    }
                break;

                default: 

                break;

                case '{': 
                    array_push($stack, 2); 
                break;
                    
                case '}': 
                    if (array_pop($stack) !== 2) {
                        return false;
                    }
                break;
            }
        }
        return (empty($stack));
    } 
    echo $a."<br>";
    echo (hasMatchedParenthesis($a))? "Yes":"No";
    }
?>