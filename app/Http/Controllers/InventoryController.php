<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Inventory;

class InventoryController extends Controller
{
    public function __construct(Inventory $inventory)
    {
        $this->inventory = $inventory;
    }

    public function index(Request $request)
    {
        return response()->view('index');
    }

    public function form(Request $request)
    {
        $inventory = $this->inventory->all();
        return response()->view('form', ['Inventory' => $inventory]);
    }

    public function detail(Request $request, $id)
    {
        return response()->view('detail');
    }

    function __construct(Request $request, Inventory $inventory)

    {
        $this-> Request = $request
        $this-> Inventory = $inventory
    }
}
