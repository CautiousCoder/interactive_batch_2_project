@extends('pages.layout.main')

@section('mainSection')
  <!-- # site main content
                        ================================================== -->
  {{-- <section id="content" class="s-content"> --}}

  <section class="s-pageheader pageheader">
    <div class="row">
      <div class="column xl-12">
        <h1 class="page-title">
          <span class="page-title__small-type text-pretitle">About</span>
          Hi, I'm Zahid
        </h1>

      </div>
    </div>
  </section> <!-- end pageheader -->

  <section class="s-pagecontent pagecontent">

    <div class="row pageintro">
      <table>
        <thead>
          <th>No.</th>
          <th>Name</th>
          <th>Description</th>
          <th>Completed</th>
        </thead>
        <tbody>
          @foreach ($experiences as $experience)
            <tr>
              <td style="max-width: 7px">{{ $loop->index + 1 }}.</td>
              <td>{{ $experience['name'] }}</td>
              <td>{{ $experience['description'] }}</td>
              <td>
                <div class="container">
                  <div class="box">
                    <div class="shadow"></div>
                    <div class="content">
                      <div class="percent" data-text="{{ $experience['name'] }}"
                        style="--num: {{ $experience['completed'] }}">
                        <div class="dot"></div>
                        <svg>
                          <circle cx="70" cy="70" r="70"></circle>
                          <circle cx="70" cy="70" r="70"></circle>
                        </svg>
                      </div>
                      <div class="number">
                        <h2>{{ $experience['completed'] }}<span>%</span></h2>
                      </div>
                    </div>
                  </div>
                </div>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div> <!-- end pageintro -->

  </section> <!-- pagecontent -->

  {{-- </section> <!-- end s-cta --> --}}
@endsection
