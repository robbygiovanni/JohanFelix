<div class="grid-col grid-col--1"></div>
<div class="grid-col grid-col--2"></div>
<div class="grid-col grid-col--3"></div>
<div class="grid-col grid-col--4"></div>
<!-- items -->
<?php foreach ($photo as $photos) : ?>
    <div class="grid-item">
        <img id="gambar1" class="img-item" src="<?= $photos['link_photo'] ?>" alt="picture">
    </div>
<?php endforeach; ?>