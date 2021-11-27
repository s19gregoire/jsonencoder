<?php
require "type.php";
class routing
{
    public $url;
    public $default;
    public $styles;
    function parser($url)
    {
        $explode = explode("/", $url);
        var_dump($explode);
        $cla = new view;
        $cla->watcher($explode);

    }
}
class view
{
    public $see;
    function watcher($see)
    {
        $data = json_decode(file_get_contents("page/index.json"));
        $rendered = json_decode(file_get_contents("page/style_index.json"));
        var_dump($data);
        var_dump($rendered);
        argprint($data->content, $rendered);
    }
}