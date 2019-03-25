<?php

declare(strict_types=1);

namespace Zwarthoorn\Ping\Entity;

class Result
{
    private $result;

    private $url;

    public function getResult(): bool
    {
        return $this->result;
    }

    public function setResult($result): self
    {
        $this->result = $result;
        return $this;
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    public function setUrl($url): self
    {
        $this->url = $url;
        return $this;
    }

}