@layout('layouts/master')
<?php /* this page will be moved to HubSpot --- do not code it in WP */ ?>
<?php /* Template Name: Hubspot Blog Single */ ?>
@section('content')
<?php while ( have_posts() ) : the_post(); ?>
<main class="pusher">
    <div class="page-title--blog">
        <div class="container-grid">
            <div class="col-lg-6">
                <strong class="title">Sales Effectiveness Blog</strong>
            </div>
            <div class="col-lg-6">
                <!-- <form action="#" class="form-subscribe">
                    <div class="form-group">
                        <input type="submit" class="btn btn-green" value="Subscribe">
                        <div class="input-wrap">
                            <input type="email" placeholder="Enter Email for Updates">
                        </div>
                    </div>
                    <span class="msg" style="display: none;">Thank You for Subscribing!</span>
                </form> -->
                <form action="#" class="form-subscribe">
                    <div class="form-group">
                        <span id="hs_cos_wrapper_email_simple_subscription" class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_email_simple_subscription" style="" data-hs-cos-general-type="widget" data-hs-cos-type="email_simple_subscription">
                            <div class="page-header">
                                <h1> </h1>
                            </div>
                            <div id="content">
                                <h3 style="font-weight: normal"></h3>
                                <div style="padding-bottom: 10px">
                                    <input class="email-edit hs-input" type="email" style="padding: 6px; font-size: 15px; width: 507px; margin-left: 0px" placeholder="Enter Email for Updates" name="email" value="">
                                </div>
                                <input type="submit" class="hs-button primary" id="submitbutton" value="Subscribe">
                            </div>
                        </span>
                    </div>
                </form>
                <div class="text-right">
                    <!-- <select>
                        <option data-display="Topics">Topics</option>
                        <option>Sales Messaging</option>
                        <option>Sales Talent</option>
                        <option>Sales Process</option>
                        <option>Sales Planning</option>
                        <option>Adoption &amp; Reinforcement</option>
                        <option>Sales Transformation</option>
                    </select> -->
                    <span id="hs_cos_wrapper_my_post_filter" class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_post_filter" style="" data-hs-cos-general-type="widget" data-hs-cos-type="post_filter">
                        <div class="block">
                            <h3>Topics</h3>
                            <div class="widget-module">
                                <ul>
                                    <li>
                                        <a href="//cmv-growthplay-testing-dev-2714012-2714012.hs-sites.com/blog/topic/sales-messaging">Sales Messaging <span class="filter-link-count" dir="ltr">(4)</span></a>
                                    </li>

                                    <li>
                                        <a href="//cmv-growthplay-testing-dev-2714012-2714012.hs-sites.com/blog/topic/sales-process">Sales Process <span class="filter-link-count" dir="ltr">(3)</span></a>
                                    </li>

                                    <li>
                                        <a href="//cmv-growthplay-testing-dev-2714012-2714012.hs-sites.com/blog/topic/differentiation">Differentiation <span class="filter-link-count" dir="ltr">(2)</span></a>
                                    </li>

                                    <li>
                                        <a href="//cmv-growthplay-testing-dev-2714012-2714012.hs-sites.com/blog/topic/adoption-and-reinforcement">Adoption and Reinforcement <span class="filter-link-count" dir="ltr">(1)</span></a>
                                    </li>

                                    <li>
                                        <a href="//cmv-growthplay-testing-dev-2714012-2714012.hs-sites.com/blog/topic/sales-adoption">Sales Adoption <span class="filter-link-count" dir="ltr">(1)</span></a>
                                    </li>

                                    <li>
                                        <a href="//cmv-growthplay-testing-dev-2714012-2714012.hs-sites.com/blog/topic/sales-coaching">Sales Coaching <span class="filter-link-count" dir="ltr">(1)</span></a>
                                    </li>

                                    <li>
                                        <a href="//cmv-growthplay-testing-dev-2714012-2714012.hs-sites.com/blog/topic/sales-talent">Sales Talent <span class="filter-link-count" dir="ltr">(1)</span></a>
                                    </li>

                                    <li>
                                        <a href="//cmv-growthplay-testing-dev-2714012-2714012.hs-sites.com/blog/topic/sales-transformation">Sales Transformation <span class="filter-link-count" dir="ltr">(1)</span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </span>
                    <form action="#" class="search-form">
                        <a href="#" class="search-opener"><span>Search</span><i class="icon-search"></i></a>
                        <div class="search-inner">
                            <div class="search-drop">
                                <span id="hs_cos_wrapper_my_vertical_search_bar" class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_google_search" style="" data-hs-cos-general-type="widget" data-hs-cos-type="google_search">
                                    <div id="hs-search-module" class="hs-search-module 1b924fc4-20cd-4c4a-b90b-285aed716adc">
                                        <div class="field" role="search">
                                            <label for="hs-search-1b924fc4-20cd-4c4a-b90b-285aed716adc"></label>
                                            <div class="input">
                                                <input type="text" id="hs-search-1b924fc4-20cd-4c4a-b90b-285aed716adc" class="hs-input" value="">
                                                <a class="hs-button primary"></a>
                                            </div>
                                        </div>
                                    </div>
                                </span>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <article class="blog-single">
        <header class="blog-hero">
            <div class="container">
                <h1>Why Your Land-and-Expand Sales Strategy Isn’t Working</h1>
                <div class="blog-meta">
                    <div class="by">by <a href="#">Rachel Clapp Miller</a> / <time datetime="2016-10-1">November 1, 2016</time></div>
                    <ul class="social-links">
                        <li>Share:</li>
                        <li><a href="#"><i class="icon-facebook"></i></a></li>
                        <li><a href="#"><i class="icon-twitter"></i></a></li>
                        <li><a href="#"><i class="icon-linkedin"></i></a></li>
                        <li><a href="#"><i class="icon-google-plus"></i></a></li>
                    </ul>
                </div>
            </div>
        </header>
        <div class="container">
            <div class="img-right"><img src="{{ asset('images/img31.jp') }}'" alt="image description"></div>
            <p>There isn’t a sales organization out there that isn’t trying to increase revenue, either by selling more complex deals with their current prospects or by expanding their solution-set with current customers. If you are having challenges with your own land and expand strategy, it likely comes down to how you are equipping your reps to expand and how your company is aligned behind the strategy.</p>
            <p><strong>Here are two key questions to ask:</strong></p>
            <p>1. Are we using land and expand as a default strategy? In other words, we don’t really have a sales process or our reps can’t get high in accounts so we are using land and expand as a default strategy.</p>
            <p>2. How is your organization internally able to support the expand? When there are many customer-facing functions in your company (services, product, marketing), they all have to be aligned in order to effectively expand your solution.</p><br>
            <p>When companies often execute a land and expand strategy – they fail to really think through the challenges that it presents.  Below  are five key challenges that may be crippling your land-and-expand efforts:</p>
            <h3>1. The Incumbent</h3>
            <p>If you’re trying to land and expand in an account, it is extremely difficult to edge out an incumbent. Your incumbents have the advantage in the account because they have the relationships and they’re embedded in the account. When you get in with a pilot project or a small roll-out, you’re giving the competitor the chance to block your expansion. It’s extremely difficult to expand to a broader solution.</p>
            <h3>2. Fast-paced Technology</h3>
            <p>If you’re selling a technological solution, and you’re relying on a land and expand strategy, you better move quickly because when you’re trying to land – technology is evolving. When you’re a low-cost solution it’s easy for customers to switch to something new and better.</p>
            <h3>3. False Sense of Security</h3>
            <p>When we start small in an account, it can give us a false sense of security. We got into X account! We can now say we have this logo! You’re in the account, but you’re likely in an area that has limited power and limited budget. It’s very easy to rest on our laurels when we get into a big company without an identified strategy.</p>
            <h3>4. Demonstrates Gaps in Your Solution</h3>
            <p>It also demonstrates a gap in your solution – We sell a smaller solution because our larger solution isn’t adequate enough for the organization.</p>
            <h3>5. Branded as the “One-off” Initiative</h3>
            <p>This final challenge may be hurting your sales organization more than you realize. If you land, but don’t expand, you’re branded as a one-off initiative. You become known as the pilot project, or “a proof of concept.” The challenge is that when you get beyond a technical buyer and when CEOs, CFOs or CIOs hear about your solution, they may perceive it as a “rogue” initiative, not tied to the greater business issue.</p>
            <p>It’s a hard “brand” to overcome and it makes it extremely difficult to gain cross functional buy-in from other departments because you are perceived as being a one-off and not an integral part of a larger strategy.</p>
            <p>So what’s the solution? The key is to enable your reps to (1) target the right people that will aid your expand and (2) give them the tools to have conversations that increase the value for the customer. <a href="#">Also, join our webinar Tuesday, November 8th.</a>  Managing Director John Kaplan will present two key concepts that will simplify "Land-and-Expand" for your reps.</p>
            <footer class="blog-footer">
                <div class="topics">
                    <span>Topics:</span>
                    <ul class="blog-tag">
                        <li><a href="#">Sales Messaging</a></li>
                        <li><a href="#">Sales Process</a></li>
                    </ul>
                </div>
                <a href="#" class="link">Back to Blog</a>
            </footer>
            <!-- <form action="#" class="form">
                <div>
                    <label for="fname">First Name <em>*</em></label>
                    <input type="text" id="fname">
                </div>
                <div>
                    <label for="lname">Last Name <em>*</em></label>
                    <input type="text" id="lname">
                </div>
                <div>
                    <label for="email">Email <em>*</em></label>
                    <input type="email" id="email">
                </div>
                <div>
                    <label for="cname">Website</label>
                    <input type="text" id="cname">
                </div>
                <div>
                    <label for="comment">Comment <em>*</em></label>
                    <textarea id="comment"></textarea>
                </div>
                <div class="col-wrap">
                    <div class="col">
                        <label class="nice-form nice--gray">
                            <input type="radio">
                            <span class="fake-input"></span>
                            <span class="fake-label">Subscribe to follo-up comments for this post</span>
                        </label>
                        <input type="submit" value="Submit" class="btn btn-sm btn-blue">
                    </div>
                    <div class="col">
                        <div class="captcha">
                            <span class="dummy">CAPTCHA GOES HERE</span>
                        </div>
                    </div>
                </div>
            </form>
            <ul class="comment-list">
                <li>
                    <div class="comment">
                        <div class="comment-author">
                            <span class="name"><a href="#">William Norberg</a></span>
                            <time datetime="2016-10-21 07:55">10/21/2016, 7:55:31 AM</time>
                        </div>
                        <p>Excellent material to conduct company strategy sessions around, not just sales meetings.</p>
                        <div class="text-right">
                            <a href="#" class="reply">Reply</a>
                        </div>
                    </div>
                    <ul class="comment-list">
                        <li>
                            <div class="comment">
                                <div class="comment-author">
                                    <span class="name"><a href="#">William Norberg</a></span>
                                    <time datetime="2016-10-21 07:55">10/21/2016, 7:55:31 AM</time>
                                </div>
                                <p>Excellent material to conduct company strategy sessions around, not just sales meetings.</p>
                                <div class="text-right">
                                    <a href="#" class="reply">Reply</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul> -->





