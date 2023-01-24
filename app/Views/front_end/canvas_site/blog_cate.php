<?= $this->extend('front_end/canvas_site/layout'); ?>

<?= $this->section('content'); ?>
<div class="container">
	<section id="page-title">
	  <div class="container clearfix">
	    
	    <ol class="breadcrumb">
	      <li class="breadcrumb-item"><a href="<?= base_url() ?>">Home</a></li>
	      <li class="breadcrumb-item active"><a href="<?= base_url().'/'.$cate_slug ?>"><?= $cate_name ?></a></li>
	    </ol>
	  </div>
	</section>
</div>


<div class="container clearfix mt-5">
  

  <div id="posts" class="post-grid grid-container row" data-layout="fitRows">
    
    <div class="entry col-lg-4 col-md-6 col-12">
      <div class="grid-inner gradient-grey-orange rounded-1">
        <div class="bg-overlay position-relative">
          <div class="bg-overlay-content flex-wrap justify-content-start position-relative p-5 dark" data-hover-animate="fadeIn" data-hover-speed="0" style="opacity: 1 !important;">
            <div class="entry-title">
              <h2><a href="blog-single-full.html">This is a Standard post with a Youtube Video</a></h2>
            </div>
            <div class="entry-meta">
              <ul>
                <li><i class="icon-calendar3"></i> 30th Apr 2021</li>
                <li>
                  <a href="blog-single-full.html#comments"><i class="icon-comments"></i> 34</a>
                </li>
                <li>
                  <a href="#"><i class="icon-film"></i></a>
                </li>
              </ul>
            </div>
            <div class="entry-content">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione, voluptatem, dolorem animi nisi autem blanditiis enim culpa reiciendis et explicabo tenetur!</p>
              <a href="blog-single-full.html" class="more-link">Read More</a>
            </div>
          </div>
          <div
            class="bg-overlay-bg"
            data-hover-animate="fadeIn"
            data-hover-parent=".entry"
            style="background: radial-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.9)), url('images/blog/grid/3.jpg') no-repeat center center / cover;"
          ></div>
        </div>
      </div>
    </div>

    <div class="entry col-lg-4 col-md-6 col-12">
      <div class="grid-inner gradient-grey-orange rounded-1">
        <div class="bg-overlay position-relative">
          <div class="bg-overlay-content flex-wrap justify-content-start position-relative p-5 dark" data-hover-animate="fadeIn" data-hover-speed="0" style="opacity: 1 !important;">
            <div class="entry-title">
              <h2><a href="blog-single-full.html">This is a Standard post with a Youtube Video</a></h2>
            </div>
            <div class="entry-meta">
              <ul>
                <li><i class="icon-calendar3"></i> 30th Apr 2021</li>
                <li>
                  <a href="blog-single-full.html#comments"><i class="icon-comments"></i> 34</a>
                </li>
                <li>
                  <a href="#"><i class="icon-film"></i></a>
                </li>
              </ul>
            </div>
            <div class="entry-content">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione, voluptatem, dolorem animi nisi autem blanditiis enim culpa reiciendis et explicabo tenetur!</p>
              <a href="blog-single-full.html" class="more-link">Read More</a>
            </div>
          </div>
          <div
            class="bg-overlay-bg"
            data-hover-animate="fadeIn"
            data-hover-parent=".entry"
            style="background: radial-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.9)), url('images/blog/grid/3.jpg') no-repeat center center / cover;"
          ></div>
        </div>
      </div>
    </div>

    <div class="entry col-lg-4 col-md-6 col-12">
      <div class="grid-inner gradient-grey-orange rounded-1">
        <div class="bg-overlay position-relative">
          <div class="bg-overlay-content flex-wrap justify-content-start position-relative p-5 dark" data-hover-animate="fadeIn" data-hover-speed="0" style="opacity: 1 !important;">
            <div class="entry-title">
              <h2><a href="blog-single-full.html">This is a Standard post with a Youtube Video</a></h2>
            </div>
            <div class="entry-meta">
              <ul>
                <li><i class="icon-calendar3"></i> 30th Apr 2021</li>
                <li>
                  <a href="blog-single-full.html#comments"><i class="icon-comments"></i> 34</a>
                </li>
                <li>
                  <a href="#"><i class="icon-film"></i></a>
                </li>
              </ul>
            </div>
            <div class="entry-content">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione, voluptatem, dolorem animi nisi autem blanditiis enim culpa reiciendis et explicabo tenetur!</p>
              <a href="blog-single-full.html" class="more-link">Read More</a>
            </div>
          </div>
          <div
            class="bg-overlay-bg"
            data-hover-animate="fadeIn"
            data-hover-parent=".entry"
            style="background: radial-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.9)), url('images/blog/grid/3.jpg') no-repeat center center / cover;"
          ></div>
        </div>
      </div>
    </div>


    
  </div>
  <div class="clear"></div>




  <div class="row gutter-40 col-mb-80 mt-2">
    <div class="postcontent col-lg-9">
      <div id="posts" class="row grid-container gutter-40">

      	<div class="entry col-12">
	      	<div class="card bg-light imagescale h-shadow-sm shadow-ts">
	          <div class="row g-0 align-items-center">
	            <div class="col-md-4 d-flex align-self-stretch overflow-hidden">
	              <img src="https://themes.semicolonweb.com/html/canvas/images/blocks/preview/card-3/1.jpg" class="rounded-start" alt="..." />
	            </div>
	            <div class="col-md-8 p-4">
	              <div class="card-body">
	                <h3 class="card-title">Card Title</h3>
	                <p class="card-text mb-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores unde earum blanditiis voluptatum, maiores aspernatur ab repudiandae, et nisi culpa.</p>
	                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
	                <a href="#" class="btn btn-primary">Learn More</a>
	              </div>
	            </div>
	          </div>
	        </div>
	      </div>
        <div class="clear"></div>


        <div class="entry col-12">
          <div class="grid-inner row g-0">
            <div class="col-md-4">
              <a class="entry-image" href="images/blog/full/17.jpg" data-lightbox="image"><img src="https://themes.semicolonweb.com/html/canvas/images/blog/small/17.jpg" alt="Standard Post with Image" /></a>
            </div>
            <div class="col-md-8 ps-md-4">
              <div class="entry-title title-sm">
                <h2><a href="blog-single.html">This is a Standard post with a Preview Image</a></h2>
              </div>
              <div class="entry-meta">
                <ul>
                  <li><i class="icon-calendar3"></i> 10th Feb 2021</li>
                  <li>
                    <a href="#"><i class="icon-user"></i> admin</a>
                  </li>
                  <li><i class="icon-folder-open"></i> <a href="#">General</a>, <a href="#">Media</a></li>
                  <li>
                    <a href="blog-single.html#comments"><i class="icon-comments"></i> 13</a>
                  </li>
                  <li>
                    <a href="#"><i class="icon-camera-retro"></i></a>
                  </li>
                </ul>
              </div>
              <div class="entry-content">
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, asperiores quod est tenetur in. Eligendi, deserunt, blanditiis est quisquam doloribus voluptate id aperiam ea ipsum magni aut perspiciatis rem
                  voluptatibus officia eos rerum deleniti quae nihil facilis repellat atque vitae voluptatem libero at eveniet veritatis ab facere.
                </p>
                <a href="blog-single.html" class="more-link">Read More</a>
              </div>
            </div>
          </div>
        </div>
        <div class="entry col-12">
          <div class="grid-inner row g-0">
            <div class="col-md-4">
              <div class="entry-image">
                <iframe src="https://player.vimeo.com/video/87701971" width="500" height="281" allow="autoplay; fullscreen" allowfullscreen></iframe>
              </div>
            </div>
            <div class="col-md-8 ps-md-4">
              <div class="entry-title title-sm">
                <h2><a href="blog-single-full.html">This is a Standard post with an Embedded Video</a></h2>
              </div>
              <div class="entry-meta">
                <ul>
                  <li><i class="icon-calendar3"></i> 16th Feb 2021</li>
                  <li>
                    <a href="#"><i class="icon-user"></i> admin</a>
                  </li>
                  <li><i class="icon-folder-open"></i> <a href="#">Videos</a>, <a href="#">News</a></li>
                  <li>
                    <a href="blog-single-full.html#comments"><i class="icon-comments"></i> 19</a>
                  </li>
                  <li>
                    <a href="#"><i class="icon-film"></i></a>
                  </li>
                </ul>
              </div>
              <div class="entry-content">
                <p>
                  Asperiores, tenetur, blanditiis, quaerat odit ex exercitationem pariatur quibusdam veritatis quisquam laboriosam esse beatae hic perferendis velit deserunt soluta iste repellendus officia in neque veniam debitis
                  placeat quo unde reprehenderit eum facilis vitae.
                </p>
                <a href="blog-single-full.html" class="more-link">Read More</a>
              </div>
            </div>
          </div>
        </div>
        <div class="entry col-12">
          <div class="grid-inner row g-0">
            <div class="col-md-4">
              <div class="entry-image">
                <div class="fslider" data-arrows="false" data-lightbox="gallery">
                  <div class="flexslider">
                    <div class="slider-wrap">
                      <div class="slide">
                        <a href="images/blog/full/10.jpg" data-lightbox="gallery-item"><img src="images/blog/small/10.jpg" alt="Standard Post with Gallery" /></a>
                      </div>
                      <div class="slide">
                        <a href="images/blog/full/20.jpg" data-lightbox="gallery-item"><img src="images/blog/small/20.jpg" alt="Standard Post with Gallery" /></a>
                      </div>
                      <div class="slide">
                        <a href="images/blog/full/21.jpg" data-lightbox="gallery-item"><img src="images/blog/small/21.jpg" alt="Standard Post with Gallery" /></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-8 ps-md-4">
              <div class="entry-title title-sm">
                <h2><a href="blog-single-small.html">This is a Standard post with a Slider Gallery</a></h2>
              </div>
              <div class="entry-meta">
                <ul>
                  <li><i class="icon-calendar3"></i> 24th Feb 2021</li>
                  <li>
                    <a href="#"><i class="icon-user"></i> admin</a>
                  </li>
                  <li><i class="icon-folder-open"></i> <a href="#">Gallery</a>, <a href="#">Media</a></li>
                  <li>
                    <a href="blog-single-small.html#comments"><i class="icon-comments"></i> 21</a>
                  </li>
                  <li>
                    <a href="#"><i class="icon-picture"></i></a>
                  </li>
                </ul>
              </div>
              <div class="entry-content">
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione, voluptatem, dolorem animi nisi autem blanditiis enim culpa reiciendis et explicabo tenetur voluptate rerum molestiae eaque possimus
                  exercitationem eligendi fuga. Maiores, sunt eveniet doloremque porro hic exercitationem distinctio sequi adipisci.
                </p>
                <a href="blog-single-small.html" class="more-link">Read More</a>
              </div>
            </div>
          </div>
        </div>
        <div class="entry col-12">
          <div class="grid-inner row g-0">
            <div class="col-12">
              <div class="entry-image">
                <blockquote>
                  <p>"When you are courting a nice girl an hour seems like a second. When you sit on a red-hot cinder a second seems like an hour. That's relativity."</p>
                  <footer>Albert Einstein</footer>
                </blockquote>
              </div>
              <div class="entry-meta">
                <ul>
                  <li><i class="icon-calendar3"></i> 3rd Mar 2021</li>
                  <li>
                    <a href="#"><i class="icon-user"></i> admin</a>
                  </li>
                  <li><i class="icon-folder-open"></i> <a href="#">Quotes</a>, <a href="#">People</a></li>
                  <li>
                    <a href="blog-single.html#comments"><i class="icon-comments"></i> 23</a>
                  </li>
                  <li>
                    <a href="#"><i class="icon-quote-left"></i></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="entry col-12">
          <div class="grid-inner row g-0">
            <div class="col-md-4">
              <div class="entry-image">
                <div class="masonry-thumbs grid-container grid-4" data-big="3" data-lightbox="gallery">
                  <a class="grid-item" href="images/blog/full/2.jpg" data-lightbox="gallery-item"><img src="images/blog/small/2.jpg" alt="Image" /></a>
                  <a class="grid-item" href="images/blog/full/3.jpg" data-lightbox="gallery-item"><img src="images/blog/small/3.jpg" alt="Image" /></a>
                  <a class="grid-item" href="images/blog/full/6-1.jpg" data-lightbox="gallery-item"><img src="images/blog/small/6-1.jpg" alt="Image" /></a>
                  <a class="grid-item" href="images/blog/full/6-2.jpg" data-lightbox="gallery-item"><img src="images/blog/small/6-2.jpg" alt="Image" /></a>
                  <a class="grid-item" href="images/blog/full/12.jpg" data-lightbox="gallery-item"><img src="images/blog/small/12.jpg" alt="Image" /></a>
                  <a class="grid-item" href="images/blog/full/12-1.jpg" data-lightbox="gallery-item"><img src="images/blog/small/12-1.jpg" alt="Image" /></a>
                  <a class="grid-item" href="images/blog/full/13.jpg" data-lightbox="gallery-item"><img src="images/blog/small/13.jpg" alt="Image" /></a>
                  <a class="grid-item" href="images/blog/full/18.jpg" data-lightbox="gallery-item"><img src="images/blog/small/18.jpg" alt="Image" /></a>
                  <a class="grid-item" href="images/blog/full/19.jpg" data-lightbox="gallery-item"><img src="images/blog/small/19.jpg" alt="Image" /></a>
                </div>
              </div>
            </div>
            <div class="col-md-8 ps-md-4">
              <div class="entry-title title-sm">
                <h2><a href="blog-single-thumbs.html">This is a Standard post with Masonry Thumbs Gallery</a></h2>
              </div>
              <div class="entry-meta">
                <ul>
                  <li><i class="icon-calendar3"></i> 3rd Mar 2021</li>
                  <li>
                    <a href="#"><i class="icon-user"></i> admin</a>
                  </li>
                  <li><i class="icon-folder-open"></i> <a href="#">Gallery</a>, <a href="#">Media</a></li>
                  <li>
                    <a href="blog-single-thumbs.html#comments"><i class="icon-comments"></i> 21</a>
                  </li>
                  <li>
                    <a href="#"><i class="icon-picture"></i></a>
                  </li>
                </ul>
              </div>
              <div class="entry-content">
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione, voluptatem, dolorem animi nisi autem blanditiis enim culpa reiciendis et explicabo tenetur voluptate rerum molestiae eaque possimus
                  exercitationem eligendi fuga.
                </p>
                <a href="blog-single-thumbs.html" class="more-link">Read More</a>
              </div>
            </div>
          </div>
        </div>
        <div class="entry col-12">
          <div class="grid-inner row g-0">
            <div class="col-12">
              <div class="entry-image">
                <a href="https://themeforest.net" class="entry-link" target="_blank">
                  Themeforest.net
                  <span>- https://themeforest.net</span>
                </a>
              </div>
              <div class="entry-meta">
                <ul>
                  <li><i class="icon-calendar3"></i> 17th Mar 2021</li>
                  <li>
                    <a href="#"><i class="icon-user"></i> admin</a>
                  </li>
                  <li><i class="icon-folder-open"></i> <a href="#">Links</a>, <a href="#">Suggestions</a></li>
                  <li>
                    <a href="blog-single.html#comments"><i class="icon-comments"></i> 26</a>
                  </li>
                  <li>
                    <a href="#"><i class="icon-link"></i></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="entry col-12">
          <div class="grid-inner row g-0">
            <div class="col-12">
              <div class="entry-image">
                <div class="card">
                  <div class="card-body">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia, fuga optio voluptatibus saepe tenetur aliquam debitis eos accusantium! Vitae, hic, atque aliquid repellendus accusantium laudantium minus eaque
                    quibusdam ratione sapiente.
                  </div>
                </div>
              </div>
              <div class="entry-meta">
                <ul>
                  <li><i class="icon-calendar3"></i> 21st Mar 2021</li>
                  <li>
                    <a href="#"><i class="icon-user"></i> admin</a>
                  </li>
                  <li><i class="icon-folder-open"></i> <a href="#">Status</a>, <a href="#">News</a></li>
                  <li>
                    <a href="blog-single.html#comments"><i class="icon-comments"></i> 11</a>
                  </li>
                  <li>
                    <a href="#"><i class="icon-align-justify2"></i></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="entry col-12">
          <div class="grid-inner row g-0">
            <div class="col-md-4">
              <div class="entry-image">
                <iframe src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/301161123&amp;auto_play=false&amp;hide_related=true&amp;visual=true"></iframe>
              </div>
            </div>
            <div class="col-md-8 ps-md-4">
              <div class="entry-title title-sm">
                <h2><a href="blog-single.html">This is an Embedded Audio Post</a></h2>
              </div>
              <div class="entry-meta">
                <ul>
                  <li><i class="icon-calendar3"></i> 28th Apr 2021</li>
                  <li>
                    <a href="#"><i class="icon-user"></i> admin</a>
                  </li>
                  <li><i class="icon-folder-open"></i> <a href="#">Audio</a>, <a href="#">General</a></li>
                  <li>
                    <a href="blog-single.html#comments"><i class="icon-comments"></i> 16</a>
                  </li>
                  <li>
                    <a href="#"><i class="icon-music2"></i></a>
                  </li>
                </ul>
              </div>
              <div class="entry-content">
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione, voluptatem, dolorem animi nisi autem blanditiis enim culpa reiciendis et explicabo tenetur voluptate rerum molestiae eaque possimus
                  exercitationem eligendi fuga.
                </p>
                <a href="blog-single.html" class="more-link">Read More</a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="d-flex justify-content-between mt-5">
        <a href="#" class="btn btn-outline-secondary">&larr; Older</a>
        <a href="#" class="btn btn-outline-dark">Newer &rarr;</a>
      </div>
    </div>

    <div class="sidebar col-lg-3">
      <div class="sidebar-widgets-wrap">
        <div class="widget subscribe-widget clearfix">
          <div class="dark" style="padding: 25px; background-color: #383838; border-radius: 2px;">
            <div class="fancy-title title-border">
              <h4>Subscribe</h4>
            </div>
            <p style="font-size: 15px; line-height: 1.5; color: #999;">Subscribe to Our Newsletter to get Important News, Amazing Offers &amp; Inside Scoops:</p>
            <div class="widget-subscribe-form-result"></div>
            <form id="widget-subscribe-form2" action="include/subscribe.php" method="post" class="mb-0">
              <div class="input-group mx-auto">
                <div class="input-group-text"><i class="icon-email2"></i></div>
                <input type="email" id="widget-subscribe-form-email2" name="widget-subscribe-form-email" class="form-control required email" placeholder="Enter your Email" />
              </div>
              <button class="button button-3d w-100 button-small m-0" style="margin-top: 15px !important;" type="submit">Subscribe</button>
            </form>
          </div>
        </div>
        <div class="widget widget_links clearfix">
          <h4>Pages</h4>
          <ul>
            <li>
              <a href="#"><div>About Us</div></a>
            </li>
            <li>
              <a href="#"><div>About Us - Layout 2</div></a>
            </li>
            <li>
              <a href="#"><div>About Me</div></a>
            </li>
            <li>
              <a href="#"><div>Team Members</div></a>
            </li>
            <li>
              <a href="#"><div>Careers</div></a>
            </li>
            <li>
              <a href="#"><div>Side Navigation</div></a>
            </li>
            <li>
              <a href="#"><div>Page Submenu</div></a>
            </li>
            <li>
              <a href="#"><div>Services - Layout 1</div></a>
            </li>
            <li>
              <a href="#"><div>Services - Layout 2</div></a>
            </li>
            <li>
              <a href="#"><div>Services - Layout 3</div></a>
            </li>
            <li>
              <a href="#"><div>FAQs - Layout 1</div></a>
            </li>
            <li>
              <a href="#"><div>FAQs - Layout 2</div></a>
            </li>
            <li>
              <a href="#"><div>FAQs - Layout 3</div></a>
            </li>
            <li>
              <a href="#"><div>FAQs - Layout 4</div></a>
            </li>
            <li>
              <a href="#"><div>Full Width Page</div></a>
            </li>
            <li>
              <a href="#"><div>Full Width - Wide Page</div></a>
            </li>
            <li>
              <a href="#"><div>Right Sidebar Page</div></a>
            </li>
            <li>
              <a href="#"><div>Left Sidebar Page</div></a>
            </li>
            <li>
              <a href="#"><div>Both Sidebar Page</div></a>
            </li>
            <li>
              <a href="#"><div>Both Right Sidebar Page</div></a>
            </li>
            <li>
              <a href="#"><div>Both Left Sidebar Page</div></a>
            </li>
            <li>
              <a href="#"><div>Maintenance Page</div></a>
            </li>
            <li>
              <a href="#"><div>Blank Page</div></a>
            </li>
            <li>
              <a href="#"><div>Sitemap</div></a>
            </li>
            <li>
              <a href="#"><div>Login/Register</div></a>
            </li>
            <li>
              <a href="#"><div>404 - Simple Layout</div></a>
            </li>
            <li>
              <a href="#"><div>404 - Parallax Image</div></a>
            </li>
            <li>
              <a href="#"><div>404 - HTML5 Video</div></a>
            </li>
          </ul>
        </div>
        <div class="widget clearfix">
          <h4>Recent Posts</h4>
          <div class="posts-sm row col-mb-30" id="post-list-sidebar">
            <div class="entry col-12">
              <div class="grid-inner row g-0">
                <div class="col-auto">
                  <div class="entry-image">
                    <a href="#"><img src="images/magazine/small/3.jpg" alt="Image" /></a>
                  </div>
                </div>
                <div class="col ps-3">
                  <div class="entry-title">
                    <h4><a href="#">Lorem ipsum dolor sit amet, consectetur</a></h4>
                  </div>
                  <div class="entry-meta">
                    <ul>
                      <li>10th July 2021</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="entry col-12">
              <div class="grid-inner row g-0">
                <div class="col-auto">
                  <div class="entry-image">
                    <a href="#"><img src="images/magazine/small/2.jpg" alt="Image" /></a>
                  </div>
                </div>
                <div class="col ps-3">
                  <div class="entry-title">
                    <h4><a href="#">Elit Assumenda vel amet dolorum quasi</a></h4>
                  </div>
                  <div class="entry-meta">
                    <ul>
                      <li>10th July 2021</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="entry col-12">
              <div class="grid-inner row g-0">
                <div class="col-auto">
                  <div class="entry-image">
                    <a href="#"><img src="images/magazine/small/1.jpg" alt="Image" /></a>
                  </div>
                </div>
                <div class="col ps-3">
                  <div class="entry-title">
                    <h4><a href="#">Debitis nihil placeat, illum est nisi</a></h4>
                  </div>
                  <div class="entry-meta">
                    <ul>
                      <li>10th July 2021</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="widget clearfix">
          <h4>Connect with Us</h4>
          <a href="#" class="social-icon si-colored si-small si-facebook" data-bs-toggle="tooltip" data-bs-placement="top" title="Facebook">
            <i class="icon-facebook"></i>
            <i class="icon-facebook"></i>
          </a>
          <a href="#" class="social-icon si-colored si-small si-delicious" data-bs-toggle="tooltip" data-bs-placement="top" title="Delicious">
            <i class="icon-delicious"></i>
            <i class="icon-delicious"></i>
          </a>
          <a href="#" class="social-icon si-colored si-small si-android" data-bs-toggle="tooltip" data-bs-placement="top" title="Android">
            <i class="icon-android"></i>
            <i class="icon-android"></i>
          </a>
          <a href="#" class="social-icon si-colored si-small si-gplus" data-bs-toggle="tooltip" data-bs-placement="top" title="Google Plus">
            <i class="icon-gplus"></i>
            <i class="icon-gplus"></i>
          </a>
          <a href="#" class="social-icon si-colored si-small si-stumbleupon" data-bs-toggle="tooltip" data-bs-placement="top" title="Stumbleupon">
            <i class="icon-stumbleupon"></i>
            <i class="icon-stumbleupon"></i>
          </a>
          <a href="#" class="social-icon si-colored si-small si-foursquare" data-bs-toggle="tooltip" data-bs-placement="top" title="Foursquare">
            <i class="icon-foursquare"></i>
            <i class="icon-foursquare"></i>
          </a>
          <a href="#" class="social-icon si-colored si-small si-forrst" data-bs-toggle="tooltip" data-bs-placement="top" title="Forrst">
            <i class="icon-forrst"></i>
            <i class="icon-forrst"></i>
          </a>
          <a href="#" class="social-icon si-colored si-small si-digg" data-bs-toggle="tooltip" data-bs-placement="top" title="Digg">
            <i class="icon-digg"></i>
            <i class="icon-digg"></i>
          </a>
          <a href="#" class="social-icon si-colored si-small si-spotify" data-bs-toggle="tooltip" data-bs-placement="top" title="Spotify">
            <i class="icon-spotify"></i>
            <i class="icon-spotify"></i>
          </a>
          <a href="#" class="social-icon si-colored si-small si-reddit" data-bs-toggle="tooltip" data-bs-placement="top" title="Reddit">
            <i class="icon-reddit"></i>
            <i class="icon-reddit"></i>
          </a>
          <a href="#" class="social-icon si-colored si-small si-blogger" data-bs-toggle="tooltip" data-bs-placement="top" title="Blogger">
            <i class="icon-blogger"></i>
            <i class="icon-blogger"></i>
          </a>
          <a href="#" class="social-icon si-colored si-small si-dribbble" data-bs-toggle="tooltip" data-bs-placement="top" title="Dribbble">
            <i class="icon-dribbble"></i>
            <i class="icon-dribbble"></i>
          </a>
          <a href="#" class="social-icon si-colored si-small si-flickr" data-bs-toggle="tooltip" data-bs-placement="top" title="Flickr">
            <i class="icon-flickr"></i>
            <i class="icon-flickr"></i>
          </a>
          <a href="#" class="social-icon si-colored si-small si-linkedin" data-bs-toggle="tooltip" data-bs-placement="top" title="Linked In">
            <i class="icon-linkedin"></i>
            <i class="icon-linkedin"></i>
          </a>
          <a href="#" class="social-icon si-colored si-small si-rss" data-bs-toggle="tooltip" data-bs-placement="top" title="RSS">
            <i class="icon-rss"></i>
            <i class="icon-rss"></i>
          </a>
          <a href="#" class="social-icon si-colored si-small si-skype" data-bs-toggle="tooltip" data-bs-placement="top" title="Skype">
            <i class="icon-skype"></i>
            <i class="icon-skype"></i>
          </a>
          <a href="#" class="social-icon si-colored si-small si-twitter" data-bs-toggle="tooltip" data-bs-placement="top" title="Twitter">
            <i class="icon-twitter"></i>
            <i class="icon-twitter"></i>
          </a>
          <a href="#" class="social-icon si-colored si-small si-youtube" data-bs-toggle="tooltip" data-bs-placement="top" title="Youtube">
            <i class="icon-youtube"></i>
            <i class="icon-youtube"></i>
          </a>
          <a href="#" class="social-icon si-colored si-small si-vimeo" data-bs-toggle="tooltip" data-bs-placement="top" title="Vimeo">
            <i class="icon-vimeo"></i>
            <i class="icon-vimeo"></i>
          </a>
          <a href="#" class="social-icon si-colored si-small si-yahoo" data-bs-toggle="tooltip" data-bs-placement="top" title="Yahoo">
            <i class="icon-yahoo"></i>
            <i class="icon-yahoo"></i>
          </a>
          <a href="#" class="social-icon si-colored si-small si-github" data-bs-toggle="tooltip" data-bs-placement="top" title="Github">
            <i class="icon-github-circled"></i>
            <i class="icon-github-circled"></i>
          </a>
          <a href="#" class="social-icon si-colored si-small si-tumblr" data-bs-toggle="tooltip" data-bs-placement="top" title="Trumblr">
            <i class="icon-tumblr"></i>
            <i class="icon-tumblr"></i>
          </a>
          <a href="#" class="social-icon si-colored si-small si-instagram" data-bs-toggle="tooltip" data-bs-placement="top" title="Instagram">
            <i class="icon-instagram"></i>
            <i class="icon-instagram"></i>
          </a>
          <a href="#" class="social-icon si-colored si-small si-pinterest" data-bs-toggle="tooltip" data-bs-placement="top" title="Pinterst">
            <i class="icon-pinterest"></i>
            <i class="icon-pinterest"></i>
          </a>
        </div>
        <div class="widget clearfix">
          <h4>Embed Videos</h4>
          <iframe src="//player.vimeo.com/video/103927232" width="500" height="250" allow="autoplay; fullscreen" allowfullscreen></iframe>
        </div>
      </div>
    </div>
  </div>
