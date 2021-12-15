<?php

declare(strict_types=1);

namespace App\Services;

use App\Contracts\ParcerContract;
use Orchestra\Parser\Xml\Facade as XmlParser;
use App\Models\NewsCategory;
use App\Models\News;
use Illuminate\Support\Facades\Auth;

class ParcerService implements ParcerContract
{

    public function getData(string $url): array
    {
        $load = XMLParser::load($url);
        return $load->parse([
            'news' => [
                'uses' => 'channel.item[category,title,description,enclosure::url,pubDate]',
            ]
        ]);
        
    }
    public function saveData(string $url, string $author): void
    {
        $data = $this->getData($url);
        if (is_null(NewsCategory::where('name', $data['news'][0]['category'])->first())) {
            $category_id = NewsCategory::create([
                'name' =>  $data['news'][0]['category'],
            ])->id;
        } else {
            $category_id = NewsCategory::where('name', $data['news'][0]['category'])->first()->id;
        }
        foreach ($data['news'] as $item) {
            News::create([
                'category_id' => $category_id,
                'title' => $item['title'],
                'description' => $item['description'],
                'img' => $item['enclosure::url'],
                'user_id' => $author,
            ]);
        }
        
    }
}