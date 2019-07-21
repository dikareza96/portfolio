
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Experience
            <!-- <small>Preview</small> -->
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url("backend/home/index");?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="<?php echo base_url("backend/".$route."/index");?>">All Experience</a></li>
            <li class="active">Edit Experience</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <form role="form" method="POST" action="<?php echo base_url("backend/".$route."/update");?>">
            
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="box box-primary">
                        <!-- <div class="box-header with-border">
              <h3 class="box-title">New Post </h3>
            </div> -->
                        <!-- /.box-header -->
                        <!-- form start -->
                        <?php foreach ($experience as $row) {
                                        ?>
                                        <input id="id" name="id" required="required" type="hidden" value="<?php echo $row->id; ?>"> 
                        <div class="box-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Date</label>
                                <input type="text" class="form-control" id="date" name="date" placeholder="Enter date range " value="<?php echo $row->date; ?>">
                            </div>
                            <div class="form-group">
                                <label class="exampleInputFile">Company</label>
                                <input type="text" class="form-control" id="company" name="company" placeholder="Enter company name" value="<?php echo $row->company; ?>">
                            </div>

                            <div class="form-group">
                                <label class="exampleInputFile">Position</label>
                                <input type="text" class="form-control" id="position" name="position" placeholder="Enter role name" value="<?php echo $row->position; ?>">
                            </div>

                            <label for="exampleInputEmail1">Description</label>
                            <div class="box-body pad">
                                <textarea class="form-control" rows="3" name="description" id="description"><?php echo $row->description; ?></textarea>
                            </div>

                        </div>

                        <div class="box-footer">
                            <a href="<?php echo base_url("backend/".$route."/index")?>" type="button" class="btn btn-default ">Back</a>
                            <button type="submit" class="btn btn-info pull-right">Submit</button>
                        </div>
                        <!-- /.box-body -->

 <?php } ?>

                    </div>
                    <!-- /.box -->

                </div>
                <!--/.col (left) -->
                <!-- right column -->
               
                <!--/.col (right) -->
            </div>
            <!-- /.row -->
        </form>
    </section>

    <!-- /.content -->
</div>

<!-- jQuery 3 -->
<script src="<?php echo base_url(); ?>assets/backend/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Select2 -->
<script src="<?php echo base_url(); ?>assets/backend/bower_components/select2/dist/js/select2.full.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url(); ?>assets/backend/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url(); ?>assets/backend/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>assets/backend/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url(); ?>assets/backend/dist/js/demo.js"></script>
<!-- CK Editor -->
<script src="<?php echo base_url(); ?>assets/backend/bower_components/ckeditor/ckeditor.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?php echo base_url(); ?>assets/backend/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>



