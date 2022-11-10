<!DOCTYPE html>
<html>
<?php $this->load->view("partial/head.php") ?>
<form action="#" method="POST" name="form-ganti-password" enctype="multipart/form-data">
    <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr height="56" align="center">
            <td><font size="2" color="FFA800"><b>FORM GANTI PASSWORD PHP</b></font></td>
        </tr>
    </table>
    <table width="75%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr height="36">
            <td width="25%">Username</td>
            <td width="75%"><b><?=$username?><input type="hidden" name="username" id="username" value="<?=$username?>"></b></td>
        </tr>
        <tr height="36">
            <td>Password Lama</td>
            <td><input type="password" name="password_lama" id="password_lama" size="30" maxlength="20"></td>
        </tr>
        <tr height="36">
            <td>Password Baru</td>
            <td><input type="password" name="password_baru" id="password_baru" size="30" maxlength="20"></td>
        </tr>
        <tr height="36">
            <td>Konfirm Password Baru</td>
            <td><input type="password" name="konf_password" id="konf_password" size="30" maxlength="20"></td>
        </tr>
        <tr height="56">
            <td> </td>
            <td><input type="submit" name="Ganti" value="Ganti"></td>
        </tr>
    </table>
</form>

<?php $this->load->view("partial/foot.php") ?>
</html>