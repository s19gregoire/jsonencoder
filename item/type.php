<?php
function argprint($content, $file)
{
    var_dump($content);
    echo "<head>";
    echo "<link rel='stylesheet' href='page/index.css'>";
    echo "</head>";
    echo "<".$file->title.">".$content->a->title."</".$file->title.">";
    echo "<".$file->description.">".$content->a->description."</".$file->description.">";
}