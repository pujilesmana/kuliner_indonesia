<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<link rel="shortcut icon" href="<?php echo base_url()?>assets/style/images/favicon.png">
<title><?php echo $title?></title>
<!-- Bootstrap core CSS -->
<link href="<?php echo base_url()?>assets/style/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo base_url()?>assets/style/css/plugins.css" rel="stylesheet">
<link href="<?php echo base_url()?>assets/style.css" rel="stylesheet">
<link href="<?php echo base_url()?>assets/style/css/color/aqua.css" rel="stylesheet">
<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Karla:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
<link href="<?php echo base_url()?>assets/style/type/icons.css" rel="stylesheet">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
<div id="preloader"><div class="textload">Loading</div><div id="status"><div class="spinner"></div></div></div>
<main class="body-wrapper">
  <nav class="navbar solid">
    <div class="navbar-header">
      <div class="basic-wrapper"> 
        <div class="navbar-brand"><img src="<?php echo base_url()?>" srcset="<?php echo base_url()?>assets/style/images/logo.png 1x, <?php echo base_url()?>assets/style/images/logo@2x.png 2x" class="logo-light" alt="" /></div>
        <a class="btn responsive-menu" data-toggle="collapse" data-target=".navbar-collapse"><i></i></a>
      </div>
      <!-- /.basic-wrapper -->  
    </div>
    <!-- /.navbar-header -->
    <div class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <li><a href="<?php echo base_url()?>">Beranda<span class="caret"></span></a></li>
        <li><a href="<?php echo base_url()?>Blog">Blog<span class="caret"></span></a></li>
        <li><a href="<?php echo base_url()?>Tentang">Tentang<span class="caret"></span></a></li>
      </ul>
      <!-- /.navbar-nav --> 
    </div>
    <!-- /.navbar-collapse -->
    
    <div class="social-wrapper">
      <ul class="social naked">
        <li><a href="https://www.facebook.com/Digital-Creative-1215092261929408/" target="blank"><i class="icon-s-facebook"></i></a></li>
        <li><a href="https://www.instagram.com/digital_creative/" target="blank"><i class="icon-s-instagram"></i></a></li>
      </ul>
      <!-- /.social --> 
    </div>
    <!-- /.social-wrapper --> 
  </nav>
  <!-- /.navbar -->




<div class="offset"></div>
  <div class="dark-wrapper">
    <div class="container inner2">
      <div class="blog row">
        <div class="col-sm-8 blog-content">
          <div class="blog-posts classic-view">
            <div class="post">
              <div class="box text-center">
                <?php foreach ($deskripsi->result() as $row): ?>
                <h1 class="post-title"><?php echo $row->tulisan_judul;?></h1>
                <div class="meta"><span class="date"><?php echo $row->tanggal;?></span></div>
                <?php endforeach ?>
                <div class="gallery-wrapper">
                    <div class="basic-slider">
                      <?php foreach ($gambar->result() as $row): ?>
                      <div class="item"><img src="<?php echo base_url().'assets/images/'.$row->galeri_gambar;?>" alt="" /></div>
                      <?php endforeach ?>
                    </div>
                    <!-- /.basic-slider --> 
                  </div>
                  <!-- /.gallery-wrapper -->
                <div    class="post-content text-left">
                  <?php foreach ($deskripsi->result() as $row): ?>
                    <?php echo $row->tulisan_isi;?>
                  <?php endforeach ?>
                </div>
                <!-- /.post-content -->
              </div>
              <!-- /.box --> 
              
            </div>
            <!-- .post -->
            
           
            <div class="divide30"></div>
            <div class="box">
              <div id="disqus_thread"></div>
                <script>

                /**
                *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
                *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
                /*
                var disqus_config = function () {
                this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
                this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                };
                */
                (function() { // DON'T EDIT BELOW THIS LINE
                var d = document, s = d.createElement('script');
                s.src = 'https://digital-creative.disqus.com/embed.js';
                s.setAttribute('data-timestamp', +new Date());
                (d.head || d.body).appendChild(s);
                })();
                </script>
                <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
              <!-- <noscript>
              Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript" rel="nofollow">comments powered by Disqus.</a>
              </noscript> -->
            </div>
            <!-- /.box -->
            
            <div class="divide30"></div>
         
            
            
          </div>
          <!-- /.classic-view --> 
          
        </div>
        <!-- /.blog-content -->
        
        <aside class="col-sm-4 sidebar">
          
          <div class="sidebox widget">
            <h3 class="widget-title">Popular Posts</h3>
            <ul class="post-list">
              <?php foreach ($news->result() as $row): ?>
              <li>
                <div class="icon-overlay"> <a href="<?php echo base_url().'Blog/'.$row->tulisan_slug;?>"><img src="<?php echo base_url().'assets/images/'.$row->tulisan_gambar;?>" alt="" /> </a> </div>
                <div class="meta">
                  <h5><a href="<?php echo base_url().'Blog/'.$row->tulisan_slug;?>"><?php echo $row->tulisan_judul;?></a></h5>
                  <em><span class="date"><?php echo $row->tanggal;?></span></em> </div>
              </li>
              <?php endforeach ?>
            </ul>
            <!-- /.post-list --> 
          </div>
          <!-- /.widget -->
          
          <div class="sidebox widget">
            <h3 class="widget-title">Instagram</h3>
            <div class="image-grid col3">
              <div class="items-wrapper">
                <div id="instafeed-widget" class="isotope items"></div>
                
                <!--/.isotope --> 
              </div>
              <!--/.items-wrapper --> 
            </div>
            <!--/.image-grid --> 
          </div>
          <!-- /.widget --> 
          
        </aside>
        <!-- /column .sidebar --> 
        
      </div>
      <!-- /.blog --> 
    </div>
    <!--/.container -->
  </div>
  <!--/.dark-wrapper -->