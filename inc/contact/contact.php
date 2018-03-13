<?php
echo 
    '<section class="footer-contact-area section_padding_100 clearfix" id="contact">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <!-- Heading Text  -->
                <div class="section-heading">
                    <h2>Get in touch with us!</h2>
                    <div class="line-shape"></div>
                </div>
                <div class="footer-text">
                    <p>We will send you epic weekly blogs, whitepapers and things to make your app startup thrive, all FREE!</p>
                </div>';
                
                $string = file_get_contents("inc/contact/contact.json");
                $json_a=json_decode($string,true);
                
                foreach ($json_a as $key => $value) 
                {
                    echo '<div class="address-text">
                    <p>
                    <span>Address:</span>';
                    echo $value["address"]; echo '</p>
                    </div>
                    <div class="phone-text">
                    <p>
                        <span>Phone:</span>'; 
                        echo $value["number"]; echo '</p>
                    </div>
                    <div class="email-text">
                    <p>
                        <span>Email:</span>'; 
                        echo $value["email"]; echo '</p>
                    </div>';
                  }
            echo '</div>
            <div class="col-md-6">
                <!-- Form Start-->
                <div class="contact_from">
                    <form action="#" method="post">
                        <!-- Message Input Area Start -->
                        <div class="contact_input_area">
                            <div class="row">
                                <!-- Single Input Area Start -->
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="name" id="name" placeholder="Your Name" required>
                                    </div>
                                </div>
                                <!-- Single Input Area Start -->
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="email" id="email" placeholder="Your E-mail" required>
                                    </div>
                                </div>
                                <!-- Single Input Area Start -->
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea name="message" class="form-control" id="message" cols="30" rows="4" placeholder="Your Message *" required></textarea>
                                    </div>
                                </div>
                                <!-- Single Input Area Start -->
                                <div class="col-12">
                                    <button type="submit" class="btn submit-btn">Send Now</button>
                                </div>
                            </div>
                        </div>
                        <!-- Message Input Area End -->
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>';
?>