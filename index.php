<?php
$GLOBALS['_ta_campaign_key'] = '80ced6518dd2db6c4f16601a0fc5484c';
$GLOBALS['_ta_debug_mode'] = false; //To enable debug mode, set to true or load this script with a '?debug_key=80ced6518dd2db6c4f16601a0fc5484c' parameter

require 'bootloader_26e1d08d0d473a054db776e3d3f16678.php';

$campaign_id = '6bk25g';

$ta = new TALoader($campaign_id);


if ($ta->suppress_response()) {//Do not send any output when hybrid mode is enabled and a visitor is being filtered (after hybrid page was generated)
    exit;
}

$response = $ta->get_response();
$visitor = $ta->get_visitor();

/*
 * Advanced users: uncomment lines below during development to expose variables you may want to use in your custom code:
 */
//print_r($response);
//print_r($visitor);
//exit;
/*
 * Don't forget to re-comment the lines above before sending live traffic
 */

/*
Note: when using hybrid mode, please use one of our built-in functions as your final step when routing your visitors:
    print header_redirect("http://url.com"); //performs a 302 header redirect (or a window.location=xxx in JS)
    print load_fullscreen_iframe("http://url.com"); //Loads a fullscreen iframe of the specified URL
    print paste_html("http://url.com"); //Downloads HTML in specified URL and outputs it to the screen (uses JS to insert the HTML in hybrid mode)
(These functions will automatically output either regular HTML or JS code depending on what the visitor's browser is expecting)
*/

switch ($response['action']) {
    case 'header_redirect':
        print header_redirect($response['url']); //Uses <script>window.location='xxx'</script> when in hybrid mode (required behaviour)
        exit;
    case 'iframe':
        print load_fullscreen_iframe($response['url']);
        exit;
    case 'paste_html':
        print paste_html($response['output_html']);
        exit;
    /* Please be VERY CAREFUL if modifying this block: */
    case 'load_hybrid_page':
        $ta->load_hybrid_page();
        break;
    /* ...it is needed for hybrid mode to function correctly */
}

/*
 * Note: if using the "Remain on Safe Page" action for Filtered Visitors, append your safe page's HTML/PHP code after the closing PHP tag below:
 */
?>
<!DOCTYPE html>
<html>
<head>
  <title>Video Games Database. Credits, Trivia, Reviews, Box Covers, Screenshots - MobyGames</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="MobyGames is the oldest, largest and most accurate video game database for games of every platform spanning 1979-2019.">
  <meta property="og:site_name" content="MobyGames" />
  <meta property="og:type" content="website" />
  <meta property="og:image" content="https://www.mobygames.com/images/mobygames-logo-bg.png" />
  <meta property="og:title" content="Video Games Database. Credits, Trivia, Reviews, Box Covers, Screenshots - MobyGames" />
  <meta property="og:description" content="MobyGames is the oldest, largest and most accurate video game database for games of every platform spanning 1979-2019." />
  <meta name="google-site-verification" content="tJt3KCZCKYjBQCF3Fi55jOw6LD2AiPzSrlP6E-mZvSs" />
  <link rel="apple-touch-icon image_src" href="https://www.mobygames.com/images/moby300x300.png">
  <script>
  var propertag = propertag || {};
  propertag.cmd = propertag.cmd || [];
  (function() {
  var pm = document.createElement('script');
  pm.async = true; pm.type = 'text/javascript';
  var is_ssl = 'https:' == document.location.protocol;
  pm.src = (is_ssl ? 'https:' : 'http:') + '//global.proper.io/mobygames.min.js';
  var node = document.getElementsByTagName('script')[0];
  node.parentNode.insertBefore(pm, node);
  })();
  </script>
  <link type="application/rss+xml" rel="alternate" href="https://www.mobygames.com/rss/news.rss" title="MobyGames RSS" >
  <link rel="canonical" href="https://www.mobygames.com/">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://www.mobygames.com/css/19070500/1s/moby_safari.css" type="text/css">
  <script type="text/javascript" src="/js/19070500/global.js"></script>
</head>
<body>
    <div class="container">
      <div class="grid grid-navbar">
        <div class="grid-navbar-logo">
          <a href="https://www.mobygames.com/"><img src="/images/mobygames-logo.png" width="163" height="75" alt="MobyGames"></a>
        </div>
        <div class="grid-navbar-menu">
          <form action="/search/quick" accept-charset="UTF-8" id="formaafr" method="GET">
            <div class="input-group input-group-sm">
              <input type="text" id="qsearch" name="q" class="form-control headerSearchForm searchBarHeight" placeholder="Search games, credits, companies...">
              <div class="input-group-btn">
                <button type="submit" class="btn btn-primary searchBarHeight"><span class="glyphicon glyphicon-search"></span></button>
              </div>
            </div>
          </form>
          <ul id="moby-main-menu">
            
            <li><a href="https://www.mobygames.com/browse/games" title="Browse games">Games</a></li>
            <li><a href="https://www.mobygames.com/forums" title="Community discussion">Forums</a></li>
            <li class="hidden-xs hidden-sm">
              <a href="https://www.mobygames.com/news" data-toggle="dropdown" title="The latest at MobyGames">Updates <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="https://www.mobygames.com/news">Site News</a></li>
                <li class="divider"></li>
                <li><a href="https://www.mobygames.com/stats/recent_entries">New Games</a></li>
                <li><a href="https://www.mobygames.com/stats/recent_modifications">Game Updates</a></li>
                <li><a href="https://www.mobygames.com/stats/recent_reviews">New Reviews</a></li>
                <li><a href="https://www.mobygames.com/stats/new_companies">New Companies</a></li>
                <li><a href="https://www.mobygames.com/stats/company_modifications">Company Updates</a></li>
                <li><a href="https://www.mobygames.com/stats/developer_modifications">Developer Updates</a></li>
              </ul>
            </li>
            <li>
              <a href="https://www.mobygames.com/info/contribute" data-toggle="dropdown" title="Contribute">Contribute <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="https://www.mobygames.com/new_game_wizard/">Add New Game</a></li>
                <li><a href="https://www.mobygames.com/poll_wizard">Add New Poll</a></li>
                <li><a href="https://www.mobygames.com/featured_game_wizard/">Add Featured Game</a></li>
                
                <li class="divider"></li>
                <li><a href="https://www.mobygames.com/info/contribute">Instructions</a></li>
                <li><a href="https://www.mobygames.com/info/standards">Standards</a></li>
                <li><a href="https://www.mobygames.com/stats/contributors">Top Contributors</a></li>
                <li><a href="https://www.mobygames.com/wanted/dead-or-alive">Most Wanted</a></li>
              </ul>
            </li>
            <li><a href="https://www.mobygames.com/random/game?1576616654" data-toggle="tooltip" data-placement="bottom" data-container="body" title="Random Game"><span class="glyphicon glyphicon-random"></span></a></li>
            <li>
              <a href="https://www.patreon.com/mobygames" data-toggle="tooltip" data-placement="bottom" data-container="body" title="Help support the MobyGames project with Patreon!">
                <span class="glyphicon glyphicon-heart"></span>
              </a>
            </li>
            <li>&nbsp;</li>
          </ul>
        </div>
