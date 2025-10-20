<?php

class fileManagement
{
    public $fileName;

    public function __construct($fileName)
    {
        $this->fileName = $fileName;
        echo "File $fileName is created.\n";
    }

    public function doSomething()
    {
        echo "Doing something with the file $this->fileName.\n";
    }

    public function __destruct()
    {
        echo "File $this->fileName is closed.\n";
    }
}

$file = new fileManagement("example.txt");
$file->doSomething();


?>