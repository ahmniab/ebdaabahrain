<?php
function getYouTubeEmbedUrl($url) {
  if (strpos($url, 'youtube.com/embed/') !== false) {
      return $url;
  }

  // Extract video ID from different YouTube URL formats
  $videoId = '';
  $patterns = [
      // Standard URL (https://www.youtube.com/watch?v=VIDEO_ID)
      '/youtube\.com\/watch\?v=([a-zA-Z0-9_-]+)/',
      // Short URL (https://youtu.be/VIDEO_ID)
      '/youtu\.be\/([a-zA-Z0-9_-]+)/',
      // Embed URL (https://www.youtube.com/embed/VIDEO_ID)
      '/youtube\.com\/embed\/([a-zA-Z0-9_-]+)/',
      // URL with extra parameters (https://www.youtube.com/watch?v=VIDEO_ID&feature=share)
      '/youtube\.com\/watch\?.*v=([a-zA-Z0-9_-]+)/',
  ];

  foreach ($patterns as $pattern) {
      if (preg_match($pattern, $url, $matches)) {
          $videoId = $matches[1];
          break;
      }
  }

  if (empty($videoId)) {
      return false; // Invalid YouTube URL
  }

  return "https://www.youtube.com/embed/{$videoId}";
}