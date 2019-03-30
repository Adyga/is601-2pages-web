



@extends('layouts.default')

@section('title', 'contact')

@section('content')
    <section class="hero">
        <div class="container">
            <!-- Breadcrumbs -->
            <ol class="breadcrumb justify-content-center">
                <li class="breadcrumb-item"><a href="/home">Home</a></li>
                <li class="breadcrumb-item active">Contact        </li>
            </ol>
            <!-- Hero Content-->
            <div class="hero-content pb-5 text-center">
                <h1 class="hero-heading">Contact</h1>
                <div class="row">
                    <div class="col-xl-8 offset-xl-2"><p class="lead text-muted">Are you curious about something?  </p></div>
                </div>
            </div>
        </div>
    </section>
    <section style="background: #fafafa;" class="py-6">
    </section>
    <section class="py-6">
        <div class="container">
            <header class="mb-5">
                <h2 class="text-uppercase h5">Contact form</h2>
            </header>
            <div class="row">
                <div class="col-md-7 mb-5 mb-md-0">
                    <form action="/contact" method="post" class= 'contact-form' action="route{{'contactstore'}}">
                        {{csrf_field()}}
                        <div class="controls">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="name" class="form-label">Your firstname *</label>
                                        <input type="text" name="name" id="name" placeholder="Enter your firstname" required="required" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="surname" class="form-label">Your lastname *</label>
                                        <input type="text" name="surname" id="surname" placeholder="Enter your  lastname" required="required" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="email" class="form-label">Your email *</label>
                                <input type="email" name="email" id="email" placeholder="Enter your  email" required="required" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="message" class="form-label">Your message for us *</label>
                                <textarea rows="4" name="message" id="message" placeholder="Enter your message" required="required" class="form-control"></textarea>
                            </div>
                            <button type="submit" class="btn btn-outline-dark">Send message</button>
                        </div>
                    </form>
                </div>
                <div class="col-md-5">
                    <p class="text-muted">Effects present letters inquiry no an removed or friends. Desire behind latter me though in. </p>
                    <p class="text-muted">Able an hope of body. Any nay shyness article matters own removal nothing his forming.   </p>
                </div>
            </div>
        </div>
    </section>
@endsection