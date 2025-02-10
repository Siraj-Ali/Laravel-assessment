<?php

namespace App\Http\Controllers;

use App\Interfaces\CheckoutRepositoryInterface;
use App\Jobs\sendMail;
use App\Mail\queueMail;
use App\Models\PostModel;
use Exception;
use Illuminate\Http\Request;
use Stripe;
use function Laravel\Prompts\error;
use Srmklive\PayPal\Services\PayPal as PayPalClient;

class CheckoutController extends Controller
{

    private $checkoutRepository;

    public function __construct(CheckoutRepositoryInterface $checkoutRepository) {
        $this->checkoutRepository = $checkoutRepository;
    }
    public function checkout($id) {
        $post = $this->checkoutRepository->checkout($id);
         
        return view('checkout', compact('post'));
    }

    public function padPayment(Request $request) {
                // Enter Your Stripe Secret
                // dd($request->all());
                $a = array(
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 2,
                        'title' => 'queue job title1',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 2,
                        'title' => 'queue job title2',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title3',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title4',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title5',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title6',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title7',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title8',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title9',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title10',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title11',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title12',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title14',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title15',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title16',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title17',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title18',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title19',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 2,
                        'title' => 'queue job title1',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 2,
                        'title' => 'queue job title2',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title3',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title4',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title5',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title6',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title7',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title8',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title9',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title10',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title11',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title12',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title14',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title15',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title16',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title17',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title18',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title19',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 2,
                        'title' => 'queue job title1',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 2,
                        'title' => 'queue job title2',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title3',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title4',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title5',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title6',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title7',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title8',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title9',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title10',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title11',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title12',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title14',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title15',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title16',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title17',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title18',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title19',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 2,
                        'title' => 'queue job title1',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 2,
                        'title' => 'queue job title2',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title3',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title4',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title5',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title6',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title7',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title8',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title9',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title10',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title11',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title12',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title14',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title15',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title16',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title17',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title18',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title19',
                        'description' => 'queue job description',
                        'status' => 1
                    ),array(
                        'user_id' => 1,
                        'title' => 'queue job title',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 2,
                        'title' => 'queue job title1',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 2,
                        'title' => 'queue job title2',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title3',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title4',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title5',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title6',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title7',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title8',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title9',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title10',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title11',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title12',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title14',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title15',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title16',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title17',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title18',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title19',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 2,
                        'title' => 'queue job title1',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 2,
                        'title' => 'queue job title2',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title3',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title4',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title5',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title6',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title7',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title8',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title9',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title10',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title11',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title12',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title14',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title15',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title16',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title17',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title18',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title19',
                        'description' => 'queue job description',
                        'status' => 1
                    ),array(
                        'user_id' => 1,
                        'title' => 'queue job title',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 2,
                        'title' => 'queue job title1',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 2,
                        'title' => 'queue job title2',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title3',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title4',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title5',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title6',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title7',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title8',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title9',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title10',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title11',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title12',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title14',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title15',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title16',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title17',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title18',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title19',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 2,
                        'title' => 'queue job title1',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 2,
                        'title' => 'queue job title2',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title3',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title4',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title5',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title6',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title7',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title8',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title9',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title10',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title11',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title12',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title14',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title15',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title16',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title17',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title18',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title19',
                        'description' => 'queue job description',
                        'status' => 1
                    ),array(
                        'user_id' => 1,
                        'title' => 'queue job title',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 2,
                        'title' => 'queue job title1',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 2,
                        'title' => 'queue job title2',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title3',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title4',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title5',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title6',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title7',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title8',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title9',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title10',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title11',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title12',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title14',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title15',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title16',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title17',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title18',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title19',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 2,
                        'title' => 'queue job title1',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 2,
                        'title' => 'queue job title2',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title3',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title4',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title5',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title6',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title7',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title8',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title9',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title10',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title11',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title12',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title14',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title15',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title16',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title17',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title18',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title19',
                        'description' => 'queue job description',
                        'status' => 1
                    ),array(
                        'user_id' => 1,
                        'title' => 'queue job title',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 2,
                        'title' => 'queue job title1',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 2,
                        'title' => 'queue job title2',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title3',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title4',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title5',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title6',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title7',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title8',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title9',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title10',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title11',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title12',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title14',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title15',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title16',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title17',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title18',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title19',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 2,
                        'title' => 'queue job title1',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 2,
                        'title' => 'queue job title2',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title3',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title4',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title5',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title6',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title7',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title8',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title9',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title10',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title11',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title12',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title14',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title15',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title16',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title17',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title18',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title19',
                        'description' => 'queue job description',
                        'status' => 1
                    ),array(
                        'user_id' => 1,
                        'title' => 'queue job title',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 2,
                        'title' => 'queue job title1',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 2,
                        'title' => 'queue job title2',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title3',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title4',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title5',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title6',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title7',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title8',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title9',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title10',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title11',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title12',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title14',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title15',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title16',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title17',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title18',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title19',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 2,
                        'title' => 'queue job title1',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 2,
                        'title' => 'queue job title2',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title3',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title4',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title5',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title6',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title7',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title8',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title9',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title10',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title11',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title12',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title14',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title15',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title16',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title17',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title18',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title19',
                        'description' => 'queue job description',
                        'status' => 1
                    ),array(
                        'user_id' => 1,
                        'title' => 'queue job title',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 2,
                        'title' => 'queue job title1',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 2,
                        'title' => 'queue job title2',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title3',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title4',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title5',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title6',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title7',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title8',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title9',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title10',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title11',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title12',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title14',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title15',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title16',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title17',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title18',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title19',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 2,
                        'title' => 'queue job title1',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 2,
                        'title' => 'queue job title2',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title3',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title4',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title5',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title6',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title7',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title8',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title9',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title10',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title11',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title12',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title14',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title15',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title16',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title17',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title18',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title19',
                        'description' => 'queue job description',
                        'status' => 1
                    ),array(
                        'user_id' => 1,
                        'title' => 'queue job title',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 2,
                        'title' => 'queue job title1',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 2,
                        'title' => 'queue job title2',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title3',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title4',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title5',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title6',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title7',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title8',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title9',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title10',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title11',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title12',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title14',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title15',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title16',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title17',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title18',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title19',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 2,
                        'title' => 'queue job title1',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 2,
                        'title' => 'queue job title2',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title3',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title4',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title5',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title6',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title7',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title8',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title9',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title10',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title11',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title12',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title14',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title15',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title16',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title17',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title18',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title19',
                        'description' => 'queue job description',
                        'status' => 1
                    ),array(
                        'user_id' => 1,
                        'title' => 'queue job title',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 2,
                        'title' => 'queue job title1',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 2,
                        'title' => 'queue job title2',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title3',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title4',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title5',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title6',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title7',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title8',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title9',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title10',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title11',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title12',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title14',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title15',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title16',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title17',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title18',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title19',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 2,
                        'title' => 'queue job title1',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 2,
                        'title' => 'queue job title2',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title3',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title4',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title5',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title6',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title7',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title8',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title9',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title10',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title11',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title12',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title14',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title15',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title16',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title17',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title18',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title19',
                        'description' => 'queue job description',
                        'status' => 1
                    ),array(
                        'user_id' => 1,
                        'title' => 'queue job title',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 2,
                        'title' => 'queue job title1',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 2,
                        'title' => 'queue job title2',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title3',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title4',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title5',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title6',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title7',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title8',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title9',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title10',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title11',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title12',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title14',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title15',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title16',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title17',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title18',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title19',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 2,
                        'title' => 'queue job title1',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 2,
                        'title' => 'queue job title2',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title3',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title4',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title5',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title6',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title7',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title8',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title9',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title10',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title11',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title12',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title14',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title15',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title16',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title17',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title18',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title19',
                        'description' => 'queue job description',
                        'status' => 1
                    ),array(
                        'user_id' => 1,
                        'title' => 'queue job title',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 2,
                        'title' => 'queue job title1',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 2,
                        'title' => 'queue job title2',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title3',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title4',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title5',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title6',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title7',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title8',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title9',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title10',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title11',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title12',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title14',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title15',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title16',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title17',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title18',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title19',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 2,
                        'title' => 'queue job title1',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 2,
                        'title' => 'queue job title2',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title3',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title4',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title5',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title6',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title7',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title8',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title9',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title10',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title11',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title12',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title14',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title15',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title16',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title17',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title18',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title19',
                        'description' => 'queue job description',
                        'status' => 1
                    ),array(
                        'user_id' => 1,
                        'title' => 'queue job title',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 2,
                        'title' => 'queue job title1',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 2,
                        'title' => 'queue job title2',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title3',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title4',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title5',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title6',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title7',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title8',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title9',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title10',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title11',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title12',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title14',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title15',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title16',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title17',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title18',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title19',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 2,
                        'title' => 'queue job title1',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 2,
                        'title' => 'queue job title2',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title3',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title4',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title5',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title6',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title7',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title8',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title9',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title10',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title11',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title12',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title14',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title15',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title16',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title17',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title18',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title19',
                        'description' => 'queue job description',
                        'status' => 1
                    ),array(
                        'user_id' => 1,
                        'title' => 'queue job title',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 2,
                        'title' => 'queue job title1',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 2,
                        'title' => 'queue job title2',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title3',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title4',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title5',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title6',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title7',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title8',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title9',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title10',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title11',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title12',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title14',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title15',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title16',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title17',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title18',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title19',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 2,
                        'title' => 'queue job title1',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 2,
                        'title' => 'queue job title2',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title3',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title4',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title5',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title6',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title7',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title8',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title9',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title10',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title11',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title12',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title14',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title15',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title16',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title17',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title18',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title19',
                        'description' => 'queue job description',
                        'status' => 1
                    ),array(
                        'user_id' => 1,
                        'title' => 'queue job title',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 2,
                        'title' => 'queue job title1',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 2,
                        'title' => 'queue job title2',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title3',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title4',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title5',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title6',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title7',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title8',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title9',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title10',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title11',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title12',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title14',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title15',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title16',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title17',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title18',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title19',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 2,
                        'title' => 'queue job title1',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 2,
                        'title' => 'queue job title2',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title3',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title4',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title5',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title6',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title7',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title8',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title9',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title10',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title11',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title12',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title14',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title15',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title16',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title17',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title18',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title19',
                        'description' => 'queue job description',
                        'status' => 1
                    ),array(
                        'user_id' => 1,
                        'title' => 'queue job title',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 2,
                        'title' => 'queue job title1',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 2,
                        'title' => 'queue job title2',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title3',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title4',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title5',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title6',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title7',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title8',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title9',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title10',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title11',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title12',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title14',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title15',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title16',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title17',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title18',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title19',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 2,
                        'title' => 'queue job title1',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 2,
                        'title' => 'queue job title2',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title3',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title4',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title5',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title6',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title7',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title8',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title9',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title10',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title11',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title12',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title14',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title15',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title16',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title17',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title18',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title19',
                        'description' => 'queue job description',
                        'status' => 1
                    ),array(
                        'user_id' => 1,
                        'title' => 'queue job title',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 2,
                        'title' => 'queue job title1',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 2,
                        'title' => 'queue job title2',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title3',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title4',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title5',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title6',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title7',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title8',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title9',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title10',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title11',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title12',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title14',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title15',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title16',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title17',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title18',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title19',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 2,
                        'title' => 'queue job title1',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 2,
                        'title' => 'queue job title2',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title3',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title4',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title5',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title6',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title7',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title8',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title9',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title10',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title11',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title12',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title14',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title15',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title16',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title17',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title18',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title19',
                        'description' => 'queue job description',
                        'status' => 1
                    ),array(
                        'user_id' => 1,
                        'title' => 'queue job title',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 2,
                        'title' => 'queue job title1',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 2,
                        'title' => 'queue job title2',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title3',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title4',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title5',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title6',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title7',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title8',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title9',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title10',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title11',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title12',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title14',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title15',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title16',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title17',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title18',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title19',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 2,
                        'title' => 'queue job title1',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 2,
                        'title' => 'queue job title2',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title3',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title4',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title5',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title6',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title7',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title8',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title9',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title10',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title11',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title12',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title14',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title15',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title16',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title17',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title18',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title19',
                        'description' => 'queue job description',
                        'status' => 1
                    ),array(
                        'user_id' => 1,
                        'title' => 'queue job title',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 2,
                        'title' => 'queue job title1',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 2,
                        'title' => 'queue job title2',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title3',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title4',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title5',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title6',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title7',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title8',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title9',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title10',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title11',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title12',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title14',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title15',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title16',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title17',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title18',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title19',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 2,
                        'title' => 'queue job title1',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 2,
                        'title' => 'queue job title2',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title3',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title4',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title5',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title6',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title7',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title8',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title9',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title10',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title11',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title12',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title14',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title15',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title16',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title17',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title18',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title19',
                        'description' => 'queue job description',
                        'status' => 1
                    ),array(
                        'user_id' => 1,
                        'title' => 'queue job title',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 2,
                        'title' => 'queue job title1',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 2,
                        'title' => 'queue job title2',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title3',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title4',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title5',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title6',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title7',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title8',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title9',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title10',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title11',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title12',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title14',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title15',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title16',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title17',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title18',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title19',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 2,
                        'title' => 'queue job title1',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 2,
                        'title' => 'queue job title2',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title3',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title4',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title5',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title6',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title7',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title8',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title9',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title10',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title11',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title12',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title14',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title15',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title16',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title17',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title18',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title19',
                        'description' => 'queue job description',
                        'status' => 1
                    ),array(
                        'user_id' => 1,
                        'title' => 'queue job title',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 2,
                        'title' => 'queue job title1',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 2,
                        'title' => 'queue job title2',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title3',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title4',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title5',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title6',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title7',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title8',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title9',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title10',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title11',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title12',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title14',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title15',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title16',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title17',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title18',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title19',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 2,
                        'title' => 'queue job title1',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 2,
                        'title' => 'queue job title2',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title3',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title4',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title5',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title6',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title7',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title8',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title9',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title10',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title11',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title12',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title14',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title15',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title16',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title17',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title18',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title19',
                        'description' => 'queue job description',
                        'status' => 1
                    ),array(
                        'user_id' => 1,
                        'title' => 'queue job title',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 2,
                        'title' => 'queue job title1',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 2,
                        'title' => 'queue job title2',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title3',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title4',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title5',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title6',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title7',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title8',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title9',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title10',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title11',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title12',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title14',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title15',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title16',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title17',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title18',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title19',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 2,
                        'title' => 'queue job title1',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 2,
                        'title' => 'queue job title2',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title3',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title4',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title5',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title6',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title7',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title8',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title9',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title10',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title11',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title12',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title14',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title15',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title16',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title17',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title18',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title19',
                        'description' => 'queue job description',
                        'status' => 1
                    ),array(
                        'user_id' => 1,
                        'title' => 'queue job title',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 2,
                        'title' => 'queue job title1',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 2,
                        'title' => 'queue job title2',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title3',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title4',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title5',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title6',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title7',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title8',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title9',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title10',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title11',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title12',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title14',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title15',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title16',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title17',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title18',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title19',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 2,
                        'title' => 'queue job title1',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 2,
                        'title' => 'queue job title2',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title3',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title4',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title5',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title6',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title7',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title8',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title9',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title10',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title11',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title12',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title14',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title15',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title16',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title17',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title18',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title19',
                        'description' => 'queue job description',
                        'status' => 1
                    ),array(
                        'user_id' => 1,
                        'title' => 'queue job title',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 2,
                        'title' => 'queue job title1',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 2,
                        'title' => 'queue job title2',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title3',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title4',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title5',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title6',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title7',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title8',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title9',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title10',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title11',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title12',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title14',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title15',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title16',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title17',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title18',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title19',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 2,
                        'title' => 'queue job title1',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 2,
                        'title' => 'queue job title2',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title3',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title4',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title5',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title6',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title7',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title8',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title9',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title10',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title11',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title12',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title14',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title15',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title16',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title17',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title18',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title19',
                        'description' => 'queue job description',
                        'status' => 1
                    ),array(
                        'user_id' => 1,
                        'title' => 'queue job title',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 2,
                        'title' => 'queue job title1',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 2,
                        'title' => 'queue job title2',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title3',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title4',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title5',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title6',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title7',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title8',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title9',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title10',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title11',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title12',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title14',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title15',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title16',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title17',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title18',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title19',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 2,
                        'title' => 'queue job title1',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 2,
                        'title' => 'queue job title2',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title3',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title4',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title5',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title6',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title7',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title8',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title9',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title10',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title11',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title12',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title14',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title15',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title16',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title17',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title18',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title19',
                        'description' => 'queue job description',
                        'status' => 1
                    ),array(
                        'user_id' => 1,
                        'title' => 'queue job title',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 2,
                        'title' => 'queue job title1',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 2,
                        'title' => 'queue job title2',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title3',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title4',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title5',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title6',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title7',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title8',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title9',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title10',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title11',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title12',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title14',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title15',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title16',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title17',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title18',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title19',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 2,
                        'title' => 'queue job title1',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 2,
                        'title' => 'queue job title2',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title3',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title4',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title5',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title6',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title7',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title8',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title9',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title10',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title11',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title12',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title14',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title15',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title16',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title17',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title18',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title19',
                        'description' => 'queue job description',
                        'status' => 1
                    ),array(
                        'user_id' => 1,
                        'title' => 'queue job title',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 2,
                        'title' => 'queue job title1',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 2,
                        'title' => 'queue job title2',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title3',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title4',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title5',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title6',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title7',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title8',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title9',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title10',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title11',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title12',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title14',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title15',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title16',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title17',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title18',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title19',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 2,
                        'title' => 'queue job title1',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 2,
                        'title' => 'queue job title2',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title3',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title4',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title5',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title6',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title7',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title8',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title9',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title10',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title11',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title12',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title14',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title15',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title16',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title17',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title18',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title19',
                        'description' => 'queue job description',
                        'status' => 1
                    ),array(
                        'user_id' => 1,
                        'title' => 'queue job title',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 2,
                        'title' => 'queue job title1',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 2,
                        'title' => 'queue job title2',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title3',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title4',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title5',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title6',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title7',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title8',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title9',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title10',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title11',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title12',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title14',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title15',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title16',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title17',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title18',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title19',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 2,
                        'title' => 'queue job title1',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 2,
                        'title' => 'queue job title2',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title3',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title4',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title5',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title6',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title7',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title8',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title9',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title10',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title11',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title12',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title14',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title15',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title16',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title17',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title18',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title19',
                        'description' => 'queue job description',
                        'status' => 1
                    ),array(
                        'user_id' => 1,
                        'title' => 'queue job title',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 2,
                        'title' => 'queue job title1',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 2,
                        'title' => 'queue job title2',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title3',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title4',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title5',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title6',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title7',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title8',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title9',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title10',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title11',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title12',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title14',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title15',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title16',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title17',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title18',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title19',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 2,
                        'title' => 'queue job title1',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 2,
                        'title' => 'queue job title2',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title3',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title4',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title5',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title6',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title7',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title8',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title9',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title10',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title11',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title12',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title14',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title15',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title16',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title17',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title18',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title19',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 2,
                        'title' => 'queue job title1',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 2,
                        'title' => 'queue job title2',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title3',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title4',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title5',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title6',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title7',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title8',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title9',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title10',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title11',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title12',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title14',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title15',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title16',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title17',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title18',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title19',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 2,
                        'title' => 'queue job title1',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 2,
                        'title' => 'queue job title2',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title3',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title4',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title5',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title6',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title7',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title8',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title9',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title10',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title11',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title12',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title14',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title15',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title16',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title17',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title18',
                        'description' => 'queue job description',
                        'status' => 1
                    ),
                    array(
                        'user_id' => 1,
                        'title' => 'queue job title19',
                        'description' => 'queue job description',
                        'status' => 1
                    ),

                );
                // dd($a);
                // foreach($a as $d) {
                //     PostModel::create($d);
                // }
                dispatch(new sendMail($a));
                // \Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));

