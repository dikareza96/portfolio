
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        
        
      </h1> 
    
    </section>
 <!-- Main content -->
    <section class="content container-fluid">
      <div class="row">
        <div class="col-xs-12">
          <div class="box box-success">
            <div class="box-header">
              <h3 class="box-title">Daftar Data Guru</h3>
               <div class="box-tools pull-right">
                    <a href="" class="btn btn-primary btn-sm btn-flat" >
                          
                          Tambah Data
                    </a>
                 </div>
               
            </div>

            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-striped table-bordered table-hover" cellspacing="0" width="100%">
                <thead>
                  <tr>
                      <th class="text-center">NO.</th>
                      <th class="text-center">NIP</th>
                      <th class="text-center">Guru</th>
                      <th class="text-center">Pelajaran</th>
                      <th class="text-center">Status Guru</th>
                      <th class="text-center">Keterangan</th>
                      <th class="text-center">Aksi</th>
                  </tr>
                </thead>

                <tbody>
                   
                <tr>
                  <td class="text-center"></td>
                  <td class="text-center"></td>
                  <td class="text-center"></td>
                  <td class="text-center"></td>

                  <td class="text-center"></td>
                  <td class="text-center"></td>
                  <td class="text-center" style="width:150px;">
                      <form method="POST" action="" accept-charset="UTF-8">
                      <a href="" class="btn btn-primary btn-sm btn-flat" >
                          Ubah
                         </a>
                      <input name="_method" type="hidden" value="DELETE">
                      <input name="_token" type="hidden" value="{{ csrf_token() }}">
                      <input type="submit" class="btn btn-danger btn-sm btn-flat" onclick="return confirm('Anda yakin akan menghapus data ini?');" value="Hapus">

                      </form>
                  </td>
                                       
               
                </tr>
              
                 </tbody>
               
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
     </div>
      <!-- /.content-wrapper -->
 

<!-- jQuery 3 -->
<script src="<?php echo base_url(); ?>bower_components/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url(); ?>bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- DataTables -->
<script src="<?php echo base_url(); ?>bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="<?php echo base_url(); ?>bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
<!-- SlimScroll -->
<script src="<?php echo base_url(); ?>bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
<!-- FastClick -->
<script src="<?php echo base_url(); ?>bower_components/fastclick/lib/fastclick.js')}}"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url(); ?>dist/js/demo.js')}}"></script>
<!-- page script -->
<script>
 $(function () {
    $('#example1').DataTable()
    
  })
</script>
    @endsection