<?=$this->extend('layout/home_layout')?>

<?=$this->section('bodycontent')?>

<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="hero-container" data-aos="fade-in">
            <?php foreach ($personalData as $item): ?>
                <h1><?= esc($item['nama']) ?></h1>
                <p>I'm <span class="typed" data-typed-items="Web Developer, <?= esc($item['affliate']) ?>"></span></p>
            
    </div>
</section><!-- End Hero -->

<main id="main">

<!-- ======= About Section ======= -->
<section id="about" class="about">
  <div class="container">

    <div class="section-title">
      <h2>About</h2>
      <p>
        Perkenalkan, nama saya Faiz Akhmad Daulay. Saya adalah seorang web developer yang berfokus pada pengembangan website dan aplikasi berbasis web.
      </p>
    </div>

    <div class="row">
      <div class="col-lg-4" data-aos="fade-right">
        <img src="assets/img/Faz-no-bg.png" class="img-fluid" alt="">
      </div>
      <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
        <h3>Web Developer.</h3>
        <p class="fst-italic">
          Saya adalah seorang web developer yang berfokus pada pengembangan website dan aplikasi berbasis web. 
          Saya memiliki pengalaman dalam pengembangan website dan aplikasi berbasis web menggunakan berbagai teknologi seperti HTML, CSS, JavaScript, dan PHP.
        </p>
        <div class="row">
          <div class="col-lg-6">
            <ul>
              <li><i class="bi bi-chevron-right"></i> <strong>Birthday</strong> <span>: <?= esc($item['birth']) ?></span></li>
              <li><i class="bi bi-chevron-right"></i> <strong>Age</strong> <span>: <?= esc($item['age']) ?></span></li>
              <li><i class="bi bi-chevron-right"></i> <strong>Phone</strong> <span>: +<?= esc($item['phone_numb']) ?></span></li>
              <li><i class="bi bi-chevron-right"></i> <strong>City</strong> <span>: <?= esc($item['Kota/kab'])?></span></li>
            </ul>
          </div>
          <div class="col-lg-6">
            <ul>
              <!-- <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span>30</span></li> -->
              <li><i class="bi bi-chevron-right"></i> <strong>Degree</strong> <span>: Sarjana Komputer</span></li>
              <li><i class="bi bi-chevron-right"></i> <strong>Email</strong> <span>: <?= esc($item['email']) ?></span></li>
              <li><i class="bi bi-chevron-right"></i> <strong>Freelance</strong> <span>: Available</span></li>
          Sa/ul>
          </div>
        </div>
        <p>
          Diatas adalah sedikit informasi tentang saya, jika Anda tertarik untuk bekerja sama dengan saya, jangan ragu untuk menghubungi saya.
        </p>
      </div>
    </div>
    <?php endforeach; ?>
  </div>
</section><!-- End About Section -->

<!-- ======= Facts Section ======= -->
<!-- <section id="facts" class="facts">
  <div class="container">

    <div class="section-title">
      <h2>Facts</h2>
      <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
    </div>

    <div class="row no-gutters">

      <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up">
        <div class="count-box">
          <i class="bi bi-emoji-smile"></i>
          <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
          <p><strong>Happy Clients</strong> consequuntur quae</p>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up" data-aos-delay="100">
        <div class="count-box">
          <i class="bi bi-journal-richtext"></i>
          <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
          <p><strong>Projects</strong> adipisci atque cum quia aut</p>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up" data-aos-delay="200">
        <div class="count-box">
          <i class="bi bi-headset"></i>
          <span data-purecounter-start="0" data-purecounter-end="1453" data-purecounter-duration="1" class="purecounter"></span>
          <p><strong>Hours Of Support</strong> aut commodi quaerat</p>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up" data-aos-delay="300">
        <div class="count-box">
          <i class="bi bi-people"></i>
          <span data-purecounter-start="0" data-purecounter-end="32" data-purecounter-duration="1" class="purecounter"></span>
          <p><strong>Hard Workers</strong> rerum asperiores dolor</p>
        </div>
      </div>

    </div>

  </div>
</section>End Facts Section -->

