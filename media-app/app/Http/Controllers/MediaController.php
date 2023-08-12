<?php

namespace App\Http\Controllers;

use App\Models\media;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;


class MediaController extends Controller
{

    function index()
    {
        return media::find(1);
    }

    function insert(Request $request)
    {

        //$MediaController = new MediaController();
        media::create([
            'title' => $request->title,
            'description' => $request->description,
            'link' => $request->link,
            'image' => $request->image,
            'publisheddate' =>Carbon::parse($request->publisheddate),
            'category' => $request->category,
            'channel' => $request->channel,
            'created_at'=> Carbon::today(),
            $response = true
        ]
          /*  new \DateTime([
                'day' => explode($request->day, ' ')
            ])
          */
        );
      /*  $MediaController->title = $request->title;
        $MediaController->description = $request->description;
        $MediaController->link = $request->link;
        $MediaController->image = $request->image;
        $MediaController->publisheddate = $request->publisheddate;
        $MediaController->category = $request->category;
        $MediaController->channel = $request->channel;*/
        //$result= (new \App\Models\media)->save();
        if ($response) {
            return ['status' => "data has been inserted"];
        }
        else
        {
            return ['status' => "data has not been inserted"];

        }
    }
    //
    function getAll()
    {
        $from = Carbon::today()->subDays(3)->toDateTimeString();
        $to = Carbon::parse(Carbon::tomorrow())->toDateTimeString();

        print_r($from."  ");
        print_r($to);

        return media::whereBetween('created_at', [$from, $to])->paginate(15);
    }
    public function getbyCategory(Request $request)
    {
        return media::where('created_at', '=', $request->category)->paginate(15);
    }
    function getbyChannel(Request $request)
    {
        return media::where('channel', '=', $request->channel)->paginate(15);
    }

    function delete(Request $request)
    {
        $deleted = media::where('title','=', $request->tile)->delete();
        return  ['status' => "data has been deleted"];
    }

    function getallchannel(Request $request)
    {
        return media::all('id', 'channel');
    }

  function getallcategory(Request $request)
    {
        return media::all('id', 'category');
    }


}
