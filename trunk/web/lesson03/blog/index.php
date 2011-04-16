<?php

  require_once('../lib/useful_functions.php');

  const POSTS_DIR='posts';

  $posts=scandir(POSTS_DIR); // leggo la directory dei post
  //print_r($posts); // visualizzo l'elenco
  
  $realposts=array_filter($posts, 'nothidden');
  
  //print_r($realposts); // visualizzo l'elenco
  
  
  if (array_key_exists('id', $_GET))  // recupero l'id del post che l'utente desidera 
    {
     $id=$_GET['id'];
    }
  else
    {
     $id='';
    }
    
  //print_r($realposts);
  if (!in_array($id, $realposts))
  {
    $id='';
  }
  
  //print_r($realposts);

  if (array_key_exists('action', $_GET))  // recupero l'id del post che l'utente desidera 
    {
     $action=$_GET['action'];
    }
  else
    {
     $action='list';
    }


  if(array_key_exists('message', $_COOKIE))
  {
    $message=$_COOKIE['message'];
    setcookie('message', '');
  }
  else
  {
    $message = '';
  }

  switch($action)
  {
    case 'view':
      break;
    case 'edit':
      break;
    case 'save':
      if (savepost())
      {
        redirect('?list', 'Post salvato correttamente.');
      }
      else
      {
        redirect('?id=' . $id . '&action=edit');
      }
      break;
  }

?>
<html lang="it">
<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<title>BLOG</title>
</head>
<body>
<?php if($message): ?>
<p style="background-color: yellow"><?php echo $message ?></p>
<?php endif ?>
<?php include('templates/' . $action . '.php') ?>
</body>
</html>

