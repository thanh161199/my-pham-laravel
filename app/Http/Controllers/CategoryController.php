<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $data = Category::paginate(5);
        return view('siteAdmin.category.index', compact('data'));
    }
    public function create()
    {
    }
    public function store(Request $request)
    {
    }
}
