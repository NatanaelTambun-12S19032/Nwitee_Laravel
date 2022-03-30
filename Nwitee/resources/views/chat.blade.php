<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="css/chat.css" />
    <title>Nwitee | Chat</title>
</head>
<body>

    <div class="nwitee">
        <!-- sidebar -->
        <div class="sidebar">
            <h2>nwitee</h2>
            <ul>
                <li>
                    <a href="home"><i class="fas fa-home"></i>Home</a>
                </li>
                <li>
                    <a href="profile"><i class="fas fa-user"></i>Profile</a>
                </li>
                <li>
                    <a href="forum"><i class="fas fa-users"></i>Forum</a>
                </li>
                {{-- <li>
                    <a class="active" href="chat"><i class="fas fa-comments"></i>Chat</a>
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
            <!-- navbar -->
            <div class="navbar">
                <div class="search">
                    <form action="#">
                        <input type="text" placeholder="    Search" name="search" />
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
                @endauth
            </div>

            <!-- chat -->
            <div class="chat">
                <h3>Chat</h3>
                <div class="row">
                    <div class="column">
                        <ul>
                            <li>
                                <a href="#manuel"><i class="fas fa-user"></i>Manuel</a>
                                <p>Lorem ipsum dolor sit amet.</p>
                            </li>
                            <li>
                                <a href="#natanael"><i class="fas fa-user"></i>Natanael</a>
                                <p>Lorem ipsum dolor sit amet.</p>
                            </li>
                            <li>
                                <a href="#samuel"><i class="fas fa-user"></i>Samuel</a>
                                <p>Lorem ipsum dolor sit amet.</p>
                            </li>
                        </ul>
                    </div>
                    <div class="column">
                        <textarea name="" id="" cols="44" rows="17"></textarea>
                        <form>
                            <input list="connections" name="connection">
                            <datalist id="connections">
                                <option value="Haryati">
                                <option value="Ignatia">
                                <option value="Manuel">
                                <option value="Natanael">
                                <option value="Samuel">
                            </datalist>
                            <input type="submit" value="Send">
                        </form>
                    </div>
                </div>
            </div>
        </div>
</body>
</html>
