<?php

                            
$servername="localhost";        
$username="root";
$password="";
$database="school-management";

$conn =mysqli_connect($servername, $username, $password,$database);

$sql= "SELECT student_data.roll,student_data.name,student_data.age,student_data.semester,student_data.phone,student_data.email,student_marks.virtualization,student_marks.oop FROM student_data,student_marks WHERE student_data.roll=student_marks.roll AND student_data.name=student_marks.name ORDER BY student_data.roll;";




    $result=mysqli_query($conn,$sql);
   
    if($result){
    echo "<br>success<br>";
       
     }

else{
    echo "error".mysqli_error($conn);
}
$num=mysqli_num_rows($result);
echo "NO of student records : ";
echo $num;
echo "<br><br><br>";
if($num>0){
    while($row=mysqli_fetch_assoc($result)){
        echo "roll:".$row['roll']."....."."name:".$row['name']."....."."Age:".$row['age']."....."."semester:".$row['semester']."....."."phone no:".$row['phone']."....."."email:".$row['email'];
        echo "....."."virtualization:".$row['virtualization']."....."."oop:".$row['oop'];
        
        echo "<br><br>"; 
    }
    }
 mysqli_close($conn);
?>
