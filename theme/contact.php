<?php include "config/config.php" ?>
<?php include "Header/nav.php" ?>

<?php 
    // $contact_ftech_query = "SELECT * FROM `contact_information`";
    // $contact_ftech_prepare = $connection->prepare($contact_ftech_query);
    // $contact_ftech_prepare->execute();
    // $contact_fetch = $contact_ftech_prepare->fetchAll(PDO::FETCH_ASSOC);
    // print_r($contact_fetch);
    
    if(isset($_POST['submit']))
    {
      $fullName = $_POST['fullName'];
      $email = $_POST['email'];
      $subject = $_POST['subject'];
      $phone = $_POST['phone'];
      $message = $_POST['message'];

      if(empty($fullName) || empty($email) || empty($subject) || empty($phone) || empty($message))
      {
        // echo "<script>Alert('Kindly fill all the fields')</scrpit>";
      }else
      {
        // if(isset($_SESSION['userId'])){
          $contact_query = "INSERT INTO `contact_information`(`user_name`, `user_email`, `user_query`, `user_phone`, `user_message`) VALUES (:fullName, :email, :subject, :phone, :message)";

          $contact_prepare = $connection->prepare($contact_query);
          $contact_prepare->bindParam(':fullName', $fullName);
          $contact_prepare->bindParam(':email', $email);
          $contact_prepare->bindParam(':subject', $subject);
          $contact_prepare->bindParam(':phone', $phone);
          $contact_prepare->bindParam(':message', $message);
          // $contact_prepare->bindParam(':userId', $_SESSION['userId']);
          $contact_prepare->execute();
          // print_r($contact_prepare);
        // }
      }
    }
?>

<section class="page-title bg-1">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="block text-center">
          <span class="text-white">Contact Us</span>
          <h1 class="text-capitalize mb-5 text-lg">Get in Touch</h1>

          <!-- <ul class="list-inline breadcumb-nav">
            <li class="list-inline-item"><a href="index.html" class="text-white">Home</a></li>
            <li class="list-inline-item"><span class="text-white">/</span></li>
            <li class="list-inline-item"><a href="#" class="text-white-50">Contact Us</a></li>
          </ul> -->
        </div>
      </div>
    </div>
  </div>
</section>
<!-- contact form start -->

<section class="section contact-info pb-0">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-6">
        <div class="contact-block mb-4 mb-lg-0">
          <i class="icofont-live-support"></i>
          <h5>Call Us</h5>
		  +92 21 111 911 911
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="contact-block mb-4 mb-lg-0">
          <i class="icofont-support-faq"></i>
          <h5>Email Us</h5>
		  maliktaiham294@gmail.com
        </div>
      </div>
      <div class="col-lg-4 col-md-12">
        <div class="contact-block mb-4 mb-lg-0">
          <i class="icofont-location-pin"></i>
          <h5>Location</h5>
		  Aptech North Nazimabad Town, Karachi
        </div>
      </div>
    </div>
  </div>
</section>

<section class="contact-form-wrap section">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-6">
        <div class="section-title text-center">
          <h2 class="text-md mb-2">Contact us</h2>
          <div class="divider mx-auto my-4"></div>
          <p class="mb-5">Laboriosam exercitationem molestias beatae eos pariatur, similique, excepturi mollitia sit
            perferendis maiores ratione aliquam?</p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12">
        <form id="contact-form" class="contact__form " method="post" action="contact.php">
          <!-- form message -->
          <div class="row">
            <div class="col-12">
              <div class="alert alert-success contact__msg" style="display: none" role="Alert">
                Your message was sent successfully.
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-lg-6">
              <div class="form-group">
                <input name="fullName" id="name" type="text" class="form-control" placeholder="Your Full Name">
              </div>
            </div>

            <div class="col-lg-6">
              <div class="form-group">
                <input name="email" id="email" type="email" class="form-control" placeholder="Your Email Address" required>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                <input name="subject" id="subject" type="text" class="form-control" placeholder="Your Query Topic" required>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                <input name="phone" id="phone" type="text" class="form-control" placeholder="Your Phone Number" required>
              </div>
            </div>
          </div>

          <div class="form-group-2 mb-4">
            <textarea name="message" id="message" class="form-control" rows="8" placeholder="Your Message" required></textarea>
          </div>

          <div>
            <input class="btn btn-main btn-round-full" name="submit" type="submit" value="Send Messege"></input>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>

<div class="google-map ">
	<div id="map" data-latitude="40.712776" data-longitude="-74.005974" data-marker="images/marker.png"></div>
</div>

<?php include "Header/footer.php" ?>

    <!-- Essential Scripts
    =====================================-->
    <script src="plugins/jquery/jquery.js"></script>
    <script src="plugins/bootstrap/bootstrap.min.js"></script>
    <script src="plugins/slick-carousel/slick/slick.min.js"></script>
    <script src="plugins/shuffle/shuffle.min.js"></script>

    <!-- Google Map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAkeLMlsiwzp6b3Gnaxd86lvakimwGA6UA"></script>
    <script src="plugins/google-map/gmap.js"></script>
    <script src="js/script.js"></script>

  </body>
  </html>