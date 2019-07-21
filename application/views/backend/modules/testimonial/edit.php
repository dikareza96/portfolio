
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
       <h1>
            Testimonial
            <!-- <small>Preview</small> -->
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url("backend/home/index");?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="<?php echo base_url("backend/testimonial/index");?>">All Testimonial</a></li>
            <li class="active">Edit New Testimonial</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <form role="form" method="POST" action="<?php echo base_url("backend/testimonial/update");?>">
            
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
                        <?php foreach ($testimonial as $row) {
                                        ?>
                                        <input id="id" name="id" required="required" type="hidden" value="<?php echo $row->id; ?>"> 
                        <div class="box-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Name</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="" value="<?php echo $row->name; ?>">
                            </div>
                            <div class="form-group">
                                <label class="exampleInputFile">Position</label>
                                <input type="text" class="form-control" id="experience" name="experience" placeholder="ex:Supervisor, Project Manager" value="<?php echo $row->position; ?>">
                            </div>
                             <div class="form-group">
                                <label class="exampleInputFile">Comment</label>
                                <textarea class="form-control" rows="3" id="comment" name="comment" placeholder="Enter ..."><?php echo $row->comment; ?></textarea>
                            </div>
                            

                        </div>

                        <div class="box-footer">
                            <a href="<?php echo base_url("backend/testimonial/index")?>" type="button" class="btn btn-default ">Back</a>
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
