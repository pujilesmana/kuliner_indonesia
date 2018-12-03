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
