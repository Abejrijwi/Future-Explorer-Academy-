      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-th-list"></i>Question</h1>
          <p>Previous Year Question Manage</p>
        </div>

        <ul class="app-breadcrumb breadcrumb side">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Manage Que & Ans</li>
          <li class="breadcrumb-item active"><a href="#">edit</a></li>
        </ul>
      </div>

      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <?php if (($_SESSION['logged_in']['utype'] == 1) || ($_SESSION['logged_in']['utype'] == 2)) { ?>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
              Add Question
            </button>
            <?php } ?>

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



              <table class="table table-hover table-bordered" id="sampleTable">
                <thead>
                  <tr>
                    <th>SL No</th>
                    <th>Courses</th>
                    <th>File Name</th>
                    <th>Year</th>
                    <th>part</th>
                    <th>Date</th>
                    <?php if (($_SESSION['logged_in']['utype'] == 1) || ($_SESSION['logged_in']['utype'] == 2)) { ?>
                    <th class="text-center" >Action</th>
                    <?php } ?>
                  </tr>
                </thead>

        <?php
              $i= 1;
              foreach($question as $row)
        {?> 
                <tbody>
                  <tr>
                    <td><?php echo $i?></td>
                    <td><?php echo $row->course ?></td>
                    <td><a style="color:red;" target="_blank" href="<?php echo base_url('public/uploads/pdf/' . $row->uplode_file);?>"><?php echo $row->uplode_file?> <i class="fas fa-download fa-lg"></i></a>
                    </td>
                    <td><?php echo $row->course_year?></td>
                    <td><?php echo $row->course_part?></td>
                    <td><?php echo $row->upload_date  ?></td>

                    <?php if (($_SESSION['logged_in']['utype'] == 1) || ($_SESSION['logged_in']['utype'] == 2)) { ?>
                    <td class="text-center"> 
                    <a href="" class="p-2"><i class="fa fa-eye fa-lg" aria-hidden="true"></i></a>
                    <a href="" class="p-2"><i class="fa fa-edit fa-lg"></i></a>
                    <a href="" class=""><i class="fa fa-trash fa-lg"></i></a>
                    </td>
                     <?php } ?>
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
        <h5 class="modal-title" id="exampleModalLongTitle">Add Previes Question Paper</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
       <!-- Modal body -->
      <form method="POST" action="<?php echo site_url('Admin/question_uplode'); ?>" enctype="multipart/form-data">
        <div class="modal-body">

            <div class="form-group row">
              <label class="col-sm-2 col-form-label">Course</label>
              <div class="col-sm-10">
                  <input type="text" class="form-control" required="" name="course" id="course">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label">Year</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" required="" name="course_year" id="course_year">
              </div>
            </div>

            <div class="form-group row">
              <label class="col-sm-2 col-form-label">Part</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" required="" name="course_part" id="course_part">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label">File Uplode</label>
              <div class="col-sm-10">
                <input type="file" class="form-control" required="" name="uplode_file" id="uplode_file">

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
</script>



