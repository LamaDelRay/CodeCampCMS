<?php
/*
Plugin Name: Poppy&acute;s videos
Plugin URI: http://www.todowp.org/poppy-videos/
Description: Easily insert videos from most populars websites [Youtube, Blip.tv, Vimeo, Megavideo, Metacafe, Revver, Veoh, Tu.tv Dailymotion, CollegeHumor, Prusland, ZappInternet, LiveLeak, Qik, Dalealplay, Google Video and Stagevu] and also FLV, DivX, MP3, PDF, SlideShare, screenr and Office documents files into your posts and pages.
Version: 1.1.13.1
Author: TodoWordPress
Author URI: http://www.todowp.org/
*/



// YouTube

function youtube($text) {
$tag_pattern = '/(\[youtube\](.*?)\[\/youtube\])/i';
if (preg_match_all ($tag_pattern, $text, $matches)) {
for($m=0; $m<count($matches[2]); $m++){
$htmlcode ='<center><iframe width="480" height="300" src="http://www.youtube.com/embed/'.$matches[2][$m].'?rel=0" frameborder="0" allowfullscreen></iframe></center><br />';
$text = str_replace($matches[0][$m], $htmlcode, $text);
}
}
return $text;
}
add_filter('the_content', 'youtube');


// YouTube (Play List)

function youtubepl($text) {
$tag_pattern = '/(\[youtubepl\](.*?)\[\/youtubepl\])/i';
if (preg_match_all ($tag_pattern, $text, $matches)) {
for($m=0; $m<count($matches[2]); $m++){
$htmlcode ='<center><object width="480" height="295"><param name="wmode" value="opaque" /><param name="movie" value="http://www.youtube.com/p/'.$matches[2][$m].'&hl=es&rel=0&showinfo=0&showsearch=0" /><embed wmode="opaque" src="http://www.youtube.com/p/'.$matches[2][$m].'&hl=es&rel=0&showinfo=0&showsearch=0" type="application/x-shockwave-flash" width="480" height="295"></embed></object></center><br />';
$text = str_replace($matches[0][$m], $htmlcode, $text);
}
}
return $text;
}
add_filter('the_content', 'youtubepl');


// Blip.tv

function bliptv($text) {
$tag_pattern = '/(\[bliptv\](.*?)\[\/bliptv\])/i';
if (preg_match_all ($tag_pattern, $text, $matches)) {
for($m=0; $m<count($matches[2]); $m++){
$htmlcode ='<center><embed src="http://blip.tv/play/'.$matches[2][$m].'" type="application/x-shockwave-flash" width="480" height="295" allowscriptaccess="always" allowfullscreen="true"></embed></center><br />';
$text = str_replace($matches[0][$m], $htmlcode, $text);
}
}
return $text;
}
add_filter('the_content', 'bliptv');


// Vimeo

function vimeo($text) {
$tag_pattern = '/(\[vimeo\](.*?)\[\/vimeo\])/i';
if (preg_match_all ($tag_pattern, $text, $matches)) {
for($m=0; $m<count($matches[2]); $m++){
$htmlcode ='<center><object width="480" height="295"><param name="wmode" value="opaque" /><param name="allowfullscreen" value="true" /><param name="allowscriptaccess" value="always" /><param name="movie" value="http://vimeo.com/moogaloop.swf?clip_id='.$matches[2][$m].'&amp;server=vimeo.com&amp;show_title=0&amp;show_byline=0&amp;show_portrait=0&amp;color=00ADEF&amp;fullscreen=1" /><embed wmode="opaque" src="http://vimeo.com/moogaloop.swf?clip_id='.$matches[2][$m].'&amp;server=vimeo.com&amp;show_title=0&amp;show_byline=0&amp;show_portrait=0&amp;color=00ADEF&amp;fullscreen=1" type="application/x-shockwave-flash" allowfullscreen="true" allowscriptaccess="always" width="480" height="295"></embed></object></embed></center><br />';
$text = str_replace($matches[0][$m], $htmlcode, $text);
}
}
return $text;
}
add_filter('the_content', 'vimeo');


// Megavideo

