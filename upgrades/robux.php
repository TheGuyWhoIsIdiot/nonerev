<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/config/main.php';

if (!isset($_SESSION["user"])) {
    header("Location: /");
    exit;
}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" xmlns:fb="http://www.facebook.com/2008/fbml">
<head>
    <!-- MachineID: WEB144 -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge,requiresActiveX=true" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="Content-Language" content="en-us" />
    <meta name="author" content="ROBLOX Corporation" />
    <meta name="description" content="User-generated MMO gaming site for kids, teens, and adults. Players architect their own worlds. Builders create free online games that simulate the real world. Create and play amazing 3D games. An online gaming cloud and distributed physics engine." />
    <meta name="keywords" content="free games, online games, building games, virtual worlds, free mmo, gaming cloud, physics engine" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    
    

    <title>ROBLOX.com</title>
    <link rel="icon" type="image/vnd.microsoft.icon" href="/favicon.ico" />
  <link rel='stylesheet' href='/CSS/Base/CSS/1.css' />

    
<link rel='stylesheet' href='/CSS/Base/CSS/2.css' />  
    

<link rel='stylesheet' href='/CSS/Pages/Upgrades/BuyRobux.css' />

    
<link rel='stylesheet' href='/CSS/PartialViews/Navigation.css' />

        <style type="text/css">
            div#MasterContainer, body
            {
                background: white !important;
            }
            #LeftGutterAdContainer
            {
                margin-left: -889px;
            }
            #RightGutterAdContainer
            {
                margin-left: 500px;
            }
            #Footer
            {
                position: relative;
            }
            div#Footer
            {
                width:970px;
                margin: 0 auto;
            }
        </style>
        <!--[if IE 7]>
        <style>
            #LeftGutterAdContainer
            {
                margin-left: -891px;
            }
            #RightGutterAdContainer
            {
                margin-left: 498px;
            }
        </style>
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
        
            _gaq.push(['b._setCustomVar', 1, 'Visitor', 'Member', 2]);
            _gaq.push(['b._trackPageview']);    
        
        
        

    _gaq.push(['c._setAccount', 'UA-26810151-2']);
    _gaq.push(['c._setDomainName', 'roblox.com']);

    (function() {
      var ga = document.createElement('script');
      ga.type = 'text/javascript';
      ga.async = true;
      ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
      var s = document.getElementsByTagName('script')[0];
      s.parentNode.insertBefore(ga, s);
    })();

  </script>

    <script type='text/javascript' src='//ajax.aspnetcdn.com/ajax/jQuery/jquery-1.11.1.min.js'></script>
<script type='text/javascript'>window.jQuery || document.write("<script type='text/javascript' src='/js/jquery/jquery-1.11.1.js'><\/script>")</script>
<script type='text/javascript' src='//ajax.aspnetcdn.com/ajax/jquery.migrate/jquery-migrate-1.2.1.min.js'></script>
<script type='text/javascript'>window.jQuery || document.write("<script type='text/javascript' src='/js/jquery/jquery-migrate-1.2.1.js'><\/script>")</script>
<script type='text/javascript' src='//ajax.aspnetcdn.com/ajax/4.0/1/MicrosoftAjax.js'></script>
<script type='text/javascript'>window.Sys || document.write("<script type='text/javascript' src='/js/Microsoft/MicrosoftAjax.js'><\/script>")</script>
    <script type='text/javascript' src='//ajax.aspnetcdn.com/ajax/jQuery/jquery-1.11.1.min.js'></script>

    <script type='text/javascript' src='/1f78f8e39e25515b3bf26aed9de1c0d3.js.gzip'></script>

    <script type='text/javascript'>Roblox.config.externalResources = [];Roblox.config.paths['Pages.Catalog'] = '/53e70ad1c345642ce837e5801b2e0ca7.js.gzip';Roblox.config.paths['Pages.CatalogShared'] = '/2f97dbe16b607b1ac15dab6c0bf40304.js.gzip';Roblox.config.paths['Pages.Messages'] = '/b123274ceba7c65d8415d28132bb2220.js.gzip';Roblox.config.paths['Resources.Messages'] = '/6307f9bd9c09fa9d88c76291f3b68fda.js.gzip';Roblox.config.paths['Widgets.AvatarImage'] = '/64f4ed4d4cf1c0480690bc39cbb05b73.js.gzip';Roblox.config.paths['Widgets.DropdownMenu'] = '/5cf0eb71249768c86649bbf0c98591b0.js.gzip';Roblox.config.paths['Widgets.GroupImage'] = '/556af22c86bce192fb12defcd4d2121c.js.gzip';Roblox.config.paths['Widgets.HierarchicalDropdown'] = '/e772a87543d72f946ca243ac3c0f2432.js.gzip';Roblox.config.paths['Widgets.ItemImage'] = '/4b1cabcd1656b1c77730b7ff3d2b2ecb.js.gzip';Roblox.config.paths['Widgets.PlaceImage'] = '/45d46dd8e2bd7f10c17b42f76795150d.js.gzip';Roblox.config.paths['Widgets.SurveyModal'] = '/56ad7af86ee4f8bc82af94269ed50148.js.gzip';</script>
    <script type='text/javascript' src='/55f3caa6a0ce84d404f42613062da71e.js.gzip'></script>

    <script type='text/javascript' src='/js/GenericConfirmation.js'></script>


    <script type="text/javascript">
