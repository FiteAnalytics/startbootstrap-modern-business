<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>fite analytics llc</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/fite.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.typekit.net/vgr7dzc.css">
  </head>

  <body>
    <?php include 'navigation.php'; ?>
    <div class="navbar under-nav">
        <div class="container centered-text">
          <h2 class="hero-subtext">contact us</h2>
        </div>
    </div>
    <br>
    <div class="container">
      <!-- Content Row -->
      <div class="row">
        <!-- Map Column -->
        <div class="col-lg-8 mb-4">
          <!-- Embedded Google Map -->
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3311.5609030763285!2d-118.39463364952907!3d33.90096083304033!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2b4076f63cd35%3A0x61cd12182890d14!2s1240+Rosecrans+Ave%2C+Manhattan+Beach%2C+CA+90266!5e0!3m2!1sen!2sus!4v1535600502636" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
        <!-- Contact Details Column -->
        <div class="col-lg-4 mb-4">
          <h3>our office</h3>
          <p>
            1240 Rosecrans Ave.
            <br>Suite 120
            <br>Manhattan Beach, CA 90266
            <br>
          </p>
          <p>
            <abbr title="Phone">P</abbr>: (424) 262-0068
          </p>
        </div>
      </div>
      <!-- /.row -->

      <!-- Contact Form -->
      <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
      <div class="row">
        <div class="col-lg-8 mb-4">
          <h3>Send us a Message</h3>
          <form name="sentMessage" id="contactForm" novalidate>
            <div class="control-group form-group">
              <div class="controls">
                <label>Full Name:</label>
                <input type="text" class="form-control" id="name" required data-validation-required-message="Please enter your name.">
                <p class="help-block"></p>
              </div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                <label>Phone Number:</label>
                <input type="tel" class="form-control" id="phone" required data-validation-required-message="Please enter your phone number.">
              </div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                <label>Email Address:</label>
                <input type="email" class="form-control" id="email" required data-validation-required-message="Please enter your email address.">
              </div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                <label>Message:</label>
                <textarea rows="10" cols="100" class="form-control" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
              </div>
            </div>
            <div id="success"></div>
            <!-- For success/fail messages -->
            <button type="submit" class="btn btn-primary" id="sendMessageButton">Send Message</button>
          </form>
        </div>

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->
    <?php include 'footer.php'; ?>
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
      ga('create', 'UA-44140025-1', 'auto');
      ga('require', 'displayfeatures');
      ga('send', 'pageview');
    </script>
    <script type='application/ld+json'>
    {
      "@context": "http://www.schema.org",
      "@type": "Corporation",
      "name": "Fite Analytics LLC",
      "founder": "Geoff Fite",
      "url": "www.fiteanalytics.com",
      "sameAs": [
        "fiteanalytics.com"
      ],
      "description": "financial software and data",
      "address": {
        "@type": "PostalAddress",
        "postOfficeBoxNumber": "",
        "addressLocality": "MANHATTAN BEACH",
        "addressRegion": "CA",
        "postalCode": "90266-2558",
        "addressCountry": "USA"
      },
      "contactPoint": {
        "@type": "ContactPoint",
        "telephone": "+14242620068",
        "contactType": "customer support"
      }
    }
    </script>
  </body>

</html>
