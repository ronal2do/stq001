<section class="sect-posts cf bg-lightgrey xl">  
            <div class="row">
            @foreach( $posts as $p )
                    <article class="@if( $posts->count() == 1 ) g-12 
                            @elseif ( $posts->count() == 2 ) g-6
                            @elseif ( $posts->count() == 3 ) g-4
                            @else ( $posts->count() == 4 ) g-3
                            @endif cols gray">
                      <a class="box" rel="external" href="/postagem/{{ $p->slug }}" style="min-height: 10em;box-shadow:none;">
                        <div class="bg" style="
                        @if ( $p->foto !== '' )
                        background-image: url('/img/upload/{{$p->foto}}'); background-size:cover;background-position: center;
                        @endif
                        background-color:{{ $rand }};
                        "></div>
                        <div class="content">
                            <h2 style="color:#fff;">{{ $p->categoria->name }}</h2>
                            <h2 style="color:#fff;font-family: 'Gotham-Book';">{{ $p->nome }}</h2>
                        </div> 
                      </a>  
                    </article>
            @endforeach
            </div>
    </section>

