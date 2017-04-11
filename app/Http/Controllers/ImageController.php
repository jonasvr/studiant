<?php

namespace App\Http\Controllers;

use App\Articles;
use Illuminate\Http\Request;
use App\Images;
use Illuminate\Support\Facades\Input;

class ImageController extends Controller
{
    /**
     * @var Images
     */
    protected $images;

    /**
     * @var Articles
     */
    protected $articles;

    /**
     * ImageController constructor.
     * @param Images $images
     * @param Articles $articles
     */
    public function __construct(Images $images, Articles $articles)
    {
        $this->articles = $articles;
        $this->images = $images;
    }

    public function upload($id)
    {
        $data = [
            'id' => $id,
        ];

        return view('images.upload',$data);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function add(Request $request)
    {
        $article = $this->articles->find($request->id);

        $data = $request->all();
//        dd($data);
        $img = $data['img'];
        $img_path = rand(1000,9999). "-" . $img->getClientOriginalName();
        $data['img'] = 'img/articles/' .$img_path;
        $img->move('img/articles/',$img_path);
        $image = $this->images->create(['path'=>'img/articles/'.$img_path]);

        $article->images()->save($image);

        return view('images.crop',$data);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function crop(Request $request)
    {
        $quality = 90;

        $src  = Input::get('image');
        $img  = imagecreatefromjpeg($src);
        $dest = ImageCreateTrueColor(Input::get('w'),
            Input::get('h'));

        imagecopyresampled($dest, $img, 0, 0, Input::get('x'),
            Input::get('y'), Input::get('w'), Input::get('h'),
            Input::get('w'), Input::get('h'));
        imagejpeg($dest, $src, $quality);

        return redirect(route('article',['id' => $request->id]));
    }

    public function delete(Request $request)
    {
        $ids = $request->all()['id'];

        foreach ($ids as $key => $id){
            $this->images->find($id)->delete();
        }

        return back();
    }
}
