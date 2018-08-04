<div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Chart</li>
      </ol>
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Chart Example
        </div>
        <div class="card-body">
            <?php
                foreach($data as $data){
                    $merk[] = $data->merk;
                    $stok[] = (float) $data->stok;
                }
            ?>
          <canvas id="chart_example" width="1000" height="280"></canvas>
        </div>
        <div class="card-footer small text-muted"></div>
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
    <script src="<?php echo base_url('assets/chartjs/chart.min.js')?>"></script>
    <script src="<?php echo base_url('assets/datatables/jquery.dataTables.js')?>"></script>
    <script src="<?php echo base_url('assets/datatables/dataTables.bootstrap4.js')?>"></script>
    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url('assets/js/sb-admin.min.js')?>"></script>
    <!-- Custom scripts for this page-->
    <script src="<?php echo base_url('assets/js/sb-admin-datatables.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/sb-admin-charts.min.js')?>"></script>

    <script>
            var lineChartData = {
                labels : <?php echo json_encode($merk);?>,
                datasets : [
                     
                    {
                        fillColor: "rgba(60,141,188,0.9)",
                        strokeColor: "rgba(60,141,188,0.8)",
                        pointColor: "#3b8bba",
                        pointStrokeColor: "#fff",
                        pointHighlightFill: "#fff",
                        pointHighlightStroke: "rgba(152,235,239,1)",
                        data : <?php echo json_encode($stok);?>
                    }
 
                ]
                 
            }
 
        var myLine = new Chart(document.getElementById("chart_example").getContext("2d")).Line(lineChartData);
         
    </script>
  </div>
</body>

</html>