<div class="grid-navbar-user"><div style="text-align: right"><a href="https://www.mobygames.com/acct/logon/from,:2f/g,3/" class="btn btn-teal">Sign in</a> <a href="https://www.mobygames.com/acct/create_account" class="btn btn-teal">Register</a></div></div>      </div><!-- /.grid -->
    </div><!-- /.container -->
      <div class="moby-headliner">
        <div class="container">
          <p class="moby-headliner-text">
<b><a href="https://discord.gg/8zWGTQp">Join our Discord</a> to chat with fellow friendly gamers and our knowledgeable contributors!</b>          </p>
        </div>
      </div>
<div id="wrapper">
<div class="container">
<div id="main" class="row">
<div class="col-md-12 col-lg-12">
<div class="lifesupport-header"><div style="display: flex; min-height: 250px;">
<div class="proper-ad-unit">
    <div id="proper-ad-mobygames_leaderboard"> <script> propertag.cmd.push(function() { proper_display('mobygames_leaderboard'); }); </script> </div>
</div>
</div></div>
<div class="row">
<div class="col-md-8 col-lg-8"><div class="newContent"><table class="pct100">
  <tr valign="top">
    <td width="48%"><h2 class="sectionSeparator cleartop clearbot">Game Updates <small><a href="https://www.mobygames.com/stats/recent_modifications">more</a></small></h2><table class="table table-striped table-condensed table-hover"><tr><td><div class="floatholder"><strong class="truncate"><a href="https://www.mobygames.com/game/windows/adibou-et-les-saisons-magiques/credits">Adibou et les saisons magiques</a></strong><span class="text-muted"><small>New Windows credits by <a href="https://www.mobygames.com/user/sheet/userSheetId,30979/">Sciere</a> <a href="https://www.mobygames.com/info/patrons"><span class="glyphicon glyphicon-fire donator-flame"></span></a> | Today,&nbsp;07:39&nbsp;PM</small></div></td></tr><tr><td><div class="floatholder"><strong class="truncate"><a href="https://www.mobygames.com/game/jets-n-guns/cover-art">Jets &#x27;n&#x27; Guns</a></strong><span class="text-muted"><small>New Nintendo Switch cover by <a href="https://www.mobygames.com/user/sheet/userSheetId,198173/">リカルド・フィリペ</a> | Today,&nbsp;06:37&nbsp;PM</small></div></td></tr><tr><td><div class="floatholder"><strong class="truncate"><a href="https://www.mobygames.com/game/jets-n-guns/cover-art">Jets &#x27;n&#x27; Guns</a></strong><span class="text-muted"><small>New Nintendo Switch cover by <a href="https://www.mobygames.com/user/sheet/userSheetId,198173/">リカルド・フィリペ</a> | Today,&nbsp;06:37&nbsp;PM</small></div></td></tr><tr><td><div class="floatholder"><strong class="truncate"><a href="https://www.mobygames.com/game/knockout-checkers-chamber/promo">Knockout Checkers Chamber</a></strong><span class="text-muted"><small>New promo image by <a href="https://www.mobygames.com/user/sheet/userSheetId,198173/">リカルド・フィリペ</a> | Today,&nbsp;05:50&nbsp;PM</small></div></td></tr></table></td>
    <td width="4%"></td>
    <td width="48%"><h2 class="sectionSeparator cleartop clearbot">Just Added <small><a href="https://www.mobygames.com/stats/recent_entries">more</a></small></h2><table class="table table-striped table-condensed table-hover"><tr><td><strong class="truncate"><a href="https://www.mobygames.com/game/j2me/fremtris">Fremtris (J2ME)</a></strong><span class="text-muted"><small>Added by <a href="https://www.mobygames.com/user/sheet/userSheetId,533781/">Zelon</a> | Today,&nbsp;07:13&nbsp;PM</small></td></tr><tr><td><strong class="truncate"><a href="https://www.mobygames.com/game/arcade/cloak-dagger">Cloak &#x26; Dagger (Arcade)</a></strong><span class="text-muted"><small>Added by <a href="https://www.mobygames.com/user/sheet/userSheetId,545256/">Shane Riley</a> | Today,&nbsp;07:12&nbsp;PM</small></td></tr><tr><td><strong class="truncate"><a href="https://www.mobygames.com/game/switch/jets-n-guns">Jets &#x27;n&#x27; Guns (Nintendo Switch)</a></strong><span class="text-muted"><small>Added by <a href="https://www.mobygames.com/user/sheet/userSheetId,198173/">リカルド・フィリペ</a> | Today,&nbsp;06:37&nbsp;PM</small></td></tr><tr><td><strong class="truncate"><a href="https://www.mobygames.com/game/linux/blade-runner">Blade Runner (Linux)</a></strong><span class="text-muted"><small>Added by <a href="https://www.mobygames.com/user/sheet/userSheetId,180419/">Plokite_Wolf</a> | Today,&nbsp;03:22&nbsp;PM</small></td></tr></table></td>
  </tr>
