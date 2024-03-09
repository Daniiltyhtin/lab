<?php 

class File {
    public $file; //file-name
    public $fp; //file-pointer

    public function __construct($file, $fp)
    {
        $this->file = $file;
        if(!is_writable($this -> file)){
            echo "Файл {$this -> file} недоступен для записи";
            exit;
        }else{
            $this -> fp = fopen($this -> file, 'a');
        }
    }
    
    public function __destruct()
    {
        fclose($this -> fp);
    }

    public function write(){
        
    }



}