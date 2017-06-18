<?php
/**
 * Created by PhpStorm.
 * User: miky
 * Date: 01/12/16
 * Time: 10:43
 */

namespace Miky\Component\Commercial\Model;

use Miky\Component\Core\Model\CommonModelInterface;
use Miky\Component\Core\Model\CommonModelTrait;
use Miky\Component\Location\Model\LocationInterface;

class CompanySheet implements CommonModelInterface
{
    Use CommonModelTrait;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $companyNumber;

    /**
     * @var string
     */
    protected $email;

    /**
     * @var string
     */
    protected $phone;

    /**
     * @var string
     */
    protected $phoneCode;

    /**
     * @var LocationInterface
     */
    protected $address;

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
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param string $phone
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    /**
     * @return string
     */
    public function getPhoneCode()
    {
        return $this->phoneCode;
    }

    /**
     * @param string $phoneCode
     */
    public function setPhoneCode($phoneCode)
    {
        $this->phoneCode = $phoneCode;
    }

    /**
     * @return string
     */
    public function getCompanyNumber()
    {
        return $this->companyNumber;
    }

    /**
     * @param string $companyNumber
     */
    public function setCompanyNumber($companyNumber)
    {
        $this->companyNumber = $companyNumber;
    }

    /**
     * @return LocationInterface
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param LocationInterface $address
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }
}