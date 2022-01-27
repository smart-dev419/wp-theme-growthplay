<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ wp_title('') }}</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600%7CRoboto+Slab:300,400">
    @yield('head')
    
    {{ wp_head() }}

    <script>
        var GrowthPlay = {
            homePageCarouselSpeed: {{ get_field('cover_slide_transition_speed', get_option('page_on_front')) * 1000 }}
        }
    </script>

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <div id="wrapper">
        
        @include('partials/navigation')

        @yield('content')

    </div>

{{ wp_footer() }}
</body>
</html>