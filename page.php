<table width=100%  border=1 cellpadding=4 cellspacing=1>
<tr>
<td align="center">
<? 

// ���� ������ ����. ceil() �ø��Լ�  
$total_page   = ceil($total_article / $view_article);  

// ���� �������� ���� (1���� ���� ��� 1�� ����)  
$prev_page = $page - 1;  
if ($prev_page < 1) $prev_page = 1;  

// ���� �������� ���� (��ü�������� ������ ��ü������������ ����)  
$next_page = $page + 1;  
if ($next_page > $total_page) $next_page = $total_page;  

// ������ �ε����� ���۰� ���� ���� ����  
if ($page%10) $start_page = $page - $page%10 + 1;  
else          $start_page = $page - 9;  
$end_page = $start_page + 10;  

// ���� ������ �׷��� ����  
$prev_group = $start_page - 1;  
if ($prev_group < 1) $prev_group = 1;  

// ���� ������ �׷��� ����  
$next_group = $end_page;  
if ($next_group > $total_page) $next_group = $total_page;  

// ó�� ������, ���� ������ �׷�, ���� ������ ���  
// ���� ���� �������� 1�̶�� ��ũ ���� ���  
/* 
if ($page != 1)           echo "[<a href=$PHP_SELF?page=1$href>First</a>] ";  
else                      echo "[First] ";  
*/ 
if ($page != 1)           echo "[<a href=$PHP_SELF?page=$prev_group$href>��</a>] ";  
// else                      echo "[<<] ";  
/* 
if ($page != 1)           echo "[<a href=$PHP_SELF?page=$prev_page$href><</a>]";  
else                      echo "[ < ] ";  
*/ 
// ������ �ε����� ���� ���� ���  
for ($i=$start_page; $i<$end_page; $i++) {  
  if ($i>$total_page) break;  
  if ($i==$page) echo " <b>$i</b> ";  
  else           echo "[<a href=$PHP_SELF?page=$i$href>$i</a>] ";  
}  

/* 
// ���� ������, ���� ������ �׷�, ������ ������ ���  
if ($page != $total_page) echo "  [<a href=$PHP_SELF?page=$next_page$href>></a>]   ";  
else                      echo "  [>]   ";  
*/ 
if ($page != $total_page) echo "  [<a href=$PHP_SELF?page=$next_group$href>��</a>]   ";  
//else                      echo "  [>>]   ";  
/* 
if ($page != $total_page) echo "  [<a href=$PHP_SELF?page=$total_page$href>Last</a>]  ";  
else                      echo "  [Last]   ";  
*/ 
?>  
</td></td> </table>



