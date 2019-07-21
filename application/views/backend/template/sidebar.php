 <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url(); ?>assets/backend/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Admin</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
 
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
       
         <li >
          <a href="<?php echo base_url("backend/home/index");?>">
            <i class="fa fa-dashboard"></i> <span>Home</span>

          </a>

        </li>
            <li class="treeview">
                            <a href="#">
                                <i class="fa fa-laptop"></i>
                                <span>Posts</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="<?php echo base_url("backend/experience/index");?>"><i class="fa fa-angle-double-right"></i>Experience</a></li>
                                 <li><a href="<?php echo base_url("backend/skill/index");?>"><i class="fa fa-angle-double-right"></i>Skill</a></li>
                                 <li><a href="<?php echo base_url("backend/testimonial/index");?>"><i class="fa fa-angle-double-right"></i>Testimonial</a></li>
                                

                            </ul>
            </li>
            
            



      </ul>
    </section>
    
  </aside>
<!-- content -->