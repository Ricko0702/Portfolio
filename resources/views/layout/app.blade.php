<!doctype html>
<html lang="nl">
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <script src="/js/blade.js"></script>




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
<nav class="navbar navbar-expand-lg" style="position: fixed; background-color: #d0f3b5; color: black">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
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

            </ul>

        </div>
    </div>
</nav>
<section class="showcase-area" id="showcase">
    <div class="showcase-container">
    </div>
</section>

<section id="about">
    <div class="about-wrapper container">
        <div class="about-text">
            <p class="small">Over mij</p>
            <h2>Rick van Assen</h2>
            <ul>
                <li>
                    <strong>Leeftijd:</strong> {{ $age }}
                </li>
                <li>
                    <strong>Hobbies:</strong> Programeren, Gamen, Formule 1, Voetbal, films kijken en uitgaan met vrienden
                </li>
                <li> <strong>Ervaringen:</strong>  PHP, Laravel, JavaScript, HTML en CSS
                </li>
            </ul>

            Hallo ik ben Rick van Assen, {{ $age }} jaar en ik volg nu de opleiding Software developer op Landstede Zwolle. In mijn vrije tijd programmeer ik, speel ik games en kijk ik films en series op Netflix en ga ik graag uit met vrienden.

        </div>
        <div class="about-img">
            <img class="img-fluid" src="images/foto.png" alt="picture" style="border: 10px transparent; border-radius: 5%;"/>
        </div>
    </div>
</section>
<section id="project" style="    display: flex; flex-direction: column; align-items: center;">

    <h2>Projecten</h2>
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
                    <p>Finance was een project waar we een soort van boekhoudsysteem moesten maken. In het project moesten we moesten uitgaven kunnen invoeren, aanpassen en verwijderen. Verder moest je een categorie. Dit hebben we gedaan met behulp van Laravel Eloquent. Dit project deed ik samen met een klasgenoot.</p>

                </div>
                <div class="modal-footer">
                    <span class="badge badge-pill" style="background-color: #787CB5;">php</span>
                    <span class="badge badge-pill" style="background-color: #F05340;">Laravel</span>

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
                    <p>..</p>

                </div>
                <div class="modal-footer">
                    <span class="badge badge-pill" style="background-color: #787CB5;">php</span>
                    <span class="badge badge-pill" style="background-color: #F05340;">Laravel</span>

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
    <div class="contact-container container">
        <div class="contact-img">
            <img src="https://i.postimg.cc/1XvYM67V/restraunt2.jpg" alt="" />
        </div>
        @if(Session::has('success'))
            <div class="alert alert-success">
                {{Session::get('success')}}
            </div>
        @endif
        <form class="form-container" method="POST" action="{{ route('contact.us.store') }}" id="contactUSForm">
            {{ csrf_field() }}
        <div class="form-container">
            <h2>Contact Us</h2>
            <input type="text" name="name" class="form-control" placeholder="Your Name" value="{{ old('name') }}">
            @if ($errors->has('name'))
                <span class="text-danger">{{ $errors->first('name') }}</span>
            @endif
            <input type="text" name="email" class="form-control" placeholder="E-mail" value="{{ old('email') }}">
            @if ($errors->has('email'))
                <span class="text-danger">{{ $errors->first('email') }}</span>
            @endif
            <textarea
                cols="30"
                rows="6"
                placeholder="Type Your Message"


            >{{ old('message') }}</textarea>
            @if ($errors->has('message'))
                <span class="text-danger">{{ $errors->first('message') }}</span>
            @endif
            <a href="#" class="btn btn-primary">Submit</a>
        </div>
        </form>
    </div>
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
</script>
</html>
