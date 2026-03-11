<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;

class CreateKeyController extends Controller
{

    public function store(Request $request)
    {

        $password = $request->password;
        $type = $request->type;

        switch ($type) {
            case 'bcrypt':
                $result = Hash::make($password);
                break;

            case 'md5':
                $result = md5($password);
                break;

            case 'sha1':
                $result = sha1($password);
                break;

            case 'sha256':
                $result = hash('sha256', $password);
                break;

            case 'sha512':
                $result = hash('sha512', $password);
                break;

            default:
                $result = '';
        }

        return response()->json([
            'result' => $result
        ]);
    }

}