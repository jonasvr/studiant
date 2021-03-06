<?php

namespace App\Http\Controllers;

use App\Http\Requests\addSubjectRequest;
use App\Subjects;
use Illuminate\Http\Request;
use App\Articles;

class AdminController extends Controller
{
    /**
     * @var Articles
     */
    protected $articles;

    /**
     * @var Subjects
     */
    protected $subjects;

    /**
     * AdminController constructor.
     * @param Articles $articles
     */
    public function __construct(Articles $articles, Subjects $subjects)
    {
        $this->articles = $articles;
        $this->subjects = $subjects;
    }

    public function index()
    {
        return view('admin.index');
    }

    public function SubjectsOverview()
    {
        $data = [
            'allSubjects' => $this->subjects->all(),
        ];
          return view('admin.SubjectOverview',$data);
    }

    public function SubjectDel($id)
    {
        $subject = $this->subjects->find($id);
        $subject->delete();

        $this->articles->archive($id);


        return back()->with(['success'=>'succesvol verwijderd']);
    }

    public function add(addSubjectRequest $request)
    {
        $this->subjects->create($request->all());

        return back()->with(['success'=>'succesvol toegevoegd']);
    }

    public function ArticleOveriew()
    {
        $data = [
            'articles' => $this->articles->where('archived','=',0)->paginate(15),
            'title' => 'Latest articles',
        ];

        return view('admin.articlesOverview',$data);
    }

    public function ArticleDel($id)
    {
        $article = $this->articles->find($id);
        $article->delete();

        return back()->with(['success'=>'succesvol verwijderd']);
    }
}
