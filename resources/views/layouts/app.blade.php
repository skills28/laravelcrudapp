@include('inc.header')
<div class="container">
@include('inc.messages')
<div class="row">
  <div class="col-xm-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xll-12">
       	  @yield('content')
  </div>

</div>
</div>
<br>
@include('inc.footer')
<script src="/js/app.js"> </script>
<script src="/js/bootstrap.js"> </script>
</body>
</html>
