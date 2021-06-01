<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
    <header class="headerMenu">
            <div id="wrapper">
                <div class="logo">
                    <img src="./images/KICKER.png" alt="Logo" />
                </div>
                <div class="searchBox">
                    <form action="search.php" method="GET" id="search">
                        <input type="text" name="q" size="60" placeholder="Search ..." />
                    </form>
                </div>
                <div id="menu">
                    <a href="#">Home</a>
                    <a href="#">About</a>
                    <a href="#">Sign Up</a>
                    <a href="#">Sign In</a>
                </div>
            </div>
    </header>
    <div class="center">
    <table>
        <tr>
            <td width=60% valign="top">
                <h2>Join Kicker Today!</h2>
            </td>
            <td width=40% valign="top">
                <h2>Sign Up Below ...</h2>
                <form action="#" method="POST">
                    <input type="text" name="fname" size="25" placeholder="First Name..."/><br/><br/>
                    <input type="text" name="lname" size="25" placeholder="Last Name..."/><br/><br/>
                    <input type="text" name="username" size="25" placeholder="Username..."/><br/><br/>
                    <input type="text" name="email" size="25" placeholder="Email..."/><br/><br/>
                    <input type="text" name="email2" size="25" placeholder="Confirm Email..."/><br/><br/>
                    <input type="text" name="password" size="25" placeholder="Password..."/><br/><br/>
                    <input type="text" name="password2" size="25" placeholder="Confirm Password..."/><br/><br/>
                    <input type="submit" name="submit" value="Sign Up"/><br/>
 
                </form>
            </td>
        </tr>

    </table>
    </div>
</body>
</html>