        		// dd($request->all());
                // $amount = $request->amount;
                // $amount *= 100;
                
                // $payment_intent = \Stripe\PaymentIntent::create([
                //     // 'customer' => $request->name,
                //     'amount' => $amount,
                //     'currency' => 'AED',
                //     'description' => 'Payment From '.$request->name,
                //     'receipt_email' => $request->email,
                //     'payment_method_types' => ['card'],
                //     'confirm' => false,
                //     // 'invoice' => '12455'
                // ]);
                // $intent = $payment_intent;
                // if($intent->id) {
                //     $this->checkoutRepository->storeTransection($intent);
                // }
                // dispatch(new queueMail($request->email));
                return redirect()->back()->with('success', 'Transection done');
                // If you must need to pass customer name and address with shipping address

            //     $customer = \Stripe\Customer::create(array(
            //         "address" => [

            //             "line1" => "Industrial Area 12",
    
            //             "postal_code" => "50000",
    
            //             "city" => "Sharjha",
    
            //             "state" => "SH",
    
            //             "country" => "UAE",
    
            //         ],
    
            //         "email" => $request->email,
        
            //         "name" => $request->name,
        
            //         "source" => $request->stripeToken
            //     ));

            //    $response = \Stripe\Charge::create([
                //     "amount" => $amount,
                //     "currency" => 'AED',
                //     'customer' => $customer->id,
                //     'description' => 'Payment From '.$request->name,
                //     'receipt_email' => $request->email,
                //     'payment_method_types' => ['card'],
                //     "shipping" => [

