@extends('backend.inc.master')

@section('main-content')

<div class="form-wrapper">
    <div class="form-heading details-view-edit-wrap">
        <h6>Investor Details</h6>
        <a href="{{url('investor-list-edit/')}}" title="Edit Investor"><i class="fa fa-edit"></i></a>
    </div>
    <div class="form-content">
        <div class="form-flex-box-text-item">
            @foreach ($lists as $list)
                
        
            <span>Full Name</span>
            <p>{{$list->FIRST_NAME.' '.$list->LAST_NAME}}</p>
            
        </div>
        <div class="form-flex-box-text-item">
            <span>Employment Status</span>
            @if( $list->EMPLOYMENT_STATUS ==  "SE" )
                <p>Self Employed</p>
            @elseif( $list->EMPLOYMENT_STATUS ==  "W2" ) 
                <p>W2</p>
            @elseif( $list->EMPLOYMENT_STATUS ==  "HM" )
                <p>Home Maker</p>
            @endif
        </div>
        <div class="form-flex-box-text-item">
            <span>Household Income</span>
            @if( $list->HOUSEHOLD_INCOME ==  "0" )
                <p>Upto 100000</p>
            @elseif( $list->HOUSEHOLD_INCOME ==  "1" ) 
                <p>100000 to 200000</p>
            @elseif( $list->HOUSEHOLD_INCOME ==  "2" )
                <p>200K to 300K</p>
            @elseif( $list->HOUSEHOLD_INCOME ==  "3" )
                <p>300K to 400K</p>
            @elseif( $list->HOUSEHOLD_INCOME ==  "4" )
                <p>400K to 500K</p>
            @elseif( $list->HOUSEHOLD_INCOME ==  "5" )
                <p>More Than 500K</p>
            @endif
        </div>
        <div class="form-flex-box-text-item">
            <span>Email Address</span>
            <p>{{$list->EMAIL_ADDRESS}}</p>
        </div>
    </div>

    <div class="form-heading top-border">
        <h6>Investor Spouse  Details</h6>
    </div>
    <div class="form-content">
        <div class="form-flex-box-text-item">
            <span>Spouse Full Name</span>
            <p>{{$list->SPOUSE_FIRSTNAME.' '.$list->SPOUSE_LASTNAME}}</p>
        </div>
        <div class="form-flex-box-text-item">
            <span>Spouse Employment Status</span>
            @if( $list->SPOUSE_EMPLOYMENT_STATUS ==  "SE" )
                <p>Self Employed</p>
            @elseif( $list->SPOUSE_EMPLOYMENT_STATUS ==  "W2" ) 
                <p>W2</p>
            @elseif( $list->SPOUSE_EMPLOYMENT_STATUS ==  "F" ) 
                <p>F</p>
            @elseif( $list->SPOUSE_EMPLOYMENT_STATUS ==  "HM" )
                <p>Home Maker</p>
            @endif
        </div>
        <div class="form-flex-box-text-item">
            <span>Spouse Email Address</span>
            <p>{{$list->SPOUSE_EMAIL}}</p>
        </div>
        
    </div>
    <div class="form-heading top-border">
        <h6>Investor Address  Details</h6>
    </div>
    <div class="form-content">
        <div class="form-flex-box-text-item">
            <span>Street</span>
            <p>{{$list->address->STREET_1}}</p>
        </div>
        <div class="form-flex-box-text-item">
            <span>City</span>
            <p>{{$list->partner_individual_city}}</p>
        </div>
        <div class="form-flex-box-text-item">
            <span>State</span>
            @if( $list->address->STATE ==  "AA" )
                <p>Armed Forces America</p>
            @elseif( $list->address->STATE ==  "AE" ) 
                <p>Armed Forces</p>
            @elseif( $list->address->STATE ==  "AK" )
                <p>Alaska</p>
            @elseif( $list->address->STATE ==  "AL" )
                <p>Alabama</p>
            @elseif( $list->address->STATE ==  "AP" )
                <p>Armed Forces Pacific</p>
            @elseif( $list->address->STATE ==  "AR" )
                <p>Arkansas</p>
            @elseif( $list->address->STATE ==  "AZ" )
                <p>Arizona</p>
            @elseif( $list->address->STATE ==  "CA" )
                <p>California</p>
            @elseif( $list->address->STATE ==  "CO" )
                <p>Colorado</p>
            @elseif( $list->address->STATE ==  "CT" )
                <p>Connecticut</p>
            @elseif( $list->address->STATE ==  "DC" )
                <p>Washington DC</p>
            @elseif( $list->address->STATE ==  "DE" )
                <p>Delaware</p>
            @elseif( $list->address->STATE ==  "FL" )
                <p>Florida</p>
            @elseif( $list->address->STATE ==  "GA" )
                <p>Georgia</p>
            @elseif( $list->address->STATE ==  "GU" )
                <p>Guam</p>
            @elseif( $list->address->STATE ==  "HI" )
                <p>Hawaii</p>
            @elseif( $list->address->STATE ==  "IA" )
                <p>Iowa</p>
            @elseif( $list->address->STATE ==  "ID" )
                <p>Idaho</p>
            @elseif( $list->address->STATE ==  "IL" )
                <p>Illinois</p>
            @elseif( $list->address->STATE ==  "IN" )
                <p>Indiana</p>
            @elseif( $list->address->STATE ==  "KS" )
                <p>Kansas</p>
            @elseif( $list->address->STATE ==  "KY" )
                <p>Kentucky</p>
            @elseif( $list->address->STATE ==  "LA" )
                <p>Louisiana</p>
            @elseif( $list->address->STATE ==  "MA" )
                <p>Massachusetts</p>
            @elseif( $list->address->STATE ==  "MD" )
                <p>Maryland</p>
            @elseif( $list->address->STATE ==  "ME" )
                <p>Maine</p>
            @elseif( $list->address->STATE ==  "MI" )
                <p>Michigan</p>
            @elseif( $list->address->STATE ==  "MN" )
                <p>Mississippi</p>
            @elseif( $list->address->STATE ==  "MO" )
                <p>Missouri</p>
            @elseif( $list->address->STATE ==  "MT" )
                <p>Montana</p>
            @elseif( $list->address->STATE ==  "NC" )
                <p>North Carolina</p>
            @elseif( $list->address->STATE ==  "ND" )
                <p>North Dakota</p>
            @elseif( $list->address->STATE ==  "NE" )
                <p>Nebraska</p>
            @elseif( $list->address->STATE ==  "NH" )
                <p>New Hampshire</p>
            @elseif( $list->address->STATE ==  "NJ" )
                <p>New Jersey</p>
            @elseif( $list->address->STATE ==  "NM" )
                <p>New Mexico</p>
            @elseif( $list->address->STATE ==  "NV" )
                <p>Nevada</p>
            @elseif( $list->address->STATE ==  "NY" )
                <p>New York</p>
            @elseif( $list->address->STATE ==  "OH" )
                <p>Ohio</p>
            @elseif( $list->address->STATE ==  "OK" )
                <p>Oklahoma</p>
            @elseif( $list->address->STATE ==  "OR" )
                <p>Oregon</p>
            @elseif( $list->address->STATE ==  "PA" )
                <p>Pennsylvania</p>
            @elseif( $list->address->STATE ==  "PR" )
                <p>Puerto Rico</p>
            @elseif( $list->address->STATE ==  "RI" )
                <p>Rhode Island</p>
            @elseif( $list->address->STATE ==  "RI" )
                <p>South Carolina</p>
            @elseif( $list->address->STATE ==  "SD" )
                <p>South Dakota</p>
            @elseif( $list->address->STATE ==  "TN" )
                <p>Tennessee</p>
            @elseif( $list->address->STATE ==  "TX" )
                <p>Texas</p>
            @elseif( $list->address->STATE ==  "UT" )
                <p>Utah</p>
            @elseif( $list->address->STATE ==  "VA" )
                <p>Virginia</p>
            @elseif( $list->address->STATE ==  "VI" )
                <p>Virgin Islands</p>
            @elseif( $list->address->STATE ==  "VT" )
                <p>Vermont</p>
            @elseif( $list->address->STATE ==  "WA" )
                <p>Washington</p>
            @elseif( $list->address->STATE ==  "WI" )
                <p>Wisconsin</p>
            @elseif( $list->address->STATE ==  "WV" )
                <p>West Virginia</p>
            @elseif( $list->address->STATE ==  "WY" )
                <p>Wyoming</p>
            @endif
        </div>
        <div class="form-flex-box-text-item">
            <span>Zip Code</span>
            <p>{{$list->address->ZIP_CODE}}</p>
        </div>
        @endforeach
        <div class="form-btn-flex-between pt-2">
            <a href="{{url('investor-list')}}" class="form-cancel-btn">Home</a>
            <a href="{{url('new-partner-registration')}}" class="form-submit-btn">Add Investor</a>
         </div>
    </div>
</div>  

</section>
@endsection