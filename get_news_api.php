<?php
include('credentials_db.php');

$sql_statement = 'SELECT * from news';
$result = mysqli_query($link, $sql_statement);

$news = [];
if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
      $news[] = $row;
    }
}
echo json_encode($news);
?>