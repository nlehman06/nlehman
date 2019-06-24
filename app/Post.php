<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Feed\Feedable;
use Spatie\Feed\FeedItem;
use Wink\WinkPost;

class Post extends Model implements Feedable {

    protected $table = 'wink_posts';
    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'string';
    public $dates = [
        'publish_date',
    ];
    protected $casts = [
        'meta' => 'array',
        'published' => 'boolean',
    ];

    public function toFeedItem()
    {
        $winkPost = WinkPost::find($this->id);

        return FeedItem::create()
            ->id($this->id)
            ->title($this->title)
            ->summary($this->excerpt)
            ->updated($this->publish_date)
            ->link(route('blog.show', ['slug' => $this->slug]))
            ->author($winkPost->author->name);
    }

    public static function getFeedItems()
    {
        return Post::where('published', true)->latest('publish_date')->get();
    }
}