<!-- ======= Skills Section ======= -->
<section id="skills" class="skills section-bg">
  <div class="container">

    <div class="section-title">
      <h2>Skills</h2>
      <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
    </div>

    <div class="row skills-content">

      <div class="col-lg-6" data-aos="fade-up">

        <div class="progress">
          <span class="skill">HTML <i class="val">100%</i></span>
          <div class="progress-bar-wrap">
            <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div>

        <div class="progress">
          <span class="skill">CSS <i class="val">90%</i></span>
          <div class="progress-bar-wrap">
            <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div>

        <div class="progress">
          <span class="skill">JavaScript <i class="val">85%</i></span>
          <div class="progress-bar-wrap">
            <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div>

      </div>

      <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">

        <div class="progress">
          <span class="skill">PHP <i class="val">60%</i></span>
          <div class="progress-bar-wrap">
            <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div>

        <!-- <div class="progress">
          <span class="skill">WordPress/CMS <i class="val">90%</i></span>
          <div class="progress-bar-wrap">
            <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div> -->

        <div class="progress">
          <span class="skill">CodeIgniter4 <i class="val">55%</i></span>
          <div class="progress-bar-wrap">
            <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div>

      </div>

    </div>

  </div>
</section><!-- End Skills Section -->

<!-- ======= Resume Section ======= -->
<section id="resume" class="resume">
  <div class="container">

    <div class="section-title">
      <h2>Resume</h2>
      <p>
        Berikut adalah resume saya yang berisi informasi tentang pendidikan, dan pengalaman kerja yang telah saya lalui.
      </p>
    </div>

    <div class="row">
      <div class="col-lg-6" data-aos="fade-up">
        <h3 class="resume-title">Sumary</h3>
        <div class="resume-item pb-0">
        <?php foreach($personalData as $lecture): ?> 
          <h4><?= esc($lecture['nama']) ?></h4>
          <p><em>Innovative and deadline-driven Web Developer</em></p>
          <ul>
            <li><?= esc($lecture['alamat']) ?>, <?= esc($lecture['Kota/kab']) ?></li>
            <li>+<?= esc($lecture['phone_numb']) ?></li>
            <li><?= esc($lecture['email'])?></li>
          </ul>
        </div>
        <?php endforeach; ?>
        <h3 class="resume-title">Education</h3>
        <?php foreach ($personalEdu as $edu) : ?>
        <div class="resume-item">
          <h4><?php echo esc($edu['edu_level']); ?></h4>
          <h5><?php echo esc($edu['timelapse']); ?></h5>
          <p><em><?php echo esc($edu['name']); ?></em></p>
          <p><?php echo esc($edu['desc']); ?></p>
        </div>
        <?php endforeach; ?>
        <!-- <div class="resume-item">
          <h4>Bachelor of Fine Arts &amp; Graphic Design</h4>
          <h5>2010 - 2014</h5>
          <p><em>Rochester Institute of Technology, Rochester, NY</em></p>
          <p>Quia nobis sequi est occaecati aut. Repudiandae et iusto quae reiciendis et quis Eius vel ratione eius unde vitae rerum voluptates asperiores voluptatem Earum molestiae consequatur neque etlon sader mart dila</p>
        </div> -->
      </div>
      <!-- <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
        <h3 class="resume-title">Professional Experience</h3>
        <div class="resume-item">
          <h4>Senior graphic design specialist</h4>
          <h5>2019 - Present</h5>
          <p><em>Experion, New York, NY </em></p>
          <ul>
            <li>Lead in the design, development, and implementation of the graphic, layout, and production communication materials</li>
            <li>Delegate tasks to the 7 members of the design team and provide counsel on all aspects of the project. </li>
            <li>Supervise the assessment of all graphic materials in order to ensure quality and accuracy of the design</li>
            <li>Oversee the efficient use of production project budgets ranging from $2,000 - $25,000</li>
          </ul>
        </div>
        <div class="resume-item">
          <h4>Graphic design specialist</h4>
          <h5>2017 - 2018</h5>
          <p><em>Stepping Stone Advertising, New York, NY</em></p>
          <ul>
            <li>Developed numerous marketing programs (logos, brochures,infographics, presentations, and advertisements).</li>
            <li>Managed up to 5 projects or tasks at a given time while under pressure</li>
            <li>Recommended and consulted with clients on the most appropriate graphic design</li>
            <li>Created 4+ design presentations and proposals a month for clients and account managers</li>
          </ul>
        </div>
      </div> -->
    </div>

  </div>
</section><!-- End Resume Section -->

