<?php
/**
 * Schedule plugin for CraftCMS 3
 *
 * @link      https://panlatent.com/
 * @copyright Copyright (c) 2018 panlatent@gmail.com
 */

namespace panlatent\schedule\base;

/**
 * Trait ScheduleTrait
 *
 * @package panlatent\schedule\base
 * @author Panlatent <panlatent@gmail.com>
 */
trait ScheduleTrait
{
    /**
     * @var int|null
     */
    public $groupId;

    /**
     * @var string|null
     */
    public $name;

    /**
     * @var string|null
     */
    public $handle;

    /**
     * @var string|null
     */
    public $description;

    /**
     * @var string|null
     */
    public $minute;

    /**
     * @var string|null
     */
    public $hour;

    /**
     * @var string|null
     */
    public $day;

    /**
     * @var string|null
     */
    public $month;

    /**
     * @var string|null
     */
    public $week;

    /**
     * @var string|null
     */
    public $user;

    /**
     * @var string|null
     */
    public $timer;
}