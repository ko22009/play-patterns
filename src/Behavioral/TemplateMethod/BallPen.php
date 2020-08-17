<?php

namespace PlayPatterns\Behavioral\TemplateMethod;

class BallPen extends Pen
{

    public function getStickerAccess()
    {
        return is_callable([$this, 'setSticker']);
    }

    protected function buildHandle()
    {
        $this->handle = true;
    }

}