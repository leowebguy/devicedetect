<?php
/**
 * Device Detect Plugin for Craft 3/4.
 *
 * @author Leo Leoncio
 */

namespace leowebguy\devicedetect\variables;

use Detection\MobileDetect as MobileDetectLib;

/**
 * MobileDetectVariable
 */
class DeviceDetectVariable
{
    // Private Properties
    // =========================================================================

    private $_deviceDetect;

    // Public Methods
    // =========================================================================

    /**
     * @return \Mobile_Detect|null
     */
    public function getDeviceDetect()
    {
        if ($this->_deviceDetect === null) {
            $this->_deviceDetect = new MobileDetectLib();
        }

        return $this->_deviceDetect;
    }

    /**
     * Returns true for any mobile device (including tablets!)
     *
     * @return bool
     */
    public function isMobile(): bool
    {
        return $this->getDeviceDetect()->isMobile();
    }

    /**
     * Returns true for tablets only
     *
     * @return bool
     */
    public function isTablet(): bool
    {
        return $this->getDeviceDetect()->isTablet();
    }

    /**
     * Returns true for phones only
     *
     * @return bool
     */
    public function isPhone(): bool
    {
        return $this->getDeviceDetect()->isMobile() && !$this->getDeviceDetect()->isTablet();
    }

    /**
     * Returns true for iOS
     *
     * @return mixed
     */
    public function isiOS(): bool
    {
        return $this->getDeviceDetect()->isiOS();
    }

    /**
     * Returns true for Android
     *
     * @return mixed
     */
    public function isAndroidOS(): bool
    {
        return $this->getDeviceDetect()->isAndroidOS();
    }

    /**
     * Get user agent
     *
     * @return null|string
     */
    public function getUserAgent()
    {
        return $this->getDeviceDetect()->getUserAgent();
    }
}
