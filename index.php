<?php
$insert = false;
if(isset($_POST['firstname'])){
    
    $server = "localhost";
    $username = "root";
    $password = "root";
    
    
    $con = mysqli_connect($server, $username, $password);

 
    if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
    }
    
    $firstname = $_POST['firstname'];
    $middlename = $_POST['middlename'];
    $lastname = $_POST['lastname'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $subject = $_POST['subject'];
    $comment = $_POST['comment'];
    
    $sql = "INSERT INTO`form`.`course_form`(`firstname`, `middlename`, `lastname`, `gender`, `age`, `email`, `number`, `subject`, `comment`) VALUES ('$firstname','$middlename','$lastname','$gender','$age','$email','$number','$subject','$comment');";

    if($con->query($sql) == true){
        
        $insert = true;
    }
    else{
        echo "ERROR: $sql <br> $con->error";
    }

    
    $con->close();
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration form</title>

    <link rel="stylesheet" href="style.css">

</head>
</strong>

<body>
    <p>Name : Chirag Vaviya </p>
    <p>Roll No : 61</p>
    <p>Branch : IT Div : D</p>

    <h1 class="head1">Student Registration Form</h1>
    <p class="inst">***<strong>Fill the course registration form carefully</strong>***</p>
    <?php
        if($insert == true){
        echo "<p class='submit'>You have successfully submitted form <br> Thank You !! </p>";
        }
    ?>

    <form action="index.php" method="post" name="RegForm" onsubmit="return form()">
        <p>Student Name :</p>
        <input type="text" name="firstname" id="firstname" placeholder="firstname">
        <input type="text" name="middlename" id="middlename" placeholder="middlename">
        <input type="text" name="lastname" id="lastname" placeholder="lastname">

        <p>Gender :</p>
        <div>
            <label for="male"><input type="radio" name="gender" value="m" id="male"/> Male
            </label>
            <label for="female"><input type="radio" name="gender" value="f" id="female">Female
            </label>
            <label for="other"><input type="radio" name="gender" value="o" id="other"/>Other
            </label>
        </div>

        <br>

        <p>Age :</p>
        <div>
            <input type="text" name="age" id="age" placeholder="Enter your age">
        </div>

        <br>

        <p>E-mail :</p>
        <div>
            <input type="email" name="email" id="email" placeholder="Enter your e-mail">
        </div>

        <br>

        <p>Contact No :</p>
        <div>
            <input type="text" name="number" id="number" placeholder="Enter your contact no">
        </div>

        <br>

        <p> Select Your Course :
            <select type="text" value="" name="subject">
                <option>Choose Course.....</option>
                <option value="python">Python</option>
                <option value="c++">C++</option>
                <option value="java">Java</option>
                <option value="web_development">Web Development</option>
                <option value="app_development">App Development</option>
                <option value="machine_learning">Machine Learning</option>
            </select>
        </p>
        <p>Comments : <br><br>
            <textarea name="comment" id="comment" cols="30" rows="10"
                placeholder="Enter your any queries or doudts here......"></textarea>
        </p>

        <button type="submit">Submit</button>
        <button type="reset">Reset</button>
    </form>



</body>
<?php
$a=1;
$b=2;
$c=3;
echo ($a % ($b) + $c );
?>

</html>