<div class="page-content-wrapper section-space--inner--120">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="career-title-area text-center section-space--bottom--50">
                    <h2 class="title">Get a Quote</h2>
                    <p class="subtitle">Please provide the following information and we'll get back to you soon as possible with a quote. Fields marked with an asterisk(*) are required.</p>
                </div>
            </div>
        </div>
        <div class="row">

            <div class="col-lg-9 mx-auto">
                <div class="contact-form-wrapper">
                    <form action="{{ route('front.addQuote') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6">
                                <input type="text" name="first_name" placeholder="First Name *" >
                                @error('first_name')
                                    <div class="error">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-lg-6">
                                <input type="text" name="last_name" placeholder="Last Name *" >
                                @error('last_name')
                                    <div class="error">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-lg-6">
                                <input type="type" name="email" placeholder="Email *" >
                                @error('email')
                                    <div class="error">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-lg-6">
                                <input type="text" name="phone" placeholder="Phone Number *" >
                                @error('phone')
                                    <div class="error">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-lg-12">
                                <input type="text" name="company_name" placeholder="Company Name">
                                @error('company_name')
                                    <div class="error">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-lg-12">
                                <textarea placeholder="Your quote request *" name="request_message"></textarea>
                                @error('request_message')
                                    <div class="error">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-lg-12 text-center">
                                <button type="submit" value="submit" id="submit" class="ht-btn ht-btn--default">GET A QUOTE</button>
                            </div>
                        </div>
                    </form>
                    <p class="form-message text-center"></p>
                </div>
            </div>
        </div>
    </div>
</div>