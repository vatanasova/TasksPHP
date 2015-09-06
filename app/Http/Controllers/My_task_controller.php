<?php
namespace App\Http\Controllers;
use App\Tasks\My_task;
use App\Http\Controllers\Controller;

/**
 * Description of My_task_controller
 *
 * @author Victoria
 */
class My_task_controller extends Controller{
    public function test_all() {
        $obj = new My_task;
        
        echo "Start test_reverse() <br>";
        $obj->test_reverse();
        echo "<br><br>";
        
        echo "Start test_is_palindrome() <br>";
        $obj->test_is_palindrome();
        echo "<br><br>";
        
        echo "Start test_encryption() <br>";
        $obj->test_encryption();  
        echo "<br><br>";
    }
}
