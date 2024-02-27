<x-app-layout>
  <!-- The contact section or page -->
  <section class="conditions contact payment">
    <div class="conditions-title"><span>Terms</span> and <span>Conditions</span></div>
    <div class="payment-welcome-text">Before you begin the process of the property acquisition, it is a MUST to read these terms and conditions and comply.</div>
    <div class="conditions-box">
      <div class="conditions-box-title">TERMS AND CONDITIONS</div>
      <div class="condition">Before you begin thes you must be serious about acquisition of this property.</div>
      <div class="condition">Before you begin this process you must have the funds stated for the acquisition of the property.</div>
      <div class="condition">You must be of legal adult age of 18 years and above.</div>
      <div class="condition">You must have atleast one of the valid identification documents by the republic of Kenya such as national ID, driving licence or valid passport.</div>
      <div class="condition">It is recommended that you proceed with acquisition of the property once you are satisfied with the valuation of the said property.</div>
    </div>
    <div class="agree-title">Do you agree with the terms and conditions?</div>
    <form action="auth.php" method="POST">
      <div class="input-box">
      <input type="radio" name="agree" id="agree1" value="agreetrue">
      <label for="agree1">I AGREE</label>
      </div>
      <div class="input-box">
      <input type="radio" name="agree" id="agree2" value="agreefalse">
      <label for="agree2">I DO NOT AGREE</label>
      </div>
    </form>
      <a href="information.html">
        <button class="btn">continue</button>
      </a>
  <hr>
  </section>
</x-app-layout>
