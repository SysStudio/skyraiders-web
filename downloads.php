<? session_start(); ?>
<!DOCTYPE html>
<html><!-- InstanceBegin template="/Templates/Default.dwt" codeOutsideHTMLIsLocked="false" -->
    <head>
        <!-- InstanceBeginEditable name="doctitle" -->
        <title>Skyland</title>
        <!-- InstanceEndEditable -->
        
        <link rel="stylesheet" type="text/css" href="/styles/root.css" />
        <link href='http://fonts.googleapis.com/css?family=Arimo|Lobster' rel='stylesheet' type='text/css' />
        
        <!-- InstanceBeginEditable name="head" -->
        <link rel="canonical" href="http://skyland.loop404.com:8080/downloads" />
        <link rel="stylesheet" type="text/css" href="/styles/download.css" />
        <script type="text/javascript" src="/js/jquery-1.11.1.min.js"></script>
        <script type="text/javascript" src="/js/download.js"></script>
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
                <h1 id="page-title">Downloads</h1>
                <p>Current downloads are pre-alpha material, meaning very little will remain the same,
                    bugs should be expected, and graphics, in general, will be minimal.
                    These are not for the faint of heart, you have been warned.</p>
                
                <p>Binaries will generally be packaged for Linux, Windows, and Mac OSX
                    with an x86 instruction set (compatible with most 32- and 64-bit machines).
                    Current development is mostly on Linux so packages come faster.</p>

                
                <div id="download-pane">
                    <ul>
                        <li id="download-tab-windows">
                            <a class="download-tab-link windows" href="#download-windows" id="download-link-windows" title="Windows">Windows</a>
                        </li>
                        <li id="download-tab-linux">
                            <a class="download-tab-link linux" href="#download-linux" id="download-link-linux" title="Linux">Linux</a>
                        </li>
                        <li id="download-tab-mac">
                            <a class="download-tab-link mac" href="#download-mac" id="download-link-mac" title="Mac OSX">Mac OSX</a>
                        </li>
                    </ul>
                    <div id="download-content-pane">
                        <div class="download-content download-content-windows">
                            <div class="download-tile">
                                <p class="download-name">Flight Test</p>
                                <p><a class="download-link" href="/media/downloads/flight-test/0.0.1x/flight-test-0.0.115g_win.zip">Windows 32bit</a></p>
                                <p><a class="download-link" href="https://github.com/SysStudio/flightsystem">Source Code</a></p>
                                <p class="download-version">0.0.115g</p>
                            </div>
                            
                            <hr />

							<div class="download-tile">
                                <p class="download-name">3rdPerson Test</p>
                                <p><a class="download-link" href="/media/downloads/3rdperson-test/3rdperson_win.zip">Windows 32-bit</a></p>
                                <p class="download-version">0.0.115</p>
                            </div>
                            
                            <hr />
                            
                            <div class="download-tile">
                                <p class="download-name">Neo Editor (Game Engine source code)</p>
                                <p><a class="download-link" href="https://github.com/Sponk/NeoEditor">Engine Source Code</a></p>
                                <p class="download-version">0.3</p>
                            </div>
                        </div>
                        <div class="download-content download-content-linux">
                            <div class="download-tile">
                                <p class="download-name">Flight Test</p>
                                <p><a class="download-link" class="download-link" href="/media/downloads/flight-test/0.0.1x/flight-test-0.0.117_linux.tar.gz">Linux 32-bit</a></p>
                                <p><a class="download-link" class="download-link" href="https://github.com/SysStudio/flightsystem">Source Code</a></p>
                                <p class="download-version">0.0.117</p>
                            </div>
                            
                            <hr />

                            <div class="download-tile">
                                <p class="download-name">3rdPerson Test</p>
                                <p><a class="download-link" href="/media/downloads/3rdperson-test/3rdperson_linux.zip">Linux 32-bit</a></p>
                                <p class="download-version">0.0.115</p>
                            </div>
                            
                            <hr />
                            
                            <div class="download-tile">
                                <p class="download-name">Neo Editor (Game Engine)</p>
                                <p><a class="download-link" href="https://github.com/Sponk/NeoEditor">Engine Source Code</a></p>
                                <p class="download-version">0.3</p>
                            </div>
                        </div>
                        <div class="download-content download-content-mac">
                            <div class="download-tile">
                                <p class="download-name">Flight Test</p>
                                <p>No Mac binary! If you have Apple hardware and would like to help compile binaries, contact us.</p>
                                <p><a class="download-link" href="https://github.com/SysStudio/flightsystem">Source Code</a></p>
                                <p class="download-version">0.0.117</p>
                            </div>
                            
                            <hr />
                            
                            <div class="download-tile">
                                <p class="download-name">Neo Editor (Game Engine)</p>
                                <p><a class="download-link" href="https://github.com/Sponk/NeoEditor">Engine Source Code</a></p>
                                <p class="download-version">0.3</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!--
                <div class="tile-group">    
                    <div class="tile download-tile">
                        <span class="download-name">Flight System</span>       
                        <a class="download-link download-link-linux" href="/media/downloads/Linux_x86.tar.gz">Linux x86</a>
                        <a class="download-link download-link-windows" href="/media/downloads/Windows_x86.zip">Windows x86</a>
                        <a class="download-link download-link-mac" href="/media/downloads/Mac_x86.zip">Mac x86</a>
                        <span class="download-version">v.0.0.110a testing</span>
                    </div>
                </div>
                -->
                
                <!-- <br /><br /> -->
                
                <p>We do this for feedback so we can further improve the game,
                so we would love to hear from you.</p>
                <p>Contact info: <a href="mailto:skylanddevelopment@gmail.com">skylanddevelopment@gmail.com</a>.</p>
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
