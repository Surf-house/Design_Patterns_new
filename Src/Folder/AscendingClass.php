<?php

declare(strict_types=1);

namespace Src\Folder;



//the code below for up way class

class AscendingClass implements Sort_Interface
{
    public function do_sort(array $data): array
    {
        sort($data);

        return $data;
    }
}