<?php

function render(string $path, array $variables = [])
{
    // ['var1' => 2, 'var2' => "Farid"]
    // $vae1 = 2;
    // $var2 = "Farid";

    extract($variables);
    ob_start();
    require 'templates/' . $path . '.html.php';
    $pageContent = ob_get_clean();

    require 'templates/layout.html.php';
}

function redirect(string $url): void
{
    header("Location: $url");
    exit();
}
