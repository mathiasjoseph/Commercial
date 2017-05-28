<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 24/05/17
 * Time: 21:26
 */

namespace Miky\Component\Commercial\Model;


use Miky\Component\Core\Model\CommonModelInterface;
use Miky\Component\Core\Model\CommonModelTrait;

class Quotation implements CommonModelInterface
{
    Use CommonModelTrait;

    protected $items;


}