<?php

namespace PlayPatterns\Principles\DependencyInversion;

class PDFBook implements EBook
{

    function read()
    {
        return "reading a pdf book.";
    }

}
