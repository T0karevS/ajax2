<?php
//foreach (array_reverse($posts) as $post ):
//?>
<!--<div class="blog">-->
<!--<p class="blog_text">--><?//= $post['text'] ?><!--</p>-->
<!--<!--<img src="-->--><?////= $post['image']?><!--<!--" alt="kartinka posta" width="200" height="200">-->-->
<!--</div>-->
<?php
//endforeach;

    require 'send.php';
    foreach (array_reverse($posts) as $post ):
        echo $post = "<p class="text1">"