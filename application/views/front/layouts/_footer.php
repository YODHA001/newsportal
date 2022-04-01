<!--================ start footer Area  =================-->	
<footer class="footer-area mt-5">
   <div class="container">
      <div class="row f_widgets_inner">
         <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="single-footer-widget ab_widgets">
               <div class="f_title">
                  <h3>newsportal.com</h3>
               </div>
               <p>The Best Place to find the  different  category of News. </p>
            </div>
         </div>
         <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="single-footer-widget">
                  <div class="f_title">
                  <h3>Quick Links</h3>
                  </div>
                  <div class="row">
                     <div class="col-6">
                        <h5 style="color: white">Category</h5>
                        <ul class="list mt-3">
                           <?php foreach($category as $c) : ?>
                              <li><a href="<?= base_url("blog/category/$c->slug") ?>"><?= $c->category_name ?></a></li>
                           <?php endforeach ?>
                        </ul>
                     </div>
                     <div class="col-6">
                        <h5 style="color: white">Info</h5>
                        <ul class="list">
                              <li><a href="<?= base_url('contact') ?>">About</a></li>
                              <li><a href="#">Contact</a></li>
                        </ul>
                     </div>										
                  </div>							
            </div>
         </div>
         <div class="col-lg-4 col-md-6">
            <div class="single-footer-widget m_news_widgets">
               <div class="f_title">
                  <h3>Social Networks</h3>
               </div>
               <div class="col-lg-5 col-md-5 footer-social icon mx-auto">
                  <a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a>
                  <a href="https://twitter.com/"><i class="fa fa-twitter"></i></a>
                  <a href="https://instagram.com/"><i class="fa fa-instagram"></i></a>
                  <a href="https://www.youtube.com/"><i class="fa fa-youtube-play"></i></a>
               </div>
            </div>
         </div>	
      </div>
      <div class="row footer-bottom d-flex justify-content-between align-items-center">
         <div class="col-lg-12">
            <div class="f_boder"></div>
         </div>
        
      </div>
   </div>
</footer>
<!--================ End footer Area  =================-->
