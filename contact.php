<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'includes/head.php'; ?>
    <title>Products - East Lanka Polysack (pvt) Ltd.</title>
</head>

<body>
    <div class="bg-light">
        <div class="container">
            <?php include 'includes/nav.php'; ?>
        </div>
    </div>

    <div class="container mt-3">
        <div class="row">
            <!-- Contact Form Section -->
            <div class="col-md-6">
                <div class="contact-form p-4">
                    <h3>Contact Us</h3>
                    <form>
                        <div class="mb-3">
                            <label for="fullName" class="form-label">Full Name</label>
                            <input type="text" class="form-control" id="fullName" placeholder="Name">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email Address</label>
                            <input type="email" class="form-control" id="email" placeholder="Email">
                        </div>
                        <div class="mb-3">
                            <label for="subject" class="form-label">Subject</label>
                            <input type="text" class="form-control" id="subject" placeholder="Subject">
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Message</label>
                            <textarea class="form-control" id="message" rows="4" placeholder="Message"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Send Message</button>
                    </form>
                </div>
            </div>
            <!-- Map Section -->
            <div class="col-md-6 py-3">
                <div class="h-100">
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3021.878673317762!2d-73.9881070849926!3d40.74881707932738!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMzTCsDQ0JzU0LjgiTiA3M8KwNTknMTcuMCJX!5e0!3m2!1sen!2sus!4v1618332456779!5m2!1sen!2sus" 
                        width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy">
                    </iframe>
                </div>
            </div>
        </div>

        <!-- Contact Info Section -->
        <div class="row text-center mt-5">
            <div class="col-md-3">
                <div class="info-icon mb-2"><i class="bi bi-geo-alt"></i></div>
                <p class="info-text">Address: 198 West 21th Street, Suite 721 New York NY 10016</p>
            </div>
            <div class="col-md-3">
                <div class="info-icon mb-2"><i class="bi bi-telephone"></i></div>
                <p class="info-text">Phone: +1235 2355 98</p>
            </div>
            <div class="col-md-3">
                <div class="info-icon mb-2"><i class="bi bi-envelope"></i></div>
                <p class="info-text">Email: info@yoursite.com</p>
            </div>
            <div class="col-md-3">
                <div class="info-icon mb-2"><i class="bi bi-globe"></i></div>
                <p class="info-text">Website: yoursite.com</p>
            </div>
        </div>
    </div>

    <br>
    <?php include 'includes/inquire.php'; ?>
    <?php include 'includes/footer.php'; ?>
</body>

</html>