<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Schema;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Admin;
use App\Attribute;
use App\Characteristic;
use App\CategoryGroup;
use App\Manager;
use App\Supplier;
use App\Environment;
use App\SessionGame;
use App\FrameType;
use App\Gamemode;
use App\Scenery;
use App\Customer;
use App\Frame;
use App\Block;
use App\Shelve;
use App\Category;
use App\ProductDetail;
use App\Product;
use App\ShelveProduct;
use App\Playground;
use App\Session;
use App\CustomerInput;
use App\GazeInput;
use App\ControllerInput;
use App\Purchase;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function LoadTable($table = "")
    {
        $rows = array();
        $columns = array();
        if ($table != "") {
            $columns = Schema::getColumnListing($table);
            switch ($table) {
            case "admins":
                $rows = Admin::all();
                break;
            case "attributes":
                $rows = Attribute::all();
                break;
            case "characteristics":
                $rows = Characteristic::all();
                break;
            case "category_groups":
                $rows = CategoryGroup::all();
                break;
            case "managers":
                $rows = Manager::all();
                break;
            case "suppliers":
                $rows = Supplier::all();
                break;
            case "environments":
                $rows = Environment::all();
                break;
            case "frame_types":
                $rows = FrameType::all();
                break;
            case "gamemodes":
                $rows = GameMode::all();
                break;
            case "sceneries":
                $rows = Scenery::all();
                break;
            case "customers":
                $rows = Customer::all();
                break;
            case "frames":
                $rows = Frame::all();
                break;
            case "blocks":
                $rows = Block::all();
                break;
            case "shelves":
                $rows = Shelve::all();
                break;
            case "categories":
                $rows = Category::all();
                break;
            case "session_games":
                $rows = SessionGame::all();
                break;
            case "product_details":
                $rows = ProductDetail::all();
                break;
            case "products":
                $rows = Product::all();
                break;
            case "shelve_products":
                $rows = ShelveProduct::all();
                break;
            case "playgrounds":
                $rows = Playground::all();
                break;
            case "sessions":
                $rows = Session::all();
                break;
            case "customer_inputs":
                $rows = CustomerInput::all();
                break;
            case "gaze_inputs":
                $rows = GazeInput::all();
                break;
            case "controller_inputs":
                $rows = ControllerInput::all();
                break;
            case "purchases":
                $rows = Purchase::all();
                break;
        }
        }
        return view('welcome')->with('rows', $rows)->with('columns', $columns);
    }
}
