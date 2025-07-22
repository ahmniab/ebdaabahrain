<?php
///////////////////// find the correct file type /////////////
function findtype($file) {
   $revfile = strrev($file);
   $type = strtolower( strrev(substr($revfile,0,strpos($revfile,"."))) );

   return $type;
}

///////////////////// find the file W*H////////// 
function find_size_file($file_uploaded,$w_req,$h_req) {
list($file_w, $file_h, $type, $attr) = getimagesize("$file_uploaded");

if ($file_w > $w_req) {
return false;
} else {
return true;
}

}
/////////////////////////////
$max_size = 2000000; /// maximam file size
// ------------ Ameenov recursive PHP functions -------------
// recursive_remove_directory( directory to delete, empty )
// expects path to directory and optional TRUE / FALSE to empty
// of course PHP has to have the rights to delete the directory
// you specify and all files and folders inside the directory // 
// ------------------------------------------------------------
// to use this function to totally remove a directory, write:
// recursive_remove_directory('path/to/directory/to/delete');

// to use this function to empty a directory, write:
// recursive_remove_directory('path/to/full_directory',TRUE);

function recursive_remove_directory($directory, $empty=FALSE)
{
	// if the path has a slash at the end we remove it here
	if(substr($directory,-1) == '/')
	{
		$directory = substr($directory,0,-1);
	}

	// if the path is not valid or is not a directory ...
	if(!file_exists($directory) || !is_dir($directory))
	{
		// ... we return false and exit the function
		return FALSE;

	// ... if the path is not readable
	}elseif(!is_readable($directory))
	{
		// ... we return false and exit the function
		return FALSE;

	// ... else if the path is readable
	}else{

		// we open the directory
		$handle = opendir($directory);

		// and scan through the items inside
		while (FALSE !== ($item = readdir($handle)))
		{
			// if the filepointer is not the current directory
			// or the parent directory
			if($item != '.' && $item != '..')
			{
				// we build the new path to delete
				$path = $directory.'/'.$item;

				// if the new path is a directory
				if(is_dir($path)) 
				{
					// we call this function with the new path
					recursive_remove_directory($path);

				// if the new path is a file
				}else{
					// we remove the file
					unlink($path);
				}
			}
		}
		// close the directory
		closedir($handle);

		// if the option to empty is not set to true
		if($empty == FALSE)
		{
			// try to delete the now empty directory
			if(!rmdir($directory))
			{
				// return false if not possible
				return FALSE;
			}
		}
		// return success
		return TRUE;
	}
}
// ------------------------------------------------------------


// ------------ Ameenov recursive PHP functions -------------
// scan_directory_recursively( directory to scan, filter )
// expects path to directory and optional an extension to filter
// of course PHP has to have the permissions to read the directory
// you specify and all files and folders inside this directory
// ------------------------------------------------------------

// to use this function to get all files and directories in an array, write:
// $filestructure = scan_directory_recursively("path/to/directory");

// to use this function to scan a directory and filter the results, write:
// $fileselection = scan_directory_recursively("directory", 'extension');
// OR
// $fileselection = scan_directory_recursively("directory", "extension");

function scan_directory_recursively($directory, $filter=FALSE)
{
	// if the path has a slash at the end we remove it here
	if(substr($directory,-1) == '/')
	{
		$directory = substr($directory,0,-1);
	}

	// if the path is not valid or is not a directory ...
	if(!file_exists($directory) || !is_dir($directory))
	{
		// ... we return false and exit the function
		return FALSE;

	// ... else if the path is readable
	}elseif(is_readable($directory))
	{
		// we open the directory
		$directory_list = opendir($directory);

		// and scan through the items inside
		while (FALSE !== ($file = readdir($directory_list)))
		{
			// if the filepointer is not the current directory
			// or the parent directory
			if($file != '.' && $file != '..')
			{
				// we build the new path to scan
				$path = $directory.'/'.$file;

				// if the path is readable
				if(is_readable($path))
				{
					// we split the new path by directories
					$subdirectories = explode('/',$path);

					// if the new path is a directory
					if(is_dir($path))
					{
						// add the directory details to the file list
						$directory_tree[] = array(
							'path'    => $path,
							'name'    => end($subdirectories),
							'kind'    => 'directory',

							// we scan the new path by calling this function
							'content' => scan_directory_recursively($path, $filter));

					// if the new path is a file
					}elseif(is_file($path))
					{
						// get the file extension by taking everything after the last dot
						$extension = end(explode('.',end($subdirectories)));

						// if there is no filter set or the filter is set and matches
						if($filter === FALSE || $filter == $extension)
						{
							// add the file details to the file list
							$directory_tree[] = array(
								'path'      => $path,
								'name'      => end($subdirectories),
								'extension' => $extension,
								'size'      => filesize($path),
								'kind'      => 'file');
						}
					}
				}
			}
		}
		// close the directory
		closedir($directory_list); 

		// return file list
		return $directory_tree;

	// if the path is not readable ...
	}else{
		// ... we return false
		return FALSE;	
	}
}
// ------------------------------------------------------------


// ------------ Ameenov recursive PHP functions -------------
// recursive_directory_size( directory, human readable format )
// expects path to directory and optional TRUE / FALSE
// PHP has to have the rights to read the directory you specify
// and all files and folders inside the directory to count size
// if you choose to get human readable format,
// the function returns the filesize in bytes, KB and MB
// ------------------------------------------------------------

// to use this function to get the filesize in bytes, write:
// recursive_directory_size("path/to/directory/to/count");

// to use this function to get the size in a nice format, write:
// recursive_directory_size("path/to/directory/to/count",TRUE);

