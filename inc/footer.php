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
<script src="../lib/bootstrap/js/jquery-3.3.1.min.js"></script>
    <script src="../lib/bootstrap/js/bootstrap.min.js"></script>
    <script src="../lib/sweet-alert/sweetalert.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script src="../lib/admin/js/adminlte.min.js"></script>
    <script src="../lib/datatables/datatables/jquery.dataTables.min.js"></script>
    <script src="../lib/datatables/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="../lib/datatables/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../lib/datatables/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="../dist/js/script.js"></script>
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
$("#insert").click(function(e) {
    if ($("#form-data")[0].checkValidity()) {
        e.preventDefault();
        $.ajax({
            url: "action.php",
            type: "POST",
            data: $("#form-data").serialize()+"&action=insert",
            success: function(response) {
                Swal.fire({
                  title: "User Added successfully",
                  type: "success"
                })
                $("#addModal").modal("hide");
                $("#form-data")[0].reset();
                getAllUsers();
                console.log("ok");

            }
        });
    }
});


// Edit user
$("body").on("click", ".editBtn", function(e){
  e.preventDefault();
  edit_id = $(this).attr('id');
  $.ajax({
    url: "action.php",
    type: "POST",
    data: {edit_id: edit_id},
    success: function(response){
      console.log(response);
      data = JSON.parse(response);
      $("#id").val(data.id);
      $("#name").val(data.name);
      $("#email").val(data.email);
      $("#password").val(data.password);
      $("#state").val(data.state);
      console.log(data);
    }
  });
});


// update ajax request
$("#update").click(function(e) {
    if ($("#edit-form-data")[0].checkValidity()) {
        e.preventDefault();
        $.ajax({
            url: "action.php",
            type: "POST",
            data: $("#edit-form-data").serialize()+"&action=update",
            success: function(response) {
                Swal.fire({
                  title: "User updated successfully",
                  type: "success"
                })
                $("#editModal").modal("hide");
                $("#edit-form-data")[0].reset();
                getAllUsers();
            }
        });
    }
});

// delete ajax request 
$("body").on("click", ".delBtn", function(e){
  e.preventDefault();
  var tr = $(this).closest('tr');
  del_id = $(this).attr('id');

  Swal.fire({
      title: 'Are you sure',
      text: "You won't be able to reverse this !",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      confirmButtonText: 'Yes, delete it !'
  }).then((result)=>{
    if(result.value){
      $.ajax({
        url: "action.php",
        type: "POST",
        data: {del_id:del_id},
        success: function(response){
          console.log(response);
          tr.css('background-color', '#ff6666');
          Swal.fire(
            'Deleted',
            'User deleted successfully !',
            'success'
          )
          getAllUsers();
        }
      });
    }
  });

  
});


});
</script>

</body>
