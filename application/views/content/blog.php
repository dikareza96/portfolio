<!-- Main Section -->
        <div id="lonon-main">
            <!-- Blog -->
            <div class="lonon-blog">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12"> <span class="heading-meta style-1">Read</span>
                            <h2 class="lonon-heading animate-box" data-animate-effect="fadeInLeft">Blog</h2> </div>
                    </div>
                    <?php foreach ($blog as $b): ?>
                    <div class="row">

                        
                            
                       
                        
                        <div class="col-md-6 col-sm-6">
                            <div class="blog-entry animate-box" data-animate-effect="fadeInLeft">
                                <a href="#" class="blog-img"><img src="<?=base_url()?>assets/uploads/<?=$b->img;?>" class="img-fluid" alt=""></a>
                                <div class="desc"> <?php echo $b->title; ?></span>
                                    <h3><a href="#"><?php echo $b->desc; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <!-- Pagination -->
                           <!--  <ul class="lonon-pagination-wrap align-center">
                                <li><a href="blog.html#"><i class="ti-arrow-left"></i></a></li>
                                <li><a href="blog.html#">1</a></li>
                                <li><a href="blog.html#" class="active">2</a></li>
                                <li><a href="blog.html#">3</a></li>
                                <li><a href="blog.html#"><i class="ti-arrow-right"></i></a></li>
                            </ul> -->
                        </div>

                         <?php endforeach ?>
                    </div>
                </div>
            </div>
            