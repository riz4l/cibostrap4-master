<div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Export Data</li>
      </ol>
      <!-- Example DataTables Card-->
      <div class="card mn-3">
        <div class="card-header">
          <a href="<?php echo base_url()?>Export/excel_file" class="btn btn-success">
            <i class="fa fa-file-excel-o"></i> Export to Excel
          </a>
          <a href="<?php echo base_url()?>Export/pdf_file" class="btn btn-danger">
            <i class="fa fa-file-pdf-o"></i> Export to Pdf
          </a>
        </div>
        <div class="card-body">
          <form action="<?php echo base_url()?>export/excel_filter_jk" method="post" enctype="multipart/form-data">
            <div class="form-group">
              <label>Export Excel Filter By Jenis Kelamin</label>
              <select name="jenis_kelamin" class="form-control">
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
              </select>
            </div>
            <div class="form-group">
              <button class="btn btn-success" name="btn_filter"><i class="fa fa-file-excel-o"></i> Filter</button>
            </div>
          </form>
          <form action="<?php echo base_url()?>export/pdf_file" method="post" enctype="multipart/form-data">
            <div class="form-group">
              <label>Export Pdf Filter By Agama</label>
              <select name="agama" class="form-control">
               <?php foreach($agama as $data_agama){?>
                <option value="<?php echo $data_agama->agama_id?>"><?php echo $data_agama->agama;?></option>
               <?php }?>
              </select>
            </div>
            <div class="form-group">
              <button class="btn btn-danger" name="btn_filter_agama"><i class="fa fa-file-pdf-o"></i> Filter</button>
            </div>
          </form>
        </div>
      </div>
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Export data Example
        </div>
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
                  $no=0;
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