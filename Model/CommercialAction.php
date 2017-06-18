<?php
/**
 * Created by PhpStorm.
 * User: miky
 * Date: 11/05/17
 * Time: 22:09
 */

namespace Miky\Component\Commercial\Model;


use Doctrine\Common\Collections\ArrayCollection;
use Miky\Component\Category\Model\CategoryInterface;
use Miky\Component\Core\Model\CommonModelInterface;
use Miky\Component\Core\Model\CommonModelTrait;


class CommercialAction implements CommonModelInterface, CommercialActionInterface
{
    Use CommonModelTrait;

    const PRIORITY_LOW = 0;

    const PRIORITY_NORMAL = 1;

    const PRIORITY_HIGH = 2;

    const PRIORITY_URGENT = 3;

    /**
     * @var string
     */
    protected $title;

    /**
     * @var string
     */
    protected $report;

    /**
     * @var \DateTime
     */
    protected $actionDate;

    /**
     * @var CategoryInterface
     */
    protected $category;

    /**
     * @var \DateTime
     */
    protected $dunningDate;

    /**
     * @var integer
     */
    protected $priority;

    /**
     * @var CommercialActionWorkerInterface[]
     */
    protected $workers;

    /**
     * @var CommercialActionContactInterface[]
     */
    protected $contacts;

    /**
     * CommercialAction constructor.
     */
    public function __construct()
    {
        $this->workers = new ArrayCollection();
        $this->contacts = new ArrayCollection();
        $this->priority = self::PRIORITY_NORMAL;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     * @return CommercialActionInterface
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return string
     */
    public function getReport()
    {
        return $this->report;
    }

    /**
     * @param string $report
     * @return CommercialActionInterface
     */
    public function setReport($report)
    {
        $this->report = $report;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getActionDate()
    {
        return $this->actionDate;
    }

    /**
     * @param \DateTime $actionDate
     * @return CommercialActionInterface
     */
    public function setActionDate($actionDate)
    {
        $this->actionDate = $actionDate;
        return $this;
    }

    /**
     * @return CategoryInterface
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param CategoryInterface $category
     * @return CommercialActionInterface
     */
    public function setCategory($category)
    {
        $this->category = $category;
        return $this;
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
     * @return CommercialActionInterface
     */
    public function setDunningDate($dunningDate)
    {
        $this->dunningDate = $dunningDate;
        return $this;
    }

    /**
     * @return int
     */
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * @param int $priority
     * @return CommercialActionInterface
     */
    public function setPriority($priority)
    {
        $this->priority = $priority;
        return $this;
    }


    /**
     * @return CommercialActionWorkerInterface[]
     */
    public function getWorkers()
    {
        return $this->workers;
    }

    /**
     * @param CommercialActionWorkerInterface[] $workers
     * @return CommercialActionInterface
     */
    public function setWorkers($workers)
    {
        $this->workers = $workers;
        return $this;
    }

    /**
     * Add worker
     *
     * @param CommercialActionWorkerInterface $worker
     *
     * @return CommercialActionInterface
     */
    public function addWorker(CommercialActionWorkerInterface $worker)
    {
        $worker->setCommercialAction($this);
        $this->workers[] = $worker;

        return $this;
    }

    /**
     * Remove worker
     *
     * @param CommercialActionWorkerInterface $worker
     */
    public function removeWorker(CommercialActionWorkerInterface $worker)
    {
        $this->workers->removeElement($worker);
    }

    /**
     * @return CommercialActionContactInterface[]
     */
    public function getContacts()
    {
        return $this->contacts;
    }

    /**
     * @param CommercialActionContactInterface[] $contacts
     * @return CommercialActionInterface
     */
    public function setContacts($contacts)
    {
        $this->contacts = $contacts;
        return $this;
    }

    /**
     * Add contact
     *
     * @param CommercialActionContactInterface $contact
     *
     * @return CommercialActionInterface
     */
    public function addContact(CommercialActionContactInterface $contact)
    {
        $contact->setCommercialAction($this);
        $this->contacts[] = $contact;

        return $this;
    }

    /**
     * Remove contact
     *
     * @param CommercialActionContactInterface $contact
     */
    public function removeContact(CommercialActionContactInterface $contact)
    {
        $this->contacts->removeElement($contact);
    }
}