<?php
namespace ok\tools\exceptions;

/**
 * @author Oleh Kryvko <olegkrivko@gmail.com>
 */
class NotAllowedFileExtensionException extends \Exception
{
    /**
     * User friendly message
     *
     * @return string
     */
    public function getName()
    {
        return 'Not allowed file extension!';
    }
}