function Roblox_MyHome_Top_728x90_RTP(estimate){rtp['/1015347/Roblox_MyHome_Top_728x90'] = rp_valuation.estimate;}
var rtp = rtp || {};
oz_api="valuation";oz_site="9874/18868";oz_zone="58960";oz_ad_slot_size="728x90";oz_callback=Roblox_MyHome_Top_728x90_RTP;
</script><script type="text/javascript" src="http://tap-cdn.rubiconproject.com/partner/scripts/rubicon/dorothy.js?pc=9874/18868"></script><script>

    googletag.cmd.push(function() {
        Roblox = Roblox || {};
        Roblox.AdsHelper = Roblox.AdsHelper || {};
        Roblox.AdsHelper.slots = [];
        Roblox.AdsHelper.slots = Roblox.AdsHelper.slots || []; Roblox.AdsHelper.slots.push({slot:googletag.defineSlot("/1015347/Roblox_MyHome_Top_728x90", [728, 90], "3531393738323234").addService(googletag.pubads()), id: "3531393738323234", path: "/1015347/Roblox_MyHome_Top_728x90"});

        for (var key in Roblox.AdsHelper.slots) {
            var slot = Roblox.AdsHelper.slots[key].slot;
            var id = Roblox.AdsHelper.slots[key].id;
            var path = Roblox.AdsHelper.slots[key].path;

                     slot.setTargeting('pos', path);
                                             slot.setTargeting('tier', rtp[path].tier);
            if (slot.renderEnded != "undefined") {
                (function(slot, id)
                {
                    slot.renderEndedOld = slot.renderEnded;
                    slot.renderEnded = function() {
                        slot.renderEndedOld();
                        if ($('#' + id + '.gutter').css('display') == "none") {
                            $(document).trigger("GuttersHidden");
                        }
                        if ($('#' + id + '.filmstrip').css('display') == "none") {
                            $(document).trigger("FilmStripHidden");
                        }
                    };
                }(slot, id));
            }
        }

        googletag.pubads().setTargeting("Age", ["11", "11to12" ]);
                    googletag.pubads().setTargeting("Env",  "Production");
                                            googletag.pubads().setTargeting("Gender", "Male");
                    googletag.pubads().setTargeting("PLVU", "False");
        googletag.pubads().enableSingleRequest();
        googletag.pubads().collapseEmptyDivs();
        googletag.enableServices();
    });
    </script>  
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
            Roblox.XsrfToken.setToken('ENSPK+CxO1Vl');
        </script>
    <script type="text/javascript">
        Roblox.FixedUI.gutterAdsEnabled = true;
    </script>   
    
    
    <script type="text/javascript">
        var Roblox = Roblox || {};
        Roblox.jsConsoleEnabled = false;
    </script>


    
</head>
<body class="">
    


<div id="fb-root"></div>

<div class="nav-container ">


<div class="nav-icon" onselectstart="return false;" >
</div>

<!-- MENU -->
<div class="navigation" id="navigation" onselectstart="return false;">
        <div class="user">
                    <div class="menu-item">         
                        <a href="/user.aspx" class="username"><?= $_SESSION["user"]["username"] ?></a>
                    </div>
        </div>
    <div class="navigation-container">
        <ul>
                <li class="upgrade-now">
                    <a href="/Upgrades/BuildersClubMemberships.aspx" class="nav-button" id="upgrade-now-button">Upgrade Now</a>
                </li>
            <li class="nav2014-my-roblox">
                <a class="menu-item" href="/home">
                    <span class="icon"></span>Home
                </a>
            </li>
            <li class="nav2014-profile">
                <a class="menu-item" href="/User.aspx">
                    <span class="icon"></span>Profile
                </a>
            </li>
            <li class="nav2014-messages">
                <a class="menu-item" href="/my/messages/#!/inbox">
                    <span class="icon"></span>Messages
                </a>
            </li>
            <li class="nav2014-friends">
                <a class="menu-item" href="/friends.aspx">
                    <span class="icon"></span>Friends

                </a>
            </li>
            <li class="nav2014-character">
                <a class="menu-item" href="/My/Character.aspx">
                    <span class="icon"></span>Character
                </a>
            </li>
            <li class="nav2014-inventory">
                <a class="menu-item" href="/My/Stuff.aspx">
                    <span class="icon"></span>Inventory
                </a>
            </li>
            <li class="nav2014-trade">
                <a class="menu-item" href="/My/Money.aspx#/#TradeItems_tab">
                    <span class="icon"></span>Trade
                </a>
            </li>
            <li class="nav2014-groups">
                <a class="menu-item" href="/My/Groups.aspx">
                    <span class="icon"></span>Groups
                </a>
            </li>
            <li class="nav2014-forum">
                <a class="menu-item" href="/Forum/default.aspx">
                    <span class="icon"></span>Forum
                </a>
            </li>
            <li class="nav2014-blog">
                <a class="menu-item" href="http://blog.roblox.com">
                    <span class="icon"></span>Blog
                </a>
            </li>
                            <li class="nav2014-events">
                    <span class="events-text">Events</span>
                </li>
                    <li class="nav2014-sponsor">
                        <a class="menu-item" href="/sponsored/NightAtTheMuseum" title="Night at the Museum">
                                <img src="http://images.rbxcdn.com/1142869e041e9ca844983dbdafa2c90b" />
                        </a>
                    </li>
                    <li class="nav2014-sponsor">
                        <a class="menu-item" href="/sponsored/BLOXgiving" title="BLOXgiving">
                                <img src="http://images.rbxcdn.com/9c77102ded5538a42ff6ed8a8cd869c7" />
                        </a>
                    </li>
        </ul>
    </div>
