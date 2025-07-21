<?php
require_once 'stories-service.php';

// Example usage of the stories service

// Get all stories for Arabic
$arabicStories = getStories('ar');
echo "Arabic stories count: " . count($arabicStories['stories']) . "\n";

// Get all stories for English
$englishStories = getStories('en');
echo "English stories count: " . count($englishStories['stories']) . "\n";

// Get a specific story by ID
$story = getStoryById('story_1', 'ar');
if ($story) {
    echo "Story found: " . $story['name'] . "\n";
}

// Get stories by type
$videoStories = getStoriesByType('stories_video', 'ar');
echo "Video stories count: " . count($videoStories) . "\n";

$textStories = getStoriesByType('stories', 'ar');
echo "Text stories count: " . count($textStories) . "\n";

// Get all story types
$types = getAllStoriesTypes('ar');
echo "Available story types: " . implode(', ', $types) . "\n";

// Example of adding a new story
/*
$newStory = [
    'name' => 'New Success Story',
    'type' => 'stories',
    'image' => 'assets/img/story/new_story.jpg',
    'modal' => [
        'title' => 'New Success Story Title',
        'images' => ['assets/img/story/new_story.jpg'],
        'content' => [
            'This is the first paragraph of the new success story.',
            'This is the second paragraph with more details.'
        ]
    ]
];

$storyId = addStory($newStory, 'ar');
echo "New story added with ID: " . $storyId . "\n";
*/

// Example of updating a story
/*
$updateResult = updateStory('story_1', ['name' => 'Updated Story Name'], 'ar');
if ($updateResult) {
    echo "Story updated successfully\n";
}
*/

// Example of deleting a story
/*
$deleteResult = deleteStory('story_1', 'ar');
if ($deleteResult) {
    echo "Story deleted successfully\n";
}
*/
?> 