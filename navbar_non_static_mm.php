<nav class="navbar navbar-default" id="custom_nav">
    <div class="container-fluid custom_nav_content">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand edit_brand" href="#"><img class="brand_img" src="img/logos/navbar_brand.png" ></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" style="border-color:#ff9933; ">
            <ul class="nav navbar-nav">
                <li class="<?php if($page == 'index'){ echo 'active';} ?>"><a href="index.php">Home</a></li>
				
                <li class="<?php if($page == 'timeline'){ echo 'active'; } ?>"><a href="timeline.php">Timeline</a></li>
				
                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Participants <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="submissions.php">Submission</a></li>
                        <li><a href="registration.php">Registration</a></li>
                        <li><a href="visa_application.php">Visa Application</a></li>
                    </ul>
                </li>
				
                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Programs<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <!--<li><a href="bi_2018_program.pdf">Programs </a></li>-->
                        <li><a href="speakers.php">Keynote Speakers</a></li>
                        <li><a href="workshops_sessions.php">Workshops / Special Sessions</a></li>
                        <!--<li><a href="https://link.springer.com/book/10.1007/978-3-030-05587-5">BI 2020</a></li>-->
                    </ul>
                </li>
				
                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Calls<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="call_for_papers.php">Call for Papers</a></li>
                        <li><a href="call_for_special.php">Call for Special Session</a></li>
                        <li><a href="tracks_topics.php">Tracks Topics</a></li>
                        <li><a href="paper_publications.php">Paper Publications</a></li>
                    </ul>
                </li>
				
                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Committee<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="organizing_committee.php">Organizing Committee</a></li>
                        <li><a href="program_committee.php">Program Committee</a></li>
                    </ul>
                </li>
				
                <li class="<?php if($page == 'sponsors'){ echo 'active'; } ?>"><a href="sponsors.php">Sponsors</a></li>
				
                <li class="<?php if($page == 'contact_us'){ echo 'active'; } ?>"><a href="contact_us.php">Contact</a></li>
				
                <li class="dropdown <?php if($page == 'about_padova' || $page == 'history' || $page == 'getting_around_padova' || $page == 'accommodation' || $page == 'venue'){ echo 'active'; } ?>"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Local Info<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li class="<?php if($page == 'about_padova'){ echo 'active'; } ?>"><a href="about_padova.php">About Padova</a></li>
                        <li class="<?php if($page == 'history'){ echo 'active'; } ?>"><a href="history.php">History</a></li>
                        <li class="<?php if($page == 'getting_around_padova'){ echo 'active'; } ?>"><a href="getting_around_padova.php">Getting Around Padova</a></li>
                        <li class="<?php if($page == 'accommodation'){ echo 'active'; } ?>"><a href="accommodation.php">Accommodation</a></li>
                        <li class="<?php if($page == 'venue'){ echo 'active'; } ?>"><a href="venue.php">Venue</a></li>
                    </ul>
                </li>

            </ul>
        </div><!-- /.navbar-collapse -->
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <img src="img/logos/banner.png" alt="BI2020">
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div id="counter_block">
                <p class="text-center" id="demo_counter"></p>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</nav>