</div>
<div class="header-2014 clearfix">
    <div class="header-container">
        <a href="/"><span class="logo"></span></a>


<div class="settings-container flyout-open-indicator right">
    <div class="settings-icon"></div>
    <div class="flyout-container xsmall">
        <div class="flyout">
            <div class="notch-shadow-right"></div>
            <div class="notch-top-right"></div>
            <a href="/my/account"><div class="settings-option">Settings</div></a>
            <a href="/Help/Builderman.aspx" target="_blank"><div class="settings-option">Help</div></a>
            <a id="lsLoginStatus" href="/authentication/logout"><div class="settings-option">Logout</div></a>
        </div>
    </div>
</div>
<div class="tickets-container flyout-open-indicator right">
    <div class="tickets-icon"></div>
    <div class="tickets-amount">0</div>
    <div class="flyout-container small">
        <div class="flyout">
            <div class="notch-shadow"></div>
            <div class="notch-top"></div>
            <a href="/My/Money.aspx#/#Summary_tab">
                <span class="currency-balance">0 Tickets</span>
            </a>
            <div class="upsell">
                <a href="/my/money.aspx?tab=TradeCurrency"><span class="upsell-icon">&nbsp;</span>Trade Currency</a>
            </div>
        </div>
    </div>
</div>
<div class="robux-container flyout-open-indicator right">
    <div class="robux-icon"></div>
    <div class="robux-amount"><?= $_SESSION["user"]["currency"] ?></div>
    <div class="flyout-container small">
        <div class="flyout">
            <div class="notch-shadow"></div>
            <div class="notch-top"></div>
            <a href="/My/Money.aspx#/#Summary_tab">
                <span class="currency-balance"><?= $_SESSION["user"]["currency"] ?> ROBUX</span>
            </a>
            <div class="upsell">
                <a href="/upgrades/robux"><span class="upsell-icon">&nbsp;</span>Buy ROBUX</a>
            </div>
        </div>
    </div>
</div>        <div class="header-links">
            <a href="/games">
                <div class="games">
                    Games
                </div>
            </a>
            <a href="/catalog">
                <div class="catalog">
                    Catalog
                </div>
            </a>
            <a href="/develop">
                <div class="develop">
                    Develop
                </div>
            </a>
            <a class="buy-robux" href="/upgrades/robux">
                <div class="buy-robux">
                    ROBUX
                </div>
            </a>
        </div>
        <div class="search">
            <div class="search-input-container">

                <input type="text" placeholder="Search" />
            </div>
            <div class="search-icon"></div>
            <div class="universal-search-dropdown">
                <div class="universal-search-option selected" data-searchurl="/users/search?keyword=">
                    <div class="universal-search-text">Search <span class="universal-search-string"></span> in People</div>
                </div>
                        <div class="universal-search-option" data-searchurl="/games/?Keyword=">
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
        <div id="BodyWrapper" class="gutter-ads-enabled">
                                    <div id="AdvertisingLeaderboard">

<iframe
    allowtransparency="true"
    frameborder="0"
    height="110"
    scrolling="no"
    src="/userads/1"
    width="728"
    data-js-adtype="iframead"></iframe>
            </div>
                    <div id="FloorAd">

<iframe
    allowtransparency="true"
    frameborder="0"
    height="1"
    scrolling="no"
    src="/userads/0"
    width="1"
    data-js-adtype="iframead"></iframe>
        

    </div>
                <div id="BodyWrapper">
                    <div id="RepositionBody">
                        <div id="Body" style="width:970px">
                            <div style="width:100%;">
    <div style="margin-left:5px;">
        <h1 style="padding:0;">Buy ROBUX</h1>
        <div>
            <img width="48px" height="48px" alt="R$" src="https://s3.amazonaws.com/images.roblox.com/72019d3cb1b2c8e1660b03b7423124c7.png" style="float:left;" />
            <div class="rdar-text">
                Use ROBUX to buy virtual goods for your character - shirts, pants, hats, faces, and even heads!
            <br />
                You can also buy gear, like hammers, potions, jet boots, swords, and BLOXI Cola.
            </div>
            <div class="clear"></div>
        </div>
    </div>
    <div class="robux-products-container">
            <div class="bottom-40">
                <div class="robux-product-body">
                    <a  href="/Upgrades/PaymentMethods.aspx?ap=42" class="btn-small btn-primary robux-buy">Buy</a>
                    <div class="robux-membership">
                        Standard Member
                    </div>
                    <h3>
                        400 Robux $4.95
                    </h3>
                    <div class="divider-bottom"></div>
                    <div style="font-size: 11px;">
Builder&#39;s Club Members get 450 ROBUX for $4.95  <a href = "/Upgrades/BuildersClubMemberships.aspx" > Upgrade Now!</a>
                    </div>
                </div>
                <div class="robux-title">
                    400
                </div>
                <div class="clear"></div>
            </div>
            <div class="bottom-40">
                <div class="robux-product-body">
                    <a  href="/Upgrades/PaymentMethods.aspx?ap=45" class="btn-small btn-primary robux-buy">Buy</a>
                    <div class="robux-membership">
                        Standard Member
                    </div>
                    <h3>
                        800 Robux $9.95
                    </h3>
                    <div class="divider-bottom"></div>
                    <div style="font-size: 11px;">
