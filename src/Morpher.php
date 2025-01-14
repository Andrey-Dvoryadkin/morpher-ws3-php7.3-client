<?php
namespace Morpher\Ws3Client;


class Morpher
{
    public $russian;
    public $qazaq;
    public $ukrainian;

    private $webClient;
    
    public function __construct(string $url = 'https://ws3.morpher.ru', string $token = '', float $timeout = 10.0, $handler = null)
    {
        $this->webClient = new WebClient($url, $token, $timeout, $handler);
        $this->russian = new Russian\Client($this->webClient);
        $this->qazaq = new Qazaq\Client($this->webClient);
        $this->ukrainian = new Ukrainian\Client($this->webClient);
    }

    /**
     * Возвращает количество запросов, оставшихся на текущие сутки.
     * @return int
     * @throws SystemError
     */
    public function getQueriesLeftForToday(): int
    {
        $json = $this->webClient->send("/get_queries_left_for_today");
        $result = WebClient::jsonDecode($json);

        if (!is_numeric($result)) {
            throw new InvalidServerResponse("Ожидалось число.", $json);
        }

        return (int)$result;
    }
}