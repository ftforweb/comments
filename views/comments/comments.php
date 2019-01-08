 
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	
  <link href='templates/css/bootstrap.min.css' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  <link href='templates/css/app.min.css' rel='stylesheet' type='text/css'>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
</head>
<body>
	<section class="block-1">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <a href="">
            <div class="logo">
              <img src="templates/img/logo.png" alt="">
            </div>
          </a>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 col-sm-4 col-xs-4 col-xs-offset-3 col-sm-offset-3 col-md-offset-3">
          <div class="message-wrapper">
            <img src="templates/img/message.png" alt="">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
            <form action="" method="POST" id="form-message">
            <div class="form-group-wrapper">
              <div class="form-group">
                <label for="name">Имя</label>
                <input type="text" class="form-control" id="name" name="name">
                <label for="email">E-Mail</label>
                <input type="email" class="form-control" id="email" name="email">
              </div>
            </div>
            
            <div class="form-group form-group-flex">
              <label for="comments">Комментарий</label>
              <textarea class="form-control" id="comments" rows="" name="comments"></textarea>
            </div>

            <div class="col-xs-12 text-right reset-padding">
              <button type="submit" name="submit" class="btn btn-danger" id="btn-submit">Записать</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
  <section class="block-2">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <h2>Выводим комментарии</h2>
        </div>
      </div>
      <div class="row message-container">
          <?php foreach( $commentsList as $commentsItem): ?>
            <div class="col-md-4 col-sm-4 col-xs-12 comment-item">
              <div class="item text-center">
                <div class="item-header">
                  <?php echo $commentsItem['name'];?>
                </div>
                <div class="item-body">
                  <div class="item-body-email"><?php echo $commentsItem['email'];?></div>
                  <div class="item-body-message"><?php echo $commentsItem['comments'];?></div> 
                </div>
              </div>
            </div>
          <?php endforeach;?>
      </div>
    </div>
  </section>
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-12 ">
          <a href="">
            <div class="logo text-left">
              <img src="templates\img\footer-logo.png" alt="">
            </div>
          </a>
          <div class="social">
            <a href=""><i class="fab fa-vk"></i></a>
            <a href=""><i class="fab fa-facebook-f"></i></a>
          </div>
        </div>
      </div>
    </div>
     
  </footer>
</body>
    <script type="text/javascript" src="templates/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="templates/js/app.js"></script>
</html>


