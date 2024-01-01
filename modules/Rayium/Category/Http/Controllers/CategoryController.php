<?php

namespace modules\Rayium\Category\Http\Controllers;

use App\Http\Controllers\Controller;
use modules\Rayium\Category\Http\Requests\CategoryRequest;
use modules\Rayium\Category\Repositories\CategoryRepo;
use modules\Rayium\Category\Services\CategoryService;

class CategoryController extends Controller
{
    public CategoryRepo $repo;
    public CategoryService $service;

    public function __construct(CategoryRepo $categoryRepo, CategoryService $categoryService)
    {
        $this->repo = $categoryRepo;
        $this->service = $categoryService;
    }

    public function index()
    {
        $categories = $this->repo->index()->paginate(10);
        return view('Category::index', compact('categories'));
    }

    public function create()
    {
        $category = $this->repo->index()->get();
        return view('Category::create', compact('category'));
    }

    public function store(CategoryRequest $request)
    {
        $this->service->store($request);

        $notification = array(
            'message' => 'دسته جدید با موفقیت ایجاد شد.',
            'alert-type' => 'success'
        );

        return to_route('category.index')->with($notification);
    }

    public function edit($id)
    {
        $category = $this->repo->findById($id);
        return view('Category::edit', compact('category'));
    }

    public function update(CategoryRequest $request, $id)
    {
        $this->service->update($request, $id);

        $notification = array(
            'message' => 'دسته با موفقیت ویرایش شد.',
            'alert-type' => 'success'
        );

        return to_route('category.index')->with($notification);
    }

    public function destroy($id)
    {
        $this->repo->delete($id);

        $notification = array(
            'message' => 'دسته با موفقیت حذف شد.',
            'alert-type' => 'success'
        );

        return to_route('category.index')->with($notification);
    }
}
