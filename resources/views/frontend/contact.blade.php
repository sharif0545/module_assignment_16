@extends('frontend.layouts.master')
@section('title', $page_tile)
@section('main-content')

    <section class="py-5">
        <div class="container px-5">

            <div class="bg-light rounded-4 py-5 px-4 px-md-5">
                <div class="text-center mb-5">
                    <div class="feature bg-primary bg-gradient-primary-to-secondary text-white rounded-3 mb-3"><i
                            class="bi bi-envelope"></i></div>
                    <h1 class="fw-bolder">Get in touch</h1>
                    <p class="lead fw-normal text-muted mb-0">Let's work together!</p>
                </div>
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-8 col-xl-6">

                        <form id="contactForm" method="post" action="{{ route('contactSave') }}">
                            @csrf

                            <div class="form-floating mb-3">
                                <input class="form-control" id="name" name="name" type="text"
                                    placeholder="Enter your name..." data-sb-validations="required" />
                                <label for="name">Full name</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                            </div>

                            <div class="form-floating mb-3">
                                <input class="form-control" id="email" name="email" type="email"
                                    placeholder="name@example.com" data-sb-validations="required,email" />
                                <label for="email">Email address</label>
                                <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                                <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                            </div>

                            <div class="form-floating mb-3">
                                <input class="form-control" id="phone" name="phone" type="tel"
                                    placeholder="(123) 456-7890" data-sb-validations="required" />
                                <label for="phone">Phone number</label>
                                <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.
                                </div>
                            </div>

                            <div class="form-floating mb-3">
                                <textarea class="form-control" id="message" name="message" type="text" placeholder="Enter your message here..."
                                    style="height: 10rem" data-sb-validations="required"></textarea>
                                <label for="message">Message</label>
                                <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.
                                </div>
                            </div>

                            <div class="d-none" id="submitSuccessMessage">
                                <div class="text-center mb-3">
                                    <div class="fw-bolder">Form submission successful!</div>
                                    To activate this form, sign up at
                                    <br />
                                    <a
                                        href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                                </div>
                            </div>

                            <div class="d-none" id="submitErrorMessage">
                                <div class="text-center text-danger mb-3">Error sending message!</div>
                            </div>

                            <div class="d-grid"><button class="btn btn-primary btn-lg" id="submitButton"
                                    type="submit">Submit</button></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
