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
        $inventories = $this->inventory->all();
        return response()->view('index', ['inventories' => $inventories]);
    }

    public function form(Request $request)
    {
        return response()->view('form');
    }

    public function create(Request $request)
    { 

        $this->inventory->code = $request->code;
        $this->inventory->name = $request->name;
        $this->inventory->qty =$request->qty;
        $this->inventory->save();
     
	   return redirect()->back();
    }
    public function detail(Request $request, $id)
    {
        $inventory = $this->inventory->find($id);
        return response()->view('detail', ['inventory' => $inventory]);
    }
}
