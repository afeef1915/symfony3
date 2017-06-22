<?php

namespace AppBundle\Document;



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
}
