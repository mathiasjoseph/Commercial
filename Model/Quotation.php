<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 24/05/17
 * Time: 21:26
 */

namespace Miky\Component\Commercial\Model;


use Doctrine\Common\Collections\ArrayCollection;
use Miky\Component\Core\Model\CommonModelTrait;

class Quotation implements QuotationInterface
{
    Use CommonModelTrait;

    /**
     * @var mixed
     */
    protected $id;

    /**
     * @var QuotationInterface
     */
    protected $items;

    /**
     * @var string
     */
    protected $reference;

    /**
     * @var string
     */
    protected $name;

    /**
     * Quotation constructor.
     */
    public function __construct()
    {
        $this->items = new ArrayCollection();
    }


    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @inheritdoc
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * @inheritdoc
     */
    public function setItems(QuotationInterface $items)
    {
        $this->items = $items;
        return $this;
    }

    /**
     * @inheritdoc
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * @inheritdoc
     */
    public function setReference($reference)
    {
        $this->reference = $reference;
        return $this;
    }

    /**
     * @inheritdoc
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @inheritdoc
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @inheritdoc
     */
    public function addChild(QuotationItemInterface $item)
    {
        $item->setQuotation($this);
        $this->items[] = $item;

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function removeChild(QuotationItemInterface $item)
    {
        $this->items->removeElement($item);
    }
}