<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="stylecontact.css">
</head>
<style>
    .button{
        color:red;
    }
    </style>

<body>
    <div class="contact-form">
        <h1>Contact Us</h1>
    </div>
    <div class="contact-us">
       <form action="save.php" method="post">
           <input type="text" name="fname"   class="form-control" placeholder="Enter Full Name"> <br>
          
           <input type="email" name="email"  class="form-control" placeholder="Enter Email"> <br>
           <input type="text" name="mobile"  class="form-control" placeholder="Enter Mobile Number"> <br>
           <input type="comment" name="comment"  class="form-control" placeholder="whats on your mind"> <br>
           

           <input type="submit" class="form-control submit" value="submit" >
           <br>
           <form>
<input type="button" class="form-control submit" value="Go back!" onclick="history.back()">
</form>
 
       </form>
    </div>
</body>
</html>