function megavideo($text) {
$tag_pattern = '/(\[megavideo\](.*?)\[\/megavideo\])/i';
if (preg_match_all ($tag_pattern, $text, $matches)) {
for($m=0; $m<count($matches[2]); $m++){
$htmlcode ='<center><object width="480" height="295"><param name="wmode" value="opaque" /><param name="movie" value="http://www.megavideo.com/v/'.$matches[2][$m].'"></param><param name="allowFullScreen" value="true"></param><embed wmode="opaque" src="http://www.megavideo.com/v/'.$matches[2][$m].'" type="application/x-shockwave-flash" allowfullscreen="true" width="480" height="295"></embed></object></embed></center><br />';
$text = str_replace($matches[0][$m], $htmlcode, $text);
}
}
return $text;
}
add_filter('the_content', 'megavideo');


// Metacafe

function metacafe($text) {
$tag_pattern = '/(\[metacafe\](.*?)\[\/metacafe\])/i';
if (preg_match_all ($tag_pattern, $text, $matches)) {
for($m=0; $m<count($matches[2]); $m++){
$htmlcode ='<center><embed flashVars="playerVars=showStats=no|autoPlay=no|" src="http://www.metacafe.com/fplayer/'.$matches[2][$m].'.swf" width="480" height="295" wmode="transparent" allowFullScreen="true" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash"></embed></center><br />';
$text = str_replace($matches[0][$m], $htmlcode, $text);
}
}
return $text;
}
add_filter('the_content', 'metacafe');


// Revver

function revver($text) {
$tag_pattern = '/(\[revver\](.*?)\[\/revver\])/i';
if (preg_match_all ($tag_pattern, $text, $matches)) {
for($m=0; $m<count($matches[2]); $m++){
$htmlcode ='<center><object width="480" height="392" data="http://flash.revver.com/player/1.0/player.swf?mediaId='.$matches[2][$m].'" type="application/x-shockwave-flash"><param name="wmode" value="opaque" /><param name="Movie" value="http://flash.revver.com/player/1.0/player.swf?mediaId='.$matches[2][$m].'"></param><param name="FlashVars" value="allowFullScreen=true"></param><param name="AllowFullScreen" value="true"></param><param name="AllowScriptAccess" value="always"></param><embed wmode="opaque" type="application/x-shockwave-flash" src="http://flash.revver.com/player/1.0/player.swf?mediaId='.$matches[2][$m].'" pluginspage="http://www.macromedia.com/go/getflashplayer" allowScriptAccess="always" flashvars="allowFullScreen=true" allowfullscreen="true" height="392" width="480"></embed></object></script></center><br />';
$text = str_replace($matches[0][$m], $htmlcode, $text);
}
}
return $text;
}
add_filter('the_content', 'revver');


// Veoh

function veoh($text) {
$tag_pattern = '/(\[veoh\](.*?)\[\/veoh\])/i';
if (preg_match_all ($tag_pattern, $text, $matches)) {
for($m=0; $m<count($matches[2]); $m++){
$htmlcode ='<center><object width="480" height="295" id="veohFlashPlayer" name="veohFlashPlayer"><param name="wmode" value="opaque" /><param name="movie" value="http://www.veoh.com/static/swf/webplayer/WebPlayer.swf?version=AFrontend.5.4.0.3.1003&permalinkId='.$matches[2][$m].'&player=videodetailsembedded&videoAutoPlay=0&id=anonymous"></param><param name="allowFullScreen" value="true"></param><param name="allowscriptaccess" value="always"></param><embed wmode="opaque" src="http://www.veoh.com/static/swf/webplayer/WebPlayer.swf?version=AFrontend.5.4.0.3.1003&permalinkId='.$matches[2][$m].'&player=videodetailsembedded&videoAutoPlay=0&id=anonymous" type="application/x-shockwave-flash" allowscriptaccess="always" allowfullscreen="true" width="480" height="295" id="veohFlashPlayerEmbed" name="veohFlashPlayerEmbed"></embed></object></center><br />';
$text = str_replace($matches[0][$m], $htmlcode, $text);
}
}
return $text;
}
add_filter('the_content', 'veoh');


// Tu.tv

function tutv($text) {
$tag_pattern = '/(\[tutv\](.*?)\[\/tutv\])/i';
if (preg_match_all ($tag_pattern, $text, $matches)) {
for($m=0; $m<count($matches[2]); $m++){
$htmlcode ='<center><object width="480" height="295"><param name="movie" value="http://tu.tv/tutvweb.swf?&xtp='.$matches[2][$m].'"></param><param name="wmode" value="transparent"></param><embed src="http://tu.tv/tutvweb.swf?&xtp='.$matches[2][$m].'" type="application/x-shockwave-flash" wmode="transparent" width="480" height="295"></embed></object></center><br />';
$text = str_replace($matches[0][$m], $htmlcode, $text);
}
}
return $text;
}
add_filter('the_content', 'tutv');


