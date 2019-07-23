<?php

namespace App\Http\Controllers\Backend;

use App\Model\Category;
use App\WebmasterSection;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class ImageController extends BackendController
{
    public function categories(Request $request)
    {

        // General for all pages
        $GeneralWebmasterSections = WebmasterSection::where('status', '=', '1')->orderby('row_no', 'asc')->get();

        if ($request->isMethod('get')) {
            $cat = Category::all();
            $this->data('cat', $cat);
            return view($this->backendcategoryPath . 'category', compact('GeneralWebmasterSections'), $this->data);
        }

        if ($request->isMethod('post')) {
            $request->validate([
                'name' => 'required',
                'description' => 'required'
            ]);
            $data['title'] = $request->name;
            $data['description'] = $request->description;
            $data['status'] = $request->status;
            if (Category::create($data)) {
                Session::flash('success', 'Category added');
                return redirect()->back();
            }
        }
    }

    public function delete_category($id)
    {
        $find = Category::findorfail($id);
        if ($find->delete()) {
            Session::flash('success', 'Category deleted successfully');
            return redirect()->back();
        }
    }

    public function edit_category(Request $request)
    {
        if ($request->isMethod('get')) {
            $GeneralWebmasterSections = WebmasterSection::where('status', '=', '1')->orderby('row_no', 'asc')->get();
            $find = Category::where('id', '=', $request->id)->first();
            $this->data('find', $find);
            return view($this->backendcategoryPath . 'edit_category', compact('GeneralWebmasterSections'), $this->data);

        }

        if ($request->isMethod('post')) {
            $request->validate([
                'name' => 'required',
                'description' => 'required'
            ]);
            $data['title'] = $request->name;
            $data['description'] = $request->description;
            $data['status'] = $request->status;

            $id = $request->id;
            $update = Category::findorfail($id);
            if ($update->update($data)) {
                return redirect()->back()->with('success', 'Category Updated');

            }
        }
    }
}
