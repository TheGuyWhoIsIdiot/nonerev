<?php
$title = "Home";
include_once $_SERVER['DOCUMENT_ROOT'] . '/config/main.php';

if (!isset($_SESSION["user"])) {
    header("Location: /");
    exit;
}

?>


<!DOCTYPE html>
<html xmlns:fb="http://www.facebook.com/2008/fbml">
<!-- MachineID: WEB277 -->
<link rel="stylesheet" type="text/css" href="/_static/css/banner-styles.css?v=S1zqJCYt" />
<link rel="stylesheet" type="text/css" href="/_static/css/iconochive.css?v=qtvMKcIJ" />
<!-- End Wayback Rewrite JS Include -->
<meta http-equiv="X-UA-Compatible" content="IE=edge,requiresActiveX=true"/><title>
  ROBLOX.com
</title>
<link rel="stylesheet" href="/CSS/Base/CSS/1.css"/>
<link rel="icon" type="image/vnd.microsoft.icon" href="/web/20141018235832im_/http://www.roblox.com/favicon.ico"/><title>ROBLOX Forum</title>
    <link rel="stylesheet" href="/web/20141018235832cs_/http://www.roblox.com/Forum/skins/default/style/default.css" type="text/css"/><meta http-equiv="Content-Type" content="text/html; charset=utf-8"/><meta http-equiv="Content-Language" content="en-us"/><meta name="author" content="ROBLOX Corporation"/><meta id="ctl00_metadescription" name="description" content="User-generated MMO gaming site for kids, teens, and adults. Players architect their own worlds. Builders create free online games that simulate the real world. Create and play amazing 3D games. An online gaming cloud and distributed physics engine."/><meta id="ctl00_metakeywords" name="keywords" content="free games, online games, building games, virtual worlds, free mmo, gaming cloud, physics engine"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
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
        
            _gaq.push(['b._setCustomVar', 1, 'Visitor', 'Spider', 2]);
            _gaq.push(['b._trackPageview']);    
        
        
        

    _gaq.push(['c._setAccount', 'UA-26810151-2']);
    _gaq.push(['c._setDomainName', 'roblox.com']);

    (function() {
      var ga = document.createElement('script');
      ga.type = 'text/javascript';
      ga.async = true;
      ga.src = ('https:' == document.location.protocol ? 'https://web.archive.org/web/20141018235832/https://ssl' : 'https://web.archive.org/web/20141018235832/http://www') + '.google-analytics.com/ga.js';
      var s = document.getElementsByTagName('script')[0];
      s.parentNode.insertBefore(ga, s);
    })();

  </script>
<script type="text/javascript" src="//web.archive.org/web/20141018235832js_/http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.11.1.min.js"></script>
<script type="text/javascript">window.jQuery || document.write("<script type='text/javascript' src='/js/jquery/jquery-1.11.1.js'><\/script>")</script>
<script type="text/javascript" src="//web.archive.org/web/20141018235832js_/http://ajax.aspnetcdn.com/ajax/jquery.migrate/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript">window.jQuery || document.write("<script type='text/javascript' src='/js/jquery/jquery-migrate-1.2.1.js'><\/script>")</script>
<script type="text/javascript" src="//web.archive.org/web/20141018235832js_/http://ajax.aspnetcdn.com/ajax/4.0/1/MicrosoftAjax.js"></script>
<script type="text/javascript">window.Sys || document.write("<script type='text/javascript' src='/js/Microsoft/MicrosoftAjax.js'><\/script>")</script>
<script type="text/javascript" src="https://web.archive.org/web/20141018235832js_/http://js.rbxcdn.com/01b68b1f12c0f90da7b7e376d57cbd77.js"></script>
<script type="text/javascript">Roblox.config.externalResources = [];Roblox.config.paths['Pages.Catalog'] = 'https://web.archive.org/web/20141018235832/http://js.rbxcdn.com/9afb52162a22e15bd11d53f626926dda.js';Roblox.config.paths['Pages.CatalogShared'] = 'https://web.archive.org/web/20141018235832/http://js.rbxcdn.com/4eb48eec34ca711d5a7b08a4291ac753.js';Roblox.config.paths['Pages.Messages'] = 'https://web.archive.org/web/20141018235832/http://js.rbxcdn.com/e8cbac58ab4f0d8d4c707700c9f97630.js';Roblox.config.paths['Resources.Messages'] = 'https://web.archive.org/web/20141018235832/http://js.rbxcdn.com/fb9cb43a34372a004b06425a1c69c9c4.js';Roblox.config.paths['Widgets.AvatarImage'] = 'https://web.archive.org/web/20141018235832/http://js.rbxcdn.com/bbaeb48f3312bad4626e00c90746ffc0.js';Roblox.config.paths['Widgets.DropdownMenu'] = 'https://web.archive.org/web/20141018235832/http://js.rbxcdn.com/7b436bae917789c0b84f40fdebd25d97.js';Roblox.config.paths['Widgets.GroupImage'] = 'https://web.archive.org/web/20141018235832/http://js.rbxcdn.com/33d82b98045d49ec5a1f635d14cc7010.js';Roblox.config.paths['Widgets.HierarchicalDropdown'] = 'https://web.archive.org/web/20141018235832/http://js.rbxcdn.com/6b64c2a449f86ea3eddea256a9df96aa.js';Roblox.config.paths['Widgets.ItemImage'] = 'https://web.archive.org/web/20141018235832/http://js.rbxcdn.com/838ec9c8067ba6fd6793a8bdbdb48a5c.js';Roblox.config.paths['Widgets.PlaceImage'] = 'https://web.archive.org/web/20141018235832/http://js.rbxcdn.com/f2697119678d0851cfaa6c2270a727ed.js';Roblox.config.paths['Widgets.Suggestions'] = 'https://web.archive.org/web/20141018235832/http://js.rbxcdn.com/a63d457706dfbc230cf66a9674a1ca8b.js';Roblox.config.paths['Widgets.SurveyModal'] = 'https://web.archive.org/web/20141018235832/http://js.rbxcdn.com/d6e979598c460090eafb6d38231159f6.js';</script><script type="text/javascript">
    $(function () {
        Roblox.JSErrorTracker.initialize({ 'suppressConsoleError': true});
    });
</script><script type="text/javascript" src="https://web.archive.org/web/20141018235832js_/http://js.rbxcdn.com/0a831cc3b392802c34a4c6644d804957.js"></script>

    <script type="text/javascript">
function Roblox_Forums_Middle_728x90_RTP(estimate){rtp['/1015347/Roblox_Forums_Middle_728x90'] = rp_valuation.estimate;}
var rtp = rtp || {};
oz_api="valuation";oz_site="9874/18868";oz_zone="58960";oz_ad_slot_size="728x90";oz_callback=Roblox_Forums_Middle_728x90_RTP;
</script><script type="text/javascript" src="https://web.archive.org/web/20141018235832js_/http://tap-cdn.rubiconproject.com/partner/scripts/rubicon/dorothy.js?pc=9874/18868"></script><script>

function Roblox_Forums_Right_160x600_RTP(estimate){rtp['/1015347/Roblox_Forums_Right_160x600'] = rp_valuation.estimate;}
var rtp = rtp || {};
oz_api="valuation";oz_site="9874/18868";oz_zone="58960";oz_ad_slot_size="160x600";oz_callback=Roblox_Forums_Right_160x600_RTP;
</script><script type="text/javascript" src="https://web.archive.org/web/20141018235832js_/http://tap-cdn.rubiconproject.com/partner/scripts/rubicon/dorothy.js?pc=9874/18868"></script><script>

        googletag.cmd.push(function() {
            Roblox = Roblox || {};
            Roblox.AdsHelper = Roblox.AdsHelper || {};
            Roblox.AdsHelper.slots = [];
            Roblox.AdsHelper.slots = Roblox.AdsHelper.slots || []; Roblox.AdsHelper.slots.push({slot:googletag.defineSlot("/1015347/Roblox_Forums_Middle_728x90", [728, 90], "3438313737333932").addService(googletag.pubads()), id: "3438313737333932", path: "/1015347/Roblox_Forums_Middle_728x90"});
Roblox.AdsHelper.slots = Roblox.AdsHelper.slots || []; Roblox.AdsHelper.slots.push({slot:googletag.defineSlot("/1015347/Roblox_Forums_Right_160x600", [160, 600], "3433323332353739").addService(googletag.pubads()), id: "3433323332353739", path: "/1015347/Roblox_Forums_Right_160x600"});
 
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

            googletag.pubads().setTargeting("Age", "Unknown");  
                            googletag.pubads().setTargeting("Env",  "Production");
                        googletag.pubads().enableSingleRequest();
            googletag.pubads().collapseEmptyDivs();
            googletag.enableServices();
        });
    </script>  
</head>
<body class="">
    <script type="text/javascript">Roblox.XsrfToken.setToken('');</script>
 
    <script type="text/javascript">
        if (top.location != self.location) {
            top.location = self.location.href;
        }
    </script>
  
<style type="text/css">
    
