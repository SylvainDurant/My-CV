<!DOCTYPE html>
<html>
    <head>
        <title>CV DURANT Sylvain</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" >
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
        
        <!-- Toastr css -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet" />

        <link rel="stylesheet" href="css/style.css">
    </head>

    <body data-spy="scroll" data-target=".navbar" data-offset="60">

        <nav class="navbar navbar-expand-md navbar-dark sticky-top">
            <a class="navbar-brand" href="#"></a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNavbar">
                <i class="fas fa-bars fa-lg"></i>
            </button>

            <div class="collapse navbar-collapse justify-content-center" id="myNavbar">
                <ul class="nav nav-pills navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="#about">Me</a></li>
                    <li class="nav-item"><a class="nav-link" href="#skills">Skills</a></li>
                    <li class="nav-item"><a class="nav-link" href="#experience">Experience</a></li>
                    <li class="nav-item"><a class="nav-link" href="#education">Education</a></li>
                    <li class="nav-item"><a class="nav-link" href="#portfolio">Portfolio</a></li>
                    <li class="nav-item"><a class="nav-link" href="#quotes">Quotes</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                </ul>
            </div>
        </nav>

        <section id="about" class="container-fluid">
            <div class="col-8 col-lg-4 profile-picture">
                <img src="images/me.jpg" alt="Sylvain" class="rounded-circle">
            </div>
            <div class="heading">
                    <h1>Hello, I'm Sylvain</h1>
                    <h4>Aspiring Junior Web Developer</h4>
                    <a href="docs/CV_Durant_Sylvain.pdf" class="button1">Download CV</a>
            </div>
        </section>

        <section id="skills">
            <div class="container">
                 <div class="blue-divider"></div>
                <div class="heading">
                    <h2>SKILLS</h2>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-12 col-xl-8">
                        <span ID="icon" class="fas fa-code"></span>
                        <div class="skills-block row">
                            <ul class="col-6">
                                <li id="skillsIcon"><i class="fab fa-html5"></i><h4>HTML</h4></li>
                                <li id="skillsIcon"><i class="fab fa-css3-alt"></i><h4>CSS</h4></li>
                                <li id="skillsIcon"><i class="fab fa-bootstrap"></i><h4>Bootstrap</h4></li>
                                <li id="skillsIcon"><i class="fab fa-sass"></i><h4>Sass</h4></li>
                            </ul>
                            <ul class="col-6">
                                <li id="skillsIcon"><i class="fab fa-js-square"></i><h4>Javascript</h4></li>
                                <li id="skillsIcon"><i class="fab fa-php"></i><h4>PHP</h4></li>
                                <li id="skillsIcon"><i class="fab fa-node"></i><h4>Node.js</h4></li>
                                <li id="skillsIcon"><i class="fab fa-angular"></i><h4>Angular</h4></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-12 col-xl-8 row">
                        <div class="col-md-12 col-xl-6">
                            <span ID="icon" class="fas fa-user-tag"></span>
                            <div class="skills-block">
                                <ul>
                                    <li id="skillsIcon"><i class="fas fa-briefcase"></i><h4>Responsible</h4></li>
                                    <li id="skillsIcon"><i class="fas fa-thumbs-up"></i><h4>Enthusiastic</h4></li>
                                    <li id="skillsIcon"><i class="fas fa-cogs"></i><h4>Resourceful</h4></li>
                                    <li id="skillsIcon"><i class="fas fa-laugh-wink"></i><h4>Social</h4></li>
                                    <li id="skillsIcon"><i class="fas fa-puzzle-piece"></i></i><h4>logical sense</h4></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-12 col-xl-6">
                            <span ID="icon" class="fas fa-headphones"></span>
                            <div class="skills-block">
                                <ul>
                                    <li id="skillsIcon"><i class="fas fa-music"></i><h4>Solfege</h4></li>
                                    <li id="skillsIcon"><i class="fas fa-ruler-horizontal"></i><h4>Piano</h4></li>
                                    <li id="skillsIcon"><i class="fas fa-volume-up"></i><h4>Bass</h4></li>
                                    <li id="skillsIcon"><i class="fas fa-drum"></i><h4>Drums</h4></li>
                                    <li id="skillsIcon"><i class="fas fa-microphone"></i><h4>Sound Engineer</h4></li>
                                </ul>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    
        <section id="experience">
            <div class="container">
                <div class="white-divider"></div>
                <div class="heading">
                    <h2>Professional Experience</h2>
                </div>
                <ul class="timeline">
                    <li>
                        <div class="timeline-badge"><span class="fas fa-briefcase"></span></div>
                        <div class="timeline-panel-container">
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h3>Somewhere</h3>
                                    <h4>Junior Web Developer</h4>
                                    <p class="text-muted"><small class="fas fa-clock"></small> 2021-futur</p>
                                </div>
                                <div class="timeline-body">
                                    <p>Having fun in my new job</p>
                                    <p>Yes! I'm from the futur.</p>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-badge"><span class="fas fa-briefcase"></span></div>
                        <div class="timeline-panel-container-inverted">
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h3>Becode</h3>
                                    <h4>Student</h4>
                                    <p class="text-muted"><small class="fas fa-clock"></small> 2020-2021</p>
                                </div>
                                <div class="timeline-body">
                                    <p>HTML, CSS, Javascript, PHP,...</p>
                                    <p>Motivated member of the team!</p>
                                </div>
                            </div>
                        </div>
                    </li>    
                    <li>
                        <div class="timeline-badge"><span class="fas fa-briefcase"></span></div>
                        <div class="timeline-panel-container">
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h3>Night&Day</h3>
                                    <h4>Night Manager</h4>
                                    <p class="text-muted"><small class="fas fa-clock"></small> 2019-2020</p>
                                </div>
                                <div class="timeline-body">
                                    <p>Cashier</p>
                                    <p>Manage the shop's stock</p>
                                    <p>Delight the customer</p>
                                    <p>...</p>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-badge"><span class="fas fa-briefcase"></span></div>
                        <div class="timeline-panel-container-inverted">
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h3>BX1, RTBF</h3>
                                    <h4>Sound Engineer</h4>
                                    <p class="text-muted"><small class="fas fa-clock"></small> 2016-2019</p>
                                </div>
                                <div class="timeline-body">
                                    <p>Edit and mix videos for the news</p>
                                    <p>Mixing live radio broadcasts</p>
                                </div>
                            </div>
                        </div>
                    </li>            
                </ul>
            </div>    
        </section>
          
        <section id="education">
            <div class="container">
                <div class="blue-divider"></div>
                <div class="heading">
                    <h2>Education</h2>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="education-block">
                            <h5>2012 - 2016</h5>
                            <span class="fas fa-graduation-cap"></span>
                            <h3>HELB Ilya Prigogine</h3>
                            <h5>Brussels (Belgium)</h5>
                            <h4>Bachelor in sound engineering</h4>
                            <div class="blue-divider"></div>
                            <p>Recording, mixing & mastering</p>
                            <p>audiovisual media</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                         <div class="education-block">
                            <h5>2010 - 2012</h5>
                            <span class="fas fa-graduation-cap"></span>
                            <h3>IATA</h3>
                            <h5>Namur (Belgium)</h5>
                            <h4>CESS - Audiovisual technics</h4>
                            <div class="blue-divider"></div>
                            <p>Production & post-production</p>
                            <p>cinematography</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="education-block">
                           <h5>2008 - 2010</h5>
                           <span class="fas fa-graduation-cap"></span>
                           <h3>Bernard's High School</h3>
                           <h5>Bernardsville (New Jersey, USA)</h5>
                           <h4>Sophomore & Junior</h4>
                           <div class="blue-divider"></div>
                           <p>Learning English</p>
                       </div>
                    </div>
                    <div class="col-md-6">
                        <div class="education-block">
                            <h5>2006 - 2008</h5>
                            <span class="fas fa-graduation-cap"></span>
                           <h3>Ecole Polytechnique Huy1</h3>
                           <h5>Huy (Belgium)</h5>
                            <h4>Electronics & Informatics</h4>
                            <div class="blue-divider"></div>
                            <p>Discovering codes for the first time</p>
                        </div>
                    </div>
                </div>
            </div>        
        </section>
        
        <section id="portfolio">
            <div class="container">
                <div class="white-divider"></div>
                <div class="heading">
                    <h2>Portfolio</h2>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <a class="portfolioContainer" href="http://moosic.great-site.net/" target="_blank">
                            <img class="img-thumbnail" src="images/Moosic.jpg" alt="Moosic">
                            <div class="iconsContainer text-center animated">
                                <div>
                                    <img src="images/js.png" alt="Javascript">
                                    <img src="images/php.png" alt="Php">
                                </div>
                                <img class="m-0" src="images/sql.png" alt="Sql">
                                <div class="portfolioLinksContainer">
                                    <div class="portfolioLinks">
                                        <i class="fab fa-github fa-3x portfolioLink" onclick="redirect('github.com/SylvainDurant/Moosic')"></i>
                                        <i class="fas fa-globe fa-3x portfolioLink"></i>
                                    </div>
                                </div>
                            </div>
                            <h4 class="portfolioText">Moosic</h4>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a class="portfolioContainer" href="https://shared-schedule-app.herokuapp.com/" target="_blank">
                            <img class="img-thumbnail" src="images/SharedScheduleApp.jpg" alt="SharedScheduleApp">
                            <div class="iconsContainer text-center animated">    
                                <img src="images/angular.png" alt="Angular">
                                <div class="portfolioLinksContainer">
                                    <div class="portfolioLinks">
                                        <i class="fab fa-github fa-3x portfolioLink" onclick="redirect('github.com/SylvainDurant/SharedScheduleApp')"></i>
                                        <i class="fas fa-globe fa-3x portfolioLink"></i>
                                    </div>
                                </div>
                            </div>
                            <h4 class="portfolioText">SharedScheduleApp</h4>
                        </a>
                    </div>
                     <div class="col-md-4">
                        <a class="portfolioContainer" href="https://hisotrium21.herokuapp.com/" target="_blank">
                            <img class="img-thumbnail" src="images/Locus.jpg" alt="Locus">
                            <div class="iconsContainer text-center animated">    
                                <div>
                                    <img src="images/js.png" alt="Javascript">
                                    <img src="images/node.png" alt="Node">
                                </div>
                                <img class="m-0 imgBackground" src="images/mongo.png" alt="Mongo Db">
                                <div class="portfolioLinksContainer">
                                    <div class="portfolioLinks">
                                        <p id="nopeText" class="m-1 nopeText" hidden>Private Repository</p>
                                        <i class="fab fa-github fa-3x nope"></i>
                                        <i class="fas fa-globe fa-3x portfolioLink"></i>
                                    </div>
                                </div>
                            </div>
                            <h4 class="portfolioText">Locus</h4>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        
        <section id="quotes">
            <div class="container">
                <div class="red-divider"></div>
                <div class="heading">
                    <h2>Quotes</h2>
                </div>
                <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
                    <ol class="carousel-indicators">
                         <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                         <li data-target="#myCarousel" data-slide-to="1"></li>
                         <li data-target="#myCarousel" data-slide-to="2"></li>  
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <h3>"Now I can see the <span class="wtf">codes</span> looming out of the dark, like arrows in the sky. I can't believe my eyes but it's true..."</h3>
                            <h4>Gojira</h4>       
                        </div>
                          <div class="carousel-item">
                            <h3>"01001001 00100111 01101101 00100000 01100111 01101100 01100001 01100100 00100000 01111001 01101111 01110101 00100000 01100011 01101111 01101110 01110110 01100101 01110010 01110100 01100101 01100100 00100000 01101101 01100101 00100000 01101001 01101110 01110100 01101111 00100000 01110100 01100101 01111000 01110100"</h3>
                            <h4>A binary friend</h4>       
                        </div>
                          <div class="carousel-item">
                            <h3>"This sentence is false."</h3>
                            <h4>Just verifying you're not an AI</h4>       
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#myCarousel" data-slide="prev" role="button">
                        <span class="fas fa-chevron-left fa-2x"></span>
                    </a>
                    <a class="carousel-control-next" href="#myCarousel" data-slide="next" role="button">
                        <span class="fas fa-chevron-right fa-2x"></span>
                    </a>
                </div>
            </div>
        </section>

        <footer id="contact" class="text-center">
            <div class="container">
                <div class="blue-divider"></div>
                <div class="heading">
                    <h2>Contact</h2>
                </div>

                <form action="php/email.php" method="POST">
                    <div class="form row">
                        <div class="form-group col-md-6">
                            <label class="label" for="email" for="exampleFormControlInput1">Email</label>
                            <input id="emailEmail" name="email" type="email" class="form-control" id="adress" placeholder="email@example.com" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="label" for="name" for="exampleFormControlInput2">Name</label>
                            <input id="emailName" name="name" class="form-control" type="text" id="name" placeholder="enter your name" required>
                        </div>
                    </div>
                        <div class="form-group">
                            <label class="label" for="message" for="exampleFormControlTextarea1">Your message</label>
                            <textarea class="form-control" name="message" id="message" rows="3">Hello Sylvain, I am contacting you regarding </textarea>
                        </div>
                        <button id="send" name="contactForm" type="submit" class=" mail btn btn-lg">Send</button>                   
                </form>
            </div>

            <a href="#about">
                <span class="fas fa-chevron-up"></span>
            </a>
            <h5>© 2020 APPRENDRE-A-CODER.COM</h5>
        </footer>



        <!-- Toastr js -->
        <script src="http://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
        <script src="js/script.js"></script>
        <script>
            let success_message = "<?php echo $message; ?>";
            if (success_message != '') {
                toastr.info(success_message, "Thank you!",{iconClass:"toast-custom"});
                resetForm('contactForm');
            }
        </script>
    </body>
</html> 