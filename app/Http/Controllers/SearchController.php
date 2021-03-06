<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Keywords;

class SearchController extends Controller
{
    //

    public function index(Request $request, $keyword='')
    {
        $limit = 20;
        if(isset($request->limit) && $request->limit){
            $limit = $request->limit;
        }



        $orderby_field = 'price';
        $orderby_direction = 'ASC';

        if(isset($request->filter) && $request->filter){
            $filter_data =explode('_',$request->filter);
            $orderby_field = $filter_data[0]??'price';
            $orderby_direction = $filter_data[1]??'ASC';
        }


        $keyword = str_replace('-',' ',$keyword);



        $keyword_entry = Keywords::where('keyword',$keyword)->first();
        if (!$keyword_entry)
        {
            $keyword_entry = new Keywords();
            $keyword_entry->keyword = $keyword;
            $keyword_entry->high_price = 0;
            $keyword_entry->low_price = 0;
            $keyword_entry->meta_title = '';
            $keyword_entry->meta_description = '';
            $keyword_entry->negative_keyword = '';
            $keyword_entry->relative_keyword = '';
            $keyword_entry->status='active';
        }
        $keyword_entry->save();

        if (!$keyword_entry->negative_keyword)
        {
            $keyword_entry->negative_keyword = 'lorem';
        }

        if (!$keyword_entry->relative_keyword)
        {
            $keyword_entry->relative_keyword = '';
        }

        $negative_keywords = explode(",",$keyword_entry->negative_keyword);
        $related_keywords = explode(",",$keyword_entry->relative_keyword);





        $products = Product::with('merchant')
            ->whereHas('merchant',function($q){
                $q->where('status','active');

            })
            ->where(function ($query)  use ($keyword,$related_keywords,$keyword_entry) {
                $query->where('title', 'like', '%' . $keyword . '%')
                ->orwhere(function ($subquery)  use ($related_keywords,$keyword_entry) {
                    if($keyword_entry->relative_keyword)
                    {
                        foreach($related_keywords as $relative_keyword) {
                            $subquery->where('title', 'like', '%' . $relative_keyword . '%');
                                //->orWhere('description', 'like', '%' . $relative_keyword . '%');
                        }
                    }
                });
            })
            ->where(function ($query)  use ($negative_keywords) {
                    foreach ($negative_keywords as $negative_keyword) {
                        $query->Where('title', 'NOT LIKE', "%$negative_keyword%");
                    }

            })
            ->orderBy($orderby_field,$orderby_direction)
            // ->inRandomOrder()
            ->paginate($limit);

        $meta_description = $keyword_entry->meta_description;

        return view('front.products',compact('products','keyword','meta_description','keyword_entry','related_keywords'));
    }

    public function searchSubmit(Request $request)
    {
        $keyword = $request->search;
        $keyword = str_replace(' ','-',$keyword);

        return redirect('search/'.$keyword);

    }
}
