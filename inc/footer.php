  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-block">
      By Ibrahim barrou
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy;2020 <a href="../index.php">PostFix_Admin</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->
<script src="lib/bootstrap/js/jquery-3.3.1.min.js"></script>
    <script src="lib/bootstrap/js/bootstrap.min.js"></script>
    <script src="lib/sweet-alert/sweetalert.min.js"></script>
    <script src="lib/admin/js/adminlte.min.js"></script>
    <script src="lib/datatables/datatables/jquery.dataTables.min.js"></script>
    <script src="lib/datatables/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="lib/datatables/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="lib/datatables/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="dist/js/script.js"></script>
<script>
  $(function () {

getAllUsers();

// get All user
function getAllUsers(){
  $.ajax({
    url : "action.php",
    type : "POST",
    data : {action: "view"},
    success : function(response){
      // console.log(reponse);
      $("#showUser").html(response);
      $("table").DataTable({
        order: [0, 'desc']
      });
    }
  });
}

// insert ajax request
$("insert").click(function (e) {
    if ($("#form-data")[0].checkValidity()) {
        e.preventDefault();
        $.ajax({
            url: "action.php",
            type: "POST",
            data: $("#form-data").serialize()+"&action=insert",
            success: function (response) {
                console.log(reponse);
            }
        });
    }
});

});
</script>

</body>
