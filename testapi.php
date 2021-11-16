
<?php
require(__DIR__ . '/vendor/paralleldots/apis/autoload.php');
  set_api_key("oWbiJzj34eCBB3KvfMBgGrAsro3gvB54jYTseART02w");
# for single sentence
//echo emotion("I am trying to imagine you with a personality");

# for multiple sentence as array

$text_list = "[\"I am trying to imagine you with a personality\",\"This is shit\"]";
echo emotion_batch($text_list);

?>