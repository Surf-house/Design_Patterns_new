<?php

declare(strict_types=1);

namespace Src\Folder;

interface Sort_Interface 
{
    public function do_sort(array $data): array;
}