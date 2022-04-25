@extends('backend.inc.master')

@section('main-content')
<!--// Main Area Start //-->
<section class="panel-wrapper panel-center">
    @if(Session::has('success-message')) 
    <div class="alert alert-success" role="alert">
        {{Session::get('success-message')}}
      </div>
     @endif 
    <div class="form-wrapper">
        <div class="form-heading">
            <h6>Investor Details</h6>
        </div>
        <div class="form-content">
            <div class="form-flex-box-text-item">
                <span>Full Name</span>
                <p>{{$lists->partner_individual_first_name.' '.$lists->partner_individual_last_name}}</p>
            </div>
            <div class="form-flex-box-text-item">
                <span>Employment Status</span>
                <p>{{$lists->partner_individual_employment_status}}</p>
            </div>
            <div class="form-flex-box-text-item">
                <span>Household Income</span>
                <p>{{$lists->partner_individual_household_income}}</p>
            </div>
            <div class="form-flex-box-text-item">
                <span>Email Address</span>
                <p>{{$lists->partner_individual_email_address}}</p>
            </div>
        </div>

        <div class="form-heading top-border">
            <h6>Investor Spouse  Details</h6>
        </div>
        <div class="form-content">
            <div class="form-flex-box-text-item">
                <span>Spouse Full Name</span>
                <p>{{$lists->partner_individual_spouse_first_name.' '.$lists->partner_individual_spouse_last_name}}</p>
            </div>
            <div class="form-flex-box-text-item">
                <span>Spouse Employment Status</span>
                <p>{{$lists->partner_individual_employment_status_spouse}}</p>
            </div>
            <div class="form-flex-box-text-item">
                <span>Spouse Email Address</span>
                <p>{{$lists->partner_individual_spouse_email_address}}</p>
            </div>
            
        </div>
        <div class="form-heading top-border">
            <h6>Investor Address  Details</h6>
        </div>
        <div class="form-content">
            <div class="form-flex-box-text-item">
                <span>Street</span>
                <p>{{$lists->partner_individual_street }}</p>
            </div>
            <div class="form-flex-box-text-item">
                <span>State</span>
                <p>{{$lists->partner_individual_state }}</p>
            </div>
            <div class="form-flex-box-text-item">
                <span>City</span>
                <p>{{$lists->partner_individual_city}}</p>
            </div>
            <div class="form-flex-box-text-item">
                <span>Zipcode</span>
                <p>{{$lists->partner_individual_zip_code}}</p>
            </div>
        </div>
      
    </div>
</section>

@endsection