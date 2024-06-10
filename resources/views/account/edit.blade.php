
@extends('layouts.app')
    @section('content')
    <div class="container my-5 py-5">
        <div class="option justify-content-center border-bottom border-dark-subtle mb-3 text-center">
            <a href="/users" class="mx-3 fs-3 text-uppercase">log in</a>
            <a href="/users/create" class="mx-3 fs-3 text-uppercase active">SIGN UP</a>
        </div>
        <div class="col-8 mx-auto mt-5">
            <div class="form-input text-center">
                <label for="" class="text-start border-bottom border-0 w-100 border-dark-subtle">Log-In With Social</label>
                <div class="social mt-4 mb-5">
                    <a href="#" class="btn btn-outline-dark btn-lg text-uppercase fs-6 rounded-1 py-4 px-5 mx-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-google" viewBox="0 0 16 16">
                            <path d="M15.545 6.558a9.4 9.4 0 0 1 .139 1.626c0 2.434-.87 4.492-2.384 5.885h.002C11.978 15.292 10.158 16 8 16A8 8 0 1 1 8 0a7.7 7.7 0 0 1 5.352 2.082l-2.284 2.284A4.35 4.35 0 0 0 8 3.166c-2.087 0-3.86 1.408-4.492 3.304a4.8 4.8 0 0 0 0 3.063h.003c.635 1.893 2.405 3.301 4.492 3.301 1.078 0 2.004-.276 2.722-.764h-.003a3.7 3.7 0 0 0 1.599-2.431H8v-3.08z"/>
                        </svg>
                        Google
                    </a>
                    <a href="#" class="btn btn-outline-dark btn-lg text-uppercase fs-6 rounded-1 py-4 px-5 mx-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                            <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"/>
                        </svg>
                        Facebook
                    </a>
                </div>
            </div>

            <div class="form-input">
                <label for="" class="text-start border-bottom border-0 w-100 border-dark-subtle">Or Log-in With Email</label>
                <form>
                    <div class="form-input col-lg-12 my-4">
                        <div class="mb-3">
                            <input type="text" class="form-control mb-3 p-4" id="exampleInputEmail1" aria-describedby="nameHelp" placeholder="Your Full Name">
                        </div>
                        <div class="mb-3">
                            <input type="email" class="form-control mb-3 p-4" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Your Email Address">
                        </div>
                        <div class="mb-3">
                            <input type="password" class="form-control mb-3 p-4" id="exampleInputPassword1" placeholder="Set Your Password">
                        </div>
                        <div class="mb-3">
                            <input type="password" class="form-control mb-3 p-4" id="exampleInputPassword1" placeholder="Retype Your Password">
                        </div>
                        <div class="mb-3 form-check d-flex justify-content-between">
                            <div class="">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Remember Me</label>
                            </div>
                            <div class="">
                                <a href="" class="text-primary">Forgot Password</a>
                            </div>
                        </div>
                        <button type="submit" class="text-uppercase w-100 btn btn-lg btn-dark rounded-1 py-4">log in</button>
                    </div>
                </form>
            </div>
            
        </div>
    </div>
    
      
    @endsection