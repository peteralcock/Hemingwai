<?php
/**
 * AIKit\Dependencies\Qdrant PHP Client
 *
 * @since     Mar 2023
 * @author    Haydar KULEKCI <haydarkulekci@gmail.com>
 */

namespace AIKit\Dependencies\Qdrant;

class Config
{
    protected string $host;

    protected string $port;
    protected ?string $apiKey = null;

    public function __construct($host, $port = 6333)
    {
        $this->host = $host;
        $this->port = $port;
    }

    public function getDomain(): string
    {
        return $this->host . ':' . $this->port;
    }

    public function setApiKey($apiKey): Config
    {
        $this->apiKey = $apiKey;

        return $this;
    }

    public function getApiKey(): string
    {
        return $this->apiKey ?? '';
    }
}