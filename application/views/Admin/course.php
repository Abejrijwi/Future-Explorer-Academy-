      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-th-list"></i>Course</h1>
          <p>Course Manage</p>
        </div>

        <ul class="app-breadcrumb breadcrumb side">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Manage Course</li>
          <li class="breadcrumb-item active"><a href="#">edit</a></li>
        </ul>
      </div>

      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
              Add Course
            </button>

                    <?php
                      if ($this->session->flashdata('registratio_suss')) {
                  ?>
                          <div id="successMessage" class="alert alert-success " role="alert">
                              <?php echo $this->session->flashdata('registratio_suss'); ?>
                          </div>                
                          <div class="clearfix"></div>
                  <?php
                       }
                  ?>


                  <?php
                      if ($this->session->flashdata('deletemessage_name')) {
                  ?>
                          <div id="deltMessage" class="alert alert-success " role="alert">
                              <?php echo $this->session->flashdata('deletemessage_name'); ?>
                          </div>                
                          <div class="clearfix"></div>
                  <?php
                       }
                  ?>





              <table class="table table-hover table-bordered" id="sampleTable">
                <thead>
                  <tr>
                    <th>SL No</th>
                    <th>Name</th>
                    <th>date</th>
                    <th>Duraction</th>
                    <th>Level</th>
                    <th>Campus</th>
                    <th>Fee</th>
                    <th class="text-center" >Action</th>
                  </tr>
                </thead>

        <?php
              $i= 1;
              foreach($course as $row)
        {?> 
                <tbody>
                  <tr>
                    <td><?php echo $i?></td>
                    
                    <td><?php echo $row->c_name ?></td>
                    <td><?php echo $row->s_date  ?></td>
                    <td><?php echo $row->c_duration ?></td>
                    <td><?php echo $row->c_level ?></td>
                    <td><?php echo $row->s_cmps  ?></td>
                    <td><?php echo $row->fee  ?></td>
                    

                    <td class="text-center"> 
                    <a href="" class="p-2"><i class="fa fa-eye fa-lg" aria-hidden="true"></i></a>
                    <a href="" class="p-2"><i class="fa fa-edit fa-lg"></i></a>
                    <!-- <a href='<?php echo site_url('Admin/delete_cont').'/'.$row->id ?>' onclick="return confirm('Do you really want to delete this records?')"><i class="fa fa-trash fa-lg"></i></a> -->
                    </td>
                  </tr>
                </tbody>
        <?php 
            $i++;
            }
        ?>  
              </table>
            </div>
          </div>
        </div>
      </div>
    </main>


<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Add Image</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
       <!-- Modal body -->
      <form method="POST" action="<?php echo site_url('Admin/course_add'); ?>" enctype="multipart/form-data">
        <div class="modal-body">

            <div class="form-group row">
              <label class="col-sm-2 col-form-label">Name</label>
              <div class="col-sm-10">
                  <input type="text" class="form-control" required="" name="name" id="name">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label">Date</label>
              <div class="col-sm-10">
                <input type="date" class="form-control" required="" name="date" id="date">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label">Duraction</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" required="" name="duraction" id="duraction">
              </div>
            </div>

            <div class="form-group row">
              <label class="col-sm-2 col-form-label">Level</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" required="" name="level" id="level">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label">Campus</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" required="" name="campus" id="campus">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label">fee</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" required="" name="fee" id="fee">

              </div>
            </div>
          <div class="modal-footer">
          <input type="submit" name="submit" value="Insert" class="btn btn-primary" >
        </div>
      </form>
    </div>
    </div>        
  </div>



<script>

 $(document).ready(function(){
    $("#successMessage").delay(2000).slideUp(200);
});


 $(document).ready(function(){
    $("#deltMessage").delay(2000).slideUp(200);
});
</script>