// Dailymotion

function dailymotion($text) {
$tag_pattern = '/(\[dailymotion\](.*?)\[\/dailymotion\])/i';
if (preg_match_all ($tag_pattern, $text, $matches)) {
for($m=0; $m<count($matches[2]); $m++){
$htmlcode ='<center><object width="480" height="295"><param name="wmode" value="opaque" /><param name="movie" value="http://www.dailymotion.com/swf/'.$matches[2][$m].'&related=0"></param><param name="allowFullScreen" value="true"></param><param name="allowScriptAccess" value="always"></param><embed wmode="opaque" src="http://www.dailymotion.com/swf/'.$matches[2][$m].'&related=0" type="application/x-shockwave-flash" width="480" height="295" allowFullScreen="true" allowScriptAccess="always"></embed></object></center><br />';
$text = str_replace($matches[0][$m], $htmlcode, $text);
}
}
return $text;
}
add_filter('the_content', 'dailymotion');


// CollegeHumor

function collegehumor($text) {
$tag_pattern = '/(\[collegehumor\](.*?)\[\/collegehumor\])/i';
if (preg_match_all ($tag_pattern, $text, $matches)) {
for($m=0; $m<count($matches[2]); $m++){
$htmlcode ='<center><object type="application/x-shockwave-flash" data="http://www.collegehumor.com/moogaloop/moogaloop.swf?clip_id='.$matches[2][$m].'&fullscreen=1" width="480" height="295" ><param name="allowfullscreen" value="true"/><param name="wmode" value="transparent"/><param name="allowScriptAccess" value="always"/><param name="movie" quality="best" value="http://www.collegehumor.com/moogaloop/moogaloop.swf?clip_id='.$matches[2][$m].'&fullscreen=1"/><embed src="http://www.collegehumor.com/moogaloop/moogaloop.swf?clip_id='.$matches[2][$m].'&fullscreen=1" type="application/x-shockwave-flash" wmode="transparent"  width="480" height="295"  allowScriptAccess="always"></embed></object></center><br />';
$text = str_replace($matches[0][$m], $htmlcode, $text);
}
}
return $text;
}
add_filter('the_content', 'collegehumor');


// Prusland

function prusland($text) {
$tag_pattern = '/(\[prusland\](.*?)\[\/prusland\])/i';
if (preg_match_all ($tag_pattern, $text, $matches)) {
for($m=0; $m<count($matches[2]); $m++){
$htmlcode ='<center><object width="480" height="295"><param name="movie" value="http://www.prusland.com/PruslandPlayer.swf" /><param name="allowFullScreen" value="True" /><param name="FlashVars" value="embedCode='.$matches[2][$m].'&version=2" /><embed src="http://www.prusland.com/PruslandPlayer.swf" width="480" height="295" allowFullScreen="true" FlashVars="embedCode='.$matches[2][$m].'&version=2"></embed></object></center><br />';
$text = str_replace($matches[0][$m], $htmlcode, $text);
}
}
return $text;
}
add_filter('the_content', 'prusland');


// ZappInternet

function zappinternet($text) {
$tag_pattern = '/(\[zappinternet\](.*?)\[\/zappinternet\])/i';
if (preg_match_all ($tag_pattern, $text, $matches)) {
for($m=0; $m<count($matches[2]); $m++){
$htmlcode ='<center><object type="application/x-shockwave-flash" data="http://zappinternet.com/v/'.$matches[2][$m].'" height="295" width="480"><param name="movie" value="http://zappinternet.com/v/'.$matches[2][$m].'" /><param name="allowFullScreen" value="true" /></object></center><br />';
$text = str_replace($matches[0][$m], $htmlcode, $text);
}
}
return $text;
}
add_filter('the_content', 'zappinternet');


// LiveLeak

function liveleak($text) {
$tag_pattern = '/(\[liveleak\](.*?)\[\/liveleak\])/i';
if (preg_match_all ($tag_pattern, $text, $matches)) {
for($m=0; $m<count($matches[2]); $m++){
$htmlcode ='<center><object width="480" height="295"><param name="movie" value="http://www.liveleak.com/e/'.$matches[2][$m].'"></param><param name="wmode" value="transparent"></param><embed src="http://www.liveleak.com/e/'.$matches[2][$m].'" type="application/x-shockwave-flash" wmode="transparent" width="480" height="295"></embed></object></center><br />';
$text = str_replace($matches[0][$m], $htmlcode, $text);
}
}
return $text;
}
add_filter('the_content', 'liveleak');


