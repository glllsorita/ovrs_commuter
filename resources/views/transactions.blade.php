@extends('layouts.main') 
{{-- @extends('layouts.app') --}}


@section('content')


<!-- Main Section -->
    <main  class="l-main">

		<div style="padding-top: 4.5rem;">
			<x-search-component/>
		</div>

    	 <! -- No Booking -->
		<section class="no-bookings section bd-container">

			<center>
				<img src="{{ asset('assets/nothing.svg') }}" width="220" height="220" class="no-bookings-img">
			</center>
			<center>
				<span class="dashboard-subtitle-no-bookings">You have no upcoming bookings</span>
				<p class="bookings-description">Find the best trip for you</p>
				<a href="#transaction" class="button">Book now</a>
			</center>
		</section>
    </main>

@endsection