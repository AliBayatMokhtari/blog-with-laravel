<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller {

	public function getIndex() {
		return view("Pages.welcome");
	}

	public function getAbout() {
		
		$first = "علی";
		$last = "بیات مختاری";

		$full = $first . ' ' . $last;

		$data = [];

		$data["firstname"] = $first;
		$data["lastname"] = $last;
		$data["fullname"] = $full;

		return view("Pages.about")->with("data", $data);
	}

	public function getWelcome() {
		return view("Pages.welcome");
	}

	public function getContact() {
		return view("Pages.contact");
	}
}