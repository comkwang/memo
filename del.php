<?
  include "lib.php";
  $connect = dbconnect();
  $setup = setup();
  $member =member_info();
   $selno= $_REQUEST['selno'];
 ?>



<?

$this_cnt=count($chk); //배열의 갯수 
for($i=0; $i < $this_cnt; $i++) 
{ 
    $tmp_value=""; 

    if($chk[$i]=="on") // 체크된거면 
    { 
        $tmp_value=$chk[$i]; // 체크된놈의 값 
        echo $chk[$i];
    } 
} 
 for($i=0; $i < 20; $i++) {
    	echo $selno[$i];
    	}
  //	}
 // $query = "select * from atm_call_info where no='$no' ";
 // $result= mysql_query($query, $connect);
 // $data  = mysql_fetch_array($result);
  // if(!$data[no]) Error("No existing ");
  
?>

 <script>
 location.href='list.php?page=<?=$page?>&search_mode=<?=$search_mode?>&search_text=<?=$search_text?>&orderdir=<?=$orderdir?>';
</script>
