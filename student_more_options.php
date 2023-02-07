<?php
                            //student_table1.php
$servername="localhost";        
$username="root";
$password="";
$database="school-management";

$conn =mysqli_connect($servername, $username, $password,$database);

// if(!$conn){
//     die("failed connection :(".mysqli_connect_error());
// }
// else{
//     echo "success <br><br>";
// }

$sql= "SELECT * FROM `student_data`";
$result = mysqli_query($conn,$sql);
$num = mysqli_num_rows($result);
echo "total number of students : ";
echo $num;

echo "<br><br><br><br>";
// $display_all=mysqli_fetch_assoc($result);
// echo var_dump( $display_all);

// $display_all=mysqli_fetch_assoc($result);
// echo var_dump( $display_all);
// $display_all=mysqli_fetch_assoc($result);
// echo var_dump( $display_all);

if($num>0){
while($row=mysqli_fetch_assoc($result)){
    echo "Roll:".$row['roll']."....."."name:".$row['name']."....."."Age:".$row['age']."....."."semester:".$row['semester']."....."."phone no:".$row['phone']."....."."email:".$row['email'];
    echo "<br><br>"; 
}
}
// if($display_all){

//     echo "success";
//  }
// else{
//     echo "error".mysqli_error($conn);
// }

//mysqli_close($conn);
?>