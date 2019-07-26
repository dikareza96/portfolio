 <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url(); ?>assets/backend/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $this->session->userdata('name'); ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
 
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
       
         <li >

          <a href="<?php echo base_url("backend/profile/index");?>">
            <i class="fa fa-table"></i> <span>Profile</span>

          </a>
          <a href="<?php echo base_url("backend/experience/index");?>">
            <i class="fa fa-table"></i> <span>Experience</span>

          </a>
           <a href="<?php echo base_url("backend/skill/index");?>">
            <i class="fa fa-table"></i> <span>Skill</span>

          </a>

           <a href="<?php echo base_url("backend/blog/index");?>">
            <i class="fa fa-table"></i> <span>Blog</span>

          </a>
           <a href="<?php echo base_url("backend/client/index");?>">
            <i class="fa fa-table"></i> <span>Client</span>

          </a>
           <a href="<?php echo base_url("backend/testimonial/index");?>">
            <i class="fa fa-table"></i> <span>Testimonial</span>

          </a>
           <a href="<?php echo base_url("backend/project/index");?>">
            <i class="fa fa-table"></i> <span>Project</span>

          </a>
           <a href="<?php echo base_url("backend/contact/index");?>">
            <i class="fa fa-table"></i> <span>Contact</span>

          </a>
           <a href="<?php echo base_url("backend/education/index");?>">
            <i class="fa fa-table"></i> <span>Education</span>

          </a>
           

        </li>

         



      </ul>
    </section>
    
  </aside>
<!-- content -->