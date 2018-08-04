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
          <i class="fa fa-table"></i> Data Table Serverside Example
          <a style="float:right;" href="#" onclick="add()" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Tambah</a>
        </div>
        <div class="card-body">
          <div id="message">
          <!-- Message Here -->
          </div>
          <div class="table-responsive">
            <table class="table table-bordered" id="table" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Nama</th>
                  <th>Tempat/Tanggal Lahir</th>
                  <th>Jenis Kelamin</th>
                  <th>Agama</th>
                  <th>No Telephone</th>
                  <th>Email</th>
                  <th>Alamat</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>Nama</th>
                  <th>Tempat/Tanggal Lahir</th>
                  <th>Jenis Kelamin</th>
                  <th>Agama</th>
                  <th>No Telephone</th>
                  <th>Email</th>
                  <th>Alamat</th>
                  <th>Action</th>
                </tr>
              </tfoot>
              <tbody>
              </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>

        <!-- Modal For Detail -->
            <div class="modal fade" id="modal_detail" tabindex="-1" role="dialog">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title">Detail : <span class="title"></span></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <div class="content"></div>
                    <p></p>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>
        <!-- END MODAL  -->

        <!-- Modal For Form -->
            <div class="modal fade" id="modal_form" role="dialog">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title">Form User</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body form">
                     <form id="form" name="form1" method="post" enctype="multipart/form-data" action="#">
                      <div class="form-group">
                          <label>Nama</label>
                          <input type="hidden" class="form-control" name="user_id">
                          <input type="text" class="form-control" name="nama">
                      </div>
                      <div class="form-group">
                          <label>Tempat Lahir</label>
                          <input type="text" class="form-control" name="tempat_lahir">
                      </div>
                      <div class="form-group">
                          <label>Tanggal Lahir</label>
                           <input type="text" name="tanggal_lahir" class="form-control datetimepicker-input" id="datetimepicker1" data-toggle="datetimepicker" data-target="#datetimepicker1"/>
                      </div>
                      <div class="form-group">
                        <label>Jenis Kelamin : </label>
                        <label>
                          <input type="radio" name="jenis_kelamin" id="" value="Laki-laki" >
                              Laki-laki
                              </label>
                          <label>
                          <input type="radio" name="jenis_kelamin" id="" value="Perempuan" >
                              Perempuan
                          </label>
                      </div>
                      <div class="form-group">
                          <label>Agama</label>
                          <select name="agama_id" class="form-control">
                            <?php foreach($agama as $data_agama){?>
                            <option value="<?php echo $data_agama->agama_id?>"><?php echo $data_agama->agama;?></option>
                          <?php } ?>
                          </select>
                      </div>
                      <div class="form-group">
                          <label>No Telephone</label>
                          <input type="text" class="form-control" name="no_telephone">
                      </div>
                      <div class="form-group">
                          <label>Email</label>
                          <input type="text" class="form-control" name="email">
                      </div>
                      <div class="form-group">
                          <label>Alamat</label>
                          <textarea name="alamat" class="form-control"></textarea>
                      </div>
                      <div class="form-group">
                        <button type="button" id="btnSave" onclick="insert()" class="btn btn-success">
                            <span class="glyphicon glyphicon-floppy-disk"></span> Simpan
                        </button>
                      </div>
                    </form>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>
        <!-- END MODAL  -->
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
    <script src="<?php echo base_url('assets/bootbox/bootbox.min.js')?>"></script>
  </div>
</body>

</html>
<script type="text/javascript">

var save_method; //for save method string
var table;
var base_url = '<?php echo base_url() ?>';

