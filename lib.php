<?
  function dbconnect() {
	
	$connect = mysql_connect("localhost","atmclean","atlas211726") or die ("Connection Fail");
	mysql_select_db("atmclean_zbxe");
	return $connect;
	}
	
	function setup(){
	  global $connect, $id;
	  //if(!$id) Error("Indicate ID in the Builtin. ¿¹:list.php?id=test");
	  //$query = "select * from sing_board_admin where id='$id'";
      $query = "select * from sing_board_admin";
      //$query = "select * from atm_call_info";
	  $result= mysql_query($query, $connect);
	  $data = mysql_fetch_array($result);
	  
	  return $data;
	}
	  
	function head() {
	  global $setup;
	  echo $setup[header];
	  
	  echo "<a href=list.php>Bultine</a>";
	  echo "<a href=adslreg.php>Registration</a>";
	}
	function left() {
	  global $setup;
	  echo $setup[left];
	  include "left.html";
	  echo "</div>";
	}  
	function foot() {
	  global $setup;
	  echo $setup[footer];
	
	}
	function right() {
	  global $setup;
	  echo $setup[right];
	  include "left.html";
	  echo "</div>";
	}
	function Error($msg) {
	  echo "
	  <script>
	    window.alert('$msg');
	    history.back(1);
	  </script>
	  ";
	  exit;
	}
	

	function movepage($url) {
	  echo "<script>
	    location.href='$url';
	  </script>
	  ";
	}
	function member_info(){
	  global $connect, $HTTP_COOKIE_VARS;
          if(empty($HTTP_COOKIE_VARS) && !empty($_COOKIE))
          {
               $HTTP_COOKIE_VARS = $_COOKIE;
          }  

	  $tmp = $HTTP_COOKIE_VARS["atmlogin"];
	 	//$tmp = $_COOKIE["atmlogin"];
      $temp = explode("//", $tmp);
	 
	  $query = "select * from sing_board_member where user_id='$temp[0]'";
	  $result= mysql_query($query, $connect);
	  $data = mysql_fetch_array($result);
	  if($temp[1] == md5($data[password])) return $data;
	  else {
	    $member[level] = 10;
	     movepage("login.php");
	    return $member;
	  }
	}
   	  $ringbackdate= $_REQUEST['ringbackdate'];
  	  $orderdir= $_REQUEST['orderdir'];
	  $href= $_REQUEST['href'];
	  $subject= $_REQUEST['subject'];
	  $name= $_REQUEST['name'];
	  $email= $_REQUEST['email'];
	  $password= $_REQUEST['password'];
	  $memo= $_REQUEST['memo'];
	  $url= $_REQUEST['url'];
	  $id= $_REQUEST['id'];
	  $no= $_REQUEST['no'];
	  $top= $_REQUEST['top'];
	  $level = $_REQUEST['level'];
	  $parent = $_REQUEST['parent'];
	  $page = $_REQUEST['page'];
	  $user_id = $_REQUEST['user_id'];
	  $search_text = $_REQUEST['search_text'];
	  $search_mode = $_REQUEST['search_mode'];
	  $notice = $_REQUEST['notice'];
	  $company_name =$_REQUEST['company_name'];
	  $street = $_REQUEST['street'];
	  $suburb = $_REQUEST['suburb'];
	  $state =$_REQUEST['state'];
	  $postcode = $_REQUEST['postcode'];
	  $phone =$_REQUEST['phone'];
	  $email =$_REQUEST['email'];
	  $title =  $_REQUEST['title'];
	  $firstname = $_REQUEST['firstname'];
	  $lastname = $_REQUEST['lastname'];
	  $jobtitle = $_REQUEST['jobtitle'];
	  $shortmemo= $_REQUEST['shortmemo'];
?>
