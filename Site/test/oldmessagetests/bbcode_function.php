<?php
//This function let convert BBcode to HTML
function bbcode_to_html($text)
{
	$text = nl2br(htmlentities($text, ENT_QUOTES, 'UTF-8'));
	$in = array(
			'#\[b\](.*)\[/b\]#Usi',
			'#\[i\](.*)\[/i\]#Usi',
			'#\[u\](.*)\[/u\]#Usi',
			'#\[s\](.*)\[/s\]#Usi',
			'#\[img\](.*)\[/img\]#Usi',
			'#\[url\]((ht|f)tps?\:\/\/(.*))\[/url\]#Usi',
			'#\[url=((ht|f)tps?\:\/\/(.*))\](.*)\[/url\]#Usi',
			'#\[left\](.*)\[/left\]#Usi',
			'#\[center\](.*)\[/center\]#Usi',
			'#\[right\](.*)\[/right\]#Usi'
		);
	$out = array(
			'<strong>$1</strong>',
			'<em>$1</em>',
			'<span style="text-decoration:underline;">$1</span>',
			'<span style="text-decoration:line-through;">$1</span>',
			'<img src="$1" alt="Image" />',
			'<a href="$1">$1</a>',
			'<a href="$1">$4</a>',
			'<div style="text-align:left;">$1</div>',
			'<div style="text-align:center;">$1</div>',
			'<div style="text-align:right;">$1</div>'
		);
    $count = count($in)-1;
    for($i=0;$i<=$count;$i++)
    {
        $text = preg_replace($in[$i],$out[$i],$text);
    }
	return $text;
}
//This function let convert HTML to BBcode
function html_to_bbcode($text)
{
	$text = str_replace('<br />','',$text);
	$in = array(
		'#<strong>(.*)</strong>#Usi',
		'#<em>(.*)</em>#Usi',
		'#<span style="text-decoration:underline;">(.*)</span>#Usi',
		'#<span style="text-decoration:line-through;">(.*)</span>#Usi',
		'#<img src="(.*)" alt="Image" />#Usi',
		'#<a href="(.*)">(.*)</a>#Usi',
		'#<div style="text-align:left;">(.*)</div>#Usi',
		'#<div style="text-align:center;">(.*)</div>#Usi',
		'#<div style="text-align:right;">(.*)</div>#Usi'
	);
	$out = array(
		'[b]$1[/b]',
		'[i]$1[/i]',
		'[u]$1[/u]',
		'[s]$1[/s]',
		'[img]$1[/img]',
		'[url=$1]$2[/url]',
		'[left]$1[/left]',
		'[center]$1[/center]',
		'[right]$1[/right]'
	);
    $count = count($in)-1;
    for($i=0;$i<=$count;$i++)
    {
        $text = preg_replace($in[$i],$out[$i],$text);
    }
	return $text;
}
?>