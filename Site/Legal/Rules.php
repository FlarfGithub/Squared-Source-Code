<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" xmlns:fb="http://www.facebook.com/2008/fbml">
   <head>
      <?php include_once "../2014head.php"; ?>
      <script src="../sdf.js" type="text/javascript"></script>
   </head>
   <body class="">
      <div id="MasterContainer">
         <?php include_once "../updateinfo.php"; ?>
         <?php if(!isset($_SESSION['id'])){ header('Location: /login.aspx'); die(); } ?>
         <?php include_once "../2014navbar.php"; ?>
         <?php include_once "../updatestuff.php"; ?>
         <div id="BodyWrapper">
            <div id="RepositionBody">
               <div id="Body" style="width:970px">
			   <div class="col-md-8 offset-md-2"><div class="card"><div class="card-header bg-primary text-light">
						Squared General Guidelines
					</div> <div class="card-body"><ol><li>You must be at least 13 years of age before registering.</li>  <li>Don’t be immature. For example, erotic roleplay and general sexual behaviour are not allowed. Comments about the human reproductive system are not allowed either.</li> <li>Don’t cause drama.</li> <li>Don’t exploit servers. Don’t post IP trackers on the forum either.</li> <li>Don’t bully or attack other people. Everybody messes up from time to time. In that regard, be respectful and understanding of other users.</li> <li>Don’t grief servers. You will be banned for griefing if an admin deems it necessary. User reports will not be taken for this infraction.</li> <li>Don't make off-site deals or you'll be permanently banned. What happens on Squared <i>stays</i> on Squared.</li> <li>Don't farm Social Credit or attempt to manipulate the economy. You are not allowed to create alternate accounts for the purpose of gaining more Social Credit on your main account.</li> <li>Don’t make death threats. You will be permanently banned if you make any death threats.</li> <li>Don’t evade bans by the usage of alternate accounts. If you are found evading a ban, all of your accounts will be permanently banned.</li>  <li>Don’t sell invite keys and don’t use sold invite keys. Any accounts that use purchased invite keys will be banned.</li> <li>Don’t scam or manipulate users for personal gain. Your trading rights may be revoked for such actions, and you may even be permanently banned for larger offenses. For example, don’t try to convince users that an item is worth more than its actual worth.</li> </ol> <p class="mb-0">You should use your common sense. These are the most common infractions that we take action against. If something is not listed here, it doesn't mean it's not against the rules.</p></div></div></div>
            </div>
         </div>
      </div>
      </div>
   </body>
</html>