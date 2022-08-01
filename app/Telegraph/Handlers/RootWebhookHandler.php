<?php


namespace App\Telegraph\Handlers;


use DefStudio\Telegraph\Handlers\WebhookHandler;

class RootWebhookHandler extends WebhookHandler
{
    public function dismiss(){
        //...

        $key1 = $this->data->get('key1'); //foo

        $key3 = $this->data->get('key1', 'default value'); //default value
    }

    public function hi()
    {
        $text = $this->chat->message("hello")->send();
    }
}
