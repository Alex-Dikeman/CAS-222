<!DOCTYPE html>

<html>
    <head>
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <title>Success!</title>
        <link href='../styles/styles.css' rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=PT+Serif&display=swap" rel="stylesheet"> 
        <script src="../scripts/jquery-3.5.1.min.js"></script>
		<script src="../scripts/scripts.js"></script>
    </head>
    <body onload="successReturn()">
        <div id="fb-root"></div>
        <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v7.0"></script>
        <header>
            <a href=""><img id="headerLogo" src="../images/AITH_logo.png"></a>
            <?php include 'nav.html.php' ?>
        </header>
        
        <div class="flex-container">
            <main id="main">
                <h3>Submitted Successfully. Returning to home.</h3>
        
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