<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">

    <title>{{ Setting::get('site_title') }}</title>
    <link rel="shortcut icon" type="image/png" href="{{ Setting::get('site_icon') }}">

    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">  
    <link href="css/hamburgers.css" rel="stylesheet">
    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/owl.theme.css" rel="stylesheet">
   
</head>
<body>

<div class="index">
    
        <header>
        
            <div class="container">
            <div class="row">
                <div class="col-md-2 right-padding">
                    <div class="logo" style="margin-top: 5px;margin-bottom: 5px;">
                        <a href=""><img src="{{ Setting::get('site_logo', asset('logo-black.png')) }}" height="100%" /></a>
                    </div>
            </div>
                <div class="col-md-5 left-padding hidden-xs">
                    <div class="left-header">
                        <div class="left-header">
                         <!--div class="dropdown">
                          <button class="dropbtn">Ride</button>
                            <div class="dropdown-content">
                                <div class="ride">
                                    <div class="container">
                                        <a href="#">Overview</a>
                                        <a href="#">How it Works</a>
                                        <a href="#">Fare Estimator</a>
                                        <a href="#">Safety</a>
                                    </div>
                                </div>
                                <div class="ride ride1">
                                   <div class="container">
                                        <a href="#">Cities</a>
                                        <a href="#">Airports</a>
                                    </div>
                                </div>
                            </div>
                        </div-->  
                        </div>
                        <div class="left-header drive">
                            <!--div class="dropdown">
                            <button class="dropbtn">Drive</button>
                                <div class="dropdown-content">
                                    <div class="ride">
                                        <div class="container">
                                            <a href="#">  Overview</a>
                                            <a href="#">Requirements</a>
                                            <a href="#">Driver App</a>
                                            <a href="#">Vehicle Solutions</a>
                                        </div>
                                    </div>
                                    <div class="ride">
                                        <div class="container">
                                            <a href="#">Safety</a>
                                            <a href="#">Local Driver Guide</a>

                                        </div>
                                    </div>
                                </div>
                            </div-->  
                        </div>
                    </div>                              
                </div>
                <div class="col-md-5 help">
                    <div class="right">
                        <ul class="hidden-xs">
                            <li><a href="#">Help</a></li>
                            <li><a href="/Signin">sign in</a></li>                            
                        </ul>
                        <div class="location">
                            <figure>
                                <a href="#"><img src="img/location-hover.png" alt="location" />
                                    <img src="img/location.png" alt="location" class="location-hover" />
                                </a>
                            </figure>
                            
                        </div>
                        <div class="driver-btn">
                            <a href="{{ url('/provider/register') }}" class="btn btn-default">Become a driver</a>
                        </div>
                        
        
         
                        </div>
                    <div class="manu">
                    <div class="hamburger hamburger--3dy-r ">
                                 <div class="hamburger-box">
                                <div class="hamburger-inner"></div>
                                </div>
                            </div>
                            <div class="side_menu" id="left_menu">
                    <div class="menu-list">
            <div class="container">
                <div class="border-bottom">
                    <div class="row">
                    <div class="col-md-6">
                        <div class="right-navbar">
                    <h3>Ride</h3>
                <div class="nav-bar">
                <ul>
                <li><a href="#">Overview</a></li>
                <li><a href="#">How it Works</a></li>
                <li><a href="#">Fare Estimator</a></li>
                <li><a href="#">Safety</a></li>
                <li><a href="#">Cities</a></li>
                <li><a href="#">Airports</a></li>
            </ul>
                </div>
                </div>
                    </div>
                    <div class="col-md-6">
                        <div class="left-navbar">
                    <h3>Drive</h3>
                <div class="nav-bar">
                <ul>
                <li><a href="#">Overview</a></li>
                <li><a href="#">Requirements</a></li>
                <li><a href="#">Driver App</a></li>
                <li><a href="#">Vehicle Solutions</a></li>
                <li><a href="#">Safety</a></li>
                <li><a href="#">Local Driver Guide</a></li>
            </ul>
                </div>
                </div>
                    </div>
                </div>
                </div>                                                      
            </div>
        </div>
                    <div class="eats">
                        <div class="container">
                            <h3>Eats and more</h3>
                    <ul>
                        <li><a href="#">Picndrop Eats</a></li>
                        <li><a href="#">Picndrop for Business</a></li>
                        <li><a href="#">Picndrop Freight</a></li>
                    </ul>
                        </div>
                </div>
                    <div class="delhi-eng">
                        <div class="container">
                            <div class="language-city">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="city1">
                                            <svg viewBox="0 0 64 64" width="20px" height="20px" class="_style_30FFBp _style_4wJp4e" data-reactid="154"><path d="M32.0000114,4c-11.0449219,0-20,8.8027344-20,20c0,6.0996094,2,11.03125,6,16.9375l13.1807709,18.6359062 C31.3796368,59.8575249,31.6893368,59.9997215,31.9991455,60c0.3104134,0.0002785,0.6209373-0.141922,0.820179-0.4265938 L46.0000114,40.9375c4-5.90625,6-10.8378906,6-16.9375C52.0000114,12.8027344,43.0449333,4,32.0000114,4z M32.0000114,36.25 c-6.7655029,0-12.25-5.484375-12.25-12.25s5.4844971-12.25,12.25-12.25s12.25,5.484375,12.25,12.25 S38.7655144,36.25,32.0000114,36.25z" data-reactid="155" fill="#fff"></path></svg>
                                            <h3>Delhi NCR</h3>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="city1">
                                            <a class="_style_1wF5gW" href="#" data-reactid="159"><svg viewBox="0 0 64 64" width="20px" height="20px" class="_style_30FFBp _style_4wJp4e" data-reactid="160"><path d="M33.7021484,4.5913086c-0.3100586-0.0356445-0.6191406-0.0869141-0.934082-0.0869141 c-0.0917969,0-0.1821289,0.0224609-0.2734375,0.0258789c-0.1640625-0.003418-0.3251953-0.0258789-0.4907227-0.0258789 c-15.4384766,0-28,12.5615234-28,28c0,15.4404297,12.5615234,28,28,28c0.1655273,0,0.3266602-0.0224609,0.4907227-0.0258789 c0.0913086,0.003418,0.1816406,0.0258789,0.2734375,0.0258789c0.3149414,0,0.6240234-0.0512695,0.934082-0.0869141 c14.6474609-0.8842773,26.3017578-13.046875,26.3017578-27.9130859S48.3496094,5.4755859,33.7021484,4.5913086z M23.6225586,9.4985352c-2.8369141,3.2744141-5.1401367,7.9755859-6.4057617,13.527832 c-3.934082-0.4277344-6.3081055-0.9248047-7.2651367-1.1547852C12.7148438,16.1616211,17.6171875,11.6938477,23.6225586,9.4985352z M7.4907227,32.5043945c0-2.5683594,0.4008789-5.0439453,1.1357422-7.3710938 c0.6674805,0.1816406,3.2211914,0.8120117,7.9482422,1.3364258c-0.2714844,1.9399414-0.4262695,3.9550781-0.4262695,6.034668 c0,2.6425781,0.2529297,5.1772461,0.6821289,7.5864258c-4.0546875,0.4394531-6.5522461,0.9589844-7.6733398,1.2304688 C8.0957031,38.5810547,7.4907227,35.6152344,7.4907227,32.5043945z M10.6801758,44.5527344 c1.269043-0.2705078,3.5415039-0.6787109,6.8984375-1.0292969c1.3217773,4.8876953,3.4707031,9.0180664,6.0439453,11.9868164 C18.1206055,53.5,13.5366211,49.5869141,10.6801758,44.5527344z M30,56.6972656 c-3-1.2558594-7.4179688-6.4589844-9.2285156-13.4731445C23.375,43.03125,27,42.8925781,30,42.8574219V56.6972656z M30,39.3706055 c-3,0.0385742-7.0830078,0.1928711-9.8671875,0.4086914C19.75,37.4692383,19.640625,35.0249023,19.640625,32.5043945 c0-1.9604492,0.0385742-3.8681641,0.2749023-5.7114258C22.7431641,27.0166016,27,27.1777344,30,27.2177734V39.3706055z M30,23.730957c-3-0.0371094-6.9223633-0.1884766-9.6035156-0.394043C22.0708008,15.5424805,27,9.6606445,30,8.3115234V23.730957z M53.9663086,21.6801758c-0.546875,0.1689453-2.7631836,0.7866211-7.1459961,1.3061523 c-0.9892578-5.2597656-2.7744141-9.7421875-5.1020508-12.9780273 C47.0551758,12.3212891,51.3945312,16.4853516,53.9663086,21.6801758z M34,8.2597656 c3,1.2451172,7.9438477,7.1796875,9.5874023,15.0722656C40.9482422,23.5424805,37,23.6953125,34,23.7324219V8.2597656z M34,27.2177734c3-0.0385742,7.2045898-0.2041016,9.996582-0.4360352c0.2299805,1.8466797,0.2885742,3.7573242,0.2885742,5.7226562 c0,2.5234375-0.0893555,4.9711914-0.4624023,7.2841797C41.0742188,39.5668945,37,39.4072266,34,39.3706055V27.2177734z M34,56.7490234V42.8574219c3,0.0351562,6.6523438,0.1767578,9.222168,0.375C41.4418945,50.3393555,37,55.5878906,34,56.7490234z M41.7182617,55.0019531c2.0976562-2.9155273,3.7685547-6.8291016,4.7993164-11.4272461 c3.4487305,0.3974609,5.6196289,0.8588867,6.715332,1.1357422C50.6064453,49.2602539,46.5742188,52.8969727,41.7182617,55.0019531z M47.1386719,40.1313477c0.3535156-2.4189453,0.5566406-4.9682617,0.5566406-7.6269531 c0-2.0942383-0.1254883-4.1206055-0.3476562-6.0732422c5.3911133-0.6464844,7.7763672-1.4570312,7.934082-1.5131836 L54.71875,23.3271484c1.1518555,2.8388672,1.7998047,5.9316406,1.7998047,9.1772461 c0,3.1831055-0.6289062,6.2177734-1.7387695,9.0102539C53.8164062,41.2329102,51.3945312,40.6313477,47.1386719,40.1313477z" data-reactid="161" fill="#fff"></path></svg></a>
                                            <h3>English</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                
                        
        </div>
    </div>
                        <!--<a href="javascript:void(0)" id="left_menu_open"><img src="img/manu.png" alt="manu"></a>-->
                    </div>    
                </div>
            </div>
        </header>
    
        <div class="signup" style="background-image: url(img/about-background.png);">
            <div class="signup_box">
                <h3 style="font-size: 32px;margin: 21px 0 0 21px;color:black;">Contact Us</h3>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div>
                                <p style="font-size: 1.2em; width: 100%;color:black;margin-top: 38px;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
                            </div>
                            <div>
                                <p style="font-size: 1.2em; width: 100%;color:black;margin-top: 38px;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
                            </div>
                            <div>
                                <p style="font-size: 1.2em; width: 100%;color:black;margin-top: 38px;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
                            </div>
                            <div>
                                <p style="font-size: 1.2em; width: 100%;color:black;margin-top: 38px;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

             
        <div class="pull-app-gutter--sides" data-reactid="460"><div class="_style_14s5D3" data-reactid="461"><div class="_style_RJuQi" data-reactid="462"><div aria-label="Decorative Illustration" class="_style_4EfqLw" data-reactid="463"><div class="isvg loaded" data-reactid="464" style="height: 100%;"><svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1560 197" height="197" width="1560" preserveAspectRatio="xMinYMax meet" style="display: block; height: 100%; width: 100%;"><title>Decorative Illustration</title><desc>Decorative Illustration</desc>
    <defs>
        <pattern id="a___158299693" data-name="2 3 - black" width="5" height="5" patternTransform="translate(726 27)" patternUnits="userSpaceOnUse" viewBox="0 0 5 5">
            <path fill="none" d="M0 0h5v5H0z"></path>
            <path fill="none" d="M0 0h5v5H0z"></path>
            <path fill="none" d="M0 0h5v5H0V0z"></path>
            <path d="M2 2H0V0h2v2z"></path>
        </pattern>
        <pattern id="b___158299693" data-name="SVGID 1" width="5" height="5" patternTransform="translate(841.4 310.4)" patternUnits="userSpaceOnUse" viewBox="0 0 5 5">
            <path fill="none" d="M0 0h5v5H0z"></path>
            <path fill="none" d="M0 0h5v5H0z"></path>
            <path fill="none" d="M0 0h5v5H0V0z"></path>
            <path d="M2 2H0V0h2v2z"></path>
        </pattern>
        <pattern id="c___158299693" data-name="2 3 - black" width="5" height="5" patternTransform="translate(726 30)" patternUnits="userSpaceOnUse" viewBox="0 0 5 5">
            <path fill="none" d="M0 0h5v5H0z"></path>
            <path fill="none" d="M0 0h5v5H0z"></path>
            <path fill="none" d="M0 0h5v5H0V0z"></path>
            <path d="M2 2H0V0h2v2z"></path>
        </pattern>
    </defs>
    <path d="M1498.22 54H1361.5a5.5 5.5 0 0 1 0-11h50.6a23.92 23.92 0 0 0 16.9-7 23.92 23.92 0 0 1 16.9-7h19.33a194.76 194.76 0 0 0-100.59-28H1137c-11.9 0-23.2 3.9-32 12a49.47 49.47 0 0 1-32.8 13H969.9c-22.3 0-43.1 7.5-58.9 22s-37.7 23-60 23H720a137.73 137.73 0 0 0-94 37c-26.1 24.4-61.8 38-98.9 38H510c-26.2 0-50.7 10.2-70 28l-26 23h1146a195.13 195.13 0 0 0-61.78-143zM1297 66a17 17 0 1 1 17-17 17 17 0 0 1-17 17zm162 34h-112a5 5 0 0 1 0-10h15.3a30.48 30.48 0 0 0 21.7-9 30.66 30.66 0 0 1 21.7-9h53.3a14 14 0 0 1 0 28z" style="fill:#00a1ff;"></path>
    <path d="M1536 173a148 148 0 0 0-104-43h-111v67h239zm-613-21h-17v-38a73.89 73.89 0 0 0 17-2v40zm271-80a125.64 125.64 0 0 1 90 37.2V153h-90V72zm-172-1v14l-14-14h14zM574 197h-45c16.4 0 31.9-5.6 45-15v15z" fill="#00a1ff"></path>
    <path fill="#fff" d="M840 32v9h-10v156h48V42h5V32h-43zm115 120h-67l45 45h22v-45zm-32-61h32v61h-32z"></path>
    <path fill="#d6d6d6" d="M928 98h27v2h-27zm0 6h27v2h-27zm0 6h27v2h-27zm0 6h27v2h-27zm0 6h27v2h-27zm0 6h27v2h-27zm0 6h27v2h-27zm0 6h27v2h-27z"></path>
    <path fill="#fff" d="M932 85h36v6h-36z"></path>
    <path d="M932 85l19-19h17v19h-36z" style="fill: rgb(163, 233, 236);"></path>
    <path d="M1022 85l-19-19h-35v19h54z" style="fill: rgb(30, 150, 190);"></path>
    <path d="M979 79v-6h-6l6 6zm13 0v-6h-6l6 6zm13 0v-6h-6l6 6z" style="fill: rgb(163, 233, 236);"></path>
    <path fill="#fff" d="M951 63h17v3h-17zm104 107l-55-55h55v55z"></path>
    <path fill="#d6d6d6" d="M1045 121h2v7h-2zm-8 0h2v7h-2zm-8 0h2v7h-2zm16 13h2v7h-2zm-8 0h2v7h-2zm-8 0h2v7h-2zm16 13h2v7h-2zm-14 1l-1-1h1v1zm8 6h-1l-1-1v-6h2v7z"></path>
    <path d="M679 140h21v8h-21zm0-14h21v8h-21zm0-14h21v8h-21zm0-14v8h24l-8-8h-16z" style="fill: rgb(30, 150, 190);"></path>
    <path fill="#d6d6d6" d="M679 134h21v6h-21zm0-14h21v6h-21zm0-14h17v6h-17z"></path>
    <path d="M679 140v8h-55l8-8h47zm0-14v8h-44l8-8h36zm0-14v8h-35l8-8h27zm0-14v8h-25l8-8h17z" style="fill: rgb(163, 233, 236);"></path>
    <path fill="#fff" d="M643 134h36v6h-36zm9-14h27v6h-27zm10-14h17v6h-17zm634 87l-40-40h-10v-38h50v78z"></path>
    <path d="M1296 107v8h26l-8-8h-18z" style="fill: rgb(30, 150, 190);"></path>
    <path d="M1296 107v8h-50l8.4-8h41.6z" style="fill: rgb(163, 233, 236);"></path>
    <path fill="#d6d6d6" d="M1290 120h2v7h-2zm-8 0h2v7h-2zm-8 0h2v7h-2zm-8 0h2v7h-2zm-8 0h2v7h-2zm-8 0h2v7h-2zm40 13h2v7h-2zm-8 0h2v7h-2zm-8 0h2v7h-2zm-8 0h2v7h-2zm-8 0h2v7h-2zm-8 0h2v7h-2zm40 13h2v7h-2zm-8 0h2v7h-2zm-8 0h2v7h-2zm-8 0h2v7h-2zm-8 0h2v7h-2zm-8 0h2v7h-2zm-494 16h74v35h-74z"></path>
    <path fill="url(#a___158299693)" d="M756 162h74v35h-74z"></path>
    <path d="M756 32v48h-17v6h-25a14 14 0 0 0-14 14v97h56V86h32V0zm212 17h2v14h-2z" fill="#fff"></path>
    <path d="M970 49h6v2h-6z" style="fill: rgb(30, 150, 190);"></path>
    <path fill="#fff" d="M985 49h2v14h-2z"></path>
    <path d="M987 49h6v2h-6z" style="fill: rgb(30, 150, 190);"></path>
    <path fill="#fff" d="M1001 49h2v14h-2z"></path>
    <path d="M1003 49h6v2h-6z" style="fill: rgb(30, 150, 190);"></path>
    <path fill="#d6d6d6" d="M749 167h2v7h-2zm-8 0h2v7h-2zm-8 0h2v7h-2zm16 13h2v7h-2zm-8 0h2v7h-2zm-8 0h2v7h-2zm155-28h18V42h-5V32h-18v10h-5v155h55l-45-45z"></path>
    <path fill="url(#b___158299693)" d="M603 148h41v49h-41z"></path>
    <path fill="#d6d6d6" d="M603 148v49h97v-49h-97zM840 18h2v14h-2zm6 0h2v14h-2z"></path>
    <path d="M1045 13a13.38 13.38 0 0 0-13 13h26a13.38 13.38 0 0 0-13-13z" style="fill: rgb(163, 233, 236);"></path>
    <path d="M1045 13v13h13a13.38 13.38 0 0 0-13-13z" style="fill: rgb(30, 150, 190);"></path>
    <path fill="#fff" d="M1047 111V29h-2v-3h-20v3h-3v82h25z"></path>
    <path fill="#d6d6d6" d="M1041 34h2v7h-2zm0 11h2v7h-2zm0 11h2v7h-2zm0 11h2v7h-2zm0 11h2v7h-2zm-5-44h2v7h-2zm0 11h2v7h-2zm0 11h2v7h-2zm0 11h2v7h-2zm0 11h2v7h-2zm-5-44h2v7h-2zm0 11h2v7h-2zm0 11h2v7h-2zm0 11h2v7h-2zm0 11h2v7h-2zm-5-44h2v7h-2zm0 11h2v7h-2zm0 11h2v7h-2zm0 11h2v7h-2zm0 11h2v7h-2z"></path>
    <path fill="#fff" d="M1142 38h26v100h-26z"></path>
    <path d="M1194 138h-26V38a26 26 0 0 1 26 26v74z" fill="#d6d6d6"></path>
    <path fill="#fff" d="M1123 153h61v44h-61z"></path>
    <path fill="#d6d6d6" d="M1184 153h72v44h-72z"></path>
    <path d="M1199 166a3 3 0 0 0-3 3v28h6v-28a3 3 0 0 0-3-3zm14 0a3 3 0 0 0-3 3v28h6v-28a3 3 0 0 0-3-3zm14 0a3 3 0 0 0-3 3v28h6v-28a3 3 0 0 0-3-3zm14 0a3 3 0 0 0-3 3v28h6v-28a3 3 0 0 0-3-3z" style="fill: rgb(30, 150, 190);"></path>
    <path d="M1145 166a3 3 0 0 0-3 3v28h6v-28a3 3 0 0 0-3-3zm14 0a3 3 0 0 0-3 3v28h6v-28a3 3 0 0 0-3-3zm14 0a3 3 0 0 0-3 3v28h6v-28a3 3 0 0 0-3-3z" fill="#d6d6d6"></path>
    <path d="M727 162v-4h5a17.39 17.39 0 0 0 12-5l2-2h10v11h-29z" style="fill: rgb(163, 233, 236);"></path>
    <path d="M830 162v-4h-4c-4.6 0-9.8-1.8-13-5l-2-2h-55v11h74zm354-9h72a50.17 50.17 0 0 0-36-15 50.83 50.83 0 0 0-36 15z" style="fill: rgb(30, 150, 190);"></path>
    <path fill="#d6d6d6" d="M1300 197l-44-44v44h44zM1142 68h26v2h-26zm0 6h26v2h-26zm0 6h26v2h-26zm0 6h26v2h-26zm0 6h26v2h-26zm0 6h26v2h-26zm0 6h26v2h-26zm0 6h26v2h-26z"></path>
    <path d="M1168 68h26v2h-26zm0 6h26v2h-26zm0 6h26v2h-26zm0 6h26v2h-26zm0 6h26v2h-26zm0 6h26v2h-26zm0 6h26v2h-26zm0 6h26v2h-26z" style="fill: rgb(30, 150, 190);"></path>
    <path d="M1168 41v26h26a26.08 26.08 0 0 0-26-26z" transform="translate(0 -3)" fill="url(#c___158299693)"></path>
    <path fill="#d6d6d6" d="M1335 162h35v35h-35z"></path>
    <path fill="url(#a___158299693)" d="M1335 162h35v35h-35z"></path>
    <path d="M1335 162h-26l13-13 13 13z" style="fill: rgb(163, 233, 236);"></path>
    <path d="M1357 149h-35l13 13h35l-13-13zm-493 30v2a5.06 5.06 0 0 1-1.7 3.3l-2 2-.3.3V179h-2v18h2v-5.5a6.29 6.29 0 0 1 1.7-3.8l2-2a7 7 0 0 0 2.3-4.7v-2h-2zm77 7h2v11h-2zm-227 0h2v11h-2z" style="fill: rgb(30, 150, 190);"></path>
    <path fill="#d6d6d6" d="M968 63h35v3h-35z"></path>
    <path d="M490 197a42.44 42.44 0 0 1-30.5-12.9C449.6 174.2 436 168 422 168h-38c-8 0-15.3-2.3-21-8a31.79 31.79 0 0 0-22-9h-80a41.11 41.11 0 0 1-29-12 41.11 41.11 0 0 0-29-12H100a72.29 72.29 0 0 0-51 21L0 197h490z" fill="#00a1ff"></path>
    <path d="M1297 27a22 22 0 1 0 22 22 22 22 0 0 0-22-22zm0 39a17 17 0 1 1 17-17 17 17 0 0 1-17 17z" style="fill: rgb(15, 78, 101);"></path>
    <path d="M647 151v32h2v-30l-2-2zm8 8v24h2v-22l-2-2zm8 8v16h2v-14l-2-2zm8 8v8h2v-6l-2-2z" style="fill: rgb(30, 150, 190);"></path>
    <path d="M603 148h-17.8a11.18 11.18 0 0 0-11.2 11.16V197h29v-49z" fill="#fff"></path>
    <path d="M685 151h2v32h-2zm7 0h2v32h-2zM883 48h7v2h-7zm11 0h7v2h-7zm-11 6h7v2h-7zm11 0h7v2h-7zm-11 6h7v2h-7zm11 0h7v2h-7zm-11 6h7v2h-7zm11 0h7v2h-7zm-11 6h7v2h-7zm11 0h7v2h-7zm-11 6h7v2h-7zm11 0h7v2h-7zm-11 6h7v2h-7zm11 0h7v2h-7zm-11 6h7v2h-7zm11 0h7v2h-7zm-11 6h7v2h-7zm11 0h7v2h-7zm-11 6h7v2h-7zm11 0h7v2h-7zm-11 6h7v2h-7zm11 0h7v2h-7zm-11 6h7v2h-7zm11 0h7v2h-7zm-11 6h7v2h-7zm11 0h7v2h-7zm-11 6h7v2h-7zm11 0h7v2h-7zm-11 6h7v2h-7zm11 0h7v2h-7zm-11 6h7v2h-7zm11 0h7v2h-7zm-11 6h7v2h-7zm11 0h7v2h-7zm229-6h19v15h-19z" style="fill: rgb(30, 150, 190);"></path>
    <path d="M1220 138h-78v15h42a50.83 50.83 0 0 1 36-15z" style="fill: rgb(163, 233, 236);"></path>
    <path fill="#d6d6d6" d="M1335 173h-13v-58h-26v82h39v-24z"></path>
    <path d="M1316 120h2v7h-2zm-8 0h2v7h-2zm-8 0h2v7h-2zm16 13h2v7h-2zm-8 0h2v7h-2zm-8 0h2v7h-2zm16 13h2v7h-2zm-8 0h2v7h-2zm-8 0h2v7h-2z" style="fill: rgb(30, 150, 190);"></path>
    <path d="M826 158h4v-44h-12v42.3a20.53 20.53 0 0 0 8 1.7z" fill="#00a1ff"></path>
    <path d="M813 153a16.56 16.56 0 0 0 4.3 3h.7V0h-30v86h-32v65h55zm-99-60h42v2h-42zm0 6h42v2h-42zm0 6h42v2h-42zm0 6h42v2h-42zm0 6h42v2h-42zm0 6h42v2h-42zm0 6h42v2h-42zm0 6h42v2h-42z" fill="#d6d6d6"></path>
    <path d="M756 93h34v2h-34zm0 6h34v2h-34zm0 6h34v2h-34zm0 6h34v2h-34zm0 6h34v2h-34zm0 6h34v2h-34zm0 6h34v2h-34zm0 6h34v2h-34zM796 0h2v137h-2zm6 0h2v137h-2zm6 0h2v137h-2z" style="fill: rgb(30, 150, 190);"></path>
    <path fill="#fff" d="M644 148h35v35l-35-35z"></path>
    <path fill="#d6d6d6" d="M649 153v-2h-2l2 2zm8 8v-10h-2v8l2 2zm8 8v-18h-2v16l2 2zm8 8v-26h-2v24l2 2z"></path>
    <path d="M1123 72h19v66h-19z" fill="#00a1ff"></path>
    <path fill="#d6d6d6" d="M1062 29v-3h-17v3h2v80l-18-18h-7v-6h-54v6h-13v106h100v-27l-55-55h65V29h-3z"></path>
    <path d="M1060 34h2v7h-2zm0 11h2v7h-2zm-5-11h2v7h-2zm0 11h2v7h-2zm-5-11h2v7h-2zm0 11h2v7h-2zm-95 53h74v2h-74zm0 6h74v2h-74zm0 6h74v2h-74zm0 6h45v2h-45zm0 6h45v2h-45zm0 6h45v2h-45zm0 6h45v2h-45zm0 6h45v2h-45z" style="fill: rgb(30, 150, 190);"></path>
    <path d="M1024.3 158.6a2 2 0 0 0-3.3 1.4v11l-12.7-12.4a2 2 0 0 0-3.3 1.4v11l-12.7-12.4a2 2 0 0 0-3.3 1.4v11l-12.7-12.4a2 2 0 0 0-3.3 1.4v37h64v-26z" fill="#fff"></path>
    <path fill="#d6d6d6" d="M977 177h7v2h-7zm11 0h7v2h-7zm11 0h7v2h-7zm11 0h7v2h-7zm-33 6h7v2h-7zm11 0h7v2h-7zm11 0h7v2h-7zm11 0h7v2h-7zm-33 6h7v2h-7zm11 0h7v2h-7zm11 0h7v2h-7zm11 0h7v2h-7z"></path>
    <path d="M1043 177h7v2h-7zm0 6h7v2h-7zm0 6h7v2h-7z" style="fill: rgb(30, 150, 190);"></path>
    <path fill="#d6d6d6" d="M1021 147h2v7h-2zm-8 0h2v7h-2zm-8 0h2v7h-2z"></path>
    <path d="M1029 147h2v7h-2zm-8 0h2v7h-2zm-8 0h2v7h-2zm-8 0h2v7h-2z" style="fill: rgb(30, 150, 190);"></path>
    <path fill="#d6d6d6" d="M1013 134h2v7h-2zm-8 0h2v7h-2z"></path>
    <path d="M1013 134h2v7h-2zm-8 0h2v7h-2zm0-13v7h2v-6l-1-1h-1z" style="fill: rgb(30, 150, 190);"></path>
    <path fill="#d6d6d6" d="M1021 121h2v7h-2zm-8 0h2v7h-2zm10 20l-2-2v-5h2v7z"></path>
    <path d="M1039 154h-2v-2l2 2z" style="fill: rgb(30, 150, 190);"></path>
    <path fill="url(#a___158299693)" d="M603 148h41v49h-41z"></path>
    <path fill="#fff" d="M1335 162h-26l26 26v-26z"></path>
    <path d="M1335 162h-26l13-13 13 13z" style="fill: rgb(163, 233, 236);"></path>
    <path fill="#d6d6d6" d="M1329 166h2v7h-2zm-8 0h2v7h-2z"></path>
    <path d="M1293 197c6.2 0 13.6-2.6 18-7a28 28 0 0 1 20-8h20a17.84 17.84 0 0 0 12-5c2-2 4.4-4.2 7-5v25h-77z" fill="#00a1ff"></path>
    <path d="M1023 141h-2v-5l2 2v3z" style="fill: rgb(30, 150, 190);"></path>
    <path d="M718.5 186h-10a3.54 3.54 0 0 1-3.5-3.5 3.54 3.54 0 0 1 3.5-3.5h1.1a3.49 3.49 0 0 0 2.4-1 3.49 3.49 0 0 1 2.4-1h4.1a4.48 4.48 0 0 1 4.5 4.46 4.48 4.48 0 0 1-4.46 4.5zM848 175.5a3.54 3.54 0 0 1 3.5-3.5 6 6 0 0 0 4.3-1.8l.2-.2a6.73 6.73 0 0 1 4.8-2h7.7a5.55 5.55 0 0 1 5.5 5.5 5.55 5.55 0 0 1-5.5 5.5h-17a3.54 3.54 0 0 1-3.5-3.5zm88.5 10.5H948a3 3 0 0 0 3-3 3 3 0 0 0-3-3h-.9a4.91 4.91 0 0 1-3.6-1.5 5.07 5.07 0 0 0-3.6-1.5h-3.4a4.4 4.4 0 0 0-4.4 4.4v.1a4.34 4.34 0 0 0 4.18 4.5h.22z" style="fill: rgb(163, 233, 236);"></path>
    <path fill="#d6d6d6" d="M1007 122l-1-1h1v1z"></path>
    <path d="M1099 50h-24a19.93 19.93 0 0 0-20 19.86V197h44V50z" fill="#fff"></path>
    <path fill="#d6d6d6" d="M1072 58h2v57h-2zm7 0h2v57h-2zm9 63l-2-2V58h2v63zm7 7l-2-2V58h2v70z"></path>
    <path fill="#d6d6d6" d="M1123 153V50h-24v81l-16 -16h-28v82h112l-44-44z"></path>
    <path d="M1088 151h-2v-33l2 2v31zm7 0h-2v-26l2 2v24zm-17-30h2v7h-2zm-8 0h2v7h-2zm-8 0h2v7h-2zm16 13h2v7h-2zm-8 0h2v7h-2zm-8 0h2v7h-2zm16 13h2v7h-2zm-8 0h2v7h-2zm-8 0h2v7h-2zm20 32v2a5.06 5.06 0 0 1-1.7 3.3l-2 2-.3.3V179h-2v18h2v-5a7.43 7.43 0 0 1 1.7-4.3l2-2a7 7 0 0 0 2.3-4.7v-2h-2z" style="fill: rgb(30, 150, 190);"></path>
    <path d="M1066 175.6a3.46 3.46 0 0 1 3.5-3.4h1.2a4 4 0 0 0 2.5-1l2.2-2.1a3.74 3.74 0 0 1 2.5-1h8.6a5.57 5.57 0 0 1 5.6 5.5 5.57 5.57 0 0 1-5.6 5.5h-16.9a3.63 3.63 0 0 1-3.6-3.5z" fill="#fff"></path>
    <path d="M1106 186h2v11h-2z" style="fill: rgb(30, 150, 190);"></path>
    <path d="M1101.5 186h11.5a3 3 0 0 0 3-3 3 3 0 0 0-3-3h-.9a4.91 4.91 0 0 1-3.6-1.5 5.08 5.08 0 0 0-3.6-1.5h-3.4a4.4 4.4 0 0 0-4.4 4.4v.1a4.34 4.34 0 0 0 4.18 4.5h.22z" fill="#fff"></path>
    <path d="M1106 58h2v93h-2zm7 0h2v93h-2z" style="fill: rgb(30, 150, 190);"></path>
    <path d="M1297 20a32 32 0 1 0 32 32 32 32 0 0 0-32-32zm0 49a17 17 0 1 1 17-17 17 17 0 0 1-17 17z" transform="translate(0 -3)" fill="url(#c___158299693)"></path>
