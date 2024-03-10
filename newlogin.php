<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/config/main.php';

if (isset($_SESSION["user"])) {
    header("Location: /home");
    exit;
}

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (isset($_POST['Username']) && isset($_POST['Password'])) {
        $username = $_POST['Username'];
        $password = $_POST['Password'];
        
        
        $auth = new Auth();
        if ($auth->login($username, $password)) {
            header("Location: /home"); 
            exit;
        } else {
            $error_message = "Invalid username or password";
        }
    } else {
        $error_message = "Username and password are required";
    }
}
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" xmlns:fb="http://www.facebook.com/2008/fbml">
<head>
    <!-- MachineID: WEB201 -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge,requiresActiveX=true"/>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="Content-Language" content="en-us"/>
    <meta name="author" content="ROBLOX Corporation"/>
    <meta name="description" content="User-generated MMO gaming site for kids, teens, and adults. Players architect their own worlds. Builders create free online games that simulate the real world. Create and play amazing 3D games. An online gaming cloud and distributed physics engine."/>
    <meta name="keywords" content="free games, online games, building games, virtual worlds, free mmo, gaming cloud, physics engine"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    
    

    <title>ROBLOX.com</title>
    <link rel="icon" type="image/vnd.microsoft.icon" href="/web/20141023043408im_/https://www.roblox.com/favicon.ico"/>
    
    

<link rel="stylesheet" href="/CSS/Base/CSS/1.css"/>

    
<link rel="stylesheet" href="/CSS/Pages/2.css"/>

        
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
      ga.src = ('https:' == document.location.protocol ? 'https://web.archive.org/web/20141023043408/https://ssl' : 'https://web.archive.org/web/20141023043408/http://www') + '.google-analytics.com/ga.js';
      var s = document.getElementsByTagName('script')[0];
      s.parentNode.insertBefore(ga, s);
    })();

  </script>

    <script type="text/javascript" src="//web.archive.org/web/20141023043408js_/https://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.11.1.min.js"></script>
<script type="text/javascript">window.jQuery || document.write("<script type='text/javascript' src='/js/jquery/jquery-1.11.1.js'><\/script>")</script>
<script type="text/javascript" src="//web.archive.org/web/20141023043408js_/https://ajax.aspnetcdn.com/ajax/jquery.migrate/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript">window.jQuery || document.write("<script type='text/javascript' src='/js/jquery/jquery-migrate-1.2.1.js'><\/script>")</script>
<script type="text/javascript" src="//web.archive.org/web/20141023043408js_/https://ajax.aspnetcdn.com/ajax/4.0/1/MicrosoftAjax.js"></script>
<script type="text/javascript">window.Sys || document.write("<script type='text/javascript' src='/js/Microsoft/MicrosoftAjax.js'><\/script>")</script>

    <script type="text/javascript" src="https://web.archive.org/web/20141023043408js_/https://s3.amazonaws.com/js.roblox.com/3b0dae895a238b0bf5312423e4e3c6db.js"></script>

    <script type="text/javascript">Roblox.config.externalResources = [];Roblox.config.paths['Pages.Catalog'] = 'https://web.archive.org/web/20141023043408/https://s3.amazonaws.com/js.roblox.com/9afb52162a22e15bd11d53f626926dda.js';Roblox.config.paths['Pages.CatalogShared'] = 'https://web.archive.org/web/20141023043408/https://s3.amazonaws.com/js.roblox.com/4eb48eec34ca711d5a7b08a4291ac753.js';Roblox.config.paths['Pages.Messages'] = 'https://web.archive.org/web/20141023043408/https://s3.amazonaws.com/js.roblox.com/e8cbac58ab4f0d8d4c707700c9f97630.js';Roblox.config.paths['Resources.Messages'] = 'https://web.archive.org/web/20141023043408/https://s3.amazonaws.com/js.roblox.com/fb9cb43a34372a004b06425a1c69c9c4.js';Roblox.config.paths['Widgets.AvatarImage'] = 'https://web.archive.org/web/20141023043408/https://s3.amazonaws.com/js.roblox.com/bbaeb48f3312bad4626e00c90746ffc0.js';Roblox.config.paths['Widgets.DropdownMenu'] = 'https://web.archive.org/web/20141023043408/https://s3.amazonaws.com/js.roblox.com/7b436bae917789c0b84f40fdebd25d97.js';Roblox.config.paths['Widgets.GroupImage'] = 'https://web.archive.org/web/20141023043408/https://s3.amazonaws.com/js.roblox.com/33d82b98045d49ec5a1f635d14cc7010.js';Roblox.config.paths['Widgets.HierarchicalDropdown'] = 'https://web.archive.org/web/20141023043408/https://s3.amazonaws.com/js.roblox.com/6b64c2a449f86ea3eddea256a9df96aa.js';Roblox.config.paths['Widgets.ItemImage'] = 'https://web.archive.org/web/20141023043408/https://s3.amazonaws.com/js.roblox.com/838ec9c8067ba6fd6793a8bdbdb48a5c.js';Roblox.config.paths['Widgets.PlaceImage'] = 'https://web.archive.org/web/20141023043408/https://s3.amazonaws.com/js.roblox.com/f2697119678d0851cfaa6c2270a727ed.js';Roblox.config.paths['Widgets.Suggestions'] = 'https://web.archive.org/web/20141023043408/https://s3.amazonaws.com/js.roblox.com/a63d457706dfbc230cf66a9674a1ca8b.js';Roblox.config.paths['Widgets.SurveyModal'] = 'https://web.archive.org/web/20141023043408/https://s3.amazonaws.com/js.roblox.com/d6e979598c460090eafb6d38231159f6.js';</script>
    
    <script type="text/javascript" src="https://web.archive.org/web/20141023043408js_/https://s3.amazonaws.com/js.roblox.com/3281c568460a331eef608f42e83aa7c0.js"></script>


