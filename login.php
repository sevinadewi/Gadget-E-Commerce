<?php
session_start();

// Cek jika pengguna sudah login
if(isset($_SESSION['username'])){
    header("Location: resp.php");
    exit();
}

// Cek jika tombol login ditekan
if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    // Validasi login
    if($username === 'admin' && $password === '12345'){
        $_SESSION['username'] = $username;
        header("Location: resp.php");
        exit();
    } else {
        $error_message = "Username atau password salah";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="login.css">
    <title>Form Login</title>
</head>
<body>
	<div class="login">
		<div class="judul">
			<h2>Form Login</h2>
		</div>
    
    
    <?php if(isset($error_message)): ?>
        <p style="color: red;"><?php echo $error_message; ?></p>
    <?php endif; ?>
    
    <form method="POST" action="login.php">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>
        
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>
        
        <div class="tombol">
        <input type="submit" name="login" value="Login">
        </div>
    </form>
    </div>
</body>
</html>
