<?php
/*файл позволяет использовать наследование, 
чтобы легко изменять способ создания класса и 
помещать в него другой набор классов*/

class User{
public $data;
public function __construct($data)
{$this->data = $data;}}
?>
