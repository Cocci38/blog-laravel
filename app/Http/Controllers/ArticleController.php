<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Affiche la liste de tous les articles
     */
    public function index()
    {
        $articles = Article::all();
        return view("article.index", compact("articles"));
    }

    /**
     * Retourne le formulaire de création d'un article
     */
    public function create()
    {
        return view("article.create");
    }

    /**
     * Enregistre un nouvel article dans la base de données
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required',
            'content'=>'required'
        ]);

        $article = new Article([
            'title'=> $request->get('title'),
            'content'=> $request->get('content')
        ]);

        $article->save();
        return redirect('/')->with('success', 'Article ajouté avec succès');
    }

    /**
     * Affiche les détails d'un personnage spécifique
     */
    public function show($id)
    {
        $article = Article::findOrFail($id);
        return view('article.show', compact('article'));
    }

    /**
     * Retourne le formulaire de modification
     */
    public function edit($id)
    {
        $article = Article::findOrFail($id);
        return view('article.show', compact('article'));
    }

    /**
     * Enregistre la modification dans la base de données
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title'=>'required',
            'content'=>'required'
        ]);

        $article = Article::findOrFail($id);
            $article->title = $request->get('title');
            $article->content = $request->get('content');

        $article->update();
        return redirect('/')->with('success', 'Article modifié avec succès');
    
    }

    /**
     * Supprime le personnage dans la base de données
     */
    public function destroy($id)
    {

        $article = Article::findOrFail($id);
        $article->delete();

        return redirect('/')->with('success', 'Personnage supprimé avec succès');

    }

}
