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
	 * Displays the about page.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function aboutStyle1()
	{
		return view('pages.about.style-1');
	}

	/**
	 * Displays the about page.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function aboutStyle2()
	{
		return view('pages.about.style-2');
	}

	/**
	 * Displays the about page.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function aboutStyle3()
	{
		return view('pages.about.style-3');
	}

	/**
	 * Displays the about page.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function aboutStyle4()
	{
		return view('pages.about.style-4');
	}

	/**
	 * Displays the contact page.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function contactStyle1()
	{
		return view('pages.contact.style-1');
	}

	/**
	 * Displays the contact page.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function contactStyle2()
	{
		return view('pages.contact.style-2');
	}

	/**
	 * Displays the contact page.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function contactStyle3()
	{
		return view('pages.contact.style-3');
	}

	/**
	 * Displays the faq page.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function faq()
	{
		return view('pages.faq');
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
	 * Displays the resources appliances page.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function resourcesAppliances()
	{
		return view('pages.resources.appliances');
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
	 * Displays the manufacturer numbers page.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function resourcesManufacturerNumbers()
	{
		return view('pages.resources.manufacturer-numbers');
	}

	/**
	 * Displays the coverage page.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function resourcesCoverage()
	{
		return view('pages.resources.coverage');
	}

	/**
	 * Displays the services page.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function servicesStyle1()
	{
		// Determine the pricing tables
		$pricingTables = PricingTable::all();

		// Return the response
		return view('pages.services.style-1', compact('pricingTables'));
	}

	/**
	 * Displays the services page.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function servicesStyle2()
	{
		// Determine the pricing tables
		$pricingTables = PricingTable::all();

		// Return the response
		return view('pages.services.style-2', compact('pricingTables'));
	}

	/**
	 * Displays the services page.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function servicesStyle3()
	{
		// Determine the pricing tables
		$pricingTables = PricingTable::all();

		// Return the response
		return view('pages.services.style-3', compact('pricingTables'));
	}
}
