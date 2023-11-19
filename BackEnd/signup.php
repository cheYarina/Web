<?php
function VarExist($var){
    return isset($var) ? $var : '';
    else{
        header("location:../index.html");
    }
}

$user = new stdClass();
$user->fullname = VarExist($_POST["fullname"]);
$user->username = VarExist($_POST["username"]);
$user->pass = VarExist($_POST["pass"]);
$user->sex = VarExist($_POST["gender"]);
$user->birthdate = VarExist($_POST["birthdate"]);

if (InsertUserToFilefromObject($user)) {
    header("Location: ../index.php"); 
    echo "Signup Succesful!";
    
} else {
    echo "Signup failed!";
}

function InsertUserToFilefromObject($user){
   
    $usersfile = file_get_contents('BackEnd/users.json');
    $userarray = json_decode($usersfile, true);
    $userarray[] = array(
        "fullname" => $user->fullname,
        "username" => $user->username,
        "password" => password_hash($user->pass, PASSWORD_DEFAULT),
        "sex" => $user->sex,
        "birthdate" => $user->birthdate
    );

    $newuser = json_encode($userarray, JSON_PRETTY_PRINT);

    if (file_put_contents('BackEnd/users.json', $newuser)) {
   
            return true; 
    } else {
 
        $error = error_get_last();
        error_log("Error writing to users.json: " . $error['message']); 
        return false; 
    }
}
?>
