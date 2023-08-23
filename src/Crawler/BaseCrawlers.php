<?php
namespace nguyenanhung\Crawlers\Your_Project\Crawler;

use Symfony\Component\HttpClient\HttpClient;
use nguyenanhung\Libraries\Crawler\Client;
use nguyenanhung\MyDebug\Benchmark;
use nguyenanhung\Crawlers\Your_Project\BaseCore;

/**
 * Class BaseCrawlers
 *
 * @package   nguyenanhung\Crawlers\Your_Project\Crawler
 * @author    713uk13m <dev@nguyenanhung.com>
 * @copyright 713uk13m <dev@nguyenanhung.com>
 */
class BaseCrawlers extends BaseCore
{
    /** @var \nguyenanhung\Libraries\Crawler\Client $client */
    protected $client;
    protected $dateFiltered = 'today';
    protected $benchmark;
    protected $config;

    /**
     * BaseCrawlers constructor.
     *
     * @author   : 713uk13m <dev@nguyenanhung.com>
     * @copyright: 713uk13m <dev@nguyenanhung.com>
     */
    public function __construct()
    {
        $this->client = new Client(HttpClient::create(['timeout' => 690]));
        $this->benchmark = new Benchmark();
    }

    /**
     * Function getClient
     *
     * @return \nguyenanhung\Libraries\Crawler\Client
     * @author   : 713uk13m <dev@nguyenanhung.com>
     * @copyright: 713uk13m <dev@nguyenanhung.com>
     * @time     : 14/08/2022 33:29
     */
    public function getClient(): Client
    {
        return $this->client;
    }

    public function setConfig(array $config = array()): self
    {
        $this->config = $config;

        return $this;
    }

    public function setDateFiltered($dateFiltered): self
    {
        $this->dateFiltered = $dateFiltered;

        return $this;
    }
}
