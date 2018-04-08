<?php

namespace App\Http\Controllers;

use App\Models\PricingTable;

class PagesController extends Controller
{
	/**
	 * Displays the home page.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function home()
	{
		return view('pages.home');
	}

	/**
	 * Displays the pricing page.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function pricing()
	{
		// Determine the pricing tables
		$pricingTables = PricingTable::all();

		return view('pages.pricing', compact('pricingTables'));
	}
}
