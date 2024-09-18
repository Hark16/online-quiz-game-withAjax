<?php
$question_number = 3;
$page_title = 'Question '.$question_number;

include 'header.php';

?>

<?php
session_start();
include 'databaseConnection.php';

$name = $_SESSION['name'];

echo '<h1> welcome '.$name.'</h1>';
?>
<h3><b>
Question <?php echo $question_number; ?> :
</b></h3>

<?php

$random = $_SESSION['q'.$question_number.'num'];


$table_name = 'quizz';
$sql = "SELECT * FROM $table_name WHERE id= '$random'";

$result = mysqli_query($conn, $sql);
mysqli_num_rows($result) ;
$row = mysqli_fetch_array($result);

?>
<p><b><i> <?php echo $row['question']; ?> </i></b></p>
<hr/>
<h2>
Tick your answer
</h2>

<form method='POST'>

<div>
<input type='radio' name='ua<?php echo $question_number; ?>' value='<?php echo $row['a']; ?>'>   <?php echo $row['a']; ?></input>
</div>
<div>
<input type='radio' name='ua<?php echo $question_number; ?>' value='<?php echo $row['b']; ?>'>   <?php echo $row['b']; ?></input>
</div>
<div>
<input type='radio' name='ua<?php echo $question_number; ?>' value='<?php echo $row['c']; ?>'>   <?php echo $row['c']; ?></input>
</div>
<div>
<input type='radio' name='ua<?php echo $question_number; ?>' value='<?php echo $row['d']; ?>'>   <?php echo $row['d']; ?></input>
</div>

<div>
<right>
<input type='submit' value='Save&Next>' name='submit'/>
</right>
</div>
</form>

<?php

if(isset($_POST['submit'])){
if(isset($_POST['ua'.$question_number])){

$ua3 = $_POST['ua'.$question_number];
$_SESSION['ua'.$question_number] = $ua3;
$_SESSION['q'.$question_number] = $row['question'];
$_SESSION['a'.$question_number] = $row['answer'];

   header("Location: q4.php");

}
else{
?>
<script>
alert('please tick any answer');

</script>
<?php

}}
include 'footer.php';

?>

