<?php

namespace App\Http\Controllers;

use App\Models\authors;
use App\Models\post;
use Illuminate\Http\Request;
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function webIndex()
    {
            return  view('post.addPost');

    }
    public function index()
    {
        $all_post = post::all();
        if($all_post){

            return  $all_post;
        }
        else{
            return ['data'=>'No Data Found'];
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)

    {
//        Auth::user()->id ||
//        $user_id = $request['user_id'];
        $user_id = $request['user_id'];
        $author = authors::query()->where('user_id','=',$user_id)->get();
        if ($author->varified == 1) {
            post::create([
                'author_id' => $author->id ,
                'tittle' => $request['tittle'],
                'text' => $request['text'],
                'type' => $request['type']
            ]);
            return post::all();

        }
        else{
            return 'Author Not approved';
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user_id = $request['user_id'];
//        return ["user_id" => $request['user_id'], "tittle" =>$request['tittle'], "text"=>$request['text'],"type"=>$request['type'] ];
        $author = authors::query()->where('user_id',$user_id)->get()->first();
//        return $author->verified;
        try {
            if ($author->verified == 1) {

                post::create([
                    'author_id' => $author->id,
                    'tittle' => $request['tittle'],
                    'text' => $request['text'],
                    'type' => $request['type']
                ]);
                return post::all();

            } else {
                return ["data" => "Author Not approved"];
            }
        } catch (\Exception $e) {
            return $e;
        }
        }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id, Request $request)
    {
        $post = post::query()->where('id',$id)->get()->first();
        $post->tittle = $request['tittle'];
        $post->text = $request['text'];
        $post->type = $request['type'];
        $post->save();

        return post::all();

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        return $request['tittle'];
        $post = post::find($id);
        $post->tittle = $request['tittle'];
        $post->text = $request['text'];
        $post->type = $request['type'];
        $post->save();

        return $post;

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
