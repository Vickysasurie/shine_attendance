<html>
<body>
<?php
$name='NULL';
$dept='NULL';
$year='NULL';
$n='';
$s=$_GET["name"];
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$con = mysql_connect($servername, $username, $password);

// Check connection
if (!$con) {
    die("Connection failed: " . mysql_connect_error());
}
//echo "Connected successfully";
$date = date_default_timezone_set('Asia/Kolkata'); 
$time=date("h:i:sa");//get time
echo "$time<br>";
$time_24 = DATE("H", STRTOTIME($time));
 echo "$time_24";
$ti=date("i");
echo  "minutes is $ti";

$db=mysql_select_db("rfid_db",$con)or die(mysql_error());

$str="SELECT * FROM student_details where idno='$s' ";
$result = mysql_query($str,$con);
while($rows=mysql_fetch_array($result)){
 echo "while part<br>";
$name=$rows['name'];//get the name of the user in db
$dept=$rows['dept'];
$year=$rows['year'];
echo "name is $name<br>";
}
$result1 = mysql_query($str,$con);
//value is located inside the db
if($row=mysql_fetch_array($result1)){
	echo "hi $name<br>";
$db2=mysql_select_db("sample_db",$con);
$stt="SELECT * FROM display where idno='$s' ";
$result2 = mysql_query($stt,$con);
echo "$result2";
//check value is already insert(or)not
if($row=mysql_fetch_array($result2)){
$sa="SELECT TimeOut,sno FROM display where idno='$s' ";
$result1 = mysql_query($sa,$con);	
echo "hi$result1";
echo isset($result1);
	while ($row=mysql_fetch_array($result1)){
    $tim=$row['TimeOut'];
    $sno=$row['sno'];
    echo "ifu $tim";
  } 
  if($tim==$n){
    $d=mysql_select_db("sample_db",$con);
  $te="SELECT * FROM time where idno='$s' ";
  $res=mysql_query($te,$con);
  while($row=mysql_fetch_array($res)){
  $h1=$row['hour'];
  $m1=$row['minutes'];
  $sn=$row['sno'];
  //echo "t1 is $t1";
         }
      $c=$time_24-$h1;
      echo "res$c";
      //echo "time$t1";
     if($c==0){
      $d=$ti-$m1;
      echo "if else $d";
      if($d>=1){
  $str2 = "UPDATE display SET TimeOut = '$time' WHERE sno = '$sno'";
      $result=mysql_query($str2,$con);
       $d=mysql_select_db("sample_db",$con);
  $te="SELECT * FROM time where idno='$s' ";
  $res=mysql_query($te,$con);
  while($row=mysql_fetch_array($res)){
  $h1=$row['hour'];
  $m1=$row['minutes'];
  $sn=$row['sno'];
  //echo "t1 is $t1";
         }
      //$h24=$time_24-$h1;
      $m24=60-$m1;
      $h24=0;
      $m24=$m24+$ti;


      if($m24>=60){
        ++$h24;
        echo "increment $h24";
        $m24=$m24-60;
      }
    //}
      $dd="$h24:$m24";
      $str2 = "UPDATE display SET time_duration = '$dd' WHERE sno = '$sno'";
      $result=mysql_query($str2,$con);
        }
      }
        else{
          $str2 = "UPDATE display SET TimeOut = '$time' WHERE sno = '$sno'";
      $result=mysql_query($str2,$con);
      $d=mysql_select_db("sample_db",$con);
  $te="SELECT * FROM time where idno='$s' ";
  $res=mysql_query($te,$con);
  while($row=mysql_fetch_array($res)){
  $h1=$row['hour'];
  $m1=$row['minutes'];
  $sn=$row['sno'];
  //echo "t1 is $t1";
         }
      $h24=$time_24-$h1;
      $m24=60-$m1;
      $m24=$m24+$ti;


      if($m24>=60){
      //  ++$h24;
        echo "increment $h24";
        $m24=$m24-60;
      }
    //}
      $dd="$h24:$m24";
      $str2 = "UPDATE display SET time_duration = '$dd' WHERE sno = '$sno'";
      $result=mysql_query($str2,$con);
        }
  }
  	else{

      echo "hiii";
       $str2="insert into display values('','$s','$name','$dept','$year','$time','','')";
        $result=mysql_query($str2,$con);
        $sr="insert into time values('','$s','$time_24','$ti')";
        $res=mysql_query($sr,$con);
  	}
 // }
   echo "already exit<br>";
}
else{
$str2="insert into display values('','$s','$name','$dept','$year','$time','','')";
$result=mysql_query($str2,$con);
$sr="insert into time values('','$s','$time_24','$ti')";
$res=mysql_query($sr,$con);
}
 }
