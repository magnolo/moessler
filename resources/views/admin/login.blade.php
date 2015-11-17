@extends('admin.layouts.master')
@section('title', 'Anmelden')
@section('content')
<div id="wrap" class="animsition">
    <div class="page page-core page-login">

        <div class="text-center"><h3 class="text-light text-white"><span class="text-lightred">LAB</span>yrinth</h3><small  class="text-light text-white">by Manfred Walder</small></div>

        <div class="container w-420 p-15 bg-white mt-40 text-center">


            <h2 class="text-light text-greensea">Log In</h2>

            <form name="form" class="form-validation mt-20" novalidate="">

                <div class="form-group">
                    <input type="email" class="form-control underline-input" placeholder="Email">
                </div>

                <div class="form-group">
                    <input type="password" placeholder="Password" class="form-control underline-input">
                </div>

                <div class="form-group text-left mt-20">
                    <a href="index.html" class="btn btn-greensea b-0 br-2 mr-5">Anmelden</a>
                    <label class="checkbox checkbox-custom-alt checkbox-custom-sm inline-block">
                        <input type="checkbox"><i></i> Angemeldet bleiben
                    </label>
                    <a href="/admin/passwort-vergessen" class="pull-right mt-10">Passwort vergessen?</a>
                </div>

            </form>

        </div>
        <div class="text-center mt-40"><small class="text-light text-white">&copy; 2015 by Manfred Walder</small></div>
    </div>
</div>
@stop
