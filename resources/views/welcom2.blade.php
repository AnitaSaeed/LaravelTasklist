<!DOCTYPE html>
<html>

   <head>
      <title>Password Input Control</title>
   </head>

   <body>
      <form action="/destination" method="post">
       @csrf
         عنوان: <input type = "text" name = "subject" />
         <br>
         توضيح: <input type = "textarea" name = "description" /></br>
         <input type = "submit" name = "submit" value = "Submit" />
      </form>
   </body>

</html>
