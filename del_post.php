<?
  include "lib.php";
  $connect = dbconnect();
  $setup = setup();
  $member =member_info();
?>

<? 
  
  
  $query = "delete from atm_call_info where no='$no'";
  $result = mysql_query($query, $connect);
 
?>

<script>
 location.href='list.php?no=<?= $no?>&page=<?=$page?>&search_mode=<?=$search_mode?>&search_text=<?=$search_text?>&orderdir=<?=$orderdir?>';
</script>
