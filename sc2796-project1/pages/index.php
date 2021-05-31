<?php
include("includes/init.php");
$nav_index_class = 'live';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Ithaca Apple Harvest Festival Homepage</title>
  <link rel="stylesheet" type="text/css" href="/public/styles/site.css"/>
</head>

<body class="home">

  <?php include("includes/header.php"); ?>

  <div class="content">
    <main>
      <h2>Visit the Weather Channel to find out today's weather</h2>
      <ul>
        <li><a href="https://weather.com/weather/tenday/l/Ithaca+NY?canonicalCityId=32a2ed56d3824272b018db34536d8bf2a49eaa0d66160bec6006c334dae3f321">Check Today's Weather</a></li>
      </ul>
      <h2>Check Out the Other Activities You can do in Ithaca</h2>
      <ul>
        <li><a href="https://www.visitithaca.com/">Visit Ithaca Homepage</a></li>
      </ul>
      <h2>Visit the Social Media Pages for the Ithaca Apple Festival</h2>
      <ul>
        <li><a href="https://www.facebook.com/downtownithaca/">Ithaca Apple Harvest Festival Facebook Page</a></li>
        <li><a href="https://twitter.com/ithacaapplefest?lang=en">Ithaca Apple Harvest Festival Twitter Page</a></li>
      </ul>
    </main>
    <aside>

      <h2>Images of the Ithaca Apple Harvest Festival</h2>

      <div class="folder">
        <div class="img">
          <!-- Source: https://events.cornell.edu/event/cu_downtown -->
          <img src="/public/images/image2.jpg" alt="Location of Apple Harvest Festival, Image of Ithaca Commons">
        </div>
        <div class="cap">
          Source: <cite><a href="https://events.cornell.edu/event/cu_downtown">Image of Ithaca Commons</a></cite>
        </div>
      </div>

      <div class="folder">
        <div class="img">
          <!-- Source: https://noelmpicinich.bitbucket.io/ithaca_site/index.html -->
          <img src="/public/images/image3.jpg" alt="Performance during the Ithaca Apple Harvest Festival from Previous Years">
        </div>
        <div class="cap">
          Source: <cite><a href="https://noelmpicinich.bitbucket.io/ithaca_site/index.html">Performance during the Ithaca Apple Harvest Festival from Previous Years</a></cite>
        </div>
      </div>

      <div class="folder">
        <div class="img">
          <!-- Source: https://theithacan.org/life-culture/apple-of-ithacas-eye-34th-annual-applefest/ -->
          <img src="/public/images/image4.jpg" alt="Performance during the Ithaca Apple Harvest Festival from Previous Years, A man juggling torches">
        </div>
        <div class="cap">
          Source: <cite><a href="https://theithacan.org/life-culture/apple-of-ithacas-eye-34th-annual-applefest/">Performance during the Ithaca Apple Harvest Festival from Previous Years</a></cite>
        </div>
      </div>
    </aside>
  </div>

  <?php include("includes/footer.php"); ?>

</body>
