<main id="main">
    <h1>Events</h1>
    
    <h3>Saturday: </h3>
    <ul>
        <li>Long Course Triathlon - 7:00 AM - $240</li>
        <li>Olympic Triathlon - 7:30 AM - $110</li>
        <li>10K - 7:15 AM - $50</li>
        <li>Half Marathon - 7:15 AM - $75</li>
    </ul>
    
        <h3>Sunday: </h3>
    <ul>
        <li>Sprint Triathlon - 8:00 AM - $90</li>
        <li>Try-a-Tri - 8:20 AM - $65</li>
        <li>Splash n Dash - 12:00 PM - Free!</li>
    </ul>
    
    <p>Includes: </p>
    <ul>
        <li>Food & Beer</li>
        <li>Access to the weekend's live entertainment & Fitness Expo</li>
        <li>Commemorative Finisher medal</li>
        <li>Accurate Chip Timing for competitive races</li>
        <li>Ace in the Hole Multisport Weekend Tech Shirt</li>
        <li>Post-event party & entertainment</li>
    </ul>
    
    
    <h1>Registration Form</h1>
    <form id="reg_form" action="includes/registration_form.php" method="post">
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
        <textarea id="accommodations" name="accommodations">Any accomodations needed..</textarea>

        <input type="submit" value="Submit">
    </form>
</main>