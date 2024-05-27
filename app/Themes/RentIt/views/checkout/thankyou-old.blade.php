<div class="col-md-12 col-xs-12">
    <div class="white-box">
        <div class="thank-you-message">
            <h2>{{ __('Thank you for your order!') }}</h2>
            <p>{{ __('You will receive an email confirmation soon.') }}</p>
            <div style="display: flex; justify-content: center;">
                <a href="/" style="font-family: Montserrat, Arial; background: linear-gradient(to bottom right, #3A386F 80%, #191726); border-color:#273f44 !important;" type="submit" class="btn btn-theme ripple-effect pull-right">{{__("Back to Home")}}</a>
            </div>
        </div>
    </div>
</div>
<style>
    .white-box {
        display: flex;
        justify-content: center;
        align-items: center;
        /* height: 100vh; */
    }
    .thank-you-message {
        text-align: center;
        max-width: 600px;
    }
    .thank-you-message h2 {
        margin-bottom: 20px;
        font-size: 28px; /* Adjust based on your preference */
    }
    .thank-you-message p {
        font-size: 18px; /* Adjust based on your preference */
    }
</style>
