<?php require APPROOT . '/views/inc/header.php'; ?>
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
    <h1>Our Photo Gallery</h1>
  </div>
</div>

<!-- Gallery Start -->
<div class="gallery-wrap ">
<!-- <div class="gallery_left">
            <div class="title">
              <h1>Photo Gallery</h1>
            </div>
            <p>Lorem ipsum dolor sit amet, adipiscing elit. Vivamus nibh dolor, gravida faucibus dolor consectetur.</p>
            <div class="readmore"><a href="#">View All Gallery</a></div>
          </div> -->
  <div class="container">
  
        <div class="gallery_box">
          <!-- <div class="edit_option align_left blck_color">
                      </div> -->
        
        </div>
      </div>
      <div class="col-lg-12">
        <div class="row">
        <div class="col-lg-3 col-md-6">
            <div class="galleryImg"><img src="<?php echo URLROOT ?>/assets/images/gallery/x1s.jpg" alt="Gallery Image 1">
              <div class="portfolio-overley">
                <div class="content"> <a href="<?php echo URLROOT ?>/assets/images/gallery/x1s.jpg" class="fancybox image-link" data-fancybox="images" title="Gallery Image 1"><i class="fas fa-search-plus"></i></a> </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="galleryImg"><img src="<?php echo URLROOT ?>/assets/images/gallery/x2s.jpg" alt="Gallery Image 1">
              <div class="portfolio-overley">
                <div class="content"> <a href="<?php echo URLROOT ?>/assets/images/gallery/x2s.jpg" class="fancybox image-link" data-fancybox="images" title="Gallery Image 1"><i class="fas fa-search-plus"></i></a> </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="galleryImg"><img src="<?php echo URLROOT ?>/assets/images/gallery/x3s.jpg" alt="Gallery Image 1">
              <div class="portfolio-overley">
                <div class="content"> <a href="<?php echo URLROOT ?>/assets/images/gallery/x3s.jpg" class="fancybox image-link" data-fancybox="images" title="Gallery Image 1"><i class="fas fa-search-plus"></i></a> </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="galleryImg"><img src="<?php echo URLROOT ?>/assets/images/gallery/x4s.jpg" alt="Gallery Image 1">
              <div class="portfolio-overley">
                <div class="content"> <a href="<?php echo URLROOT ?>/assets/images/gallery/x4s.jpg" class="fancybox image-link" data-fancybox="images" title="Gallery Image 1"><i class="fas fa-search-plus"></i></a> </div>
              </div>
            </div>
          </div>
          <!-- ///////////////////////////////////////////////////////////// -->
                    <div class="col-lg-3 col-md-6">
            <div class="galleryImg"><img src="<?php echo URLROOT ?>/assets/images/gallery/3x.jpg" alt="Gallery Image 1">
              <div class="portfolio-overley">
                <div class="content"> <a href="<?php echo URLROOT ?>/assets/images/gallery/3x.jpg" class="fancybox image-link" data-fancybox="images" title="Gallery Image 1"><i class="fas fa-search-plus"></i></a> </div>
              </div>
            </div>
          </div>
                    <div class="col-lg-3 col-md-6">
            <div class="galleryImg"><img src="<?php echo URLROOT ?>/assets/images/gallery/3.jpg" alt="Gallery Image 2">
              <div class="portfolio-overley">
                <div class="content"> <a href="<?php echo URLROOT ?>/assets/images/3.png" class="fancybox image-link" data-fancybox="images" title="Gallery Image 2"><i class="fas fa-search-plus"></i></a> </div>
              </div>
            </div>
          </div>
                    <div class="col-lg-3 col-md-6">
            <div class="galleryImg"><img src="<?php echo URLROOT ?>/assets/images/gallery/4.jpg" alt="Gallery Image 3">
              <div class="portfolio-overley">
                <div class="content"> <a href="<?php echo URLROOT ?>/assets/images/4.png" class="fancybox image-link" data-fancybox="images" title="Gallery Image 3"><i class="fas fa-search-plus"></i></a> </div>
              </div>
            </div>
          </div>
                    <div class="col-lg-3 col-md-6">
            <div class="galleryImg"><img src="<?php echo URLROOT ?>/assets/images/gallery/4x.jpg" alt="Gallery Image 4">
              <div class="portfolio-overley">
                <div class="content"> <a href="<?php echo URLROOT ?>/assets/images/4x.jpg" class="fancybox image-link" data-fancybox="images" title="Gallery Image 4"><i class="fas fa-search-plus"></i></a> </div>
              </div>
            </div>
          </div>
                    <div class="col-lg-3 col-md-6">
            <div class="galleryImg"><img src="<?php echo URLROOT ?>/assets/images/gallery/5.png" alt="Gallery Image 5">
              <div class="portfolio-overley">
                <div class="content"> <a href="<?php echo URLROOT ?>/assets/images/5.png" class="fancybox image-link" data-fancybox="images" title="Gallery Image 5"><i class="fas fa-search-plus"></i></a> </div>
              </div>
            </div>
          </div>
                    <div class="col-lg-3 col-md-6">
            <div class="galleryImg"><img src="<?php echo URLROOT ?>/assets/images/gallery/6.png" alt="Gallery Image 6">
              <div class="portfolio-overley">
                <div class="content"> <a href="<?php echo URLROOT ?>/assets/images/6.png" class="fancybox image-link" data-fancybox="images" title="Gallery Image 6"><i class="fas fa-search-plus"></i></a> </div>
              </div>
            </div>
          </div>
                    <div class="col-lg-3 col-md-6">
            <div class="galleryImg"><img src="<?php echo URLROOT ?>/assets/images/gallery/6x.jpg" alt="test">
              <div class="portfolio-overley">
                <div class="content"> <a href="<?php echo URLROOT ?>/assets/images/6x.jpg" class="fancybox image-link" data-fancybox="images" title="test"><i class="fas fa-search-plus"></i></a> </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="galleryImg"><img src="<?php echo URLROOT ?>/assets/images/gallery/11x.jpg" alt="test">
              <div class="portfolio-overley">
                <div class="content"> <a href="<?php echo URLROOT ?>/assets/images/11x.jpg" class="fancybox image-link" data-fancybox="images" title="test"><i class="fas fa-search-plus"></i></a> </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="galleryImg"><img src="<?php echo URLROOT ?>/assets/images/gallery/7.png" alt="Gallery Image 1">
              <div class="portfolio-overley">
                <div class="content"> <a href="<?php echo URLROOT ?>/assets/images/7.png" class="fancybox image-link" data-fancybox="images" title="Gallery Image 1"><i class="fas fa-search-plus"></i></a> </div>
              </div>
            </div>
          </div>
                    <div class="col-lg-3 col-md-6">
            <div class="galleryImg"><img src="<?php echo URLROOT ?>/assets/images/gallery/7x.jpg" alt="Gallery Image 2">
              <div class="portfolio-overley">
                <div class="content"> <a href="<?php echo URLROOT ?>/assets/images/7x.jpg" class="fancybox image-link" data-fancybox="images" title="Gallery Image 2"><i class="fas fa-search-plus"></i></a> </div>
              </div>
            </div>
          </div>
                    <div class="col-lg-3 col-md-6">
            <div class="galleryImg"><img src="<?php echo URLROOT ?>/assets/images/gallery/8x.jpg" alt="Gallery Image 3">
              <div class="portfolio-overley">
                <div class="content"> <a href="<?php echo URLROOT ?>/assets/images/8x.jpg" class="fancybox image-link" data-fancybox="images" title="Gallery Image 3"><i class="fas fa-search-plus"></i></a> </div>
              </div>
            </div>
          </div>
                    <div class="col-lg-3 col-md-6">
            <div class="galleryImg"><img src="<?php echo URLROOT ?>/assets/images/gallery/9x.jpg" alt="Gallery Image 4">
              <div class="portfolio-overley">
                <div class="content"> <a href="<?php echo URLROOT ?>/assets/images/9x.jpg" class="fancybox image-link" data-fancybox="images" title="Gallery Image 4"><i class="fas fa-search-plus"></i></a> </div>
              </div>
            </div>
          </div>
                    <div class="col-lg-3 col-md-6">
            <div class="galleryImg"><img src="<?php echo URLROOT ?>/assets/images/gallery/10xy.jpg" alt="Gallery Image 5">
              <div class="portfolio-overley">
                <div class="content"> <a href="<?php echo URLROOT ?>/assets/images/10x.jpg" class="fancybox image-link" data-fancybox="images" title="Gallery Image 5"><i class="fas fa-search-plus"></i></a> </div>
              </div>
            </div>
          </div>
                    <div class="col-lg-3 col-md-6">
            <div class="galleryImg"><img src="<?php echo URLROOT ?>/assets/images/gallery/13x.png" alt="Gallery Image 6">
              <div class="portfolio-overley">
                <div class="content"> <a href="<?php echo URLROOT ?>/assets/images/13.png" class="fancybox image-link" data-fancybox="images" title="Gallery Image 6"><i class="fas fa-search-plus"></i></a> </div>
              </div>
            </div>
          </div>
                    <div class="col-lg-3 col-md-6">
            <div class="galleryImg"><img src="<?php echo URLROOT ?>/assets/images/gallery/12x.png" alt="test">
              <div class="portfolio-overley">
                <div class="content"> <a href="<?php echo URLROOT ?>/assets/images/12.png" class="fancybox image-link" data-fancybox="images" title="test"><i class="fas fa-search-plus"></i></a> </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="galleryImg"><img src="<?php echo URLROOT ?>/assets/images/gallery/14xy.jpg" alt="test">
              <div class="portfolio-overley">
                <div class="content"> <a href="<?php echo URLROOT ?>/assets/images/14x.jpg" class="fancybox image-link" data-fancybox="images" title="test"><i class="fas fa-search-plus"></i></a> </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="galleryImg"><img src="<?php echo URLROOT ?>/assets/images/gallery/15x.jpg" alt="Gallery Image 1">
              <div class="portfolio-overley">
                <div class="content"> <a href="<?php echo URLROOT ?>/assets/images/15x.jpg" class="fancybox image-link" data-fancybox="images" title="Gallery Image 1"><i class="fas fa-search-plus"></i></a> </div>
              </div>
            </div>
          </div>
                    <div class="col-lg-3 col-md-6">
            <div class="galleryImg"><img src="<?php echo URLROOT ?>/assets/images/gallery/16x.jpg" alt="Gallery Image 2">
              <div class="portfolio-overley">
                <div class="content"> <a href="<?php echo URLROOT ?>/assets/images/16x.jpg" class="fancybox image-link" data-fancybox="images" title="Gallery Image 2"><i class="fas fa-search-plus"></i></a> </div>
              </div>
            </div>
          </div>
                    <div class="col-lg-3 col-md-6">
            <div class="galleryImg"><img src="<?php echo URLROOT ?>/assets/images/gallery/17x.jpg" alt="Gallery Image 3">
              <div class="portfolio-overley">
                <div class="content"> <a href="<?php echo URLROOT ?>/assets/images/17x.jpg" class="fancybox image-link" data-fancybox="images" title="Gallery Image 3"><i class="fas fa-search-plus"></i></a> </div>
              </div>
            </div>
          </div>
                    <div class="col-lg-3 col-md-6">
            <div class="galleryImg"><img src="<?php echo URLROOT ?>/assets/images/gallery/18x.jpg" alt="Gallery Image 4">
              <div class="portfolio-overley">
                <div class="content"> <a href="<?php echo URLROOT ?>/assets/images/18x.jpg" class="fancybox image-link" data-fancybox="images" title="Gallery Image 4"><i class="fas fa-search-plus"></i></a> </div>
              </div>
            </div>
          </div>
                    <div class="col-lg-3 col-md-6">
            <div class="galleryImg"><img src="<?php echo URLROOT ?>/assets/images/gallery/21x.jpg" alt="Gallery Image 5">
              <div class="portfolio-overley">
                <div class="content"> <a href="<?php echo URLROOT ?>/assets/images/21x.jpg" class="fancybox image-link" data-fancybox="images" title="Gallery Image 5"><i class="fas fa-search-plus"></i></a> </div>
              </div>
            </div>
          </div>
                    <div class="col-lg-3 col-md-6">
            <div class="galleryImg"><img src="<?php echo URLROOT ?>/assets/images/gallery/22x.jpg" alt="Gallery Image 6">
              <div class="portfolio-overley">
                <div class="content"> <a href="<?php echo URLROOT ?>/assets/images/22x.jpg" class="fancybox image-link" data-fancybox="images" title="Gallery Image 6"><i class="fas fa-search-plus"></i></a> </div>
              </div>
            </div>
          </div>
                    <div class="col-lg-3 col-md-6">
            <div class="galleryImg"><img src="<?php echo URLROOT ?>/assets/images/gallery/24x.jpg" alt="test">
              <div class="portfolio-overley">
                <div class="content"> <a href="<?php echo URLROOT ?>/assets/images/24x.jpg" class="fancybox image-link" data-fancybox="images" title="test"><i class="fas fa-search-plus"></i></a> </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="galleryImg"><img src="<?php echo URLROOT ?>/assets/images/gallery/50.jpg" alt="test">
              <div class="portfolio-overley">
                <div class="content"> <a href="<?php echo URLROOT ?>/assets/images/50.jpg" class="fancybox image-link" data-fancybox="images" title="test"><i class="fas fa-search-plus"></i></a> </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="galleryImg"><img src="<?php echo URLROOT ?>/assets/images/gallery/51x.jpg" alt="Gallery Image 1">
              <div class="portfolio-overley">
                <div class="content"> <a href="<?php echo URLROOT ?>/assets/images/51.jpg" class="fancybox image-link" data-fancybox="images" title="Gallery Image 1"><i class="fas fa-search-plus"></i></a> </div>
              </div>
            </div>
          </div>
                    <div class="col-lg-3 col-md-6">
            <div class="galleryImg"><img src="<?php echo URLROOT ?>/assets/images/gallery/10xy.jpg" alt="Gallery Image 2">
              <div class="portfolio-overley">
                <div class="content"> <a href="<?php echo URLROOT ?>/assets/images/52.jpg" class="fancybox image-link" data-fancybox="images" title="Gallery Image 2"><i class="fas fa-search-plus"></i></a> </div>
              </div>
            </div>
          </div>
                    <div class="col-lg-3 col-md-6">
            <div class="galleryImg"><img src="<?php echo URLROOT ?>/assets/images/gallery/55x.jpg" alt="Gallery Image 3">
              <div class="portfolio-overley">
                <div class="content"> <a href="<?php echo URLROOT ?>/assets/images/55.jpg" class="fancybox image-link" data-fancybox="images" title="Gallery Image 3"><i class="fas fa-search-plus"></i></a> </div>
              </div>
            </div>
          </div>
                    <div class="col-lg-3 col-md-6">
            <div class="galleryImg"><img src="<?php echo URLROOT ?>/assets/images/gallery/56x.jpg" alt="Gallery Image 4">
              <div class="portfolio-overley">
                <div class="content"> <a href="<?php echo URLROOT ?>/assets/images/56.jpg" class="fancybox image-link" data-fancybox="images" title="Gallery Image 4"><i class="fas fa-search-plus"></i></a> </div>
              </div>
            </div>
          </div>
                    <div class="col-lg-3 col-md-6">
            <div class="galleryImg"><img src="<?php echo URLROOT ?>/assets/images/gallery/57.jpg" alt="Gallery Image 5">
              <div class="portfolio-overley">
                <div class="content"> <a href="<?php echo URLROOT ?>/assets/images/57.jpg" class="fancybox image-link" data-fancybox="images" title="Gallery Image 5"><i class="fas fa-search-plus"></i></a> </div>
              </div>
            </div>
          </div>
                    <div class="col-lg-3 col-md-6">
            <div class="galleryImg"><img src="<?php echo URLROOT ?>/assets/images/gallery/58.jpg" alt="Gallery Image 6">
              <div class="portfolio-overley">
                <div class="content"> <a href="<?php echo URLROOT ?>/assets/images/58.jpg" class="fancybox image-link" data-fancybox="images" title="Gallery Image 6"><i class="fas fa-search-plus"></i></a> </div>
              </div>
            </div>
          </div>
                    <div class="col-lg-3 col-md-6">
            <div class="galleryImg"><img src="<?php echo URLROOT ?>/assets/images/gallery/59.jpg" alt="test">
              <div class="portfolio-overley">
                <div class="content"> <a href="<?php echo URLROOT ?>/assets/images/59.jpg" class="fancybox image-link" data-fancybox="images" title="test"><i class="fas fa-search-plus"></i></a> </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="galleryImg"><img src="<?php echo URLROOT ?>/assets/images/gallery/61.jpg" alt="test">
              <div class="portfolio-overley">
                <div class="content"> <a href="<?php echo URLROOT ?>/assets/images/61.jpg" class="fancybox image-link" data-fancybox="images" title="test"><i class="fas fa-search-plus"></i></a> </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="galleryImg"><img src="<?php echo URLROOT ?>/assets/images/gallery/62x.jpg" alt="Gallery Image 1">
              <div class="portfolio-overley">
                <div class="content"> <a href="<?php echo URLROOT ?>/assets/images/62.jpg" class="fancybox image-link" data-fancybox="images" title="Gallery Image 1"><i class="fas fa-search-plus"></i></a> </div>
              </div>
            </div>
          </div>
                    <div class="col-lg-3 col-md-6">
            <div class="galleryImg"><img src="<?php echo URLROOT ?>/assets/images/gallery/64x.jpg" alt="Gallery Image 2">
              <div class="portfolio-overley">
                <div class="content"> <a href="<?php echo URLROOT ?>/assets/images/64.jpg" class="fancybox image-link" data-fancybox="images" title="Gallery Image 2"><i class="fas fa-search-plus"></i></a> </div>
              </div>
            </div>
          </div>
                    <div class="col-lg-3 col-md-6">
            <div class="galleryImg"><img src="<?php echo URLROOT ?>/assets/images/gallery/68x.jpg" alt="Gallery Image 3">
              <div class="portfolio-overley">
                <div class="content"> <a href="<?php echo URLROOT ?>/assets/images/68.jpg" class="fancybox image-link" data-fancybox="images" title="Gallery Image 3"><i class="fas fa-search-plus"></i></a> </div>
              </div>
            </div>
          </div>
                    <div class="col-lg-3 col-md-6">
            <div class="galleryImg"><img src="<?php echo URLROOT ?>/assets/images/gallery/122x.jpg" alt="Gallery Image 4">
              <div class="portfolio-overley">
                <div class="content"> <a href="<?php echo URLROOT ?>/assets/images/122x.jpg" class="fancybox image-link" data-fancybox="images" title="Gallery Image 4"><i class="fas fa-search-plus"></i></a> </div>
              </div>
            </div>
          </div>
                    <div class="col-lg-3 col-md-6">
            <div class="galleryImg"><img src="<?php echo URLROOT ?>/assets/images/gallery/133x.jpg" alt="Gallery Image 5">
              <div class="portfolio-overley">
                <div class="content"> <a href="<?php echo URLROOT ?>/assets/images/133x.jpg" class="fancybox image-link" data-fancybox="images" title="Gallery Image 5"><i class="fas fa-search-plus"></i></a> </div>
              </div>
            </div>
          </div>
                    <div class="col-lg-3 col-md-6">
            <div class="galleryImg"><img src="<?php echo URLROOT ?>/assets/images/gallery/222x.jpg" alt="Gallery Image 6">
              <div class="portfolio-overley">
                <div class="content"> <a href="<?php echo URLROOT ?>/assets/images/222x.jpg" class="fancybox image-link" data-fancybox="images" title="Gallery Image 6"><i class="fas fa-search-plus"></i></a> </div>
              </div>
            </div>
          </div>
                    <div class="col-lg-3 col-md-6">
            <div class="galleryImg"><img src="<?php echo URLROOT ?>/assets/images/gallery/233x.jpg" alt="test">
              <div class="portfolio-overley">
                <div class="content"> <a href="<?php echo URLROOT ?>/assets/images/233x.jpg" class="fancybox image-link" data-fancybox="images" title="test"><i class="fas fa-search-plus"></i></a> </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="galleryImg"><img src="<?php echo URLROOT ?>/assets/images/gallery/11x.jpg" alt="test">
              <div class="portfolio-overley">
                <div class="content"> <a href="<?php echo URLROOT ?>/assets/images/11x.jpg" class="fancybox image-link" data-fancybox="images" title="test"><i class="fas fa-search-plus"></i></a> </div>
              </div>
            </div>
          </div>
              </div>
               
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Gallery End --> 
<?php require APPROOT . '/views/inc/newsletter.php'; ?>
<?php require APPROOT . '/views/inc/footer.php'; ?>