Builder&#39;s Club Members get 1000 ROBUX for $9.95  <a href = "/Upgrades/BuildersClubMemberships.aspx" > Upgrade Now!</a>
                    </div>
                </div>
                <div class="robux-title">
                    800
                </div>
                <div class="clear"></div>
            </div>
            <div class="bottom-40">
                <div class="robux-product-body">
                    <a  href="/Upgrades/PaymentMethods.aspx?ap=10" class="btn-small btn-primary robux-buy">Buy</a>
                    <div class="robux-membership">
                        Standard Member
                    </div>
                    <h3>
                        2000 ROBUX $24.95
                    </h3>
                    <div class="divider-bottom"></div>
                    <div style="font-size: 11px;">
Builder&#39;s Club Members get 2750 ROBUX for $24.95  <a href = "/Upgrades/BuildersClubMemberships.aspx" > Upgrade Now!</a>
                    </div>
                </div>
                <div class="robux-title">
                    2000
                </div>
                <div class="clear"></div>
            </div>
            <div class="bottom-40">
                <div class="robux-product-body">
                    <a  href="/Upgrades/PaymentMethods.aspx?ap=46" class="btn-small btn-primary robux-buy">Buy</a>
                    <div class="robux-membership">
                        Standard Member
                    </div>
                    <h3>
                        4500 ROBUX $49.95
                    </h3>
                    <div class="divider-bottom"></div>
                    <div style="font-size: 11px;">
Builder&#39;s Club Members get 6000 ROBUX for $49.95  <a href = "/Upgrades/BuildersClubMemberships.aspx" > Upgrade Now!</a>
                    </div>
                </div>
                <div class="robux-title">
                    4500
                </div>
                <div class="clear"></div>
            </div>
            <div class="bottom-40">
                <div class="robux-product-body">
                    <a  href="/Upgrades/PaymentMethods.aspx?ap=19" class="btn-small btn-primary robux-buy">Buy</a>
                    <div class="robux-membership">
                        Standard Member
                    </div>
                    <h3>
                        10000 ROBUX $99.95
                    </h3>
                    <div class="divider-bottom"></div>
                    <div style="font-size: 11px;">
Builder&#39;s Club Members get 15000 ROBUX for $99.95  <a href = "/Upgrades/BuildersClubMemberships.aspx" > Upgrade Now!</a>
                    </div>
                </div>
                <div class="robux-title">
                    10000
                </div>
                <div class="clear"></div>
            </div>
            <div class="bottom-40">
                <div class="robux-product-body">
                    <a  href="/Upgrades/PaymentMethods.aspx?ap=21" class="btn-small btn-primary robux-buy">Buy</a>
                    <div class="robux-membership">
                        Standard Member
                    </div>
                    <h3>
                        22500 ROBUX $199.95
                    </h3>
                    <div class="divider-bottom"></div>
                    <div style="font-size: 11px;">
Builder&#39;s Club Members get 35000 ROBUX for $199.95  <a href = "/Upgrades/BuildersClubMemberships.aspx" > Upgrade Now!</a>
                    </div>
                </div>
                <div class="robux-title">
                    22500
                </div>
                <div class="clear"></div>
            </div>
        <div style="font-size: 10px;">
            Prices for Turbo and Outrageous Builder's Club are the same as for regular Builder's Club. All sales are final. Please see our <a href="/info/terms-of-service">Terms & Conditions</a> for more information.
        </div>
    </div>
</div>


                            <div style="clear:both"></div>
                        </div>
                    </div>
                </div>


                    <div style="clear:both"></div>
                </div>
            </div>
        </div>
<div id="Footer" class="footer-container">
    <div class="FooterNav">
        <a href="/info/Privacy.aspx">Privacy Policy</a>
        &nbsp;|&nbsp;
        <a href="http://corp.roblox.com/advertise-on-roblox" class="roblox-interstitial">Advertise with Us</a>
        &nbsp;|&nbsp;
        <a href="http://corp.roblox.com/press" class="roblox-interstitial">Press</a>
        &nbsp;|&nbsp;
        <a href="http://corp.roblox.com/contact-us" class="roblox-interstitial">Contact Us</a>
        &nbsp;|&nbsp;
        <a href="http://corp.roblox.com/about" class="roblox-interstitial">About Us</a>
        &nbsp;|&nbsp;
        <a href="http://blog.roblox.com" class="roblox-interstitial">Blog</a>
        &nbsp;|&nbsp;
        <a href="http://corp.roblox.com/careers" class="roblox-interstitial">Jobs</a>
        &nbsp;|&nbsp;
        <a href="http://corp.roblox.com/parents" class="roblox-interstitial">Parents</a>
            <span class="LanguageOptionElement">&nbsp;|&nbsp;</span>
            <span ref="footer-parents" class="LanguageOptionElement LanguageTrigger roblox-interstitial" drop-down-nav-button="LanguageTrigger">
                English&nbsp;<span class="FooterArrow">▼</span>
            <div class="dropuplanguagecontainer" style="display:none;" data-drop-down-nav-container="LanguageTrigger">
                <div class="dropdownmainnav" style="z-index:1023">
                        <a href="/UserLanguage/LanguageRedirect?languageCode=de&amp;relativePath=%2fhome" class="LanguageOption js-lang" data-js-langcode="de"><span class="notranslate">Deutsch</span>&nbsp;(German) </a>
                </div>
            </div>
        </span>
    </div>
    <div class="legal">
        <div class="left">
            <div id="a15b1695-1a5a-49a9-94f0-9cd25ae6c3b2">
    <a href="//privacy.truste.com/privacy-seal/Roblox-Corporation/validation?rid=2428aa2a-f278-4b6d-9095-98c4a2954215" title="TRUSTe Children privacy certification" target="_blank">
        <img style="border: none" src="//privacy-policy.truste.com/privacy-seal/Roblox-Corporation/seal?rid=2428aa2a-f278-4b6d-9095-98c4a2954215" width="133" height="45" alt="TRUSTe Children privacy certification"/>
    </a>
