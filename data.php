<?php

if (trim($_POST['name']) == '') {
       $error[] = '- Nama harus diisi!';
}
if (trim($_POST['email']) == '') {
       $error[] = '- Email harus diisi!';
}
if (trim($_POST['message']) == '') {
       $error[] = '- Isi pesan!';
}


if (isset($error)) {
       echo '<b>Error</b>: <br />'.implode('<br />', $error);
} else {


       $data = '';
       foreach ($_POST as $k => $v) {
              $data .= "$k : $v<br />";
       }

       echo '<b>Form berhasil disubmit. Berikut ini data yang telah anda isi :</b><br />';
       echo $data;
}
die();
?>