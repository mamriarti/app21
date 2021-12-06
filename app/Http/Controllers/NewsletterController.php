<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Validation\ValidationException;
use App\Services\Newsletter;

use Illuminate\Http\Request;


class NewsletterController extends Controller
{
    public function __invoke(Newsletter $newsletter){

        request()->validate([
            'email' => 'required|email',
        ]);


        try {
            $newsletter->subscribe(request('email'));

        } catch (Exception $e){

            throw ValidationException::withMessages([
                'email' => 'Этот емейл не может быть добавлен в список рассылки'
            ]);

        }
        // $response = $mailchimp->lists->getAllLists();
        //$response = $mailchimp->lists->getListMembersInfo("9399567b36");


        return redirect('/')->with('success','Вы подписаны на нашу рассылку');
    }
}
