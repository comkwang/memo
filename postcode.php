<?
  include "lib.php";
  $connect = dbconnect();
  //$setup= setup();
  //$member = member_info();
  
  $query = "select * from postcode group by state";
  $result= mysql_query($query, $connect);
  $state = $_REQUEST['state'];
  $suburb = $_REQUEST['suburb'];
?>
<head>
<meta http-equiv=Content-Type content=text/html; charset=euc-kr>
<link rel=Stylesheet href=style.css type=text/css>
</head>
<script>
  function sel_state() {
    location.href='postcode.php?state=' + document.test.state.value; 
    //location.href='postcode.php?state=' + $state +'&suburb='+ $suburb;
 }
</script>

<form action=postcode.php name=test>  

<select name=state onChange="sel_state();">
  <option value=''>지역선택
<?  
  while($data = mysql_fetch_array($result)) {
?>
     <option value='<?=$data[state]?>' <? if($data[state] == $state) echo " selected "; ?>> <?=$data[state]?>
    
<?
}
?>
</select>



<select name=suburb>
<?

  $query = "select * from postcode where state='$state' order by suburb ";
  $result= mysql_query($query, $connect);
  echo "'$state'<br>'$suburb'";
  while($data = mysql_fetch_array($result)) {
  
 
?>
  <option value='<?=$data[suburb]?>' <? if($data[suburb] == $suburb) echo " selected "; ?>> <?=$data[suburb]?>
<?
}
?>
</select>
</select>

<?
  $query = "select * from postcode where state='$state' and suburb='$suburb'";
  $result= mysql_query($query, $connect);
  $data=mysql_fetch_array($result);
 
 
?>
 <input type=submit value='조회하기'>
 <table>
    <tr>
      <td> <?=$data[postcode]?>
  </table>
 
</form>