</div>


	
<div class="container clearfix mt-5">

	<div class="row col-mb-50">
	  <div class="col-lg-8">
	    
	    <div class="row posts-md col-mb-30">

	    	

			  <?php foreach($post_cate as $key): ?>
		      <div class="entry col-md-6">
		        <div class="grid-inner">
		          <div class="entry-image">
		            <a href="<?= base_url('').'/'.$cate_slug.'/'.$key['post_slug'].'-'.$key['id'].'.html'; ?>" title="<?= $key['post_title']; ?>"><img src="<?= base_url('public/upload/tinymce/image_asset/').'/'.$key['post_image']; ?>" alt="<?= $key['post_title']; ?>" /></a>
		          </div>
		          <div class="entry-title title-sm nott">
		            <h3><a href="<?= base_url('').'/'.$cate_slug.'/'.$key['post_slug'].'-'.$key['id'].'.html'; ?>" title="<?= $key['post_title']; ?>"><?= $key['post_title']; ?></a></h3>
		          </div>
		          <div class="entry-meta">
		            <ul>
		              <li><i class="icon-calendar3"></i>
		              	<?php
			            		$datetime = (new \CodeIgniter\I18n\Time);
			            		$yearNow = $datetime::now()->getYear();
			            		$yearMonthsNow = $datetime::now()->getMonth();
			            		$yearPost = $datetime::parse($key['updated_at'])->getYear();
			            		
			            		$yearMonthsPost = $datetime::parse($key['updated_at'])->getMonth();
			            		if(($yearNow - $yearPost) == 1 && $yearMonthsNow >= $yearMonthsPost){
			            			echo $datetime::parse($key['updated_at'])->humanize();
			            		}
			            		if(($yearNow - $yearPost) > 1){
			            			echo $datetime::parse($key['updated_at'])->humanize();
			            		}else{
			            			echo $datetime::parse($key['updated_at'])->toDateString();
			            		}
			            		

			            	?>
		              </li>
		              <!-- <li>
		                <a href="blog-single.html#comments"><i class="icon-comments"></i> 13</a>
		              </li> -->
		            </ul>
		          </div>
		          <div class="entry-content">
		            <p><?= $key['post_intro']; ?></p>
		          </div>
		        </div>
		      </div>
		    <?php endforeach; ?>

	      
	    </div>
	  </div>
	  <div class="col-lg-4">
	    
	    <div class="fslider testimonial p-0 border-0 shadow-none" data-animation="slide" data-arrows="false">
	      <div class="flexslider">
	        <div class="slider-wrap">
	          <div class="slide">
	            <div class="testi-image">
	              <a href="#"><img src="images/testimonials/3.jpg" alt="Customer Testimonails" /></a>
	            </div>
	            <div class="testi-content">
	              <p>Similique fugit repellendus expedita excepturi iure perferendis provident quia eaque. Repellendus, vero numquam?</p>
	              <div class="testi-meta">
	                Steve Jobs
	                <span>Apple Inc.</span>
	              </div>
	            </div>
	          </div>
	          <div class="slide">
	            <div class="testi-image">
	              <a href="#"><img src="images/testimonials/2.jpg" alt="Customer Testimonails" /></a>
	            </div>
	            <div class="testi-content">
	              <p>Natus voluptatum enim quod necessitatibus quis expedita harum provident eos obcaecati id culpa corporis molestias.</p>
	              <div class="testi-meta">
	                Collis Ta'eed
	                <span>Envato Inc.</span>
	              </div>
	            </div>
	          </div>
	          <div class="slide">
	            <div class="testi-image">
	              <a href="#"><img src="images/testimonials/1.jpg" alt="Customer Testimonails" /></a>
	            </div>
	            <div class="testi-content">
	              <p>Incidunt deleniti blanditiis quas aperiam recusandae consequatur ullam quibusdam cum libero illo rerum!</p>
	              <div class="testi-meta">
	                John Doe
	                <span>XYZ Inc.</span>
	              </div>
	            </div>
	          </div>
	        </div>
	      </div>
	    </div>
	    <div class="card topmargin overflow-hidden">
	      <div class="card-body">
	        <h4>Opening Hours</h4>
	        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit reprehenderit voluptates.</p>
	        <ul class="iconlist mb-0">
	          <li><i class="icon-time color"></i> <strong>Mondays-Fridays:</strong> 10AM to 7PM</li>
	          <li><i class="icon-time color"></i> <strong>Saturdays:</strong> 11AM to 3PM</li>
	          <li><i class="icon-time text-danger"></i> <strong>Sundays:</strong> Closed</li>
	        </ul>
	        <i class="icon-time bgicon"></i>
	      </div>
	    </div>

	    <div class="widget clearfix">
        <h4>Most View</h4>
        <div class="posts-sm row col-mb-30" id="post-list-sidebar">
          <div class="entry col-12">
            <div class="grid-inner row g-0">
              <div class="col-auto">
                <div class="entry-image">
                  <a href="#"><img src="images/magazine/small/3.jpg" alt="Image" /></a>
                </div>
              </div>
              <div class="col ps-3">
                <div class="entry-title">
                  <h4><a href="#">Lorem ipsum dolor sit amet, consectetur</a></h4>
                </div>
                <div class="entry-meta">
                  <ul>
                    <li>10th July 2021</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="entry col-12">
            <div class="grid-inner row g-0">
              <div class="col-auto">
                <div class="entry-image">
                  <a href="#"><img src="images/magazine/small/2.jpg" alt="Image" /></a>
                </div>
              </div>
              <div class="col ps-3">
                <div class="entry-title">
                  <h4><a href="#">Elit Assumenda vel amet dolorum quasi</a></h4>
                </div>
                <div class="entry-meta">
                  <ul>
                    <li>10th July 2021</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="entry col-12">
            <div class="grid-inner row g-0">
              <div class="col-auto">
                <div class="entry-image">
                  <a href="#"><img src="images/magazine/small/1.jpg" alt="Image" /></a>
                </div>
              </div>
              <div class="col ps-3">
                <div class="entry-title">
                  <h4><a href="#">Debitis nihil placeat, illum est nisi</a></h4>
                </div>
                <div class="entry-meta">
                  <ul>
                    <li>10th July 2021</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


	  </div>
	</div>
