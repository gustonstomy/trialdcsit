<?php

namespace App\Http\Controllers;

use App\Models\AboutPage;
use Illuminate\Http\Request;

class AboutPageController extends Controller
{
    public function show(AboutPage $aboutPage)
{
    $visionContent = AboutPage::ofType('vision')->first()->content;
    $missionContent = AboutPage::where('type', 'mission')->value('content');
    $historyContent = AboutPage::where('type', 'history')->value('content');

    // Debug output to check fetched values
    // dd($visionContent, $missionContent, $historyContent);

    return view('aboutpage', compact('visionContent', 'missionContent', 'historyContent'));
}
}
