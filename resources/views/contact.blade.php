<x-app-layout>
<section class="contact">
    <div class="contact-title">Talk to <span>us</span></div>
    <div class="contact-welcome-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Inventore, saepe. Quisquam nihil ipsa itaque laboriosam voluptates fugit animi reiciendis odio, magni tenetur alias illum repellendus soluta eos labore, impedit deserunt mollitia? Reiciendis nihil aut sunt sit, neque quis expedita voluptas consequuntur deserunt laboriosam obcaecati facere. Magni provident nostrum iusto eaque dignissimos expedita et assumenda, iste eveniet voluptates voluptatum ad voluptatibus repellat voluptas in. Dicta cum veritatis harum maiores, itaque possimus, voluptas reiciendis ab rem iure vel dolorem aperiam. Voluptatibus, adipisci accusamus. Aspernatur quis repudiandae iusto non eius soluta dicta cumque eos hic, animi tempore temporibus similique cupiditate asperiores optio totam?</div>
    <hr>
    <div class="contact-form-title">Contact</div>
    <div class="contact-form">
      <form action="FORM/contact.php" method="POST">
        <div class="form-row">
          <div class="form-input">
            <input type="text" name="fname" id="fname" required>
            <label for="fname">Enter first name:</label>
          </div>
          <div class="form-input">
            <input type="text" name="lname" id="lname" required>
            <label for="lname">Enter second name:</label>
          </div>
        </div>
        <div class="form-row">
          <div class="form-input">
            <input type="text" name="email" id="email" required>
            <label for="email">Enter email:</label>
          </div>
          <div class="form-input">
            <input type="text" name="subject" id="subject" required>
            <label for="subject">Enter subject:</label>
          </div>
        </div>
        <div class="form-row">
          <div class="form-input textarea">
            <textarea name="message" id="message" cols="10" rows="5" required></textarea>
            <label for="message">Enter your message:</label>
          </div>
        </div>
        <div class="submit-btn">
          <button type="submit" class="btn">Send</button>
        </div>
      </form>
    </div>
    <div class="map">
      <div class="map-title">Location of our main <span>offices</span></div>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.8308746654557!2d36.77897851514728!3d-1.2747547359742113!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f19fd9b65c0ef%3A0xbac0db1b9cbf73e!2sArchives%20Tower%2C%20Nairobi!5e0!3m2!1sen!2ske!4v1680009140682!5m2!1sen!2ske" allowfullscreen="" loading="lazy"></iframe>
    </div>
    <hr>
  </section>
</x-app-layout>
