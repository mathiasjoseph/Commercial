<?php
/**
 * Created by PhpStorm.
 * User: miky
 * Date: 11/05/17
 * Time: 22:09
 */

namespace Miky\Component\Commercial\Model;


use Miky\Component\Classification\Model\Category;
use Miky\Component\User\Model\Employee;
use Miky\Component\User\Model\User;

class CommercialAction
{
    /**
     * @var \DateTime
     */
    protected $actionDate;

    /**
     * @var Category
     */
    protected $category;

    /**
     * @var \DateTime
     */
    protected $dunningDate;

    /**
     * @var CustomerSheet
     */
    protected $customerSheet;

    /**
     * @var ProspectSheet
     */
    protected $prospectSheet;

    /**
     * @var integer
     */
    protected $priority;

    /**
     * @var Employee
     */
    protected $employeeAgent;

    /**
     * @var User
     */
    protected $userAgent;

    /**
     * @return \DateTime
     */
    public function getActionDate()
    {
        return $this->actionDate;
    }

    /**
     * @param \DateTime $actionDate
     */
    public function setActionDate($actionDate)
    {
        $this->actionDate = $actionDate;
    }

    /**
     * @return \DateTime
     */
    public function getDunningDate()
    {
        return $this->dunningDate;
    }

    /**
     * @param \DateTime $dunningDate
     */
    public function setDunningDate($dunningDate)
    {
        $this->dunningDate = $dunningDate;
    }

    /**
     * @return CustomerSheet
     */
    public function getCustomerSheet()
    {
        return $this->customerSheet;
    }

    /**
     * @param CustomerSheet $customerSheet
     */
    public function setCustomerSheet($customerSheet)
    {
        $this->customerSheet = $customerSheet;
    }

    /**
     * @return ProspectSheet
     */
    public function getProspectSheet()
    {
        return $this->prospectSheet;
    }

    /**
     * @param ProspectSheet $prospectSheet
     */
    public function setProspectSheet($prospectSheet)
    {
        $this->prospectSheet = $prospectSheet;
    }
}