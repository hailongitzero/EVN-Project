<?php
/**
 * Created by PhpStorm.
 * User: HaiLong
 * Date: 9/1/2017
 * Time: 2:03 PM
 */?>
<div class="apps-container-wrap page-container widget-page">
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="page-banner">
                    <div class="banner-logo-block">
                        <a href="login.html#">
                            <img src="resources/assets/images/logo-vertical.png" alt="img">
                        </a>
                    </div>
                </div>
            </div>
            <div class="widget-form-block">
                <div class="box-widget">
                    <div class="panel-default">
                        <div class="widget-block-title">
                            <h3>Login to Admin</h3>
                            <p>Please enter your credentials to login.</p>
                        </div>
                        <div class="form-block">
                            <form class="form-login" method="POST" action="{{ route('login') }}">
                                {{ csrf_field() }}
                                <div class="form-group row">
                                    <div class="col-md-12 {{ $errors->has('username') ? ' has-error' : '' }}">
                                        <input type="text" class="form-control" id="username" name="username" placeholder="User Name" value="{{ old('username') }}" required autofocus>
                                        @if ($errors->has('username'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('username') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-12 {{ $errors->has('password') ? ' has-error' : '' }}">
                                        <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                                        @if ($errors->has('password'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group row form-check-row">
                                    <div class="col-md-6">
                                        <div class="form-check">
                                            <label class="custom-control custom-checkbox">
                                                <input type="checkbox" name="remember" class="custom-control-input"{{ old('remember') ? 'checked' : '' }}>
                                                <span class="custom-control-indicator"></span>
                                                <span class="custom-control-description">Remember Me</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="forgot-link-block">
                                            <a href="login" class="forgot-link">Forget Password?</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row last">
                                    <div class="col-md-12">
                                        <div class="form-btn-block">
                                            <button type="submit" class="btn btn-raised btn-primary waves-effect waves-light btn-block">Login</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div><!-- panel -->
                </div>
            </div>
        </div>
    </div>
</div>
