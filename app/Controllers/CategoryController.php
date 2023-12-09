<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\CategoryModel;


class CategoryController extends BaseController
{
    public function index()
    {
        $category = new CategoryModel();
        $data['items']= $category->findAll();
        $data['title']= "Category list";
        return view('categories/index',$data);
       
    }
    public function create()
    {
        return view('category/create');
       
    }
    public function store()
    {
       
    }
    public function edit($id)
    {
       
    }
    public function update()
    {
       
    }
    public function idelete()
    {
       
    }
}
