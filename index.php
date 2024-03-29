<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bootstrap Form Example</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
  
<div class="container mt-5">
  <h2>Simple captcha</h2>
  <form name="form" method="post" action="check.php">
    <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" class="form-control" id="name" placeholder="Votre nom" name="name">
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Votre mail" name="email">
    </div>
    <div class="form-group">
      <label for="message">Image:</label>
     <p><img src="test.php?rand=<?php echo rand(); ?>" id='captcha_image'></p>
     <p>Image illisible? <a href='javascript: refreshCaptcha();'>cliquez ici</a> pour recharger</p>
    </div>
     <div class="form-group">
      <label for="name">Catpcha:</label>
      <input type="text" class="form-control" id="captcha" placeholder="Entrez le code du captcha ici" name="captcha">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

<!-- Bootstrap JS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
//Refresh
function refreshCaptcha(){
    var img = document.images['captcha_image'];
    img.src = img.src.substring(0,img.src.lastIndexOf("?"))+"?rand="+Math.random()*1000;
  console.log(img.src);
}
</script>
</body>
</html>
