<style>
    
    #new-search {
        position: relative;
        width: 100px;
        -webkit-transition: all .25s ease-in-out;
        -moz-transition: all .25s ease-in-out;
        -ms-transition: all .25s ease-in-out;
        -o-transition: all .25s ease-in-out;
        transition: all .25s ease-in-out;
    }
     #new-search:hover,  #new-search:active  {
        position: relative;
        width: 300px;
    }
    #new-search input {      
        padding: 5px 30px 5px 10px;
        font-size: 14px;
        border: 1px solid #ccc;
        border-radius: 100px;
        font-weight: bold;
    } 
    #new-search button {
        position: absolute;
        right: 0px;
        top: 3px;
        background: none;
        border: none;
        color: green;
        color: rgba(0, 0, 0, 0.5);
    }  
</style>


<header class="header-main">
         <div class="row">
             <!--- Logo -->
             <h1 id="logo"> <div class="logocontainer"> <a href="/"> <span>#S</span> <span>O</span> <span>M</span> <span>O</span> <span>S</span> <span class="dif">S</span> <span class="dif">B</span> <span class="dif">C</span></a> 
              </div> </h1>
             <!-- Main Nav -->
             <nav role="navigation">
                 <ul>
                     
                   @include('templates.menu')

                    <li style="padding-right:20px;">   </li>

                    <li>
                        <form action="/" method="get" id="new-search" class="tip tooltipstered">
                                <input type="text" name="s" placeholder="Buscar..." value="">
                                <button type="submit"><i class="fa fa-search"></i></button>
                        </form>
                    </li>
             </ul>
             </nav>
         </div>
     </header>