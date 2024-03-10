<?php
  include $_SERVER['DOCUMENT_ROOT'] . '/config/main.php';
?>


<!DOCTYPE html>
<!--[if IE 8]><html class="ie8" ng-app="robloxApp"><![endif]-->
<!--[if gt IE 8]><!-->
<html>
<!--<![endif]-->
<head>
    <!-- MachineID: WEB294 -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,requiresActiveX=true"/>
    <meta name="author" content="ROBLOX Corporation"/>
    <meta name="description" content="User-generated MMO gaming site for kids, teens, and adults. Players architect their own worlds. Builders create free online games that simulate the real world. Create and play amazing 3D games. An online gaming cloud and distributed physics engine."/>
    <meta name="keywords" content="free games, online games, building games, virtual worlds, free mmo, gaming cloud, physics engine"/>
    <meta name="apple-itunes-app" content="app-id=431946152"/>

    <title>ROBLOX.com</title>
    <link rel="icon" type="image/vnd.microsoft.icon" href="/favicon.ico"/>

    
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700" rel="stylesheet" type="text/css">

    
    
<link rel="stylesheet" href="/CSS/LeanBase/1.css"/>


    
    
<link rel="stylesheet" href="/CSS/Pages/1.css"/>


    
    <script type="text/javascript" src="/js/1.js"></script>


    
    

    
    <!--[if lt IE 9]>
        <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
      <script type="text/javascript">

        var _gaq = _gaq || [];

        _gaq.push(['_setAccount', 'UA-11419793-1']);
        _gaq.push(['_setCampSourceKey', 'rbx_source']);
        _gaq.push(['_setCampMediumKey', 'rbx_medium']);
        _gaq.push(['_setCampContentKey', 'rbx_campaign']);
            _gaq.push(['_setDomainName', 'roblox.com']);
    _gaq.push(['b._setAccount', 'UA-486632-1']);
    _gaq.push(['b._setCampSourceKey', 'rbx_source']);
    _gaq.push(['b._setCampMediumKey', 'rbx_medium']);
    _gaq.push(['b._setCampContentKey', 'rbx_campaign']);

    _gaq.push(['b._setDomainName', 'roblox.com']);
        
            _gaq.push(['b._setCustomVar', 1, 'Visitor', 'Anonymous', 2]);
            _gaq.push(['b._trackPageview']);    
        
        
        

    _gaq.push(['c._setAccount', 'UA-26810151-2']);
    _gaq.push(['c._setDomainName', 'roblox.com']);

    (function() {
      var ga = document.createElement('script');
      ga.type = 'text/javascript';
      ga.async = true;
      ga.src = ('https:' == document.location.protocol ? '/https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
      var s = document.getElementsByTagName('script')[0];
      s.parentNode.insertBefore(ga, s);
    })();

  </script>

</head>
<body>
<div id="fb-root"></div>
    

<style type="text/css">
    .coverSprite {
        background-repeat: no-repeat;
        background-image: url('/img/20e7d1543d2c5caf201184d86530fc35.png');
    }

    #RollerContainer {
        background-image: url('/img/dcbdfaf1c08058e71f65c09f7b98ff04.jpg');
        background-repeat: no-repeat;
        background-size: cover;
    }

    .special-dropdown select {
        border: 0 !important;
        -webkit-appearance: none;
        -moz-appearance: none;
        background: url('/img/379f4f1018f31cbb62ef52a22d9f2118.png') no-repeat;
        background-position: 92% 40%;
        width: 100px;
        text-indent: 0.01px;
        text-overflow: "";
    }
    #InnerWhatsRobloxContainer1 {
        height: 70%;
        background-image: url('/img/cca69eca62f23ca413fc920549e936ea.jpg');
        background-repeat: no-repeat;
        background-size: cover;
        background-position: 30% center;
        color: white;
    }
    #GameImage1 {
        background-image: url('/img/42268b6264d89827401ef912f174f288.jpg');
        margin-right: 5px;
    }

    #GameImage2 {
        background-image: url('/img/04baeb33ef66ef1395cd5464309fece6.jpg');
        margin-right: 5px;
    }

    #GameImage3 {
        background-image: url('/img/e8b89d14690203420d64b5b2fda0b461.jpg');
        margin-right: -10px;
        width: calc(33.333333% - 10px);
    }
