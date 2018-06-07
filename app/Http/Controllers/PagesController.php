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

	/**
	 * Displays the resources content sliders page.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function resourcesContentSliders()
	{
		return view('pages.resources.content-sliders');
	}

	/**
	 * Displays the contact page.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function contact()
	{
		return view('pages.contact');
	}
}
