<?
  include "lib.php";
  $connect = dbconnect();
  $setup = setup();
  $member = member_info();
  if($member[level] > $setup[wg]) Error("unauthorise person");
?>

<head>
  <link rel=Stylesheet href=style.css type=text/css>
  <script src="/alditor/alditor.js"></script>
</head>

<?
//head();
//left();

?>

<div id= "mid">
<form action= write_post.php?page=<?=$page?> enctype=multipart/form-data method=post>
<input type=hidden name=top value= <?= $top ?>>
<input type=hidden name=level value=<?= $level ?>>

<table width= <?=$setup[width]?> border =1 >
  <col width = 100></col>
  <col></col>
  <tr>
    <td colspan=2 align=center>New Company
  <tr>
    <td> <h5>company name
    <td> <input type=text name=company_name size= 50>
    		<? if($member[level] <= $setup[dg]) { ?>
         <input type=checkbox name=notice value='1'>Notice
         <? } ?>
  <tr>
    <td> <h5>street
    <td> <input type=text name=street size =50>
  <tr>
    <td> <h5>suburb
    <td> <input type=text name=suburb size=20>
  <tr>
    <td> <h5>state
    <td> <input type=text name=state size=3>
  <tr>
    <td> <h5>postcode
    <td> <input type=text name=postcode size=4>
  <tr>
    <td> <h5>phone
    <td> <input type=text name=phone size=10>
  <tr>
    <td> <h5>email
    <td> <input type=text name=email size=50>
  <tr>
    <td> <h5>title
    <td> <input type=text name=title size=5>
  <tr>
    <td> <h5>firstname
    <td> <input type=text name=firstname size=30>
  <tr>
    <td> <h5>lastname
    <td> <input type=text name=lastname size=30>
  <tr>
    <td> <h5>jobtitle
    <td> <input type=text name=jobtitle size=20>
  <tr>
     <td> <h5>memo
      <td> <textarea name=memo cols=70 rows=10 style="width:100%"></textarea>
  <tr>
 
  <td colspan=2 align=center> 
    		<input type=submit value=Write>
    		</form>
   	      <form action=list.php>
	  		<td>
	  		<input type=hidden name=page value='<?=$page?>'>
	  		<input type=hidden name=search_mode value='0'>
		 	 <input type=hidden name=search_text value=''>
	 		 <input type=submit value='Back'>
	  	</form>
</table>

</div>

<?
  //right();
 // foot();
?>
