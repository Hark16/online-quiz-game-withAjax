<?php
$page_title = 'Start';

include 'header.php';
?>



<form method='POST'>
<center>
<p>
<b>
Your Name
</b>
</p>
</center>
<br/>


<center>
<input type='text' name='name' value='player'/>
</center>
<br/>

<center>
<input type='submit' name='submit' value='Start The Quizz'/>
</center>
</form>
<br/><br/>

<?php
session_start();

if(isset($_POST['submit'])){

$q1num = mt_rand(1,3);
$q2num = mt_rand(4,6);
$q3num = mt_rand(7,9);
$q4num = mt_rand(10,12);
$q5num = mt_rand(13,15);
$q6num = mt_rand(16,18);
$q7num = mt_rand(19,21);
$q8num = mt_rand(22,24);
$q9num = mt_rand(25,27);
$q10num = mt_rand(28,30);

$q11num = mt_rand(31,33);
$q12num = mt_rand(34,36);
$q13num = mt_rand(37,39);
$q14num = mt_rand(40,42);
$q15num = mt_rand(43,45);
$q16num = mt_rand(46,48);
$q17num = mt_rand(49,51);


$q18num = mt_rand(52,54);
$q19num = mt_rand(55,57);
$q20num = mt_rand(58,60);


$q21num = mt_rand(61,63);
$q22num = mt_rand(64,66);
$q23num = mt_rand(67,69);
$q24num = mt_rand(70,72);
$q25num = mt_rand(73,75);


$name = $_POST['name'];
$_SESSION['name'] = $name;


$_SESSION['q1num'] = $q1num ;
$_SESSION['q2num'] = $q2num ;
$_SESSION['q3num'] = $q3num ;
$_SESSION['q4num'] = $q4num ;
$_SESSION['q5num'] = $q5num ;
$_SESSION['q6num'] = $q6num ;
$_SESSION['q7num'] = $q7num ;
$_SESSION['q8num'] = $q8num ;
$_SESSION['q9num'] = $q9num ;
$_SESSION['q10num'] = $q10num ;


$_SESSION['q11num'] = $q11num ;
$_SESSION['q12num'] = $q12num ;
$_SESSION['q13num'] = $q13num ;
$_SESSION['q14num'] = $q14num ;
$_SESSION['q15num'] = $q15num ;
$_SESSION['q16num'] = $q16num ;
$_SESSION['q17num'] = $q17num ;


$_SESSION['q18num'] = $q18num ;
$_SESSION['q19num'] = $q19num ;
$_SESSION['q20num'] = $q20num ;


$_SESSION['q21num'] = $q21num ;
$_SESSION['q22num'] = $q22num ;
$_SESSION['q23num'] = $q23num ;
$_SESSION['q24num'] = $q24num ;
$_SESSION['q25num'] = $q25num ;


   header("Location: q1.php");


}

?>

<?php

include 'footer.php';
?>
