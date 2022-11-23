<h1><?php echo $heading; ?></h1>
<?php foreach($listings as $listing): ?>
    <div class="listing">
        <h2><?php echo $listing['title']; ?></h2>
        <p><?php echo $listing['description']; ?></p>
    </div>
<?php endforeach; ?>