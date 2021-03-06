<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
</head>
<body>
     <div class="wrapper">
        <section class="form signup">
            <header> Realtime chat App</header>
            <form action="#">
                <div class="error-txt">This is an error message</div>
                <div class="name-details">
                    <div class="field">
                        <label>First name</label>
                        <input type="text" name="fname" placeholder="First Name" required>
                    </div>
                    <div class="field">
                        <label>Last name</label>
                        <input type="text" name="lname" placeholder="Last Name" required>
                    </div>
                </div> 
                    <div class="field">
                        <label>Email</label>
                        <input type="text" name="email" placeholder="Email" required>
                    </div>
                    <div class="field">
                        <label>Password</label>
                        <input type="password" name="password" placeholder="Enter new Password" required>
                        <i class="fas fa-eye"></i>
                    </div>
                    <div class="field image">
                        <label>Select Image </label>
                        <input type="file" name="image" required>
                    </div>
                    <div class="field button">
                        <input type="submit" value="continue to chat">
                    </div>
                
                <div class="link">Already signed up? 
                    <a href="#">login now</a>
                </div>
            </form>
        </section>
     </div> 
     <script src="js/pass-show-hide.js"></script>
     <script src="js/signup.js"></script>
</body>
</html>