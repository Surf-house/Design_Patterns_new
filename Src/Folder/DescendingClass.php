<?php

declare(strict_types=1);

namespace Src\Folder;



//this class for down way

class DescendingClass implements Sort_Interface
{
    public function do_sort(array $data): array
    {
        rsort($data);

        return $data;
    }
}