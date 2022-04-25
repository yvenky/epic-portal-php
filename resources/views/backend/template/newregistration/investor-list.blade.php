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
            <h6>Investor List</h6>
            <a href="{{url('/new-partner-registration')}}" class="dark-grey-btn">
                Add Investor
            </a>  
        </div>
        <div class="container-fluid table-container-wrap">
            <div class="table-responsive">
                <table id="expense_datatable" class="table table-striped table-bordered table-data-table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Full Name</th>
                            <th>Email Address</th>
                            <th>Spouse Full Name</th>
                            <th>Spouse Email Address</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody class="view-icon-table">
                        @php($i=1)
                      @foreach ($lists as $list)
                        <tr>
                            <td>{{$i++}}</td>
                            <td>{{$list->partner_individual_first_name.' '.$list->partner_individual_last_name}}</td>
                            <td>{{$list->partner_individual_email_address}}</td>
                            <td>{{$list->partner_individual_spouse_first_name.' '.$list->partner_individual_spouse_last_name}}</td>
                            <td>{{$list->partner_individual_spouse_email_address}}</td>
                            <td>
                                
                                <a href="{{url('investor-view/'.$list->id)}}" class="table-view-btn">
                                    <i class="fa fa-eye"></i>
                                </a>  
                                
                                <a href="{{url('investor-list-edit/'.$list->id)}}" class="table-edit-btn"><i class="fa fa-edit"></i></a>
                                   
                               
                                <a href="#" class="table-delete-btn" data-bs-toggle="modal" data-bs-target="#delete-entity-partners-modal-{{$list->id}}">
                                    <i class="fa fa-trash"></i>
                                </a>     
                                
                                                                
                                <div class="modal fade" id="delete-entity-partners-modal-{{$list->id}}" tabindex="-1" aria-labelledby="delete-entity-partners-modalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                        <div class="modal-content ">
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i> </button>
                                            <div class="modal-body">
                                                <div class="modal-trash-icon">
                                                    <i class="fa fa-trash"></i>
                                                </div>
                                                <p>
                                                    Are you sure want to delete  <br> {{$list->partner_individual_first_name.' '.$list->partner_individual_last_name}} ? 
                                                </p>
                                            </div>
                                            <div class="modal-footer form-btn-flex-between">
                                                <button type="button" class="form-cancel-btn" data-bs-dismiss="modal">Cancel</button>
                                                <a href="{{url('investor-list-delete/'.$list->id)}}" ><button type="button" class="form-submit-btn">Yes</button></a>
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