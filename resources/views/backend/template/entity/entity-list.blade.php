@extends('backend.inc.master')

@section('main-content')
<!--// Main Area Start //-->

<section class="panel-wrapper panel-full-width mt-resp-top">
    @if(Session::has('success-message-delete')) 
    <div class="alert alert-success" role="alert">
        {{Session::get('success-message-delete')}}
      </div>
     @endif 
    <div class="form-wrapper p-0">
        <div class="form-heading d-flex justify-content-between align-items-center">
            <h6>Entity List</h6>
            <a href="{{url('add-new-entry')}}" class="form-submit-btn">Add New</a>
        </div>
        <div class="container-fluid table-container-wrap">
            <div class="table-responsive">
                <table id="expense_datatable" class="table table-striped table-bordered table-data-table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Entity Name</th>
                            <th>EIN</th>
                            <th>Entity Docs</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody class="view-icon-table">
                      @php($i=1)
                      @foreach ($lists as $list)
                        <tr>
                            <td>{{$i++}}</td>
                            <td>{{$list->add_partner_entity_name}}</td>
                            <td>{{$list->add_partner_entity_ein}}</td>
                            <td>
                                <a href="{{$list->add_partner_entity_docs}}" class="table-url-link">Entity Docs Link</a>
                            </td>    
                            <td>
                                <a href="{{url('entity-view/'.$list->id)}}" class="table-view-btn">
                                    <i class="fa fa-eye"></i>
                                </a>  
                                <a href="{{url('entity-edit/'.$list->id)}}" class="table-edit-btn"><i class="fa fa-edit"></i></a>
                                <a href="#" class="table-delete-btn" data-bs-toggle="modal" data-bs-target="#delete-entity-modal-{{ $list->id }}">
                                    <i class="fa fa-trash"></i>
                                </a>           
                                
                                    <!-- model-->
                                    <div class="modal fade" id="delete-entity-modal-{{ $list->id }}" tabindex="-1" aria-labelledby="delete-entity-modal-{{ $list->id }}-Label" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                            <div class="modal-content ">
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i> </button>
                                                <div class="modal-body">
                                                    <div class="modal-trash-icon">
                                                        <i class="fa fa-trash"></i>
                                                    </div>
                                                    <p>
                                                        Are you sure want to delete  <br>Entity {{$list->entity_name}}	? 	
                                                    </p>
                                                </div>
                                                <div class="modal-footer form-btn-flex-between">
                                                    <button type="button" class="form-cancel-btn" data-bs-dismiss="modal">Cancel</button>
                                                    <a href="{{url('entity-delete/'.$list->id)}}"> <button type="button" class="form-submit-btn">Yes</button></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- model-->  
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