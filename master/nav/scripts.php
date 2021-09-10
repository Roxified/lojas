    <!-- Optional JavaScript -->
    <!-- jquery 3.3.1 -->
    <script src="assets/sweetalert.min.js"></script>
    <script src="assets/vanila_del_prompt.js"></script>

    <script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <script src="assets/vendor/multi-select/js/jquery.multi-select.js"></script>
    <script src="assets/libs/js/main-js.js"></script>
    <script src="assets/vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="assets/vendor/datatables/js/jszip.min.js"></script>
    <script src="assets/vendor/datatables/js/pdfmake.min.js"></script>
    <script src="assets/vendor/datatables/js/vfs_fonts.js"></script>
    <script src="assets/vendor/datatables/js/buttons.html5.min.js"></script>
    <script src="assets/vendor/datatables/js/buttons.print.min.js"></script>
    <script src="assets/vendor/datatables/js/buttons.colVis.min.js"></script>
    <script src="assets/vendor/datatables/js/dataTables.rowGroup.min.js"></script>
    <script src="assets/vendor/datatables/js/dataTables.select.min.js"></script>
    <script src="assets/vendor/datatables/js/dataTables.fixedHeader.min.js"></script>
    <script src="assets/vendor/datatables/js/dataTables.buttons.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <script src="assets/vendor/multi-select/js/jquery.multi-select.js"></script>
    <script src="assets/libs/js/main-js.js"></script>
    <script src="assets/vendor/datatables/js/dataTables.bootstrap4.min.js"></script>
    <script src="assets/vendor/datatables/js/buttons.bootstrap4.min.js"></script>
    <script src="assets/vendor/datatables/js/data-table.js"></script>
    <!-- <script src="../assets/vendor/fonts/"></script> -->


    <script>

        $('#state').on('change',function () {
    //alert('Changed');
    var get_id =  $(this).find('option:selected').attr('id');
    //alert(get_id);
    get_country  = $("#country").val();
    // alert(get_id + get_country);
    if(get_country=='Nigeria'){
        $.ajax({url: 'get_state', type: 'POST',data: {stateIdLGA: get_id},success: function (result) {
            $('#lga').html(result); }  });
    }
})

        $("#country").on('change', function () {
          var getId =  $(this).find('option:selected').attr('id'); getValue = $(this).val(); 
  if(getValue=='Nigeria'){ //$('#postal').hide();
  // $('.stretch').removeClass('col-md-6');    $('.stretch').addClass('col-md-12');
  $.ajax({url: 'get_state', type: 'POST',data: {stateIdN: getId},success: function (result) {
    $('#state').html(result);
    // alert(result);
}  });

}else{
    $('#lga').remove();
    $.ajax({url: 'get_state', type: 'POST',data: {stateId: getId},success: function (result) {
        $('#state').html(result);
    // alert(result);

}

});
}


});




        $("#ppstate").on('change', function () {
          var getId =  $(this).find('option:selected').attr('id'); getValue = $(this).val(); 
   //$('#postal').hide();
   //alert(getValue);
  // $('.stretch').removeClass('col-md-6');    $('.stretch').addClass('col-md-12');
  $.ajax({url: 'get_state', type: 'POST',data: {stateIdLGA: getId},success: function (result) {
    $('#pplga').html(result);
    // alert(result);
}  });




});
</script>

<script>
                // Replace the <textarea id="editor1"> with a CKEditor 4
                // instance, using default configuration.
                CKEDITOR.replace( 'editor1' );
                CKEDITOR.replace( 'editor2' );

            </script>

