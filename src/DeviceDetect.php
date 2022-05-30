<?php
/**
 * Device Detect Plugin for Craft 3/4.
 *
 * @author Leo Leoncio
 */

namespace leowebguy\devicedetect;

use Craft;
use craft\base\Plugin;
use craft\web\twig\variables\CraftVariable;
use leowebguy\devicedetect\variables\DeviceDetectVariable;
use yii\base\Event;

class DeviceDetect extends Plugin
{
    public static $plugin;

    /**
     * init.
     *
     * @return void
     */
    public function init()
    {
        parent::init();
        self::$plugin = $this;

        Event::on(
            CraftVariable::class,
            CraftVariable::EVENT_INIT,
            function (Event $event) {
                /** @var CraftVariable $variable */
                $variable = $event->sender;
                $variable->set('deviceDetect', DeviceDetectVariable::class);
            }
        );

        Craft::info(
            Craft::t(
                'device-detect',
                '{name} plugin loaded',
                ['name' => $this->name]
            ),
            __METHOD__
        );
    }
}
