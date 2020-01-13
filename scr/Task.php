    <?php

class Task
{
    public $description;
    public $isCompleted=false;

    public function __construct($description, $isCompleted)
    {
        $this->description=$description;
    }
    public function complete()
    {
        $this->isCompleted= true;
    }
}
$task1=new Task('hor','srunhor');
$task2=new Task('hor','srunhor');
var_dump($task1);
var_dump($task1->description);

var_dump($task2);
var_dump($task2->description);
$task2->complete();
var_dump($task2->isCompleted);
