<?php

namespace PlayPatterns\Principles\DependencyInversion;

class MobiBook implements EBook
{

    function read()
    {
        return "reading a mobi book.";
    }

}
