<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<link rel="shortcut icon" href="<?php echo base_url()?>assets/style/images/favicon.png">
<title>Warung Kreatif ~ Blog</title>
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
     <?php
            error_reporting(0);
            function limit_words($string, $word_limit){
                $words = explode(" ",$string);
                return implode(" ",array_splice($words,0,$word_limit));
            }
    ?>
<div class="offset"></div>
  <div class="dark-wrapper">
    <div class="container inner2">

      <div class="blog grid-view col3">
        <div class="blog-posts text-boxes">
          <div class="isotope row">
            
             <?php foreach ($data->result_array() as $j):
                            $blog_id=$j['tulisan_id'];
                            $blog_judul=$j['tulisan_judul'];
                            $blog_isi=$j['tulisan_isi'];
                            $blog_author=$j['tulisan_author'];
                            $blog_image=$j['tulisan_gambar'];
                            $blog_tglpost=$j['tanggal'];
                            $blog_slug=$j['tulisan_slug'];
             ?>
            <div class="col-sm-6 col-md-4 grid-view-post">
              <div class="post">
                <figure class="main"><a href="<?php echo base_url().'Blog/'.$blog_slug;?>"><img src="<?php echo base_url().'assets/images/'.$blog_image;?>" alt="" /></a></figure>
                <div class="box text-center">
                  <!-- <div class="category cat9"><span><a href="#">Urban</a></span></div> -->
                  <h4 class="post-title"><a href="<?php echo base_url().'Blog/'.$blog_slug;?>"><?php echo $blog_judul;?></a></h4>
                  <div class="meta"><span class="date"><?php echo $blog_tglpost;?></span></div>
                  <p><?php echo limit_words($blog_isi,10).'...';?></p>
                </div>
                <!-- /.box --> 
              </div>
            </div>
            <!-- /column -->
             <?php endforeach ;?>
            
            
          
            
          </div>
          <!-- /.isotope --> 
        </div>
        <!-- /.blog-posts -->
        
        <div class="pagination">
          <?php echo $page;?>
        </div>
        <!-- /.pagination --> 
        
      </div>
      <!-- /.blog --> 
    </div>
    <!--/.container --> 
  </div>
  <!--/.dark-wrapper -->