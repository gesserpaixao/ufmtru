<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use PHPSC\PagSeguro\Items\Item;
use PHPSC\PagSeguro\Requests\Checkout\CheckoutService;
use App\Http\Requests\MoneyValidationFormRequest;

class PagSeguroController extends Controller
{
  public function index(CheckoutService $checkoutService, MoneyValidationFormRequest $request)
  {
  

      
      $checkout = $checkoutService->createCheckoutBuilder()

          ->addItem(new Item(1, 'Saldo', $request->input('value')))
          
          ->getCheckout();

      $response = $checkoutService->checkout($checkout);

      return redirect($response->getRedirectionUrl('http://paw.ic.ufmt.br/ufmtru/public/admin/balance/deposit'));
      
  }
}
