



<?php
$showalert = false;
$servername = "localhost";
$username = "root";
$password = "";
$database = "tech contact";

// Create connection
$conn = new mysqli($servername, $username, $password,$database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


if ($_SERVER['REQUEST_METHOD'] == 'POST') {

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$mess = $_POST['mess'];
$ser = $_POST['ser'];


$sql = "INSERT INTO `form` ( `name`, `phone`, `email`, `message`, `data`, `service`, `date`) VALUES ( '$name', '$phone', '$email', '$mess', 'message', '$ser', current_timestamp());";
$result = mysqli_query($conn,$sql);
if($result){
  header("Location:alert.html");
}


}


?>








<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Contact Us Page Design using Html CSS</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap">
    <!-- Font Awesome CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    <style>

*{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
.break{
    display: none;
}

body, input,textarea, a{
    font-family: 'Roboto', sans-serif;
}
#section-wrapper{
    width: 100%;
    padding: 10px;
    
}
.box-wrapper{
    position: relative;
    display: table;
    width:900px;
    margin:auto;
    margin-top:35px;
    border-radius: 30px;

}
.info-wrap{
    width:35%;
    height: 745px;
    padding: 40px;
    float: left;
    display: block;
    border-radius: 30px 0px 0px 30px;
    background: linear-gradient(144deg, rgb(78, 67, 193) 0%, rgba(0,88,146,1) 49%);
    color: #fff; 
}
.info-title{
    text-align: left;
    font-size: 28px;
    letter-spacing: 0.5px;
}
.info-sub-title{
    font-size: 18px;
    font-weight: 300;
    margin-top: 17px;
    letter-spacing: 0.5px;
    line-height: 26px;
}
.info-details {
    list-style: none;
    margin: 60px 0px;
}
.info-details li {
    margin-top: 25px;
    font-size: 18px;
    color: #fff;
}
.info-details li i {
    background: #F44770;
    padding: 12px;
    border-radius: 50%;
    margin-right: 5px;
}
.info-details li a {
    color: #fff;
    text-decoration: none;
}
.info-details li a:hover {
    color: #F44770;
}
.social-ico {
    list-style: none;
    text-align: center;
    margin: 20px 0px;
}
.social-ico li {
    display: inline-block;
}
.social-ico li i {
    background: #F44770;
    color: #fff;
    padding: 15px;
    font-size: 20px;
    border-radius: 22%;
    margin: 0px 5px;
    cursor: pointer;
    transition: all .5s;
}
.social-ico li i:hover {
    background: #fff;
    color: #000000;
}
.form-wrap{
    width:65%;
    float: right;
    padding:40px 25px 35px 25px;
    border-radius: 0px 30px 30px 0px;
    background: #c6c6c6;
}
.form-title{
    text-align: left;
    margin-left: 23px;
    font-size: 28px;
    letter-spacing: 0.5px;
}
.form-fields{
    display: table;
    width: 100%;
    padding: 15px 5px 5px 5px;
}
.form-fields input,
.form-fields textarea{
    border: none;
    outline:none;
    background: none;
    font-size: 18px;
    color:#414040;
    padding: 20px 10px 20px 5px;
    width:100%
}
.form-fields textarea{
    height: 150px;
    resize: none;
}
.form-group{
    width: 70%;
    float: left;
    padding: 0px 30px;
    margin: 14px 12px;
    border-radius: 25px;
    box-shadow: inset 8px 8px 8px #bcbcbc, inset -8px -8px 8px #d1d1d1;
}
.form-fields .form-group:last-child {
    width: 96%;
}
.submit-button{
   
    width: 96%;
    height: 60px;
    margin: 0px 12px;
    border-radius: 30px;
    font-size: 20px;;
    font-weight: 700;
    outline: none;
    border:none;
    cursor: pointer;
    color:#fff;
    text-align: center;
    background:  #0f77bc;
    box-shadow: 3px 3px 8px #b1b1b1, -3px -3px 8px #ffffff;
    transition: .5s;
}
.submit-button:hover{
    background: #f44770;
}




@media only screen and (max-width: 767px) {
    .box-wrapper{
        width: 100%;
    }
    .info-wrap,
    .form-wrap{
        width: 100%;
        height: inherit;
        float: none;  
    }
    .info-wrap{
        border-radius: 30px 30px 0px 0px;
    }
    .form-wrap{
        border-radius: 0px 0px 30px 30px;
    }
    .form-group{
        width: 100%;
        float: none;
        margin: 25px 0px;
    }
    .form-fields .form-group:last-child, 
    .submit-button{
        width: 100%;
    }
    .submit-button{
        margin: 10px 0px;
    }
   
}
@media only screen and (max-width: 282px) {
    .box-wrapper{
        width: 100%;
        padding-right: 10px;
    }
    .info-wrap,
    .form-wrap{
        width: 100%;
        height: inherit;
        float: none;  
    }
    .info-wrap{
        border-radius: 30px 30px 0px 0px;
    }
    .form-wrap{
        border-radius: 0px 0px 30px 30px;
    }
    .form-group{
        width: 100%;
        float: none;
        margin: 25px 0px;
    }
    .form-fields .form-group:last-child, 
    .submit-button{
        width: 100%;
    }
    .submit-button{
        margin: 10px 0px;
    }
    .break{
        display: block;
    }
   
}

.kk{
    color: black;
    text-decoration: none;
    
}

.kkk{
    padding-left: 20px;
    padding-top: 5px;
    
}








    </style>
</head>
<body>
    
    



<h3 class="kkk"><a href="./index.html" class="kk"> <|Back to Home</a></h3>


    <section id="section-wrapper">
        <div class="box-wrapper">
            <div class="info-wrap">
                <h2 class="info-title" style="color: white;">Contact Information</h2>
                <h3 class="info-sub-title" style="color: white;">Fill up the form and our Team will get back to you within 24 hours</h3>
                <ul class="info-details">
                    <li>
                        <i class="fas fa-phone-alt"></i>
                        <span>Phone:</span> <a href="tel:+ 1235 2355 98">+93 224212339</a>
                    </li>
                    <li>
                        <i class="fas fa-paper-plane"></i>
                        <span>Email:</span> <a href="mailto:info@yoursite.com">TechServe@gmail.com</a>
                    </li>
                    <li>
                        <i class="fas fa-globe"></i>
                        <span>Website:</span> <a href="#">Tech Serve.com</a>
                    </li>
                </ul>
                <ul class="social-ico">
                    <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <br class="break"><br class="break">
                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                </ul>
            </div>
            <div class="form-wrap">
                <form action="contact.php" method="POST">
                    <h2 class="form-title">Contact Us</h2>
                    <div class="form-fields">
                        <div class="form-group">
                            <input type="text" class="name" placeholder="Your Name" id="name" name="name" required>
                        </div>
                       <br>
                        <div class="form-group">
                            <input type="text" class="phone" placeholder="Phone Number" id="phone" name="phone" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="email" placeholder="Email Address" id="email" name="email" required>
                        </div>


                        <!-- <label for="dropdown">Select an option:</label>
     <select id="dropdown" name="dropdown" class="form-control">
          <option value="option1">Option 1</option>
  <option value="option2">Option 2</option>
          <option value="option3">Option 3</option>
       
     </select>
                         -->
                        <!--  <div class="form-group">
                            <input type="email" class="email" placeholder="Mail">
                        </div> -->
                        <div class="form-group">
                        <select id="ser" name="ser" class="form-control" style=" padding-bottom: 10px; padding-top: 10px; background: none; border: none; font-size: 20px; color: gray;">
          <option value="option1">Select Service</option>
  <option value="IT services">OIT srevices</option>
          <option value="Cyber Security">Cyber Security</option>
          <option value="web">Web development</option>
        <!-- Add more options as needed -->
     </select>
                        </div> 
                        <div class="form-group">
                            <textarea name="mess"  placeholder="Write your message" id="mess"></textarea>
                        </div>

                       

                    </div>
                    <input type="submit" value="Send Message" class="submit-button" id="message" name="message">
                </form>
            </div>
        </div>
    </section>




   

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>

</body>
</html>


