<?php
$view_setting=mysql_query("SELECT * FROM setting WHERE set_id='1' ")Or Die(mysql_error()); 
///////
while($action_setting = mysql_fetch_array($view_setting)){ 
extract($action_setting);
$db_site_name = $action_setting ['site_name'];
$db_site_add = $action_setting ['site_add'];
$db_email = $action_setting ['email'];
$db_default_lang = $action_setting ['default_lang'];
//------
$db_upload_dir = $action_setting ['upload_dir'];
$db_auto_thumb = $action_setting ['auto_thumb'];
//-----
$db_thumb_width = $action_setting ['thumb_width'];
$db_thumb_height = $action_setting ['thumb_height'];
//-----
$db_image_width = $action_setting ['image_width'];
$db_image_height = $action_setting ['image_height'];
//-----

//-----
$db_news_thumb_width = $action_setting ['news_thumb_width'];
$db_news_thumb_height = $action_setting ['news_thumb_height'];
//-----
$db_news_image_width = $action_setting ['news_image_width'];
$db_news_image_height = $action_setting ['news_image_height'];
//-----


$db_auto_stamp = $action_setting ['auto_stamp'];
$db_stamp_dir = $action_setting ['stamp_dir'];
$db_meta_keywords = $action_setting ['meta_keywords'];
$db_meta_description = $action_setting ['meta_description'];
//-----
$db_code_Type = $action_setting ['code_Type'];
//-----
$db_cost_type = $action_setting ['cost_type'];
} // end while
///////////////////// find the domin /////////////
$new_domin = explode("@", $db_email); //divide
if (isset($new_domin['1'])) {
$inside_domin = $new_domin['1'];
} else {
$inside_domin = "domain.com";
}
?>