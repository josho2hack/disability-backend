<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Vedmant\FeedReader\Facades\FeedReader;

class RssController extends Controller
{
    public $successStatus = 200;
    public function getNews()
    {
        $feed = FeedReader::read('https://www.onde.go.th/rss_module/feed/1/ข่าว');
        //echo $feed->get_title();
        //echo $feed->get_image_url();
        //echo "<br/>";
        //$data = $feed->get_items(0, 5);
        //print_r($data);
        $data = array();
        $i = 0;
        foreach ($feed->get_items(0, 5) as $item) {
            $data[$i]['title'] = $item->get_title();
            $data[$i]['description'] = $item->get_description();
            $data[$i]['link']=  $item->get_permalink();
            $data[$i]['date'] = $item->get_date('j F Y | g:i a');
            $media_group = $item->get_item_tags('', 'enclosure');
            $file = $media_group[0]['attribs']['']['url'];
            $data[$i]['image'] = $file;
            $i++;
            //echo '<img src="' . $file . '" />';
            //echo "<br/>";
        }

        return response()->json([$data]);
    }
}