</svg>
</div></div></div></div></div>
        <footer>
            <div class="container">
                <div class="footer-topborder">
                <div class="row">
                    <div class="col-md-4 footer-uber">
                        <div class="footer-topheading">
                <img src="{{ Setting::get('site_logo', asset('logo-black.png')) }}" width="60%" height="60%" />
            </div>
                    </div>
                    <div class="col-md-4 footer-signup">    
                        <div class="footer-topbtn">
                        <a href="/login" class="btn btn-default">SIGN UP TO RIDE</a>
            </div>
                    </div>
                    <div class="col-md-4 footer-becomedriver">
                        <div class="footer-topbtn border">
                        <a href="{{ url('/provider/register') }}" class="btn btn-default">Become a driver</a>
            </div>
                    </div>
                </div>
                </div>
                <div class="bottom-footer">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="location-footer">
                                <ul class="app">
                                    <li>
                                        <a href="{{Setting::get('store_link_ios','#')}}">
                                            <img src="{{asset('asset/img/appstore.png')}}" width="30%" height="30%">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{Setting::get('store_link_android','#')}}">
                                            <img src="{{asset('asset/img/playstore.png')}}" width="30%" height="30%">
                                        </a>
                                    </li>                                                        
                                </ul>       
                            </div>
                            <div class="social-media">
                                <ul> 
                                    <li><a href="#"><img src="img/facebook.png" alt="facebook"/></a></li>
                                    <li><a href="#"><img src="img/google-plus.png" alt="facebook"/></a></li>
                                    <li><a href="#"><img src="img/twitter.png" alt="facebook"/></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="footer-manu">
                        <ul>
                            <li><a  href="/about_us" >About Us</a></li>
                            <li><a  href="/contact_us" >Contact Us</a></li>
                            <li><a href="/help">Help</a></li>
                            <li><a  href="/terms">Terms and Condition</a></li>
                            <li><a href="/privacy">Privacy Policy</a></li>
                        </ul>
                    </div>
                        </div>
                        <div class="col-md-4">
                            <div class="menu-right">
                        <ul>
                            <li><a href="/user">User</a></li>
                            <li ><a href="/driver">Driver</a></li>
                            <li><a href="/login">Login</a></li>
                            <li><a href="/register">Signup</a></li>
                        </ul>
                    </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </footer>
    </div>
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.js"></script>
    <script>
        $("#left_menu_open").click(function(){
            $("#left_menu").addClass("open");
        });
        $(".close").click(function(){
            $("#left_menu").removeClass("open");
        });
        
        $(".hamburger").click(function(){
            $(".side_menu").toggleClass("open");
        }); 
    </script> 
    <script>
    var forEach=function(t,o,r){if("[object Object]"===Object.prototype.toString.call(t))for(var c in t)Object.prototype.hasOwnProperty.call(t,c)&&o.call(r,t[c],c,t);else for(var e=0,l=t.length;l>e;e++)o.call(r,t[e],e,t)};

    var hamburgers = document.querySelectorAll(".hamburger");
    if (hamburgers.length > 0) {
      forEach(hamburgers, function(hamburger) {
        hamburger.addEventListener("click", function() {
          this.classList.toggle("is-active");
        }, false);
      });
    }
  </script> 
   
  <script>
    $(document).ready(function() {
      $("#owl-demo2").owlCarousel({
        autoPlay: 3000,
        items :3,
        autoPlay:true,
        navigation:true,
        navigationText:true,
        pagination:true,
        itemsDesktop : [1350,3],
        itemsDesktop : [1199,2],
        itemsDesktopSmall : [991,1],
        itemsTablet: [767,1], 
        itemsMobile : [560,1] 
      });

    });    