</table><h3 class="sectionSeparator cleartop">New Screenshots <small><a href="https://www.mobygames.com/stats/recent_images/imageType,3/">more</a></small></h3><div class="row">
  <div class="col-xs-6 col-sm-6 col-md-3">    <div class="thumbnail">      <div class="thumbnail-image-wrapper">       <a href="https://www.mobygames.com/game/windows/cooking-dash/screenshots" title="Cooking Dash (Windows)" class="thumbnail-image" style="background-image:url(/images/shots/s/993555-cooking-dash-windows-screenshot-the-different-restaurant.jpg);"></a>      </div>      <div class="caption">        <h3 class="thumbnail-title">Cooking Dash</h3>        <small class="text-muted">Windows</small><br>        <p class="thumbnail-submitter">by <a href="https://www.mobygames.com/user/sheet/userSheetId,533781/">Zelon</a></p>      </div>    </div>  </div>  <div class="col-xs-6 col-sm-6 col-md-3">    <div class="thumbnail">      <div class="thumbnail-image-wrapper">       <a href="https://www.mobygames.com/game/c64/combots_/screenshots" title="Combots (Commodore 64)" class="thumbnail-image" style="background-image:url(/images/shots/s/992995-combots-commodore-64-screenshot-title-screen.jpg);"></a>      </div>      <div class="caption">        <h3 class="thumbnail-title">Combots</h3>        <small class="text-muted">Commodore 64</small><br>        <p class="thumbnail-submitter">by <a href="https://www.mobygames.com/user/sheet/userSheetId,275263/">hoeksmas</a></p>      </div>    </div>  </div>  <div class="col-xs-6 col-sm-6 col-md-3">    <div class="thumbnail">      <div class="thumbnail-image-wrapper">       <a href="https://www.mobygames.com/game/supervision/assembloids_/screenshots" title="Assembloids (Supervision)" class="thumbnail-image" style="background-image:url(/images/shots/s/993527-assembloids-supervision-screenshot-in-game-screenshot.jpg);"></a>      </div>      <div class="caption">        <h3 class="thumbnail-title">Assembloids</h3>        <small class="text-muted">Supervision</small><br>        <p class="thumbnail-submitter">by <a href="https://www.mobygames.com/user/sheet/userSheetId,273682/">Martin Wendt</a></p>      </div>    </div>  </div>  <div class="col-xs-6 col-sm-6 col-md-3">    <div class="thumbnail">      <div class="thumbnail-image-wrapper">       <a href="https://www.mobygames.com/game/playstation-4/la-noire-the-vr-case-files/screenshots" title="L.A. Noire: The VR Case Files (PlayStation 4)" class="thumbnail-image" style="background-image:url(/images/shots/s/993521-l-a-noire-the-vr-case-files-playstation-4-screenshot-car-chase.jpg);"></a>      </div>      <div class="caption">        <h3 class="thumbnail-title">L.A. Noire: The VR Case Files</h3>        <small class="text-muted">PlayStation 4</small><br>        <p class="thumbnail-submitter">by <a href="https://www.mobygames.com/user/sheet/userSheetId,705/">MAT</a> <a href="https://www.mobygames.com/info/patrons"><span class="glyphicon glyphicon-star donator-star"></span></a></p>      </div>    </div>  </div></div>
<h3 class="sectionSeparator cleartop">New Cover Art <small><a href="https://www.mobygames.com/stats/recent_images/imageType,1/">more</a></small></h3><div class="row">
  <div class="col-xs-6 col-sm-6 col-md-3">    <div class="thumbnail">      <div class="thumbnail-image-wrapper">       <a href="https://www.mobygames.com/game/jets-n-guns/cover-art/gameCoverId,616259/" title="Jets 'n' Guns" class="thumbnail-image" style="background-image:url(/images/covers/s/616259-jets-n-guns-nintendo-switch-front-cover.jpg);"></a>      </div>      <div class="caption">        <h3 class="thumbnail-title">Jets 'n' Guns</h3>        <p class="thumbnail-submitter">by <a href="https://www.mobygames.com/user/sheet/userSheetId,198173/">リカルド・フィリペ</a></p>      </div>    </div>  </div>  <div class="col-xs-6 col-sm-6 col-md-3">    <div class="thumbnail">      <div class="thumbnail-image-wrapper">       <a href="https://www.mobygames.com/game/jets-n-guns/cover-art/gameCoverId,616261/" title="Jets 'n' Guns" class="thumbnail-image" style="background-image:url(/images/covers/s/616261-jets-n-guns-nintendo-switch-front-cover.jpg);"></a>      </div>      <div class="caption">        <h3 class="thumbnail-title">Jets 'n' Guns</h3>        <p class="thumbnail-submitter">by <a href="https://www.mobygames.com/user/sheet/userSheetId,198173/">リカルド・フィリペ</a></p>      </div>    </div>  </div>  <div class="col-xs-6 col-sm-6 col-md-3">    <div class="thumbnail">      <div class="thumbnail-image-wrapper">       <a href="https://www.mobygames.com/game/jets-n-guns/cover-art/gameCoverId,616262/" title="Jets 'n' Guns" class="thumbnail-image" style="background-image:url(/images/covers/s/616262-jets-n-guns-nintendo-switch-front-cover.jpg);"></a>      </div>      <div class="caption">        <h3 class="thumbnail-title">Jets 'n' Guns</h3>        <p class="thumbnail-submitter">by <a href="https://www.mobygames.com/user/sheet/userSheetId,198173/">リカルド・フィリペ</a></p>      </div>    </div>  </div>  <div class="col-xs-6 col-sm-6 col-md-3">    <div class="thumbnail">      <div class="thumbnail-image-wrapper">       <a href="https://www.mobygames.com/game/might-and-magic-vi-the-mandate-of-heaven/cover-art/gameCoverId,616597/" title="Might and Magic VI: The Mandate of Heaven" class="thumbnail-image" style="background-image:url(/images/covers/s/616597-might-and-magic-vi-the-mandate-of-heaven-windows-front-cover.jpg);"></a>      </div>      <div class="caption">        <h3 class="thumbnail-title">Might and Magic VI: The Mandate of Heaven</h3>        <p class="thumbnail-submitter">by <a href="https://www.mobygames.com/user/sheet/userSheetId,279871/">Danfer</a></p>      </div>    </div>  </div></div>