<!-- ======= Portfolio Section ======= -->
<section id="portfolio" class="portfolio section-bg">
  <div class="container">

    <div class="section-title">
      <h2>Portfolio</h2>
      <p>
        Berikut adalah beberapa project yang pernah saya kerjakan.
      </p>
    </div>

    <div class="row" data-aos="fade-up">
      <div class="col-lg-12 d-flex justify-content-center">
        <ul id="portfolio-flters">
          <li data-filter="*" class="filter-active">All</li>
          <li data-filter=".filter-app">App</li>
          <li data-filter=".filter-card">Card</li>
          <li data-filter=".filter-web">Web</li>
        </ul>
      </div>
    </div>

    <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="100">

      <!-- <div class="col-lg-4 col-md-6 portfolio-item filter-app">
        <div class="portfolio-wrap">
          <img src="assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
          <div class="portfolio-links">
            <a href="assets/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i class="bx bx-plus"></i></a>
            <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
          </div>
        </div>
      </div> -->
      <?php foreach ($personalProject as $project): ?>
      <div class="col-lg-4 col-md-6 portfolio-item filter-web">
        <div class="portfolio-wrap">
          <img src="assets/img/portfolio/githubLog.png" class="img-fluid" alt="">
          <div class="portfolio-links">
            <a href="assets/img/portfolio/githubLog.png" data-gallery="portfolioGallery" class="portfolio-lightbox" title="<?php echo esc($project['project_name']) ?>"><i class="bx bx-plus"></i></a>
            <a href="<?php echo esc($project['link']) ?>" title="More Details"><i class="bx bx-link"></i></a>
          </div>
        </div>
      </div>

      <!--<div class="col-lg-4 col-md-6 portfolio-item filter-app">
        <div class="portfolio-wrap">
          <img src="assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt="">
          <div class="portfolio-links">
            <a href="assets/img/portfolio/portfolio-3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 2"><i class="bx bx-plus"></i></a>
            <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-card">
        <div class="portfolio-wrap">
          <img src="assets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt="">
          <div class="portfolio-links">
            <a href="assets/img/portfolio/portfolio-4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 2"><i class="bx bx-plus"></i></a>
            <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
          </div>
        </div>
      </div> -->

      <!-- <div class="col-lg-4 col-md-6 portfolio-item filter-web">
        <div class="portfolio-wrap">
          <img src="assets/img/portfolio/portfolio-5.jpg" class="img-fluid" alt="">
          <div class="portfolio-links">
            <a href="assets/img/portfolio/portfolio-5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title=""><i class="bx bx-plus"></i></a>
            <a href="" title="More Details"><i class="bx bx-link"></i></a>
          </div>
        </div>
      </div> -->

      <!-- <div class="col-lg-4 col-md-6 portfolio-item filter-app">
        <div class="portfolio-wrap">
          <img src="assets/img/portfolio/portfolio-6.jpg" class="img-fluid" alt="">
          <div class="portfolio-links">
            <a href="assets/img/portfolio/portfolio-6.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 3"><i class="bx bx-plus"></i></a>
            <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-card">
        <div class="portfolio-wrap">
          <img src="assets/img/portfolio/portfolio-7.jpg" class="img-fluid" alt="">
          <div class="portfolio-links">
            <a href="assets/img/portfolio/portfolio-7.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 1"><i class="bx bx-plus"></i></a>
            <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-card">
        <div class="portfolio-wrap">
          <img src="assets/img/portfolio/portfolio-8.jpg" class="img-fluid" alt="">
          <div class="portfolio-links">
            <a href="assets/img/portfolio/portfolio-8.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 3"><i class="bx bx-plus"></i></a>
            <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-web">
        <div class="portfolio-wrap">
          <img src="assets/img/portfolio/portfolio-9.jpg" class="img-fluid" alt="">
          <div class="portfolio-links">
            <a href="assets/img/portfolio/portfolio-9.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
            <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
          </div>
        </div>
      </div> -->

    </div>
        <?php endforeach; ?>
  </div>
</section><!-- End Portfolio Section -->

<!-- ======= Services Section ======= -->
<!-- <section id="services" class="services">
  <div class="container">

    <div class="section-title">
      <h2>Services</h2>
      <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
    </div>

    <div class="row">
      <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up">
        <div class="icon"><i class="bi bi-briefcase"></i></div>
        <h4 class="title"><a href="">Lorem Ipsum</a></h4>
        <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
      </div>
      <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
        <div class="icon"><i class="bi bi-card-checklist"></i></div>
        <h4 class="title"><a href="">Dolor Sitema</a></h4>
        <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
      </div>
      <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
        <div class="icon"><i class="bi bi-bar-chart"></i></div>
        <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>
        <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
      </div>
      <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
        <div class="icon"><i class="bi bi-binoculars"></i></div>
        <h4 class="title"><a href="">Magni Dolores</a></h4>
        <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
      </div>
      <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
        <div class="icon"><i class="bi bi-brightness-high"></i></div>
        <h4 class="title"><a href="">Nemo Enim</a></h4>
        <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
      </div>
      <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="500">
        <div class="icon"><i class="bi bi-calendar4-week"></i></div>
        <h4 class="title"><a href="">Eiusmod Tempor</a></h4>
        <p class="description">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi</p>
      </div>
    </div>

  </div>
