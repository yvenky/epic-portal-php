@extends('backend.inc.master')

@section('main-content')


<section class="panel-wrapper panel-center">
    <div class="form-wrapper">
        <div class="form-heading details-view-edit-wrap">
            <h6>Investor Details</h6>
            <a href="{{url('investor-list-edit/'.$lists->id)}}" title="Edit Investor"><i class="fa fa-edit"></i></a>
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
                <p>{{$lists->partner_individual_street}}</p>
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

            <div class="form-btn-flex-between pt-2">
                <button type="button" class="form-cancel-btn"><a href="{{url('investor-list')}}" style="color:black">Home</a></button>
                 <button type="button" class="form-submit-btn"><a href="{{url('new-partner-registration')}}" style="color:black">Add New Investor</a></button>
             </div>

        </div>
    </div>  
   
</section>
@endsection