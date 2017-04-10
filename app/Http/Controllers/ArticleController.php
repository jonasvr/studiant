<?php

namespace App\Http\Controllers;

use App\Articles;
use App\Subjects;
use Illuminate\Http\Request;
use App\Http\Requests\AddArticleRequest;

class ArticleController extends Controller
{
    /**
     * @var Subjects
     */
    protected $subjects;

    /**
     * @var Articles
     */
    protected $articles;

    /**
     * ArticleController constructor.
     * @param Subjects $subjects
     */
    public function __construct(Subjects $subjects, Articles $articles)
    {
        $this->subjects = $subjects;
        $this->articles = $articles;
    }


    public function create()
    {
        $subjects = [];
        foreach ($this->subjects->all() as $key => $subject) {
            $subjects[$subject->id] = $subject->subject;
        }
        $data = [
              'subjects_id' => $subjects,
            ];

        return view('articles.create', $data);
    }

    public function edit($id)
    {
        $subjects = [];
        foreach ($this->subjects->all() as $key => $subject) {
            $subjects[$subject->id] = $subject->subject;
        }
        $data = [
            'subjects_id' => $subjects,
            'article' => $this->articles->find($id),
        ];

        return view('articles.edit', $data);
    }

    public function add(AddArticleRequest $request)
    {
        $data = $request->all();

        $article = $this->articles->create($data);
        return redirect()->route('article', ['id' => $article->id]);
    }

    public function update(AddArticleRequest $request)
    {
        $data = $request->all();

        $article = $this->articles->update($data);
        return redirect()->route('article', ['id' => $article->id]);
    }

    public function overview()
    {
        $data = [
            'articles' => $this->articles->where('archived','=',0)->paginate(15),
            'title' => 'Latest articles',
        ];

        return view('articles.overview',$data);
    }

    public function subject($id)
    {
        $data = [
            'articles' => $this->articles->where('subject_id',$id)->paginate(15),
            'title' => $this->subjects->find($id)->subject,
        ];

        return view('articles.overview',$data);
    }

    public function getArticle($id)
    {
        $data = [
            'article' => $this->articles->find($id),
        ];

        return view('articles.article',$data);
    }
}
