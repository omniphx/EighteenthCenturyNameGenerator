@extends('layouts.default')

@section('title')
<title>18th Century Names</title>
<meta name="description=" content="A website for generating 18th century English names">
<meta property="og:site_name" content="18th Century Names"/>
<meta property="og:description" content="A website for generating 18th century English names"/>
<meta property="og:locale" content="en_US"/>
<meta property="og:url" content="http://18thCenturyNames.com" />
<meta property="og:image" content="http://18thCenturyNames.com/assets/img/Salon_de_Madame_Geoffrin_1200x630.jpg" />
<meta property="og:title" content="Generate 18th Century Names"/>
@stop

{{-- Content --}}
@section('container')

<div ng-controller="generatorCtrl" class="generator vert-text">

        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">

                    <h1>18th Century Names</h1>
                    <hr>

                    <button type="submit" class="btn btn-primary btn-lg" ng-click="getName(gender)">Generate Name</button>

                    <div class="generator-form">
                        <label class="radio-inline">
                          <input type="radio" ng-model="gender" name="inlineRadioOptions" value="Male"> Male
                        </label>
                        <label class="radio-inline">
                          <input type="radio" ng-model="gender" name="inlineRadioOptions" value="Female"> Female
                        </label>
                    </div>

                    <br>

                    <div class="panel">
                        <h2>@{{ name }}</h2>
                    </div>
                    
                    <div class="generator-share" id="darkbox">
                        <h4>Love it?</h4>
                        @include('layouts.social.shareicons')
                    </div>
                    

                </div>
            </div>

    </div>

</div>

@stop
