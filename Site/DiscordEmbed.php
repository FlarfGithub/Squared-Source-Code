<?php
class DiscordEmbed {
	public function NormalEmbed($string, $string2) {
	    echo '<title>' . $string . ' - Squared</title>
    <meta property="og:site_name" content="Squared">
    <meta property="og:title" content="' . $string . ' - Squared">
    <meta property="og:type" content="profile">
    <meta property="og:url" content="' . $string2 . '">
    <meta property="og:description" content="Squared, it is website. He is for old brick-builder. Good for use.">
    <meta property="og:image" content="https://cdn.upload.systems/uploads/pDPrTMVK.png">';
	}
}
?>