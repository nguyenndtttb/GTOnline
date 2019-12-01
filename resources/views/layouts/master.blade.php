<!DOCTYPE html>
<html lang="en">
@include('admin.partials.head')
<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        @include('admin.partials.header') 
        @include('admin.partials.aside')
        <div class="content-wrapper">
	        <div class="content">
	            <div class="container-fluid">
	            	@yield('content')
	            </div>
	        </div>
	    </div>
        @include('admin.partials.footer')
    </div>
</body>
    <script src="{{asset('js/ajaxscript.js')}}"></script>
</html>