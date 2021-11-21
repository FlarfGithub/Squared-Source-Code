<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" xmlns:fb="http://www.facebook.com/2008/fbml">
   <head>
      <?php include_once "2014head.php"; ?>
   </head>
   <body class="">
      <div id="MasterContainer">
         <?php include_once "updateinfo.php"; ?>
         <?php if(!isset($_SESSION['id'])){ header('Location: login'); } ?>
         <?php include_once "2014navbar.php"; ?>
<div id="BodyWrapper">
<div id="RepositionBody">

<div id="Body" class="" style="width:970px">
<script type="text/javascript">
			//<![CDATA[
			if (window.chrome && window.location.hash == '#chromeInstall') {
				window.location.hash = '';
				var continuation = '(' + $.cookie('chromeInstall') + ')';
				$.cookie('chromeInstall', null);
				RobloxLaunch._GoogleAnalyticsCallback = function() {
					GoogleAnalyticsEvents.FireEvent(['Play', 'User', 'Over13', 1]);
					$(function() {
						RobloxEventManager.triggerEvent('rbx_evt_play_user', {
							age: 'Over13',
							gender: 'Male'
						});
					});
				};
				Roblox.Client.ResumeTimer(eval(continuation));
			}
			$(function() {
				RobloxEventManager.triggerEvent('rbx_evt_abtest', {
					experiment: 'InstallInstructions',
					variation: 'BGroup'
				});
			});
			if (typeof __utmSetVar !== 'undefined') {
				__utmSetVar('');
			}
			if (typeof __utmSetVar !== 'undefined') {
				__utmSetVar('Roblox_User_Top_728x90');
			}
			Roblox.Controls.Image.ErrorUrl = "http://sitetest1.roblonium.com/Analytics/BadHtmlImage.ashx";
			$(function() {
				$('.VisitButtonPlay').click(function() {
					RobloxLaunch._GoogleAnalyticsCallback = function() {
						GoogleAnalyticsEvents.FireEvent(['Play', 'User', 'Over13', 1]);
						$(function() {
							RobloxEventManager.triggerEvent('rbx_evt_play_user', {
								age: 'Over13',
								gender: 'Male'
							});
						});
					};
					play_placeId = (typeof $(this).attr('placeId') === 'undefined') ? play_placeId : $(this).attr('placeId');
					if (typeof window.external !== 'undefined' && window.external.IsRobloxABApp) {
						RobloxABLaunch.RequestGame('PlaceLauncherStatusPanel', play_placeId );
						return false;
					} else if (Roblox.Client.WaitForRoblox(function() { //hits here
							RobloxLaunch.RequestGame('PlaceLauncherStatusPanel', play_placeId );
						})) {}
					return false;
				});
				$('.FeaturedGameButton').click(function() {
					$(function() {
						RobloxEventManager.triggerEvent('rbx_evt_generic', {
							type: 'PlayGameGuestClick'
						});
					});
					$(function() {
						RobloxEventManager.triggerEvent('rbx_evt_generic', {
							type: 'FeaturedGameButtonClick'
						});
					});
				});
				$('.VisitButtonPersonalServer').click(function() {
					RobloxLaunch._GoogleAnalyticsCallback = function() {
						GoogleAnalyticsEvents.FireEvent(['Play', 'User', 'Over13', 1]);
						$(function() {
							RobloxEventManager.triggerEvent('rbx_evt_play_user', {
								age: 'Over13',
								gender: 'Male'
							});
						});
					};
					play_placeId = (typeof $(this).attr('placeId') === 'undefined') ? play_placeId : $(this).attr('placeId');
					if (typeof window.external !== 'undefined' && window.external.IsRobloxABApp) {
						RobloxABLaunch.RequestGroupBuildGame('PlaceLauncherStatusPanel', play_placeId );
						return false;
					} else if (Roblox.Client.WaitForRoblox(function() {
							RobloxLaunch.RequestGroupBuildGame('PlaceLauncherStatusPanel', play_placeId )
						})) {}
					return false;
				});
				$('.VisitButtonSoloPlay').click(function() {
					RobloxLaunch._GoogleAnalyticsCallback = function() {
						GoogleAnalyticsEvents.FireEvent(['PlaySolo', 'User', 'Over13', 1]);
					};
					play_placeId = (typeof $(this).attr('placeId') === 'undefined') ? play_placeId : $(this).attr('placeId');
					if (Roblox.Client.WaitForRoblox(function() {
							Roblox.VideoPreRoll.showVideoPreRoll = false;
							RobloxLaunch.StartGame('http://sitetest1.roblonium.com//Game/visit.ashx?placeId=' + play_placeId , 'visit.ashx', 'https://sitetest1.roblonium.com//Login/Negotiate.ashx', 'FETCH', true)
						})) {}
					return false;
				});
				$('.VisitButtonBuild').click(function() {
					RobloxLaunch._GoogleAnalyticsCallback = function() {
						GoogleAnalyticsEvents.FireEvent(['Build', 'User', 'Over13', 1]);
					};
					play_placeId = (typeof $(this).attr('placeId') === 'undefined') ? play_placeId : $(this).attr('placeId');
					if (Roblox.Client.WaitForRoblox(function() {
							Roblox.VideoPreRoll.showVideoPreRoll = false;
							RobloxLaunch.StartGame('http://sitetest1.roblonium.com//Game/visit.ashx?placeId=' + play_placeId , 'visit.ashx', 'https://sitetest1.roblonium.com//Login/Negotiate.ashx', 'FETCH', true)
						})) {}
					return false;
				});
				$('.VisitButtonEdit').click(function() {
					RobloxLaunch._GoogleAnalyticsCallback = function() {
						GoogleAnalyticsEvents.FireEvent(['Edit', 'User', 'Over13', 1]);
					};
					play_placeId = (typeof $(this).attr('placeId') === 'undefined') ? play_placeId : $(this).attr('placeId');
					if (Roblox.Client.WaitForRoblox(function() {
							RobloxLaunch.StartGame('http://sitetest1.roblonium.com//Game/edit.ashx?placeId=' + play_placeId , 'edit.ashx', 'https://sitetest1.roblonium.com//Login/Negotiate.ashx', 'FETCH', true)
						})) {}
					return false;
				});
			});
			if (typeof __utmSetVar !== 'undefined') {
				__utmSetVar('Roblox_User_Middle_300x250');
			}
			var Page_ValidationActive = false;
			if (typeof(ValidatorOnLoad) == "function") {
				ValidatorOnLoad();
			}

			function ValidatorOnSubmit() {
				if (Page_ValidationActive) {
					return ValidatorCommonOnSubmit();
				} else {
					return true;
				}
			};
			(function() {
				var fn = function() {
					Roblox.Client._installSuccess = function() {
						urchinTracker('InstallSuccess');
					};
					Sys.Application.remove_load(fn);
				};
				Sys.Application.add_load(fn);
			})();;
			(function() {
				var fn = function() {
					RobloxLaunch._LaunchGamePage = "/Install/Download.aspx";
					Sys.Application.remove_load(fn);
				};
				Sys.Application.add_load(fn);
			})();
			document.getElementById('ctl00_cphRoblox_rbxUserAssetsPane_CreateSetPanel1_CustomValidatorSetNameProfanity').dispose = function() {
				Array.remove(Page_Validators, document.getElementById('ctl00_cphRoblox_rbxUserAssetsPane_CreateSetPanel1_CustomValidatorSetNameProfanity'));
			}
			//]]>
			</script>
