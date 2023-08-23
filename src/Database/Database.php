<?php
/**
 * Project crawler-data-lottery
 * Created by PhpStorm
 * User: 713uk13m <dev@nguyenanhung.com>
 * Copyright: 713uk13m <dev@nguyenanhung.com>
 * Date: 19/06/2022
 * Time: 02:35
 */

namespace nguyenanhung\Crawlers\Your_Project\Database;

use nguyenanhung\Crawlers\Your_Project\BaseCore;
use nguyenanhung\MyDatabase\Model\BaseModel;

/**
 * Class Database
 *
 * @package   nguyenanhung\Crawlers\Your_Project\Database
 * @author    713uk13m <dev@nguyenanhung.com>
 * @copyright 713uk13m <dev@nguyenanhung.com>
 */
class Database extends BaseCore
{
    protected $database;

    /**
     * Function setDatabase
     *
     * @param array $database
     *
     * @return $this
     * @author   : 713uk13m <dev@nguyenanhung.com>
     * @copyright: 713uk13m <dev@nguyenanhung.com>
     * @time     : 23/08/2023 31:16
     */
    public function setDatabase(array $database = array()): Database
    {
        $this->database = $database;
        return $this;
    }

    /**
     * Function getDatabase
     *
     * @return mixed
     * @author   : 713uk13m <dev@nguyenanhung.com>
     * @copyright: 713uk13m <dev@nguyenanhung.com>
     * @time     : 23/08/2023 31:25
     */
    public function getDatabase()
    {
        return $this->database;
    }

    /**
     * Function connection
     *
     * @return \nguyenanhung\MyDatabase\Model\BaseModel
     * @author   : 713uk13m <dev@nguyenanhung.com>
     * @copyright: 713uk13m <dev@nguyenanhung.com>
     * @time     : 23/08/2023 31:29
     */
    public function connection(): BaseModel
    {
        $DB = new BaseModel();
        $DB->setDatabase($this->database);
        return $DB;
    }
}
