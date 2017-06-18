<?php
/**
 * Created by PhpStorm.
 * User: miky
 * Date: 01/12/16
 * Time: 10:43
 */

namespace Miky\Component\Commercial\Model;


use Miky\Component\Location\Model\LocationInterface;

interface CompanySheetInterface
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
    public function getEmail();

    /**
     * @param string $email
     */
    public function setEmail($email);

    /**
     * @return string
     */
    public function getPhone();

    /**
     * @param string $phone
     */
    public function setPhone($phone);

    /**
     * @return string
     */
    public function getPhoneCode();

    /**
     * @param string $phoneCode
     */
    public function setPhoneCode($phoneCode);

    /**
     * @return string
     */
    public function getCompanyNumber();

    /**
     * @param string $companyNumber
     */
    public function setCompanyNumber($companyNumber);

    /**
     * @return LocationInterface
     */
    public function getAddress();

    /**
     * @param LocationInterface $address
     */
    public function setAddress($address);
}