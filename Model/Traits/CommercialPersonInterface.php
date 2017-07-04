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

interface CommercialPersonInterface extends UserPersonInterface
{
    const TYPE_CONTACT_SHEET = "contact_sheet";

    /**
     * @return ContactSheetInterface
     */
    public function getContactSheet();

    /**
     * @param ContactSheetInterface $contactSheet
     */
    public function setContactSheet(ContactSheetInterface $contactSheet = null);
}