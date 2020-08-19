<?php

namespace PlayPatterns\Principles\DependencyInversion;

use PHPUnit\Framework\TestCase;
use TypeError;

class EBookTest extends TestCase
{

    function testEBookReaderIncorrectCanReadOnlyPDFBook()
    {
        $this->expectException(TypeError::class);
        $b = new MobiBook();
        $r = new EBookReaderIncorrect($b);
    }

    function testCanReadPDFBook()
    {
        $b = new PDFBook();
        $r = new EBookReader($b);

        $this->assertMatchesRegularExpression('/pdf book/', $r->read());
    }

    function testCanReadMobiBook()
    {
        $b = new MobiBook();
        $r = new EBookReader($b);

        $this->assertMatchesRegularExpression('/mobi book/', $r->read());
    }

}
