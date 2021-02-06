{{--
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Stripe Payments Demo</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@stripe">
    <meta name="twitter:title" content="Stripe Payments Demo">
    <meta name="twitter:description" content="Sample store accepting universal payments on the web with Stripe Elements, Payment Request, Apple Pay, Google Pay, and the Sources API.">
    <meta name="twitter:image" content="https://stripe-payments-demo.appspot.com/images/twitter.png">
    <link rel="stylesheet" type="text/css" href="/stylesheets/store.css">
    <link rel="icon" type="image/png" sizes="104x80" href="/images/logo.png">

    <style>
        /**
 * store.css
 * Stripe Payments Demo. Created by Romain Huet (@romainhuet).
 */

        * {
            margin: 0;
            padding: 0;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            -webkit-text-size-adjust: none;
            box-sizing: border-box;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto,
            Oxygen-Sans, Ubuntu, Cantarell, 'Helvetica Neue', sans-serif;
            font-size: 15px;
            line-height: 1.4em;
            color: #525f7f;
        }

        body {
            display: flex;
            flex-direction: row;
            align-items: center;
            background: #f8fbfd;
        }

        /* Overall Container */

        #main {
            width: 100%;
            height: 100vh;
            text-align: center;
            transition: width 0.3s ease-in-out;
        }

        #main.checkout:not(.success):not(.error) {
            width: calc(100% - 450px);
        }

        /* Header */

        .header {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            width: 100%;
            height: 80px;
            background: #fff url(/images/logo.svg) center center no-repeat;
            border-bottom: 1px solid #f3f3ff;
        }

        .header a.shop,
        .header a.github {
            margin: 30px;
            font-size: 13px;
            font-weight: 500;
            color: #666ee8;
            letter-spacing: 0.3px;
            text-transform: uppercase;
            text-decoration: none;
        }

        .header a.github {
            padding-left: 20px;
            background: url(/images/github.svg) left center no-repeat;
        }

        .header a:hover {
            text-decoration: underline;
        }

        /* Checkout */

        #checkout {
            max-width: 480px;
            margin: 0 auto;
            padding: 30px 0;
            visibility: hidden;
            opacity: 0;
            transition: visibility 0s, opacity 0.5s linear 0.5s;
        }

        #main.checkout #checkout {
            visibility: visible;
            opacity: 1;
        }

        section {
            display: flex;
            flex-direction: column;
            position: relative;
            text-align: left;
        }

        h1 {
            margin: 0 0 20px 0;
            font-size: 20px;
            font-weight: 500;
        }

        h2 {
            margin: 15px 0;
            color: #32325d;
            text-transform: uppercase;
            letter-spacing: 0.3px;
            font-size: 13px;
            font-weight: 500;
        }

        /* Payment Request */

        #payment-request {
            visibility: hidden;
            opacity: 0;
            min-height: 100px;
            padding: 20px 0;
            transition: visibility 0s, opacity 0.3s ease-in;
        }

        #payment-request.visible {
            visibility: visible;
            opacity: 1;
        }

        #payment-form {
            margin: 0 -30px;
            padding: 20px 30px 30px;
            border-radius: 4px;
            border: 1px solid #e8e8fb;
        }

        /* Form */

        fieldset {
            margin-bottom: 20px;
            background: #fff;
            box-shadow: 0 1px 3px 0 rgba(50, 50, 93, 0.15),
            0 4px 6px 0 rgba(112, 157, 199, 0.15);
            border-radius: 4px;
            border: none;
            font-size: 0;
        }

        fieldset label {
            position: relative;
            display: flex;
            flex-direction: row;
            height: 42px;
            padding: 10px 0;
            align-items: center;
            justify-content: center;
            color: #8898aa;
            font-weight: 400;
        }

        fieldset label:not(:last-child) {
            border-bottom: 1px solid #f0f5fa;
        }

        fieldset label.state {
            display: inline-flex;
            width: 75%;
        }

        fieldset:not(.with-state) label.state {
            display: none;
        }

        fieldset label.zip {
            display: inline-flex;
            width: 25%;
            padding-right: 60px;
        }

        fieldset:not(.with-state) label.zip {
            width: 100%;
        }

        fieldset label span {
            min-width: 125px;
            padding: 0 15px;
            text-align: right;
        }

        fieldset .redirect label span {
            width: 100%;
            text-align: center;
        }

        p.instruction {
            display: inline-table;
            margin-top: -32px;
            padding: 0 5px;
            text-align: center;
            background: #f8fbfd;
        }

        p.tip {
            margin: -10px auto 10px;
            padding: 5px 0 5px 30px;
            font-size: 14px;
            background: url(/images/tip.svg) left center no-repeat;
        }

        span#generate {
            cursor: pointer;
            color: #525f7f;
            text-decoration: underline;
        }
        span#generate:hover {
            text-decoration: none;
        }

        .field {
            flex: 1;
            padding: 0 15px;
            background: transparent;
            font-weight: 400;
            color: #31325f;
            outline: none;
            cursor: text;
        }

        .field::-webkit-input-placeholder {
            color: #aab7c4;
        }
        .field::-moz-placeholder {
            color: #aab7c4;
        }
        .field:-ms-input-placeholder {
            color: #aab7c4;
        }

        fieldset .select::after {
            content: '';
            position: absolute;
            width: 9px;
            height: 5px;
            right: 20px;
            top: 50%;
            margin-top: -2px;
            background-image: url(/images/dropdown.svg);
            pointer-events: none;
        }

        input {
            flex: 1;
            border-style: none;
            outline: none;
            color: #313b3f;
        }

        select {
            flex: 1;
            border-style: none;
            outline: none;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            outline: none;
            color: #313b3f;
            cursor: pointer;
            background: transparent;
        }

        select:focus {
            color: #666ee8;
        }

        ::-webkit-input-placeholder {
            color: #cfd7e0;
        }
        ::-moz-placeholder {
            color: #cfd7e0;
            opacity: 1;
        }
        :-ms-input-placeholder {
            color: #cfd7e0;
        }

        input:-webkit-autofill,
        select:-webkit-autofill {
            -webkit-text-fill-color: #666ee8;
            transition: background-color 100000000s;
            -webkit-animation: 1ms void-animation-out 1s;
        }

        .StripeElement--webkit-autofill {
            background: transparent !important;
        }

        #card-element {
            margin-top: -1px;
        }

        #ideal-bank-element {
            padding: 0;
        }

        button {
            display: block;
            background: #666ee8;
            color: #fff;
            box-shadow: 0 4px 6px rgba(50, 50, 93, 0.11), 0 1px 3px rgba(0, 0, 0, 0.08);
            border-radius: 4px;
            border: 0;
            font-weight: 700;
            width: 100%;
            height: 40px;
            outline: none;
            cursor: pointer;
            transition: all 0.15s ease;
        }

        button:focus {
            background: #555abf;
        }

        button:hover {
            transform: translateY(-1px);
            box-shadow: 0 7px 14px 0 rgba(50, 50, 93, 0.1),
            0 3px 6px 0 rgba(0, 0, 0, 0.08);
        }

        button:active {
            background: #43458b;
        }

        #country {
            display: flex;
            align-items: center;
        }

        #country select {
            margin: 0 -15px 0 -30px;
            padding: 0 15px 0 30px;
        }

        #country::before {
            display: inline-flex;
            content: '';
            width: 21px;
            height: 15px;
            background: url(/images/flags.svg);
            background-position: -1000px -1000px;
            background-repeat: no-repeat;
            margin-right: 10px;
        }

        #country.ad::before {
            background-position: -10px -10px;
        }

        #country.ae::before {
            background-position: -41px -10px;
        }

        #country.ag::before {
            background-position: -72px -10px;
        }

        #country.am::before {
            background-position: -103px -10px;
        }

        #country.ar::before {
            background-position: -134px -10px;
        }

        #country.at::before {
            background-position: -165px -10px;
        }

        #country.au::before {
            background-position: -196px -10px;
        }

        #country.be::before {
            background-position: -227px -10px;
        }

        #country.bf::before {
            background-position: -258px -10px;
        }

        #country.bg::before {
            background-position: -289px -10px;
        }

        #country.bo::before {
            background-position: -320px -10px;
        }

        #country.br::before {
            background-position: -351px -10px;
        }

        #country.ca::before {
            background-position: -382px -10px;
        }

        #country.cd::before {
            background-position: -413px -10px;
        }

        #country.cg::before {
            background-position: -444px -10px;
        }

        #country.ch::before {
            background-position: -475px -10px;
        }

        #country.cl::before {
            background-position: -506px -10px;
        }

        #country.cm::before {
            background-position: -10px -35px;
        }

        #country.cn::before {
            background-position: -41px -35px;
        }

        #country.co::before {
            background-position: -72px -35px;
        }

        #country.cr::before {
            background-position: -103px -35px;
        }

        #country.cz::before {
            background-position: -134px -35px;
        }

        #country.de::before {
            background-position: -165px -35px;
        }

        #country.dj::before {
            background-position: -196px -35px;
        }

        #country.dk::before {
            background-position: -227px -35px;
        }

        #country.dz::before {
            background-position: -258px -35px;
        }

        #country.ec::before {
            background-position: -289px -35px;
        }

        #country.ee::before {
            background-position: -320px -35px;
        }

        #country.eg::before {
            background-position: -351px -35px;
        }

        #country.es::before {
            background-position: -382px -35px;
        }

        #country.eu::before {
            background-position: -413px -35px;
        }

        #country.fi::before {
            background-position: -444px -35px;
        }

        #country.fo::before {
            background-position: -475px -35px;
        }

        #country.fr::before {
            background-position: -506px -35px;
        }

        #country.ga::before {
            background-position: -10px -60px;
        }

        #country.gb::before {
            background-position: -41px -60px;
        }

        #country.gl::before {
            background-position: -72px -60px;
        }

        #country.gm::before {
            background-position: -103px -60px;
        }

        #country.gr::before {
            background-position: -134px -60px;
        }

        #country.gt::before {
            background-position: -165px -60px;
        }

        #country.gu::before {
            background-position: -196px -60px;
        }

        #country.hk::before {
            background-position: -227px -60px;
        }

        #country.hn::before {
            background-position: -258px -60px;
        }

        #country.ht::before {
            background-position: -289px -60px;
        }

        #country.hu::before {
            background-position: -320px -60px;
        }

        #country.id::before {
            background-position: -351px -60px;
        }

        #country.ie::before {
            background-position: -382px -60px;
        }

        #country.il::before {
            background-position: -413px -60px;
        }

        #country.im::before {
            background-position: -444px -60px;
        }

        #country.in::before {
            background-position: -475px -60px;
        }

        #country.iq::before {
            background-position: -506px -60px;
        }

        #country.ir::before {
            background-position: -10px -85px;
        }

        #country.is::before {
            background-position: -41px -85px;
        }

        #country.it::before {
            background-position: -72px -85px;
        }

        #country.je::before {
            background-position: -103px -85px;
        }

        #country.jm::before {
            background-position: -134px -85px;
        }

        #country.jo::before {
            background-position: -165px -85px;
        }

        #country.jp::before {
            background-position: -196px -85px;
        }

        #country.kg::before {
            background-position: -227px -85px;
        }

        #country.kn::before {
            background-position: -258px -85px;
        }

        #country.kp::before {
            background-position: -289px -85px;
        }

        #country.kr::before {
            background-position: -320px -85px;
        }

        #country.kw::before {
            background-position: -351px -85px;
        }

        #country.kz::before {
            background-position: -382px -85px;
        }

        #country.la::before {
            background-position: -413px -85px;
        }

        #country.lb::before {
            background-position: -444px -85px;
        }

        #country.lc::before {
            background-position: -475px -85px;
        }

        #country.ls::before {
            background-position: -506px -85px;
        }

        #country.lt::before {
            background-position: -10px -110px;
        }

        #country.lu::before {
            background-position: -41px -110px;
        }

        #country.lv::before {
            background-position: -72px -110px;
        }

        #country.ma::before {
            background-position: -103px -110px;
        }

        #country.mg::before {
            background-position: -134px -110px;
        }

        #country.mk::before {
            background-position: -165px -110px;
        }

        #country.ml::before {
            background-position: -196px -110px;
        }

        #country.mm::before {
            background-position: -227px -110px;
        }

        #country.mt::before {
            background-position: -258px -110px;
        }

        #country.mx::before {
            background-position: -289px -110px;
        }

        #country.my::before {
            background-position: -320px -110px;
        }

        #country.na::before {
            background-position: -351px -110px;
        }

        #country.ne::before {
            background-position: -382px -110px;
        }

        #country.ng::before {
            background-position: -413px -110px;
        }

        #country.ni::before {
            background-position: -444px -110px;
        }

        #country.nl::before {
            background-position: -475px -110px;
        }

        #country.no::before {
            background-position: -506px -110px;
        }

        #country.nz::before {
            background-position: -10px -135px;
        }

        #country.om::before {
            background-position: -41px -135px;
        }

        #country.pa::before {
            background-position: -72px -135px;
        }

        #country.pe::before {
            background-position: -103px -135px;
        }

        #country.pg::before {
            background-position: -134px -135px;
        }

        #country.ph::before {
            background-position: -165px -135px;
        }

        #country.pk::before {
            background-position: -196px -135px;
        }

        #country.pl::before {
            background-position: -227px -135px;
        }

        #country.pr::before {
            background-position: -258px -135px;
        }

        #country.ps::before {
            background-position: -289px -135px;
        }

        #country.pt::before {
            background-position: -320px -135px;
        }

        #country.py::before {
            background-position: -351px -135px;
        }

        #country.qa::before {
            background-position: -382px -135px;
        }

        #country.ro::before {
            background-position: -444px -135px;
        }

        #country.ru::before {
            background-position: -475px -135px;
        }

        #country.rw::before {
            background-position: -506px -135px;
        }

        #country.sa::before {
            background-position: -10px -160px;
        }

        #country.se::before {
            background-position: -41px -160px;
        }

        #country.sg::before {
            background-position: -72px -160px;
        }

        #country.si::before {
            background-position: -103px -160px;
        }

        #country.sk::before {
            background-position: -134px -160px;
        }

        #country.sl::before {
            background-position: -165px -160px;
        }

        #country.sn::before {
            background-position: -196px -160px;
        }

        #country.so::before {
            background-position: -227px -160px;
        }

        #country.sv::before {
            background-position: -258px -160px;
        }

        #country.td::before {
            background-position: -289px -160px;
        }

        #country.th::before {
            background-position: -320px -160px;
        }

        #country.tj::before {
            background-position: -351px -160px;
        }

        #country.tl::before {
            background-position: -382px -160px;
        }

        #country.tr::before {
            background-position: -413px -160px;
        }

        #country.tw::before {
            background-position: -444px -160px;
        }

        #country.tz::before {
            background-position: -475px -160px;
        }

        #country.ua::before {
            background-position: -506px -160px;
        }

        #country.us::before {
            background-position: -10px -185px;
        }

        #country.uy::before {
            background-position: -41px -185px;
        }

        #country.ve::before {
            background-position: -72px -185px;
        }

        #country.vn::before {
            background-position: -103px -185px;
        }

        #country.xx::before {
            background-position: -134px -185px;
        }

        #country.ye::before {
            background-position: -165px -185px;
        }

        #country.za::before {
            background-position: -196px -185px;
        }

        /* Payment Methods */

        #payment-methods {
            margin: 0 0 20px;
            border-bottom: 2px solid #e8e8fb;
        }

        #payment-methods li {
            display: none;
        }

        #payment-methods li.visible {
            display: inline-block;
            margin: 0 20px 0 0;
            list-style: none;
        }

        #payment-methods input {
            display: none;
        }

        #payment-methods label {
            display: flex;
            flex: 1;
            cursor: pointer;
        }

        #payment-methods input + label {
            position: relative;
            padding: 5px 0;
            text-decoration: none;
            text-transform: uppercase;
            font-size: 13px;
        }

        #payment-methods label::before {
            content: '';
            position: absolute;
            width: 100%;
            bottom: -2px;
            left: 0;
            border-bottom: 2px solid #6772e5;
            opacity: 0;
            transform: scaleX(0);
            transition: all 0.25s ease-in-out;
        }

        #payment-methods label:hover {
            color: #6772e5;
            cursor: pointer;
        }

        #payment-methods input:checked + label {
            color: #6772e5;
        }

        #payment-methods label:hover::before,
        #payment-methods input:checked + label::before {
            opacity: 1;
            transform: scaleX(1);
        }

        #payment-methods,
        .payment-info {
            display: none;
        }

        .payment-info:not(.card) {
            margin-bottom: 15px;
        }

        .payment-info.ideal {
            margin-bottom: 0;
        }

        #payment-methods.visible,
        .payment-info.visible {
            display: block;
        }

        .payment-info.card.visible,
        .payment-info.sepa_debit.visible {
            text-align: center;
        }

        .payment-info p.notice {
            font-size: 14px;
            color: #8898aa;
            text-align: left;
        }

        #wechat-qrcode img {
            margin: 0 auto;
        }

        .element-errors {
            display: inline-flex;
            height: 20px;
            margin: 15px auto 0;
            padding-left: 20px;
            color: #e25950;
            opacity: 0;
            transform: translateY(10px);
            transition-property: opacity, transform;
            transition-duration: 0.35s;
            transition-timing-function: cubic-bezier(0.165, 0.84, 0.44, 1);
            background: url(/images/error.svg) center left no-repeat;
            background-size: 15px 15px;
        }

        .element-errors.visible {
            opacity: 1;
            transform: none;
        }

        #iban-errors {
            margin-top: -20px;
        }

        /* Order Summary */

        #summary {
            position: fixed;
            top: 0;
            right: -450px;
            bottom: 0;
            width: 450px;
            overflow: auto;
            height: 100%;
            background: #fff;
            box-shadow: 0 2px 19px 4px rgba(0, 0, 0, 0.04);
            transition: right 0.3s ease-in-out;
        }

        #main.checkout:not(.success):not(.error) + #summary {
            right: 0;
        }

        #summary .header {
            background: #fff;
        }

        #summary h1 {
            margin: 0 30px;
            line-height: 80px;
            font-weight: 400;
        }

        #summary p {
            font-size: 16px;
            font-weight: 400;
            margin-top: 10px;
        }

        #summary .discount p {
            margin-top: 0;
        }

        #summary .line-item {
            display: flex;
            flex-direction: row;
            padding: 30px 30px 0 30px;
        }

        #summary .line-item .image {
            display: block;
            width: 80px;
            height: 80px;
            margin-right: 15px;
            background: #f6f9fc;
            border-radius: 3px;
        }

        #summary .line-item .label {
            flex: 1;
            text-align: left;
        }

        #summary .line-item .product {
            color: #424770;
        }

        #summary .line-item .sku {
            font-size: 14px;
            color: #8898aa;
        }

        #summary .line-item .count,
        #summary .line-item .price {
            font-size: 14px;
            padding-left: 10px;
            align-self: right;
            text-align: right;
            line-height: 24px;
        }

        #summary .line-item .count {
            color: #8898aa;
        }

        #summary .line-item .price {
            color: #8ba4fe;
            font-weight: bold;
        }

        #summary .line-item.subtotal {
            margin-top: 30px;
            margin-bottom: 0;
            padding-top: 10px;
            border-top: 1px solid #f3f3ff;
        }

        #summary .line-item.shipping {
            padding-top: 0;
        }

        #summary .line-item.total {
            margin-top: 15px;
            margin-bottom: 30px;
            padding-top: 15px;
            font-size: 21px;
            border-top: 1px solid #f3f3ff;
        }

        #summary .line-item.total .label,
        #summary .line-item.total .price {
            color: #424770;
            font-size: 24px;
            font-weight: 400;
            line-height: inherit;
        }

        #demo {
            padding: 15px;
            margin: -15px -15px 0;
            background: #f6f9fc;
            border-radius: 5px;
        }

        #demo p.label {
            margin: 0 0 10px;
            color: #666ee8;
        }

        #demo .note {
            display: block;
            margin: 10px 0 0;
            font-size: 14px;
        }

        #demo p.note a,
        #demo p.note em {
            font-size: 14px;
        }

        #demo p.note a:hover {
            text-decoration: none;
        }

        .card-number {
            padding-left: 8px;
            white-space: nowrap;
            font-family: Source Code Pro, monospace;
            color: #0d2b3e;
            font-weight: 500;
        }

        .card-number span {
            display: inline-block;
            width: 8px;
        }

        /* Order Confirmation */

        #confirmation {
            display: flex;
            align-items: center;
            position: absolute;
            top: 80px;
            left: 0;
            right: 0;
            bottom: 0;
            width: 100%;
            visibility: hidden;
            overflow-x: hidden;
            opacity: 0;
            background: #f8fbfd;
            text-align: left;
            transition: visibility 0s, opacity 0.5s linear 0.5s;
        }

        #main.success #confirmation,
        #main.error #confirmation {
            visibility: visible;
            opacity: 1;
        }

        #main.success #order,
        #main.error #order {
            visibility: hidden;
            opacity: 0;
        }

        #confirmation h1 {
            font-size: 42px;
            font-weight: 300;
            color: #6863d8;
            letter-spacing: 0.3px;
            margin-bottom: 30px;
        }

        #confirmation .status {
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding: 0 75px 0 275px;
            max-width: 75%;
            height: 350px;
            margin: 100px auto;
            background: #fff url(/images/order.svg) 75px center no-repeat;
            box-shadow: 0 1px 3px 0 rgba(50, 50, 93, 0.15);
            border-radius: 6px;
        }

        #confirmation .status.error {
            display: none;
        }

        #confirmation .status p {
            margin: 0 0 15px;
        }

        #confirmation .status li {
            margin-bottom: 5px;
            list-style: none;
        }

        #main.success:not(.processing) #confirmation .status.processing,
        #main.success:not(.receiver) #confirmation .status.receiver {
            display: none;
        }

        #main.processing #confirmation .status.success,
        #main.receiver #confirmation .status.success {
            display: none;
        }

        #main.error #confirmation .status.success,
        #main.error #confirmation .status.processing,
        #main.error #confirmation .status.receiver {
            display: none;
        }

        #main.error #confirmation .status.error {
            display: flex;
        }

        #main.error #confirmation .error-message {
            font-family: monospace;
        }

        /* Media Queries */

        @media only screen and (max-width: 1024px) {
            #main.checkout:not(.success):not(.error) {
                width: calc(100% - 320px);
            }
            #summary {
                width: 320px;
                right: -320px;
            }
            #main.checkout:not(.success):not(.error) + #summary {
                right: 0;
            }
            #summary .line-item p {
                margin-top: 0;
            }
            #summary .line-item .image {
                width: 40px;
                height: 40px;
            }
            #summary .line-item .label {
                margin: 0;
            }
        }

        @media only screen and (max-width: 800px) {
            #main.checkout:not(.success):not(.error) {
                width: 100%;
            }
            #payment-request {
                padding-top: 0;
                min-height: 80px;
            }
            #summary {
                display: none;
            }
            #confirmation .status {
                width: auto;
                height: auto;
                margin: 30px;
            }
        }

        @media only screen and (max-width: 500px) {
            .header {
                height: 60px;
                background-size: 40px 40px;
            }
            .header a.shop,
            .header a.github {
                display: none;
            }
            #payment-request {
                min-height: 0;
                padding-right: 15px;
                padding-left: 15px;
            }
            #payment-form {
                margin: 0;
                padding: 0 15px;
                border-width: 2px 0 0 0;
                border-radius: 0;
            }
            .payment-info span {
                display: none;
            }
            fieldset {
                margin-bottom: 15px;
            }
            fieldset label.state,
            fieldset label.zip {
                display: flex;
                width: inherit;
                padding: 10px 0;
            }
            p.instruction {
                margin-top: -12px;
                font-size: 14px;
            }
            p.tip {
                margin-bottom: 0;
                font-size: 13px;
            }
            #country::before {
                display: none;
            }
            #checkout {
                margin-bottom: 0;
            }
            #confirmation .status {
                width: auto;
                height: auto;
                padding: 120px 15px 15px;
                background: #fff url(/images/order.svg) center 15px no-repeat;
                background-size: 68px 86px;
                box-shadow: 0 1px 3px 0 rgba(50, 50, 93, 0.15);
                border-radius: 6px;
            }
            #confirmation h1 {
                text-align: center;
            }
        }
    </style>
