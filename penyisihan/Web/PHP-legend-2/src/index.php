<?php
$users = [
    'admin' => '0e123456789012345678901234567890',  
    'user' => '098f6bcd4621d373cade4e832627b4f6'    
];

// Cek apakah form login dikirim
if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = md5($_POST['password']);  // Hashing password user input

    // Cek apakah user terdaftar dan password benar 
    if (isset($users[$username]) && $users[$username] == $password) {
        echo "Welcome, $username! You are logged in.";
        
        // Jika user adalah admin, tampilkan flag
        if ($username == 'admin') {
	   echo PHP_EOL.file_get_contents("/home/flag.txt");
        }
    } else {
        echo "Invalid username or password!";
    }
} else {
    echo "Please login:";
}
?>

<!-- Form login -->
<form method="POST">
    Username: <input type="text" name="username" /><br/>
    Password: <input type="password" name="password" /><br/>
    <input type="submit" value="Login" />
</form>