</script>   
 <!-- <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script> -->
 <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDFVF5e-GYymNXLfS9567IcpHiAiuhfFzI&libraries=places&callback=init" async defer></script>
        
        <script type="text/javascript">
            // When the window has finished loading create our google map below
            //google.maps.event.addDomListener(window, 'load', init);
        
            function init() {
                // Basic options for a simple Google Map 
                // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
                var mapOptions = {
                    // How zoomed in you want the map to start at (always required)
                    zoom: 11,

                    // The latitude and longitude to center the map (always required)
                    center: new google.maps.LatLng(40.6700, -73.9400), // New York

                    // How you would like to style the map. 
                    // This is where you would paste any style found on Snazzy Maps.
                    styles: [{"featureType":"all","elementType":"all","stylers":[{"hue":"#e7ecf0"}]},{"featureType":"poi","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"poi","elementType":"labels.text","stylers":[{"visibility":"off"}]},{"featureType":"poi","elementType":"labels.icon","stylers":[{"visibility":"on"}]},{"featureType":"poi.park","elementType":"geometry.fill","stylers":[{"color":"#8ed863"}]},{"featureType":"road","elementType":"all","stylers":[{"saturation":-70}]},{"featureType":"transit","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"all","stylers":[{"visibility":"simplified"},{"saturation":-60}]},{"featureType":"water","elementType":"geometry.fill","stylers":[{"color":"#8abdec"}]},{"featureType":"water","elementType":"geometry.stroke","stylers":[{"color":"#9cbbf0"}]},{"featureType":"water","elementType":"labels.text","stylers":[{"visibility":"off"}]}]
                };

                // Get the HTML DOM element that will contain your map 
                // We are using a div with id="map" seen below in the <body>
                var mapElement = document.getElementById('map');

                // Create the Google Map using our element and options defined above
                var map = new google.maps.Map(mapElement, mapOptions);

                // Let's also add a marker while we're at it
                var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(40.6700, -73.9400),
                    map: map,
                    title: 'Snazzy!'
                });
            }
        </script>
</body>
</html>