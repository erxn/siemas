<link type="text/css" rel="Stylesheet" href="css/validity/jquery.validity.css" />

<script type="text/javascript" src="js/jquery.validity.js">

$(document).ready(function() {
           $(function() {
//              $("#form_kk").validity("input:text, select");
                $("#validasi").validity(function() {
                        $("#nama").require();
});
            });
});
</script>
<form id="validasi" method="post">
    Nama : <input id="nama" name="nama" type="text"/>
    Jurusan: <input id="jurusan" name="jurusan" type="text"/>
    <input name="submit" type="submit" value="Submit"/>
</form>