<div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Datatable Standar</li>
      </ol>
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Data Table Standar Example</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>Tempat/Tanggal Lahir</th>
                  <th>Jenis Kelamin</th>
                  <th>Agama</th>
                  <th>No Telephone</th>
                  <th>Email</th>
                  <th>Alamat</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>Tempat/Tanggal Lahir</th>
                  <th>Jenis Kelamin</th>
                  <th>Agama</th>
                  <th>No Telephone</th>
                  <th>Email</th>
                  <th>Alamat</th>
                </tr>
              </tfoot>
              <tbody>
                <?php
                  $no = 0;
                  foreach($query as $row){
                  $no++;
                 ?>
                <tr>
                  <td><?php echo $no;?></td>
                  <td><?php echo $row->nama;?></td>
                  <td><?php echo $row->tempat_lahir.'/'.$row->tanggal_lahir;?></td>
                  <td><?php echo $row->jenis_kelamin;?></td>
                  <td><?php echo $row->agama;?></td>
                  <td><?php echo $row->no_telephone?></td>
                  <td><?php echo $row->email;?></td>
                  <td><?php echo $row->alamat;?></td>
                </tr>
                <?php 
                }
                ?>
              </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
      </div>
    </div>
</div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
