<?php
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('categories.index', compact('categories'));
    }

    public function create()
    {
        return view('categories.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);

        Category::create($request->all());

        return redirect('/categories')->with('success', 'Catégorie ajoutée avec succès');
    }

    public function edit($id)
    {
        $category = Category::find($id);
        return view('categories.edit', compact('category'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);

        Category::find($id)->update($request->all());

        return redirect('/categories')->with('success', 'Catégorie mise à jour avec succès');
    }

    public function destroy($id)
    {
        Category::destroy($id);

        return redirect('/categories')->with('success', 'Catégorie supprimée avec succès');
    }
}




