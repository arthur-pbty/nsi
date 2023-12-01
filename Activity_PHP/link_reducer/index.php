<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>URL Shortener</title>
   <link rel="stylesheet" href="style.css">
</head>
<body>
   <h2>URL Shortener</h2>
   <form method="post">
      <input type="url" name="original_url" placeholder="Enter URL" required>
      <button type="submit" name="shorten">Shorten</button>
   </form>

   <?php
   if (isset($_POST['shorten'])) {
      $original_url = $_POST['original_url'];
      $shortened_url = shortenURL($original_url);

      echo "<p>Shortened URL: <a href='$shortened_url'>$shortened_url</a></p>";
   }

   function shortenURL($url)
   {
      $links = file_get_contents('links.json');
      $links = json_decode($links, true);

      if (!$links) {
         $links = array();
      }

      $key = generateKey();
      $links[$key] = $url;

      file_put_contents('links.json', json_encode($links));

      return "http://" . $_SERVER['HTTP_HOST'] . "/redirect.php?key=$key";
   }

   function generateKey()
   {
      return substr(md5(uniqid(rand(), true)), 0, 6);
   }
   ?>
</body>
</html>