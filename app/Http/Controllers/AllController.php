<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\about;
use App\contact;
use App\footer;
use App\hero;
use App\portfolio;
use App\service;
use App\subscribe;
use App\team;
use App\testimonial;


class AllController extends Controller
{
    public function show(){
        $abouts = about::all();
        $contacts = contact::all();
        $footers = contact::all();
        $heros = hero::all();
        $portfolios = portfolio::all();
        $services = service::all();
        $subscribes = subscribe::all();
        $teams = team::all();
        $testimonials = testimonial::all();
        return view('/index', compact('abouts','contacts','footers','heros','portfolios','services','subscribes','teams','testimonials'));
    }
}
