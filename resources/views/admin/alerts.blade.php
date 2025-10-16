@session('success')
    <div class="alert alert-success alert-dismissible fade show" role="alert" style="margin-top:70px; margin-left:800px">
        {{ $value }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endsession

@session('failure')
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ $value }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endsession
<!--notification js -->
    <script src="{{asset('dashboard/assets/plugins/notifications/js/lobibox.min.js')}}"></script>
	<script src="{{asset('dashboard/assets/plugins/notifications/js/notifications.min.js')}}"></script>
	<script src="{{asset('dashboard/assets/plugins/notifications/js/notification-custom-script.js')}}"></script>
	
