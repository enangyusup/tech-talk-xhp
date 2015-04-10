<?hh

require "vendor/autoload.php";

$like_link = 'http://liputan6.com';
$post =
  <div class="content">
    <h2>Hello Word</h2>
    <p><span>Hey there.</span></p>
    <a href={$like_link}>Like</a>
  </div>;

echo $post;

