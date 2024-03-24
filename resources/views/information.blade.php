<x-app-layout>
          <!-- The contact section or page -->
          <section class="information contact">
              @if(session('successMessage'))
                  <div class="success-text" id="success-text">
                      {{ session('successMessage') }}
                  </div>
              @endif
        <form action="{{route('userinfo')}}" method="POST">
        @csrf
        <div class="contact-form-title"><span>Personal </span> Details</div>
        <div class="contact-form">
            <div class="form-row">
              <div class="form-input">
                  <label for="name">Enter Your Fullname:</label>
                  <input type="text" name="name" id="name" @error('name') style="border-color: red;" @enderror>
                  @error('name')
                    <p class="text-[#ff0000] text-base sm:text-2xl py-2 w-full">{{$message}}</p>
                  @enderror
              </div>
              <div class="form-input">
                  <label for="email">Enter Your Email:</label>
                  <input type="email" name="email" id="email" @error('email') style="border-color: red;" @enderror>
                  @error('email')
                    <p class="text-[#ff0000] text-base sm:text-2xl py-2 w-full">{{$message}}</p>
                  @enderror
              </div>
            </div>
            <div class="form-row">
              <div class="form-input">
                  <label for="birthdate">Enter Your Date of birth:</label>
                  <input type="date" name="birthdate" id="birthdate" @error('birthdate') style="border-color: red;" @enderror>
                  @error('birthdate')
                    <p class="text-[#ff0000] text-base sm:text-2xl py-2 w-full">{{$message}}</p>
                  @enderror
              </div>
              <div class="form-input">
                  <label for="mobilenumber">Enter Your Mobile Number:</label>
                  <input type="number" name="mobilenumber" id="mobilenumber" @error('mobilenumber') style="border-color: red;" @enderror>
                  @error('mobilenumber')
                    <p class="text-[#ff0000] text-base sm:text-2xl py-2 w-full">{{$message}}</p>
                  @enderror
              </div>
            </div>
            <div class="form-row">
              <div class="form-input">
                  <label for="gender" class="select-label">Select Your Gender:</label>
                  <select name="gender" id="gender" @error('gender') style="border-color: red;" @enderror>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="other">Other</option>
                  </select>
                  @error('gender')
                    <p class="text-[#ff0000] text-base sm:text-2xl py-2 w-full">{{$message}}</p>
                  @enderror
              </div>
              <div class="form-input">
                  <label for="occupation">Enter Your Occupation:</label>
                  <input type="text" name="occupation" id="occupation" @error('occupation') style="border-color: red;" @enderror>
                  @error('occupation')
                    <p class="text-[#ff0000] text-base sm:text-2xl py-2 w-full">{{$message}}</p>
                  @enderror
              </div>
            </div>
        </div>
        <div class="contact-form-title"><span>Identity </span>Details</div>
        <div class="contact-form">
            <div class="form-row">
              <div class="form-input">
                  <label for="identitydocument" class="select-label">Select the ID type:</label>
                  <select name="identitydocument" id="identitydocument" @error('identitydocument') style="border-color: red;" @enderror>
                    <option value="nationalID">National ID</option>
                    <option value="passport">Passport</option>
                    <option value="drivinglicence">Driving licence</option>
                  </select>
                  @error('identitydocument')
                    <p class="text-[#ff0000] text-base sm:text-2xl py-2 w-full">{{$message}}</p>
                  @enderror
              </div>
              <div class="form-input">
                  <label for="IDnumber">Enter the ID number:</label>
                  <input type="number" name="IDnumber" id="IDnumber" @error('IDnumber') style="border-color: red;" @enderror>
                  @error('IDnumber')
                    <p class="text-[#ff0000] text-base sm:text-2xl py-2 w-full">{{$message}}</p>
                  @enderror
              </div>
            </div>
            <div class="form-row">
              <div class="form-input">
                  <label for="issueplace">Enter the county issued:</label>
                  <select name="issueplace" id="issueplace" @error('issueplace') style="border-color: red;" @enderror>
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
                  @error('issueplace')
                    <p class="text-[#ff0000] text-base sm:text-2xl py-2 w-full">{{$message}}</p>
                  @enderror
              </div>
              <div class="form-input">
                  <label for="expirydate">Enter expiry date(optional):</label>
                  <input type="date" name="expirydate" id="expirydate" @error('expirydate') style="border-color: red;" @enderror>
                  @error('expirydate')
                    <p class="text-[#ff0000] text-base sm:text-2xl py-2 w-full">{{$message}}</p>
                  @enderror
              </div>
            </div>
            <div class="form-row">
              <div class="form-input">
                  <label for="countryissued">Enter the country issued(if non native):</label>
                  <input type="text" name="countryissued" id="countryissued" @error('countryissued') style="border-color: red;" @enderror>
                  @error('countryissued')
                    <p class="text-[#ff0000] text-base sm:text-2xl py-2 w-full">{{$message}}</p>
                  @enderror
              </div>
              <div class="form-input">
                  <label for="issueauthority">Enter the issue authoriry:</label>
                  <input type="text" name="issueauthority" id="issueauthority" @error('issueauthority') style="border-color: red;" @enderror>
                  @error('issueauthority')
                    <p class="text-[#ff0000] text-base sm:text-2xl py-2 w-full">{{$message}}</p>
                  @enderror
              </div>
            </div>
        </div>
        <div class="contact-form-title"><span>Location </span>information</div>
        <div class="contact-form">
            <div class="form-row">
              <div class="form-input">
                  <label for="county">Select the country of Residence:</label>
                  <select name="county" id="county" @error('county') style="border-color: red;" @enderror>
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
                  @error('county')
                    <p class="text-[#ff0000] text-base sm:text-2xl py-2 w-full">{{$message}}</p>
                  @enderror
              </div>

              <div class="form-input">
                  <label for="subcounty">Select the sub-county:</label>
                  <select name="subcounty" id="subcounty" @error('subcounty') style="border-color: red;" @enderror>
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
                  @error('subcounty')
                    <p class="text-[#ff0000] text-base sm:text-2xl py-2 w-full">{{$message}}</p>
                  @enderror
              </div>
            </div>
            <div class="form-row">
              <div class="form-input">
                  <label for="ward">Select the ward:</label>
                  <select name="ward" id="ward" @error('ward') style="border-color: red;" @enderror>
                    <option value="Nairobi West">Nairobi West</option>
                    <option value="Mugumoini">Mugumoini</option>
                    <option value="South C">South C</option>
                    <option value="Nyayo Highrise">Nyayo Highrise</option>
                  </select>
                  @error('ward')
                    <p class="text-[#ff0000] text-base sm:text-2xl py-2 w-full">{{$message}}</p>
                  @enderror
              </div>
              <div class="form-input">
                  <label for="zipcode">Enter the zip code:</label>
                  <input type="text" name="zipcode" id="zipcode" @error('zipcode') style="border-color: red;" @enderror>
                  @error('zipcode')
                    <p class="text-[#ff0000] text-base sm:text-2xl py-2 w-full">{{$message}}</p>
                  @enderror
              </div>
            </div>
            <div class="form-row">
              <div class="form-input">
                  <label for="address">Enter Your Address:</label>
                  <input type="text" name="address" id="address" @error('address') style="border-color: red;" @enderror>
                  @error('address')
                    <p class="text-[#ff0000] text-base sm:text-2xl py-2 w-full">{{$message}}</p>
                  @enderror
              </div>
              <div class="form-input">
                  <label for="town">Enter Your City or Town:</label>
                  <input type="text" name="town" id="town" @error('town') style="border-color: red;" @enderror>
                  @error('town')
                    <p class="text-[#ff0000] text-base sm:text-2xl py-2 w-full">{{$message}}</p>
                  @enderror
              </div>
            </div>
            <div class="form-row">
              <div class="form-input">
                  <label for="propertyID">Enter the property ID of the property you want to acquire:</label>
                  <input type="text" name="propertyID" id="propertyID" @error('propertyID') style="border-color: red;" @enderror>
                  @error('propertyID')
                    <p class="text-[#ff0000] text-base sm:text-2xl py-2 w-full">{{$message}}</p>
                  @enderror
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
          <button class="btn">Submit</button>
        </div>
      </form>
      <hr>
      </section>
</x-app-layout>
