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
