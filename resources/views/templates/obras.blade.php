
<section class="sect-posts cf bg-lightgrey xl">  
            <div class="row">
            @foreach( $posts as $p )
            
                    <article class="g-3 cols">
                      <a class="box" rel="external" href="/postagem/{{ $p->slug }}">
                        <div class="bg" style="background-image:url('img/upload/{{$p->foto}}');"></div>
                      
                        <div class="content" style=" background:rgba(0,0,0,0.5);">
                       
                            <h2 style="color:#fff;">{{ $p->categoria->name }}</h2>
                            <h2 style="color:#fff;font-family: 'Gotham-Book';">{{ $p->nome }}</h2>
                     
                        </div> 
                      </a>  
                    </article>
            @endforeach
            </div>
    </section>

