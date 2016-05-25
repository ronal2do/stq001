<header class="header-main">
         <div class="row">
             <!--- Logo -->
             <h1 id="logo"> <div class="logocontainer"> <a href="/"> <span>#S</span> <span>O</span> <span>M</span> <span>O</span> <span>S</span> <span class="dif">S</span> <span class="dif">B</span> <span class="dif">C</span></a> 
              </div> </h1>
             <!-- Main Nav -->
             <nav role="navigation">
                 <ul>
                   @include('templates.menu')
                    <li>
                        <form action="{{ route('busca') }}" method="get" id="new-search" class="tip tooltipstered">
                                <input type="text" name="str" id="str" placeholder="Buscar...">
                                <button type="submit"><i class="fa fa-search"></i></button>
                        </form>
                    </li>
             </ul>
             </nav>
         </div>
     </header>