<span id="hs_cos_wrapper_blog_comments" class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_blog_comments" style="" data-hs-cos-general-type="widget" data-hs-cos-type="blog_comments">
    <div class="section post-footer">
        <div id="comments-listing" class="new-comments">

        <div id="c0001.0000.0000.0000.0000.0000.0000.0000.0000.0000" class="comment depth-0" data-threadid="0001.0000.0000.0000.0000.0000.0000.0000.0000.0000">
            <div class="comment-from">
              <h4>

                <a href="http://mymentor-test.herokuapp.com" rel="nofollow" target="_blank">Linh One</a>

              </h4>
            </div>
            <div class="comment-date">12/1/2016, 1:32:57 PM</div>
            <div class="comment-body"><p>#1 - Mot ngay nhu moi ngay, moi ngay nhu mot ngay</p></div>

              <button class="comment-reply-to hs-button secondary">Reply to <em>Linh One</em></button>

          </div>

        <div id="c0002.0000.0000.0000.0000.0000.0000.0000.0000.0000" class="comment depth-0" data-threadid="0002.0000.0000.0000.0000.0000.0000.0000.0000.0000">
            <div class="comment-from">
              <h4>

                <a href="http://wede.com" rel="nofollow" target="_blank">Saroj Maharjan</a>

              </h4>
            </div>
            <div class="comment-date">12/2/2016, 5:20:39 PM</div>
            <div class="comment-body"><p>test comment , This final challenge may be hurting your sales organization more than you realize. If you land, but don’t expand, you’re branded as a one-off initiative. You become known as the pilot project</p></div>

              <button class="comment-reply-to hs-button secondary">Reply to <em>Saroj Maharjan</em></button>

          </div>
    </div><div id="hs-comment-embed" style="display:none;">
    </div>
    <div id="comment-form" class="new-comments"><div class="hs-comment-message hs-common-confirm-message">Your comment has been received.</div><form novalidate="" accept-charset="UTF-8" action="https://api.hubapi.com/comments/v3/comment?portalId=2714012" enctype="multipart/form-data" id="hsForm_9118e6fd-f4cf-4214-9485-b1b3f77d9872" method="POST" class="hs-form stacked" data-form-id="9118e6fd-f4cf-4214-9485-b1b3f77d9872" data-portal-id="2714012" data-reactid=".hbspt-forms-0"><div data-reactid=".hbspt-forms-0.0:$0"><div class="hs_firstname field hs-form-field" data-reactid=".hbspt-forms-0.0:$0.$firstname"><label class="" placeholder="Enter your First Name" for="firstname-9118e6fd-f4cf-4214-9485-b1b3f77d9872" data-reactid=".hbspt-forms-0.0:$0.$firstname.0"><span data-reactid=".hbspt-forms-0.0:$0.$firstname.0.0">First Name</span><span class="hs-form-required" data-reactid=".hbspt-forms-0.0:$0.$firstname.0.1">*</span></label>
    <legend class="hs-field-desc" style="display:none;" data-reactid=".hbspt-forms-0.0:$0.$firstname.1"></legend>
    <div class="input" data-reactid=".hbspt-forms-0.0:$0.$firstname.$firstname">
        <input id="firstname-9118e6fd-f4cf-4214-9485-b1b3f77d9872" class="hs-input" type="text" name="firstname" required="" value="" placeholder="" data-reactid=".hbspt-forms-0.0:$0.$firstname.$firstname.0">
    </div>
    </div>
    </div>
    <div data-reactid=".hbspt-forms-0.0:$1">
        <div class="hs_lastname field hs-form-field" data-reactid=".hbspt-forms-0.0:$1.$lastname">
            <label class="" placeholder="Enter your Last Name" for="lastname-9118e6fd-f4cf-4214-9485-b1b3f77d9872" data-reactid=".hbspt-forms-0.0:$1.$lastname.0"><span data-reactid=".hbspt-forms-0.0:$1.$lastname.0.0">Last Name</span></label>
            <legend class="hs-field-desc" style="display:none;" data-reactid=".hbspt-forms-0.0:$1.$lastname.1"></legend>
            <div class="input" data-reactid=".hbspt-forms-0.0:$1.$lastname.$lastname">
                <input id="lastname-9118e6fd-f4cf-4214-9485-b1b3f77d9872" class="hs-input" type="text" name="lastname" value="" placeholder="" data-reactid=".hbspt-forms-0.0:$1.$lastname.$lastname.0">
            </div>
        </div>
    </div>
    <div data-reactid=".hbspt-forms-0.0:$2">
        <div class="hs_email field hs-form-field" data-reactid=".hbspt-forms-0.0:$2.$email">
            <label class="" placeholder="Enter your Email" for="email-9118e6fd-f4cf-4214-9485-b1b3f77d9872" data-reactid=".hbspt-forms-0.0:$2.$email.0"><span data-reactid=".hbspt-forms-0.0:$2.$email.0.0">Email</span><span class="hs-form-required" data-reactid=".hbspt-forms-0.0:$2.$email.0.1">*</span></label>
            <legend class="hs-field-desc" style="display:none;" data-reactid=".hbspt-forms-0.0:$2.$email.1"></legend>
            <div class="input" data-reactid=".hbspt-forms-0.0:$2.$email.$email">
                <input id="email-9118e6fd-f4cf-4214-9485-b1b3f77d9872" class="hs-input" type="email" name="email" required="" placeholder="" value="" data-reactid=".hbspt-forms-0.0:$2.$email.$email.0">
            </div>
        </div>
    </div>
    <div data-reactid=".hbspt-forms-0.0:$3">
        <div class="hs_website field hs-form-field" data-reactid=".hbspt-forms-0.0:$3.$website">
            <label class="" placeholder="Enter your Website" for="website-9118e6fd-f4cf-4214-9485-b1b3f77d9872" data-reactid=".hbspt-forms-0.0:$3.$website.0"><span data-reactid=".hbspt-forms-0.0:$3.$website.0.0">Website</span></label>
            <legend class="hs-field-desc" style="display:none;" data-reactid=".hbspt-forms-0.0:$3.$website.1"></legend>
            <div class="input" data-reactid=".hbspt-forms-0.0:$3.$website.$website">
                <input id="website-9118e6fd-f4cf-4214-9485-b1b3f77d9872" class="hs-input" type="text" name="website" value="" placeholder="" data-reactid=".hbspt-forms-0.0:$3.$website.$website.0">
            </div>
        </div>
    </div>
    <div data-reactid=".hbspt-forms-0.0:$4">
        <div class="hs_comment field hs-form-field" data-reactid=".hbspt-forms-0.0:$4.$comment">
            <label class="" placeholder="Enter your Comment" for="comment-9118e6fd-f4cf-4214-9485-b1b3f77d9872" data-reactid=".hbspt-forms-0.0:$4.$comment.0"><span data-reactid=".hbspt-forms-0.0:$4.$comment.0.0">Comment</span><span class="hs-form-required" data-reactid=".hbspt-forms-0.0:$4.$comment.0.1">*</span></label>
            <legend class="hs-field-desc" style="display:none;" data-reactid=".hbspt-forms-0.0:$4.$comment.1"></legend>
            <div class="input" data-reactid=".hbspt-forms-0.0:$4.$comment.$comment">
                <textarea id="comment-9118e6fd-f4cf-4214-9485-b1b3f77d9872" class="hs-input" name="comment" required="" placeholder="" data-reactid=".hbspt-forms-0.0:$4.$comment.$comment.0"></textarea>
            </div>
        </div>
    </div>
    <div data-reactid=".hbspt-forms-0.0:$5">
        <div class="hs_subscribe field hs-form-field" data-reactid=".hbspt-forms-0.0:$5.$subscribe">
            <label class="" placeholder="Enter your Subscribe to follow-up comments for this post" for="subscribe-9118e6fd-f4cf-4214-9485-b1b3f77d9872" data-reactid=".hbspt-forms-0.0:$5.$subscribe.0"><span data-reactid=".hbspt-forms-0.0:$5.$subscribe.0.0"></span></label>
            <legend class="hs-field-desc" style="display:none;" data-reactid=".hbspt-forms-0.0:$5.$subscribe.1"></legend>
            <div class="input" data-reactid=".hbspt-forms-0.0:$5.$subscribe.$subscribe">
                <ul class="inputs-list" data-reactid=".hbspt-forms-0.0:$5.$subscribe.$subscribe.0">
                    <li class="hs-form-booleancheckbox" data-reactid=".hbspt-forms-0.0:$5.$subscribe.$subscribe.0.0">
                        <label for="subscribe-9118e6fd-f4cf-4214-9485-b1b3f77d9872" class="hs-form-booleancheckbox-display" data-reactid=".hbspt-forms-0.0:$5.$subscribe.$subscribe.0.0.0">
                            <input id="subscribe-9118e6fd-f4cf-4214-9485-b1b3f77d9872" class="hs-input" type="checkbox" name="subscribe" value="true" data-reactid=".hbspt-forms-0.0:$5.$subscribe.$subscribe.0.0.0.0"><span data-reactid=".hbspt-forms-0.0:$5.$subscribe.$subscribe.0.0.0.1">Subscribe to follow-up comments for this post</span></label>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div data-reactid=".hbspt-forms-0.0:$6">
        <div class="hs_lifecyclestage field hs-form-field" style="display:none;" data-reactid=".hbspt-forms-0.0:$6.$lifecyclestage">
            <label class="" placeholder="Enter your Lifecycle Stage" for="lifecyclestage-9118e6fd-f4cf-4214-9485-b1b3f77d9872" data-reactid=".hbspt-forms-0.0:$6.$lifecyclestage.0"><span data-reactid=".hbspt-forms-0.0:$6.$lifecyclestage.0.0">Lifecycle Stage</span></label>
            <legend class="hs-field-desc" style="display:none;" data-reactid=".hbspt-forms-0.0:$6.$lifecyclestage.1"></legend>
            <div class="input" data-reactid=".hbspt-forms-0.0:$6.$lifecyclestage.$lifecyclestage">
                <input name="lifecyclestage" class="hs-input" type="hidden" value="subscriber" data-reactid=".hbspt-forms-0.0:$6.$lifecyclestage.$lifecyclestage.0">
            </div>
        </div>
    </div>
    <div class="hs_submit" data-reactid=".hbspt-forms-0.2">
        <div class="hs-field-desc" style="display:none;" data-reactid=".hbspt-forms-0.2.0"></div>
        <div class="actions" data-reactid=".hbspt-forms-0.2.1">
            <div class="field hs-form-field">
                @include('partials/captcha')
            </div>
            <input type="submit" value="Submit" class="hs-button primary" data-reactid=".hbspt-forms-0.2.1.0">
        </div>
    </div>
    <input name="hs_context" type="hidden" value="{&quot;rumScriptExecuteTime&quot;:2576.34,&quot;rumServiceResponseTime&quot;:3350.2300000000005,&quot;rumFormRenderTime&quot;:330.65499999999975,&quot;rumTotalRenderTime&quot;:3350.8150000000005,&quot;rumTotalRequestTime&quot;:327.0199999999995,&quot;pageUrl&quot;:&quot;http://cmv-growthplay-testing-dev-2714012-2714012.hs-sites.com/blog/sales-effectiveness-blogyour-blog-post-title-here?success=true&quot;,&quot;pageTitle&quot;:&quot;Sales Effectiveness Blog&quot;,&quot;source&quot;:&quot;FormsNext-static-1.397&quot;,&quot;isHostedOnHubspot&quot;:true,&quot;timestamp&quot;:1480678542085,&quot;userAgent&quot;:&quot;Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.98 Safari/537.36&quot;,&quot;referrer&quot;:&quot;http://cmv-growthplay-testing-dev-2714012-2714012.hs-sites.com/blog/sales-effectiveness-blogyour-blog-post-title-here&quot;,&quot;hutk&quot;:{},&quot;originalEmbedContext&quot;:{&quot;portalId&quot;:&quot;2714012&quot;,&quot;formId&quot;:&quot;9118e6fd-f4cf-4214-9485-b1b3f77d9872&quot;,&quot;target&quot;:&quot;#comment-form&quot;,&quot;redirectUrl&quot;:&quot;http://www.hubspot.com/contact-sales/thanks/&quot;,&quot;pageId&quot;:&quot;23423&quot;,&quot;pageName&quot;:&quot;My great landing page&quot;,&quot;css&quot;:&quot;.your-custom-css {background-color: #fe7722}&quot;,&quot;requiredCss&quot;:&quot;.my-custom-error-msgs {border-radius: 3px;}&quot;,&quot;submitButtonClass&quot;:&quot;hs-button primary&quot;},&quot;recentFieldsCookie&quot;:{},&quot;pageId&quot;:&quot;23423&quot;,&quot;pageName&quot;:&quot;My great landing page&quot;,&quot;boolCheckBoxFields&quot;:&quot;subscribe&quot;,&quot;dateFields&quot;:&quot;&quot;,&quot;redirectUrl&quot;:&quot;http://www.hubspot.com/contact-sales/thanks/&quot;,&quot;smartFields&quot;:{},&quot;urlParams&quot;:{&quot;success&quot;:&quot;true&quot;},&quot;formValidity&quot;:{},&quot;correlationId&quot;:&quot;c715c8e1-c5b8-48d3-b12d-0ad0ac5a3651&quot;,&quot;disableCookieSubmission&quot;:false}" data-reactid=".hbspt-forms-0.3">
    <input type="hidden" id="id_portalId" name="portalId" value="2714012">
    <input type="hidden" id="id_contentId" name="contentId" value="4598071152">
    <input type="hidden" id="id_collectionId" name="collectionId" value="4592700657">
    <input type="hidden" id="id_contentAuthorEmail" name="contentAuthorEmail" value="SampleHubSpotUser@hubspot.com">
    <input type="hidden" id="id_contentAuthorName" name="contentAuthorName" value="Sample HubSpot User">
    <input type="hidden" id="id_comment_verification_text" name="comment_verification_text" value="Your comment has been received.">
    <input type="hidden" id="id_contentTitle" name="contentTitle" value="Sales Effectiveness Blog">
    <input type="hidden" id="id_contentPermalink" name="contentPermalink" value="http://cmv-growthplay-testing-dev-2714012-2714012.hs-sites.com/blog/sales-effectiveness-blogyour-blog-post-title-here">
    <input type="hidden" id="id_contentCreatedAt" name="contentCreatedAt" value="1480563673000">
    <input type="hidden" id="id_formGuid" name="formGuid" value="9118e6fd-f4cf-4214-9485-b1b3f77d9872">
    </form>
    </div>
    <!-- end comment-form -->
    </div>
</span>





        </div>
    </article>
</main>
<?php endwhile; ?>
@endsection