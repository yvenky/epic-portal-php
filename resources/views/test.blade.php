@extends('backend.inc.master')

@section('main-content')

<div class="container">
       

    <div class="row">
        @foreach ( $lists as $item)
        <div class="col-lg-4 mt-3">
            <div class="card">

                <div class="card-body">
                    <p><span>First name</span> {{$item->FIRST_NAME}}</p>
            
            <p><span>last Name</span> {{$item->LAST_NAME}}</p>
    
            <p><span>address id</span> {{$item->ADDRESS_ID}}</p>

            @php
            $get_address = DB::table('ADDRESS')
                        ->where('id', '=', $item->ADDRESS_ID)
                        ->get();
            @endphp




              @foreach ($get_address as $adress)
                  {{$adress->STREET_1}}<br>
                  {{$adress->STREET_2}}<br>
                  {{$adress->CITY}}<br>
    
                  {{$adress->ZIP_CODE}}<br>
              @endforeach              




            <p><span>email address</span> {{$item->EMAIL_ADDRESS }}</p>
            <p><span>PHone Number</span> {{$item->PHONE_NUMBER	 }}</p>
            <p><span>EMPLOYMENT STATUS</span> {{$item->EMPLOYMENT_STATUS	 }}</p>
                </div>
            
             </div>

        </div>
        @endforeach
    </div>


</div>


<div class="form-flex-box-text-item">




   
</div>
@endsection