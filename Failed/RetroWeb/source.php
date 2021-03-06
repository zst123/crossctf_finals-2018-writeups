<?php
require_once('db.php');
if ($_GET['source']) {
    show_source(__file__);
    die();
}

function getAllUsernameLike($username) {
    $conn = dbconn();
    $return = array();
    if (preg_match('/\s/', $username) or preg_match('/[\/\\\\]/', $username) or preg_match('/(and|or|null|not|union|select|from|where|group|order|having|limit|into|file|case|like)/i', $username) or preg_match('/(--|\/\*|=|>|<)/', $username)) 
        exit('die hax0r!');
    $username = mysql_escape_string($username);
    $sql = "SELECT username FROM users WHERE username like '$username';";
    $result = $conn->query($sql);
    while ($row = $result->fetch_array()) {
        array_push($return, $row);
    }
    $conn->close();
    if ( empty($return) ) {
        return null;
    } else {
        return $return;
    }
}

if (isset($_GET['search']) && isset($_POST['username'])) {
    $users = getAllUsernameLike($_POST['username']);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
    <title></title>

    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
    <nav class="black" role="navigation">
        <div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo"></a>
            <ul class="right hide-on-med-and-down">
                <li><a href="index.php">Home</a></li>
            </ul>

            <ul id="nav-mobile" class="side-nav">
                <li><a href="index.php">Home</a></li>
            </ul>
            <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
        </div>
    </nav>
    <div class="section no-pad-bot" id="index-banner">
        <div class="container">
            <div class="section">
                <!--   Icon Section   -->
                <div class="row ">
                    <div class="col offset-m1 s10 m10 center-align">
                        The flag is in the flag column of the user 'admin'.</br>
                        View source <a href="?source=1">here</a>.
                    </div>
                </div>
                <div class="row">
                    <div class="col offset-m2 s8 m8">
                        <div class="icon-block">
                            <h5 class="center">Search if username exists:</h5>
                            <form id="register" method="post" action="?search">
                                <p class="heavy">
                                    <center>
                                        <div class="input-field col s6">
                                            <input id="Username" name="username" type="text" class="validate" required>
                                            <label for="Username">Username</label>
                                        </div>
                                        <div class="col s2">
                                            <button style="margin-top:30px;" class="btn waves-effect waves-light brown" type="submit" name="action">Search <i class="material-icons right">send</i>
                                            </button>
                                        </div>
                                        <table>
                                            <tbody>
                                                <?php
                                                    if (isset($users)) {
                                                        echo "<tr><td>Exists.</tr></td>";
                                                    } else {
                                                        echo "<tr><td>Does not exist.</tr></td>";
                                                    }
                                                ?>
                                            </tbody>
                                        </table>
                                    </center>
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="page-footer grey">
        <div class="container">
            <div class="row">
                <div class="col l6 s12">
                    <h5 class="white-text">What is CrossCTF?</h5>
                    <p class="grey-text text-lighten-4">CrossCTF is a cyber security competition organized by NTU with collaboration with NUS Greyhats and SMU Whitehats. This also provides a platform for participants to hack safely in Singapore. The other reason is to promote Cyber Security Capture-The-Flag Competitions in Singapore.</p>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                Made by <a class="white-text text-lighten-3" href="http://materializecss.com">Materialize</a>
            </div>
        </div>
    </footer>


    <!--  Scripts-->
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="js/materialize.js"></script>
    <script src="js/init.js"></script>

</body>
</html><?php
require_once('db.php');
if ($_GET['source']) {
    show_source(__file__);
    die();
}

function getAllUsernameLike($username) {
    $conn = dbconn();
    $return = array();
    if (preg_match('/\s/', $username) or preg_match('/[\/\\\\]/', $username) or preg_match('/(and|or|null|not|union|select|from|where|group|order|having|limit|into|file|case|like)/i', $username) or preg_match('/(--|\/\*|=|>|<)/', $username)) 
        exit('die hax0r!');
    $username = mysql_escape_string($username);
    $sql = "SELECT username FROM users WHERE username like '$username';";
    $result = $conn->query($sql);
    while ($row = $result->fetch_array()) {
        array_push($return, $row);
    }
    $conn->close();
    if ( empty($return) ) {
        return null;
    } else {
        return $return;
    }
}

if (isset($_GET['search']) && isset($_POST['username'])) {
    $users = getAllUsernameLike($_POST['username']);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
    <title></title>

    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
    <nav class="black" role="navigation">
        <div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo"></a>
            <ul class="right hide-on-med-and-down">
                <li><a href="index.php">Home</a></li>
            </ul>

            <ul id="nav-mobile" class="side-nav">
                <li><a href="index.php">Home</a></li>
            </ul>
            <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
        </div>
    </nav>
    <div class="section no-pad-bot" id="index-banner">
        <div class="container">
            <div class="section">
                <!--   Icon Section   -->
                <div class="row ">
                    <div class="col offset-m1 s10 m10 center-align">
                        The flag is in the flag column of the user 'admin'.</br>
                        View source <a href="?source=1">here</a>.
                    </div>
                </div>
                <div class="row">
                    <div class="col offset-m2 s8 m8">
                        <div class="icon-block">
                            <h5 class="center">Search if username exists:</h5>
                            <form id="register" method="post" action="?search">
                                <p class="heavy">
                                    <center>
                                        <div class="input-field col s6">
                                            <input id="Username" name="username" type="text" class="validate" required>
                                            <label for="Username">Username</label>
                                        </div>
                                        <div class="col s2">
                                            <button style="margin-top:30px;" class="btn waves-effect waves-light brown" type="submit" name="action">Search <i class="material-icons right">send</i>
                                            </button>
                                        </div>
                                        <table>
                                            <tbody>
                                                <?php
                                                    if (isset($users)) {
                                                        echo "<tr><td>Exists.</tr></td>";
                                                    } else {
                                                        echo "<tr><td>Does not exist.</tr></td>";
                                                    }
                                                ?>
                                            </tbody>
                                        </table>
                                    </center>
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="page-footer grey">
        <div class="container">
            <div class="row">
                <div class="col l6 s12">
                    <h5 class="white-text">What is CrossCTF?</h5>
                    <p class="grey-text text-lighten-4">CrossCTF is a cyber security competition organized by NTU with collaboration with NUS Greyhats and SMU Whitehats. This also provides a platform for participants to hack safely in Singapore. The other reason is to promote Cyber Security Capture-The-Flag Competitions in Singapore.</p>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                Made by <a class="white-text text-lighten-3" href="http://materializecss.com">Materialize</a>
            </div>
        </div>
    </footer>


    <!--  Scripts-->
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="js/materialize.js"></script>
    <script src="js/init.js"></script>

</body>
</html>