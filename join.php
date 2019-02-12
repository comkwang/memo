<?
  include "lib.php";
  $connect = dbconnect();
  $setup = setup();

?>
<script>
  function id_check() {
    if(!document.join.user_id.value) {
      window.alert('User id is requied.');
      document.join.user_id.focus();
      
      return false;
    }
    var a = document.join.user_id.value;
    window.open('id_check.php?user_id='+a,'idc', 'width=300 , height=200');
  }
</script>

<form action=join_post.php name=join method=post>
<table width=500 border=1>
  <tr>
    <td colspan=2 align=center>User Registration
  <tr>
    <td> User ID
    <td> <input name=user_id size=15>
    <input type=button value='check ID' onclick="id_check();">
  <tr>
    <td> Password
    <td> <input type=password name=password size=15>
  <tr>
    <td> Name
    <td> <input name=name size=15>
  <tr>
    <td> email
    <td> <input name=email size=30>
  <tr>
    <td colspan=2>
    <input type=submit value='submit'>  
</table>
</form>