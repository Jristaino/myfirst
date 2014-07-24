<h1>This is a blog</h1>
 
<?php
 
$articles = array();
 
$article = new stdClass();
$article->name = 'Article 1';
$article->author = 'Author 1';
$article->body = '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi consectetur neque et sem blandit blandit.
 Proin vitae pretium lorem. Ut nec elementum justo.Ut vulputate porttitor magna, vehicula posuere ligula. 
Nulla congue risus eget faucibus sodales. Nunc volutpat ante vitae nulla euismod, et hendrerit libero convallis. 
Phasellus dapibus, eros et pulvinar aliquet, mi ligula fringilla orci, sit amet faucibus massa nisl sit amet risus. 
Sed rutrum quam vulputate est vestibulum, quis scelerisque mi ultrices. Mauris eget auctor nibh, interdum interdum nibh. 
Phasellus laoreet placerat nulla, vitae condimentum nulla fringilla quis. Ut pellentesque arcu eu purus congue auctor. 
Nulla mattis turpis sit amet erat consequat dictum. Quisque lacinia faucibus elit sed porttitor.<p/>';
$articles[] = $article;
 
 
$article = new stdClass();
$article->name = 'Article 2';
$article->author = 'Author 2';
$article->body = '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi consectetur neque et sem blandit blandit.
 Proin vitae pretium lorem. Ut nec elementum justo.Ut vulputate porttitor magna, vehicula posuere ligula. 
Nulla congue risus eget faucibus sodales. Nunc volutpat ante vitae nulla euismod, et hendrerit libero convallis. 
Phasellus dapibus, eros et pulvinar aliquet, mi ligula fringilla orci, sit amet faucibus massa nisl sit amet risus. 
Sed rutrum quam vulputate est vestibulum, quis scelerisque mi ultrices. Mauris eget auctor nibh, interdum interdum nibh. 
Phasellus laoreet placerat nulla, vitae condimentum nulla fringilla quis. Ut pellentesque arcu eu purus congue auctor. 
Nulla mattis turpis sit amet erat consequat dictum. Quisque lacinia faucibus elit sed porttitor.<p/>';
$articles[] = $article;
 
 
$article = new stdClass();
$article->name = 'Article 3';
$article->author = 'Article 3';
$article->body = '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi consectetur neque et sem blandit blandit.
 Proin vitae pretium lorem. Ut nec elementum justo.Ut vulputate porttitor magna, vehicula posuere ligula. 
Nulla congue risus eget faucibus sodales. Nunc volutpat ante vitae nulla euismod, et hendrerit libero convallis. 
Phasellus dapibus, eros et pulvinar aliquet, mi ligula fringilla orci, sit amet faucibus massa nisl sit amet risus. 
Sed rutrum quam vulputate est vestibulum, quis scelerisque mi ultrices. Mauris eget auctor nibh, interdum interdum nibh. 
Phasellus laoreet placerat nulla, vitae condimentum nulla fringilla quis. Ut pellentesque arcu eu purus congue auctor. 
Nulla mattis turpis sit amet erat consequat dictum. Quisque lacinia faucibus elit sed porttitor.<p/>';
$articles[] = $article;
 
foreach ($articles as $article){
    print '<h2>' . $article->name . '</h2>';
    print '<bold>By: ' . $article->author . '</bold><br/>';
    print $article->body . '<br/><br/>';
    
 
}
 
?>
