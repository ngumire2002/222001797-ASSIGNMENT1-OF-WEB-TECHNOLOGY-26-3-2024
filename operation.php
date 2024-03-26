<?php
    if(isset($_POST['submit'])) {
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $firstNumber = $_POST['firstNumber'];
        $secondNumber = $_POST['secondNumber'];
        
        $fullName = $fname . " " . $lname;
        $sum = $firstNumber + $secondNumber;
        
        echo "<p>Hello $fullName</p>";
        echo "<p>The sum is $sum</p>";
    }
    ?>