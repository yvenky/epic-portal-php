@extends('backend.inc.master')

@section('main-content')
        
        <!--// Main Area Start //-->
        <main class="main-area" role="main">
            <h1>Welcome to Epic Estates Dashboard</h1>
            <div class="breadcrumb-wrap">
                <div class="container-fluid p-0">
                    <div class="breadcrumb-links">
                        <ul>
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li><a href="{{ url('entity-list') }}">Entity List</a></li>
                            <li><a href="{{ url('add-new-entry') }}">Add New Entity</a></li>
                        </ul>
                    </div>
                </div> 
            </div>
        </main>
        <!--// Main Area End //-->


@endsection
      