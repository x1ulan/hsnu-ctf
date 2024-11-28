<?php

if($_SERVER['REQUEST_METHOD']==='POST' && @$_POST['name'] || @$_COOKIE['name']){
    if(@$_COOKIE['name']){
        echo 'Welcome, '.htmlentities($_COOKIE['name']);
        if ($_COOKIE['name']==='admin'){
            echo '<br>here is your flag: flag{FLAG}';
        }
        die();
    }
    if(@$_POST['name']==='admin'){
        echo 'You are not admin';
    }else{
        setcookie('name', $_POST['name'], time()+3600);
        echo 'Welcome, '.$_POST['name'];
    }
}else{

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <style>
        body { font-family: Arial, sans-serif; display: flex; justify-content: center; align-items: center; height: 100vh; background-color: #e9e9e9; }
        .login-container { width: 300px; padding: 20px; background: #fff; border-radius: 8px; box-shadow: 0 4px 8px rgba(0,0,0,0.2); }
        h2 { text-align: center; color: #333; }
        form { display: flex; flex-direction: column; }
        input { padding: 10px; margin: 10px 0; border: 1px solid #ddd; border-radius: 5px; }
        button { padding: 10px; background-color: #28a745; color: white; border: none; border-radius: 5px; cursor: pointer; }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>login</h2>
        <form method="POST">
            <input type="text" name="name" placeholder="username" required>
            <button type="submit">login</button>
        </form>
    </div>
</body>
</html>
<?php } ?>
