<?hh

require "vendor/autoload.php";

for($i=0; $i<3; $i++) {
  $articles[] = new Article;
}

echo
<html>
  <head>
    <title>Test component</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
  </head>
  <body>
    <desktop:ui:category:articleList articles={$articles} />
  </body>
</html>;
