<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Pannellum Test with Laravel and Blade</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/pannellum@2.5.6/build/pannellum.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pannellum@2.5.6/build/pannellum.css">
        <link rel="stylesheet" href="css/styles.css">
        <link rel="stylesheet" href="css/modal.css">
    </head>
    <body class="antialiased">
        <header>
            <div class="logo">
                <img src='{{ URL::asset("../images/header-logo.svg") }}' />
            </div>
            <nav>
              <ul>
                <li><a href="#">Lobby</a></li>
                <li><a href="#">Agenda</a></li>
                <li><a href="#">Speakers</a></li>
                <li><a href="#">Sponsor Hall</a></li>
                <li><a href="#">Resourses</a></li>
                <li><a href="#">Accreditation</a></li>
                <li><a href="#">Lightning Talks</a></li>
            </ul>
        </nav>
    </header>
    <div id="panorama"></div>
    <article id="modal-background" class="modal">
        <div class="container">
            <header>
                <h2>Welcome</h2>
                <span id="hide-modal">X</span>
            </header>
            <main>
                <section>
                    <img src="images/screenshot.png" alt="video screenshot" />
                </section>
                <section class="info">
                    <p>
                        Welcome to the event. This is a 360 view and you can scroll to
                        your left and right to navigate the different rooms. Collect our
                        Feeding Matters icons through the site, and engage with our
                        sponsors to earn points that will enter you into a raffle to win a
                    $250 Visa gift card or free registration to our 2023 conference.
                  </p>
                </section>
                <hr />
                <section class="note">
                    <p>
                        <span>Note:</span> If you are viewing this event on a mobile, we
                        recommend landscape mode.
                    </p>
                </section>
            </main>
        </div>
    </article>
    <script src="/js/app.js"></script>
</body>
</html>
