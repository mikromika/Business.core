

{{-- inside layout.app --}}
{{-- add new dropdown as following  --}}
<li class="dropdown">   <!-- First menu -->
    <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
   menu-name-dropdown   <span class="caret"></span>
    </a>
    <ul class="dropdown-menu" role="menu">
       @include('layouts.logout-dropdown')  {{-- link dropdow menu as following --}}
       @include('layouts.posts-dropdown')
  </li>
</ul>
