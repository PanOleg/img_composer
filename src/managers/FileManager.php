<?php
namespace ok\tools\managers;

/**
 * Manager for work with files
 *
 * @author Oleh Kryvko <olegkrivko@gmail.com>
 */
class FileManager
{
    /**
     * @var resource
     */
    protected $_instance;


    /**
     * @return resource
     */
    public function getInstance()
    {
        return $this->_instance;
    }

    /**
     * Get file resource
     *
     * @param string $file_name
     * @param string $mode
     * @throws \Exception
     */
    public function open($file_name, $mode)
    {
        $this->_instance = fopen($file_name, $mode);
        if (!$this->_instance) {
            throw new \Exception('Failed to open file resource!');
        }
    }

    /**
     * Close file resource
     *
     * @return bool
     */
    public function close()
    {
        return fclose($this->_instance);
    }

    /**
     * Helper method for building a full path to file
     *
     * @param string $path
     * @param string $file_name
     * @return string
     */
    public static function buildPathToFile($path, $file_name)
    {
        return $path . DIRECTORY_SEPARATOR . $file_name;
    }

    /**
     * Delete file
     *
     * @param string $file_name
     * @return bool
     */
    public static function deleteFile($file_name)
    {
        return unlink($file_name);
    }
}