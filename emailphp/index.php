<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>University Registration</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>   
    <header>
        <div class="banner">
            <p>
            " Welcome to the registration portal for the Rajpora Premier T20 Cup Edition II . We are thrilled to announce the upcoming tournament featuring 32 teams vying for cricketing glory . Register Your Team Now .</p>
        </div>
    </header>
    <main>
        <div class="registration-form">
            <center><h3>Tournament Registration Form</h3></center>
            <center><h4>Edition II</h4></center>
            <form action="send.php" method="POST" enctype="multipart/form-data">

                <label for="Teamname">Team Name:</label>
                <input type="text" id="Teamname" name="Teamname" required>  
                
                <label for="Captainname">Captain Name:</label>       
                <input type="text" id="Captainname" name="Captainname" required>
            
                <label for="Phone">Phone:</label>
                <input type="phone" id="Phone" name="Phone" required>

                <label for="Email">Email:</label>
                <input type="email" id="Email" name="Email" required>

                <label for="Teamlogo">Team Logo:</label>
                <input type="file" id="Teamlogo" name="Teamlogo" required>

                <label for="Captainphoto">Captain Photo:</label>
                <input type="file" id="Captainphoto" name="Captainphoto" required>

                <!-- Additional fields and form elements can be added here -->
                <br><center> <input type="submit" value="Submit"></center>
            </form>
        </div>
    </main>
    <footer>
        <div class="contact-info">
            <p>RAJPORA PREMIER T20 CUP EDITION II</p>
            <p>Address: Rajpora Pulwama</p>
            <p>Phone: +917006224536 , +916006975431</p>
            <p>Email: rpt20help@gmail.com</p>
        </div>
        <div class="social-media">
            <a href="#"><img src="IMG-20240428-WA0010.jpg" ></a><br>
            <div class="button">
                <center>
                    <a href="https://chat.whatsapp.com/Hed7DYC30p69t2f4KPmPzf">
                        JOIN WHATSAPP GROUP
                    </a>
                </center>
            </div>
        </div>
        <div class="copyright">
            <p>&copy; 2024 ECC . All rights reserved.</p>
        </div>
    </footer>
</body>
</html>