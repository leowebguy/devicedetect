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
use leowebguy\devicedetect\variables\DetectVariable;
use yii\base\Event;

class Detect extends Plugin
{
    // Properties
    // =========================================================================

    public bool $hasCpSection = false;

    public bool $hasCpSettings = false;

    // Public Methods
    // =========================================================================

    public function init()
    {
        parent::init();

        if (!$this->isInstalled) {
            return;
        }

        Event::on(
            CraftVariable::class,
            CraftVariable::EVENT_INIT,
            function (Event $event) {
                /** @var CraftVariable $variable */
                $variable = $event->sender;
                $variable->set('deviceDetect', DetectVariable::class);
            }
        );

        Craft::info(
            'Device Detect plugin loaded',
            __METHOD__
        );
    }
}
