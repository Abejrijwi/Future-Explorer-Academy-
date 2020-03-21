<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<div class="container">
      <button type="button" class="btn btn-outline-primary">.Net</button>
      <button type="button" class="btn btn-outline-secondary">Python</button>
      <button type="button" class="btn btn-outline-success">Vb</button>
      <button type="button" class="btn btn-outline-danger">Php</button>
      <button type="button" class="btn btn-outline-warning">Java</button>
      <button type="button" class="btn btn-outline-info">ML</button>
      <button type="button" class="btn btn-outline-primary">IOT</button>
      <button type="button" class="btn btn-outline-secondary">Android</button>
      <br><br>
        
  <div class="form-group row"><br>
    <label class="col-sm-3 col-form-label">Search Project</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="search_tbl" placeholder="Search">
    </div>
  </div>
    <table class="table table-bordered table-hover">
        <thead class="bg-danger">
          <tr>
            <th scope="col" class="text-white">SI No</th>
            <th scope="col"class="text-white">Project Name</th>
            <th scope="col"class="text-white">Technology</th>
            <th scope="col"class="text-white">Backend</th>
            <th scope="col"class="text-white">FrontEnd</th>
            <th scope="col"class="text-white">Download</th>
          </tr>
        </thead>
        <?php
              $i= 1;
              foreach($project as $row)
        {?>  
        <tbody id="myTable">
          <tr class="text-muted">
            <th scope="row"><?php echo $i?></th>
            <th scope="row"><?php echo $row->projectname?></th>
            <th scope="row"><?php echo $row->technology ?></th>
            <th scope="row"><?php echo $row->backend?></th>
            <th scope="row"><?php echo $row->frontend ?></th>
            <th scope="row"><a style="color:red;" target="_blank" href="<?php echo base_url('public/uploads/pdf/' . $row->uplode_file);?>"><i class="fas fa-download fa-lg"></i></a>
            </a></th>
          </tr>
        </tbody>
        <?php 
            $i++;
            }
        ?>  
    </table>
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
</script>