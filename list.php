<?
  include "lib.php";
  $connect = dbconnect();
  $setup= setup();
  $member = member_info();

?>

<head>
  <meta http-equiv=Content-Type content=text/html; charset=euc-kr>
  <link rel=Stylesheet href=style.css type=text/css>
  <title> <?= $setup[title]?> </title>
</head>

<body>

<?


  $id=$member[user_id];
  $where ="";
  if($search_mode) {
      if($search_mode == 1) $tmp = "company_name";
      if($search_mode == 2) $tmp = "suburb";
      if($search_mode == 3) $tmp = "memo";
      if($search_mode == 4) $tmp = "ringbackdate";
      if($search_mode == 5) 
          $where = " where (company_name like '%$search_text%' or 
                          suburb like '%$search_text%' or 
                          memo like '%$search_text%')";
      else 
          $where = " where $tmp like '%$search_text%' ";
  }
      
  $query  = "select * from atm_call_info ". $where;

  $result = mysql_query($query, $connect);
  $total_article  =	mysql_affected_rows();
 
  
?>

  <div id="mid">
	  <table width=<?= $setup[width] ?> border =0 >
	    <tr>
		    	<td> The number of company: <?=$total_article?>
		    	<td align=right>  
		    		<? if($member[user_id]) { ?>
		    	 			 Welcome  <?=$member[name]?>(<?=$member[level]?>)
		   		 	  	<a href=logout.php> Logout</a> 
		    		<? } else { ?>
		    				<a href=login.php>Login</a> 
		  		<? } ?>
		    		 <? if($member[level] <= $setup[dg]) {?> 
		    				 <a href=join.php> | Join</a>
		    	 	<? }?>
	  </table>
	  
  <div style='height=5'></div>
  

  <table width=<?= $setup[width] ?> border=0 cellpadding=4 cellspacing=1 bgcolor=#DCB9F7>
    <tr bgcolor=#F2DF73>
    	<td ><h5> no.
    	<td> <h5> Id. <a href=load.php?id=<?=$id?>&search_mode=<?=$search_mode?>&search_text=<?=$search_text?>&orderdir=9>A</a>
    					<a href=load.php?id=<?=$id?>&search_mode=<?=$search_mode?>&search_text=<?=$search_text?>&orderdir=10>Z</a>
    	<td  ><h5>Company <a href=load.php?id=<?=$id?>&search_mode=<?=$search_mode?>&search_text=<?=$search_text?>&orderdir=1>A</a>
    					<a href=load.php?id=<?=$id?>&search_mode=<?=$search_mode?>&search_text=<?=$search_text?>&orderdir=2>Z</a>
	<td ><h5>Phone
	<td ><h5>Name
	<td ><h5>RingBack <a href=load.php?id=<?=$id?>&search_mode=<?=$search_mode?>&search_text=<?=$search_text?>&orderdir=5>A</a>
    					<a href=load.php?id=<?=$id?>&search_mode=<?=$search_mode?>&search_text=<?=$search_text?>&orderdir=6>Z</a>

	<td><h5>Suburb <a href=load.php?id=<?=$id?>&search_mode=<?=$search_mode?>&search_text=<?=$search_text?>&orderdir=3>A</a>
    					<a href=load.php?id=<?=$id?>&search_mode=<?=$search_mode?>&search_text=<?=$search_text?>&orderdir=4>Z</a>
	<td ><h5>hit  <a href=load.php?id=<?=$id?>&search_mode=<?=$search_mode?>&search_text=<?=$search_text?>&orderdir=7>A</a>
    					<a href=load.php?id=<?=$id?>&search_mode=<?=$search_mode?>&search_text=<?=$search_text?>&orderdir=8>Z</a> 					
    					
    					
