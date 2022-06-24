<?php
$SiNi_page_id = "Login";
$SiNi_admin_id = "Shopping";
?>
@include ('includes.top')
<title>SiNi Software | User Buy Software</title>

<script src="https://js.braintreegateway.com/web/dropin/1.33.2/js/dropin.min.js"></script>
{{--<script src="https://www.paypalobjects.com/api/checkout.js" data-version-4></script>--}}
<script src="https://js.braintreegateway.com/web/3.60.0/js/client.min.js"></script>
{{--<script src="https://js.braintreegateway.com/web/3.60.0/js/paypal-checkout.min.js"></script>--}}
{{--<script src="https://js.braintreegateway.com/web/3.60.0/js/hosted-fields.min.js"></script>--}}
{{--<script src="https://js.braintreegateway.com/web/3.60.0/js/data-collector.min.js"></script>--}}


<style>

    .braintree-sheet__header {
        display: none;
    }

    .braintree-sheet__content.braintree-sheet__content--form {
        display: flex;
    }
    .braintree-form-number.braintree-form__hosted-field  {
        border-radius: 2px;
        background-color: #383a44;
        color: #989898;
        border: 1px solid #707282;
        height: calc(1.8125rem + 8px);
        padding: 0.25rem 0.5rem;
        font-size: .875rem;
        line-height: 1.5;
    }

    .braintree-form__hosted-field.braintree-form-expiration {
        border-radius: 2px;
        background-color: #383a44;
        color: #989898;
        border: 1px solid #707282;
        height: calc(1.8125rem + 8px);
        padding: 0.25rem 0.5rem;
        font-size: .875rem;
        line-height: 1.5;

    }

    .braintree-card.braintree-form.braintree-sheet {
        background-color: #3a3c46;
        border: none;
    }

    .braintree-sheet__content--form .braintree-form__field-group .braintree-form__label {
        color: #949ba2;
        display: block;
        font-size: 14px;
        font-weight: 400;
        line-height: 1.4;
        margin: 0;
        padding: 0;
        text-align: left;
    }

    .braintree-form-number.braintree-form__hosted-field {
        width: 100%;
        margin-left: 393px;
        /* padding: 0px; */
        float: right;
    }


    .braintree-sheet__content.braintree-sheet__content--form {
        display: flex;
        flex-direction: row;
        flex-wrap: nowrap;
        align-content: center;
        justify-content: center;
    }


</style>






<style>
    .jumbotron_dash{background: url("/images/Users_Dashboard.jpg") no-repeat center left /cover;}

    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
        /* display: none; <- Crashes Chrome on hover */
        -webkit-appearance: none;
        margin: 0; /* <-- Apparently some margin are still there even though it's hidden */

    }


    .bootstrap-basic {
        background: white;
    }

    /* Braintree Hosted Fields styling classes*/
    .braintree-hosted-fields {
        color: #495057;
        background-color: #fff;
        outline: 0;
        box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
        border-radius: 2px;
        background-color: #383a44;
        color: #989898;
        border: 1px solid #707282;
        height: calc(1.8125rem + 2px);
    }

    .braintree-hosted-fields-focused {
        outline: 0;
        height: 20px;
        height: calc(1.8125rem + 8px);
        color: #fff;
        font-size: 33px;
        background-color: #45464e;
        border: 1px solid #707282;
    }

    .braintree-hosted-fields-focused.is-invalid {
        background-color: #fff;
        border-color: red;
        box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.25);
        height: calc(1.8125rem + 8px);
    }

    #cc-expiration{
        border-radius: 2px;
        background-color: #383a44;
        color: #989898;
        border: 1px solid #707282;
        height: calc(1.8125rem + 8px);
        padding: .25rem .5rem;
        font-size: .875rem;
        line-height: 1.5;
    }

    #cc-expiration.braintree-hosted-fields-focused {
        color: #fff;
        font-size: 33px;
        background-color: #45464e;
        border: 1px solid #707282;
    }

    #cc-expiration.braintree-hosted-fields-invalid {
        border-color: #dc3545;
    }

    #cc-expiration.braintree-hosted-fields-valid {
        border-color: #28a745;
    }

    #cc-cvv{
        border-radius: 2px;
        background-color: #383a44;
        color: #989898;
        border: 1px solid #707282;
        height: calc(1.8125rem + 8px);
        padding: .25rem .5rem;
        font-size: .875rem;
        line-height: 1.5;
    }

    #cc-cvv.braintree-hosted-fields-focused {
        /*border-color: #777;*/
        color: #fff;
        font-size: 33px;
        background-color: #45464e;
        border: 1px solid #707282;
    }

    #cc-cvv.braintree-hosted-fields-invalid {
        border-color: #dc3545;
    }

    #cc-cvv.braintree-hosted-fields-valid {
        border-color: #28a745;
    }

    #postal-code{
        border-radius: 2px;
        background-color: #383a44;
        color: #989898;
        border: 1px solid #707282;
        height: calc(1.8125rem + 8px);
        padding: .25rem .5rem;
        font-size: 16px;
        line-height: 1.5;
    }

    #postal-code.braintree-hosted-fields-focused {
        /*border-color: #777;*/
        color: #fff;
        font-size: 33px;
        background-color: #45464e;
        border: 1px solid #707282;
    }

    #postal-code.braintree-hosted-fields-invalid {
        border-color: #dc3545;
        border: 1px solid #dc3545;
    }

    #postal-code.braintree-hosted-fields-valid {
        border-color: #28a745;
        border: 1px solid #28a745;
    }

    #cc-number {
        border-radius: 2px;
        background-color: #383a44;
        color: #989898;
        border: 1px solid #707282;
        height: calc(1.8125rem + 8px);
        padding: .25rem .5rem;
        font-size: .875rem;
        line-height: 1.5;
    }

    #cc-number.braintree-hosted-fields-focused {
        /*border-color: #777;*/
        color: #fff;
        font-size: 33px;
        background-color: #45464e;
        border: 1px solid #707282;
    }

    #cc-number.braintree-hosted-fields-invalid,  {
        border-color: #dc3545;
    }

    #cc-number.braintree-hosted-fields-valid {
        border-color: #28a745;
    }

    input:-internal-autofill-selected {
        background-color: #45464e !important;
        background-image: none !important;
        color: #fff !important;
    }

    .custom-select.is-invalid, .form-control.is-invalid, .was-validated .custom-select:invalid, .was-validated .form-control:invalid {
        border-color: #707282;
    }


</style>

</head>
<body>
@include ('includes.nav')

