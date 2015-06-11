<?php
    include_once './php_includes/global.php';
    $settings["currentPage"] = "Home";
    include_once $settings["header"];
?>

<div class="row">
    <div id="homepage-about-me" class="seven columns">
        <h2>Welcome!</h2>
        <p>
            I'm a senior in <a target="_blank" href="https://www.ece.illinois.edu/academics/ugrad/curriculum/ce-curriculum-06b.asp">Computer Engineering</a>
            at the <a target="_blank" href="http://illinois.edu/">University of Illinois at Urbana-Champaign</a>.
            Read on to know more about me, <a href="<?php echo $settings["website_root"]; ?>projects/">check out my projects</a> and <a href="#" class="skip" data-goto="[data-target='contact']">reach me on social networks</a>!
        </p>
        <h4>A few things about me:</h4>
        <ul class="disc">
            <li>I've interned at <a target="_blank" href="https://ads.twitter.com/">Twitter</a> and <a target="_blank" href="https://zong.com/">PayPal</a>.</li>
            <li>I have worked as an undergraduate Teaching Assistant for the operating systems course
                (<a target="_blank" href="https://courses.engr.illinois.edu/ece391/">ECE 391</a>) for two semesters at the University.</li>
            <li>I love Soccer and Badminton.</li>
            <li>I love electronic music (EDM, House, etc). Some of my favorite artists are <a target="_blank" href="http://alessoworld.com/">Alesso</a>, <a target="_blank" href="https://www.axwell.com">Axwell</a>, <a target="_blank" href="http://www.afrojack.com/">Afrojack</a> and <a target="_blank" href="http://www.kygomusic.com/">Kygo</a>.</li>
            <li>I'm a DJ myself (well, aspiring to be):
                <blockquote class="twitter-tweet" lang="en">
                    <p>
                        <a href="https://twitter.com/neelabhg">@neelabhg</a>,
                        one of the Twitter <a href="https://twitter.com/terns">@terns</a>,
                        holding it down at the DJ booth at the <a href="https://twitter.com/hashtag/ternopenhouse?src=hash">#ternopenhouse</a>!
                        <a href="http://t.co/cFMX4Rsyun">pic.twitter.com/cFMX4Rsyun</a>
                    </p>
                    &mdash; Twitter U Recruiting (@TwitterU) <a href="https://twitter.com/TwitterU/status/492111171533553664">July 24, 2014</a>
                </blockquote>
            </li>
        </ul>
    </div>
    <div class="five columns">
        <?php include_once $settings["twitter_user_timeline_widget_file"]; ?>
    </div>
</div>

<?php include_once $settings["footer"]; ?>
