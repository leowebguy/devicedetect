<?php

/**
 * Craft plugin for detecting devices, OS, bots and more
 *
 * @author     Leo Leoncio
 * @see        https://github.com/leowebguy
 * @copyright  Copyright (c) 2024, leowebguy
 */

namespace leowebguy\devicedetect;

use Craft;
use craft\base\Plugin;
use craft\web\twig\variables\CraftVariable;
use leowebguy\devicedetect\variables\DetectVariable;
use yii\base\Event;

/**
 * @method static Detect|null getInstance()
 */
class Detect extends Plugin
{
    public bool $hasCpSection = false;

    public bool $hasCpSettings = false;

    public function init(): void
    {
        parent::init();

        if (!$this->isInstalled) {
            return;
        }

        Event::on(
            CraftVariable::class,
            CraftVariable::EVENT_INIT,
            static function(Event $event): void {
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
