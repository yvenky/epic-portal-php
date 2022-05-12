@extends('backend.inc.master')

@section('main-content')

<section class="panel-wrapper panel-center">
    <div class="form-wrapper">
        <div class="form-heading details-view-edit-wrap">
            <h6>Entity Details</h6>
            <a href="{{url('entity-edit/'.$lists->id)}}" title="Edit Entity"><i class="fa fa-edit"></i></a>
        </div>
        <div class="form-content">

            @if ( $lists->ENTITY_NAME )
                <div class="form-flex-box-text-item">
                    <span>Entity Name</span>
                    <p>{{$lists->ENTITY_NAME}}</p>
                </div>
            @endif

            @if ( $lists->MANAGING_MEMBER_1 )
                <div class="form-flex-box-text-item">
                    <span>Managing Member 1</span>
                    <p>{{$lists->MANAGING_MEMBER_1}}</p>
                </div>
            @endif

            @if ( $lists->MANAGING_MEMBER_2 )
            <div class="form-flex-box-text-item">
                <span>Managing Member 2</span>
                <p>{{$lists->MANAGING_MEMBER_2}}</p>
            </div>
            @endif

            @if ( $lists->EIN )
            <div class="form-flex-box-text-item">
                <span>EIN</span>
                <p>{{$lists->EIN}}</p>
            </div>
            @endif

            @if ( $lists->OPERATING_AGREEMENT )
            <div class="form-flex-box-text-item">
                <span>Entity Docs</span>
                <p>{{$lists->OPERATING_AGREEMENT}}</p>
            </div>
            @endif
        </div>
        <div class="form-heading top-border">
            <h6>Entity Address  Details</h6>
        </div>
        <div class="form-content">
            
            @if ( $lists->add_partner_entity_address_street )
            <div class="form-flex-box-text-item">
                <span>Street</span>
                <p>{{$lists->add_partner_entity_address_street }}</p>
            </div>
            @endif

            @if ( $lists->add_partner_entity_address_city )
            <div class="form-flex-box-text-item">
                <span>City</span>
                <p>{{$lists->add_partner_entity_address_city }}</p>
            </div>
            @endif

            @if ( $lists->add_partner_entity_address_state )
            <div class="form-flex-box-text-item">
                <span>State</span>
                @if( $lists->add_partner_entity_address_state ==  "AA" )
                    <p>Armed Forces America</p>
                @elseif( $lists->add_partner_entity_address_state ==  "AE" ) 
                    <p>Armed Forces</p>
                @elseif( $lists->add_partner_entity_address_state ==  "AK" )
                    <p>Alaska</p>
                @elseif( $lists->add_partner_entity_address_state ==  "AL" )
                    <p>Alabama</p>
                @elseif( $lists->add_partner_entity_address_state ==  "AP" )
                    <p>Armed Forces Pacific</p>
                @elseif( $lists->add_partner_entity_address_state ==  "AR" )
                    <p>Arkansas</p>
                @elseif( $lists->add_partner_entity_address_state ==  "AZ" )
                    <p>Arizona</p>
                @elseif( $lists->add_partner_entity_address_state ==  "CA" )
                    <p>California</p>
                @elseif( $lists->add_partner_entity_address_state ==  "CO" )
                    <p>Colorado</p>
                @elseif( $lists->add_partner_entity_address_state ==  "CT" )
                    <p>Connecticut</p>
                @elseif( $lists->add_partner_entity_address_state ==  "DC" )
                    <p>Washington DC</p>
                @elseif( $lists->add_partner_entity_address_state ==  "DE" )
                    <p>Delaware</p>
                @elseif( $lists->add_partner_entity_address_state ==  "FL" )
                    <p>Florida</p>
                @elseif( $lists->add_partner_entity_address_state ==  "GA" )
                    <p>Georgia</p>
                @elseif( $lists->add_partner_entity_address_state ==  "GU" )
                    <p>Guam</p>
                @elseif( $lists->add_partner_entity_address_state ==  "HI" )
                    <p>Hawaii</p>
                @elseif( $lists->add_partner_entity_address_state ==  "IA" )
                    <p>Iowa</p>
                @elseif( $lists->add_partner_entity_address_state ==  "ID" )
                    <p>Idaho</p>
                @elseif( $lists->add_partner_entity_address_state ==  "IL" )
                    <p>Illinois</p>
                @elseif( $lists->add_partner_entity_address_state ==  "IN" )
                    <p>Indiana</p>
                @elseif( $lists->add_partner_entity_address_state ==  "KS" )
                    <p>Kansas</p>
                @elseif( $lists->add_partner_entity_address_state ==  "KY" )
                    <p>Kentucky</p>
                @elseif( $lists->add_partner_entity_address_state ==  "LA" )
                    <p>Louisiana</p>
                @elseif( $lists->add_partner_entity_address_state ==  "MA" )
                    <p>Massachusetts</p>
                @elseif( $lists->add_partner_entity_address_state ==  "MD" )
                    <p>Maryland</p>
                @elseif( $lists->add_partner_entity_address_state ==  "ME" )
                    <p>Maine</p>
                @elseif( $lists->add_partner_entity_address_state ==  "MI" )
                    <p>Michigan</p>
                @elseif( $lists->add_partner_entity_address_state ==  "MN" )
                    <p>Mississippi</p>
                @elseif( $lists->add_partner_entity_address_state ==  "MO" )
                    <p>Missouri</p>
                @elseif( $lists->add_partner_entity_address_state ==  "MT" )
                    <p>Montana</p>
                @elseif( $lists->add_partner_entity_address_state ==  "NC" )
                    <p>North Carolina</p>
                @elseif( $lists->add_partner_entity_address_state ==  "ND" )
                    <p>North Dakota</p>
                @elseif( $lists->add_partner_entity_address_state ==  "NE" )
                    <p>Nebraska</p>
                @elseif( $lists->add_partner_entity_address_state ==  "NH" )
                    <p>New Hampshire</p>
                @elseif( $lists->add_partner_entity_address_state ==  "NJ" )
                    <p>New Jersey</p>
                @elseif( $lists->add_partner_entity_address_state ==  "NM" )
                    <p>New Mexico</p>
                @elseif( $lists->add_partner_entity_address_state ==  "NV" )
                    <p>Nevada</p>
                @elseif( $lists->add_partner_entity_address_state ==  "NY" )
                    <p>New York</p>
                @elseif( $lists->add_partner_entity_address_state ==  "OH" )
                    <p>Ohio</p>
                @elseif( $lists->add_partner_entity_address_state ==  "OK" )
                    <p>Oklahoma</p>
                @elseif( $lists->add_partner_entity_address_state ==  "OR" )
                    <p>Oregon</p>
                @elseif( $lists->add_partner_entity_address_state ==  "PA" )
                    <p>Pennsylvania</p>
                @elseif( $lists->add_partner_entity_address_state ==  "PR" )
                    <p>Puerto Rico</p>
                @elseif( $lists->add_partner_entity_address_state ==  "RI" )
                    <p>Rhode Island</p>
                @elseif( $lists->add_partner_entity_address_state ==  "RI" )
                    <p>South Carolina</p>
                @elseif( $lists->add_partner_entity_address_state ==  "SD" )
                    <p>South Dakota</p>
                @elseif( $lists->add_partner_entity_address_state ==  "TN" )
                    <p>Tennessee</p>
                @elseif( $lists->add_partner_entity_address_state ==  "TX" )
                    <p>Texas</p>
                @elseif( $lists->add_partner_entity_address_state ==  "UT" )
                    <p>Utah</p>
                @elseif( $lists->add_partner_entity_address_state ==  "VA" )
                    <p>Virginia</p>
                @elseif( $lists->add_partner_entity_address_state ==  "VI" )
                    <p>Virgin Islands</p>
                @elseif( $lists->add_partner_entity_address_state ==  "VT" )
                    <p>Vermont</p>
                @elseif( $lists->add_partner_entity_address_state ==  "WA" )
                    <p>Washington</p>
                @elseif( $lists->add_partner_entity_address_state ==  "WI" )
                    <p>Wisconsin</p>
                @elseif( $lists->add_partner_entity_address_state ==  "WV" )
                    <p>West Virginia</p>
                @elseif( $lists->add_partner_entity_address_state ==  "WY" )
                    <p>Wyoming</p>
                @endif
            </div>
            @endif

            @if ( $lists->add_partner_entity_address_zipcode )
            <div class="form-flex-box-text-item">
                <span>Zip Code</span>
                <p>{{$lists->add_partner_entity_address_zipcode }}</p>
            </div>
            @endif

            <div class="form-btn-flex-between pt-4">
                <a href="{{url('entity-list')}}" class="form-cancel-btn">Home</a>
                 <a href="{{url('add-new-entry')}}" class="form-submit-btn">Add Entity</a>
             </div>
        </div>
    </div>  
   
</section>
@endsection