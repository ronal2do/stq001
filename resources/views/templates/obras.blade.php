
<section class="sect-posts cf bg-lightgrey xl">  
            <div class="row">
            @foreach( $posts as $p )
                    <article class="g-3 cols">
                      <a class="box" rel="external" href="/postagem/{{ $p->slug }}">
                        <div class="bg" style="background-image:url('img/upload/{{$p->foto}}');"></div>
                      
                        <div class="content"><h1>{{ $p->nome }}</h1></div> 
                      </a>  
                    </article>
            @endforeach
            </div>
    </section>