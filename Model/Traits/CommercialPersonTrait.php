<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 03/07/17
 * Time: 18:51
 */

namespace Miky\Component\Commercial\Model\Traits;


use Miky\Component\Commercial\Model\ContactSheetInterface;
use Miky\Component\User\Model\Traits\UserPersonInterface;
use Miky\Component\User\Model\Traits\UserPersonTrait;

trait CommercialPersonTrait
{
    Use UserPersonTrait;

    /**
     * @var ContactSheetInterface
     */
    protected $contactSheet;

    /**
     * @return ContactSheetInterface
     */
    public function getContactSheet()
    {
        return $this->contactSheet;
    }

    /**
     * @param ContactSheetInterface $contactSheet
     */
    public function setContactSheet(ContactSheetInterface $contactSheet = null)
    {
        $this->contactSheet = $contactSheet;
    }


    /**
     * @return mixed
     */
    public function getPerson(){
        $person = $this;
        switch ($this->personType) {
            case UserPersonInterface::TYPE_EMPLOYEE:
                $person = $this->getEmployee();
                break;
            case UserPersonInterface::TYPE_USER:
                $person = $this->getUser();
                break;
            case CommercialPersonInterface::TYPE_CONTACT_SHEET:
                $person = $this->getContactSheet();
                break;
        }
        return $person;
    }

    /**
     * @param string $personType
     */
    public function setPersonType($personType)
    {
        $this->personType = $personType;
        switch ($this->personType) {
            case UserPersonInterface::TYPE_EMPLOYEE:
                $this->setUser();
                $this->setContactSheet();
                break;
            case UserPersonInterface::TYPE_USER:
                $this->setEmployee();
                $this->setContactSheet();
                break;
            case CommercialPersonInterface::TYPE_CONTACT_SHEET:
                $this->setEmployee();
                $this->setUser();
                break;
            default:
                $this->setEmployee();
                $this->setUser();
                $this->setContactSheet();
        }
    }
}