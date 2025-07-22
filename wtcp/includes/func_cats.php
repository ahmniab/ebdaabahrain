<?php
///////////////////////////////show dropdown ///////////////////////////////

function show_dropdown_images_cat($catid, $level_space,$URL,$SELECTED_CAT_ID)  
{  

   $q = mysql_query("SELECT * FROM images_cat WHERE parent_id=$catid ORDER BY catname");  

    while ($q3 = mysql_fetch_array($q)) {  
        $space = "--&nbsp;";  

        $ttl = "";  
        for ($i = 0; $i < $level_space; $i++) {  
            $ttl .= $space;  
        }  
if ($SELECTED_CAT_ID==$q3['catid']) {$SELECTED_CAT= "selected";} else { $SELECTED_CAT= "";}
        echo "<option value='?{$URL}catid={$q3['catid']}' $SELECTED_CAT>$ttl{$q3['catname']}</option>";  

        $ttl .= $space . $space;  

        show_dropdown_images_cat ($q3['catid'], $level_space+1,$URL,$SELECTED_CAT_ID);  
      
    }  

    if (mysql_num_rows($q) <= 0) {  
        return(0);  
    }    
}  
//////////////////////////////
///////////////////////////////show dropdown ///////////////////////////////

function show_dropdown_iamges_cat($catid, $level_space,$SELECTED_CAT_ID)  
{  

   $q = mysql_query("SELECT * FROM images_cat WHERE parent_id=$catid ORDER BY catname");  

    while ($q3 = mysql_fetch_array($q)) {  
        $space = "--&nbsp;";  

        $ttl = "";  
        for ($i = 0; $i < $level_space; $i++) {  
            $ttl .= $space;  
        }  
if ($SELECTED_CAT_ID==$q3['catid']) {$SELECTED_CAT= "selected";} else { $SELECTED_CAT= "";}
        echo "<option value='?catid={$q3['catid']}' $SELECTED_CAT>$ttl{$q3['catname']}</option>";  

        $ttl .= $space . $space;  

        show_dropdown_iamges_cat ($q3['catid'], $level_space+1,$SELECTED_CAT_ID);  
      
    }  

    if (mysql_num_rows($q) <= 0) {  
        return(0);  
    }    
}  

////+_+_+_+_+

function show_dropdown_newCat2($catid,$userid, $level_space)  
{  

   $q = mysql_query("SELECT * FROM maillist_group ORDER BY name ASC");  

    while ($rowme3 = mysql_fetch_array($q)) {  
        $space = "--&nbsp;";  

        $ttl = "";  
        for ($i = 0; $i < $level_space; $i++) {  
            $ttl .= $space;  
        }  
$SELECTED_CAT = "";
$q_p = mysql_query("SELECT * FROM maillist_sub WHERE userid='{$userid}' AND catid='{$rowme3['id']}'"); 
if (mysql_num_rows($q_p)!=0) {
$SELECTED_CAT = "checked='checked'";
} 
$rowme3['name'] = iconv('windows-1256', 'utf-8', $rowme3['name']);
        echo "<label><input type='checkbox' name='catid[]' value='{$rowme3['id']}' $SELECTED_CAT>$ttl{$rowme3['name']}</label>";  

        $ttl .= $space . $space;  

        //show_dropdown_newCat2 ($rowme3['catid'],$userid, $level_space+1);  
      
    }  

    if (mysql_num_rows($q) <= 0) {  
        return(0);  
    }    
}


//////////////////// show tree 1////////////////////////////

function showgroup($gnum, $lev)  