</section>End Services Section -->

<!-- ======= Testimonials Section ======= -->
<!-- <section id="testimonials" class="testimonials section-bg">
  <div class="container">

    <div class="section-title">
      <h2>Testimonials</h2>
      <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
    </div>

    <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
      <div class="swiper-wrapper">

        <div class="swiper-slide">
          <div class="testimonial-item" data-aos="fade-up">
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
            <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
            <h3>Saul Goodman</h3>
            <h4>Ceo &amp; Founder</h4>
          </div>
        </div>

        <div class="swiper-slide">
          <div class="testimonial-item" data-aos="fade-up" data-aos-delay="100">
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
            <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
            <h3>Sara Wilsson</h3>
            <h4>Designer</h4>
          </div>
        </div>

        <div class="swiper-slide">
          <div class="testimonial-item" data-aos="fade-up" data-aos-delay="200">
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
            <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
            <h3>Jena Karlis</h3>
            <h4>Store Owner</h4>
          </div>
        </div>

        <div class="swiper-slide">
          <div class="testimonial-item" data-aos="fade-up" data-aos-delay="300">
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
            <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
            <h3>Matt Brandon</h3>
            <h4>Freelancer</h4>
          </div>
        </div>

        <div class="swiper-slide">
          <div class="testimonial-item" data-aos="fade-up" data-aos-delay="400">
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
            <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
            <h3>John Larson</h3>
            <h4>Entrepreneur</h4>
          </div>
        </div>

      </div>
      <div class="swiper-pagination"></div>
    </div>

  </div>
</section>End Testimonials Section -->

<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
  <div class="container">
    <?php foreach ($personalContact as $item): ?>      
    <div class="section-title">
      <h2>Contact</h2>
      <p>
        Jika Anda tertarik untuk bekerja sama dengan saya, jangan ragu untuk menghubungi saya melalui form di bawah ini.
      </p>
    </div>

    <div class="row" data-aos="fade-in">

      <div class="col-lg-5 d-flex align-items-stretch">
        <div class="info">
          <div class="address">
            <i class="bi bi-geo-alt"></i>
            <h4>Location:</h4>
            <p><?= esc($item['address']) ?></p>
          </div>

          <div class="email">
            <i class="bi bi-envelope"></i>
            <h4>Email:</h4>
            <p><?= esc($item['email']) ?></p>
          </div>

          <div class="phone">
            <i class="bi bi-phone"></i>
            <h4>Call:</h4>
            <p>+ <?= esc($item['phone_numb']) ?></p>
          </div>

          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3955.6064340937824!2d106.933317!3d-6.9186014!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e683633fcd15215%3A0x261f558445241e0c!2sUniversitas%20Muhammadiyah!5e0!3m2!1sen!2sid!4v1539943755621" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
        </div>

      </div>

      <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
        <form action="<?= base_url('home/sendEmail') ?>" method="post" role="form" class="php-email-form">
          <div class="row">
            <div class="form-group col-md-6">
              <label for="name">Your Name</label>
              <input type="text" name="name" class="form-control" id="name" required>
            </div>
            <div class="form-group col-md-6">
              <label for="name">Your Email</label>
              <input type="email" class="form-control" name="email" id="email" required>
            </div>
          </div>
          <div class="form-group">
            <label for="name">Subject</label>
            <input type="text" class="form-control" name="subject" id="subject" required>
          </div>
          <div class="form-group">
            <label for="name">Message</label>
            <textarea class="form-control" name="message" rows="10" required></textarea>
          </div>
          <div class="my-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your message has been sent. Thank you!</div>
          </div>
          <div class="text-center"><button type="submit">Send Message</button></div>
        </form>
      </div>

    </div>
    <?php endforeach; ?>
  </div>
</section><!-- End Contact Section -->

</main><!-- End #main -->

<?=$this->endSection() ?>