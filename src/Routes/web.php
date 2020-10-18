<?php

Route::group(['middleware' => 'web'], function () {
	Route::view("laraxendit","LaraXendit::order-detail");
	Route::view("laraxendit/payment","LaraXendit::payment");
	Route::view("laraxendit/retail-outlet","LaraXendit::retail-outlet");
	Route::view("laraxendit/virtual-account","LaraXendit::retail-outlet");
});
