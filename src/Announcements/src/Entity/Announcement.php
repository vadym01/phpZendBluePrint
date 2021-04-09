<?php

declare(strict_types=1);

namespace Announcements\Entity;

use Doctrine\ORM\Mapping as ORM;

class Announcement
{
    protected $id;
    protected $sort;
    protected $content;
    protected $is_active;
    protected $created;
    protected $modified;

    public function getId(): int
    {
        return $this->id;
    }

    public function getSort(): int
    {
        return $this->sort;
    }

    public function setSort(int $sort): void
    {
        $this->sort = $sort;
    }

    public function getContent(): string
    {
        return $this->content;
    }

    public function setContent(int $content): void
    {
        $this->content = $content;
    }

    public function getIsActive(): int
    {
        return $this->is_active;
    }

    public function setIsActive(int $is_active): void
    {
        $this->is_active = $is_active;
    }

    public function getCreated(): \DateTime
    {
        return $this->created;
    }

    public function setCreated(\DateTime $created = null): void
    {
        if (!$created && empty($this->getId())) {
            $this->created = new \DateTime("now");
        } else {
            $this->created= $created;
        }
    }

    public function getModified(): \DateTime
    {
        return $this->modified;
    }

    public function setModified(\DateTime $modified=null): void
    {
        if (!$modified) {
            $this->modified = new \DateTime("now");
        } else {
            $this->modified = $modified;
        }
    }
}
