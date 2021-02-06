@extends('layouts.homepage')

{{--@section('scripts')
    <script src="https://js.stripe.com/v3/"></script>

    <script>
        // Create a Stripe client.
        var stripe = Stripe('pk_test_zmKNlnptONWFeIFjx9V6Ft2s');
        // Create an instance of Elements.
        var elements = stripe.elements();
        // Custom styling can be passed to options when creating an Element.
        // (Note that this demo uses a wider set of styles than the guide below.)
        var style = {
            base: {
                color: '#32325d',
                fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
                fontSmoothing: 'antialiased',
                fontSize: '16px',
                '::placeholder': {
                    color: '#aab7c4'
                }
            },
            invalid: {
                color: '#fa755a',
                iconColor: '#fa755a'
            }
        };
        // Create an instance of the card Element.
        var card = elements.create('card', {style: style});
        // Add an instance of the card Element into the `card-element` <div>.
        card.mount('#card-element');
        // Handle real-time validation errors from the card Element.
        card.on('change', function(event) {
            var displayError = document.getElementById('card-errors');
            if (event.error) {
                displayError.textContent = event.error.message;
            } else {
                displayError.textContent = '';
            }
        });
        // Handle form submission.
        var form = document.getElementById('payment-form');
        var cardHolderName = document.getElementById('cardholder-name');
        var clientSecret = form.dataset.secret;
        form.addEventListener('submit', async function(event) {
            event.preventDefault();
            const { setupIntent, error } = await stripe.confirmCardSetup(
                clientSecret, {
                    payment_method: {
                        card,
                        billing_details: { name: cardHolderName.value }
                    }
                }
            );
            if (error) {
                // Inform the user if there was an error.
                var errorElement = document.getElementById('card-errors');
                errorElement.textContent = error.message;
            } else {
                // Send the token to your server.
                stripeTokenHandler(setupIntent);
            }
            // stripe.createToken(card).then(function(result) {
            //     if (result.error) {
            //     // Inform the user if there was an error.
            //     var errorElement = document.getElementById('card-errors');
            //     errorElement.textContent = result.error.message;
            //     } else {
            //     // Send the token to your server.
            //     stripeTokenHandler(result.token);
            //     }
            // });
        });
        // Submit the form with the token ID.
        function stripeTokenHandler(setupIntent) {
            // Insert the token ID into the form so it gets submitted to the server
            var form = document.getElementById('payment-form');
            var hiddenInput = document.createElement('input');
            hiddenInput.setAttribute('type', 'hidden');
            hiddenInput.setAttribute('name', 'paymentMethod');
            hiddenInput.setAttribute('value', setupIntent.payment_method);
            form.appendChild(hiddenInput);
            // Submit the form
            form.submit();
        }
    </script>
@endsection--}}

