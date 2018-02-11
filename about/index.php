<?php 
    // Set page variables
    
    $pageTitle = "About"; // Variable to append the page title "Primed Minds" with " - <pageTitle>"
    // $addHeadCode = '<style type="text/css"> body { background-color: #000; } </style>'; // Variable to add any additional code to the head for the page

    // Include the document start and standard page header
    include $_SERVER['DOCUMENT_ROOT'].'/php-inc/doc-start-basic.php';
    include $_SERVER['DOCUMENT_ROOT'].'/php-inc/page-header.php';
?>

<!-- START: page content -->

<div id="main">
    <!-- <div class="canvas"> -->
        <div class="row canvas">
            <div class="col-4"> <!-- Side page menu -->

                <?php 
                    /* For the "content" below please ensure that in the content you include \\\" for any double quotes and no ' are included in the text */
                    /*
                    $menu_content = ' [ {   "title" : "What is Primed Minds?" ,  "content" : "<p>Primed Minds is a tool to inspire you mathematically!</p>\n<p>Showcasing the joy and beauty inherent in mathematics, our Explorations, unlike traditional presentations, are a wild affair that impart the thrill of discovery by alternately entertaining and actively engaging. </p>\n<p>Each <a href=\\\"\\\/explore/index.php\\\">Exploration</a> consists of a sequence of short entertaining videos (30-90 second), and interactive content that immerse you in the experience of being a real mathematician! You&#39ll experience how a dead-end alley becomes an A-ha moment. You&#39ll smell the mathematical flowers that blossom around intractable unsolved mysteries. And you might even learn a little math along the way. </p>" }
                                      , {   "title" : "Who is this for?" , "content" : "<p>Primed Minds is aimed squarely at middle and high school students, though many of the Explorations are actually accessible to grade-schoolers. This is not your standard curriculum. Primed Minds is designed to inspire interest, rather than educate on specifics. </p>\n<p>While familiarity with some very basic concepts is sometimes assumed, even in those cases interest is often piqued well before formal understanding sinks in. </p>\n<p>Anyone curious to explore the magical land of the mind will enjoy our Explorations. Mathematics is, afterall, the one thing we can be sure that aliens too will appreciate. </p>" }
                                      , {   "title" : "Philosophy" , "content" : "<p>Before taking your retinue to a new territory, you launch an exploration. You get a taste and decide whether heading out even makes sense. </p>\n<p>Unfortunately, unlike language arts where we inspire children with great works of fiction before miring them in the drudgery of spelling and grammar, mathematics is traditionally taught by adhering to a didactic approach of presentational lessons followed by drills.</p>\n<p>The thing is, we make the most effort and learn best when we&#39re excited.</p>\n<p>With this thinking in mind, the Explorations on Primed Minds are designed to inspire rather than teach. It&#39s a radical idea!</p>\n<p>The first time we encounter new ideas, they are fuzzy, and that&#39s okay! Nobody understands all the themes and motifs in Winnie the Pooh the first time they read it (or more likely, are read it), the book simply becomes richer with each pass. So it is with mathematics and it&#39s time it was presented with this in mind.</p>\n<p>Finally, the pedagogical reasoning behind the structure of Primed Minds&#39 Explorations is simple. Short, light and quickly paced videos inject energy, context and excitement, while interactive puzzles foster engagement and help solidify concepts. The interactive portions also give very natural breathing room, permitting students to adjust the pace of their progress to their understanding (something that videos alone struggle with).</p>" }   
                                      , {   "title" : "What is mathematics anyway?" , "content" : "<p>Mathematics is to think deeply about simple things.</p>\n<p>And doing so is <b>fun<\\\/b>!!</p>\n<p>Mathematics is about exploring ideas that present themselves as puzzles, intriguing patterns, connections and sheer beauty.</p>" }  
                                      , {   "title" : "How do I try an Exploration?" , "content" : "<p>There&#39s been enough talk, just <a href=\\\"/explorations.html\\\">pick one<\\\/a> and dive in!</p>" }   
                                      , {   "title" : "Are there any teacher resources?" , "content" : "<p>Yes! We have lesson plans to accompany Exlporations that expand and relate materials to standard curriculum. Check our <a href=\\\"/resources.html\\\">Resources Page<\\\/a> for more information</p>" }                                                                       
                                    ] '; 

                    */
                    /* this has not yet been finalised due to issues parsing the html in the json, on hold to speed design and dev of remaining site
                    
                    include $_SERVER['DOCUMENT_ROOT'].'/php-inc/asset-sidemenu.php'; 
                    
                    */
                ?>

                <div id="accordion" role="tablist">
                    <div class="card">
                        <div class="card-header" role="tab" id="headingOne">
                            <h5 class="mb-0">
                                <a data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                What is Primed Minds?
                                </a>
                            </h5>
                        </div>
                        <div id="collapseOne" class="collapse" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
                            <div class="card-body">
                                <p>Primed Minds is a tool to inspire you mathematically!</p>
                                <p>Showcasing the joy and beauty inherent in mathematics, our Explorations, unlike traditional presentations, are a wild affair that impart the thrill of discovery by alternately entertaining and actively engaging. </p>
                                <p>Each <a href="/explore/index.php">Exploration</a> consists of a sequence of short entertaining videos (30-90 second), and interactive content that immerse you in the experience of being a real mathematician! You'll experience how a dead-end alley becomes an A-ha moment. You'll smell the mathematical flowers that blossom around intractable unsolved mysteries. And you might even learn a little math along the way. </p>
                            </div>
                        </div>    
                    </div>
                    <div class="card">
                        <div class="card-header" role="tab" id="headingTwo">
                            <h5 class="mb-0">
                                <a class="collapsed" data-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Who is this for?
                                </a>
                            </h5>
                        </div>
                        <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion">
                            <div class="card-body"> 
                                <p>Primed Minds is aimed squarely at middle and high school students, though many of the Explorations are actually accessible to grade-schoolers. This is not your standard curriculum. Primed Minds is designed to inspire interest, rather than educate on specifics. </p>
                                <p>While familiarity with some very basic concepts is sometimes assumed, even in those cases interest is often piqued well before formal understanding sinks in. </p>
                                <p>Anyone curious to explore the magical land of the mind will enjoy our Explorations. Mathematics is, afterall, the one thing we can be sure that aliens too will appreciate. </p>
                            </div>
                        </div>    
                    </div>
                    <div class="card">
                        <div class="card-header" role="tab" id="headingThree">
                            <h5 class="mb-0">
                                <a class="collapsed" data-toggle="collapse" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Philosophy
                                </a>
                            </h5>
                        </div>
                        <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion">
                            <div class="card-body">
                                <p>Before taking your retinue to a new territory, you launch an exploration. You get a taste and decide whether heading out even makes sense. </p>
                                <p>Unfortunately, unlike language arts where we inspire children with great works of fiction before miring them in the drudgery of spelling and grammar, mathematics is traditionally taught by adhering to a didactic approach of presentational
                                    lessons followed by drills.</p>
                                <p>The thing is, we make the most effort and learn best when we're excited.</p>
                                <p>With this thinking in mind, the Explorations on Primed Minds are designed to inspire rather than teach. It's a radical idea!</p>
                                <p>The first time we encounter new ideas, they are fuzzy, and that's okay! Nobody understands all the themes and motifs in Winnie the Pooh the first time they read it (or more likely, are read it), the book simply becomes richer with
                                    each pass. So it is with mathematics and it's time it was presented with this in mind.</p>
                                <p>Finally, the pedagogical reasoning behind the structure of Primed Minds' Explorations is simple. Short, light and quickly paced videos inject energy, context and excitement, while interactive puzzles foster engagement and help solidify
                                    concepts. The interactive portions also give very natural breathing room, permitting students to adjust the pace of their progress to their understanding (something that videos alone struggle with).</p>
                            </div>
                        </div>    
                    </div>
                    <div class="card">
                        <div class="card-header" role="tab" id="headingFour">
                            <h5 class="mb-0">
                                <a class="collapsed" data-toggle="collapse" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                What is mathematics anyway?
                                </a>
                            </h5>
                        </div>
                        <div id="collapseFour" class="collapse" role="tabpanel" aria-labelledby="headingFour" data-parent="#accordion">
                            <div class="card-body">
                                <p>Mathematics is to think deeply about simple things.</p>
                                <p>And doing so is <b>fun</b>!!</p>
                                <p>Mathematics is about exploring ideas that present themselves as puzzles, intriguing patterns, connections and sheer beauty.</p>
                            </div>
                        </div>    
                    </div>
                    <div class="card">
                        <div class="card-header" role="tab" id="headingFive">
                            <h5 class="mb-0">
                                <a class="collapsed" data-toggle="collapse" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                How do I try an Exploration?
                                </a>
                            </h5>
                        </div>
                        <div id="collapseFive" class="collapse" role="tabpanel" aria-labelledby="headingFive" data-parent="#accordion">
                            <div class="card-body">
                                <p>There's been enough talk, just <a href="/explorations.html">pick one</a> and dive in!</p>                      </div>
                            </div>    
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" role="tab" id="headingSix">
                            <h5 class="mb-0">
                                <a class="collapsed" data-toggle="collapse" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                Are there any teacher resources?
                                </a>
                            </h5>
                        </div>
                        <div id="collapseSix" class="collapse" role="tabpanel" aria-labelledby="headingSix" data-parent="#accordion">
                            <div class="card-body">
                                <p>Yes! We have lesson plans to accompany Exlporations that expand and relate materials to standard curriculum. Check our <a href="/resources.html">Resources Page</a> for more information</p>
                            </div>    
                        </div>
                    </div>
                </div>

            <div class="col-8"> <!-- Start slideshow column -->
                <?php
                    
                    $slide_images = ' [ { "src" : "/media/slideshow/about/AboutSlideShow1.png" , "alt" : "" } ,
                                        { "src" : "/media/slideshow/about/AboutSlideShow2.png" , "alt" : "" } , 
                                        { "src" : "/media/slideshow/about/AboutSlideShow3.png" , "alt" : "" } ,
                                        { "src" : "/media/slideshow/about/AboutSlideShow4.png" , "alt" : "" } ,
                                        { "src" : "/media/slideshow/about/AboutSlideShow5.png" , "alt" : "" } ,
                                        { "src" : "/media/slideshow/about/AboutSlideShow6.png" , "alt" : "" } ,
                                        { "src" : "/media/slideshow/about/AboutSlideShow7.png" , "alt" : "" } ,
                                        { "src" : "/media/slideshow/about/AboutSlideShow8.png" , "alt" : "" } ,
                                        { "src" : "/media/slideshow/about/AboutSlideShow9.png" , "alt" : "" } ,
                                        { "src" : "/media/slideshow/about/AboutSlideShow10.png" , "alt" : "" } ,
                                        { "src" : "/media/slideshow/about/AboutSlideShow11.png" , "alt" : "" } ,
                                        { "src" : "/media/slideshow/about/AboutSlideShow12.png" , "alt" : "" } ,
                                        { "src" : "/media/slideshow/about/AboutSlideShow13.png" , "alt" : "" } ,
                                        { "src" : "/media/slideshow/about/AboutSlideShow14.png" , "alt" : "" } ,
                                        { "src" : "/media/slideshow/about/AboutSlideShow15.png" , "alt" : "" } ] ';

                    include $_SERVER['DOCUMENT_ROOT'].'/php-inc/asset-slideshow.php';   
                ?>                     
            </div> <!-- End slideshow column -->

        </div>

        <div class="row canvas">
            <div class="col-4 text-center">
                <a data-toggle="collapse" href="#bio01" aria-expanded="false" aria-controls="bio01">
                    <img class="rounded-circle" src="/assets/about/RufusWilliams.jpg" height="140px">
                </a>    
            </div>
            <div class="col-4" align="center">
                <a data-toggle="collapse" href="#bio02" aria-expanded="false" aria-controls="bio02">
                    <img class="rounded-circle" src="/assets/about/VShubin.jpg" height="140px">
                </a>
            </div>
            <div class="col-4">
                <a data-toggle="collapse" href="#bio02" aria-expanded="false" aria-controls="bio02">
                    <img class="rounded-circle" src="/assets/about/RobPollack.jpg" height="140px">
                </a>
            </div>
        </div>   
        <div class="row canvas">
            <div class="col-12">
                <div class="collapse" id="bio01">
                    <div class="card card-block">
                        <h3>Rufus Williams:</h3>
                        <p>Rufus grew up mostly in Australia, but left on a Commonwealth scholarship to Oxford where he got a masters in pure math. He subsequently moved to the US to complete a PhD in number theory at Harvard. From there, he took the unusual
                            turn to write and direct an award winning feature film. Now, with two kids, he has been drawn back to how math is taught. He's not so focused on molding new mathematicians as he is sharing more broadly the joy that this subject
                            can bring!
                        </p>                   
                    </div>
                </div>
                <div class="collapse" id="bio02">
                    <div class="card card-block">
                        <h3>Vita Shubin, CTO:</h3>
                        <p>Vita grew up in Seattle, Washington before moving to Los Angeles, CA to study Computer Science at the University of Southern California. She's previously worked with iD Technology Camps as a summer instructor, as well as interned at Google as a software engineer in Seattle and Munich, Germany! She's excited to be a part of creating a site that can change kids' perspectives on mathematics.</p>
                    </div>
                </div>
                <div class="collapse" id="bio03">
                    <div class="card card-block">
                        <h3>Rob Pollack, Content Advisor:</h3>
                        <p>Professor at BU, PhD from Harvard. Has kids. Has taught students from the cradle to the grave (well, not literally the grave, but everything through to graduate students), including the most popular math core class on the Harvard campus.</p>                           
                    </div>
                </div>
            </div>
        </div>    
        
        <div class="row canvas">
            <div class="col-4">
                <a data-toggle="collapse" href="#partner01" aria-expanded="false" aria-controls="partner01">
                    <img src="/assets/about/gmp_uplifting.jpg" title="Global Math Project">
                </a>    
            </div>
            <div class="col-4">
                <a data-toggle="collapse" href="#partner02" aria-expanded="false" aria-controls="partner02">
                    <img src="/assets/about/mathspathway.jpg" title="Maths Pathway">
                </a>
            </div>
            <div class="col-4">
                <a data-toggle="collapse" href="#partner03" aria-expanded="false" aria-controls="partner03">
                    <img src="/assets/about/betterexplained.jpg" title="Better Explained">
                </a>
            </div>
        </div>   
        <div class="row">
            <div class="col-12">
                <div class="collapse" id="partner01">
                    <div class="card card-block">
                        <h3>Global Math Project</h3>
                        <p>GMP's James Tanton, the driving force behind Global Math Week, is an enthusiastic connector of dots for Primed Minds.</p>                 
                    </div>
                </div>
                <div class="collapse" id="partner02">
                    <div class="card card-block">
                        <<h3>Maths Pathway</h3>
                        <p>An Australian Online learning company that believes in individualized learning. Trialling Primed Minds in over 100 schools throughout Australia.</p>                    
                    </div>
                </div>
                <div class="collapse" id="partner03">
                    <div class="card card-block">
                        <h3>Betterexplained.com</h3>
                        <p>Kalid, the mastermind behind BetterExplained.com has exquisite mathematical taste and helps advise on content.</p>                   
                    </div>
                </div>
            </div>
        </div>  
    <!-- </div> -->
</div>    

        <!-- contact us button ***REMOVED AS MAY BE ON FOOTER, NEED TO DOUBLE CHECK ******
        <div id="contact">
            <a id="contactbutton" href="contact.html">Contact Us</a>
        </div>
    </div>
    -->

<!-- END: page content -->

<?php
    // include the document end to close body and html
    include $_SERVER['DOCUMENT_ROOT'].'/php-inc/page-footer.php';
    require $_SERVER['DOCUMENT_ROOT'].'/php-inc/doc-end.php';
?>   