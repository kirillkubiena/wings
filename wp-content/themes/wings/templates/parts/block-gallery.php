<?php 
// Vytvoření proměnné image, do které uložím pole 'galerie'
$images = get_field('galerie');

// Podmínka
if( $images ): ?>
    <ul>
        <!-- Procházení pole obrázku, vložení jednotlivých položek pole do proměnné image -->
        <?php foreach( $images as $image ): ?>
            <li>
                <!-- Odkaz pro rozkliknutí obrázku -->
                <a href="<?php echo $image['url']; ?>" rel="lightbox[reference]">
                    <!-- Vložení obrázku -->
                     <img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>" />
                </a>
            </li>
        <!-- Ukončení procházení pole -->
        <?php endforeach; ?>
    </ul>
<!-- Ukončení podmínky -->
<?php endif; ?>


