<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" >
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" ></script>
<div class="container">
      <div class="form-group row">
    <label class="col-sm-3 col-form-label">Search Previous Year Question</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="search_tbl" placeholder="Search">
    </div>
  </div>
    <table class="table table-bordered table-hover">
        <thead class="bg-info text-white">
          <tr>
            <th scope="col">SI No</th>
            <th scope="col">Courses</th>
            <th scope="col">Part</th>
            <th scope="col">Year</th>
            <th scope="col">Download</th>
          </tr>
        </thead>
        <?php
              $i= 1;
                foreach ($result as $row)
        {?>  
        <tbody id="myTable">
          <tr class="text-muted">
            <th scope="row"><?php echo $i?></th>
            <th scope="row"><?php echo $row->course ?></th>
            <th scope="row"><?php echo $row->course_part?></th>
            <th scope="row"><?php echo $row->course_year?></th>
            <th scope="row"><a style="color:red;" target="_blank" href="<?php echo base_url('public/uploads/pdf/' . $row->uplode_file);?>"><i class="fas fa-download fa-lg"></i></a>
            </a></th>
            </a></th>
          </tr>
        </tbody>
        <?php 
            $i++;
            }
        ?>  
    </table>
    <?php echo $Links; ?>
</div>
</div><!--//wrapper-->
<script>
$(document).ready(function(){
  $("#search_tbl").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>0