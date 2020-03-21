    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-th-list"></i>User Status</h1>
          <p>Login Status</p>
        </div>
        <ul class="app-breadcrumb breadcrumb side">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">User Login</li>
          <li class="breadcrumb-item active"><a href="#">Edit</a></li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
                <h4>User Status Information</h4><br>
              <table class="table table-hover table-bordered" id="sampleTable">
                  <!-- User Logint Information Details -->
                <thead>
                  <tr>
                    <th>SL No</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Last Login</th>
                    <th >Status</th>
                    <th>Action</th>
                  </tr>
                </thead>

        <?php
              $i= 1;
              foreach($user_status as $row)
        {?> 
                <tbody>
                  <tr>
                    <td><?php echo $i?></td>
                    <td><?php echo $row->first_name ?></td>
                    <td><?php echo $row->last_name?></td>
                    <td><?php echo $row->email?></</td>
                    <td><?php echo $row->last_login?></</td>
                    <td>
                        <?php
                            if ($row->status== 1) {
                        ?>
                                <p class="app-sidebar__user-designation m-2 text-success"><i class="fas fa-certificate text-success m-2"></i>Online </p>
                        
                      <?php } ?>
                      
                      <?php
                            if ($row->status== 0) {
                        ?>
                                <p class="app-sidebar__user-designation m-2 text-danger"><i class="fas fa-certificate text-danger m-2"></i>Offline </p>
                        
                      <?php } ?>
                      
                    </td>

                    <td class="text-center p-2"> 
                    <a href="" class="p-2"><i class="fa fa-eye fa-lg" aria-hidden="true"></i></a>
                    <a href="" class="p-2"><i class="fa fa-edit fa-lg"></i></a>
                    <a href="" class=""><i class="fa fa-trash fa-lg"></i></a>
                    </td>
                  </tr>
                </tbody>
        <?php 
            $i++;
            }
        ?>  
        
             </table><br>
             <!-- EndUser Logint Information Details -->
            <h4>User Hit Information</h4><br>
            <!-- Total Hit Information Details -->
            <table class="table table-hover table-bordered" id="sampleTable">
                <thead>
                  <tr>
                    <th>SL No</th>
                    <th>Browser Name</th>
                    <th>B. Version</th>
                    <th>OS</th>
                    <th>ip</th>
                    <th>Time</th>
                    <th>Action</th>
                  </tr>
                </thead>

                <?php
                      $i= 1;
                      foreach($hit_information as $row)
                {?> 
                <tbody>
                  <tr>
                    <td><?php echo $i?></td>
                    <td><?php echo $row->browser ?></td>
                    <td><?php echo $row->browser_version?></td>
                    <td><?php echo $row->os?></</td>
                    <td><?php echo $row->ip_address?></</td>
                    <td><?php echo $row->time?></</td>                   
                    <td class="text-center p-2"> 
                    <a href="" class="p-2"><i class="fa fa-eye fa-lg" aria-hidden="true"></i></a>
                    <a href="" class="p-2"><i class="fa fa-edit fa-lg"></i></a>
                    <a href="" class=""><i class="fa fa-trash fa-lg"></i></a>
                    </td>
                  </tr>
                </tbody>
        <?php 
            $i++;
            }
        ?>  

            <!-- End Hit Info Information Details -->
        
              </table>
            </div>
          </div>
        </div>
      </div>
    </main>


      