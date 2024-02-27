<x-app-layout>
      <!-- The contact section or page -->
  <section class="signup">
    <div class="signup-title">Sign in to your <span>account</span></div>
    <hr>
    <div class="signup-container">
      <div class="signup-form">
        <div class="signup-form-title">login</div>
        <form action="{{route('login.store')}}" method="POST" autocomplete="off">
        @csrf
            <div class="form-input">
              <label for="email">Enter email:</label>
              <input type="text" name="email" id="email">
            </div>
            @error('email')
            <p class="text-red-600 text-base sm:text-2xl py-2 w-full">{{$message}}</p>
            @enderror
            <div class="form-input">
              <label for="password">Enter your password:</label>
              <input type="password" name="password" id="password">
            </div>
            @error('password')
            <p class="text-red-600 text-base sm:text-2xl py-2 w-full">{{$message}}</p>
            @enderror
            <div class="submit-btn">
              <button type="submit" class="btn">Send</button>
            </div>
          </form>
          <p class="account-already">Don't have an account yet?<a href="{{route('customer.signup')}}">sign up here</a></p>
        </div>
    </div>
  </section>
</x-app-layout>
