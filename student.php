<?php
                            //student_table1.php
$servername="localhost";        
$username="root";
$password="";
$database="school-management";

$conn =mysqli_connect($servername, $username, $password,$database);

if(!$conn){
    die("failed connection :(".mysqli_connect_error());
}
else{
    header("location:student_more_options.html");

}


    $roll=$_POST['roll'];
    $name = $_POST['name'];
    $age = $_POST['age'];
    $Semester = $_POST['semester'];
    $Phone = $_POST['phone'];
    $Email = $_POST['email'];
    //$gender = $_POST['gender'];


$sql= "INSERT INTO `student_data` (`roll`,`name`, `age`, `semester`, `phone`, `email`) VALUES ('$roll','$name', '$age', '$Semester', '$Phone', '$Email')";

$Success=mysqli_query($conn,$sql);
if($Success){

     echo "success";
 }
else{
    echo "error".mysqli_error($conn);
}

 mysqli_close($conn);
?>