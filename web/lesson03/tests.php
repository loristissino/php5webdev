<pre>
<?php

require('lib/lime.php');
require('lib/useful_functions.php');

ini_set('error_reporting', E_ALL);

$t=new lime_test(14, new lime_output_color());

foreach(array(
  'foo', 
  '/foo/bar', 
  'foo/bar', 
  'foo/bar.gz', 
  'bar.gz', 
  'FOO'
  ) as $filename)
{ 
  $t->is(nothidden($filename), true, 'nothidden() returns true for ' . $filename);
}

foreach(array(
  '.',
  '..',
  '.foo', 
  '/foo/.bar', 
  'foo/.bar', 
  'foo/.bar.gz', 
  '.bar.gz', 
  '.FOO'
  ) as $filename)
{ 
  $t->is(nothidden($filename), false, 'nothidden() returns false for ' . $filename);
}
