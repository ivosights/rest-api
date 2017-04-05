<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function index()
    {
        try {
            $statusCode = 200;
            $offset = $this->request->input('offset') ? $this->request->input('offset') : 0;
            $limit = $this->request->input('limit') ? ($this->request->input('limit') > 25 ? 25 : $this->request->input('limit')) : 25;
            $articles = Article::orderBy('updated_at', 'desc')
                ->offset($offset)
                ->limit($limit)
                ->get();

            $response = [
                'status' => true,
                'offset' => $offset,
                'limit' => $limit,
                'total' => Article::count(),
                'data' => $articles,
            ];
        } catch (\Exception $e) {
            $statusCode = 500;

            $response = [
                'status' => false,
                'message' => $e->getMessage(),
                'errors' => null,
            ];
        }

        return response()->json($response, $statusCode);
    }

    public function create()
    {
        return $this->save();
    }

    public function update($id)
    {
        return $this->save($id);
    }

    public function save($id = null)
    {
        try {
            $statusCode = 500;

            $this->validate($this->request, [
                'title' => 'required',
                'content' => 'required',
            ]);

            $article = Article::find($id);

            if (is_null($id)) {
                $article = new Article;
            }

            $article->title = $this->request->title;
            $article->content = $this->request->content;
            $article->save();

            $response = [
                'status' => true,
                'data' => $article,
            ];

        } catch (\Illuminate\Validation\ValidationException $e) {
            $statusCode = 500;

            $response = [
                'status' => false,
                'message' => $e->getMessage(),
                'errors' => $e->getResponse()->getOriginalContent(),
            ];
        } catch (\Exception $e) {
            $statusCode = 500;

            $response = [
                'status' => false,
                'message' => $e->getMessage(),
                'errors' => null,
            ];
        }

        return response()->json($response, $statusCode);
    }

    public function delete($id = null)
    {
        try {
            $statusCode = 200;
            $article = Article::find($id);

            if (is_null($article)) {
                throw new \Exception("artikel tidak bisa dihapus.", 1);
            }

            $article->delete();

            $response = [
                'status' => true,
            ];
        } catch (\Exception $e) {
            $statusCode = 500;

            $response = [
                'status' => false,
                'message' => $e->getMessage(),
                'errors' => null,
            ];
        }

        return response()->json($response, $statusCode);
    }

    public function detail($id = null)
    {
        try {
            $statusCode = 200;
            $article = Article::find($id);

            if (is_null($article)) {
                throw new \Exception("artikel tidak ada.", 1);
            }

            $response = [
                'status' => true,
                'data' => $article,
            ];
        } catch (\Exception $e) {
            $statusCode = 500;

            $response = [
                'status' => false,
                'message' => $e->getMessage(),
                'errors' => null,
            ];
        }

        return response()->json($response, $statusCode);
    }
}
