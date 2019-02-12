<?
  include "lib.php";
  $connect = dbconnect();
  //$setup = setup();
?>
<form action=login_check.php method=post>
<input type=hidden name=id value='<?=$id?>'>
<table width=150 border=1 align=center>
<tr>
  <td colspan=2 align=center>
    Login
<tr>
  <td> ID
  <td> <input name=user_id size=10>
<tr>
  <td> Password
  <td> <input type=password name=password size=10>
<tr>
  <td colspan2 align=center>
  <input type=submit value='Login'>
</table>
</form>