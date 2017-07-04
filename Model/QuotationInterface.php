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

interface QuotationInterface extends CommonModelInterface, ResourceInterface
{
    /**
     * @return QuotationInterface
     */
    public function getItems();

    /**
     * @param QuotationInterface $items
     * @return QuotationInterface
     */
    public function setItems(QuotationInterface $items);

    /**
     * @return string
     */
    public function getReference();

    /**
     * @param string $reference
     * @return QuotationInterface
     */
    public function setReference($reference);

    /**
     * @return string
     */
    public function getName();


    /**
     * @param string $name
     * @return QuotationInterface
     */
    public function setName($name);

    /**
     * Add item
     *
     * @param QuotationItemInterface $item
     *
     * @return QuotationInterface
     */
    public function addChild(QuotationItemInterface $item);

    /**
     * Remove item
     *
     * @param QuotationItemInterface $item
     */
    public function removeChild(QuotationItemInterface $item);
}