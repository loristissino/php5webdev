<h1>Switch demo</h1>
<pre style="color:blue">
<?php
@$role=$_GET['role'];

$permissions=array();

switch ($role)
{
  case 'admin':
    $permissions[] = 'delete everything';
    $permissions[] = 'admin users';
  case 'editor':
    $permissions[] = 'publish articles';
    $permissions[] = 'set publishing dates';
  case 'journalist':
    $permissions[] = 'write an article';
  case 'reader':
    $permissions[] = 'read an article';
    break;
  default:
    $permissions[] = "no permission";
   
}

print_r($permissions);

?>
</pre>
<?php foreach(array('admin', 'editor', 'journalist', 'reader') as $role): ?>
<p><a href="?role=<?php echo $role ?>"><?php echo $role ?></a></p>
<?php endforeach ?>