<?php
namespace TDApi;

class LogConfiguration {
    const LVL_FATAL_ERROR = 0;
    const LVL_ERROR = 1;
    const LVL_WARNING = 2;
    const LVL_INFO = 3;
    const LVL_DEBUG = 4;
    const LVL_VERBOSE_DEBUG = 5;
    const LVL_ALL = 1024;

    /**
     * @param string $logFilePath
     * @return int
     */
    public static function setLogFilePath(string $logFilePath):int
    {
    }

    /**
     * @param int $logMaxFileSize
     */
    public static function setLogMaxFileSize(int $logMaxFileSize)
    {
    }

    /**
     * @param int $logVerbosityLevel
     */
    public static function setLogVerbosityLevel(int $logVerbosityLevel)
    {
    }
}