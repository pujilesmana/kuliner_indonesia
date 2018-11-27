<div class="tp-fullscreen-container revolution">
    <div class="tp-fullscreen">
      <ul>
        <?php foreach ($header_home->result() as $row): ?>
        <li data-transition="fade"> <img src="<?php echo base_url()?>assets/images/<?php echo $row->tulisan_gambar;?>"  alt="" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat" />
          <div class="tp-caption large text-center sfl" data-x="center" data-y="283" data-speed="900" data-start="800" data-easing="Sine.easeOut"><?php echo $row->tulisan_judul;?></div>
          <div class="tp-caption medium text-center sfr" data-x="center" data-y="363" data-speed="900" data-start="1500" data-easing="Sine.easeOut"><?php echo $row->tulisan_isi;?></div>
        </li>
        <?php endforeach;?>     
      </ul>
      <div class="tp-bannertimer tp-bottom"></div>
    </div>
    <!-- /.tp-fullscreen-container --> 
  </div>
  <!-- /.revolution -->
  
  <div class="light-wrapper">
    <div class="container inner">
      <div class="thin" id="hide" onclick="hideDiv()">
        <?php foreach ($caption->result() as $row): ?>
        <h3 class="section-title text-center" ><?php echo $row->tulisan_judul;?></h3>
        <p class="text-center"><?php echo $row->tulisan_isi;?></p>
        <?php endforeach;?>  
      </div>
      <!-- /.thin -->
      <div class="divide10"></div>
      <div class="row">
        <?php foreach ($Konten_makanan_terbaru->result() as $row): ?>
        <div class="col-sm-4">
          <div class="caption-overlay">
            <figure><a href="#"><img src="<?php echo base_url()?>assets/images/<?php echo $row->tulisan_gambar;?>" alt="" /> </a></figure>
            <div class="caption bottom-right">
              <div class="title">
                <h3 class="main-title layer"><?php echo $row->tulisan_judul;?></h3>
              </div>
              <!--/.title --> 
            </div>
            <!--/.caption --> 
          </div>
        </div>
        <?php endforeach;?>  
      </div>
      <!-- /.row --> 
      <div class="divide30"></div>
      <div class="cbp-l-loadMore-text"> <a href="<?php echo base_url()?>Resep" target="blank" class="cbp-l-loadMorelink btn" > <span class="cbp-l-loadMore-defaultText">Load More</span> </a> </div>
      
    </div>
    <!-- /.container --> 
  </div>
  <!-- /.light-wrapper -->
  
  <div class="dark-wrapper">
    <div class="container inner">
      <div class="thin">
        <h3 class="section-title text-center">my latest works</h3>
        <p class="text-center">Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Integer posuere erat.</p>
      </div>
      <!-- /.thin -->
      <div class="divide10"></div>
      <div class="cbp-panel">
        <div id="js-filters-mosaic" class="cbp-filter-container text-center">
          <div data-filter="*" class="cbp-filter-item-active cbp-filter-item"> All </div>
          <div data-filter=".5" class="cbp-filter-item"> Masakan Jawa </div>
          <div data-filter=".6" class="cbp-filter-item"> Masakan Sumatera </div>
          <div data-filter=".7" class="cbp-filter-item"> Masakan Sulawesi </div>
        </div>
        <div id="js-grid-mosaic" class="cbp">

          <?php foreach ($Jawa->result() as $row): ?>

          <div class="cbp-item 5"> <a class="cbp-caption fancybox-media" data-rel="portfolio" href="<?php echo base_url()?>assets/images/<?php echo $row->tulisan_gambar;?>" data-title-id="title-1">
            <div class="cbp-caption-defaultWrap"> <img src="<?php echo base_url()?>assets/images/<?php echo $row->tulisan_gambar;?>" alt="" /> </div>
            <div class="cbp-caption-activeWrap">
              <div class="cbp-l-caption-alignCenter">
                <div class="cbp-l-caption-body">
                  <div class="cbp-l-caption-title"><span class="cbp-plus"></span></div>
                </div>
              </div>
            </div>
            <!--/.cbp-caption-activeWrap --> 
            </a>
            <div id="title-1" class="hidden">
              <h3 class="text-center"><?php echo $row->tulisan_judul?></h3>
            </div>
            <!-- /.hidden --> 
          </div>
          <!--/.cbp-item -->
          <?php endforeach;?> 
          <?php foreach ($sumatera->result() as $row): ?>
          <div class="cbp-item 6"> <a class="cbp-caption fancybox-media" data-rel="portfolio" href="<?php echo base_url()?>assets/images/<?php echo $row->tulisan_gambar;?>" data-title-id="title-3">
            <div class="cbp-caption-defaultWrap"> <img src="<?php echo base_url()?>assets/images/<?php echo $row->tulisan_gambar;?>" alt="" /> </div>
            <div class="cbp-caption-activeWrap">
              <div class="cbp-l-caption-alignCenter">
                <div class="cbp-l-caption-body">
                  <div class="cbp-l-caption-title"><span class="cbp-plus"></span></div>
                </div>
              </div>
            </div>
            <!--/.cbp-caption-activeWrap --> 
            </a>
            <div id="title-3" class="hidden">
              <h3 class="text-center"><?php echo $row->tulisan_judul?></h3>
              
            </div>
            <!-- /.hidden --> 
          </div>
          <!--/.cbp-item -->
          <?php endforeach;?>
          <?php foreach ($sulawesi->result() as $row): ?>
          <div class="cbp-item 7"> <a class="cbp-caption fancybox-media" data-rel="portfolio" href="<?php echo base_url()?>assets/images/<?php echo $row->tulisan_gambar;?>" data-title-id="title-6">
            <div class="cbp-caption-defaultWrap"> <img src="<?php echo base_url()?>assets/images/<?php echo $row->tulisan_gambar;?>" alt="" /> </div>
            <div class="cbp-caption-activeWrap">
              <div class="cbp-l-caption-alignCenter">
                <div class="cbp-l-caption-body">
                  <div class="cbp-l-caption-title"><span class="cbp-plus"></span></div>
                </div>
              </div>
            </div>
            <!--/.cbp-caption-activeWrap --> 
            </a>
            <div id="title-6" class="hidden">
              <h3 class="text-center"><?php echo $row->tulisan_judul?></h3>
            </div>
            <!-- /.hidden --> 
          </div>
          <!--/.cbp-item -->
          <?php endforeach;?>
          
        </div>
        <!--/.cbp --> 
        
      </div>
      <!--/.cbp-panel -->
      <div class="divide30"></div>
      <div id="js-grid-mosaic-more" class="cbp-l-loadMore-text"> <a href="ajax/loadmore2.html" class="cbp-l-loadMorelink btn" rel="nofollow"> <span class="cbp-l-loadMore-defaultText">Load More</span> <span class="cbp-l-loadMore-loadingText">Loading...</span> <span class="cbp-l-loadMore-noMoreLoading">No More Works</span> </a> </div>
    </div>
    <!-- /.container --> 
  </div>
  <!-- /.dark-wrapper -->
  
  <div class="light-wrapper">
    <div class="col-image">
      <div class="bg-wrapper col-md-6">
        <div class="bg-holder" style="background-image: url(style/images/art/about.jpg);"></div>
      </div>
      <!--/.bg-wrapper -->
      <div class="container">
        <div class="row">
          <div class="col-md-5 col-md-offset-7 inner-col">
            <h3 class="section-title">a little about me</h3>
            <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Donec ullamcorper nulla non metus auctor fringilla. Etiam porta sem malesuada magna mollis euismod.</p>
            <ul class="progress-list">
              <li>
                <p>Photoshop <em>90%</em></p>
                <div class="progress plain">
                  <div class="bar" data-width="90"></div>
                </div>
              </li>
              <li>
                <p>Final Cut <em>80%</em></p>
                <div class="progress plain">
                  <div class="bar" data-width="80"></div>
                </div>
              </li>
              <li>
                <p>Studio Photography <em>85%</em></p>
                <div class="progress plain">
                  <div class="bar" data-width="85"></div>
                </div>
              </li>
              <li>
                <p>Motion Video <em>75%</em></p>
                <div class="progress plain">
                  <div class="bar" data-width="75"></div>
                </div>
              </li>
            </ul>
            <!-- /.progress-list --> 
          </div>
          <!--/column --> 
        </div>
        <!--/.row --> 
      </div>
      <!--/.container --> 
    </div>
    <!--/.col-image --> 
    
  </div>
  <!-- /.light-wrapper -->
  
  <div class="dark-wrapper">
    <div class="container inner">
      <h3 class="section-title text-center">from the journal</h3>
      <div class="divide10"></div>
      <div class="carousel-wrapper">
        <div class="carousel carousel-boxed blog">
          <div class="item post">
            <figure class="main"><img src="<?php echo base_url()?>assets/style/images/art/b1.jpg" alt="" /></figure>
            <div class="box text-center">
              <div class="category cat9"><span><a href="#">Urban</a></span></div>
              <h4 class="post-title"><a href="blog-post.html">Parturient Commodo Aenean</a></h4>
              <div class="meta"><span class="date">14 Oct 2014</span><span class="comments"><a href="#"><i class="icon-chat-1"></i> 15</a></span></div>
              <p>Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Cum sociis natoque penatibus et magnis dis parturient. Curabitur blandit tempus lacinia odio.</p>
            </div>
            <!-- /.box --> 
            
          </div>
          <!-- /.post -->
          
          <div class="item post">
            <figure class="main"><img src="<?php echo base_url()?>assets/style/images/art/b2.jpg" alt="" /></figure>
            <div class="box text-center">
              <div class="category cat12"><span><a href="#">Still Life</a></span></div>
              <h4 class="post-title"><a href="blog-post.html">Quam Mollis Ligula Nullam</a></h4>
              <div class="meta"><span class="date">12 Nov 2014</span><span class="comments"><a href="#"><i class="icon-chat-1"></i> 15</a></span></div>
              <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Fusce dapibus, tellus ac cursus. Lorem ipsum dolor sit amet.</p>
            </div>
            <!-- /.box --> 
            
          </div>
          <!-- /.post -->
          
          <div class="item post">
            <figure class="main"><img src="<?php echo base_url()?>assets/style/images/art/b3.jpg" alt="" /></figure>
            <div class="box text-center">
              <div class="category cat5"><span><a href="#">Photography</a></span></div>
              <h4 class="post-title"><a href="blog-post.html">Tellus Bibendum Parturient</a></h4>
              <div class="meta"><span class="date">23 Dec 2014</span><span class="comments"><a href="#"><i class="icon-chat-1"></i> 15</a></span></div>
              <p>Maecenas sed diam eget risus varius blandit sit amet non magna. Donec ullamcorper nulla non metus auctor. Sed posuere consectetur est at. Duis mollis, est.</p>
            </div>
            <!-- /.box --> 
            
          </div>
          <!-- /.post -->
          <div class="item post">
            <figure class="main"><img src="<?php echo base_url()?>assets/style/images/art/b4.jpg" alt="" /></figure>
            <div class="box text-center">
              <div class="category cat6"><span><a href="#">Journal</a></span></div>
              <h4 class="post-title"><a href="blog-post.html">Parturient Commodo Aenean</a></h4>
              <div class="meta"><span class="date">14 Oct 2014</span><span class="comments"><a href="#"><i class="icon-chat-1"></i> 15</a></span></div>
              <p>Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Cum sociis natoque penatibus et magnis dis parturient. Curabitur blandit tempus lacinia.</p>
            </div>
            <!-- /.box --> 
            
          </div>
          <!-- /.post -->
          
          <div class="item post">
            <figure class="main"><img src="<?php echo base_url()?>assets/style/images/art/b5.jpg" alt="" /></figure>
            <div class="box text-center">
              <div class="category cat12"><span><a href="#">Still Life</a></span></div>
              <h4 class="post-title"><a href="blog-post.html">Quam Mollis Ligula Nullam</a></h4>
              <div class="meta"><span class="date">12 Nov 2014</span><span class="comments"><a href="#"><i class="icon-chat-1"></i> 15</a></span></div>
              <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Fusce dapibus, tellus ac cursus. Lorem ipsum dolor sit amet.</p>
            </div>
            <!-- /.box --> 
            
          </div>
          <!-- /.post -->
          
          <div class="item post">
            <figure class="main"><img src="<?php echo base_url()?>assets/style/images/art/b6.jpg" alt="" /></figure>
            <div class="box text-center">
              <div class="category cat3"><span><a href="#">Nature</a></span></div>
              <h4 class="post-title"><a href="blog-post.html">Tellus Bibendum Parturient</a></h4>
              <div class="meta"><span class="date">23 Dec 2014</span><span class="comments"><a href="#"><i class="icon-chat-1"></i> 15</a></span></div>
              <p>Maecenas sed diam eget risus varius blandit sit amet non magna. Donec ullamcorper nulla non metus auctor. Sed posuere consectetur est at. Duis mollis, est non.</p>
            </div>
            <!-- /.box --> 
            
          </div>
          <!-- /.post --> 
        </div>
        <!--/.carousel --> 
      </div>
      <!--/.carousel-wrapper --> 
    </div>
    <!--/.container --> 
    
  </div>
  <!-- /.dark-wrapper -->
  <div class="light-wrapper">
    <div class="container inner">
      <div class="row">
        <div class="col-sm-4 col-md-3">
          <h2>Instagram Feed</h2>
          <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Duis mollis, est non commodo luctus, nisi erat. Nullam quis risus eget urna mollis ornare vel eu leo. Duis mollis, est non commodo.</p>
          <div class="divide10"></div>
          <a href="https://www.instagram.com/urbanshots/" class="btn btn-icon"><i class="icon-s-instagram"></i> Instagram Page</a> </div>
        <!--/column -->
        <div class="col-sm-8 col-md-9">
          <div class="image-grid col5">
            <div class="items-wrapper">
              <div id="instafeed" class="isotope items" data-limit="5"></div>
              
              <!--/.isotope --> 
            </div>
            <!--/.items-wrapper --> 
          </div>
          <!--/.image-grid --> 
        </div>
        <!--/column --> 
      </div>
      <!--/.row --> 
    </div>
    <!--/.container --> 
    
  </div>
  <!-- /.light-wrapper -->

  <script type="text/javascript">

    function hideDiv(){
      var x = document.getElementById("hide");

      x.style.display = "none";
    }
    


  </script>
