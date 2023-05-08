<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

use function PHPUnit\Framework\returnSelf;

class CategoryController extends Controller
{
    public function index()
    {
        return view('Category.index', [
            'categories' => Category::all()
        ]);
    }

    public function create()
    {
        return view('Category.create');
    }
    public function store(Request $request)
    {
        $category = new Category();
        $category->title = $request->title;
        $category->description = $request->description;
        $category->save();

        return redirect()->route('category.index');
    }
    public function show($id)
    {
        // $category = Category::find($id);
        // // return $category;
        return view('Category.show', ['category' => Category::findOrFail($id)]);
    }
    public function edit($id)
    {
        return view('Category.edit', ['category' => Category::findOrFail($id)]);
    }

    public function update(string $id, Request $request)
    {
        $category = Category::findOrFail($id);
        $category->title = $request->title;
        $category->description = $request->description;
        $category->save();

        return redirect()->route('category.index');
    }
    public function destroy(string $id)
    {
        $category = Category::findOrFail($id);
        $category->delete();

        return redirect()->route('category.index');
    }
}
