<?php   $this->_t = 'Blog de Jean FORTEROCHE';
foreach($posts as $post): ?>

<h2><?= $post->title() ?></h2>
<time><?= $post->date() ?></time>

<?php endforeach; ?>