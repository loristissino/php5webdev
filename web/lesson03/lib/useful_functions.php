<?php

/**
 * @package php5webdev-blog
 */


/**
 * return true if the file is not hidden
 *
 * The file is considered hidden when its name begins with a dot.
 * If the filename is a complete path, only the basename is considered.
 *
 * @author Loris Tissino <loris@tissino.it> 
 * @param string $filename
 * @return bool 
 */
function nothidden($filename)
{
  return substr(basename($filename), 0, 1)!='.';
}


/**
 * save a post using global array $_GET and $_POST as input
 *
 * We assume that the $_GET and $_POST variables contain the values
 * of the post to update.
 * No check is done before saving the file.
 *
 * @author Loris Tissino <loris@tissino.it> 
 * @return bool true if the post was correctly saved
 */
function savepost()
{
  // FIXME this must be written!
  
  return true;
}

/**
 * redirect the browser to a page specified by $target
 *
 * This function is useful when you want to redirect the browser after a post.
 * See http://php.net/manual/en/function.header.php for details.
 *
 * @author Loris Tissino <loris@tissino.it> 
 * @return bool true if the post was correctly saved
 */
function redirect($target, $message='')
{
  $host  = $_SERVER['HTTP_HOST'];
  $uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
  $extra = $target;
  
  setcookie('message', $message, time()+3600);
  header("Location: http://$host$uri/$extra");
  exit;
}
