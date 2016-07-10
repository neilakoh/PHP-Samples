<?php
    $tags = "tag1,tag2,tag3";

    $exploded_tags = explode(",", $tags);

    foreach( $exploded_tags as $elem ) {
         echo "$elem ";
    }