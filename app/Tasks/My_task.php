<?php
namespace App\Tasks;

/**
 * Description of My_task
 *
 * @author Victoria
 */
class My_task {
    
    function __construct() {
        
    }
    
    /**
     * Reverses the input string
     * @param string $str
     * @return string
     */
    function reverse($str) {
        //convert string into an array
        $arr = str_split($str);
        $maxindex = count($arr) - 1;

        //reverse the array by using a temporary array
        $tmparr = array();
        for ($i = $maxindex; $i >= 0; $i--) {
            $tmparr[$maxindex - $i] = $arr[$i];
        }

        //convert array back into string and return the string
        $newstr = implode($tmparr);
        return $newstr;
    }

    /**
     * Checks if input string is a palindrome
     * @param string $str
     * @return bool
     */
    function is_palindrome($str) {
        $maxindex = strlen($str) - 1;
        $b = FALSE;

        $i = 0;
        while (($i < ($maxindex - $i)) && ($str[$i] === $str[$maxindex - $i])) {
            $i++;
        }

        if ($i >= $maxindex - $i){
            $b = TRUE;
        }

        return $b;
    }

    /**
     * Encrypts the input string by adding one to each character.
     * @param string $str
     * @return string
     */
    function encrypt($str) {
        for ($i = 0; $i < strlen($str); $i++) {
            $newstr[$i] = chr(ord($str[$i]) + 1);
        }

        $newstr = implode($newstr);
        return $newstr;
    }

    /**
     * Decrypts the input encrypted string by substracting one from each 
     * character.
     * @param string $str
     * @return string
     */
    function decrypt($str) {  
        for ($i = 0; $i < strlen($str); $i++) {
            $newstr[$i] = chr(ord($str[$i]) - 1);
        }

        $newstr = implode($newstr);
        return $newstr;
    }

    /**
     * Tests function reverse()
     * @return void
     */
    function test_reverse(){
        $str = "qwerty"; // create a string to reverse
        echo "Original string is: " . $str . "<br>";
        $revstr = $this->reverse($str); // call to the function reverse()       
        echo "Reversed string is: " . $revstr . "<br>";  
        return;
    }
    
     /**
     * Tests function is_palindrome()
     * @return void
     */
    function test_is_palindrome(){
        $str = "radar"; // create a string to check
        echo "Original string is: " . $str . "<br>";
        $res = $this->is_palindrome($str); // call to the function is_palindrome()  
        if ($res) {
            echo "The string is a palindrome";
        }  else {
            echo "The string is not a palindrome";
        }
        echo "<br>";
        return;
    }
    
    /**
     * Tests functions encrypt( ) and decrypt( )
     * @return void
     */
    function test_encryption(){
        $str = "this is a secret!"; // create a string to encrypt
        echo "Original string is: " . $str . "<br>";
        $encstr = $this->encrypt($str); // call to the function encrypt( )       
        echo "Encrypted string is: " . $encstr . "<br>";  
        $decstr = $this->decrypt($encstr); // call to the function decrypt( )		
        echo "Decrypted string is: " . $decstr . "<br>";
        return;
    }

}
