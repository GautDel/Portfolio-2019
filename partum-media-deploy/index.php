<?php
// Validation

if (filter_has_var(INPUT_POST, 'mobile-submit')) {
  $mobileName = htmlspecialchars($_POST['mobile-name']);
  $mobileEmail = htmlspecialchars($_POST['mobile-email']);
  $mobilePhone = htmlspecialchars($_POST['mobile-phone']);
  $mobileSubject = htmlspecialchars($_POST['mobile-subject']);
  $mobileMessage = htmlspecialchars($_POST['mobile-message']);

  $mailTo = 'contact@partummedia.com';
  $mobileFormSub = $mobileSubject;
  $headers = "MIME-Version: 1.0" . "\r\n";
  $headers .= "Content-Type:text/html;charset=UTF-8" . "\r\n";
  $headers .= "From: " . $mobileName . "<" . $mobileEmail . ">" . "\r\n";

  $body = '<h2>Contact Request</h2>
            <h4>Name</h4> <p>' . $mobileName . '</p>
            <h4>Email</h4> <p>' . $mobileEmail . '</p>
            <h4>Phone</h4> <p>' . $mobilePhone . '</p>
            <h4>Subject</h4> <p>' . $mobileSubject . '</p>
            <h4>Message</h4> <p>' . $mobileMessage . '</p>
            ';

  mail($mailTo, $mobileFormSub, $body, $headers);
  header("location: contact.php");
}

