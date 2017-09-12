@extends("layouts/default")

@section("head")
    <title>InvoicePlz | Sign In</title>
    <style>
    </style>
@stop

@section("content")
    <div class="wrap v-center">
        <div class="container content-main-authentication">
            <div class="login-container z-depth-1">
                <div class="avatar">
                    <img src="{{ asset('assets/img/avatar-alt.png') }}" width="150" height="150">
                </div>
                <hr><br>
                <div class="form-box">
                    <form id="signin" method="post">
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="username" name="username" type="text" data-parsley-required="true" data-parsley-trigger="change">
                                <label for="username" class="label-validation">Email</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="password" name="password" type="password" data-parsley-required="true" data-parsley-trigger="change">
                                <label for="password" class="label-validation">Password</label>
                            </div>
                        </div>
                        <div class="rembme switch">
                            <label>
                                <input type="checkbox" name="remember">
                                <span class="lever"></span>Remember</label>
                        </div>
                        {{ csrf_field() }}
                        <button id="signin-btn" class="btn btn-link waves-effect waves-light full-width" type="submit" name="action">Sign In</button>
                    </form>
                    <br>
                    <a href="{{ route("forgot") }}">Forgot Password?</a>
                </div>
            </div>
        </div>
    </div>
@stop

@section("scripts")
    <script>
        "use strict";
        $(function() {
            $('#signin').parsley({
                successClass: 'valid',
                errorClass: 'invalid',
                errorsContainer: function (velem) {
                    var $errelem = velem.$element.siblings('label');
                    $errelem.attr('data-error', window.Parsley.getErrorMessage(velem.validationResult[0].assert));
                    return true;
                },
                errorsWrapper: '',
                errorTemplate: ''
            })
                .on('field:validated', function(velem) {

                })
                .on('field:success', function(velem) {

                })
                .on('field:error', function(velem) {

                });
        });
    </script>
@stop