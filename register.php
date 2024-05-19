<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
<form action="handler_register.php" method ="POST">
    <h1>Form Pendaftaran</h1>
    <div>
            <label for="">Username:</label><br>
            <input type="text" id="username" name="username" required><br>
    </div>

    <div>
      <label for="">Email:</label><br>
      <input type="text" id="email" name="email" required><br>
    </div>

    <div>
        <label for="">Password:</label><br>
        <input type="text" id="password" name="password" required><br>
    </div>
            <button type="submit">Submit</button>
</form>
</body>
</html>