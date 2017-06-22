<?php

namespace App1Bundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\Bundle\MongoDBBundle\Validator\Constraints\Unique as MongoDBUnique;
use Doctrine\ODM\MongoDB\Mapping\Annotations\Id;

/**
 * AppBundle\Document\BlogPost
 */
class BlogPost {

    /**
     * @var MongoId $id
     */
    protected $id;

    /**
     * @MongoDB\Field(type="string")
     */
    protected $category;

    /**
     * @MongoDB\Field(type="string")
     */
    protected $title;

    /**
     * @MongoDB\Field(type="string")
     */
    protected $body;

    /**
     * @MongoDB\Field(type="string")
     */
    private $draft = false;

    /**
     * Get id
     *
     * @return id $id
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set category
     *
     * @param string $category
     * @return self
     */
    public function setCategory($category) {
        $this->category = $category;
        return $this;
    }

    /**
     * Get category
     *
     * @return string $category
     */
    public function getCategory() {
        return $this->category;
    }

    public function setTitle($title) {
        $this->title = $title;
        return $this;
    }

    /**
     * Get category
     *
     * @return string $category
     */
    public function getTitle() {
        return $this->title;
    }

    public function setBody($body) {
        $this->body = $body;
        return $this;
    }

    /**
     * Get category
     *
     * @return string $category
     */
    public function getBody() {
        return $this->body;
    }

    public function setDraft($draft) {
        $this->draft = $draft;
        return $this;
    }

    public function getDraft() {
        return $this->draft;
    }

}
