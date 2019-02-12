<?
  include "lib.php";
  
 
  $plan 			   	   	= $_REQUEST['plan'];
  $contract 	   	  	= $_REQUEST['contract'];
  $equipment 			    = $_REQUEST['equipment'];
  $setup_tel					= $_REQUEST['setup_tel'];
  $setup_address      = $_REQUEST['setup_address'];
  $setup_suburb       = $_REQUEST['setup_suburb'];
  $setup_state        = $_REQUEST['setup_state'];
  $setup_postcode     = $_REQUEST['setup_postcode'];
  $setup_name         = $_REQUEST['setup_name'];
  $setup_company      = $_REQUEST['setup_company'];
  $setup_contact      = $_REQUEST['setup_contact'];
  $setup_fax          = $_REQUEST['setup_fax'];
  $setup_email        = $_REQUEST['setup_email'];
  $delv_address       = $_REQUEST['delv_address'];       
  $delv_suburb        = $_REQUEST['delv_suburb'];
  $delv_state         = $_REQUEST['delv_state'];
  $card_type          = $_REQUEST['card_type'];
  $card_number        = $_REQUEST['card_number'];
  $card_name          = $_REQUEST['card_name'];   
  $card_exp           = $_REQUEST['card_exp'];
  $card_verification  = $_REQUEST['card_verification'];
  $bank_name          = $_REQUEST['bank_name'];
  $bank_bsb           = $_REQUEST['bank_bsb'];
  $bank_branch        = $_REQUEST['bank_branch'];
  $bank_acc           = $_REQUEST['bank_acc'];
  $bank_accname       = $_REQUEST['bank_accname'];
  $agg_sign           = $_REQUEST['agg_sign'];
  $agg_name           = $_REQUEST['agg_name'];
  $agg_date           = $_REQUEST['agg_date'];
  
  $connect = dbconnect();     
  $agg_date = now();
    
?>

<?	
  $regdate = time();
  $query = "insert into sing_adslreg_data ( 
  plan,
  contract,
  equipment,
  setup_tel,
  setup_address,
  setup_suburb,
  setup_state, 
  setup_postcode,
  setup_name,
  setup_company,
  setup_contact,
  setup_fax,
  setup_email,
  delv_address,                  
  delv_suburb,
  delv_state, 
  card_type, 
  card_number, 
  card_name,                  
  card_exp, 
  card_verification, 
  bank_name, 
  bank_bsb,
  bank_branch,
  bank_acc,               
  bank_accname,
  agg_sign, 
  agg_name,
  agg_date,
  regdate) 
  values(
  '$plan',
  '$contract',
  '$equipment', 
  '$setup_tel', 
  '$setup_address',
  '$setup_suburb', 
  '$setup_state', 
  '$setup_postcode', 
  '$setup_name',
  '$setup_company',
  '$setup_contact',
  '$setup_fax',
  '$setup_email',
  '$delv_address',                  
  '$delv_suburb',
  '$delv_state', 
  '$card_type', 
  '$card_number', 
  '$card_name',                  
  '$card_exp', 
  '$card_verification', 
  '$bank_name', 
  '$bank_bsb',
  '$bank_branch',
  '$bank_acc',               
  '$bank_accname',
  '$agg_sign', 
  '$agg_name',
  '$agg_date',
  '$regdate')";
  
  mysql_query($query, $connect);
  
  mysql_close($connect);

  movepage("adslreg.php");
?>
