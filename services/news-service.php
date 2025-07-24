<?php


function getNews(string $lang = 'ar')
{
    $file_name = __DIR__ . '/../uploads/news-' . $lang . '.json';
    if (!file_exists($file_name)) {
        die("Unable to find language!");
    }
    $json = file_get_contents($file_name);
    return json_decode($json, true);
}

function saveNews(array $data, string $lang = 'ar')
{
    $file_name = __DIR__ . '/../uploads/news-' . $lang . '.json';
    file_put_contents($file_name, json_encode($data, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));
}

function addNews(array $newsItem, string $lang = 'ar')
{
    $data = getNews($lang);
    $newsItem['id'] = 'News' . time();
    $newsItem['date'] = date('Y-m-d');
    if (!isset($data['news_items'])) {
        $data['news_items'] = [];
    }
    array_unshift($data['news_items'], $newsItem); // Add to start
    saveNews($data, $lang);
    return $newsItem['id'];
}

function updateNews(string $id, array $updatedFields, string $lang = 'ar')
{
    $data = getNews($lang);
    if (!isset($data['news_items'])) return false;
    foreach ($data['news_items'] as &$item) {
        if ($item['id'] === $id) {
            $item = array_merge($item, $updatedFields);
            saveNews($data, $lang);
            return true;
        }
    }
    return false;
}

function deleteNews(string $id, string $lang = 'ar')
{
    $data = getNews($lang);
    if (!isset($data['news_items'])) return false;
    $found = false;
    $data['news_items'] = array_filter($data['news_items'], function ($item) use ($id, &$found) {
        if ($item['id'] === $id) {
            $found = true;
            if(isset($item['image'])){
                if(!unlink(__DIR__ . '/../' . $item['image'])){
                    return false;
                }
            }
            if(isset($item['images'])){
                foreach($item['images'] as $image){
                    if(!unlink(__DIR__ . '/../' . $image)){
                        continue;
                    }
                }
            }
            return false;
        }
        return true;
    });
    if ($found) {
        saveNews($data, $lang);
    }
    return $found;
}

function getNewsById(string $id, string $lang = 'ar')
{
    $data = getNews($lang);
    if (!isset($data['news_items'])) return null;
    foreach ($data['news_items'] as $item) {
        if ($item['id'] === $id) {
            return $item;
        }
    }
    return null;
}