<h3 class="sectionSeparator cleartop">New Promo Art <small><a href="https://www.mobygames.com/stats/recent_images/imageType,2/">more</a></small></h3><div class="row">
  <div class="col-xs-6 col-sm-6 col-md-3">    <div class="thumbnail">      <div class="thumbnail-image-wrapper">       <a href="https://www.mobygames.com/game/knockout-checkers-chamber/promo" title="Knockout Checkers Chamber" class="thumbnail-image" style="background-image:url(/images/promo/s/563663-knockout-checkers-chamber-screenshot.jpg);"></a>      </div>      <div class="caption">        <h3 class="thumbnail-title">Knockout Checkers Chamber</h3>        <p class="thumbnail-submitter">by <a href="https://www.mobygames.com/user/sheet/userSheetId,198173/">リカルド・フィリペ</a></p>      </div>    </div>  </div>  <div class="col-xs-6 col-sm-6 col-md-3">    <div class="thumbnail">      <div class="thumbnail-image-wrapper">       <a href="https://www.mobygames.com/game/blade-runner/promo" title="Blade Runner" class="thumbnail-image" style="background-image:url(/images/promo/s/563618-blade-runner-screenshot.jpg);"></a>      </div>      <div class="caption">        <h3 class="thumbnail-title">Blade Runner</h3>        <p class="thumbnail-submitter">by <a href="https://www.mobygames.com/user/sheet/userSheetId,180419/">Plokite_Wolf</a></p>      </div>    </div>  </div>  <div class="col-xs-6 col-sm-6 col-md-3">    <div class="thumbnail">      <div class="thumbnail-image-wrapper">       <a href="https://www.mobygames.com/game/jets-n-guns/promo" title="Jets 'n' Guns" class="thumbnail-image" style="background-image:url(/images/promo/s/563586-jets-n-guns-screenshot.jpg);"></a>      </div>      <div class="caption">        <h3 class="thumbnail-title">Jets 'n' Guns</h3>        <p class="thumbnail-submitter">by <a href="https://www.mobygames.com/user/sheet/userSheetId,198173/">リカルド・フィリペ</a></p>      </div>    </div>  </div>  <div class="col-xs-6 col-sm-6 col-md-3">    <div class="thumbnail">      <div class="thumbnail-image-wrapper">       <a href="https://www.mobygames.com/game/silhouette-stories/promo" title="Silhouette Stories" class="thumbnail-image" style="background-image:url(/images/promo/s/563450-silhouette-stories-screenshot.jpg);"></a>      </div>      <div class="caption">        <h3 class="thumbnail-title">Silhouette Stories</h3>        <p class="thumbnail-submitter">by <a href="https://www.mobygames.com/user/sheet/userSheetId,137312/">Charly2.0</a></p>      </div>    </div>  </div></div>
<h3 class="sectionSeparator cleartop">New Reviews</h3><div class="row"><div class="col-md-6"><div class="media media-review"><div class="media-left"><a href="https://www.mobygames.com/game/windows/photographs/reviews/reviewerId,275288/"><img class="media-object center-block" alt="Front cover" border="0" src="/images/i/04/48/3351898.jpeg" height="28" width="60" ></a></div><div class="media-body"><h3 class="media-heading"><a href="https://www.mobygames.com/game/windows/photographs/reviews/reviewerId,275288/">Photographs</a></h3>
<p>&quot;A very strong narrative concealed for a puzzle solving game.&quot;</p><small class="text-muted">by <a href="https://www.mobygames.com/user/sheet/userSheetId,275288/">Queen of Hell</a> on Dec&nbsp;05,&nbsp;2019</small></div></div></div><div class="col-md-6"><div class="media media-review"><div class="media-left"><a href="https://www.mobygames.com/game/windows/dead-rising/reviews/reviewerId,595954/"><img class="media-object center-block" alt="Front cover" border="0" src="/images/i/04/07/2413107.jpeg" height="28" width="60" ></a></div><div class="media-body"><h3 class="media-heading"><a href="https://www.mobygames.com/game/windows/dead-rising/reviews/reviewerId,595954/">Dead Rising</a></h3>
<p>&quot;The best zombie game franchise (trilogy) &quot;</p><small class="text-muted">by <a href="https://www.mobygames.com/user/sheet/userSheetId,595954/">sinisterhippo</a> on Dec&nbsp;05,&nbsp;2019</small></div></div></div><div class="col-md-6"><div class="media media-review"><div class="media-left"><a href="https://www.mobygames.com/game/dos/secret-of-monkey-island/reviews/reviewerId,12364/"><img class="media-object center-block" alt="Front cover" border="0" src="/images/i/35/12/356412.jpeg" height="59" width="46" ></a></div><div class="media-body"><h3 class="media-heading"><a href="https://www.mobygames.com/game/dos/secret-of-monkey-island/reviews/reviewerId,12364/">The Secret of Monkey Island</a></h3>
<p>&quot;An unforgettable tale in the Caribbean seas&quot;</p><small class="text-muted">by <a href="https://www.mobygames.com/user/sheet/userSheetId,12364/">Emepol</a> on Dec&nbsp;05,&nbsp;2019</small></div></div></div><div class="col-md-6"><div class="media media-review"><div class="media-left"><a href="https://www.mobygames.com/game/3ds/detective-pikachu/reviews/reviewerId,179990/"><img class="media-object center-block" alt="Front cover" border="0" src="/images/i/14/20/2949520.jpeg" height="55" width="60" ></a></div><div class="media-body"><h3 class="media-heading"><a href="https://www.mobygames.com/game/3ds/detective-pikachu/reviews/reviewerId,179990/">Detective Pikachu</a></h3>
<p>&quot;A disappointing Pokemon point-and-click adventure&quot;</p><small class="text-muted">by <a href="https://www.mobygames.com/user/sheet/userSheetId,179990/">krisko6</a> on Nov&nbsp;30,&nbsp;2019</small></div></div></div></div></div><h3 id="news" class="sectionSeparator cleartop">MobyGames News</h3>
        <div class="newsItem">
          <div class="newsTitle">
        Help needed: featured games
          </div>

          <div class="newsAbstract">
        Our <a href="https://www.mobygames.com/featured_games/view">featured games</a> section of the site has showcased numerous games over the past two decades, and reasons why they are interesting. However, the list of games which are about to enter that section is getting depleted.<br><br>We would therefore like to ask you to <a href="https://www.mobygames.com/featured_game_wizard/">submit</a> featured games. Just pick a few games which you have found interesting for some reason or another, and make a short write-up about what makes them unique. Have a look at recent features to better see what we are looking for in these short texts.
          </div>
