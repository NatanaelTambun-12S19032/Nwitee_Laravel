<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="{{asset('css/home.css')}}" />
    <title>Nwitee | Home</title>
</head>
<body>
    <div class="nwitee">
        <!-- sidebar -->
        <div class="sidebar">
            <h2>nwitee</h2>
            <ul>
                <li>
                    <a class="active" href="home"><i class="fas fa-home"></i>Home</a>
                </li>
                <li>
                    <a href="profile"><i class="fas fa-user"></i>Profile</a>
                </li>
                <li>
                    <a href="forum"><i class="fas fa-users"></i>Forum</a>
                </li>
                {{-- <li>
                    <a href="chat"><i class="fas fa-comments"></i>Chat</a>
                </li> --}}
                <li>
                    <a href="connection"><i class="fas fa-address-book"></i>Connection</a>
                </li>
            </ul>
        </div>

        <!-- online user -->
        {{-- <div class="connection">
            <h4>Online users</h4>
            <ul>
                <li>
                    <a href="#haryati"><i class="fas fa-user"></i>Haryati</a>
                </li>
                <li>
                    <a href="#ignatia"><i class="fas fa-user"></i>Ignatia</a>
                </li>
                <li>
                    <a href="#manuel"><i class="fas fa-user"></i>Manuel</a>
                </li>
                <li>
                    <a href="#natanael"><i class="fas fa-user"></i>Natanael</a>
                </li>
                <li>
                    <a href="#samuel"><i class="fas fa-user"></i>Samuel</a>
                </li>
            </ul>
        </div> --}}


        <div class="main">
            <div class="navbar">
                <div class="search">
                    <form action="#">
                        <input type="text" placeholder=" Search" name="search" />
                        <button>
                            <i class="fa fa-search" style="font-size: 20px"> </i>
                        </button>
                    </form>
                </div>

                <div class="dropdown">
                    @auth
                    <button class="dropbtn">
                        Hi, {{ auth()->user()->username}}
                        <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown-content">
                        <a href="profile"><i class="fas fa-cog"></i>Settings</a>
                        @csrf
                        <a href="/"><i class="fas fa-sign-out-alt"></i>Log out</a>
                    </div>
                </div>
                <div class="notif">
                    <a href="#notif"><i class="fas fa-bell"></i></a>
                </div>
            </div>

            <div class="new_post">
                <div class="input_Container">
                    <div class="feed_content">
                        <a href="/createPost">
                            <i class="fas fa-pen"></i>
                        </a>
                        <form>
                            <input type="text" placeholder="How's your day?" />
                        </form>
                    </div>
                </div>
            </div>

            @foreach($data as $post)
            <div class="post">
                <div class="post_header">
                    <i class="fas fa-user"></i>
                    <div class="post_info">
                        <h2>{{ auth()->user()->name}}</h2>
                        <p>@ {{ auth()->user()->username}}</p>
                    </div>
                    <div class="update" style="margin-left:60%;">
                        <div class="dropdown1">
                            <button class="dropbtn1">
                                <i class="fas fa-ellipsis-h"></i>
                            </button>
                            <div class="dropdown-content1">
                                <a href="editPost/{{ $post->id}}"><i class="fas fa-edit"></i>Edit</a>
                                <a href="delete/{{ $post->id }}"><i class="fas fa-trash"></i>Delete</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="post_body">
                    <center>
                        <img src="/img/file/{{ $post->file }}" style="width:150px; height:150px; border-radius:8px;">
                    </center>
                    <p>
                        {{ $post->description }}
                    </p>
                </div>
                <div class="feed_inputOptions" style="border-bottom: 1px solid #e0e4e8;">
                    <a href="#" style="width:50%" ;><i class="fas fa-thumbs-up"> Like</i></a>
                    <a href="#" style="width:50%" ;><i class="fas fa-thumbs-down"> Dislike</i></a>
                </div>
                <div class="comment">
                    <div class="container" style="margin-top:10px">
                        <img src="/img/avatars/{{ old('avatar', Auth::user()->avatar) }}" style="width:40px; height:40px; border-radius:50%; display: block;">
                        <div class="feed_content" style="width: 80%; border-radius:10px;">
                            <form>
                                <input type="text" placeholder="Add Comment" />
                                <input type="submit" value="Send" style="background-color: #3596c0; color: #ffffff; padding: 8px; border-radius:6px;">
                            </form>
                        </div>
                        {{-- <p>
                            {{ $comment->description }}
                        </p> --}}
                    </div>
                </div>
            </div>
            @endforeach
            @endauth
        </div>
    </div>
</body>
</html>
