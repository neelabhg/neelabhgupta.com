<?php
    include_once '../php_includes/global.php';
    $settings["currentPage"] = "Projects";
    include_once $settings["header"];
?>

<div class="row">
    <h2>Projects</h2>
    <div class="row project">
        <div>
            <h3 class="project-title">Linux-In-The-Browser</h3>
            <h5 class="project-date">July 2014 &mdash; Present</h5>
        </div>
        <div class="row">
            <div class="twelve columns">
                <p class="project-description">
                    A system programming playground in the browser developed in collaboration with
                    <a target="_blank" href="https://github.com/angrave">Dr. Lawrence Angrave</a>, used in the
                    <a target="_blank" href="https://courses.engr.illinois.edu/cs241/fa2014/">CS 241 (System Programming)</a> course at <a target="_blank" href="http://illinois.edu/">Illinois</a>.
                    Features a tiny but fast Linux virtual machine in JavaScript powered by the <a target="_blank" href="https://github.com/cs-education/jor1k">jor1k</a> project.
                    <p>
                        I'm currently undertaking this project as a <a target="_blank" href="https://courses.engr.illinois.edu/ece496/">senior research project with thesis</a>.
                        This project also became part of the <a target="_blank" href="https://seniorprojects.cs.illinois.edu/">Computer Science Senior Project course</a> starting in Fall 2014.
                        The 2014-15 team consists of 7 students (including me).
                    </p>
                </p>
                <div class="project-technologies">
                    <i class="icon-code"></i>
                    <ul>
                        <li class="default label"><a target="_blank" href="http://en.wikipedia.org/wiki/JavaScript">JavaScript</a></li>
                        <li class="default label"><a target="_blank" href="http://knockoutjs.com/">Knockout JS</a></li>
                        <li class="default label"><a target="_blank" href="http://sammyjs.org/">Sammy.js</a></li>
                        <li class="default label"><a target="_blank" href="http://getbootstrap.com/">Bootstrap</a></li>
                        <li class="default label"><a target="_blank" href="http://sass-lang.com/">Sass</a></li>
                        <li class="default label"><a target="_blank" href="http://bower.io/">Bower</a></li>
                        <li class="default label"><a target="_blank" href="http://gruntjs.com/">Grunt</a></li>
                        <li class="default label"><a target="_blank" href="http://yeoman.io/">Yeoman</a></li>
                    </ul>
                </div>
                <div class="project-external-links">
                    <div>
                        <i class="icon-globe"></i><a target="_blank" href="http://cs-education.github.io/sys">Production</a>
                    </div>
                    <div>
                        <i class="icon-globe"></i><a target="_blank" href="http://cs-education.github.io/sys-staging/">Staging</a>
                    </div>
                    <div>
                        <i class="icon-github"></i><a target="_blank" href="https://github.com/cs-education/sysbuild">sysbuild on GitHub</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row project">
        <div>
            <h3 class="project-title">ECE 391 Grading System</h3>
            <h5 class="project-date">August 2014 &mdash; Present</h5>
        </div>
        <div class="row">
            <div class="twelve columns">
                <p class="project-description">
                    A web-based system for grading programming assignments (<abbr title="Machine Problems">MPs</abbr>) in the
                    <a target="_blank" href="https://courses.engr.illinois.edu/ece391/">ECE 391 (Computer Systems Engineering)</a> course at <a target="_blank" href="http://illinois.edu/">Illinois</a>.
                    This project aims to help graders migrate away from paper-based grading, and enable students to view detailed grade breakdowns not possible earlier.
                    Developed using a decoupled architecture, with an API and web client communicating through <a target="_blank" href="http://json.org/">JSON</a>,
                    both developed as separate projects and deployed separately.
                </p>
                <div class="project-technologies">
                    <i class="icon-code"></i>
                    <ul>
                        <li class="default label"><a target="_blank" href="https://www.python.org/">Python</a></li>
                        <li class="default label"><a target="_blank" href="https://www.djangoproject.com/">Django</a></li>
                        <li class="default label"><a target="_blank" href="http://www.mysql.com/">MySQL</a></li>
                        <li class="default label"><a target="_blank" href="http://en.wikipedia.org/wiki/JavaScript">JavaScript</a></li>
                        <li class="default label"><a target="_blank" href="http://backbonejs.org/">Backbone.js</a></li>
                        <li class="default label"><a target="_blank" href="http://foundation.zurb.com/">Foundation</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="row project">
        <div>
            <h3 class="project-title">Real Time Wikipedia Edits</h3>
            <h5 class="project-date">August 2013 &mdash; December 2013</h5>
        </div>
        <div class="row">
            <div class="twelve columns">
                <p class="project-description">
                    A web application showing recent edits to Wikipedia as they happen in real time.
                </p>
                <div class="project-technologies">
                    <i class="icon-code"></i>
                    <ul>
                        <li class="default label"><a target="_blank" href="http://en.wikipedia.org/wiki/Java_(programming_language)">Java</a></li>
                        <li class="default label"><a target="_blank" href="http://projects.spring.io/spring-framework/">Spring MVC</a></li>
                        <li class="default label"><a target="_blank" href="http://async-io.org/">Atmosphere</a></li>
                        <li class="default label"><a target="_blank" href="http://tomcat.apache.org/">Tomcat</a></li>
                        <li class="default label"><a target="_blank" href="http://aws.amazon.com/ec2/">Amazon EC2</a></li>
                    </ul>
                </div>
                <div class="project-external-links">
                    <div>
                        <i class="icon-globe"></i><a target="_blank" href="<?php echo $settings["website_root"]; ?>projects/rt-wiki-dashboard/live.html">Live demo</a>
                    </div>
                    <div>
                        <i class="icon-github"></i><a target="_blank" href="https://github.com/neelabhg/rt-wiki-dashboard">rt-wiki-dashboard on GitHub</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row project">
        <div>
            <h3 class="project-title">neelabhgupta.com website</h3>
            <h5 class="project-date">March 2014 &mdash; Present</h5>
        </div>
        <div class="row">
            <div class="twelve columns">
                <p class="project-description">
                    My personal website (the one you are on right now!), hosted by the awesome people at <a target="_blank" href="http://datafirst.co.in/">DataFirst</a>.
                </p>
                <div class="project-technologies">
                    <i class="icon-code"></i>
                    <ul>
                        <li class="default label"><a target="_blank" href="http://php.net/">PHP</a></li>
                        <li class="default label"><a target="_blank" href="http://gumbyframework.com/">Gumby Framework</a></li>
                        <li class="default label"><a target="_blank" href="http://sass-lang.com/">Sass</a></li>
                        <li class="default label"><a target="_blank" href="http://www.google.com/analytics/">Google Analytics</a></li>
                        <li class="default label"><a target="_blank" href="https://mixpanel.com/">Mixpanel</a></li>
                    </ul>
                </div>
                <div class="project-external-links">
                    <div>
                        <i class="icon-globe"></i><a target="_blank" href="http://neelabhgupta.com/">neelabhgupta.com</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row project">
        <div>
            <h3 class="project-title">2048 on an FPGA</h3>
            <h5 class="project-date">April 2014 &mdash; May 2014</h5>
        </div>
        <div class="row">
            <div class="twelve columns">
                <p class="project-description">
                    A clone of the <a target="_blank" href="http://gabrielecirulli.github.io/2048/">2048 game</a> in VHDL,
                    for the final project of the <a target="_blank" href="https://wiki.cites.illinois.edu/wiki/display/ECE385/Home">ECE 385 (Digital Systems Laboratory)</a> course at <a target="_blank" href="http://illinois.edu/">Illinois</a>.
                    The game runs on the <a target="_blank" href="http://www.altera.com/education/univ/materials/boards/de2/unv-de2-board.html">Altera DE2 FPGA board</a>,
                    using a PS/2 keyboard to control gameplay and VGA for display.
                    The project also uses Python for generating repetitive VHDL code and for generating sprite images used with the VGA display.
                </p>
                <div class="project-technologies">
                    <i class="icon-code"></i>
                    <ul>
                        <li class="default label"><a target="_blank" href="http://en.wikipedia.org/wiki/VHDL">VHDL</a></li>
                        <li class="default label"><a target="_blank" href="http://www.altera.com/products/software/quartus-ii/web-edition/qts-we-index.html">Altera Quartus II</a></li>
                        <li class="default label"><a target="_blank" href="https://www.python.org/">Python</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="row project">
        <div>
            <h3 class="project-title">Illinix 391</h3>
            <h5 class="project-date">March 2013 &mdash; May 2013</h5>
        </div>
        <div class="row">
            <div class="twelve columns">
                <p class="project-description">
                    A Unix-like Operating System for the x86 architecture, developed in a team of 4 people.
                    <br>- Supports multiple terminals, each running separate processes using round-robin scheduling.
                    <br>- Supports a basic filesystem with a flat directory structure.
                    <br>- Supports sending signals to processes, including SIGINT, SEGFAULT.
                </p>
                <div class="project-technologies">
                    <i class="icon-code"></i>
                    <ul>
                        <li class="default label"><a target="_blank" href="http://en.wikipedia.org/wiki/C_(programming_language)">C</a></li>
                        <li class="default label"><a target="_blank" href="http://en.wikipedia.org/wiki/X86_assembly_language">x86 Assembly</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="row project">
        <div>
            <h3 class="project-title">StartHub</h3>
            <h5 class="project-date">September 2013 &mdash; December 2013</h5>
        </div>
        <div class="row">
            <div class="twelve columns">
                <p class="project-description">
                    A web application which aims to build a community encouraging collaboration between
                    startups, research groups and students at the University of Illinois.
                </p>
                <div class="project-technologies">
                    <i class="icon-code"></i>
                    <ul>
                        <li class="default label"><a target="_blank" href="https://www.python.org/">Python</a></li>
                        <li class="default label"><a target="_blank" href="https://www.djangoproject.com/">Django</a></li>
                        <li class="default label"><a target="_blank" href="http://www.mysql.com/">MySQL</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="row project">
        <div>
            <h3 class="project-title">Priority Queue using Fibonacci Heap</h3>
            <h5 class="project-date">August 2012 &mdash; November 2012</h5>
        </div>
        <div class="row">
            <div class="twelve columns">
                <p class="project-description">
                    Implementation of the priority queue <abbr title="Abstract data type">ADT</abbr> using a Fibonacci heap.
                </p>
                <div class="project-technologies">
                    <i class="icon-code"></i>
                    <ul>
                        <li class="default label"><a target="_blank" href="http://en.wikipedia.org/wiki/C%2B%2B">C++</a></li>
                        <li class="default label"><a target="_blank" href="http://en.wikipedia.org/wiki/Standard_Template_Library">C++ STL</a></li>
                    </ul>
                </div>
                <div class="project-external-links">
                    <div>
                        <i class="icon-doc-text"></i><a target="_blank" href="https://db.tt/A4inFlq1">Presentation slides</a>
                    </div>
                    <div>
                        <i class="icon-github"></i><a target="_blank" href="https://github.com/neelabhg/fibonacci-heap-priority-queue">fibonacci-heap-priority-queue on GitHub</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row project">
        <div>
            <h3 class="project-title">Parallel Quicksort implementation</h3>
            <h5 class="project-date">August 2012 &mdash; November 2012</h5>
        </div>
        <div class="row">
            <div class="twelve columns">
                <p class="project-description">
                    A parallel implementation of the Quicksort sorting algorithm in C++
                    using <a target="_blank" href="http://en.wikipedia.org/wiki/OpenMP">OpenMP</a>.
                </p>
                <div class="project-technologies">
                    <i class="icon-code"></i>
                    <ul>
                        <li class="default label"><a target="_blank" href="http://en.wikipedia.org/wiki/C%2B%2B">C++</a></li>
                        <li class="default label"><a target="_blank" href="http://en.wikipedia.org/wiki/OpenMP">OpenMP</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="row project">
        <div>
            <h3 class="project-title">Web Service backend for CliQs</h3>
            <h5 class="project-date">November 2012 &mdash; April 2013</h5>
        </div>
        <div class="row">
            <div class="twelve columns">
                <p class="project-description">
                    Developed the web service backend for CliQs, an iPhone social game,
                    at <a target="_blank" href="https://www.facebook.com/voicle">Voicle, Inc</a>, a student startup in Champaign.
                    CliQs can be downloaded from the App Store <a target="_blank" href="https://itunes.apple.com/us/app/cliqs/id578519653?mt=8">here</a>, but it is no longer developed/supported by Voicle.
                    CliQs was featured in <a target="_blank" href="http://techli.com/2012/12/cliqs-makes-friends-from-facebook-acquaintances/">Techli</a>.
                </p>
                <div class="project-technologies">
                    <i class="icon-code"></i>
                    <ul>
                        <li class="default label"><a target="_blank" href="http://php.net/">PHP</a></li>
                        <li class="default label"><a target="_blank" href="http://www.mysql.com/">MySQL</a></li>
                        <li class="default label"><a target="_blank" href="http://aws.amazon.com/elasticbeanstalk/">AWS Elastic Beanstalk</a></li>
                        <li class="default label"><a target="_blank" href="http://aws.amazon.com/ec2/">Amazon EC2</a></li>
                        <li class="default label"><a target="_blank" href="http://aws.amazon.com/rds/">Amazon RDS</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="row project">
        <div>
            <h3 class="project-title">Assembler for LC-3</h3>
            <h5 class="project-date">March 2012 &mdash; April 2012</h5>
        </div>
        <div class="row">
            <div class="twelve columns">
                <p class="project-description">
                    An assembler for the <a target="_blank" href="http://en.wikipedia.org/wiki/LC-3">Little Computer 3 (LC-3)</a> microarchitecture,
                    written in C using only standard library functions.
                </p>
                <div class="project-technologies">
                    <i class="icon-code"></i>
                    <ul>
                        <li class="default label"><a target="_blank" href="http://en.wikipedia.org/wiki/C_(programming_language)">C</a></li>
                    </ul>
                </div>
                <div class="project-external-links">
                    <div>
                        <i class="icon-github"></i><a target="_blank" href="https://github.com/neelabhg/LC-3_Assembler">LC-3_Assembler on GitHub</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row project">
        <div>
            <h3 class="project-title">SRC290 - Simple RISC Computer for 290</h3>
            <h5 class="project-date">September 2012 &mdash; November 2012</h5>
        </div>
        <div class="row">
            <div class="twelve columns">
                <p class="project-description">
                    A simple Instruction Set Architecture and its Micro Architecture implementation.
                </p>
                <div class="project-technologies">
                    <i class="icon-code"></i>
                    <ul>
                        <li class="default label"><a target="_blank" href="http://en.wikipedia.org/wiki/VHDL">VHDL</a></li>
                        <li class="default label"><a target="_blank" href="http://www.mentor.com/products/fpga/hdl_design/hdl_designer_series/">Mentor Graphics HDL Designer</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include_once $settings["footer"]; ?>