@section('content')
    <!-- top breadcrumb -->
    <div class="top_breadcrumb">
        <div class="breadcrumb_container ">
            <div class="container">
                <nav data-depth="3" class="breadcrumb">
                    <ol>
                        <li>
                            <a href="{{ route('anasayfa') }}">
                                <span>Anasayfa</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('checkout') }}">
                                <span>Ödeme</span>
                            </a>
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- top breadcrumb end -->
    <!-- checkout page content -->
    <div class="checkout-page-area">
        <!-- coupon area -->
        <div class="coupon-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="coupon-accordion">
                            {{--<!-- ACCORDION START -->
                            <h3>Returning customer? <span id="showlogin">Click here to login</span></h3>
                            <div id="checkout-login" class="coupon-content">
                                <div class="coupon-info">
                                    <p class="coupon-text">Quisque gravida turpis sit amet nulla posuere lacinia. Cras sed est sit amet ipsum luctus.</p>
                                    <form action="#">
                                        <p class="form-row-first">
                                            <label>Username or email <span class="required">*</span></label>
                                            <input type="text">
                                        </p>
                                        <p class="form-row-last">
                                            <label>Password  <span class="required">*</span></label>
                                            <input type="text">
                                        </p>
                                        <p class="form-row">
                                            <input type="submit" value="Login">
                                            <label>
                                                <input type="checkbox">
                                                Remember me
                                            </label>
                                        </p>
                                        <p class="lost-password">
                                            <a href="#">Lost your password?</a>
                                        </p>
                                    </form>
                                </div>
                            </div>
                            <!-- ACCORDION END -->--}}
                            <!-- ACCORDION START -->
                            <h3>Kuponunuz var mı?<span id="showcoupon"> Kodunuzu girmek için buraya lütfen tıklayın</span></h3>
                            <div id="checkout_coupon" class="coupon-checkout-content">
                                <div class="coupon-info">
                                    <form action="#">
                                        <p class="checkout-coupon">
                                            <input type="text" class="code" placeholder="Coupon code">
                                            <input type="submit" value="Apply Coupon">
                                        </p>
                                    </form>
                                </div>
                            </div>
                            <!-- ACCORDION END -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- coupon area end -->
        <!-- checkout area -->
        <div class="checkout-area">
            <div class="container">
                <form action="#">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="checkbox-form">
                                <h3>Fatura Detayları</h3>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="country-select mb-30">
                                            <label>Ülke <span class="required">*</span></label>
                                            <select>
                                                <option value="volvo">Türkiye</option>
                                                <option value="saab">United Kingdom </option>
                                                <option value="mercedes">United States of America</option>
                                                <option value="audi">Ghana</option>
                                                <option value="audi2">Albania</option>
                                                <option value="audi3">Bahrain</option>
                                                <option value="audi4">Colombia</option>
                                                <option value="audi5">Dominican Republic</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="checkout-form-list">
                                            <label>Ad <span class="required">*</span></label>
                                            <input type="text" placeholder="Ad">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="checkout-form-list mb-30">
                                            <label>Soyad <span class="required">*</span></label>
                                            <input type="text" placeholder="Soyad">
                                        </div>
                                    </div>
{{--                                    <div class="col-md-12">
                                        <div class="checkout-form-list mb-30">
                                            <label>Company Name</label>
                                            <input type="text" placeholder="Company Name">
                                        </div>
                                    </div>--}}
                                    <div class="col-md-12">
                                        <div class="checkout-form-list">
                                            <label>Adres <span class="required">*</span></label>
                                            <input type="text" placeholder="Adres">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="checkout-form-list mtb-30">
                                            <input type="text" placeholder="Apartman, daire, no (opsiyonel)">
                                        </div>
                                    </div>
{{--                                    <div class="col-md-12">
                                        <div class="checkout-form-list mb-30">
                                            <label>İl / İlçe <span class="required">*</span></label>
                                            <input type="text" placeholder="Town / City">
                                        </div>
                                    </div>--}}
                                    <div class="col-md-6">
                                        <div class="checkout-form-list mb-30">
                                            <label>İl / İlçe <span class="required">*</span></label>
                                            <input type="text" placeholder="İl / İlçe ">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="checkout-form-list mb-30">
                                            <label>Posta Kodu <span class="required">*</span></label>
                                            <input type="text" placeholder="Posta Kodu ">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="checkout-form-list mb-30">
                                            <label>E-mail Adresi <span class="required">*</span></label>
                                            <input type="email" placeholder="E-mail Adresi">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="checkout-form-list mb-30">
                                            <label>Telefon  <span class="required">*</span></label>
                                            <input type="text" placeholder="Telefon">
                                        </div>
                                    </div>
{{--                                    <div class="col-md-12">
                                        <div class="checkout-form-list create-acc mb-30">
                                            <input id="cbox" type="checkbox">
                                            <label>Create an account?</label>
                                        </div>
                                        <div id="cbox_info" class="checkout-form-list create-accounts mb-25">
                                            <p class="mb-10">Create an account by entering the information below. If you are a returning customer please login at the top of the page.</p>
                                            <label>Account password  <span class="required">*</span></label>
                                            <input type="password" placeholder="password">
                                        </div>
                                    </div>--}}
                                </div>
                                <div class="different-address">
{{--                                    <div class="ship-different-title">
                                        <h3>
                                            <label>Ship to a different address?</label>
                                            <input id="ship-box" type="checkbox">
                                        </h3>
                                    </div>--}}
                                    <div id="ship-box-info" class="row">
                                        <div class="col-md-12">
                                            <div class="country-select mb-30">
                                                <label>Country <span class="required">*</span></label>
                                                <select>
                                                    <option value="volvo">Bangladesh</option>
                                                    <option value="saab">Algeria</option>
                                                    <option value="mercedes">Afghanistan</option>
                                                    <option value="audi">Ghana</option>
                                                    <option value="audi2">Albania</option>
                                                    <option value="audi3">Bahrain</option>
                                                    <option value="audi4">Colombia</option>
                                                    <option value="audi5">Dominican Republic</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="checkout-form-list mb-30">
                                                <label>First Name <span class="required">*</span></label>
                                                <input type="text" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="checkout-form-list mb-30">
                                                <label>Last Name <span class="required">*</span></label>
                                                <input type="text" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="checkout-form-list mb-30">
                                                <label>Company Name</label>
                                                <input type="text" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="checkout-form-list mb-30">
                                                <label>Address <span class="required">*</span></label>
                                                <input type="text" placeholder="Street address">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="checkout-form-list mb-30">
                                                <input type="text" placeholder="Apartment, suite, unit etc. (optional)">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="checkout-form-list mb-30">
                                                <label>Town / City <span class="required">*</span></label>
                                                <input type="text" placeholder="Town / City">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="checkout-form-list mb-30">
                                                <label>State / County <span class="required">*</span></label>
                                                <input type="text" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="checkout-form-list mb-30">
                                                <label>Postcode / Zip <span class="required">*</span></label>
                                                <input type="text" placeholder="Postcode / Zip">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="checkout-form-list mb-30">
                                                <label>Email Address <span class="required">*</span></label>
                                                <input type="email" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="checkout-form-list mb-30">
                                                <label>Phone  <span class="required">*</span></label>
                                                <input type="text" placeholder="Postcode / Zip">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="order-notes">
                                        <div class="checkout-form-list">
                                            <label>Sipariş Notu</label>
                                            <textarea id="checkout-mess" cols="30" rows="10" placeholder="Sipariş, teslimat ve benzer konularda notunuzu giriniz."></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="your-order">
                                <h3>SİPARİŞİNİZ</h3>
                                <div class="your-order-table table-responsive">
                                    <table>
                                        <thead>
                                        <tr>
                                            <th class="product-name">Ürün</th>
                                            <th class="product-total">Toplam</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($products as $product)
                                        <tr class="cart_item">
                                            <td class="product-name">
                                                {{ $product->name }} <p class="product-quantity"><strong> × 1</strong></p>
                                            </td>
                                            <td class="product-total">
                                                <span class="amount">{{ $product->price }}0 TL</span>
                                            </td>
                                        </tr>
                                        @endforeach
                                        </tbody>
                                        <tfoot>
                                        <tr class="cart-subtotal">
                                            <th>Ara Toplam</th>
                                            <td><span class="amount">29.80 TL</span></td>
                                        </tr>
                                        <tr class="order-total">
                                            <th>Toplam</th>
                                            <td><strong><span class="amount">29.80 TL</span></strong>
                                            </td>
                                        </tr>
                                        </tfoot>
                                    </table>
                                </div>
                                <div class="payment-method">
                                    <div class="payment-accordion">
                                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                            <div class="panel panel-default">
                                                <div class="panel-heading" role="tab" id="headingOne">
                                                    <h4 class="panel-title" >
                                                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="color: #df9fbf;">
                                                            Doğrudan Banka Havalesi
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                                    <div class="panel-body">
                                                        <p>Ödemenizi doğrudan banka hesabımıza yapın. Lütfen ödeme referansı olarak Sipariş Kimliğinizi kullanın. Hesabımızdaki para ödenene kadar siparişiniz gönderilmeyecektir.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading" role="tab" id="headingTwo">
                                                    <h4 class="panel-title">
                                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" style="color: #df9fbf;">
                                                            Ödemeyi Kontrol Et
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                                    <div class="panel-body">
                                                        <p>Please send your cheque to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading" role="tab" id="headingThree">
                                                    <h4 class="panel-title">
                                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree" style="color: #df9fbf;">
                                                            PayPal
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                                    <div class="panel-body">
                                                        <p>PayPal ile ödeme yapın; PayPal hesabınız yoksa kredi kartınızla ödeme yapabilirsiniz.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="order-button-payment">
                                            <input type="submit" value="ÖDEME YAP">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- checkout area end -->
    </div>
{{--    <form action="" method="post" id="payment-form">
        @csrf
        <div class="form-row">
            --}}{{--<label for="cardholder-name">Cardholder's Name</label>
            <div>
                <input type="text" id="cardholder-name" class="px-2 py-2 border">
            </div>

            <div class="mt-4">
                <input type="radio" name="plan" id="standard" value="price_1HmXIkHcC5z5MAw3pfNKs65q" checked>
                <label for="standard">Standard - $10 / month</label> <br>

                <input type="radio" name="plan" id="premium" value="price_1HmXIkHcC5z5MAw3DZfIg9IZ">
                <label for="premium">Premium - $20 / month</label>
            </div>--}}{{--
            <label for="card-element">
                Credit or debit card
            </label>
            <div id="card-element">
                <!-- A Stripe Element will be inserted here. -->
            </div>

            <!-- Used to display form errors. -->
            <div id="card-errors" role="alert"></div>
        </div>

        <button>Submit Payment</button>
    </form>--}}
    <!-- checkout page content end -->
    <!-- footer start -->
    <footer id="footer" style="margin-bottom: 150px;">
        <div class="footer-container">
            <div class="footer-top">
                <div class="container">
                    <div class="rows">
                        <div class="ft_newsletter">
                            <div id="block-newsletter-label">
                                <div class="title-newsletter">
                                    <h2>Üye Ol</h2>
                                    <p class="desc">(Abone olun ve %30 indirim kazanın!)</p>
                                </div>
                            </div>
                            <form action="#">
                                <input class="btn btn-primary float-xs-right hidden-xs-down" name="submitNewsletter" value="Üye Ol" type="submit">
                                <div class="input-wrapper">
                                    <input name="email" value="" placeholder="E-mail Adresiniz" aria-labelledby="block-newsletter-label" type="text">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
            <!-- footer main -->
@endsection