<div class="jumbotron_dash d-flex align-items-end nopadding">
    <div class="container-full">
        <div class="row" style="padding-left: 190px;">
            <div class="view-header" style="padding-left: 8px;">
                <h1-o>Buy SiNi Software</h1-o> <h2-g> &nbsp; Get your new plugins<br></h2-g>
                <h5-g>Subscribe to SiNi products by filling out the order form below.</h5-g>
            </div>
        </div>
    </div>
</div>

<div class="container-full" style="padding-top: 10px;">
    <div class="wrapper_user">
        <nav class="sidebar_user d-none d-xl-block d-lg-block">
            @include ('includes.user_nav')
        </nav>
        <div class="content_user" style="padding-left: 8px;">
            <div class="d-block d-md-block d-sm-block d-lg-none">
                @include ('includes.user_nav_small')
            </div>
            <!------ START PAGE ----->
            <div class="row">
                <div class="col-lg-12">
                    <table class="table borderless">
                        <tr>
                            <td style="border: none; padding-top: 0px;"><center><img src="/images/products/Badge_AllAccess.png" class="img-fluid" alt="AllAccess Plugin"></center></td>
                            <td style="border: none; padding-top: 0px;"><center><img src="/images/products/Badge_IgNite.png" class="img-fluid" alt="IgNite Plugin"></center></td>
                            <td style="border: none; padding-top: 0px;"><center><img src="/images/products/Badge_ProxSi.png" class="img-fluid" alt="ProxSi Plugin"></center></td>
                            <td style="border: none; padding-top: 0px;"><center><img src="/images/products/Badge_SiClone.png" class="img-fluid" alt="SiClone Plugin"></center></td>
                            <td style="border: none; padding-top: 0px;"><center><img src="/images/products/Badge_Disperse.png" class="img-fluid" alt="Disperse Plugin"></center></td>
                            <td style="border: none; padding-top: 0px;"><center><img src="/images/products/Badge_Scatter.png" class="img-fluid" alt="Scatter Plugin"></center></td>
                            <td style="border: none; padding-top: 0px;"><center><img src="/images/products/Badge_Forensic.png" class="img-fluid" alt="Forensic Plugin"></center></td>
                        </tr>
                        <tr style="padding-top: 0px; padding-bottom: 0px;">
                            <td style="border: none; padding-top: 0px;"><center><span style="color: #949ba2; font-size: 11pt;">Licences:</span> <span style="color: #ffffff; font-size: 11pt;">{{$Total_Lic_AA}}</span></center></td>
                            <td style="border: none; padding-top: 0px;"><center><span style="color: #949ba2; font-size: 11pt;">Licences:</span> <span style="color: #ffffff; font-size: 11pt;">{{$Total_Lic_IG}}</span></center></td>
                            <td style="border: none; padding-top: 0px;"><center><span style="color: #949ba2; font-size: 11pt;">Licences:</span> <span style="color: #ffffff; font-size: 11pt;">{{$Total_Lic_PR}}</span></center></td>
                            <td style="border: none; padding-top: 0px;"><center><span style="color: #949ba2; font-size: 11pt;">Licences:</span> <span style="color: #ffffff; font-size: 11pt;">{{$Total_Lic_SI}}</span></center></td>
                            <td style="border: none; padding-top: 0px;"><center><span style="color: #949ba2; font-size: 11pt;">Licences:</span> <span style="color: #ffffff; font-size: 11pt;">{{$Total_Lic_DE}}</span></center></td>
                            <td style="border: none; padding-top: 0px;"><center><span style="color: #949ba2; font-size: 11pt;">Licences:</span> <span style="color: #ffffff; font-size: 11pt;">{{$Total_Lic_SC}}</span></center></td>
                            <td style="border: none; padding-top: 0px;"><center><span style="color: #949ba2; font-size: 11pt;">Licences:</span> <span style="color: #ffffff; font-size: 11pt;">&#8734;</span></center></td>
                        </tr>
                        <tr>
                            <td style="border: none; padding-top: 0px;"><center><span style="color: #949ba2; font-size: 11pt;">Available:</span> <span style="color: #ffffff; font-size: 11pt;">{{$Free_Lic_AA}}</span></center></td>
                            <td style="border: none; padding-top: 0px;"><center><span style="color: #949ba2; font-size: 11pt;">Available:</span> <span style="color: #ffffff; font-size: 11pt;">{{$Free_Lic_IG}}</span></center></td>
                            <td style="border: none; padding-top: 0px;"><center><span style="color: #949ba2; font-size: 11pt;">Available:</span> <span style="color: #ffffff; font-size: 11pt;">{{$Free_Lic_PR}}</span></center></td>
                            <td style="border: none; padding-top: 0px;"><center><span style="color: #949ba2; font-size: 11pt;">Available:</span> <span style="color: #ffffff; font-size: 11pt;">{{$Free_Lic_SI}}</span></center></td>
                            <td style="border: none; padding-top: 0px;"><center><span style="color: #949ba2; font-size: 11pt;">Available:</span> <span style="color: #ffffff; font-size: 11pt;">{{$Free_Lic_DE}}</span></center></td>
                            <td style="border: none; padding-top: 0px;"><center><span style="color: #949ba2; font-size: 11pt;">Available:</span> <span style="color: #ffffff; font-size: 11pt;">{{$Free_Lic_SC}}</span></center></td>
                            <td style="border: none; padding-top: 0px;"><center><span style="color: #949ba2; font-size: 11pt;">Available:</span> <span style="color: #ffffff; font-size: 11pt;">&#8734;</span></center></td>
                        </tr>
                    </table>
                </div>
                <div class="col-lg-12">
                    <h4><center>Bulk discounts will be applied automatically based on quantity of licences. 5% 5-10, 10% 11-15+. &nbsp; &nbsp; &nbsp; &nbsp;For enterprise licensing, please contact SiNi Sales, sales@sinisoftware.com</center></h4>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    @if (session()->has('success_message'))
                        <div class="alert alert-success">
                            {{ session()->get('success_message') }}
                        </div>
                    @endif

                    @if(count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul>
                                <li>Sorry, there was a problem with your payment.  Please view payment form below.</li>
                            </ul>
                        </div>
                    @endif
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12 col-md-12 col-xs-12">
                    <div class="card animated fadeIn wow" data-wow-delay=".1s">
                        <h4 class="card-header" style="color: #f7af3e;"><i class="fas fa-puzzle-piece"></i></span> &nbsp; Specify the number of licences</h4>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-xs-12 nopadding">
                                    <table class="table borderless">
                                        <tr style="padding-top: 4px; padding-bottom: 4px;">
                                            <td style="width: 16%; border: none; padding-top: 0px;"></td>
                                            <td style="text-align: right; border: none; padding-top: 5px;">All Access Monthly Subscription</td>
                                            <td style="text-align: right; border: none; padding-top: 5px;">£{{number_format($AA_Price->price_month, 2, '.', '')}}</td>
                                            <td style="border: none; padding-top: 0px;">
                                                <input type="number" min="0" name="AA_Month" id="AA_Month" size="3" maxlength="3" class="form-control-sm ord" style="width: 120px;" aria-invalid="false">
                                            </td>
                                            <td style="text-align: right; border: none; padding-top: 5px;">All Access Yearly Subscription</td>
                                            <td style="text-align: right; border: none; padding-top: 5px;">£{{number_format($AA_Price->price_year, 2, '.', '')}}</td>
                                            <td style="border: none; padding-top: 0px;">
                                                <input type="number" min="0" name="AA_Year" id="AA_Year" size="3" maxlength="3" class="form-control-sm ord" style="width: 120px;" aria-invalid="false">
                                            </td>
                                            <td style="width: 3%; border: none; padding-top: 0px;"></td>
                                        </tr>

                                        <tr>
                                            <td style="width: 16%; border: none; padding-top: 0px;"></td>
                                            <td style="text-align: right; border: none; padding-top: 5px;">IgNite Monthly Subscription</td>
                                            <td style="text-align: right; border: none; padding-top: 5px;">£{{number_format($IG_Price->price_month, 2, '.', '')}}</td>
                                            <td style="border: none; padding-top: 0px;">
                                                <input type="number" min="0" name="IG_Month" id="IG_Month" size="3" maxlength="3" class="form-control-sm ord" style="width: 120px;" aria-invalid="false">
                                            </td>
                                            <td style="text-align: right; border: none; padding-top: 5px;">IgNite Yearly Subscription</td>
                                            <td style="text-align: right; border: none; padding-top: 5px;">£{{number_format($IG_Price->price_year, 2, '.', '')}}</td>
                                            <td style="border: none; padding-top: 0px;">
                                                <input type="number" min="0" name="IG_Year" id="IG_Year" size="3" maxlength="3" class="form-control-sm ord" style="width: 120px;" aria-invalid="false">
                                            </td>
                                            <td style="width: 3%; border: none; padding-top: 0px;"></td>
                                        </tr>

                                        <tr>
                                            <td style="width: 16%; border: none; padding-top: 0px;"></td>
                                            <td style="text-align: right; border: none; padding-top: 5px;">SiClone Monthly Subscription</td>
                                            <td style="text-align: right; border: none; padding-top: 5px;">£{{number_format($SI_Price->price_month, 2, '.', '')}}</td>
                                            <td style="border: none; padding-top: 0px;">
                                                <input type="number" min="0" name="SI_Month" id="SI_Month" size="3" maxlength="3" class="form-control-sm ord" style="width: 120px;" aria-invalid="false">
                                            </td>
                                            <td style="text-align: right; border: none; padding-top: 5px;">SiClone Yearly Subscription</td>
                                            <td style="text-align: right; border: none; padding-top: 5px;">£{{number_format($SI_Price->price_year, 2, '.', '')}}</td>
                                            <td style="border: none; padding-top: 0px;">
                                                <input type="number" min="0" name="SI_Year" id="SI_Year" size="3" maxlength="3" class="form-control-sm ord" style="width: 120px;" aria-invalid="false">
                                            </td>
                                            <td style="width: 3%; border: none; padding-top: 0px;"></td>
                                        </tr>

                                        <tr>
                                            <td style="width: 16%; border: none; padding-top: 0px;"></td>
                                            <td style="text-align: right; border: none; padding-top: 5px;">Disperse Monthly Subscription</td>
                                            <td style="text-align: right; border: none; padding-top: 5px;">£{{number_format($DE_Price->price_month, 2, '.', '')}}</td>
                                            <td style="border: none; padding-top: 0px;">
                                                <input type="number" min="0" name="DE_Month" id="DE_Month" size="3" maxlength="3" class="form-control-sm ord" style="width: 120px;" aria-invalid="false">
                                            </td>
                                            <td style="text-align: right; border: none; padding-top: 5px;">Disperse Yearly Subscription</td>
                                            <td style="text-align: right; border: none; padding-top: 5px;">£{{number_format($DE_Price->price_year, 2, '.', '')}}</td>
                                            <td style="border: none; padding-top: 0px;">
                                                <input type="number" min="0" name="DE_Year" id="DE_Year" size="3" maxlength="3" class="form-control-sm ord" style="width: 120px;" aria-invalid="false">
                                            </td>
                                            <td style="width: 3%; border: none; padding-top: 0px;"></td>
                                        </tr>

                                        <tr>
                                            <td style="width: 16%; border: none; padding-top: 0px;"></td>
                                            <td style="text-align: right; border: none; padding-top: 5px;">ProxSi Monthly Subscription</td>
                                            <td style="text-align: right; border: none; padding-top: 5px;">£{{number_format($PR_Price->price_month, 2, '.', '')}}</td>
                                            <td style="border: none; padding-top: 0px;">
                                                <input type="number" min="0" name="PR_Month" id="PR_Month" size="3" maxlength="3" class="form-control-sm ord" style="width: 120px;" aria-invalid="false">
                                            </td>
                                            <td style="text-align: right; border: none; padding-top: 5px;">ProxSi Yearly Subscription</td>
                                            <td style="text-align: right; border: none; padding-top: 5px;">£{{number_format($PR_Price->price_year, 2, '.', '')}}</td>
                                            <td style="border: none; padding-top: 0px;">
                                                <input type="number" min="0" name="PR_Year" id="PR_Year" size="3" maxlength="3" class="form-control-sm ord" style="width: 120px;" aria-invalid="false"></td>
                                            <td style="width: 3%; border: none; padding-top: 0px;"></td>
                                        </tr>

                                        <tr>
                                            <td style="border: none; padding-top: 0px;"></td>
                                            <td style="border: none; padding-top: 0px;"></td>
                                            <td style="border: none; padding-top: 0px;"></td>
                                            <td style="border: none; padding-top: 0px;"></td>
                                            <td style="border: none; padding-top: 0px;"></td>
                                            <td style="border: none; padding-top: 0px;"></td>
                                            <td style="border: none; padding-top: 0px;"><p class="d-inline-block" style="padding-top: 2px;" id="DiscountShow"></p></td>
                                            <td style="border: none; padding-top: 0px;">&nbsp;</td>
                                        </tr>

                                        <tr>
                                            <td style="border: none; padding-top: 0px;"></td>
                                            <td style="border: none; padding-top: 0px;"></td>
                                            <td style="border: none; padding-top: 0px;"></td>
                                            <td style="border: none; padding-top: 0px;"></td>
                                            <td style="border: none; padding-top: 0px;"></td>
                                            <td style="text-align: right; border: none; padding-top: 5px;">Total:</td>
                                            <td style="border: none; padding-top: 0px;">
                                                <input style="background-color: #2f323b; text-align: right; width: 120px;" id="Total" class="form-control-sm ord" readonly="true" aria-invalid="false">
                                            </td>
                                            <td style="width: 3%; border: none; padding-top: 0px;"></td>
                                        </tr>

                                        <tr>
                                            <td style="border: none; padding-top: 0px;"></td>
                                            <td style="text-align: right; border: none; padding-top: 5px;">SiNi Discount Code:</td>
                                            <td style="border: none; padding-top: 0px;">
                                                <input type="text" min="0" name="Discount" id="Discount" value="" size="90" maxlength="90" class="form-control-sm ord" style="width: 230px;" aria-invalid="false">
                                            </td>
                                            <td style="border: none; padding-top: 0px;"><p class="d-inline-block" style="padding-top: 2px;" id="Discount1"></p><button id="DiscNumberButton" class="btn btn-sm btn-sini pad4" onclick="GetDiscount()">Apply Discount Code</button></td>
                                            <td style="border: none; padding-top: 0px;"></td>


                                            <td style="text-align: right; border: none; padding-top: 5px;">Discount Total:</td>
                                            <td style="border: none; padding-top: 0px;">
                                                <input style="background-color: #2f323b; text-align: right; width: 120px;" id="DiscountTotal" class="form-control-sm ord" readonly="true" aria-invalid="false">
                                            </td>
                                            <td style="width: 3%; border: none; padding-top: 0px;"></td>
                                        </tr>

                                        <tr>
                                            <td style="border: none; padding-top: 0px;"></td>
                                            <td style="border: none; padding-top: 0px;"></td>
                                            <td style="border: none; padding-top: 0px;"><div class="Discount2" id="Discount2"></div></td>
                                            <td style="border: none; padding-top: 0px;"></td>
                                            <td style="border: none; padding-top: 0px;"></td>
                                            <td style="text-align: right; border: none; padding-top: 5px;">Total Discounted:</td>
                                            <td style="border: none; padding-top: 0px;">
                                                <input style="background-color: #2f323b; text-align: right; width: 120px;" id="Total_Discount" class="form-control-sm ord" readonly="true" aria-invalid="false">
                                            </td>
                                            <td style="width: 3%; border: none; padding-top: 0px;"></td>
                                        </tr>
                                        @if($DoIChargeVat == 0)
                                            <tr>
                                                <td style="border: none; padding-top: 0px;"></td>
                                                <td style="text-align: right; border: none; padding-top: 5px;"></td>
                                                <td style="border: none; padding-top: 0px;"></td>
                                                <td style="text-align: left; border: none; padding-top: 0px;"></td>
                                                <td style="border: none; padding-top: 0px;"></td>
                                                <td style="text-align: right; border: none; padding-top: 5px;">Vat:</td>
                                                <td style="border: none; padding-top: 0px;">
                                                    <input style="background-color: #2f323b; text-align: right; width: 120px;" id="Vat" class="form-control-sm ord" style="width: 80px;" readonly="true" aria-invalid="false">
                                                </td>
                                                <td style="width: 3%; border: none; padding-top: 0px;"></td>
                                            </tr>
                                        @else
                                            @if($ThisUser->vat_number != NULL)
                                                <tr>
                                                    <td style="border: none; padding-top: 0px;"></td>
                                                    <td style="text-align: right; border: none; padding-top: 5px;">Your Vat Number:</td>
                                                    <td style="border: none; padding-top: 0px;"><input type="text" min="0" name="VatNumber" id="VatNumber" size="30" maxlength="30" class="form-control-sm ord nopadding" style="width: 230px; border: 1px solid #3a3c46; background-color: #3a3c46;" value="{{$ThisUser->vat_number}}" aria-invalid="false"></td>
                                                    <td style="text-align: left; border: none; padding-top: 0px;"></td>
                                                    <td style="border: none; padding-top: 0px;"></td>
                                                    <td style="text-align: right; border: none; padding-top: 5px;">Vat:</td>
                                                    <td style="border: none; padding-top: 0px;">
                                                        <input style="background-color: #2f323b; text-align: right; width: 120px;" id="Vat" class="form-control-sm ord" style="width: 80px;" readonly="true" aria-invalid="false">
                                                    </td>
                                                    <td style="width: 3%; border: none; padding-top: 0px;"></td>
                                                </tr>
                                            @else
                                                <tr>
                                                    <td style="border: none; padding-top: 0px;"></td>
                                                    <td style="text-align: right; border: none; padding-top: 5px;">Your Vat Number:</td>
                                                    <td style="border: none; padding-top: 0px;"><input type="text" min="0" name="VatNumber" id="VatNumber" size="30" maxlength="30" class="form-control-sm ord nopadding" style="width: 230px;" value="" aria-invalid="false"></td>
                                                    <td style="text-align: left; border: none; padding-top: 0px;"><p class="d-inline-block" style="padding-top: 2px;" id="company"></p><button id="VatNumberButton" class="btn btn-sm btn-sini pad4" onclick="GetVat()">Validate Vat Number</button></td>
                                                    <td style="border: none; padding-top: 0px;"></td>
                                                    <td style="text-align: right; border: none; padding-top: 5px;">Vat:</td>
                                                    <td style="border: none; padding-top: 0px;">
                                                        <input style="background-color: #2f323b; text-align: right; width: 120px;" id="Vat" class="form-control-sm ord" style="width: 80px;" readonly="true" aria-invalid="false">
                                                    </td>
                                                    <td style="width: 3%; border: none; padding-top: 0px;"></td>
                                                </tr>
                                            @endif
                                        @endif
                                        <tr>
                                            <td style="border: none; padding-top: 0px;"></td>
                                            <td style="border: none; padding-top: 0px;"></td>
                                            <td style="border: none; padding-top: 0px;"><div class="company2" id="company2"></div></td>
                                            <td style="border: none; padding-top: 0px;"></td>
                                            <td style="border: none; padding-top: 0px;"></td>
                                            <td style="text-align: right; border: none; padding-top: 5px;">Total:</td>
                                            <td style="border: none; padding-top: 0px;">
                                                <input style="background-color: #2f323b; text-align: right; width: 120px;" id="VatTotal" class="form-control-sm ord" readonly="true" aria-invalid="false">
                                            </td>
                                            <td style="width: 3%; border: none; padding-top: 0px;"></td>
                                        </tr>
                                    </table>
                                    <h4><center>Vat number format would be your country code plus vat number with no spaces. For example United Kindom and your vat number - GB123456789</center></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" style="padding-top: 15px;">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" style="padding-left: 8px;">
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a href="#SiNi_Card" data-toggle="tab" aria-expanded="true" class="nav-link active">
                                <div class="d-xl-block d-lg-block d-md-block d-sm-none d-none">
                                    <i class="fas fa-credit-card"></i> &nbsp; Buy Direct Credit Card
                                </div>
                                <div class="d-xl-none d-lg-none d-md-none d-sm-block">
                                    Direct Credit Card
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#SiNi_PP" data-toggle="tab" aria-expanded="false" class="nav-link">
                                <div class="d-xl-block d-lg-block d-md-block d-sm-none d-none">
                                    <i class="fab fa-cc-paypal"></i> &nbsp; Buy Direct Paypal
                                </div>
                                <div class="d-xl-none d-lg-none d-md-none d-sm-block">
                                    Direct Paypal
                                </div>
                            </a>
                        </li>
                    </ul>

                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="SiNi_Card">
                            <div class="card">
                                <div class="card-body" style="padding: 30px; min-height: 280px;">
                                    <div class="row">
                                        <div class="col-md-12" style="padding-bottom: 20px;">
                                            <h4>SiNi Software does not store any credit card information on our server.  We use a secure payment system call <a href="https://www.braintreepayments.com/" target="_blank">BrainTree</a> owned by paypal.</h4>
                                            <hr>
                                        </div>
                                    </div>
                                    @if (session()->has('success_message'))
                                        <div class="alert alert-success">
                                            {{ session()->get('success_message') }}
                                        </div>
                                    @endif

                                    @if(count($errors) > 0)
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                    <form action="{{ url('/User/Buy/Purchase') }}" method="POST" id="payment-form">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="cc_name">Name On Credit Card</label>
                                                    <input type="text" class="form-control" id="cc-name" name="cc-name" placeholder="Name on your credit card">
                                                    <div class="invalid-feedback">
                                                        Please enter your full name as displayed on card
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label for="postal-code">Credit Card Post Code</label>
                                                    <div class="form-control" id="postal-code">
                                                    </div>
                                                    <div class="invalid-feedback">
                                                        Please enter post code
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="their_email">User Associated With Payment</label>
                                                    <input type="text" class="form-control" id="email" value="{{$ThisUser->email}}" name="their_email" readonly="">
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label for="amount">Total Amount</label>
                                                    <input type="text" class="form-control" id="amount" name="amount" readonly="">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12">

                                                    <div class="bt-drop-in-wrapper">
                                                        <div id="bt-dropin"></div>
                                                    </div>
                                                    <input id="nonce" name="payment_method_nonce" type="hidden" />
                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="col-md-2" style="height: 50px;">
                                                <input type="hidden" value="0" name="Form_Discount" id="Form_Discount" />
                                                <input type="hidden" value="0" name="Form_Discount_Percent" id="Form_Discount_Percent" />
                                                <input type="hidden" value="0" name="Form_DiscountCode" id="Form_DiscountCode" />
                                                <input type="hidden" value="0" name="Form_VatNumber" id="Form_VatNumber" />
                                                <input type="hidden" value="0" name="Form_Vat" id="Form_Vat" />
                                                <input type="hidden" value="0" name="Form_TotalAmount" id="Form_TotalAmount" />
                                                <input type="hidden" value="0" name="Form_Amount" id="Form_Amount" />
                                                <input type="hidden" value="0" name="AA_Year" id="CC_AA_Year" />
                                                <input type="hidden" value="0" name="IG_Year" id="CC_IG_Year" />
                                                <input type="hidden" value="0" name="SI_Year" id="CC_SI_Year" />
                                                <input type="hidden" value="0" name="DE_Year" id="CC_DE_Year" />
                                                <input type="hidden" value="0" name="PR_Year" id="CC_PR_Year" />
                                                <input type="hidden" value="0" name="AA_Month" id="CC_AA_Month" />
                                                <input type="hidden" value="0" name="IG_Month" id="CC_IG_Month" />
                                                <input type="hidden" value="0" name="SI_Month" id="CC_SI_Month" />
                                                <input type="hidden" value="0" name="DE_Month" id="CC_DE_Month" />
                                                <input type="hidden" value="0" name="PR_Month" id="CC_PR_Month" />
                                                <input type="hidden" value="0" name="dataCollector" id="dataCollector" />
                                                <input type="hidden" value="{{$ThisUser->id}}" name="user_id" id="user_id" />
                                            </div>
                                            <div class="col-md-5">
                                                <!---- <div style="display: none;" id="paypal-button"></div>--->
                                            </div>
                                            <div class="col-md-5" style="padding-top: 20px;">
                                                <button id="submit-button" type="submit" class="btn btn-sm btn-sini pad4">Submit Payment To SiNi Software</button>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="SiNi_PP">
                            <div class="card">
                                <div class="card-body" style="padding: 30px; min-height: 340px;">
                                    <div class="row">
                                        <div class="col-md-12" style="padding-bottom: 20px;">
                                            <h4>SiNi Software Checkout with <a href="https://www.paypal.com/" target="_blank">PayPal</a> is an easy way for customers pay.  You will not need to update your expired credit cards with us.</h4>
                                            <hr>
                                        </div>
                                    </div>
                                    @if (session()->has('success_message'))
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="alert alert-success">
                                                    {{ session()->get('success_message') }}
                                                </div>
                                            </div>
                                        </div>
                                    @endif

                                    @if(count($errors) > 0)
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="alert alert-danger">
                                                    <ul>
                                                        @foreach ($errors->all() as $error)
                                                            <li><{{ $error }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="alert alert-danger" style="display: none;" id="paypal_button_bad_message">
                                                        Error Connection To PayPal - Please Contact SiNi Software Support.
                                                    </div>
                                                    <div class="alert alert-success" style="display: none;" id="paypal_button_good_message">
                                                        Please wait, and don't reload page.  We are prossessing your order now.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-group">

                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="their_email">User Associated With Payment</label>
                                                <input type="text" class="form-control" value="{{$ThisUser->email}}" name="their_email" readonly="">
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="amount">Amount</label>
                                                <input type="text" class="form-control" id="CC_Price2" name="CC_Price2" readonly="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-2">

                                        </div>
                                        <div class="col-md-4" style="height: 50px;">
                                            Checking out with PayPal will open the PayPal window to login to your account.
                                        </div>
                                        <div class="col-md-6" style="padding-top: 30px;">
                                            <div style="display: none;" id="paypal-button"></div>
                                        </div>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!------- END PAGE ------>
        </div>
    </div>
</div>

<div class="container-full">
    <hr />
    @include ('includes.footer')
</div>
@include ('includes.bottom')
@include ('includes.flash_message')




<script>
    var form = document.querySelector('#payment-form');
    var client_token = "{{ $token }}";
    braintree.dropin.create({
        authorization: client_token,
        selector: '#bt-dropin',
    }, function (createErr, instance) {
        if (createErr) {
            console.log('Create Error', createErr);
            return;
        }
        form.addEventListener('submit', function (event) {
            event.preventDefault();
            instance.requestPaymentMethod(function (err, payload) {
                if (err) {
                    console.log('Request Payment Method Error', err);
                    return;
                }
                // Add the nonce to the form and submit
                document.querySelector('#nonce').value = payload.nonce;
                form.submit();
            });
        });
    });
</script>



<script>
    var form = document.querySelector('#payment-form');
    var submit = document.querySelector('input[type="submit"]');
    var cost_amount = document.getElementById("amount").value;
    var DoIChargeVat = '{{ $DoIChargeVat }}';
    var DoIHaveVatNumber = '{{$ThisUser->vat_number}}';

    var Form_Discount = 0;
    var Form_DiscountCode = 0;
    var Form_VatNumber = 0;
    var Form_Vat = 0;
    var Form_TotalAmount = 0;
    var Form_Amount = 0;

    braintree.client.create({
        authorization: '{{ $token }}'
    }, function (clientErr, clientInstance) {
        if (clientErr) {
            console.error(clientErr);
            return;
        }
        braintree.dataCollector.create({
            client: clientInstance,
            kount: true
        }, function (err, dataCollectorInstance) {
            if (err) {
                // Handle error in creation of data collector
                return;
            }
            // At this point, you should access the dataCollectorInstance.deviceData value and provide it
            // to your server, e.g. by injecting it into your form as a hidden input.
            var deviceData = dataCollectorInstance.deviceData;
            document.getElementById("dataCollector").value = deviceData;
        });

        braintree.hostedFields.create({
                client: clientInstance,
                styles: {
                    'input': {
                        'font-size': '16px',
                        'padding': '9px',
                    },
                    // Styling element state
                    ':focus': {
                        'color': '#fff',
                    },
                    '.valid': {
                        'color': '#28a745',
                        'border-color': '#28a745',
                        'border-style': 'solid',
                        'border-width': 'thin',
                    },
                    '.invalid': {
                        'color': '#dc3545',
                        'border-color': '#dc3545',
                        'border-style': 'solid',
                        'border-width': 'thin',
                    },
                    '::-webkit-input-placeholder': {
                        'color': '#555',
                    },
                },
                fields: {
                    number: {
                        selector: '#cc-number',
                        placeholder: '1111 1111 1111 1111'
                    },
                    cvv: {
                        selector: '#cc-cvv',
                        placeholder: '3 or 4 digit code on back'
                    },
                    expirationDate: {
                        selector: '#cc-expiration',
                        placeholder: 'mm/yy'
                    },
                    postalCode: {
                        selector: '#postal-code',
                        placeholder: 'Post Code'
                    }
                }
            },
            function (err, hostedFieldsInstance) {
                if (err) {
                    console.error(err);
                    return;
                }

                function createInputChangeEventListener(element) {
                    return function () {
                        validateInput(element);
                    }
                }

                function setValidityClasses(element, validity) {
                    if (validity) {
                        element.removeClass('is-invalid');
                        element.addClass('is-valid');
                    }
                    else {
                        element.addClass('is-invalid');
                        element.removeClass('is-valid');
                    }
                }

                function validateInput(element) {
                    if (!element.val().trim()) {
                        setValidityClasses(element, false);
                        return false;
                    }
                    setValidityClasses(element, true);
                    return true;
                }

                function validateEmail () {
                    var baseValidity = validateInput(email);

                    if (!baseValidity) {
                        return false;
                    }

                    if (email.val().indexOf('@') === -1) {
                        setValidityClasses(email, false);
                        return false;
                    }

                    setValidityClasses(email, true);
                    return true;
                }
                var ccName = $('#cc-name');
                var email = $('#email');

                ccName.on('change', function () {
                    validateInput(ccName);
                });

                email.on('change', validateEmail);

                hostedFieldsInstance.on('validityChange', function(event) {
                    var field = event.fields[event.emittedBy];

                    // Remove any previously applied error or warning classes
                    $(field.container).removeClass('is-valid');
                    $(field.container).removeClass('is-invalid');

                    if (field.isValid) {
                        $(field.container).addClass('is-valid');
                    }
                    else if (field.isPotentiallyValid) {
                        // skip adding classes if the field is
                        // not valid, but is potentially valid
                    }
                    else {
                        $(field.container).addClass('is-invalid');
                    }
                });

                form.addEventListener('submit', function (event) {
                    event.preventDefault();

                    var formIsInvalid = false;
                    var state = hostedFieldsInstance.getState();

                    if (!validateInput($('#cc-name'))) {
                        formIsInvalid = true;
                    }

                    Object.keys(state.fields).forEach(function(field) {
                        if (!state.fields[field].isValid) {
                            $(state.fields[field].container).addClass('is-invalid');
                            formIsInvalid = true;
                        }
                    });

                    if (formIsInvalid) {
                        $.Notification.notify('error','top right', 'SiNi Software', 'Reqired Fiulds Are Missing In Your Form');
                        return;
                    }

                    hostedFieldsInstance.tokenize({
                            cardholderName: $('#cc-name').val()
                        },
                        function (tokenizeErr, payload) {

                            if (tokenizeErr) {
                                $.Notification.notify('error','top right', 'SiNi Software', 'Reqired Fiulds Are Missing In Your Form');
                                //console.error(tokenizeErr);
                                return;
                            }

                            // If this was a real integration, this is where you would
                            // send the nonce to your server.
                            // console.log('Got a nonce: ' + payload.nonce);
                            document.getElementById('paypal-button').style.visibility = 'hidden';
                            document.getElementById("paypal_button_good_message").style.visibility = "visible";
                            document.getElementById("paypal_button_good_message").style.display = "block";
                            document.getElementById("submit-button").style.display = "none";
                            $.Notification.notify('warning','top right', 'SiNi Software', 'Submitting Payment to BrainTree');
                            document.querySelector('#nonce').value = payload.nonce;
                            form.submit();
                        });
                }, false);
            });
        braintree.paypalCheckout.create({
            client: clientInstance
        }, function (paypalCheckoutErr, paypalCheckoutInstance) {

            if (paypalCheckoutErr) {
                document.getElementById("paypal_button_bad_message").style.display = "block";
                //document.getElementById("paypal_button_bad_message").style.visibility = "visible";
                document.getElementById('paypal-button').style.visibility = 'hidden';
                //console.error('Error creating PayPal Checkout:', paypalCheckoutErr);
                return;
            }

            // Set up PayPal with the checkout.js library
            paypal.Button.render({
                env: 'production', // 'production' Or 'sandbox'
                //commit: true, // This will add the transaction amount to the PayPal button
                style: {
                    size: 'medium',
                    color: 'blue',
                    shape: 'rect',
                    tagline: false,
                },
                payment: function () {
                    return paypalCheckoutInstance.createPayment({
                        //flow: 'checkout', // Required
                        flow: 'vault', // Required
                        amount: Total, // Required
                        currency: 'GBP', // Required
                        enableShippingAddress: false,
                        storeInVaultOnSuccess: true,
                        //storeInVault: true,
                        /*
                          'submitForSettlement' => true,
                          'storeInVaultOnSuccess' => true,
                          'storeInVault' => true,
                        */
                    });
                },

                onAuthorize: function (data, actions) {
                    return paypalCheckoutInstance.tokenizePayment(data, function (err, payload) {
                        // Submit `payload.nonce` to your server
                        document.getElementById('paypal-button').style.visibility = 'hidden';
                        document.getElementById("paypal_button_good_message").style.visibility = "visible";
                        document.getElementById("paypal_button_good_message").style.display = "block";
                        document.getElementById("submit-button").style.display = "none";
                        document.querySelector('#nonce').value = payload.nonce;
                        form.submit();
                    });
                },

                onCancel: function (data) {
                    console.log('checkout.js payment cancelled', JSON.stringify(data, 0, 2));
                    document.getElementById('paypal-button').style.visibility = 'visible';
                    $.Notification.notify('error','top right', 'SiNi Software', 'PayPal payment cancelled');
                },

                onError: function (err) {
                    document.getElementById("paypal_button_bad_message").style.visibility = "visible";
                    document.getElementById("paypal_button_bad_message").style.display = "block";
                    document.getElementById('paypal-button').style.visibility = 'hidden';
                }
            }, '#paypal-button').then(function () {
                // The PayPal button will be rendered in an html element with the id
            });
        });
    });

    //////   my stuff
    var ThwVatNumber = false;
    var GodeDiscountPercent = 0;
    var AA_Y = <?php echo $AA_Price->price_year; ?>;
    var AA_M = <?php echo $AA_Price->price_month; ?>;
    var IG_Y = <?php echo $IG_Price->price_year; ?>;
    var IG_M = <?php echo $IG_Price->price_month; ?>;
    var SI_Y = <?php echo $SI_Price->price_year; ?>;
    var SI_M = <?php echo $SI_Price->price_month; ?>;
    var PR_Y = <?php echo $PR_Price->price_year; ?>;
    var PR_M = <?php echo $PR_Price->price_month; ?>;
    var DE_Y = <?php echo $DE_Price->price_year; ?>;
    var DE_M = <?php echo $DE_Price->price_month; ?>;

    var Total = 0;

    function RunMath() {
        var AboveDiscount = "NO";
        var FullYearDiscount = "NO";
        var UserDiscount = 0;
        var UserDiscountAmount = 0;

        var AA_Y_C = document.getElementById("AA_Year").value;
        var IG_Y_C = document.getElementById("IG_Year").value;
        var SI_Y_C = document.getElementById("SI_Year").value;
        var PR_Y_C = document.getElementById("PR_Year").value;
        var DE_Y_C = document.getElementById("DE_Year").value;
        var AA_M_C = document.getElementById("AA_Month").value;
        var IG_M_C = document.getElementById("IG_Month").value;
        var SI_M_C = document.getElementById("SI_Month").value;
        var PR_M_C = document.getElementById("PR_Month").value;
        var DE_M_C = document.getElementById("DE_Month").value;

        var UserAmount_Y = Number(AA_Y_C) + Number(IG_Y_C) + Number(SI_Y_C) + Number(PR_Y_C) + Number(DE_Y_C);
        var UserAmount_M = Number(AA_M_C) + Number(IG_M_C) + Number(SI_M_C) + Number(PR_M_C) + Number(DE_M_C);

        if(UserAmount_Y > 4 && UserAmount_Y < 11){
            document.getElementById("DiscountShow").innerHTML = '5% Off Price';
            document.getElementById('DiscountShow').style.visibility = 'visible';
            FullYearDiscount = "YES";
            UserDiscount = 5;
        }

        if(UserAmount_Y > 10 && UserAmount_Y < 100000){
            document.getElementById("DiscountShow").innerHTML = '10% Off Price';
            document.getElementById('DiscountShow').style.visibility = 'visible';
            FullYearDiscount = "YES";
            UserDiscount = 10;
        }
        if(UserAmount_Y > 10 && UserAmount_Y < 100000){

        }
        else{
            if(UserAmount_M > 4 && UserAmount_M < 11){
                document.getElementById("DiscountShow").innerHTML = '5% Off Price';
                document.getElementById('DiscountShow').style.visibility = 'visible';
                UserDiscount = 5;
            }
        }

        if(UserAmount_M > 10 && UserAmount_M < 100000){
            document.getElementById("DiscountShow").innerHTML = '10% Off Price';
            document.getElementById('DiscountShow').style.visibility = 'visible';
            UserDiscount = 10;
        }

        if(UserAmount_M < 5 && UserAmount_Y < 5){
            document.getElementById('DiscountShow').style.visibility = 'hidden';
        }

        var AA_Y_V = AA_Y * AA_Y_C;
        var IG_Y_V = IG_Y * IG_Y_C;
        var SI_Y_V = SI_Y * SI_Y_C;
        var PR_Y_V = PR_Y * PR_Y_C;
        var DE_Y_V = DE_Y * DE_Y_C;
        var AA_M_V = AA_M * AA_M_C;
        var IG_M_V = IG_M * IG_M_C;
        var SI_M_V = SI_M * SI_M_C;
        var PR_M_V = PR_M * PR_M_C;
        var DE_M_V = DE_M * DE_M_C;

        var SubTotal = AA_Y_V + IG_Y_V + SI_Y_V + PR_Y_V + DE_Y_V + AA_M_V + IG_M_V + SI_M_V + PR_M_V + DE_M_V;
        var DiscountAmount = 0;
        var DiscountTotal = SubTotal;

        if(GodeDiscountPercent > 0){
            DiscountAmount = (GodeDiscountPercent / 100) * SubTotal;
            DiscountTotal = DiscountTotal - DiscountAmount;
        }

        if(UserDiscount > 0){
            UserDiscountAmount = (UserDiscount / 100) * SubTotal;
            DiscountAmount = DiscountAmount + UserDiscountAmount;
            DiscountTotal = DiscountTotal - UserDiscountAmount;
        }

        /// 0 = no     1 = only if no vat number      2 = yes
        if(DoIChargeVat == 1){
            var Vat = (20 / 100) * DiscountTotal;
            if(ThwVatNumber == true){
                Vat = 0;
            }
        }
        else{
            Vat = 0;
        }

        if(DoIChargeVat == 2){
            var Vat = (20 / 100) * DiscountTotal;
        }

        Total = Vat + DiscountTotal;

        var TotalDiscountAmount = GodeDiscountPercent + UserDiscount;
        document.getElementById("Form_Discount_Percent").value = TotalDiscountAmount;
        document.getElementById("Form_Discount").value = DiscountTotal.toFixed(2);
        document.getElementById("Form_Vat").value = Vat.toFixed(2);
        document.getElementById("Form_TotalAmount").value = Total.toFixed(2);
        document.getElementById("Form_Amount").value = SubTotal.toFixed(2);

        document.getElementById("Total").value = ("£" + SubTotal.toFixed(2));
        document.getElementById("DiscountTotal").value = ("£" + DiscountAmount.toFixed(2));
        document.getElementById("Total_Discount").value = ("£" + DiscountTotal.toFixed(2));
        //if(DoIChargeVat > 0){
        document.getElementById("Vat").value = ("£" + Vat.toFixed(2));
        //}

        document.getElementById("VatTotal").value = ("£" + Total.toFixed(2));
        document.getElementById("amount").value = Total.toFixed(2);
        document.getElementById("CC_Price2").value = Total.toFixed(2);


        document.getElementById("CC_AA_Year").value = AA_Y_C;
        document.getElementById("CC_IG_Year").value = IG_Y_C;
        document.getElementById("CC_SI_Year").value = SI_Y_C;
        document.getElementById("CC_DE_Year").value = DE_Y_C;
        document.getElementById("CC_PR_Year").value = PR_Y_C;
        document.getElementById("CC_AA_Month").value = AA_M_C;
        document.getElementById("CC_IG_Month").value = IG_M_C;
        document.getElementById("CC_SI_Month").value = SI_M_C;
        document.getElementById("CC_DE_Month").value = DE_M_C;
        document.getElementById("CC_PR_Month").value = PR_M_C;

        if(document.getElementById("amount").value  > 0){
            document.getElementById("paypal-button").style.display = "block";
            document.getElementById("submit-button").style.display = "block";
        }
        else{
            document.getElementById("paypal-button").style.display = "none";
            document.getElementById("submit-button").style.display = "none";
        }
    }

    function GetDiscount() {
        var discount_imput = document.getElementById("Discount").value;

        var form_data = new FormData();
        form_data.append('code', discount_imput);
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            data: form_data,
            type: "POST",
            url:"{{ url('/User/Buy/GetDiscountCode') }}",
            cache: false,
            contentType: false,
            processData: false,
            dataType:'JSON',
            success: function(data) {
                if(data.result == "true"){
                    document.getElementById("Discount").style.borderColor = "#45464e";
                    document.getElementById("Discount").style.backgroundColor = "#2f323b";

                    document.getElementById("Discount").disabled = true;
                    $( ".Discount2" ).empty();
                    document.getElementById('DiscNumberButton').style.visibility = 'hidden';
                    document.getElementById("DiscNumberButton").innerHTML = "|";
                    var mymessage = data.percentage+'% Off Discount';
                    document.getElementById("Discount1").innerHTML = mymessage;
                    GodeDiscountPercent = data.percentage;
                    //document.getElementById("CC_Discount").value = discount_imput;
                    document.getElementById("Form_DiscountCode").value = document.getElementById("Discount").value;
                    RunMath();

                }
                else{
                    document.getElementById("Discount").style.borderColor = "red";
                    document.getElementById("Discount2").innerHTML = data.message;
                    document.getElementById("Form_DiscountCode").value = '';
                    GodeDiscountPercent = 0;
                }
            },
            error: function(data) {
                $.Notification.notify('error','top right', 'SiNi Software', 'Some code error with ajax request');
            }
        });
    }

    function GetVat() {
        var vat_number = document.getElementById("VatNumber").value;

        $.ajax({
            url: 'https://apilayer.net/api/validate?access_key=adb03562fee81f072f86164a79cb72fa&vat_number=' + vat_number,
            dataType: 'jsonp',
            success: function(json) {
                if(json.valid == true){
                    document.getElementById("VatNumber").style.borderColor = "#45464e";
                    document.getElementById("VatNumber").style.backgroundColor = "#2f323b";
                    document.getElementById("company").innerHTML = 'Good Vat Number';
                    $( ".company2" ).empty();
                    document.getElementById("VatNumber").disabled = true;
                    document.getElementById("VatNumberButton").innerHTML = "|";
                    document.getElementById('VatNumberButton').style.visibility = 'hidden';
                    //document.getElementById("CC_VatNumber").value = vat_number;
                    document.getElementById("Form_VatNumber").value = document.getElementById("VatNumber").value;
                    ThwVatNumber = true;
                    RunMath();
                }
                else{
                    document.getElementById("VatNumber").style.borderColor = "red";
                    document.getElementById("company2").innerHTML = 'Vat Number Not Found';
                    document.getElementById("Form_VatNumber").value  = '';
                    ThwVatNumber = false;
                }
            }
        });
    }

    if(DoIHaveVatNumber != ''){
        document.getElementById("VatNumber").disabled = true;
        document.getElementById("Form_VatNumber").value = DoIHaveVatNumber;
        ThwVatNumber = true;
        RunMath();
    }

    $('table tr td').on('input',function(e){
        RunMath();
    });


</script>


</body>
</html>
