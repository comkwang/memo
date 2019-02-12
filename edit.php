<?
  include "lib.php";
  $connect = dbconnect();
  $setup = setup();
  $member = member_info();
?>

<head>
  <link rel=Stylesheet href=style.css type=text/css>
  <script src="/alditor/alditor.js"></script>
</head>

<?

$query = "select * from atm_call_info where no='$no' ";
$result = mysql_query($query, $connect);
$data =mysql_fetch_array($result);

?>


<div id= "mid">
<form action= edit_post.php?id=<?=$id?>&page=<?=$page?>&search_mode=<?=$search_mode?>&search_text=<?=$search_text?> enctype=multipart/form-data method=post>
  <input type=hidden name=top value= '<?=$top?>'>
  <input type=hidden name=no value='<?=$no?>'>
  <input type=hidden name=memo value='<?=$memo?>'>


<table width= <?=$setup[width]?> border =1 >
  <col width=100></col>
  <col></col>
 <tr>
    <td colspan=2 align=center>Edit
  <tr>
    <td> company name
    <td> <input type=text name=company_name size= 50  value='<?=$data[company_name]?>'>
     
  <tr>
    <td> street
    <td> <input type=text name=street size =50 value='<?= $data[street] ?>'>
  <tr>
    <td> suburb
    <td> <input type=text name=suburb size=20 value='<?= $data[suburb] ?>'>
  <tr>
    <td> state
    <td> <input type=text name=state size=3 value='<?= $data[state] ?>'>
  <tr>
    <td> postcode
    <td> <input type=text name=postcode size=4 value='<?= $data[postcode] ?>'>
  <tr>
    <td> phone
    <td> <input type=text name=phone size=10 value='<?= $data[phone] ?>'>
  <tr>
    <td> email
    <td> <input type=text name=email size=50 value='<?= $data[email] ?>'>
  <tr>
    <td> title
    <td> <input type=text name=title size=5 value='<?= $data[title] ?>'>
  <tr>
    <td> firstname
    <td> <input type=text name=firstname size=30 value='<?= $data[firstname] ?>'>
  <tr>
    <td> lastname
    <td> <input type=text name=lastname size=30 value='<?= $data[lastname] ?>'>
  <tr>
    <td> jobtitle
    <td> <input type=text name=jobtitle size=20 value='<?= $data[jobtitle] ?>'>
  <tr>
     <td> memo
      <td> <textarea name=memo cols=70 rows=10 style="width:100%" ><?= $data[memo] ?></textarea>
  <tr>
 
  <td colspan=2 align=center> <input type=submit value=Write>
    					<form action=view.php >
		      			<input type=hidden name=no value='<?=$no?>'>
		      			<input type=hidden name=page value='<?=$page?>'>
		      			<input type=hidden name=search_mode value='<?=$search_mode?>'>
		        			<input type=hidden name=search_text valeu='<?=$search_text?>'>
		        			<input type=hidden name=orderdir value='<?=$orderdir?>'>
		        			<input type=submit value='Back'>
		      		</form>
     
</table>
</form>
</div>

