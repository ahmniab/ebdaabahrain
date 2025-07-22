  <ul id="MenuBar1" class="MenuBarVertical">

 <li><a href="../index.php?" target="_blank"><font color="green">HomePage</font> </a></li>



        <li><a href="setting.php" target="data">Setting</a></li>

    

        <li><a class="MenuBarItemSubmenu" href="#">Administrators</a>

        <ul>

          <li><a href="admin.php?action=add" target="data">Insert</a></li>

          <li><a href="admin.php?" target="data">Modify</a></li>

        </ul>

    </li>



   <li><a href="#" class="MenuBarItemSubmenu">Content</a>

      <ul>
        <li><a href="news.php?action=add" target="data">Insert</a></li>

        <li><a href="news.php" target="data">Modify</a></li>

        <li><a href="news.php?status=0" target="data">Inactive</a></li>

        <li><a href="news.php?action=search" target="data">Search</a></li>



         <li><a href="news_cat.php?action=add" target="data">Insert Section</a> </li>

          <li><a href="news_cat.php?" target="data">Modify Sections</a></li>

      </ul>

    </li>  
 
    </li>
    
 <li><a href="#" class="MenuBarItemSubmenu">Ads</a>

      <ul>

        <li><a href="ads.php?action=add" target="data">Insert</a></li>

        <li><a href="ads.php" target="data">Modify</a></li>

        <li><a href="ads.php?active=0" target="data">Inactive</a></li>

        <li><a href="ads.php?action=search" target="data">Search</a></li>

        <li><a href="ads_cats.php?action=add" target="data">Insert Section</a></li>

        <li><a href="ads_cats.php?" target="data">Modify Sections</a></li>

      </ul>

    </li>  


        <!--<li><a href="#" class="MenuBarItemSubmenu">Albums</a>

        <ul>

          <li><a href="images.php?action=add" target="data">Insert Image</a></li>
 <li><a href="#" target="data">Multi-Image</a>
          <ul>
          <li><a href="multi_images.php?action=add" target="data">10 Images at once</a></li>
          <li><a href="images_ftp_import.php" target="data">Through FTP</a></li>
      </ul>
          </li>
          
          <li><a href="images.php" target="data">Modify Images</a></li>

          <li><a href="images.php?active=0" target="data">Inactive</a></li>

          <li><a href="images.php?action=search" target="data">Search</a></li>

          <li><a href="images_cat.php?action=add" target="data">Insert Section</a> </li>

          <li><a href="images_cat.php?" target="data">Modify Sections</a></li>


        </ul>

    </li>-->



    <li><a class="MenuBarItemSubmenu" href="#">Videos</a>
        <ul>

          <li><a href="media.php?action=add" target="data">Insert Video</a></li>
          <li><a href="media.php" target="data">Modify</a></li>
          <li><a href="media.php?action=notactive" target="data">Inactive</a></li>
          <li><a href="media.php?action=search" target="data">Search</a></li>
                 <li><a href="media_cat.php?action=add" target="data">Insert Section</a> </li>
          <li><a href="media_cat.php?" target="data">Modify Sections</a></li>
        </ul>
    </li>




  <li><a href="#" class="MenuBarItemSubmenu">Pages</a>

      <ul>

        <li><a href="pages.php?action=add" target="data">Insert</a> </li>

          <li><a href="pages.php?" target="data">Modify</a></li>

      </ul>

    </li>
   

      <li><a href="#" class="MenuBarItemSubmenu">Backup Data</a>

      <ul>

        <li><a href="backup.php?" target="data">Perform Backup</a> </li>

   <!--       <li><a href="database_backup/bigdump.php?" target="data">Restore Backup</a></li>-->



      </ul>

    </li>

    

    <li><a href="phpinfo.php?" target="data"><font color="green"> Server Info</font> </a></li>

    <li><a href="login.php?action=logout" onClick="return log_out()"><span class="error"> Logout </span> </a></li>

</ul>



<script type="text/javascript">

<!--

var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});

//-->

</script>

