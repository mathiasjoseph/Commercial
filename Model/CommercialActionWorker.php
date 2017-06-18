<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 16/06/17
 * Time: 05:03
 */

namespace Miky\Component\Commercial\Model;


use Miky\Component\Core\Model\CommonModelInterface;
use Miky\Component\Core\Model\CommonModelTrait;
use Miky\Component\User\Model\EmployeeInterface;
use Miky\Component\User\Model\UserInterface;

class CommercialActionWorker implements CommonModelInterface, CommercialActionWorkerInterface
{
    Use CommonModelTrait;

    const TYPE_EMPLOYEE = "employee";

    const TYPE_USER = "user";

    const TYPE_CONTACT_SHEET = "contact_sheet";

    /**
     * @var EmployeeInterface
     */
    protected $employee;

    /**
     * @var string
     */
    protected $type;

    /**
     * @var UserInterface
     */
    protected $user;

    /**
     * @var ContactSheetInterface
     */
    protected $contactSheet;

    /**
     * @var CommercialActionInterface
     */
    protected $commercialAction;

    /**
     * @return CommercialActionInterface
     */
    public function getCommercialAction()
    {
        return $this->commercialAction;
    }

    /**
     * @param CommercialActionInterface $commercialAction
     */
    public function setCommercialAction($commercialAction)
    {
        $this->commercialAction = $commercialAction;
    }


    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return EmployeeInterface
     */
    public function getEmployee()
    {
        return $this->employee;
    }

    /**
     * @param EmployeeInterface $employee
     */
    public function setEmployee($employee)
    {
        $this->employee = $employee;
    }

    /**
     * @return UserInterface
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param UserInterface $user
     */
    public function setUser($user)
    {
        $this->user = $user;
    }

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
    public function setContactSheet($contactSheet)
    {
        $this->contactSheet = $contactSheet;
    }


}