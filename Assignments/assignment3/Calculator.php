<?php
class Calculator{
    
    public function calc($operator="",$num1="",$num2=""){

        //To avoid using try catch block, I set each argument as optional, then threw the error if an argument wasn't passed or if the wrong type was passed
        if ($operator == "" || is_numeric($num1) == FALSE || is_numeric($num2) == FALSE){
            return "You must enter a string and two numbers"."<br>";
        }

        switch($operator){

            case '+':
                $result = "The sum of the numbers is ".$num1 + $num2 ."<br>";
                return $result;
            break;

            case '-':
                $result = "The difference of the numbers is ".$num1 - $num2 ."<br>";
                return $result;
            break;

            case '*':
                $result = "The product of the numbers is ".$num1 * $num2 ."<br>";
                return $result;
            break;
            
            case '/':
                if ($num1 == 0 || $num2 == 0){
                    $result = "Cannot divide by zero"."<br>";
                    return $result;
                }
                    $result = "The division of the numbers is ".$num1 / $num2 ."<br>";
                    return $result;                    
            break;

            default:
                $result = "You must enter a correct operator" ."<br>";
                return $result;
            break;    

        }//End of switch    
    
    }//End of function

}//End of class      







?>