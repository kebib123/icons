<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Icons website</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- font awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
          integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.css">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simplebar/4.1.0/simplebar.min.css">


    <link rel="stylesheet" href="{{asset('css/Frontend/icofont/icofont.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/Frontend/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/Frontend/responsive.css')}}">
    <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css" rel="stylesheet">

</head>
<body>


<div class="forum_layout">
    <header class="header">
        <a href="forum-index.html" class="logo">
            <img src="http://www.iconhot.com/icon/png/wood-social-networking/512/blinklist-logo-webtreatsetc.png"
                 alt="">
        </a>

        <div class="panel ">
          <span class="header-buttons">
              <button class="widget-button btn btn-primary  sign-up-button " data-toggle="modal"
                      data-target="#forumregister">
                  <span class="d-button-label">Sign Up</span>
              </button>
                <button class="widget-button btn btn-primary  login-button " data-toggle="modal"
                        data-target="#forumregister">
                  <i class="fa fa-user d-icon d-icon-user" aria-hidden="true"></i>
                    <span class="d-button-label">Log In</span>
                </button>
            </span>
            <ul role="navigation" class="icons d-header-icons ">
                <li class="header-dropdown-toggle">
                    <a href="" title="search topics, posts, users, or categories"
                       aria-label="search topics, posts, users, or categories" id="search-button"
                       class="icon btn-flat">
                        <i class="fa fa-search d-icon d-icon-search" aria-hidden="true"></i>
                    </a>
                </li>
                <li class="header-dropdown-toggle">
                    <a href="" title="go to another topic list or category"
                       aria-label="go to another topic list or category"
                       id="toggle-hamburger-menu" class="icon btn-flat">
                        <i class="fa fa-bars d-icon d-icon-bars" aria-hidden="true"></i>
                    </a>
                </li>
            </ul>
        </div>
        <div class="search-menu">
            <div class="menu-panel">

                <div class="search-input">
                    <input id="search-term" type="text" value="" placeholder="">
                </div>

            </div>
        </div>

        <div class="hamburger-panel">
            <div class="menu-panel">
                <div class="general-links">
                    <ul class="menu-links ">
                        <li><a class="widget-link latest-topics-link" href="/latest"
                               title="topics with recent posts"><span class="d-label">Latest</span></a></li>
                        <li><a class="widget-link top-topics-link" href="/top"
                               title="the most active topics in the last year, month, week or day"><span
                                        class="d-label">Top</span></a></li>
                        <li><a class="widget-link badge-link" href="/badges" title="Badges"><span
                                        class="d-label">Badges</span></a></li>
                        <li><a class="widget-link user-directory-link" href="/u" title="Users"><span class="d-label">Users</span></a>
                        </li>
                        <li><a class="widget-link groups-link" href="/groups" title="Groups"><span class="d-label">Groups</span></a>
                        </li>
                    </ul>
                    <hr>
                </div>

                <div class="heading">
                    <a href="" class="d-link categories-link">Categories</a>
                </div>
                <ul class="category-links ">
                    <li class="category-link "><a class="badge-wrapper box" href=""><span class="badge-category-bg"
                                                                                          style="background-color: #AB9364;"></span><span
                                    style="color: #FFFFFF;" class="badge-category clear-badge"><span
                                        class="category-name">Uncategorized</span></span></a><b
                                class="topics-count">4</b></li>
                    <li class="category-link "><a class="badge-wrapper box" href=""><span class="badge-category-bg"
                                                                                          style="background-color: #808281;"></span><span
                                    style="color: #FFFFFF;" class="badge-category clear-badge"
                                    title="Discussion about this site, its organization, how it works, and how we can improve it."><span
                                        class="category-name">Site Feedback</span></span></a><b
                                class="topics-count">2</b></li>
                    <li class="category-link "><a class="badge-wrapper box" href=""><span class="badge-category-bg"
                                                                                          style="background-color: #0E76BD;"></span><span
                                    style="color: #FFFFFF;" class="badge-category clear-badge"><span
                                        class="category-name">Icons</span></span></a><b class="topics-count">43</b></li>
                    <li class="category-link "><a class="badge-wrapper box" href=""><span class="badge-category-bg"
                                                                                          style="background-color: #25AAE2;"></span><span
                                    style="color: #FFFFFF;" class="badge-category clear-badge"><span
                                        class="category-name">Windows app</span></span></a><b class="topics-count">3</b>
                    </li>
                    <li class="category-link "><a class="badge-wrapper box" href=""><span class="badge-category-bg"
                                                                                          style="background-color: #AB9364;"></span><span
                                    style="color: #FFFFFF;" class="badge-category clear-badge"
                                    title="This category for the Lunacy questions, bug reports, and announcements."><span
                                        class="category-name">Lunacy</span></span></a><b class="topics-count">139</b>
                    </li>
                    <li class="category-link "><a class="badge-wrapper box" href=""><span
                                    class="badge-category-parent-bg" style="background-color: #25AAE2;"></span><span
                                    class="badge-category-bg" style="background-color: #AB9364;"></span><span
                                    style="color: #FFFFFF;" class="badge-category clear-badge"><span
                                        class="category-name">Icons</span></span></a><b class="topics-count">3</b></li>
                    <li class="category-link "><a class="badge-wrapper box" href=""><span class="badge-category-bg"
                                                                                          style="background-color: #ED207B;"></span><span
                                    style="color: #FFFFFF;" class="badge-category clear-badge"><span
                                        class="category-name">API</span></span></a><b class="topics-count">2</b></li>
                    <li class="category-link "><a class="badge-wrapper box" href=""><span
                                    class="badge-category-parent-bg" style="background-color: #ED207B;"></span><span
                                    class="badge-category-bg" style="background-color: #F1592A;"></span><span
                                    style="color: #FFFFFF;" class="badge-category clear-badge"><span
                                        class="category-name">Search</span></span></a><b class="topics-count">1</b></li>
                    <li class="category-link "><a class="badge-wrapper box" href=""><span
                                    class="badge-category-parent-bg" style="background-color: #ED207B;"></span><span
                                    class="badge-category-bg" style="background-color: #0E76BD;"></span><span
                                    style="color: #FFFFFF;" class="badge-category clear-badge"><span
                                        class="category-name">Icons</span></span></a><b class="topics-count">3</b></li>
                    <li class="category-link "><a class="badge-wrapper box" href=""><span class="badge-category-bg"
                                                                                          style="background-color: #12A89D;"></span><span
                                    style="color: #FFFFFF;" class="badge-category clear-badge"><span
                                        class="category-name">Ouch</span></span></a><b class="topics-count">4</b></li>
                    <li class="category-link "><a class="badge-wrapper box" href=""><span class="badge-category-bg"
                                                                                          style="background-color: #AB9364;"></span><span
                                    style="color: #FFFFFF;" class="badge-category clear-badge"
                                    title="All questions related to our Fugue Music."><span
                                        class="category-name">Music</span></span></a><b class="topics-count">7</b></li>
                    <li class="category-link "><a class="badge-wrapper box" href=""><span
                                    class="badge-category-parent-bg" style="background-color: #AB9364;"></span><span
                                    class="badge-category-bg" style="background-color: #B3B5B4;"></span><span
                                    style="color: #FFFFFF;" class="badge-category clear-badge"
                                    title="The place for people who are interested in Lunacy improvement"><span
                                        class="category-name">Lunacy - alpha version</span></span></a><b
                                class="topics-count">8</b></li>
                    <li class="category-link "><a class="badge-wrapper box" href=""><span class="badge-category-bg"
                                                                                          style="background-color: #AB9364;"></span><span
                                    style="color: #FFFFFF;" class="badge-category clear-badge"><span
                                        class="category-name">Photo</span></span></a><b class="topics-count">3</b></li>
                    <li class="category-link"><a class="badge-wrapper box" href=""><span class="badge-category-bg"
                                                                                         style="background-color: #AB9364;"></span><span
                                    style="color: #FFFFFF;" class="badge-category clear-badge"><span
                                        class="category-name">Mac app</span></span></a><b class="topics-count">4</b>
                    </li>
                </ul>

            </div>
        </div>


    </header>
    <div class="list-controls">
        <div class="container">
            <section class="navigation-container">
                <button class="category-btn" id="categoryBtn">
                    <span>All categories</span> <i class="icofont-thin-down"></i>
                </button>
                <div class="select-kit-body">
                    <ul class="category-collection" data-simplebar="init">
                        @foreach($categorycomp as $value)
                            <li class="cat-filter select-kit-row category-row is-highlighted " cat_id="{{$value->id}}">
                                <div class="category-status">
                            <span class="badge-wrapper box">
                                <span class="badge-category-bg" style="background-color: #AB9364;"></span>
                                <span style="color: #FFFFFF;" class="badge-category ">
                                    <span class="category-name" cat_id="{{$value->id}}">{{$value->name}}</span>
                                </span>
                                    </span>
                                    <span class="topic-count">× 4</span>
                                </div>

                                <div class="category-desc">
                                    {!! $value->description !!}
                                </div>
                            </li>
                            @include('icons.forum.Category.multi_cat',['category'=>$value])

                        @endforeach

                    </ul>
                </div>

                <ul id="navigation-bar" class="nav nav-pills">
                    <li title="topics with recent posts" id="latest_filter" class=""><a
                                href="javascript:void(0)">Latest</a></li>
                    <li title="the most active topics in the last year, month, week or day" class=""><a href="">Top</a>
                    </li>
                    <li title="all topics grouped by category" class=""><a href="/categories">Categories</a>
                    </li>
                </ul>

                <button id="create-topic" class="btn btn-default btn btn-icon-text ">
                    <i class="fa fa-plus d-icon d-icon-plus"></i>
                    <span class="d-button-label">New Topic</span>
                </button>
                <div class="clearfix"></div>
            </section>
        </div>
    </div>
    <div id="filtered" class="container list-container">
        <div class="">
            <div class="w-100">
                <div id="list-area">
                    <table class="topic-list">
                        <thead>
                        <tr>
                            <th class="default">Topic</th>
                            <th class="category ">Category</th>
                            <th class="posters">Users</th>
                            <th class="posts  num">Replies</th>
                            <th class="views  num">Views</th>
                            <th class="activity  num">Activity</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($forum as $value)
                            <tr class="topic-list-item">
                                <td class="main-link " colspan="1">
                                <span class="link-top-line">
                                    <a href="{{route('forum-inner',$value->id)}}"
                                       class="raw-link raw-topic-link">{{$value->topic}}</a>
                                    <span class="topic-post-badges"></span>
                                </span>
                                </td>

                                <td class="category">
                                    <a class="badge-wrapper box" href="">
                                        <span class="badge-category-bg" style="background-color: #AB9364;"></span>
                                        <span style="color: #FFFFFF;" class="badge-category"
                                              title="All questions related to our Fugue Music.">
                                        <span class="category-name">{{$value->categories->parent_id ? \App\Model\ForumCategory::where('id',1)->first()->name:''}}</span>&ensp;
                                        <span class="category-name">{{$value->categories->name}}</span>
                                    </span>
                                    </a>
                                </td>

                                <td class="posters">
                                    <a href="" class="">
                                        <img alt="" width="25" height="25"
                                             src="https://community.icons8.com/letter_avatar_proxy/v2/letter/m/cab0a1/25.png"
                                             class="avatar" title="mediaattack22 - Original Poster">
                                    </a>
                                    <a href="" class="latest">
                                        <img alt="" width="25" height="25"
                                             src="https://community.icons8.com/user_avatar/community.icons8.com/elenalo161/25/168_1.png"
                                             class="avatar latest" title="elenalo161 - Most Recent Poster">
                                    </a>
                                </td>

                                <td class="num posts" title="This topic has 1 reply">
                                    <a href="" class="badge-posts ">
                                        <span class="number">1</span>
                                    </a>
                                </td>

                                <td class="num views ">
                                    <span class="number" title="this topic has been viewed 4 times">4</span></td>

                                <td class="num age "
                                    title="First post: Jul 17, 2019 9:24 am Posted: Jul 17, 2019 10:13 am">
                                    <a class="post-activity" href="">
                                        <span class="relative-date">6h</span>
                                    </a>
                                </td>
                            </tr>

                        @endforeach


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div id="reply-control" class="">
        <div class="reply-area">
            <div class="composer-fields">
                <div class="reply-to">
                    <button title="minimize the composer panel" class="toggler">
                        <i class="fa fa-chevron-down d-icon d-icon-chevron-down"></i>
                    </button>
                    <div class="clearfix"></div>
                </div>
                <div class="title-category">
                    <div class="title-input">
                        <input type="text" id="title_link" placeholder="Type title, or paste a link here">
                    </div>
                    <div class="category-input list-controls">
                        <button class="category-btn" id="reply-categoryBtn" data-id="">
                            <span>All categories</span>&nbsp;<i class="icofont-thin-down"></i>
                        </button>
                        <div class="select-kit-body">
                            <ul class="category-collection" data-simplebar="init">
                                @foreach($categorycomp as $value)
                                    <li class="select-kit-row category-row is-highlighted ">
                                        <div class="category-status">
                            <span class="badge-wrapper box">
                                <span class="badge-category-bg" style="background-color: #AB9364;"></span>
                                <span style="color: #FFFFFF;" class="badge-category ">
                                    <span id="select_category" cat_id="{{$value->id}}"
                                          class="category-name">{{$value->name}}</span>
                                </span>
                            </span>
                                            <span class="topic-count">× 4</span>
                                        </div>

                                        <div class="category-desc">
                                            {!! $value->description !!}
                                        </div>
                                    </li>
                                    @include('icons.forum.Category.reply_cat',['category'=>$value])

                                @endforeach

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="toolbar-visible">
                <textarea name="detail" id="dec"></textarea>
            </div>
            <div class="submit-panel">
                <div class="save-or-cancel">
                    <button title="Or press Ctrl+Enter" id="new_topic" class="btn ">
                        <i class="fa fa-plus d-icon d-icon-plus"></i>
                        <span class="">Create Topic</span>
                    </button>
                    <a href="" class="cancel">Cancel</a>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="modal fade app-modal" id="forumregister" tabindex="-1" role="dialog"
     aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="login-form">
                <div class="">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div id="loginForm" class="toggleform">
                        <div class="title">Login</div>
                        <div class="description">You can use your account to log in to any of our products</div>
                        <form action="{{route('login')}}" method="post" class="is-big">
                            @csrf
                            <input name="email" placeholder="Email" class="" autocomplete="off">
                            <input type="password" name="password" placeholder="Password" class="" autocomplete="off">


                            <button type="submit" class="submit-button">Login</button>
                        </form>
                        <a href="" class="reset-password">Forgot password?</a>
                        <div class="switch-mode">Don’t have an account yet? <strong>Register</strong></div>
                    </div>
                    <div id="registerForm" class="toggleform">
                        <div class="title">Register</div>

                        <form action="{{route('register')}}" method="post" class="is-big">
                            @csrf
                            <input name="email" placeholder="Email" class="" autocomplete="off">
                            <input type="password" name="password" placeholder="Password" class="" autocomplete="off">

                            <div class="terms">
                                <input id="login-form-checkbox-terms" type="checkbox">
                                <label for="login-form-checkbox-terms" class="">Agree to our
                                    <a href="">Terms and Conditions</a>
                                </label>
                            </div>
                            <button type="submit" class="submit-button">Register</button>
                        </form>
                        <a href="" class="reset-password">Forgot password?</a>
                        <div class="switch-mode">Already have an account? <strong>Login</strong></div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>

