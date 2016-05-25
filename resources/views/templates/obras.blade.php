
<section class="sect-posts cf bg-lightgrey xl">  
            <div class="row">
            @foreach( $posts as $p )
            
                    <article class="g-3 cols gray">
                      <a class="box" rel="external" href="/postagem/{{ $p->slug }}" style="min-height: 10em;box-shadow:none;">
                        <div class="bg" style="background-image:url('img/upload/{{$p->foto}}');"></div>
                      
                        <div class="content">
                       
                            <h2 style="color:#fff;">{{ $p->categoria->name }}</h2>
                            <h2 style="color:#fff;font-family: 'Gotham-Book';">{{ $p->nome }}</h2>
                     
                        </div> 
                      </a>  
                    </article>
            @endforeach
            </div>
    </section>

