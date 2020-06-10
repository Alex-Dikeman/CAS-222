<main id="main">
    <h1>Contact Form</h1>
    <form action="includes/contact_form.php" method="post" id="contactForm" >
        <label for="contactName">Name:</label>
        <input type="text" id="contactName" placeholder="Your name.." name="contactName">
        <label for="contactMail">Email:</label>
        <input type="email" id="contactMail" placeholder="Your email.." name="contactMail">
        <label for="contactRole">Role:</label>
        <select id="contactRole" name="contactRole">
            <option value="athlete">Athlete</option>
            <option value="volunteer">Volunteer</option>
            <option value="interested party">Interested Party</option>
        </select>
        <label for="contactText">Message:</label>
        <textarea id="contactText" name="contactText"></textarea>
        <input type="submit" value="Submit">
    </form>
</main>