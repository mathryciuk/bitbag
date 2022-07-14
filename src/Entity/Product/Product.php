<?php

declare(strict_types=1);

namespace App\Entity\Product;
use App\Service\Colorable;
use App\Service\Color;


use Doctrine\ORM\Mapping as ORM;
use Sylius\Component\Core\Model\Product as BaseProduct;
use Sylius\Component\Product\Model\ProductTranslationInterface;

/**
 * @ORM\Entity
 * @ORM\Table(name="sylius_product")
 */
class Product extends BaseProduct implements Colorable
{

    private $color;

    public function Colorize(){

        $coloring = new Color();
       
        $this->color = $coloring->getRGBcolor(); 
    }
    protected function createTranslation(): ProductTranslationInterface
    {
        return new ProductTranslation();
    }

}
