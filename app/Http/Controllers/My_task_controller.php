<?php
namespace App\Http\Controllers;
use App\Tasks\My_task;
use App\Http\Controllers\Controller;
use Input;
use View;

/**
 * Description of My_task_controller
 *
 * @author Victoria
 */
class My_task_controller extends Controller{
    
    /**
     * Calls test_reverse, test_is_palindrome and test_encryption 
     * functions to test reverse, is_palindrome, encrypt and decrypt 
     * with string value hardcoded
     */
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
    
    /**
     * Calls reverse function with input string as a parameter
     * @return string
     */
    public function reverse() {
        $str = Input::get ( 'value' );
        $task = new My_task;
        $result = $task->reverse($str);
        return $result;
    }
    
    /**
     * Calls is_palindrome function with input string as a parameter
     * @return string
     */
    public function is_palindrome() {
        $str = Input::get ( 'value' );
        $task = new My_task;
        $result = $task->is_palindrome($str);
        return $result?"TRUE":"FALSE";
    }
    
    /**
     * Calls encrypt function with input string as a parameter
     * @return string
     */
    public function encrypt() {
        $str = Input::get ( 'value' );
        $task = new My_task;
        $result = $task->encrypt($str);
        return $result;
    }
    
    /**
     * Calls decrypt function with input string as a parameter
     * @return string
     */
    public function decrypt() {
        $str = Input::get ( 'value' );
        $task = new My_task;
        $result = $task->decrypt($str);
        return $result;
    }
    
    /**
     * Generates view and sets the title
     * @return view
     */
    public function index() {
        $view = View::make ( 'tasks.task' );
        $view->title = 'String functions';
        return $view;
    }
      
}
