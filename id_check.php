<?
  include "lib.php";
  $connect = dbconnect();

  $query = "select *from sing_board_member where user_id='$user_id'";
  $result= mysql_query($query, $connect);
  $data = mysql_fetch_array($result);
 
  if(!$data[no]) {
?>

<?=$user_id?> is available.
<input type=button value='Use it' onclick="window.close();">
<? } else { ?>
<script>  
window.alert('<?=$user_id?> is not available.');
window.close();
</script>
<? } ?>
