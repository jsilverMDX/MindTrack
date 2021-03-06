<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>

  <title><?php echo $title_for_layout?></title>
  <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
  <link href='http://fonts.googleapis.com/css?family=Puritan' rel='stylesheet' type='text/css'>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js" type="text/javascript"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js" type= "text/javascript"></script>
  <?php echo $scripts_for_layout ?>
  <!--[if IE 7]>
  <style type="text/css" media="screen">
  #inner_right_pane #top form {position:relative;top:-15px;}
  div#menu ul li a {padding: 0 26px;position:relative;top:7px;}
  </style>
  <![endif]-->
  <link rel="stylesheet" href="/css/mindtrack-client.css" type="text/css" media="screen" charset="utf-8" />

</head>

<body>
  <div id="container">

      <div id="main_content">
        <?php echo $content_for_layout; ?>
      </div>
      
      <div id="right_sidebar">
      
      <div id="logo">
      <h3 class="mindtrack">MindTrack</h3>
      </div>

      <div id="header_links">
      <ul>
      <? $logged_in = $session->read('Auth.User') ?><? $logged_in ? $uaction = 'logout' : $uaction = 'login' ?>

      <li><a href="/<?= $uaction; ?>"><?= ucwords($uaction) ?></a></li>
      </ul>

      <p>Welcome, <?= $logged_in['username']; ?>!</p>
      </div>
        
      <ul id="client-links">
        <li><a href="/mdx_clients">Main Dashboard</a></li>

        <li><a href="/clients/done_tickets">Completed Tickets</a></li>

        <li><a href="/clients/doc_store">Document Store</a></li>

        <li><a href="/clients/my_invoices">Invoices</a></li>
      </ul>
    </div>
    
    <div style="clear: both"></div>

  </div>
</body>
</html>
