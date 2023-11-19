<!DOCTYPE html>
<html lang="zxx" class="js">
<head>
    <meta charset="utf-8" />
    <meta name="author" content="Softnio" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers." />
    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}" />
    <title>Registration</title>
    <link rel="stylesheet" href="{{ asset('assets/css/dashlite.css') }}" />
    <link id="skin-default" rel="stylesheet" href="{{ asset('assets/css/theme.css') }}" />
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-91615293-4"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() {
            dataLayer.push(arguments);
        }
        gtag("js", new Date());
        gtag("config", "UA-91615293-4");
    </script>
</head>
<body class="nk-body bg-white npc-default pg-auth">
<div class="nk-app-root">
    <div class="nk-main">
        <div class="nk-wrap nk-wrap-nosidebar">
            <div class="nk-content">
                <div class="nk-split nk-split-page nk-split-md">
                    <div class="nk-split-content nk-block-area nk-block-area-column nk-auth-container bg-white w-lg-45">
                        <div class="nk-block nk-block-middle nk-auth-body">
                            <div class="brand-logo pb-5">
                                <a href="{{ route('home') }}" class="logo-link">
                                    <h3>eduApp</h3>
                                </a>
                            </div>
                            <div class="nk-block-head">
                                <div class="nk-block-head-content">
                                    <h5 class="nk-block-title">Register</h5>
                                    <div class="nk-block-des"><p>Create New eduApp Account</p></div>
                                </div>
                            </div>
                            @if($errors->any())
                                {!! implode('', $errors->all('<div class="text-danger">:message</div>')) !!}
                            @endif
                            <form action="{{ route('register') }}" method="post" role="form">
                                @csrf
                                <div class="row gy-4 mb-3">
                                    <div class="col-md-6">
                                        <div class="form-group"><label class="form-label" for="full-name">First Name</label><input type="text" class="form-control" name="first_name" placeholder="First name" /></div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group"><label class="form-label" for="display-name">Last Name</label><input type="text" class="form-control" name="last_name" placeholder="Last name" /></div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="name">Email Address</label>
                                    <div class="form-control-wrap"><input type="email" name="email"  class="form-control form-control-lg" placeholder="Email Address" /></div>
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="phone-no">Phone Number</label>
                                    <input type="text" class="form-control" name="phone" value="+880" placeholder="Phone Number" />
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="password">Passcode</label>
                                    <div class="form-control-wrap">
                                        <a tabindex="-1" href="#" class="form-icon form-icon-right passcode-switch lg" data-target="password">
                                            <em class="passcode-icon icon-show icon ni ni-eye"></em><em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
                                        </a>
                                        <input type="password" class="form-control form-control-lg" name="password" placeholder="Enter your passcode" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="thumb">Status</label>
                                    <div class="form-control-wrap">
                                        <ul class="custom-control-group g-3 align-center flex-wrap">
                                            <li>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" class="custom-control-input" checked name="role" value="student" id="reg-enable" /><label class="custom-control-label" for="reg-enable">Student</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" class="custom-control-input" name="role" value="instructor" id="reg-disable" /><label class="custom-control-label" for="reg-disable">Instructor</label>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="custom-control custom-control-xs custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="checkbox" />
                                        <label class="custom-control-label" for="checkbox">I agree to eduApp <a tabindex="-1" href="#">Privacy Policy</a> &amp; <a tabindex="-1" href="#"> Terms.</a></label>
                                    </div>
                                </div>
                                <div class="form-group"><button class="btn btn-lg btn-primary btn-block" type="submit">Register</button></div>
                            </form>
                            <div class="form-note-s2 pt-4">
                                Already have an account ? <a href="{{ route('home') }}"><strong>Sign in instead</strong></a>
                            </div>
                        </div>
                        <div class="nk-block nk-auth-footer">
                            <div class="mt-3"><p>&copy; 2023 eduApp. All Rights Reserved.</p></div>
                        </div>
                    </div>
                    <div class="nk-split-content nk-split-stretch bg-abstract"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="{{ asset('assets/js/bundle.js') }}"></script>
<script src="{{ asset('assets/js/scripts.js') }}"></script>
</body>
</html>
