<?php
/**
 * Register for Smart Objects.
 *
 */
namespace HDNET\Autoloader;

/**
 * Register for Smart Objects.
 */
class SmartObjectRegister
{
    /**
     * Register for smart object information.
     *
     * @var array
     */
    protected static $smartObjectRegistry = [];

    /**
     * Add a model to the register.
     *
     * @param $modelName
     */
    public static function register($modelName)
    {
        if (!in_array($modelName, self::$smartObjectRegistry)) {
            self::$smartObjectRegistry[] = $modelName;
        }
    }

    /**
     * Get the register content.
     *
     * @return array
     */
    public static function getRegister()
    {
        return self::$smartObjectRegistry;
    }
}
