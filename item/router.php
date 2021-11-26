<?php
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
        var_dump(json_decode(file_get_contents("page/index.json")));
    }
}