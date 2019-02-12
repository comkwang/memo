<?
  include "lib.php";
  $connect = dbconnect();
  $setup = setup();
  $member = member_info();
?>

<head>
  <link rel=Stylesheet href=style.css type=text/css>
  <title> <?= $setup[title] ?> </title>
</head>

<?  
  $query = "update atm_call_info set hit=hit+1 where no='$no' " ;
  $result= mysql_query($query, $connect);
  
  $query = "select * from atm_call_info where no='$no' ";
  $result= mysql_query($query, $connect);
  $data = mysql_fetch_array($result);
  $msg = "Are you sure to delete ?";
  $url = "list.php?id=$id&page=$page&search_mode=$search_mode&search_text=$search_text";
  $ringbackdate = "1";
?>


<link rel="stylesheet" type="text/css" href="tcal.css" />
<script type="text/javascript" src="tcal.js"></script> 
<script src="datepicker.js" language="javascript"></script>



<div id="mid">

<table width=<?= $setup[width] ?> border=1>
 
  <tr>
    <td width=15%> <h5> Company
    <td> <h5> <?= $data[company_name] ?>
  <tr>
    <td> <h5> Address 
    <td> <?= $data[street] ?> <?= $data[suburb] ?> <?= $data[state] ?> <?= $data[postcode] ?>
   <tr>
      <td> <h5>Phone
     <td> <?= $data[phone] ?>
   <tr>
    <td> <h5>email
    <td> <a href=mailto:<?= $data[email] ?>> <?= $data[email] ?></a>
   <tr>
    <td> <h5>Name
    <td> <?= $data[title] ?> <?= $data[firstname] ?> <?= $data[lastname] ?>
   <tr>
     <td> <h5>JobTitle
    <td> <?= $data[jobtitle] ?>
   <tr>
    <td> <h5>Ringback Date
    <td><form name=ring action=ringbackdate_post.php >
		      			<input type=hidden name=no value='<?=$no?>'>
		      			<input type=hidden name=page value='<?=$page?>'>
		      			<input type=hidden name=search_mode value='<?=$search_mode?>'>
		        		<input type=hidden name=search_text value='<?=$search_text?>'>
		        		<input type="text" name=ringbackdate  class="tcal" value='<?= $data[ringbackdate] ?>'/>
					<input type=submit value='update'>
	<tr>
	</form>
    <td> <h5>Memo
    <td> <?= nl2br($data[memo]) ?>
   <tr>
     <td> <h5> Writer
     <td> <?= $data[id] ?> 
 </table>

	
<? if($member[level] <= $setup[wg]) { ?>
<table width=<?= $setup[width]?> border=1>    
  <form action=comments_write.php?ringbackdate=<?=$ringbackdate ?>&parent=<?=$no?>&page=<?=$page?>&search_mode=<?=$search_mode?>&search_text=<?=$search_text?> enctype="multipart/form-data" method="post">
  	
     <tr>
   	<td width=10%><h5>Id
   	<td><h5>Memo	
   
    <tr>
    <td ><?=$member[user_id]?>
    <td cols= 2> <textarea name=shortmemo cols=10 rows=5 style='width:100%'></textarea>
        <input type=submit value=' Add '>
    
  </form>
</table>
<? } ?>

<table width=<?= $setup[width]?> boader=1>
  <tr>
    <td> 
      	<? if($member[level] <= $setup[wg]) { ?>
        		<? if(!$data[notice]) { ?>
        		    <form action=write.php>
			        			<input type=hidden name=no value='<?=$no?>'>
			        			<input type=hidden name=page value='<?=$page?>'>
			        			<input type=hidden name=search_mode value='<?=$search_mode?>'>
			        			<input type=hidden name=search_text value='<?=$search_text?>'>
			        		  <input type=submit value=' New '>
			        	</form>
        		<? } ?>
      <td align=center>  		
         	<? if($member[level] <= $setup[eg]) { ?>
   		        <form action=edit.php >
		      				<input type=hidden name=no value='<?=$no?>'>
		      				<input type=hidden name=page value='<?=$page?>'>
		      				<input type=hidden name=search_mode value='<?=$search_mode?>'>
		        			<input type=hidden name=search_text value='<?=$search_text?>'>
		        			<input type=hidden name=orderdir value='<?=$orderdir?>'>
		        			<input type=submit value=' Edit '>
		      		</form>
         	<? } ?>
      <td align=center>
         	<? if($member[level] <= $setup[dg]) { ?>
		         	<form action=del_post.php onsubmit="return write_ok1();">
		        			<input type=hidden name=no value='<?=$no?>'>
		        			<input type=hidden name=page value='<?=$page?>'>
		        			<input type=hidden name=search_mode value='<?=$search_mode?>'>
		        			<input type=hidden name=search_text value='<?=$search_text?>'>
		        			<input type=hidden name=orderdir value='<?=$orderdir?>'>
		        		  <input type=submit value='Delete'>
		        	</form>
        		<? } ?>
        <? } ?>
     <td align =right>   
     					<form action=list.php>
		        			<input type=hidden name=page value='<?=$page?>'>
		        			<input type=hidden name=search_mode value='<?=$search_mode?>'>
		        			<input type=hidden name=search_text value='<?=$search_text?>'>
		        			<input type=hidden name=orderdir value='<?=$orderdir?>'>
		        		  <input type=submit value=' Back '>
		 					</form>

</table>   

<?

 $query = "select * from atm_call_info where top='$data[top]' and level ='1'";
 $result  = mysql_query($query, $connect);

 while($data = mysql_fetch_array($result)) {
?>
 
 <table border=1>
  <tr>
  <td> <?= $data[subject] ?>
 
 <?
 }
 ?>
 
 </table>
 </div>
 
 <?
 mysql_close($connect);

 ?>
