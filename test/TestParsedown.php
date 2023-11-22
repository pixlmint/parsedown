<?php

use PixlMint\Parsedown\Parsedown;

class TestParsedown extends Parsedown
{
    public function getTextLevelElements()
    {
        return $this->textLevelElements;
    }
}
