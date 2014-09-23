@extends('layouts.default')

@section('title')
<title>Home</title>
@stop

{{-- Content --}}
@section('container')

<div class="header">
    <h1>18th Century Name Generator</h1>
</div>

<div ng-controller="generatorCtrl" class="generator">

    <div class="generator-container vert-text">

        <div class="generator-panel panel">
            <h3>@{{ name }}</h3>
        </div>

        <div class="generator-form">

            <button type="submit" class="btn btn-primary btn-lg btn-block" ng-click="getName(gender)">Generate</button>

            <label class="radio-inline">
              <input type="radio" ng-model="gender" name="inlineRadioOptions" value="Male"> Male
            </label>
            <label class="radio-inline">
              <input type="radio" ng-model="gender" name="inlineRadioOptions" value="Female"> Female
            </label>

        </div>

    </div>

</div>

@stop
