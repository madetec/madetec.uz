<?php
/**
 * Created by Madetec-Solution.
 * Developer: Mirkhanov Z.S.
 */

namespace app\madetec\services;


use app\models\ContactForm;
use madetec\crm\entities\Client;
use madetec\crm\repositories\ClientRepository;

/**
 * @property ClientRepository $clients
 */

class ContactService
{
    private $clients;

    public function __construct(ClientRepository $clientRepository)
    {
        $this->clients = $clientRepository;
    }

    /**
     * @param ContactForm $form
     * @return Client
     * @throws \DomainException
     */
    public function create(ContactForm $form)
    {
        $client = Client::create(
            $this->textHandler($form->name),
            null,
            null,
            null,
            null,
            $this->textHandler($form->phone),
            $form->email,
            $this->textHandler($form->body),
            null,
            Client::STATUS_CLIENT);

        $this->clients->save($client);
        return $client;
    }

    private function textHandler(string $string)
    {
        $string = htmlspecialchars($string);
        $string = stripcslashes($string);
        $string = trim($string);
        return $string;
    }
}