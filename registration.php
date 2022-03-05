<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dental </title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="stylesheet" href="css/style.css">
    

</head>
<body>
    
<!-- header  -->

<header class="header">

    <a href="#" class="logo"> <i class="fas fa-tooth"></i> dentalcare. </a>



    <div id="menu-btn" class="fas fa-bars"></div>
<style>
    #message {
  display:none;
  background: #f1f1f1;
  color: #000;
  position: relative;
  padding: 20px;
  margin-top: 10px;
}

#message p {
  padding: 10px 35px;
  font-size: 18px;
}

/* Add a green text color and a checkmark when the requirements are right */
.valid {
  color: green;
}

.valid:before {
  position: relative;
  left: -35px;
  content: "✔";
}

/* Add a red text color and an "x" when the requirements are wrong */
.invalid {
  color: red;
}

.invalid:before {
  position: relative;
  left: -35px;
  content: "✖";
}
</style>
</header>
<br><br>
<br>
<br>
<br>
<br>
<br>


<!---Registration-->
<section class="register" >


    <div class="row">

       

        <form action="register.php" method="post">
            <h3>Registration</h3>
            <input type="text" placeholder="username" class="box" name="username"  required>
            <input type="text" placeholder="your number" class="box" name="yournumber" pattern="^01[0-2,5]\d{8}$"required > 
            <input type="text" placeholder="your age" class="box" name="yourage" required > 
            <input type="email" placeholder="email" class="box" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"  required>
            <input type="password" placeholder="Password" class="box" name="password" autocomplete="current-password" id="id_password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"  required>
            <i class="far fa-eye" id="togglePassword" style="margin-left: -17px; cursor: pointer;"></i>
            <div id="message">
  <h3>Password must contain the following:</h3>
  <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
  <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
  <p id="number" class="invalid">A <b>number</b></p>
  <p id="length" class="invalid">Minimum <b>8 characters</b></p>
</div>
            <input type="text" placeholder="National ID" class="box" name="natid" pattern= "[23](?:[0-9]{2}(?:(?:(?:0[13578]|1[02])(?:0[1-9]|[12][0-9]|3[01]))|(?:(?:0[469]|11)(?:0[1-9]|[12][0-9]|30))|(?:02(?:0[1-9]|1[0-9]|2[0-8])))|(?:(?:04|08|[2468][048]|[13579][26]|(?<=3)00)0229))(?:0[1-4]|[12][1-9]|3[1-5]|88)[0-9]{4}[1-9]"  required>
            <div class="box-2" >
                <input list="gender" placeholder="Gender" name="gender" required>
                <datalist id="gender">
                    <option value="Male"></option>
                    <option value="Female"></option>
                </datalist>
                </div>
                <h4>*if you want to upload any scans, tests or old prescriptions press choose file</h4>

                <input type="file" placeholder="" class="box" name="file"><br>




            <input type="submit" value="Register Now" class="btn" >
            
            
        </form>

</section>







<!-- custom js file link  -->
<script src="js/script.js"></script>

<!--- pw toggle script-->
<script>
    const togglePassword = document.querySelector('#togglePassword');
const password = document.querySelector('#id_password');

togglePassword.addEventListener('click', function (e) {
  // toggle the type attribute
  const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
  password.setAttribute('type', type);
  // toggle the eye slash icon
  this.classList.toggle('fa-eye-slash');
});
</script>

<!--- pw validation script-->

<script>
var myInput = document.getElementById("id_password");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");

// When the user clicks on the password field, show the message box
myInput.onfocus = function() {
  document.getElementById("message").style.display = "block";
}

// When the user clicks outside of the password field, hide the message box
myInput.onblur = function() {
  document.getElementById("message").style.display = "none";
}

// When the user starts to type something inside the password field
myInput.onkeyup = function() {
  // Validate lowercase letters
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) {
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
}

  // Validate capital letters
  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) {
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }

  // Validate numbers
  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) {
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }

  // Validate length
  if(myInput.value.length >= 8) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
}
</script>
</body>
</html>