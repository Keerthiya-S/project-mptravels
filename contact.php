<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Us | MP Travels</title>
  <!-- Bootstrap CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <!-- Custom CSS -->
  <link rel="stylesheet" href="contact.css">
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg fixed-top">
    <div class="container">
      <div>
        <img src="images/mp-logo.png" alt="TravelMate Logo" class="logo img-fluid me-2">
        <a class="navbar-brand" href="#">MP Travels</a>
      </div>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link" href="index.html">Home</a></li>

          <!-- Dropdown -->
          <li class="nav-item dropdown">
            <a class="nav-link" href="packages.html">Packages</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="india.html">India</a></li>
              <li><a class="dropdown-item" href="switzerland.html">Switzerland</a></li>
              <li><a class="dropdown-item" href="maldives.html">Maldives</a></li>
              <li><a class="dropdown-item" href="dubai.html">Dubai</a></li>
              <li><a class="dropdown-item" href="thailand.html">Thailand</a></li>
              <li><a class="dropdown-item" href="singapore.html">Singapore</a></li>
              <li><a class="dropdown-item" href="paris.html">Paris</a></li>
              <li><a class="dropdown-item" href="italy.html">Italy</a></li>
              <li><a class="dropdown-item" href="london.html">London</a></li>
              <li><a class="dropdown-item" href="usa.html">USA</a></li>
            </ul>
          </li>

          <li class="nav-item"><a class="nav-link" href="about.html">About</a></li>
          <li class="nav-item"><a class="nav-link active" href="contact.php">Contact</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Contact Section -->
  <section class="contact-section py-5">
    <div class="row justify-content-center">
      <div class="col-md-4 mt-4">
        <div class="contact-form p-4 shadow rounded">
          <h2 class="text-center mb-4">Get in Touch</h2>
          <form action="contact_process.php" method="POST">
            <div class="mb-3">
              <label for="name" class="form-label">Full Name</label>
              <input type="text" id="name" name="name" class="form-control" placeholder="Enter your full name" required>
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email Address</label>
              <input type="email" id="email" name="email" class="form-control" placeholder="Enter your email" required>
            </div>
            <div class="mb-3">
              <label for="subject" class="form-label">Subject</label>
              <input type="text" id="subject" name="subject" class="form-control" placeholder="Enter subject" required>
            </div>
            <div class="mb-3">
              <label for="message" class="form-label">Message</label>
              <textarea id="message" name="message" class="form-control" rows="1" placeholder="Write your message" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary w-100">Send Message</button>
          </form>

        </div>
      </div>

    </div>
  </section>
  <!-- Booking Form Section -->
  <!-- Booking Form Section -->
  <section class="booking-section py-5" id="booking">
    <div class="container">
      <h2 class="text-center mb-4">Book Your Trip</h2>
      <div class="row justify-content-center">
        <div class="col-md-8">
          <form action="booking_process.php" method="POST" class="booking-form p-4 shadow rounded">
            <div class="row g-3">
              <div class="col-md-6">
                <label class="form-label">Full Name</label>
                <input type="text" name="name" class="form-control" placeholder="Enter your name" required>
              </div>
              <div class="col-md-6">
                <label class="form-label">Email</label>
                <input type="email" name="email" class="form-control" placeholder="Enter your email" required>
              </div>
              <div class="col-md-6">
                <label class="form-label">Destination</label>
                <select class="form-select" name="destination" required>
                  <option selected disabled>Choose...</option>
                  <option>Maldives</option>
                  <option>Paris</option>
                  <option>Dubai</option>
                  <option>Singapore</option>
                </select>
              </div>
              <div class="col-md-6">
                <label class="form-label">Travel Date</label>
                <input type="date" name="travel_date" class="form-control" required>
              </div>
              <div class="col-md-12">
                <label class="form-label">Number of People</label>
                <input type="number" name="people" class="form-control" min="1" placeholder="e.g. 2" required>
              </div>
            </div>
            <div class="text-center mt-4">
              <button type="submit" class="btn btn-primary px-5">Book Now</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
  <!-- Contact Info + Map Section -->
  <section class="contact-info-map py-5">
    <div class="container">
      <div class="row justify-content-center align-items-center">
        <!-- Contact Info -->
        <div class="col-md-4 text-white mb-4 mb-md-0">
          <h3>Contact Information</h3>
          <p><i class="fas fa-map-marker-alt me-2"></i>28 muthuramalingapuram 2nd street ke Pudur Madurai-7.</p>
          <p><i class="fas fa-envelope me-2"></i>support@mptravels.com</p>
          <p><i class="fas fa-phone me-2"></i>+91 9677519253 , +91 6382073734 </p>
        </div>

        <!-- Map -->
        <div class="col-md-4">
          <div class="mapouter">
            <iframe src="https://maps.google.com/maps?q=madurai&t=&z=13&ie=UTF8&iwloc=&output=embed" width="100%"
              height="350" style="border:0;" allowfullscreen="" loading="lazy">
            </iframe>
          </div>
        </div>
      </div>


    </div>
    </div>
  </section>

