<?php
if(isset($_POST['btn'])){
    $first = $_POST['first_number'];
    $last = $_POST['last_number'];
    $btn = $_POST['btn'];
    if($btn == '+'){
        $result = $first+$last;
    }
    else if($btn == '-'){
        $result = $first-$last;
    }
    else if($btn == '*'){
        $result = $first*$last;
    }
    else if($btn == '/'){
        $result = $first/$last;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<body>
    <form action="#" method="POST">
    <fieldset>
    <legend>Calculator</legend>
    <div>
        First Number : <input type="number" name="first_number">
    </div>
    <div>
        Last Number : <input type="number" name="last_number">
    </div>
    <div>
        Result : <input type="number" name="result" value="<?php echo $result;?>">
    </div>
    <div>
        <input type="submit" name="btn" value="+">
        <input type="submit" name="btn" value="-">
        <input type="submit" name="btn" value="*">
        <input type="submit" name="btn" value="/">
    </div>
    </fieldset>
    </form>
</body>
</html>