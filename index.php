<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>Bootstrap 101 Template</title>

  <!-- Bootstrap -->
  <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <style type="text/css">
  .container {
    background: #FAFAFA;
  }

  .chat .list-group-item {
    padding: 10px 15px 15px 15px;
  }

  .user-pic {
    width:60px;
    height:60px;
    float: left;
  }

  .messages-box {
    max-width: 70%;
  }

  .messages {
    margin:0 15px; 
    padding: 2px 8px;
    position: relative;
  }

  .me .messages {
    background: #BDFCCB;
    margin-right: 0px;
  }
  
  .me .messages:after, .messages:before {
    right: 100%;
    top: 12px;
    border: solid transparent;
    content: " ";
    height: 0;
    width: 0;
    position: absolute;
    pointer-events: none;
  }

  .me .messages:before {
    border-color: rgba(136, 183, 213, 0);
    border-right-color: #BDFCCB;
    border-width: 8px;
    margin-top: -8px;
  }

  .others .messages {
    background: #D5E8F5;
    margin-left: 0px;
  }

  .others .messages:after,.others .messages:before {
    left: 100%;
    top: 12px;
    border: solid transparent;
    content: " ";
    height: 0;
    width: 0;
    position: absolute;
    pointer-events: none;
  }

  .others .messages:after {
    border-color: rgba(136, 183, 213, 0);
    border-left-color: #D5E8F5;
    border-width: 8px;
    margin-top: -8px;
  }

  .message-status {
    font-size: 10px !important;
    color: #7D7D72;
    position: absolute;
    bottom: 0;
    right: 90px;
  }

  .menu {
    font-size: 15px;
  }
  </style>
</head>
<body>
  <div class="container-fluid">
    <ul class="nav nav-tabs">
      <li class="col-md-6 active"><a href="#">Home</a></li>
      <li class="col-md-6"><a href="#">Profile</a></li>
    </ul>
    <div class="row">
      <div class="col-md-12">
        <ul class="list-group chat">
          <li class="list-group-item clearfix me">
            <div class="user pull-left">
              <img class="img-circle user-pic" src="assets/img/default-picture.jpg">
            </div>
            <div class="messages-box pull-left">
              <div class="messages">
                some text from me
              </div>
            </div>
          </li>
          <li class="list-group-item clearfix others">
            <div class="user pull-right">
              <img class="img-circle user-pic" src="assets/img/default-picture.jpg">
            </div>
            <div class="messages-box pull-right">
              <div class="messages">
                some text from others
                some text from others line 2
              </div>
              <span class="message-status">Read at 08:00</span>
            </div>
          </li>
          <li class="list-group-item clearfix others">
            <div class="user pull-right">
              <img class="img-circle user-pic" src="assets/img/default-picture.jpg">
            </div>
            <div class="messages-box pull-right">
              <div class="messages">
                some text from others 2
              </div>
            </div>
          </li>
          <li class="list-group-item clearfix me">
            <div class="form-group">
                <label class="sr-only" for="messages">Messages</label>
                <input type="email" class="form-control" id="messages" placeholder="Type your messages">
              </div>
              <button type="button" class="btn btn-xs btn-success pull-right">Send</button>
          </li>
        </ul>
      </div>      
    </div>
  </div>

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="assets/js/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>