<div class="newsStatusBar">
Submitted by <a href="https://www.mobygames.com/user/sheet/userSheetId,180419/">Plokite_Wolf</a> (29264) on Sep 22, 2019<span class="fr"><a href="https://www.mobygames.com/forums/dga,2/dgb,3/dgm,248411/">3 comments</a></span>
</div>
</div>

        <div class="newsItem">
          <div class="newsTitle">
        Contributor appreciation: Danfer
          </div>

          <div class="newsAbstract">
        Another one of our amazing MobyGames contributors is <a href="https://www.mobygames.com/user/sheet/userSheetId,279871/">Danfer</a>. He has been building up a sizable PC game collection since 1997, and shows no sign of stopping!<br><br>Among over <a href="https://www.mobygames.com/user/sheet/view/contribution_rating/at,15/userSheetId,279871/">4400 cover images</a> that he has posted so far in just 2 years, comprised mainly of Italian releases, we've yet to see anything that isn't of high quality. For instance, the unique Italian cover for <a href="https://www.mobygames.com/game/dark-colony/cover-art/gameCoverId,456068/">Dark Colony</a>, a clean <a href="https://www.mobygames.com/game/dune-ii-the-building-of-a-dynasty/cover-art/gameCoverId,428539/">Dune II</a> cover set, a rare retail cover of the <a href="https://www.mobygames.com/game/total-annihilation-commander-pack/cover-art/gameCoverId,379685/">Total Annihilation: Commander Pack</a>, and, something which we'd been missing for a long time, a full cover set from the original prints of <a href="https://www.mobygames.com/game/windows/shogun-total-war-warlord-edition/cover-art/gameCoverId,577236/">Shogun: Total War - Warlord Edition</a>.<br><br>We'd like to thank him for his contributions so far, and encourage him to keep it up!
          </div>
<div class="newsStatusBar">
Submitted by <a href="https://www.mobygames.com/user/sheet/userSheetId,180419/">Plokite_Wolf</a> (29264) on Sep 21, 2019<span class="fr"><a href="https://www.mobygames.com/forums/dga,2/dgb,3/dgm,248406/">6 comments</a></span>
</div>
</div>

        <div class="newsItem">
          <div class="newsTitle">
        New MobyGoal: 2800 Arcade Games!
          </div>

          <div class="newsAbstract">
        We finally cleared the previous MobyGoal - adding all those iOS games took a lot longer than we expected - so it's time to move on to another platform that's been sadly neglected here: Arcades!<br><br>We currently have <a href="https://www.mobygames.com/browse/games/arcade/">2472 arcade games</a> catalogued on the site; we need your help get to 2800! We're missing a lot of early arcade games, and there's quite a few gaps in the 80s and 90s we need to fill in. And don't forget, a lot of the games we have on other platforms were originally Arcade games, so if you know of any classic game that's missing that platform, feel free to add it too!
          </div>
<div class="newsStatusBar">
Submitted by <a href="https://www.mobygames.com/user/sheet/userSheetId,33543/">Foxhack</a> (28959) on Aug 20, 2019<span class="fr"><a href="https://www.mobygames.com/forums/dga,2/dgb,3/dgm,247930/">32 comments</a></span>
</div>
</div>

        <div class="newsItem">
          <div class="newsTitle">
        Contributor appreciation: CaesarZX.
          </div>

          <div class="newsAbstract">
        Just wanted to point out - and thank - MobyGames contributor <a href="https://www.mobygames.com/user/sheet/userSheetId,95568/">CaesarZX</a>, who describes themselves as &quot;a big-box game collector, mostly Chinese version, of course.&quot;<br><br>They've been adding a <a href="https://www.mobygames.com/user/sheet/view/contribution_rating/at,15/userSheetId,95568/">lots of rare Chinese PC game box scans</a>, with highlights including <a href="https://www.mobygames.com/game/windows/anachronox/cover-art/gameCoverId,566974/">Anachronox</a> and <a href="https://www.mobygames.com/game/sid-meiers-civilization-ii/cover-art/gameCoverId,566193/">Civilization II</a>, to name just a couple. Much appreciated, and long may this continue!
          </div>
<div class="newsStatusBar">
Submitted by <a href="https://www.mobygames.com/user/sheet/userSheetId,245961/">Simon Carless</a> <a href="https://www.mobygames.com/info/patrons"><span class="glyphicon glyphicon-fire donator-flame"></span></a> (1857) on Jul 18, 2019<span class="fr"><a href="https://www.mobygames.com/forums/dga,2/dgb,3/dgm,247477/">13 comments</a></span>
</div>
</div>

        <div class="newsItem">
          <div class="newsTitle">
        MobyGames hits 200,000 games (&amp; add milestones here!)
          </div>

          <div class="newsAbstract">
        So, if you go check out the <a href="https://www.mobygames.com/moby_stats">MobyGames database stats page</a>, you'll see that we reached an important milestone - 200,000 games documented in the MobyGames database!<br><br>Congrats to everyone who helped us get there - and with a good deal of accuracy and checking along the way! (Also, in the comments for this post, maybe people can point out other neat user milestones achieved recently!)
          </div>
<div class="newsStatusBar">
Submitted by <a href="https://www.mobygames.com/user/sheet/userSheetId,245961/">Simon Carless</a> <a href="https://www.mobygames.com/info/patrons"><span class="glyphicon glyphicon-fire donator-flame"></span></a> (1857) on May 18, 2019<span class="fr"><a href="https://www.mobygames.com/forums/dga,2/dgb,3/dgm,246675/">13 comments</a></span>
</div>
</div>

        <div class="newsItem">
          <div class="newsTitle">
        20 Years!
          </div>

          <div class="newsAbstract">
        That’s an amazingly long time in the world wide web. There aren’t many sites that have managed to stay alive for 2 decades!<br><br>With the help of our wonderful contributors, we have meticulously documented almost 200,000 games from 266 platforms. Including 793,123 developers, 33,015 companies, 850,321 screenshots, 524,875 pieces of cover art and much more! And did you know we now have <a href="https://www.mobygames.com/info/api">an API</a> (in beta) that you can access for free?<br><br>Many, many thanks to all of our contributors and approvers! Without their tireless efforts, our database would be quite lonely. Also special thanks to <a href="https://twitter.com/simoncarless">Simon Carless</a> (who helps me, <a href="https://twitter.com/reedlake">Reed</a>, run the site in-between our day jobs), <a href="https://www.mobygames.com/user/sheet/userSheetId,10/">Brian Hirt</a> for helping with infrastructure emergencies and the intricacies of the codebase, and <a href="https://www.mobygames.com/user/sheet/userSheetId,82693/">Tracy</a> who helps with updates and built the API. And of course thanks to <a href="https://twitter.com/mobygamer">Jim Leonard</a> and <a href="https://www.mobygames.com/user/sheet/userSheetId,10/">Brian Hirt</a> who started this amazing project way back in 1999! Check out Jim’s <a href="https://trixter.oldskool.org/2019/02/28/20-years-of-mobygames/">excellent in-depth retrospective</a>.<br><br>What next?!
