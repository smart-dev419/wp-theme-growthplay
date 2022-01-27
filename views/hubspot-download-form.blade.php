@layout('layouts/master')
<?php /* this page will be moved to HubSpot --- do not code it in WP */ ?>
<?php /* Template Name: Hubspot Download Form */ ?>
@section('content')
<?php while ( have_posts() ) : the_post(); ?>
<main class="pusher">
    <header class="page-title hidden-mobile">
        <div class="container">
            <span class="page-subtitle">Resources</span>
            <h1>Sales Messaging</h1>
        </div>
    </header>
    <div class="hero">
        <div class="container">
            <div class="hero-img" style="background-image: url('{{ asset('images/img36.jpg') }}');"></div>
            <div class="title-wrap">
                <h1>The Ultimate Guide to Articulating Differentiation</h1>
            </div>
        </div>
    </div>
    <div class="download-section">
        <div class="container">
            <div>
                <div class="col">
                    <h2>Help Your Sales Team Stand Out from the Competition</h2>
                    <p>Best-in-class sellers know how to effectively articulate differentiation in a way that builds a connection back to thepositive business outcomes their customers are trying to achieve.</p>
                    <p>Are you or your sellers having trouble explaining your organization's differentiation factors?</p>
                    <p>We've compiled the best tips and exercises to help your sellers become effective differentiators.</p>
                    <p>Your ultimate guide includes:</p>
                    <ul class="list-dot">
                        <li>Three ways to demonstrate you’re better than the competition</li>
                        <li>The one thing that could derail your next opportunity</li>
                        <li>How to enable your sellers to demonstrate differentiation</li>
                    </ul>
                </div>
                <div class="col">
                    <div class="img"><img src="{{ asset('images/img35.jpg') }}" alt="image description"></div>
                    <form action="#" class="form-download form">
                        <h3>Get Your Guide</h3>
                        <p>Fill Out The Form To Instantly Receive Your Guide</p>
                        <div class="form-field">
                            <input type="text" id="fname" placeholder="First Name*">
                            <input type="text" id="lname" placeholder="Last Name*">
                            <input type="email" id="email" placeholder="Email*">
                            <input type="text" id="cname" placeholder="Company Name*">
                        </div>
                        <input type="submit" value="Get it now" class="btn btn-green">
                    </form>
                </div>
            </div>
            <div style="display: none;">
                <div class="col">
                    <p>Vero inimicus te sea, cu amet inani nec. Noster dictas conclusionemque id qui. Qui ut modo utamur.</p>
                    <p>Vim prima adipiscing ut: </p>
                    <ul class="list-dot">
                        <li>Per posidonium persequeris ad</li>
                        <li>Etiam scaevola id has, usu ex ipsum</li>
                        <li>theophrastus concludaturque</li>
                        <li>Ea eum suas consul saperet</li>
                    </ul>
                </div>
                <div class="col text-center">
                    <div class="img"><img src="{{ asset('images/img35.jpg') }}" alt="image description"></div>
                    <a href="#" class="btn btn-green">Download Guide</a>
                </div>
            </div>
        </div>
    </div>
</main>	
<?php endwhile; ?>
@endsection