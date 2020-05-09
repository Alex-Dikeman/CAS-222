<!DOCTYPE html>

<html>
    <head>
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <title>Template</title>
        <link href='/cas222/Template/styles/styles.css' rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=PT+Serif&display=swap" rel="stylesheet"> 
    </head>
    <body>
        <div id="fb-root"></div>
        <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v7.0"></script>
        <header>
            <a href="/cas222/Template/index.php"><img id="headerLogo" src="/cas222/Template/images/AITH_logo.png"></a>
            <?php include 'includes/nav.html.php' ?>
        </header>
        
        <div class="flex-container">
            <main>
                <h3>This is a placeholder for different content in different pages. In this home page there might be images and text.</h3>
                <!-- ipsum from https://veggieipsum.com/ -->
                <p> 
                    Pea horseradish azuki bean lettuce avocado asparagus okra. Kohlrabi radish okra azuki bean corn fava bean mustard tigernut jícama green bean celtuce collard greens avocado quandong fennel gumbo black-eyed pea. Grape silver beet watercress potato tigernut corn groundnut. Chickweed okra pea winter purslane coriander yarrow sweet pepper radish garlic brussels sprout groundnut summer purslane earthnut pea tomato spring onion azuki bean gourd. Gumbo kakadu plum komatsuna black-eyed pea green bean zucchini gourd winter purslane silver beet rock melon radish asparagus spinach. 
                    
                    Soko radicchio bunya nuts gram dulse silver beet parsnip napa cabbage lotus root sea lettuce brussels sprout cabbage. Catsear cauliflower garbanzo yarrow salsify chicory garlic bell pepper napa cabbage lettuce tomato kale arugula melon sierra leone bologi rutabaga tigernut. Sea lettuce gumbo grape kale kombu cauliflower salsify kohlrabi okra sea lettuce broccoli celery lotus root carrot winter purslane turnip greens garlic. Jícama garlic courgette coriander radicchio plantain scallion cauliflower fava bean desert raisin spring onion chicory bunya nuts. Sea lettuce water spinach gram fava bean leek dandelion silver beet eggplant bush tomato. 
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