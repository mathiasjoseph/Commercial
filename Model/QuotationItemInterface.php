<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 24/05/17
 * Time: 21:26
 */

namespace Miky\Component\Commercial\Model;


use Miky\Component\Core\Model\CommonModelInterface;
use Miky\Component\Resource\Model\ResourceInterface;

interface QuotationItemInterface extends CommonModelInterface, ResourceInterface
{
    /**
     * @return string
     */
    public function getName();

    /**
     * @param string $name
     */
    public function setName($name);

    /**
     * @return string
     */
    public function getDescription();

    /**
     * @param string $description
     */
    public function setDescription($description);

    /**
     * @return float
     */
    public function getPrice();

    /**
     * @param float $price
     */
    public function setPrice($price);

    /**
     * @return int
     */
    public function getQuantity();

    /**
     * @param int $quantity
     */
    public function setQuantity($quantity);

    /**
     * @return QuotationInterface
     */
    public function getQuotation();

    /**
     * @param QuotationInterface $quotation
     * @return QuotationItem
     */
    public function setQuotation(QuotationInterface $quotation);
}