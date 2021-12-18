<?php

namespace App\Structural\Facade;

class Facade
{

    public function createAndServe($id, $message = ''): bool
    {
        $db = new Database();
        $data = $db->get_data($id);
        $template = new Template($id, $data);
        $logger = new Logger();
        $logger->log($message);
        return $template->serve();
    }
}