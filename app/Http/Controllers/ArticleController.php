<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function index()
    {
        try {
            $statusCode = 200;
            $data = Article::orderBy('updated_at', 'desc')->get();

            $response = [
                'status' => true,
                'data' => $data,
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
}
