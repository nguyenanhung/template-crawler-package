<?php
namespace nguyenanhung\Crawlers\Your_Project;

/**
 * Class BaseCore
 *
 * @package   nguyenanhung\Crawlers\Your_Project
 * @author    713uk13m <dev@nguyenanhung.com>
 * @copyright 713uk13m <dev@nguyenanhung.com>
 */
class BaseCore
{
    const VERSION = '0.0.1';

    public function getVersion(): string
    {
        return self::VERSION;
    }
}
