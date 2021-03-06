<?php
namespace App\Http\Controllers;
use App\video;
use Illuminate\Http\Request;
class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $videos=video::all();
       //dd($videos);
       return view('index',compact(['videos']));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    $video=video::create($request->all());
    return redirect()->route('videos.index');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\video  $video
     * @return \Illuminate\Http\Response
     */
    public function show(video $video)
    {
        return view('show', compact(['video']));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\video  $video
     * @return \Illuminate\Http\Response
     */
    public function edit(video $video)
    {
        return view('edit', compact(['video']));
        return redirect('/videos');
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\video  $video
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, video $video)
    {
        $data = $this->validate($request, [
            'video'=>'required',
            'title'=> 'required',
            'description'=>'required',
            'comment'=>'required'
        ]);
        $video->update($request->all());
        $video->save();
        return redirect('videos')->with('success', 'New support video has been updated!!');
        
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\video  $video
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $video = video::find($id);
        $video->delete();
        return redirect('/videos')->with('success', 'video has been deleted!!');
    }
    public function user(video $video)
    {
        return view('user', compact(['video']));
    }
    public function live()
    {
        $videos=video::all();
        return view('live', compact(['videos']));
        return redirect('/live');
    }
    public function like(Request $request, $id)
    {
        $action = $request->get('action');
        switch ($action) {
            case 'Like':
                video::where('id', $id)->increment('likes_count');
                break;
            case 'Unlike':
                video::where('id', $id)->decrement('likes_count');
                break;
        }
        return '';
    }
}
