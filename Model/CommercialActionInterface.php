<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 16/06/17
 * Time: 12:24
 */

namespace Miky\Component\Commercial\Model;


use Miky\Component\Category\Model\CategoryInterface;

interface CommercialActionInterface
{
    /**
     * @return string
     */
    public function getTitle();

    /**
     * @param string $title
     * @return CommercialActionInterface
     */
    public function setTitle($title);

    /**
     * @return string
     */
    public function getReport();

    /**
     * @param string $report
     * @return CommercialActionInterface
     */
    public function setReport($report);

    /**
     * @return \DateTime
     */
    public function getActionDate();

    /**
     * @param \DateTime $actionDate
     * @return CommercialActionInterface
     */
    public function setActionDate($actionDate);

    /**
     * @return CategoryInterface
     */
    public function getCategory();

    /**
     * @param CategoryInterface $category
     * @return CommercialActionInterface
     */
    public function setCategory($category);

    /**
     * @return \DateTime
     */
    public function getDunningDate();

    /**
     * @param \DateTime $dunningDate
     * @return CommercialActionInterface
     */
    public function setDunningDate($dunningDate);

    /**
     * @return int
     */
    public function getPriority();

    /**
     * @param int $priority
     * @return CommercialActionInterface
     */
    public function setPriority($priority);


    /**
     * @return CommercialActionWorkerInterface[]
     */
    public function getWorkers();

    /**
     * @param CommercialActionWorkerInterface[] $workers
     * @return CommercialActionInterface
     */
    public function setWorkers($workers);

    /**
     * Add worker
     *
     * @param CommercialActionWorkerInterface $worker
     *
     * @return CommercialActionInterface
     */
    public function addWorker(CommercialActionWorkerInterface $worker);

    /**
     * Remove worker
     *
     * @param CommercialActionWorkerInterface $worker
     */
    public function removeWorker(CommercialActionWorkerInterface $worker);

    /**
     * @return CommercialActionContactInterface[]
     */
    public function getContacts();

    /**
     * @param CommercialActionContactInterface[] $contacts
     * @return CommercialActionInterface
     */
    public function setContacts($contacts);

    /**
     * Add contact
     *
     * @param CommercialActionContactInterface $contact
     *
     * @return CommercialActionInterface
     */
    public function addContact(CommercialActionContactInterface $contact);

    /**
     * Remove contact
     *
     * @param CommercialActionContactInterface $contact
     */
    public function removeContact(CommercialActionContactInterface $contact);
}