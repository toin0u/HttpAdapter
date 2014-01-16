<?php

/**
 * This file is part of the HttpAdapter library.
 *
 * (c) Antoine Corcy <contact@sbin.dk>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace HttpAdapter;

/**
 * CurlHttpAdapter class.
 *
 * @author William Durand <william.durand1@gmail.com>
 * @author Antoine Corcy <contact@sbin.dk>
 */
class CurlHttpAdapter implements HttpAdapterInterface
{
    /**
     * @var integer
     */
    private $connectionTimeout;

    /**
     * @var integer
     */
    private $timeout;

    /**
     * Constructor.
     *
     * @param integer $connectionTimeout cURL connection timeout in seconds (optional).
     * @param integer $timeout           cURL timeout in seconds (optional).
     */
    public function __construct($connectionTimeout = null, $timeout = null)
    {
        $this->connectionTimeout = $connectionTimeout;
        $this->timeout           = $timeout;
    }

    /**
     * {@inheritDoc}
     */
    public function getContent($url)
    {
        $c = curl_init();
        curl_setopt($c, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($c, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($c, CURLOPT_URL, $url);

        if (is_int($this->connectionTimeout)) {
            curl_setopt($c, CURLOPT_CONNECTTIMEOUT, $this->connectionTimeout);
        }

        if (is_int($this->timeout)) {
            curl_setopt($c, CURLOPT_TIMEOUT, $this->timeout);
        }

        $content = curl_exec($c);
        curl_close($c);

        if (false === $content) {
            $content = null;
        }

        return $content;
    }

    /**
     * {@inheritDoc}
     */
    public function getName()
    {
        return 'curl';
    }
}
