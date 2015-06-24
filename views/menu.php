<html>
<head>
    <style type="text/css">
        a {
            text-decoration: none;
        }
        #header {
            width:715px;
            height: 100px;
        }
        #menu {
            width:190px;
            height: 300px;
        }
        #content {
            width: 525px;
            height: 300px;
            position: absolute;
            left:190px;
            top:100px;
        }
        body {
            margin:0px;
        }
        </style>
    </head>
<body>
<div id="header"><h1 align="center">Tiny blog</h1></div>
<div id="menu">
<table>
    <caption>Messages</caption>
    <tr>
    <td><a href="http://localhost/projs/tinyblog/index.php?action=createmessage">Create message</a></td>
    </tr>
    <tr>
        <td><a href="http://localhost/projs/tinyblog/index.php?action=viewmessages">View messages</a></td>
    </tr>
    </table>
<table>
    <caption>Users</caption>
    <tr>
    <td><a href="http://localhost/projs/tinyblog/index.php?action=register">Register</a></td>
    </tr>
    <tr>
        <td><a href="http://localhost/projs/tinyblog/index.php?action=login">Login</a></td>
    </tr>
    </table>
</div>
<div id="content">
    </div>