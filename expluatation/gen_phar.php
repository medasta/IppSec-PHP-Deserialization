<?php
// Create the POP Chain

class TestClass
{
    public function __construct(){
        // Variables
    }
}

// Create the Phar Archive
$phar = new \Phar("test.phar");
$phar->startBuffering();
$phar->setStub("<?php __HALT_COMPILER(); ?>");

//Begin of serialization
$payload = new TestClass();
$phar->setMetadata($payload);

//Zip file within the phar archive
$phar->addFromString("test.txt", "test");
$phar->stopBuffering();
?>