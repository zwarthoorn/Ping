<?php

declare(strict_types=1);

namespace Zwarthoorn\Ping\Entity;


class Url
{
    private $url;

    /**
     * @return mixed
     */
    public function getUrl() :array
    {
        return $this->url;
    }

    /**
     * @param mixed $url
     * @return url
     */
    public function addUrl($url): self
    {
        $this->url[] = $url;
        return $this;
    }

    public function removeUrl($result): self
    {
        unset($this->url[array_search($result, $this->url,[FALSE])]);

        return $this;
    }
}