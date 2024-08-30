@extends('pages.layout.main')

@section('mainSection')
  <!-- # site main content
                                          ================================================== -->
  <section id="content" class="s-content">

    <section class="s-pageheader pageheader">
      <div class="row">
        <div class="column xl-12">
          <h1 class="page-title">
            <span class="page-title__small-type text-pretitle">My Blog</span>
            View Project
          </h1>
        </div>
      </div>
    </section>

    <section class="s-pagecontent pagecontent">

      <div class="row">
        @if (count($currentProject) > 0)
          <div class="title">
            <h3>{{ $currentProject[0]['name'] }}</h3>
          </div>
          <div class="description">
            <p>{{ $currentProject[0]['description'] }}</p>
          </div>
        @endif
      </div> <!-- end row -->


    </section>

  </section> <!-- s-content-->
@endsection
