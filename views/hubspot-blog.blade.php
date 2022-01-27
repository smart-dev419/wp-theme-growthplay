@layout('layouts/master')
<?php /* this page will be moved to HubSpot --- do not code it in WP */ ?>
<?php /* Template Name: Hubspot Blog */ ?>
@section('content')
<?php while ( have_posts() ) : the_post(); ?>
<main class="pusher">
    <header class="page-title" style="background-image: url('{{ asset('images/bg-title03.jpg') }}');">
        <div class="container">
            <h1>Sales Effectiveness Blog</h1>
        </div>
    </header>
    <div class="container">
        <div class="filter add">
            <div>
                <form action="#" class="form-subscribe">
                    <div class="form-group">
                        <input type="submit" class="btn btn-green" value="Subscribe">
                        <div class="input-wrap">
                            <input type="email" placeholder="Enter Email for Updates">
                        </div>
                    </div>
                    <span class="msg" style="display: none;">Thank You for Subscribing!</span>
                </form>
            </div>
            <div>
                <select>
                    <option data-display="Topics">Topics</option>
                    <option>Sales Messaging</option>
                    <option>Sales Talent</option>
                    <option>Sales Process</option>
                    <option>Sales Planning</option>
                    <option>Adoption &amp; Reinforcement</option>
                    <option>Sales Transformation</option>
                </select>
                <form action="#" class="search-form">
                    <a href="#" class="search-opener"><span>Search</span><i class="icon-search"></i></a>
                    <div class="search-inner">
                        <div class="search-drop">
                            <input type="search" placeholder="Search">
                            <button type="submit"><i class="icon-search"></i></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="blog-list">
            <article class="blog">
                <div class="blog-row">
                    <div class="blog-left">
                        <a href="#" class="blog-img"><img src="{{ asset('images/img26.jpg') }}" alt="image description"></a>
                    </div>
                    <div class="blog-body">
                        <header class="blog-heading">
                            <h2><a href="#">Why Your Land-and-Expand Sales Strategy Isn't Working</a></h2>
                            <div class="blog-meta">by <a href="#">Rachel Clapp Miller</a> / <time datetime="2016-11-01">November 1, 2016</time></div>
                        </header>
                        <p>There isn’t a sales organization out there that isn’t trying to increase revenue, either by selling more complex deals with their current prospects or by expanding their solution-set with current customers. If you are having challenges with your own land and expand strategy, it likely comes down to how you are equipping your reps to expand and how your company is aligned behind the strategy.</p>
                    </div>
                </div>
                <div class="blog-row">
                    <div class="blog-left">
                        <ul class="social-links">
                            <li>Share:</li>
                            <li><a href="#"><i class="icon-facebook"></i></a></li>
                            <li><a href="#"><i class="icon-twitter"></i></a></li>
                            <li><a href="#"><i class="icon-linkedin"></i></a></li>
                            <li><a href="#"><i class="icon-google-plus"></i></a></li>
                        </ul>
                    </div>
                    <div class="blog-body">
                        <ul class="blog-tag">
                            <li><a href="#">Sales Messaging</a></li>
                            <li><a href="#">Sales Process</a></li>
                        </ul>
                        <a href="#" class="link">Read More</a>
                    </div>
                </div>
            </article>
            <article class="blog">
                <div class="blog-row">
                    <div class="blog-left">
                        <a href="#" class="blog-img"><img src="{{ asset('images/img27.jpg') }}" alt="image description"></a>
                    </div>
                    <div class="blog-body">
                        <header class="blog-heading">
                            <h2><a href="#">Six Things Every Sales Messaging Strategy Needs</a></h2>
                            <div class="blog-meta">by <a href="#">Rachel Clapp Miller</a> / <time datetime="2016-10-21">Oct 21, 2016</time></div>
                        </header>
                        <p>If you’re a veteran seller, you likely appreciate a good sales conversation. So what makes a sales conversation stand out? One that’s focused on customer needs and the unique value your solution provides.</p>
                        <p>A well-defined sales messaging strategy drives these types of conversations, and ultimately results in overall sales productivity and bottom-line revenue impact. Without a framework to implement your sales messaging strategy, you run the risk of lagging sales, quarter after quarter.</p>
                    </div>
                </div>
                <div class="blog-row">
                    <div class="blog-left">
                        <ul class="social-links">
                            <li>Share:</li>
                            <li><a href="#"><i class="icon-facebook"></i></a></li>
                            <li><a href="#"><i class="icon-twitter"></i></a></li>
                            <li><a href="#"><i class="icon-linkedin"></i></a></li>
                            <li><a href="#"><i class="icon-google-plus"></i></a></li>
                        </ul>
                    </div>
                    <div class="blog-body">
                        <ul class="blog-tag">
                            <li><a href="#">Sales Messaging</a></li>
                        </ul>
                        <a href="#" class="link">Read More</a>
                    </div>
                </div>
            </article>
            <article class="blog">
                <div class="blog-row">
                    <div class="blog-left">
                        <a href="#" class="blog-img"><img src="{{ asset('images/img28.jpg') }}" alt="image description"></a>
                    </div>
                    <div class="blog-body">
                        <header class="blog-heading">
                            <h2><a href="#">Key Questions that Will Help You Be a Better Sales Coach</a></h2>
                            <div class="blog-meta">by <a href="#">Rachel Clapp Miller</a> / <time datetime="2016-10-18">Oct 18, 2016</time></div>
                        </header>
                        <p>Providing constructive and consistent feedback is an important part of coaching your sales reps to success. Being an effective sales coach and understanding how to give productive feedback and drive success on your teams takes practice.</p>
                        <p>Opportunity reviews and sales calls are two areas where you can make a great impact as a sales coach. Here are some key questions to use in both of those areas that will help garner positive results:</p>
                    </div>
                </div>
                <div class="blog-row">
                    <div class="blog-left">
                        <ul class="social-links">
                            <li>Share:</li>
                            <li><a href="#"><i class="icon-facebook"></i></a></li>
                            <li><a href="#"><i class="icon-twitter"></i></a></li>
                            <li><a href="#"><i class="icon-linkedin"></i></a></li>
                            <li><a href="#"><i class="icon-google-plus"></i></a></li>
                        </ul>
                    </div>
                    <div class="blog-body">
                        <a href="#" class="link">Read More</a>
                    </div>
                </div>
            </article>
            <article class="blog">
                <div class="blog-row">
                    <div class="blog-left">
                        <a href="#" class="blog-img"><img src="{{ asset('images/img29.jpg') }}" alt="image description"></a>
                    </div>
                    <div class="blog-body">
                        <header class="blog-heading">
                            <h2><a href="#">Why Great Salespeople Make Terrible Sales Managers</a></h2>
                            <div class="blog-meta">by <a href="#">Bruce Sevy</a> / <time datetime="2016-10-14">Oct 14, 2016</time></div>
                        </header>
                        <p>Bruce Sevy is the Managing Director of GrowthPlay's Talent Analytics Center. He has a passion for talent management and is a 20+ year veteran in designing and implementing efficient, high-impact talent management systems, tools and processes that help organizations select, deploy, develop, reward, and promote high performance employees at all organizational levels.</p>
                    </div>
                </div>
                <div class="blog-row">
                    <div class="blog-left">
                        <ul class="social-links">
                            <li>Share:</li>
                            <li><a href="#"><i class="icon-facebook"></i></a></li>
                            <li><a href="#"><i class="icon-twitter"></i></a></li>
                            <li><a href="#"><i class="icon-linkedin"></i></a></li>
                            <li><a href="#"><i class="icon-google-plus"></i></a></li>
                        </ul>
                    </div>
                    <div class="blog-body">
                        <ul class="blog-tag">
                            <li><a href="#">Sales Talent</a></li>
                        </ul>
                        <a href="#" class="link">Read More</a>
                    </div>
                </div>
            </article>
            <article class="blog">
                <div class="blog-row">
                    <div class="blog-left">
                        <a href="#" class="blog-img"><img src="{{ asset('images/img30.jpg') }}" alt="image description"></a>
                    </div>
                    <div class="blog-body">
                        <header class="blog-heading">
                            <h2><a href="#">How to Compete Against "Do it Internally"</a></h2>
                            <div class="blog-meta">by <a href="#">Brian Walsh</a> / <time datetime="2016-10-11">Oct 11, 2016</time></div>
                        </header>
                        <p>We’ve all been in this conversation at one time or another in our sales careers. Your prospect may understand some of the value you can provide, but is also considering using internal resources to achieve the same result.</p>
                        <p>If you put yourself in the buyer’s shoes, this option makes complete sense. When looking at potential solutions, you would be negligent not to weigh all your options. As a seller, you must remember that “Do it Internally” is a very different competitor than “Do Nothing." Where “Do Nothing” is a conversation focused on the need for change, “Do it Internally” is a conversation about business resources, outcomes and metrics.</p>
                    </div>
                </div>
                <div class="blog-row">
                    <div class="blog-left">
                        <ul class="social-links">
                            <li>Share:</li>
                            <li><a href="#"><i class="icon-facebook"></i></a></li>
                            <li><a href="#"><i class="icon-twitter"></i></a></li>
                            <li><a href="#"><i class="icon-linkedin"></i></a></li>
                            <li><a href="#"><i class="icon-google-plus"></i></a></li>
                        </ul>
                    </div>
                    <div class="blog-body">
                        <a href="#" class="link">Read More</a>
                    </div>
                </div>
            </article>
            <article class="blog">
                <div class="blog-row">
                    <div class="blog-left">
                        <a href="#" class="blog-img"><img src="{{ asset('images/img30.jpg') }}" alt="image description"></a>
                    </div>
                    <div class="blog-body">
                        <header class="blog-heading">
                            <h2><a href="#">What to Do When "Do Nothing" is Your Biggest Competition</a></h2>
                            <div class="blog-meta">by <a href="#">Brian Walsh</a> / <time datetime="2016-10-07">Oct 7, 2016</time></div>
                        </header>
                        <p>Understanding the best way to differentiate against your competition is critical to being an effective salesperson. The “Do Nothing” competitor is always one of the toughest. Who has instant access to the decision maker? Who is always part of the sales opportunity whether you are or not? The dreaded “Do Nothing.”</p>
                        <p>“Do Nothing” is always part of the equation because it is often the easier solution for those who are part of the decision process.</p>
                        <p>“Do Nothing” loves to remind people that there’s always something more important to worry about within the organization.</p>
                    </div>
                </div>
                <div class="blog-row">
                    <div class="blog-left">
                        <ul class="social-links">
                            <li>Share:</li>
                            <li><a href="#"><i class="icon-facebook"></i></a></li>
                            <li><a href="#"><i class="icon-twitter"></i></a></li>
                            <li><a href="#"><i class="icon-linkedin"></i></a></li>
                            <li><a href="#"><i class="icon-google-plus"></i></a></li>
                        </ul>
                    </div>
                    <div class="blog-body">
                        <ul class="blog-tag">
                            <li><a href="#">Differentiation</a></li>
                        </ul>
                        <a href="#" class="link">Read More</a>
                    </div>
                </div>
            </article>
            <article class="blog">
                <div class="blog-row">
                    <div class="blog-left">
                        <a href="#" class="blog-img"><img src="{{ asset('images/img30.jpg') }}" alt="image description"></a>
                    </div>
                    <div class="blog-body">
                        <header class="blog-heading">
                            <h2><a href="#">How to Reinforce Your Sales Training Program</a></h2>
                            <div class="blog-meta">by <a href="#">Rachel Clapp Miller</a> / <time datetime="2016-10-04">Oct 4, 2016</time></div>
                        </header>
                        <p>If you want to improve sales productivity and generate more revenue per rep, you need a proven sales methodology you can reinforce. When we talk about sales transformation, we mean changing the behaviors of your salespeople in a way that drives results.</p>
                        <p>Simply scheduling a training event is not going to drive measurable impact. You need to optimize that program for success.</p>
                    </div>
                </div>
                <div class="blog-row">
                    <div class="blog-left">
                        <ul class="social-links">
                            <li>Share:</li>
                            <li><a href="#"><i class="icon-facebook"></i></a></li>
                            <li><a href="#"><i class="icon-twitter"></i></a></li>
                            <li><a href="#"><i class="icon-linkedin"></i></a></li>
                            <li><a href="#"><i class="icon-google-plus"></i></a></li>
                        </ul>
                    </div>
                    <div class="blog-body">
                        <ul class="blog-tag">
                            <li><a href="#">Sales Transformation</a></li>
                            <li><a href="#">Sales Adoption</a></li>
                        </ul>
                        <a href="#" class="link">Read More</a>
                    </div>
                </div>
            </article>
            <article class="blog">
                <div class="blog-row">
                    <div class="blog-left">
                        <a href="#" class="blog-img"><img src="{{ asset('images/img30.jpg') }}" alt="image description"></a>
                    </div>
                    <div class="blog-body">
                        <header class="blog-heading">
                            <h2><a href="#">Beating the Competition: The Mistake Your Organization is Making</a></h2>
                            <div class="blog-meta">by <a href="#">Rachel Clapp Miller</a> / <time datetime="2016-09-27">Sep 27, 2016</time></div>
                        </header>
                        <p>We talk a lot about the importance of articulating differentatiation in the sales process. Even the greenest sales reps know they need a way to explain why their solution is different. Still, even if they have the best product on the market, many sales organizations struggle with enabling their sales team to effectively articulate why they're different than the competition in a way that has meaning to the buyer.</p>
                    </div>
                </div>
                <div class="blog-row">
                    <div class="blog-left">
                        <ul class="social-links">
                            <li>Share:</li>
                            <li><a href="#"><i class="icon-facebook"></i></a></li>
                            <li><a href="#"><i class="icon-twitter"></i></a></li>
                            <li><a href="#"><i class="icon-linkedin"></i></a></li>
                            <li><a href="#"><i class="icon-google-plus"></i></a></li>
                        </ul>
                    </div>
                    <div class="blog-body">
                        <ul class="blog-tag">
                            <li><a href="#">Differentiation</a></li>
                        </ul>
                        <a href="#" class="link">Read More</a>
                    </div>
                </div>
            </article>
            <article class="blog">
                <div class="blog-row">
                    <div class="blog-left">
                        <a href="#" class="blog-img"><img src="{{ asset('images/img30.jpg') }}" alt="image description"></a>
                    </div>
                    <div class="blog-body">
                        <header class="blog-heading">
                            <h2><a href="#">Four Ways to Improve Your B2B Sales Process</a></h2>
                            <div class="blog-meta">by <a href="#">Rachel Clapp Miller</a> / <time datetime="2016-09-23">Sep 23, 2016</time></div>
                        </header>
                        <p>Efficiency and alignment are critical elements of sales productivity. An effective B2B sales process provides a mechanism that drives repeatability, predictability and validation of progress throughout a sale. Most importantly, it allows for inspection and planning – in advance.</p>
                        <p>Sales is the engine that drives your revenues. You can't assume a great product will simply sell itself. If the value and differentiation isn't clear to the customer, even crafting the best deal will not help your reps in the field.</p>
                    </div>
                </div>
                <div class="blog-row">
                    <div class="blog-left">
                        <ul class="social-links">
                            <li>Share:</li>
                            <li><a href="#"><i class="icon-facebook"></i></a></li>
                            <li><a href="#"><i class="icon-twitter"></i></a></li>
                            <li><a href="#"><i class="icon-linkedin"></i></a></li>
                            <li><a href="#"><i class="icon-google-plus"></i></a></li>
                        </ul>
                    </div>
                    <div class="blog-body">
                        <ul class="blog-tag">
                            <li><a href="#">Sales Messaging</a></li>
                            <li><a href="#">Sales Process</a></li>
                        </ul>
                        <a href="#" class="link">Read More</a>
                    </div>
                </div>
            </article>
            <article class="blog">
                <div class="blog-row">
                    <div class="blog-left">
                        <a href="#" class="blog-img"><img src="{{ asset('images/img30.jpg') }}" alt="image description"></a>
                    </div>
                    <div class="blog-body">
                        <header class="blog-heading">
                            <h2><a href="#">Effective Sales Managers: The Key to Rep Success</a></h2>
                            <div class="blog-meta">by <a href="#">Rachel Clapp Miller</a> / <time datetime="2016-09-20">Sep 20, 2016</time></div>
                        </header>
                        <p>No matter how talented and dedicated your front line sales reps, your organization's success is heavily influenced by sales performance management. Your managers play a key role in developing team members that optimize productivity and revenue.</p>
                        <p>The following is a look at some of the key ways you can enable your sales managers to drive rep success.</p>
                    </div>
                </div>
                <div class="blog-row">
                    <div class="blog-left">
                        <ul class="social-links">
                            <li>Share:</li>
                            <li><a href="#"><i class="icon-facebook"></i></a></li>
                            <li><a href="#"><i class="icon-twitter"></i></a></li>
                            <li><a href="#"><i class="icon-linkedin"></i></a></li>
                            <li><a href="#"><i class="icon-google-plus"></i></a></li>
                        </ul>
                    </div>
                    <div class="blog-body">
                        <ul class="blog-tag">
                            <li><a href="#">Sales Coaching</a></li>
                            <li><a href="#">Adoption and Reinforcement</a></li>
                        </ul>
                        <a href="#" class="link">Read More</a>
                    </div>
                </div>
            </article>
        </div>
        @include('partials/pagination')
    </div>
</main>

<?php endwhile; ?>
@endsection