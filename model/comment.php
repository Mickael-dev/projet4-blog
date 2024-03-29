<?php
class Comment
{
  private $id;
  private $postId;
  private $author;
  private $comment;
  private $comment_date_fr;
   public function __construct($donnees = [])
   {
     if(!empty($donnees))
     {
       $this->hydrate($donnees);
     }
   }
   public function hydrate(array $donnees)
   {
     foreach($donnees as $key => $value)
     {
       $method = 'set'.ucfirst($key);
         if(method_exists($this, $method))
         {
           $this->$method($value);
         }
     }
   }
   public function getId()
   {
      return $this->id;
   }
   public function getPostId()
   {
      return $this->postId;
   }
   public function getAuthor()
   {
      return $this->author;
   }
   public function getComment()
   {
      return $this->comment;
   }
   public function getComment_date_fr()
   {
      return $this->comment_date_fr;
   }
   public function getDonnees()
   {
      return $this->donnees;
   }
   public function setId($id)
   {
      $id = (int) $id;
      if($id > 0)
      {
        $this->id = $id;
      }
   }
   public function setPostId($postId)
   {
      $postId = (int) $postId;
      if($postId > 0)
      {
        $this->postId = $postId;
      }
   }
   public function setAuthor($author)
   {
     if(is_string($author) AND !empty($author))
     {
       $this->author = $author;
     }
   }
   public function setComment($comment)
   {
     if(is_string($comment) AND !empty($comment))
     {
       $this->comment = $comment;
     }
   }
   public function setComment_date_fr($comment_date_fr)
   {
      $this->comment_date_fr = $comment_date_fr;
   }
   public function setDonnees(array $donnees)
   {
      $this->donnees = $donnees;
   }
}