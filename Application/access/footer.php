<!-- footer -->
<div class="footer">
    <div class="container">
        <div class="info">
            <div class="row">
                <div class="col-md-4 wow fadeInUp" data-wow-delay="0.3s" id="address">
                    <p>Workarea</p>
                    <h4>Jln. W.J Lalamentik no.95</h4>
                    <h4>NTT, Indo</h4>
                    <h4>AR +62 811 3827 421</h4>
                    <br><br>
                </div>
                <div class="col-md-4 wow fadeInUp" data-wow-delay="0.4s" id="media">
                    <ul>
                        <li><a href="https://www.facebook.com/ar.code27/" style="color: white">
                                <ion-icon name="logo-facebook"></ion-icon>
                            </a></li>
                        <li><a href="https://www.instagram.com/ar.code_/" style="color: white">
                                <ion-icon name="logo-instagram"></ion-icon>
                            </a></li>
                        <li><a href="https://www.youtube.com/channel/UC7mxNSfWUOgVgH05YynkCoA?view_as=subscriber" style="color: white">
                                <ion-icon name="logo-youtube"></ion-icon>
                            </a></li>
                        <li><a href="https://github.com/arlanbutarbutar" style="color: white">
                                <ion-icon name="logo-github"></ion-icon>
                            </a></li>
                    </ul>
                    <br>
                    <form action="" method="POST">
                        <div class="form-group text-center">
                            <label class="text-light">Join our group!</label><br>
                            <button type="submit" name="invite-group" class="btn btn-dark">
                                <ion-icon name="logo-whatsapp"></ion-icon> Netmedia Framecode
                            </button>
                        </div>
                    </form>
                </div>
                <div class="col-md-4 wow fadeInUp" data-wow-delay="0.5s" id="mail">
                    <p>Say Hello</p>
                    <h4>arlan270899@gmail.com</h4>
                    <br><br>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<script src="Assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="Assets/vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
<script type="text/javascript">
    // navigation starts here
    $("#toggle").click(function() {
        $(this).toggleClass('on');
        $("#resize").toggleClass("active");
    });
    $("#resize ul li a").click(function() {
        $(this).toggleClass('on');
        $("#resize").toggleClass("active");
    });
    $(".close-btn").click(function() {
        $(this).toggleClass('on');
        $("#resize").toggleClass("active");
    });

    $(function() {
        $(document).scroll(function() {
            var $nav = $(".nav");
            $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
        });
    });

    new WOW().init();

    // Select all links with hashes
    $('a[href*="#"]')

        // Remove links that don't actually link to anything
        .not('[href="#"]')
        .not('[href="#0"]')
        .click(function(event) {
            // On-page links
            if (
                location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') &&
                location.hostname == this.hostname
            ) {
                // Figure out element to scroll to
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                // Does a scroll target exist?
                if (target.length) {
                    // Only prevent default if animation is actually gonna happen
                    event.preventDefault();
                    $('html, body').animate({
                        scrollTop: target.offset().top
                    }, 1000, function() {
                        // Callback after animation
                        // Must change focus!
                        var $target = $(target);
                        $target.focus();
                        if ($target.is(":focus")) { // Checking if the target was focused
                            return false;
                        } else {
                            $target.attr('tabindex', '-1'); // Adding tabindex for elements not focusable
                            $target.focus(); // Set focus again
                        };
                    });
                }
            }
        });

    function initFreshChat() {
        window.fcWidget.init({
            token: "0ea4a381-a183-4bd9-a892-a6788ff6822d",
            host: "https://wchat.freshchat.com"
        });
    }

    function initialize(i, t) {
        var e;
        i.getElementById(t) ? initFreshChat() : ((e = i.createElement("script")).id = t, e.async = !0, e.src = "https://wchat.freshchat.com/js/widget.js", e.onload = initFreshChat, i.head.appendChild(e))
    }

    function initiateCall() {
        initialize(document, "freshchat-js-sdk")
    }
    window.addEventListener ? window.addEventListener("load", initiateCall, !1) : window.attachEvent("load", initiateCall, !1);
    AOS.init({
        offset: 400,
        duration: 1000
    });
    window.setTimeout(function() {
        $(".alert").fadeTo(500, 0).slideUp(500, function() {
            $(this).remove();
        });
    }, 15000)
</script>