    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-th-list"></i>Feedback</h1>
          <p>Feedback Manage</p>
        </div>
        <ul class="app-breadcrumb breadcrumb side">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Feedback</li>
          <li class="breadcrumb-item active"><a href="#">Edit</a></li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <table class="table table-hover table-bordered" id="sampleTable">
                <thead>
                  <tr>
                    <th>SL No</th>
                    <th>Name</th>
                    <th>Date</th>
                    <th>Message</th>
                    <th class="text-center" >Action</th>
                  </tr>
                </thead>

        <?php
              $i= 1;
              foreach($feedback as $row)
        {?> 
                <tbody>
                  <tr>
                    <td><?php echo $i?></td>
                    <td><?php echo $row->name ?></td>
                    <td><?php echo $row->date?></td>
                    <td><?php echo $row->message?></</td>
                    
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
              </table>
            </div>
          </div>
        </div>
      </div>
    </main>