// Qik

function qik($text) {
$tag_pattern = '/(\[qik\](.*?)\[\/qik\])/i';
if (preg_match_all ($tag_pattern, $text, $matches)) {
for($m=0; $m<count($matches[2]); $m++){
$htmlcode ='<center><object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,115,0" width="480" height="295" id="qikPlayer" align="middle"><param name="allowScriptAccess" value="sameDomain" /><param name="allowFullScreen" value="true" /><param name="movie" value="http://qik.com/swfs/qikPlayer4.swf" /><param name="quality" value="high" /><param name="bgcolor" value="#333333" /><param name="FlashVars" value="rssURL=http://qik.com/video/'.$matches[2][$m].'.rss&autoPlay=false" /><embed src="http://qik.com/swfs/qikPlayer4.swf" quality="high" bgcolor="#333333" width="480" height="295" name="qikPlayer" align="middle" allowScriptAccess="sameDomain" allowFullScreen="true" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" FlashVars="rssURL=http://qik.com/video/'.$matches[2][$m].'.rss&autoPlay=false"></embed></object></center><br />';
$text = str_replace($matches[0][$m], $htmlcode, $text);
}
}
return $text;
}
add_filter('the_content', 'qik');


// Dalealplay

function dalealplay($text) {
$tag_pattern = '/(\[dalealplay\](.*?)\[\/dalealplay\])/i';
if (preg_match_all ($tag_pattern, $text, $matches)) {
for($m=0; $m<count($matches[2]); $m++){
$htmlcode ='<center><object width="480" height="295"><param name="movie" value="http://www.dalealplay.com/smarty/dap/mediaplayer/embed.swf"></param><param name="flashvars" value="config=get_video_info.xml?id='.$matches[2][$m].'||as=false"></param><param name="allowfullscreen" value="true"></param><param name="allowscriptaccess" value="always"></param><embed src="http://www.dalealplay.com/smarty/dap/mediaplayer/embed.swf" type="application/x-shockwave-flash" flashvars="config=get_video_info.xml?id='.$matches[2][$m].'||as=false" allowfullscreen="true" allowscriptaccess="always" width="480" height="295"></embed></object></center><br />';
$text = str_replace($matches[0][$m], $htmlcode, $text);
}
}
return $text;
}
add_filter('the_content', 'dalealplay');


// Google Video

function googlevideo($text) {
$tag_pattern = '/(\[googlevideo\](.*?)\[\/googlevideo\])/i';
if (preg_match_all ($tag_pattern, $text, $matches)) {
for($m=0; $m<count($matches[2]); $m++){
$htmlcode ='<center><embed id=VideoPlayback src=http://video.google.es/googleplayer.swf?docid=-'.$matches[2][$m].'&hl=es&fs=true style=width:480px;height:295px allowFullScreen=true allowScriptAccess=always type=application/x-shockwave-flash></embed></center><br />';
$text = str_replace($matches[0][$m], $htmlcode, $text);
}
}
return $text;
}
add_filter('the_content', 'googlevideo');


// Stagevu

function stagevu($text) {
$tag_pattern = '/(\[stagevu\](.*?)\[\/stagevu\])/i';
if (preg_match_all ($tag_pattern, $text, $matches)) {
for($m=0; $m<count($matches[2]); $m++){
$htmlcode ='<center><iframe style="overflow: hidden; border: 0; width: 480px; height: 326px" src="http://stagevu.com/embed?width=480&amp;height=270&amp;background=000&amp;uid=".$matches[2][$m]."" scrolling="no"></iframe></center><br />';
$text = str_replace($matches[0][$m], $htmlcode, $text);
}
}
return $text;
}
add_filter('the_content', 'stagevu');






// MP3

