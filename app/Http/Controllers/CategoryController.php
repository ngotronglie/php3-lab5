<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    
    private $view;
    public function __construct()
    {
        $this->view = [];
    }

    public function index()
    {
        //
        // Khởi tạo model
        $objCategory = new Category();
        $this->view['listCate'] = $objCategory->loadAllCate();
        // Truy vân + logic
//        $objCate = new Category();
//        $listCate = $objCate->loadAllCate();
//        $arrayCate = [];
//        foreach ($listCate as $value){
//            $arrayCate[$value->id] = $value->name;
//        }
//        $this->view['listCate'] =  $arrayCate;
            ///
//        dd( $this->view['listCate']);
        return view('category.index', $this->view);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $objCate = new Category();
        $this->view['listCate'] = $objCate->loadAllCate();
        return view('category.create', $this->view);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validate = $request->validate(
            [
               'name'=> ['required', 'string', 'max:255'],
            ],
            [
              'name.required'=>'Trường tên không được bỏ trống',
              'name.string'=>'Tên bắt buộc là chuỗi',
              'name.max'=>'Trường tên không được vượt quá 255 ký tự',
            ]
        );
    }
}
