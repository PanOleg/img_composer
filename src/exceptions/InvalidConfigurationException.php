<?php
namespace ok\tools\exceptions;

/**
 * @author Oleh Kryvko <olegkrivko@gmail.com>
 */
class InvalidConfigurationException extends \Exception
{
    /**
     * User friendly message
     *
     * @return string
     */
    public function getName()
    {
        return 'Invalid configuration';
    }
}