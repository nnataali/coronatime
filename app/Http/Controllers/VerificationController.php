<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\EmailVerificationRequest;

class VerificationController extends Controller
{
	public function show(EmailVerificationRequest $request)
	{
		$request->fulfill();
		return view('register.verify');
	}
}