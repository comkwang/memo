<?
  include "lib.php";
  $connect = dbconnect();
  
  $regdate = time();
  $ip = $REMOTE_ADDR;
  $level = 9;
  $query = "insert into sing_board_member(user_id, name, password, 
          email, regdate, ip, level)
          values('$user_id', '$name', '$password', 
          '$email', '$regdate','$ip', '$level')";
          
  $result= mysql_query($query, $connect);
  mysql_close($connect);
 
?>

<script>
  location.href='list.php?id=<?=$user_id?>';
</script> 