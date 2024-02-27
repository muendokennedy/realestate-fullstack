<x-app-layout>
          <!-- The contact section or page -->
          <section class="information contact">
        <div class="success-text" id="success-text">
        Congratulations!!! Your holding request has been received. You can proceed to the payment page by clicking the link below
        <a href="payment.html" class="btn">Make a payment</a>
        </div>
        <form action="FORM/info.php" method="POST" id="information">
        <div class="contact-form-title"><span>Personal </span> Details</div>
        <div class="contact-form">
            <div class="form-row">
              <div class="form-input">
                <input type="text" name="Fname" id="Fname">
                <label for="Fname">Enter Your Fullname:</label>
              </div>
              <div class="form-input">
                <input type="text" name="email" id="email">
                <label for="email">Enter Your Email:</label>
              </div>
            </div>
            <div class="form-row">
              <div class="form-input">
                <input type="date" name="dob" id="dob">
                <label for="dob">Enter Your Date of birth:</label>
              </div>
              <div class="form-input">
                <input type="number" name="Mnumber" id="Mnumber">
                <label for="Mnumber">Enter Your Mobile Number:</label>
              </div>
            </div>
            <div class="form-row">
              <div class="form-input">
                <select name="gender" id="gender">
                  <option value="male">Male</option>
                  <option value="female">Female</option>
                  <option value="other">Other</option>
                </select>
                <label for="gender" class="select-label">Select Your Gender:</label>
              </div>
              <div class="form-input">
                <input type="text" name="occupation" id="occupation">
                <label for="occupation">Enter Your Occupation:</label>
              </div>
            </div>
        </div>
        <div class="contact-form-title"><span>Identity </span>Details</div>
        <div class="contact-form">
            <div class="form-row">
              <div class="form-input">
                <select name="iddocument" id="iddocument">
                  <option value="nid">National ID</option>
                  <option value="passport">Passport</option>
                  <option value="dlicence">Driving licence</option>
                </select>
                <label for="iddocument" class="select-label">Select the ID type:</label>
              </div>
              <div class="form-input">
                <input type="number" name="idnumber" id="idnumber">
                <label for="idnumber">Enter the ID number:</label>
              </div>
            </div>
            <div class="form-row">
              <div class="form-input">
                <select name="place" id="place">
                  <option value="Mombasa">Mombasa</option>
                  <option value="Taita/Taveta">Taita/Taveta</option>
                  <option value="gGarissa">Garissa</option>
                  <option value="Wajir">Wajir</option>
                  <option value="Mandera">Mandera</option>
                  <option value="Marsabit">Marsabit</option>
                  <option value="Isiolo">Isiolo</option>
                  <option value="West Pokot">West Pokot</option>
                  <option value="Nairobi City">Nairobi City</option>
                </select>
                <label for="place">Enter the county issued:</label>
              </div>
              <div class="form-input">
                <input type="date" name="expirydate" id="expirydate">
                <label for="expirydate">Enter expiry date(optional):</label>
              </div>
            </div>
            <div class="form-row">
              <div class="form-input">
                <input type="text" name="countryissued" id="countryissued">
                <label for="countryissued">Enter the country issued(if non native):</label>
              </div>
              <div class="form-input">
                <input type="text" name="issueauthority" id="issueauthority">
                <label for="issueauthority">Enter the issue authoriry:</label>
              </div>
            </div>
        </div>
        <div class="contact-form-title"><span>Location </span>information</div>
        <div class="contact-form">
            <div class="form-row">
              <div class="form-input">
                <select name="county" id="county">
                  <option value="Mombasa">Mombasa</option>
                  <option value="Taita/Taveta">Taita/Taveta</option>
                  <option value="gGarissa">Garissa</option>
                  <option value="Wajir">Wajir</option>
                  <option value="Mandera">Mandera</option>
                  <option value="Marsabit">Marsabit</option>
                  <option value="Isiolo">Isiolo</option>
                  <option value="West Pokot">West Pokot</option>
                  <option value="Nairobi City">Nairobi City</option>
                </select>
                <label for="county">Select the country of Residence:</label>
              </div>

              <div class="form-input">
                <select name="subcounty" id="subcounty">
                  <option value="Westlands">Westlands</option>
                  <option value="Dagoretti North">Dagoretti North</option>
                  <option value="Dagoretti South">Dagoretti South</option>
                  <option value="Langata">Langata</option>
                  <option value="Kibra">Kibra</option>
                  <option value="Roysambu">Roysambu</option>
                  <option value="Kasarani">Kasarani</option>
                  <option value="Ruaraka">Ruaraka</option>
                  <option value="Embakasi South">Embakasi South</option>
                </select>
                <label for="subcounty">Select the sub-county:</label>
              </div>
            </div>
            <div class="form-row">
              <div class="form-input">
                <select name="ward" id="ward">
                  <option value="Nairobi West">Nairobi West</option>
                  <option value="Mugumoini">Mugumoini</option>
                  <option value="South C">South C</option>
                  <option value="Nyayo Highrise">Nyayo Highrise</option>
                </select>
                <label for="ward">Select the ward:</label>
              </div>
              <div class="form-input">
                <input type="text" name="zipcode" id="zipcode">
                <label for="zipcode">Enter the zip code:</label>
              </div>
            </div>
            <div class="form-row">
              <div class="form-input">
                <input type="text" name="address" id="address">
                <label for="address">Enter Your Address:</label>
              </div>
              <div class="form-input">
                <input type="text" name="town" id="town">
                <label for="town">Enter Your City or Town:</label>
              </div>
            </div>
            <div class="form-row">
              <div class="form-input">
                <input type="text" name="propertyID" id="propertyID">
                <label for="propertyID">Enter the property ID of the property you want to acquire:</label>
              </div>
            </div>
        </div>
        <!-- <div class="contact-form-title"><span>Documents</span> to attach</div>
        <div class="contact-form">
            <div class="form-row">
              <div class="form-input">
                <input type="file" name="idcopy" id="idcopy" required>
                <label for="idcopy">Attach Original copy of ID:</label>
              </div>
              <div class="form-input">
                <input type="file" name="passport" id="passport" required>
                <label for="passport">Attach a passport photo:</label>
              </div>
            </div>
        </div> -->
        <div class="submit-btn">
          <button class="btn" type="submit" name="submit">Submit</button>
        </div>
      </form>
      <hr>
      </section>
</x-app-layout>
