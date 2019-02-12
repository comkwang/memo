<?
  include "lib.php";
  $connect = dbconnect();
  $setup = setup();
  head();
  left();
?>
<head>
  <link rel=Stylesheet href=style.css type=text/css>
</head>
<div id=mid>
<form action=comment_del_post.php methd=post>
<input type=hidden name = id value="<?= $id ?>">
<input type=hidden name = no value="<?= $no ?>">
<input type=hidden name = parent value="<?= $parent ?>">
<input type=password name=password>
<input type=submit value='Delete'>
</form>
</div>
<?
  right();
  foot();
?>