</style>
<div class="navbar navbar-landing navbar-fixed-top" role="navigation" ng-modules="robloxApp, LandingSignup">
    <div class="container">
        <div class="row">
            <div class="navbar-header col-md-6">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#LandingNavbar">
                    Log In
                </button>
                <div class="navbar-brand hidden-xs"><img class="robloxLogo" src="/img/10722000cfdcfe1f5b447d83e6d6c761.png"/></div>
                <ul id="TopLeftNavLinks" class="nav navbar-nav">
                    <li id="PlayLink" class="pull-left"><a href="javascript:" onclick="scrollTo(1, '#RollerContainer')">Play</a></li>
                    <li id="AboutLink" class="pull-left"><a href="javascript:" onclick="scrollTo(2, '#WhatsRobloxContainer')">About</a></li>
                    <li id="PlatformLink" class="pull-left"><a href="javascript:" onclick="scrollTo(3, '#RobloxDeviceText')">Platforms</a></li>
                    <li id="magic-line"></li>
                </ul>
            </div>

            <div class="collapse navbar-collapse col-sm-6" id="LandingNavbar" ng-controller="LoginController">
                <form name="loginForm" action="/newlogin" id="LogInForm" class="navbar-form form-inline navbar-right" ng-submit="submitLogin($event)" method="post" role="form" novalidate>
                    <div class="form-group" ng-class="{ 'has-error': loginForm.username.$invalid &amp;&amp; badSubmit}">
                        <input id="LoginUsername" type="text" placeholder="Username" class="form-control" name="username" ng-required="true" ng-model="login.username"/>
                    </div>
                    <div class="form-group" ng-class="{ 'has-error': loginForm.password.$invalid &amp;&amp; badSubmit}">
                        <input id="LoginPassword" type="password" placeholder="Password" class="form-control" name="password" ng-required="true" ng-model="login.password" auto-fill-sync/>
                    </div>
                    <div class="form-group">
                        <input type="submit" id="LoginButton" class="form-control" value="Log In"/>
                    </div>
                    <a id="HeaderForgotPassword" class="navbar-link" href="/Login/ResetPasswordRequest.aspx">Forgot Username/Password?</a>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid" ng-modules="robloxApp, LandingSignup">
    <!-- Roller Coaster-->
    <section class="row full-height-section" id="RollerContainer">
        <div class="col-md-12 inner-full-height-section" id="InnerRollerContainer">
            <div id="MainCenterContainer" class="row">
                <div class="col-xs-12 col-md-6">
                    <div id="MainLogo" class="text-right">
                        <div id="LogoAndSlogan" class="text-center">
                            <img id="MainLogoImage" title="ROBLOX" class="center-block img-responsive" src="/img/f76c76889f4b167ca1f27edc27eb8146.png"/>
                            <div class="clearfix"></div>
                            <h1>You Make the Game<span> &#8482; </span></h1>
                        </div>
                    </div>
                </div>

                

<!-- Modal -->
<div id="BootstrapConfirmationModal" data-modal-handle="bootstrap-confirmation" class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" id="roblox-close-btn" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title">Modal title</h4>
            </div>
            <div class="modal-body">
                <div class="ImageContainer roblox-item-image" data-image-size="small" data-no-overlays data-no-click>
                    <img class="GenericModalImage" alt="generic image"/>
                </div>
                <p class="modal-body-text"></p>
                <p id="roblox-captcha-error" class="text-center text-danger"></p>
            </div>
            <div class="modal-footer">
                <button type="button" id="roblox-decline-btn" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" id="roblox-confirm-btn" class="btn btn-primary">Save changes</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>

<script type="text/javascript">
    Roblox = Roblox || {};
    Roblox.Resources = Roblox.Resources || {};

    //<sl:translate>
    Roblox.Resources.GenericConfirmation = {
        yes: "Yes",
        No: "No",
        Confirm: "Confirm",
        Cancel: "Cancel"
    };
    //</sl:translate>

    //<sl:translate>
    Roblox.Resources.CaptchaModal = {
        title: "Are you human?",
        message: "To finish, please verify that you are human.",
        captchaEmptyMessage: "The CAPTCHA field should not be empty, please fill it.",
        captchaErrorMessage: "The CAPTCHA you entered is invalid. Please try again.",
        finish: "Finish"
    };
    //</sl:translate>
