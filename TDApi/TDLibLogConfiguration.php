<?php

namespace TDApi;

/**
 * Class TDLibLogConfiguration
 * @package TDApi
 */
class TDLibLogConfiguration
{
    /**
     * @var int
     */
    const LVL_FATAL_ERROR = 0;
    /**
     * @var int
     */
    const LVL_ERROR = 1;
    /**
     * @var int
     */
    const LVL_WARNING = 2;
    /**
     * @var int
     */
    const LVL_INFO = 3;
    /**
     * @var int
     */
    const LVL_DEBUG = 4;
    /**
     * @var int
     */
    const LVL_VERBOSE_DEBUG = 5;
    /**
     * @var int
     */
    const LVL_ALL = 1024;

    /**
     * @param string $logFilePath
     * @return int
     */
    public function setLogFilePath(string $logFilePath): int {}

    /**
     * @param int $logMaxFileSize
     * @return void
     */
    public function setLogMaxFileSize(int $logMaxFileSize): void {}

    /**
     * @param int $logVerbosityLevel
     * @return void
     */
    public function setLogVerbosityLevel(int $logVerbosityLevel): void {}
}
