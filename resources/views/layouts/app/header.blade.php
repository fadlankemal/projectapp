<nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
    <div class="container-fluid">
        <button class="btn btn-danger" id="sidebarToggle">
            <i class="fa-solid fa-bars"></i>
        </button>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span
                class="navbar-toggler-icon"></span></button>
        <div class="dropdown">
            <button class="dropbtn btn btn-secondary" onclick="userFunction()">{{ Auth::user()->name }}
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-menu dropdown-menu-dark" id="myDropdown">
                <a class="dropdown-item" href="{{ url('profile/edit') }}">
                    {{ __('Profile') }}
                </a>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')" class="dropdown-item"
                        onclick="event.preventDefault();
                                this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
        {{-- <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="dropdown navbar-nav ms-auto mt-2 mt-lg-0">
                <button onclick="userFunction()" class="btn btn-secondary dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                    {{ Auth::user()->name }}
                </button>
                
                <div>

                </div>

                <div class="hidden sm:flex sm:items-center sm:ms-6">
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            <button class="btn btn-secondary dropdown-toggle">
                                <div>{{ Auth::user()->name }}</div>
                            </button>
                        </x-slot>
    
                        <x-slot name="content">
                            <x-dropdown-link :href="route('profile.edit')">
                                {{ __('Profile') }}
                            </x-dropdown-link>
    
                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
    
                                <x-dropdown-link :href="route('logout')"
                                        onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </x-dropdown-link>
                            </form>
                        </x-slot>
                    </x-dropdown>
                </div>
    
                <ul id="dropdown" class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDropdown">
                    <li>
                        <a class="dropdown-item" href="{{ url('profile/edit') }}">
                            {{ __('Profile') }}
                        </a>
                    </li>
                    <li>
                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-responsive-nav-link :href="route('logout')" class="dropdown-item"
                                onclick="event.preventDefault();
                                        this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-responsive-nav-link>
                        </form>
                    </li>
                </ul>
            </div>
        </div> --}}
    </div>
</nav>
<script>
    /* When the user clicks on the button, 
    toggle between hiding and showing the dropdown content */
    function userFunction() {
        document.getElementById("myDropdown").classList.toggle("show");
    }

    // Close the dropdown if the user clicks outside of it
    window.onclick = function(e) {
        if (!e.target.matches('.dropbtn')) {
            var myDropdown = document.getElementById("myDropdown");
            if (myDropdown.classList.contains('show')) {
                myDropdown.classList.remove('show');
            }
        }
    }
</script>