</script>

                <div class="clearfix visible-sm"></div>
                <div class="col-xs-12 col-md-6">
                    <div id="SignUpFormContainer" class="" ng-controller="SignUpController">
                        <form action="/landing/signup" name="signupForm" id="SignUpForm" method="post" role="form" ng-submit="submitSignup($event)" novalidate autocomplete="off">
                            <input name="__RequestVerificationToken" type="hidden" value="J6PozGOMXxnZok78akqnEo8LJMBmKJ9ilCuyFu5aqTaNT76JEib4PIBMZV39c6nUrPU2a96dEVQSGvi6Y5R8wC--FFk1"/>
                            <h3 class="text-left">Sign up and start having fun!</h3>
                            <div class="form-group" ng-class="{ 'has-error': (badSubmit &amp;&amp; signupForm.userName.$invalid) || signupForm.userName.$showError, 'has-success': signupForm.userName.$showSuccess  }">
                                <input id="SignupUsername" ng-model="signup.username" type="text" name="userName" class="form-control input-lg" placeholder="Username (3-20 characters, no spaces)" ng-maxlength="20" maxlength="20" ng-required="true" rbx-valid-username rbx-show-error autocomplete="off" autofocus="autofocus" data-last-username=""/>
                                <div id="UsernameError" class="text-danger" ng-cloak ng-show="signupForm.userName.$showError">{{ signupForm.userName.$usernameMessage }}</div>
                            </div>
                            <div class="form-group" ng-class="{ 'has-error': (badSubmit &amp;&amp; signupForm.password.$invalid) || signupForm.password.$showError, 'has-success': signupForm.password.$showSuccess  }">
                                <input id="SignupPassword" ng-model="signup.password" type="password" name="password" class="form-control input-lg" placeholder="Password (4 letters and 2 numbers minimum)" ng-required="true" autocomplete="off" rbx-show-error rbx-valid-password data-last-password=""/>
                                <div id="PasswordError" class="text-danger" ng-cloak ng-show="signupForm.password.$showError">{{ signupForm.password.$passwordMessage }}</div>
                            </div>
                            <div class="form-group" ng-class="{ 'has-error': (badSubmit &amp;&amp; signupForm.passwordConfirm.$invalid) || signupForm.passwordConfirm.$showError, 'has-success': signupForm.passwordConfirm.$showSuccess  }">
                                <input id="SignupPasswordConfirm" ng-model="signup.passwordConfirm" type="password" name="passwordConfirm" class="form-control input-lg" placeholder="Confirm Password" ng-required="true" match="signup.password" autocomplete="off" rbx-show-error data-last-password=""/>
                                <div class="text-danger" ng-cloak ng-show="signupForm.passwordConfirm.$showError &amp;&amp; signupForm.passwordConfirm.$error.match">Passwords don't match</div>
                            </div>
                            <div class="form-group" ng-class="{'has-error': badSubmit &amp;&amp; !validBirthday(), 'has-success':validBirthday()}">
                                <div class="form-control fake-input-lg form-inline">
                                    <label>Birthday</label>
                                    <input name="lstMonths" ng-value="submitMonth()" type="hidden"/>
                                    <input name="lstDays" ng-value="signup.birthdayDay" type="hidden"/>
                                    <input name="lstYears" ng-value="signup.birthdayYear" type="hidden"/>
                                    <div class="special-dropdown month-special-dropdown">
                                        <select id="birthdayMonthSelect" ng-model="signup.birthdayMonth" class="noHighlight" ng-required="true" autocomplete="off" data-last-selected="">
                                            <option value="">Month</option>
                                            <option value="0">January</option>
                                            <option value="1">February</option>
                                            <option value="2">March</option>
                                            <option value="3">April</option>
                                            <option value="4">May</option>
                                            <option value="5">June</option>
                                            <option value="6">July</option>
                                            <option value="7">August</option>
                                            <option value="8">September</option>
                                            <option value="9">October</option>
                                            <option value="10">November</option>
                                            <option value="11">December</option>
                                        </select>
                                    </div>
                                    <div class="special-dropdown day-special-dropdown">
                                        <select id="birthdayDaySelect" ng-model="signup.birthdayDay" ng-options="day for day in days" class="noHighlight" ng-required="true" autocomplete="off" data-last-selected="">
                                            <option value="">Day</option>
                                        </select>
                                    </div>
                                    <div class="special-dropdown year-special-dropdown">
                                        <select id="birthdayYearSelect" ng-model="signup.birthdayYear" ng-options="year for year in years" class="noHighlight" ng-required="true" autocomplete="off" data-last-selected="">
                                            <option value="">Year</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group" ng-class="{'has-error': badSubmit &amp;&amp; !validGender(), 'has-success':validGender()}">
                                <div class="form-control fake-input-lg">
                                    <input type="hidden" id="GenderInput" name="gender" ng-value="signup.gender" data-last-gender-male="False" data-last-gender-female="False"/>
                                    <div class="pull-left"><label>Gender:</label></div>
                                    <div title="Female" class="gender-circle noHighlight" tabindex="0" ng-class="{'selected-gender': signup.gender === 'female'}" ng-click="selectFemale()">
                                        <div class="coverSprite gender female"></div>
                                    </div>
                                    <div title="Male" class="gender-circle noHighlight" tabindex="0" ng-class="{'selected-gender': signup.gender === 'male'}" ng-click="selectMale()">
                                        <div class="coverSprite gender male"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <input id="SignUpButton" type="submit" class="form-control input-lg submit sign-up-button" value="Sign Up">
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
        <div class="attribution hidden-xs">
            <span class="notranslate">Game: ROBLOX Point</span><br>
            Developer: <span class="notranslate">StarMarine614</span>
        </div>
    </section>

    <!-- What is Roblox -->
    <section class="row full-height-section" id="WhatsRobloxContainer">

        <div class="col-md-12 inner-full-height-section">

            <div class="row" id="InnerWhatsRobloxContainer1">
                <div id="WhatIsRobloxTextBg" class="col-sm-5 col-sm-offset-6 col-xs-8 col-xs-offset-2">
                    <h1 class="text-center">What is ROBLOX?</h1>
                    <p class="lead text-justify">ROBLOX is the Game Powered by Players. Build your own game world and bring it to life, publish and share it, experience what others have created, play with friends. ROBLOX is the leader in user-generated creation and gaming for all ages. What will you build?</p>
                </div>
            </div>

            <div class="row" id="InnerWhatsRobloxContainer2">
                <div id="GameImage1" class="col-sm-4 col-xs-12 game-image"></div>
                <div id="GameImage2" class="hidden-xs col-sm-4 game-image"></div>
                <div id="GameImage3" class="col-sm-4 hidden-xs game-image"></div>
            </div>

        </div>
    </section>
    <div class="clearfix"></div>

    <!-- Roblox on your device -->
    <section id="DeviceSection">
        <div class="row" id="RobloxDeviceText">
            <div class="col-md-6 col-md-offset-3 text-center">
                <h2>ROBLOX on your device.</h2>
                <p class="lead center-block">Play ROBLOX on your desktop, your tablet, or your phone. Access your account, games, and inventory; connect with your friends; and play games whether you're at home or on the go.</p>
            </div>
        </div>

        <div id="AppStoreContainer" class="row text-center">
            <a href="https://web.archive.org/web/20141022234232/https://itunes.apple.com/us/app/roblox-mobile/id431946152" target="_blank">
                <img class="app-store-logo" src="https://web.archive.org/web/20141022234232im_/http://images.rbxcdn.com/9819a104fc46fb90d183387ba81065a0.png" title="ROBLOX on App Store"/>
            </a>
            <a href="https://web.archive.org/web/20141022234232/https://play.google.com/store/apps/details?id=com.roblox.client&amp;hl=en" target="_blank">
                <img class="app-store-logo" src="https://web.archive.org/web/20141022234232im_/http://images.rbxcdn.com/75ba3866ee59c113220b369c2432c7f9.png" title="ROBLOX on Google Play"/>
            </a>
        </div>

        <div class="row" id="DeviceImageContainer">
            <div class="col-md-12">
                <div class="row text-center">
                    <img id="ComputerImgSmall" class="center-block img-responsive hidden-lg ComputerImg" src="https://web.archive.org/web/20141022234232im_/http://images.rbxcdn.com/5ed7d6f37de88cc74c581d9a97fdcbb2.png"/>
                    <img class="center-block img-responsive visible-lg-block ComputerImg" src="https://web.archive.org/web/20141022234232im_/http://images.rbxcdn.com/6288b7c9683f37f50efef75a5e10f2ad.png"/>

                </div>
            </div>
        </div>
    </section>

    <footer class="row">
        <div class="col-xs-12">
            <div id="FooterBigLinks" class="row">
                <div class="col-md-12 text-center">
                    <a href="//web.archive.org/web/20141022234232/http://corp.roblox.com/" target="_blank">About Us</a>
                    <a href="//web.archive.org/web/20141022234232/http://corp.roblox.com/jobs" target="_blank">Jobs</a>
                    <a href="//web.archive.org/web/20141022234232/http://blog.roblox.com/" target="_blank">Blog</a>
                    <a href="/web/20141022234232/http://www.roblox.com/Info/Privacy.aspx" target="_blank">Privacy</a>
                    <a href="//web.archive.org/web/20141022234232/http://corp.roblox.com/parents" target="_blank">Parents</a>
                    <a href="//web.archive.org/web/20141022234232/http://en.help.roblox.com/" target="_blank">Help</a>
                </div>
            </div>
            <div class="row">
                <div id="FooterLegalText" class="col-xs-11 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 text-justify">
                    ROBLOX, "Online Building Toy", characters, logos, names, and all related indicia are trademarks of <a target="_blank" href="//web.archive.org/web/20141022234232/http://corp.roblox.com/">ROBLOX Corporation</a>, ©2014. Patents pending. ROBLOX is not sponsored, authorized or endorsed by any producer of plastic building bricks, including The LEGO Group, MEGA Brands, and K'Nex, and no resemblance to the products of these companies is intended. Use of this site signifies your acceptance of the <a href="/web/20141022234232/http://www.roblox.com/info/terms-of-service" target="_blank">Terms and Conditions</a>.
                </div>
            </div>
            <div id="FooterLanguage" class="row">
                <div class="col-xs-12 text-center">
                    <a href="/web/20141022234232/http://www.roblox.com/userlanguage/languageredirect?languageCode=en&amp;relativePath=%2F">English</a>
                    <a href="/web/20141022234232/http://www.roblox.com/userlanguage/languageredirect?languageCode=de&amp;relativePath=%2F">Deutsch</a>
                </div>
            </div>
            <div id="FooterSocial" class="row">
                <div class="col-xs-12 text-center">
                    <div class="social-button twitter">
                        <a href="https://web.archive.org/web/20141022234232/https://twitter.com/ROBLOX" class="twitter-follow-button" data-show-count="false">Follow @ROBLOX</a>
                    </div>
                    <div class="social-button fb-button">
                        <div class="fb-like" data-href="https://facebook.com/ROBLOX" data-width="50" data-layout="button_count" data-action="like" data-show-faces="false" data-share="false"></div>
                    </div>
                    <div class="social-button youtube-subscribe">
                        <div class="g-ytsubscribe" data-channel="ROBLOX"></div>
                    </div>
                    <div class="social-button twitch-button">
                        <a href="https://web.archive.org/web/20141022234232/http://www.twitch.tv/roblox/" target="_blank" title="ROBLOX on Twitch">
                            <img src="https://web.archive.org/web/20141022234232im_/http://images.rbxcdn.com/867b903498ac432e95414f6f3a3feff1.png" width="24" height="24" alt="ROBLOX on Twitch"/>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>
 

