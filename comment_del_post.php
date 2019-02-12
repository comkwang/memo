<?
  include "lib.php";
  $connect = dbconnect();
  $setup = setup();
  head();
  left();
?>

<?

$query= "select* from sing_board_comments where no='$no'";
$result = mysql_query($query, $connect);
$data = mysql_fetch_array($result);

if($data[password] != $password) Error( 'password wrong');

$query = "delete from sing_board_comments where no='$no'";
$result = mysql_query($query, $connect);

$query="update sing_board_data set comments=comments-1 where no='$parent' and id='$id'";
$result = mysql_query($query, $connect);

movepage("view.php?id=$id&no=$parent");
?>

<?
  right();
  foot();
?>