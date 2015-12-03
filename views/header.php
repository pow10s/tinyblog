<html>
<head>
    <link href="/css/headerStyle.css" rel="stylesheet">
</head>
<body>
<ul class="dropdown">
    <li class="dropdown-top">
        <p>Menu</p>
        <ul class="dropdown-inside">
            <?php
            echo "<li>". "<a href =" . BASE_URL."/register/register>Register </a>" . "</li>";
            echo "<li>". "<a href =" . BASE_URL."/login/login>Login </a>" . "</li>";
            ?>

        </ul>
    </li>
    </ul>
</body>
</html>