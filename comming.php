<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Home Agam-development</title>
        <?php include_once('includes/site-master.php') ?>
    </head>

    <body>
        <!-- =========================banner=================== -->
        <main>
            <!-- =========================banner=================== -->
            <section class="banner comming" id="banner">
                <div id="banner_slider">
                    <div class="item">
                        <div class="image">
                            <img src="images/banner-2.jpg" alt="">
                        </div>
                        <div class="banner_cntnt">
                            <div class="contain">
                                <div class="content">
                                    <div class="log">
                                        <img src="images/logo-2.png" alt="">
                                    </div>
                                    <div class="sec_heading">
                                        <div class="title">
                                            <h5>
                                                <div class="wt-separator-outer">
                                                    <div class="wt-separator style-square">
                                                        <span class="separator-left site-bg-primary"></span>
                                                        <span class="separator-right site-bg-primary"></span>
                                                    </div>
                                                </div>
                                            </h5>
                                        </div>
                                        <h1>Comming<strong> SOON


                                            </strong></h1>
                                    </div>

                                    <ul class="infoLst">
                                        <li>
                                            <img src="images\icon-map-marker.svg" alt="">
                                            <a href="">20, Somewhere in world</a>
                                        </li>
                                        <li>
                                            <img src="images\icon-envelope-fill.svg" alt="">
                                            <a href="mailto:jetmeans@gmail.com">abcinfo@gmail.com</a>
                                        </li>
                                        <li>
                                            <img src="images\icon-phone.svg" alt="">
                                            <a href="tel:(734) 219-2298">(734) 219-86796</a>
                                        </li>
                                    </ul>
                                    <ul class="social flex">

                                        <li><a href="" style="display: block;"><img src="images/social-instagram.svg"
                                                    alt=""></a></li>

                                        <li><a href="" style="display: block;"><img src="images/social-facebook.svg"
                                                    alt=""></a></li>
                                        <li><a href="" style="display: block;"><img src="images/social-twitter.svg"
                                                    alt=""></a></li>
                                        <li><a href="" style="display: block;"><img src="images/social-youtube.svg"
                                                    alt=""></a></li>
                                    </ul>


                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </section>
        </main>
        <?php include_once('includes/commonjs.php') ?>
        <!-- <script>
        var counted = 0;
        $(window).scroll(function() {
            var oTop = $("#counter").offset().top - window.innerHeight;
            if (counted == 0 && $(window).scrollTop() > oTop) {
                $(".count").each(function() {
                    var $this = $(this),
                        countTo = $this.attr("data-count");
                    $({
                        countNum: $this.text(),
                    }).animate({
                            countNum: countTo,
                        },

                        {
                            duration: 2000,
                            easing: "swing",
                            step: function() {
                                $this.text(Math.floor(this.countNum));
                            },
                            complete: function() {
                                $this.text(this.countNum);
                                //alert('finished');
                            },
                        }
                    );
                });
                counted = 1;
            }
        });
        </script> -->
    </body>

</html>