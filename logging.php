<?php

class LogFile
{
    public function __destruct()
    {
        echo "Destruct Called";
        file_put_contents($this->filename, $this->fcontents, FILE_APPEND);
    }
}