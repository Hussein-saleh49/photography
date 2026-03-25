  <main class="mb-5">
      <div class="container">
          <div class="row justify-content-center">
              <div class="col-lg-5">
                  <div class="card shadow-lg border-0 rounded-lg mt-5 auth-form">
                      <div class="card-header ">
                          <h3 class="text-center text-light font-weight-light my-4"><i class="fa fa-lock-open"></i>
                              Reset Password</h3>
                      </div>
                      <div class="card-body ">
                          <form wire:submit.prevent="submit">
                              <div class="form-floating mb-3 ">
                                  <input wire:model="email" name="email" class="form-control" id="inputEmail" type="email" />
                                  <label for="inputEmail">Email</label>
                                  @error("email")
                                      <span class="text-danger">{{ $message }}</span>
                                  @enderror
                              </div>
                              <div class="form-floating mb-3 ">
                                  <input wire:model="password" name="password" class="form-control" id="inputEmail" type="password" placeholder="password" />
                                  <label for="inputEmail">New Password</label>
                                   @error("password")
                                      <span class="text-danger">{{ $message }}</span>
                                  @enderror
                              </div>
                              <div class="form-floating mb-3 ">
                                  <input wire:model="password_confirmation" name="password_confirmation" class="form-control" id="inputConfirm" type="password"
                                      placeholder="password" />
                                  <label for="inputConfirm">Confirmation Password</label>
                                   @error("password_confirmation")
                                      <span class="text-danger">{{ $message }}</span>
                                  @enderror
                              </div>
                              <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                  <div></div>
                                  <button type="submit" class="btn btn-transparent-green text-primary"><i
                                          class="fa fa-paper-plane"></i> Update</button>
                              </div>
                          </form>
                      </div>
                      <div class="card-footer text-center py-3">
                          <div class="small"><a href="{{ route("admin.login") }}">Login!</a></div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </main>
