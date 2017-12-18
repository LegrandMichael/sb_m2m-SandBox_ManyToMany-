<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PurchaseProduct
 *
 * @ORM\Table(name="npp_nn_pur_pro")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PurchaseProductRepository")
 */
class PurchaseProduct
{

    /**
     * @var int
     *
     * @ORM\Column(name="npp_nn_pur_pro_oid", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var float
     *
     * @ORM\Column(name="npp_nn_pur_pro_quantity", type="float")
     */
    private $quantity;

    /**
     * Many Features have One Product.
     * Many PurchaseProducts have One Purchase
     * @ORM\ManyToOne(targetEntity="Purchase", inversedBy="purchaseProducts")
     * @ORM\JoinColumn(name="pur_oid", referencedColumnName="pur_oid")
     */
    private $purchase;

    /**
     * @ORM\ManyToOne(targetEntity="Product")
     * @ORM\JoinColumn(name="pro_oid", referencedColumnName="pro_oid")
     */
    private $product;



    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set quantity
     *
     * @param float $quantity
     *
     * @return PurchaseProduct
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Get quantity
     *
     * @return float
     */
    public function getQuantity()
    {
        return $this->quantity;
    }
}

