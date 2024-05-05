<?php

class ParentClass
{
    public string $text = "some text";

    public function print() : void
    {
        echo ucfirst($this->text) . PHP_EOL;
    }


}

