<?php
include 'header.php'; 
?> 
    <section id="contact-info">
        <div class="center">                
            <h2>How to Reach Us?</h2>
            <p class="lead">Contact information</p>
        </div>
        <div class="gmap-area">
            <div class="container">
                <div class="row">
                    <div class="col-sm-5 text-center">
                        <div class="gmap">
                          <iframe class="image-center" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3109.8007886784267!2d-121.26010768465272!3d38.79120097958714!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x809b1f5e96618107%3A0x1a15c3b5e22e007!2s2651+Sunset+Blvd%2C+Rocklin%2C+CA+95677!5e0!3m2!1sen!2sus!4v1469467982376" width="90%" height="350"  frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                    </div>

                    <div class="col-sm-7 map-content">
                        <ul class="row">
                            <li class="col-sm-6">
                                <address>
                                    <h5>Head Office</h5>
                                    <p>2651 Sunset Blvd <br>
                                    Rocklin CA, 95677</p>
                                    <p>Phone:916-276-8099 <br>
                                    Email: info@cjcomputersolutions.com</p>
                                </address>

                                <address>
                                    <h5>External Office</h5>
                                    <p>5890 Tajin Street <br>
                                    Guadalajara Mexico ZP 45090</p>                                
                                    <p>Phone:333-808-2005 <br>
                                    Email:info.mx@cjcomputersolutions.com</p>
                                </address>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>  <!--/gmap_area -->

    <section id="contact-page">
        <div class="container">
            <div class="center">        
                <h2>Drop Your Message</h2>
                <p class="lead">We will contact you as soon as possible</p>
            </div> 
            <div class="row contact-wrap"> 
                <div class="status alert alert-success" style="display: none"></div>
                <form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="sendemail.php">
                    <div class="col-sm-5 col-sm-offset-1">
                        <div class="form-group">
                            <label>Name *</label>
                            <input type="text" name="name" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label>Email *</label>
                            <input type="email" name="email" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label>Phone</label>
                            <input type="number" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Company Name</label>
                            <input type="text" class="form-control">
                        </div>                        
                    </div>
                    <div class="col-sm-5">
                        <div class="form-group">
                            <label>Subject *</label>
                            <input type="text" name="subject" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label>Message *</label>
                            <textarea name="message" id="message" required="required" class="form-control" rows="8"></textarea>
                        </div>                        
                        <div class="form-group">
                            <button type="submit" name="submit" class="btn btn-primary btn-lg" required="required">Submit Message</button>
                        </div>
                    </div>
                </form> 
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#contact-page-->
<?php
include 'bottomenu.php';
include 'footer.php'; 
?> 
