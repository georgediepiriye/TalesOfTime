
<x-guest-layout>
    <main style="padding-top: 20px;">
        <div class="container-fluid">
            <div class="row no-gutter">
              <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image"></div>
              <div class="col-md-8 col-lg-6">
                <div class="login">
                  <div class="container">
                    <div class="row">
                      <div class="col-md-9 col-lg-8 mx-auto">
                        <h3 class="login-heading mb-4">Create an account</h3>
                        <x-jet-validation-errors class="validation-errors" />
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="form-label-group">
                                <label for="inputName">Name</label>
                                <input type="text" id="inputName" name="name" class="form-control" value="{{ old('name') }}" placeholder="Your name" required autofocus autocomplete="name">
                                
                            </div>
    
    
                          <div class="form-label-group">
                            <label for="inputEmail">Email address</label>
                            <input type="email" id="inputEmail" name="email" class="form-control" value="{{ old('email') }}" placeholder="Email address" required autofocus>
                           
                          </div>
          
                          <div class="form-label-group">
                            <label for="inputPassword">Password</label>
                            <input type="password" id="inputPassword" name="password" class="form-control" placeholder="*********" required autocomplete="new-password">
                            
                          </div>
    
                          <div class="form-label-group">
                            <label for="inputConfirmPassword">Confirm Password</label>
                            <input type="password" id="inputConfirmPassword" name="password_confirmation" class="form-control" placeholder="********" required autocomplete="new-password">
                            
                          </div>
                          <button style="margin-top: 10px;" class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2" type="submit">Register</button>
                          
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          

    </main>
    

</x-guest-layout>