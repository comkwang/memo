<meta http-equiv=Content-Type content=text/html; charset=euc-kr>
<link rel=Stylesheet href=style.css type=text/css>

<script language="javascript">

function checkCheckbox(frm, obj, num) {
   var str = obj.name;
   var len = frm.length;
 
   for(i=0; i<len; i++) 
    if (frm[i].name == str && frm[i].checked == true) 
              frm[i].checked = false;
    
    obj.checked = true;
}

function checkCheckbox2(frm,obj,num) {
  var str = obj.name;
  var len = frm.length;
  var chk = 0;
  

  for(i=0; i<len; i++) {
    if (frm[i].name == str && frm[i].checked == true) {
              chk++;
    }

    if (chk > num) {
      alert(num + "�� ���� ������ �� �ֽ��ϴ�.");
      obj.checked = false;
      break;
    }
  }
}
</script>



<form  name="plans" action="adslreg_post.php" method="post">
<table border="1" cellpadding="5" cellspacing="0"">
  <tr bgcolor="#CCCCCC">
  	<td colspan="8">1 ADSL2 + ��ǰ
  </tr>
  	<tr align="center">
    <td width="90">��ǰ</td>
	  <td width="80"><input type="checkbox" name="plan" value=1 onClick="checkCheckbox(this.form,this,1)">Xlite</td>
    <td width="80"><input type="checkbox" name="plan" value=2 onClick="checkCheckbox(this.form,this,1)">Light</td>
    <td width="80"><input type="checkbox" name="plan" value=3 onClick="checkCheckbox(this.form,this,1)">Medium</td>
    <td width="80"><input type="checkbox" name="plan" value=4 onClick="checkCheckbox(this.form,this,1)">Heavy</td>
    <td width="80"><input type="checkbox" name="plan" value=5 onClick="checkCheckbox(this.form,this,1)">Super 2</td>
    <td width="80"><input type="checkbox" name="plan" value=6 onClick="checkCheckbox(this.form,this,1)">30GB/VoIP</td>
	</tr>	 	
  <tr align="center">
    <td>�ſ��ݾ�</td>
    <td>$29.99<br>($59.99 cap)</td>
    <td>$39.99</td>
    <td>$49.99</td>
    <td>$59.99</td>
    <td>$69.99</td>
    <td>$49.99</td>
  </tr>
  <tr align="center">
    <td>�ӵ�</td>
    <td  colspan="6"><div align="center">ADSL2 + Speeds</div></td>
    
  </tr>
  <tr align="center">
    <td>�ٿ�ε�뷮</td>
    <td>600MB free,<br>then 15c/MB#</td>
    <td>6GB*<br>(3GB+3GB)</td>
	<td>25GB<br> (18GB+7GB)</td>
    <td>50GB*<br>(30GB+20GB)</td>
    <td>150GB<br>(40GB+110GB)</td>
    <td>30G*<br>(20GB+10GB)</td>
  </tr>
  <tr align="center">
    <td>���Ѽӵ�</td>
    <td>64/64</td>
    <td>64/64</td>
    <td>64/64</td>
    <td>64/64</td>
    <td>64/64</td>
    <td>128/128</td>
  </tr>
  <tr align="center">
    <td>���Ҽ���</td>
    <td>CC</td>
    <td>CC</td>
    <td>CC/DD</td>
    <td>CC/DD</td>
    <td>CC/DD</td>
    <td>CC</td>
  </tr>
  <tr align="center">
    <td>IP��巹��</td>
    <td>����</td>
    <td>����</td>
    <td>����</td>
    <td>����</td>
    <td>����</td>
    <td>����</td>
  </tr>
  <tr align="center">
    <td>Free VoIP Calls </td>
    <td>X</td>
    <td>X</td>
    <td>X</td>
    <td>X</td>
    <td>X</td>
    <td>O</td>
  </tr>
</table>
<br>

<div id="maintable">
<div class ="table1">
<table border="1" cellspacing="0">
  <tr bgcolor="#CCCCCC">
  	<td colspan="2">2. ��� �� ��ġ�� 	  </td>
  </tr>
  <tr align="center">
    <td width="100" height="24"><div align="center">���Ⱓ</div></td>
    <td width="80"><div align="center">��ġ��</div></td>
  </tr>
  <tr align="center">
    <td height="25" >
    <input type="checkbox" name="contract" value=1 onClick="checkCheckbox(this.form,this,1)">12���� ���</td>
    <td>$59.95</td>
  </tr>
  <tr align="center">
    <td height="25">
    <input type="checkbox" name="contract" value=2 onClick="checkCheckbox(this.form,this,1)">18���� ���</td>
    <td>$0</td>
  </tr>
</table>
</div>
<div class="table1">
<table width="375" border="1" cellspacing="0">
  <tr bgcolor="#CCCCCC">
  	<td colspan="2">3.��Ʈ�� ���</td>
  </tr>
  <tr align="center">
    <td width="280">��/�����</td>
    <td width="85">����</td>
  </tr>
  <tr align="center">
    <td align="left">
    <input type="checkbox" name="equipment" value=1 onClick="checkCheckbox(this.form,this,1)">1port ADSL </td>
    <td>$50</td>
  </tr>
  <tr align="center">
    <td align="left">
    <input type="checkbox" name="equipment" value=2 onClick="checkCheckbox(this.form,this,1)">4port ADSL/2 + Router </td>
    <td>$70</td>
  </tr>
  <tr align="center">
    <td align="left">
    <input type="checkbox" name="equipment" value=3 onClick="checkCheckbox(this.form,this,1)">Wireless 4port ADSL2 + Router</td>
    <td>$110</td>
  </tr>
  <tr align="center">
    <td align="left">
    <input type="checkbox" name="equipment" value=4 onClick="checkCheckbox(this.form,this,1)">Wireless 4port ADSL2 + Router With VOIP </td>
    <td>$110</td>
  </tr>
  <tr align="center">
  	<td align="left"> 
  	<input type="checkbox" name="equipment" value=5 onClick="checkCheckbox(this.form,this,1)">Bring Your Own Compatible Modem/Router</td>
	<td>N/A</td>
  </tr>
  
