<?php

declare(strict_types=1);

namespace Src\Folder;

require_once '../autoloader.php';


$context = new SortClass(new AscendingClass);
echo "Client: SortClass is set to normal sorting.\n";
$context->doSomeBusinessLogic();

echo "\n";
echo "<hr>";

echo "Client: SortClass is set to reverse sorting.\n";
$context->setStrategy(new DescendingClass);
$context->doSomeBusinessLogic();