<script type="text/javascript">
    $(function () {
        Roblox.JSErrorTracker.initialize({ 'suppressConsoleError': true});
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
        <script type="text/javascript">
            Roblox.XsrfToken.setToken('');
        </script>
    <script type="text/javascript">
        Roblox.FixedUI.gutterAdsEnabled = false;
    </script>   
    
    
    <script type="text/javascript">
        var Roblox = Roblox || {};
        Roblox.jsConsoleEnabled = false;
    </script>
</head>
<body class="">
 
    


<div id="fb-root"></div>

<div class="nav-container no-gutter-ads">


<div class="nav-icon" onselectstart="return false;">
</div>

<!-- MENU -->
<div class="header-2014 clearfix">
    <div class="header-container">
        <a href="/web/20141023043408/https://www.roblox.com/"><span class="logo"></span></a>
            <div id="header-login-container" class="right">
                <div id="header-login-wrapper" class="iframe-login-signup" data-display-opened="False">
                    <a id="header-signup" href="/web/20141023043408/https://www.roblox.com/Login/NewAge.aspx">Sign Up</a>
                    <span id="header-or">or</span>
                    <span id="login-span">
                        <a id="header-login" class="btn-control btn-control-large">Login <span class="grey-arrow">▼</span></a>
                    </span>
                    <div id="iFrameLogin" style="display:none">
                        <iframe class="login-frame" src="/Login/iFrameLogin.html?loginRedirect=False&amp;parentUrl=https%3a%2f%2fwww.roblox.com%2fNewLogin" scrolling="no" frameborder="0"></iframe>
                    </div>
                </div>
            </div>
        <div class="header-links">
            <a href="/web/20141023043408/https://www.roblox.com/games">
                <div class="games">
                    Games
                </div>
            </a>
            <a href="/web/20141023043408/https://www.roblox.com/catalog">
                <div class="catalog">
                    Catalog
                </div>
            </a>
            <a href="/web/20141023043408/https://www.roblox.com/develop">
                <div class="develop">
                    Develop
                </div>
            </a>
            <a class="buy-robux" href="/web/20141023043408/https://www.roblox.com/upgrades/robux">
                <div class="buy-robux">
                    ROBUX
                </div>
            </a>
        </div>
        <div class="search">
            <div class="search-input-container">

                <input type="text" placeholder="Search"/>
            </div>
            <div class="search-icon"></div>
            <div class="universal-search-dropdown">
                <div class="universal-search-option selected" data-searchurl="/Browse.aspx?name=">
                    <div class="universal-search-text">Search <span class="universal-search-string"></span> in People</div>
                </div>
                        <div class="universal-search-option" data-searchurl="/catalog/lists.aspx?q=">
                            <div class="universal-search-text">Search <span class="universal-search-string"></span> in Games</div>
                        </div>
                        <div class="universal-search-option" data-searchurl="/catalog/browse.aspx?CatalogContext=1&amp;Keyword=">
                            <div class="universal-search-text">Search <span class="universal-search-string"></span> in Catalog</div>
                        </div>
                        <div class="universal-search-option" data-searchurl="/groups/search.aspx?val=">
                            <div class="universal-search-text">Search <span class="universal-search-string"></span> in Groups</div>
                        </div>
                        <div class="universal-search-option" data-searchurl="/develop/library?CatalogContext=2&amp;Category=6&amp;Keyword=">
                            <div class="universal-search-text">Search <span class="universal-search-string"></span> in Library</div>
                        </div>
            </div>
        </div>
    </div>
</div>
<div id="navContent" class="nav-content">
<div class="nav-content-inner">
<div id="MasterContainer">
        <script type="text/javascript">
            if (top.location != self.location) {
                top.location = self.location.href;
            }
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


    <div>
                        <noscript><div class="SystemAlert"><div class="SystemAlertText">Please enable Javascript to use all the features on this site.</div></div></noscript>
            <div class="SystemAlert" style="background-color:#FF0000">
                <div class="SystemAlertText"><div><span style="color:#222222"><span style="font-family: Arial"><strong>Roblox is currently undergoing maintenance. &#160;You may encounter intermittent connectivity issues. </strong></span></span></div></div>
            </div>
        <div id="BodyWrapper">
            <div id="RepositionBody">
                <div id="Body" style="width:970px">
                    
<!--[if IE 7]>
<style>        
    #signInButtonPanel a 
    {
        margin-right: 143px;
    }
</style>
<![endif]-->
<h1>Login to ROBLOX</h1>
<div>
<form id="loginForm" method="POST">            <div id="loginarea" class="divider-bottom">
                <div id="leftArea">
                    <div id="loginPanel">   
                        <table id="logintable">
                            <tr id="username">
                                <td><label class="form-label" for="Username">Username:</label></td>
                                <td><input class="text-box text-box-medium" data-val="true" data-val-required="The Username field is required." id="Username" name="Username" type="text" value=""/></td>
                            </tr>
                            <tr id="password">
                                <td><label class="form-label" for="Password">Password:</label></td>
                                <td><input class="text-box text-box-medium" data-val="true" data-val-required="The Password field is required." id="Password" name="Password" type="password"/></td>
                            </tr>
                        </table>
                        <div>
                        </div>
                        <div>
                            <div id="forgotPasswordPanel">
                                <a class="text-link" href="/web/20141023043408/https://www.roblox.com/Login/ResetPasswordRequest.aspx" target="_blank">Forgot your password?</a>
                            </div>
                            <div id="signInButtonPanel">
                                <a roblox-js-onclick class="btn-medium btn-neutral">Sign In</a>
                                <a roblox-js-oncancel class="btn-medium btn-negative">Cancel</a>
                            </div>
                            <div class="clearFloats">
                            </div>
                        </div>
                        <span id="fb-root">
                                    <div id="SplashPageConnect" class="fbSplashPageConnect">
                                        <a class="facebook-login" href="/web/20141023043408/https://www.roblox.com/Facebook/SignIn?returnTo=/home" ref="form-facebook">
                                            <span class="left"></span>
                                            <span class="middle">Login with Facebook<span>Login with Facebook</span></span>
                                            <span class="right"></span>
                                        </a>       
                                    </div>
                        </span>
                    </div>
                </div>
                <div id="rightArea" class="divider-left">
                    <div id="signUpPanel" class="FrontPageLoginBox">
                        <p class="text">Not a member?</p>
                        <h2>Sign Up to Build &amp; Make Friends</h2>
                        <p class="text">What is your birthday?</p>
                        <select id="MonthSelect" class="form-select" name="Month">
                            <option>Month</option>
                        </select>
                        <select id="DaySelect" class="form-select" name="Day">
                            <option>Day</option>
                        </select>
                        <select id="YearSelect" class="form-select" name="Year">
                            <option>Year</option>
                        </select>
                        <p class="footnote" id="disclaimer">Your birthday will not be given out to any third party!</p>
<a roblox-js-onsignup class="btn-medium btn-primary">Sign Up</a>                    </div>
                </div>
            </div>
<input id="ReturnUrl" name="ReturnUrl" type="hidden" value=""/></form>
</div>
<script type="text/javascript">
    if (typeof Roblox === "undefined") {
        Roblox = {};
    }
    if (typeof Roblox.Login === "undefined") {
        Roblox.Login = {};
    }

    Roblox.Login.Resources = {
        //<sl:translate>
        january: "January"
    , february: "February"
    , march: "March"
    , april: "April"
    , may: "May"
    , june: "June"
    , july: "July"
    , august: "August"
    , september: "September"
    , october: "October"
    , november: "November"
    , december: "December"
        //</sl:translate>
    };
</script>

<div id="guestarea">
    <h2>You don't need an account to play ROBLOX</h2>
    <br/>
    <p class="text">You can start playing right now, in guest mode! <a href="/web/20141023043408/https://www.roblox.com/games" class="btn-small btn-neutral" id="guestButton">Play as Guest</a></p>
    
</div>
                    <div style="clear:both"></div>
                </div>
            </div>
        </div>
<div id="Footer" class="footer-container">
    <div class="FooterNav">
        <a href="/web/20141023043408/https://www.roblox.com/info/Privacy.aspx">Privacy Policy</a>
        &nbsp;|&nbsp; 
        <a href="https://web.archive.org/web/20141023043408/http://corp.roblox.com/advertise-on-roblox" class="roblox-interstitial">Advertise with Us</a>
        &nbsp;|&nbsp; 
        <a href="https://web.archive.org/web/20141023043408/http://corp.roblox.com/press" class="roblox-interstitial">Press</a>
        &nbsp;|&nbsp; 
        <a href="https://web.archive.org/web/20141023043408/http://corp.roblox.com/contact-us" class="roblox-interstitial">Contact Us</a>
        &nbsp;|&nbsp;
        <a href="https://web.archive.org/web/20141023043408/http://corp.roblox.com/about" class="roblox-interstitial">About Us</a>
        &nbsp;|&nbsp;
        <a href="https://web.archive.org/web/20141023043408/http://blog.roblox.com/" class="roblox-interstitial">Blog</a>
        &nbsp;|&nbsp;
        <a href="https://web.archive.org/web/20141023043408/http://corp.roblox.com/careers" class="roblox-interstitial">Jobs</a>
        &nbsp;|&nbsp;
        <a href="https://web.archive.org/web/20141023043408/http://corp.roblox.com/parents" class="roblox-interstitial">Parents</a>
            <span class="LanguageOptionElement">&nbsp;|&nbsp;</span>
            <span ref="footer-parents" class="LanguageOptionElement LanguageTrigger roblox-interstitial" drop-down-nav-button="LanguageTrigger">English&nbsp;<span class="FooterArrow">▼</span>
                <div class="dropuplanguagecontainer" style="display:none;" data-drop-down-nav-container="LanguageTrigger">
                    <div class="dropdownmainnav" style="z-index:1023">
                            <a href="/web/20141023043408/https://www.roblox.com/UserLanguage/LanguageRedirect?languageCode=de&amp;relativePath=%2fNewLogin" class="LanguageOption js-lang" data-js-langcode="de"><span class="notranslate">Deutsch</span>&nbsp;(German) </a>
                    </div>
                </div>
            </span>
    </div>
    <div class="FooterNav">
        <div id="SEOGenreLinks" class="SEOGenreLinks">
                  <a href="/web/20141023043408/https://www.roblox.com/all-games">All Games</a> 
                      <span>|</span>
                  <a href="/web/20141023043408/https://www.roblox.com/building-games">Building</a> 
                      <span>|</span>
                  <a href="/web/20141023043408/https://www.roblox.com/horror-games">Horror</a> 
                      <span>|</span>
                  <a href="/web/20141023043408/https://www.roblox.com/town-and-city-games">Town and City</a> 
                      <span>|</span>
                  <a href="/web/20141023043408/https://www.roblox.com/military-games">Military</a> 
                      <span>|</span>
                  <a href="/web/20141023043408/https://www.roblox.com/comedy-games">Comedy</a> 
                      <span>|</span>
                  <a href="/web/20141023043408/https://www.roblox.com/medieval-games">Medieval</a> 
                      <span>|</span>
                  <a href="/web/20141023043408/https://www.roblox.com/adventure-games">Adventure</a> 
                      <span>|</span>
                  <a href="/web/20141023043408/https://www.roblox.com/sci-fi-games">Sci-Fi</a> 
                      <span>|</span>
                  <a href="/web/20141023043408/https://www.roblox.com/naval-games">Naval</a> 
                      <span>|</span>
                  <a href="/web/20141023043408/https://www.roblox.com/fps-games">FPS</a> 
                      <span>|</span>
                  <a href="/web/20141023043408/https://www.roblox.com/rpg-games">RPG</a> 
                      <span>|</span>
                  <a href="/web/20141023043408/https://www.roblox.com/sports-games">Sports</a> 
                      <span>|</span>
                  <a href="/web/20141023043408/https://www.roblox.com/fighting-games">Fighting</a> 
                      <span>|</span>
                  <a href="/web/20141023043408/https://www.roblox.com/western-games">Western</a> 

        </div>
    </div>
    <div class="legal">
        <div class="left">
            <div id="a15b1695-1a5a-49a9-94f0-9cd25ae6c3b2">
    <a href="//web.archive.org/web/20141023043408/https://privacy.truste.com/privacy-seal/Roblox-Corporation/validation?rid=2428aa2a-f278-4b6d-9095-98c4a2954215" title="TRUSTe Children privacy certification" target="_blank">
        <img style="border: none" src="//web.archive.org/web/20141023043408im_/https://privacy-policy.truste.com/privacy-seal/Roblox-Corporation/seal?rid=2428aa2a-f278-4b6d-9095-98c4a2954215" width="133" height="45" alt="TRUSTe Children privacy certification"/>
    </a>
</div>
        </div>
        <div class="right">
            <p class="Legalese">
    ROBLOX, "Online Building Toy", characters, logos, names, and all related indicia are trademarks of <a href="https://web.archive.org/web/20141023043408/http://corp.roblox.com/" ref="footer-smallabout" class="roblox-interstitial">ROBLOX Corporation</a>, ©2014. Patents pending.
    ROBLOX is not sponsored, authorized or endorsed by any producer of plastic building bricks, including The LEGO Group, MEGA Brands, and K'Nex, and no resemblance to the products of these companies is intended. Use of this site signifies your acceptance of the <a href="/web/20141023043408/https://www.roblox.com/info/terms-of-service" ref="footer-terms">Terms and Conditions</a>.
</p>
        </div>
        <div class="clear"></div>
    </div>
</div>    </div>
    
</div> 
</div> 
</div> 
</div> 


<div id="ChatContainer" style="position:fixed; bottom:0; right:0; z-index:10020;">


</div>


    <script type="text/javascript">function urchinTracker() {}</script>


<div id="PlaceLauncherStatusPanel" style="display:none;width:300px">
    <div class="modalPopup blueAndWhite PlaceLauncherModal" style="min-height: 160px">
        <div id="Spinner" class="Spinner" style="margin:0 1em 1em 0; padding:20px 0;">
            <img src="https://web.archive.org/web/20141023043408im_/https://s3.amazonaws.com/images.roblox.com/e998fb4c03e8c2e30792f2f3436e9416.gif" height="32" width="32" alt="Progress"/>
        </div>
        <div id="status" style="min-height:40px;text-align:center;margin:5px 20px">
            <div id="Starting" class="PlaceLauncherStatus MadStatusStarting" style="display:block">
                Starting Roblox...
            </div>
            <div id="Waiting" class="PlaceLauncherStatus MadStatusField">Connecting to Players...</div>
            <div id="StatusBackBuffer" class="PlaceLauncherStatus PlaceLauncherStatusBackBuffer MadStatusBackBuffer"></div>
        </div>
        <div style="text-align:center;margin-top:1em">
            <input type="button" class="Button CancelPlaceLauncherButton translate" value="Cancel"/>
        </div>
    </div>
</div>


<script type="text/javascript" src="https://web.archive.org/web/20141023043408js_/https://s3.amazonaws.com/js.roblox.com/b8ceb448b1827270191ccd8c198c6cea.js"></script>

    <div id="videoPrerollPanel" style="display:none">
        <div id="videoPrerollTitleDiv">
            Gameplay sponsored by:
        </div>
        <div id="videoPrerollMainDiv"></div>
        <div id="videoPrerollCompanionAd"></div>
        <div id="videoPrerollLoadingDiv">
            Loading <span id="videoPrerollLoadingPercent">0%</span> - <span id="videoPrerollMadStatus" class="MadStatusField">Starting game...</span><span id="videoPrerollMadStatusBackBuffer" class="MadStatusBackBuffer"></span>
            <div id="videoPrerollLoadingBar">
                <div id="videoPrerollLoadingBarCompleted">
                </div>
            </div>
        </div>
        <div id="videoPrerollJoinBC">
            <span>Get more with Builders Club!</span>
            <a href="/web/20141023043408/https://www.roblox.com/Upgrades/BuildersClubMemberships.aspx?ref=vpr" target="_blank" id="videoPrerollJoinBCButton"></a>
        </div>
    </div>
    <script type="text/javascript">
        Roblox.VideoPreRoll.showVideoPreRoll = false;
        Roblox.VideoPreRoll.loadingBarMaxTime = 33000;
        Roblox.VideoPreRoll.videoOptions.key = "robloxcorporation";
            Roblox.VideoPreRoll.videoOptions.categories = "NonBC,IsLoggedIn,AgeUnknown,GenderUnknown";
                     Roblox.VideoPreRoll.videoOptions.id = "games";
        Roblox.VideoPreRoll.videoLoadingTimeout = 11000;
        Roblox.VideoPreRoll.videoPlayingTimeout = 41000;
        Roblox.VideoPreRoll.videoLogNote = "NotWindows";
        Roblox.VideoPreRoll.logsEnabled = true;
        Roblox.VideoPreRoll.excludedPlaceIds = "32373412";
            
                Roblox.VideoPreRoll.specificAdOnPlacePageEnabled = true;
                Roblox.VideoPreRoll.specificAdOnPlacePageId = 2370766;
                Roblox.VideoPreRoll.specificAdOnPlacePageCategory = "stooges";
            
                    
                Roblox.VideoPreRoll.specificAdOnPlacePage2Enabled = true;
                Roblox.VideoPreRoll.specificAdOnPlacePage2Id = 2370766;
                Roblox.VideoPreRoll.specificAdOnPlacePage2Category = "lego";
            
        $(Roblox.VideoPreRoll.checkEligibility);
    </script>


<div id="GuestModePrompt_BoyGirl" class="Revised GuestModePromptModal" style="display:none;">
    <div class="simplemodal-close">
        <a class="ImageButton closeBtnCircle_20h" style="cursor: pointer; margin-left:455px;top:7px; position:absolute;"></a>
    </div>
    <div class="Title">
        Choose Your Character
    </div>
    <div style="min-height: 275px; background-color: white;">
        <div style="clear:both; height:25px;"></div>

        <div style="text-align: center;">
            <div class="VisitButtonsGuestCharacter VisitButtonBoyGuest" style="float:left; margin-left:45px;"></div>
            <div class="VisitButtonsGuestCharacter VisitButtonGirlGuest" style="float:right; margin-right:45px;"></div>
        </div>
        <div style="clear:both; height:25px;"></div>
        <div class="RevisedFooter">
            <div style="width:200px;margin:10px auto 0 auto;">
                <a href="#" onclick="redirectPlaceLauncherToRegister(); return false;"><div class="RevisedCharacterSelectSignup"></div></a>
                <a class="HaveAccount" href="#" onclick="redirectPlaceLauncherToLogin();return false;">I have an account</a>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    function checkRobloxInstall() {
                 window.location= '/install/unsupported.aspx'; return false;
    }
        if (typeof MadStatus === "undefined") {
            MadStatus = {};
        }

        MadStatus.Resources = {
            //<sl:translate>
            accelerating: "Accelerating",
      aggregating: "Aggregating",
      allocating: "Allocating",
            acquiring: "Acquiring",
      automating: "Automating",
      backtracing: "Backtracing",
      bloxxing: "Bloxxing",
      bootstrapping: "Bootstrapping",
      calibrating: "Calibrating",
      correlating: "Correlating",
      denoobing: "De-noobing",
      deionizing: "De-ionizing",
      deriving: "Deriving",
            energizing: "Energizing",
      filtering: "Filtering",
      generating: "Generating",
      indexing: "Indexing",
      loading: "Loading",
      noobing: "Noobing",
      optimizing: "Optimizing",
      oxidizing: "Oxidizing",
      queueing: "Queueing",
      parsing: "Parsing",
      processing: "Processing",
      rasterizing: "Rasterizing",
      reading: "Reading",
      registering: "Registering",
      rerouting: "Re-routing",
      resolving: "Resolving",
      sampling: "Sampling",
      updating: "Updating",
      writing: "Writing",
            blox: "Blox",
      countzero: "Count Zero",
      cylon: "Cylon",
      data: "Data",
      ectoplasm: "Ectoplasm",
      encryption: "Encryption",
      event: "Event",
      farnsworth: "Farnsworth",
      bebop: "Bebop",
      fluxcapacitor: "Flux Capacitor",
      fusion: "Fusion",
      game: "Game",
      gibson: "Gibson",
      host: "Host",
      mainframe: "Mainframe",
      metaverse: "Metaverse",
      nerfherder: "Nerf Herder",
      neutron: "Neutron",
      noob: "Noob",
      photon: "Photon",
      profile: "Profile",
      script: "Script",
      skynet: "Skynet",
      tardis: "TARDIS",
      virtual: "Virtual",
            analogs: "Analogs",
      blocks: "Blocks",
      cannon: "Cannon",
      channels: "Channels",
      core: "Core",
      database: "Database",
      dimensions: "Dimensions",
      directives: "Directives",
      engine: "Engine",
      files: "Files",
      gear: "Gear",
      index: "Index",
      layer: "Layer",
      matrix: "Matrix",
      paradox: "Paradox",
      parameters: "Parameters",
      parsecs: "Parsecs",
      pipeline: "Pipeline",
      players: "Players",
      ports: "Ports",
      protocols: "Protocols",
      reactors: "Reactors",
      sphere: "Sphere",
      spooler: "Spooler",
      stream: "Stream",
      switches: "Switches",
      table: "Table",
      targets: "Targets",
      throttle: "Throttle",
      tokens: "Tokens",
      torpedoes: "Torpedoes",
      tubes: "Tubes"
            //</sl:translate>
        };
</script>
<style>
    #win_firefox_install_img .activation {

    }
    #win_firefox_install_img .installation {
        width:869px;
        height:331px;
    }
    #mac_firefox_install_img .activation {}
    #mac_firefox_install_img .installation {
        width:250px; 
    }
    #win_chrome_install_img .activation {}
    #win_chrome_install_img .installation {}
    #mac_chrome_install_img .activation {
        width:250px;
    }
    #mac_chrome_install_img .installation {}

    
