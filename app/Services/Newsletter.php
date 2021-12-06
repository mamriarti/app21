<?php

namespace App\Services;

    use MailchimpMarketing\ApiClient;

    class Newsletter
    {
        public function subscribe(string $email){
            $mailchimp = new ApiClient();

            $mailchimp->setConfig([
                'apiKey' => config('services.mailchimp.key'),
                'server' => 'us20'
            ]);
             return  $response = $mailchimp->lists->addListMember('9399567b36',
                 [
                     'email_address' => $email,
                     'status' => 'subscribed',
                 ]);

        }
    }
