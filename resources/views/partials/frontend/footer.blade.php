<footer>
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                <div class="footer_wp">
                    <i class="icon_pin_alt"></i>
                    <h3>Address</h3>
                    <p>oujda</p>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                <div class="footer_wp">
                    <i class="icon_tag_alt"></i>
                    <h3>Reservations</h3>
                    <p>
                        <a href="tel:009442323221">0000000 </a>
                        <a href="tel:009442323221">000000 </a>
                        <a href="#0">000000000</a>
                    </p>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                <h3>Keep in touch</h3>
                <div id="newsletter">
                    <div id="message-newsletter"></div>
                    <form>
                        <div class="form-group">
                            <input type="email" name="email_newsletter" id="email_newsletter" class="form-control"
                                placeholder="Your email">
                            <button type="submit" id="submit-newsletter"><i class="arrow_carrot-right"></i></button>
                        </div>
                    </form>
                    <div class="follow_us">
                        <ul>
                            <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href=""><i class="fab fa-twitter"></i></a></li>
                            <li><a href=""><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-12 text-center">
                <p class="copy">© {{ $general ? $general->company_name:'' }} - All rights reserved</p>
            </div>
        </div>
        <p class="text-center"></p>
    </div>
</footer>