<style type="text/css">
   #Body {
   padding: 10px;
   }
</style>
<h1>My Friends</h1>
<div id="FriendTabs" class="tab-container tab-history-hash">
<div class="">Friends</div>
<div class="">Best Friends</div>
<div class="tab-active">Friend Requests</div>
</div>
<div>
<div id="FriendsTab" class="">
<h3><a href="https://sitetest1.roblonium.com/browse.aspx">Find your friends</a> on ROBLONIUM</h3> </div>
<div id="BestFriendsTab" class="">
<h3><a href="https://sitetest1.roblonium.com/browse.aspx">Find your friends</a> on ROBLONIUM</h3> </div>
<div id="FriendRequestsTab" class="tab-active">
<h3><a href="https://sitetest1.roblonium.com/browse.aspx">Find your friends</a> on ROBLONIUM</h3> <script type="text/javascript">
         Roblox.Friends = Roblox.Friends || {};
         //<sl:translate>
         Roblox.Friends.Resources = {
             FeatureDisabled: "Feature Disabled",
             AddFriendsDisabled: "Adding friends is currently disabled.",
             RemoveFriend: "Remove Friend",
             RemoveFriendMessage: "Are you sure you want to remove {0} as a friend?"
         };
         //</sl:translate>
      </script>
<div class="GenericModal modalPopup unifiedModal smallModal" style="display:none;">
<div class="Title"></div>
<div class="GenericModalBody">
<div>
<div class="ImageContainer">
<img class="GenericModalImage" alt="generic image">
</div>
<div class="Message"></div>
</div>
<div class="clear"></div>
<div id="GenericModalButtonContainer" class="GenericModalButtonContainer">
<a class="ImageButton btn-neutral btn-large roblox-ok">OK<span class="btn-text">OK</span></a>
</div>
</div>
</div>
<script type="text/javascript">
           Roblox = Roblox || {};
           Roblox.GenericModal = Roblox.GenericModal || {};

           Roblox.GenericModal.Resources = {
               //<sl:translate>
               ErrorText: 'Error',
               ErrorMessage: 'Sorry, an error occurred.'
               //</sl:translate>
           };
       </script>
</div>
</div>
<script type="text/javascript">
   InitializeFriends(false, false, false);
