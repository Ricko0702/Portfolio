<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Portfolio website of software developer Rick van Assen"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/images/favicon.png" type="image/png">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Source+Serif+Pro:400,600&display=swap" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <script src="/js/blade.js"></script>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>




    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer"
    />

    <title> <Rick van Assen> </title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<style>
    .nav-link{
        color: black;
    }
</style>




<body>
<nav class="navbar navbar-expand-lg navbar sticky-top" style="position: fixed; background-color: #d0f3b5; color: black">
    <div class="container-fluid" style="position: fixed">
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvas" aria-controls="offcanvas">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="javascript:void(0);" onclick="scrollToTop()">
            <img src="images/favicon.png" alt="logo" width="30" height="24">
        </a>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0);" onclick="scrollToTop()">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0);" onclick="scrollToAbout()">Over mij</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0);" onclick="scrollToProject()">Projecten</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0);" onclick="scrollToContact()">Contact</a>
                </li>


                <div class="dropdown nav-item" style="background-color: #d0f3b5;">
                    <button class="dropbtn nav-link" style="background-color: #d0f3b5"><i class="bi bi-caret-down-fill"></i> Language</button>
                    <div class="dropdown-content">
                        <a href="/">Nederlands</a>
                        <a href="/en">English</a>

                    </div>
                </div>

            </ul>

        </div>
    </div>




    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvas" aria-labelledby="offcanvasLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasLabel">Menu</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <ul class="nav" id="ennav">
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0);" onclick="scrollToTop()">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0);" onclick="scrollToAbout()">Over mij</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0);" onclick="scrollToProject()">Projecten</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0);" onclick="scrollToContact()">Contact</a>
                </li>


                <div class="dropdown nav-item" style="background-color: white">
                    <button class="dropbtn nav-link" style="background-color: white"><i class="bi bi-caret-down-fill"></i> Language</button>
                    <div class="dropdown-content">
                        <a href="/">Nederlands</a>
                        <a href="/en">English</a>

                    </div>
                </div>

            </ul>

        </div>
    </div>
    <style>

        #ennav{
            width: 140px;
        }

        @media (max-width:500px) {
            #ennav{
                width: 100px;
            }
        }

        .showcase-area {
            height: 50vh;
            background: linear-gradient(
                rgba(240, 240, 240, 0.144),
                rgba(255, 255, 255, 0.336)
            ),
            url("/images/logo.png");
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

    </style>
    </div>
</nav>
<section class="showcase-area" id="showcase">
    <div class="showcase-container" >
    </div>
</section>

<section id="about">
    <div class="about-wrapper container">
        <div class="about-text">
            <p class="small">Over Mij</p>
            <h2>Rick van Assen</h2>
            <ul>
                <li>
                    <strong>leeftijd:</strong> {{ $age }}
                </li>
                <li>
                    <strong>Hobbies:</strong> Programmeren, Gamen, Formule 1, Voetbal, films kijken en uitgaan met vrienden
                </li>
                <li> <strong>Experiences:</strong>  PHP, Laravel, JavaScript, HTML en CSS
                </li>
            </ul>

            Hallo, mijn naam is Rick van Assen, {{ $age }} jaar oud en ik volg nu de opleiding Software developer bij Landstede Zwolle. In mijn vrije tijd programmeer ik graag, speel ik games, kijk ik films en series op Netflix en ga ik graag uit met vrienden.</div>

            <a href="/images/cv van Rick Van Assen.pdf" class="badge badge-pill" download="cv van Rick van Assen">Download mijn CV</a>

        <div class="about-img">
            <img class="img-fluid" src="images/foto.png" alt="picture" style="border: 10px transparent; border-radius: 5%;"/>
        </div>

    </div>
</section>
<section id="project" style="    display: flex; flex-direction: column; align-items: center;">

    <h2>Projects</h2>
    <div class="project-container container" style="display: flex; flex-direction: column; align-items: center;">


        <div>
            <div class="img-container">
                <img class="img-fluid" src="/images/mastermind.png" alt="error" />
                <div class="img-content">
                    <h3>Mastermind</h3>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#MastermindModal">
                        Learn more
                    </button>
                </div>
            </div>
        </div>
        <br>
        <div>
            <div class="img-container">
                <img class="img-fluid" src="/images/finance.png"  alt="error" />
                <div class="img-content" style="color: white">
                    <h3>Finance</h3>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#FinanceModal">
                        Learn more
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="FinanceModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Finance</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Finance was een project waarbij we een soort boekhoudsysteem moesten opzetten. In het project moesten we uitgaven kunnen invoeren, wijzigen en verwijderen (een CRUD-app). Je had ook een categorie nodig. We hebben dit gedaan met Laravel Eloquent. Ik heb dit project samen met een klasgenoot gedaan.</p>
                </div>
                <div class="modal-footer">
                    <span class="badge badge-pill" style="background-color: #787CB5;">PHP</span>
                    <span class="badge badge-pill" style="background-color: #F05340;">Laravel</span>
                    <span class="badge badge-pill" style="background-color: #E56027;">HTML</span>
                    <span class="badge badge-pill" style="background-color: #2965F1;">CSS</span>

                    <a href="https://github.com/Ricko0702/Finance" class="btn btn-primary" target="_blank">
                        <i class="bi bi-github"></i>
                        Github
                    </a>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="MastermindModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Mastermind</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p> Bij deze opdracht was het de bedoeling om het bordspel Mastermind te kopiëren op een website. We hebben PHP sessions gebruikt om ervoor te zorgen dat als je de pagina opnieuw laadt, je het spel niet kwijt bent en als het bord wordt bijgewerkt, het spel kan worden hervat waar je was. Dit was een opdracht samen met een duo. </p>
                </div>
                <div class="modal-footer">
                    <span class="badge badge-pill" style="background-color: #787CB5;">PHP</span>
                    <span class="badge badge-pill" style="background-color: #F05340;">Laravel</span>
                    <span class="badge badge-pill" style="background-color: #E56027;">HTML</span>
                    <span class="badge badge-pill" style="background-color: #2965F1;">CSS</span>

                    <a href="https://github.com/Ricko0702/Mastermind" class="btn btn-primary" target="_blank">
                        <i class="bi bi-github"></i>
                        Github
                    </a>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

                </div>
            </div>
        </div>
    </div>
</section>

<section id="contact">
    <h2 style="text-align: center;font-size: 2.5rem;font-weight: 400;margin-bottom: 40px;text-transform: uppercase;color: #555;">Contact</h2>

    <footer class="footer">

        <div class="container">


            <div class="row mb-5">
                <div class="col-md-4">
                    <div class="site-logo">
                        <a href="javascript:void(0);" onclick="scrollToTop()" style="text-decoration: none"><img src="images/favicon.png" alt="logo" width="30" height="24" style="margin-top: -5px">    Rick.</a>

                    </div>
                </div>
                <div  style="display: flex; justify-content: center">
                    <ul class="list-unstyled social-icons">
                        <li><a href="https://www.instagram.com/rick.0702/" target="_blank" class="in"><span class="icon-instagram"><i class="bi bi-instagram"></i></span></a></li>
                        <li><a href="https://www.linkedin.com/in/rick-van-assen/" target="_blank" class="li"><span class="icon-behance"><i class="bi bi-linkedin"></i></span></a></li>
                        <li><a href="https://github.com/Ricko0702" target="_blank" class="gh"><span class="icon-dribbble"><i class="bi bi-github"></i></span></a></li>
                        <li><a href="mailto:rickva.dev@gmail.com" class="gm"><span class="icon-play"><i class="bi bi-envelope"></i></span></a></li>
                    </ul>
                </div>
            </div>

            <div class="row mb-5">
                <div style="display: flex; justify-content: center">
                    <ul class="nav-links">
                        <li>
                            <a  href="javascript:void(0);" onclick="scrollToTop()">Home</a>
                        </li>
                        <li >
                            <a  href="javascript:void(0);" onclick="scrollToAbout()">Over mij</a>
                        </li>
                        <li >
                            <a  href="javascript:void(0);" onclick="scrollToProject()">Projecten</a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" onclick="scrollToContact()">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col ">
                    <div class="copyright" style="display: flex; justify-content: center">
                        <p><small>Copyright 2022. All Rights Reserved.</small></p>
                    </div>
                </div>
            </div>

        </div>
    </footer>
</section>

</body>

<script>
    $(document).ready(function(){
        // Add smooth scrolling to all links
        $("a").on('click', function(event) {

            // Make sure this.hash has a value before overriding default behavior
            if (this.hash !== "") {
                // Prevent default anchor click behavior
                event.preventDefault();

                // Store hash
                var hash = this.hash;

                // Using jQuery's animate() method to add smooth page scroll
                // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
                $('html, body').animate({
                    scrollTop: $(hash).offset().top
                }, 800, function(){

                    // Add hash (#) to URL when done scrolling (default click behavior)
                    window.location.hash = hash;
                });
            } // End if
        });
    });

    function scrollToTop() {
        window.scrollTo(0, 0);
    }

    function scrollToProject() {
        const id = 'project';
        const yOffset = -70;
        const element = document.getElementById(id);
        const y = element.getBoundingClientRect().top + window.pageYOffset + yOffset;

        window.scrollTo({top: y, behavior: 'smooth'});
    }

    function scrollToContact() {
        const id = 'contact';
        const yOffset = -100;
        const element = document.getElementById(id);
        const y = element.getBoundingClientRect().top + window.pageYOffset + yOffset;

        window.scrollTo({top: y, behavior: 'smooth'});
    }

    function scrollToAbout() {
        const id = 'about';
        const yOffset = -150;
        const element = document.getElementById(id);
        const y = element.getBoundingClientRect().top + window.pageYOffset + yOffset;

        window.scrollTo({top: y, behavior: 'smooth'});
    }
</script>
</html>

