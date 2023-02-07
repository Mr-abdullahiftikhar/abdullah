<?php
if(null!==($_POST==['submit'])){
    $select=$_POST['select'];
    $password=$_POST['password'];
    if($select=='teacher'&& $password=='teacher'){
        echo "teacher login sucessfully:)";
        header("location:teacher.html");
    }
    else if($select=='student'&& $password=='student'){
        echo "student login sucessfully:)";
    }
    else if($select=='principal'&& $password=='principal'){
        echo "principle login sucessfully:)";
    }
    
    else{
        die("failed to login :(");
        
    }

}


?>