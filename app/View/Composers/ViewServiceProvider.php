<?php

namespace App\View\Composers;

use Illuminate\View\View;

class ViewServiceProvider {

	/**
	 * Bind data to the view.
	 */
	public function compose( View $view ): void {
		$view->with( 'count', '100' );
	}
}
