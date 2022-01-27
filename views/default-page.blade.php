@layout('layouts/master')
@section('content')
<?php while ( have_posts() ) : the_post(); ?>
<main class="pusher">
	<?php $img = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full'); ?>
	@if( has_post_thumbnail() )
    <header class="page-title has-overlay" style="background-image: url('{{ $img[0] }}');">
    @else	
    <header class="page-title">
    @endif
        <div class="container">
            <h1>{{ the_title() }}</h1>
        </div>
    </header>

	<div class="page-main">
    	<div class="container">
            {{ the_content() }}
        </div>
    </div>
</main>
<?php endwhile; ?>

@endsection