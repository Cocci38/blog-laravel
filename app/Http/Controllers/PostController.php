<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $articles = [
            [
                'title' => 'Mon premier article',
                'content' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quo omnis non ipsam, aspernatur magnam repellat quibusdam suscipit blanditiis sapiente? Alias quod, 
                amet tenetur esse ad minus asperiores voluptate. Ea, sequi. Culpa provident non consequuntur, libero enim fugiat iure quos reiciendis deleniti dolor suscipit praesentium consequatur beatae nobis, ducimus dicta laudantium commodi architecto, aperiam aliquam! Vitae quasi ut accusantium repellendus inventore ratione voluptates enim nemo doloribus neque eum obcaecati excepturi aperiam,
                fuga perspiciatis reprehenderit ipsam maxime voluptate error illo! Magni, maxime eum ducimus exercitationem asperiores necessitatibus vitae vero, velit delectus provident nesciunt cumque facere libero, nam rem eos placeat atque corporis?'
            ],
            [
                'title' => 'Mon deuxième article',
                'content' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quo omnis non ipsam, aspernatur magnam repellat quibusdam suscipit blanditiis sapiente? Alias quod, 
                amet tenetur esse ad minus asperiores voluptate. Ea, sequi. Culpa provident non consequuntur, libero enim fugiat iure quos reiciendis deleniti dolor suscipit praesentium consequatur beatae nobis, ducimus dicta laudantium commodi architecto, aperiam aliquam! Vitae quasi ut accusantium repellendus inventore ratione voluptates enim nemo doloribus neque eum obcaecati excepturi aperiam,
                fuga perspiciatis reprehenderit ipsam maxime voluptate error illo! Magni, maxime eum ducimus exercitationem asperiores necessitatibus vitae vero, velit delectus provident nesciunt cumque facere libero, nam rem eos placeat atque corporis?'
            ],
            [
                'title' => 'Mon troisième article',
                'content' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quo omnis non ipsam, aspernatur magnam repellat quibusdam suscipit blanditiis sapiente? Alias quod, 
                amet tenetur esse ad minus asperiores voluptate. Ea, sequi. Culpa provident non consequuntur, libero enim fugiat iure quos reiciendis deleniti dolor suscipit praesentium consequatur beatae nobis, ducimus dicta laudantium commodi architecto, aperiam aliquam! Vitae quasi ut accusantium repellendus inventore ratione voluptates enim nemo doloribus neque eum obcaecati excepturi aperiam,
                fuga perspiciatis reprehenderit ipsam maxime voluptate error illo! Magni, maxime eum ducimus exercitationem asperiores necessitatibus vitae vero, velit delectus provident nesciunt cumque facere libero, nam rem eos placeat atque corporis?'
            ],
        ];
        
            return view('home', [
                'articles' => $articles
            ]);
    }
}
