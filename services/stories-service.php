<?php

function getStories(string $lang = 'ar')
{
    $file_name = __DIR__ . '/../uploads/stories-' . $lang . '.json';
    if (!file_exists($file_name)) {
        die("Unable to find language!");
    }
    $json = file_get_contents($file_name);
    return json_decode($json, true);
}

function saveStories(array $data, string $lang = 'ar')
{
    $file_name = __DIR__ . '/../uploads/stories-' . $lang . '.json';
    file_put_contents($file_name, json_encode($data, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));
}

function addStory(array $storyItem, string $lang = 'ar')
{
    $data = getStories($lang);
    $storyItem['id'] = 'story_' . time();
    if (!isset($data['stories'])) {
        $data['stories'] = [];
    }
    array_push($data['stories'], $storyItem); // Add to end
    saveStories($data, $lang);
    return $storyItem['id'];
}

function updateStory(string $id, array $updatedFields, string $lang = 'ar')
{
    $data = getStories($lang);
    if (!isset($data['stories'])) return false;
    foreach ($data['stories'] as &$item) {
        if ($item['id'] === $id) {
            $item = array_merge($item, $updatedFields);
            saveStories($data, $lang);
            return true;
        }
    }
    return false;
}

function deleteStory(string $id, string $lang = 'ar')
{
    $data = getStories($lang);
    if (!isset($data['stories'])) return false;
    $found = false;
    $data['stories'] = array_filter($data['stories'], function ($item) use ($id, &$found) {
        if ($item['id'] === $id) {
            $found = true;
            return false;
        }
        return true;
    });
    if ($found) {
        saveStories($data, $lang);
    }
    return $found;
}

function getStoryById(string $id, string $lang = 'ar')
{
    $data = getStories($lang);
    if (!isset($data['stories'])) return null;
    foreach ($data['stories'] as $item) {
        if ($item['id'] === $id) {
            return $item;
        }
    }
    return null;
}

function getStoriesByType(string $type, string $lang = 'ar')
{
    $data = getStories($lang);
    if (!isset($data['stories'])) return [];
    return array_filter($data['stories'], function ($item) use ($type) {
        return $item['type'] === $type;
    });
}

function getAllStoriesTypes(string $lang = 'ar')
{
    $data = getStories($lang);
    if (!isset($data['stories'])) return [];
    $types = [];
    foreach ($data['stories'] as $item) {
        if (isset($item['type']) && !in_array($item['type'], $types)) {
            $types[] = $item['type'];
        }
    }
    return $types;
} 