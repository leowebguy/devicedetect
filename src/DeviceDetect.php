<?php
/**
 * Craft plugin for detecting devices, OS, bots and more
 *
 * @author     Leo Leoncio
 * @see        https://github.com/leowebguy
 * @copyright  Copyright (c) 2021, leowebguy
 * @license    MIT
 */

namespace leowebguy\devicedetect;

use Craft;
use craft\base\Plugin;
use craft\web\twig\variables\CraftVariable;
use leowebguy\devicedetect\variables\DeviceDetectVariable;
use yii\base\Event;

class DeviceDetect extends Plugin
{
    // Properties
    // =========================================================================

    public static $plugin;

    // Public Methods
    // =========================================================================

    public function init()
    {
        parent::init();
        self::$plugin = $this;

        if (!$this->isInstalled) {
            return;
        }

        /**
         * Craft Variable
         */
        Event::on(
            CraftVariable::class,
            CraftVariable::EVENT_INIT,
            function (Event $event) {
                /** @var CraftVariable $variable */
                $variable = $event->sender;
                $variable->set('deviceDetect', DeviceDetectVariable::class);
            }
        );

        /**
         * Log info
         */
        Craft::info(
            'Device Detect plugin loaded',
            __METHOD__
        );
    }
}
