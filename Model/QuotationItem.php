<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 24/05/17
 * Time: 21:26
 */

namespace Miky\Component\Commercial\Model;


use Miky\Component\Core\Model\CommonModelTrait;

class QuotationItem implements QuotationItemInterface
{
    Use CommonModelTrait;

    /**
     * @var mixed
     */
    protected $id;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $description;

    /**
     * @var float
     */
    protected $price;

    /**
     * @var QuotationInterface
     */
    protected $quotation;

    /**
     * @var integer
     */
    protected $quantity;

    /**
     * QuotationItem constructor.
     */
    public function __construct()
    {
        $this->quantity = 1;
    }


    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param float $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * @return int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @param int $quantity
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }

    /**
     * @return QuotationInterface
     */
    public function getQuotation()
    {
        return $this->quotation;
    }

    /**
     * @param QuotationInterface $quotation
     * @return QuotationItem
     */
    public function setQuotation(QuotationInterface $quotation)
    {
        $this->quotation = $quotation;
        return $this;
    }
}