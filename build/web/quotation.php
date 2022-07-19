<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="form_style.css" media="all">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>   
     
    <script src="main.js"></script>
</head>

<body>
 
s

    <div class="container">
    <h4 class="sent-notification"></h4>
    <h1>FILL THE COMPLAINT FORM :</h1>

 
	 
        <form action="sendmail.php" method="POST" class="form" id="myForm">
        
            <div class="form-group">
                <label for="name" class="form-label">Your Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter Your Name here" tabindex="1" required>
            </div>
            <div class="form-group">
                <label for="email" class="form-label">Your Email</label>
                <input  type="email" class="form-control" id="email" name="email" placeholder="Enter Your Mail-id here" tabindex="2" required>
            </div>
            <div class="form-group">
                <label for="subject" class="form-label">Subject</label>
                <input type="text" class="form-control" id="subject" name="subject" placeholder="In which department" tabindex="3" required>
            </div>
            <div class="form-group">
                <label for="message" class="form-label">Message</label>
                <textarea class="form-control" rows="5" cols="50" id="message" name="message" placeholder="Enter your complaint here" tabindex="4"></textarea>
            </div>
            <div>
            	
                <button type="submit" class="btn">Send Message!</button>
            </div>
        </form>
         
    </div>
   

<script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script type="text/javascript">
        function sendEmail() {
            var name = $("#name");
            var email = $("#email");
            var subject = $("#subject");
            var body = $("#message");

            if (isNotEmpty(name) && isNotEmpty(email) && isNotEmpty(subject) && isNotEmpty(body)) {
                $.ajax({
                   url: 'sendmail.php',
                   method: 'POST',
                   dataType: 'json',
                   data: {
                       name: name.val(),
                       email: email.val(),
                       subject: subject.val(),
                       body: body.val()
                   }, success: function (response) {
                        $('#myForm')[0].reset();
                        $('.sent-notification').text("Message Sent Successfully.");
                        alert("Message sent successfully");
                   }
                });
            }
        }

        function isNotEmpty(caller) {
            if (caller.val() === "") {
                caller.css('border', '1px solid red');
                return false;
            } else
                caller.css('border', '');

            return true;
        }
    </script>
    
    
</body>

</html>