<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\SettingsRequest;
use App\Models\Setting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function setting()
    {
        $settings = Setting::first();
        return view('dashboard.settings.settings')->with('settings', $settings);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(SettingsRequest $request)
    {
        $settings = Setting::first();
        if ($settings) {
            $settings->update($request->all());
            session()->flash('msg' , 's: settings updated successfully');
            return redirect(route('settings'));
        } else {
            Setting::create($request->all());
            session()->flash('msg' , 's: settings created successfully');
            return redirect(route('settings'));
        }
    }

}
