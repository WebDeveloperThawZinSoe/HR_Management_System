@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <header>
                <style>
                    #intro {
                        background-image: url(https://mdbootstrap.com/img/new/fluid/city/008.jpg);
                        height: 100vh;
                    }

                    /* Height for devices larger than 576px */
                    @media (min-width: 992px) {
                        #intro {
                            margin-top: -58.59px;
                        }
                    }

                    .navbar .nav-link {
                        color: #fff !important;
                    }
                </style>

                <!-- Navbar -->
                <nav class="navbar navbar-expand-lg navbar-dark d-none d-lg-block" style="z-index: 2000;">
                    <div class="container-fluid">
                        <!-- Navbar brand -->
                        <a class="navbar-brand nav-link" href="#">

                        </a>
                        <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarExample01" aria-controls="navbarExample01" aria-expanded="false" aria-label="Toggle navigation">
                            <i class="fas fa-bars"></i>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarExample01">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">


                            </ul>

                            <ul class="navbar-nav d-flex flex-row">
                                <!-- Icons -->

                            </ul>
                        </div>
                    </div>
                </nav>
                <!-- Navbar -->

                <!-- Background image -->
                <div id="intro" class="bg-image shadow-2-strong">
                    <div class="mask d-flex align-items-center h-100" style="background-color: rgba(0, 0, 0, 0.8);">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-xl-5 col-md-8">
                                    <form method="POST" action="{{ route('login') }}" class="bg-white rounded shadow-5-strong p-5">
                                        <!-- Email input -->
                                        @csrf
                                        <div class="form-outline mb-4">
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus />
                                            <label class="form-label" for="form1Example1">Email address</label>
                                        </div>

                                        <!-- Password input -->
                                        <div class="form-outline mb-4">
                                            <input type="password" id="form1Example2" class="form-control  @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" />
                                            <label class="form-label" for="form1Example2">Password</label>
                                        </div>

                                        <!-- 2 column grid layout for inline styling -->
                                     
                                        <!-- Submit button -->
                                        <button type="submit" class="btn btn-primary btn-block">{{ __('Login') }}</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Background image -->
            </header>
            <!--Main Navigation-->

            <!--Footer-->



            <!-- <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control">

                            
                            </div>
                        </div>

                      

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    
                                </button>

                                
                            </div>
                        </div>
                    </form>





                </div>
            </div> -->
        </div>
    </div>
</div>
@endsection