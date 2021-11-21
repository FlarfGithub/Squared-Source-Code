<div class="site-header">
    <div id="navigation-container">
        <a href="/Default.aspx" class="btn-logo" data-se="nav-logo"></a>
        <div id="navigation-menu">
            <ul>
                <li><a href="/Default.aspx" ref="nav-myroblox" data-se="nav-myhome">Главная</a></li>
                <li><a data-se="nav-games" href="/games" ref="nav-games" title="Games">Игры</a> </li>
                <li><a data-se="nav-catalog" href="/Catalog.aspx" ref="nav-catalog" title="Catalog">Каталог</a></li>
                <li><a data-se="nav-catalog" href="/Browse.aspx" ref="nav-catalog" title="Browse">Люди</a></li>
                <li><a data-se="nav-catalog" href="/News.aspx" ref="nav-catalog" title="Browse">Новости</a></li>
            </ul>
        </div>
                <div id="header-login-container">
				<?php if(isset($_SESSION['id'])){echo '<div id="AlertSpace">
<div class="AlertItem" style="max-width: 50px;text-align:center;" id="logoutonclick">
<a id="lsLoginStatus" data-se="nav-logout" class="logoutButton" href="/logout">Bыйти</a>
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
                        <a id="header-signup" href="/register.aspx">Зарегистрируйся</a>
                        <span id="header-or">или</span>
                        <span id="login-span">
                            <a id="header-login" class="btn-control btn-control-large" href="/login">Зайти</a>
                        </span>
                        </div>';} ?>
                </div>
    </div>
    <br>
<p>&nbsp;</p>
</div>
                            <p>&nbsp;</p>
                            <div id="ctl00_Announcement">
<div id="ctl00_SystemAlertDiv" class="SystemAlert" style="background-color:#1951a5;background-image:  url();background-size: auto;background-position: left center;background-repeat: no-repeat;">
<div id="ctl00_SystemAlertTextColor" class="SystemAlertText">
<div id="ctl00_LabelAnnouncement">добро пожаловать на 2014 тему сайта</div>
</div>
</div>
</div>
                            <div id="ctl00_Announcement">
<div id="ctl00_SystemAlertDiv" class="SystemAlert" style="background-color:#188a4e;background-image:  url();background-size: auto;background-position: left center;background-repeat: no-repeat;">
<div id="ctl00_SystemAlertTextColor" class="SystemAlertText">
<div id="ctl00_LabelAnnouncement">если найдутся баги то отправляйте их Филу или Джанксу</div>
</div>
</div>
</div>
<div id="ctl00_Announcement">
<div id="ctl00_SystemAlertDiv" class="SystemAlert" style="background-color:#1951a5;background-image:  url();background-size: auto;background-position: left center;background-repeat: no-repeat;">
<div id="ctl00_SystemAlertTextColor" class="SystemAlertText">
<div id="ctl00_LabelAnnouncement">40 пользователей прикольно</div>
</div>
</div>
</div>