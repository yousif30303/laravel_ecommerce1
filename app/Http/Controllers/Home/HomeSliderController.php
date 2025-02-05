<?php

namespace App\Http\Controllers\Home;

use App\Models\HomeSlide;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;


class HomeSliderController extends Controller
{
    public function HomeSlider(){

        $homeslide = HomeSlide::find(1);
        return view('admin.Home.home_slide_all',compact('homeslide'));

     } // End Method 


     public function UpdateSlider(Request $request){

        $slide_id = $request->id;

        if ($request->file('home_slide')) {
            $image1 = $request->file('home_slide');
            $name_gen = hexdec(uniqid()).'.'.$image1->getClientOriginalExtension();  // 3434343443.jpg

            $manager = new ImageManager(new Driver());


            $image = $manager->read($image1);


            $image->resize(636,852)->save('upload/home_slide/'.$name_gen);
            $save_url = 'upload/home_slide/'.$name_gen;

            HomeSlide::findOrFail($slide_id)->update([
                'title' => $request->title,
                'short_title' => $request->short_title,
                'video_url' => $request->video_url,
                'home_slide' => $save_url,

            ]); 
            $notification = array(
            'message' => 'Home Slide Updated with Image Successfully', 
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

        } else{

            HomeSlide::findOrFail($slide_id)->update([
                'title' => $request->title,
                'short_title' => $request->short_title,
                'video_url' => $request->video_url,  

            ]); 
            $notification = array(
            'message' => 'Home Slide Updated without Image Successfully', 
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

        } // end Else

     } // End Method 


}
