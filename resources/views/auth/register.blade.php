<x-app-layout>
      <!-- The contact section or page -->
  <section class="signup">
    <div class="signup-title">Create <span>account</span></div>
    <hr>
    <div class="signup-container">
      <div class="signup-form">
        <div class="signup-form-title">sign up</div>
        <form action="FORM/contact.php" method="POST">
            <div class="form-input">
              <input type="text" name="name" id="name" required>
              <label for="name">Enter your name:</label>
            </div>
              @error('name')
              <p class="text-red-600 text-sm sm:text-base py-2 w-full">{{$message}}</p>
              @enderror
            <div class="form-input">
              <input type="text" name="email" id="email" required>
              <label for="email">Enter email:</label>
            </div>
            @error('email')
            <p class="text-red-600 text-sm sm:text-base py-2 w-full">{{$message}}</p>
            @enderror
            <div class="form-input">
              <input type="password" name="password" id="password" required>
              <label for="password">Enter your password:</label>
            </div>
            <div class="form-input">
              <input type="password" name="password_confirmation" id="password_confirmation" required>
              <label for="password_confirmation">Confirm your password:</label>
            </div>
            <div class="submit-btn">
              <button type="submit" class="btn">Send</button>
            </div>
          </form>
          <p class="account-already">Already have an account?<a href="#">login in here</a></p>
        </div>
    </div>
  </section>
</x-app-layout>
