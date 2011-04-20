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
 * save a post
 *
 * @author Loris Tissino <loris@tissino.it> 
 * @param string $id the id of the post
 * @param string $content the content to save
 * @return bool true if the post was correctly saved
 */
function savepost($id, $content)
{
  try
  {
    if ($f = fopen(POSTS_DIR . '/' . $id, 'w'))
    {
      fwrite($f, $content);
      fclose($f);
      return true;
    }
  }
  catch (Exception $e)
  {
    return false;
  }
  return false;
}

/**
 * delete a post
 *
 * @author Loris Tissino <loris@tissino.it> 
 * @param string $id the id of the post
 * @return bool true if the post was correctly saved
 */
function deletepost($id)
{
  try
  {
    unlink(POSTS_DIR . '/' . $id);
    return true;
  }
  catch (Exception $e)
  {
    return false;
  }
  return false;
}


/**
 * redirect the browser to a page specified by $target
 *
 * This function is useful when you want to redirect the browser after a post.
 * No code is executed afterwards, so it does not actually return anything.
 * See http://php.net/manual/en/function.header.php for details.
 *
 * @author Loris Tissino <loris@tissino.it> 
 * @param string $target the new location
 * @param string $message a message to be set with a cookie
 */
function redirect($target, $message='', $type='info')
{
  $host  = $_SERVER['HTTP_HOST'];
  $uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
  $extra = $target;
  
  setcookie($type, $message, time()+3600);
  header("Location: http://$host$uri/$extra");
  exit;
}

/**
 * redirect the browser to a page specified by $target
 *
 * This function is useful when you want to redirect the browser after a post.
 * No code is executed afterwards, so it does not actually return anything.
 * See http://php.net/manual/en/function.header.php for details.
 *
 * @author Loris Tissino <loris@tissino.it> 
 * @param string $target the new location
 * @param string $message a message to be set with a cookie
 */
function forward404($message)
{  
  header("HTTP/1.0 404 Not Found");
  header("Status: 404 Not Found");
  echo $message; //FIXME This should be done in a better way...
  exit;
}



/**
 * return a request parameter, or a default if the parameter does not exist
 *
 * This function is handy if you want to get a specified parameter from the
 * HTTP request. If the parameter does not exist, a default value can be
 * specified.
 * The type can be one of the following:
 *  - 'GET' for URL-encoded parameters
 *  - 'POST' for parameters sent in the body of the request
 *  - 'COOKIE' for cookies
 *
 * @author Loris Tissino <loris@tissino.it> 
 * @param string $name the parameter name
 * @param string $default a default value, if needed
 * @param string $type the type of parameter ('GET', 'POST', 'COOKIE')
 * @return string the parameter value, or the default
 */
function getRequestParameter($name, $default='', $type='GET')
{
  switch($type)
  {
    case 'GET':
      $lookuparray=$_GET;
      break;
    case 'POST':
      $lookuparray=$_POST;
      break;
    case 'COOKIE':
      $lookuparray=$_COOKIE;
      break;
    default:
      throw new Exception('Not a valid type specified: ' . $type);
  }
    
  return array_key_exists($name, $lookuparray) ? $lookuparray[$name] : $default;

}

/**
 * return a flash message, previously set with a cookie, and delete the cookie
 *
 * @author Loris Tissino <loris@tissino.it> 
 * @param string $name the message name
 * @return string the value of the message
 */
function getFlashMessage($name)
{
  $message=getRequestParameter($name, '', $type='COOKIE');
  if ($message)
  {
    setcookie($name, '');
  }
  return $message;
}