<img src="/web/20141022234232im_/http://www.roblox.com/timg/rbx"/>
<script>
    Roblox.Resources.AnimatedSignupFormValidator = {
        //<sl:translate>
        doesntMatch: "Doesn't match",
        requiredField: "Required",
        tooLong: "Too long",
        tooShort: "Too short",
        maxValid: "Too many accounts use this email",
        needsFourLetters: "Needs 4 letters",
        needsTwoNumbers: "Needs 2 numbers",
        noSpaces: "No spaces allowed",
        weakKey: "Weak key combination.",
        invalidName: "Can't be your character name",
        alreadyTaken: "Already taken",
        cantBeUsed: "Can't be used",
        invalidBirthday: "Invalid birthday",
        loginFieldsRequired: "Username and Password are required.",
        loginFieldsIncorrect: "Your username or password is incorrect.",
        invalidEmail: "Invalid email"
        //</sl:translate>
    };
</script>
<script src="https://web.archive.org/web/20141022234232js_/https://apis.google.com/js/platform.js"></script>

    
    <script type="text/javascript" src="//web.archive.org/web/20141022234232js_/http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.11.1.min.js"></script>
<script type="text/javascript">window.jQuery || document.write("<script type='text/javascript' src='/js/jquery/jquery-1.11.1.js'><\/script>")</script>
<script type="text/javascript" src="//web.archive.org/web/20141022234232js_/http://ajax.aspnetcdn.com/ajax/jquery.migrate/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript">window.jQuery || document.write("<script type='text/javascript' src='/js/jquery/jquery-migrate-1.2.1.js'><\/script>")</script>

    
    <!-- LeanBase -->
    <script type="text/javascript" src="/js/2.js"></script>


    
