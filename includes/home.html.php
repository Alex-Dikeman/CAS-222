<!DOCTYPE html>

<html>
    <head>
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <title>Ace in the Hole Multisport</title>
        <link href='styles/styles.css' rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=PT+Serif&display=swap" rel="stylesheet"> 
        <script src="scripts/jquery-3.5.1.min.js"></script>
		<script src="scripts/scripts.js"></script>
    </head>
    <body>
        <div id="fb-root"></div>
        <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v7.0"></script>
        <header>
            <a href=""><img id="headerLogo" src="images/AITH_logo.png"></a>
            <?php include 'includes/nav.html.php' ?>
        </header>
        
        <div class="flex-container">
            <main id="main">
                <h3>Welcome to Ace in the Hole Multisport Events!</h3>
   
                <p> 
                    The Annual Ace in the Hole Multisport Weekend is a legendary event in the Oregon triathlon and running community. It has become a traditional destination race for athletes from across the nation.

                    There is something for every level of athletic ability. The weekend includes a first timer triathlon, a sprint, Olympic, and Half-Iron triathlons and 10K and Half marathon runs. Come to experience your first race or come to compete to win, but make sure you come to have fun!
                </p>
                <h3>What to Bring</h3>
                <p>Watch the weather closely. The show goes on no matter what the weather is doing.

                    <br>You must wear your chip timing piece during the entire event. You will be given a band that will hold your chip timing piece around your ankle throughout the entire event. Be sure that it is snapped tightly. Be sure to have your Chip Timing piece on before you start the race and be sure to step over the timing mats after each segment of the race. If you are wearing a wet-suit, make sure the timing piece goes under your wetsuit otherwise, you will have a very difficult time getting off your wet suit.

                    <br><h3>Swim:</h3> Wetsuits are optional for the swim but will provide buoyancy and warmth. However, many people opt for no wetsuit for a triathlon so no worries. We will provide you with a swim cap but you will want to bring your own goggles.

                <br><h3>Bike: </h3> A biking helmet is mandatory. You will also receive 2 stickers in your package with your race number on them. The small sticker should go on the front of your helmet. The bigger sticker will wrap around your bike frame. Road or mountain bikes are acceptable. For safety reasons, be sure to have end-caps on the end of your handle-bars.

                <br><h3>Run:</h3> You must finish the race with your bib number on the front of you. Some people choose to pin it on at the beginning of the race and have it on for the whole event so they don't have to worry about it. Others pin it on a singlet that they put on once they finish the swim before they head out for the bike. Others use an elastic racing strap that they pin their bib number to and then quickly strap it on before they leave for the run. Use whatever option feels best for you.

                    <br>Remember to bring a change of clothing so you can enjoy the post-event festivities.
                </p>
            </main>
            <div style="flex-grow: 1">
                <div id="socialMedia">
                    <!-- This facebook feed is provided by facebook.com -->
                    <div class="fb-page" data-href="https://www.facebook.com/facebook" data-tabs="timeline" data-width="210px" data-height="300px" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/facebook" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/facebook">Facebook</a></blockquote></div>
                </div>

                <div id="weatherFeed">
                    <!-- weather feed from https://weatherwidget.io/ -->
                    <a class="weatherwidget-io" href="https://forecast7.com/en/45d52n122d68/portland/?unit=us" data-label_1="PORTLAND" data-label_2="WEATHER" data-icons="Climacons Animated" data-days="3" data-theme="original" style="width: 220px">PORTLAND WEATHER</a>
                    <script>
                    !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
                    </script>
                </div>
            </div>
            
        </div>
        
        <footer>
            Copyright 2020 @ Alex Dikeman (Contact info/links here in final product)
        </footer>
    </body>

</html>