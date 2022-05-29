<footer>
            <div id="left-footer">
                <h3>Quick Links</h3>
                <p>
                    <ul>
                        <li>
                            <a href="<?php echo site_url('') //display front page?>">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('/about') //display page-about page?>">About</a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('/privacy-policy') //display page-privacy-policy page?>">Privacy Policy</a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('/blog') //display index page?>">Blogs</a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('/projects') //display archive-projects page?>">Projects</a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('/contact') //display page-contact page?>">Contact</a>
                        </li>
                    </ul>
                </p>
            </div>

            <div id="right-footer">
                <h3>Follow us on</h3>
                <div id="social-media-footer">
                    <ul>
                        <li>
                            <a href="https://github.com/Prasanto19" target = "_blank">
                                <i class="fab fa-github"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.facebook.com/prasanto.cou/" target = "_blank">
                                <i class="fab fa-facebook"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/prasanto19/" target = "_blank">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <p>This website is developed by Prashanta</p>
            </div>
        </footer>

    </main>
    <?php wp_footer()?><!--Add footer from functions.php-->
</body>

</html>