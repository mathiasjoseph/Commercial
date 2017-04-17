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
use Miky\Component\User\Model\UserTypeInterface;
use Miky\Component\User\Model\UserTypeTrait;

class CustomerSheet implements CustomerSheetInterface, CommonModelInterface, UserTypeInterface
{
    Use CommonModelTrait;

    Use UserTypeTrait;

    /**
     * @var string
     */
    protected $firstname;

    /**
     * @var string
     */
    protected $lastname;

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
    protected $wish;

    /**
     * @var string
     */
    protected $state;

    /**
     * @var string
     */
    protected $comment;

    /**
     * @var int
     */
    protected $estimatePrice;

    /**
     * CustomerSheet constructor.
     */
    public function __construct()
    {
        $this->enabled = true;
    }


    /**
     * @return string
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * @param string $firstname
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
    }

    /**
     * @return string
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * @param string $lastname
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
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
    public function getWish()
    {
        return $this->wish;
    }

    /**
     * @param string $wish
     */
    public function setWish($wish)
    {
        $this->wish = $wish;
    }

    /**
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param string $state
     */
    public function setState($state)
    {
        $this->state = $state;
    }

    /**
     * @return string
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * @param string $comment
     */
    public function setComment($comment)
    {
        $this->comment = $comment;
    }

    /**
     * @return int
     */
    public function getEstimatePrice()
    {
        return $this->estimatePrice;
    }

    /**
     * @param int $estimatePrice
     */
    public function setEstimatePrice($estimatePrice)
    {
        $this->estimatePrice = $estimatePrice;
    }


}