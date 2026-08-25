<?php

$title = $email = $ingredients = '';
$errors = array('email' => '', 'title' => '', 'ingredients' => '');

//if(isset($GET["submit"])){ // check if the variable have been sent
//    echo $GET['email']; //will get the value the user key in
//    echo $GET['title'];
//    echo $GET['ingredients'];
// }


// theses will run when submitting the form 

if (isset($_POST["submit"])) {

    // check email if empty
    if (empty($_POST["email"])) {
        $errors['email'] = 'An email is required <br />';
    } else {
        $email = $_POST['email'];
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors['email'] = 'An email must be a valid email address <br />'; // errors
        }
    }

    // check title
    if (empty($_POST["title"])) {
        $errors['title'] = 'A title is required <br />';
    } else {
        $title = $_POST['title'];
        if (!preg_match('/^[a-zA-Z\s]+$/', $title)) {
            $errors['title'] = 'A title must contain only letters and spaces <br />';
        }
    }

    // check ingredients
    if (empty($_POST["ingredients"])) {
        $errors['ingredients'] = 'At least one ingredient is required <br />';
    } else {
        $ingredients = $_POST['ingredients'];
        if (!preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/', $ingredients)) {
            $errors['ingredients'] = 'Ingredients must be comma-separated list <br />';
        }
    }

    if (array_filter($errors)) {
        //echo 'errors in the form';
    } else {
        //echo 'form is valid';
        header('Location: index.php');
    }
} // end of POST check

?>

<!DOCTYPE html>
<html>

<?php include('templates/header.php'); ?>

<section class="container" grey-text>
    <h4 class="center">Add a Pizza</h4>
    <form class="white" action="add.php" method="POST">
        <label>Your Email:</label>
        <input type="text" name="email" value="<?php echo htmlspecialchars($email); ?>">
        <div class="red-text"><?php echo $errors['email']; ?></div>
        <label>Pizza Title:</label>
        <input type="text" name="title" value="<?php echo htmlspecialchars($title); ?>">
        <div class="red-text"><?php echo $errors['title']; ?></div>
        <label>Ingredients (comma separated):</label>
        <input type="text" name="ingredients" value="<?php echo htmlspecialchars($ingredients); ?>">
        <div class="red-text"><?php echo $errors['ingredients']; ?></div>
        <div class="center">
            <input type="submit" name="submit" value="Submit" class="btn brand z-depth-0">
        </div>
    </form>
</section>


<?php include('templates/footer.php'); ?>

</body>

</html>

//nota

Form in PHP
data
Browser (client) >>>>>> server (do something with it)

2 methhod (both sends data to server)

GET sends the data in the URL

POST sends data in the request header (hidden)

action: to send the data to a file and pass the data to

if GET method need to put echo to get the value


XSS Attacks
htmlspecialchars = take the date we import and look at the data and turn any character into html identity
its for safety reason so mean people can't send malicious link


Basic validation

empty = checking if the value is empty

Filter & More Validation

$email = $_POST['email'];
if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
echo 'An email must be a valid email address ;
}

!filter_var = gonna take 2 variable, the value so it can check, and also the type of filer.
FILTER_VALIDATE_EMAIL = take a value and pass to validate filter code and make sure it is a valid email address

regular expression match a string of character to a pattern and the pattern match the string than it's gonna pass the test

$title = $_POST['title'];
if(!preg_match('/^[a-zA-Z\s]+$/', $title)){
echo 'A title must contain only letters and spaces;

!preg_match = match something to the value ('/^[a-zA-Z\s]+$/') =

this is regular expression >> ('/^[a-zA-Z\s]+$/') so when it try to match with the title that have characters only no integer and etc

this is regular expression >> ('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/' looking for a comma in the ingredience string


Showing Error

error array, if there is an error it will update it

place the error in the php file and the html

how to keep the data when the user key in, instaed of it just dissapear
>> value = "<?php echo htmlspecialchars($email); ?> in the html file
>> $title = $email = $ingredients = ''; in thr php file

Checking for Errors & Redirecting

if(array_filter($errors)){ if there is an error, cycle through our array and define a coallback function
//echo 'errors in the form';
}else{
/echo 'form is valid'; if form no error redirecting to index page
header('Location: index.php');