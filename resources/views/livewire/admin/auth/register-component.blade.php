<main class="mb-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="card shadow-lg border-0 rounded-lg mt-5 auth-form">
                    <div class="card-header">
                        <h3 class="text-center font-weight-light my-4 text-light"><i class="fas fa-user-lock"></i>
                            Register</h3>
                    </div>
                    <div class="card-body">
                        <form wire:submit.prevent="submit">
                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input wire:model="name" class="form-control" id="inputFirstName" type="text"
                                            placeholder="Enter your name" />
                                        <label for="inputFirstName">Name</label>
                                        @error('name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                            </div>
                            <div class="form-floating mb-3">
                                <input wire:model="email" class="form-control" id="inputEmail" type="email" />
                                <label for="inputEmail">Email address</label>
                                @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input wire:model="password" class="form-control" id="inputPassword"
                                            type="password" placeholder="Create a password" />
                                        <label for="inputPassword">Password</label>
                                        @error('password')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input wire:model="password_confirmation" class="form-control"
                                            id="inputPasswordConfirm" type="password" placeholder="Confirm password" />
                                        <label for="inputPasswordConfirm">Confirm Password</label>
                                        @error('password_confirmation')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="mt-4 mb-0">
                                <div class="d-grid"><button type="submit"
                                        class="btn btn-block btn-transparent-green text-primary">Create Account</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer text-center py-3">
                        <div class="small"><a href="{{ route("admin.login") }}">Have an account? Go to login</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
