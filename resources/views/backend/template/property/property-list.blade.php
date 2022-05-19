@extends('backend.inc.master')

@section('main-content')
<!--// Main Area Start //-->
<section class="panel-wrapper panel-full-width mt-resp-top">
    <div class="form-wrapper">
        @if(Session::has('success-message-edit')) 
        <div class="alert alert-success" role="alert">
            {{Session::get('success-message-edit')}} 
          </div>
         @endif 
         @if(Session::has('success-message')) 
         <div class="alert alert-success" role="alert">
             {{Session::get('success-message')}}
           </div>
          @endif 
          @if(Session::has('success-message-delete')) 
          <div class="alert alert-success" role="alert">
              {{Session::get('success-message-delete')}}
            </div>
           @endif 
        <div class="form-heading d-flex justify-content-between align-items-center">
            <h6>Property List</h6>
            <a href="{{url('/add-new-property')}}" class="dark-grey-btn">
                Add Property
            </a>  
        </div>
        <div class="container-fluid table-container-wrap">
            <div class="table-responsive">
                <table id="expense_datatable" class="table table-striped table-bordered table-data-table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Property Address</th>
                            <th>Google Coordinates</th>
                            <th>Entity Company</th>
                            <th>Number Of Acres</th>
                            <th>Map Right Url</th>
                            <th>Property Documents</th>
                            <th>Purchase Price</th>
                            <th>Per Acre Cost</th>
                            <th>Potential Per Acre</th>
                            <th>Potential Market Value</th>
                            <th></th>
                            
                        </tr>
                    </thead>
                    <tbody class="view-icon-table">
                    @php($i=1)
                    @foreach ($lists as $list)
                        <tr>
                            <td>{{$i++}}</td>
                            <td>{{$list->PROPERTY_ADDRESS}}</td>
                            <td>{{$list->GOOGLE_COORDINATES}}</td>
                            <td>{{$list->entity_id->ENTITY_NAME}}</td>
                            <td>{{$list->NO_OF_ACRES}}</td>
                            <td><a href="{{$list->MAP_URL}}" class="text-link-dark">Map Right Link</a></td>
                            <td><a href="{{$list->PROPERTY_DOCUMENTS}}"  class="text-link-dark">Property Documents Link</a></td>
                            <td>{{$list->PURCHASE_PRICE}}</td>
                            <td>{{$list->COST_PER_ACRE}}</td>
                            <td>{{$list->POTENTIAL_PER_ACRE}}</td>
                            <td>{{$list->POTENTIAL_MARKET_VALUE}}</td>
                            <td>
                                <a href="{{url('property-view/'.$list->ID)}}" class="table-view-btn">
                                    <i class="fa fa-eye"></i>
                                </a>                                 
                                <a href="{{url('property-list-edit/'.$list->ID)}}" class="table-edit-btn"><i class="fa fa-edit"></i></a>
                                <a href="#" class="table-delete-btn" data-bs-toggle="modal" data-bs-target="#delete-property-modal-{{$list->ID}}">
                                    <i class="fa fa-trash"></i>
                                </a>                    
                                <div class="modal fade" id="delete-property-modal-{{$list->ID}}" tabindex="-1" aria-labelledby="delete-property-modalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                        <div class="modal-content ">
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i> </button>
                                            <div class="modal-body">
                                                <div class="modal-trash-icon">
                                                    <i class="fa fa-trash"></i>
                                                </div>
                                                <p>
                                                    Are you sure want to delete  <br> {{$list->PROPERTY_ADDRESS}} ? 
                                                </p>
                                            </div>
                                            <div class="modal-footer form-btn-flex-between">
                                                <button type="button" class="form-cancel-btn" data-bs-dismiss="modal">Cancel</button>
                                                <a href="{{url('property-list-delete/'.$list->ID)}}" ><button type="button" class="form-submit-btn">Yes</button></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach  
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</section>

@endsection