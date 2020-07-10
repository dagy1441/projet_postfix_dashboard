<!-- Add new user Modal -->
<div class="modal fade" id="addModal">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Add new user</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <form action="" method="post" id="form-data">

            <div class="form-group">
              <input type="text" name="name"  class="form-control" placeholder="full name" required >
            </div> 

            <div class="form-group">
              <input type="email" name="email"  class="form-control" placeholder="email" >
            </div> 

            <div class="form-group">
              <input type="password" name="password"  class="form-control" placeholder="password" >
            </div> 

            <div class="form-group">
              <input type="text" name="state" class="form-control" placeholder="etat">
            </div> 

            <div class="form-group">
              <input type="submit" name="insert" id="insert" value="Add user" class="btn btn-danger btn-block">
            </div>

          </form>
        </div>
        
      </div>
    </div>
  </div>




<!-- Edit user Modal -->
<div class="modal fade" id="editModal">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Edit user</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <form action="" method="post" id="edit-form-data">
            <div class="form-group">
              <input type="hidden" name="id" id="id" class="form-control">
            </div> 

            <div class="form-group">
              <input type="text" name="name" id="name" class="form-control"  required>
            </div>

            <div class="form-group">
              <input type="email" name="email" id="email" class="form-control"  required>
            </div>

            <div class="form-group">
              <input type="password" name="password" id="password" class="form-control">
            </div>

            <div class="form-group">
              <input type="text" name="state" id="state" class="form-control" required>
            </div>

            <div class="form-group">
              <input type="submit" name="update" id="update" value="update" class="btn btn-primary btn-block">
            </div>

          </form>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>