<?php

namespace App\Http\Controllers;
use App\Content;
use Illuminate\Http\Request;

class ContentController extends Controller
{

    public function index()
    {
        $content = Content::where('user_id', auth()->user()->id)->get();
        
        return view('content.index',compact('content'));
    }
 
    public function create()
    {
        return view('content.create');
    }
 
    public function store(Request $request)
    {
       $content = new Content();
       $data = $this->validate($request,[
           'title'=>'required',
           'body'=>'required'
       ]); 

       $content->saveContent($data);
       return redirect('/home')->width('success','New Content has been post');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $content = Content::where('user_id', auth()->user()->id)
        ->where('id', $id)
        ->first();

        return view('content.edit', compact('content', 'id'));
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
        $content = new Content();
        $data = $this->validate($request,[
            'title' => 'required',
            'body' => 'required'
        ]);
        $data['id'] = $id;
        $content->updateContent($data);

        return redirect('/home')->with('success','Post updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post->delete();

        return redirect()->route('home')->with('success','Post deleted successfully');
    }


}