</style>

<div id="InstallationInstructions" class="modalPopup blueAndWhite" style="display:none;overflow:hidden">
    <a id="CancelButton2" onclick="return Roblox.Client._onCancel();" class="ImageButton closeBtnCircle_35h ABCloseCircle"></a>
    <div style="padding-bottom:10px;text-align:center">
        <br/><br/>
    </div>
</div>



<div id="pluginObjDiv" style="height:1px;width:1px;visibility:hidden;position: absolute;top: 0;"></div>
<iframe id="downloadInstallerIFrame" style="visibility:hidden;height:0;width:1px;position:absolute"></iframe>

<script type="text/javascript" src="https://web.archive.org/web/20141023043408js_/https://s3.amazonaws.com/js.roblox.com/e3a913253f6cb8d64dc84ed62f8d02a7.js"></script>

<script type="text/javascript">
    Roblox.Client._skip = '/install/unsupported.aspx';
    Roblox.Client._CLSID = '';
    Roblox.Client._installHost = '';
    Roblox.Client.ImplementsProxy = false;
    Roblox.Client._silentModeEnabled = false;
    Roblox.Client._bringAppToFrontEnabled = false;
    Roblox.Client._currentPluginVersion = '';

        
    Roblox.Client._installSuccess = function() {
        if(GoogleAnalyticsEvents){
            GoogleAnalyticsEvents.ViewVirtual('InstallSuccess');
            GoogleAnalyticsEvents.FireEvent(['Plugin','Install Success']);
        }
    }
    
    </script>


