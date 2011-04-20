<?php

  require_once('../lib/useful_functions.php');

  define('POSTS_DIR', 'posts');

  $posts=array_filter(scandir(POSTS_DIR), 'nothidden');
  
  $action=getRequestParameter('action', 'list');

  $info=getFlashMessage('info');
  $error=getFlashMessage('error');

  switch($action)
  {
    case 'list':
      break;
    case 'view':
      $id=getRequestParameter('id', '');
        
      if (!in_array($id, $posts))
      {
        forward404('L\'articolo richiesto non esiste.'); 
      }
      break;
    case 'edit':
      $id=getRequestParameter('id', '');
        
      if (!in_array($id, $posts))
      {
        forward404('L\'articolo richiesto non esiste.'); 
      }
      break;
    case 'save':
      $id=getRequestParameter('id', '');
        
      if (!in_array($id, $posts))
      {
        forward404('L\'articolo richiesto non esiste.'); 
      }
      if (savepost($id, getRequestParameter('text', '', 'POST')))
      {
        redirect('?action=list', 'Post salvato correttamente.', 'info');
      }
      else
      {
        redirect('?id=' . getRequestParameter('id', '') . '&action=edit', 'Problemi nel salvataggio dell\'articolo', 'error');
      }
      break;
    case 'delete':
      $id=getRequestParameter('id', '');
        
      if (!in_array($id, $posts))
      {
        forward404('L\'articolo richiesto non esiste.'); 
      }
      
      if ($_SERVER['REQUEST_METHOD']=='POST' or $_SERVER['REQUEST_METHOD']=='DELETE')
      {
        if(deletepost($id))
        {
          redirect('?action=list', 'Articolo eliminato correttamente.', 'info');
        }
        else
        {
          redirect('?action=view&id='. $id, 'Problemi con l\'eliminazione.', 'error');
        }
      }
      break;

    default:
      forward404('L\'azione richiesta non esiste.'); 
      
  }

?>
<html lang="it">
<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<title>BLOG</title>
</head>
<body>
<?php if($info): ?>
<p style="background-color: lightgreen"><?php echo $info ?></p>
<?php endif ?>
<?php if($error): ?>
<p style="background-color: red"><?php echo $error ?></p>
<?php endif ?>
<?php include('templates/' . $action . '.php') ?>
</body>
</html>

