<?php

namespace PlayPatterns\Behavioral\ChainResponsibility;

class BaseHandler implements Handler
{

    protected $free;
    /**
     * @var Handler|null
     */
    private $nextHandler;

    public function __construct($free)
    {
        $this->free = $free;
        $this->nextHandler = null;
    }

    public function setNext(Handler $handler): Handler
    {
        $this->nextHandler = $handler;
        return $handler;
    }

    public function handle(Parking $request)
    {
        if ($this->nextHandler) {
            return $this->nextHandler->handle($request);
        }

        return null;
    }

}