</script>
<div style="clear:both"></div>
</div>
</div>
</div>
<div id="Footer" class="LanguageRedesign">
<div class="FooterNav">
<a href="https://www.roblox.com/info/Privacy.aspx"><b>Privacy Policy</b></a>
&nbsp;|&nbsp;
<a href="https://corp.roblox.com/advertise-on-roblox" class="roblox-interstitial">Advertise with Us</a>
&nbsp;|&nbsp;
<a href="https://corp.roblox.com/roblox-press" class="roblox-interstitial">Press</a>
&nbsp;|&nbsp;
<a href="https://corp.roblox.com/contact-us" class="roblox-interstitial">Contact Us</a>
&nbsp;|&nbsp;
<a href="https://corp.roblox.com/" class="roblox-interstitial">About Us</a>
&nbsp;|&nbsp;
<a href="https://blog.roblox.com/" class="roblox-interstitial">Blog</a>
&nbsp;|&nbsp;
<a href="https://corp.roblox.com/jobs" class="roblox-interstitial">Jobs</a>
&nbsp;|&nbsp;
<a href="https://sitetest1.roblonium.com/Parents.aspx">Parents</a>
&nbsp;|&nbsp;
<a href="http://shop.roblox.com/" class="roblox-interstitial">Shop</a>
<span class="LanguageOptionElement">&nbsp;|&nbsp;</span>
<span runat="server" navigateurl="/Parents.aspx" ref="footer-parents" class="LanguageOptionElement LanguageTrigger" drop-down-nav-button="LanguageTrigger">English&nbsp;<span class="FooterArrow">▼</span>
<div class="dropuplanguagecontainer" style="display:none;" drop-down-nav-container="LanguageTrigger">
<div class="dropdownmainnav" style="z-index:1023">
<a href="https://sitetest1.roblonium.com/UserLanguage/LanguageRedirect?languageCode=de&amp;relativePath=%2fUser.aspx%3fID%3d1" class="LanguageOption js-lang" data-js-langcode="de"><span class="notranslate">Deutsch</span>&nbsp;(German) </a>
</div>
</div>
</span>
</div>
<div class="FooterNav">
<div id="SEOGenreLinks" class="SEOGenreLinks">
<a href="https://sitetest1.roblonium.com/all-games">All Games</a>
<span>|</span>
<a href="https://sitetest1.roblonium.com/building-games">Building</a>
<span>|</span>
<a href="https://sitetest1.roblonium.com/horror-games">Horror</a>
<span>|</span>
<a href="https://sitetest1.roblonium.com/town-and-city-games">Town and City</a>
<span>|</span>
<a href="https://sitetest1.roblonium.com/military-games">Military</a>
<span>|</span>
<a href="https://sitetest1.roblonium.com/comedy-games">Comedy</a>
<span>|</span>
 <a href="https://sitetest1.roblonium.com/medieval-games">Medieval</a>
<span>|</span>
<a href="https://sitetest1.roblonium.com/adventure-games">Adventure</a>
<span>|</span>
<a href="https://sitetest1.roblonium.com/sci-fi-games">Sci-Fi</a>
<span>|</span>
<a href="https://sitetest1.roblonium.com/naval-games">Naval</a>
<span>|</span>
<a href="https://sitetest1.roblonium.com/fps-games">FPS</a>
<span>|</span>
<a href="https://sitetest1.roblonium.com/rpg-games">RPG</a>
<span>|</span>
<a href="https://sitetest1.roblonium.com/sports-games">Sports</a>
<span>|</span>
<a href="https://sitetest1.roblonium.com/fighting-games">Fighting</a>
<span>|</span>
<a href="https://sitetest1.roblonium.com/western-games">Western</a>
</div>
</div>
<div class="legal">
<div class="left">
<div id="a15b1695-1a5a-49a9-94f0-9cd25ae6c3b2">
<a title="Hello gamer" target="_blank" href="javascript:window.external.StartGame(&#39;authenticationTicket&#39;, &#39;http://roblonium.com/Login/Negotiate.ashx&#39;, &#39;http://roblonium.com/Game/Join.ashx?server=127.0.0.1&amp;UserID=-13&#39;);">


<img style="border: none; width: 100%;" src="./EditFriends_files/Roblonium_Studio_By_Lemur.png" alt="Gaming">
</a>
</div>
</div>
<div class="right">
<p class="Legalese">
ROBLOX, "Online Building Toy", characters, logos, names, and all related indicia are trademarks of <a href="https://corp.roblox.com/" ref="footer-smallabout" class="roblox-interstitial">ROBLOX Corporation</a>, ©2013. Patents pending.
ROBLONIUM is not sponsored, authorized or endorsed by ROBLOX Corporation in any way.
</p>
</div>
<div class="clear"></div>
</div>
</div> </div>

<div id="ChatContainer" style="position:fixed;bottom:0;right:0;z-index:10020;">

<div id="friend_dock_chattemplate" style="display: none;">
<div id="CHATUSERID_friend_dock_chatbox" userid="CHATUSERID" class="friend_dock_chatbox">
<div class="friend_dock_chatbox_titlebar blinkoffheader" userid="CHATUSERID">
<div class="friend_dock_chatbox_username">
<a style="color: #fff" class="friend_dock_chatbox_username_display" href="https://sitetest1.roblonium.com/user.aspx?id=CHATUSERID">CHATUSERNAME</a>
<a class="friend_dock_chatbox_username_abuse" style="color: #fff; font-size: 9px; line-height: 14px; cursor: pointer" alt="Report Abuse" href="https://sitetest1.roblonium.com/My/EditFriends.aspx#" onclick=" ReportAbuse(CHATUSERID); return false; ">(Report)</a>
</div>
<div class="friend_dock_chatbox_closebutton">
 <a href="https://sitetest1.roblonium.com/My/EditFriends.aspx#" style="color: #fff" onclick=" ChatBar.CloseChat($(this).parents(&#39;.friend_dock_chatbox&#39;).filter(&#39;:first&#39;));return false; ">-</a>
