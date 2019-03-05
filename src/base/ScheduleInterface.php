<?php
/**
 * Schedule plugin for CraftCMS 3
 *
 * @link      https://panlatent.com/
 * @copyright Copyright (c) 2018 panlatent@gmail.com
 */

namespace panlatent\schedule\base;

use craft\base\SavableComponentInterface;
use panlatent\schedule\Builder;

/**
 * Interface ScheduleInterface
 *
 * @package panlatent\schedule\base
 * @author Panlatent <panlatent@gmail.com>
 */
interface ScheduleInterface extends SavableComponentInterface
{
    /**
     * @param Builder $builder
     */
    public function build(Builder $builder);
}