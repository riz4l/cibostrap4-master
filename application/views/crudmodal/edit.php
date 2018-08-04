<div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Ajax Crud User</li>
      </ol>
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Form Edit User</div>
        <div class="card-body">
          <div id="message">
                    
          </div>
          <form id="form" name="form1" method="post" enctype="multipart/form-data" action="#">
            <div class="form-group">
                <label>Nama</label>
                 <input type="hidden" class="form-control" name="user_id" value="<?php echo $get_data->user_id;?>">
                <input type="text" class="form-control" name="nama" value="<?php echo $get_data->nama;?>">
            </div>
            <div class="form-group">
                <label>Tempat Lahir</label>
                <input type="text" class="form-control" name="tempat_lahir" value="<?php echo $get_data->tempat_lahir;?>">
            </div>
            <div class="form-group">
                <label>Tanggal Lahir</label>
                 <input type="text" name="tanggal_lahir" value="<?php echo $get_data->tanggal_lahir?>" class="form-control datetimepicker-input" id="datetimepicker1" data-toggle="datetimepicker" data-target="#datetimepicker1"/>
            </div>
            <div class="form-group">
              <label>Jenis Kelamin : </label>
              <label>
                <input type="radio" <?php if($get_data->jenis_kelamin=="Laki-laki"){?> checked="checked" <?php } ?> name="jenis_kelamin" id="" value="Laki-laki" >
                    Laki-laki
                    </label>
                <label>
                <input type="radio"  <?php if($get_data->jenis_kelamin=="Perempuan"){?> checked="checked" <?php } ?> name="jenis_kelamin" id="" value="Perempuan" >
                    Perempuan
                </label>
            </div>
            <div class="form-group">
                <label>Agama</label>
                <select name="agama_id" class="form-control">
                  <?php foreach($agama as $data_agama){?>
                  <option <?php if($get_data->agama_id==$data_agama->agama_id){?> selected="selected" <?php } ?> value="<?php echo $data_agama->agama_id?>"><?php echo $data_agama->agama;?></option>
                <?php } ?>
                </select>
            </div>
            <div class="form-group">
                <label>No Telephone</label>
                <input type="text" class="form-control" value="<?php echo $get_data->no_telephone;?>" name="no_telephone">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="text" class="form-control" name="email" value="<?php echo $get_data->email;?>">
            </div>
            <div class="form-group">
                <label>Alamat</label>
                <textarea name="alamat" class="form-control"><?php echo $get_data->alamat;?></textarea>
            </div>
            <div class="form-group">
              <button type="button" id="btnSave" onclick="update()" class="btn btn-success">
                  <span class="glyphicon glyphicon-floppy-disk"></span> Simpan
              </button>
            </div>
          </form>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
      
      </div>
    </div>
</div>
<!-- /.container-fluid-->
<!-- /.content-wrapper-->
<footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © Your Website 2018 <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.html">Logout</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url('assets/jquery/jquery.min.js')?>"></script>
    <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.bundle.min.js')?>"></script>
     <!-- Bootstrap Datetimepicker javascript-->
    <script src="<?php echo base_url()?>assets/bootstrap-datetimepicker/js/moment.js"></script>
    <script src="<?php echo base_url()?>assets/bootstrap-datetimepicker/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url('assets/jquery-easing/jquery.easing.min.js')?>"></script>
    <script src="<?php echo base_url('assets/datatables/jquery.dataTables.js')?>"></script>
    <script src="<?php echo base_url('assets/datatables/dataTables.bootstrap4.js')?>"></script>
    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url('assets/js/sb-admin.min.js')?>"></script>
    <!-- Custom scripts for this page-->
    <script src="<?php echo base_url('assets/js/sb-admin-datatables.min.js')?>"></script>
  </div>
</body>

</html>

<script type="text/javascript">

var save_method; //for save method string

$(document).ready(function() {

    //set input/textarea/select event when change value, remove class error and remove text help block 
    $("input").change(function(){
        $(this).parent().removeClass('has-error');
        $(this).next().empty();
    });
    $("textarea").change(function(){
        $(this).parent().removeClass('has-error');
        $(this).next().empty();
    });
    $("select").change(function(){
        $(this).parent().removeClass('has-error');
        $(this).next().empty();
    });

    bootstrap_alert = function() {}
            bootstrap_alert.success = function(message) {
            $('#message').html('<div class="alert alert-success"><a class="close" data-dismiss="alert">×</a><span>'+message+'</span></div>')
    }

    // datepicker
    $(function () {
    $('#datetimepicker1').datetimepicker({
         format: 'YYYY-MM-DD',
      });
    });

});

function reset_form()
{
    $('#form').each(function(){
        this.reset();
    }); //reload datatable ajax 
}


function update()
{
   $('#btnSave').text('updating...'); //change button text
    $('#btnSave').attr('disabled',true); //set button disable 
    var url;

    url = "<?php echo site_url('user_management/ajax_update')?>";
    // ajax adding data to database
    var formData = new FormData($('#form')[0]);
    $.ajax({
        url : url,
        type: "POST",
        data: formData,
        contentType: false,
        processData: false,
        dataType: "JSON",
        success: function(data)
        {

            if(data.status) //if success close modal and reload ajax table
            {
                bootstrap_alert.success('Data Berhasil diUpdate');
            }
            else
            {
                for (var i = 0; i < data.inputerror.length; i++) 
                {
                    $('[name="'+data.inputerror[i]+'"]').parent().addClass('has-error'); //select parent twice to select div form-group class and add has-error class
                    $('[name="'+data.inputerror[i]+'"]').next().text(data.error_string[i]); //select span help-block class set text error string
                }
            }
            $('#btnSave').text('update'); //change button text
            $('#btnSave').attr('disabled',false); //set button enable 


        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error adding / update data');
            $('#btnSave').text('update'); //change button text
            $('#btnSave').attr('disabled',false); //set button enable 

        }
    });
}

</script>