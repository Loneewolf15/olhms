<?php
//echo($data['title']);
require APPROOT . '/views/inc/header.php'; ?>
<?php require APPROOT . '/views/inc/headernav.php'; ?>
<!--Styles(Custom) Start Here-->

<!--Styles(Custom) End Here-->

<!-- Modal -->

<div class="modal fade" id="loginbuttons" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Login As</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-footer">
        <a style="width: 100%" href="student/login.html" class="btn btn-secondary">Student</a>
        <a style="width: 100%" href="applicant/login.html" class="btn btn-primary">Applicant</a>
      </div>
    </div>
  </div>
</div>

<div class="innerHeading-wrap">
  <div class="container">
    <h1>Career</h1>
  </div>
</div>
<!-- About Start -->
<div class="gallery-wrap ">
<div class="col-lg-12">
        <div class="row">
                    <div class="col-lg-3 col-md-6">
            <div class="galleryImg"><img src="<?php echo URLROOT ?>/assets/images/career/1x.png" alt="Gallery Image 1">
              <div class="portfolio-overley">
                <div class="content"> <a href="<?php echo URLROOT ?>/assets/images/career/1.png" class="fancybox image-link" data-fancybox="images" title="Gallery Image 1"><i class="fas fa-search-plus"></i></a> </div>
              </div>
            </div>
          </div>
                    <div class="col-lg-3 col-md-6">
            <div class="galleryImg"><img src="<?php echo URLROOT ?>/assets/images/career/2x.png" alt="Gallery Image 2">
              <div class="portfolio-overley">
                <div class="content"> <a href="<?php echo URLROOT ?>/assets/images/career/2.png" class="fancybox image-link" data-fancybox="images" title="Gallery Image 2"><i class="fas fa-search-plus"></i></a> </div>
              </div>
            </div>
          </div>
                    <div class="col-lg-3 col-md-6">
            <div class="galleryImg"><img src="<?php echo URLROOT ?>/assets/images/career/3.jpg" alt="Gallery Image 3">
              <div class="portfolio-overley">
                <div class="content"> <a href="<?php echo URLROOT ?>/assets/images/career/3.png" class="fancybox image-link" data-fancybox="images" title="Gallery Image 3"><i class="fas fa-search-plus"></i></a> </div>
              </div>
            </div>
          </div>
                    <div class="col-lg-3 col-md-6">
            <div class="galleryImg"><img src="<?php echo URLROOT ?>/assets/images/career/4.jpg" alt="Gallery Image 4">
              <div class="portfolio-overley">
                <div class="content"> <a href="<?php echo URLROOT ?>/assets/images/career/4.png" class="fancybox image-link" data-fancybox="images" title="Gallery Image 4"><i class="fas fa-search-plus"></i></a> </div>
              </div>
            </div>
          </div>
                    <div class="col-lg-3 col-md-6">
            <div class="galleryImg"><img src="<?php echo URLROOT ?>/assets/images/career/5x.png" alt="Gallery Image 5">
              <div class="portfolio-overley">
                <div class="content"> <a href="<?php echo URLROOT ?>/assets/images/career/5.png" class="fancybox image-link" data-fancybox="images" title="Gallery Image 5"><i class="fas fa-search-plus"></i></a> </div>
              </div>
            </div>
          </div>
                    <div class="col-lg-3 col-md-6">
            <div class="galleryImg"><img src="<?php echo URLROOT ?>/assets/images/career/6x.png" alt="Gallery Image 6">
              <div class="portfolio-overley">
                <div class="content"> <a href="<?php echo URLROOT ?>/assets/images/career/6.png" class="fancybox image-link" data-fancybox="images" title="Gallery Image 6"><i class="fas fa-search-plus"></i></a> </div>
              </div>
            </div>
          </div>
                    <div class="col-lg-3 col-md-6">
            <div class="galleryImg"><img src="<?php echo URLROOT ?>/assets/images/career/7x.png" alt="test">
              <div class="portfolio-overley">
                <div class="content"> <a href="<?php echo URLROOT ?>/assets/images/career/7.png" class="fancybox image-link" data-fancybox="images" title="test"><i class="fas fa-search-plus"></i></a> </div>
              </div>
            </div>
          </div>
                 <div class="col-lg-3 col-md-6">
            <div class="galleryImg"><img src="<?php echo URLROOT ?>/assets/images/career/8x.png" alt="test">
              <div class="portfolio-overley">
                <div class="content"> <a href="<?php echo URLROOT ?>/assets/images/career/8.png" class="fancybox image-link" data-fancybox="images" title="test"><i class="fas fa-search-plus"></i></a> </div>
              </div>
            </div>
          </div>
                    
        </div>
      </div>
</div>
<!-- About End --> 


<?php require APPROOT . '/views/inc/newsletter.php'; ?>
<?php require APPROOT . '/views/inc/footer.php'; ?>