//}
//value is not locatated in the db
else{
echo "not in the db<br>";
$db1=mysql_select_db("sample_db",$con);
$st="SELECT * FROM display where idno='$s' ";
$result11 = mysql_query($st,$con);
if($row=mysql_fetch_array($result11)){
$sa="SELECT TimeOut,sno FROM display where idno='$s' ";
$result1 = mysql_query($sa,$con);	
echo "hi$result1";
//echo isset($result1);
	while ($row=mysql_fetch_array($result1)){
    $tim=$row['TimeOut'];
    $sno=$row['sno'];
    echo "ifu $tim";
  } 
  if($tim==$n){
      $d=mysql_select_db("sample_db",$con);
  $te="SELECT * FROM time where idno='$s' ";
  $res=mysql_query($te,$con);
     while($row=mysql_fetch_array($res)){
     $h1=$row['hour'];
     $m1=$row['minutes'];
     $sn=$row['sno'];
        }
//echo "kjbgh$ti,$t1";
$c=$time_24-$h1;
echo "fegt $c";
         if($c==0){
      $d=$ti-$m1;
      echo "if else $d";
      if($d>=1){
  $str2 = "UPDATE display SET TimeOut = '$time' WHERE sno = '$sno'";
      $result=mysql_query($str2,$con);
      $d=mysql_select_db("sample_db",$con);
  $te="SELECT * FROM time where idno='$s' ";
  $res=mysql_query($te,$con);
  while($row=mysql_fetch_array($res)){
  $h1=$row['hour'];
  $m1=$row['minutes'];
  $sn=$row['sno'];
  //echo "t1 is $t1";
         }
      $h24=$time_24-$h1;
      $m24=60-$m1;
      $m24=$m24+$ti;


      if($m24>=60){
      //  ++$h24;
        echo "increment $h24";
        $m24=$m24-60;
      }
    //}
      $dd="$h24:$m24";
      $str2 = "UPDATE display SET time_duration = '$dd' WHERE sno = '$sno'";
      $result=mysql_query($str2,$con);
        }
      }
        else{
          $str2 = "UPDATE display SET TimeOut = '$time' WHERE sno = '$sno'";
      $result=mysql_query($str2,$con);
      $d=mysql_select_db("sample_db",$con);
  $te="SELECT * FROM time where idno='$s' ";
  $res=mysql_query($te,$con);
  while($row=mysql_fetch_array($res)){
  $h1=$row['hour'];
  $m1=$row['minutes'];
  $sn=$row['sno'];
  //echo "t1 is $t1";
         }
      $h24=$time_24-$h1;
      $m24=60-$m1;
      $m24=$m24+$ti;


      if($m24>=60){
      //  ++$h24;
        echo "increment $h24";
        $m24=$m24-60;
      }
    //}
      $dd="$h24:$m24";
      echo "time duratuion $dd";
      $str2 = "UPDATE display SET time_duration = '$dd' WHERE sno = '$sno'";
      $result=mysql_query($str2,$con);
        }
  }
  	else{

     // echo "hiii";
       $str2="insert into display values('','$s','$name','$dept','$year',$time','','')";
        $result=mysql_query($str2,$con);
        $sr="insert into time values('','$s','$time_24','$ti')";
        echo "krid $sr";
       $res=mysql_query($sr,$con);
  	}
   echo "already exit<br>";
}
else{
echo "value is inserted";
$str1="insert into display values('','$s','$name','$dept','$year','$time','','')";
$result=mysql_query($str1,$con);
$sr="insert into time values('','$s','$time_24','$ti')";
$res=mysql_query($sr,$con);
}}
?>
</body>
</html>