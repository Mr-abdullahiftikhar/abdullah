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
    echo "marks added successfully<br><br>";
}



    $roll = $_POST['roll'];
    $name = $_POST['name'];
    $virtualization = $_POST['virtualization'];
    $oop = $_POST['oop'];
    

$sql= "INSERT INTO `student_marks` (`roll`,`name`,`virtualization`, `oop`) VALUES ('$roll','$name','$virtualization', '$oop')";

$result=mysqli_query($conn,$sql);
if($result){

     echo "success";
     header("location:joins.html");
 }
else{
    echo "error".mysqli_error($conn);
}

 mysqli_close($conn);
?>
