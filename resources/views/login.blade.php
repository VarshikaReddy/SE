<!DOCTYPE html>
<html lang="zxx" class="js">
<head>
    <meta charset="utf-8" />
    <meta name="author" content="Softnio" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers." />
    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}" />
    <title>Login</title>
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
                    <div class="nk-split-content nk-block-area nk-block-area-column nk-auth-container bg-white">
                        <div class="nk-block nk-block-middle nk-auth-body">
                            <div class="brand-logo pb-5">
                                <a href="/demo2/index.html" class="logo-link">
                                    <h3>eduApp</h3>
                                </a>
                            </div>
                            <div class="nk-block-head">
                                <div class="nk-block-head-content">
                                    <h5 class="nk-block-title">Sign-In</h5>
                                    <div class="nk-block-des"><p>Access the eduApp panel using your email and passcode.</p></div>
                                </div>
                            </div>
                            @if(session('success'))
                                <div class="text-success mb-2">{{ session('success') }}</div>
                            @endif

                            @if(session('error'))
                                <div class="text-danger mb-2">{{ session('error') }}</div>
                            @endif

                            <form action="{{ route('login') }}" method="post" role="form">
                                @csrf
                                <div class="form-group">
                                    <div class="form-label-group"><label class="form-label" for="default-01">Email</label></div>
                                    <div class="form-control-wrap"><input type="text" class="form-control form-control-lg" name="email" placeholder="Enter your email address or username" /></div>
                                </div>
                                <div class="form-group">
                                    <div class="form-label-group">
                                        <label class="form-label" for="password">Passcode</label>
                                    </div>
                                    <div class="form-control-wrap">
                                        <a tabindex="-1" href="#" class="form-icon form-icon-right passcode-switch lg" data-target="password">
                                            <em class="passcode-icon icon-show icon ni ni-eye"></em><em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
                                        </a>
                                        <input type="password" class="form-control form-control-lg" name="password" placeholder="Enter your passcode" />
                                    </div>
                                </div>
                                <div class="form-group"><button class="btn btn-lg btn-primary btn-block">Sign in</button></div>
                            </form>
                            <div class="form-note-s2 pt-4">New on our platform? <a href="{{ route('signup') }}">Create an account</a></div>
                            <div class="text-center mt-5">
                                <span class="fw-500">I don't have an account? <a href="{{ route('signup') }}">Try it now</a></span>
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
<script src="{{ asset('assets/js/demo-settings.js') }}"></script>
</body>
</html>
