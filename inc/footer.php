<footer class="footer bg-dark text-white py-5">
    <div class="container-fluid">
        <div class="row">
            <!-- Column 1: About Us -->
            <div class="col-md-4">
                <h5 class="footer-title">About Us</h5>
                <p class="footer-text">We are committed to delivering high-quality services to our clients. Our goal is
                    to build strong relationships based on trust and excellence.</p>
            </div>

            <!-- Column 2: Quick Links -->
            <div class="col-md-4">
                <h5 class="footer-title">Quick Links</h5>
                <ul class="list-unstyled">
                    <li><a href="#" class="footer-link">Home</a></li>
                    <li><a href="#" class="footer-link">About</a></li>
                    <li><a href="#" class="footer-link">Services</a></li>
                    <li><a href="#" class="footer-link">Contact</a></li>
                </ul>
            </div>

            <!-- Column 3: Contact Info -->
            <div class="col-md-4">
                <h5 class="footer-title">Contact Us</h5>
                <p class="footer-text"><i class="fa fa-phone"></i> +1 234 567 890</p>
                <p class="footer-text"><i class="fa fa-envelope"></i> info@viho.com</p>

                <!-- Social Media Links -->
                <div class="social-icons mt-3">
                    <a href="#" class="text-white me-3"><i class="fa fa-facebook"></i></a>
                    <a href="#" class="text-white me-3"><i class="fa fa-twitter"></i></a>
                    <a href="#" class="text-white me-3"><i class="fa fa-instagram"></i></a>
                    <a href="#" class="text-white"><i class="fa fa-linkedin"></i></a>
                </div>
            </div>
        </div>

        <hr class="my-4" />

        <!-- Footer Bottom: Copyright -->
        <div class="row">
            <div class="col-12 text-center">
                <p class="mb-0">Copyright 2024-25 © viho All rights reserved.</p>
            </div>
        </div>
    </div>
</footer>

<!-- Add custom styles -->
<style>
.footer-title {
    font-size: 1.25rem;
    font-weight: 600;
    margin-bottom: 15px;
}

.footer-text {
    font-size: 0.9rem;
    color: #bbb;
}

.footer-link {
    color: #bbb;
    text-decoration: none;
}

.footer-link:hover {
    color: #ff6c00;
}

.social-icons a {
    font-size: 1.5rem;
}

.footer {
    background-color: #333;
}

.footer .row {
    display: flex;
    justify-content: space-between;
}

.footer hr {
    border-color: #444;
}

@media (max-width: 768px) {
    .footer .row {
        text-align: center;
    }

    .footer .col-md-4 {
        margin-bottom: 20px;
    }
}
</style>

</div>
</div>

<script>
// Initialize Intersection Observer
const observer = new IntersectionObserver((entries, observer) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            // Add visible class to trigger animations
            entry.target.classList.add('visible');
            entry.target.classList.add('scale-up'); // Add scale effect for more impact

            // Stop observing the section after it has animated
            observer.unobserve(entry.target);
        }
    });
}, {
    threshold: 0.2 // Trigger when 20% of the section is visible
});

// Observe all sections
document.querySelectorAll('section').forEach(section => {
    observer.observe(section);
});
</script>

</script>
<!-- latest jquery-->
<script src="./assets/js/jquery-3.5.1.min.js"></script>
<!-- feather icon js-->
<script src="./assets/js/icons/feather-icon/feather.min.js"></script>
<script src="./assets/js/icons/feather-icon/feather-icon.js"></script>
<!-- Sidebar jquery-->
<script src="./assets/js/sidebar-menu.js"></script>
<script src="./assets/js/config.js"></script>
<!-- Bootstrap js-->
<script src="./assets/js/bootstrap/popper.min.js"></script>
<script src="./assets/js/bootstrap/bootstrap.min.js"></script>
<!-- Plugins JS start-->
<!-- Plugins JS Ends-->
<!-- Theme js-->
<script src="./assets/js/script.js"></script>
<script src="./assets/js/theme-customizer/customizer.js"></script>
<!-- login js-->
<!-- Plugin used-->
</body>

</html>