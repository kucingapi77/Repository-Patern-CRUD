<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Exception;
use Illuminate\Http\Request;
use App\Services\PostService;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    private $postService;

    public function __construct(PostService $postService)
{
    $this->postService = $postService;
}

    public function index()
    {
        // $result=$this->postService->getAll();
        $result=['status'=>200];
        try{
            $result['data'] = $this->postService->getAll();

        }catch(Exception $e){
            $result=[
                'status'=> 500,
                'error'=>$e->getMessage()
            ];
        }
        return view('form.index',[
            'result'=>$result['data']
        ]);
        //return response()->json($result,$result['status]);
    }

        
    //    return view('form.index', $result);

    
    public function tampil($id){
        $result=['status'=>200];
        try{
            $result['data']=$this->postService->getById($id);
        }catch(Exception $e){
            $result =[
                'status'=>500,
                'error'=>$e ->getMessage()
            ];
        }
        
        return view('form.update',[
            'result'=>$result['data']
        ]);
        

    }

    public function isidata()
    {
        return view('form.Create') ;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data =$request->only(
            [
                'title',
                'description',
            ]);
        
            $result =['status'=> 200];

        try {
            $result['data']= $this->postService->savePostData($data);
        }catch (Exception $e){
            $result=[
                'status' => 500,
                'eror' => $e ->getMessage()
            ];
        }
        return view('form.Create',$result)->with('success','berhasil menambahkan data');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        $data=Post::all();
        return view('form.index')->with('data', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $data =$request->only([
            'title',
            'description'
        ]);
        $result =['status' => 200];

        try{
            $result['data']=$this->postService->updatePost($data,$id);
        }catch (Exception $e){
            $result =[
                'status'=>500,
                'error' => $e->getMessage()
            ];
        }
        return redirect('/index');
        

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $result =['status'=>200];

        try{
            $result['data']=$this->postService->deleteById($id);

        }catch(Exception $e){
            $result=[
                'status'=>500,
                'error'=>$e->getMessage()
            ];
        }
        return redirect('/index');
  
    }
}
