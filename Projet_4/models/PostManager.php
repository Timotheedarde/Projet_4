<?php
class PostManager extends Model
{
    // RECUPERE TOUS LES POSTS
    public function getPosts()
    {
        //$this->getBdd();
        return $this->getAll('posts', 'Post');
    }

}






/*require_once("models/Manager.php");

class PostManager extends Manager // constructeur
{
    public function getPosts() // appel tous les posts
    {
        $db = $this->dbConnect();
        $req = $db->query('SELECT id, title, content, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%imin%ss\') AS creation_date_fr FROM posts ORDER BY creation_date DESC LIMIT 0, 5');

        return $req;
    }

    public function getPost($postId) // rcupère 1 post en fonction de son id
    {
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT id, title, content, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%imin%ss\') AS creation_date_fr FROM posts WHERE id = ?');
        $req->execute(array($postId));
        $post = $req->fetch();

        return $post;
    }
}
*/