<div class="ConfirmationModal modalPopup unifiedModal smallModal" data-modal-handle="confirmation" style="display:none;">
    <a class="genericmodal-close ImageButton closeBtnCircle_20h"></a>
    <div class="Title"></div>
    <div class="GenericModalBody">
        <div class="TopBody">
            <div class="ImageContainer roblox-item-image" data-image-size="small" data-no-overlays data-no-click>
                <img class="GenericModalImage" alt="generic image"/>
            </div>
            <div class="Message"></div>
        </div>
        <div class="ConfirmationModalButtonContainer">
            <a href id="roblox-confirm-btn"><span></span></a>
            <a href id="roblox-decline-btn"><span></span></a>
        </div>
        <div class="ConfirmationModalFooter">
        
        </div>  
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
    </script>
</div>



</body>
</html>
<!--
     FILE ARCHIVED ON 04:34:08 Oct 23, 2014 AND RETRIEVED FROM THE
     INTERNET ARCHIVE ON 13:07:37 Sep 07, 2023.
     JAVASCRIPT APPENDED BY WAYBACK MACHINE, COPYRIGHT INTERNET ARCHIVE.

     ALL OTHER CONTENT MAY ALSO BE PROTECTED BY COPYRIGHT (17 U.S.C.
     SECTION 108(a)(3)).
-->
<!--
playback timings (ms):
  captures_list: 224.823 (11)
  exclusion.robots: 0.254
  exclusion.robots.policy: 0.241
  cdx.remote: 0.068
  esindex: 0.015
  LoadShardBlock: 123.139 (3)
  PetaboxLoader3.datanode: 1012.97 (4)
  load_resource: 965.286
  PetaboxLoader3.resolve: 38.598
-->

