<?php 
// Vytvoření proměnné image, do které uložím pole 'galerie'
$images = get_field('galerie');

// Podmínka
if( $images ): ?>
    <ul>
        <?php foreach( $images as $image ): ?>
            <li>
                <a href="<?php echo $image['url']; ?>" rel="lightbox[reference]">
                     <img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>" />
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>