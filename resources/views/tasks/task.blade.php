@extends('tasks.default')

@section('content')
<script src="js/task.js"></script>
        <form method="post" id="form">
            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
            <p>Select function to perform over the string</p>
            <input type="radio" name="func" value="reverse" checked>Reverse string<br>
            <input type="radio" name="func" value="palindrome">Check if the string is palindrome<br>
            <input type="radio" name="func" value="encrypt">Encrypt string<br>
            <input type="radio" name="func" value="decrypt">Decrypt string<br><br><br>
            Input string:&nbsp;
            <input type="text" name="value" required>
            <input type="submit" value="Execute">
            <p id="result"></p>
        </form>
@endsection