<!-- wow js -->


<script src="https://cdnjs.cloudflare.com/ajax/libs/simplebar/4.1.0/simplebar.min.js"></script>

<script src="{{asset('js/Frontend/app.min.js')}}"></script>
<script src="{{asset('js/toastr.min.js')}}"></script>
<script src="https://cdn.jsdelivr.net/algoliasearch/3/algoliasearch.min.js"></script>
<script src="https://cdn.jsdelivr.net/autocomplete.js/0/autocomplete.min.js"></script>


<script>
    @if(Session::has('success'))
    toastr.success("{{Session::get('success')}}");
    @endif
    @if(Session::has('error'))
    toastr.error("{{Session::get('error')}}");
    @endif
    @if(Session::has('info'))
    toastr.info("{{Session::get('info')}}");
    @endif
    @if ($errors->any())
    @foreach($errors->all() as $error)
    toastr.warning("{{ $error }}");
    @endforeach
    @endif
</script>
<script src="https://cdn.ckeditor.com/4.11.4/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('dec');

</script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
    $(document).ready(function () {


        $('#reply-control .category-input .category-collection li').on('click', function () {
            var categoryname = $(this).find('.category-name').text();
            let categoryid = $(this).find('.category-name').attr('cat_id');
            $('#reply-categoryBtn span').text(categoryname);
            let attribute = $('#reply-categoryBtn').attr("data-id", categoryid);
            // console.log(attribute);
            $(this).parents('.select-kit-body').hide();
        });

        $('#new_topic').on('click', function () {
            let category = $('#reply-categoryBtn').attr('data-id');
            console.log(category);
            let title = $('#title_link').val();
            let detail = CKEDITOR.instances['dec'].getData();

            $.ajaxSetup({
                headers: {"X-CSRF-TOKEN": jQuery(`meta[name="csrf-token"]`).attr("content")}
            });
            $.ajax({
                type: "POST",
                url: "{{route('new-topic')}}",
                data: {
                    category: category,
                    title: title,
                    detail: detail
                },
                success: function (data) {
                    jQuery.each(data.errors, function (key, value) {

                        toastr.warning(value);
                    });
                    if (data.status == 'success') {
                        swal(data.status, data.message, data.status);
                    }
                }
            });

        });


    });
</script>
<script>
    $(document).ready(function () {


        $('#latest_filter').on('click', function () {
            $(this).toggleClass('active');

            $.ajaxSetup({
                headers: {"X-CSRF-TOKEN": jQuery(`meta[name="csrf-token"]`).attr("content")}
            });
            $.ajax({
                type: "GET",
                url: "{{route('topic-filter')}}",

                success: function (result) {
                    $('#filtered').replaceWith($('#filtered').html(result));

                }

            });
        });
        $('.cat-filter').on('click', function () {

            let categoryName = $(this).find('.category-name').text();
            var button = $('#categoryBtn span').text(categoryName);
            $(this).parents('.select-kit-body').hide();
            console.log(categoryName);

            let category_id = $(this).attr('cat_id');

            $.ajaxSetup({
                headers: {"X-CSRF-TOKEN": jQuery(`meta[name="csrf-token"]`).attr("content")}
            });
            $.ajax({
                type: "GET",
                url: "{{route('category-filter')}}",
                data: {
                    category_id: category_id
                },
                success: function (result) {
                    $('#filtered').replaceWith($('#filtered').html(result));

                }

            });
        });


    });
</script>
</body>
</html>