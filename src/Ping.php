<?php

declare(strict_types=1);

namespace Zwarthoorn\Ping;

use http\Exception\RuntimeException;
use Zwarthoorn\Ping\Entity\Url;
use Zwarthoorn\Ping\Service\PingService;

class Ping
{
    /**
     * @var Url $urlEntity
     */
    private $urlEntity;

    private $options;
    /**
     * @var PingService
     */
    private $pingService;

    public function __construct($url = '', array $options = [])
    {
        $this->createUrlEntity();
        if ($url !== '' && filter_var($url, FILTER_VALIDATE_URL)) {
            $this->urlEntity->addUrl($url);
        }

        $this->options = $options;
        $this->pingService = new PingService();
    }

    private function createUrlEntity(): Url {
        $this->urlEntity = new Url();
    }

    public function addUrl(string $url): self {

       if ($this->chekcIfValidUrl($url) === false) {
           throw new \RuntimeException('Not a good url.');
       }

        $this->urlEntity->addUrl($url);
        return $this;
    }

    public function addMultipleUrls(array $urlArray): self {
        foreach ($urlArray as $url){
            $this->addUrl($url);
        }

        return $this;
    }

    public function removeUrl($url): self {
        if ($url === null)
        {
            throw new RuntimeException('There is no url supplied');
        }

        $this->urlEntity->removeUrl($url);

        return $this;
    }

    private function chekcIfValidUrl(string $url) :bool {
        return filter_var($url, FILTER_VALIDATE_URL);
    }

    public function ping(string $url = null) {

        if ($url !== null){
            return $this->pingService->pingSingle($url);
        }
        return $this->pingService->ping($this->urlEntity);
    }

}
