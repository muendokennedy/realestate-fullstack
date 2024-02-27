<x-app-layout>
  <!-- This is the home section  -->
  <section class="home">
    <div class="welcome-section">
      <div class="home-title">Welcome
        @auth('web')
        <span class="text-[#2DE19D]">{{ auth('web')->user()->name }}</span>
        @endauth
      </div>
      @guest('web')
      <div class="signup-login">
          <a href="{{route('customer.signup')}}" class="btn">signup</a>
          <a href="{{route('customer.login')}}" class="btn">login</a>
        </div>
        @endguest
        @auth('web')
        <div class="signup-login">
            <form action="{{route('logout')}}" method="POST">
            @csrf
            <button class="btn">logout</button>
            </form>
        </div>
        @endauth
    </div>
    <div class="home-welcome-text">Welcome to Real estate Kenya, official website. We provide the interface for reliable accessibility of all the real estate dealerships in Kenya. We ensure that the process is smooth and fraud free. We also connect people with a pool of Real Estate properties that would never have existed in  our absence. Our mission is to bring clarity to the whole process and prevent any occurrences of frauds. If you wish to have more clarity feel free to call our customer care who is available during the public or government work ours or visit one of our offices in the following Kenyan cities: Nairobi, Mombasa, Nakuru, Kisumu.</div>
    <div class="home-title">We deal in:</div>
    <hr>
    <div class="home-property-box">
      <div class="home-property-box-title">Real estate <span>Apartments</span></div>
      <div class="property-box">
        <div class="property-image">
          <img src="IMAGES/appartment.jpg" alt="">
        </div>
        <div class="property-details">
          We have Real estate Apartments. These exist in several forms. We may have someone who is selling an already existing Apartment, an apartment that is fresh from construction and is under sale and many other other situations. All these have different prices and we are not in control of the purchase prices.
          They appear as valued by the owners.
          <a href="{{route('apartments')}}" class="btn">see more</a>
        </div>
      </div>
    </div>
    <hr>
    <div class="home-property-box">
      <div class="home-property-box-title"><span>Urban </span>Land Plots </div>
      <div class="property-box">
        <div class="property-image">
          <img src="IMAGES/land plot.jpg" alt="">
        </div>
        <div class="property-details">We have plots of land which are specifically located in the urban or metrolpolitan regions. These of course are more expensive than the other similar plots of land and are much smaller. However they involve long processes of legal ownership authenticity. Over 90% of them are sold already built up. You can see more about these properties by clicking the button below.
          <a href="{{route('urban')}}" class="btn">see more</a>
        </div>
      </div>
    </div>
    <hr>
    <div class="home-property-box">
      <div class="home-property-box-title"><span>Upcountry </span>Land Plots </div>
      <div class="property-box">
        <div class="property-image">
          <img src="IMAGES/land plot2.jpeg" alt="">
        </div>
        <div class="property-details">We have plots of land which are mainly located in the rural areas and the remote regions of the country. These plots of land are mainly large in size. Some are located in rainy areas and most of them are more expensive, as valued by their owners while others are located in dry areas and most of them tend to be less expensive or even affordable in the end. To see more about these types of properties, click the link below.
          <a href="{{route('upcountry')}}" class="btn">see more</a>
        </div>
      </div>
    </div>
    <hr>
    <div class="home-property-box">
      <div class="home-property-box-title"><span>Houses </span>on sale</div>
      <div class="property-box">
        <div class="property-image">
          <img src="IMAGES/house.jpg" alt="">
        </div>
        <div class="property-details">We have houses on sale. These houses come in the following forms: old houses which are well taken care of and  are of high market value, new houses which are fresh from construction or even many houses in an estate. The houses are mainly from the three cities of Kenya which are Nairobi, Mombasa, Nakuru and Kisumu. Neverthesless we still have houses from other smaller towns of Kenya thought they account for much lower percentage of the overall number of house properties. To see more about the house properties avaible, click the link below.
          <a href="{{route('houses')}}" class="btn">see more</a>
        </div>
      </div>
    </div>
    <hr>
  </section>
</x-app-layout>
