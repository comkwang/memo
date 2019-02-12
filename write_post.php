<?
  include "lib.php";
  $connect = dbconnect();
   
?>

<?    
  
 
  if(!$company_name) Error('company name inputed');
  if(!$memo) Error('content inputed');
  if(!$phone) Error('phone inputed');
  
  if(!$top) {
    $query = "select max(top) from atm_call_info";
    $result= mysql_query($query, $connect);
    $data = mysql_fetch_array($result);
    $top= $data[0] + 1;
  }
  
  $regdate = time();

  $query = "insert into atm_call_info(id, name, company_name, street, suburb, state, postcode, phone, email, title,  firstname, lastname, jobtitle, 
            memo, regdate, top, level, notice)
            values('$id', '$name', '$company_name', '$street',  '$suburb', '$state', '$postcode', '$phone', '$email', '$title',' $firstname', '$lastname','$jobtitle', 
            '$memo',  '$regdate','$top','$level', '$notice')";
  mysql_query($query, $connect);
  mysql_close($connect);
  movepage('list.php?id=<?=$id?>');

?>

