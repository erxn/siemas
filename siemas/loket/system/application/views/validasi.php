<?php $this->load->view('header')?>
<link type="text/css" rel="Stylesheet" href="css/validity/jquery.validity.css" />

<script type="text/javascript" src="js/jquery.validity.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $(function() {
            //              $("#form_kk").validity("input:text, select");
            $("#validasi").validity(function() {
                $("#nama").require();
            });
        });
    });
</script>
<br/>
<form id="validasi" method="post">
    Nama : <input id="nama" name="nama" class="input-medium" type="text"/>
    Jurusan: <input id="jurusan" name="jurusan"  class="input-medium" type="text"/><br/>
    <input name="submit" type="submit" value="Submit"/>
</form>
