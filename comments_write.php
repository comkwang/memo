<?
  include "lib.php";
  $connect = dbconnect();
  $setup = setup();
  $member = member_info();
  

  if(!$shortmemo) Error(' memo');



$query = "select * from atm_call_info  where  no='$parent'";
$result = mysql_query($query, $connect);
$d= mysql_fetch_array($result);
 $regdate = time();


$allmemo=addslashes($d[memo])."\n".date("d/m/y H:i:s", $regdate)." [".$member[user_id]."]: ".$shortmemo;


echo $ringbackdate1;

$query = "update atm_call_info set 
		 id='$member[user_id]',
		 ringbackdate='$ringbackdate1',
		 memo='$allmemo',
		 regdate='$regdate'
		 where no='$parent'";
$result = mysql_query($query, $connect) or die("Update fail: ". mysql_error());
$num = mysql_affected_rows ();
//echo $num;
//$query = "update atm_call_info set comments=comments+1 where no='$parent'";
//mysql_query($query, $connect);

?>

<script>
location.href='view.php?no=<?= $parent?>&page=<?=$page?>&search_mode=<?=$search_mode?>&search_text=<?=$search_text?>';
</script>

