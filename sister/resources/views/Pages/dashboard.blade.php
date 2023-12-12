@extends('Partials.navbar')

<div class="container mt-5 pt-5">
    <div class="row">
        <div class="card text-center mb-3">
            <div class="card-header">              
            </div>
            <div class="card-body">
              <h5 class="card-title mb-4">Buy Films</h5>
              <a href="{{ route('film.home') }}" class="btn btn-primary">Get Started</a>
            </div>
            <div class="card-footer text-body-secondary">            
            </div>
          </div>
          
        <div class="card text-center">
            <div class="card-header">              
            </div>
            <div class="card-body">
              <h5 class="card-title mb-4">Buy Games</h5>              
              <a href="{{ route('game.home') }}" class="btn btn-primary">Get Started</a>
            </div>
            <div class="card-footer text-body-secondary">              
            </div>
          </div>
    </div>
</div>
