<div class="container">
    <div class="contact-map">
        <div>
            <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d20576.749003601544!2d18.553191694219276!3d49.85948591294049!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x7fb27a495c7fff30!2sKav%C3%A1rna%20WINGS!5e0!3m2!1scs!2scz!4v1580149583476!5m2!1scs!2scz"
            frameborder="0"></iframe>
        </div>
    </div>
    <div class="contact-wrapper">
        <div class="contact-address">
            <h2>Adresa</h2>
            <p><?php the_field('adresa', 'option'); ?></p>
        </div>
        <div class="contact-phone">
            <h2>Telefon</h2><br>
            <a href="tel:<?php the_field('telefon', 'option'); ?>"><?php the_field('telefon', 'option'); ?></a>
        </div>
    </div>
</div>