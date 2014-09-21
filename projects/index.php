<?php
    include_once '../php_includes/global.php';
    $settings["page"] = "Projects";
    include_once $settings["header"];
?>

<div class="row">
    <h2>Projects</h2>
    <div class="row project">
        <div>
            <h3>Real Time Wikipedia Edits</h3>
            <h5 class="project-date">August 2013 &mdash; December 2013</h5>
        </div>
        <div class="row">
            <div class="twelve columns">
                <p>A web application showing recent edits to Wikipedia as they happen in real time.</p>
                <div>
                    <i class="icon-code"></i>
                    <ul>
                        <li class="default label">Java</li>
                        <li class="default label">Spring MVC</li>
                        <li class="default label">Atmosphere</li>
                        <li class="default label">Tomcat</li>
                        <li class="default label">Amazon EC2</li>
                    </ul>
                </div>
                <div>
                    <i class="icon-globe"></i><a target="_blank" href="<?php echo $settings["website_root"]; ?>projects/rt-wiki-dashboard/live.html">Live demo</a>
                </div>
                <div>
                    <i class="icon-github"></i><a target="_blank" href="https://github.com/neelabhg/rt-wiki-dashboard">rt-wiki-dashboard on GitHub</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row project">
        <div>
            <h3>Illinix 391</h3>
            <h5 class="project-date">March 2013 &mdash; May 2013</h5>
        </div>
        <div class="row">
            <div class="twelve columns">
                <p>
                    A Unix-like Operating System for the x86 architecture, developed in a team of 4 people.
                    <br>- Supports multiple terminals, each running separate processes using round-robin scheduling.
                    <br>- Supports a basic filesystem with a flat directory structure.
                    <br>- Supports sending signals to processes, including SIGINT, SEGFAULT.
                </p>
                <div>
                    <i class="icon-code"></i>
                    <ul>
                        <li class="default label">C</li>
                        <li class="default label">x86 Assembly</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="row project">
        <div>
            <h3>StartHub</h3>
            <h5 class="project-date">September 2013 &mdash; December 2013</h5>
        </div>
        <div class="row">
            <div class="twelve columns">
                <p>
                    A web application which aims to build a community encouraging collaboration between
                    startups, research groups and students at the University of Illinois.
                </p>
                <div>
                    <i class="icon-code"></i>
                    <ul>
                        <li class="default label">Python</li>
                        <li class="default label">Django</li>
                        <li class="default label">MySQL</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="row project">
        <div>
            <h3>Priority Queue using Fibonacci Heap</h3>
            <h5 class="project-date">August 2012 &mdash; November 2012</h5>
        </div>
        <div class="row">
            <div class="twelve columns">
                <p>
                    Implementation of the priority queue <abbr title="Abstract data type">ADT</abbr> using a Fibonacci heap.
                </p>
                <div>
                    <i class="icon-code"></i>
                    <ul>
                        <li class="default label">C++</li>
                        <li class="default label">C++ STL</li>
                    </ul>
                </div>
                <div>
                    <i class="icon-doc-text"></i><a target="_blank" href="https://db.tt/A4inFlq1">Presentation slides</a>
                </div>
                <div>
                    <i class="icon-github"></i><a target="_blank" href="https://github.com/neelabhg/rt-wiki-dashboard">rt-wiki-dashboard on GitHub</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row project">
        <div>
            <h3>Parallel Quicksort implementation</h3>
            <h5 class="project-date">August 2012 &mdash; November 2012</h5>
        </div>
        <div class="row">
            <div class="twelve columns">
                <p>
                    A parallel implementation of the Quicksort sorting algorithm in C++
                    using <a target="_blank" href="http://en.wikipedia.org/wiki/OpenMP">OpenMP</a>.
                </p>
                <div>
                    <i class="icon-code"></i>
                    <ul>
                        <li class="default label">C++</li>
                        <li class="default label"><a target="_blank" href="http://en.wikipedia.org/wiki/OpenMP">OpenMP</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="row project">
        <div>
            <h3>Web Service backend for CliQs</h3>
            <h5 class="project-date">November 2012 &mdash; April 2013</h5>
        </div>
        <div class="row">
            <div class="twelve columns">
                <p>
                    Developed the web service backend for CliQs, an iPhone social game,
                    at <a target="_blank" href="https://www.facebook.com/voicle">Voicle, Inc</a>, a student startup in Champaign.
                    CliQs can be downloaded from the App Store <a target="_blank" href="https://itunes.apple.com/us/app/cliqs/id578519653?mt=8">here</a>, but it is no longer developed/supported by Voicle.
                    CliQs was featured in <a target="_blank" href="http://techli.com/2012/12/cliqs-makes-friends-from-facebook-acquaintances/">Techli</a>.
                </p>
                <div>
                    <i class="icon-code"></i>
                    <ul>
                        <li class="default label">PHP</li>
                        <li class="default label">MySQL</li>
                        <li class="default label">AWS Elastic Beanstalk</li>
                        <li class="default label">Amazon EC2</li>
                        <li class="default label">Amazon RDS</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="row project">
        <div>
            <h3>Assembler for LC-3</h3>
            <h5 class="project-date">March 2012 &mdash; April 2012</h5>
        </div>
        <div class="row">
            <div class="twelve columns">
                <p>
                    An assembler for the <a target="_blank" href="http://en.wikipedia.org/wiki/LC-3">Little Computer 3 (LC-3)</a> microarchitecture,
                    written in C using only standard library functions.
                </p>
                <div>
                    <i class="icon-code"></i>
                    <ul>
                        <li class="default label">C</li>
                    </ul>
                </div>
                <div>
                    <i class="icon-github"></i><a target="_blank" href="https://github.com/neelabhg/LC-3_Assembler">LC-3_Assembler on GitHub</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row project">
        <div>
            <h3>SRC290 - Simple RISC Computer for 290</h3>
            <h5 class="project-date">September 2012 &mdash; November 2012</h5>
        </div>
        <div class="row">
            <div class="twelve columns">
                <p>
                    A simple Instruction Set Architecture and its Micro Architecture implementation.
                </p>
                <div>
                    <i class="icon-code"></i>
                    <ul>
                        <li class="default label">VHDL</li>
                        <li class="default label">Mentor Graphics HDL Designer</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include_once $settings["footer"]; ?>
