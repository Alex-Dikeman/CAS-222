<html>
    <head>
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <title>Ace in the Hole Multisport</title>
        <link href='<?php $rootVar ?>site/styles/styles.css' rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=PT+Serif&display=swap" rel="stylesheet"> 
    </head>
    <body>
        <div id="fb-root"></div>
        <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v7.0"></script>
        <header>
            <a href="<?php $rootVar ?>site/index.php"><img id="headerLogo" src="<?php $rootVar ?>site/images/AITH_logo.png"></a>
            <?php include $rootVar.'site/includes/nav.html.php' ?>
        </header>
        
        <div class="flex-container">
            <main>
                <form action="registration_form.php" method="post">
					<label for="name">Name</label>
					<input type="text" id="name" name="name" placeholder="Your name..">

					<label for="age">Age</label>
					<input type="text" id="age" name="age" placeholder="Your age..">

					<label for="role">Role</label>
					<select id="role" name="role" >
						<option value="athlete">Athlete</option>
						<option value="volunteer">Volunteer</option>
					</select>
					
					<label for="email">Email</label>
					<input type="email" id="email" name="email" placeholder="Your email..">
					
					<label for="econtact">Emergency Contact Name</label>
					<input type="text" id="econtact" name="econtact" placeholder="Emergency contact..">
					
					<label for="enumber">Emergency Contact Number</label>
					<input type="text" id="enumber" name="enumber" placeholder="">
					
					<label for="gender">Gender</label>
					<select id="gender" name="gender" >
						<option value="male">Male</option>
						<option value="female">Female</option>
						<option value="other">Other</option>
					</select>
					
					<label for="satevent">Saturday Events</label>
					<input type="text" id="satevent" name="satevent" placeholder="Events on saturday..">
					
					<label for="sunevent">Sunday Events</label>
					<input type="text" id="sunevent" name="sunevent" placeholder="Events on sunday..">
					
					<label for="accommodations">Any accommodations needed</label>
					<input type="text" id="accommodations" name="accommodations" placeholder="Any accomodations needed..">

					<input type="submit" value="Submit">
				</form>
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