<?php

function view(string $view, array $data = [])
{
    $path = dirname(__FILE__, 2).'/views';

    $templates = new League\Plates\Engine($path);

    echo $templates->render($view, $data);
}
