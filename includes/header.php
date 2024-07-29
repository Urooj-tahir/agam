<!-- header -->
<header class="">
    <div class="contain-fluid">
        <div class="header_bg">
            <div class="logo">
                <a href="index.php">
                    <img src="images/logo-2.png" alt="">
                </a>
            </div>
            <div class="toggle"><span></span></div>
            <nav class="ease" nav="">
                <ul id="nav">
                    <li class="">
                        <a href="index.php" class="<?= ($page == 'index' || $page == '') ? 'active' : '' ?>">Home</a>
                    </li>
                    <li class="">
                        <a href="about.php" class="<?= ($page == 'about') ? 'active' : '' ?>">About Us</a>
                    </li>
                    <li class="">
                        <a href="index.php#blog" class="<?= ($page == 'blog') ? 'active' : '' ?>">Blog</a>
                    </li>

                    <li class="">
                        <a href="index.php#project" class="<?= ($page == 'career') ? 'active' : '' ?>">Our Projects
                        </a>
                    </li>
                    <li class="">
                        <a href="contact.php" class="<?= ($page == 'contact') ? 'active' : '' ?>">Contact Us
                        </a>
                    </li>
                    <!-- <li class="">
                        <a href="contact.php" class="webBtn" class="<?= ($page == 'contact') ? 'active' : '' ?>"><span
                                class="eduact-btn__curve"></span>Contact
                            us</a>
                    </li> -->

                </ul>

            </nav>
        </div>

        <div class="clearfix"></div>
    </div>
</header>