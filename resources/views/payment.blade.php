<x-app-layout>
    <section class="conditions information contact payment">
        <div class="contact-form-title"><span>Transactions</span> Page</div>
        <div class="payment-welcome-text">Please follow the instructions below to make your payments. After the payments, you will get a call from our team.</div>
        <div class="payment-block">
            <div class="pay-column conditions-box">
                <div class="conditions-box-title">STEPS TO PAY VIA MOBILE MONEY</div>
                <div class="condition">Go to mpesa/airtel money menu in your phone</div>
                <div class="condition">Select LIPA NA MPESA</div>
                <div class="condition">Select BUY GOODS AND SERVICES</div>
                <div class="condition">Enter the TILL NUMBER 678567 and click Okay</div>
            </div>
            <div class="pay-column conditions-box">
                <div class="conditions-box-title">STEPS TO PAY VIA BANK ACCOUNT</div>
                <div class="condition">Login to your back account</div>
                <div class="condition">Select pay to other bank</div>
                <div class="condition">Enter the account number 45763735637637</div>
                <div class="condition">Enter your PIN and click okay</div>
            </div>
        </div>
        <a href="{{route('home')}}}" class="btn">Home</a>
        <hr>
    </section>
</x-app-layout>
