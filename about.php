<?php
require_once __DIR__ . '/autoload.php';

use SimpleApp\Configs;
use SimpleApp\Utils;

$baseConfig = new Configs\Base;
$viewEngine = new Utils\ViewEngine(__DIR__);
$jsonLoader = new Utils\JsonLoader(__DIR__);
$markdownLoader = new Utils\MarkdownLoader(__DIR__);

$mdText = $markdownLoader->load_page('about');
/* For demonstration purpose */
$mdHtml = $markdownLoader->convert_markdown_html($mdText);
/* END For demonstration purpose */

$variables = [
    'currentPage' => 'about',
    'mdText' => $mdText,

    /* For demonstration purpose */
    'mdHtml' => $mdHtml,
];

$variables = array_merge($baseConfig->getBaseInfo(), $variables);

echo $viewEngine->getEngine()->run('pages.about', $variables);
