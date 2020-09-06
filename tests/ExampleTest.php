<?php

namespace Dnabatchikov\LaravelAsciiFonts\Tests;

use Dnabatchikov\LaravelAsciiFonts\LaravelAsciiFonts;
use Orchestra\Testbench\TestCase;
use Dnabatchikov\LaravelAsciiFonts\LaravelAsciiFontsServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [LaravelAsciiFontsServiceProvider::class];
    }

    /**
     * @dataProvider dP
     * @test
     *
     * @param $actual
     * @param $expected
     */
    public function validValueTest($actual, $expected): void
    {
        self::assertSame(md5($this->r($expected)), md5($this->r($actual)));
    }

    private function r(string $text)
    {
        return str_replace(' ', '', $text);
    }

    public function dP(): array
    {
        return [
            [
                'expected' => md5($this->r("      db      `7MMM.     ,MMF'  .g8\"\"8q.   `7MM\"\"\"Mq.
     ;MM:       MMMb    dPMM  .dP'    `YM.   MM   `MM.
    ,V^MM.      M YM   ,M MM  dM'      `MM   MM   ,M9
   ,M  `MM      M  Mb  M' MM  MM        MM   MMmmdM9
   AbmmmqMA     M  YM.P'  MM  MM.      ,MP   MM
  A'     VM     M  `YM'   MM  `Mb.    ,dP'   MM
.AMA.   .AMMA..JML. `'  .JMML.  `\"bmmd\"'   .JMML.
                                  MMb
                                   `bood'
")),
                'actual'   => md5($this->r((new LaravelAsciiFonts('georgia', 'AMQP'))->display())),
            ],
        ];
    }
}
