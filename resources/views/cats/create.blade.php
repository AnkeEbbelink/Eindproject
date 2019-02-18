<!DOCTYPE html>
<html>
    <head>
        <title>Cats</title>
    </head>
    <body>
        <h1>Create a new cat</h1>

       <form method="POST" action="/cats">
            {{ csrf_field() }}
           <div>
               <input type="text" name="name" placeholder="Naam kat">
           </div>
          
           <div>
               <textarea name="description" placeholder="Poes/kater"></textarea>
            </div>

            <div>
                <button type="submit">Create</button>
            </div>
        </form>
        
    </body>
 
</html>