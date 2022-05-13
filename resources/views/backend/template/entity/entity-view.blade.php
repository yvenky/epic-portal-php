@extends('backend.inc.master')

@section('main-content')

<section class="panel-wrapper panel-center">
    <div class="form-wrapper">
        <div class="form-heading details-view-edit-wrap">
            <h6>Entity Details</h6>
            <a href="{{url('entity-edit/'.$lists->ID)}}" title="Edit Entity"><i class="fa fa-edit"></i></a>
        </div>
        <div class="form-content">

            @if ( $lists->ENTITY_NAME )
                <div class="form-flex-box-text-item">
                    <span>Entity Name</span>
                    <p>{{$lists->ENTITY_NAME}}</p>
                </div>
            @endif

            @if ( $lists->investor_mm_one->FIRST_NAME.' '.$lists->investor_mm_one->LAST_NAME) 
                <div class="form-flex-box-text-item">
                    <span>Managing Member 1</span>
                    <p>{{$lists->investor_mm_one->FIRST_NAME.' '.$lists->investor_mm_one->LAST_NAME}}</p>
                </div>
            @endif

            @if ( $lists->investor_mm_two->FIRST_NAME.' '.$lists->investor_mm_two->LAST_NAME )
            <div class="form-flex-box-text-item">
                <span>Managing Member 2</span>
                <p>{{$lists->investor_mm_two->FIRST_NAME.' '.$lists->investor_mm_two->LAST_NAME}}</p>
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
            
            @if ( $lists->address->STREET_1 )
            <div class="form-flex-box-text-item">
                <span>Street</span>
                <p>{{$lists->address->STREET_1 }}</p>
            </div>
            @endif

            @if ( $lists->address->CITY )
            <div class="form-flex-box-text-item">
                <span>City</span>
                <p>{{$lists->address->CITY }}</p>
            </div>
            @endif

            @if ( $lists->address->STATE )
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
            @endif

            @if ( $lists->address->ZIP_CODE )
            <div class="form-flex-box-text-item">
                <span>Zip Code</span>
                <p>{{$lists->address->ZIP_CODE }}</p>
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