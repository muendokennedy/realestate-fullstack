<x-app-layout>
  <!-- The contact section or page -->
  <section class="signup">
    <div class="signup-title">Sign in to your <span>account</span></div>
    <hr>
    <div class="signup-container">
      <div class="signup-form">
        <div class="signup-form-title">login</div>
        <form action="FORM/contact.php" method="POST">
            <div class="form-input">
              <input type="text" name="email" id="email" required>
              <label for="email">Enter email:</label>
            </div>
            <div class="form-input">
              <input type="password" name="password" id="password" required>
              <label for="password">Enter your password:</label>
            </div>
            <div class="submit-btn">
              <button type="submit" class="btn">Send</button>
            </div>
          </form>
        </div>
    </div>
  </section>
</x-app-layout>
