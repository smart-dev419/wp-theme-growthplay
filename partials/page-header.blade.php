<?php $bg_img = wp_get_attachment_image_src( get_field('header_bg_image'), 'full'); ?>
<header class="page-title {{ get_field('header_bg_image') ? 'has-overlay' : null }}" style="background-image: url('{{ $bg_img[0] }}');">
    <div class="container">
        <h1>{{ get_field('page_header') }}</h1>
    </div>
</header>
