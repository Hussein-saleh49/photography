 <main class="mb-5">
     <div class="container">
         <div class="row justify-content-center">
             <div class="col-lg-5">
                 <div class="card shadow-lg border-0 rounded-lg mt-5 auth-form">
                     <div class="card-header ">
                         <h3 class="text-center text-light font-weight-light my-4"><i class="fa fa-lock"></i> Login</h3>
                     </div>
                     <div class="card-body ">
                         <form wire:submit.prevent="submit">
                             <div class="form-floating mb-3 ">
                                 <input wire:model="form.email" class="form-control" id="inputEmail" type="email" />
                                 <label for="inputEmail">Email address</label>
                                 @error("form.email")
                                     <span class="text-danger">{{ $message }}</span>
                                 @enderror
                             </div>
                             <div class="form-floating mb-3">
                                 <input wire:model="form.password" class="form-control" id="inputPassword"
                                     type="password" />
                                 <label for="inputPassword">Password</label>
                                   @error("form.password")
                                     <span class="text-danger">{{ $message }}</span>
                                 @enderror
                             </div>
                             <div class="form-check mb-3">
                                 <input wire:model="form.remember" class="form-check-input" id="inputRememberPassword"
                                     type="checkbox" value="" />
                                 <label class="form-check-label" for="inputRememberPassword">Remember Password</label>
                                   @error("form.remember")
                                     <span class="text-danger">{{ $message }}</span>
                                 @enderror
                             </div>
                             <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                 <a class="small" href="{{ route("admin.Forgot-password") }}">Forgot Password?</a>
                                 <button type="submit" class="btn btn-transparent-green text-primary">Login</button>
                             </div>
                         </form>
                     </div>
                     {{-- <div class="card-footer text-center py-3">
                         <div class="small"><a href="{{ route("admin.register") }}">Need an account? Sign up!</a></div>
                     </div> --}}
                 </div>
             </div>
         </div>
     </div>
 </main>
