<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Đăng nhập thành công</title>
</head>
<body>
    <h1>Đăng nhập thành công!</h1>
    <a href="../../index.php">Kết nối</a>
    <?php echo "Username là: " . print_r(session_status()); ?>
</body>
</html>