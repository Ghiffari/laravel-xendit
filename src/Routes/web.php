<?php

Route::group(['middleware' => 'web'], function () {
	Route::view("ui/test","LaraXendit::test");
	Route::view("ui","LaraXendit::order-detail");
	Route::view("ui/payment","LaraXendit::payment");
	Route::view("ui/retail-outlet","LaraXendit::retail-outlet");
	Route::view("ui/virtual-account","LaraXendit::retail-outlet");
});
