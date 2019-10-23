<?php

declare(strict_types=1);

namespace Src\Folder;

require_once '../vendor/autoload.php';


$context = new SortClass(new AscendingClass);
echo "Client: SortClass is set to normal sorting.\n";
$context->sorting_array();

echo "\n";
echo "<hr>";

echo "Client: SortClass is set to reverse sorting.\n";
$context->setmethod(new DescendingClass);
$context->sorting_array();



