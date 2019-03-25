<?php


namespace Zwarthoorn\Ping\Service;


use Zwarthoorn\Ping\Entity\Result;
use Zwarthoorn\Ping\Entity\Url;

class PingService
{
    public function ping(Url $urlEntity): array {
        $urls = $urlEntity->getUrl();
        $result = [];
        foreach ($urls as $iValue) {
            $result[] = $this->pingSingle($iValue);
        }

        return $result;
    }

    public function pingSingle(string $url): Result{
        $result = new Result();
        return $result
            ->setResult($this->pingHandler($url))
            ->setUrl($url);
    }

    private function pingHandler(string $url): bool {

        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_TIMEOUT, 5);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);

        return $httpcode >= 200 && $httpcode < 300;
    }
}