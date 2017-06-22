<?php

namespace App1Bundle\Document;
use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\Bundle\MongoDBBundle\Validator\Constraints\Unique as MongoDBUnique;
use Doctrine\ODM\MongoDB\Mapping\Annotations\Id;
/**
 * AppBundle\Document\Category
 */
class Category
{
    /**
     * @var MongoId $id
     */
    protected $id;

    /**
     * @var string $blog_posts
     */
    protected $blog_posts;
    protected $name;
    

    /**
     * Get id
     *
     * @return id $id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set blogPosts
     *
     * @param string $blogPosts
     * @return self
     */
    public function setBlogPosts($blogPosts)
    {
        $this->blog_posts = $blogPosts;
        return $this;
    }

    /**
     * Get blogPosts
     *
     * @return string $blogPosts
     */
    public function getBlogPosts()
    {
        return $this->blog_posts;
    }
    
     public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Get blogPosts
     *
     * @return string $blogPosts
     */
    public function getName()
    {
        return $this->name;
    }
}