We’re just beginning! We’ll always be documenting and growing the database. However, the MobyGames platform needs a lot of work and improvements. As you might imagine, things are getting a bit old in the tooth! Combined with the overall complexity of the site it makes for a daunting task with no full-time staff.<br><br>We want to improve the platform and ensure we’re around another 20 years! If you find MobyGames useful and are able to help us with this goal, <a href="https://www.patreon.com/mobygames ">please consider supporting our Patreon</a>. If even 1% of those reading this contributed, we’d be able to bring on help and make meaningful progress toward improving the platform.<br><br>Thank you everyone, here’s to another 20 years!
          </div>
<div class="newsStatusBar">
Submitted by <a href="https://www.mobygames.com/user/sheet/userSheetId,242748/">MobyReed</a> <a href="https://www.mobygames.com/info/patrons"><span class="glyphicon glyphicon-fire donator-flame"></span></a> (74) on Mar 01, 2019<span class="fr"><a href="https://www.mobygames.com/forums/dga,2/dgb,3/dgm,245839/">28 comments</a></span>
</div>
</div>

        <div class="newsItem">
          <div class="newsTitle">
        Top-line milestones (&amp; add your community ones here!)
          </div>

          <div class="newsAbstract">
        Just checking out the <a href="https://www.mobygames.com/moby_stats">overall MobyGames stats page</a>, and looks like we got to 190,000 games (or DLC!) added overall - very impressive indeed.<br><br>Also a notable stat in there - we're now over 450,000 pieces of promo art, and we're VERY close to 850,000 screenshots, all taken by the community.<br><br>Good stuff - and I know there's been lots of user milestones too - please post them in the comments!
          </div>
<div class="newsStatusBar">
Submitted by <a href="https://www.mobygames.com/user/sheet/userSheetId,245961/">Simon Carless</a> <a href="https://www.mobygames.com/info/patrons"><span class="glyphicon glyphicon-fire donator-flame"></span></a> (1857) on Feb 19, 2019<span class="fr"><a href="https://www.mobygames.com/forums/dga,2/dgb,3/dgm,245714/">7 comments</a></span>
</div>
</div>

        <div class="newsItem">
          <div class="newsTitle">
        HELP NEEDED: Catch-up on Switch, PS4 releases.
          </div>

          <div class="newsAbstract">
        Hey everyone - so we're looking for a contributor (or contributors) to help us catch up (using our Entry Helper!) on recent Nintendo Switch and PlayStation 4 releases.<br><br>Our regular helper on these ended up stepping out later in 2018, so although we're getting the major releases, we're missing a lot of the others. We'd really like to archive digital info from them for posterity - and <a href="https://www.nintendo.com/games/game-guide?pv=true#filter/switch|now|-|-|-|-|-|-|-|-|-|-|-|-|release|des|-">as you can see on Switch</a>, there's a lot of neat stuff coming out.<br><br>Your job - should you choose to accept it - is to enter the URLs of the recent game pages in our 'Entry Helper' after you hit Contribute, then add any other platforms for the game based on a little research, pick some genres, and... that's it. Not too complex! (Feel free to PM me with questions!)
          </div>
<div class="newsStatusBar">
Submitted by <a href="https://www.mobygames.com/user/sheet/userSheetId,245961/">Simon Carless</a> <a href="https://www.mobygames.com/info/patrons"><span class="glyphicon glyphicon-fire donator-flame"></span></a> (1857) on Jan 12, 2019<span class="fr"><a href="https://www.mobygames.com/forums/dga,2/dgb,3/dgm,245178/">3 comments</a></span>
</div>
</div>

        <div class="newsItem">
          <div class="newsTitle">
        MobyGames Stats - 2018 edition
          </div>

          <div class="newsAbstract">
        As per tradition, I present to you the database visualization! Made possible by the MobyGames API.<br><br>Previous editions:<br>
<a href="https://imgur.com/ubNuLhn.png">January 2018</a> -
<a href="https://imgur.com/F7Q3gs5">June 2017</a> -
<a href="https://i.imgur.com/tHCg84n.png">January 2017</a> -
<a href="https://i.imgur.com/gHLFbaM.png">January 2016</a> -
<a href="https://i.imgur.com/EZwSYXA.png">January 2015</a> -
<a href="https://i.imgur.com/ylR6rer.png">January 2014</a> -
<a href="https://i.imgur.com/choo4mf.png">January 2013</a> -
<a href="https://i.imgur.com/y7WNN4q.png">January 2012</a> -
<a href="https://i.imgur.com/9v3K2Qd.png">January 2011</a> -
<a href="https://i.imgur.com/vs94g7T.png">January 2010</a> -
<a href="https://i.imgur.com/4rmsa4b.png">January 2009</a><br><br>
<a href="https://i.imgur.com/SX8Xwb4.png"><img src="https://i.imgur.com/SX8Xwb4l.png"></a><br><br>(Click to enlarge)<br><br>An explanation: each coloured shape in the graph represents a platform. The horizontal axis is time. The vertical axis represents the number of games released. So the height of a shape on a given point in time indicates the number of games released for that platform that year. The total height of the graph on a given point in time shows the total releases that year. The graph is meant to represent new game releases and thus excludes DLC, Special Edition and Compilation items. It does include each game for each platform it was released on.<br><br>Notable changes since last year:<br>
- There are quite a lot of new platforms. In fact there are now so many that Excel refused to render the graph due to a hardcoded limit. I had to switch to LibreOffice to make the graph.<br>
- Because I'm now excluding compilations, DLC and Special Edition releases, there are generally less releases per year visible. In particular 2017 ends up with 1000 games less than lass year's graph! My apologies to those who spent lots of time and effort to document DLC, but I just felt it was cluttering the graph!<br>
- My pet project this year was documenting games from the late 60s and early 70s. Which shows as a tiny bump in an area of the graph that was previously almost flat.<br>
- It looks like we didn't keep up with new releases as well as last year, judging from the drop-off in 2018.<br>
- The coverage gap of 2016 has been filled it appears.<br>
- Feel free to point out other interesting info in the graph!<br><br><br>[All data taken from MobyGames. Of course, the graph is only as complete as our database is. Come <a href="https://www.mobygames.com/info/contribute">help us</a> if you can!]
          </div>
