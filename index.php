<?php
    include_once './php_includes/global.php';
    $settings["currentPage"] = "Home";
    include_once $settings["header"];
?>

<div class="row">
    <div class="seven columns">
        <h2>Welcome!</h2>
        <p>
            I'm a senior in <a target="_blank" href="http://www.ece.illinois.edu/students/ugrad/curriculum/ce-curriculum-06b.html">Computer Engineering</a>
            at the <a target="_blank" href="http://illinois.edu/">University of Illinois at Urbana-Champaign</a>.
        </p>
    </div>
    <div class="five columns">
        <?php include_once $settings["twitter_user_timeline_widget_file"]; ?>
    </div>
</div>

<?php include_once $settings["footer"]; ?>