</head>

<body>
<main id="main" class="loading">
    <header class="header">
        <a class="shop" href="/">Stripe Payments Demo</a>
        <a class="github" href="https://github.com/stripe/stripe-payments-demo">View on GitHub</a>
    </header>
    <div id="checkout">
        <div id="payment-request">
            <div id="payment-request-button"></div>
        </div>
        <form id="payment-form" method="POST" action="/orders">
            <p class="instruction"><span>Complete</span>/<span id="generate">generate</span> your shipping and payment details below</p>
            <section>
                <h2>Shipping &amp; Billing Information</h2>
                <fieldset class="with-state">
                    <label>
                        <span>Name</span>
                        <input name="name" class="field" placeholder="Jenny Rosen" required>
                    </label>
                    <label>
                        <span>Email</span>
                        <input name="email" type="email" class="field" placeholder="jenny@example.com" required>
                    </label>
                    <label>
                        <span>Address</span>
                        <input name="address" class="field" placeholder="185 Berry Street Suite 550">
                    </label>
                    <label class="city">
                        <span>City</span>
                        <input name="city" class="field" placeholder="San Francisco">
                    </label>
                    <label class="state">
                        <span>State</span>
                        <input name="state" class="field" placeholder="CA">
                    </label>
                    <label class="zip">
                        <span>ZIP</span>
                        <input name="postal_code" class="field" placeholder="94107">
                    </label>
                    <label class="select">
                        <span>Country</span>
                        <div id="country" class="field US">
                            <select name="country">
                                <option value="AU">Australia</option>
                                <option value="AT">Austria</option>
                                <option value="BE">Belgium</option>
                                <option value="BR">Brazil</option>
                                <option value="CA">Canada</option>
                                <option value="CN">China</option>
                                <option value="DK">Denmark</option>
                                <option value="FI">Finland</option>
                                <option value="FR">France</option>
                                <option value="DE">Germany</option>
                                <option value="HK">Hong Kong</option>
                                <option value="IE">Ireland</option>
                                <option value="IT">Italy</option>
                                <option value="JP">Japan</option>
                                <option value="LU">Luxembourg</option>
                                <option value="MY">Malaysia</option>
                                <option value="MX">Mexico</option>
                                <option value="NL">Netherlands</option>
                                <option value="NZ">New Zealand</option>
                                <option value="NO">Norway</option>
                                <option value="PL">Poland</option>
                                <option value="PT">Portugal</option>
                                <option value="SG">Singapore</option>
                                <option value="ES">Spain</option>
                                <option value="SE">Sweden</option>
                                <option value="CH">Switzerland</option>
                                <option value="GB">United Kingdom</option>
                                <option value="US" selected="selected">United States</option>
                            </select>
                        </div>
                    </label>
                </fieldset>
                <p class="tip">Select another country to see different payment options.</p>
            </section>
            <section>
                <h2>Payment Information</h2>
                <nav id="payment-methods">
                    <ul>
                        <li>
                            <input type="radio" name="payment" id="payment-card" value="card" checked>
                            <label for="payment-card">Card</label>
                        </li>
                        <li>
                            <input type="radio" name="payment" id="payment-ach_credit_transfer" value="ach_credit_transfer" checked>
                            <label for="payment-ach_credit_transfer">Bank Transfer</label>
                        </li>
                        <li>
                            <input type="radio" name="payment" id="payment-alipay" value="alipay">
                            <label for="payment-alipay">Alipay</label>
                        </li>
                        <li>
                            <input type="radio" name="payment" id="payment-bancontact" value="bancontact">
                            <label for="payment-bancontact">Bancontact</label>
                        </li>
                        <li>
                            <input type="radio" name="payment" id="payment-eps" value="eps">
                            <label for="payment-eps">EPS</label>
                        </li>
                        <li>
                            <input type="radio" name="payment" id="payment-ideal" value="ideal">
                            <label for="payment-ideal">iDEAL</label>
                        </li>
                        <li>
                            <input type="radio" name="payment" id="payment-giropay" value="giropay">
                            <label for="payment-giropay">Giropay</label>
                        </li>
                        <li>
                            <input type="radio" name="payment" id="payment-multibanco" value="multibanco">
                            <label for="payment-multibanco">Multibanco</label>
                        </li>
                        <li>
                            <input type="radio" name="payment" id="payment-p24" value="p24">
                            <label for="payment-p24">Przelewy24</label>
                        </li>
                        <li>
                            <input type="radio" name="payment" id="payment-sepa_debit" value="sepa_debit">
                            <label for="payment-sepa_debit">SEPA Direct Debit</label>
                        </li>
                        <li>
                            <input type="radio" name="payment" id="payment-sofort" value="sofort">
                            <label for="payment-sofort">SOFORT</label>
                        </li>
                        <li>
                            <input type="radio" name="payment" id="payment-wechat" value="wechat">
                            <label for="payment-wechat">WeChat Pay</label>
                        </li>
                        <li>
                            <input type="radio" name="payment" id="payment-au_becs_debit" value="au_becs_debit">
                            <label for="payment-au_becs_debit">BECS Direct Debit</label>
                        </li>
                    </ul>
                </nav>
                <div class="payment-info card visible">
                    <fieldset>
                        <label>
                            <span>Card</span>
                            <div id="card-element" class="field"></div>
                        </label>
                    </fieldset>
                </div>
                <div class="payment-info sepa_debit">
                    <fieldset>
                        <label>
                            <span>IBAN</span>
                            <div id="iban-element" class="field"></div>
                        </label>
                    </fieldset>
                    <p class="notice">By providing your IBAN and confirming this payment, you’re authorizing Payments Demo and Stripe, our payment
                        provider, to send instructions to your bank to debit your account. You’re entitled to a refund under the terms
                        and conditions of your agreement with your bank.</p>
                </div>
                <div class="payment-info ideal">
                    <fieldset>
                        <label>
                            <span>iDEAL Bank</span>
                            <div id="ideal-bank-element" class="field"></div>
                        </label>
                    </fieldset>
                </div>
                <div class="payment-info redirect">
                    <p class="notice">You’ll be redirected to the banking site to complete your payment.</p>
                </div>
                <div class="payment-info receiver">
                    <p class="notice">Payment information will be provided after you place the order.</p>
                </div>
                <div class="payment-info wechat">
                    <div id="wechat-qrcode"></div>
                    <p class="notice">Click the button below to generate a QR code for WeChat.</p>
                </div>
                <div class="payment-info au_becs_debit">
                    <fieldset>
                        <label>
                            <span>Bank Account</span>
                            <div id="becs-bank-element" class="field"></div>
                        </label>
                    </fieldset>
                    <p class="notice">By providing your bank account details and confirming this payment, you agree to this Direct Debit Request and
                        the Direct Debit Request service agreement, and authorise Stripe Payments Australia Pty Ltd ACN 160 180 343 Direct Debit User ID
                        number 507156 (“Stripe”) to debit your account through the Bulk Electronic Clearing System (BECS) on behalf of Stripe Payments Demo
                        (the “Merchant”) for any amounts separately communicated to you by the Merchant. You certify that you are either an account
                        holder or an authorised signatory on the account listed above.</p>
                </div>
            </section>
            <button class="payment-button" type="submit">Pay</button>
        </form>
        <div id="card-errors" class="element-errors"></div>
        <div id="iban-errors" class="element-errors"></div>
        <div id="becs-errors" class="element-errors"></div>
    </div>
    <div id="confirmation">
        <div class="status processing">
            <h1>Completing your order…</h1>
            <p>We’re just waiting for the confirmation from your bank… This might take a moment but feel free to close this page.</p>
            <p>We’ll send your receipt via email shortly.</p>
        </div>
        <div class="status success">
            <h1>Thanks for your order!</h1>
            <p>Woot! You successfully made a payment with Stripe.</p>
            <p class="note">We just sent your receipt to your email address, and your items will be on their way shortly.</p>
        </div>
        <div class="status receiver">
            <h1>Thanks! One last step!</h1>
            <p>Please make a payment using the details below to complete your order.</p>
            <div class="info"></div>
        </div>
        <div class="status error">
            <h1>Oops, payment failed.</h1>
            <p>It looks like your order could not be paid at this time. Please try again or select a different payment option.</p>
            <p class="error-message"></p>
        </div>
    </div>
