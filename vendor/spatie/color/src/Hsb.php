<?php

namespace Spatie\Color;

class Hsb implements Color
{
    /** @var float */
    protected $hue;
    protected $saturation;
    protected $brightness;

    public function __construct(float $hue, float $saturation, float $brightness)
    {
        Validate::hsbValue($hue, 'hue');
        Validate::hsbValue($saturation, 'saturation');
        Validate::hsbValue($brightness, 'brightness');

        $this->hue = $hue;
        $this->saturation = $saturation;
        $this->brightness = $brightness;
    }

    public static function fromString(string $string)
    {
        Validate::hsbColorString($string);

        $matches = null;
        preg_match('/hs[vb]\( *(-?\d{1,3}) *, *(\d{1,3})%? *, *(\d{1,3})%? *\)/i', $string, $matches);

        return new static($matches[1], $matches[2], $matches[3]);
    }

    public function hue(): float
    {
        return $this->hue;
    }

    public function saturation(): float
    {
        return $this->saturation;
    }

    public function brightness(): float
    {
        return $this->brightness;
    }

    public function red(): int
    {
        return Convert::hsbValueToRgb($this->hue, $this->saturation, $this->brightness)[0];
    }

    public function green(): int
    {
        return Convert::hsbValueToRgb($this->hue, $this->saturation, $this->brightness)[1];
    }

    public function blue(): int
    {
        return Convert::hsbValueToRgb($this->hue, $this->saturation, $this->brightness)[2];
    }

    public function toCIELab(): CIELab
    {
        return $this->toRgb()->toCIELab();
    }

    public function toCmyk(): Cmyk
    {
        return $this->toRgb()->toCmyk();
    }

    public function toHsb(): Hsb
    {
        return new self($this->hue, $this->saturation, $this->brightness);
    }

    public function toHex(string $alpha = 'ff'): Hex
    {
        return new Hex(
            Convert::rgbChannelToHexChannel($this->red()),
            Convert::rgbChannelToHexChannel($this->green()),
            Convert::rgbChannelToHexChannel($this->blue()),
            $alpha
        );
    }

    public function toHsl(): Hsl
    {
        return $this->toRgb()->toHsl();
    }

    public function toHsla(float $alpha = 1): Hsla
    {
        return $this->toRgb()->toHsla($alpha);
    }

    public function toRgb(): Rgb
    {
        return new Rgb($this->red(), $this->green(), $this->blue());
    }

    public function toRgba(float $alpha = 1): Rgba
    {
        return new Rgba($this->red(), $this->green(), $this->blue(), $alpha);
    }

    public function toXyz(): Xyz
    {
        return $this->toRgb()->toXyz();
    }

    public function __toString(): string
    {
        $hue = round($this->hue);
        $saturation = round($this->saturation);
        $brightness = round($this->brightness);

        return "hsb({$hue},{$saturation}%,{$brightness}%)";
    }
}
