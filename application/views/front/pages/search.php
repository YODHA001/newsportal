
<!--================News Area =================-->
<section class="news_area p_100">
   <div class="container">
      <div class="row">
         <div class="col-lg-8">
            <div class="main_title2">
               <h2>Search Results </h2>
               <p style="padding-left: 15px;"><?php echo ($sdata) ? " Showing result for : <strong>".$sdata." ( ".$count." )</strong>":'' ?> </p>
            </div>
            <div class="latest_news">
               <?php foreach($post as $p)  :?>
                  <div class="media">
                     <div class="d-flex">
                        <img class="img-fluid" src="<?= base_url("images/posting/medium/$p->photo") ?>" alt="">
                     </div>
                     <div class="media-body">
                        <div class="choice_text">
                           <div class="date">
                              <a class="gad_btn" href="<?= base_url("blog/read/$p->seo_title") ?>"><?= $p->category_name ?></a>
                              <a href="<?= base_url("blog/read/$p->seo_title") ?>" class="float-right"><i class="fa fa-calendar" aria-hidden="true">
                                 </i><?= mediumdate_indo($p->date) ?>
                              </a>
                           </div>
                           <a href="<?= base_url("blog/read/$p->seo_title") ?>">
                              <h4><?= $p->title ?></h4>
                           </a>
                           <p><?= character_limiter($p->content, 100) ?></p>
                        </div>
                     </div>
                  </div>
               <?php endforeach ?>
            </div>
            
         </div>
         <!-- ================Sidebar================== -->
         <?php $this->load->view('front/layouts/_sidebar', $trending) ?>
         <!-- ================End of Sidebar================== -->
      </div>
   </div>
</section>
<!--================End News Area =================-->