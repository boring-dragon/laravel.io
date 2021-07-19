<?php

namespace App\Jobs;

use App\Http\Requests\ArticleRequest;
use App\Models\Article;

final class UpdateArticle
{
    private $article;

    private $title;

    private $body;

    private $shouldBeSubmitted;

    private $originalUrl;

    private $tags;

    public function __construct(Article $article, string $title, string $body, bool $shouldBeSubmitted, array $options = [])
    {
        $this->article = $article;
        $this->title = $title;
        $this->body = $body;
        $this->shouldBeSubmitted = $shouldBeSubmitted;
        $this->originalUrl = $options['original_url'] ?? null;
        $this->tags = $options['tags'] ?? [];
    }

    public static function fromRequest(Article $article, ArticleRequest $request): self
    {
        return new static(
            $article,
            $request->title(),
            $request->body(),
            $request->shouldBeSubmitted(),
            [
                'original_url' => $request->originalUrl(),
                'tags' => $request->tags(),
            ]
        );
    }

    public function handle(): Article
    {
        $this->article->update([
            'title' => $this->title,
            'body' => $this->body,
            'original_url' => $this->originalUrl,
            'slug' => $this->title,
            'submitted_at' => $this->shouldUpdateSubmittedAt() ? now() : $this->article->submittedAt(),
        ]);
        $this->article->syncTags($this->tags);

        return $this->article;
    }

    private function shouldUpdateSubmittedAt(): bool
    {
        return $this->shouldBeSubmitted && $this->article->isNotSubmitted();
    }
}
