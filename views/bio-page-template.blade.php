@layout('layouts/master')
@section('content')
<?php while ( have_posts() ) : the_post(); ?>
<main class="pusher">
    <header class="page-title">
        <div class="container">
            <?php $terms = gp_get_people_categories(get_the_ID()); ?>
            <h1>{{ $terms->name }}</h1>
        </div>
    </header>
    <div class="avatar_bio">
        <div class="container">
            <div class="avatar-img">
                {{ Helper::image(get_field('image'), 'full') }}
            </div>
            <div class="avatar-body">
                <span class="avatar-position">{{ get_field('job_title') }}</span>
                <h2 class="avatar-name">{{ get_field('first_name') }} {{ get_field('last_name') }}</h2>
                <p>{{ get_field('short_description') }}</p>
            </div>
        </div>
    </div>
    <div class="container pb-40">
        <aside class="social-info">
            @if( get_field('twitter_url') != "" )
                <a href="{{ get_field('twitter_url') }}" target="_blank" class="icon-twitter"></a>
            @endif

            @if( get_field('linkedin_url') != "" )
                <a href="{{ get_field('linkedin_url') }}" target="_blank" class="icon-linkedin"></a>
            @endif
            
            @if( get_field('growthplay_email') != "" )
                <a href="mailto:{{ get_field('growthplay_email') }}">{{ get_field('growthplay_email') }}</a>
            @endif
        </aside>
        <div class="column-2">
            {{ get_field('bio') }}
        </div>
        <div class="text-right">
            <a href="{{ get_bloginfo('url').'/'.$terms->slug }}" class="link">{{ _e( 'Back to ' ) }}{{ $terms->name }}</a>
        </div>
    </div>
</main>
<?php endwhile; ?>

@endsection