<div class="newsStatusBar">
Submitted by <a href="https://www.mobygames.com/user/sheet/userSheetId,68871/">vedder</a> <a href="https://www.mobygames.com/info/patrons"><span class="glyphicon glyphicon-star donator-star"></span></a> (48213) on Jan 06, 2019<span class="fr"><a href="https://www.mobygames.com/forums/dga,2/dgb,3/dgm,245062/">10 comments</a></span>
</div>
</div>

        <div class="newsItem">
          <div class="newsTitle">
        What was the favorite game you played in 2018?
          </div>

          <div class="newsAbstract">
        The year is almost over, so it is time to name your favorite games of the year! As it is MobyGames tradition, all games you have played are acceptable, not only 2018 ones.
          </div>
<div class="newsStatusBar">
Submitted by <a href="https://www.mobygames.com/user/sheet/userSheetId,136314/">Patrick Bregger</a> <a href="https://www.mobygames.com/info/patrons"><span class="glyphicon glyphicon-star donator-star"></span></a> (237766) on Dec 31, 2018<span class="fr"><a href="https://www.mobygames.com/forums/dga,2/dgb,3/dgm,244898/">19 comments</a></span>
</div>
</div>

        <div class="newsItem">
          <div class="newsTitle">
        Happy (upcoming!) Holidays from MobyGames!
          </div>

          <div class="newsAbstract">
        Now the holiday season is approaching, MobyGames would just like to wish all of its contributors a very happy 2018, and a merry 2019, too!<br><br>As <a href="https://www.mobygames.com/moby_stats">our database stats</a> and daily requests for API access show, we continue to have the largest set of credits, screenshots and covers with open access anywhere online - and THANK YOU if you are a net contributors to it! Now, let's roll on, 2019...
          </div>
<div class="newsStatusBar">
Submitted by <a href="https://www.mobygames.com/user/sheet/userSheetId,245961/">Simon Carless</a> <a href="https://www.mobygames.com/info/patrons"><span class="glyphicon glyphicon-fire donator-flame"></span></a> (1857) on Dec 15, 2018<span class="fr"><a href="https://www.mobygames.com/forums/dga,2/dgb,3/dgm,244660/">7 comments</a></span>
</div>
</div>

        <div class="newsItem">
          <div class="newsTitle">
        New MobyGames DB addition: magazine advertisements!
          </div>

          <div class="newsAbstract">
        As threatened for a while, contributors are now allowed to upload magazine ads that they've scanned onto MobyGames! We're really excited to build a database around these, since there's nowhere online that you can see them all in one place.<br><br>Some quick guidelines: Magazine Advertisement is now a promo image 'type'. So to add them, simply go to add 'promo images', create a new promo image group called Magazine Advertisements, and title each image with the magazine name, country, issue, and date. [Fabricated example: Sinclair User (United Kingdom), Issue 73 (September 1994).]<br><br>(If there are already some magazine ads uploaded for that game, then just add them to the existing promo image group. There are also a few edge cases, so feel free to discuss them in comments. And good luck!)
          </div>
<div class="newsStatusBar">
Submitted by <a href="https://www.mobygames.com/user/sheet/userSheetId,245961/">Simon Carless</a> <a href="https://www.mobygames.com/info/patrons"><span class="glyphicon glyphicon-fire donator-flame"></span></a> (1857) on Oct 24, 2018<span class="fr"><a href="https://www.mobygames.com/forums/dga,2/dgb,3/dgm,244137/">25 comments</a></span>
</div>
</div>
<p>View <a href="https://www.mobygames.com/news">past news</a>.</p><h3 class="sectionSeparator">Tip Of The Day</h4><div>Did you know that you can <a href="https://www.mobygames.com/poll_wizard">contribute a poll</a>?  If there is an idea that you have for a poll, please let us know.  We are always looking for new ideas. &nbsp;&nbsp;<a href="https://www.mobygames.com/tips/view">more tips</a></div></div>
<div class="col-md-4 col-lg-4">  <div class="panel panel-default">
    <div class="panel-heading">
      <h3 class="panel-title">Current MobyGoal</h3>
    </div>
    <div class="panel-body">
      <h1 class="progressBarHeader">2800 Arcade Games <small>(36%)</small></h1>
      <div class="progress progress-striped active">
        <div class="progress-bar" role="progressbar" aria-valuenow="36" aria-valuemin="0" aria-valuemax="100" style="width: 36%">
          <span class="sr-only">36% Complete</span>
        </div>
      </div>
      <p>We need 208 more <a href="https://www.mobygames.com/browse/games/arcade/">Arcade</a> games documented to complete this goal!</p>
    </div>
  </div>
<div class="well" style="text-align:center; margin-bottom: 10px;"><div class="proper-ad-unit">
    <div id="proper-ad-mobygames_side_1"> <script> propertag.cmd.push(function() { proper_display('mobygames_side_1'); }); </script> </div>
</div></div><div class="sideBar">
  <div class="sideBarTitle color4"><h2>Featured Game</h2></div>
  <div class="sideBarContent color3"><h3 class="featured-title"><a href="https://www.mobygames.com/game/sheet/gameId=30287/">Vandal-Hearts II</a></h3><a href="https://www.mobygames.com/game/sheet/gameId,30287" class="featured-box"><img src="/images/covers/s/94577-vandal-hearts-ii-playstation-front-cover.jpg" width="120" height="120"></a>
Vandal Hearts II turns the classic SRPG formula on its head by forcing you and your opponent to move and act at the same time. Many reviewers panned it because they didn't understand how to predict enemies' actions but once it clicks, it's incredibly rewarding stuff.
            <div class="right">by <a href="https://www.mobygames.com/user/sheet/userSheetId,275810/">A.J. Maciejewski</a></div>
            <div class="center"><a href="https://www.mobygames.com/featured_games/view">Past Weeks</a></div></div>
</div><h2 class="sectionSeparator cleartop clearbot">This Day In Gaming</h2><table class="table table-striped table-condensed table-hover"><tr><td><b>1987</b><br /><a href="https://www.mobygames.com/game/nes/mega-man-">Mega Man</a><br />NES version released. (Japan)</td></tr><tr><td><b>1988</b><br /><a href="https://www.mobygames.com/game/nes/final-fantasy-ii">Final Fantasy II</a><br />NES version released. (Japan)</td></tr><tr><td><a href="https://www.mobygames.com/game/nes/top-rider">Top-Rider</a><br />NES version released. (Japan)</td></tr><tr><td><b>1989</b><br /><a href="https://www.mobygames.com/game/dos/harpoon">Harpoon</a><br />DOS version released. (United States)</td></tr><tr><td style="text-align: center;"><b>[ <a href="https://www.mobygames.com/stats/this-day">browse by date</a> ]</b></td></tr></table><div class="sideBar">
  <div class="sideBarTitle color4"><h2>MobyGames Poll</h2></div>
  <div class="sideBarContent color3"><form ACTION="/poll/vote" accept-charset="UTF-8" id="formaabe" method="POST"><div class="formContents"><p>Do you strive to get &quot;100% completion&quot; on the games you play (i.e. completing every single sidequest, finding every single secret, etc.)?</p><input type="hidden" name="pollId" value="2392">
