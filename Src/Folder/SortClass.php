<?php

declare(strict_types=1);


namespace Src\Folder;


class SortClass
{
    private $method;
    
    public function __construct(Sort_Interface $method)
    {
        $this->method = $method;
    }

    //Usually, the Context allows replacing a Strategy object at runtime
    public function setmethod(Sort_Interface $method)
    {
        $this->method = $method;
    }

    // The Context delegates some work to the Strategy object instead of
    //  * implementing multiple versions of the algorithm on its own.
    public function sorting_array(): void
    {   

        
        $data = array(1 => "PHP", 
        2 => "MySQL", 
        3 => "Apache",
        4 => "5",
        5 => "1",
        6 => "0"); 

        
        echo "Context: Sorting data using the strategy (not sure how it'll do it)\n";
        $result = $this->method->do_sort($data);
        echo  implode(",", $result) . "\n";
        
    }
}