function recursive_directory_size($directory, $format=FALSE)
{
	$size = 0;

	// if the path has a slash at the end we remove it here
	if(substr($directory,-1) == '/')
	{
		$directory = substr($directory,0,-1);
	}

	// if the path is not valid or is not a directory ...
	if(!file_exists($directory) || !is_dir($directory) || !is_readable($directory))
	{
		// ... we return -1 and exit the function
		return -1;
	}
	// we open the directory
	if($handle = opendir($directory))
	{
		// and scan through the items inside
		while(($file = readdir($handle)) !== false)
		{
			// we build the new path
			$path = $directory.'/'.$file;

			// if the filepointer is not the current directory
			// or the parent directory
			if($file != '.' && $file != '..')
			{
				// if the new path is a file
				if(is_file($path))
				{
					// we add the filesize to the total size
					$size += filesize($path);

				// if the new path is a directory
				}elseif(is_dir($path))
				{
					// we call this function with the new path
					$handlesize = recursive_directory_size($path);

					// if the function returns more than zero
					if($handlesize >= 0)
					{
						// we add the result to the total size
						$size += $handlesize;

					// else we return -1 and exit the function
					}else{
						return -1;
					}
				}
			}
		}
		// close the directory
		closedir($handle);
	}
	// if the format is set to human readable
	if($format == TRUE)
	{
		// if the total size is bigger than 1 MB
		if($size / 1048576 > 1)
		{
			return round($size / 1048576, 1).' MB';

		// if the total size is bigger than 1 KB
		}elseif($size / 1024 > 1)
		{
			return round($size / 1024, 1).' KB';

		// else return the filesize in bytes
		}else{
			return round($size, 1).' bytes';
		}
	}else{
		// return the total filesize in bytes
		return $size;
	}
}
// ------------------------------------------------------------

////////////////////// remove_cat_folder also like the above//////////////////////
function remove_cat_folder($path) {
  $ok = 1;
  if (@is_dir($path)) {
    $handle = opendir($path);
    while ($file = @readdir($handle)) {
      if ($file != "." && $file != "..") {
        $ok = (!remove_cat_folder($path."/".$file)) ? 0 : $ok;
      }
    }
    closedir($handle);
    $ok = (!rmdir($path)) ? 0 : $ok;
  }
  else {
    $ok = (!unlink($path)) ? 0 : $ok;
  }
  return $ok;
}

// ------------------------------------------------------------

///////////////////// Check if Valid image name (filtration) ///////////
 function is_eng($file_name)
   {
       // regx to test for valid e-mail adres
       $regex = '^([A-Z a-z_0-9 -])+\.';
       if (eregi($regex, $file_name)) return true;
       else return false;
   }


///////////////////// find the correct name of the file ////////// 
function findname($file_name_finder) {
   $revname = strrev($file_name_finder);
   $thename =  strrev(substr($revname,4,strpos($revname,".")));
   return $thename;
}
///////////////////////////////
///////////////////////// Make thumb/////////////////////////////////////////
function thumbnail($image_path,$thumb_path,$image_name,$thumb_width) 
{ 
    $src_img = imagecreatefromjpeg("$image_path/$image_name"); 
    $origw=imagesx($src_img); 
    $origh=imagesy($src_img); 
    $new_w = $thumb_width; 
    $diff=$origw/$new_w; 
    $new_h=$new_w; 
    $dst_img = imagecreate($new_w,$new_h); 
    imagecopyresized($dst_img,$src_img,0,0,0,0,$new_w,$new_h,imagesx($src_img),imagesy($src_img)); 

    imagejpeg($dst_img, "$thumb_path/$image_name"); 
    return true; 
} 
//////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////
/////////////////////////////////THUMB ///////////////////////////////////
//////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////
function create_thumbs($orginal_path,$thumb_path,$image_name,$thumb_w,$thumb_h) {

$im_file_name = "$orginal_path$image_name"; 
$image_attribs = getimagesize($im_file_name); // get every thing about the image (width-height-size-format)
////////////////////////////////////////
$width = $image_attribs[0];
$height = $image_attribs[1];
//////////////
//////////////////////
$image_type = findtype($image_name);
/////////////////////////

//////////////////////////////
if ($image_type!='jpeg' && $image_type!='jpg' && $image_type!='pjpeg' && $image_type !='gif' && $image_type!='png')
{
echo "<div class='error' align='center'>The file you uploaded is not allowed extension, the thumbnails not created</div>";
} else {
////////////

if ($image_type=='jpeg' OR $image_type=='jpg' OR $image_type=='pjpeg') {
$im_old = imagecreatefromjpeg($im_file_name); 
}
elseif ($image_type=='gif')
{
$im_old = imagecreatefromgif($im_file_name);
} 
elseif ($image_type=='png')
{
$im_old = imagecreatefrompng($im_file_name);
} 

////////////////////////////////////////
$width = $image_attribs[0];
$height = $image_attribs[1];
//////////////////////////////////////////////////////////////////////////
$th_max_width = $thumb_w; //// the wanted width
$th_max_height = $thumb_h; //// the wanted height
//////////////////////////////
$ratio = ($width > $height) ? $th_max_width/$image_attribs[0] : $th_max_height/$image_attribs[1]; 
$th_width = $image_attribs[0] * $ratio; 
$th_height = $image_attribs[1] * $ratio; 
$im_new = imagecreatetruecolor($th_width,$th_height); 
imageantialias($im_new,true); 

//////////////////////////////////////////////////////////////////////////
$th_file_name = "$thumb_path$image_name"; 
imagecopyresampled($im_new,$im_old,0,0,0,0,$th_width,$th_height, $image_attribs[0], $image_attribs[1]); 
$final = imagejpeg($im_new,$th_file_name,100);

} // end else format is allowed
return;
}

////////////////////////////////////////////////////.////////////////////////////
?>