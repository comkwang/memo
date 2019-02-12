<?
  include "lib.php";
  $connect = dbconnect();

  $query = "select *from sing_board_member where user_id='$user_id' ";
  $result= mysql_query($query, $connect);
  $data = mysql_fetch_array($result);
 
  
  if(!$data[user_id]) Error('No exsisting');
  if($data[password]!=$password) Error('Password Wrong.'); 
  
 $ip = $REMOTE_ADDR;
 $logindate = date("Y-m-d H:m:s");
 $query = "insert into atm_call_user(user_id,  logindate, ip)
   	 values('$user_id', '$logindate','$ip')";
          
  $result= mysql_query($query, $connect);

  
  $pw = md5($password);
  $tmp=$user_id."//".$pw;
  setcookie("atmlogin",$tmp,0, "/"); //-1메로리상에만 기억
  movepage("list.php?id=$user_id");
?>

