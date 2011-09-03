<?php $this->load->view('header') ?>

<form action="" method="post">

<div class="belowribbon">
    <h1>
        Ganti password
        <input type="submit" class="submit-green" value="Simpan" style="margin-left: 10px" name="submit"/>
    </h1>
</div>

<div id="page">

    <div class="grid_6" style="width: 48%">

        <?php if(isset($saved)) : ?>
        <div class="notification n-success">
            Nama dan password baru telah disimpan
        </div>
        <?php else : ?>

        <div class="module">
            <h2><span>Masukkan informasi akun</span></h2>
            <div class="module-table-body">
                <table width="100%" border="0">
                    <thead>
                        <tr>
                            <th width="40%"></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Password saat ini (<strong>harus benar</strong>)</td>
                            <td><input type="password" name="password" class="input-long" id="password"/></td>
                        </tr>
                    </tbody>
                    <thead>
                        <tr>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Nama baru</td>
                            <td><input type="text" name="new_username" class="input-long" value="<?php echo $username; ?>"/></td>
                        </tr>
                        <tr>
                            <td>Password baru</td>
                            <td><input type="text" name="new_password" class="input-long"/></td>
                        </tr>
                    </tbody>
                </table>

            </div>
        </div>

        <?php endif; ?>
    </div>
</div>

</form>

<?php if(isset($login_error) && $login_error == true) : ?>
<script type="text/javascript">
$(document).ready(function(){
    alert("Password saat ini salah!");
    $('#password').focus();
})
</script>
<?php endif; ?>

<?php $this->load->view('footer') ?>