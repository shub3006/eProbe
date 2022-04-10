

















<main class="py-4">
        <div class="container">
    <!--Section: Content-->
    <section>
        <div class="row">
            <div class="col-md-8 mb-5 mb-md-0">
                                <div class="card mb-5">
                    <div class="card-header py-3">
                        <strong>Edit profile</strong>
                    </div>
                    <div class="card-body text-center">
                        <div class="mb-3">
                            <strong>Profile photo</strong>
                        </div>

                        <form method="POST" action="http://admin-dashboard-php-laravel.mdbgo.io/profile/170">
                            <input type="hidden" name="_method" value="PUT">                            <input type="hidden" name="_token" value="0sv6XXHLWKdR2p7BrenZgNnd7WtveJbaoiDOREP8">                            <div class="d-flex justify-content-center mb-5">
                                <img class="rounded-circle shadow-1 mb-3" src="https://mdbootstrap.com/img/new/avatars/1.jpg" alt="avatar" style="width: 150px;">
                            </div>

                            <div class="form-outline mb-5">
                                <input type="text" id="username" name="username" class="form-control active" value="admin">
                                                                <label class="form-label" for="username" style="margin-left: 0px;">Username</label>
                            <div class="form-notch"><div class="form-notch-leading" style="width: 9px;"></div><div class="form-notch-middle" style="width: 66.4px;"></div><div class="form-notch-trailing"></div></div></div>

                            <div class="form-outline mb-5">
                                <input readonly="" type="email" id="email" name="email" class="form-control active" value="admin123@gmail.com">
                                                                <label class="form-label" for="email" style="margin-left: 0px;">Email</label>
                            <div class="form-notch"><div class="form-notch-leading" style="width: 9px;"></div><div class="form-notch-middle" style="width: 39.2px;"></div><div class="form-notch-trailing"></div></div></div>

                            <div class="form-outline mb-5">
                                <input type="text" id="avatar" name="avatar" class="form-control active" value="https://mdbootstrap.com/img/new/avatars/1.jpg">
                                                                <label class="form-label" for="username" style="margin-left: 0px;">Avatar</label>
                            <div class="form-notch"><div class="form-notch-leading" style="width: 9px;"></div><div class="form-notch-middle" style="width: 44.8px;"></div><div class="form-notch-trailing"></div></div></div>

                            <button type="submit" class="btn btn-primary mb-2">
                                Update profile
                            </button>
                        </form>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header py-3"><strong>Change password</strong></div>
                    <div class="card-body text-center pt-4">

                        <form method="POST" action="http://admin-dashboard-php-laravel.mdbgo.io/password/170">
                            <input type="hidden" name="_method" value="PUT">                            <input type="hidden" name="_token" value="0sv6XXHLWKdR2p7BrenZgNnd7WtveJbaoiDOREP8">                            <div class="form-outline mb-5">
                                <input type="password" id="current-password" name="current_password" class="form-control ">
                                                                <label class="form-label" for="current-password" style="margin-left: 0px;">Current password</label>
                            <div class="form-notch"><div class="form-notch-leading" style="width: 9px;"></div><div class="form-notch-middle" style="width: 108.8px;"></div><div class="form-notch-trailing"></div></div></div>

                            <div class="form-outline mb-5">
                                <input type="password" id="new-password" name="new_password" class="form-control ">
                                                                <label class="form-label" for="new-password" style="margin-left: 0px;">New password</label>
                            <div class="form-notch"><div class="form-notch-leading" style="width: 9px;"></div><div class="form-notch-middle" style="width: 92.8px;"></div><div class="form-notch-trailing"></div></div></div>

                            <div class="form-outline mb-5">
                                <input type="password" id="password-confirmation" name="new_password_confirmation" class="form-control ">
                                                                <label class="form-label" for="password-confirmation" style="margin-left: 0px;">Confirm new password</label>
                            <div class="form-notch"><div class="form-notch-leading" style="width: 9px;"></div><div class="form-notch-middle" style="width: 138.4px;"></div><div class="form-notch-trailing"></div></div></div>

                            <button type="submit" class="btn btn-primary mb-2">Apply</button>
                        </form>

                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-5 mb-md-0">
                <div class="card">
                    <div class="card-body text-center">

                        <img class="rounded-circle shadow-1 mb-3" src="https://mdbootstrap.com/img/new/avatars/1.jpg" alt="avatar" style="width: 150px;">

                        <p class="mb-1"><strong>John Doe</strong></p>
                        <p class="mb-2"><small>Founder</small></p>
                        <p class="mb-2 text-muted">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quia deserunt pariatur voluptatem consequuntur! Aliquid, placeat nobis odit delectus ad est, nemo repudiandae possimus repellendus voluptas debitis, numquam modi asperiores beatae?</p>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Section: Content-->
</div>
    </main>