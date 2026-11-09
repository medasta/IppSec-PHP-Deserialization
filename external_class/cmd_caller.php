<?php

class cmdCaller
{
    public $cmdName;
    public $cmdArgs;

    public function execute(){
        call_user_func($this->cmdName, $this->cmdArgs);
    }
}

?>