<?php

declare(strict_types=1);


namespace Src\Folder;



class SortClass
{
    private $strategy;

    public $data;

    public function setName($data){
        $this->data = $data;
    }

    public function getName(){
        return $this->data;
    }
        
    


    public function __construct(Sort_Interface $strategy)
    {
        $this->strategy = $strategy;
    }

    //Usually, the Context allows replacing a Strategy object at runtime

    public function setStrategy(Sort_Interface $strategy)
    {
        $this->strategy = $strategy;
    }

    // The Context delegates some work to the Strategy object instead of
    //  * implementing multiple versions of the algorithm on its own.
    public function doSomeBusinessLogic(): void
    {   

        
        $data = array(1 => "PHP", 
        2 => "MySQL", 
        3 => "Apache",
        4 => "5",
        5 => "1",
        6 => "0"); 

        
        echo "Context: Sorting data using the strategy (not sure how it'll do it)\n";
        $result = $this->strategy->do_sort($data);
        echo  implode(",", $result) . "\n";
        
    }
}