</div>
        </div>
        <div class="right">
            <p class="Legalese">
    ROBLOX, "Online Building Toy", characters, logos, names, and all related indicia are trademarks of <a href="http://corp.roblox.com/" ref="footer-smallabout" class="roblox-interstitial">ROBLOX Corporation</a>, ©2014. Patents pending.
    ROBLOX is not sponsored, authorized or endorsed by any producer of plastic building bricks, including The LEGO Group, MEGA Brands, and K'Nex, and no resemblance to the products of these companies is intended. Use of this site signifies your acceptance of the <a href="/info/terms-of-service" ref="footer-terms">Terms and Conditions</a>.
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

        <div id="friend_dock_chattemplate" style="display: none;">
            <div id="CHATUSERID_friend_dock_chatbox" userid="CHATUSERID" class="friend_dock_chatbox">
                <div class="friend_dock_chatbox_titlebar chat-header-blink-off" userid="CHATUSERID">
                    <div class="friend_dock_chatbox_username">
                        <a style="color: #fff" class="friend_dock_chatbox_username_display" href="/user.aspx?id=CHATUSERID">CHATUSERNAME</a>
                        <a class="friend_dock_chatbox_username_abuse" style="color: #fff; font-size: 9px; line-height: 14px; cursor: pointer" alt="Report Abuse" href="#" onclick="ChatBar.ReportAbuse(CHATUSERID); return false;">(Report)</a>
                    </div>
                    <div class="friend_dock_chatbox_closebutton">
                        <a href="#" style="color: #fff" onclick=" ChatBar.CloseChat($(this).parents('.friend_dock_chatbox').filter(':first'));return false; ">-</a>
                    </div>
                </div>
                <div class="friend_dock_chatbox_currentlocation" style="margin: 10px; height: 18px"></div>
                <div id="CHATUSERID_friend_dock_chatbox_chat" class="friend_dock_chatbox_chat"></div>
                <textarea class="friend_dock_chatbox_entry" maxlength="255"></textarea>
            </div>
        </div>
    <div id="friend_dock_friendtemplate" style="display: none;">
        <div id="UID_CURRTAB_friend" userid="UID" username="USERNAME" class="friend_dock_friend">
            <div id="UID_CURRTAB_onlinestatus" class="friend_dock_onlinestatus"></div>
            <div id="UID_CURRTAB_offlinestatus" class="friend_dock_offlinestatus"></div>
            <div id="UID_CURRTAB_dropdown" class="friendBarDropDown" userid="UID" username="USERNAME" style="display: none">
                <div id="UID_CURRTAB_dropdownbutton" class="friend-bar-dropdown-button"></div>
                <div id="UID_CURRTAB_dropdownlist" class="friendBarDropDownList">
                    <ul>
                            <li onclick=" Party.InviteUser('USERNAME'); " startpartydisplay><div>Invite To Party</div></li>
                                                    <li class="StartChat" onclick=" ChatBar.ToggleChat('UID', 'USERNAME'); " startchattingdisplay userid="UID"><div>Start Chatting</div></li>
                        <li onclick=" window.location.href = '/user.aspx?id=UID'; "><div>View Profile</div></li>
                            <li class="EndChat" style="display: none" onclick=" ChatBar.RemoveActiveChat(this); " userid="UID"><div>End Chat</div></li>
                    </ul>
                </div>    
            </div>
            <img thumbnail_holder alt="" onclick=" ChatBar.ToggleChat('UID', 'USERNAME'); return false; " width="48" height="48" class="ActiveChatThumb" />
            <div class="friend_dock_username"><span class="friend_dock_username_href">USERNAMETRUNCATED</span></div>
        </div>
    </div>
    <div style="position:relative;">
            <div id="friend_dock_chatholder" style="display:none;">
            </div>
                    <div id="party-container" style="display:none;margin-left:10px;float:right;position:absolute;">
                

    <div id="partyMemberTemplate" style="display:none;height:32px">
      <div id="party_pendinguserid_UID" style="clear:both;">
          <dt style="position:relative;">
                <span id="UID_status" class="friend_dock_offlinestatus"></span>
                [PARTY_MEMBER_THUMBNAIL]
            </dt>
          <dd>
            <span>[PARTY_MEMBER_NAME]</span>&nbsp;&nbsp;&nbsp;<!--<span class="party-report-container"></span><span class="party-kick-container"></span>-->[PARTY_MEMBER_REPORT][PARTY_KICK_MEMBER]
          </dd>
      </div>
    </div>
    <script type="text/javascript" language="javascript">
        Party.CurrentUserID = 59896360;
        Party.CurrentUserName = "samis2613";
        Party.ActiveView = "";
        Party.PollThreadAvailable = true;
        Party.FirstLoad = true;
        Party.PollIntervalTimer = null;
        Party.MaxPartySize = 6;
        Party.PlayEnabled = true;
        
        /*<sl:translate_json>*/
        Party.Resources = {
          areYouSureReport: 'Are you sure you would like to report '
          , report: "Report"
          , kick: "Kick from party"
          , pending: "Pending..."
          , partyInvite: "Party Invite!"
          , partyGameBlurb: "When the party leader joins a game, the rest of the party will be invited to follow"
          , inviteInstructions: "Please type the name of the user you wish to invite"
          , partyFull: "Your party is already full!"
          , joinConfirm1: "The party leader has joined "
          , joinConfirm2: ".  Would you like to join?"
          , joinConfirm3: "You will be removed from any game you might be playing."
          , enterUserName: 'Enter username'
        };
        /*</sl:translate_json>*/
    </script>
    <script type="text/javascript" language="javascript">
        try
        {
            $(function()
            {
                Party.ProcessPolledData(eval(({"Error" : "User not found in party"})));
                Party.OnPageLoad();
            });
        }
        catch (ex) {}
    </script>
    <div class="party-window" id="party_none">
      <div id="party_none_title" class="title" onclick="Party.ToggleTab(false)">
            <span>Party</span>
        <div class="closeparty">-</div>
      </div>
      <div class="main">
        <div id="new_party">
          <p>You are not in a party.  To create a party, just invite someone:</p>
          <p><input type="text" id="new_party_invite_name" class="party-invite-box" onkeydown="return Party.ProcessKey('new_party_invite_name',event)" /><input type="button" class="translate" onclick="Party.DoInvite('new_party_invite_name')" value="Invite" /></p>
        </div>
        <div class="clear" id="new_party_clear">
        </div>
      </div>
    </div>
    <div class="party-window" id="party_loading" style="display:none;">
      <div id="party_loading_title" class="title" onclick="Party.ToggleTab(false)">
        <span>Party</span>  
        <div class="closeparty">-</div>
      </div>
      <div class="main">
        <div>
          <p>Invitation sent.</p>
          <p>Creating party...</p>
        </div>
      </div>
    </div>
    <div class="party-window" id="party_pending" style="display:none;">
        <div id="party_pending_title" class="title" onclick="Party.ToggleTab(false)">
          <span>Party</span>
                <div class="closeparty">-</div>
        </div>
        <div class="main">
          <div id="invite-header">RobloTim wants to party with you!</div>
          <div class="members">
            <dl id="party_invite_list"></dl>
          </div>
      
          <div id="invite_status">
            <p><span>Waiting for Leader to play a game</span></p>
          </div>
      
                <div class="party-invite-buttons">
                <div class="btn-primary btn-small">
                <a href="#" class="party-btn-link" onclick="Party.AcceptInvite();return false;">Join Party</a>
              </div>
      
              <div class="btn-negative btn-small">
                <a href="#" class="party-btn-link" onclick="Party.DeclineInvite();return false;">Ignore</a>
              </div>
          </div>
          <div class="clear" id="invite_clear">
          </div>
        </div>
    </div>
    <div class="party-window" id="party_my" style="display:none;">
      <div id="party_my_title" class="title" onclick="Party.ToggleTab(false)">
            <span>Party</span>
        <div class="closeparty">-</div>
      </div>
      <div class="main">
        <div class="members">
          <dl id="party_member_list"></dl>
        </div>
    
        <p id="party_invite_instructions"><span><input type="text" id="party_my_invite_name" class="party-invite-box" onkeydown="return Party.ProcessKey('party_my_invite_name',event)" /><input type="button" class="translate" onclick="Party.DoInvite('party_my_invite_name')" value="Invite" /></span></p>
    
        <div id="chat_messages"></div>
    
        <div id="chat_input">
          <textarea name="comments" rows="2" cols="27" id="comments" tabindex="4" title="comments"></textarea>
        </div>
    
            <div id="party-auto-follow-setting" style="padding: 5px; text-align: center">
              <input id="auto-follow-party-leader" type="checkbox" />
              <label for="auto-follow-party-leader">Automatically follow party leader</label>
              <script type="text/javascript">
                  $("#auto-follow-party-leader").prop('checked', $.cookie('AutoFollowPartyLeader') != 'false');
                  $("#auto-follow-party-leader").on("click", function () {
                      // every time I join a party in the future, this cookie will determine whether or not I automatically follow the party leader
                      $.cookie('AutoFollowPartyLeader', this.checked, { path: '/', expires: 365 });
                      $.get("/chat/party.ashx", { reqtype: "autoFollowPartyLeader" });
                  });
              </script>
          </div>

            <div id="party_current_game">
                    <table border="0" style="padding: 0px; margin: 0px; border: 0px;">
                        <tr style="padding: 0px; margin: 0px; border: 0px;">
                            <td style="padding: 0px; margin: 0px; border: 0px;">
                            <div id="party_game_thumb">
                            </div>
                            </td>
                            <td style="padding: 0px; margin: 0px; border: 0px;">
                            <div id="party_game_name" style="float: right;">
                            </div>
                                <span id="party_game_follow_me" class="btn-primary btn-small">
                                    <a href="#" class="party-btn-link" onclick="Party.JoinGameWithParty();return false;">Follow</a>
                                </span>
                            <span class="btn-neutral btn-small">
                              <a href="#" class="party-btn-link" onclick="Party.DeclineInvite();return false;">Leave Party</a>
                            </span>
                            </td>
                        </tr>
                    </table>
            </div>
    
        <div class="clear" id="leader_clear">
        </div>
    
      </div>
    </div>

            </div>
            <div class="clear"></div>
        </div>
    <div id='friend_dock_minimized_container' style="">
            <div id="social-dock-tab" class="tab" style="float:right">
                <a id="minChatsTab" href="#">
                    <span onclick="ChatBar.ShowFriends();return false;">
                        <img src="http://images.rbxcdn.com/164e80229d83c8b6e55b1eb671887e54.png" width="9" height="9" style="border: none" />
                        Online
                    </span>
                </a>
            </div>
        </div>
        <div id="friend_dock_container" style="display:none;">
           <div id="friend_dock_titlebar">
               <div class="tab-container" style="float:left;">
                   
                        <div class="tab"><a id="best-friends-tab" style="text-decoration: none" href="#" onclick="ChatBar.TogglePanel('best-friends-tab');return false;"><span>Best Friends</span></a></div>
                                            <div class="tab"><a id="friends-tab" style="text-decoration: none" href="#" onclick="ChatBar.TogglePanel('friends-tab');return false;"><span>Online Friends</span></a></div>
                    <div class="tab"><a id="recents-tab" style="text-decoration: none" href="#" onclick="ChatBar.TogglePanel('recents-tab');return false;"><span>Recent</span></a></div>
                        <div class="tab"><a id="chats-tab" style="text-decoration: none" href="#" onclick="ChatBar.TogglePanel('chats-tab');return false;"><span>Chats</span></a></div>
                </div>
                <span class="tab-container" style="float:right;">
                        <div class="tab" id="party-tab" onclick="Party.ToggleTab(null); return false;">
                            <a href="#">Party</a>
                        </div>
                    <span class="friend_dock_chatsettings " style="display:none">
                        <div style="padding:10px">
                            <div class="chat_settings_group_header">Who can chat with me:</div>
                            <input type="radio" id="chat_settings_all" name="rdoOnline" /> <b>All Users</b><br />
                            <input type="radio" id="chat_settings_friends" name="rdoOnline"                                                                                                 checked = "checked"
 /> <b>Friends</b><br />
                            <input type="radio" id="chat_settings_bestfriends" name="rdoOnline"  /> <b>Best Friends</b><br />
                            <input type="radio" id="chat_settings_noone" name="rdoOnline"  /> <b>No One</b><br />
                                                                <hr />
                                <div class="chat_settings_group_header">Who can party with me:</div>
                                <input type="radio" id="party_settings_all" name="rdoOnline2" /> <b>All Users</b><br />
                                <input type="radio" id="party_settings_friends" name="rdoOnline2"                                                                                                 checked = "checked"
 /> <b>Friends</b><br />
                                <input type="radio" id="party_settings_bestfriends" name="rdoOnline2"  /> <b>Best Friends</b><br />
                                <input type="radio" id="party_settings_noone" name="rdoOnline2"  /> <b>No One</b><br />
                                                                <hr />
                                <div class="chat_settings_group_header">Chat Notifications:</div>
                                <input type="radio" id="chat_settings_soundon" name="rdoNotifications"                                                                                                 checked = "checked"
