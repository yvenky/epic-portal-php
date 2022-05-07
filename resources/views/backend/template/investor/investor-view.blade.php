@extends('backend.inc.master')

@section('main-content')
<section class="panel-wrapper panel-center">
 <div class="form-wrapper">
    <div class="form-heading details-view-edit-wrap">
        <h6>Investor Details</h6>
        <a href="{{url('investor-edit/'.$lists->ID)}}" title="Edit Investor"><i class="fa fa-edit"></i></a>
    </div>
    <div class="form-content">
        <div class="form-flex-box-text-item">
            <span>Full Name</span>
            <p>{{$lists->FIRST_NAME.' '.$lists->LAST_NAME}}</p>
            
        </div>
        <div class="form-flex-box-text-item">
            <span>Employment Status</span>
            @if( $lists->EMPLOYMENT_STATUS ==  "SE" )
                <p>Self Employed</p>
            @elseif( $lists->EMPLOYMENT_STATUS ==  "W2" ) 
                <p>W2</p>
            @elseif( $lists->EMPLOYMENT_STATUS ==  "HM" )
                <p>Home Maker</p>
            @endif
        </div>
        <div class="form-flex-box-text-item">
            <span>Household Income</span>
            @if( $lists->HOUSEHOLD_INCOME ==  "0" )
                <p>Upto 100000</p>
            @elseif( $lists->HOUSEHOLD_INCOME ==  "1" ) 
                <p>100000 to 200000</p>
            @elseif( $lists->HOUSEHOLD_INCOME ==  "2" )
                <p>200K to 300K</p>
            @elseif( $lists->HOUSEHOLD_INCOME ==  "3" )
                <p>300K to 400K</p>
            @elseif( $lists->HOUSEHOLD_INCOME ==  "4" )
                <p>400K to 500K</p>
            @elseif( $lists->HOUSEHOLD_INCOME ==  "5" )
                <p>More Than 500K</p>
            @endif
        </div>
        <div class="form-flex-box-text-item">
            <span>Email Address</span>
            <p>{{$lists->EMAIL_ADDRESS}}</p>
        </div>
        <div class="form-flex-box-text-item">
            <span>Phone Number</span>
            <p>{{$lists->PHONE_NUMBER}}</p>
        </div>
    </div>

    <div class="form-heading top-border">
        <h6>Investor Spouse  Details</h6>
    </div>
    <div class="form-content">
        <div class="form-flex-box-text-item">
            <span>Spouse Full Name</span>
            <p>{{$lists->SPOUSE_FIRSTNAME.' '.$lists->SPOUSE_LASTNAME}}</p>
        </div>
        <div class="form-flex-box-text-item">
            <span>Spouse Employment Status</span>
            @if( $lists->SPOUSE_EMPLOYMENT_STATUS ==  "SE" )
                <p>Self Employed</p>
            @elseif( $lists->SPOUSE_EMPLOYMENT_STATUS ==  "W2" ) 
                <p>W2</p>
            @elseif( $lists->SPOUSE_EMPLOYMENT_STATUS ==  "F" ) 
                <p>F</p>
            @elseif( $lists->SPOUSE_EMPLOYMENT_STATUS ==  "HM" )
                <p>Home Maker</p>
            @endif
        </div>
        <div class="form-flex-box-text-item">
            <span>Spouse Email Address</span>
            <p>{{$lists->SPOUSE_EMAIL}}</p>
        </div>
        <div class="form-flex-box-text-item">
            <span>Spouse Phone Number</span>
            <p>{{$lists->SPOUSE_PHONE_NO}}</p>
        </div>
    </div>
    <div class="form-heading top-border">
        <h6>Investor Address  Details</h6>
    </div>
    <div class="form-content">
        <div class="form-flex-box-text-item">
            <span>Street</span>
            <p>{{$lists->address->STREET_1}}</p>
        </div>
        <div class="form-flex-box-text-item">
            <span>City</span>
            <p>{{$lists->address->CITY}}</p>
        </div>
        <div class="form-flex-box-text-item">
            <span>State</span>
            @if( $lists->address->STATE ==  "AA" )
                <p>Armed Forces America</p>
            @elseif( $lists->address->STATE ==  "AE" ) 
                <p>Armed Forces</p>
            @elseif( $lists->address->STATE ==  "AK" )
                <p>Alaska</p>
            @elseif( $lists->address->STATE ==  "AL" )
                <p>Alabama</p>
            @elseif( $lists->address->STATE ==  "AP" )
                <p>Armed Forces Pacific</p>
            @elseif( $lists->address->STATE ==  "AR" )
                <p>Arkansas</p>
            @elseif( $lists->address->STATE ==  "AZ" )
                <p>Arizona</p>
            @elseif( $lists->address->STATE ==  "CA" )
                <p>California</p>
            @elseif( $lists->address->STATE ==  "CO" )
                <p>Colorado</p>
            @elseif( $lists->address->STATE ==  "CT" )
                <p>Connecticut</p>
            @elseif( $lists->address->STATE ==  "DC" )
                <p>Washington DC</p>
            @elseif( $lists->address->STATE ==  "DE" )
                <p>Delaware</p>
            @elseif( $lists->address->STATE ==  "FL" )
                <p>Florida</p>
            @elseif( $lists->address->STATE ==  "GA" )
                <p>Georgia</p>
            @elseif( $lists->address->STATE ==  "GU" )
                <p>Guam</p>
            @elseif( $lists->address->STATE ==  "HI" )
                <p>Hawaii</p>
            @elseif( $lists->address->STATE ==  "IA" )
                <p>Iowa</p>
            @elseif( $lists->address->STATE ==  "ID" )
                <p>Idaho</p>
            @elseif( $lists->address->STATE ==  "IL" )
                <p>Illinois</p>
            @elseif( $lists->address->STATE ==  "IN" )
                <p>Indiana</p>
            @elseif( $lists->address->STATE ==  "KS" )
                <p>Kansas</p>
            @elseif( $lists->address->STATE ==  "KY" )
                <p>Kentucky</p>
            @elseif( $lists->address->STATE ==  "LA" )
                <p>Louisiana</p>
            @elseif( $lists->address->STATE ==  "MA" )
                <p>Massachusetts</p>
            @elseif( $lists->address->STATE ==  "MD" )
                <p>Maryland</p>
            @elseif( $lists->address->STATE ==  "ME" )
                <p>Maine</p>
            @elseif( $lists->address->STATE ==  "MI" )
                <p>Michigan</p>
            @elseif( $lists->address->STATE ==  "MN" )
                <p>Mississippi</p>
            @elseif( $lists->address->STATE ==  "MO" )
                <p>Missouri</p>
            @elseif( $lists->address->STATE ==  "MT" )
                <p>Montana</p>
            @elseif( $lists->address->STATE ==  "NC" )
                <p>North Carolina</p>
            @elseif( $lists->address->STATE ==  "ND" )
                <p>North Dakota</p>
            @elseif( $lists->address->STATE ==  "NE" )
                <p>Nebraska</p>
            @elseif( $lists->address->STATE ==  "NH" )
                <p>New Hampshire</p>
            @elseif( $lists->address->STATE ==  "NJ" )
                <p>New Jersey</p>
            @elseif( $lists->address->STATE ==  "NM" )
                <p>New Mexico</p>
            @elseif( $lists->address->STATE ==  "NV" )
                <p>Nevada</p>
            @elseif( $lists->address->STATE ==  "NY" )
                <p>New York</p>
            @elseif( $lists->address->STATE ==  "OH" )
                <p>Ohio</p>
            @elseif( $lists->address->STATE ==  "OK" )
                <p>Oklahoma</p>
            @elseif( $lists->address->STATE ==  "OR" )
                <p>Oregon</p>
            @elseif( $lists->address->STATE ==  "PA" )
                <p>Pennsylvania</p>
            @elseif( $lists->address->STATE ==  "PR" )
                <p>Puerto Rico</p>
            @elseif( $lists->address->STATE ==  "RI" )
                <p>Rhode Island</p>
            @elseif( $lists->address->STATE ==  "RI" )
                <p>South Carolina</p>
            @elseif( $lists->address->STATE ==  "SD" )
                <p>South Dakota</p>
            @elseif( $lists->address->STATE ==  "TN" )
                <p>Tennessee</p>
            @elseif( $lists->address->STATE ==  "TX" )
                <p>Texas</p>
            @elseif( $lists->address->STATE ==  "UT" )
                <p>Utah</p>
            @elseif( $lists->address->STATE ==  "VA" )
                <p>Virginia</p>
            @elseif( $lists->address->STATE ==  "VI" )
                <p>Virgin Islands</p>
            @elseif( $lists->address->STATE ==  "VT" )
                <p>Vermont</p>
            @elseif( $lists->address->STATE ==  "WA" )
                <p>Washington</p>
            @elseif( $lists->address->STATE ==  "WI" )
                <p>Wisconsin</p>
            @elseif( $lists->address->STATE ==  "WV" )
                <p>West Virginia</p>
            @elseif( $lists->address->STATE ==  "WY" )
                <p>Wyoming</p>
            @endif
        </div>
        <div class="form-flex-box-text-item">
            <span>Zip Code</span>
            <p>{{$lists->address->ZIP_CODE}}</p>
        </div>
        
        <div class="form-btn-flex-between pt-2">
            <a href="{{url('/')}}" class="form-cancel-btn">Home</a>
            <a href="{{url('new-partner-registration')}}" class="form-submit-btn">Add Investor</a>
         </div>
    </div>
    
 </div>  
</section>
@endsection