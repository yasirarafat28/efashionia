<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Product;

class FeedController extends Controller
{
    //

    public function index()
    {
        $merchants = User::where('type','merchant')->where('status','active')->get();
        return view('admin.feed.create',compact('merchants'));
    }

    public function insert()
    {
        $merchants = User::where('type','merchant')->where('status','active')->get();
        return view('admin.feed.create',compact('merchants'));
    }


    public function Submit(Request $request){

        $this->validate($request, [
            'merchant_id' => 'required',
            'mode' => 'required',
            'file_type' => 'required',
            'feed' => 'required',
        ]);

        $merchant_id = $request->merchant_id;
        $upload_mode = $request->mode;

        if ($upload_mode=='replace')
        {
            Product::where('merchant_id',$merchant_id)->delete();
        }

        //clean
        Product::where('merchant_id',0)->delete();

        if ($request->hasFile('feed'))
        {

            if ($request->file_type=='json') {
                $text_data =   file_get_contents($request->feed);
                //echo "<pre>";
                $products = json_decode($text_data);
                $count=0;
                foreach ($products as $key => $item) {

                    $product = new Product();
                    $product->ref = uniqid();
                    $product->merchant_id = $merchant_id;
                    $product->status = 'active';

                    $product->title = $item->Name;
                    $product->url = $item->Url;
                    $product->description = $item->Description;
                    $product->image = $item->Image;
                    $product->price = $item->Price;
                    //$product->save();
                    if ($product->save()) {
                        $count++;
                    }



                }
            }elseif ($request->file_type=='xml')
            {
                $xmlfile = $request->file('feed');;$data[]=array();
                $tagname ='item';

                $dom = new \DOMDocument();
                $dom->load($xmlfile);
                $rows = $dom->getElementsByTagName($tagname);
                $first_row = true;
                $count=0;
                foreach ($rows as $row)
                {
                    $product = new Product();
                    $product->ref = uniqid();
                    $product->merchant_id = $merchant_id;
                    $product->status = 'active';


                    $cells_title = $row->getElementsByTagName( 'title' );
                    $cells_url = $row->getElementsByTagName( 'link' );
                    $cells_desc = $row->getElementsByTagName( 'description' );
                    $cells_image = $row->getElementsByTagName( 'image_link' );
                    $cells_price = $row->getElementsByTagName( 'price' );


                    if (isset($cells_title[0]->nodeValue))
                    {
                        $product->title = $cells_title[0]->nodeValue;
                    }
                    if (isset($cells_url[0]->nodeValue))
                    {
                        $product->url = $cells_url[0]->nodeValue;
                    }
                    if (isset($cells_desc[0]->nodeValue))
                    {
                        $product->description = $cells_desc[0]->nodeValue;
                    }
                    if (isset($cells_image[0]->nodeValue))
                    {
                        $product->image = $cells_image[0]->nodeValue;
                    }
                    if (isset($cells_price[0]->nodeValue))
                    {
                        $product->price = filter_var( $cells_price[0]->nodeValue, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION );
                    }

                    $product->save();

                    $count++;


                }
            }




        }
        return back()->withSuccess('Feed Successfully Updated! Total '.$count.' Product Updated!');

    }
}