</div>

<?= $this->endSection(); ?>


<?= $this->section('yoast_seo'); ?>
  <link rel="alternate" href="<?= base_url() ?>" hreflang="vi-vn"/>
  <meta rel="canonical" href="<?= base_url() ?>"/>

  <title><?= $title ?></title>

  
  <meta name="description" content="<?= $meta_desc ?>" />
  <meta name="keywords" content="<?= $meta_key ?>" />
  <meta name="title" content="<?= $title ?>" />
  


  <meta name="copyright" content="<?= base_url() ?>" />



  <!-- Schema.org markup for Google+ -->
  
  <meta itemprop="name" content="<?= $title ?>">
  <meta itemprop="image" content="<?= $image ?>">

  <!-- Twitter Card data -->
  <meta name="twitter:card" content="article">
  <meta name="twitter:site" content="<?= $title ?>">
  <meta name="twitter:title" content="<?= $title ?>">
  <meta name="twitter:description" content="<?= $meta_desc ?>">
  <meta name="twitter:creator" content="<?= base_url() ?>">
  <meta name="twitter:image" content="<?= base_url('public/upload/tinymce/image_asset').'/'.$image ?>">

  <!-- Open Graph data -->
  <meta property="og:type" content="article" />
  <meta property="og:site_name" content="<?= $title ?>" />
  <meta property="og:title" content="<?= $title ?>" />
  <meta property="og:url" content="<?= base_url() ?>" />
  <meta property="og:image" content="<?= base_url('public/upload/tinymce/image_asset').'/'.$image ?>" />
  <meta property="og:description" content="<?= $meta_desc ?>" />
  <meta property="og:locale" content="vi_VN" />
  
  <meta name="thumbnail" content="<?= base_url('public/upload/tinymce/image_asset').'/'.$image ?>" />
  <meta property="og:image:secure_url" content="<?= base_url('public/upload/tinymce/image_asset').'/'.$image ?>" />

  


  <meta content="news" itemprop="genre" name="medium"/>
  <meta content="vi-VN" itemprop="inLanguage"/>
  <meta content="" itemprop="articleSection"/>
  <meta content="<?= $created_at ?>" itemprop="datePublished" name="pubdate"/>
  <meta content="<?= $updated_at ?>" itemprop="dateModified" name="lastmod"/>
  <meta content="<?= $created_at ?>" itemprop="dateCreated"/>

  
<?= $this->endSection(); ?>