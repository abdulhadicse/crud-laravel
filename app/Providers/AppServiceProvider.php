<?php

namespace App\Providers;

use App\View\Composers\ViewServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider {

	/**
	 * Register any application services.
	 *
	 * @return void
	 */
	public function register() {
	}

	/**
	 * Bootstrap any application services.
	 *
	 * @return void
	 */
	public function boot() {
		View::share( 'mainTitle', 'Manage Employees' );

		// Using closure based composers...
		View::composer(
			array( 'layouts.app' ),
			function( $view ) {
				$global_data_text = array(
					'addEmployee'  => 'Add New Employee',
					'editEmployee' => '',
					'delEmployee'  => 'Delete',
				);

				$view->with( 'globalDataText', $global_data_text );
			}
		);

		// Using class based composers...
		View::composer( '*', ViewServiceProvider::class );
	}
}
