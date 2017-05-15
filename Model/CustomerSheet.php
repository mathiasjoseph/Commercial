<?php
/**
 * Created by PhpStorm.
 * User: miky
 * Date: 01/12/16
 * Time: 10:43
 */

namespace Miky\Component\Commercial\Model;


use Miky\Component\Core\Model\CommonModelTrait;
use Miky\Component\User\Model\UserInfoTrait;

class CustomerSheet implements CustomerSheetInterface
{
    Use CommonModelTrait;

    Use UserInfoTrait;

    /**
     * @var CommercialAction[]
     */
    protected $commercialActions;

    /**
     * @return CommercialAction[]
     */
    public function getCommercialActions()
    {
        return $this->commercialActions;
    }

    /**
     * @param CommercialAction[] $commercialActions
     */
    public function setCommercialActions($commercialActions)
    {
        $this->commercialActions = $commercialActions;
    }




}