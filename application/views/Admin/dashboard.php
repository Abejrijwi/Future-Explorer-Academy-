  <main class="app-content">
    <div class="app-title">
      <div>
        <h1><i class="fa fa-th-list"></i>Dashboard</h1>
        <p>Dashboard Manage</p>
      </div>
      <ul class="app-breadcrumb breadcrumb side">
        <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
        <li class="breadcrumb-item">Dashboard</li>
        <li class="breadcrumb-item active"><a href="#">Edit</a></li>
      </ul>
    </div>

 <?php if (($_SESSION['logged_in']['utype'] == 1) || ($_SESSION['logged_in']['utype'] == 2)) { ?>

<div class="row">
  <div class="col-md-12">
    <div class="tile">
      <div class="tile-body">




        <!-- Boady Start -->
         <div class="row">
            <div class="col-4">
                <div class="card-body bg-primary">
                    <div class="row">
                      <div class="col-4 text-white"><i class="fas fa-address-book fa-7x"></i></div>
                      <div class="col-8">
                        <h2 class="text-white"> Total Registration</h2>
                        <h1> <?php  echo $this->db->count_all('user_reg'); ?></h1>
                      
                       
                      </div>
                    </div>                   
                  </div>
            </div>

            <div class="col-4">
                <div class="card-body bg-secondary">
                    <div class="row">
                      <div class="col-4 text-white"><i class="fas fa-book-reader fa-7x"></i></div>
                      <div class="col-8">
                        <h2 class="text-white"> Total Runing Courses</h2>
                         <h1> <?php  echo $this->db->count_all('courses'); ?></h1>
                      </div>
                    </div>                   
                  </div>
            </div>
            <div class="col-4">
                <div class="card-body bg-success">
                    <div class="row">
                      <div class="col-4 text-white"><i class="fas fa-user-graduate fa-7x"></i></div>
                      <div class="col-8">
                        <h2 class="text-white"> Total Student</h2>
                         <!-- <h2> <?php  echo $this->db->count_all('user_reg'); ?></h2> -->
                      </div>
                    </div>                   
                  </div>
              </div>
            </div> <br>

            <div class="row">
            <div class="col-4">
                <div class="card-body bg-danger">
                    <div class="row">
                      <div class="col-4 text-white"><i class="fas fa-user-lock fa-7x"></i></div>
                      <div class="col-8">
                        <h2 class="text-white"> Total Trainer</h2>
                        <h1> <?php  echo $this->db->count_all('trainer'); ?></h1>
                      </div>
                    </div>                   
                  </div>
            </div>


            <div class="col-4">
                <div class="card-body bg-warning">
                    <div class="row">
                      <div class="col-4 text-white"><i class="fas fa-book fa-7x"></i></div>
                      <div class="col-8">
                        <h2 class="text-white"> Total Feedback</h2>
                         <h1> <?php  echo $this->db->count_all('feedback'); ?></h1>
                      </div>
                    </div>                   
                  </div>
            </div>
            <div class="col-4">
                <div class="card-body bg-info">
                    <div class="row">
                      <div class="col-4 text-white"><i class="fas fa-graduation-cap fa-7x"></i></div>
                      <div class="col-8">
                        <h2 class="text-white"> Total Enquery</h2>
                         <h1> <?php  echo $this->db->count_all('contact_us'); ?></h1>
                      </div>
                    </div>                   
                  </div>
              </div>
            </div>        

        <!-- Boday End -->
 




      </div>
    </div>
  </div>
</div>
<!-- Row End -->
<?php } ?>



  </main>