/> <b>All</b><br />
                                <input type="radio" id="chat_settings_soundoff" name="rdoNotifications" /> <b>None</b><br />
                            <div style="text-align:center; margin-top: 5px;">
                                <input type="button" onclick="ChatBar.ApplySettings();$('.friend_dock_chatsettings').hide();" value="Save">
                            </div>
                        </div>
                    </span>
                    <div id="social-settings-tab" class="tab">
                        <a onclick="$('.friend_dock_chatsettings').toggle(); return false" href="#">Settings</a>&nbsp;&nbsp;&nbsp;
                        <img src="http://images.rbxcdn.com/8a762994af1e122de8ac427005ac3d9b.png" onclick="ChatBar.HideFriends();return false;" width="12" height="13" style="border: none; cursor: pointer" alt="Close chat"/>
                    </div>
               </span>
           </div>
           <div id="friend_dock_thumb_container">
                
                <div id="friends-tab-dock-thumbnails" style="display: none">
                    <div id="friends-tab-dock-thumbnails-empty">No results found.  Find some friends <a href="/Browse.aspx">here</a>.</div>
                </div>
                
                
                <div id="best-friends-tab-dock-thumbnails" style="float:left; display: none">
                    <div id="best-friends-tab-dock-thumbnails-empty">No results? Start off by <a href="/my/editfriends.aspx">adding some Best Friends.</a></div>
                </div>
                
                
                <div id="recents-tab-dock-thumbnails" style="float:left; display: none">
                    <div id="recents-tab-dock-thumbnails-empty">You have not had any recent interactions.</div>
                </div>
                
                
                <div id="chats-tab-dock-thumbnails" style="float:left; display: none">
                    <div id="chats-tab-dock-thumbnails-empty">You are not currently chatting with anyone.</div>
                </div>
           </div>
        </div>
        <div id="jPlayerDiv"></div>
    <script type="text/javascript">
        if (typeof Roblox === "undefined") {
            Roblox = {};
        }
        if (typeof Roblox.Chat === "undefined") {
            Roblox.Chat = {};
        }
        Roblox.Chat.Resources = {
            //<sl:translate>
            reportConfirm: 'Are you sure you would like to report this user?'
            , sendPersonalMessage1: 'This user cannot receive chat messages.  Send them a '
            , sendPersonalMessage2: 'Personal Message'
            , loadingChat: 'Loading Chat'
            , offline: 'Offline'
            , online: 'Online'
            , newMessage: 'New Message!'
            , newMessages: 'New Messages!'
            //</sl:translate>
        };
            
        ChatBar.FriendsEnabled = 'True';
        ChatBar.BestFriendsEnabled = 'True';
        ChatBar.PartyEnabled = 'True';
        ChatBar.MyUserName = "samis2613";
        ChatBar.MaxChatWindows = 4;
        ChatBar.ChatPollInterval = 4000;
        ChatBar.IdleChatPollInterval = ChatBar.ChatPollInterval * ChatBar.PollIntervalFactorForIdle;
        ChatBar.FriendsPollInterval = 40000;
        ChatBar.BestFriendsPollInterval = 30000;
        ChatBar.RecentsPollInterval = 32000;
        ChatBar.ChatReceivedSoundFile = "/chat/sound/chatsound.mp3";
        ChatBar.ChatNotificationsSetting = 'All';
        ChatBar.DiagnosticsEnabled = false;

        $(function()
        {
            try
            {
                ChatBar.OnPageLoad();
            }
            catch (x) { }
        });
    </script>

