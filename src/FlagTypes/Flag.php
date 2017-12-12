<?php
/**
 * Created by IntelliJ IDEA.
 * User: hofma
 * Date: 05.12.2017
 * Time: 09:03
 */

namespace webtechnik\flaggen\FlagTypes;
abstract class Flag {

    /*
     * private:     only the same class may access
     * public:      everybody may access
     * protected:   only same and inheriting classes may access
     */

    protected $name;
    protected $color;
    protected $width;
    protected $height;
    protected $price;

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getColor(): string
    {
        return $this->color;
    }

    /**
     * @return float
     */
    public function getWidth(): float
    {
        return $this->width;
    }

    /**
     * @return float
     */
    public function getHeight(): float
    {
        return $this->height;
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /* weil es extended wird
    public function getArea() : float
    {
        return $this->height*$this->width;
    }
*/

    /**
     * Flag constructor.
     * @param string $name Name of the flag
     * @param string $color color of the flag
     * @param float $width width of the flag in meter
     * @param float $height height of the flag in meter
     * @param float $price price in euro
     */
    public function __construct(string $name, string $color, float $width, float $height, float $price)
    {
        $this->name = $name;
        $this->color = $color;
        $this->width = $width;
        $this->height = $height;
        $this->price = $price;
    }

    public function __toString() : string
    {

        //$area = $this->getArea();
        ////Area: $area<br />
        $rv= <<<EOT
Name: $this->name<br />
Width: $this->width<br />
Height: $this->height<br />
Price: $this->price<br />
EOT;
        return $rv;
    }

}
