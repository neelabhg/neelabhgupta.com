<?php
    include_once '../php_includes/global.php';
    $settings["page"] = "Projects";
    include_once $settings["header"];
?>

<div class="row">
    <h2>Projects</h2>
    <div class="row project">
        <h3>Real Time Wikipedia Edits</h3>
        <p>A web application showing recent edits to Wikipedia as they happen in real time.
        <br>View a live demo <a target="_blank" href="<?php echo $settings["website_root"]; ?>projects/rt-wiki-dashboard/live.html">here</a>,
        or view the project on <a target="_blank" href="https://github.com/neelabhg/rt-wiki-dashboard">GitHub</a>.</p>
    </div>
    <div class="row project">
        <h3>Illinix 391</h3>
        <p>
            A Unix-like Operating System for the x86 architecture, written in C.
        </p>
    </div>
    <div class="row project">
        <h3>StartHub</h3>
        <p>A web application which aims to build a community encouraging collaboration between
        startups, research groups and students at the University of Illinois.</p>
    </div>
    <div class="row project">
        <h3>Fibonacci Heap implementation</h3>
        <p>
            Implementation of the priority queue <abbr title="Abstract data type">ADT</abbr> using a Fibonacci heap in C++.
            The presentation introducing the data structure and its implementation can be found <a target="_blank" href="https://db.tt/A4inFlq1">here</a>.
        </p>
    </div>
    <div class="row project">
        <h3>Parallel Quicksort implementation</h3>
        <p>
            A parallel implementation of the Quicksort sorting algorithm in C++ using <a target="_blank" href="http://en.wikipedia.org/wiki/OpenMP">OpenMP</a>.
        </p>
    </div>
    <div class="row project">
        <h3>Web Service backend for CliQs</h3>
        <p>
            Developed the web service backend in PHP + MySQL for CliQs, an iPhone social game,
            at <a target="_blank" href="https://www.facebook.com/voicle">Voicle, Inc</a>, a student startup in Champaign.
            CliQs can be downloaded from the App Store <a target="_blank" href="https://itunes.apple.com/us/app/cliqs/id578519653?mt=8">here</a>, but it is no longer developed/supported by Voicle.
            CliQs was featured in <a target="_blank" href="http://techli.com/2012/12/cliqs-makes-friends-from-facebook-acquaintances/">Techli</a>.
        </p>
    </div>
    <div class="row project">
        <h3>SRC290 - Simple RISC Computer for 290</h3>
        <p>
            A simple Instruction Set Architecture and its Micro Architecture implementation.
        </p>
    </div>
    <div class="row project">
        <h3>Assembler for LC-3</h3>
        <p>
            An assembler for the <a target="_blank" href="http://en.wikipedia.org/wiki/LC-3">Little Computer 3 (LC-3)</a> microarchitecture, written in C.
        </p>
    </div>
    <div class="row project">
        <h3>Red-Eye Removal for the Photo32 project</h3>
        <p>
            A module implementing <a target="_blank" href="http://en.wikipedia.org/wiki/Red-eye_effect">red-eye</a> removal for the <a target="_blank" href="http://photo32.wikispaces.com/">Photo32 project</a>.
            View the implementation details <a target="_blank" href="http://photo32.wikispaces.com/RedEye+Removal">here</a>.
        </p>
    </div>
</div>

<?php include_once $settings["footer"]; ?>
