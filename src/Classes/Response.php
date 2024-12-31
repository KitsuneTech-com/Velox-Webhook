\<?php
namespace KitsuneTech\Velox\Webhook\Classes;
class Response {
    public function __construct(public string $text, public int $code){}
}