$(document).ready(function() {

    //message
    $('.message').hide();
    //datatables
    table = $('#table').DataTable({ 

        "processing": true, //Feature control the processing indicator.
        "serverSide": true, //Feature control DataTables' server-side processing mode.
        "order": [], //Initial no order.

        // Load data for the table's content from an Ajax source
        "ajax": {
            "url": "<?php echo site_url('crud_modal/ajax_list')?>",
            "type": "POST"
        },

        //Set column definition initialisation properties.
        "columnDefs": [
        { 
            "targets": [ -1 ], //last column
            "orderable": false, //set not orderable
        },
        ],

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

function reload_table()
{
    table.ajax.reload(null,false); //reload datatable ajax 
}

function detail(id){

    $('#modal_detail').modal('show');
    
    $.ajax({
        url: '<?php echo site_url("crud_modal/ajax_detail/")?>/'+id,
        type: 'GET',
        dataType: 'JSON',
        success: function(data)
        {   
            $('.modal-title').text(data.nama);
            $('.content').html(data.alamat);

        }

    });
}

function edit(id){

    save_method = "update";
    $('#form')[0].reset();
    $('.form-body').removeClass('has-error');
    $('.help-block').empty();

    $.ajax({
            url: '<?php echo site_url("crud_modal/ajax_edit/")?>/'+id,
            type: 'GET',
            dataType: 'JSON',
            success: function(data)
            {
                $('[name="user_id"]').val(data.user_id);
                $('[name="nama"]').val(data.nama);
                $('[name="tempat_lahir"]').val(data.tempat_lahir);
                $('[name="tanggal_lahir"]').val(data.tanggal_lahir);
                $('[name="agama_id"]').val(data.agama_id);
                $('[name="no_telephone"]').val(data.no_telephone);
                $('[name="email"]').val(data.email);
                $('[name="alamat"]').val(data.alamat);
            if (data.jenis_kelamin == 'Laki-laki'){
                $(':radio[name=jenis_kelamin][value="Laki-laki"]').prop('checked', true);
            } else {
                $(':radio[name=jenis_kelamin][value="Perempuan"]').prop('checked', true);
            }   
                $('#modal_form').modal('show');
                $('.modal-title').text('Edit Profile');

            },
             error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }

    });
}

function add(){

    save_method = "add";
    $('#form')[0].reset(); // reset form on modals
    $('.form-group').removeClass('has-error'); // clear error class
    $('.help-block').empty(); // clear error string
    $('#modal_form').modal('show');
    $(".modal-title").text('Add User');
}

function insert()
{
    $('#btnSave').text('saving...'); //change button text
    $('#btnSave').attr('disabled',true); //set button disable 
    var url;

    if(save_method=="add"){
        url = "<?php echo site_url('crud_modal/ajax_add')?>";
    }else{
        url = "<?php echo site_url('crud_modal/ajax_update')?>";
    }
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
                
                $("#modal_form").modal('hide');
                if(save_method=="add"){
                  bootstrap_alert.success('Data Berhasil di Simpan');
                }else{
                  bootstrap_alert.success('Data Berhasil di Update');
                }

                reload_table();
               
            }
            else
            {
                for (var i = 0; i < data.inputerror.length; i++) 
                {
                    $('[name="'+data.inputerror[i]+'"]').parent().addClass('has-error'); //select parent twice to select div form-group class and add has-error class
                    $('[name="'+data.inputerror[i]+'"]').next().text(data.error_string[i]); //select span help-block class set text error string
                }
            }
            $('#btnSave').text('save'); //change button text
            $('#btnSave').attr('disabled',false); //set button enable 


        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error adding / update data');
            $('#btnSave').text('save'); //change button text
            $('#btnSave').attr('disabled',false); //set button enable 

        }
    });
}

function delete_post(id)
{
    // bootbox alert
     bootbox.confirm({ 
        size: "small",
        title: "Alert!",
        message: "Are you sure to remove this data?", 
        buttons: {
            confirm: {
                label: 'Yes',
                className: 'btn-success'
            },
            cancel: {
                label: 'No',
                className: 'btn-danger'
            }
        },
        callback: function(result)
        { 
            if(result){

                $.ajax({
                    url : "<?php echo site_url('crud_modal/ajax_delete')?>/"+id,
                    type: "POST",
                    dataType: "JSON",
                    success: function(data)
                    {
                        // alert('Success Removing Data');
                        bootstrap_alert.success('Data Berhasil diHapus');
                        reload_table();

                    },
                    error: function (jqXHR, textStatus, errorThrown)
                    {
                        alert('Error Removing data');
                    }

                });
            }
        }
     });
    
}

</script>