<?php

interface CanBeLiked
{
    public function like();

    public function isLiked();
}

class Comment implements CanBeLiked
{
    public function like()
    {
        echo 'Like the comment';
    }

    public function isliked()
    {
        return false;
    }
}

class Post implements CanBeLiked
{
    public function like()
    {
        echo 'Like the post';
    }

    public function isliked()
    {
        return false;
    }
}

class Thread implements CanBeLiked
{
    public function like()
    {
        echo 'Like the thread';
    }

    public function isLiked()
    {
        return false;
    }
}

class PerformLike
{
    public function handle(CanBeLiked $model)
    {
        if ($model->isliked()) {
            return;
        }

        $model->like();
    }
}

(new PerformLike)->handle(new Comment);