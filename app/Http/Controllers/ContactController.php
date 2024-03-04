<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $data = Contact::orderBy('id', 'desc')->get();

        return view('pages.backend.contact.index', compact('data'));
    }

    public function store(Request $request)
    {
        $this->ValidatedData();

        $data = new Contact();

        $data->name = $request->get('name');
        $data->email = $request->get('email');
        $data->phone = $request->get('phone');
        $data->subject = $request->get('subject');
        $data->message = $request->get('message');

        $data->save();

        return redirect()->back();
    }

    protected function validatedData()
    {
        return request()->validate(
            [
                'g-recaptcha-response' => 'required|recaptcha'
            ],
            [
                'g-recaptcha-response.required' => 'Captcha is Required',
            ]
        );
    }

    // public function store(Request $request)
    // {
    //     $data = new Contact();

    //     $data->name = $request->get('name');
    //     $data->email = $request->get('email');
    //     $data->phone_number = $request->get('phone_number');
    //     $data->message = $request->get('message');

    //     $data->save();

    //     $fromnumer = '918098565686';
    //     $number = $data->phone_number;
    //     $mailid = $data->email;
    //     $message = 'Thanks for reaching out our team with the mail id of '.$mailid.' will contact you soon - Zwork Technology.';

    //     $url = 'https://apinew.getitsms.com/send-msg?apikey=jNBGRg6XeUG71uHjqN03TZENSlKxaJ&sender='.$fromnumer.'&receiver=91'.$number.'&message='.$message.'';

    //     return Redirect::to($url)->with('redirectToFunction', true);
    // }
}
