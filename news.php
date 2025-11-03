<?php
// config.php - Store your API key separately
define('NEWS_API_KEY', 'd87a374125c94e209da970149cf58941');
define('NEWS_API_URL', 'https://newsapi.org/v2/everything');

// news-section.php - Main news display file
class CyberNews {
    private $apiKey;
    private $apiUrl;
    
    public function __construct() {
        $this->apiKey = NEWS_API_KEY;
        $this->apiUrl = NEWS_API_URL;
    }
    
    public function getCyberSecurityNews($pageSize = 10) {
        // Cybersecurity keywords for relevant news
        $keywords = [
            'cybersecurity', 'cyber attack', 'data breach', 'ransomware', 
            'phishing', 'malware', 'hacking', 'data security', 'cyber threat',
            'information security', 'network security', 'cyber crime'
        ];
        
        $query = urlencode(implode(' OR ', $keywords));
        
        $url = $this->apiUrl . "?q={$query}&pageSize={$pageSize}&sortBy=publishedAt&language=en";
        
        $options = [
            'http' => [
                'method' => 'GET',
                'header' => "User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36\r\n"
            ]
        ];
        
        $context = stream_context_create($options);
        
        try {
            // Make API request with proper headers
            $response = file_get_contents($url . "&apiKey=" . $this->apiKey, false, $context);
            $data = json_decode($response, true);
            
            if ($data['status'] === 'ok') {
                return $data['articles'];
            } else {
                return ["error" => $data['message'] ?? 'Unknown error'];
            }
            
        } catch (Exception $e) {
            return ["error" => "Failed to fetch news: " . $e->getMessage()];
        }
    }
    
    public function displayNews() {
        $articles = $this->getCyberSecurityNews(8); // Get 8 articles
        
        if (isset($articles['error'])) {
            echo '<div class="news-error">Error loading news: ' . $articles['error'] . '</div>';
            return;
        }
        
        if (empty($articles)) {
            echo '<div class="no-news">No cybersecurity news available at the moment.</div>';
            return;
        }
        
        echo '<div class="cyber-news-section">';
        echo '<h2>Latest Cybersecurity News</h2>';
        echo '<div class="news-grid">';
        
        foreach ($articles as $article) {
            $this->displayArticle($article);
        }
        
        echo '</div>';
        echo '<div class="news-footer">';
        echo '<p>Auto-updated • Powered by NewsAPI</p>';
        echo '</div>';
        echo '</div>';
    }
    
    private function displayArticle($article) {
        $title = htmlspecialchars($article['title'] ?? 'No title');
        $description = htmlspecialchars($article['description'] ?? 'No description available');
        $url = $article['url'] ?? '#';
        $image = $article['urlToImage'] ?? 'default-news-image.jpg';
        $source = htmlspecialchars($article['source']['name'] ?? 'Unknown Source');
        $date = date('M j, Y', strtotime($article['publishedAt'] ?? 'now'));
        
        echo '<div class="news-article">';
        echo '<div class="article-image">';
        echo '<img src="' . $image . '" alt="' . $title . '" onerror="this.src=\'default-news-image.jpg\'">';
        echo '</div>';
        echo '<div class="article-content">';
        echo '<h3><a href="' . $url . '" target="_blank" rel="noopener">' . $title . '</a></h3>';
        echo '<p class="article-desc">' . $description . '</p>';
        echo '<div class="article-meta">';
        echo '<span class="source">' . $source . '</span>';
        echo '<span class="date">' . $date . '</span>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
    }
}

// Auto-refresh functionality (cache for 1 hour)
function getCachedNews() {
    $cache_file = 'news_cache.json';
    $cache_time = 3600; // 1 hour
    
    if (file_exists($cache_file) && (time() - filemtime($cache_file)) < $cache_time) {
        return json_decode(file_get_contents($cache_file), true);
    }
    
    $news = new CyberNews();
    $articles = $news->getCyberSecurityNews(8);
    
    if (!isset($articles['error'])) {
        file_put_contents($cache_file, json_encode($articles));
    }
    
    return $articles;
}

// Usage in your HTML/PHP page:
?>


<!DOCTYPE html>
<html>
<head>
    <title>Cybersecurity News</title>
    <style>
        .cyber-news-section { max-width: 1200px; margin: 0 auto; padding: 20px; }
        .news-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 20px; }
        .news-article { border: 1px solid #ddd; border-radius: 8px; overflow: hidden; }
        .article-image img { width: 100%; height: 200px; object-fit: cover; }
        .article-content { padding: 15px; }
        .article-content h3 { margin: 0 0 10px 0; }
        .article-content h3 a { color: #333; text-decoration: none; }
        .article-content h3 a:hover { color: #007bff; }
        .article-desc { color: #666; margin-bottom: 10px; }
        .article-meta { display: flex; justify-content: space-between; font-size: 12px; color: #999; }
        .news-error, .no-news { padding: 20px; text-align: center; color: #666; }
        .news-footer { text-align: center; margin-top: 20px; color: #999; font-size: 12px; }
    </style>
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    
    <?php
    include 'includes/navbar.php';
    $news = new CyberNews();
    $news->displayNews();
    ?>
    
    <script>
    // Auto-refresh every hour
    setTimeout(() => {
        window.location.reload();
    }, 3600000); // 1 hour in milliseconds
    </script>
</body>
</html>