</style>
<form name="aspnetForm" method="post" action="/web/20141018235832/http://www.roblox.com/Forum/ShowForum.aspx?ForumID=46" id="aspnetForm" class="nav-container no-gutter-ads">
<div>
<input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="/wEPDwUKMTAxMjgxNTY5NQ9kFgJmD2QWAgIBEBYEHgVjbGFzcwUbbmF2LWNvbnRhaW5lciBuby1ndXR0ZXItYWRzHgZhY3Rpb24FIC9Gb3J1bS9TaG93Rm9ydW0uYXNweD9Gb3J1bUlEPTQ2ZBYEAgYPDxYCHgdWaXNpYmxlaGRkAgkPZBYCZg9kFgICAQ9kFgJmD2QWBgINDw8WAh4MdG90YWxSZWNvcmRzAt3GJ2QWAmYPZBYCZg9kFgRmD2QWAmYPDxYCHgRUZXh0BRBQYWdlIDEgb2YgMjUsOTIyZGQCAQ9kFgJmD2QWAgICD2QWBGYPFgIfAmgWAgIBDw8WAh4PQ29tbWFuZEFyZ3VtZW50BQItMWRkAgEPZBYCAgEPDxYCHwUFATFkZAIVDxBkZBYBZmQCFw8PFgIfAmdkZBgBBSNjdGwwMCRyYnhHb29nbGVBbmFseXRpY3MkTXVsdGlWaWV3MQ8PZAICZL+1rdN7272z0bE8hux49wrdWSKR"/>
</div>


<script src="/web/20141018235832js_/http://www.roblox.com/ScriptResource.axd?d=fUcmQ77_qXelWdB-K_diHa9mmXujxAW5J8cps-k6LoWasTnCFwNZNSKhaHCAoB3EUUzTp857O3yjWqRWhMDSfzRoe6UnrpUJtMVOjzOQn3vnelj853af8Ch23XDj7SvuaMk5XCab_IwJMs60-kqO3doRJg3FIzhxsNba5uhT-RP1JToPjipqn-Al8qa2t2FNAfo3mGmBscJ8zP6Lk9s5Yo8a_fIchatcH3FtO0ounOz2268sHhBwGkJfIILxKvzz-pkHUc2zlMbc5mz6mkILhf63zGxsF-r5EXLLtAbdCPhaHUjiGgba7082Wbe5L3eiwG-LKSYidj5qK36t5HWJipyVFAcNbWkNTNzDPkva0wNzPR__tGKU7PmLaiq-O8uun1AvinhtmrMm8B7ZZ6QA8JnsgNsLpfynp2-ZZ5l1oHBf7LeayyEN2t-4HJ2IdQcoGqTkGg2" type="text/javascript"></script>
<div>

  <input type="hidden" name="__EVENTVALIDATION" id="__EVENTVALIDATION" value="/wEWEwLB5tqGCwLzxs7FAgLzpdf2DAKI04JUAofTglQChtOCVAK01t3KDgK11t3KDgKir8HuDgLh8ZfhBwL+8ZfhBwL88ZfhBwL48ZfhBwL+8efiBwL88dfiBwLm8dfiBwLYsJA1AtawyDYCq6aPN//NsqmNnjL1qgjagF/1FaXn/Ps6"/>
</div>
    <div id="fb-root">
    </div>
    
    
         
    
    
    

<div class="nav-icon" onselectstart="return false;">
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



        <script type="text/javascript">Roblox.FixedUI.gutterAdsEnabled=false;</script>
        

        <div id="Container">
            
            
        </div>

    
<div id="AdvertisingLeaderboard">
    
<div style="width: 728px">
    <span id="3438313737333932" class="GPTAd banner" data-js-adtype="gptAd">
        <script type="text/javascript">
            googletag.cmd.push(function () {
                googletag.display("3438313737333932");
            });
        </script>
    </span>
    <div class="ad-annotations " style="width: 728px">
        <span class="ad-identification">Advertisement
            <span> - </span>
            <a href="" class="UpsellAdButton" title="Click to learn how to remove ads!">Why am I seeing ads?</a>
        </span>
            <a class="BadAdButton" href="/web/20141018235832/http://www.roblox.com/Ads/ReportAd.aspx" title="click to report an offensive ad">Report</a>
    </div>
</div>
</div>


        <noscript><div class="SystemAlert"><div class="SystemAlertText">Please enable Javascript to use all the features on this site.</div></div></noscript>
        
        <div id="BodyWrapper">
            <div id="RepositionBody">
                <div id="Body" style="width:970px;">
                    

  <table width="100%" height="100%" cellspacing="0" cellpadding="0" border="0">
    <tr valign="top">
      <!-- left column -->
      <td class="LeftColumn">&nbsp;&nbsp;&nbsp;</td>

      <!-- center column -->
      <td id="ctl00_cphRoblox_CenterColumn" class="CenterColumn">
        <br>
        <span id="ctl00_cphRoblox_ThreadView1">

<table cellpadding="0" width="100%">
  <tr>
    <td align="left"><span id="ctl00_cphRoblox_ThreadView1_ctl00_Whereami1" name="Whereami1">
<div>
    <nobr>
        <a id="ctl00_cphRoblox_ThreadView1_ctl00_Whereami1_ctl00_LinkHome" class="linkMenuSink notranslate" href="/web/20141018235832/http://www.roblox.com/Forum/Default.aspx">ROBLOX Forum</a>
    </nobr>
    <nobr>
        <span id="ctl00_cphRoblox_ThreadView1_ctl00_Whereami1_ctl00_ForumGroupSeparator" class="normalTextSmallBold"> » </span>
        <a id="ctl00_cphRoblox_ThreadView1_ctl00_Whereami1_ctl00_LinkForumGroup" class="linkMenuSink notranslate" href="/web/20141018235832/http://www.roblox.com/Forum/ShowForumGroup.aspx?ForumGroupID=1">ROBLOX</a>
    </nobr>
    <nobr>
        <span id="ctl00_cphRoblox_ThreadView1_ctl00_Whereami1_ctl00_ForumSeparator" class="normalTextSmallBold"> » </span>
        <a id="ctl00_cphRoblox_ThreadView1_ctl00_Whereami1_ctl00_LinkForum" class="linkMenuSink notranslate" href="/web/20141018235832/http://www.roblox.com/Forum/ShowForum.aspx?ForumID=46">All Things ROBLOX</a>
    </nobr>
</div></span></td>
        <td align="right"><span id="ctl00_cphRoblox_ThreadView1_ctl00_Navigationmenu1">

<div id="forum-nav" style="text-align: right">
  <a id="ctl00_cphRoblox_ThreadView1_ctl00_Navigationmenu1_ctl00_HomeMenu" class="menuTextLink first" href="/web/20141018235832/http://www.roblox.com/Forum/Default.aspx">Home</a>
  <a id="ctl00_cphRoblox_ThreadView1_ctl00_Navigationmenu1_ctl00_SearchMenu" class="menuTextLink" href="/web/20141018235832/http://www.roblox.com/Forum/Search/default.aspx">Search</a>
  
  
  
  
  
  
  
