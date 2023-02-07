<?php
if(null!==($_POST==['submit'])){
    $select=$_POST['select'];
    if($select=='add'){
        echo "student added sucessfully:)";
        header("location:student.html");
    }
    else if($select=='add_marks'){
        header("location:student_marks.html");
    }
    
        // }
    // else if($select=='student'&& $password=='student'){
    //     echo "student login sucessfully:)";
    // }
    // else if($select=='principal'&& $password=='principal'){
    //     echo "principle login sucessfully:)";
    // }
    
    else{
        die("failed to login :(");
        
    }

}
?>


<?php
// if(null!==($_POST==['submit'])){
//     $add=$_POST['add'];
//     // $remove=$_POST['remove'];
//     // $attandance=$_POST['attandance'];
//     // $checking_attandance=$_POST['checking_attandance'];
    
//     if($add=='add'){
//         echo "student added sucessfully:)";
//         header("location:student.html");
//     }
    
//     // else if($add=='add'){
//     //     echo "student add sucessfully:)";
//     //     header("location:student.html");
//     // }
//     // else if($select=='principal'&& $password=='principal'){
//     //     echo "principle login sucessfully:)";
//     // }
    
//     else{
//         die("failed to login :(");
        
//     }

// }
?>








<!-- <?php
//                                     // table1.php
// $servername="localhost";        
// $username="root";
// $password="";
// $database="school-management";

// $conn =mysqli_connect($servername, $username, $password,$database);

// if(!$conn){
//     die("failed connection :(".mysqli_connect_error());
// }
// else{
//     echo "successful database :)";

// }


//     $name = $_POST['name'];
//     $age = $_POST['age'];
//     $Semester = $_POST['semester'];
//     $Phone = $_POST['phone'];
//     $Email = $_POST['email'];
//     //$gender = $_POST['gender'];


// $sql= "INSERT INTO `student_data` (`name`, `age`, `semester`, `phone`, `email`) VALUES ('$name', '$age', '$Semester', '$Phone', '$Email')";

// $Success=mysqli_query($conn,$sql);
// if($Success){

//      echo "success";
//  }
// else{
//     echo "error".mysqli_error($conn);
// }

// mysqli_close($conn);

?>
