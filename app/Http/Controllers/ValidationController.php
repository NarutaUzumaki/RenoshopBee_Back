<?php


namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;


class ValidationController extends Controller {
    public function checkData(Request $request){
        try {
            $this->validate($request, [
                'title'     => 'required',
                'price'     => 'required',
                'stars'     => 'required',
                'img'       => 'required',
                'size'      => 'required',
                'color'     => 'required',
                'quantity'  => 'required'
            ]);
        } catch (ValidationException $e) {
            return response()->json([
                'results' => $e
            ]);
        }
        return true;
    }
}
