<?php 
namespace App\Repositories;
use App\Models\Post;

class PostRepository{
    /**
     * @var Post
     */

     protected $post;
     

     /**
      * PostRepository constructor
      * 
      * @param Post $post
      */
      public function __construct(Post $post)
      {
        $this->post = $post;
      }

      public function save($data){
        $post= new $this->post;

        $post->title=$data['title'];
        $post->description=$data['description'];

        $post->save();

        return $post->fresh();
      }
      public function getAllPost(){
        return $this->post
        ->get();

      }
      public function getById($id){
        return $this->post
        ->where('id',$id)
        ->get();
      }

      public function update($data,$id){
        $post =$this->post->find($id);
        $post->title=$data['title'];
        $post->description=$data['description'];

        $post->update();
        return $post;
      }

      public function delete($id){
        $post=$this->post->find($id);
        $post->delete();

        return $post;
      }
}
?>