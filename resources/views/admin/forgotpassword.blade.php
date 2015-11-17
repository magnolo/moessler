@extends('admin.layouts.master')
@section('title', 'Passwort vergessen')
@section('content')
<div id="wrap" class="animsition">
            <div class="page page-core page-login">
              <div class="text-center"><h3 class="text-light text-white"><span class="text-lightred">LAB</span>yrinth</h3><small  class="text-light text-white">by Manfred Walder</small></div>
                <div class="container w-420 p-15 bg-white mt-40 text-center">

                    <h2 class="text-light text-greensea">Passwort vergessen?</h2>

                    <form name="form" class="form-validation mt-20">
                        <p class="help-block text-left">

                            Gib hier deine E-mailadresse ein und wir senden dir ein neues Passwort.
                        </p>
                        <div class="form-group">
                            <input type="email" class="form-control underline-input" placeholder="E-mail Adresse">
                        </div>
                    </form>
                    <div class="bg-slategray lt wrap-reset mt-40 text-left">
                        <p class="m-0">
                            <a href="/admin/reset-password" class="btn btn-greensea b-0 text-uppercase pull-right">Los</a>
                            <a href="/admin/login" class="btn btn-lightred b-0 text-uppercase">Zurück</a>
                        </p>
                    </div>
                </div>
                <div class="text-center mt-40"><small class="text-light text-white">&copy; 2015 by Manfred Walder</small></div>
            </div>
        </div>
@stop