</div>
</span></td>
  </tr>
  <tr>
    <td>
      &nbsp;
    </td>
  </tr>
  <tr style="padding-bottom:5px;">
    <td valign="bottom" align="left">
        <a id="ctl00_cphRoblox_ThreadView1_ctl00_NewThreadLinkTop" class="btn-control btn-control-medium verified-email-act" href="/web/20141018235832/http://www.roblox.com/Forum/AddPost.aspx?ForumID=46">
        New Thread<span class="btn-text">New Thread</span>
      </a>
    </td>
    <td align="right">
        <span class="normalTextSmallBold">Search this forum: </span>
      <input name="ctl00$cphRoblox$ThreadView1$ctl00$Search" type="text" id="ctl00_cphRoblox_ThreadView1_ctl00_Search"/>
      <input type="submit" name="ctl00$cphRoblox$ThreadView1$ctl00$SearchButton" value=" Go " id="ctl00_cphRoblox_ThreadView1_ctl00_SearchButton" class="translate btn-control btn-control-medium forum-btn-control-medium"/>
        </td>
  </tr>
  <tr>
    <td valign="top" colspan="2">
        <div style="height:7px"></div>
        <table id="ctl00_cphRoblox_ThreadView1_ctl00_ThreadList" class="tableBorder" cellspacing="1" cellpadding="3" border="0" style="width:100%;">
  <tr class="forum-table-header">
    <th align="left" colspan="3" style="height:25px;">&nbsp;Subject&nbsp;</th><th align="left" style="white-space:nowrap;">&nbsp;Author&nbsp;</th><th align="center">&nbsp;Replies&nbsp;</th><th align="center">&nbsp;Views&nbsp;</th><th align="center" style="white-space:nowrap;">&nbsp;Last Post&nbsp;</th>
  </tr><tr class="forum-table-row">
    <td align="center" valign="middle" style="width:25px;"><img title="Popular post (Not Read)" src="/web/20141018235832im_/http://www.roblox.com/images/Forums/popular-unread.png" style="border-width:0px;"/></td><td class="notranslate" style="height:25px;"><a class="post-list-subject" href="/web/20141018235832/http://www.roblox.com/Forum/ShowPost.aspx?PostID=80620879"><div class="thread-link-outer-wrapper">
      <div class="thread-link-container notranslate">
        The Rules for All Forums
      </div>
    </div></a></td><td class="notranslate" style="width:80px;width:90px;padding-right:12px;"></td><td align="left" style="width:100px;"><a class="post-list-author notranslate" href="/web/20141018235832/http://www.roblox.com/User.aspx?UserName=reesemcblox"><div class="thread-link-outer-wrapper">
      <div class="normalTextSmaller thread-link-container">
        reesemcblox
      </div>
    </div></a></td><td align="center" style="width:50px;"><span class="normalTextSmaller">-</span></td><td align="center" style="width:50px;"><span class="normalTextSmaller">46,156,864</span></td><td align="center" style="width:100px;white-space:nowrap;"><a class="last-post" href="/web/20141018235832/http://www.roblox.com/Forum/ShowPost.aspx?PostID=80620879#80620879"><div>
      <span class="normalTextSmaller"><b>Pinned Post</b></span>
    </div><div class="normalTextSmaller notranslate">reesemcblox</div></a></td>
  </tr><tr class="forum-table-row">
    <td align="center" valign="middle" style="width:25px;"><img title="Popular post (Not Read)" src="/web/20141018235832im_/http://www.roblox.com/images/Forums/popular-unread.png" style="border-width:0px;"/></td><td class="notranslate" style="height:25px;"><a class="post-list-subject" href="/web/20141018235832/http://www.roblox.com/Forum/ShowPost.aspx?PostID=117729654"><div class="thread-link-outer-wrapper">
      <div class="thread-link-container notranslate">
        Just. Don&#39;t. (READ BEFORE YOU POST IN THIS FORUM)
      </div>
    </div></a></td><td class="notranslate" style="width:80px;width:90px;padding-right:12px;"><a class="linkSmall" href="/web/20141018235832/http://www.roblox.com/Forum/ShowPost.aspx?PostID=117729654&amp;PageIndex=1">1</a><span class="normalTextSmall">, </span><a class="linkSmall" href="/web/20141018235832/http://www.roblox.com/Forum/ShowPost.aspx?PostID=117729654&amp;PageIndex=2">2</a><span class="normalTextSmall">, </span><a class="linkSmall" href="/web/20141018235832/http://www.roblox.com/Forum/ShowPost.aspx?PostID=117729654&amp;PageIndex=3">3</a><span class="normalTextSmall"> ... </span><a class="linkSmall" href="/web/20141018235832/http://www.roblox.com/Forum/ShowPost.aspx?PostID=117729654&amp;PageIndex=80">80</a><span class="normalTextSmall">, </span><a class="linkSmall" href="/web/20141018235832/http://www.roblox.com/Forum/ShowPost.aspx?PostID=117729654&amp;PageIndex=81">81</a></td><td align="left" style="width:100px;"><a class="post-list-author notranslate" href="/web/20141018235832/http://www.roblox.com/User.aspx?UserName=chiefjustus"><div class="thread-link-outer-wrapper">
      <div class="normalTextSmaller thread-link-container">
        chiefjustus
      </div>
    </div></a></td><td align="center" style="width:50px;"><span class="normalTextSmaller">2,014</span></td><td align="center" style="width:50px;"><span class="normalTextSmaller">93,050</span></td><td align="center" style="width:100px;white-space:nowrap;"><a class="last-post" href="/web/20141018235832/http://www.roblox.com/Forum/ShowPost.aspx?PostID=117729654#120456842"><div>
      <span class="normalTextSmaller"><b>Pinned Post</b></span>
    </div><div class="normalTextSmaller notranslate">iamjonroncinabon</div></a></td>
  </tr><tr class="forum-table-row">
    <td align="center" valign="middle" style="width:25px;"><img title="Post (Not Read)" src="/web/20141018235832im_/http://www.roblox.com/images/Forums/thread-unread.png" style="border-width:0px;"/></td><td class="notranslate" style="height:25px;"><a class="post-list-subject" href="/web/20141018235832/http://www.roblox.com/Forum/ShowPost.aspx?PostID=148198018"><div class="thread-link-outer-wrapper">
      <div class="thread-link-container notranslate">
        What tycoon should I build?
      </div>
    </div></a></td><td class="notranslate" style="width:80px;width:90px;padding-right:12px;"></td><td align="left" style="width:100px;"><a class="post-list-author notranslate" href="/web/20141018235832/http://www.roblox.com/User.aspx?UserName=FierceLeviathan"><div class="thread-link-outer-wrapper">
      <div class="normalTextSmaller thread-link-container">
        FierceLeviathan
      </div>
    </div></a></td><td align="center" style="width:50px;"><span class="normalTextSmaller">8</span></td><td align="center" style="width:50px;"><span class="normalTextSmaller">22</span></td><td align="center" style="width:100px;white-space:nowrap;"><a class="last-post" href="/web/20141018235832/http://www.roblox.com/Forum/ShowPost.aspx?PostID=148198018#148198449"><div>
      <span class="normalTextSmaller"><b>06:58 PM</b></span>
    </div><div class="normalTextSmaller notranslate">PepperpwniPizza</div></a></td>
  </tr><tr class="forum-table-row">
    <td align="center" valign="middle" style="width:25px;"><img title="Popular post (Not Read)" src="/web/20141018235832im_/http://www.roblox.com/images/Forums/popular-unread.png" style="border-width:0px;"/></td><td class="notranslate" style="height:25px;"><a class="post-list-subject" href="/web/20141018235832/http://www.roblox.com/Forum/ShowPost.aspx?PostID=147948155"><div class="thread-link-outer-wrapper">
      <div class="thread-link-container notranslate">
        Hallows Eve 2014 Official Guide
      </div>
    </div></a></td><td class="notranslate" style="width:80px;width:90px;padding-right:12px;"><a class="linkSmall" href="/web/20141018235832/http://www.roblox.com/Forum/ShowPost.aspx?PostID=147948155&amp;PageIndex=1">1</a><span class="normalTextSmall">, </span><a class="linkSmall" href="/web/20141018235832/http://www.roblox.com/Forum/ShowPost.aspx?PostID=147948155&amp;PageIndex=2">2</a><span class="normalTextSmall">, </span><a class="linkSmall" href="/web/20141018235832/http://www.roblox.com/Forum/ShowPost.aspx?PostID=147948155&amp;PageIndex=3">3</a></td><td align="left" style="width:100px;"><a class="post-list-author notranslate" href="/web/20141018235832/http://www.roblox.com/User.aspx?UserName=ViralMayhem"><div class="thread-link-outer-wrapper">
      <div class="normalTextSmaller thread-link-container">
        ViralMayhem
      </div>
    </div></a></td><td align="center" style="width:50px;"><span class="normalTextSmaller">63</span></td><td align="center" style="width:50px;"><span class="normalTextSmaller">1,893</span></td><td align="center" style="width:100px;white-space:nowrap;"><a class="last-post" href="/web/20141018235832/http://www.roblox.com/Forum/ShowPost.aspx?PostID=147948155#148198442"><div>
      <span class="normalTextSmaller"><b>06:58 PM</b></span>
    </div><div class="normalTextSmaller notranslate">ViralMayhem</div></a></td>
  </tr><tr class="forum-table-row">
    <td align="center" valign="middle" style="width:25px;"><img title="Post (Not Read)" src="/web/20141018235832im_/http://www.roblox.com/images/Forums/thread-unread.png" style="border-width:0px;"/></td><td class="notranslate" style="height:25px;"><a class="post-list-subject" href="/web/20141018235832/http://www.roblox.com/Forum/ShowPost.aspx?PostID=148196758"><div class="thread-link-outer-wrapper">
      <div class="thread-link-container notranslate">
        If you could go back in time, what would you do with ROBLOX?
      </div>
    </div></a></td><td class="notranslate" style="width:80px;width:90px;padding-right:12px;"></td><td align="left" style="width:100px;"><a class="post-list-author notranslate" href="/web/20141018235832/http://www.roblox.com/User.aspx?UserName=Tymaster10"><div class="thread-link-outer-wrapper">
      <div class="normalTextSmaller thread-link-container">
        Tymaster10
      </div>
    </div></a></td><td align="center" style="width:50px;"><span class="normalTextSmaller">23</span></td><td align="center" style="width:50px;"><span class="normalTextSmaller">86</span></td><td align="center" style="width:100px;white-space:nowrap;"><a class="last-post" href="/web/20141018235832/http://www.roblox.com/Forum/ShowPost.aspx?PostID=148196758#148198436"><div>
      <span class="normalTextSmaller"><b>06:58 PM</b></span>
    </div><div class="normalTextSmaller notranslate">P0Ptartfudge</div></a></td>
  </tr><tr class="forum-table-row">
    <td align="center" valign="middle" style="width:25px;"><img title="Post (Not Read)" src="/web/20141018235832im_/http://www.roblox.com/images/Forums/thread-unread.png" style="border-width:0px;"/></td><td class="notranslate" style="height:25px;"><a class="post-list-subject" href="/web/20141018235832/http://www.roblox.com/Forum/ShowPost.aspx?PostID=148198286"><div class="thread-link-outer-wrapper">
      <div class="thread-link-container notranslate">
        Gifts r not werf it
      </div>
    </div></a></td><td class="notranslate" style="width:80px;width:90px;padding-right:12px;"></td><td align="left" style="width:100px;"><a class="post-list-author notranslate" href="/web/20141018235832/http://www.roblox.com/User.aspx?UserName=Evolucian"><div class="thread-link-outer-wrapper">
      <div class="normalTextSmaller thread-link-container">
        Evolucian
      </div>
    </div></a></td><td align="center" style="width:50px;"><span class="normalTextSmaller">2</span></td><td align="center" style="width:50px;"><span class="normalTextSmaller">18</span></td><td align="center" style="width:100px;white-space:nowrap;"><a class="last-post" href="/web/20141018235832/http://www.roblox.com/Forum/ShowPost.aspx?PostID=148198286#148198427"><div>
      <span class="normalTextSmaller"><b>06:57 PM</b></span>
    </div><div class="normalTextSmaller notranslate">Evolucian</div></a></td>
  </tr><tr class="forum-table-row">
    <td align="center" valign="middle" style="width:25px;"><img title="Post (Not Read)" src="/web/20141018235832im_/http://www.roblox.com/images/Forums/thread-unread.png" style="border-width:0px;"/></td><td class="notranslate" style="height:25px;"><a class="post-list-subject" href="/web/20141018235832/http://www.roblox.com/Forum/ShowPost.aspx?PostID=148198327"><div class="thread-link-outer-wrapper">
      <div class="thread-link-container notranslate">
        To do list
      </div>
    </div></a></td><td class="notranslate" style="width:80px;width:90px;padding-right:12px;"></td><td align="left" style="width:100px;"><a class="post-list-author notranslate" href="/web/20141018235832/http://www.roblox.com/User.aspx?UserName=iTEXEL"><div class="thread-link-outer-wrapper">
      <div class="normalTextSmaller thread-link-container">
        iTEXEL
      </div>
    </div></a></td><td align="center" style="width:50px;"><span class="normalTextSmaller">2</span></td><td align="center" style="width:50px;"><span class="normalTextSmaller">10</span></td><td align="center" style="width:100px;white-space:nowrap;"><a class="last-post" href="/web/20141018235832/http://www.roblox.com/Forum/ShowPost.aspx?PostID=148198327#148198402"><div>
      <span class="normalTextSmaller"><b>06:57 PM</b></span>
    </div><div class="normalTextSmaller notranslate">Tymaster10</div></a></td>
  </tr><tr class="forum-table-row">
    <td align="center" valign="middle" style="width:25px;"><img title="Post (Not Read)" src="/web/20141018235832im_/http://www.roblox.com/images/Forums/thread-unread.png" style="border-width:0px;"/></td><td class="notranslate" style="height:25px;"><a class="post-list-subject" href="/web/20141018235832/http://www.roblox.com/Forum/ShowPost.aspx?PostID=148198337"><div class="thread-link-outer-wrapper">
      <div class="thread-link-container notranslate">
        new disaster simulator
      </div>
    </div></a></td><td class="notranslate" style="width:80px;width:90px;padding-right:12px;"></td><td align="left" style="width:100px;"><a class="post-list-author notranslate" href="/web/20141018235832/http://www.roblox.com/User.aspx?UserName=Darknights4321"><div class="thread-link-outer-wrapper">
      <div class="normalTextSmaller thread-link-container">
        Darknights4321
      </div>
    </div></a></td><td align="center" style="width:50px;"><span class="normalTextSmaller">1</span></td><td align="center" style="width:50px;"><span class="normalTextSmaller">8</span></td><td align="center" style="width:100px;white-space:nowrap;"><a class="last-post" href="/web/20141018235832/http://www.roblox.com/Forum/ShowPost.aspx?PostID=148198337#148198399"><div>
      <span class="normalTextSmaller"><b>06:57 PM</b></span>
    </div><div class="normalTextSmaller notranslate">0nesh0t</div></a></td>
  </tr><tr class="forum-table-row">
    <td align="center" valign="middle" style="width:25px;"><img title="Post (Not Read)" src="/web/20141018235832im_/http://www.roblox.com/images/Forums/thread-unread.png" style="border-width:0px;"/></td><td class="notranslate" style="height:25px;"><a class="post-list-subject" href="/web/20141018235832/http://www.roblox.com/Forum/ShowPost.aspx?PostID=148198185"><div class="thread-link-outer-wrapper">
      <div class="thread-link-container notranslate">
        Took 2 weeks to get 20k rap
      </div>
    </div></a></td><td class="notranslate" style="width:80px;width:90px;padding-right:12px;"></td><td align="left" style="width:100px;"><a class="post-list-author notranslate" href="/web/20141018235832/http://www.roblox.com/User.aspx?UserName=stupy"><div class="thread-link-outer-wrapper">
      <div class="normalTextSmaller thread-link-container">
        stupy
      </div>
    </div></a></td><td align="center" style="width:50px;"><span class="normalTextSmaller">3</span></td><td align="center" style="width:50px;"><span class="normalTextSmaller">21</span></td><td align="center" style="width:100px;white-space:nowrap;"><a class="last-post" href="/web/20141018235832/http://www.roblox.com/Forum/ShowPost.aspx?PostID=148198185#148198374"><div>
      <span class="normalTextSmaller"><b>06:57 PM</b></span>
    </div><div class="normalTextSmaller notranslate">stupy</div></a></td>
  </tr><tr class="forum-table-row">
    <td align="center" valign="middle" style="width:25px;"><img title="Post (Not Read)" src="/web/20141018235832im_/http://www.roblox.com/images/Forums/thread-unread.png" style="border-width:0px;"/></td><td class="notranslate" style="height:25px;"><a class="post-list-subject" href="/web/20141018235832/http://www.roblox.com/Forum/ShowPost.aspx?PostID=148197373"><div class="thread-link-outer-wrapper">
      <div class="thread-link-container notranslate">
        I have the original Ghosdeeri.
      </div>
    </div></a></td><td class="notranslate" style="width:80px;width:90px;padding-right:12px;"></td><td align="left" style="width:100px;"><a class="post-list-author notranslate" href="/web/20141018235832/http://www.roblox.com/User.aspx?UserName=Tymaster10"><div class="thread-link-outer-wrapper">
      <div class="normalTextSmaller thread-link-container">
        Tymaster10
      </div>
    </div></a></td><td align="center" style="width:50px;"><span class="normalTextSmaller">6</span></td><td align="center" style="width:50px;"><span class="normalTextSmaller">57</span></td><td align="center" style="width:100px;white-space:nowrap;"><a class="last-post" href="/web/20141018235832/http://www.roblox.com/Forum/ShowPost.aspx?PostID=148197373#148198339"><div>
      <span class="normalTextSmaller"><b>06:56 PM</b></span>
    </div><div class="normalTextSmaller notranslate">h5h1hdhowes</div></a></td>
  </tr><tr class="forum-table-row">
    <td align="center" valign="middle" style="width:25px;"><img title="Post (Not Read)" src="/web/20141018235832im_/http://www.roblox.com/images/Forums/thread-unread.png" style="border-width:0px;"/></td><td class="notranslate" style="height:25px;"><a class="post-list-subject" href="/web/20141018235832/http://www.roblox.com/Forum/ShowPost.aspx?PostID=148198049"><div class="thread-link-outer-wrapper">
      <div class="thread-link-container notranslate">
        Witching hour 2014
      </div>
    </div></a></td><td class="notranslate" style="width:80px;width:90px;padding-right:12px;"></td><td align="left" style="width:100px;"><a class="post-list-author notranslate" href="/web/20141018235832/http://www.roblox.com/User.aspx?UserName=StrangledSouls"><div class="thread-link-outer-wrapper">
      <div class="normalTextSmaller thread-link-container">
        StrangledSouls
      </div>
    </div></a></td><td align="center" style="width:50px;"><span class="normalTextSmaller">7</span></td><td align="center" style="width:50px;"><span class="normalTextSmaller">22</span></td><td align="center" style="width:100px;white-space:nowrap;"><a class="last-post" href="/web/20141018235832/http://www.roblox.com/Forum/ShowPost.aspx?PostID=148198049#148198336"><div>
      <span class="normalTextSmaller"><b>06:56 PM</b></span>
    </div><div class="normalTextSmaller notranslate">3kun</div></a></td>
  </tr><tr class="forum-table-row">
    <td align="center" valign="middle" style="width:25px;"><img title="Post (Not Read)" src="/web/20141018235832im_/http://www.roblox.com/images/Forums/thread-unread.png" style="border-width:0px;"/></td><td class="notranslate" style="height:25px;"><a class="post-list-subject" href="/web/20141018235832/http://www.roblox.com/Forum/ShowPost.aspx?PostID=148197159"><div class="thread-link-outer-wrapper">
      <div class="thread-link-container notranslate">
        people who buy the big gift b all like
      </div>
    </div></a></td><td class="notranslate" style="width:80px;width:90px;padding-right:12px;"></td><td align="left" style="width:100px;"><a class="post-list-author notranslate" href="/web/20141018235832/http://www.roblox.com/User.aspx?UserName=h5h1hdhowes"><div class="thread-link-outer-wrapper">
      <div class="normalTextSmaller thread-link-container">
        h5h1hdhowes
      </div>
    </div></a></td><td align="center" style="width:50px;"><span class="normalTextSmaller">7</span></td><td align="center" style="width:50px;"><span class="normalTextSmaller">54</span></td><td align="center" style="width:100px;white-space:nowrap;"><a class="last-post" href="/web/20141018235832/http://www.roblox.com/Forum/ShowPost.aspx?PostID=148197159#148198297"><div>
      <span class="normalTextSmaller"><b>06:55 PM</b></span>
    </div><div class="normalTextSmaller notranslate">P0Ptartfudge</div></a></td>
  </tr><tr class="forum-table-row">
    <td align="center" valign="middle" style="width:25px;"><img title="Post (Not Read)" src="/web/20141018235832im_/http://www.roblox.com/images/Forums/thread-unread.png" style="border-width:0px;"/></td><td class="notranslate" style="height:25px;"><a class="post-list-subject" href="/web/20141018235832/http://www.roblox.com/Forum/ShowPost.aspx?PostID=148197810"><div class="thread-link-outer-wrapper">
      <div class="thread-link-container notranslate">
        Roblox make this update please.
      </div>
    </div></a></td><td class="notranslate" style="width:80px;width:90px;padding-right:12px;"></td><td align="left" style="width:100px;"><a class="post-list-author notranslate" href="/web/20141018235832/http://www.roblox.com/User.aspx?UserName=zeepicdeveloper"><div class="thread-link-outer-wrapper">
      <div class="normalTextSmaller thread-link-container">
        zeepicdeveloper
      </div>
    </div></a></td><td align="center" style="width:50px;"><span class="normalTextSmaller">12</span></td><td align="center" style="width:50px;"><span class="normalTextSmaller">44</span></td><td align="center" style="width:100px;white-space:nowrap;"><a class="last-post" href="/web/20141018235832/http://www.roblox.com/Forum/ShowPost.aspx?PostID=148197810#148198253"><div>
      <span class="normalTextSmaller"><b>06:55 PM</b></span>
    </div><div class="normalTextSmaller notranslate">suprman1114</div></a></td>
  </tr><tr class="forum-table-row">
    <td align="center" valign="middle" style="width:25px;"><img title="Post (Not Read)" src="/web/20141018235832im_/http://www.roblox.com/images/Forums/thread-unread.png" style="border-width:0px;"/></td><td class="notranslate" style="height:25px;"><a class="post-list-subject" href="/web/20141018235832/http://www.roblox.com/Forum/ShowPost.aspx?PostID=148198193"><div class="thread-link-outer-wrapper">
      <div class="thread-link-container notranslate">
        I&#39;m Glad they patched the Comment glitch.
      </div>
    </div></a></td><td class="notranslate" style="width:80px;width:90px;padding-right:12px;"></td><td align="left" style="width:100px;"><a class="post-list-author notranslate" href="/web/20141018235832/http://www.roblox.com/User.aspx?UserName=memonkey16"><div class="thread-link-outer-wrapper">
      <div class="normalTextSmaller thread-link-container">
        memonkey16
      </div>
    </div></a></td><td align="center" style="width:50px;"><span class="normalTextSmaller">-</span></td><td align="center" style="width:50px;"><span class="normalTextSmaller">11</span></td><td align="center" style="width:100px;white-space:nowrap;"><a class="last-post" href="/web/20141018235832/http://www.roblox.com/Forum/ShowPost.aspx?PostID=148198193#148198193"><div>
      <span class="normalTextSmaller"><b>06:54 PM</b></span>
    </div><div class="normalTextSmaller notranslate">memonkey16</div></a></td>
  </tr><tr class="forum-table-row">
    <td align="center" valign="middle" style="width:25px;"><img title="Post (Not Read)" src="/web/20141018235832im_/http://www.roblox.com/images/Forums/thread-unread.png" style="border-width:0px;"/></td><td class="notranslate" style="height:25px;"><a class="post-list-subject" href="/web/20141018235832/http://www.roblox.com/Forum/ShowPost.aspx?PostID=148197932"><div class="thread-link-outer-wrapper">
      <div class="thread-link-container notranslate">
        &quot;Welcome to the town of Robloxia&quot; is copied too much.
      </div>
    </div></a></td><td class="notranslate" style="width:80px;width:90px;padding-right:12px;"></td><td align="left" style="width:100px;"><a class="post-list-author notranslate" href="/web/20141018235832/http://www.roblox.com/User.aspx?UserName=suprman1114"><div class="thread-link-outer-wrapper">
      <div class="normalTextSmaller thread-link-container">
        suprman1114
      </div>
    </div></a></td><td align="center" style="width:50px;"><span class="normalTextSmaller">3</span></td><td align="center" style="width:50px;"><span class="normalTextSmaller">25</span></td><td align="center" style="width:100px;white-space:nowrap;"><a class="last-post" href="/web/20141018235832/http://www.roblox.com/Forum/ShowPost.aspx?PostID=148197932#148198086"><div>
      <span class="normalTextSmaller"><b>06:52 PM</b></span>
    </div><div class="normalTextSmaller notranslate">CKbackup</div></a></td>
  </tr><tr class="forum-table-row">
    <td align="center" valign="middle" style="width:25px;"><img title="Post (Not Read)" src="/web/20141018235832im_/http://www.roblox.com/images/Forums/thread-unread.png" style="border-width:0px;"/></td><td class="notranslate" style="height:25px;"><a class="post-list-subject" href="/web/20141018235832/http://www.roblox.com/Forum/ShowPost.aspx?PostID=148197696"><div class="thread-link-outer-wrapper">
      <div class="thread-link-container notranslate">
        hi
      </div>
    </div></a></td><td class="notranslate" style="width:80px;width:90px;padding-right:12px;"></td><td align="left" style="width:100px;"><a class="post-list-author notranslate" href="/web/20141018235832/http://www.roblox.com/User.aspx?UserName=IronyxIronicxIron"><div class="thread-link-outer-wrapper">
      <div class="normalTextSmaller thread-link-container">
        IronyxIronicxIron
      </div>
    </div></a></td><td align="center" style="width:50px;"><span class="normalTextSmaller">5</span></td><td align="center" style="width:50px;"><span class="normalTextSmaller">22</span></td><td align="center" style="width:100px;white-space:nowrap;"><a class="last-post" href="/web/20141018235832/http://www.roblox.com/Forum/ShowPost.aspx?PostID=148197696#148197904"><div>
      <span class="normalTextSmaller"><b>06:50 PM</b></span>
    </div><div class="normalTextSmaller notranslate">Zythius</div></a></td>
  </tr><tr class="forum-table-row">
    <td align="center" valign="middle" style="width:25px;"><img title="Post (Not Read)" src="/web/20141018235832im_/http://www.roblox.com/images/Forums/thread-unread.png" style="border-width:0px;"/></td><td class="notranslate" style="height:25px;"><a class="post-list-subject" href="/web/20141018235832/http://www.roblox.com/Forum/ShowPost.aspx?PostID=148197891"><div class="thread-link-outer-wrapper">
      <div class="thread-link-container notranslate">
        Help?
      </div>
    </div></a></td><td class="notranslate" style="width:80px;width:90px;padding-right:12px;"></td><td align="left" style="width:100px;"><a class="post-list-author notranslate" href="/web/20141018235832/http://www.roblox.com/User.aspx?UserName=abq4"><div class="thread-link-outer-wrapper">
      <div class="normalTextSmaller thread-link-container">
        abq4
      </div>
    </div></a></td><td align="center" style="width:50px;"><span class="normalTextSmaller">-</span></td><td align="center" style="width:50px;"><span class="normalTextSmaller">5</span></td><td align="center" style="width:100px;white-space:nowrap;"><a class="last-post" href="/web/20141018235832/http://www.roblox.com/Forum/ShowPost.aspx?PostID=148197891#148197891"><div>
      <span class="normalTextSmaller"><b>06:49 PM</b></span>
    </div><div class="normalTextSmaller notranslate">abq4</div></a></td>
  </tr><tr class="forum-table-row">
    <td align="center" valign="middle" style="width:25px;"><img title="Post (Not Read)" src="/web/20141018235832im_/http://www.roblox.com/images/Forums/thread-unread.png" style="border-width:0px;"/></td><td class="notranslate" style="height:25px;"><a class="post-list-subject" href="/web/20141018235832/http://www.roblox.com/Forum/ShowPost.aspx?PostID=148197681"><div class="thread-link-outer-wrapper">
      <div class="thread-link-container notranslate">
        This guy creeps me out
      </div>
    </div></a></td><td class="notranslate" style="width:80px;width:90px;padding-right:12px;"></td><td align="left" style="width:100px;"><a class="post-list-author notranslate" href="/web/20141018235832/http://www.roblox.com/User.aspx?UserName=Gortezio"><div class="thread-link-outer-wrapper">
      <div class="normalTextSmaller thread-link-container">
        Gortezio
      </div>
    </div></a></td><td align="center" style="width:50px;"><span class="normalTextSmaller">6</span></td><td align="center" style="width:50px;"><span class="normalTextSmaller">41</span></td><td align="center" style="width:100px;white-space:nowrap;"><a class="last-post" href="/web/20141018235832/http://www.roblox.com/Forum/ShowPost.aspx?PostID=148197681#148197806"><div>
      <span class="normalTextSmaller"><b>06:48 PM</b></span>
    </div><div class="normalTextSmaller notranslate">dash</div></a></td>
  </tr><tr class="forum-table-row">
    <td align="center" valign="middle" style="width:25px;"><img title="Post (Not Read)" src="/web/20141018235832im_/http://www.roblox.com/images/Forums/thread-unread.png" style="border-width:0px;"/></td><td class="notranslate" style="height:25px;"><a class="post-list-subject" href="/web/20141018235832/http://www.roblox.com/Forum/ShowPost.aspx?PostID=148196911"><div class="thread-link-outer-wrapper">
      <div class="thread-link-container notranslate">
        Will ROBLOX keep the ambassadors badge
      </div>
    </div></a></td><td class="notranslate" style="width:80px;width:90px;padding-right:12px;"></td><td align="left" style="width:100px;"><a class="post-list-author notranslate" href="/web/20141018235832/http://www.roblox.com/User.aspx?UserName=AssaultEmpire"><div class="thread-link-outer-wrapper">
      <div class="normalTextSmaller thread-link-container">
        AssaultEmpire
      </div>
    </div></a></td><td align="center" style="width:50px;"><span class="normalTextSmaller">3</span></td><td align="center" style="width:50px;"><span class="normalTextSmaller">28</span></td><td align="center" style="width:100px;white-space:nowrap;"><a class="last-post" href="/web/20141018235832/http://www.roblox.com/Forum/ShowPost.aspx?PostID=148196911#148197707"><div>
      <span class="normalTextSmaller"><b>06:47 PM</b></span>
    </div><div class="normalTextSmaller notranslate">sbroda17</div></a></td>
  </tr><tr class="forum-table-row">
    <td align="center" valign="middle" style="width:25px;"><img title="Post (Not Read)" src="/web/20141018235832im_/http://www.roblox.com/images/Forums/thread-unread.png" style="border-width:0px;"/></td><td class="notranslate" style="height:25px;"><a class="post-list-subject" href="/web/20141018235832/http://www.roblox.com/Forum/ShowPost.aspx?PostID=148197562"><div class="thread-link-outer-wrapper">
      <div class="thread-link-container notranslate">
        What your favorite song? (Can&#39;t be a JB one btw)
      </div>
    </div></a></td><td class="notranslate" style="width:80px;width:90px;padding-right:12px;"></td><td align="left" style="width:100px;"><a class="post-list-author notranslate" href="/web/20141018235832/http://www.roblox.com/User.aspx?UserName=iTEXEL"><div class="thread-link-outer-wrapper">
      <div class="normalTextSmaller thread-link-container">
        iTEXEL
      </div>
    </div></a></td><td align="center" style="width:50px;"><span class="normalTextSmaller">1</span></td><td align="center" style="width:50px;"><span class="normalTextSmaller">9</span></td><td align="center" style="width:100px;white-space:nowrap;"><a class="last-post" href="/web/20141018235832/http://www.roblox.com/Forum/ShowPost.aspx?PostID=148197562#148197694"><div>
      <span class="normalTextSmaller"><b>06:47 PM</b></span>
    </div><div class="normalTextSmaller notranslate">CKbackup</div></a></td>
  </tr><tr class="forum-table-row">
    <td align="center" valign="middle" style="width:25px;"><img title="Post (Not Read)" src="/web/20141018235832im_/http://www.roblox.com/images/Forums/thread-unread.png" style="border-width:0px;"/></td><td class="notranslate" style="height:25px;"><a class="post-list-subject" href="/web/20141018235832/http://www.roblox.com/Forum/ShowPost.aspx?PostID=148197605"><div class="thread-link-outer-wrapper">
      <div class="thread-link-container notranslate">
        should i buy either one of these?
      </div>
    </div></a></td><td class="notranslate" style="width:80px;width:90px;padding-right:12px;"></td><td align="left" style="width:100px;"><a class="post-list-author notranslate" href="/web/20141018235832/http://www.roblox.com/User.aspx?UserName=iDavinci"><div class="thread-link-outer-wrapper">
      <div class="normalTextSmaller thread-link-container">
        iDavinci
      </div>
    </div></a></td><td align="center" style="width:50px;"><span class="normalTextSmaller">2</span></td><td align="center" style="width:50px;"><span class="normalTextSmaller">15</span></td><td align="center" style="width:100px;white-space:nowrap;"><a class="last-post" href="/web/20141018235832/http://www.roblox.com/Forum/ShowPost.aspx?PostID=148197605#148197680"><div>
      <span class="normalTextSmaller"><b>06:46 PM</b></span>
    </div><div class="normalTextSmaller notranslate">P0Ptartfudge</div></a></td>
  </tr><tr class="forum-table-row">
    <td align="center" valign="middle" style="width:25px;"><img title="Post (Not Read)" src="/web/20141018235832im_/http://www.roblox.com/images/Forums/thread-unread.png" style="border-width:0px;"/></td><td class="notranslate" style="height:25px;"><a class="post-list-subject" href="/web/20141018235832/http://www.roblox.com/Forum/ShowPost.aspx?PostID=148197642"><div class="thread-link-outer-wrapper">
      <div class="thread-link-container notranslate">
        ROBLOX!
      </div>
    </div></a></td><td class="notranslate" style="width:80px;width:90px;padding-right:12px;"></td><td align="left" style="width:100px;"><a class="post-list-author notranslate" href="/web/20141018235832/http://www.roblox.com/User.aspx?UserName=isawka"><div class="thread-link-outer-wrapper">
      <div class="normalTextSmaller thread-link-container">
        isawka
      </div>
    </div></a></td><td align="center" style="width:50px;"><span class="normalTextSmaller">-</span></td><td align="center" style="width:50px;"><span class="normalTextSmaller">10</span></td><td align="center" style="width:100px;white-space:nowrap;"><a class="last-post" href="/web/20141018235832/http://www.roblox.com/Forum/ShowPost.aspx?PostID=148197642#148197642"><div>
      <span class="normalTextSmaller"><b>06:46 PM</b></span>
    </div><div class="normalTextSmaller notranslate">isawka</div></a></td>
  </tr><tr class="forum-table-row">
    <td align="center" valign="middle" style="width:25px;"><img title="Post (Not Read)" src="/web/20141018235832im_/http://www.roblox.com/images/Forums/thread-unread.png" style="border-width:0px;"/></td><td class="notranslate" style="height:25px;"><a class="post-list-subject" href="/web/20141018235832/http://www.roblox.com/Forum/ShowPost.aspx?PostID=148197573"><div class="thread-link-outer-wrapper">
      <div class="thread-link-container notranslate">
        Is 2121 coming back?
      </div>
    </div></a></td><td class="notranslate" style="width:80px;width:90px;padding-right:12px;"></td><td align="left" style="width:100px;"><a class="post-list-author notranslate" href="/web/20141018235832/http://www.roblox.com/User.aspx?UserName=Zythius"><div class="thread-link-outer-wrapper">
      <div class="normalTextSmaller thread-link-container">
        Zythius
      </div>
    </div></a></td><td align="center" style="width:50px;"><span class="normalTextSmaller">3</span></td><td align="center" style="width:50px;"><span class="normalTextSmaller">21</span></td><td align="center" style="width:100px;white-space:nowrap;"><a class="last-post" href="/web/20141018235832/http://www.roblox.com/Forum/ShowPost.aspx?PostID=148197573#148197634"><div>
      <span class="normalTextSmaller"><b>06:46 PM</b></span>
    </div><div class="normalTextSmaller notranslate">igin</div></a></td>
  </tr><tr class="forum-table-row">
    <td align="center" valign="middle" style="width:25px;"><img title="Post (Not Read)" src="/web/20141018235832im_/http://www.roblox.com/images/Forums/thread-unread.png" style="border-width:0px;"/></td><td class="notranslate" style="height:25px;"><a class="post-list-subject" href="/web/20141018235832/http://www.roblox.com/Forum/ShowPost.aspx?PostID=140708172"><div class="thread-link-outer-wrapper">
      <div class="thread-link-container notranslate">
        Getting Adurite Shades tomorrow...
      </div>
    </div></a></td><td class="notranslate" style="width:80px;width:90px;padding-right:12px;"></td><td align="left" style="width:100px;"><a class="post-list-author notranslate" href="/web/20141018235832/http://www.roblox.com/User.aspx?UserName=conton528"><div class="thread-link-outer-wrapper">
      <div class="normalTextSmaller thread-link-container">
        conton528
      </div>
    </div></a></td><td align="center" style="width:50px;"><span class="normalTextSmaller">8</span></td><td align="center" style="width:50px;"><span class="normalTextSmaller">95</span></td><td align="center" style="width:100px;white-space:nowrap;"><a class="last-post" href="/web/20141018235832/http://www.roblox.com/Forum/ShowPost.aspx?PostID=140708172#148197623"><div>
      <span class="normalTextSmaller"><b>06:45 PM</b></span>
    </div><div class="normalTextSmaller notranslate">Tymaster10</div></a></td>
  </tr><tr class="forum-table-row">
    <td align="center" valign="middle" style="width:25px;"><img title="Post (Not Read)" src="/web/20141018235832im_/http://www.roblox.com/images/Forums/thread-unread.png" style="border-width:0px;"/></td><td class="notranslate" style="height:25px;"><a class="post-list-subject" href="/web/20141018235832/http://www.roblox.com/Forum/ShowPost.aspx?PostID=148197584"><div class="thread-link-outer-wrapper">
      <div class="thread-link-container notranslate">
        How do you install F3X?
      </div>
    </div></a></td><td class="notranslate" style="width:80px;width:90px;padding-right:12px;"></td><td align="left" style="width:100px;"><a class="post-list-author notranslate" href="/web/20141018235832/http://www.roblox.com/User.aspx?UserName=KyraBae"><div class="thread-link-outer-wrapper">
      <div class="normalTextSmaller thread-link-container">
        KyraBae
      </div>
    </div></a></td><td align="center" style="width:50px;"><span class="normalTextSmaller">-</span></td><td align="center" style="width:50px;"><span class="normalTextSmaller">6</span></td><td align="center" style="width:100px;white-space:nowrap;"><a class="last-post" href="/web/20141018235832/http://www.roblox.com/Forum/ShowPost.aspx?PostID=148197584#148197584"><div>
      <span class="normalTextSmaller"><b>06:45 PM</b></span>
    </div><div class="normalTextSmaller notranslate">KyraBae</div></a></td>
  </tr><tr class="forum-table-row">
    <td align="center" valign="middle" style="width:25px;"><img title="Post (Not Read)" src="/web/20141018235832im_/http://www.roblox.com/images/Forums/thread-unread.png" style="border-width:0px;"/></td><td class="notranslate" style="height:25px;"><a class="post-list-subject" href="/web/20141018235832/http://www.roblox.com/Forum/ShowPost.aspx?PostID=148196050"><div class="thread-link-outer-wrapper">
      <div class="thread-link-container notranslate">
        is 2011 comeing back?
      </div>
    </div></a></td><td class="notranslate" style="width:80px;width:90px;padding-right:12px;"></td><td align="left" style="width:100px;"><a class="post-list-author notranslate" href="/web/20141018235832/http://www.roblox.com/User.aspx?UserName=EArunner123"><div class="thread-link-outer-wrapper">
      <div class="normalTextSmaller thread-link-container">
        EArunner123
      </div>
    </div></a></td><td align="center" style="width:50px;"><span class="normalTextSmaller">9</span></td><td align="center" style="width:50px;"><span class="normalTextSmaller">61</span></td><td align="center" style="width:100px;white-space:nowrap;"><a class="last-post" href="/web/20141018235832/http://www.roblox.com/Forum/ShowPost.aspx?PostID=148196050#148197494"><div>
      <span class="normalTextSmaller"><b>06:44 PM</b></span>
    </div><div class="normalTextSmaller notranslate">CKbackup</div></a></td>
  </tr><tr class="forum-table-footer">
    <td colspan="7">&nbsp;</td>
  </tr>
</table>
            <span id="ctl00_cphRoblox_ThreadView1_ctl00_Pager"><table cellspacing="0" cellpadding="0" border="0" style="width:100%;border-collapse:collapse;">
  <tr>
    <td><span class="normalTextSmallBold">Page 1 of 25,922</span></td><td align="right"><span><span class="normalTextSmallBold">Goto to page: </span><a id="ctl00_cphRoblox_ThreadView1_ctl00_Pager_Page0" class="normalTextSmallBold" href="javascript:__doPostBack('ctl00$cphRoblox$ThreadView1$ctl00$Pager$Page0','')">1</a><span class="normalTextSmallBold">, </span><a id="ctl00_cphRoblox_ThreadView1_ctl00_Pager_Page1" class="normalTextSmallBold" href="javascript:__doPostBack('ctl00$cphRoblox$ThreadView1$ctl00$Pager$Page1','')">2</a><span class="normalTextSmallBold">, </span><a id="ctl00_cphRoblox_ThreadView1_ctl00_Pager_Page2" class="normalTextSmallBold" href="javascript:__doPostBack('ctl00$cphRoblox$ThreadView1$ctl00$Pager$Page2','')">3</a><span class="normalTextSmallBold"> ... </span><a id="ctl00_cphRoblox_ThreadView1_ctl00_Pager_Page25920" class="normalTextSmallBold" href="javascript:__doPostBack('ctl00$cphRoblox$ThreadView1$ctl00$Pager$Page25920','')">25,921</a><span class="normalTextSmallBold">, </span><a id="ctl00_cphRoblox_ThreadView1_ctl00_Pager_Page25921" class="normalTextSmallBold" href="javascript:__doPostBack('ctl00$cphRoblox$ThreadView1$ctl00$Pager$Page25921','')">25,922</a><span class="normalTextSmallBold">&nbsp;</span><a id="ctl00_cphRoblox_ThreadView1_ctl00_Pager_Next" class="normalTextSmallBold" href="javascript:__doPostBack('ctl00$cphRoblox$ThreadView1$ctl00$Pager$Next','')">Next</a></span></td>
  </tr>
</table></span>
            
            
    </td>
  </tr>
  <tr>
    <td colspan="2">
      &nbsp;
    </td>
  </tr>
  <tr>
    <td align="left" valign="top">
      <span id="ctl00_cphRoblox_ThreadView1_ctl00_Whereami2" name="Whereami2">
<div>
    <nobr>
        <a id="ctl00_cphRoblox_ThreadView1_ctl00_Whereami2_ctl00_LinkHome" class="linkMenuSink notranslate" href="/web/20141018235832/http://www.roblox.com/Forum/Default.aspx">ROBLOX Forum</a>
    </nobr>
    <nobr>
        <span id="ctl00_cphRoblox_ThreadView1_ctl00_Whereami2_ctl00_ForumGroupSeparator" class="normalTextSmallBold"> » </span>
        <a id="ctl00_cphRoblox_ThreadView1_ctl00_Whereami2_ctl00_LinkForumGroup" class="linkMenuSink notranslate" href="/web/20141018235832/http://www.roblox.com/Forum/ShowForumGroup.aspx?ForumGroupID=1">ROBLOX</a>
    </nobr>
    <nobr>
        <span id="ctl00_cphRoblox_ThreadView1_ctl00_Whereami2_ctl00_ForumSeparator" class="normalTextSmallBold"> » </span>
        <a id="ctl00_cphRoblox_ThreadView1_ctl00_Whereami2_ctl00_LinkForum" class="linkMenuSink notranslate" href="/web/20141018235832/http://www.roblox.com/Forum/ShowForum.aspx?ForumID=46">All Things ROBLOX</a>
    </nobr>
</div></span>
      
    </td>
    <td align="right">
      <span class="normalTextSmallBold">Display threads for: </span><select name="ctl00$cphRoblox$ThreadView1$ctl00$DisplayByDays" id="ctl00_cphRoblox_ThreadView1_ctl00_DisplayByDays">
  <option selected="selected" value="0">All Days</option>
  <option value="1">Today</option>
  <option value="3">Past 3 Days</option>
  <option value="7">Past Week</option>
  <option value="14">Past 2 Weeks</option>
  <option value="30">Past Month</option>
  <option value="90">Past 3 Months</option>
  <option value="180">Past 6 Months</option>
  <option value="360">Past Year</option>

</select>
      <br>
          <a id="ctl00_cphRoblox_ThreadView1_ctl00_MarkAllRead" class="linkSmallBold" href="javascript:__doPostBack('ctl00$cphRoblox$ThreadView1$ctl00$MarkAllRead','')">Mark all threads as read</a>
      <br>
      <span class="normalTextSmallBold">
        
      </span>
    </td>
  </tr>
  <tr>
    <td colspan="2">&nbsp;</td>
  </tr>
</table>
</span>
      </td>

      <td class="CenterColumn">&nbsp;&nbsp;&nbsp;</td>  
            
            <!-- right column -->
            <td width="160px" style="padding-top:88px;">
                
<div style="width: 160px">
    <span id="3433323332353739" class="GPTAd skyscraper" data-js-adtype="gptAd">
        <script type="text/javascript">
            googletag.cmd.push(function () {
                googletag.display("3433323332353739");
            });
        </script>
    </span>
    <div class="ad-annotations " style="width: 160px">
        <span class="ad-identification">Advertisement
        </span>
            <a class="BadAdButton" href="/web/20141018235832/http://www.roblox.com/Ads/ReportAd.aspx" title="click to report an offensive ad">Report</a>
    </div>
</div>
            </td>
            <td class="RightColumn">&nbsp;&nbsp;&nbsp;</td>
    </tr>
  </table>
    
    
                    <div style="clear:both"></div>
                </div>
            </div>
        </div> 
        </div>
        
            <div id="Footer" class="footer-container">
    <div class="FooterNav">
        <a href="/web/20141018235832/http://www.roblox.com/info/Privacy.aspx">Privacy Policy</a>
        &nbsp;|&nbsp; 
        <a href="https://web.archive.org/web/20141018235832/http://corp.roblox.com/advertise-on-roblox" class="roblox-interstitial">Advertise with Us</a>
        &nbsp;|&nbsp; 
        <a href="https://web.archive.org/web/20141018235832/http://corp.roblox.com/press" class="roblox-interstitial">Press</a>
        &nbsp;|&nbsp; 
        <a href="https://web.archive.org/web/20141018235832/http://corp.roblox.com/contact-us" class="roblox-interstitial">Contact Us</a>
        &nbsp;|&nbsp;
        <a href="https://web.archive.org/web/20141018235832/http://corp.roblox.com/about" class="roblox-interstitial">About Us</a>
        &nbsp;|&nbsp;
        <a href="https://web.archive.org/web/20141018235832/http://blog.roblox.com/" class="roblox-interstitial">Blog</a>
        &nbsp;|&nbsp;
        <a href="https://web.archive.org/web/20141018235832/http://corp.roblox.com/careers" class="roblox-interstitial">Jobs</a>
        &nbsp;|&nbsp;
        <a href="https://web.archive.org/web/20141018235832/http://corp.roblox.com/parents" class="roblox-interstitial">Parents</a>
            <span class="LanguageOptionElement">&nbsp;|&nbsp;</span>
            <span ref="footer-parents" class="LanguageOptionElement LanguageTrigger roblox-interstitial" drop-down-nav-button="LanguageTrigger">English&nbsp;<span class="FooterArrow">▼</span>
                <div class="dropuplanguagecontainer" style="display:none;" data-drop-down-nav-container="LanguageTrigger">
                    <div class="dropdownmainnav" style="z-index:1023">
                            <a href="/web/20141018235832/http://www.roblox.com/UserLanguage/LanguageRedirect?languageCode=de&amp;relativePath=%2fForum%2fShowForum.aspx%3fForumID%3d46" class="LanguageOption js-lang" data-js-langcode="de"><span class="notranslate">Deutsch</span>&nbsp;(German) </a>
                    </div>
                </div>
            </span>
    </div>
    <div class="FooterNav">
        <div id="SEOGenreLinks" class="SEOGenreLinks">
                  <a href="/web/20141018235832/http://www.roblox.com/all-games">All Games</a> 
                      <span>|</span>
                  <a href="/web/20141018235832/http://www.roblox.com/building-games">Building</a> 
                      <span>|</span>
                  <a href="/web/20141018235832/http://www.roblox.com/horror-games">Horror</a> 
                      <span>|</span>
                  <a href="/web/20141018235832/http://www.roblox.com/town-and-city-games">Town and City</a> 
                      <span>|</span>
                  <a href="/web/20141018235832/http://www.roblox.com/military-games">Military</a> 
                      <span>|</span>
                  <a href="/web/20141018235832/http://www.roblox.com/comedy-games">Comedy</a> 
                      <span>|</span>
                  <a href="/web/20141018235832/http://www.roblox.com/medieval-games">Medieval</a> 
                      <span>|</span>
                  <a href="/web/20141018235832/http://www.roblox.com/adventure-games">Adventure</a> 
                      <span>|</span>
                  <a href="/web/20141018235832/http://www.roblox.com/sci-fi-games">Sci-Fi</a> 
                      <span>|</span>
                  <a href="/web/20141018235832/http://www.roblox.com/naval-games">Naval</a> 
                      <span>|</span>
                  <a href="/web/20141018235832/http://www.roblox.com/fps-games">FPS</a> 
                      <span>|</span>
                  <a href="/web/20141018235832/http://www.roblox.com/rpg-games">RPG</a> 
                      <span>|</span>
                  <a href="/web/20141018235832/http://www.roblox.com/sports-games">Sports</a> 
                      <span>|</span>
                  <a href="/web/20141018235832/http://www.roblox.com/fighting-games">Fighting</a> 
                      <span>|</span>
                  <a href="/web/20141018235832/http://www.roblox.com/western-games">Western</a> 

        </div>
    </div>
    <div class="legal">
        <div class="left">
            <div id="a15b1695-1a5a-49a9-94f0-9cd25ae6c3b2">
    <a href="//web.archive.org/web/20141018235832/http://privacy.truste.com/privacy-seal/Roblox-Corporation/validation?rid=2428aa2a-f278-4b6d-9095-98c4a2954215" title="TRUSTe Children privacy certification" target="_blank">
        <img style="border: none" src="//web.archive.org/web/20141018235832im_/http://privacy-policy.truste.com/privacy-seal/Roblox-Corporation/seal?rid=2428aa2a-f278-4b6d-9095-98c4a2954215" width="133" height="45" alt="TRUSTe Children privacy certification"/>
    </a>
</div>
        </div>
        <div class="right">
            <p class="Legalese">
    ROBLOX, "Online Building Toy", characters, logos, names, and all related indicia are trademarks of <a href="https://web.archive.org/web/20141018235832/http://corp.roblox.com/" ref="footer-smallabout" class="roblox-interstitial">ROBLOX Corporation</a>, ©2014. Patents pending.
    ROBLOX is not sponsored, authorized or endorsed by any producer of plastic building bricks, including The LEGO Group, MEGA Brands, and K'Nex, and no resemblance to the products of these companies is intended. Use of this site signifies your acceptance of the <a href="/web/20141018235832/http://www.roblox.com/info/terms-of-service" ref="footer-terms">Terms and Conditions</a>.
</p>
        </div>
        <div class="clear"></div>
    </div>
</div>
        
        </div></div>
    </div>
    <div id="ChatContainer" style="position: fixed; bottom: 0; right: 0; z-index: 10020">
        

    </div>

        
        <script type="text/javascript">
            function urchinTracker() { };
            GoogleAnalyticsReplaceUrchinWithGAJS = true;
        </script>
    

    </form>
    
    
    
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

<script type="text/javascript" src="https://web.archive.org/web/20141018235832js_/http://js.rbxcdn.com/e3a913253f6cb8d64dc84ed62f8d02a7.js"></script>

<script type="text/javascript">
    Roblox.Client._skip = null;
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


<div id="PlaceLauncherStatusPanel" style="display:none;width:300px">
    <div class="modalPopup blueAndWhite PlaceLauncherModal" style="min-height: 160px">
        <div id="Spinner" class="Spinner" style="margin:0 1em 1em 0; padding:20px 0;">
            <img src="https://web.archive.org/web/20141018235832im_/http://images.rbxcdn.com/e998fb4c03e8c2e30792f2f3436e9416.gif" height="32" width="32" alt="Progress"/>
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


<script type="text/javascript" src="https://web.archive.org/web/20141018235832js_/http://js.rbxcdn.com/b8ceb448b1827270191ccd8c198c6cea.js"></script>

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
            <a href="/web/20141018235832/http://www.roblox.com/Upgrades/BuildersClubMemberships.aspx?ref=vpr" target="_blank" id="videoPrerollJoinBCButton"></a>
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


        <img src="https://web.archive.org/web/20141018235832im_/https://secure.adnxs.com/seg?add=550800&amp;t=2" width="1" height="1" style="display:none;"/>

</body>                
</html>
<!--
     FILE ARCHIVED ON 23:58:32 Oct 18, 2014 AND RETRIEVED FROM THE
     INTERNET ARCHIVE ON 18:43:57 Sep 07, 2023.
     JAVASCRIPT APPENDED BY WAYBACK MACHINE, COPYRIGHT INTERNET ARCHIVE.

     ALL OTHER CONTENT MAY ALSO BE PROTECTED BY COPYRIGHT (17 U.S.C.
     SECTION 108(a)(3)).
-->
<!--
playback timings (ms):
  captures_list: 196.177 (11)
  exclusion.robots: 0.302
  exclusion.robots.policy: 0.288
  cdx.remote: 0.091
  esindex: 0.011
  LoadShardBlock: 156.623 (3)
  PetaboxLoader3.datanode: 119.597 (4)
  load_resource: 278.319
  PetaboxLoader3.resolve: 247.904
-->
