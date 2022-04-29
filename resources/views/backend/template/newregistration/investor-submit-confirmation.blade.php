@extends('backend.inc.master')

@section('main-content')
<!--// Main Area Start //-->
<section class="panel-wrapper panel-center">
    <div class="form-wrapper">
    @if(Session::has('success-message')) 
    <div class="alert alert-success" role="alert">
        {{Session::get('success-message')}}
      </div>
     @endif 
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
                @if( $lists->partner_individual_employment_status ==  "SE" )
                    <p>Self Employed</p>
                @elseif( $lists->partner_individual_employment_status ==  "W2" ) 
                    <p>W2</p>
                @elseif( $lists->partner_individual_employment_status ==  "HM" )
                    <p>Home Maker</p>
                @endif
            </div>
            <div class="form-flex-box-text-item">
                <span>Household Income</span>
                @if( $lists->partner_individual_household_income ==  "0" )
                    <p>Upto 100000</p>
                @elseif( $lists->partner_individual_household_income ==  "1" ) 
                    <p>100000 to 200000</p>
                @elseif( $lists->partner_individual_household_income ==  "2" )
                    <p>200K to 300K</p>
                @elseif( $lists->partner_individual_household_income ==  "3" )
                    <p>300K to 400K</p>
                @elseif( $lists->partner_individual_household_income ==  "4" )
                    <p>400K to 500K</p>
                @elseif( $lists->partner_individual_household_income ==  "5" )
                    <p>More Than 500K</p>
                @endif
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
                @if( $lists->partner_individual_employment_status_spouse ==  "SE" )
                    <p>Self Employed</p>
                @elseif( $lists->partner_individual_employment_status_spouse ==  "W2" ) 
                    <p>W2</p>
                @elseif( $lists->partner_individual_employment_status_spouse ==  "HM" )
                    <p>Home Maker</p>
                @endif
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
                <span>City</span>
                <p>{{$lists->partner_individual_city}}</p>
            </div>
            <div class="form-flex-box-text-item">
                <span>State</span>
                @if( $lists->partner_individual_state ==  "AA" )
                    <p>Armed Forces America</p>
                @elseif( $lists->partner_individual_state ==  "AE" ) 
                    <p>Armed Forces</p>
                @elseif( $lists->partner_individual_state ==  "AK" )
                    <p>Alaska</p>
                @elseif( $lists->partner_individual_state ==  "AL" )
                    <p>Alabama</p>
                @elseif( $lists->partner_individual_state ==  "AP" )
                    <p>Armed Forces Pacific</p>
                @elseif( $lists->partner_individual_state ==  "AR" )
                    <p>Arkansas</p>
                @elseif( $lists->partner_individual_state ==  "AZ" )
                    <p>Arizona</p>
                @elseif( $lists->partner_individual_state ==  "CA" )
                    <p>California</p>
                @elseif( $lists->partner_individual_state ==  "CO" )
                    <p>Colorado</p>
                @elseif( $lists->partner_individual_state ==  "CT" )
                    <p>Connecticut</p>
                @elseif( $lists->partner_individual_state ==  "DC" )
                    <p>Washington DC</p>
                @elseif( $lists->partner_individual_state ==  "DE" )
                    <p>Delaware</p>
                @elseif( $lists->partner_individual_state ==  "FL" )
                    <p>Florida</p>
                @elseif( $lists->partner_individual_state ==  "GA" )
                    <p>Georgia</p>
                @elseif( $lists->partner_individual_state ==  "GU" )
                    <p>Guam</p>
                @elseif( $lists->partner_individual_state ==  "HI" )
                    <p>Hawaii</p>
                @elseif( $lists->partner_individual_state ==  "IA" )
                    <p>Iowa</p>
                @elseif( $lists->partner_individual_state ==  "ID" )
                    <p>Idaho</p>
                @elseif( $lists->partner_individual_state ==  "IL" )
                    <p>Illinois</p>
                @elseif( $lists->partner_individual_state ==  "IN" )
                    <p>Indiana</p>
                @elseif( $lists->partner_individual_state ==  "KS" )
                    <p>Kansas</p>
                @elseif( $lists->partner_individual_state ==  "KY" )
                    <p>Kentucky</p>
                @elseif( $lists->partner_individual_state ==  "LA" )
                    <p>Louisiana</p>
                @elseif( $lists->partner_individual_state ==  "MA" )
                    <p>Massachusetts</p>
                @elseif( $lists->partner_individual_state ==  "MD" )
                    <p>Maryland</p>
                @elseif( $lists->partner_individual_state ==  "ME" )
                    <p>Maine</p>
                @elseif( $lists->partner_individual_state ==  "MI" )
                    <p>Michigan</p>
                @elseif( $lists->partner_individual_state ==  "MN" )
                    <p>Mississippi</p>
                @elseif( $lists->partner_individual_state ==  "MO" )
                    <p>Missouri</p>
                @elseif( $lists->partner_individual_state ==  "MT" )
                    <p>Montana</p>
                @elseif( $lists->partner_individual_state ==  "NC" )
                    <p>North Carolina</p>
                @elseif( $lists->partner_individual_state ==  "ND" )
                    <p>North Dakota</p>
                @elseif( $lists->partner_individual_state ==  "NE" )
                    <p>Nebraska</p>
                @elseif( $lists->partner_individual_state ==  "NH" )
                    <p>New Hampshire</p>
                @elseif( $lists->partner_individual_state ==  "NJ" )
                    <p>New Jersey</p>
                @elseif( $lists->partner_individual_state ==  "NM" )
                    <p>New Mexico</p>
                @elseif( $lists->partner_individual_state ==  "NV" )
                    <p>Nevada</p>
                @elseif( $lists->partner_individual_state ==  "NY" )
                    <p>New York</p>
                @elseif( $lists->partner_individual_state ==  "OH" )
                    <p>Ohio</p>
                @elseif( $lists->partner_individual_state ==  "OK" )
                    <p>Oklahoma</p>
                @elseif( $lists->partner_individual_state ==  "OR" )
                    <p>Oregon</p>
                @elseif( $lists->partner_individual_state ==  "PA" )
                    <p>Pennsylvania</p>
                @elseif( $lists->partner_individual_state ==  "PR" )
                    <p>Puerto Rico</p>
                @elseif( $lists->partner_individual_state ==  "RI" )
                    <p>Rhode Island</p>
                @elseif( $lists->partner_individual_state ==  "RI" )
                    <p>South Carolina</p>
                @elseif( $lists->partner_individual_state ==  "SD" )
                    <p>South Dakota</p>
                @elseif( $lists->partner_individual_state ==  "TN" )
                    <p>Tennessee</p>
                @elseif( $lists->partner_individual_state ==  "TX" )
                    <p>Texas</p>
                @elseif( $lists->partner_individual_state ==  "UT" )
                    <p>Utah</p>
                @elseif( $lists->partner_individual_state ==  "VA" )
                    <p>Virginia</p>
                @elseif( $lists->partner_individual_state ==  "VI" )
                    <p>Virgin Islands</p>
                @elseif( $lists->partner_individual_state ==  "VT" )
                    <p>Vermont</p>
                @elseif( $lists->partner_individual_state ==  "WA" )
                    <p>Washington</p>
                @elseif( $lists->partner_individual_state ==  "WI" )
                    <p>Wisconsin</p>
                @elseif( $lists->partner_individual_state ==  "WV" )
                    <p>West Virginia</p>
                @elseif( $lists->partner_individual_state ==  "WY" )
                    <p>Wyoming</p>
                @endif
            </div>
            <div class="form-flex-box-text-item">
                <span>Zip Code</span>
                <p>{{$lists->partner_individual_zip_code}}</p>
            </div>
        </div>
      
    </div>
</section>

@endsection