{  

    $q = mysql_query("SELECT * FROM images_cat WHERE parent_id=$gnum ORDER BY catorder ASC");  



    while ($q2 = mysql_fetch_array($q)) {  

        $space = "--&nbsp;";  



        $ttl = "";  

        for ($i = 0; $i < $lev; $i++) {  

            $ttl .= $space;  

        }  



        echo $ttl."<b>{$q2['catname']}</b>";  

        echo "<br />\n";  

        $ttl .= $space . $space;  



        $links = mysql_query("  

            SELECT url, catname  

            FROM images_cat   

            WHERE parent_id={$q2['catid']}  

            ");  



        while ($links2 = mysql_fetch_array($links)) {  

            echo "$ttl<a href='{$links2['url']}'>{$links2['catname']}</a>";  

            echo "<br />";  

        }  

        showgroup($q2['catid'], $lev+1);  

    }  



    if (mysql_num_rows($q) <= 0) {  

        return(0);  

    }    

}  



///////////////////////////// show tree 2/////////////////////////////////

function show_cat($catid, $level_space)  

{  

    $q = mysql_query("SELECT * FROM images_cat WHERE parent_id=$catid ORDER BY catorder ASC");  



    while ($q3 = mysql_fetch_array($q)) {  

        $space = "--&nbsp;";  



        $ttl = "";  

        for ($i = 0; $i < $level_space; $i++) {  

            $ttl .= $space;  

        }  



        echo $ttl."<a href='page.php?action=view&catid={$q3['catid']}'><b><font color='#993300'>{$q3['catname']}</font></b></a>";  

        echo "<br />\n";  

        $ttl .= $space . $space;  



        show_cat($q3['catid'], $level_space+1);  

    }  



    if (mysql_num_rows($q) <= 0) {  

        return(0);  

    }    

}  

///////////////////////////////show dropdown ///////////////////////////////



function show_dropdown($catid, $level_space)  

{  



   $q = mysql_query("SELECT * FROM images_cat WHERE parent_id=$catid ORDER BY  catorder ASC");  



    while ($q3 = mysql_fetch_array($q)) {  

        $space = "--&nbsp;";  



        $ttl = "";  

        for ($i = 0; $i < $level_space; $i++) {  

            $ttl .= $space;  

        }  



        echo "<option value='{$q3['catid']}'>$ttl{$q3['catname']}</option>";  



        $ttl .= $space . $space;  



        show_dropdown ($q3['catid'], $level_space+1);  

      

    }  



    if (mysql_num_rows($q) <= 0) {  

        return(0);  

    }    

}  



///////////////////////////////show dropdown ///////////////////////////////



function show_dropdown_media($catid, $level_space,$sel)  

{  



   $q = mysql_query("SELECT * FROM media_cat WHERE parent_id=$catid ORDER BY catorder ASC");  



    while ($q3 = mysql_fetch_array($q)) {  

        $space = "--&nbsp;";  



        $ttl = "";  

        for ($i = 0; $i < $level_space; $i++) {  

            $ttl .= $space;  

        }  



/////------------------------------------------------

if (numbers_only($sel) && $sel==$q3['catid']) { 

$select_info = "selected";

} else {

$select_info = "";

} 

/////------------------------------------------------

        echo "<option value='{$q3['catid']}'  $select_info>$ttl{$q3['catname']}</option>";  



        $ttl .= $space . $space;  



        show_dropdown_media ($q3['catid'], $level_space+1);  

      

    }  



    if (mysql_num_rows($q) <= 0) {  

        return(0);  

    }    

}  



///////////////////////////////show dropdown ///////////////////////////////



function show_dropdown_news($catid, $level_space)  

{  



   $q = mysql_query("SELECT * FROM news_cat WHERE parent_id=$catid ORDER BY catorder ASC");  



    while ($q3 = mysql_fetch_array($q)) {  

        $space = "--&nbsp;";  



        $ttl = "";  

        for ($i = 0; $i < $level_space; $i++) {  

            $ttl .= $space;  

        }  



        echo "<option value='{$q3['catid']}'>$ttl{$q3['catname']}</option>";  



        $ttl .= $space . $space;  



        show_dropdown_news ($q3['catid'], $level_space+1);  

      

    }  



    if (mysql_num_rows($q) <= 0) {  

        return(0);  

    }    

}  

 

 

 ///////////////////////////////show dropdown ///////////////////////////////



function show_dropdown_games($catid, $level_space,$sel)  

{  



   $q = mysql_query("SELECT * FROM games_cat WHERE parent_id=$catid ORDER BY catorder ASC");  



    while ($q3 = mysql_fetch_array($q)) {  

        $space = "--&nbsp;";  



        $ttl = "";  

        for ($i = 0; $i < $level_space; $i++) {  

            $ttl .= $space;  

        }  



/////------------------------------------------------

if (numbers_only($sel) && $sel==$q3['catid']) { 

$select_info = "selected";

} else {

$select_info = "";

} 

/////------------------------------------------------

        echo "<option value='{$q3['catid']}'  $select_info>$ttl{$q3['catname']}</option>";  



        $ttl .= $space . $space;  



        show_dropdown_games ($q3['catid'], $level_space+1);  

      

    }  



    if (mysql_num_rows($q) <= 0) {  

        return(0);  

    }    

}  

 

///////////////////////////////show dropdown 4 edit///////////////////////////////



function show_dropdown_edit($catid, $level_space)  

{  



   $q = mysql_query("SELECT * FROM images_cat WHERE parent_id=$catid ORDER BY catorder ASC");  



    while ($rowme3 = mysql_fetch_array($q)) {  

        $space = "--&nbsp;";  



        $ttl = "";  

        for ($i = 0; $i < $level_space; $i++) {  

            $ttl .= $space;  

        }  



        echo "<option value='{$rowme3['catid']}'>$ttl{$rowme3['catname']}</option>";  



        $ttl .= $space . $space;  



        show_dropdown_edit ($rowme3['catid'], $level_space+1);  

      

    }  



    if (mysql_num_rows($q) <= 0) {  

        return(0);  

    }    

}



///////////////////////////////show dropdown 4 edit///////////////////////////////



function show_dropdown_edit_media($catid, $level_space)  

{  



   $q = mysql_query("SELECT * FROM images_cat WHERE parent_id=$catid ORDER BY catorder ASC");  



    while ($rowme3 = mysql_fetch_array($q)) {  

        $space = "--&nbsp;";  



        $ttl = "";  

        for ($i = 0; $i < $level_space; $i++) {  

            $ttl .= $space;  

        }  



        echo "<option value='{$rowme3['catid']}'>$ttl{$rowme3['catname']}</option>";  



        $ttl .= $space . $space;  



        show_dropdown_edit_media ($rowme3['catid'], $level_space+1);  

      

    }  



    if (mysql_num_rows($q) <= 0) {  

        return(0);  

    }    

}







///////////////////////////////show dropdown 4 edit///////////////////////////////



function show_dropdown_edit_news($catid, $level_space)  

{  



   $q = mysql_query("SELECT * FROM news_cat WHERE parent_id=$catid ORDER BY catorder ASC");  



    while ($rowme3 = mysql_fetch_array($q)) {  

        $space = "--&nbsp;";  



        $ttl = "";  

        for ($i = 0; $i < $level_space; $i++) {  

            $ttl .= $space;  

        }  



        echo "<option value='{$rowme3['catid']}'>$ttl{$rowme3['catname']}</option>";  



        $ttl .= $space . $space;  



        show_dropdown_edit_news ($rowme3['catid'], $level_space+1);  

      

    }  



    if (mysql_num_rows($q) <= 0) {  

        return(0);  

    }    

}

///////////////////////////////show dropdown_menu ///////////////////////////////



function show_dropdown_menu($catid, $level_space)  

{  



   $q = mysql_query("SELECT * FROM images_cat WHERE parent_id=$catid AND active='1' ORDER BY catorder ASC");  



    while ($q5 = mysql_fetch_array($q)) {  

        $space = "--&nbsp;";  



        $ttl = "";  

        for ($i = 0; $i < $level_space; $i++) {  

            $ttl .= $space;  

        }  

		///

		if ($q5['parent_id']=='0') {

		echo "<option value='{$q5['catid']}' class='drop'>$ttl{$q5['catname']}</option>";  

		} else {

		        echo "<option value='{$q5['catid']}'>$ttl{$q5['catname']}</option>";  

         }

		 ///

        $ttl .= $space . $space;  



        show_dropdown_menu ($q5['catid'], $level_space+1);  

      

    }  



    if (mysql_num_rows($q) <= 0) {  

        return(0);  

    }    

}  

///////////////////////////////show ADMIN dropdown_menu ///////////////////////////////



function show_admin_menu($catid, $level_space)  

{  



   $admin_tables = mysql_query("SELECT * FROM images_cat WHERE parent_id=$catid ORDER BY catorder ASC");  



    while ($row_table = mysql_fetch_array($admin_tables)) { 

///////// calculate the images inside the images_cat

$images_num = mysql_query("select * from images WHERE catid='{$row_table['catid']}' ") Or Die(MySQL_Error());

$num=mysql_num_rows($images_num);

//////////	 

        $space = "&nbsp;&nbsp;&nbsp;&nbsp;";  



        $ttl = "";  

        for ($i = 0; $i < $level_space; $i++) {  

            $ttl .= $space;  

        }  

		///

		if ($row_table['parent_id']=='0') {

		echo "

		<tr class='tablerow' >

<td>

<img src='images/folder.gif' alt=''><b><a href='../{$_SERVER['PHP_SELF']}?catid={$row_table['catid']}' target='_blank'>&nbsp; {$row_table['catname']}</a> </b> (ID: {$row_table['catid']})&nbsp;&nbsp;&nbsp;&nbsp;<a href='{$_SERVER['PHP_SELF']}?action=edit&catid={$row_table['catid']}'>[Edit]</a>&nbsp;&nbsp;<a href='{$_SERVER['PHP_SELF']}?action=delcon&catid={$row_table['catid']}'>[Delete]</a>&nbsp;&nbsp;</td>

</tr>

		";  

		} else {

		        echo "

				<tr class='tablerow2'  >

<td>

$ttl<img src='images/folder_path.gif' alt=''>

<img src='images/folder.gif' alt=''><b><a href='../{$_SERVER['PHP_SELF']}?catid={$row_table['catid']}' target='_blank'>{$row_table['catname']}</a>

</b> (ID: {$row_table['catid']})&nbsp;&nbsp;&nbsp;&nbsp;<a href='{$_SERVER['PHP_SELF']}?action=edit&catid={$row_table['catid']}'>[Edit]</a>&nbsp;&nbsp;<a href='{$_SERVER['PHP_SELF']}?action=delcon&catid={$row_table['catid']}'>[Delete]</a>&nbsp;&nbsp;

</td>

</tr>

				";  

         }

		 ///

        $ttl .= $space . $space;  



        show_admin_menu ($row_table['catid'], $level_space+1);  

      

    }  



    if (mysql_num_rows($admin_tables) <= 0) {  

        return(0);  

    }    

}  





///////////////////////////////show ADMIN dropdown_menu ///////////////////////////////



function show_admin_menu_news($catid, $level_space)  

{  



   $admin_tables = mysql_query("SELECT * FROM news_cat WHERE parent_id=$catid ORDER BY catorder ASC");  



    while ($row_table = mysql_fetch_array($admin_tables)) { 

///////// calculate the images inside the news

$images_num = mysql_query("select * from news WHERE catid='{$row_table['catid']}' ") Or Die(MySQL_Error());

$num=mysql_num_rows($images_num);

//////////	 

        $space = "&nbsp;&nbsp;&nbsp;&nbsp;";  



        $ttl = "";  

        for ($i = 0; $i < $level_space; $i++) {  

            $ttl .= $space;  

        }  

		///

		if ($row_table['parent_id']=='0') {

		echo "

		<tr class='tablerow' >

<td>

<img src='images/folder.gif' alt=''><b><a href='../{$_SERVER['PHP_SELF']}?catid={$row_table['catid']}' target='_blank'>&nbsp; {$row_table['catname']}</a> </b> (ID: {$row_table['catid']})&nbsp;&nbsp;&nbsp;&nbsp;<a href='{$_SERVER['PHP_SELF']}?action=edit&catid={$row_table['catid']}'>[Edit]</a>&nbsp;&nbsp;<a href='{$_SERVER['PHP_SELF']}?action=delcon&catid={$row_table['catid']}'>[Delete]</a>&nbsp;&nbsp;<a href='{$_SERVER['PHP_SELF']}?action=show&catid={$row_table['catid']}'>[content ($num)]</a></td>

</tr>

		";  

		} else {

		        echo "

				<tr class='tablerow2'  >

<td>

$ttl<img src='images/folder_path.gif' alt=''>

<img src='images/folder.gif' alt=''><b><a href='../{$_SERVER['PHP_SELF']}?catid={$row_table['catid']}' target='_blank'>{$row_table['catname']}</a>

</b> (ID: {$row_table['catid']})&nbsp;&nbsp;&nbsp;&nbsp;<a href='{$_SERVER['PHP_SELF']}?action=edit&catid={$row_table['catid']}'>[Edit]</a>&nbsp;&nbsp;<a href='{$_SERVER['PHP_SELF']}?action=delcon&catid={$row_table['catid']}'>[Delete]</a>&nbsp;&nbsp;<a href='{$_SERVER['PHP_SELF']}?action=show&catid={$row_table['catid']}'>[content ($num)]</a>&nbsp;&nbsp;

</td>

</tr>

				";  

         }

		 ///

        $ttl .= $space . $space;  



        show_admin_menu_news ($row_table['catid'], $level_space+1);  

      

    }  



    if (mysql_num_rows($admin_tables) <= 0) {  

        return(0);  

    }    

}  



///////////////////////////////show ADMIN dropdown_menu ///////////////////////////////



function show_admin_menu_media($catid, $level_space)  

{  



   $admin_tables = mysql_query("SELECT * FROM media_cat WHERE parent_id=$catid ORDER BY catorder ASC");  



    while ($row_table = mysql_fetch_array($admin_tables)) { 

///////// calculate the images inside the media

$images_num = mysql_query("select * from media WHERE catid='{$row_table['catid']}' ") Or Die(MySQL_Error());

$num=mysql_num_rows($images_num);

//////////	 

        $space = "&nbsp;&nbsp;&nbsp;&nbsp;";  



        $ttl = "";  

        for ($i = 0; $i < $level_space; $i++) {  

            $ttl .= $space;  

        }  

		///

		if ($row_table['parent_id']=='0') {

		echo "

		<tr class='tablerow' >

<td>

<img src='images/folder.gif' alt=''><b><a href='../{$_SERVER['PHP_SELF']}?catid={$row_table['catid']}' target='_blank'>&nbsp; {$row_table['catname']}</a> </b> (ID: {$row_table['catid']})&nbsp;&nbsp;&nbsp;&nbsp;<a href='{$_SERVER['PHP_SELF']}?action=edit&catid={$row_table['catid']}'>[Edit]</a>&nbsp;&nbsp;<a href='{$_SERVER['PHP_SELF']}?action=delcon&catid={$row_table['catid']}'>[Delete]</a>&nbsp;&nbsp;<a href='{$_SERVER['PHP_SELF']}?action=show&catid={$row_table['catid']}'>[الملفات ($num)]</a></td>

</tr>

		";  

		} else {

		        echo "

				<tr class='tablerow2'  >

<td>

$ttl<img src='images/folder_path.gif' alt=''>

<img src='images/folder.gif' alt=''><b><a href='../{$_SERVER['PHP_SELF']}?catid={$row_table['catid']}' target='_blank'>{$row_table['catname']}</a>

</b> (ID: {$row_table['catid']})&nbsp;&nbsp;&nbsp;&nbsp;<a href='{$_SERVER['PHP_SELF']}?action=edit&catid={$row_table['catid']}'>[Edit]</a>&nbsp;&nbsp;<a href='{$_SERVER['PHP_SELF']}?action=delcon&catid={$row_table['catid']}'>[Delete]</a>&nbsp;&nbsp;<a href='{$_SERVER['PHP_SELF']}?action=show&catid={$row_table['catid']}'>[المفات ($num)]</a>&nbsp;&nbsp;

</td>

</tr>

				";  

         }

		 ///

        $ttl .= $space . $space;  



        show_admin_menu_media ($row_table['catid'], $level_space+1);  

      

    }  



    if (mysql_num_rows($admin_tables) <= 0) {  

        return(0);  

    }    

}  





///////////////////////////////show ADMIN dropdown_menu ///////////////////////////////



function show_admin_menu_games($catid, $level_space)  

{  



   $admin_tables = mysql_query("SELECT * FROM games_cat WHERE parent_id=$catid ORDER BY catorder ASC");  



    while ($row_table = mysql_fetch_array($admin_tables)) { 

///////// calculate the images inside the games

$images_num = mysql_query("select * from games WHERE catid='{$row_table['catid']}' ") Or Die(MySQL_Error());

$num=mysql_num_rows($images_num);

//////////	 

        $space = "&nbsp;&nbsp;&nbsp;&nbsp;";  



        $ttl = "";  

        for ($i = 0; $i < $level_space; $i++) {  

            $ttl .= $space;  

        }  

		///

		if ($row_table['parent_id']=='0') {

		echo "

		<tr class='tablerow' >

<td>

<img src='images/folder.gif' alt=''><b><a href='../{$_SERVER['PHP_SELF']}?catid={$row_table['catid']}' target='_blank'>&nbsp; {$row_table['catname']}</a> </b> (ID: {$row_table['catid']})&nbsp;&nbsp;&nbsp;&nbsp;<a href='{$_SERVER['PHP_SELF']}?action=edit&catid={$row_table['catid']}'>[Edit]</a>&nbsp;&nbsp;<a href='{$_SERVER['PHP_SELF']}?action=delcon&catid={$row_table['catid']}'>[Delete]</a>&nbsp;&nbsp;<a href='{$_SERVER['PHP_SELF']}?action=show&catid={$row_table['catid']}'>[الألعاب ($num)]</a></td>

</tr>

		";  

		} else {

		        echo "

				<tr class='tablerow2'  >

<td>

$ttl<img src='images/folder_path.gif' alt=''>

<img src='images/folder.gif' alt=''><b><a href='../{$_SERVER['PHP_SELF']}?catid={$row_table['catid']}' target='_blank'>{$row_table['catname']}</a>

</b> (ID: {$row_table['catid']})&nbsp;&nbsp;&nbsp;&nbsp;<a href='{$_SERVER['PHP_SELF']}?action=edit&catid={$row_table['catid']}'>[Edit]</a>&nbsp;&nbsp;<a href='{$_SERVER['PHP_SELF']}?action=delcon&catid={$row_table['catid']}'>[Delete]</a>&nbsp;&nbsp;<a href='{$_SERVER['PHP_SELF']}?action=show&catid={$row_table['catid']}'>[الألعاب ($num)]</a>&nbsp;&nbsp;

</td>

</tr>

				";  

         }

		 ///

        $ttl .= $space . $space;  



        show_admin_menu_games ($row_table['catid'], $level_space+1);  

      

    }  



    if (mysql_num_rows($admin_tables) <= 0) {  

        return(0);  

    }    

}  







///////////////////////////////DELETE CATEGORY & SUB-CAT ///////////////////////////////



function delete_cats($catid)  

{  

///////////////////////

//// result

$in = mysql_query ("DELETE FROM images_cat WHERE catid='$catid'") 

Or Die(MySQL_Error()); 

// data input

if(!$in) {echo " <p><strong>The category Not deleted</strong></p> ";}

else {echo " <p><strong>تم حذف القسم بنجاح</strong></p> ";



/// delete all images inside 

mysql_query ("DELETE FROM images WHERE catid='$catid' ")Or Die(MySQL_Error());

//////// delete directory functions

///////////////

$get_catid = $catid;

$del_cat_images = recursive_remove_directory("../upload/products/images/$catid");

if (!$del_cat_images){echo "لم يتم التمكن من حذف فولدر الصور";} else {echo "تم حذف فولدر الصور";}

/////

echo "</br>";

////

$del_cat_thumbnails = recursive_remove_directory("../upload/products/thumbnails/$catid");

if (!$del_cat_thumbnails){echo "لم يتم التمكن من حذف فولدر الصور المصغرة";} else {echo "تم حذف فولدر الصور المصغرة";}

} // end data else

//////////// end delete func

////////////////////////////////////////// While

   $admin_delete_cat = mysql_query("SELECT * FROM images_cat WHERE parent_id=$catid");  



    while ($row_table = mysql_fetch_array($admin_delete_cat)) { 

 



//// result

$in = mysql_query ("DELETE FROM images_cat WHERE catid='{$row_table['catid']}'") 

Or Die(MySQL_Error()); 

// data input

if(!$in) {echo " <p><strong>القسم لم يتم حذفه</strong></p> ";}

else {echo " <p><strong>تم حذف القسم بنجاح</strong></p> ";



/// delete all images inside 

mysql_query ("DELETE FROM images WHERE catid='{$row_table['catid']}' ")Or Die(MySQL_Error());

//////// delete directory functions

///////////////

$get_catid = $catid;

$del_cat_images = recursive_remove_directory("../upload/products/images/{$row_table['catid']}");

if (!$del_cat_images){echo "لم يتم التمكن من حذف فولدر الصور";} else {echo "تم حذف فولدر الصور";}

/////

echo "</br>";

////

$del_cat_thumbnails = recursive_remove_directory("../upload/products/thumbnails/{$row_table['catid']}");

if (!$del_cat_thumbnails){echo "لم يتم التمكن من حذف فولدر الصور المصغرة";} else {echo "تم حذف فولدر الصور المصغرة";}

} // end data else

//////////// end delete func



        delete_cats ($row_table['catid']);  

      

    }  



    if (mysql_num_rows($admin_delete_cat) <= 0) {  

        return(0);  

    }    

}  





///////////////////////////////DELETE CATEGORY & SUB-CAT ///////////////////////////////



function delete_cats_news($catid)  

{  

///////////////////////

//// result

$in = mysql_query ("DELETE FROM news_cat WHERE catid='$catid'") 

Or Die(MySQL_Error()); 

// data input

if(!$in) {echo " <p><strong>The category Not deleted</strong></p> ";}

else {echo " <p><strong>تم حذف القسم بنجاح</strong></p> ";



/// delete all images inside 

mysql_query ("DELETE FROM news WHERE catid='$catid' ")Or Die(MySQL_Error());

//////// delete directory functions

///////////////

$get_catid = $catid;

$del_cat_images = recursive_remove_directory("../upload/news/$catid");

if (!$del_cat_images){echo "لم يتم التمكن من حذف فولدر الصور";} else {echo "تم حذف فولدر الصور";}

/////

echo "</br>";

////

$del_cat_thumbnails = recursive_remove_directory("../upload/news/thumbnails/$catid");

if (!$del_cat_thumbnails){echo "لم يتم التمكن من حذف فولدر الصور المصغرة";} else {echo "تم حذف فولدر الصور المصغرة";}

} // end data else

//////////// end delete func

////////////////////////////////////////// While

   $admin_delete_cat = mysql_query("SELECT * FROM news_cat WHERE parent_id=$catid");  



    while ($row_table = mysql_fetch_array($admin_delete_cat)) { 

 



//// result

$in = mysql_query ("DELETE FROM news_cat WHERE catid='{$row_table['catid']}'") 

Or Die(MySQL_Error()); 

// data input

if(!$in) {echo " <p><strong>القسم لم يتم حذفه</strong></p> ";}

else {echo " <p><strong>تم حذف القسم بنجاح</strong></p> ";



/// delete all images inside 

mysql_query ("DELETE FROM news WHERE catid='{$row_table['catid']}' ")Or Die(MySQL_Error());

//////// delete directory functions

///////////////

$get_catid = $catid;

$del_cat_images = recursive_remove_directory("../upload/news/{$row_table['catid']}");

if (!$del_cat_images){echo "لم يتم التمكن من حذف فولدر الصور";} else {echo "تم حذف فولدر الصور";}

/////

echo "</br>";

////

$del_cat_thumbnails = recursive_remove_directory("../upload/news/thumbnails/{$row_table['catid']}");

if (!$del_cat_thumbnails){echo "لم يتم التمكن من حذف فولدر الصور المصغرة";} else {echo "تم حذف فولدر الصور المصغرة";}

} // end data else

//////////// end delete func



        delete_cats_news ($row_table['catid']);  

      

    }  



    if (mysql_num_rows($admin_delete_cat) <= 0) {  

        return(0);  

    }    

}  



///////////////////////////////DELETE CATEGORY & SUB-CAT ///////////////////////////////



function delete_cats_media($catid)  

{  

///////////////////////

//// result

$in = mysql_query ("DELETE FROM media_cat WHERE catid='$catid'") 

Or Die(MySQL_Error()); 

// data input

if(!$in) {echo " <p><strong>The category Not deleted</strong></p> ";}

else {echo " <p><strong>تم حذف القسم بنجاح</strong></p> ";



/// delete all images inside 

mysql_query ("DELETE FROM media WHERE catid='$catid' ")Or Die(MySQL_Error());

//////// delete directory functions

///////////////

$get_catid = $catid;

$del_cat_images = recursive_remove_directory("../upload/media/$catid");

if (!$del_cat_images){echo "لم يتم التمكن من حذف فولدر الصور";} else {echo "تم حذف فولدر الصور";}

/////

echo "</br>";

////

$del_cat_thumbnails = recursive_remove_directory("../upload/media/thumbnails/$catid");

if (!$del_cat_thumbnails){echo "لم يتم التمكن من حذف فولدر الصور المصغرة";} else {echo "تم حذف فولدر الصور المصغرة";}

} // end data else

//////////// end delete func

////////////////////////////////////////// While

   $admin_delete_cat = mysql_query("SELECT * FROM media_cat WHERE parent_id=$catid");  



    while ($row_table = mysql_fetch_array($admin_delete_cat)) { 

 



//// result

$in = mysql_query ("DELETE FROM media_cat WHERE catid='{$row_table['catid']}'") 

Or Die(MySQL_Error()); 

// data input

if(!$in) {echo " <p><strong>القسم لم يتم حذفه</strong></p> ";}

else {echo " <p><strong>تم حذف القسم بنجاح</strong></p> ";



/// delete all images inside 

mysql_query ("DELETE FROM media WHERE catid='{$row_table['catid']}' ")Or Die(MySQL_Error());

//////// delete directory functions

///////////////

$get_catid = $catid;

$del_cat_images = recursive_remove_directory("../upload/media/{$row_table['catid']}");

if (!$del_cat_images){echo "لم يتم التمكن من حذف فولدر الصور";} else {echo "تم حذف فولدر الصور";}

/////

echo "</br>";

////

$del_cat_thumbnails = recursive_remove_directory("../upload/media/thumbnails/{$row_table['catid']}");

if (!$del_cat_thumbnails){echo "لم يتم التمكن من حذف فولدر الصور المصغرة";} else {echo "تم حذف فولدر الصور المصغرة";}

} // end data else

//////////// end delete func



        delete_cats_media ($row_table['catid']);  

      

    }  



    if (mysql_num_rows($admin_delete_cat) <= 0) {  

        return(0);  

    }    

}  



////////////////////////////////////////////////////////////////////////////////////



///////////////////////////////DELETE CATEGORY & SUB-CAT ///////////////////////////////



function delete_cats_games($catid)  

{  

///////////////////////

//// result

$in = mysql_query ("DELETE FROM games_cat WHERE catid='$catid'") 

Or Die(MySQL_Error()); 

// data input

if(!$in) {echo " <p><strong>The category Not deleted</strong></p> ";}

else {echo " <p><strong>تم حذف القسم بنجاح</strong></p> ";



/// delete all images inside 

mysql_query ("DELETE FROM games WHERE catid='$catid' ")Or Die(MySQL_Error());

//////// delete directory functions

///////////////

$get_catid = $catid;

$del_cat_images = recursive_remove_directory("../upload/games/$catid");

if (!$del_cat_images){echo "لم يتم التمكن من حذف فولدر الصور";} else {echo "تم حذف فولدر الصور";}

/////

echo "</br>";

////

$del_cat_thumbnails = recursive_remove_directory("../upload/games/thumbnails/$catid");

if (!$del_cat_thumbnails){echo "لم يتم التمكن من حذف فولدر الصور المصغرة";} else {echo "تم حذف فولدر الصور المصغرة";}

} // end data else

//////////// end delete func

////////////////////////////////////////// While

   $admin_delete_cat = mysql_query("SELECT * FROM games_cat WHERE parent_id=$catid");  



    while ($row_table = mysql_fetch_array($admin_delete_cat)) { 

 



//// result

$in = mysql_query ("DELETE FROM games_cat WHERE catid='{$row_table['catid']}'") 

Or Die(MySQL_Error()); 

// data input

if(!$in) {echo " <p><strong>القسم لم يتم حذفه</strong></p> ";}

else {echo " <p><strong>تم حذف القسم بنجاح</strong></p> ";



/// delete all images inside 

mysql_query ("DELETE FROM games WHERE catid='{$row_table['catid']}' ")Or Die(MySQL_Error());

//////// delete directory functions

///////////////

$get_catid = $catid;

$del_cat_images = recursive_remove_directory("../upload/games/{$row_table['catid']}");

if (!$del_cat_images){echo "لم يتم التمكن من حذف فولدر الصور";} else {echo "تم حذف فولدر الصور";}

/////

echo "</br>";

////

$del_cat_thumbnails = recursive_remove_directory("../upload/games/thumbnails/{$row_table['catid']}");

if (!$del_cat_thumbnails){echo "لم يتم التمكن من حذف فولدر الصور المصغرة";} else {echo "تم حذف فولدر الصور المصغرة";}

} // end data else

//////////// end delete func



        delete_cats_games ($row_table['catid']);  

      

    }  



    if (mysql_num_rows($admin_delete_cat) <= 0) {  

        return(0);  

    }    

}  



////////////////////////////////////////////////////////////////////////////////////

?>