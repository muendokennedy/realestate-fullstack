<x-app-layout>
      <!-- The contact section or page -->
  <section class="signup">
    <div class="signup-title">Create <span>account</span></div>
    <hr>
    <div class="signup-container">
      <div class="signup-form">
        <div class="signup-form-title">sign up</div>
        <form action="{{route('customer.store')}}" method="POST" autocomplete="off">
        @csrf
            <div class="form-input">
                <label for="name">Enter your name:</label>
              <input type="text" name="name" id="name">
            </div>
              @error('name')
              <p class="text-red-600 text-base sm:text-2xl w-full">{{$message}}</p>
              @enderror
            <div class="form-input">
                <label for="email">Enter email:</label>
              <input type="text" name="email" id="email">
            </div>
            @error('email')
            <p class="text-red-600 text-base sm:text-2xl w-full">{{$message}}</p>
            @enderror
            <div class="form-input">
                <label for="password">Enter your password:</label>
              <input type="password" name="password" id="password">
            </div>
            @error('password')
            <p class="text-red-600 text-base sm:text-2xl w-full">{{$message}}</p>
            @enderror
            <div class="form-input">
                <label for="password_confirmation">Confirm your password:</label>
              <input type="password" name="password_confirmation" id="password_confirmation">
            </div>
            @error('password_confirmation')
            <p class="text-red-600 text-base sm:text-2xl w-full">{{$message}}</p>
            @enderror
            <div class="submit-btn">
              <button type="submit" class="btn">Send</button>
            </div>
          </form>
          <p class="account-already">Already have an account?<a href="{{route('customer.login')}}">login in here</a></p>
        </div>
    </div>
  </section>
</x-app-layout>
