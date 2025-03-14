<?php
namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SettingController extends Controller
{
    public function edit()
    {
        $setting = Setting::first(); // Lấy thông tin cài đặt đầu tiên (giả sử chỉ có một)
        return view('managers.setting.settingpage.setting', compact('setting'));
    }

    public function update(Request $request)
    {
        // Xác thực dữ liệu đầu vào
        $validatedData = $request->validate([
            'BusinessName' => 'required|string',
            'BossName' => 'required|string',
            'Phone' => 'required|string|max:15',
            'Address' => 'required|string',
            'Email' => 'required|email|max:255',
            'DefaultWeight' => 'required|string',
        ]);

        $setting = Setting::first(); // Lấy thông tin cài đặt đầu tiên
        $setting->update($validatedData); // Cập nhật thông tin

        return redirect()->route('settings.edit')->with('success', 'Settings updated successfully.');
    }
}
