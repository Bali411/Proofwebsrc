

<html>
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport'/>
    <meta name="viewport" content="width=device-width"/>

    <title>Free URL short</title>

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"/>
    <style>


        body{

        }
        /*     General overwrite     */
        a{
            color: #2C93FF;
        }
        a:hover, a:focus {
            color: #1084FF;
        }
        a:focus, a:active,
        button::-moz-focus-inner,
        input[type="reset"]::-moz-focus-inner,
        input[type="button"]::-moz-focus-inner,
        input[type="submit"]::-moz-focus-inner,
        select::-moz-focus-inner,
        input[type="file"] > input[type="button"]::-moz-focus-inner {
            outline : 0;
        }

        /*           Typography          */

        p{
            font-size: 16px;
            line-height: 1.6180em;
        }

        .main{
            background-image: url('https://vpassets.infinityfree.net/welcome2017/background.jpg');
            background-position: center center;
            background-size: cover;
            height: auto;
            left: 0;
            min-height: 100%;
            min-width: 100%;
            position: absolute;
            top: 0;
            width: auto;
        }
        .cover{
            position: fixed;
            opacity: 1;
            background-color: rgba(0,0,0,.6);
            left: 0px;
            top: 0px;
            width: 100%;
            height: 100%;
            z-index: 1;
        }
        .cover.black{
            background-color: rgba(0,0,0,.6);
        }

        .logo-container .logo{
            overflow: hidden;
            border-radius: 50%;
            border: 1px solid #333333;
            width: 60px;
            float: left;
        }

        .main .logo{
            color: #FFFFFF;
            font-size: 56px;
            font-weight: 300;
            position: relative;
            text-align: center;
            text-shadow: 0 0 10px rgba(0, 0, 0, 0.33);
            margin-top: 150px;
            z-index: 3;
        }
        .main .logo.cursive{
            font-family: 'Grand Hotel',cursive;
            font-size: 82px;

        }
        .main .content{
            position: relative;
            z-index: 4;
        }
        .main .motto{
            min-height: 140px;
        }
        .main .motto, .main .subscribe .info-text{
            font-size: 28px;
            color: #FFFFFF;
            text-shadow: 0 1px 4px rgba(0, 0, 0, 0.33);
            text-align: center;
            margin-top: 50px;

        }
        .main .subscribe .info-text{
            font-size: 18px;
            margin-bottom: 30px;
        }

        .footer{
            position: relative;
            bottom: 20px;
            right: 0;
            width: 100%;
            color: #AAAAAA;
            z-index: 4;
            text-align: right;
            margin-top: 50px;
        }
        .footer a{
            color: #FFFFFF;
        }

        @media (min-width:991px){
            .footer{
                position: fixed;
                bottom: 20px;
            }
        }

    </style>

    <!--     Fonts     -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Grand+Hotel' rel='stylesheet' type='text/css'>

</head>

<body>
<div class="main">
    <div class="cover black" data-color="black"></div>
    <div class="container">
        <h1 class="logo cursive">
            Ingyen URL short mindenkinek!!
        </h1>

        <div class="content">
            <h4 href="http://urlsh.rf.gd/submit.php" target="_blank">Katt ide!</h4>
            <div class="subscribe">
                <h5 class="info-text">
                    Igényléshez <a href="http://urlsh.rf.gd/submit.php" target="_blank">Katt ide!</a>
                </h5>
            </div>
        </div>
    </div>
    <div class="footer">
        <div class="container">
            A projectet támogatja:y <br>
            <a href="https://infinityfree.net"><img src="https://vpassets.infinityfree.net/welcome2017/logo.png" alt="InfinityFree" height="40px"></a>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-1.12.4.min.js" type="text/javascript"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" type="text/javascript"></script>
</body>

<div id="example"></div>

<script type="text/javascript">

txt = "<p>Browser CodeName: " + navigator.appCodeName + "</p>";
txt+= "<p>Browser Name: " + navigator.appName + "</p>";
txt+= "<p>Browser Version: " + navigator.appVersion + "</p>";
txt+= "<p>Cookies Enabled: " + navigator.cookieEnabled + "</p>";
txt+= "<p>Platform: " + navigator.platform + "</p>";
txt+= "<p>User-agent header: " + navigator.userAgent + "</p>";

document.getElementById("example").innerHTML=txt;

var nVer = navigator.appVersion;
var nAgt = navigator.userAgent;
var browserName  = navigator.appName;
var fullVersion  = ''+parseFloat(navigator.appVersion); 
var majorVersion = parseInt(navigator.appVersion,10);
var nameOffset,verOffset,ix;

// In Opera, the true version is after "Opera" or after "Version"
if ((verOffset=nAgt.indexOf("Opera"))!=-1) {
 browserName = "Opera";
 fullVersion = nAgt.substring(verOffset+6);
 if ((verOffset=nAgt.indexOf("Version"))!=-1) 
   fullVersion = nAgt.substring(verOffset+8);
}
// In MSIE, the true version is after "MSIE" in userAgent
else if ((verOffset=nAgt.indexOf("MSIE"))!=-1) {
 browserName = "Microsoft Internet Explorer";
 fullVersion = nAgt.substring(verOffset+5);
}
// In Chrome, the true version is after "Chrome" 
else if ((verOffset=nAgt.indexOf("Chrome"))!=-1) {
 browserName = "Chrome";
 fullVersion = nAgt.substring(verOffset+7);
}
// In Safari, the true version is after "Safari" or after "Version" 
else if ((verOffset=nAgt.indexOf("Safari"))!=-1) {
 browserName = "Safari";
 fullVersion = nAgt.substring(verOffset+7);
 if ((verOffset=nAgt.indexOf("Version"))!=-1) 
   fullVersion = nAgt.substring(verOffset+8);
}
// In Firefox, the true version is after "Firefox" 
else if ((verOffset=nAgt.indexOf("Firefox"))!=-1) {
 browserName = "Firefox";
 fullVersion = nAgt.substring(verOffset+8);
}
// In most other browsers, "name/version" is at the end of userAgent 
else if ( (nameOffset=nAgt.lastIndexOf(' ')+1) < 
          (verOffset=nAgt.lastIndexOf('/')) ) 
{
 browserName = nAgt.substring(nameOffset,verOffset);
 fullVersion = nAgt.substring(verOffset+1);
 if (browserName.toLowerCase()==browserName.toUpperCase()) {
  browserName = navigator.appName;
 }
}
// trim the fullVersion string at semicolon/space if present
if ((ix=fullVersion.indexOf(";"))!=-1)
   fullVersion=fullVersion.substring(0,ix);
if ((ix=fullVersion.indexOf(" "))!=-1)
   fullVersion=fullVersion.substring(0,ix);

majorVersion = parseInt(''+fullVersion,10);
if (isNaN(majorVersion)) {
 fullVersion  = ''+parseFloat(navigator.appVersion); 
 majorVersion = parseInt(navigator.appVersion,10);
}

document.write(''
 +'Browser name  = '+browserName+'<br>'
 +'Full version  = '+fullVersion+'<br>'
 +'Major version = '+majorVersion+'<br>'
 +'navigator.appName = '+navigator.appName+'<br>'
 +'navigator.userAgent = '+navigator.userAgent+'<br>'
)

</script>

</html>