<table SUMMARY="Poll Choices" border=0 cellspacing=0 cellpadding=0>
<tr valign="top">
<td nowrap>&nbsp;&nbsp;<input type="radio"  id="poll-6730" name="pollChoiceId" value="6730">&nbsp;&nbsp;</td>
<td width="100%"><label for="poll-6730">Yes, I do this with almost every game I play</label></td>
</tr>
<tr valign="top">
<td nowrap>&nbsp;&nbsp;<input type="radio"  id="poll-6731" name="pollChoiceId" value="6731">&nbsp;&nbsp;</td>
<td width="100%"><label for="poll-6731">Sometimes, if I particularly like the game</label></td>
</tr>
<tr valign="top">
<td nowrap>&nbsp;&nbsp;<input type="radio"  id="poll-6732" name="pollChoiceId" value="6732">&nbsp;&nbsp;</td>
<td width="100%"><label for="poll-6732">Rarely, for games I really enjoy</label></td>
</tr>
<tr valign="top">
<td nowrap>&nbsp;&nbsp;<input type="radio"  id="poll-6733" name="pollChoiceId" value="6733">&nbsp;&nbsp;</td>
<td width="100%"><label for="poll-6733">Never</label></td>
</tr></table><div class="center"><a href="https://www.mobygames.com/poll/results/pollId,2392/">View Results</a>&nbsp;&nbsp;&nbsp;<input class="btn btn-primary btn-xs" type="submit" name="vote" value="Vote"></div></div></form></div>
</div><a class="twitter-timeline" data-width="340" data-tweet-limit="5" data-chrome="transparent noheader nofooter" href="https://twitter.com/MobyGames">Tweets by MobyGames</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script></div>
</div>
</div>
</div>
</div>
</div>
<div class="lifesupport-footer-wrapper"><div class="container"><div class="lifesupport-footer"><center><div class="proper-ad-unit">
    <div id="proper-ad-mobygames_footboard"> <script> propertag.cmd.push(function() { proper_display('mobygames_footboard'); }); </script> </div>
</div></center></div></div></div>  <div id="footer-menu">
    <div class="container">
      <div class="row">
        <div class="col-xs-6 col-sm-3 col-md-2">
          <div class="footer-header">MobyGames</div>
          <ul class="footer-nav">
            <li><a href="https://www.mobygames.com/">Home</a></li>
            <li><a href="https://www.mobygames.com/info/faq">FAQ</a></li>
            <li><a href="https://www.mobygames.com/info/standards">Standards</a></li>
            <li><a href="https://www.mobygames.com/info/api">API</a></li>
            <li><a href="https://www.mobygames.com/info/feedback">Contact</a></li>
          </ul>
        </div>
        <div class="col-xs-6 col-sm-3 col-md-2">
          <div class="footer-header">What's New</div>
          <ul class="footer-nav">
            <li><a href="https://www.mobygames.com/stats/recent_entries">New Games</a></li>
            <li><a href="https://www.mobygames.com/stats/recent_modifications">Game Updates</a></li>
            <li><a href="https://www.mobygames.com/stats/recent_reviews">New Reviews</a></li>
            <li><a href="https://www.mobygames.com/stats/new_companies">New Companies</a></li>
            <li><a href="https://www.mobygames.com/changelog">Changelog</a></li>
          </ul>
        </div>
        <div class="col-xs-6 col-sm-3 col-md-2">
          <div class="footer-header">Stats</div>
          <ul class="footer-nav">
            <li><a href="https://www.mobygames.com/stats/top_games">Top Games</a></li>
            <li><a href="https://www.mobygames.com/stats/all_time_worst">Bottom Games</a></li>
            <li><a href="https://www.mobygames.com/stats/contributors">Top Contributors</a></li>
            <li><a href="https://www.mobygames.com/moby_stats">Database Stats</a></li>
            <li><a href="https://www.mobygames.com/wanted/dead-or-alive">Most Wanted</a></li>
          </ul>
        </div>
        <div class="col-xs-6 col-sm-3 col-md-2">
          <div class="footer-header">
            Community
          </div>
          <ul class="footer-nav">
            <li><a href="https://www.mobygames.com/info/patrons">Patrons</a></li>
            <li><a href="https://www.mobygames.com/forums">Forums</a></li>
            <li><a href="https://discord.gg/8zWGTQp">Discord</a></li>
            <li><a href="https://twitter.com/MobyGames">Twitter</a></li>
            <li><a href="https://www.facebook.com/MobyGames">Facebook</a></li>
          </ul>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-4">
          <div class="footer-moby-logo">
            <a href="https://www.mobygames.com/" class="add-margin-right hidden-xs"><img src="/images/mobygames-logo.png" width="109" height="50" alt="mobygames logo"></a>
            <a href="https://www.patreon.com/mobygames" class="footer-moby-patreon">Become a Patron to help support the MobyGames project</a>
          </div>
          <div class="footer-moby-info">
            <p>
              The oldest, largest and most accurate video game database covering over 270 platforms from 1950 to date!
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div id="footer-bottom">
    <div class="container">
      <p class="copyright">
        <a href="https://www.mobygames.com/">MobyGames</a>&trade; Copyright &copy; 1999-2019
        <a href="http://blueflamelabs.com"><span class="glyphicon glyphicon-fire"></span> Blue Flame Labs</a>. All rights reserved.
        <a href="https://www.mobygames.com/info/terms">Terms of Use</a>.
        <a href="https://www.mobygames.com/info/privacy">Privacy Policy</a>.
      </p>
      <p class="mobyquote">
        &quot;<a href="https://www.mobygames.com/game/castlevania-ii-simons-quest/trivia">What a horrible night to have a curse</a>&quot; <a href="https://www.mobygames.com/game/castlevania-ii-simons-quest/trivia"><span class="glyphicon glyphicon-info-sign"></span></a>
      </p>
    </div>
  </div>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-258321-1', 'auto');
  ga('send', 'pageview');

</script></body>
</html>