</div>


    <script type="text/javascript">function urchinTracker() {}</script>


<div id="PlaceLauncherStatusPanel" style="display:none;width:300px">
    <div class="modalPopup blueAndWhite PlaceLauncherModal" style="min-height: 160px">
        <div id="Spinner" class="Spinner" style="margin:0 1em 1em 0; padding:20px 0;">
            <img src="http://images.rbxcdn.com/e998fb4c03e8c2e30792f2f3436e9416.gif" height="32" width="32" alt="Progress" />
        </div>
        <div id="status" style="min-height:40px;text-align:center;margin:5px 20px">
            <div id="Starting" class="PlaceLauncherStatus MadStatusStarting" style="display:block">
                Starting Roblox...
            </div>
            <div id="Waiting" class="PlaceLauncherStatus MadStatusField">Connecting to Players...</div>
            <div id="StatusBackBuffer" class="PlaceLauncherStatus PlaceLauncherStatusBackBuffer MadStatusBackBuffer"></div>
        </div>
        <div style="text-align:center;margin-top:1em">
            <input type="button" class="Button CancelPlaceLauncherButton translate" value="Cancel" />
        </div>
    </div>
</div>


<script type='text/javascript' src='/ab22a643a6030e727444407b4c57bb69.js.gzip'></script>

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
            <a href="/Upgrades/BuildersClubMemberships.aspx?ref=vpr" target="_blank" id="videoPrerollJoinBCButton"></a>
        </div>
    </div>
        <script type="text/javascript" src="http://redir.adap.tv/redir/javascript/vpaid.js"></script>
        <script type="text/javascript" src="http://redir.adap.tv/redir/javascript/adaptvAdPlayer.js"></script>
    <script type="text/javascript">
        Roblox.VideoPreRoll.showVideoPreRoll = true;
        Roblox.VideoPreRoll.loadingBarMaxTime = 33000;
        Roblox.VideoPreRoll.videoOptions.key = "robloxcorporation";
            Roblox.VideoPreRoll.videoOptions.categories = "Age11to12,Male";
                     Roblox.VideoPreRoll.videoOptions.id = "games";
        Roblox.VideoPreRoll.videoLoadingTimeout = 11000;
        Roblox.VideoPreRoll.videoPlayingTimeout = 41000;
        Roblox.VideoPreRoll.videoLogNote = "";
        Roblox.VideoPreRoll.logsEnabled = true;
        Roblox.VideoPreRoll.excludedPlaceIds = "32373412";
            
                Roblox.VideoPreRoll.specificAdOnPlacePageEnabled = true;
                Roblox.VideoPreRoll.specificAdOnPlacePageId = 192800;
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
        <div class="RevisedFooter" >
            <div style="width:200px;margin:10px auto 0 auto;">
                <a href="#" onclick="redirectPlaceLauncherToRegister(); return false;"><div class="RevisedCharacterSelectSignup"></div></a>
                <a class="HaveAccount" href="#" onclick="redirectPlaceLauncherToLogin();return false;">I have an account</a>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    function checkRobloxInstall() {
             return RobloxLaunch.CheckRobloxInstall('/install/download.aspx');
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

<div id="InstallationInstructions"  class="modalPopup blueAndWhite" style="display:none;overflow:hidden" >
    <a id="CancelButton2" onclick="return Roblox.Client._onCancel();" class="ImageButton closeBtnCircle_35h ABCloseCircle"></a>
    <div style="padding-bottom:10px;text-align:center">
                    <img id="win_firefox_install_img" class="InstallInstructionsImage" data-modalwidth="879" data-delaysrc="http://images.rbxcdn.com/2af4ebb41b979e2f240378fc2fa5a517.jpg" data-activationsrc="http://images.rbxcdn.com/902418cdd45d3d443800c55cabbf21d3.jpg" alt="Installation Instructions" />
                    <div style="margin-bottom:-30px">Having trouble installing ROBLOX? <a href='/Download'>Click here!</a></div>
        <br /><br />
    </div>
</div>



<div id="pluginObjDiv" style="height:1px;width:1px;visibility:hidden;position: absolute;top: 0;"></div>
<iframe id="downloadInstallerIFrame" style="visibility:hidden;height:0;width:1px;position:absolute"></iframe>

<script type='text/javascript' src='/96b7d8a3e68372bb75576291dc83e32a.js.gzip'></script>

<script type="text/javascript">
    Roblox.Client._skip = null;
    Roblox.Client._CLSID = '76D50904-6780-4c8b-8986-1A7EE0B1716D';
    Roblox.Client._installHost = 'setup.roblox.com';
    Roblox.Client.ImplementsProxy = true;
    Roblox.Client._silentModeEnabled = true;
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
                <img class="GenericModalImage" alt="generic image" />
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


tagName: -
position: -
top: -
left: -
right: -
bottom: -
display: -
fontSize: -
fontWeight: -
textAlign: -
color: -
backgroundColor: -
overflow: -
boxSizing: -
transform: -
zIndex: -
w     29.313
h     15.2  
15.2
29.313
 
 
 
 
 
 
 
 
 
 
 
 