if (filter_has_var(INPUT_POST, 'submit')) {
  $name = htmlspecialchars($_POST['name']);
  $email = htmlspecialchars($_POST['email']);
  $phone = htmlspecialchars($_POST['phone']);
  $subject = htmlspecialchars($_POST['subject']);
  $message = htmlspecialchars($_POST['message']);

  $mailTo = 'contact@partummedia.com';
  $formSub = $subject;
  $headers = "MIME-Version: 1.0" . "\r\n";
  $headers .= "Content-Type:text/html;charset=UTF-8" . "\r\n";
  $headers .= "From: " . $name . "<" . $email . ">" . "\r\n";

  $body = '<h2>Contact Request</h2>
            <h4>Name</h4> <p>' . $name . '</p>
            <h4>Email</h4> <p>' . $email . '</p>
            <h4>Phone</h4> <p>' . $phone . '</p>
            <h4>Subject</h4> <p>' . $subject . '</p>
            <h4>Message</h4> <p>' . $message . '</p>
            ';

  mail($mailTo, $formSub, $body, $headers);
  header("location: contact.php");
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <meta name="description" content="Partum Media Web design specialises in unique, modern, fully customised websites while promising the best customer service possible. Interested?">
  <link rel="icon" type="image/png" sizes="16x16" href="./assets/favicon.ico">
  <link rel="stylesheet" href="style.css" />
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700&display=swap" rel="stylesheet" />
  <title>Partum Media Web Design</title>
</head>

<body>
  <div class="spinner-container">

    <div class="spinner">
      <div class="double-bounce1"></div>
      <div class="double-bounce2"></div>
    </div>
    <p>Loading...</p>
  </div>

  <!-- Mobile HTML -->
  <section id="mobile-home">
    <div class="mobile-top-clouds">
      <img src="./assets/partum-media-top-clouds.png" alt="" />
      <a href="#mobile-menu" class="quote">
        <h1>Get A Quote</h1>
      </a>
    </div>

    <div class="mobile-background">
      <div class="mobile-background-text">

        <img src="./assets/partum-media-text.svg" alt="" />
        <div class="mobile-background-chevron">
          <a href="#mobile-menu" class="chevron">
            <?php echo file_get_contents("./assets/partum-media-mobile-down-chevron.svg"); ?>
          </a>
        </div>
      </div>
    </div>
  </section>


  <div class="mobile-menu overflow" id="mobile-menu">
    <div class="mobile-background"></div>
    <section id="mobile-about-me-section">
      <div class="mobile-menu-about-me" id="about">
        <div class="mobile-menu-about-me-background">
          <h1>About Me</h1>
          <img src="./assets/partum-media-mobile-about-me.png" alt="" />
        </div>

        <div class="img-container">
          <img src="./assets/partum-media-me.png" alt="" />
        </div>

        <div class="text-container">
          <p>
            Hi, my name is <strong>Gauthier Delalleau</strong>.
          </p>
          <p>
            I'm a <strong>passionate</strong> web designer based in Cork,
            Ireland who enjoys building anything from small business sites to
            full, rich, interactive apps.
          </p>
          <p>
            If you are a <strong>business</strong> seeking to put your mark on
            the web, or an <strong>employer</strong> looking to hire, you can
            get in touch with me
            <strong class="contact-link">here</strong>.
          </p>
        </div>
      </div>
    </section>

    <section class="mobile-contact-section">
      <div class="mobile-menu-contact" id="contact">
        <div class="mobile-menu-contact-background">
          <h1>Contact</h1>
          <img src="./assets/partum-media-mobile-contact.png" alt="" />
        </div>
        <form method='POST' action="<?php $_SERVER['PHP_SELF'] ?>">
          <div class="form-container">
            <div class="left">
              <label for="mobile-name">Name</label>
              <input type="text" name='mobile-name' required>
              <label for="mobile-email">Email</label>
              <input type="email" name='mobile-email' required>
            </div>
            <div class="right">
              <label for="mobile-phone">Phone</label>
              <input type="text" name="mobile-phone">
              <label for="mobile-subject">Subject</label>
              <input type="text" name="mobile-subject" required>
            </div>
          </div>
          <div class="message">
            <label for="mobile-message">What's On Your Mind? *</label>
            <textarea type="text" name="mobile-message" required></textarea>
          </div>
          <div class="submit">
            <input type="submit" value="submit" class="submit" name="mobile-submit">
          </div>
        </form>

      </div>
    </section>


    <section class="mobile-portfolio-section">
      <div class="mobile-menu-portfolio" id="portfolio">
        <div class="mobile-menu-portfolio-background">
          <h1>Portfolio</h1>
          <img src="./assets/partum-media-mobile-portfolio.png" alt="" />
        </div>

        <div class="text-container">
          <div class="project">
            <div class="project-img">
              <img src="./assets/chalets.png" alt="">
            </div>

            <div class="project-description">
              <h3 class="heading">
                Chalets & Caviar
              </h3>
              <p>A fully responsive real estate website created with Wordpress.</p>
              <div class="code">
                <code><a href="https://dev-chaletsaandcaviar.pantheonsite.io/" rel="noopener noreferrer" target="_blank">View Site</a></code>
              </div>

              <div class="technologies">
                <img src="./assets/WordPress-logotype-simplified.png" alt="Wordpress">
                <img src="./assets/GitHub-Mark-120px-plus.png" alt="Github">
              </div>
            </div>
          </div>
          <hr>
          <div class="project">
            <div class="project-img">
              <img src="./assets/brooklyn.png" alt="">
            </div>
            <div class="project-description">
              <h3 class="heading">
                Brooklyn Outdoor Film Festival
              </h3>
              <p>A fully responsive, custom film festival website created with HTML5, CSS3 and JavaScript</p>

              <div class="code">
                <code><a href="https://github.com/PartumMedia/Brooklyn-Outdoor-Festival" rel="noopener noreferrer" target="_blank">Source Code</a></code>
                <code><a href="http://partummedia.com/brooklynFilmFestival/" rel="noopener noreferrer" target="_blank">View Site</a></code>
              </div>
              <div class="technologies">
                <img src="./assets/HTML5_Badge_512.png" alt="HTML5">
                <img src="./assets/css-3.png" alt="CSS3">
                <img src="./assets/js.jpg" alt="Javascript">
                <img src="./assets/GitHub-Mark-120px-plus.png" alt="Github">
                <img src="./assets/sass-logo.png" alt="Sass">
              </div>
            </div>
          </div>
          <hr>
          <div class="project">
            <div class="project-img">
              <img src="./assets/torino.png" alt="">
            </div>
            <div class="project-description">
              <h3 class="heading">
                Cafe Torino
              </h3>
              <p>A fully responsive, SEO optimised website, created for a local cafe</p>
              <div class="code">
                <code><a href="http://cafetorino.ie/" rel="noopener noreferrer" target="_blank">View Site</a></code>
              </div>
              <div class="technologies">
                <img src="./assets/HTML5_Badge_512.png" alt="HTML5">
                <img src="./assets/css-3.png" alt="CSS3">
                <img src="./assets/js.jpg" alt="Javascript">
              </div>
            </div>
          </div>
          <hr>
          <div class="project">
            <div class="project-img">
              <img src="./assets/fire.png" alt="">
            </div>

            <div class="project-description">
              <h3 class="heading">
                Fire & Star
              </h3>
              <p>A random quote generator built using HTML5, CSS3 and JavaScript</p>
              <p>All art designed by me</p>

              <div class="code">
                <code><a href="https://github.com/PartumMedia/Fire-Star" rel="noopener noreferrer" target="_blank">Source Code</a></code>
                <code><a href="http://partummedia.com/fireAndStar/" rel="noopener noreferrer" target="_blank">View Site</a></code>
              </div>
              <div class="technologies">
                <img src="./assets/HTML5_Badge_512.png" alt="HTML5">
                <img src="./assets/css-3.png" alt="CSS3">
                <img src="./assets/js.jpg" alt="Javascript">
                <img src="./assets/GitHub-Mark-120px-plus.png" alt="Github">
              </div>
            </div>
          </div>
          <hr>
          <div class="project">
            <div class="project-img">
              <img src="./assets/woya.png" alt="">
            </div>

            <div class="project-description">
              <h3 class="heading">
                Woya
              </h3>
              <p>A small turn-based / platforming game built using HTML5, CSS3, Javascript and Webpack</p>
              <p>All art assets created by me</p>
              <div class="code">
                <code><a href="https://github.com/PartumMedia/Woya" rel="noopener noreferrer" target="_blank">Source Code</a></code>
                <code><a href="http://partummedia.com/woya/" rel="noopener noreferrer" target="_blank">View Site</a></code>
              </div>
              <div class="technologies">
                <img src="./assets/HTML5_Badge_512.png" alt="HTML5">
                <img src="./assets/css-3.png" alt="CSS3">
                <img src="./assets/js.jpg" alt="Javascript">
                <img src="./assets/webpack.png" alt="Webpack">
                <img src="./assets/sass-logo.png" alt="Sass">
                <img src="./assets/GitHub-Mark-120px-plus.png" alt="Github">
              </div>
            </div>
          </div>
          <hr>
          <div class="project">
            <div class="project-img">
              <img src="./assets/bonApp.png" alt="">
            </div>

            <div class="project-description">
              <h3 class="heading">
                Bon App
              </h3>
              <p>A restaurant finder / review app created using React, HTML5 and CSS3</p>
              <p>All art assets created by me</p>
              <div class="code">
                <code><a href="https://github.com/PartumMedia/Bon-App" rel="noopener noreferrer" target="_blank">Source Code</a></code>
              </div>
              <div class="technologies">
                <img src="./assets/HTML5_Badge_512.png" alt="HTML5">
                <img src="./assets/css-3.png" alt="CSS3">
                <img src="./assets/sass-logo.png" alt="Sass">
                <img src="./assets/react.png" alt="React">
                <img src="./assets/GitHub-Mark-120px-plus.png" alt="Github">

              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="what-i-do-section">
      <div class="mobile-menu-what-i-do" id="what-i-do">
        <div class="mobile-menu-what-i-do-background">
          <h1>What I Do</h1>
          <img src="./assets/partum-media-mobile-what-i-do.png" alt="" />
        </div>
        <div class="text-container">
          <p class="description">
            "From a simple, single page site to a complex multi-page app,
            whatever your needs, I can help."
          </p>
          <h3 class="heading">Designer</h3>
          <p>
            Whether you're just starting out, or have an existing brand, I can
            help you with anything from creating your first <strong>logo</strong> or revamping an
            existing one, to designing a <strong>modern</strong>, custom website that speaks your
            <strong>vision</strong> to your customers, or giving your existing website a fresh,
            new, clean feel.
          </p>
          <h3 class="heading">Developer</h3>
          <p>
            Take an existing template and turn it into your own <strong>personal</strong>
            website.
          </p>
          <hr>
          <p class="no-indent"><strong>Update</strong> content on an existing site.</p>
          <hr>
          <p>
            make an existing site <strong>mobile-friendly</strong>. Mobile traffic is responsible for over 50% of all internet traffic, thus, in our day and age, it is imperative that all websites look stunning on mobile devices.
          </p>
          <hr>
          <p>
            Help boost <strong>SEO</strong> scores so your site is the first thing people see
            when searching a specific topic.
          </p>
        </div>
      </div>
    </section>


    <section class="mobile-testimonial-section">
      <div class="mobile-menu-testimonial" id="testimonial">
        <div class="mobile-menu-testimonial-background">
          <h1>Testimonials</h1>
          <img src="./assets/partum-media-mobile-testimonial.png" alt="" />
        </div>

        <div class="text-container">




        </div>
      </div>
    </section>

    <section class="mobile-social-section">
      <div class="mobile-menu-social" id="social">
        <div class="mobile-menu-social-background">
          <h1>Social</h1>
          <img src="./assets/partum-media-mobile-social.png" alt="" />
        </div>

        <div class="social-container">

          <div class="social-link">
            <a href="https://www.linkedin.com/in/gauthier-delalleau-36441717a/" target="_blank" rel="noopener noreferrer">
              <img src="./assets/LI-In-Bug.png" alt="twitter">
              <p class="linkedin">LinkedIn</p>
            </a>

          </div>
          <div class="social-link">
            <a href="http://corkblog.ie" target="_blank" rel="noopener noreferrer">
              <img src="./assets/blog-logo.png" alt="Blog">
              <p class="blog">Blog</p>
            </a>

          </div>
          <div class="social-link">
            <a href="https://github.com/PartumMedia" target="_blank" rel="noopener noreferrer">
              <img src="./assets/GitHub-Mark-120px-plus.png" alt="GitHub">
              <p class="github">GitHub</p>
            </a>

          </div>
          <div class="social-link">
            <a href="https://www.facebook.com/partumwebdesign/" target="_blank" rel="noopener noreferrer">
              <img src="./assets/facebook-logo.png" alt="Facebook">
              <p class="facebook">Facebook</p>
            </a>

          </div>
        </div>
      </div>
    </section>

  </div>

  <!-- Desktop HTML -->
  <div class="clouds">
    <div class="right">
      <img src="./assets/partum-media-clouds-right.png" alt="" />
    </div>
    <div class="left">
      <div class="landing-logo-container">
        <div class="landing-logo">
          <img src="./assets/partum-media-landing-logo.png" alt="">
        </div>
      </div>
      <img src="./assets/partum-media-clouds-left.png" alt="" />
    </div>
  </div>

  <section class="desktop-about-me">
    <div class="about-cont content">
      <div class="container">

        <div class="img-container">
          <img src="./assets/partum-media-me.png"" alt=" About me image">
        </div>
        <div class="text-container">
          <p>
            Hi, my name is <strong>Gauthier Delalleau</strong>.
          </p>
          <p>
            I'm a <strong>passionate</strong> web designer based in Cork,
            Ireland who enjoys building anything from small business sites to
            full, rich, interactive apps.
          </p>
          <p>
            If you are a <strong>business</strong> seeking to put your mark on
            the web, or an <strong>employer</strong> looking to hire, you can
            get in touch with me
            <strong class="desktop-contact-link">here</strong>.
          </p>
        </div>
      </div>
      <div class="left-chevron">
        <?php echo file_get_contents("./assets/partum-media-left-chevron.svg"); ?>
      </div>
    </div>
  </section>
  <section class="desktop-contact-me">
    <div class="contact-cont content">
      <div class="contact-container">
        <h1>Contact Me</h1>
        <form method='POST' action="<?php $_SERVER['PHP_SELF'] ?>">
          <div class="left-container">
            <label for="name">Name</label>
            <input type="text" name='name' required>
            <label for="email">Email</label>
            <input type="email" name='email' required>
            <label for="phone">Phone</label>
            <input type="text" name="phone">
            <label for="subject">Subject</label>
            <input type="text" name="subject" required>
          </div>
          <div class="right-container">

            <label for="message">What's On Your Mind?</label>
            <textarea type="text" name="message" required></textarea>

            <input type="submit" value="submit" class="submit" name="submit">
          </div>

        </form>
      </div>
      <div class="left-chevron">
        <?php echo file_get_contents("./assets/partum-media-left-chevron.svg"); ?>
      </div>
    </div>
  </section>
  <section class="desktop-portfolio">
    <div class="portfolio-cont content">

      <div class="project-container">
        <h1>Portfolio</h1>
        <p class="sub-heading">A collection of some of the work I've done</p>
        <div class="project">
          <div class="project-img">
            <img src="./assets/chalets.png" alt="">
          </div>

          <div class="project-description">
            <h3 class="heading">
              Chalets & Caviar
            </h3>
            <p>A fully responsive real estate website created with Wordpress.</p>

            <div class="code">
              <code><a href="https://dev-chaletsaandcaviar.pantheonsite.io/" rel="noopener noreferrer" target="_blank">View Site</a></code>
            </div>
            <div class="technologies">
              <img src="./assets/WordPress-logotype-simplified.png" alt="Wordpress">
              <img src="./assets/GitHub-Mark-120px-plus.png" alt="Github">
            </div>
          </div>
        </div>
        <hr>
        <div class="project">
          <div class="project-img">
            <img src="./assets/brooklyn.png" alt="">
          </div>
          <div class="project-description">
            <h3 class="heading">
              Brooklyn Outdoor Film Festival
            </h3>
            <p>A fully responsive, custom film festival website created with HTML5, CSS3 and JavaScript</p>

            <div class="code">
              <code><a href="https://github.com/PartumMedia/Brooklyn-Outdoor-Festival" rel="noopener noreferrer" target="_blank">Source Code</a></code>
              <code><a href="http://partummedia.com/brooklynFilmFestival/" rel="noopener noreferrer" target="_blank">View Site</a></code>
            </div>
            <div class="technologies">
              <img src="./assets/HTML5_Badge_512.png" alt="HTML5">
              <img src="./assets/css-3.png" alt="CSS3">
              <img src="./assets/js.jpg" alt="Javascript">
              <img src="./assets/GitHub-Mark-120px-plus.png" alt="Github">
              <img src="./assets/sass-logo.png" alt="Sass">
            </div>
          </div>
        </div>
        <hr>
        <div class="project">
          <div class="project-img">
            <img src="./assets/torino.png" alt="">
          </div>
          <div class="project-description">
            <h3 class="heading">
              Cafe Torino
            </h3>
            <p>A fully responsive, SEO optimised website, created for a local cafe</p>
            <div class="code">
              <code><a href="http://cafetorino.ie/" rel="noopener noreferrer" target="_blank">View Site</a></code>
            </div>
            <div class="technologies">
              <img src="./assets/HTML5_Badge_512.png" alt="HTML5">
              <img src="./assets/css-3.png" alt="CSS3">
              <img src="./assets/js.jpg" alt="Javascript">
            </div>
          </div>
        </div>
        <hr>
        <div class="project">
          <div class="project-img">
            <img src="./assets/fire.png" alt="">
          </div>

          <div class="project-description">
            <h3 class="heading">
              Fire & Star
            </h3>
            <p>A random quote generator built using HTML5, CSS3 and JavaScript</p>
            <p>All art designed by me</p>
            <div class="code">
              <code><a href="https://github.com/PartumMedia/Fire-Star" target="_blank">Source Code</a rel="noopener noreferrer"></code>
              <code><a href="http://partummedia.com/fireAndStar/" rel="noopener noreferrer" target="_blank">View Site</a></code>
            </div>
            <div class="technologies">
              <img src="./assets/HTML5_Badge_512.png" alt="HTML5">
              <img src="./assets/css-3.png" alt="CSS3">
              <img src="./assets/js.jpg" alt="Javascript">
              <img src="./assets/GitHub-Mark-120px-plus.png" alt="Github">
            </div>
          </div>
        </div>
        <hr>
        <div class="project">
          <div class="project-img">
            <img src="./assets/woya.png" alt="">
          </div>

          <div class="project-description">
            <h3 class="heading">
              Woya
            </h3>
            <p>A small turn-based / platforming game built using HTML5, CSS3, Javascript and Webpack</p>
            <p>All art assets created by me</p>

            <div class="code">
              <code><a href="https://github.com/PartumMedia/Woya" rel="noopener noreferrer" target="_blank">Source Code</a></code>
              <code><a href="http://partummedia.com/woya/" rel="noopener noreferrer" target="_blank">View Site</a></code>
            </div>
            <div class="technologies">
              <img src="./assets/HTML5_Badge_512.png" alt="HTML5">
              <img src="./assets/css-3.png" alt="CSS3">
              <img src="./assets/js.jpg" alt="Javascript">
              <img src="./assets/webpack.png" alt="Webpack">
              <img src="./assets/sass-logo.png" alt="Sass">
              <img src="./assets/GitHub-Mark-120px-plus.png" alt="Github">
            </div>
          </div>
        </div>
        <hr>
        <div class="project">
          <div class="project-img">
            <img src="./assets/bonApp.png" alt="">
          </div>

          <div class="project-description">
            <h3 class="heading">
              Bon App
            </h3>
            <p>A restaurant finder / review app created using React, HTML5 and CSS3</p>
            <p>All art assets created by me</p>
            <div class="code">
              <code><a href="https://github.com/PartumMedia/Bon-App" rel="noopener noreferrer" target="_blank">Source Code</a></code>
            </div>
            <div class="technologies">
              <img src="./assets/HTML5_Badge_512.png" alt="HTML5">
              <img src="./assets/css-3.png" alt="CSS3">
              <img src="./assets/sass-logo.png" alt="Sass">
              <img src="./assets/react.png" alt="React">
              <img src="./assets/GitHub-Mark-120px-plus.png" alt="Github">

            </div>
          </div>
        </div>
      </div>
      <div class="left-chevron">
        <?php echo file_get_contents("./assets/partum-media-left-chevron.svg"); ?>
      </div>
    </div>
  </section>
  <section class="desktop-what-i-do">
    <div class="what-i-do-cont content">
      <div class="what-i-do-container">
        <h1>What I Do</h1>
        <p class="description">
          "From a simple, single page site to a complex multi-page app,
          whatever your needs, I can help."
        </p>
        <h3 class="heading">Designer</h3>
        <p>
          Whether you're just starting out, or have an existing brand, I can
          help you with anything from creating your first <strong>logo</strong> or revamping an
          existing one, to designing a <strong>modern</strong>, custom website that speaks your
          <strong>vision</strong> to your customers, or giving your existing website a fresh,
          new, clean feel.
        </p>
        <h3 class="heading">Developer</h3>
        <p>
          Take an existing template and turn it into your own <strong>personal</strong>
          website.
        </p>
        <hr>
        <p class="no-indent"><strong>Update</strong> content on an existing site.</p>
        <hr>
        <p>
          make an existing site <strong>mobile-friendly</strong>. Mobile traffic is responsible for over 50% of all internet traffic, thus, in our day and age, it is imperative that all websites look stunning on mobile devices.
        </p>
        <hr>
        <p>
          Help boost <strong>SEO</strong> scores so your site is the first thing people see
          when searching a specific topic.
        </p>
      </div>
      <div class="left-chevron">
        <?php echo file_get_contents("./assets/partum-media-left-chevron.svg"); ?>
      </div>
    </div>
  </section>
  <section class="desktop-social">
    <div class="social-cont content">
      <div class="social-container">

        <div class="left">
          <div class="social-link">
            <a href="https://www.linkedin.com/in/gauthier-delalleau-36441717a/" target="_blank" rel="noopener noreferrer">
              <img src="./assets/LI-In-Bug.png" alt="twitter">
              <p class="linkedin">LinkedIn</p>
            </a>
          </div>
          <div class="social-link">
            <a href="https://corkblog.ie" target="_blank" rel="noopener noreferrer">
              <img src="./assets/blog-logo.png" alt="Blog">
              <p class="blog"> Blog</p>
            </a>
          </div>
        </div>

        <div class="right">
          <div class="social-link">
            <a href="https://github.com/PartumMedia" target="_blank" rel="noopener noreferrer">
              <img src="./assets/GitHub-Mark-120px-plus.png" alt="GitHub">
              <p class="github">GitHub</p>
            </a>
          </div>
          <div class="social-link">
            <a href="https://www.facebook.com/partumwebdesign/" target="_blank" rel="noopener noreferrer">
              <img src="./assets/facebook-logo.png" alt="Facebook">
              <p class="facebook">Facebook</p>
            </a>
          </div>
        </div>
      </div>

      <div class="left-chevron">
        <?php echo file_get_contents("./assets/partum-media-left-chevron.svg"); ?>
      </div>
    </div>
  </section>
  <section class="desktop-testimonials">
    <div class="testimonial-cont content">
      <div class="what-i-do-container">
      </div>
      <div class="left-chevron">
        <?php echo file_get_contents("./assets/partum-media-left-chevron.svg"); ?>
      </div>
    </div>
  </section>


  <div class="body-image">
    <div class="body-image-overlay"></div>
    <div class="logo">
      <img src="./assets/partum-media-logo-minimal.png" alt="">
    </div>
    <div class="logo-text">
      <img src="./assets/partum-media-text.png" alt="Logo text" />
    </div>
    <div class="logo">
      <?php echo file_get_contents("./assets/partum-media-left-chevron.svg"); ?>
    </div>


    <div class="cloud-buttons-container">
      <div class="about-me"></div>
      <div class="testimonial"></div>
      <div class="portfolio"></div>
      <div class="what-i-do"></div>
      <div class="contact"></div>
      <div class="social"></div>
    </div>
    <script src="app.js"></script>
</body>

</html>