</main>
<aside id="summary">
    <div class="header">
        <h1>Order Summary</h1>
    </div>
    <div id="order-items"></div>
    <div id="order-total">
        <div class="line-item subtotal">
            <p class="label">Subtotal</p>
            <p class="price" data-subtotal></p>
        </div>
        <div class="line-item shipping">
            <p class="label">Shipping</p>
            <p class="price">Free</p>
        </div>
        <div class="line-item demo">
            <div id="demo">
                <p class="label">Demo in test mode</p>
                <p class="note">You can copy and paste the following test cards to trigger different scenarios:</p>
                <table class="note">
                    <tr>
                        <td>Default US card:</td>
                        <td class="card-number">4242<span></span>4242<span></span>4242<span></span>4242</td>
                    </tr>
                    <tr>
                        <td><a href="https://stripe.com/guides/strong-customer-authentication" target="_blank">Authentication</a> required:</td>
                        <td class="card-number">4000<span></span>0027<span></span>6000<span></span>3184</td>
                    </tr>
                </table>
                <p class="note">
                    See the <a href="https://stripe.com/docs/testing#cards" target="_blank">docs</a> for a full list of test cards.
                    Non-card payments will redirect to test pages.
                </p>
            </div>
        </div>
        <div class="line-item total">
            <p class="label">Total</p>
            <p class="price" data-total></p>
        </div>
    </div>
