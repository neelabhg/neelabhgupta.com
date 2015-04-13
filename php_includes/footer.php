    <div id="footer-wrapper">
        <footer>
            <div class="row" data-target='contact'><h3>About me</h3></div>
            
            <div id="about" class="row">
                <div class="two columns">
                    <div class="circular-profile-picture" style="background-image: url('<?php echo $settings["website_root"]; ?>img/profile_photo.jpg')"></div>
                </div>
                
                <div class="six columns">
                    <div class="row">
                        Currently pursuing a Bachelors in Computer Engineering at the University of Illinois at Urbana-Champaign.
                        I am interested in Web development, Systems software, Artificial Intelligence and Physics.
                    </div>
                    <br>
                    <div id="resume-btn" class="btn info medium icon-left entypo icon-download">
                        <a href="https://github.com/neelabhg/resume/raw/master/Resume_Neelabh_Gupta.pdf">R&eacute;sum&eacute;</a>
                    </div>
                </div>
                
                <div id="social-buttons" class="four columns">
                    <div class="row">
                        <div class="btn info medium icon-left entypo icon-mail"><a target="_blank" href="mailto:nsgupta2@illinois.edu">Email</a></div>
                        <div class="btn linkedin medium icon-left entypo icon-linkedin"><a target="_blank" href="https://www.linkedin.com/in/neelabhsgupta/">LinkedIn</a></div>
                    </div>
                    <div class="row">
                        <div class="btn twitter medium icon-left entypo icon-twitter"><a target="_blank" href="https://www.twitter.com/neelabhg">Twitter</a></div>
                        <div class="btn facebook medium icon-left entypo icon-facebook"><a target="_blank" href="https://www.facebook.com/neelabhg">Facebook</a></div>
                    </div>
                    <div class="row">
                        <div class="btn danger medium icon-left entypo icon-gplus"><a target="_blank" href="https://plus.google.com/107575236618130190927/">Google+</a></div>
                        <div class="btn primary medium icon-left entypo icon-github"><a target="_blank" href="https://github.com/neelabhg">GitHub</a></div>
                    </div>
                </div>
            </div>
            
            <br>
            <div id="copyright" class="row">
                &copy; 2014-2015 Neelabh Gupta
            </div>
            <div class="row">
                <div id="humans-txt-btn" class="column">
                    <a href="<?php echo $settings["website_root"]; ?>humans.txt"><img src="http://humanstxt.org/img/oficial-logos/humanstxt-transparent-1ink.png" /></a>
                </div>
                <div id="top-link" class="column">
                    <span class="hide-on-all-phones">|</span>
                    <a class="skip" href="#" data-goto="[data-target='top']">Top</a>
                </div>
            </div>
        </footer>
    </div>
     
    <!-- Load Javascript -->

    <!-- Grab Google CDN's jQuery, fall back to local if offline -->
    <!-- 2.0 for modern browsers, 1.10 for .oldie -->
    <script>
        var oldieCheck = Boolean(document.getElementsByTagName('html')[0].className.match(/\soldie\s/g));
        if(!oldieCheck) {
            document.write('<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"><\/script>');
        } else {
            document.write('<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"><\/script>');
        }
    </script>
    <script>
        if(!window.jQuery) {
            if(!oldieCheck) {
                document.write('<script src="<?php echo $settings["website_root"]; ?>js/libs/jquery-2.0.2.min.js"><\/script>');
            } else {
                document.write('<script src="<?php echo $settings["website_root"]; ?>js/libs/jquery-1.10.1.min.js"><\/script>');
            }
        }
    </script>

    <!--
    Google's recommended deferred loading of JS
    gumby.min.js contains gumby.js, all UI modules and gumby.init.js

    Note: If you opt to use this method of defered loading,
    ensure that any javascript essential to the initial
    display of the page is included separately in a normal
    script tag.
    -->
    <script type="text/javascript">
        function downloadJSAtOnload() {
            var element = document.createElement("script");
            element.src = "<?php echo $settings["website_root"]; ?>js/gumby.min.js";
            document.body.appendChild(element);
        }
        if (window.addEventListener)
            window.addEventListener("load", downloadJSAtOnload, false);
        else if (window.attachEvent)
            window.attachEvent("onload", downloadJSAtOnload);
        else window.onload = downloadJSAtOnload;
    </script>

    <!-- Prompt IE 6 users to install Chrome Frame. Remove this if you want to support IE 6.
           chromium.org/developers/how-tos/chrome-frame-getting-started -->
    <!--[if lt IE 7 ]>
    <script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
    <script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
    <![endif]-->
    
  </body>
</html>
