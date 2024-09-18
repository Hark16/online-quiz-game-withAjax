<?php
$page_title = 'Result';

include 'header.php';

?>


<h1>
See Your Detailed Result
</h1>

<?php
session_start();
$point = 0;
$i=1;

while ($i <= 25){
if(isset($_SESSION['q'.$i.''])){

echo 'Question '.$i.': '. $_SESSION['q'.$i.''].'<br/>';
echo ' Right Answer : '. $_SESSION['a'.$i.''].'<br/>';
echo 'Your Answer : '. $_SESSION['ua'.$i.''].'<br/>';
if($_SESSION['a'.$i.'']===$_SESSION['ua'.$i.'']){
echo 'passed';
echo '<br/>';

$point = $point+1;

}
else{
echo 'failed';
echo '<br/>';

}
}
else{
echo 'you did not attend question number '.$i.'<br/>';

}

$i++;
}


echo '<h3> score : '.$point.'/25 </h3>';
$percent = $point * 4;
echo '<h3> Total Percentage : '.$percent.'% </h3>';

if($percent>=80){
echo '<h3> Super Performance, very good keep going </h3>';

}
if($percent>=61 && $percent<=80){
echo '<h3> Nice Performance, very good keep going </h3>';

}
if($percent>=31 && $percent <=60){
echo '<h3> average Performance, need to do Work on some area, all the best </h3>';

}
if($percent>=10 && $percent <=30){
echo '<h3> bed Performance, you need to do Hard Work, all the best </h3>';

}

if($percent==0){
echo '<h3> Worst Performance, very bed gain some knowledge before comeing again, good bye</h3>';

}

?>

<h6>
<a href='index.php'>
  Start Quizz Again  
</a>
</h6>

<?php
include 'footer.php';

?>