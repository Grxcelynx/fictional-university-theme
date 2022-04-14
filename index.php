<?php

    function greet($name, $color) {
        echo "<p> Hi my name is $name and my fave color is $color </p>";
    }

    greet('Grace', 'Green');
    greet('Channing', 'Lavendar');

?>

<h1><?php bloginfo('name'); ?></h1>
<p><?php bloginfo('description');?></p>