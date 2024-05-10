<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Contact us</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
         <a href="index.html">
            <img src="IMG_6081.png" alt="Car Image">
        </a>
        <nav>
            <ul>
            <li><a href="index.html">Home</a></li>
                <li><a href="about.html">About Us</a></li>
                <li><a href="services.html">Services</a></li>
                <li><a href="gallery.html">Gallery</a></li>
                <li><a href="schedule.php">Schedule/Contact Us</a></li>
                <li><a href="faq.html">FAQ's</a></li>
                <li><a href="errorpage.html">Report Errors</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <h1>Choose from the following options</h1>
        <div class="faq-section">
            <div class="faq-question">
                <a href="https://myalp.io/tAILEl" target="_blank" style="text-decoration:none;"><h2>Schedule an Appoinment</h2></a>
            </div>
        <div class="faq-question" onclick="toggleAnswer('answer2')">
            <h2>Contact Shop/Ask a Question</h2>
        </div>
            <div class = "faq-answer" id="answer2">
                <div class="faq-form-container">
                        <form method="POST" action="https://getform.io/f/8b30bb26-1aa4-4c89-bfcf-1fff4b243c3c" class="form-container">
                            <div>
                                <p style="font-size: 50px; font-weight: bold; border-bottom: 4px solid rgb(177, 177, 74); color: rgb(255, 255, 255);">Contact Shop</p>
                            </div>
                            <input class="form-field" type="text" placeholder="Name" name="name" />
                            <input class="form-field" type="email" placeholder="Email" name="email" />
                            <textarea class="form-field" name="message" rows="10" placeholder="Message"></textarea>
                            <button class="submit-button" type="submit">Let's Work Together</button>
                        </form>
                    </div>
                </div>
            </div>
            </div>
        </div>
        
        <!-- JAVA FOR POP UP -->
        <script src="script.js"></script>
        <div id="success-modal" class="modal">
            <div class="modal-content">
                <span class="close" onclick="closeModal()">&times;</span>
                <p>Your appointment has been successfully made!</p>
            </div>
        </div> 
            
    
        <div class="pagination">• • • • •</div>
    </main>
    <footer>
        <div class="footer-container">
            <img src="IMG_6081.png" alt="Company Logo" class="footer-logo">
            <div class="footer-details">
                <a href="tel:+3018215926">(301) 821-5926</a> 
                <a href="https://maps.app.goo.gl/cKTceKpTR5JaeCt88" target="_blank">View on Maps</a>
                <a href="contact.html">Contact Us</a>
            </div>
        </div>
    </footer>
</body>
</html>
