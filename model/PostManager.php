<?php
//require_once("model/Manager.php");

class PostManager extends Manager
{
	public function getPosts()
	{
		$posts = [];
		$db = $this->dbConnect();
		$req = $db->query('SELECT id, title, content, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%imin%ss\') AS creation_date_fr FROM posts ORDER BY creation_date DESC LIMIT 0, 5');
		while($donnees = $req->fetch(PDO::FETCH_ASSOC))
		{
			$posts[] = new Post($donnees);
		}
		return $posts;
	}

	public function getPost($postId)
	{
		$db = $this->dbConnect();
		$req = $db->prepare('SELECT id, title, content, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%imin%ss\') AS creation_date_fr FROM posts WHERE id = ?');
		$req->execute(array($postId));
		$donnees = $req->fetch();
		$onePost = new Post($donnees);
		return $onePost;
	}
}