<?php
///////////////// Filter /////////////////
$text = stripslashes($text) ;
//
$text=str_replace("www.","http://www.",$text);
$text=str_replace("http://http://www.","http://www.",$text);
//////////////
///// see if correct url and edit it if wrong
$text = eregi_replace("(((f|ht){1}tp://)[-a-zA-Z0-9@:%_\+.~#?&//=]+)","<a href='\\1' target='_blank'><font color='$db_side_color' face='$db_font_type' size='$db_font_size'>\\1</font></a>", $text);
// go for url
$text = eregi_replace("([[:space:]()[{}])(www.[-a-zA-Z0-9@:%_\+.~#?&//=]+)","\\1<a href='http://\\2' target='_blank'><font color='$db_side_color' face='$db_font_type' size='$db_font_size'>\\2</font></a>", $text);
///// Email
$text = eregi_replace("([_\.0-9a-z-]+@([0-9a-z][0-9a-z-]+\.)+[a-z]{2,3})","<a href='mailto:\\1'><font color='$db_side_color' face='$db_font_type' size='$db_font_size'>\\1</font></a>", $text);
////////////////////////////////////////
?>