</div>
</div>
<div class="friend_dock_chatbox_currentlocation" style="margin: 10px; font-size: 12px; height: 18px">
</div>
<div id="CHATUSERID_friend_dock_chatbox_chat" class="friend_dock_chatbox_chat">
</div>
<textarea class="friend_dock_chatbox_entry" maxlength="255"></textarea>
</div>
</div>
<div id="friend_dock_friendtemplate" style="display: none;">
<div id="UID_CURRTAB_friend" userid="UID" username="USERNAME" class="friend_dock_friend">
<div id="UID_CURRTAB_onlinestatus" class="friend_dock_onlinestatus"></div>
<div id="UID_CURRTAB_offlinestatus" class="friend_dock_offlinestatus"></div>
<div id="UID_CURRTAB_dropdown" class="friendBarDropDown" userid="UID" username="USERNAME" style="display: none">
<div id="UID_CURRTAB_dropdownbutton" class="friend_dropdownbutton20"></div>
<div id="UID_CURRTAB_dropdownlist" class="friendBarDropDownList">
<ul>
<li onclick=" Party.InviteUser(&#39;USERNAME&#39;); " startpartydisplay=""><div>Invite To Party</div></li>
<li class="StartChat" onclick=" ChatBar.ToggleChat(&#39;UID&#39;, &#39;USERNAME&#39;); " startchattingdisplay="" userid="UID"><div>Start Chatting</div></li>
<li onclick=" window.location.href = &#39;/user.aspx?id=UID&#39;; "><div>View Profile</div></li>
<li class="EndChat" style="display: none" onclick=" ChatBar.RemoveActiveChat(this); " userid="UID"><div>End Chat</div></li>
</ul>
</div>
</div>
<img thumbnail_holder="" alt="" onclick=" ChatBar.ToggleChat(&#39;UID&#39;, &#39;USERNAME&#39;); return false; " width="48" height="48" class="ActiveChatThumb">
<div class="friend_dock_username"><span class="friend_dock_username_href">USERNAMETRUNCATED</span></div>
</div>
</div>
<div style="position:relative">
<div id="friend_dock_chatholder">
</div>
<div id="partycontainer" style="display:none;margin-left:10px;float:right;">
<div id="partyMemberTemplate" style="display:none;height:32px">
<div id="party_pendinguserid_UID">
<dt style="position:relative">
<span id="UID_status" class="friend_dock_offlinestatus"></span>
[PARTY_MEMBER_THUMBNAIL]
</dt>
<dd>
<span>[PARTY_MEMBER_NAME]</span>&nbsp;&nbsp;&nbsp;[PARTY_MEMBER_REPORT][PARTY_KICK_MEMBER]
<br>
<span class="grey9">&nbsp;</span>
</dd> 
</div>
</div>
<script type="text/javascript" language="javascript">
        Party.CurrentUserID = 3327; //51827363
        Party.CurrentUserName = "1322658"; //Calesvol
        Party.ActiveView = "";
        Party.PollThreadAvailable = true;
        Party.FirstLoad = true;
        Party.PollIntervalTimer = null;
        Party.Cookie = new RobloxJSONCookie("PartyCookie"); 
        Party.MaxPartySize = 6;
        Party.PlayEnabled = true;
        
        Party.Resources = {
         areYouSureReport: 'Are you sure you would like to report '
         , report: "Report"
         , kick: "Kick"
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
    </script>

<script type="text/javascript" language="javascript">
    try
    {
        $(function()
        {
            Party.ProcessPolledData(eval({"CreatorID":1630321,"GameGuid":null,"PartyGameAsset":null,"PartyGuid":"b023c697-b682-4881-8f51-75d2e3d4ba07","Members" : [{"ChatColor":"#0066FF","HasUpdates":false,"PartyGuid":"b023c697-b682-4881-8f51-75d2e3d4ba07","Pending":false,"UserID":1630321,"UserName":"Regra13","IsOnline" : "True","Thumbnail" : "https://t0ak.roblox.com/4f2bf7b3a8cb024795ea441af8e5c1ff"},{"ChatColor":"#FF9900","HasUpdates":false,"PartyGuid":"b023c697-b682-4881-8f51-75d2e3d4ba07","Pending":false,"UserID":14390918,"UserName":"omahopah","IsOnline" : "True","Thumbnail" : "https://t1ak.roblox.com/e54102f42545e695a27424e40f70f028"}],"CreatorName" : "Regra13","Conversation" : [{"Message":"K","RecipientID":0,"SenderUserID":14390918,"SenderUserName":"omahopah","TimeSent":"9\/15\/2012 3:30:34 PM"},{"Message":"So I need you to do something real quick","RecipientID":0,"SenderUserID":1630321,"SenderUserName":"Regra13","TimeSent":"9\/15\/2012 3:30:39 PM"},{"Message":"Go to my profile","RecipientID":0,"SenderUserID":1630321,"SenderUserName":"Regra13","TimeSent":"9\/15\/2012 3:30:57 PM"},{"Message":"Wait 1st","RecipientID":0,"SenderUserID":1630321,"SenderUserName":"Regra13","TimeSent":"9\/15\/2012 3:31:03 PM"},{"Message":"okay","RecipientID":0,"SenderUserID":14390918,"SenderUserName":"omahopah","TimeSent":"9\/15\/2012 3:31:06 PM"},{"Message":"Do you use google chrome?","RecipientID":0,"SenderUserID":1630321,"SenderUserName":"Regra13","TimeSent":"9\/15\/2012 3:31:09 PM"},{"Message":"Firefox","RecipientID":0,"SenderUserID":14390918,"SenderUserName":"omahopah","TimeSent":"9\/15\/2012 3:31:20 PM"},{"Message":"Do you have chrome?","RecipientID":0,"SenderUserID":1630321,"SenderUserName":"Regra13","TimeSent":"9\/15\/2012 3:31:29 PM"},{"Message":"No","RecipientID":0,"SenderUserID":14390918,"SenderUserName":"omahopah","TimeSent":"9\/15\/2012 3:31:33 PM"},{"Message":"Ok lemme think","RecipientID":0,"SenderUserID":1630321,"SenderUserName":"Regra13","TimeSent":"9\/15\/2012 3:32:02 PM"},{"Message":"im downloading it","RecipientID":0,"SenderUserID":14390918,"SenderUserName":"omahopah","TimeSent":"9\/15\/2012 3:32:36 PM"},{"Message":"Do you think you can get google chrome??? its free","RecipientID":0,"SenderUserID":1630321,"SenderUserName":"Regra13","TimeSent":"9\/15\/2012 3:32:54 PM"},{"Message":"okay","RecipientID":0,"SenderUserID":14390918,"SenderUserName":"omahopah","TimeSent":"9\/15\/2012 3:33:05 PM"},{"Message":"Tell me when you get it","RecipientID":0,"SenderUserID":1630321,"SenderUserName":"Regra13","TimeSent":"9\/15\/2012 3:33:34 PM"},{"Message":"kay","RecipientID":0,"SenderUserID":14390918,"SenderUserName":"omahopah","TimeSent":"9\/15\/2012 3:33:40 PM"},{"Message":"downloaded it","RecipientID":0,"SenderUserID":14390918,"SenderUserName":"omahopah","TimeSent":"9\/15\/2012 3:34:51 PM"},{"Message":"While your getting chrome I will listen to music :3","RecipientID":0,"SenderUserID":1630321,"SenderUserName":"Regra13","TimeSent":"9\/15\/2012 3:35:09 PM"},{"Message":"Ok","RecipientID":0,"SenderUserID":1630321,"SenderUserName":"Regra13","TimeSent":"9\/15\/2012 3:35:24 PM"},{"Message":"i got it :)","RecipientID":0,"SenderUserID":14390918,"SenderUserName":"omahopah","TimeSent":"9\/15\/2012 3:35:24 PM"},{"Message":"Now go to my profile with chrome","RecipientID":0,"SenderUserID":1630321,"SenderUserName":"Regra13","TimeSent":"9\/15\/2012 3:35:35 PM"},{"Message":"kay","RecipientID":0,"SenderUserID":14390918,"SenderUserName":"omahopah","TimeSent":"9\/15\/2012 3:35:43 PM"},{"Message":"Make sure you have your OBC theme on","RecipientID":0,"SenderUserID":1630321,"SenderUserName":"Regra13","TimeSent":"9\/15\/2012 3:35:54 PM"},{"Message":"okay","RecipientID":0,"SenderUserID":14390918,"SenderUserName":"omahopah","TimeSent":"9\/15\/2012 3:36:01 PM"},{"Message":"and?","RecipientID":0,"SenderUserID":14390918,"SenderUserName":"omahopah","TimeSent":"9\/15\/2012 3:36:48 PM"},{"Message":"Now go to the far left to the backround (where the obc hats theme is)\\","RecipientID":0,"SenderUserID":1630321,"SenderUserName":"Regra13","TimeSent":"9\/15\/2012 3:36:49 PM"}],"CreatorName" : "Regra13"}));
            Party.OnPageLoad();
        });
    }
    catch (ex)
    {

    }
</script>
<div class="partyWindow" id="party_none" style="display: block;">
<div id="party_none_title" class="title" onclick="Party.ToggleTab(false)">
<span>Party</span>
<div class="closeparty">-</div>
</div>
<div class="main">
<div id="new_party">
<p>You are not in a party. To create a party, just invite someone:</p>
<p><input type="text" id="new_party_invite_name" class="party_invite_box" onkeydown="return Party.ProcessKey(&#39;new_party_invite_name&#39;,event)" style="color: rgb(136, 136, 136);"><input type="button" class="translate" onclick="Party.DoInvite(&#39;new_party_invite_name&#39;)" value="Invite"></p>
</div>
<div class="clear" id="new_party_clear">
</div>
</div>
</div>
<div class="partyWindow" id="party_loading" style="display: none;">
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
<div class="partyWindow" id="party_pending" style="display: none;">
<div id="party_pending_title" class="title" onclick="Party.ToggleTab(false)">
<span>Party</span>
<div class="closeparty">-</div>
</div>
<div class="main">
<div id="invite_header" style="font-weight: bold; padding: 10px; color:Green;">RobloTim wants to party with you!</div>
<div class="members">
<dl id="party_invite_list">
</dl>
</div>
<div id="invite_status">
<p><span class="grey9">Invitations by Leader only</span></p>
<p><span class="grey9">Waiting for Leader to play a game</span></p>
</div>
<div class="btn_green21h">
<a href="https://sitetest1.roblonium.com/My/EditFriends.aspx#" onclick="Party.AcceptInvite();return false;">Join Party</a>
</div>
<div class="btn_red21h">
<a href="https://sitetest1.roblonium.com/My/EditFriends.aspx#" onclick="Party.DeclineInvite();return false;">Ignore</a>
</div>
<div class="clear" id="invite_clear">
</div>
</div>
</div>
<div class="partyWindow" id="party_my" style="display: none;">
<div id="party_my_title" class="title" onclick="Party.ToggleTab(false)">
<span>Party</span>
<div class="closeparty">-</div>
</div>
<div class="main" style="max-height: 517px;">
<div class="members">
<dl id="party_member_list">
</dl>
</div>
<p id="party_invite_instructions"><span class="grey9"><input type="text" id="party_my_invite_name" class="party_invite_box" onkeydown="return Party.ProcessKey(&#39;party_my_invite_name&#39;,event)" style="color: rgb(136, 136, 136);"><input type="button" class="translate" onclick="Party.DoInvite(&#39;party_my_invite_name&#39;)" value="Invite"></span></p>
<div id="chat_messages">
</div>
<div id="chat_input">
<textarea name="comments" rows="2" cols="27" id="comments" tabindex="4" title="comments"></textarea>
</div>
<div id="party-auto-follow-setting" style="padding: 5px; text-align: center">
<input id="auto-follow-party-leader" type="checkbox">
<label for="auto-follow-party-leader">Automatically follow party leader</label>
<script type="text/javascript">
                     $("#auto-follow-party-leader").prop('checked', $.cookie('AutoFollowPartyLeader') == 'true');
                     $("#auto-follow-party-leader").on("click", function () {
                         // every time I join a party in the future, this cookie will determine whether or not I automatically follow the party leader
                         $.cookie('AutoFollowPartyLeader', this.checked, { path: '/', expires: 365 });
                         $.get("/chat/party.ashx", { reqtype: "autoFollowPartyLeader" });
                     });
                 </script>
</div>
<div id="party_current_game">
<table border="0" style="padding: 0px; margin: 0px; border: 0px;">
<tbody><tr style="padding: 0px; margin: 0px; border: 0px;">
<td style="padding: 0px; margin: 0px; border: 0px;">
<div id="party_game_thumb">
</div>
</td>
<td style="padding: 0px; margin: 0px; border: 0px;">
<div id="party_game_name" style="float: right;">
</div>
<span id="party_game_follow_me" class="followme_green19h" onclick="Party.JoinGameWithParty(); return false;"></span>
<span class="btn_red21h">
<a href="https://sitetest1.roblonium.com/My/EditFriends.aspx#" onclick="Party.DeclineInvite();return false;">Leave Party</a>
</span>
</td>
</tr>
</tbody></table>
</div>
<div class="clear" id="leader_clear">
</div>
</div>
</div>
</div>
<div class="clear"></div>
</div>
<div id="friend_dock_minimized_container" style="">
<div style="float:right">
<a id="minChatsTab" href="https://sitetest1.roblonium.com/My/EditFriends.aspx#" class="tab_white19h">
<span onclick="ChatBar.ShowFriends();return false;">
<img src="./EditFriends_files/164e80229d83c8b6e55b1eb671887e54.png" style="border: none">
Online
</span>
</a>
</div>
</div>
<div id="friend_dock_container" style="                                                  display: none
">
<div id="friend_dock_titlebar">
<div style="float:left;">
<a id="bestFriendsTab" style="text-decoration: none" class="tab_white19h" href="https://sitetest1.roblonium.com/My/EditFriends.aspx#" onclick="ChatBar.TogglePanel(&#39;bestFriendsTab_dock_thumbnails&#39;);return false;"><span>Best Friends</span></a>
<a id="friendsTab" style="text-decoration: none" class="tab_white19hselected" href="https://sitetest1.roblonium.com/My/EditFriends.aspx#" onclick="ChatBar.TogglePanel(&#39;friendsTab_dock_thumbnails&#39;);return false;"><span>Online Friends</span></a>
<a id="recentsTab" style="text-decoration: none" class="tab_white19h" href="https://sitetest1.roblonium.com/My/EditFriends.aspx#" onclick="ChatBar.TogglePanel(&#39;recentsTab_dock_thumbnails&#39;);return false;"><span>Recent</span></a>
<a id="chatsTab" style="text-decoration: none" class="tab_white19h" href="https://sitetest1.roblonium.com/My/EditFriends.aspx#" onclick="ChatBar.TogglePanel(&#39;chatsTab_dock_thumbnails_chat&#39;);return false;"><span>Chats</span></a>
</div>
<div style="float:right;">
<div class="tab_white19h" id="partyTab" onclick=" Party.ToggleTab(null); return false; ">
<span>
<b><a href="https://sitetest1.roblonium.com/My/EditFriends.aspx#">Party</a></b>&nbsp;&nbsp;&nbsp;&nbsp;
</span>
</div>
<div class="friend_dock_chatsettings" style="display:none">
<div style="padding:10px 10px 10px 10px">
<div class="chat_settings_group_header">Who can chat with me:</div>
<input type="radio" id="chat_settings_all" name="rdoOnline"> <b>All Users</b><br>
<input type="radio" id="chat_settings_friends" name="rdoOnline" checked="checked"> <b>Friends</b><br>
<input type="radio" id="chat_settings_bestfriends" name="rdoOnline"> <b>Best Friends</b><br>
<input type="radio" id="chat_settings_noone" name="rdoOnline"> <b>No One</b><br>
<hr>
<div class="chat_settings_group_header">Who can party with me:</div>
<input type="radio" id="party_settings_all" name="rdoOnline2" checked="checked"> <b>All Users</b><br>
<input type="radio" id="party_settings_friends" name="rdoOnline2"> <b>Friends</b><br>
<input type="radio" id="party_settings_bestfriends" name="rdoOnline2"> <b>Best Friends</b><br>
<input type="radio" id="party_settings_noone" name="rdoOnline2"> <b>No One</b><br>
<hr>
<div class="chat_settings_group_header">Chat Notifications:</div>
<input type="radio" id="chat_settings_soundon" name="rdoNotifications" checked="checked"> <b>All</b><br>
<input type="radio" id="chat_settings_soundoff" name="rdoNotifications"> <b>None</b><br>
<div style="text-align:center; margin-top: 5px;">
<input type="button" onclick="ChatBar.ApplySettings();$(&#39;.friend_dock_chatsettings&#39;).hide();" value="Save">
</div>
</div>
</div>
<div class="tab_white19h">
<span>
<b><a onclick="$(&#39;.friend_dock_chatsettings&#39;).toggle(); return false" href="https://sitetest1.roblonium.com/My/EditFriends.aspx#">Settings</a></b>&nbsp;&nbsp;&nbsp;
<img src="./EditFriends_files/8a762994af1e122de8ac427005ac3d9b.png" onclick="ChatBar.HideFriends();return false;" style="border: none; cursor: pointer" alt="Close chat">
</span>
</div>
</div>
</div>
<div id="friend_dock_thumb_container">

<div id="friendsTab_dock_thumbnails" style="">
<div id="friendsTab_dock_thumbnails_empty" style="display:none; font-size:12px; margin-top:40px;">No results found. Find some friends <a href="https://sitetest1.roblonium.com/Browse.aspx">here</a>.</div>
</div>

<div id="bestFriendsTab_dock_thumbnails" style="float:left; display: none">
<div id="bestFriendsTab_dock_thumbnails_empty" style="display:none; font-size:12px; margin-top:40px;">No results? Start off by <a href="https://sitetest1.roblonium.com/my/editfriends.aspx">adding some Best Friends.</a></div>
</div>

<div id="recentsTab_dock_thumbnails" style="float:left; display: none">
<div id="recentsTab_dock_thumbnails_empty" style="display:none; font-size:12px; margin-top:40px;">You have not had any recent interactions.</div>
</div>

<div id="chatsTab_dock_thumbnails_chat" style="float:left; display: none">
<div id="chatsTab_dock_thumbnails_chat_empty" style="display:none; font-size:12px; margin-top:40px;">You are not currently chatting with anyone.</div>
</div>
</div>
</div>
<div id="jPlayerDiv" style="position: absolute; top: 0px; left: -9999px;"><audio id="jqjp_audio_0" preload="none"></audio><div id="jqjp_force_0" style="text-indent: -9999px;">0.7292364807799459</div></div>
<script type="text/javascript" language="javascript">
            if (typeof Roblox === "undefined") {
        Roblox = {};
        }
        if (typeof Roblox.Chat_v1 === "undefined") {
            Roblox.Chat_v1 = {};
        }
        Roblox.Chat_v1.Resources = {
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
        ChatBar.MyUserName = "1322658";
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
<script src="./EditFriends_files/urchin.js.download" type="text/javascript"></script>
<script type="text/javascript">
            _uacct = "UA-486632-1";
            _udn = "sitetest1.roblonium.com";
            _uccn = "rbx_campaign";
            _ucmd = "rbx_medium";
            _ucsr = "rbx_source";
            urchinTracker();
            __utmSetVar('Visitor/Member');
        </script>
<div id="PlaceLauncherStatusPanel" style="display: none;width:300px;">
<div class="modalPopup blueAndWhite PlaceLauncherModal" style="min-height: 160px">
<div id="Spinner" class="Spinner" style="margin:0 1em 1em 0; padding:20px 0;">
<img src="./EditFriends_files/e998fb4c03e8c2e30792f2f3436e9416.gif" alt="Progress">
</div>
<div id="status" style="min-height:40px;text-align:center;margin:5px 20px">
<div id="Starting" class="PlaceLauncherStatus MadStatusStarting" style="display:block">
Starting Roblonium...
</div>
<div id="Waiting" class="PlaceLauncherStatus MadStatusField">Connecting to Players...</div>
<div id="StatusBackBuffer" class="PlaceLauncherStatus PlaceLauncherStatusBackBuffer MadStatusBackBuffer"></div>
</div>
<div style="text-align:center;margin-top:1em" class="simplemodal-close">
<input type="button" class="Button CancelPlaceLauncherButton translate" value="Cancel">
</div>
</div>
</div>
<script type="text/javascript" src="./EditFriends_files/adaptvAdPlayer.js.download"></script>
<script type="text/javascript" src="./EditFriends_files/vpaid.js.download"></script>
<script type="text/javascript" src="./EditFriends_files/VideoPreRoll.js.download"></script>
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
<a href="https://sitetest1.roblonium.com/Upgrades/BuildersClubMemberships.aspx?ref=vpr" target="_blank" id="videoPrerollJoinBCButton"></a>
</div>
</div>
<script type="text/javascript">
        Roblox.VideoPreRoll.showVideoPreRoll = true;
        Roblox.VideoPreRoll.loadingBarMaxTime = 30000;
        Roblox.VideoPreRoll.videoOptions.key = "robloxcorporation";
        Roblox.VideoPreRoll.videoOptions.categories = "NonBC,IsLoggedIn,Age13to14,Male";
             Roblox.VideoPreRoll.videoOptions.id = "games";
        Roblox.VideoPreRoll.videoLoadingTimeout = 11000;
        Roblox.VideoPreRoll.videoPlayingTimeout = 23000;
        Roblox.VideoPreRoll.videoLogNote = "";
        Roblox.VideoPreRoll.logsEnabled = true;
        Roblox.VideoPreRoll.excludedPlaceIds = "32373412";
            
                Roblox.VideoPreRoll.specificAdOnPlacePageEnabled = true;
                Roblox.VideoPreRoll.specificAdOnPlacePageId = 140438051;
                Roblox.VideoPreRoll.specificAdOnPlacePageCategory = "stooges";
            
            
                Roblox.VideoPreRoll.specificAdOnPlacePage2Enabled = true;
                Roblox.VideoPreRoll.specificAdOnPlacePage2Id = 122911678;
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
<a href="https://sitetest1.roblonium.com/My/EditFriends.aspx#" onclick="redirectPlaceLauncherToRegister(); return false;"><div class="RevisedCharacterSelectSignup"></div></a>
<a class="HaveAccount" href="https://sitetest1.roblonium.com/My/EditFriends.aspx#" onclick="redirectPlaceLauncherToLogin();return false;">I have an account</a>
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
<div id="InstallationInstructions" class="modalPopup blueAndWhite" style="display:none;overflow:hidden">
<a id="CancelButton2" onclick="return Roblox.Client._onCancel();" class="ImageButton closeBtnCircle_35h ABCloseCircle"></a>
<div style="padding-bottom:10px;text-align:center">
<img class="InstallInstructionsImage" modalwidth="890" src="./EditFriends_files/0e5c6e93201539a0d2e72beed1590602.png" alt="Installation Instructions">
<br><br>
</div>
</div>

<script type="text/javascript" src="./EditFriends_files/CharacterSelect.js.download"></script>
<script type="text/javascript" src="./EditFriends_files/MadStatus.js.download"></script>
<script type="text/javascript" src="./EditFriends_files/PlaceLauncher.js.download"></script>
<script type="text/javascript" src="./EditFriends_files/ABPlaceLauncher.js.download"></script>

<div id="pluginObjDiv" style="height:1px;width:1px;visibility:hidden;position: absolute;top: 0;"></div>
<iframe id="downloadInstallerIFrame" style="visibility:hidden;height:0;width:1px;position:absolute" src="./EditFriends_files/saved_resource.html"></iframe>
<div id="InstallationInstructions" class="modalPopup blueAndWhite" style="display:none;overflow:hidden">
<a id="CancelButton2" onclick="return Roblox.Client._onCancel();" class="ImageButton closeBtnCircle_35h ABCloseCircle"></a>
<div style="padding-bottom:10px;text-align:center">
<img class="InstallInstructionsImage" modalwidth="890" delaysrc="http://images.rbxcdn.com/0e5c6e93201539a0d2e72beed1590602.png" alt="Installation Instructions">
<br><br>
</div>
</div>
<script type="text/javascript">
    Roblox.Client._skip = null;
    Roblox.Client._CLSID = '76D50904-6780-4C8B-8986-1A7EE0B1716D';
    Roblox.Client._installHost = 'sitetest1.roblonium.com';
    Roblox.Client.ImplementsProxy = true;
    Roblox.Client._silentModeEnabled = true;
    Roblox.Client._bringAppToFrontEnabled = false;

         Roblox.Client._installSuccess = function() { urchinTracker('InstallSuccess'); };
        
            if (window.chrome && window.location.hash == '#chromeInstall') {
                window.location.hash = '';
                var continuation = '(' + $.cookie('chromeInstall') + ')';
                $.cookie('chromeInstall', null);
                RobloxLaunch._GoogleAnalyticsCallback = function() { var isInsideRobloxIDE = 'website'; if (Roblox && Roblox.Client && Roblox.Client.isIDE && Roblox.Client.isIDE()) { isInsideRobloxIDE = 'Studio'; };GoogleAnalyticsEvents.FireEvent(['Play Location', 'User', isInsideRobloxIDE]);GoogleAnalyticsEvents.FireEvent(['Play', 'User', 'Over13', 1]);$(function(){ RobloxEventManager.triggerEvent('rbx_evt_play_user', {age:'Over13',gender:'Male'});}); }; 
                Roblox.Client.ResumeTimer(eval(continuation));
            }
        

    $(function () {
        Roblox.Client.Resources = {
            //<sl:translate>
            here: "here",
            youNeedTheLatest: "You need Our Plugin for this.  Get the latest version from ",
            plugInInstallationFailed: "Plugin installation failed!",
            errorUpdating: "Error updating: "
            //</sl:translate>
        };
    });

</script>
<div class="ConfirmationModal modalPopup unifiedModal smallModal" data-modal-handle="confirmation" style="display:none;">
<a class="genericmodal-close ImageButton closeBtnCircle_20h"></a>
<div class="Title"></div>
<div class="GenericModalBody">
<div class="TopBody">
<div class="ImageContainer roblox-item-image" data-image-size="small" data-no-overlays="" data-no-click="">
<img class="GenericModalImage" alt="generic image">
</div>
<div class="Message"></div>
</div>
<div class="ConfirmationModalButtonContainer">
<a href="https://sitetest1.roblonium.com/My/EditFriends.aspx" roblox-confirm-btn=""><span></span></a>
<a href="https://sitetest1.roblonium.com/My/EditFriends.aspx" roblox-decline-btn=""><span></span></a>
</div>
<div class="ConfirmationModalFooter">
</div>
</div>
<script type="text/javascript">
        var Roblox = Roblox || {};
        Roblox.GenericConfirmation = Roblox.GenericConfirmation || {};
        
        //<sl:translate>
        Roblox.GenericConfirmation.Resources = { yes: "Yes", No: "No" };
        //</sl:translate>
    </script>
    <?php include "2014footer.php" ?>
      </div>
   </body>
</html>