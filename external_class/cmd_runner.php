<?php

include 'cmd_caller.php';

class TaskRunner
{
    public $task;

    public function __destruct()
    {
        $this->task->execute();
    }
}
?>