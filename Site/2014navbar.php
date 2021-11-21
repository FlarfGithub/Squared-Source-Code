<div class="site-header">
    <div id="navigation-container">
        <a href="/Default.aspx" class="btn-logo" data-se="nav-logo"></a>
        <div id="navigation-menu">
            <ul>
                <li><a href="/Default.aspx" ref="nav-myroblox" data-se="nav-myhome">Home</a></li>
                <li><a data-se="nav-games" href="/games" ref="nav-games" title="Games">Games</a> </li>
                <li><a data-se="nav-catalog" href="/Catalog.aspx" ref="nav-catalog" title="Catalog">Catalog</a></li>
                <li><a data-se="nav-catalog" href="/Browse.aspx" ref="nav-catalog" title="Browse">People</a></li>
                <li><a data-se="nav-catalog" href="/News.aspx" ref="nav-catalog" title="Browse">News</a></li>
            </ul>
        </div>
                <div id="header-login-container">
				<?php if(isset($_SESSION['id'])){echo '<div id="AlertSpace">
<div class="AlertItem" style="max-width: 50px;text-align:center;" id="logoutonclick">
<a id="lsLoginStatus" data-se="nav-logout" class="logoutButton" href="/logout">Logout</a>
</div>
<div class="HeaderDivider"></div>

<a data-se="nav-robux" href="#">
<div id="RobuxWrapper" class="RobuxAlert AlertItem tooltip-bottom" original-title="ROBUX">
<div class="icons robux_icon"></div>
<div id="RobuxAlertCaption" class="AlertCaption">'.$_SESSION['qian'].'</div>
</div>
</a>
<div class="HeaderDivider"></div>


<a data-se="nav-login" href="/User.aspx">
<div id="AuthenticatedUserNameWrapper">
<div id="AuthenticatedUserName">
<span class="login-span notranslate">'.$_SESSION['user'].'</span>
</div>
</div>
</a>

</div>';}else{echo '
                    <div id="header-login-wrapper" class="iframe-login-signup" data-display-opened="">
                        <a id="header-signup" href="/register.aspx">Sign Up</a>
                        <span id="header-or">or</span>
                        <span id="login-span">
                            <a id="header-login" class="btn-control btn-control-large" href="/login">Login <span class="grey-arrow">▼</span></a>
                        </span>
                        <div id="iFrameLogin" style="display: none; height: 128px;">
                            <iframe class="login-frame" src="/login.aspx" scrolling="no" frameborder="0"></iframe>
				</div></div>';} ?>
                </div>
    </div>
    <br>
<p>&nbsp;</p>
</div>
                            <p>&nbsp;</p>
                            <div id="ctl00_Announcement">
<div id="ctl00_SystemAlertDiv" class="SystemAlert" style="background-color:#1951a5;background-image:  url();background-size: auto;background-position: left center;background-repeat: no-repeat;">
<div id="ctl00_SystemAlertTextColor" class="SystemAlertText">
<div id="ctl00_LabelAnnouncement">welcome to the 2014 site theme</div>
</div>
</div>
</div>
                            <div id="ctl00_Announcement">
<div id="ctl00_SystemAlertDiv" class="SystemAlert" style="background-color:#188a4e;background-image:  url();background-size: auto;background-position: left center;background-repeat: no-repeat;">
<div id="ctl00_SystemAlertTextColor" class="SystemAlertText">
<div id="ctl00_LabelAnnouncement">if you find any bugs report them to janx or phil</div>
</div>
</div>
</div>
<!--<div id="ctl00_Announcement">
<div id="ctl00_SystemAlertDiv" class="SystemAlert" style="background-color:#1951a5;background-image:  url();background-size: auto;background-position: left center;background-repeat: no-repeat;">
<div id="ctl00_SystemAlertTextColor" class="SystemAlertText">
<div id="ctl00_LabelAnnouncement">30 users nice</div>
</div>
</div>
</div>-->