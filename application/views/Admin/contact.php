    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-th-list"></i>Contact Us</h1>
          <p>Contact Us Manage</p>
        </div>
        <ul class="app-breadcrumb breadcrumb side">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Contact</li>
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
                    <th>Email</th>
                    <th>Mobile No</th>
                    <th>Subject</th>
                    <th>Message</th>
                    <th>Date</th>
                    <th class="text-center" >Action</th>
                  </tr>
                </thead>

        <?php
              $i= 1;
              foreach($contact as $row)
        {?> 
                <tbody>
                  <tr>
                    <td><?php echo $i?></td>
                    <td><?php echo $row->name ?></td>
                    <td><?php echo $row->email?></</td>
                    <td><?php echo $row->mobi_no?></td>
                    <td><?php echo $row->subject?></td>
                    <td><?php echo $row->message  ?></td>
                    <td><?php echo $row->date  ?></td>
                    <td class="text-center"> 
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


      