<?php

namespace Dnabatchikov\LaravelAsciiFonts;

class LaravelAsciiFonts
{
    /**
     * @var array
     */
    private $font;

    /**
     * @var string
     */
    private $text;

    private $processedText = '';

    /**
     * LaravelAsciiFonts constructor.
     *
     * @param string $font
     * @param string $text
     */
    public function __construct(string $font, string $text)
    {
        $this->font = include('FontLibrary/' . $font . '.php');
        $this->text = $text;

        $this->prepare();
    }

    public function display(): string
    {
        return $this->processedText;
    }

    private function prepare()
    {
        $preparedText = collect(mb_str_split($this->text));

        for ($i = 0; $this->font['kegle'] > $i; $i++) {
            $preparedText->each(function (string $letter) use ($i) {
                $this->processedText .= $this->font[$letter][$i];
            });
            $this->processedText .= PHP_EOL;
        }
    }
}
