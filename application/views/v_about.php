<?php foreach ($header->result() as $row): ?>
  <div class="post-parallax parallax inverse-wrapper parallax1" style="background-image: url(<?php echo base_url().'assets/images/'.$row->tulisan_gambar;?>);">
    <div class="container inner text-center">
      <div class="headline text-center">
        <h2><p><?php echo $row->tulisan_judul;?></p></h2>
        <p class="lead"><?php echo $row->tulisan_isi;?></p>
      </div>
      <!-- /.headline --> 
    </div>
    <!--/.container --> 
  </div>
  <!--/.parallax --> 
<?php endforeach;?>

  
<div class="light-wrapper">
    <div class="container inner">
      <div class="row">

        <?php foreach ($quote->result() as $row): ?>  
        <div class="col-sm-5">
          <figure><img src="<?php echo base_url().'assets/images/'.$row->tulisan_gambar;?>" alt="" /></figure>
        </div>
        <!--/column -->
        <div class="col-sm-7">
          <h3 class="section-title"><?php echo $row->tulisan_judul;?></h3>
          <p><?php echo $row->tulisan_isi;?></p>
         
        </div>
        <!--/column -->
        <?php endforeach;?>  

      </div>
      <!--/.row -->
      <div class="divide50"></div>

<div class="row">
  <div class="light-wrapper">
    <div class="container inner">
      <div class="thin">
        <h3 class="section-title text-center">Contact</h3>
        <p class="text-center">Hubungi Kami jika anda ada suatu resep makanan yang belum kami ketahui</p>
        <ul class="contact-info text-center">
          <li><i class="icon-location"></i>Jl.Sultan Mahmud</li>
          <li><i class="icon-phone"></i>)81277777777</li>
          <li><i class="icon-mail"></i><a href="first.last@email.com">Warung_kreatif</a> </li>
        </ul>  
        <div class="divide50"></div>
        <div class="form-container">
          <form action="<?php echo base_url()?>Tentang/kirim_pesan" method="post" >
            <div class="row">
              <div class="col-sm-6">
                <div class="form-field">
                  <label>
                    <input type="text" name="name" placeholder="Your name" required="required">
                  </label>
                </div>
                <!--/.form-field --> 
              </div>
              <!--/column -->
              <div class="col-sm-6">
                <div class="form-field">
                  <label>
                    <input type="email" name="email" placeholder="Your e-mail" required="required">
                  </label>
                </div>
                <!--/.form-field --> 
              </div>
              <!--/column -->
            </div>
            <!--/.row -->
            <textarea name="message" placeholder="Type your message here..." required="required"></textarea>
            <input type="submit" class="btn" value="Send"  data-processing="Sending..." >
            <footer class="notification-box"><?php echo $this->session->flashdata('msg');?></footer>
          </form>
          <!--/.vanilla-form --> 
        </div>
        <!--/.form-container --> 
      </div>
      <!-- /.thin --> 
    </div>
    <!-- /.container --> 
  </div>
  <!-- /.light-wrapper -->
       
      </div>
      <!--/.row -->
    </div>
    <!--/.container --> 
  </div>
  <!-- /.light-wrapper -->
  
  <div class="dark-wrapper">
    
    <!--/.container --> 
  </div>
  <!--/.dark-wrapper -->
  
  <div class="light-wrapper">
    <div class="container inner">
      <div class="row">
        <div class="col-sm-4 col-md-3">
          <h2>🏢 Instagram Feed</h2>
          <p>📂 IT & Multimedia Company • Mobile App • Web App • Multimedia Design • Photography • Videography 
            <br>🔥️We Mix Your Idea With Our Digital Creativity</br></p>
          <div class="divide10"></div>
          <a target="_blank" href="https://www.instagram.com/digital_creative/" class="btn btn-icon"><i class="icon-s-instagram"></i> Instagram Page</a> </div>
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
  