                //         "name" => "Jenny Rosen",
          
                //         "address" => [
          
                //           "line1" => "510 Townsend St",
          
                //           "postal_code" => "98140",
          
                //           "city" => "San Francisco",
          
                //           "state" => "CA",
          
                //           "country" => "US",
          
                //         ],
          
                //       ]
                // ]);

                // dd($response); 
                // return view('checkout.credit-card',compact('intent'));
        
    }

    // Paypal 

    public function paypalCheckout() {
        $provider = new PayPalClient([]);
        $token = $provider->getAccessToken();
        $provider->setAccessToken($token);
        // dd($provider);
        $order = $provider->createOrder(
            [
                "intent" => "CAPTURE",
                "purchase_units" => [
                    [
                        "amount" => [
                            'currency_code' => "USD",
                            'value' => 15
                        ]
                    ]
                 ],
                 "application_context" => [
                    'cancel_url' => route('cancel.payment'),
                    'return_url'=> route('success.payment')
                 ]
            ]
        );
        return redirect($order['links'][1]['href']) ;
        // dd($order);
        
    }

    public function SuccessPayment(Request $request) {
        // dd($request->all());
        $provider = new PayPalClient();
        $provider->setApiCredentials(config('paypal'));
        $provider->getAccessToken();

        $response = $provider->capturePaymentOrder($request->token);
        
        dd($response);
    }

    public function cancelPayment() {
        dd("ancel");
    }
}
 