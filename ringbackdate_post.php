<?
  include "lib.php";
  $connect = dbconnect();
 $setup = setup();
  $member = member_info();   
?>

<?    
  
  $regdate = time();
  $today = getdate();
  //print_r($today);
  $fdate = $today[mday]."/".$today[mon]."/".$today[year];
 // print_r($fdate);
  $query = "update atm_call_info set 
   		   ringbackdate = '$ringbackdate',
            regdate='$regdate'
            where no='$no'";
  mysql_query($query, $connect);
  mysql_close($connect);
 
?>

<script>
location.href='view.php?no=<?= $no?>&page=<?=$page?>&search_mode=<?=$search_mode?>&search_text=<?=$search_text?>';
</script>