<?
    					
	$view_article = $setup[viewcount];
  	if(!$page)$page = 1;
	$start = ($page - 1)* $view_article;
	$cnt = $start;
	
	$href = "&id=$id&search_mode=$search_mode&search_text=$search_text&orderdir=$orderdir";
	if($orderdir == 1) {
 		$order =" order by company_name asc, regdate desc limit $start, $view_article";
 	} elseif($orderdir == 2) {
 		$order =" order by company_name desc, regdate desc limit $start, $view_article";
 	} elseif($orderdir == 3) {
 		$order =" order by suburb asc, regdate desc limit $start, $view_article";
	} elseif($orderdir == 4) {
		$order =" order by suburb desc, regdate desc limit $start, $view_article";
	} elseif($orderdir == 5) {
		$order =" order by ringbackdate asc, regdate desc limit $start, $view_article";	
	} elseif($orderdir == 6) {
		$order =" order by ringbackdate desc, regdate desc limit $start, $view_article";		
	} elseif($orderdir == 7) {
		$order =" order by hit asc, regdate desc limit $start, $view_article";		
	} elseif($orderdir == 8) {
		$order =" order by hit desc, regdate desc limit $start, $view_article";				
	} elseif($orderdir == 9) {
		$order =" order by no asc, regdate desc limit $start, $view_article";		
	} elseif($orderdir == 10) {
		$order =" order by no desc, regdate desc limit $start, $view_article";		
	} else {
		$order =" order by notice desc, regdate desc limit $start, $view_article";
	} 			
	
	$query  = "select * from atm_call_info ".$where.$order ;
	$result = mysql_query($query, $connect);
 	while($data = mysql_fetch_array($result)) {
?>

    <tr
      <? if($cnt%2 == 0) echo "bgcolor=#ff7fff";
      else echo "bgcolor=#eeeeee";
      ?>
    >
      <td>
      <? if($member[level] <= $setup[dg]) { ?> <input type=checkbox name=selno[] value='<?=$data[no]?>' > <? } ?>
      <? if($data[notice]) echo " Notice "; else 
    	      echo $total_article - $cnt ?>
    <td> <?=$data[no] ?>
    	<td> <? for($i=0; $i< $data[level];$i++) echo "&nbsp;&nbsp"; ?>
    	     <a href=view.php?no=<?=$data[no]?>&page=<?=$page?>&search_mode=<?=$search_mode?>&search_text=<?=$search_text?>&orderdir=<?=$orderdir ?>> <?=$data[company_name]?> </a>
    	     <? if($data[comments]){ ?> <span style='font-size:8pt'>[<?= $data[comments]?>] <? } ?>
    	     <? if(time() - $data[regdate] < 60*60*24) echo "<span style=font-size:8pt font-family:Tahoma; color:#ff0000> New</span>"; ?>
    	<td> <?= $data[phone] ?>
    	<td> <?= $data[title] ?> <?= $data[firstname] ?> <?= $data[lastname] ?>
    	<td> <?= $data[ringbackdate] ?>
    	<td> <?= $data[suburb] ?>
    	<td> <?= $data[hit] ?>
    	
    	
<? 
  $cnt++;
	}
?>

  </table>

<table width=<?= $setup[width]?> border=0 cellpadding=0 cellspacing=1 >
<tr>
  <td >
  <? include "page.php"; ?>
</tr>
</table>

<table width=<?= $setup[width]?> border=0 cellpadding=0 cellspacing=1 >
<form action=<?= $PHP_SELF?>>
  <input type=hidden name=id value='<?= $id?>'>
    <td> Search
    <select name=search_mode>
      <option value='1'>in company
      <option value='2'>in suburb
      <option value='3'>in memo 
      <option value='4'>in ringbackdate
      <option value='5'>company+suburb+memo+ringbackdate  
    </select>
  <input name=search_text size=30>
  <input type=submit value='Search'>
</form>
  
<form action=<?= $PHP_SELF?>>
  <td>
  <input type=hidden name=id value='<?=$id?>'>
  <input type=hidden name=search_mode value='0'>
  <input type=hidden name=search_text value=''>
  <input type=submit value='All view'>
</form>

 
   <? if($member[level] <= 1) { ?>
  <form action=del.php>
  <td>
  		<input type=hidden name=selno value= '<?=$selno?>'>
  		<input type=hidden name=page value='<?=$page?>'>
  		<input type=hidden name=search_mode value='<?=$search_mode?>'>
		<input type=hidden name=search_text value='<?=$search_text?>'>
 	 	<input type=submit value='Delete'>
  </form>
     
   <? } ?>
   <? if($member[level] <= $setup[wg]) { ?>
		  <form action=write.php>
			  <td>
			  <input type=hidden name=page value='<?=$page?>'>
			  <input type=hidden name=search_mode value='<?=$search_mode?>'>
			  <input type=hidden name=search_text value='<?=$search_text?>'>
			  <input type=submit value='New'>
		</form>
   
   <? } ?>
</table> 
</div>

<?
	mysql_close($connect);
?>    					