<script type="text/javascript" src="/js/3.js"></script>
<!-- Base -->
    

    
    <script>
        Roblox.XsrfToken.setToken('');
    </script>

    
    <script type="text/javascript">
    $(function () {
        Roblox.JSErrorTracker.initialize({ 'suppressConsoleError': true});
    });
</script>
    
    

<script type="text/javascript">
$(function(){
    function trackReturns() {
      function dayDiff(d1, d2) {
        return Math.floor((d1-d2)/86400000);
      }
        if (!localStorage) return; 

      var cookieName = 'RBXReturn';
      var cookieOptions = {expires:9001};
        var cookie = localStorage.getItem(cookieName) || {};

      if (typeof cookie.ts === "undefined" || isNaN(new Date(cookie.ts))) {
          localStorage.setItem(cookieName, { ts: new Date().toDateString() });
        return;
      }

      var daysSinceFirstVisit = dayDiff(new Date(), new Date(cookie.ts));
      if (daysSinceFirstVisit == 1 && typeof cookie.odr === "undefined") {
        RobloxEventManager.triggerEvent('rbx_evt_odr', {});
        cookie.odr = 1;
      }
      if (daysSinceFirstVisit >= 1 && daysSinceFirstVisit <= 7 && typeof cookie.sdr === "undefined") {
        RobloxEventManager.triggerEvent('rbx_evt_sdr', {});
        cookie.sdr = 1;
      }
  
      localStorage.setItem(cookieName, cookie);
    }
    
        GoogleListener.init();
    
   
    
        RobloxEventManager.initialize(true);
        RobloxEventManager.triggerEvent('rbx_evt_pageview');
        trackReturns();
    
    
    
        RobloxEventManager._idleInterval = 450000;
        RobloxEventManager.registerCookieStoreEvent('rbx_evt_initial_install_start');
        RobloxEventManager.registerCookieStoreEvent('rbx_evt_ftp');
        RobloxEventManager.registerCookieStoreEvent('rbx_evt_initial_install_success');
        RobloxEventManager.registerCookieStoreEvent('rbx_evt_fmp');
        RobloxEventManager.startMonitor();
    

});

