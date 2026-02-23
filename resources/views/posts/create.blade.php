<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Forma</h1>
   <form action="/posts" method="post">
    @csrf
        <div>
            <label for="title">Virsraksts </label>
            <input type="text" name="title" id="title" required />
        </div>

        <div>
            <label for="content">Saturs</label>
            <textarea id="content" name="content"></textarea>
        </div>

        <div>
            <input type="submit" value="Submit" />
        </div>

    </form>
    
</body>
</html>