</table>
</div>
</div>
<br>

<div id="maintable">
<div  class="table1">
<table width="300" border="0" cellspacing="0">
	<tr>
	<td colspan="2" bgcolor="#CCCCCC">4.ADSL2 + ��ġ����</td>
	</tr>
  <tr>
    <td width="111">��ȭ��ȣ:</td>
    <td colspan="3">
    <input name=setup_tel type=text size="10" maxlength="10"></td>
    </tr>
  <tr>
    <td>�ּ�:</td>
    <td colspan="3">
    <input name=setup_address type=text size="50" maxlength="50"></td>
    </tr>
  <tr>
    <td>Suburb/Town:</td>
    <td colspan="3">
    <input type=text name=setup_suburb></td>
    </tr>
  <tr>
    <td>State:</td>
    <td width="209">
    <input name=setup_state type=text size="3" maxlength="3"></td>
    <td width="68">Post Code </td>
	  <td width="273">
	  <input name=setup_postcode type=text size="4" maxlength="4"></td>
  </tr>
  
</table>
</div>

<div class="table1">
<table width="300" border="0" cellspacing="0">
	<tr bgcolor="#CCCCCC"> 
		<td colspan="2">5. ADSL2 ��ġ�ּ�</td>
	</tr>
  <tr>
    <td width="111">Name:</td>
    <td width="297"><input name=setup_name type=text size="20" maxlength="20"></td>
    </tr>
  <tr>
    <td>Company:</td>
    <td><input name=setup_company type=text size="30" maxlength="30"></td>
    </tr>
  <tr>
    <td>Contact No.:</td>
    <td><input name=setup_contact type=text size="10" maxlength="10"></td>
    </tr>
  <tr>
    <td>Fax:</td>
    <td><input name=setup_fax type=text size="10" maxlength="10"></td>
    </tr>
  <tr>
    <td>Email:</td>
    <td><input name=setup_email type=text size="20" maxlength="20"></td>
    </tr>
</table>
</div>
</div>
<br>
<table width="300" border="0" cellspacing="0">
	<tr bgcolor="#CCCCCC">
	<td colspan="2" >6. ������ּ�</td>
	</tr>
  <tr>
    <td width="111">Delivery Address </td>
    <td width="290"><input type=text name=delv_address></td>
    </tr>
  <tr>
    <td>Suburb/Town</td>
    <td><input type=text name=delv_suburb></td>
    </tr>
  <tr>
    <td>State</td>
    <td><input name=delv_state type=text size="3" maxlength="3"></td>
    </tr>
</table>
<br>

<table width="469" border="1" cellspacing="0">
	<tr bgcolor="#CCCCCC">
	<td colspan="6"><input type="checkbox" >�ſ�ī��</td>
	</tr>
  <tr align="center">
    <td width="109">Card Type </td>
    <td colspan="4">	  
      <input type="checkbox" name=card_type value=1 onClick="checkCheckbox(this.form,this,1)">Visa
      <input type="checkbox" name=card_type value=2 onClick="checkCheckbox(this.form,this,1)">Master Card
      <input type="checkbox" name=card_type value=3 onClick="checkCheckbox(this.form,this,1)">American Express 
      <input type="checkbox" name=card_type value=4 onClick="checkCheckbox(this.form,this,1)">Diners Club</td>
    </tr>
  <tr align="center">
    <td  align="left">Card Number </td>
    <td colspan="4"><input type=text name=card_number></td>
    </tr>
  <tr align="center">
    <td  align="left">Name on Card </td>
    <td colspan="4"><input type=text name=card_name></td>
    </tr>
  <tr align="center">
    <td  align="left">Expire Date </td>
    <td width="98"><input type=text name=card_exp></td>
    <td width="102"  align="left">Verification Code </td>
    <td width="142" colspan="2"><input type=text name=card_verification></td>
	</tr>
  
</table>
<br>
<table width="418" border="0" cellspacing="0">
	<tr bgcolor="#CCCCCC">
	  <td colspan="2"><input type="checkbox">��ü����</td>
	</tr>
  <tr>
    <td width="142">Bank Name </td>
    <td width="272"><input type=text name=bank_name></td>
  </tr>
  <tr>
    <td>BSB Number </td>
    <td><input name=bank_bsb type=text size="6" maxlength="6"></td>
  </tr>
  <tr>
    <td>Branch</td>
    <td><input type=text name=bank_branch></td>
  </tr>
  <tr>
    <td>Account Holder's Name </td>
    <td><input name=bank_accname type=text size="20" maxlength="20"></td>
  </tr>
  <tr>
    <td>Account Number </td>
    <td><input name=bank_acc type=text size="9" maxlength="9"></td>
  </tr>
</table>
<br>
<table width="251" border="1" cellspacing="0">
	<tr bgcolor="#CCCCCC"><td colspan="2">8. Agreement</td>
	</tr>
  <tr>
    <td width="70">Signature</td>
    <td width="171"><input type=text name=agg_sign></td>
  </tr>
  <tr>
    <td>Name</td>
    <td><input type=text name=agg_name></td>
  </tr>
  <tr>
    <td>Date</td>
    <td><input type=text name=agg_date></td>
  </tr>
 </table>
 <br>
  <input  align="middle" type="submit" value="����ϱ�">
</form>

<form action="list.php">
<input type=submit value=���>
</form>
