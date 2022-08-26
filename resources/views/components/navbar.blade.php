<nav class="navbar navbar-main navbar-expand-lg  px-0 mx-4 shadow-none border-radius-xl z-index-sticky "
      id="navbarBlur" data-scroll="false">
      <div class="container py-1 px-3">
            <ul class="navbar-nav  justify-content-end">
              <li class="nav-item d-flex align-items-center">
                <a href="#"
                  class="nav-link text-white font-weight-bold py-1 px-0" target="_blank">

                <i class="fa fa-user me-sm-1"></i></a>
              </li>
              <li class="nav-item d-flex align-items-center">
                  @if (Auth::user())
                <form method="POST" action="{{ route('logout') }}" x-data>
                    @csrf
                    <x-jet-dropdown-link class="text-light" href="{{ route('logout') }}"
                             @click.prevent="$root.submit();">
                        Logout
                    </x-jet-dropdown-link>
                </form>
                @else
                <a class="text-light" href="{{ route('login') }}"><span>Login</span></a>
                @endif
                </a>
              </li>
            </ul>
          </div>
      </div>
    </nav>