function mp3($text) {
$tag_pattern = '/(\[mp3\](.*?)\[\/mp3\])/i';
if (preg_match_all ($tag_pattern, $text, $matches)) {
for($m=0; $m<count($matches[2]); $m++){
$htmlcode ='<center><object type="application/x-shockwave-flash" width="300" height="30" data="http://s3.tdwp.ws/poppy-videos/mp3-2.swf?soundfile='.$matches[2][$m].'"><param name="movie" value="http://s3.tdwp.ws/poppy-videos/mp3-2.swf?soundfile='.$matches[2][$m].'" /></object></center><br />';
$text = str_replace($matches[0][$m], $htmlcode, $text);
}
}
return $text;
}
add_filter('the_content', 'mp3');


// FLV

function flv($text) {
$tag_pattern = '/(\[flv\](.*?)\[\/flv\])/i';
if (preg_match_all ($tag_pattern, $text, $matches)) {
for($m=0; $m<count($matches[2]); $m++){
$htmlcode ='<center><embed src="http://s3.tdwp.ws/poppy-videos/flv.swf" width="480" height="295" bgcolor="undefined" allowscriptaccess="always" allowfullscreen="true" flashvars="file='.$matches[2][$m].'" /></center><br />';
$text = str_replace($matches[0][$m], $htmlcode, $text);
}
}
return $text;
}
add_filter('the_content', 'flv');


// DivX

function divx($text) {
$tag_pattern = '/(\[divx\](.*?)\[\/divx\])/i';
if (preg_match_all ($tag_pattern, $text, $matches)) {
for($m=0; $m<count($matches[2]); $m++){
$htmlcode ='<center><object classid="clsid:67DABFBF-D0AB-41fa-9C46-CC0F21721616" width="480" height="315" codebase="http://go.divx.com/plugin/DivXBrowserPlugin.cab">
 <param name="custommode" value="none" />
 <param name="autoPlay" value="false" />
 <param name="src" value="'.$matches[2][$m].'" />
 <embed type="video/divx" src="'.$matches[2][$m].'" custommode="none" width="480" height="315" autoPlay="false"  pluginspage="http://go.divx.com/plugin/download/">
</embed>
</object></center><br />';
$text = str_replace($matches[0][$m], $htmlcode, $text);
}
}
return $text;
}
add_filter('the_content', 'divx');


// PDF

function pdf($text) {
$tag_pattern = '/(\[pdf\](.*?)\[\/pdf\])/i';
if (preg_match_all ($tag_pattern, $text, $matches)) {
for($m=0; $m<count($matches[2]); $m++){
$htmlcode ='<center><iframe src="http://docs.google.com/viewer?url='.$matches[2][$m].'&embedded=true" width="600" height="780" style="border: none;"></iframe></center><br />';
$text = str_replace($matches[0][$m], $htmlcode, $text);
}
}
return $text;
}
add_filter('the_content', 'pdf');


// Office documents

function doc($text) {
$tag_pattern = '/(\[doc\](.*?)\[\/doc\])/i';
if (preg_match_all ($tag_pattern, $text, $matches)) {
for($m=0; $m<count($matches[2]); $m++){
$htmlcode ='<center><iframe src="http://docs.google.com/viewer?url='.$matches[2][$m].'&embedded=true" width="600" height="780" style="border: none;"></iframe></center><br />';
$text = str_replace($matches[0][$m], $htmlcode, $text);
}
}
return $text;
}
add_filter('the_content', 'doc');


// SlideShare

function slideshare($text) {
$tag_pattern = '/(\[slideshare\](.*?)\[\/slideshare\])/i';
if (preg_match_all ($tag_pattern, $text, $matches)) {
for($m=0; $m<count($matches[2]); $m++){
$htmlcode ='<center><div style="width:425px" id="__ss_'.$matches[2][$m].'"><iframe src="http://www.slideshare.net/slideshow/embed_code/'.$matches[2][$m].'" width="425" height="355" frameborder="0" marginwidth="0" marginheight="0" scrolling="no"></iframe></div></center><br />';
$text = str_replace($matches[0][$m], $htmlcode, $text);
}
}
return $text;
}
add_filter('the_content', 'slideshare');


// screenr

function screenr($text) {
$tag_pattern = '/(\[screenr\](.*?)\[\/screenr\])/i';
if (preg_match_all ($tag_pattern, $text, $matches)) {
for($m=0; $m<count($matches[2]); $m++){
$htmlcode ='<center><iframe src="http://www.screenr.com/embed/'.$matches[2][$m].'" width="650" height="396" frameborder="0"></iframe></center><br />';
$text = str_replace($matches[0][$m], $htmlcode, $text);
}
}
return $text;
}
add_filter('the_content', 'screenr');



?>