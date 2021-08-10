<section id="contact" class="contact">
    <div class="container">

        <div class="section-title" data-aos="zoom-out">
            <h2>Contact</h2>
            <p>Contact Us</p>
        </div>



        <div class="wrap mcb-wrap mcb-wrap-on2kjl8qq one-second  valign-middle clearfix" style="padding: 0;background-image: url(assets/img/border.png);/* background-repeat: no-repeat; */background-position: bottom;height: 60px;border-top-left-radius: 10px;border-top-right-radius: 10px;">
            <div class="mcb-wrap-inner">
                <div class="column mcb-column mcb-item-icj0go0hg one column_placeholder">
                    <div class="placeholder">&nbsp;</div>
                </div>
            </div>
        </div>

        <div class="row contact-details">
            @foreach ($contact as $contact)
                
            
            <div class="col-lg-5" data-aos="fade-right">
                <div class="info">
                    <div class="address">
                        <i class="bi bi-geo-alt"></i>
                        <h4>Location:</h4>
                        <p>
                            {{$contact->location}}
                        </p>
                    </div>

                    <div class="email">
                        <i class="bi bi-envelope"></i>
                        <h4>Email:</h4>
                        <p><a href="mailto:info@2m-metalcoating.com"> {{$contact->email}}</a></p>
                    </div>

                    <div class="phone">
                        <i class="bi bi-phone"></i>
                        <h4>Call:</h4>
                        <p> {{$contact->phone}}</p>
                    </div>

                </div>

            </div>
            @endforeach

            <div class="col-lg-7 mt-5 mt-lg-0" data-aos="fade-left">

                <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                        </div>
                        <div class="col-md-6 form-group mt-3 mt-md-0">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                    </div>
                    <div class="form-group mt-3">
                        <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
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

    </div>
</section>