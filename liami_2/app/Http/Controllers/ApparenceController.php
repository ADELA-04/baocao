<?php
namespace App\Http\Controllers;

use App\Models\Apparence;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ApparenceController extends Controller
{
    public function edit()
    {
        $apparence = Apparence::first(); // Lấy thông tin đầu tiên
        return view('managers.setting.settingpage.apparence', compact('apparence'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'title' => 'nullable|string',
            'LogoImageURL' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'FaviconImageURL' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'NavigationLinks' => 'nullable|string',
            'FacebookLinks' => 'nullable|string',
            'InLinks' => 'nullable|string',
        ]);

        $apparence = Apparence::first(); // Lấy thông tin đầu tiên
        $apparence->Title = $request->input('title');
        $apparence->NavigationLinks = $request->input('NavigationLinks');
        $apparence->LinkFB = $request->input('FacebookLinks');
        $apparence->LinkIN = $request->input('InLinks');
        if ($request->hasFile('LogoImageURL')) {
            $file = $request->file('LogoImageURL');

            if ($file->isValid()) {
                $originalName = time() . '_' . $file->getClientOriginalName();
                $file->move(public_path('assets/images3'), $originalName);
                $apparence->LogoURL = 'assets/images3/' . $originalName; // Update the image URL
            }
        }
        if ($request->hasFile('FaviconImageURL')) {
            $file = $request->file('FaviconImageURL');

            if ($file->isValid()) {
                $originalName = time() . '_' . $file->getClientOriginalName();
                $file->move(public_path('assets/images3'), $originalName);
                $apparence->FaviconURL = 'assets/images3/' . $originalName; // Update the image URL
            }
        }



        $apparence->save(); // Lưu thông tin

        return redirect()->route('apparence.edit')->with('success', 'Settings updated successfully.');
    }
}
