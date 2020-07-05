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
              <input type="text" name="fullname" id="fullname" class="form-control mb-2" placeholder="Fullname" required aria-describedby="helpId">
              <input type="text" name="phone" id="phone" class="form-control mb-2" placeholder="phone" required aria-describedby="helpId">
              <input type="email" name="email" id="email" class="form-control mb-2" placeholder="email" required aria-describedby="helpId">
              <input type="password" name="password" id="password" class="form-control" placeholder="password" required aria-describedby="helpId">
              <!-- <input type="text" name="etat" id="etat" class="form-control" placeholder="etat" required aria-describedby="helpId"> -->
            </div>
            <div class="form-group">
              <input type="submit" name="insert" id="insert" value="Add user" class="btn btn-danger btn-block">
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