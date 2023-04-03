<?php

namespace SetAva;

trait SetAva
{
    public function setAva($img){
        $imgUniqueName = md5(time()).'.'.explode('/',$img['type'])[1];
        $this->ava = $imgUniqueName;
        move_uploaded_file($img['tmp_name'], __DIR__ . '/../../../../public/Images/' . $imgUniqueName);
    }
}