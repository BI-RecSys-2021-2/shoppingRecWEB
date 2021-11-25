<?php
   $con=mysqli_connect("localhost", "root", "4438", "newbreakfast") or die("MySQL 접속 실패 !!");

   $sql ="SELECT * FROM breakfast";

   $ret = mysqli_query($con, $sql);
   if($ret) {
     $count = mysqli_num_rows($ret);
   }
   else {
     echo "userTBL 데이터 조회 실패!!!"."<br>";
     echo "실패 원인 :".mysqli_error($con);
     exit();
   }


   echo "<h1> 상품상세정보 </h1>";
   echo "<TABLE border=1>";
   echo "<TR>";
   echo "<TH>결과</TH><TH>이름</TH><TH>별점</TH><TH>무게</TH>";
   echo "</TR>";

   while($row = mysqli_fetch_array($ret)) {
    echo "<TR>";
    echo "<TD>", $row['search'], "</TD>";
    echo "<TD>", $row['name'], "</TD>";
    echo "<TD>", $row['number of stars'], "</TD>";
    echo "<TD>", $row['prize'], "</TD>";
    echo "<TD>", $row['weight'], "</TD>";
    echo "</TR>";
   }
   mysqli_close($con);
   echo "</TABLE>";
   echo "<br> <a href='main.html'> <--초기 화면</a> ";
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>productinfo</title>
  </head>
  <body>
    <div>왜안되져</div>


  </body>
</html>
