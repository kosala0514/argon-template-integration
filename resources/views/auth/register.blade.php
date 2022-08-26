<x-guest-layout>
    <x-slot name="content">
<main class="main-content  mt-0">
    <section>
      <div class="page-header min-vh-100">
        <div class="container">
          <div class="row">
            <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column mx-lg-0 mx-auto">
              <div class="card card-plain">
                <div class="card-header pb-0 text-left">
                  <h4 class="font-weight-bolder">Sign Up</h4>
                </div>
                <div class="card-body pb-3">
                    {{-- All errors --}}
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                  <form role="form" method="POST" action="{{ route('register') }}">
                    @csrf
                    <label for="name" >Name</label>
                    <div class="mb-3">
                      <input type="text" class="form-control" placeholder="Name" aria-label="Name"
                      id="name"  name="name" :value="old('name')" required autofocus autocomplete="name" >
                    </div>
                    <label for="email">Email</label>
                    <div class="mb-3">
                      <input type="email" class="form-control" placeholder="Email" aria-label="Email"
                      id="email" name="email" :value="old('email')" required>
                    </div>
                    <label for="password">Password</label>
                    <div class="mb-3">
                      <input type="password" class="form-control" placeholder="Password" aria-label="Password"
                      id="password" name="password" required autocomplete="new-password">
                    </div>
                    <label for="password_confirmation">Confirm Password</label>
                    <div class="mb-3">
                      <input type="password" class="form-control" placeholder="Confirm Password" aria-label="Password"
                      id="password_confirmation" name="password_confirmation" required autocomplete="new-password">
                    </div>
                    <div class="text-center">
                      <button type="submit" class="btn btn-primary w-100 mt-4 mb-0">Sign up</button>
                    </div>
                  </form>
                </div>
                <div class="card-footer text-center pt-0 px-sm-4 px-1">
                  <p class="mb-4 mx-auto">
                    Already have an account?
                    <a href="{{ route('login') }}" class="text-primary font-weight-bold">Sign
                      in</a>
                  </p>
                </div>
              </div>
            </div>
            <div
              class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 end-0 text-center justify-content-center flex-column">
              <div
                class="position-relative bg-gradient-primary h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center overflow-hidden"
                style="background-image: url('https://raw.githubusercontent.com/creativetimofficial/public-assets/master/argon-dashboard-pro/assets/img/signup-ill.jpg');
          background-size: cover;">
                <span class="mask bg-primary opacity-4"></span>
                <h4 class="mt-5 text-white font-weight-bolder position-relative">Your journey starts here</h4>
                <p class="text-white position-relative">Just as it takes a company to sustain a product, it takes a
                  community to sustain a protocol.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
    </x-slot>
</x-guest-layout>
