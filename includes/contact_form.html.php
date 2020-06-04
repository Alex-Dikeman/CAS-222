<main id="main">
    <h1>Contact Form</h1>
    <form action="includes/contact_form.php" method="post" id="contactForm" >
        <label for="contactName">Name:</label>
        <input type="text" id="contactName" placeholder="Your name.." name="contactName">
        <label for="contactMail">Email:</label>
        <input type="email" id="contactMail" placeholder="Your email.." name="contactMail">
        <label for="contactText">Message:</label>
        <textarea id="contactText" name="contactText"></textarea>
        <input type="submit" value="Submit">
    </form>
</main>