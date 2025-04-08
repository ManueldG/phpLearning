<div>   
            
    {{--Str::title( 
        Str::before(
            Str::substr( request()->getRequestUri()." ",1,-1 )
            ,"?") 
        ) 
    --}}        
    {{ Str::title(Route::currentRouteName())  }}      

</div>
