<?php
include("includes/init.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Requested Page Not Found</title>
  <link rel="stylesheet" type="text/css" href="/public/styles/site.css"/>
</head>

<body>
  <?php include("includes/header.php"); ?>
    <div class= "spacing">
      <div class= "inner-spacing">
        <h1><span class= "text-increase-headingOne"> Not Found </span></h1>
      </div>
      <div class= "inner-spacing">
        <h3><span class= "text-increase-headingThree">We are sorry, the page: <em>&quot;<?php echo htmlspecialchars($request_uri); ?>&quot;</em>, does not exist.</span></h3>
        <h3><span class= "text-increase-headingThree">Please use the navigation bar to assist you with getting to the web page that you are looking for. </span></h3>
      </div>
    </div>
    <?php include("includes/footer.php"); ?>
</body>

</html>
