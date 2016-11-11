<?php
function checkmail($str) {
  $valid = "^[^\.\$_\'\"<>].+[^\.\$_\'\"|[:space:]<>]@[^\.\$_\'\"|[:space:]<>].+\..+[^\.\$_\'\"<>]$";
  if (eregi($valid, $str)) {
    echo "<td><b>$str</b> [ รูปแบบ ถูกต้อง ]<br>";
  }
  else {
    echo "<b>$str</b> [ มีรูปแบบของ e-mail<b>ไม่</b>ถูกต้อง ]<br>";
  }
}
$mail[0] = "\"_ongarge@chaiyo.com";
$mail[1] = "\$sarayut@localhost.com";
$mail[2] = "sarayut.@localhost.com";
$mail[3] = "sarayut_domain>@localhost.com";
$mail[4] = "sarayut@localhost.com";
$mail[5] = "sarayut_ext.domain@localhost.com";
for ($i=0; $i<=5; $i++) {
  checkmail($mail[$i]);
}
?>