</aside>
<!-- Stripe.js v3 for Elements -->
<script>
    /**
     * payments.js
     * Stripe Payments Demo. Created by Romain Huet (@romainhuet)
     * and Thorsten Schaeff (@thorwebdev).
     *
     * This modern JavaScript file handles the checkout process using Stripe.
     *
     * 1. It shows how to accept card payments with the `card` Element, and
     * the `paymentRequestButton` Element for Payment Request and Apple Pay.
     * 2. It shows how to use the Stripe Sources API to accept non-card payments,
     * such as iDEAL, SOFORT, SEPA Direct Debit, and more.
     */

    (async () => {
        'use strict';

        // Retrieve the configuration for the store.
        const config = await store.getConfig();
        let activeCurrency = config.currency;

        // Create references to the main form and its submit button.
        const form = document.getElementById('payment-form');
        const submitButton = form.querySelector('button[type=submit]');

        // Global variable to store the submit button text.
        let submitButtonPayText = 'Pay';

        const updateSubmitButtonPayText = (newText) => {
            submitButton.textContent = newText;
            submitButtonPayText = newText;
        };
        // Global variable to store the PaymentIntent object.
        let paymentIntent;

        /**
         * Setup Stripe Elements.
         */

            // Create a Stripe client.
        const stripe = Stripe(config.stripePublishableKey);

        // Create an instance of Elements.
        const elements = stripe.elements();

        // Prepare the styles for Elements.
        const style = {
            base: {
                iconColor: '#666ee8',
                color: '#31325f',
                fontWeight: 400,
                fontFamily:
                    '-apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif',
                fontSmoothing: 'antialiased',
                fontSize: '15px',
                '::placeholder': {
                    color: '#aab7c4',
                },
                ':-webkit-autofill': {
                    color: '#666ee8',
                },
            },
        };

        /**
         * Implement a Stripe Card Element that matches the look-and-feel of the app.
         *
         * This makes it easy to collect debit and credit card payments information.
         */

            // Create a Card Element and pass some custom styles to it.
        const card = elements.create('card', {style, hidePostalCode: true});

        // Mount the Card Element on the page.
        card.mount('#card-element');

        // Monitor change events on the Card Element to display any errors.
        card.on('change', ({error}) => {
            const cardErrors = document.getElementById('card-errors');
            if (error) {
                cardErrors.textContent = error.message;
                cardErrors.classList.add('visible');
            } else {
                cardErrors.classList.remove('visible');
            }
            // Re-enable the Pay button.
            submitButton.disabled = false;
        });

        /**
         * Implement a Stripe IBAN Element that matches the look-and-feel of the app.
         *
         * This makes it easy to collect bank account information.
         */

            // Create a IBAN Element and pass the right options for styles and supported countries.
        const ibanOptions = {
                style,
                supportedCountries: ['SEPA'],
            };
        const iban = elements.create('iban', ibanOptions);

        // Mount the IBAN Element on the page.
        iban.mount('#iban-element');

        // Monitor change events on the IBAN Element to display any errors.
        iban.on('change', ({error, bankName}) => {
            const ibanErrors = document.getElementById('iban-errors');
            if (error) {
                ibanErrors.textContent = error.message;
                ibanErrors.classList.add('visible');
            } else {
                ibanErrors.classList.remove('visible');
                if (bankName) {
                    updateButtonLabel('sepa_debit', bankName);
                }
            }
            // Re-enable the Pay button.
            submitButton.disabled = false;
        });

        /**
         * Add an iDEAL Bank selection Element that matches the look-and-feel of the app.
         *
         * This allows you to send the customer directly to their iDEAL enabled bank.
         */

            // Create a iDEAL Bank Element and pass the style options, along with an extra `padding` property.
        const idealBank = elements.create('idealBank', {
                style: {base: Object.assign({padding: '10px 15px'}, style.base)},
            });

        // Mount the iDEAL Bank Element on the page.
        idealBank.mount('#ideal-bank-element');

        /**
         * Add a BECS element that matches the look-and-feel of the app.
         *
         * This allows you to collect australian bank account details
         */

        const becsBank = elements.create('auBankAccount', {style});

        // Mount the BECS element on the page.
        becsBank.mount('#becs-bank-element');

        // Monitor change events on the BECS Element to display any errors.
        becsBank.on('change', ({error, bankName}) => {
            const becsBankErrors = document.getElementById('becs-errors');
            if (error) {
                becsBankErrors.textContent = error.message;
                becsBankErrors.classList.add('visible');
            } else {
                becsBankErrors.classList.remove('visible');
                if (bankName) {
                    updateButtonLabel('au_becs_debit', bankName);
                }
            }
            // Re-enable the Pay button.
            submitButton.disabled = false;
        });

        /**
         * Implement a Stripe Payment Request Button Element.
         *
         * This automatically supports the Payment Request API (already live on Chrome),
         * as well as Apple Pay on the Web on Safari, Google Pay, and Microsoft Pay.
         * When of these two options is available, this element adds a “Pay” button on top
         * of the page to let users pay in just a click (or a tap on mobile).
         */

        // Make sure all data is loaded from the store to compute the payment amount.
        await store.loadProducts();

        // Create the payment request.
        const paymentRequest = stripe.paymentRequest({
            country: config.stripeCountry,
            currency: config.currency,
            total: {
                label: 'Total',
                amount: store.getPaymentTotal(),
            },
            requestShipping: true,
            requestPayerEmail: true,
            shippingOptions: config.shippingOptions,
        });

        // Callback when a payment method is created.
        paymentRequest.on('paymentmethod', async (event) => {
            // Confirm the PaymentIntent with the payment method returned from the payment request.
            const {error} = await stripe.confirmCardPayment(
                paymentIntent.client_secret,
                {
                    payment_method: event.paymentMethod.id,
                    shipping: {
                        name: event.shippingAddress.recipient,
                        phone: event.shippingAddress.phone,
                        address: {
                            line1: event.shippingAddress.addressLine[0],
                            city: event.shippingAddress.city,
                            postal_code: event.shippingAddress.postalCode,
                            state: event.shippingAddress.region,
                            country: event.shippingAddress.country,
                        },
                    },
                },
                {handleActions: false}
            );
            if (error) {
                // Report to the browser that the payment failed.
                event.complete('fail');
                handlePayment({error});
            } else {
                // Report to the browser that the confirmation was successful, prompting
                // it to close the browser payment method collection interface.
                event.complete('success');
                // Let Stripe.js handle the rest of the payment flow, including 3D Secure if needed.
                const response = await stripe.confirmCardPayment(
                    paymentIntent.client_secret
                );
                handlePayment(response);
            }
        });

        // Callback when the shipping address is updated.
        paymentRequest.on('shippingaddresschange', (event) => {
            event.updateWith({status: 'success'});
        });

        // Callback when the shipping option is changed.
        paymentRequest.on('shippingoptionchange', async (event) => {
            // Update the PaymentIntent to reflect the shipping cost.
            const response = await store.updatePaymentIntentWithShippingCost(
                paymentIntent.id,
                store.getLineItems(),
                event.shippingOption
            );
            event.updateWith({
                total: {
                    label: 'Total',
                    amount: response.paymentIntent.amount,
                },
                status: 'success',
            });
            const amount = store.formatPrice(
                response.paymentIntent.amount,
                activeCurrency
            );
            updateSubmitButtonPayText(`Pay ${amount}`);
        });

        // Create the Payment Request Button.
        const paymentRequestButton = elements.create('paymentRequestButton', {
            paymentRequest,
        });

        // Check if the Payment Request is available (or Apple Pay on the Web).
        const paymentRequestSupport = await paymentRequest.canMakePayment();
        if (paymentRequestSupport) {
            // Display the Pay button by mounting the Element in the DOM.
            paymentRequestButton.mount('#payment-request-button');
            // Replace the instruction.
            document.querySelector('.instruction span').innerText = 'Or enter';
            // Show the payment request section.
            document.getElementById('payment-request').classList.add('visible');
        }

        /**
         * Handle the form submission.
         *
         * This uses Stripe.js to confirm the PaymentIntent using payment details collected
         * with Elements.
         *
         * Please note this form is not submitted when the user chooses the "Pay" button
         * or Apple Pay, Google Pay, and Microsoft Pay since they provide name and
         * shipping information directly.
         */

        // Listen to changes to the user-selected country.
        form
            .querySelector('select[name=country]')
            .addEventListener('change', (event) => {
                event.preventDefault();
                selectCountry(event.target.value);
            });

        // Submit handler for our payment form.
        form.addEventListener('submit', async (event) => {
            event.preventDefault();

            // Retrieve the user information from the form.
            const payment = form.querySelector('input[name=payment]:checked').value;
            const name = form.querySelector('input[name=name]').value;
            const country = form.querySelector('select[name=country] option:checked')
                .value;
            const email = form.querySelector('input[name=email]').value;
            const billingAddress = {
                line1: form.querySelector('input[name=address]').value,
                postal_code: form.querySelector('input[name=postal_code]').value,
            };
            const shipping = {
                name,
                address: {
                    line1: form.querySelector('input[name=address]').value,
                    city: form.querySelector('input[name=city]').value,
                    postal_code: form.querySelector('input[name=postal_code]').value,
                    state: form.querySelector('input[name=state]').value,
                    country,
                },
            };
            // Disable the Pay button to prevent multiple click events.
            submitButton.disabled = true;
            submitButton.textContent = 'Processing…';

            // Update Payment Intent if currency is different to default
            if (config.currency !== activeCurrency) {
                const response = await store.updatePaymentIntentCurrency(
                    paymentIntent.id,
                    activeCurrency,
                    [payment]
                );

                if (response.error) {
                    handleError(response);
                    return;
                }
            }

            if (payment === 'card') {
                // Let Stripe.js handle the confirmation of the PaymentIntent with the card Element.
                const response = await stripe.confirmCardPayment(
                    paymentIntent.client_secret,
                    {
                        payment_method: {
                            card,
                            billing_details: {
                                name,
                                address: billingAddress,
                            },
                        },
                        shipping,
                    }
                );
                handlePayment(response);
            } else if (payment === 'sepa_debit') {
                // Confirm the PaymentIntent with the IBAN Element.
                const response = await stripe.confirmSepaDebitPayment(
                    paymentIntent.client_secret,
                    {
                        payment_method: {
                            sepa_debit: iban,
                            billing_details: {
                                name,
                                email,
                            },
                        },
                    }
                );
                handlePayment(response);
            } else if (payment === 'p24') {
                const response = await stripe.confirmP24Payment(
                    paymentIntent.client_secret,
                    {
                        payment_method: {
                            billing_details: {
                                name,
                                email,
                            },
                        },
                        return_url: window.location.href,
                    }
                );
                handlePayment(response);
            } else if (payment === 'ideal') {
                // Confirm the PaymentIntent with the iDEAL Element.
                const response = await stripe.confirmIdealPayment(
                    paymentIntent.client_secret,
                    {
                        payment_method: {
                            ideal: idealBank,
                            billing_details: {
                                name,
                                email,
                            },
                        },
                        return_url: window.location.href,
                    }
                );
                handlePayment(response);
            } else if (payment === 'bancontact') {
                const response = await stripe.confirmBancontactPayment(
                    paymentIntent.client_secret,
                    {
                        payment_method: {
                            billing_details: {
                                name,
                            },
                        },
                        return_url: window.location.href,
                    }
                );
                handlePayment(response);
            } else if (payment === 'eps') {
                const response = await stripe.confirmEpsPayment(
                    paymentIntent.client_secret,
                    {
                        payment_method: {
                            billing_details: {
                                name,
                            },
                        },
                        return_url: window.location.href,
                    }
                );
                handlePayment(response);
            } else if (payment === 'giropay') {
                const response = await stripe.confirmGiropayPayment(
                    paymentIntent.client_secret,
                    {
                        payment_method: {
                            billing_details: {
                                name,
                            },
                        },
                        return_url: window.location.href,
                    }
                );
                handlePayment(response);
            } else if (payment === 'alipay') {
                const response = await stripe.confirmAlipayPayment(
                    paymentIntent.client_secret,
                    {
                        payment_method: {
                            billing_details: {
                                name,
                            },
                        },
                        return_url: window.location.href,
                    }
                );
                handlePayment(response);
            } else if (payment == 'au_becs_debit') {
                const response = await stripe.confirmAuBecsDebitPayment(
                    paymentIntent.client_secret,
                    {
                        payment_method: {
                            au_becs_debit: becsBank,
                            billing_details: {
                                name,
                                email,
                            },
                        },
                    }
                );
                handlePayment(response);
            } else {
                // Prepare all the Stripe source common data.
                const sourceData = {
                    type: payment,
                    amount: paymentIntent.amount,
                    currency: paymentIntent.currency,
                    owner: {
                        name,
                        email,
                    },
                    redirect: {
                        return_url: `${window.location.href}?payment_intent=${paymentIntent.id}`,
                    },
                    statement_descriptor: 'Stripe Payments Demo',
                    metadata: {
                        paymentIntent: paymentIntent.id,
                    },
                };

                // Add extra source information which are specific to a payment method.
                switch (payment) {
                    case 'sofort':
                        // SOFORT: The country is required before redirecting to the bank.
                        sourceData.sofort = {
                            country,
                        };
                        break;
                    case 'ach_credit_transfer':
                        // ACH Bank Transfer: Only supports USD payments, edit the default config to try it.
                        // In test mode, we can set the funds to be received via the owner email.
                        sourceData.owner.email = `amount_${paymentIntent.amount}@example.com`;
                        break;
                }

                // Create a Stripe source with the common data and extra information.
                const {source} = await stripe.createSource(sourceData);
                handleSourceActivation(source);
            }

        });

        // Handle new PaymentIntent result
        const handlePayment = (paymentResponse) => {
            const {paymentIntent, error} = paymentResponse;

            const mainElement = document.getElementById('main');
            const confirmationElement = document.getElementById('confirmation');

            if (error && error.type === 'validation_error') {
                mainElement.classList.remove('processing');
                mainElement.classList.remove('receiver');
                submitButton.disabled = false;
                submitButton.textContent = submitButtonPayText;
            } else if (error) {
                mainElement.classList.remove('processing');
                mainElement.classList.remove('receiver');
                confirmationElement.querySelector('.error-message').innerText =
                    error.message;
                mainElement.classList.add('error');
            } else if (paymentIntent.status === 'succeeded') {
                // Success! Payment is confirmed. Update the interface to display the confirmation screen.
                mainElement.classList.remove('processing');
                mainElement.classList.remove('receiver');
                // Update the note about receipt and shipping (the payment has been fully confirmed by the bank).
                confirmationElement.querySelector('.note').innerText =
                    'We just sent your receipt to your email address, and your items will be on their way shortly.';
                mainElement.classList.add('success');
            } else if (paymentIntent.status === 'processing') {
                // Success! Now waiting for payment confirmation. Update the interface to display the confirmation screen.
                mainElement.classList.remove('processing');
                // Update the note about receipt and shipping (the payment is not yet confirmed by the bank).
                confirmationElement.querySelector('.note').innerText =
                    'We’ll send your receipt and ship your items as soon as your payment is confirmed.';
                mainElement.classList.add('success');
            } else if (paymentIntent.status === 'requires_payment_method') {
                // Failure. Requires new PaymentMethod, show last payment error message.
                mainElement.classList.remove('processing');
                confirmationElement.querySelector('.error-message').innerText =
                    paymentIntent.last_payment_error || 'Payment failed';
                mainElement.classList.add('error');
            } else {
                // Payment has failed.
                mainElement.classList.remove('success');
                mainElement.classList.remove('processing');
                mainElement.classList.remove('receiver');
                mainElement.classList.add('error');
            }
        };

        const handleError = (updateResponse) => {
            // handle any error
            const {paymentIntent, error} = updateResponse;

            const mainElement = document.getElementById('main');
            const confirmationElement = document.getElementById('confirmation');

            if (error && error.type === 'validation_error') {
                mainElement.classList.remove('processing');
                mainElement.classList.remove('receiver');
                submitButton.disabled = false;
                submitButton.textContent = submitButtonPayText;
            } else if (error) {
                mainElement.classList.remove('processing');
                mainElement.classList.remove('receiver');
                confirmationElement.querySelector('.error-message').innerText =
                    error.message;
                mainElement.classList.add('error');
            }
        };

        // Handle activation of payment sources not yet supported by PaymentIntents
        const handleSourceActivation = (source) => {
            const mainElement = document.getElementById('main');
            const confirmationElement = document.getElementById('confirmation');
            switch (source.flow) {
                case 'none':
                    // Normally, sources with a `flow` value of `none` are chargeable right away,
                    // but there are exceptions, for instance for WeChat QR codes just below.
                    if (source.type === 'wechat') {
                        // Display the QR code.
                        const qrCode = new QRCode('wechat-qrcode', {
                            text: source.wechat.qr_code_url,
                            width: 128,
                            height: 128,
                            colorDark: '#424770',
                            colorLight: '#f8fbfd',
                            correctLevel: QRCode.CorrectLevel.H,
                        });
                        // Hide the previous text and update the call to action.
                        form.querySelector('.payment-info.wechat p').style.display = 'none';
                        let amount = store.formatPrice(
                            store.getPaymentTotal(),
                            activeCurrency
                        );
                        updateSubmitButtonPayText(
                            `Scan this QR code on WeChat to pay ${amount}`
                        );
                        // Start polling the PaymentIntent status.
                        pollPaymentIntentStatus(paymentIntent.id, 300000);
                    } else {
                        console.log('Unhandled none flow.', source);
                    }
                    break;
                case 'redirect':
                    // Immediately redirect the customer.
                    submitButton.textContent = 'Redirecting…';
                    window.location.replace(source.redirect.url);
                    break;
                case 'code_verification':
                    // Display a code verification input to verify the source.
                    break;
                case 'receiver':
                    // Display the receiver address to send the funds to.
                    mainElement.classList.add('success', 'receiver');
                    const receiverInfo = confirmationElement.querySelector(
                        '.receiver .info'
                    );
                    let amount = store.formatPrice(source.amount, activeCurrency);
                    switch (source.type) {
                        case 'ach_credit_transfer':
                            // Display the ACH Bank Transfer information to the user.
                            const ach = source.ach_credit_transfer;
                            receiverInfo.innerHTML = `
              <ul>
                <li>
                  Amount:
                  <strong>${amount}</strong>
                </li>
                <li>
                  Bank Name:
                  <strong>${ach.bank_name}</strong>
                </li>
                <li>
                  Account Number:
                  <strong>${ach.account_number}</strong>
                </li>
                <li>
                  Routing Number:
                  <strong>${ach.routing_number}</strong>
                </li>
              </ul>`;
                            break;
                        case 'multibanco':
                            // Display the Multibanco payment information to the user.
                            const multibanco = source.multibanco;
                            receiverInfo.innerHTML = `
              <ul>
                <li>
                  Amount (Montante):
                  <strong>${amount}</strong>
                </li>
                <li>
                  Entity (Entidade):
                  <strong>${multibanco.entity}</strong>
                </li>
                <li>
                  Reference (Referencia):
                  <strong>${multibanco.reference}</strong>
                </li>
              </ul>`;
                            break;
                        default:
                            console.log('Unhandled receiver flow.', source);
                    }
                    // Poll the PaymentIntent status.
                    pollPaymentIntentStatus(paymentIntent.id);
                    break;
                default:
                    // Customer's PaymentIntent is received, pending payment confirmation.
                    break;
            }
        };

        /**
         * Check if the PaymentIntent is in a "terminal" status
         * and therefore if we should show an error in the UI
         */
        const paymentIntentTerminalState = ({status, last_payment_error}) => {
            const endStates = ['succeeded', 'processing', 'canceled'];
            const hasError = typeof last_payment_error !== 'undefined';

            return (
                endStates.includes(status) ||
                (status === 'requires_payment_method' && hasError)
            );
        };

        /**
         * Monitor the status of a source after a redirect flow.
         *
         * This means there is a `source` parameter in the URL, and an active PaymentIntent.
         * When this happens, we'll monitor the status of the PaymentIntent and present real-time
         * information to the user.
         */

        const pollPaymentIntentStatus = async (
            paymentIntent,
            timeout = 30000,
            interval = 500,
            start = null
        ) => {
            start = start ? start : Date.now();
            const endStates = [
                'succeeded',
                'processing',
                'canceled',
                'requires_payment_method',
            ];
            // Retrieve the PaymentIntent status from our server.
            const rawResponse = await fetch(`payment_intents/${paymentIntent}/status`);
            const response = await rawResponse.json();
            const isTerminalState = paymentIntentTerminalState(response.paymentIntent);

            if (!isTerminalState && Date.now() < start + timeout) {
                // Not done yet. Let's wait and check again.
                setTimeout(
                    pollPaymentIntentStatus,
                    interval,
                    paymentIntent,
                    timeout,
                    interval,
                    start
                );
            } else {
                handlePayment(response);
                if (!isTerminalState) {
                    // Status has not changed yet. Let's time out.
                    console.warn(new Error('Polling timed out.'));
                }
            }
        };

        const url = new URL(window.location.href);
        const mainElement = document.getElementById('main');

        if (url.searchParams.get('payment_intent')) {
            if (
                url.searchParams.get('source') &&
                url.searchParams.get('client_secret')
            ) {
                mainElement.classList.add('checkout', 'success', 'processing');
            }
            // Poll the PaymentIntent status.
            pollPaymentIntentStatus(url.searchParams.get('payment_intent'));
        } else {
            // Update the interface to display the checkout form.
            mainElement.classList.add('checkout');

            // Create the PaymentIntent with the cart details.
            const response = await store.createPaymentIntent(
                config.currency,
                store.getLineItems()
            );
            paymentIntent = response.paymentIntent;
        }
        document.getElementById('main').classList.remove('loading');

        /**
         * Display the relevant payment methods for a selected country.
         */

            // List of relevant countries for the payment methods supported in this demo.
            // Read the Stripe guide: https://stripe.com/payments/payment-methods-guide
        const paymentMethods = {
                ach_credit_transfer: {
                    name: 'Bank Transfer',
                    flow: 'receiver',
                    countries: ['US'],
                    currencies: ['usd'],
                },
                alipay: {
                    name: 'Alipay',
                    flow: 'redirect',
                    countries: ['CN', 'HK', 'SG', 'JP'],
                    currencies: [
                        'aud',
                        'cad',
                        'eur',
                        'gbp',
                        'hkd',
                        'jpy',
                        'nzd',
                        'sgd',
                        'usd',
                    ],
                },
                bancontact: {
                    name: 'Bancontact',
                    flow: 'redirect',
                    countries: ['BE'],
                    currencies: ['eur'],
                },
                card: {
                    name: 'Card',
                    flow: 'none',
                },
                eps: {
                    name: 'EPS',
                    flow: 'redirect',
                    countries: ['AT'],
                    currencies: ['eur'],
                },
                ideal: {
                    name: 'iDEAL',
                    flow: 'redirect',
                    countries: ['NL'],
                    currencies: ['eur'],
                },
                giropay: {
                    name: 'Giropay',
                    flow: 'redirect',
                    countries: ['DE'],
                    currencies: ['eur'],
                },
                multibanco: {
                    name: 'Multibanco',
                    flow: 'receiver',
                    countries: ['PT'],
                    currencies: ['eur'],
                },
                p24: {
                    name: 'Przelewy24',
                    flow: 'redirect',
                    countries: ['PL'],
                    currencies: ['eur', 'pln'],
                },
                sepa_debit: {
                    name: 'SEPA Direct Debit',
                    flow: 'none',
                    countries: [
                        'FR',
                        'DE',
                        'ES',
                        'BE',
                        'NL',
                        'LU',
                        'IT',
                        'PT',
                        'AT',
                        'IE',
                        'FI',
                    ],
                    currencies: ['eur'],
                },
                sofort: {
                    name: 'SOFORT',
                    flow: 'redirect',
                    countries: ['DE', 'AT'],
                    currencies: ['eur'],
                },
                wechat: {
                    name: 'WeChat',
                    flow: 'none',
                    countries: ['CN', 'HK', 'SG', 'JP'],
                    currencies: [
                        'aud',
                        'cad',
                        'eur',
                        'gbp',
                        'hkd',
                        'jpy',
                        'nzd',
                        'sgd',
                        'usd',
                    ],
                },
                au_becs_debit: {
                    name: 'BECS Direct Debit',
                    flow: 'none',
                    countries: ['AU'],
                    currencies: ['aud'],
                },
            };

        // Update the main button to reflect the payment method being selected.
        const updateButtonLabel = (paymentMethod, bankName) => {
            let amount = store.formatPrice(store.getPaymentTotal(), activeCurrency);
            let name = paymentMethods[paymentMethod].name;
            let label = `Pay ${amount}`;
            if (paymentMethod !== 'card') {
                label = `Pay ${amount} with ${name}`;
            }
            if (paymentMethod === 'wechat') {
                label = `Generate QR code to pay ${amount} with ${name}`;
            }
            if (['sepa_debit', 'au_becs_debit'].includes(paymentMethod) && bankName) {
                label = `Debit ${amount} from ${bankName}`;
            }

            updateSubmitButtonPayText(label);
        };

        const selectCountry = (country) => {
            const selector = document.getElementById('country');
            selector.querySelector(`option[value=${country}]`).selected = 'selected';
            selector.className = `field ${country.toLowerCase()}`;

            //update currency if there's a currency for that country
            if (country === 'AU') {
                activeCurrency = 'aud';
            } else {
                activeCurrency = config.currency;
            }

            // Trigger the methods to show relevant fields and payment methods on page load.
            showRelevantFormFields();
            showRelevantPaymentMethods();
        };

        // Show only form fields that are relevant to the selected country.
        const showRelevantFormFields = (country) => {
            if (!country) {
                country = form.querySelector('select[name=country] option:checked').value;
            }
            const zipLabel = form.querySelector('label.zip');
            // Only show the state input for the United States.
            zipLabel.parentElement.classList.toggle(
                'with-state',
                ['AU', 'US'].includes(country)
            );
            // Update the ZIP label to make it more relevant for each country.
            const zipInput = form.querySelector('label.zip input');
            const zipSpan = form.querySelector('label.zip span');
            switch (country) {
                case 'US':
                    zipSpan.innerText = 'ZIP';
                    zipInput.placeholder = '94103';
                    break;
                case 'GB':
                    zipSpan.innerText = 'Postcode';
                    zipInput.placeholder = 'EC1V 9NR';
                    break;
                case 'AU':
                    zipSpan.innerText = 'Postcode';
                    zipInput.placeholder = '3000';
                    break;
                default:
                    zipSpan.innerText = 'Postal Code';
                    zipInput.placeholder = '94103';
                    break;
            }

            // Update the 'City' to appropriate name
            const cityInput = form.querySelector('label.city input');
            const citySpan = form.querySelector('label.city span');
            switch (country) {
                case 'AU':
                    citySpan.innerText = 'City / Suburb';
                    cityInput.placeholder = 'Melbourne';
                    break;
                default:
                    citySpan.innerText = 'City';
                    cityInput.placeholder = 'San Francisco';
                    break;
            }
        };

        // Show only the payment methods that are relevant to the selected country.
        const showRelevantPaymentMethods = (country) => {
            if (!country) {
                country = form.querySelector('select[name=country] option:checked').value;
            }

            const paymentInputs = form.querySelectorAll('input[name=payment]');
            for (let i = 0; i < paymentInputs.length; i++) {
                let input = paymentInputs[i];
                input.parentElement.classList.toggle(
                    'visible',
                    input.value === 'card' ||
                    (config.paymentMethods.includes(input.value) &&
                        paymentMethods[input.value].countries.includes(country) &&
                        paymentMethods[input.value].currencies.includes(activeCurrency))
                );
            }

            // Hide the tabs if card is the only available option.
            const paymentMethodsTabs = document.getElementById('payment-methods');
            paymentMethodsTabs.classList.toggle(
                'visible',
                paymentMethodsTabs.querySelectorAll('li.visible').length > 1
            );

            // Check the first payment option again.
            paymentInputs[0].checked = 'checked';
            form.querySelector('.payment-info.card').classList.add('visible');
            form.querySelector('.payment-info.ideal').classList.remove('visible');
            form.querySelector('.payment-info.sepa_debit').classList.remove('visible');
            form.querySelector('.payment-info.wechat').classList.remove('visible');
            form.querySelector('.payment-info.redirect').classList.remove('visible');
            form
                .querySelector('.payment-info.au_becs_debit')
                .classList.remove('visible');
            updateButtonLabel(paymentInputs[0].value);
        };

        // Listen to changes to the payment method selector.
        for (let input of document.querySelectorAll('input[name=payment]')) {
            input.addEventListener('change', (event) => {
                event.preventDefault();
                const payment = form.querySelector('input[name=payment]:checked').value;
                const flow = paymentMethods[payment].flow;

                // Update button label.
                updateButtonLabel(event.target.value);

                // Show the relevant details, whether it's an extra element or extra information for the user.
                form
                    .querySelector('.payment-info.card')
                    .classList.toggle('visible', payment === 'card');
                form
                    .querySelector('.payment-info.ideal')
                    .classList.toggle('visible', payment === 'ideal');
                form
                    .querySelector('.payment-info.sepa_debit')
                    .classList.toggle('visible', payment === 'sepa_debit');
                form
                    .querySelector('.payment-info.wechat')
                    .classList.toggle('visible', payment === 'wechat');
                form
                    .querySelector('.payment-info.au_becs_debit')
                    .classList.toggle('visible', payment === 'au_becs_debit');
                form
                    .querySelector('.payment-info.redirect')
                    .classList.toggle('visible', flow === 'redirect');
                form
                    .querySelector('.payment-info.receiver')
                    .classList.toggle('visible', flow === 'receiver');
                document
                    .getElementById('card-errors')
                    .classList.remove('visible', payment !== 'card');
            });
        }

        // Select the default country from the config on page load.
        let country = config.country;
        // Override it if a valid country is passed as a URL parameter.
        const urlParams = new URLSearchParams(window.location.search);
        let countryParam = urlParams.get('country')
            ? urlParams.get('country').toUpperCase()
            : config.country;
        if (form.querySelector(`option[value="${countryParam}"]`)) {
            country = countryParam;
        }
        selectCountry(country);
    })();
</script>
<script src="https://js.stripe.com/v3/"></script>
<!-- Library to render QR codes -->
<script src="https://cdn.rawgit.com/davidshimjs/qrcodejs/gh-pages/qrcode.min.js" integrity="sha384-3zSEDfvllQohrq0PHL1fOXJuC/jSOO34H46t6UQfobFOmxE5BpjjaIJY5F2/bMnU" crossorigin="anonymous"></script>
<!-- Library for generating fake user information -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Faker/3.1.0/faker.min.js" integrity="sha384-PlFzuf6GOlJNxLuosezJ/jwndIVZ2hWI/AmvYQtBzstOdLtcUe6DPSI4LsqwiN1y" crossorigin="anonymous"></script>
<!-- App -->
<script src="/javascripts/generate.js"></script>
<script src="/javascripts/store.js"></script>
<script src="/javascripts/payments.js"></script>
</body>

</html>
--}}
