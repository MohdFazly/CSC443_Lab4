<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Feedback</title>
</head>
<body>
<?php #Script handle form

if (strlen($_POST["name"]) >0)
{ 
    $_POST["name"] = $ POST ["name"];
}
else
{
    $_POST["name"]= null;
    echo '<p><b> You Forgot to Enter Your Name! </b></p>';
}

"</b> for the following comments: <br/>".
$_POST["comments"]."<p>We will reply to you at <i>".
$_POST["email"]." </i></p>";

?>
</body>
</html>