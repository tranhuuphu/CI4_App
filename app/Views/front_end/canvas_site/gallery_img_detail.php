<?= $this->extend('front_end/canvas_site/layout'); ?>

<?= $this->section('content'); ?>

<div class="container">
	<section id="page-title" style="margin-bottom: 25px; background-color: #a0c4fa;">
	  <div class="container clearfix">
	    
	    <ol class="breadcrumb" style="padding: 20px 0; font-size: 18px; font-weight: 500;">
	      <li class="breadcrumb-item"><a href="<?= base_url() ?>"><i class="fa-duotone fa-house"></i></a></li>
	      <li class="breadcrumb-item"><a href="#"><i class="far fa-images"></i></a></li>
	      <li class="breadcrumb-item active"><a href="#" title="#">Ảnh</a></li>
	    </ol>
	  </div>
	</section>
</div>

<section id="content">
  <div class="content-wrap">
    <div class="container">
      <div class="row g-5 py-md-5">
        <div class="col-lg-7 col-xl-8 portfolio-single-image">
          <a href="#">
            <img src="https://source.unsplash.com/yTWq8n3-4k0/900x900" alt="Image" class="rounded-6" />
          </a>
        </div>

        <div class="col-lg-5 col-xl-4 portfolio-single-content px-5 ps-xl-5 pt-xl-4">
          <h2 class="fs-3 fw-bold">About this Project</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis, dolores, facere, corrupti delectus ex quidem adipisci tempore.</p>
          <p>Illum molestias cupiditate eveniet dolore obcaecati voluptatibus est quos eos id recusandae officia. Cupiditate, voluptates quibusdam ipsum vel corporis laboriosam id est doloremque?</p>

          <div class="row g-4 mt-4 mb-6">
            <div class="col-6">
              <h5 class="mb-2">Created by</h5>
              <p class="text-medium op-08 mb-0">John Doe</p>
            </div>
            <div class="col-6">
              <h5 class="mb-2">Completed on</h5>
              <p class="text-medium op-08 mb-0">17th March 2022</p>
            </div>
            <div class="col-6">
              <h5 class="mb-2">Skills</h5>
              <div><a href="#" class="badge bg-color h-bg-dark h-text-light all-ts py-2 px-3">HTML</a> <a href="#" class="badge bg-color h-bg-dark h-text-light all-ts py-2 px-3">CSS3</a></div>
            </div>
            <div class="col-6">
              <h5 class="mb-2">Client</h5>
              <p class="text-medium op-08 mb-0"><a href="#">Google Inc.</a></p>
            </div>
          </div>
          <a href="#" class="text-medium">Visit this Project <i class="bi-arrow-up-right-circle-fill ms-1 align-middle fs-5 position-relative" style="top: -2px;"></i></a>

          <div class="card mt-6 pt-4 border-0 border-top rounded-0 border-default">
            <div class="card-body p-0">
              <div class="d-flex align-items-center justify-content-between">
                <h6 class="fs-6 fw-semibold mb-0">Share:</h6>
                <div class="d-flex">
                  <a href="#" class="social-icon si-small text-white border-transparent rounded-circle bg-facebook" title="Facebook">
                    <i class="fa-brands fa-facebook-f"></i>
                    <i class="fa-brands fa-facebook-f"></i>
                  </a>
                  <a href="#" class="social-icon si-small text-white border-transparent rounded-circle bg-twitter" title="Twitter">
                    <i class="fa-brands fa-twitter"></i>
                    <i class="fa-brands fa-twitter"></i>
                  </a>
                  <a href="#" class="social-icon si-small text-white border-transparent rounded-circle bg-pinterest" title="Pinterest">
                    <i class="fa-brands fa-pinterest-p"></i>
                    <i class="fa-brands fa-pinterest-p"></i>
                  </a>
                  <a href="#" class="social-icon si-small text-white border-transparent rounded-circle bg-whatsapp" title="Whatsapp">
                    <i class="fa-brands fa-whatsapp"></i>
                    <i class="fa-brands fa-whatsapp"></i>
                  </a>
                  <a href="#" class="social-icon si-small text-white border-transparent rounded-circle bg-rss" title="RSS">
                    <i class="fa-solid fa-rss"></i>
                    <i class="fa-solid fa-rss"></i>
                  </a>
                  <a href="#" class="social-icon si-small text-white border-transparent rounded-circle bg-email3 me-0" title="Mail">
                    <i class="fa-solid fa-envelope"></i>
                    <i class="fa-solid fa-envelope"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="row justify-content-between py-4 mt-4 mb-6 mx-0 gx-0 border-top border-bottom border-default">
        <div class="col">
          <a href="#" class="d-inline-flex align-items-center text-dark h-text-color"><i class="uil uil-angle-left-b fs-3 me-1"></i><span>Previous Project</span></a>
        </div>
        <div class="col text-center">
          <a href="#" class="d-inline-flex align-items-center text-dark h-text-color"><i class="bi-grid fs-3"></i></a>
        </div>
        <div class="col text-end">
          <a href="#" class="d-inline-flex align-items-center text-dark h-text-color"><span>Next Project</span><i class="uil uil-angle-right-b fs-3 ms-1"></i></a>
        </div>
      </div>

      <h4 class="fs-4 fw-medium">Related Projects</h4>
      <div id="related-portfolio" class="owl-carousel portfolio-carousel carousel-widget" data-margin="20" data-pagi="false" data-autoplay="5000" data-items-xs="1" data-items-sm="2" data-items-md="3" data-items-lg="4">
        <div class="oc-item">
          <div class="portfolio-item">
            <div class="portfolio-image">
              <a href="portfolio-single.html">
                <img src="images/portfolio/4/1.jpg" alt="Open Imagination" />
              </a>
              <div class="bg-overlay">
                <div class="bg-overlay-content dark" data-hover-animate="fadeIn" data-hover-speed="350">
                  <a href="images/portfolio/full/1.jpg" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeInUpSmall" data-hover-speed="350" data-lightbox="image">
                    <i class="uil uil-plus"></i>
                  </a>
                  <a href="portfolio-single.html" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeInUpSmall" data-hover-speed="350">
                    <i class="uil uil-ellipsis-h"></i>
                  </a>
                </div>
                <div class="bg-overlay-bg dark" data-hover-animate="fadeIn" data-hover-speed="350"></div>
              </div>
            </div>
            <div class="portfolio-desc">
              <h3><a href="portfolio-single.html">Open Imagination</a></h3>
              <span><a href="#">Media</a>, <a href="#">Icons</a></span>
            </div>
          </div>
        </div>
        <div class="oc-item">
          <div class="portfolio-item">
            <div class="portfolio-image">
              <a href="portfolio-single.html">
                <img src="images/portfolio/4/2.jpg" alt="Locked Steel Gate" />
              </a>
              <div class="bg-overlay">
                <div class="bg-overlay-content dark" data-hover-animate="fadeIn" data-hover-speed="350">
                  <a href="images/portfolio/full/2.jpg" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeInUpSmall" data-hover-speed="350" data-lightbox="image">
                    <i class="uil uil-plus"></i>
                  </a>
                  <a href="portfolio-single.html" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeInUpSmall" data-hover-speed="350">
                    <i class="uil uil-ellipsis-h"></i>
                  </a>
                </div>
                <div class="bg-overlay-bg dark" data-hover-animate="fadeIn" data-hover-speed="350"></div>
              </div>
            </div>
            <div class="portfolio-desc">
              <h3><a href="portfolio-single.html">Locked Steel Gate</a></h3>
              <span><a href="#">Illustrations</a></span>
            </div>
          </div>
        </div>
        <div class="oc-item">
          <div class="portfolio-item">
            <div class="portfolio-image">
              <a href="#">
                <img src="images/portfolio/4/3.jpg" alt="Mac Sunglasses" />
              </a>
              <div class="bg-overlay">
                <div class="bg-overlay-content dark" data-hover-animate="fadeIn" data-hover-speed="350">
                  <a href="https://vimeo.com/89396394" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeInUpSmall" data-hover-speed="350" data-lightbox="iframe">
                    <i class="uil uil-play"></i>
                  </a>
                  <a href="portfolio-single.html" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeInUpSmall" data-hover-speed="350">
                    <i class="uil uil-ellipsis-h"></i>
                  </a>
                </div>
                <div class="bg-overlay-bg dark" data-hover-animate="fadeIn" data-hover-speed="350"></div>
              </div>
            </div>
            <div class="portfolio-desc">
              <h3><a href="portfolio-single-video.html">Mac Sunglasses</a></h3>
              <span><a href="#">Graphics</a>, <a href="#">UI Elements</a></span>
            </div>
          </div>
        </div>
        <div class="oc-item">
          <div class="portfolio-item">
            <div class="portfolio-image">
              <a href="#">
                <img src="images/portfolio/4/4.jpg" alt="Morning Dew" />
              </a>
              <div class="bg-overlay" data-lightbox="gallery">
                <div class="bg-overlay-content dark" data-hover-animate="fadeIn">
                  <a href="images/portfolio/full/4.jpg" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-lightbox="gallery-item">
                    <i class="uil uil-images"></i>
                  </a>
                  <a href="images/portfolio/full/4-1.jpg" class="d-none" data-lightbox="gallery-item"></a>
                  <a href="portfolio-single.html" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350">
                    <i class="uil uil-ellipsis-h"></i>
                  </a>
                </div>
                <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
              </div>
            </div>
            <div class="portfolio-desc">
              <h3><a href="portfolio-single-gallery.html">Morning Dew</a></h3>
              <span><a href="#">Icons</a>, <a href="#">Illustrations</a></span>
            </div>
          </div>
        </div>
        <div class="oc-item">
          <div class="portfolio-item">
            <div class="portfolio-image">
              <a href="portfolio-single.html">
                <img src="images/portfolio/4/5.jpg" alt="Console Activity" />
              </a>
              <div class="bg-overlay">
                <div class="bg-overlay-content dark" data-hover-animate="fadeIn">
                  <a
                    href="images/portfolio/full/5.jpg"
                    class="overlay-trigger-icon bg-light text-dark"
                    data-hover-animate="fadeInDownSmall"
                    data-hover-animate-out="fadeOutUpSmall"
                    data-hover-speed="350"
                    data-lightbox="image"
                    title="Image"
                  >
                    <i class="uil uil-plus"></i>
                  </a>
                  <a href="portfolio-single.html" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350">
                    <i class="uil uil-ellipsis-h"></i>
                  </a>
                </div>
                <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
              </div>
            </div>
            <div class="portfolio-desc">
              <h3><a href="portfolio-single.html">Console Activity</a></h3>
              <span><a href="#">UI Elements</a>, <a href="#">Media</a></span>
            </div>
          </div>
        </div>
        <div class="oc-item">
          <div class="portfolio-item">
            <div class="portfolio-image">
              <a href="portfolio-single-gallery.html">
                <img src="images/portfolio/4/6.jpg" alt="Shake It!" />
              </a>
              <div class="bg-overlay" data-lightbox="gallery">
                <div class="bg-overlay-content dark" data-hover-animate="fadeIn">
                  <a href="images/portfolio/full/6.jpg" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-lightbox="gallery-item">
                    <i class="uil uil-images"></i>
                  </a>
                  <a href="images/portfolio/full/6-1.jpg" class="d-none" data-lightbox="gallery-item"></a>
                  <a href="images/portfolio/full/6-2.jpg" class="d-none" data-lightbox="gallery-item"></a>
                  <a href="images/portfolio/full/6-3.jpg" class="d-none" data-lightbox="gallery-item"></a>
                  <a href="portfolio-single-gallery.html" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350">
                    <i class="uil uil-ellipsis-h"></i>
                  </a>
                </div>
                <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
              </div>
            </div>
            <div class="portfolio-desc">
              <h3><a href="portfolio-single-gallery.html">Shake It!</a></h3>
              <span><a href="#">Illustrations</a>, <a href="#">Graphics</a></span>
            </div>
          </div>
        </div>
        <div class="oc-item">
          <div class="portfolio-item">
            <div class="portfolio-image">
              <a href="portfolio-single-video.html">
                <img src="images/portfolio/4/7.jpg" alt="Backpack Contents" />
              </a>
              <div class="bg-overlay">
                <div class="bg-overlay-content dark" data-hover-animate="fadeIn">
                  <a
                    href="https://www.youtube.com/watch?v=kuceVNBTJio"
                    class="overlay-trigger-icon bg-light text-dark"
                    data-hover-animate="fadeInDownSmall"
                    data-hover-animate-out="fadeOutUpSmall"
                    data-hover-speed="350"
                    data-lightbox="iframe"
                  >
                    <i class="uil uil-play"></i>
                  </a>
                  <a href="portfolio-single.html" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350">
                    <i class="uil uil-ellipsis-h"></i>
                  </a>
                </div>
                <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
              </div>
            </div>
            <div class="portfolio-desc">
              <h3><a href="portfolio-single-video.html">Backpack Contents</a></h3>
              <span><a href="#">UI Elements</a>, <a href="#">Icons</a></span>
            </div>
          </div>
        </div>
        <div class="oc-item">
          <div class="portfolio-item">
            <div class="portfolio-image">
              <a href="portfolio-single.html">
                <img src="images/portfolio/4/8.jpg" alt="Sunset Bulb Glow" />
              </a>
              <div class="bg-overlay">
                <div class="bg-overlay-content dark" data-hover-animate="fadeIn">
                  <a
                    href="images/portfolio/full/8.jpg"
                    class="overlay-trigger-icon bg-light text-dark"
                    data-hover-animate="fadeInDownSmall"
                    data-hover-animate-out="fadeOutUpSmall"
                    data-hover-speed="350"
                    data-lightbox="image"
                    title="Image"
                  >
                    <i class="uil uil-plus"></i>
                  </a>
                  <a href="portfolio-single.html" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350">
                    <i class="uil uil-ellipsis-h"></i>
                  </a>
                </div>
                <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
              </div>
            </div>
            <div class="portfolio-desc">
              <h3><a href="portfolio-single.html">Sunset Bulb Glow</a></h3>
              <span><a href="#">Graphics</a></span>
            </div>
          </div>
        </div>
        <div class="oc-item">
          <div class="portfolio-item">
            <div class="portfolio-image">
              <a href="portfolio-single.html">
                <img src="images/portfolio/4/9.jpg" alt="Bridge Side" />
              </a>
              <div class="bg-overlay" data-lightbox="gallery">
                <div class="bg-overlay-content dark" data-hover-animate="fadeIn">
                  <a href="images/portfolio/full/9.jpg" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-lightbox="gallery-item">
                    <i class="uil uil-images"></i>
                  </a>
                  <a href="images/portfolio/full/9-1.jpg" class="d-none" data-lightbox="gallery-item"></a>
                  <a href="images/portfolio/full/9-2.jpg" class="d-none" data-lightbox="gallery-item"></a>
                  <a href="portfolio-single-gallery.html" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350">
                    <i class="uil uil-ellipsis-h"></i>
                  </a>
                </div>
                <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
              </div>
            </div>
            <div class="portfolio-desc">
              <h3><a href="portfolio-single.html">Bridge Side</a></h3>
              <span><a href="#">Illustrations</a>, <a href="#">Icons</a></span>
            </div>
          </div>
        </div>
        <div class="oc-item">
          <div class="portfolio-item">
            <div class="portfolio-image">
              <a href="portfolio-single-video.html">
                <img src="images/portfolio/4/10.jpg" alt="Study Table" />
              </a>
              <div class="bg-overlay">
                <div class="bg-overlay-content dark" data-hover-animate="fadeIn">
                  <a href="https://vimeo.com/91973305" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-lightbox="iframe">
                    <i class="uil uil-play"></i>
                  </a>
                  <a href="portfolio-single.html" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350">
                    <i class="uil uil-ellipsis-h"></i>
                  </a>
                </div>
                <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
              </div>
            </div>
            <div class="portfolio-desc">
              <h3><a href="portfolio-single-video.html">Study Table</a></h3>
              <span><a href="#">Graphics</a>, <a href="#">Media</a></span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?= $this->endSection(); ?>

