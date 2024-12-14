@extends('admin.admin_layout.admin_header')
{{-- untuk menampilkan header --}}

@section('content')
{{-- isi conten lanjutan dari header --}}

        <div class="cards">
            <div class="card">
                <h3>Total Users</h3>
                <p>1,230</p>
            </div>
            <div class="card">
                <h3>Page Views</h3>
                <p>12,345</p>
            </div>
            <div class="card">
                <h3>Messages</h3>
                <p>85</p>
            </div>
            <div class="card">
                <h3>Revenue</h3>
                <p>$7,890</p>
            </div>
        </div>

{{-- bawah ini menampilkan footer --}}
@include('admin.admin_layout.admin_footer')

{{-- end conten --}}
@endsection