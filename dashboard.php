<?php
include("auth_session.php");
?>
<html>
<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    <div class="form">
        <p>Hey, <?php echo $_SESSION['username']; ?>!</p>
        <p>Welocome to Sinch</p>
        <p><a href="logout.php">Logout</a></p>
    </div>
</body>
</html>