<!-- FAQ Section -->
<section class="faq-section py-5">
  <div class="container">
    <h2 class="text-center mb-4">Frequently Asked Questions</h2>

    <div class="accordion" id="faqAccordion">

      <!-- FAQ 1 -->
      <div class="accordion-item">
        <h2 class="accordion-header" id="faqHeading1">
          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse1" aria-expanded="true">
            How can I book a trip with MP Travels?
          </button>
        </h2>
        <div id="faqCollapse1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
          <div class="accordion-body">
            You can book your trip easily by filling out our booking form on this page or by contacting us directly via phone or email.
          </div>
        </div>
      </div>

      <!-- FAQ 2 -->
      <div class="accordion-item">
        <h2 class="accordion-header" id="faqHeading2">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse2">
            Do you offer customized travel packages?
          </button>
        </h2>
        <div id="faqCollapse2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
          <div class="accordion-body">
            Yes, we offer customized packages based on your preferences, budget, and travel dates.
          </div>
        </div>
      </div>

      <!-- FAQ 3 -->
      <div class="accordion-item">
        <h2 class="accordion-header" id="faqHeading3">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse3">
            What payment methods are accepted?
          </button>
        </h2>
        <div id="faqCollapse3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
          <div class="accordion-body">
            We accept payments through credit/debit cards, UPI, and bank transfers. Cash payments are also available at our office.
          </div>
        </div>
      </div>

      <!-- FAQ 4 -->
      <div class="accordion-item">
        <h2 class="accordion-header" id="faqHeading4">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse4">
            Can I cancel or reschedule my booking?
          </button>
        </h2>
        <div id="faqCollapse4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
          <div class="accordion-body">
            Yes, cancellations or reschedules are possible based on our policy. Please contact our support team for assistance.
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

  <!-- Footer -->
  <footer class="site-footer">
    <div class="container">
      <div class="footer-row">
        <!-- Logo & Description -->
        <div class="footer-col">
          <img src="images/mp-logo.png" alt="mp Travels" class="footer-logo">
          <p>Best Travel, Tours and Car Services in South India. We offer special packages.</p>
          <div class="social-icons">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-whatsapp"></i></a>
          </div>
        </div>

        <!-- Information Links -->
        <div class="footer-col" data-aos="fade-right">
          <h4>Information</h4>
          <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="about.html">About</a></li>
            <li><a href="packages.html">Packages</a></li>
            <li><a href="contact.php">Contact</a></li>
          </ul>
        </div>

        <!-- Packages Links -->
        <div class="footer-col" data-aos="fade-right">
          <h4>Popular Packages</h4>
          <ul>
            <li><a href="maldives.html">Maldives</a></li>
            <li><a href="paris.html">Paris</a></li>
            <li><a href="dubai.html">Dubai</a></li>
            <li><a href="india.html">India</a></li>
          </ul>
        </div>

        <!-- Contact Info -->
        <div class="footer-col">
          <h4>Official Info</h4>
          <p><strong>Head Office:</strong> 28 Muthuramalingapuram, 2nd Street, K. Pudur, Madurai-7.</p>
          <p><strong>Email:</strong> mptravelsmadurai@gmail.com</p>
          <p><strong>Phone:</strong> +91 9677519253, 6382073734</p>
        </div>
      </div>

      <!-- Copyright -->
      <hr>
      <div class="footer-bottom text-center">
        <p>&copy; <span id="year"></span> MP Travels. All Rights Reserved.</p>
      </div>
    </div>
  </footer>

  <script>
    document.getElementById("year").textContent = new Date().getFullYear();
  </script>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

  <script src="js/index.js"></script>
</body>

</html>