</script>


    

    
    

<script type="text/javascript">
    var Roblox = Roblox || {};
    Roblox.UpsellAdModal = Roblox.UpsellAdModal || {};

    Roblox.UpsellAdModal.Resources = {
        //<sl:translate>
        title: "Remove Ads Like This",
        body: "Builders Club members do not see external ads like these.",
        accept: "Upgrade Now",
        decline: "No, thanks"
        //</sl:translate>
    };
</script>

    
    <!-- Page -->
    <script type="text/javascript" src="https://web.archive.org/web/20141022234232js_/http://js.rbxcdn.com/84241a93127bec72d4eb6357af8b540a.js"></script>

</body>
</html><!--
     FILE ARCHIVED ON 23:42:32 Oct 22, 2014 AND RETRIEVED FROM THE
     INTERNET ARCHIVE ON 12:49:12 Sep 07, 2023.
     JAVASCRIPT APPENDED BY WAYBACK MACHINE, COPYRIGHT INTERNET ARCHIVE.

     ALL OTHER CONTENT MAY ALSO BE PROTECTED BY COPYRIGHT (17 U.S.C.
     SECTION 108(a)(3)).
-->
<!--
playback timings (ms):
  captures_list: 1879.004 (11)
  exclusion.robots: 0.675
  exclusion.robots.policy: 0.184
  cdx.remote: 0.063
  esindex: 0.008
  LoadShardBlock: 511.269 (4)
  PetaboxLoader3.datanode: 313.544 (5)
  load_resource: 311.049
  PetaboxLoader3.resolve: 279.504
-->