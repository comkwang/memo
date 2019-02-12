<?
  include "lib.php";
  $connect = dbconnect();
  $setup= setup();
  $member = member_info();
  //phpinfo();
  
  $cnt = count($no);
  //for($i=0; $i < $cnt; $i++)
  //  $list_no
  $test = join(",",$no);
  //본문삭제    
  $query = "delete from atm_call_info where id='$id' and no in($test)";
  mysql_query($query, $connect);
  //관련 코멘트 
  $query = "delete from atm_call_history where id='$id' and parent in($test)";
  mysql_query($query, $connect);

  movepage("list.php");
?>