<? require_once("/var/www/html/scripts/root.php"); ?>
<? session_start(); ?>
<!DOCTYPE html>
<html><!-- InstanceBegin template="/Templates/Default.dwt" codeOutsideHTMLIsLocked="false" -->
    <head>
        <!-- InstanceBeginEditable name="doctitle" -->
        <title>Skyland | Admin</title>
        <!-- InstanceEndEditable -->
        
        <link rel="stylesheet" type="text/css" href="/styles/root.css" />
        <link href='http://fonts.googleapis.com/css?family=Arimo|Lobster' rel='stylesheet' type='text/css' />
        
        <!-- InstanceBeginEditable name="head" -->
        <link rel="canonical" href="http://skyland.loop404.com:8080/about" />
        <!-- InstanceEndEditable -->
    </head>
    <body>
        <div class="container banner-container">
            <div id="header">
                <a id="title" href="/">Skyland</a>
            </div>
            <div id="navbar">
                <ul>
                    <li>
                        <a href="/">Home</a>
                    </li>
                    <li>
                        <a href="/about">About</a>
                    </li>
                    <li>
                        <a href="/development">Development</a>
                    </li>
                    <li>
                        <a href="/downloads">Downloads</a>
                    </li>
                    <li>
                        <a href="/faq">FAQ</a>
                    </li>
                </ul>
            </div>
        </div>
        
        <!-- InstanceBeginEditable name="page-content" -->
        <div class="container">
            <div id="content">
                <h1 id="page-title">Administration</h1>
<? if (!logged_in()) { ?>
                <p>If you don&rsquo;t belong here, go away.</p>
                <form method="post" action="/process?a=0">
                    <table>
                        <tr>
                            <td>Username: </td>
                            <td>
                                <input type="text" name="username" placeholder="Username" />
                            </td>
                        </tr>
                        <tr>
                            <td>Password: </td>
                            <td>
                                <input type="password" name="password" placeholder="Password" />
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <input type="submit" value="Login" />
                            </td>
                        </tr>
                    </table>
                </form>
<? } else { ?>
                <p>Welcome, <?= $_SESSION["user"]->username; ?>!</p>
<? } ?>
            </div>
        </div>
        <!-- InstanceEndEditable -->
        <!-- Google Analytics -->
        <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
        
        ga('create', 'UA-5005200-15', 'auto');
        ga('send', 'pageview');
        </script>
        <!-- /Google Analytics -->
    </body>
<!-- InstanceEnd --></html>
