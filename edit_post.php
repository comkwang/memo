<?
  include "lib.php";
  $connect = dbconnect();
 $setup = setup();
  $member = member_info();   
?>

<?    
  
 
  if(!$company_name) Error('company_name');
  if(!$memo) Error(' memo');
  if(!$phone) Error('phone');
  if(!$no) Error('no. ');
  
  
  $regdate = time();

  $query = "update atm_call_info set 
   		   id = '$member[user_id]',
            company_name ='$company_name',
            street ='$street',
            suburb ='$suburb',
            state ='$state',
            postcode ='$postcode',
            phone ='$phone',
            email ='$email',
            title =' $title', 
            firstname = '$firstname',
            lastname ='$lastname',
            jobtitle ='$jobtitle',
            memo='$memo',
            regdate='$regdate'
            where no='$no'";
  mysql_query($query, $connect);
  mysql_close($connect);
  $temp = "list.php?page=$page&search_mode=$search_mode&search_text=$search_text";

?>

<script>
location.href='view.php?no=<?= $no?>&page=<?=$page?>&search_mode=<?=$search_mode?>&search_text=<?=$search_text?>';
</script>
