<?php include 'header.php'; ?>

<?php include 'list_pegawai.php'; ?>

<script type="text/javascript" src="template/jquery.js"></script>

<div class="belowribbon">
    <h1>
        Edit data pegawai
    </h1>
</div>

<div id="page">

    <div class="grid_6" style="width: 48%">
        <div class="module">
            <h2><span>Pilih pegawai</span></h2>
            <div class="module-body">

                <p id="list_filter_header">Klik nama pegawai yang akan diedit, atau cari pegawai: </p>

                <ul class="bullets" id="list_filter">
                <?php
                for ($j = 1; $j < count($pegawai); $j++) {

                    echo "<li><a href='#'>{$pegawai[$j]}</a></li>";

                } ?>
                </ul>

            </div>
        </div>
    </div>

</div>

<script type="text/javascript">

(function ($) {
  // custom css expression for a case-insensitive contains()
  jQuery.expr[':'].Contains = function(a,i,m){
      return (a.textContent || a.innerText || "").toUpperCase().indexOf(m[3].toUpperCase())>=0;
  };


  function listFilter(header, list) { // header is any element, list is an unordered list
    // create and add the filter form to the header
    var form = $("<form>").attr({"class":"filterform","action":"#","style":"display:inline"}),
        input = $("<input>").attr({"class":"filterinput input-short","type":"text"});
    $(form).append(input).appendTo(header);

    $(input)
      .change( function () {
        var filter = $(this).val();
        if(filter) {
          // this finds all links in a list that contain the input,
          // and hide the ones not containing the input while showing the ones that do
          $(list).find("a:not(:Contains(" + filter + "))").parent().slideUp('fast');
          $(list).find("a:Contains(" + filter + ")").parent().slideDown('fast');
        } else {
          $(list).find("li").slideDown('fast');
        }
        return false;
      })
    .keyup( function () {
        // fire the above change event after every letter
        $(this).change();
    });
  }


  //ondomready
  $(function () {
    listFilter($("#list_filter_header"), $("#list_filter"));
  });
}(jQuery));


</script>

<?php include 'footer.php'; ?>