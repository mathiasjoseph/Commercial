<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 16/06/17
 * Time: 05:03
 */

namespace Miky\Component\Commercial\Model;


use Miky\Component\User\Model\EmployeeInterface;
use Miky\Component\User\Model\UserInterface;

interface CommercialActionWorkerInterface
{
    /**
     * @return CommercialActionInterface
     */
    public function getCommercialAction();

    /**
     * @param CommercialActionInterface $commercialAction
     */
    public function setCommercialAction($commercialAction);

    /**
     * @return string
     */
    public function getType();

    /**
     * @param string $type
     */
    public function setType($type);

    /**
     * @return EmployeeInterface
     */
    public function getEmployee();

    /**
     * @param EmployeeInterface $employee
     */
    public function setEmployee($employee);

    /**
     * @return UserInterface
     */
    public function getUser();

    /**
     * @param UserInterface $user
     */
    public function setUser($user);

    /**
     * @return ContactSheetInterface
     */
    public function getContactSheet();

    /**
     * @param ContactSheetInterface $contactSheet
     */
    public function setContactSheet($contactSheet);
}