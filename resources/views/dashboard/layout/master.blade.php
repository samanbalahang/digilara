
@include('dashboard.layout.header')
<div class="containerfluid px-3 bg-black">
    <div class="row">
        <div class="containerfluid px-3 bg-black">
          <div class="row">
             @include('dashboard.layout.aside')
             @yield("main")
          </div>
        </div>
      
    </div>
</div>
@include('dashboard.layout.footer')
