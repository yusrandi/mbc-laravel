    <!--/Horizontal-main -->
    <div class="sticky">
        <div class="horizontal-main hor-menu clearfix">
            <div class="horizontal-mainwrapper container clearfix">
                <!--Nav-->
                <nav class="horizontalMenu clearfix">
                    <ul class="horizontalMenu-list">
                        <li aria-haspopup="true">
                            <a href="{{ url('/') }}" class="sub-icon">
                                <svg class="hor-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24"
                                    width="24">
                                    <path d="M0 0h24v24H0V0z" fill="none" />
                                    <path
                                        d="M19 5v2h-4V5h4M9 5v6H5V5h4m10 8v6h-4v-6h4M9 17v2H5v-2h4M21 3h-8v6h8V3zM11 3H3v10h8V3zm10 8h-8v10h8V11zm-10 4H3v6h8v-6z" />
                                </svg>
                                Dashboard
                            </a>
                        </li>
                        <li aria-haspopup="true">
                            <a href="{{ URL('/' . ($page = '#')) }}" class="">
                                <svg class="hor-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24"
                                    width="24">
                                    <path d="M0 0h24v24H0V0z" fill="none" />
                                    <path
                                        d="M16.66 4.52l2.83 2.83-2.83 2.83-2.83-2.83 2.83-2.83M9 5v4H5V5h4m10 10v4h-4v-4h4M9 15v4H5v-4h4m7.66-13.31L11 7.34 16.66 13l5.66-5.66-5.66-5.65zM11 3H3v8h8V3zm10 10h-8v8h8v-8zm-10 0H3v8h8v-8z" />
                                </svg>
                                Users <i class="fa fa-angle-down horizontal-icon"></i>
                            </a>
                            <ul class="sub-menu">
                                <li aria-haspopup="true"><a href="{{ url('/users/1') }}">
                                        Data
                                        Admin</a>
                                </li>
                                <li aria-haspopup="true"><a href="{{ url('/users/2') }}"> Data
                                        Pendamping</a>
                                </li>
                                <li aria-haspopup="true"><a href="{{ url('/' . ($page = 'peternak')) }}"> Data
                                        Peternak</a>
                                </li>
                            </ul>
                        </li>

                        <li aria-haspopup="true">
                            <a href="{{ url('/' . ($page = '#')) }}" class="sub-icon">
                                <svg class="hor-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24"
                                    width="24">
                                    <path d="M0 0h24v24H0V0z" fill="none" />
                                    <path
                                        d="M8 16h8v2H8zm0-4h8v2H8zm6-10H6c-1.1 0-2 .9-2 2v16c0 1.1.89 2 1.99 2H18c1.1 0 2-.9 2-2V8l-6-6zm4 18H6V4h7v5h5v11z" />
                                </svg>
                                Data Master <i class="fa fa-angle-down horizontal-icon"></i>
                            </a>
                            <ul class="sub-menu">
                                <li aria-haspopup="true"><a href="{{ url('/' . ($page = 'ternak')) }}"> Form
                                        Ternak</a></li>
                                <li aria-haspopup="true"><a href="{{ url('/' . ($page = 'jenis-sapi')) }}">Form
                                        Jenis Sapi</a></li>
                                <li aria-haspopup="true"><a href="{{ url('/' . ($page = 'sapi')) }}">Form
                                        Sapi</a>
                                </li>
                                <li aria-haspopup="true"><a href="{{ url('/' . ($page = 'status-sapi')) }}">Form
                                        Status Sapi</a>
                                </li>
                                <li aria-haspopup="true"><a href="{{ url('/' . ($page = 'strow')) }}">Form
                                        Strow</a>
                                </li>
                            </ul>
                        </li>
                        <li aria-haspopup="true">
                            <a href="{{ url('/' . ($page = '#')) }}" class="sub-icon">
                                <svg class="hor-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24"
                                    width="24">
                                    <path d="M0 0h24v24H0V0z" fill="none" />
                                    <path
                                        d="M11.99 18.54l-7.37-5.73L3 14.07l9 7 9-7-1.63-1.27zM12 16l7.36-5.73L21 9l-9-7-9 7 1.63 1.27L12 16zm0-11.47L17.74 9 12 13.47 6.26 9 12 4.53z" />
                                </svg>
                                Data Monitoring <i class="fa fa-angle-down horizontal-icon"></i>
                            </a>
                            <ul class="sub-menu">
                                <li aria-haspopup="true"><a
                                        href="{{ url('/' . ($page = 'monitoring-periksa-kebuntingan')) }}">
                                        Periksa
                                        Kebuntingan</a></li>
                                <li aria-haspopup="true"><a
                                        href="{{ url('/' . ($page = 'monitoring-performa')) }}">Performa</a>
                                </li>
                                <li aria-haspopup="true"><a
                                        href="{{ url('/' . ($page = 'monitoring-insiminasi-buatan')) }}">Insiminasi
                                        Buatan</a>
                                </li>
                                <li aria-haspopup="true"><a
                                        href="{{ url('/' . ($page = 'monitoring-perlakuan')) }}">Perlakuan</a>
                                </li>
                            </ul>
                        </li>

                        <li aria-haspopup="true">
                            <a href="{{ url('/' . ($page = '#')) }}" class="sub-icon">
                                <svg class="hor-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24"
                                    width="24">
                                    <path d="M0 0h24v24H0V0z" fill="none" />
                                    <path
                                        d="M11.99 18.54l-7.37-5.73L3 14.07l9 7 9-7-1.63-1.27zM12 16l7.36-5.73L21 9l-9-7-9 7 1.63 1.27L12 16zm0-11.47L17.74 9 12 13.47 6.26 9 12 4.53z" />
                                </svg>
                                Pages <i class="fa fa-angle-down horizontal-icon"></i>
                            </a>
                            <ul class="sub-menu">
                                <li aria-haspopup="true" class="sub-menu-sub"><a
                                        href="{{ url('/' . ($page = '#')) }}">Profile</a>
                                    <ul class="sub-menu">
                                        <li aria-haspopup="true"><a href="{{ url('/' . ($page = 'profile-1')) }}">
                                                Profile
                                                01</a></li>
                                        <li aria-haspopup="true"><a
                                                href="{{ url('/' . ($page = 'profile-2')) }}">Profile
                                                02</a></li>
                                        <li aria-haspopup="true"><a
                                                href="{{ url('/' . ($page = 'profile-3')) }}">Profile
                                                03</a></li>
                                    </ul>
                                </li>
                                <li aria-haspopup="true"><a href="{{ url('/' . ($page = 'editprofile')) }}">Edit
                                        Profile</a></li>
                                <li aria-haspopup="true" class="sub-menu-sub"><a
                                        href="{{ url('/' . ($page = '#')) }}">Email</a>
                                    <ul class="sub-menu">
                                        <li aria-haspopup="true"><a
                                                href="{{ url('/' . ($page = 'email-compose')) }}">Email
                                                Compose</a></li>
                                        <li aria-haspopup="true"><a
                                                href="{{ url('/' . ($page = 'email-inbox')) }}">Email
                                                Inbox</a></li>
                                        <li aria-haspopup="true"><a
                                                href="{{ url('/' . ($page = 'email-read')) }}">Email
                                                Read</a></li>
                                    </ul>
                                </li>
                                <li aria-haspopup="true" class="sub-menu-sub"><a
                                        href="{{ url('/' . ($page = '#')) }}">Pricing</a>
                                    <ul class="sub-menu">
                                        <li aria-haspopup="true"><a
                                                href="{{ url('/' . ($page = 'pricing')) }}">Pricing
                                                01</a></li>
                                        <li aria-haspopup="true"><a
                                                href="{{ url('/' . ($page = 'pricing-2')) }}">Pricing
                                                02</a></li>
                                        <li aria-haspopup="true"><a
                                                href="{{ url('/' . ($page = 'pricing-3')) }}">Pricing
                                                03</a></li>
                                    </ul>
                                </li>
                                <li aria-haspopup="true" class="sub-menu-sub"><a
                                        href="{{ url('/' . ($page = '#')) }}">Invoice</a>
                                    <ul class="sub-menu">
                                        <li aria-haspopup="true"><a
                                                href="{{ url('/' . ($page = 'invoice-list')) }}">Invoice list</a>
                                        </li>
                                        <li aria-haspopup="true"><a
                                                href="{{ url('/' . ($page = 'invoice-1')) }}">Invoice
                                                01</a></li>
                                        <li aria-haspopup="true"><a
                                                href="{{ url('/' . ($page = 'invoice-2')) }}">Invoice
                                                02</a></li>
                                        <li aria-haspopup="true"><a
                                                href="{{ url('/' . ($page = 'invoice-3')) }}">Invoice
                                                03</a></li>
                                        <li aria-haspopup="true"><a
                                                href="{{ url('/' . ($page = 'invoice-add')) }}">Add
                                                Invoice</a></li>
                                        <li aria-haspopup="true"><a
                                                href="{{ url('/' . ($page = 'invoice-edit')) }}">Edit
                                                Invoice</a></li>
                                    </ul>
                                </li>
                                <li aria-haspopup="true" class="sub-menu-sub"><a
                                        href="{{ url('/' . ($page = '#')) }}">Blog</a>
                                    <ul class="sub-menu">
                                        <li aria-haspopup="true"><a href="{{ url('/' . ($page = 'blog')) }}">Blog
                                                01</a>
                                        </li>
                                        <li aria-haspopup="true"><a href="{{ url('/' . ($page = 'blog-2')) }}">Blog
                                                02</a>
                                        </li>
                                        <li aria-haspopup="true"><a href="{{ url('/' . ($page = 'blog-3')) }}">Blog
                                                03</a>
                                        </li>
                                        <li aria-haspopup="true"><a
                                                href="{{ url('/' . ($page = 'blog-styles')) }}">Blog
                                                Styles</a></li>
                                    </ul>
                                </li>
                                <li aria-haspopup="true"><a href="{{ url('/' . ($page = 'gallery')) }}">Gallery</a>
                                </li>
                                <li aria-haspopup="true"><a href="{{ url('/' . ($page = 'faq')) }}">FAQS</a></li>
                                <li aria-haspopup="true"><a href="{{ url('/' . ($page = 'terms')) }}">Terms</a></li>
                                <li aria-haspopup="true"><a href="{{ url('/' . ($page = 'search')) }}"> Search</a>
                                </li>
                                <li aria-haspopup="true"><a href="{{ url('/' . ($page = 'empty')) }}">Empty Page</a>
                                </li>
                            </ul>
                        </li>
                        <li aria-haspopup="true">
                            <a href="{{ url('/' . ($page = '#')) }}" class="sub-icon">
                                <svg class="hor-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24"
                                    width="24">
                                    <path d="M0 0h24v24H0V0z" fill="none" />
                                    <path
                                        d="M14.25 2.26l-.08-.04-.01.02C13.46 2.09 12.74 2 12 2 6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10c0-4.75-3.31-8.72-7.75-9.74zM19.41 9h-7.99l2.71-4.7c2.4.66 4.35 2.42 5.28 4.7zM13.1 4.08L10.27 9l-1.15 2L6.4 6.3C7.84 4.88 9.82 4 12 4c.37 0 .74.03 1.1.08zM5.7 7.09L8.54 12l1.15 2H4.26C4.1 13.36 4 12.69 4 12c0-1.85.64-3.55 1.7-4.91zM4.59 15h7.98l-2.71 4.7c-2.4-.67-4.34-2.42-5.27-4.7zm6.31 4.91L14.89 13l2.72 4.7C16.16 19.12 14.18 20 12 20c-.38 0-.74-.04-1.1-.09zm7.4-3l-4-6.91h5.43c.17.64.27 1.31.27 2 0 1.85-.64 3.55-1.7 4.91z" />
                                </svg>
                                Custom Pages<i class="fa fa-angle-down horizontal-icon"></i>
                            </a>
                            <ul class="sub-menu">
                                <li aria-haspopup="true" class="sub-menu-sub"><a
                                        href="{{ url('/' . ($page = '#')) }}">Register</a>
                                    <ul class="sub-menu">
                                        <li aria-haspopup="true"><a
                                                href="{{ url('/' . ($page = 'register-1')) }}">Register 01</a></li>
                                        <li aria-haspopup="true"><a
                                                href="{{ url('/' . ($page = 'register-2')) }}">Register 02</a></li>
                                        <li aria-haspopup="true"><a
                                                href="{{ url('/' . ($page = 'register-3')) }}">Register 03</a></li>
                                    </ul>
                                </li>
                                <li aria-haspopup="true" class="sub-menu-sub"><a
                                        href="{{ url('/' . ($page = '#')) }}">Login</a>
                                    <ul class="sub-menu">
                                        <li aria-haspopup="true"><a href="{{ url('/' . ($page = 'login-1')) }}">Login
                                                01</a></li>
                                        <li aria-haspopup="true"><a href="{{ url('/' . ($page = 'login-2')) }}">Login
                                                02</a></li>
                                        <li aria-haspopup="true"><a href="{{ url('/' . ($page = 'login-3')) }}">Login
                                                03</a></li>
                                    </ul>
                                </li>
                                <li aria-haspopup="true" class="sub-menu-sub"><a
                                        href="{{ url('/' . ($page = '#')) }}">Forget Password</a>
                                    <ul class="sub-menu">
                                        <li aria-haspopup="true"><a
                                                href="{{ url('/' . ($page = 'forgot-password-1')) }}">Forget
                                                Password
                                                01</a></li>
                                        <li aria-haspopup="true"><a
                                                href="{{ url('/' . ($page = 'forgot-password-2')) }}">Forget
                                                Password
                                                02</a></li>
                                        <li aria-haspopup="true"><a
                                                href="{{ url('/' . ($page = 'forgot-password-3')) }}">Forget
                                                Password
                                                03</a></li>
                                    </ul>
                                </li>
                                <li aria-haspopup="true" class="sub-menu-sub"><a
                                        href="{{ url('/' . ($page = '#')) }}">Reset Password</a>
                                    <ul class="sub-menu">
                                        <li aria-haspopup="true"><a
                                                href="{{ url('/' . ($page = 'reset-password-1')) }}">Reset Password
                                                01</a>
                                        </li>
                                        <li aria-haspopup="true"><a
                                                href="{{ url('/' . ($page = 'reset-password-2')) }}">Reset Password
                                                02</a>
                                        </li>
                                        <li aria-haspopup="true"><a
                                                href="{{ url('/' . ($page = 'reset-password-3')) }}">Reset Password
                                                03</a>
                                        </li>
                                    </ul>
                                </li>
                                <li aria-haspopup="true" class="sub-menu-sub"><a
                                        href="{{ url('/' . ($page = '#')) }}">Lock Screen</a>
                                    <ul class="sub-menu">
                                        <li aria-haspopup="true"><a
                                                href="{{ url('/' . ($page = 'lockscreen-1')) }}">Lock
                                                Screen 01</a></li>
                                        <li aria-haspopup="true"><a
                                                href="{{ url('/' . ($page = 'lockscreen-2')) }}">Lock
                                                Screen 02</a></li>
                                        <li aria-haspopup="true"><a
                                                href="{{ url('/' . ($page = 'lockscreen-3')) }}">Lock
                                                Screen 03</a></li>
                                    </ul>
                                </li>
                                <li aria-haspopup="true"><a href="{{ url('/' . ($page = 'construction')) }}">Under
                                        Construction</a></li>
                                <li aria-haspopup="true"><a href="{{ url('/' . ($page = 'coming')) }}">Coming Soon
                                    </a>
                                </li>
                                <li aria-haspopup="true" class="sub-menu-sub"><a
                                        href="{{ url('/' . ($page = '#')) }}">Error Pages</a>
                                    <ul class="sub-menu">
                                        <li aria-haspopup="true"><a href="{{ url('/' . ($page = '400')) }}">400</a>
                                        </li>
                                        <li aria-haspopup="true"><a href="{{ url('/' . ($page = '401')) }}">401</a>
                                        </li>
                                        <li aria-haspopup="true"><a href="{{ url('/' . ($page = '403')) }}">403</a>
                                        </li>
                                        <li aria-haspopup="true"><a href="{{ url('/' . ($page = '404')) }}">404</a>
                                        </li>
                                        <li aria-haspopup="true"><a href="{{ url('/' . ($page = '500')) }}">500</a>
                                        </li>
                                        <li aria-haspopup="true"><a href="{{ url('/' . ($page = '503')) }}">503</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li aria-haspopup="true">
                            <a href="{{ url('/' . ($page = '#')) }}" class="sub-icon">
                                <svg class="hor-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24"
                                    width="24">
                                    <path d="M0 0h24v24H0z" fill="none" />
                                    <path
                                        d="M12 22C6.49 22 2 17.51 2 12S6.49 2 12 2s10 4.04 10 9c0 3.31-2.69 6-6 6h-1.77c-.28 0-.5.22-.5.5 0 .12.05.23.13.33.41.47.64 1.06.64 1.67 0 1.38-1.12 2.5-2.5 2.5zm0-18c-4.41 0-8 3.59-8 8s3.59 8 8 8c.28 0 .5-.22.5-.5 0-.16-.08-.28-.14-.35-.41-.46-.63-1.05-.63-1.65 0-1.38 1.12-2.5 2.5-2.5H16c2.21 0 4-1.79 4-4 0-3.86-3.59-7-8-7z" />
                                    <circle cx="6.5" cy="11.5" r="1.5" />
                                    <circle cx="9.5" cy="7.5" r="1.5" />
                                    <circle cx="14.5" cy="7.5" r="1.5" />
                                    <circle cx="17.5" cy="11.5" r="1.5" />
                                </svg>
                                Icons <i class="fa fa-angle-down horizontal-icon"></i>
                            </a>
                            <ul class="sub-menu">
                                <li aria-haspopup="true"><a href="{{ url('/' . ($page = 'icons')) }}">Font
                                        Awesome</a>
                                </li>
                                <li aria-haspopup="true"><a href="{{ url('/' . ($page = 'icons2')) }}">Material
                                        Design
                                        Icons</a></li>
                                <li aria-haspopup="true"><a href="{{ url('/' . ($page = 'icons3')) }}">Simple Line
                                        Icons</a></li>
                                <li aria-haspopup="true"><a href="{{ url('/' . ($page = 'icons4')) }}">Feather
                                        Icons</a>
                                </li>
                                <li aria-haspopup="true"><a href="{{ url('/' . ($page = 'icons5')) }}">Ionic
                                        Icons</a>
                                </li>
                                <li aria-haspopup="true"><a href="{{ url('/' . ($page = 'icons6')) }}">Flag
                                        Icons</a></li>
                                <li aria-haspopup="true"><a href="{{ url('/' . ($page = 'icons7')) }}">pe7 Icons</a>
                                </li>
                                <li aria-haspopup="true"><a href="{{ url('/' . ($page = 'icons8')) }}">Themify
                                        Icons</a>
                                </li>
                                <li aria-haspopup="true"><a href="{{ url('/' . ($page = 'icons9')) }}">Typicons
                                        Icons</a>
                                </li>
                                <li aria-haspopup="true"><a href="{{ url('/' . ($page = 'icons10')) }}">Weather
                                        Icons</a>
                                </li>
                                <li aria-haspopup="true"><a href="{{ url('/' . ($page = 'icons11')) }}">Material
                                        Svgs</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <!--Nav-->
            </div>
        </div>
    </div>
    <!--/Horizontal-main -->
