<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TITcategory;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Gate;

class TITcategoryController extends Controller
{
    use AuthorizesRequests;

    protected $category;

    public function __construct(TITcategory $category)
    {
        $this->category = $category;
    }

    /**
     * Display a listing of the categories.
     */
    public function index()
    {
        
        $categories = TITcategory::withCount('tasks')->get();
        return view('categories.layout', compact('categories'));
    }

    /**
     * Show the form for creating a new category.
     */
    public function create()
    {
        Gate::authorize('TIT-manage-categories');
        $this->authorize('create', TITcategory::class);

        return view('categories.categories');
    }

    /**
     * Store a newly created category.
     */
    public function store(Request $request)
    {
        Gate::authorize('TIT-manage-categories');
        $this->authorize('create', TITcategory::class);

        $request->validate([
            'name' => 'required|string|max:100',
        ]);

        TITcategory::create($request->only('name'));

        return redirect()->route('categories.layout')->with('success', 'Category added.');
    }

    /**
     * Show the form for editing a category.
     */
    public function edit(string $id)
    {
        $category = TITcategory::findOrFail($id);

        Gate::authorize('TIT-manage-categories');
        $this->authorize('update', $category);

        return view('categories.categories', compact('category'));
    }

    /**
     * Update the specified category.
     */
    public function update(Request $request, string $id)
    {
        $category = TITcategory::findOrFail($id);

        Gate::authorize('TIT-manage-categories');
        $this->authorize('update', $category);

        $request->validate([
            'name' => 'required|string|max:100',
        ]);

        $category->update($request->only('name'));

        return redirect()->route('categories.layout')->with('success', 'Category updated.');
    }

    /**
     * Remove the specified category.
     */
    public function destroy(string $id)
    {
        $category = TITcategory::findOrFail($id);

        Gate::authorize('TIT-manage-categories');
        $this->authorize('delete', $category);

        $category->delete();

        return redirect()->route('categories.layout')->with('success', 'Category deleted.');
    }
}
