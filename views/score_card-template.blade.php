@layout('layouts/master')
<?php /* Template Name: Score Card Template */ ?>
@section('content')
    <?php while ( have_posts() ) : the_post(); ?>
    <main class="pusher">
        <header class="page-title border">
            <div class="container">
                <span class="page-subtitle">Business to Business Solutions</span>
                <h1>Business to Business Assessment</h1>
            </div>
        </header>
        <section class="section-assessment" id="score-card-tool">
            <div class="container">
                <!-- Score Card VueJS Component -->
                <score-card></score-card>
                <div class="text-right">
                    <a href="/for-b2b/" class="link">Back to B2B Solutions</a>
                </div>
            </div>
            @include('partials/score-card/score-card-footer')
        </section>
    </main>
    @include('partials/score-card/score-card-template')
    <?php endwhile; ?>

@endsection