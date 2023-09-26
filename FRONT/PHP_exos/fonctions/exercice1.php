<?php
function lien($chemin,$desc)
{
    echo ('<a href="'.$chemin.'">'.$desc.'</a>');
}
lien("https://www.reddit.com/", "Reddit Hug");

?>